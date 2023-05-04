<?php

/**
 * Plantilla general de modelos
 * Versión 1.0.1
 *
 * Modelo de consultarreporte
 */
class reporteImpresorasModel extends Model {
  public static $t1   = 'consulta_reportesimpresoras'; // Nombre de la tabla en la base de datos;
  
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
    $sql = 'SELECT * FROM consulta_reportesimpresoras';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function by_id($id)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM consulta_reportesimpresoras WHERE idReportes = :idReportes LIMIT 1';
    return ($rows = parent::query($sql, ['idReportes' => $idReportes])) ? $rows[0] : [];
  }

  static function by_reporte($num_inventario)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM consulta_reportesimpresoras WHERE num_inventario = :num_inventario';
    return ($rows = parent::query($sql, ['num_inventario' => $num_inventario])) ? $rows : [];
  }

  static function allPend()
  {
    // Todos los registros
    $sql = 'SELECT * FROM consulta_reportesimpresoras where estatus_reporte != "Terminar reporte y entregar" and estatus_reporte != "concluido" ORDER BY prioridad DESC, fecha_entrada DESC ';
     //$sql = 'SELECT DISTINCT idReportes, num_inventario, interno, localidad, tipo_servicio, estatus_reporte from consulta_reportesimpresoras';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function allPendUsuario($nombreUsuario)
  {
    // Todos los registros
    $sql = 'SELECT * FROM consulta_reportesimpresoras where estatus_reporte != "Terminar reporte y entregar" and estatus_reporte != "concluido" and Nombre_Completo = :Nombre_Completo ORDER BY prioridad DESC, fecha_entrada DESC ';
     //$sql = 'SELECT DISTINCT idReportes, num_inventario, interno, localidad, tipo_servicio, estatus_reporte from consulta_reportesimpresoras';
     return ($rows = parent::query($sql, ['Nombre_Completo' => $nombreUsuario])) ? $rows : [];
  }

  static function allTer()
  {
    // Todos los registros
    $sql = 'SELECT  * FROM consulta_reportesimpresoras where estatus_reporte = "Terminar reporte y entregar" ORDER BY idReportes DESC ';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function allTerUsuario($nombreUsuario)
  {
    // Todos los registros
    $sql = 'SELECT  * FROM consulta_reportesimpresoras where estatus_reporte = "Terminar reporte y entregar" and Nombre_completo = :Nombre_Completo ORDER BY idReportes DESC ';
    return ($rows = parent::query($sql, ['Nombre_Completo' => $nombreUsuario])) ? $rows : [];
  }

  //by_id_impresora
  static function by_id_impresora($num_inventario)
  {
    // Todos los registros
    $sql = 'SELECT  * FROM consulta_reportesimpresoras where num_inventario = :num_inventario LIMIT 1';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

}

