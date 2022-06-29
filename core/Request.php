<?php

class Request {


    public static function uri()
    {
        return str_replace('/web/', '', $_SERVER['REQUEST_URI']);

    }
}