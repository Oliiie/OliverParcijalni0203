<?php

namespace DB;
use PDO;
use PDOException;

class Db {
    private static $instance = null;
    private $conn;

    private $host;
    private $dbname;
    private $user;
    private $pass;

    private function __construct($parametriSpajanja)
     {
        $this->host = $parametriSpajanja["host"];
        $this->dbname = $parametriSpajanja["dbname"];
        $this->user = $parametriSpajanja["user"];
        $this->pass = $parametriSpajanja["pass"];
        
        $this->conn = new PDO ("$this->host;dbname=$this->dbname", $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     }

    public static function getInstance($polje)
     {
        if(!self::$instance) 
        {
          self::$instance = new Db($polje);
        } 
        return self::$instance;       
    }

    public function getConnection()
    {
      return $this->conn;
    }

    public function login()
    {
      try {
        $stmt = $this->conn->prepare("INSERT INTO users (nickname) VALUES (:nickname)");
        $stmt->bindParam(':nickname', $login);
        $stmt->execute();
        return true;
      } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
    }
  
    public function chatchat()
    {
      try {
        $stmt = $this->conn->prepare("SELECT id, message FROM chat");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt-> fetchAll();
      } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        die();
      }
    }
  
  
    public function send($send)
    {
      try {
        $stmt = $this->conn->prepare("INSERT INTO chat (message) VALUES (:message)");
        $stmt->bindParam(':message', $send);
        $stmt->execute();
        return true;
      } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
    }
  }
  