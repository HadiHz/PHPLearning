<?php
//echo __FILE__;
require_once "../db.php";
class User extends Db{

    public function __construct()
    {
        $this->table = "users";
    }

}