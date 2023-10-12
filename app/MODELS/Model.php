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

    protected $table;

    protected $alertas = [];

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

    //Consultas

    public function all(){



        $sql = "SELECT * FROM {$this->table}";   
        return $this->query($sql)->get();
    }

    public function find($id){
        $sql = "SELECT * FROM {$this->table} WHERE id = {$id}";   
        return $this->query($sql)->first();
    }

    public function findbyname($name){
        $sql = "SELECT * FROM {$this->table} WHERE name = '{$name}'";   
        return $this->query($sql)->first();
    }

    public function where($column, $operator,$value = null){
        if(is_null($value)){
            $value = $operator;
            $operator = '=';
        }
        $sql = "SELECT * FROM {$this->table} WHERE {$column} {$operator} '{$value}'";   
        return $this->query($sql);
    }

    public function create($data){
        $colums = array_keys($data);
        $colums = implode(', ', $colums);
        $values = array_values($data);
        $values = "'". implode("','", $values) . "'";

        $sql = "INSERT INTO {$this->table} ({$colums}) VALUES ({$values})";

        $this->query($sql);

        $insert_id = $this->connection->insert_id;

        return $this->find($insert_id);

    }

    public function update($id, $data){
        $fields = [];

        foreach ($data as $key => $value){

            $fields[] = "{$key} = '{$value}' ";
        
        }

        $fields = implode(', ', $fields);

        $sql = "UPDATE {$this->table} SET {$fields} WHERE id = {$id}";

        $this->query($sql);

        return $this->find($id);


    }

    public function delete($id){
        $sql = "DELETE FROM {$this->table} WHERE id = {$id}";

        $this->query($sql);
    }

    public function update_relation($id, $column_name,$table_update){
        $sql = "UPDATE {$table_update} SET {$column_name} = NULL WHERE {$column_name} = $id";

        $this->query($sql);

    }

    public function delete_relation($id, $column_name,$table_delete){
        $sql = "DELETE {$table_delete} WHERE {$column_name} = $id";

        $this->query($sql);

    }

}