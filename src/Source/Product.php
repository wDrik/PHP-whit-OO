<?php

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