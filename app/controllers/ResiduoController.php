<?php

/**
 * Plantilla general de controladores
 * Versión 1.0.2
 *
 * Controlador de agregar
 */
class ResiduoController extends Controller {
  
  function index()
  {
    $data = 
    [
      'title' => 'Residuos Urbanos'
    ];
    
    // Descomentar vista si requerida
    View::render('index', $data);
  }

}