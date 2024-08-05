<?php

/* require_once "route/router.php"; */

/* route('/', function (){
    return "Hello World";
}); */

/* route('/index', function(){
    return "Hello form the about route";
}); */

/* 
$action = $_SERVER['REQUEST_URI'];
dispatch($action);
*/

require 'route/routing.php';
require 'MVP/Presenter/HomeController.php';

$router = new Routing();
$home = new HomeController();

$uriGet = $_SERVER['REQUEST_URI'];

$route = str_replace("/DigitalCode", '', $uriGet);

$home->digitalcode('/', function () {
    echo "Hola Mundo - Esta es una ruta simple";
    //$home->showHome();
    //$this->home = new HomeController();
    //$router = $router->showHome(); 
});

/* 
require 'route/routing.php';
require 'MVP/Presenter/HomeController.php';

$router = new Routing();
$home = new HomeController();
$uriGet = $_SERVER['REQUEST_URI'];
$route = str_replace("/DigitalCode", '', $uriGet);

$router->add('/', function () {
    echo "Hola Mundo - Esta es una ruta simple";
    //$home->showHome();
    //$this->home = new HomeController();
    //$router = $router->showHome(); 
}); */

/* $home->showHome('',function(){
  //echo "Hola Mundo - Esta es una ruta simple";
  //$home->showHome();
  //$this->home = new HomeController();
  //$router = $router->showHome(); 
}); */


//if ((empty($_SESSION['nombre_usuario']) && $route === '/login') || (empty($_SESSION['nombre_usuario']) && $route === '/')) {
//    require_once 'public/views/auth/login.php';
//    exit;
//} else if ((isset($_SESSION['nombre_usuario']) && $route === '/login') || (isset($_SESSION['nombre_usuario']) && $route === '/')) {
//    (new HomeController())->showHome();
//    exit;
//}

//C:\laragon\www\DigitalCode\MVP\View\home.php

if ((empty($_SESSION['']) && $route === '/home') || (empty($_SESSION['']) && $route === '/')) {
    require_once 'MVP/View/home.php';
    exit;
} else if ((isset($_SESSION['']) && $route === '/') || (isset($_SESSION['']) && $route === '/')) {
    (new HomeController())->showAbout();
    exit;
}

if ((empty($_SESSION['']) && $route === '/digitalcode') || (empty($_SESSION['']) && $route === '/')) {
    require_once 'MVP/View/home.php';
    exit;
} else if ((isset($_SESSION['']) && $route === '/') || (isset($_SESSION['']) && $route === '/')) {
    (new HomeController())->showAbout();
    exit;
}

//de esta manera llamamos una funcion dentro de una clase
//class @ method

$router->add('/home', 'HomeController@showHome');

$router->add('/about', 'HomeController@showAbout');

$router->run();

switch ($route) {

    case '/':
        require_once 'MVP/View/home.php';
        break;

    case '/login':
        require_once 'public/views/auth/login.php';
        break;

    case '/logout':
        //(new AuthController())->logout();
        break;

    case '/home':
        if (isset($_SESSION['nombre_usuario'])) {
            //(new HomeController())->index();
        } else {
            header("Location: /SISFEP/login");
            exit;
        }
        break;

        //default:
        //http_response_code(404);
        //require_once 'public/views/404/index.php';
        //break;
}
