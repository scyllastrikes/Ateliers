<?php   
include_once('../Model/client.php');
$client1 = new Client();
$client1->lastName = "Doe";
$client1->firstName = "John";
$client1->password = "123456";
$client1->phone = "12672823";
$client1->address = "123 Rue De La Liberte ";
$client1->DoB = "1999-01-01";

echo "Using var_dump():<br>";
var_dump($client1);

echo "<br>Using show() method:<br>";
$client1->show();