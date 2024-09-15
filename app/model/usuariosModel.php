<?php

namespace App\model;

class usuariosModel
{
  protected $correo;

  public function __construct($correo)
  {
    $this->correo = $correo;
  }

  /**
   * Get the value of correo
   */
  public function usuarioCorreoModel()
  {
    $sql = "SELECT * FROM `usuarios` WHERE 1";
    return $this->correo;
  }

  /**
   * Set the value of correo
   *
   * @return  self
   */
  public function setCorreo($correo)
  {
    $this->correo = $correo;

    return $this;
  }
}
