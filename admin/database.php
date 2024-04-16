<?php

class Database {

private static $dsn='mysql:host=localhost;dbname=burger_code; charset=utf8';
private static $user='root';
private static $pass='root';

private static $connection = null;

public static function connect ()
{
    try {
        self::$connection = new PDO (self::$dsn, self::$user, self::$pass);
        self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        die('Erreur : '.$e->getMessage());
    }
    return self::$connection;
}
public static function disconnect (){
    $connection = null;
}

}
Database::connect();
?>