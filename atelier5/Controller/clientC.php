<?php
include_once('../Model/client.php');
include_once('../View/inscription.php');

class ClientC {
    public function showClient($client) {
        echo "Client Information:<br>";
        echo "Last Name: " . $client->lastName . "<br>";
        echo "First Name: " . $client->firstName . "<br>";
        echo "Password: " . $client->password . "<br>";
        echo "Phone: " . $client->phone . "<br>";
        echo "Address: " . $client->address . "<br>";
        echo "Date of Birth: " . $client->DoB . "<br>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $DoB = $_POST['DoB'];

    $client1 = new Client($lastName, $firstName, $password, $phone, $address, $DoB);
    echo "Using var_dump():<br>";
    var_dump($client1);
    echo "<br>Using showClient() method:<br>";
    $clientController = new ClientC();
    $clientController->showClient($client1);
}