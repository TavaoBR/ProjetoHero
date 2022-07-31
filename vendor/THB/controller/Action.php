<?php 

namespace THB\controller;

abstract class Action
{
  //render raiz
  public function render($view)
  {
      include_once("app/views/$view.phtml");
  } 





    //render user
    public function reder2($view)
    {
        $classAtual = get_class($this);
        $classAtual = str_replace('app\\controllers\\', '', $classAtual);
        $classAtual = strtolower(str_replace('Controller', '', $classAtual));
        include_once("app/views/$classAtual/$view.phtml");
    }
}