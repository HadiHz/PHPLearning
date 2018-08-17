<?php

function is_user_logged_in(){
    return true;
}

function get_users(){
//    return null;
    return array(
        array('id' => 1, 'name' => 'ali' , 'email' => 'ali@gmail.com'),
        array('id' => 2, 'name' => 'ahamd' , 'email' => 'ahamd@gmail.com'),
        array('id' => 3, 'name' => 'hasan' , 'email' => 'hasan@gmail.com'),
        array('id' => 4, 'name' => 'hamed' , 'email' => 'hamed@gmail.com'),
        array('id' => 5, 'name' => 'saam' , 'email' => 'saam@gmail.com')

    );
}