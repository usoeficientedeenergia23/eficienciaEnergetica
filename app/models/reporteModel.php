<?php

/**
 * Plantilla general de modelos
 * Versión 1.0.1
 *
 * Modelo de reportesimpresoras
 */
class reporteModel extends Model {
  public static $t1   = 'reportes'; // Nombre de la tabla en la base de datos;
  
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
    $sql = 'SELECT * FROM reportes';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function by_id($idReportes)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM reportes WHERE idReportes = :idReportes LIMIT 1';
    return ($rows = parent::query($sql, ['idReportes' => $idReportes])) ? $rows[0] : [];
  }


}

