<?php

namespace App\Models\Objects;

use PDO;
use Exception;

class ClickhouseDB {

    public $db;

    public function __construct($credentials) {
        $host="127.0.0.1"; $port=9004;
        try {
            $this->db = new PDO('mysql:host='.$host.';port='.$port, $credentials->get("username"), $credentials->get("password"));
        } catch(Exception $e){}
    }


    public function isConnected(){
        return (!$this->db==NULL);
    }

    /**
     * PDO Functions
     */
    public function query(...$args){
        return $this->db->query(...$args);
    }

    public function prepare(...$args){
        return $this->db->prepare(...$args);
    }
}