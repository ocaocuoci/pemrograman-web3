<?php
class Database {
    private $host = "localhost";
    private $username = "postgres";
    private $password = "1";
    private $database = "db_pemrogweb";
    private $port = "5432"; // Port default PostgreSQL
    public $conn;

    public function __construct() {
        $connection_string = "host={$this->host} port={$this->port} dbname={$this->database} user={$this->username} password={$this->password}";
        
        $this->conn = pg_connect($connection_string);
        
        if (!$this->conn) {
            die("Koneksi gagal: " . pg_last_error());
        }
    }
    
    public function __destruct() {
        if ($this->conn) {
            pg_close($this->conn);
        }
    }
}
?>