<?php 
namespace app\models;

use PDO;

class Produto
{
    protected $conexao;

    public function __construct(PDO $conexao)
    {
        $this->conexao = $conexao;
    }
}