<?php

require_once __DIR__ . "/../config/database.php";

class CategoriaModel {

    private $conn;
    private $table = "categoria";

    public function __construct() {
        $db = new database();
        $this->conn = $db->conectar();
    }

    public function listar(){
        $query = "SELECT*FROM $this->table";

        $stmt=$this->conn->prepare($query);
        $stmt-> execute();

        return $stmt->fetchALL();
    }

    public function buscarPorId($id) {
        $query = "SELECT*FROM $this->table WHERE id = :id";

        $stmt=$this->conn->prepare($query);
        $stmt-> bindParam(':id', $id);
        $stmt-> execute();

        return $stmt->fetch();
    }
}

?>