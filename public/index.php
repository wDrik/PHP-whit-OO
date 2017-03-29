<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";

//Implements the select method
$list = $container['ServiceProduct']->select();

require_once "list.product.php";


//Implements the insert method
//Instantiating an object from class product
//$product = $container['product']->setName("jQuery")
//                                ->SetDescription("Course of jQuery");
//
//$list = $container['ServiceProduct']->insert();
//echo $list." seu produto foi cadastrado com sucesso!";


//Implements the update method
//Instantiating an object from class product
//$product = $container['product']->setId(11)
//                                ->setName("PHP")
//                                ->SetDescription("Course of PHP");
//
//$list = $container['ServiceProduct']->update();
//echo $list." seu produto foi atualizado com sucesso!";



//Implements the delete method
//$list = $container['ServiceProduct']->delete(5);
//var_dump($list);


//Implements the find method
//$list = $container['ServiceProduct']->find(4);
//var_dump($list);