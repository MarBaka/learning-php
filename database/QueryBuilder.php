<?php

class QueryBuilder {


    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /*  select() returns all rows when given only class and table and can also
    apply 1 parameter to the query; could be done easier by making select() and
    select_all() functions, but I decided it looks better this way      */
    public function select($table, $class, $arg_declare = null, $arg_key = null, $arg_name = null)
    {
        $statement = $this->pdo->prepare("select * from $table");

        if (is_null($arg_declare) == false) {

            $arg_holder =  ":$arg_key";
            $statement = $this->pdo->prepare("select * from $table " . "where $arg_key=$arg_holder");
            $statement->execute([$arg_holder => $arg_name]);
        } else {
            $statement->execute();
        }

        $result = $statement->fetchAll(PDO::FETCH_CLASS, "$class");

        if (count($result) == 1) {
            return $result[0];
        } else {
            return $result;
        }

    }
}