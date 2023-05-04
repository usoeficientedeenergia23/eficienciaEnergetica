<?php

/**
 * Plantilla general de controladores
 * Versión 1.0.2
 *
 * Controlador de agregar
 */
class AudiovisualAguaController extends Controller {
  
  function index()
  {
    $data = 
    [
      'title' => 'Material Audiovisual agua'
    ];
    
    // Descomentar vista si requerida
    View::render('index', $data);
  }

}