<?php

    class Conexion{
        public static function conect(){
            $mysql = new mysqli('localhost','root','','tiendavirtual');
            $mysql->set_charset('utf8');
            if(mysqli_connect_errno()){
                echo "error en la conexion: ".mysqli_connect_errno();
            }else{
                echo "conexion exitosa";
            }
            return $mysql;
        }
    }
    print_r(Conexion::conect());

?>