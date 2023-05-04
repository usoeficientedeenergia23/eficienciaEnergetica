<?php

/**
 * Plantilla general de controladores
 * Versión 1.0.2
 *
 * Controlador de agregar
 */
class ElectroController extends Controller {
  
  function index()
  {
    $data = 
    [
      'title' => 'Electromovilidad'
    ];
    
    // Descomentar vista si requerida
    View::render('index', $data);
  }

}