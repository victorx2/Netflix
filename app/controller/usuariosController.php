<?php

namespace App\controller;

use App\model\usuariosModel;

class usuariosController
{
  protected $correo;
  protected $usuario;
  public function __construct($correo)
  {
    $this->correo = new usuariosModel($correo);
  };

  
  $usuarios = public function index(){
    
  }
  //public function index()
  //{
  //  $usuario = $this->correo->usuarioCorreoModel();
  //  if ($usuario) {
  //    return true;
  //  }
  //  //if(){
  //  //foreach ($usuario as $key => $value) {
  //  //$key = $_REQUEST[$value['correo']];
  //  //$key = $_REQUEST[$value['contrasena']];
  //  //}
  //  dfgdfgf
  //  foreach ($usuario as $value) {
  //    $_REQUEST[$value["correo"]][1] . $_REQUEST[$value["contrasena"]][2];
  //  }
  //  //}
  //  //$_REQUEST['correo'];
  //  //$_REQUEST['contrasena'];
  //  return require_once 'app/public/views/usuarios.php';
  //  exit;
  //}
  public function setCorreo($correo)
  {
    $this->correo = $correo;
    return $this;
  }
}