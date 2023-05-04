<?php

/**
 * Plantilla general de modelos
 * Versión 1.0.1
 *
 * Modelo de control_reporte
 */
class insumoModel extends Model {
  public static $t1   = 'insumos'; // Nombre de la tabla en la base de datos;
  
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
    $sql = 'SELECT * FROM insumos ORDER BY idInsumo DESC';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function by_id($idInsumo)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM insumos WHERE idInsumo = :idInsumo LIMIT 1';
    return ($rows = parent::query($sql, ['idInsumo' => $idInsumo])) ? $rows[0] : [];
  }

  static function by_estatus($idInsumo)
  {
    // Un registro con estatus
    $sql = 'SELECT estatus FROM insumos WHERE idInsumo = :idInsumo LIMIT 1';
    return ($rows = parent::query($sql, ['idInsumo' => $idInsumo])) ? $rows[0] : [];
  }


}

