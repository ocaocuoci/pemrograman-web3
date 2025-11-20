<?php
require_once 'Database.php';

class Crud extends Database {
    
    // CREATE
    public function create($jabatan, $keterangan) {
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ($1, $2)";
        $result = pg_query_params($this->conn, $query, array($jabatan, $keterangan));
        return $result;
    }
    
    // READ ALL
    public function read() {
        $query = "SELECT * FROM jabatan ORDER BY id";
        $result = pg_query($this->conn, $query);
        return pg_fetch_all($result);
    }
    
    // READ BY ID
    public function readById($id) {
        $query = "SELECT * FROM jabatan WHERE id = $1";
        $result = pg_query_params($this->conn, $query, array($id));
        return pg_fetch_assoc($result);
    }
    
    // UPDATE
    public function update($id, $jabatan, $keterangan) {
        $query = "UPDATE jabatan SET jabatan = $1, keterangan = $2 WHERE id = $3";
        $result = pg_query_params($this->conn, $query, array($jabatan, $keterangan, $id));
        return $result;
    }
    
    // DELETE
    public function delete($id) {
        $query = "DELETE FROM jabatan WHERE id = $1";
        $result = pg_query_params($this->conn, $query, array($id));
        return $result;
    }
}
?>