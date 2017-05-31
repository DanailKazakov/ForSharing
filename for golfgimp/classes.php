<?php

class person {
    private $name;
    private $email;
    private $role;

    function __construct($inputName, $inputEmail, $inputRole) {
        $this->setName($inputName);
        $this->setEmail($inputEmail);
        $this->setRole($inputRole);
    }

    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getRole() {
        return $this->role;
    }

    function setName($inputName){
        if (empty($inputName)){
            throw new Exception('You have not entered a name ');
        }
        $this->name = $inputName;
    }

    function setEmail($inputEmail){
        if (empty($inputEmail)){
            throw new Exception('You have not entered an email ');
        }
        $this->email = $inputEmail;
    }

    function setRole($inputRole){
        if (empty($inputRole)){
            throw new Exception('You have not selected a role ');
        }
        $this->role = $inputRole;
    }
}
