<?php

class Connection {
    private $host       = 'localhost';
    private $user       = 'homestead';
    private $password   = 'secret';
    private $database   = 'ca-php';

    public function conn() {
        return mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }
}