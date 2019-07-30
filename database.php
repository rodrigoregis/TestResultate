<?php

class db {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'db_resultate';
    
    public function connect_mysql() {
       $conn = mysqli_connect($this->host, $this->user, $this->password, $this->dbname);

        mysqli_set_charset($conn, 'utf8');

        if(mysqli_connect_errno()) {
            echo 'Error ao tentar se conectar com o banco de dados: '.mysqli_connect_error();
        }

        return $conn;
    }
}

?>