<?php
namespace Account;
use \PDO;

class DB extends PDO {
    private $host; 
    private $database; 
    private $username; 
    private $password; 

    public function __construct() {
        $this->host = 'localhost'; 
        $this->database = 'worldfirst'; 
        $this->username = 'homestead'; 
        $this->password = 'secret'; 
        $dns = 'mysql:dbname='.$this->database.";host=".$this->host; 
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        parent::__construct( $dns, $this->username, $this->password, $options); 
    }
}