<?php

class HomeController
{

    //HomeController@showHome
    public function showHome()
    {
        require_once "View/main";
        //require_once "./View/main";
        //return true;/* "Hola mundo - Asi llamo una funcion dentro de un controllador"; */

    }

    /* 
  C:\laragon\www\DigitalCode\MVP\View\main.php
 */

    //HomeController@showAbout
    public function showAbout()
    {
        return "Hola mundo - Asi llamo una funcion dentro de un controllador";
    }
    //HomeController@showAbout

    public function digitalcode()
    {
        define('__ROOT__', dirname(dirname(__FILE__)));
        //require_once(__ROOT__ . '/config.php');
        require_once(__ROOT__ . '/View/login/digitalcode.php');
        exit;
        //require_once "../View/login/digitalcode.php";
        //return "Hola mundo - Asi llamo una funcion dentro de un controllador";
        //exit;
    }
}
