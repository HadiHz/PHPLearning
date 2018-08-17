<?php

class Db{

    public $table;

    public static $prefix;

    public function all(){
        return "SELECT * FROM {$this->table}";
    }

    private function sort(){}

    public function delete($id)
    {
        return "DELETE FROM {$this->table} WHERE id= {$id}";
    }

    public function find($id , $columns = null)
    {
        $columns = !is_null($columns)? implode(',',$columns): '*';
        echo "SELECT {$columns} FROM {$this->table} WHERE id = {$id}";
    }

    public static function export(){
        self::$prefix;
        static::$prefix;  // they are different.
    }
}

$connection = new Db();
$connection->table = "users";
$connection->find(3,array('id','name'));

Db::export();