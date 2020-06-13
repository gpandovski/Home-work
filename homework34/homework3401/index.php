<?php

Class Person {
    public $name;
    public $age;

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

$john = new Person;
$john->name = 'John';
$john->age = 34;

var_dump($john);