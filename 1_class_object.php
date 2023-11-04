<?php

class className{
    public $method;

    function property(){
        return $method = 10;
    }
}

$object = new className();
$output = $object->property();
echo $output;