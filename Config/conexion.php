<?php
class Conexion{

    public static function conectar()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "bdworldexpress";
        $link = mysqli_connect($host, $user, $pass) or die("ERROR 1: NO SE PUDO ABRIR LA BASE DE DATOS".mysqli_error($link));

        mysqli_query($link, "SET NAMES 'utf8'");

        mysqli_select_db($link, $dbname) or die("ERROR 2: NO SE PUDO SELECCIONAR LA BASE DE DATOS".mysqli_error($link));
        return $link;
    }
}
