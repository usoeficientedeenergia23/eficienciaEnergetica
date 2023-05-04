<?php

/**
 * Plantilla general de modelos
 * Versión 1.0.1
 *
 * Modelo de consultarinsumos
 */
class consultarinsumosModel extends Model {
  public static $t1   = 'consultar_insumos'; // Nombre de la tabla en la base de datos;
  
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
    $sql = 'SELECT * FROM consultar_insumos ORDER BY fecha_insumo ASC' ;
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function all_noRea()
  {
    // Todos los registros
    $sql = 'SELECT * FROM consultar_insumos WHERE estatus = "no realizado" ORDER BY fecha_insumo ASC';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function all_rea()
  {
    // Todos los registros
    $sql = 'SELECT * FROM consultar_insumos WHERE estatus = "realizado" ORDER BY fecha_insumo ASC';
    return ($rows = parent::query($sql)) ? $rows : [];
  }


  static function by_id($id)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM consultar_insumos';
    return ($rows = parent::query($sql, ['id' => $id])) ? $rows[0] : [];
  }
}

