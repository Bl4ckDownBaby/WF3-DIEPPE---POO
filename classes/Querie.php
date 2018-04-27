<?php

namespace Tools;


class Querie
{
    private $dsn = "mysql:dbname=easywedding;host=localhost;charset=utf8";

    public function __construct()
    {

    }

    public function selectMethod($sql)
    {

    }

    public function __destruct()
    {
        unset($this->db):
    }
}