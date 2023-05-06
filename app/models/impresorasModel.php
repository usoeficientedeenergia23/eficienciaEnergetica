<?php

/**
 * Plantilla general de modelos
 * Versión 1.0.1
 *
 * Modelo de impresoras
 */
class impresorasModel extends Model {
  public static $t1   = 'impresoras'; // Nombre de la tabla en la base de datos;
  
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
    $sql = 'SELECT * FROM impresoras';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function all_activas()
  {
    // Todos los registros
    $sql = 'SELECT * FROM impresoras
    LEFT join insumos ON impresoras.idImpresoras = insumos.impresoras_idImpresoras 
    where impresoras.estatus = "En servicio" and (insumos.impresoras_idImpresoras IS NULL or impresoras.idImpresoras IS NULL);';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function all_baja()
  {
    // Todos los registros
    $sql = 'SELECT * FROM impresoras where estatus = "reparacion"';
    return ($rows = parent::query($sql)) ? $rows : [];
  }


  static function all_activas_Crom()
  {
    // Todos los registros
    $sql = 'SELECT * FROM impresoras
    LEFT join cronograma ON impresoras.idImpresoras = cronograma.impresoras_idImpresoras 
    where impresoras.estatus = "En servicio" and (cronograma.impresoras_idImpresoras IS NULL or impresoras.idImpresoras IS NULL);';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function id()
  {
    // Todos los registros
    $sql = 'SELECT idImpresoras, num_inventario FROM impresoras';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function by_id($idImpresoras)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM impresoras WHERE idImpresoras = :idImpresoras LIMIT 1';
    return ($rows = parent::query($sql, ['idImpresoras' => $idImpresoras])) ? $rows[0] : [];
  }

  static function by_datosImpresora($idImpresoras)
  {
    // Un registro con $id
    $sql = 'SELECT descripcion, marca, modelo, serie, interno FROM impresoras WHERE idImpresoras = :idImpresoras LIMIT 1';
    return ($rows = parent::query($sql, ['idImpresoras' => $idImpresoras])) ? $rows[0] : [];
  }

  static function datosImpresora($id)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM impresoras WHERE localidad_idLocalidad = :localidad_idLocalidad';
    return ($rows = parent::query($sql, ['localidad_idLocalidad' => $id])) ? $rows: [];
  }

  static function by_num_inventario($num_inventario)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM impresoras WHERE num_inventario = :num_inventario LIMIT 1';
    return ($rows = parent::query($sql, ['num_inventario' => $num_inventario])) ? $rows[0] : [];
  }

  static function by_impresora($marca, $modelo, $serie)
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
    'SELECT i. *
    FROM impresoras i
    WHERE i.marca = :marca AND
    modelo = :modelo AND
    serie = :serie
    LIMIT 1';
    return ($rows = parent::query($sql, $data)) ? $rows[0] : [];
  }

  
}

