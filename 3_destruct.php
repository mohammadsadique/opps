<?php


class className {
    public $name;
    
    function __construct($name){
        $this->name = $name;
    }

    function __destruct(){
        echo 'What is your '. $this->name.'?';
    }
}

$obj = new className('name');
