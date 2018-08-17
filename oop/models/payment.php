<?php
//echo __FILE__;
require_once "../db.php";
class Payment extends Db{

    public function __construct()
    {
        $this->table = "payments";
    }

    public function get_all_payments_by_user_id($user_id)
    {
        return "SELECT * FROM {$this->table} WHERE payment_user_id = {$user_id}";
    }
}