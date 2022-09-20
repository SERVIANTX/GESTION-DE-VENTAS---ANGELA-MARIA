<?php
class conexion{

    static public function conectar()
    {
        $con = new PDO('mysql:host=localhost; dbname=bd_minimarket', 'root','');
        $con->exec("set names utf8");
        return $con;
    }
}
