<?php

class db {
    private $host = 'localhost';
    private $port = '8080';
    private $user = 'root';
    private $password = '';
    private $database = 'valida';

    public function conecta_mysql(){
        $con = mysqli_connect($this->host, $this->user, $this->password, $this->database, $this->port);

        mysqli_set_charset($con, 'utf8');

        if (mysqli_connect_errno()) {
            echo 'Error to try connect to database ' . mysqli_connect_error();
        }

        return $con;
    }
}
?>