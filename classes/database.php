<?php 
class Database {

//variabili connessione
private $host = "localhost";
private $dbName = "nomedb";
private $username = "root";
private $password = "";

public $conn; 

//metodi di connessione
public function dbConnection() {
    try{
        $this->conn = new PDO("mysql:host=" .$this->host . ";dbname=" . $this->dbName, $this->username, $this->password, array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => " SET NAMES utf8"
        ));
    } catch (PDOException $exception) {
        echo "Connessione errori: " . $exception->getMessage();
    }
    return $this->conn; 
}

}
