<?php

namespace App\Models\Objects;

class Credentials {

    private $serverID;
    private $username;
    private $password;

    public function __construct($serverID, $username, $password) {
        $this->serverID=$serverID;
        $this->username=$username;
        $this->password=$password;
    }

    public function get($name){
        return $this->$name;
    }

}