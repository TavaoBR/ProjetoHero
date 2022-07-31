<?php 
namespace app\controllers;
require_once("vendor/THB/controller/Action.php");
use THB\controller\Action;
class BoysController extends Action
{
    //Function que estejam dentro da pasta raiaz views
    public function home()
    {
      $this->render('home');
    }


}