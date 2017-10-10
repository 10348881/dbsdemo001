<?php

class Person {
var $personID;
var $firstName;
var $lastName;
}
$items= array();

for($i=0; $i<10; $i++) {
$personRecord= new Person();
$personRecord->firstName="Name $i";
$personRecord->lastName="lastName $i";
$items[$i]= $personRecord;

header('Content-Type: application/json');
$jsonOutput= json_encode($items);
echo $jsonoutput;
}
