<?php   
class Client {
    public $lastName;
    public $firstName;
    public $password;
    public $phone;
    public $address;
    public $DoB;
    
    public function __construct($lastName, $firstName, $password, $phone, $address, $DoB) {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->password = $password;
        $this->phone = $phone;
        $this->address = $address;
        $this->DoB = $DoB;
    }
    
    public function show() {
        echo "Last Name: " . $this->lastName . "<br>";
        echo "First Name: " . $this->firstName . "<br>";
        echo "Password: " . $this->password . "<br>";
        echo "Phone: " . $this->phone . "<br>";
        echo "Address: " . $this->address . "<br>";
        echo "Date of Birth: " . $this->DoB . "<br>";
    }
}