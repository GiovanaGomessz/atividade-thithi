<?php

class database {
    private $host = "localhost";
    private $port = "3306";
    private $dbname = "produtos_adm_thiago";
    private $user = "root";
    private $password = "";

    public function conectar(){
        $url = "mysql:host=$this->host;port=$this->port;dbname=$this->dbname"; 
        $conn = new PDO($url, $this->user, $this->password);
        return $conn;
    }
}