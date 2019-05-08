<?php
 
 class Dbconnection{
    private $dsn = "mysql:host=localhost;dbname=myDatabase;charset=utf8mb4";
    private $options = array(
      PDO::ATTR_EMULATE_PREPARES   => false,
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
    );
    try {
      $pdo = new PDO($dsn, "username", "password", $options);
    } catch (PDOException $e) {
      error_log($e->getMessage());
      exit('Something weird happened'); //something a user can understand
    }
 }

?> 