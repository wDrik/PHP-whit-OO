<?php

/**
 * Created by PhpStorm.
 * User: wdrik
 * Date: 20/03/2017
 * Time: 22:16
 */

namespace Source;

class Product
{
    private $db;

    public function __construct(IConn $db)
    {
        $this->db = $db->connect();
    }

    public function listing()
    {
        $query = "Select * from products";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}