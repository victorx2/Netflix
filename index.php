<?php

use App\controller\{clientesController, comprasController, correoController, pagosController, perfilesController, perfilesVendidosController, rolesController, usuariosController, ventasController, zonasController}; // Anónimo en el ambito actual. Los espacios de nombres son para organizar y agrupas clases, interfaces, funciones y constantes que pueden tener el mismo nombre pero que pertenecen a diferentes bibliotecas o marcos.

$request_method = $_SERVER['REQUEST_METHOD']; //Determinar la accion del usuario - Crear Formularios - Implementar APIs REST 
var_dump($request_method);
if ($request_method) {
  echo "Respuesta de servidor" . "</br>";
} else {
  echo "Respuesta del servidor erronea" . "</br>";
}
$request_uri = $_SERVER['REQUEST_URI']; //Enrutamiento -Generación de enlances dinámicos, Segumiento de visitas.
/* echo $_SERVER['REQUEST_URI']; */
var_dump($request_uri);
$router = str_replace("/Code", '', $request_uri); //Flexibilidad - Formateado de texto - Personalización de mensajes - Limpieza de datos.
/* var_dump($router); */
session_start();
echo "METHOD HTTP: " . $request_method . "<br>";
echo "RUTA: " . $router . "<br>";
if ($request_method === 'POST' && $router === 'usuario') {
  $usuario = (new usuariosController($usuario))->index($_REQUEST['correo'], $_REQUEST['contrasena']);
  if (!$usuario) {
    $error = true;
    require_once 'app/public/views/usuarios.php';
  }
}

//validacion de logueo 
//if (empty($_SESSION)) {
//  require_once 'app/public/views/usuarios.php';
//} else if ((isset($_SESSION['correo']) && $router === '/usuario') || (isset($_SESSION//['correo']) && $router === '/')) {
//  (new usuariosController($usuario))->index();
//  exit;
//}

// else if ($request_method === 'POST' && $router === '///solicitud_registro_usuario') { 
//   (new SolicitudesUsuariosController())->store($_REQUEST); 
//   exit; 
//} 

//if ($request_method === 'POST' && $router === '/login') { 
//   $authController = (new authController())->login($_REQUEST['user'], $_REQUEST//['password']); 
//   if (!$authController) { 
//     $error = true; 
//     require_once 'public/views/auth/login.php'; 
//   } 
// } else if ($request_method === 'POST' && $router === '/solicitud_registro_usuario') { 
//   (new SolicitudesUsuariosController())->store($_REQUEST); 
//   exit; 
//} 

/* if ($request_method === 'POST' && $router === '/login') { */
/*   $authController = (new authController())->login($_REQUEST['user'], $_REQUEST['password']); */
/*   if (!$authController) { */
/*     $error = true; */
/*     require_once 'public/views/auth/login.php'; */
/*   } */
/* } else if ($request_method === 'POST' && $router === '/solicitud_registro_usuario') { */
/*   (new SolicitudesUsuariosController())->store($_REQUEST); */
/*   exit; */
/* } */
/*  */
/* // validacion de logueo */
/*  */
/* if (empty($_SESSION)) { */
/*   require_once 'public/views/auth/login.php'; */
/*   exit; */
/* } else if ((isset($_SESSION['nombre_usuario']) && $router === '/login') || (isset($_SESSION['nombre_usuario']) && $router === '/')) { */
/*   (new HomeController())->index(); */
/*   exit; */
/* } */
/*  */
/* //rutas tipo GET */
/*  */
/* if ($request_method === 'GET' && strpos($router, '/BuscadorDeCodigosPresupuestarios/') === 0) { */
/*   $cadena = substr($router, strlen('/BuscadorDeCodigosPresupuestarios/')); */
/*   (new LeerCodificadorController())->searchCodesBudgetary($cadena); */
/*   exit; */
/* } else if ($request_method === 'GET' && strpos($router, '/solicitud_registro_usuario_denegada/') === 0) { */
/*   $motivo = substr($router, strlen('/solicitud_registro_usuario_denegada/')); */
/*   (new SolicitudesUsuariosController())->denegar_solicitud($motivo); */
/*   if ($request_method === 'GET' && strpos($router, '/solicitud_registro_usuario_denegada/') === 0) { */
/*     $motivo = substr($router, strlen('/solicitud_registro_usuario_denegada/')); */
/*     (new SolicitudesUsuariosController())->denegar_solicitud($motivo); */
/*   } else if ($request_method === 'GET' && strpos($router, '/solicitud_registro_usuario_show/') === 0) { */
/*     $id = intval(substr($router, strlen('/solicitud_registro_usuario_show/'))); */
/*     (new SolicitudesUsuariosController())->show($id); */
/*     exit; */
/*   } else if ($request_method === 'GET' && strpos($router, '/usuarios-create/') === 0) { */
/*     $id = intval(substr($router, strlen('/usuarios-create/'))); */
/*     (new SolicitudesUsuariosController())->create($id); */
/*     exit; */
/*   } else if ($request_method === 'GET' && strpos($router, '/usuarios-edit/') === 0) { */
/*     $id = intval(substr($router, strlen('/usuarios-edit/'))); */
/*     (new UsuariosController())->edit($id); */
/*     exit; */
/*   } else if ($request_method === 'GET' && strpos($router, '/usuarios-show/') === 0) { */
/*     $id = intval(substr($router, strlen('/usuarios-show/'))); */
/*     (new UsuariosController())->show($id); */
/*     exit; */
/*   } else if ($request_method === 'GET' && strpos($router, '/usuarios-delete/') === 0) { */
/*     $id = intval(substr($router, strlen('/usuarios-delete/'))); */
/*     (new UsuariosController())->delete($id); */
/*   } */
/*  */
/*   // rutas tipo POST */
/*  */
/*   else if ($request_method === 'POST' && $router === '/solicitud_registro_usuario_denegada') { */
/*     (new SolicitudesUsuariosController())->denegar_solicitud($_REQUEST); */
/*   } else if ($request_method === 'POST' && $router === '/usuario-store') { */
/*     (new UsuariosController())->store($_REQUEST); */
/*   } else if ($request_method === 'POST' && $router === '/partidas-store') { */
/*     (new PartidasController())->store($_REQUEST); */
/*   } else if ($request_method === 'POST' && $router === '/cargar-codificador-store') { */
/*     (new LeerCodificadorController())->store($_REQUEST); */
/*   } else if ($request_method === 'POST' && $router === '/cargar-codificador-update') { */
/*     (new LeerCodificadorController())->update($_REQUEST); */
/*   } */
/*  */
/*   // rutas normales */
/*    */
/*   (new UsuariosController())->store($_REQUEST); */
/* }  */
/*  */
/*  */
/*  */
/* switch ($router) { */
/*  */
/*   case '/': */
/*     require_once 'public/views/auth/login.php'; */
/*     break; */
/*  */
/*   case '/login': */
/*     require_once 'public/views/auth/login.php'; */
/*     break; */
/*  */
/*   case '/logout': */
/*     (new authController())->logout(); */
/*     break; */
/*  */
/*   case '/home': */
/*     if (isset($_SESSION['nombre_usuario'])) { */
/*       (new HomeController())->index(); */
/*     } else { */
/*       header("Location: /SISPRE/login"); */
/*       exit; */
/*     } */
/*     break; */
/*  */
/*   case '/partidas': */
/*     (new PartidasController())->index(); */
/*     break; */
/*  */
/*   case '/disponibilidad': */
/*     (new DisponibilidadController())->index(); */
/*     break; */
/*   case '/partida-registrar': */
/*     (new PartidasController())->store($_REQUEST); */
/*     break; */
/*  */
/*   case '/formulacion': */
/*     (new FormulacionController())->index(); */
/*     break; */
/*  */
/*   case '/formulacion-create': */
/*     (new FormulacionController())->create(); */
/*     break; */
/*  */
/*   case '/formulacion-registrar': */
/*     (new PartidasController())->store($_REQUEST); */
/*     break; */
/*  */
/*  */
/*   case '/disponibilidad': */
/*     (new DisponibilidadController())->index(); */
/*     break; */
/*  */
/*   case '/ordenes': */
/*     (new OrdenesController())->index(); */
/*     break; */
/*  */
/*   case '/memo': */
/*     (new MemoController())->index(); */
/*     break; */
/*  */
/*   case '/usuarios': */
/*     (new UsuariosController())->index(); */
/*     break; */
/*   case '/usuarios': */
/*     (new UsuariosController())->index(); */
/*     break; */
/*  */
/*   case '/usuarios-create': */
/*     (new UsuariosController())->create(); */
/*     break; */
/*  */
/*   case '/auditoria': */
/*     (new AuditoriaController())->index(); */
/*     break; */
/*  */
/*   case '/auditoria-filtrar-general': */
/*     (new AuditoriaController())->filtrado_general(); */
/*     break; */
/*  */
/*   case '/servicios-de-bases-de-datos': */
/*     (new ServiciosBaseDeDatosController())->index(); */
/*     break; */
/*   case '/servicios_de_bases_de_datos': */
/*     (new ServiciosBaseDeDatosController())->index(); */
/*     break; */
/*  */
/*   case '/cargar-codificador': */
/*     (new LeerCodificadorController())->index(); */
/*     break; */
/*  */
/*   default: */
/*     http_response_code(404); */
/*     require_once 'public/views/404/index.php'; */
/*     // echo "Ruta no encontrada"; */
/*     break; */
/*     //default: */
/*     http_response_code(404); */
/*     require_once 'public/views/404/index.php'; */
/*     break; */
/* } */
/*  */