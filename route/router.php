<?php 

$routes = [];


function route($action, Closure $callback){
    global $routes;
    $action = trim($action,'/'); //$callback = '/');
    $routes[$action] = $callback;
    var_dump($routes);

}

/* function dispatch($action){
    global $routes;
    if($action = trim($action, $callback = '/')){
        echo "Verdad";
    }else{
        echo "Falso";
    }
    if($callback = $routes[$action] ?? null){
        
        echo "Verdad"."</n>";
    }else{
        echo "Falso";
    }
     var_dump($callback);

    //call_user_func($callback,$action);
    //call_user_func($callback);
    //echo $callback . '\n';
   
}
 */

?>
<!-- 
/**
 * Holds the registered routes
 *
 * @var array $routes
 */
$routes = [];

/**
 * Register a new route
 *
 * @param $action string
 * @param \Closure $callback Called when current URL matches provided action
 */
function route($action, Closure $callback)
{
    global $routes;
    $action = trim($action, '/');
    $routes[$action] = $callback;
}

/**
 * Dispatch the router
 *
 * @param $action string
 */
function dispatch($action)
{
    global $routes;
    $action = trim($action, '/');
    $callback = $routes[$action];

    echo call_user_func($callback);
}
As you can see, there are two main functions here, one is route(), which accepts an action & a callback. This route() method will determine the action will return the provided callback. The other function is dispatch() and it will only accept an action.

Now inside of our index.php, we can simply call like.



require_once "router.php";

route('/', function () {
    return "Hello World";
});

route('/about', function () {
    return "Hello form the about route";
});

$action = $_SERVER['REQUEST_URI'];
dispatch($action); -->