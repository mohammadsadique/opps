<?php


class first {
    function run() {
        return 'Firt class';
    }
}

class inheritance extends first {
    function message() {
        return 'This is a message of inherit class.';
    }
}

$obj = new inheritance();
echo $obj->run() . "<br>";
echo $obj->message();



/**
 * 
 * Note:-
 * 
 * 
 * you can not extends multiple class "class inheritance extends first , second"
 *  class inheritance extends first , second {
 * 
 */