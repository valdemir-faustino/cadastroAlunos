<?php
class conexao{
    private static $host = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $dbname = "cAluno";

    public static function getConn(){
        $conn = new mysqli(self::$host, self::$username, self::$password, self::$dbname);

        if($conn->connect_error){

            die("Falha na conexão" . $conn->connect_error);
        }
        $conn->set_charset("utf8");
        return $conn;
    }
}

?>
