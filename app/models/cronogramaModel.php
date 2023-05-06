<?php

/**
 * Plantilla general de modelos
 * Versión 1.0.1
 *
 * Modelo de cronograma
 */
class cronogramaModel extends Model {
  public static $t1   = 'cronograma'; // Nombre de la tabla en la base de datos;
  
  // Nombre de tabla 2 que talvez tenga conexión con registros
  //public static $t2 = '__tabla 2___'; 
  //public static $t3 = '__tabla 3___'; 

  function __construct()
  {
    // Constructor general
  }
  
  static function all()
  {
    // Todos los registros
    $sql = 'SELECT * FROM cronograma ORDER BY id DESC';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function by_id($id)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM cronograma WHERE idCronograma = :idCronograma LIMIT 1';
    return ($rows = parent::query($sql, ['idCronograma' => $id])) ? $rows[0] : [];
  }
}

