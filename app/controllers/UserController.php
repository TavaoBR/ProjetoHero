<?php 
namespace app\controllers;
require_once("vendor/THB/controller/Action.php");
use THB\controller\Action;
class UserController extends Action
{
    //Function que estejam dentro da pasta user em views
    public function login()
    {
        $this->reder2('login');
    }

    public function cadastro()
    {
        $this->reder2('cadastro');
    }

   
}