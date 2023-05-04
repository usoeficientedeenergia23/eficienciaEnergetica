<?php

/**
 * Plantilla general de modelos
 * Versión 1.0.1
 *
 * Modelo de usuario
 */
class usuarioModel extends Model {
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
    $sql = 'SELECT * FROM usuarios ORDER BY idUsuarios DESC';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function tec()
  {
    // Todos los registros
    $sql = 'SELECT * FROM usuarios where rol IN( "Servicio social","Jefe de área", "Técnico");';
    return ($rows = parent::query($sql)) ? $rows : [];
  }

  static function tecRepor($Reportes_idReportes)
  {
    // Todos los registros
    $sql = 'SELECT * FROM `usuarios` where idUsuarios not in (select Usuarios_idUsuarios from control_reporte where Reportes_idReportes = :Reportes_idReportes) and rol != "Administrador" and rol != "Asistente"';
    return ($rows = parent::query($sql, ['Reportes_idReportes' => $Reportes_idReportes])) ? $rows : [];
  }

  //

  static function tecUs($id)
  {
    // Todos los registros
    $sql = 'SELECT * FROM usuarios where rol IN( "Servicio social","Jefe de área", "Técnico") and idUsuarios != :idUsuarios';
    return ($rows = parent::query($sql, ['idUsuarios' => $id])) ? $rows : [];
  }

  static function by_id($idUsuarios)
  {
    // Un registro con $id
    $sql = 'SELECT * FROM usuarios WHERE idUsuarios = :idUsuarios LIMIT 1';
    return ($rows = parent::query($sql, ['idUsuarios' => $idUsuarios])) ? $rows[0] : [];
  }

  //Cargue con base al numero de empleado
  static function by_num_empleado($num_empleado)
  {
    // Un registro con $num_empleado
    $sql = 'SELECT * FROM usuarios WHERE num_empleado = :num_empleado LIMIT 1';
    return ($rows = parent::query($sql, ['num_empleado' => $num_empleado])) ? $rows[0] : [];
  }

  static function by_nombre($nombre, $apellido_p, $apellido_m)
  {
    // Un registro con $num_empleado
    //$sql = 'SELECT * FROM usuarios WHERE nombre = :nombre LIMIT 1';
    $data =
    [
      'nombre' => $nombre,
      'apellido_p' => $apellido_p,
      'apellido_m' => $apellido_m
    ];

    $sql = 
    'SELECT u. *
    FROM usuarios u
    WHERE u.nombre = :nombre AND
    apellido_p = :apellido_p AND
    apellido_m = :apellido_m
    LIMIT 1';
    return ($rows = parent::query($sql, $data)) ? $rows[0] : [];
  }

  static function by_correo($correo)
  {
    // Un registro con $num_empleado
    $sql = 'SELECT * FROM usuarios WHERE correo = :correo LIMIT 1';
    return ($rows = parent::query($sql, ['correo' => $correo])) ? $rows[0] : [];
  }

  static function by_telefono($num_telefono)
  {
    // Un registro con $num_empleado
    $sql = 'SELECT * FROM usuarios WHERE num_telefono = :num_telefono LIMIT 1';
    return ($rows = parent::query($sql, ['num_telefono' => $num_telefono])) ? $rows[0] : [];
  }

  static function by_firma($idUsuarios)
  {
    // Un registro con $id
    $sql = 'SELECT  CONCAT(nombre," ", apellido_p," ", apellido_m) AS Nombre, firmaE FROM usuarios WHERE idUsuarios = :idUsuarios LIMIT 1';
    return ($rows = parent::query($sql, ['idUsuarios' => $idUsuarios])) ? $rows[0] : [];
  }

  static function by_usurioTec($idUsuarios)
  {
    // Un registro con $id
    $sql = 'SELECT idUsuarios, CONCAT(nombre," ", apellido_p," ", apellido_m) AS Nombre FROM usuarios WHERE idUsuarios = :idUsuarios LIMIT 1';
    return ($rows = parent::query($sql, ['idUsuarios' => $idUsuarios])) ? $rows[0] : [];
  }

  static function by_estatus($idUsuarios)
  {
    // Un registro con estatus
    $sql = 'SELECT estatus FROM usuarios WHERE idUsuarios = :idUsuarios LIMIT 1';
    return ($rows = parent::query($sql, ['idUsuarios' => $idUsuarios])) ? $rows[0] : [];
  }

  static function by_correo_reporte($idUsuarios)
  {
    // Un registro con $num_empleado
    $sql = 'SELECT correo FROM usuarios WHERE idUsuarios = :idUsuarios LIMIT 1';
    return ($rows = parent::query($sql, ['idUsuarios' => $idUsuarios])) ? $rows[0] : [];
  }

  static function by_telefono_reporte($idUsuarios)
  {
    // Un registro con $num_empleado
    $sql = 'SELECT num_telefono FROM usuarios WHERE idUsuarios = :idUsuarios LIMIT 1';
    return ($rows = parent::query($sql, ['idUsuarios' => $idUsuarios])) ? $rows[0] : [];
  }

  

}

