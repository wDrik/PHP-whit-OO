<?php

namespace Source;


interface IServiceProduct
{
    public function select();
    public function find($id);
    public function insert();
    public function update();
    public function delete($id);
}