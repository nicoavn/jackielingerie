<?php
/**
 * NOTA SOBRE LA LICENCIA DE USO DEL SOFTWARE
 *
 * El uso de este software está sujeto a las Condiciones de uso de software que
 * se incluyen en el paquete en el documento "Aviso Legal.pdf". También puede
 * obtener una copia en la siguiente url:
 * http://www.redsys.es/wps/portal/redsys/publica/areadeserviciosweb/descargaDeDocumentacionYEjecutables
 *
 * Redsys es titular de todos los derechos de propiedad intelectual e industrial
 * del software.
 *
 * Quedan expresamente prohibidas la reproducción, la distribución y la
 * comunicación pública, incluida su modalidad de puesta a disposición con fines
 * distintos a los descritos en las Condiciones de uso.
 *
 * Redsys se reserva la posibilidad de ejercer las acciones legales que le
 * correspondan para hacer valer sus derechos frente a cualquier infracción de
 * los derechos de propiedad intelectual y/o industrial.
 *
 * Redsys Servicios de Procesamiento, S.L., CIF B85955367
 */
$_['heading_title']		= 'Redsys';
 
// Text
$_['text_payment']		= 'Payment';
$_['text_success']		= 'Success: Ha modificado correctamente el sistema Redsys!';
$_['text_redsys']       = '<a href="http://www.redsys.es" target="_blank"><img src="view/image/extension/payment/Redsys.png" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_real']         = 'Real';//'https://sis.redsys.es/sis/realizarPago';
$_['text_sisd']         = 'Sis-d';//'https://sis-d.redsys.es/sis/realizarPago';
$_['text_sisi']         = 'Sis-i';//'https://sis-i.redsys.es:25443/sis/realizarPago';
$_['text_sist']       	= 'Sis-t';//'https://sis-t.redsys.es:25443/sis/realizarPago';
$_['text_all_zones']       	= 'All Zones';

// Entry
$_['entry_entorno']	 = 'Entorno de Redsys:';
$_['entry_nombre']   = 'Nombre del comercio:';
$_['entry_fuc']      = 'Número de comercio(FUC):';
$_['entry_tipopago'] = 'Tipos de pago permitidos:';
$_['entry_clave256'] = 'Clave secreta de encriptación (SHA-256):';
$_['entry_term']     = 'Número de terminal:';
$_['entry_firma']  	 = 'Tipo de firma:';
$_['entry_moneda']   = 'Tipo de moneda:';
//$_['entry_trans'] 	 = 'Tipo de transacción :';
$_['entry_recargo']  = 'Recargo (% de recargo):';
$_['entry_activar_3ds']  = 'Activar el envío de datos adicionales para EMV 3DS:';


$_['entry_notif']  	 = 'Notificación HTTP (Inactivo no procesa pedido ni vacia el carrito):';
$_['entry_error'] 	 = 'En caso de error, permitir elegir otro medio de pago:';
$_['entry_idiomas']  = 'Activar los idiomas del TPV:';
 
$_['entry_status']   = 'Status:'; 
$_['entry_order_status'] = 'Order Status:';
$_['entry_sort_order']   = 'Sort Order:';

$_['entry_total']        = 'Total:The checkout total the order must reach before this payment method becomes active.';
$_['entry_geo_zone']     = 'Geo Zone:';
 
// Error
$_['error_permission']	= 'Warning: No tienes permisos para modificar Redsys!';
$_['error_nombre']		= 'Es necesario escribir el nombre del comercio!';
$_['error_fuc']			= 'Es necesario escribir el FUC del comercio!';
$_['error_clave']		= 'Es necesario escribir la clave del comercio!';
$_['error_term']		= 'Es necesario escribir el terminal del comercio!';
$_['error_trans']		= 'Es necesario escribir el tipo de transacción del comercio correctamente!';
$_['error_recargo']		= 'Es necesario escribir el recargo del comercio!';

$_['entry_log'] 	 = 'Activar log:';
$_['entry_error_pedido'] = 'Mantener pedido si se produce un error:';

$_['entry_completo']	 = 'Estado para pedidos completados:';
$_['entry_cancelado']	 = 'Estado para pedidos cancelados:';


?>