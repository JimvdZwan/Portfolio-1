<?php

class Connection
{
    public static function make()
    {
        $host = 'localhost';
        $dbname = 'Portfolio';
        $user = 'root';
        $password = '';

        $dsn = "mysql:host=$host;dbname=$dbname";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            return new PDO($dsn, $user, $password, $options);
        }catch (PDOException $e){
            throw new PDOException($e->getMessage());
        }
    }
}