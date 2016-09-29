<?php

//This is how you print text in php
echo 'hello world';
//This is how you store a value in a variable
$myvar = 'Some text I want to store in a variable';

//This is an example of the difference between single quotes and double quotes
echo '$myvar';
echo '<br>';
echo "$myvar";

//This is an example of php arrays

$myarray = array();
$myarray[] = 'some value 1';
$myarray[] = 'some value 2';
$myarray[] = 'some value 3';

print_r($myarray);
//This is an example of an associative array and a nested array
$myAssoc = array('value1' => $myarray, 'value2' => $myarray);

print_r($myAssoc);
//This is how you print r/ access an array by naming the key you want to acess
print_r($myAssoc['value1']);

//This is how you define a class in php
class myclass{
public $myPublic;
private $myPrivate;
protected $myProtected;

public fuction __construct() {

$this->myPublic = 1;
$this->myPrivate = 2;
$this->myProtected = 3;
}

}

//This is how you in
$obj = new myclass;

print_r($obj);


?>

