<?php

/**
 * Plantilla general de controladores
 * Versión 1.0.2
 *
 * Controlador de agregar
 */
class AudiovisualElectroController extends Controller {
  
  function index()
  {
    $data = 
    [
      'title' => 'Material Audiovisual Electromovilidad'
    ];
    
    // Descomentar vista si requerida
    View::render('index', $data);
  }

}