<?php

namespace App\Models;

use mysqli;

class Contact
{
    protected $db_host = 'localhost';
    protected $db_user = 'root';
    protected $db_pass = '';
    protected $db_name = 'church_mvc_db';

    protected $connection;

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
}


