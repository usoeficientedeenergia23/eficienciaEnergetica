<?php

/**
 * Plantilla general de modelos
 * Versión 1.0.1
 *
 * Modelo de control_reporte
 */
class control_reporteModel extends Model {
  public static $t1   = 'control_reporte'; // Nombre de la tabla en la base de datos;
  
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
    $sql = 'SELECT * FROM control_reporte ORDER BY idControl_Reporte DESC ';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function by_id($idControl_Reporte)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM control_reporte WHERE idControl_Reporte = :idControl_Reporte LIMIT 1';
    return ($rows = parent::query($sql, ['idControl_Reporte' => $idControl_Reporte])) ? $rows[0] : [];
  }

  static function by_usuario($Reportes_idReportes)
  {
    // Un registro con $id
    $sql = 'SELECT Usuarios_idUsuarios FROM control_reporte WHERE Reportes_idReportes = :Reportes_idReportes';
    return ($rows = parent::query($sql, ['Reportes_idReportes' => $Reportes_idReportes])) ? $rows : [];
  }

  static function num_usuario($Reportes_idReportes)
  {
    // Un registro con $id
    $sql = 'SELECT COUNT(Usuarios_idUsuarios) AS num FROM control_reporte WHERE Reportes_idReportes = :Reportes_idReportes';
    return ($rows = parent::query($sql, ['Reportes_idReportes' => $Reportes_idReportes])) ? $rows : [];
  }

  static function reporte_usuario($Reportes_idReportes)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM usuarios WHERE idUsuarios NOT IN (SELECT Usuarios_idUsuarios FROM control_reporte WHERE Reportes_idReportes = :Reportes_idReportes) AND rol NOT IN ("Administrador", "Asistente")';
    return ($rows = parent::query($sql, ['Reportes_idReportes' => $Reportes_idReportes])) ? $rows : [];
  }

  static function reporte_usuario_eliminar($Reportes_idReportes)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM usuarios WHERE idUsuarios IN (SELECT Usuarios_idUsuarios FROM control_reporte WHERE Reportes_idReportes = :Reportes_idReportes)';
    return ($rows = parent::query($sql, ['Reportes_idReportes' => $Reportes_idReportes])) ? $rows : [];
  }


 
}

