<?php

/**
 * Plantilla general de modelos
 * Versión 1.0.1
 *
 * Modelo de consultarimpresora
 */
class consultarimpresoraModel extends Model {
  public static $t1   = 'consultar_impresoras'; // Nombre de la tabla en la base de datos;
  
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
    $sql = 'SELECT * FROM consultar_impresoras ORDER BY idImpresoras DESC';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function activas()
  {
    // Todos los registros
    $sql = 'SELECT * FROM consultar_impresoras where estatus != "baja" ORDER BY idImpresoras DESC';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function baja()
  {
    // Todos los registros
    $sql = 'SELECT * FROM consultar_impresoras where estatus = "baja" ORDER BY idImpresoras DESC';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function by_id($idImpresoras)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM consultar_impresoras WHERE idImpresoras = :idImpresoras LIMIT 1';
    return ($rows = parent::query($sql, ['id' => $id])) ? $rows[0] : [];
  }
}

