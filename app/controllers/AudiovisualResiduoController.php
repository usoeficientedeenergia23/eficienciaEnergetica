<?php

/**
 * Plantilla general de controladores
 * Versión 1.0.2
 *
 * Controlador de agregar
 */
class AudiovisualResiduoController extends Controller {
  
  function index()
  {
    $data = 
    [
      'title' => 'Material Audiovisual Residuos Urbanos'
    ];
    
    // Descomentar vista si requerida
    View::render('index', $data);
  }

}