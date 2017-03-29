<?php

namespace Source;


class ServiceProduct implements IServiceProduct
{
    private $db;
    private $product;

    public function __construct(IConn $db, IProduct $product)
    {
        $this->db = $db->connect();
        $this->product = $product;
    }

    //Select on database
    public function select()
    {
        $query  = "SELECT * FROM `products`";
        $stmt   = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function save()
    //Select a single record in the database
    public function find($id)
    {
        $query = "SELECT * FROM  `products` WHERE `id`=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $id);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    //Insert on database
    public function insert()
    {
        $query  = "INSERT INTO `products` (`name`, `description`) VALUES (:name, :description)";
        $stmt   = $this->db->prepare($query);
        $stmt->bindValue(":name", $this->product->getName());
        $stmt->bindValue(":description", $this->product->getDescription());
        $stmt->execute();

        return $this->product->getName();

    }

    //Update on database
    public function update()
    {
        $query  = "UPDATE `products` SET `name`=:name, `description`=:description WHERE `id`=:id";
        $stmt   = $this->db->prepare($query);
        $stmt->bindValue(":id", $this->product->getId());
        $stmt->bindValue(":name", $this->product->getName());
        $stmt->bindValue(":description", $this->product->getDescription());
        $stmt->execute();

        return $this->product->getName();
    }

    //Delete on database
    public function delete($id)
    {
        $query  = "DELETE FROM `products` WHERE `id`=:id";
        $stmt   = $this->db->prepare($query);
        $stmt->bindValue(":id", $id);

        return $stmt->execute();
    }

}