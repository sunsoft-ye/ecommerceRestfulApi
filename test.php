<?php 

include './connect.php';
$table = "users";
// $name = filterRequest("namerequest");
$data = array( 
"users_name" => "mohammed",
"users_password" => "M.ohad",
"users_email" => "mohammed@gmail.com",
"users_phone" => "773531171",
"users_verfiycode" => "666230",       
);
$count = insertData($table , $data);