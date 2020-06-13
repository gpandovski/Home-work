<?php

class Person {
    public $name;
    public $job;
    public $age;

    function __constructor($name, $job, $age) {
        $this->name = $name;
        $this->job = $job;
        $this->age = $age;
    }

    public function changeJob($newJob) {
        $this->job = $newJob;
    }

    public function happyBirthday() {
        $this->age++;
    }
}

$tom = new Person;
$tom->name = 'Tom';
$tom->job = 'Button-Pusher';
$tom->age = 34;

$john = new Person;
$john->name = 'John';
$john->job = 'Level-Puller';
$john->age = 41;
 
echo "<pre>";
var_dump($tom);
echo "</pre> <br>";
echo "<pre>";
var_dump($john);
echo "</pre> <br>";

$tom->changeJob('Box-Mover');
$tom->happyBirthday();
$john->happyBirthday();

echo "<pre>";
var_dump($tom);
echo "</pre> <br>";
echo "<pre>";
var_dump($john);
echo "</pre> <br>";