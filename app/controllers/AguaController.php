<?php

/**
 * Plantilla general de controladores
 * Versión 1.0.2
 *
 * Controlador de agregar
 */
class AguaController extends Controller {
  
  function index()
  {
    $data = 
    [
      'title' => 'Uso eficiente en agua'
    ];
    
    // Descomentar vista si requerida
    View::render('index', $data);
  }

}