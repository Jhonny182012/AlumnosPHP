<?php
class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=alumnos-jhonatan.mysql.database.azure.com;dbname=addalumno;charset=utf8', 'jmdominguez@alumnos-jhonatan', 'orejitasxD182012');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
