<?php 

namespace App\Models;

use mysqli;

class Model{

    protected $db_host = DB_HOST;
    protected $db_user = DB_USER;
    protected $db_pass = DB_PASS;
    protected $db_name = DB_NAME;

    protected $connection;
    protected $query;

    public function __construct()
    {
        $this->connection = $this->connect();
    }

    public function connect()
    {
        $connection = new mysqli(
            $this->db_host,
            $this->db_user,
            $this->db_pass,
            $this->db_name
        );

        if ($connection->connect_error) {
            die('Error de conexión: ' . $connection->connect_error);
        }

        return $connection;
    }


    public function query($sql){
        $this->query = $this->connection->query($sql);
   
        return $this;
    }

    public function first(){
        return $this->query->fetch_assoc();
    }

    public function get(){
        return $this->query->fetch_all(MYSQLI_ASSOC);
    }
}