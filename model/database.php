<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=parcial22021.database.windows.net;dbname=parcial2;charset=utf8', 'parcial22021', 'parcial2#');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
