<?php

require_once '../route/routing.php';

class conexion
{
    private $conn = array();
    private $connerror;
    private $route;

    public function __construct($route, $conn)

    {
        $this->conn = $conn;
        $this->route = $route;
        // $this->connerror = $connerror;
        //$this->conn[] = '' . trim($conn, '');
        //$this->conn = $conn;
    }

    public function conn_digitalcode($conn)

    {
        $conn = new conexion("localhost", "root", "", "digitalcode");

        if ($conn->connerror) {
            echo "Fallo al conectar la conexion :(" . $conn->connerror . ")" . $conn->connerror;
        } else {
            echo "Fallo al conectar la conexion :(" . $conn->connerror . ")" . $conn->connerror;
        }
        //$this->conn[] = '' . trim($conn, '');
        //$this->conn = $conn;
    }

    /* public function conn_digitalcode($conn)

    {
        $conn = new conexion("localhost", "root", "", "digitalcode");

        if ($conn->connerror) {
            echo "Fallo al conectar la conexion :(" . $conn->connerror . ")" . $conn->connerror;
        } else {
            echo "Fallo al conectar la conexion :(" . $conn->connerror . ")" . $conn->connerror;
        }
        //$this->conn[] = '' . trim($conn, '');
        //$this->conn = $conn;
    } */



    /* private $_uri = array();
    private $_action = array();

    public function add($uri, $action = null)
    {
        $this->_uri[] = '/' . trim($uri, '/');

        if ($action != null) {
            $this->_action[] = $action;
        }
    }

    public function run()
    {
        $uriGet = isset($_GET['uri']) ? '/' . $_GET['uri'] : '/';

        foreach ($this->_uri as $key => $value) {
            if (preg_match("#^$value$#", $uriGet)) {
                $action = $this->_action[$key];
                $this->runAction($action);
            }
        }
    }

    private function runAction($action)
    {
        if ($action instanceof \Closure) {
            $action();
        } else {
            $params = explode('@', $action);
            $obj = new $params[0];
            $obj->{$params[1]}();
        }
    } */
}
