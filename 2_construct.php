<?php

class className {
    public $name;

    function __construct($name){
        $this->name = $name;
    }
}

$obj = new className('Test name');
$output = $obj->name;
echo $output;