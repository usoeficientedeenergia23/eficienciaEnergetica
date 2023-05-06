<?php

/**
 * Plantilla general de controladores
 * Versión 1.0.2
 *
 * Controlador de agregar
 */
class PaginaPrincipalController extends Controller {
  
  function index()
  {
    $data = 
    [
      'title' => 'PaginaPrincipal'
    ];
    
    // Descomentar vista si requerida
    View::render('index', $data);
  }

}