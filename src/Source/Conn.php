<?php

/**
 * Created by PhpStorm.
 * User: wdrik
 * Date: 22/03/2017
 * Time: 19:39
 */

namespace Source;

class Conn implements IConn
{
    private $dsn;
    private $user;
    private $pass;

    public function __construct($dsn, $user, $pass)
    {
        $this->dsn  = $dsn;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect()
    {
        return new \PDO($this->dsn,$this->user,$this->pass);
    }
}