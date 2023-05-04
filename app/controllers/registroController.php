<?php

/**
 * Plantilla general de controladores
 * Versión 1.0.2
 *
 * Controlador de registro
 */
class registroController extends Controller {
  function __construct()
  {
    // Validación de sesión de usuario, descomentar si requerida
    
    if (!Auth::validate()) {
      Flasher::new('Debes iniciar sesión primero.', 'danger');
      Redirect::to('login');
    }

  }
  
  function index()
  {
    if (!is_user(get_user_role(),['Administrador', 'Asistente'])) {
      Flasher::new('No tienes acceso a esta área.', 'danger');
      Redirect::to('menuprincipal');
    }

    $data = 
    [
      'title' => 'Registro Empleado'
    ];
    
    // Descomentar vista si requerida
    View::render('index', $data);
  }

  
}