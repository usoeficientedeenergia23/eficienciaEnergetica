<?php 

/**
 * La primera función de pruebas del curso de creando el framework MVC
 *
 * @return void
 */
function en_custom() {
  return 'ESTOY DENTRO DE CUSTOM_FUNCTIONS.';
}



/**funcion para guardar la imagen base64 en el servidor
*el nombre debe tener la extension
*/

function uploadImgBase64 ($base64, $name){
  // decodificamos el base64
  $datosBase64 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64));
  // definimos la ruta donde se guardara en el server
  $path= ROOT.'assets'.DS.'firma'.DS.$name;
  // guardamos la imagen en el server
  if(!file_put_contents($path, $datosBase64)){
      // retorno si falla
      return false;
  }
  else{
      // retorno si todo fue bien
      return true;
  }
}

/**funcion para guardar la imagen base64 en el servidor
*el nombre debe tener la extension
*/

function uploadImgBase64Entrega ($base64, $name){
  // decodificamos el base64
  $datosBase64 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64));
  // definimos la ruta donde se guardara en el server
  $path= ROOT.'assets'.DS.'firmaEntrega'.DS.$name;
  // guardamos la imagen en el server
  if(!file_put_contents($path, $datosBase64)){
      // retorno si falla
      return false;
  }
  else{
      // retorno si todo fue bien
      return true;
  }
}

/**
 * Regresa el rol de usuario logeado
 * 
 * @return mixed
 */


/**
 * Envia cuando es creado el reporte
 */
function correo_creado($reporte)
{
    $impresora = impresorasModel::by_id($reporte['Impresoras_idImpresoras']);
    $usuario =control_reporteModel::by_usuario($reporte['idReportes']);

    if ($reporte['tipo_reporte'] == 'computo') {
      
      $dataR = 
      [
        'title' => sprintf('Reporte de cómputo %s', $reporte['idReportes']),
        'd'   => $reporte,
        'u' => $usuario
      ];
  
      $from = get_siteemail();
      $subject ='Nueva orden de Reporte'.' '.$reporte['tipo_reporte'] .' '.$reporte['idReportes'];
      $body = get_module('pdf_correo', $dataR);
      $alt = 'Reporte'.' '.$reporte['tipo_reporte'] .' '.$reporte['idReportes'];
  
      foreach ($usuario as $usuarioC) {
        $correo = usuarioModel::by_correo_reporte($usuarioC['Usuarios_idUsuarios']);
        send_email($from, $correo['correo'], $subject, $body, $alt);
      }
    } elseif ($reporte['tipo_reporte'] == 'impresoras' && $impresora['interno'] == 'interno') {

      $dataR = 
      [
        'title' => sprintf('Reporte de impresora %s', $reporte['idReportes']),
        'd'   => $reporte,
        'u' => $usuario
      ];
  
      $from = get_siteemail();
      $subject ='Nueva orden de Reporte'.' '.$reporte['tipo_reporte'] .' '.$reporte['idReportes'];
      $body = get_module('pdf_correo', $dataR);
      $alt = 'Reporte'.' '.$reporte['tipo_reporte'] .' '.$reporte['idReportes'];
  
      foreach ($usuario as $usuarioC) {
        $correo = usuarioModel::by_correo_reporte($usuarioC['Usuarios_idUsuarios']);
        send_email($from, $correo['correo'], $subject, $body, $alt);
      }
    }else if ($reporte['tipo_reporte'] == 'impresoras' && $impresora['interno'] == 'externa'){
      
      $dataR = 
      [
        'title' => sprintf('Reporte de impresora %s', $reporte['idReportes']),
            'd'   => $reporte,
            'i' => $impresora,
            'u' => $usuario
      ];
  
      $from = get_siteemail();
      $subject ='Nueva orden de Reporte'.' '.$reporte['tipo_reporte'] .' '.$reporte['idReportes'];
      $body = get_module('pdf_correoExt', $dataR);
      $alt = 'Reporte'.' '.$reporte['tipo_reporte'] .' '.$reporte['idReportes'];
  
      foreach ($usuario as $usuarioC) {
        $correo = usuarioModel::by_correo_reporte($usuarioC['Usuarios_idUsuarios']);
        send_email($from, $correo['correo'], $subject, $body, $alt);
      }
    }

}

/**
 * Envia el correo cuando se firma el reporte
 */
function correo($reporte)
{
    $impresora = impresorasModel::by_id($reporte['Impresoras_idImpresoras']);
    $usuario =control_reporteModel::by_usuario($reporte['idReportes']);

    if ($reporte['tipo_reporte'] == 'computo') {
      
      $dataR = 
      [
        'title' => sprintf('Reporte de cómputo %s', $reporte['idReportes']),
        'd'   => $reporte,
        'u' => $usuario
      ];
  
      $from = get_siteemail();
      $subject ='Se entrego el Reporte'.' '.$reporte['tipo_reporte'] .' '.$reporte['idReportes'];
      $body = get_module('pdf_correo', $dataR);
      $alt = 'Reporte'.' '.$reporte['tipo_reporte'] .' '.$reporte['idReportes'];
  
      foreach ($usuario as $usuarioC) {
        $correo = usuarioModel::by_correo_reporte($usuarioC['Usuarios_idUsuarios']);
        send_email($from, $correo['correo'], $subject, $body, $alt);
      }
    } elseif ($reporte['tipo_reporte'] == 'impresoras' && $impresora['interno'] == 'interno') {

      $dataR = 
      [
        'title' => sprintf('Reporte de impresora %s', $reporte['idReportes']),
        'd'   => $reporte,
        'u' => $usuario
      ];
  
      $from = get_siteemail();
      $subject ='Se entrego el Reporte'.' '.$reporte['tipo_reporte'] .' '.$reporte['idReportes'];
      $body = get_module('pdf_correo', $dataR);
      $alt = 'Reporte'.' '.$reporte['tipo_reporte'] .' '.$reporte['idReportes'];
  
      foreach ($usuario as $usuarioC) {
        $correo = usuarioModel::by_correo_reporte($usuarioC['Usuarios_idUsuarios']);
        send_email($from, $correo['correo'], $subject, $body, $alt);
      }
    }else if ($reporte['tipo_reporte'] == 'impresoras' && $impresora['interno'] == 'externa'){
      
      $dataR = 
      [
        'title' => sprintf('Reporte de impresora %s', $reporte['idReportes']),
            'd'   => $reporte,
            'i' => $impresora,
            'u' => $usuario
      ];
  
      $from = get_siteemail();
      $subject ='Se entrego el Reporte'.' '.$reporte['tipo_reporte'] .' '.$reporte['idReportes'];
      $body = get_module('pdf_correoExt', $dataR);
      $alt = 'Reporte'.' '.$reporte['tipo_reporte'] .' '.$reporte['idReportes'];
  
      foreach ($usuario as $usuarioC) {
        $correo = usuarioModel::by_correo_reporte($usuarioC['Usuarios_idUsuarios']);
        send_email($from, $correo['correo'], $subject, $body, $alt);
      }
    }


	// $mail = new PHPMailer();

	// $data = [
	// 	'subject' => 'Reporte'.' '.$reporte['tipo_reporte'] .' '.$reporte['idReportes'],
	// 	'body' => get_module('pdf_correo', $dataR),
	// 	'alt' => 'Este es el texto alternativo'
	// ];
	// $mail->setFrom('sedemalocal@localhost.com', 'Moises');
	// $mail->addAddress('sedemalocal@localhost.com', 'Moises');
	// $mail->Subject = $data['subject'];
	// $mail->msgHTML(get_module('emailTemplate', $data));
	// $mail->AltBody = $data['alt'];
	// $mail->CharSet = 'UTF-8';
	// $mail->send();
	//var_dump($data);
	// $mail->isSMTP();
	// //SMTP::DEBUG_OFF    = off (for production use) 0
	// //SMTP::DEBUG_CLIENT = client messages 1;
    // //SMTP::DEBUG_SERVER = client and server messages 2;
	// //$mail->SMTPDebug     = SMTP::DEBUG_SERVER;
	// $mail->SMTPDebug     = 0;
	// $mail->Host          = 'smtp.gmail.com';
    // $mail->Port          = 465; // 465 o 587
	// $mail->SMTPSecure    = PHPMailer::ENCRYPTION_SMTPS; // tls o ssl para gmail obligado
	// $mail->SMTPAuth      = true;
	// $email              = 'moireporte@gmail.com';
    // $mail->Username     = $email;
	// //$mail->Password     = 'N@z@rio07';
    // $mail->Password     = 'glimgvecofvagofn';
	// $mail->setFrom($email, 'Moises');
	// //$mail->addReplyTo('yom_07moon@hotmail.com', 'Moises');
	// $mail->addAddress($email, 'Moises');
	// $mail->Subject = $data['subject'];
	// $mail->msgHTML(get_module('emailTemplate', $data));
	// $mail->AltBody = $data['alt'];
	// $mail->CharSet = 'UTF-8';
	// $mail->send();
	// //echo 'correo: '.$email;

}

function get_usuario_reporte($id){
  $firma = usuarioModel::by_usurioTec($id);
  return $firma;
}


/**funcion para guardar el PDF de entrega de impresora externa en el servidor
*el nombre debe tener la extension
*/

function archivoPDF ($archivo){
  $ubicacionTemporal = $archivo["tmp_name"];
  //echo filesize($ubicacionTemporal);
  if (filesize($ubicacionTemporal) > 60873) {
    $nombreArchivo = $archivo["name"];
    $ruta = ROOT.'assets'.DS.'PDFEntrega'.DS;
    if (file_exists($ruta.$nombreArchivo)) {
      return false;
    }else{
      $nuevaUbicacion = $ruta . $nombreArchivo;
      $resultado = move_uploaded_file($ubicacionTemporal, $nuevaUbicacion);
      if($resultado === true){
          // retorno si todo fue bien
          return true;
      }
      else{
          // retorno si falla
          return false;
      }
    }
  }else {
    return false;
  }
}



/**
 * Link por defecto de la API directa de Whatsapp
 * Se anexan 2 parametros phone para el teléfono y text para el contenido
 *
 * @return string
 */
function get_wa_api_link()
{
  return 'https://api.whatsapp.com/send'; // phone or text
}

/**
 * Regresa el link para escribir de forma directo al usuario formateado
 *
 * @param string $ext
 * @param string $tel
 * @param string $text
 * @return string
 */
function format_wa_api_link($ext, $tel, $text = '')
{
  return sprintf('%s?phone=%s%s', get_wa_api_link(), sprintf('%s%s', $ext, $tel), !empty($text) ? sprintf('&text=%s', urlencode($text)) : '');
}

/**
 * Regresa el link para escribir de forma directo al usuario formateado
 * ya con los datos realies del usuario
 */
function whatsapp($id){

  $reporteTer = reporteModel::by_id($id);
  $control = control_reporteModel::by_usuario($id);
  $ext ="52";
  $mensaje = "Reporte de ".$reporteTer['tipo_reporte']." ".$reporteTer['idReportes']. " Nombre del solicitante: "
               .$reporteTer['nombre_solicitante']." se te fue asignado";

  $array = [];
  foreach ($control as $usuario) {
    $telefono = usuarioModel::by_telefono_reporte($usuario['Usuarios_idUsuarios']);
    $array[] = format_wa_api_link($ext, $telefono['num_telefono'], $mensaje);
  }

  return $array;

}

