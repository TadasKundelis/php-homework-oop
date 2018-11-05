<?php namespace Nfq;
class Guest {
    
    private $firstName;
    private $lastName;

    public function __construct(string $firstName, string $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __toString() {
        echo "first name: " . $this->firstName . "<br>" . 
             "last name: "   . $this->lastName;
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }
}

?>