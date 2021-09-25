<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO("sqlsrv:server = tcp:parcial22021.database.windows.net,1433; Database = parcial2", "parcial22021", "parcial2#");

        // $pdo = new PDO('mysql:host=parcial22021.database.windows.net;dbname=parcial22021;charset=utf8', 'parcial22021', 'parcial2#');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
