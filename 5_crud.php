<?php

class crud {
    public $table;
    public $key;
    public $value;

    function __construct($table , $key , $value){
        $this->table = $table;
        $this->key = $key;
        $this->value = $value;
    }

    function insert(){
        return "INSERT INTO {$this->table} ({$this->key}) VALUE ({$this->value})";
    }
}

$table = 'table';
$key = 'column';
$value = 'value';
$obj = new crud($table , $key , $value);
$output = $obj->insert();
echo $output;