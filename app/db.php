<?php 

namespace app;

use PDO;
use PDOException;

class Conexao
{
    public function pegarDB()
    {

        try {
            $conexao = new PDO(
                'mysql:host=localhost;dbname=mvc;charset=utf8',
                'James',
                'Guga1234%!'
            );
            return $conexao;

        } catch (PDOException $error) {
            echo $error;
        }

    }
}