<?php

namespace Source;


interface IServiceProduct
{
    public function select();
    public function save();
    public function update();
    public function delete();
}