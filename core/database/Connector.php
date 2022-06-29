<?php

Class Connector {
    public static function make ($config) {
        try {
            return new PDO($config['connection'], $config['user'], $config['pass']);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}