<?php

/**
 * Plantilla general de modelos
 * Versión 1.0.1
 *
 * Modelo de impresoras
 */
class computoModel extends Model {
  public static $t1   = 'computo'; // Nombre de la tabla en la base de datos;
  
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
    $sql = 'SELECT * FROM computo';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function all_baja()
  {
    // Todos los registros
    $sql = 'SELECT * FROM computo where estatus = "reparacion"';
    return ($rows = parent::query($sql)) ? $rows : [];
  }


  static function all_activas()
  {
    // Todos los registros
    $sql = 'SELECT * FROM computo where estatus = "En servicio"';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function all_activas_Crom()
  {
    // Todos los registros
    $sql = 'SELECT * FROM computo
    LEFT join cronograma ON computo.idComputo = cronograma.computo_idComputo 
    where computo.estatus = "En servicio" and (cronograma.computo_idComputo IS NULL or computo.idComputo IS NULL);';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function id()
  {
    // Todos los registros
    $sql = 'SELECT idComputo, num_inventario FROM computo';
    return ($rows = parent::query($sql)) ? $rows : [];
  } 

  static function by_id($idComputo)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM computo WHERE idComputo = :idComputo LIMIT 1';
    return ($rows = parent::query($sql, ['idComputo' => $idComputo])) ? $rows[0] : [];
  }

  static function by_datosComputo($idComputo)
  {
    // Un registro con $id
    $sql = 'SELECT descripcion, marca, modelo, serie FROM computo WHERE idComputo = :idComputo LIMIT 1';
    return ($rows = parent::query($sql, ['idComputo' => $idComputo])) ? $rows[0] : [];
  }

  static function datosComputo($id)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM computo WHERE localidad_idLocalidad = :localidad_idLocalidad';
    return ($rows = parent::query($sql, ['localidad_idLocalidad' => $id])) ? $rows: [];
  }

  static function by_num_inventario($num_inventario)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM computo WHERE num_inventario = :num_inventario LIMIT 1';
    return ($rows = parent::query($sql, ['num_inventario' => $num_inventario])) ? $rows[0] : [];
  }

  static function by_computo($marca, $modelo, $serie)
  {
    // Un registro con $num_empleado
    //$sql = 'SELECT * FROM usuarios WHERE nombre = :nombre LIMIT 1';
    $data =
    [
      'marca' => $marca,
      'modelo' => $modelo,
      'serie' => $serie
    ];

    $sql = 
    'SELECT c. *
    FROM computo c
    WHERE c.marca = :marca AND
    modelo = :modelo AND
    serie = :serie
    LIMIT 1';
    return ($rows = parent::query($sql, $data)) ? $rows[0] : [];
  }

}

