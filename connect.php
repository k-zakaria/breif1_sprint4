<?php

class Database {
    protected $servername = "localhost"; 
    protected $username = "root";
    protected $password = "";
    protected $dbname = "gesarticle";
    protected $conn;

    public function connect() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec('SET NAMES "UTF8"');
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


    
}


// $database = new Database();
// $conn = $database->getConnection();

?>
