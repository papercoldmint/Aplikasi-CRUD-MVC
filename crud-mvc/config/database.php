<?php
class Database {
    private $host = "localhost";
    private $db_name = "crud_mvc"; // nama database yang kamu buat tadi
    private $username = "root";    // username DBeaver kamu (biasanya 'root' di lokal)
    private $password = "terserah";        // password MariaDB kamu (kosong kalau belum diset)
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>