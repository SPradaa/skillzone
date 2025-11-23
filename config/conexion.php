<?php

class Database
{

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'skillzone';

    function conectar()
    {
        try {
            $conn = new PDO(
                "mysql:host={$this->host};dbname={$this->database}",
                $this->username,
                $this->password
            );

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo ('Conexion Exitosa');
            return $conn;

        } catch (PDOException $e) {
            echo ("Error de conexion" . $e->getMessage());
            return null;

        }
    }
}
?>