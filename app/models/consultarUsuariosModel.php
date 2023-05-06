<?php

/**
 * Plantilla general de modelos
 * Versión 1.0.1
 *
 * Modelo de consultarimpresora
 */
class consultarUsuariosModel extends Model {
  public static $t1   = 'usuarios'; // Nombre de la tabla en la base de datos;
  
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
    $sql = 'SELECT * FROM usuarios';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function activos()
  {
    // Todos los registros
    $sql = 'SELECT * FROM usuarios where estatus = "activo"';
    return ($rows = parent::query($sql)) ? $rows : [];
  }


  static function desactivos()
  {
    // Todos los registros
    $sql = 'SELECT * FROM usuarios where estatus = "desactivo"';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function by_id($idImpresoras)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM usuarios WHERE idImpresoras = :idImpresoras LIMIT 1';
    return ($rows = parent::query($sql, ['id' => $id])) ? $rows[0] : [];
  }
}

