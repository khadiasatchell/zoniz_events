<?php 
    //Development Connection
    //Remote Database Connection
    $host = 'remotemysql.com';
    $db = 'LAll1wwMT2';
    $user = 'LAll1wwMT2';
    $pass = 'a1uzWJqbnX';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        //  echo 'Hello Database';
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);
   
    $user->insertUser("admin","password");
?>