<?php
// database credentials. assuming you are running MySQL
// server with default setting (user 'root' with no password)

$dsn = 'mysql:host=localhost;dbname=tide';

$username = 'root';
$password = '';
$options = [];

// creating sql connection
try{

    $connection = new PDO($dsn, $username, $password, $options);
   
}
catch(PDOException $e){

}
