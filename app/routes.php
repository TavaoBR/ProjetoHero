<?php


namespace app;
use THB\init\Boot;
require_once("vendor/THB/init/init.php");
class Route extends Boot{

	protected function iniRoute()
    {
		//Index principal Inicio
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'boysController',
            'action' => 'home'
        );

		//Index principal Fim

		//Pasta User Inicio
        $routes['login'] = array(
            'route' => '/login',
            'controller' => 'userController',
            'action' => 'login'
        );

		$routes['cadastro'] = array(
            'route' => '/cadastro',
            'controller' => 'userController',
            'action' => 'cadastro'
        );

		//Pasta User Fim

        $this->setRoutes($routes);
    }


	
}