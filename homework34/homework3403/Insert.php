<?php

class Insert extends Connection {
    public $name;
    public $username;
    public $email;
    public $browser;
    public $created;

    public function insertIntoDB() {
        $sql = "INSERT INTO users (name, username, email, browser, timestamp) VALUES('$this->name', '$this->username', '$this->email', '$this->browser', '$this->created');";
        
        $conn = new Connection;
        mysqli_query($conn->conn(), $sql);
    }
}