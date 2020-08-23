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

class ControllerExtensionPaymentRedsys extends Controller {
	private $error = array(); 
 
	public function index() {
		
		$this->load->language('extension/payment/redsys');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');
		
		$data['breadcrumbs'] = array();
		$tokenName="token";
		$redirDest="extension/extension";
		if (array_key_exists("user_token",$this->session->data)) {
			$tokenName="user_token";
			$redirDest="marketplace/extension";
		}
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate() ) {
			$this->model_setting_setting->editSetting('redsys', $this->request->post);				
			///
			$this->model_setting_setting->editSetting('payment_redsys', $this->request->post);
			///
			$this->session->data['success'] = $this->language->get('text_success');
			
			$this->response->redirect($this->url->link($redirDest, $tokenName.'=' . $this->session->data[$tokenName], 'SSL'));
		}
		
		$data['heading_title'] = $this->language->get('heading_title');
	
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');

		$data['text_real'] = $this->language->get('text_real');
		$data['text_sisd'] = $this->language->get('text_sisd');
		$data['text_sisi'] = $this->language->get('text_sisi');	
		$data['text_sist'] = $this->language->get('text_sist');	

		$data['text_payment'] = $this->language->get('text_payment');
		$data['text_defered'] = $this->language->get('text_defered');
		$data['text_authenticate'] = $this->language->get('text_authenticate');

		$data['text_all_zones'] = $this->language->get('text_all_zones');
		
		$data['entry_entorno'] = $this->language->get('entry_entorno');
		$data['entry_nombre'] = $this->language->get('entry_nombre');
		$data['entry_fuc'] = $this->language->get('entry_fuc');
		$data['entry_tipopago'] = $this->language->get('entry_tipopago');
		$data['entry_clave256'] = $this->language->get('entry_clave256');
		$data['entry_term'] = $this->language->get('entry_term');
		$data['entry_moneda'] = $this->language->get('entry_moneda');
		//$data['entry_trans'] = $this->language->get('entry_trans');
		$data['entry_log'] = $this->language->get('entry_log');
		$data['entry_error_pedido'] = $this->language->get('entry_error_pedido');
		
		$data['entry_notif'] = $this->language->get('entry_notif');
		$data['entry_error'] = $this->language->get('entry_error');
		$data['entry_idiomas'] = $this->language->get('entry_idiomas');

		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_order_status'] = $this->language->get('entry_order_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		
		$data['entry_total'] = $this->language->get('entry_total');
		$data['entry_geo_zone'] = $this->language->get('entry_geo_zone');
		
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['entry_completo'] = $this->language->get('entry_completo');
		$data['entry_cancelado'] = $this->language->get('entry_cancelado');

		$data['entry_activar_3ds'] = $this->language->get('entry_activar_3ds');

		$this->load->model('localisation/order_status');
		$data['estados_pedido'] = $this->model_localisation_order_status->getOrderStatuses();
		
		// RECOGIDA DE ERRORES
		
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['nombre'])) {
			$data['error_nombre'] = $this->error['nombre'];
		} else {
			$data['error_nombre'] = '';
		}
		
		if (isset($this->error['fuc'])) {
			$data['error_fuc'] = $this->error['fuc'];
		} else {
			$data['error_fuc'] = '';
		}
		
		if (isset($this->error['clave256'])) {
			$data['error_clave256'] = $this->error['clave256'];
		} else {
			$data['error_clave256'] = '';
		}
		
		if (isset($this->error['term'])) {
			$data['error_term'] = $this->error['term'];
		} else {
			$data['error_term'] = '';
		}
		
		if (isset($this->error['trans'])) {
			$data['error_trans'] = $this->error['trans'];
		} else {
			$data['error_trans'] = '';
		}
		
		// FIN DE ERRORES
		
		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', $tokenName.'=' . $this->session->data[$tokenName], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_payment'),
			'href'      => $this->url->link('extension/payment', $tokenName.'=' . $this->session->data[$tokenName], 'SSL')      		
		);

		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('extension/payment/redsys', $tokenName.'=' . $this->session->data[$tokenName], 'SSL')
		);
		
		$data['action'] = $this->url->link('extension/payment/redsys', $tokenName.'=' . $this->session->data[$tokenName], 'SSL');

		$data['cancel'] = $this->url->link('extension/extension', $tokenName.'=' . $this->session->data[$tokenName], 'SSL');
		
		
		//RECOGIDA DE PARAM.
		
		if (isset($this->request->post['redsys_entorno'])) {
			$data['redsys_entorno'] = $this->request->post['redsys_entorno'];
		} else {
			$data['redsys_entorno'] = $this->config->get('redsys_entorno');
		}

		if (isset($this->request->post['redsys_nombre'])) {
			$data['redsys_nombre'] = $this->request->post['redsys_nombre'];
		} else {
			$data['redsys_nombre'] = $this->config->get('redsys_nombre');
		}

		if (isset($this->request->post['redsys_fuc'])) {
			$data['redsys_fuc'] = $this->request->post['redsys_fuc'];
		} else {
			$data['redsys_fuc'] = $this->config->get('redsys_fuc');
		}
		
		if (isset($this->request->post['redsys_tipopago'])) {
			$data['redsys_tipopago'] = $this->request->post['redsys_tipopago'];
		} else {
			$data['redsys_tipopago'] = $this->config->get('redsys_tipopago');
		}

		if (isset($this->request->post['redsys_clave256'])) {
			$data['redsys_clave256'] = $this->request->post['redsys_clave256'];
		} else {
			$data['redsys_clave256'] = $this->config->get('redsys_clave256');
		}
		
		if (isset($this->request->post['redsys_term'])) {
			$data['redsys_term'] = $this->request->post['redsys_term'];
		} else {
			$data['redsys_term'] = $this->config->get('redsys_term');
		}

		if (isset($this->request->post['redsys_moneda'])) {
			$data['redsys_moneda'] = $this->request->post['redsys_moneda'];
		} else {
			$data['redsys_moneda'] = $this->config->get('redsys_moneda');
		}
		
		if (isset($this->request->post['redsys_trans'])) {
			$data['redsys_trans'] = $this->request->post['redsys_trans'];
		} else {
			$data['redsys_trans'] = $this->config->get('redsys_trans');
		}
	
		if (isset($this->request->post['redsys_log'])) {
			$data['redsys_log'] = $this->request->post['redsys_log'];
		} else {
			$data['redsys_log'] = $this->config->get('redsys_log');
		}
		
		if (isset($this->request->post['redsys_error_pedido'])) {
			$data['redsys_error_pedido'] = $this->request->post['redsys_error_pedido'];
		} else {
			$data['redsys_error_pedido'] = $this->config->get('redsys_error_pedido');
		}

		if (isset($this->request->post['redsys_notif'])) {
			$data['redsys_notif'] = $this->request->post['redsys_notif'];
		} else {
			$data['redsys_notif'] = $this->config->get('redsys_notif');
		}
		
		if (isset($this->request->post['redsys_error'])) {
			$data['redsys_error'] = $this->request->post['redsys_error'];
		} else {
			$data['redsys_error'] = $this->config->get('redsys_error');
		}
		
		if (isset($this->request->post['redsys_idiomas'])) {
			$data['redsys_idiomas'] = $this->request->post['redsys_idiomas'];
		} else {
			$data['redsys_idiomas'] = $this->config->get('redsys_idiomas');
		}
		
		if (isset($this->request->post['redsys_status'])) {
			$data['redsys_status'] = $this->request->post['redsys_status'];
		} else {
			$data['redsys_status'] = $this->config->get('redsys_status');
		}
		
		if (isset($this->request->post['payment_redsys_status'])) {
			$data['payment_redsys_status'] = $this->request->post['payment_redsys_status'];
		} else {
			$data['payment_redsys_status'] = $this->config->get('payment_redsys_status');
		}

		if (isset($this->request->post['redsys_order_status_id'])) {
			$data['redsys_order_status_id'] = $this->request->post['redsys_order_status_id'];
		} else {
			$data['redsys_order_status_id'] = $this->config->get('redsys_order_status_id'); 
		} 

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
		
		
		if (isset($this->request->post['redsys_sort_order'])) {
			$data['redsys_sort_order'] = $this->request->post['redsys_sort_order'];
		} else {
			$data['redsys_sort_order'] = $this->config->get('redsys_sort_order');
		}
		
			if (isset($this->request->post['redsys_total'])) {
			$data['redsys_total'] = $this->request->post['redsys_total'];
		} else {
			$data['redsys_total'] = $this->config->get('redsys_total'); 
		} 

		if (isset($this->request->post['redsys_geo_zone_id'])) {
			$data['redsys_geo_zone_id'] = $this->request->post['redsys_geo_zone_id'];
		} else {
			$data['redsys_geo_zone_id'] = $this->config->get('redsys_geo_zone_id');
		}
		
		if (isset($this->request->post['redsys_estado_completo'])) {
			$data['redsys_estado_completo'] = $this->request->post['redsys_estado_completo'];
		} else {
			$data['redsys_estado_completo'] = $this->config->get('redsys_estado_completo');
		}

		if (isset($this->request->post['redsys_estado_cancelado'])) {
			$data['redsys_estado_cancelado'] = $this->request->post['redsys_estado_cancelado'];
		} else {
			$data['redsys_estado_cancelado'] = $this->config->get('redsys_estado_cancelado');
		}

		if (isset($this->request->post['redsys_activar_3ds'])) {
			$data['redsys_activar_3ds'] = $this->request->post['redsys_activar_3ds'];
		} else {
			$data['redsys_activar_3ds'] = $this->config->get('redsys_activar_3ds');
		}


		$this->load->model('localisation/geo_zone');

		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();
		
		
		//FIN DE RECOGIDA DE PARAMS.


		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/payment/redsys', $data));

 
	}
	private function validate() {
		
		if (!$this->user->hasPermission('modify', 'extension/payment/redsys')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['redsys_nombre']) {
			$this->error['nombre'] = $this->language->get('error_nombre');
		}

		if (!$this->request->post['redsys_fuc']) {
			$this->error['fuc'] = $this->language->get('error_fuc');
		}
		/*
		if (!$this->request->post['redsys_tipopago']) {
			$this->error['tipopago'] = $this->language->get('error_tipopago');
		}
		*/
		if (!$this->request->post['redsys_clave256']) {
			$this->error['clave256'] = $this->language->get('error_clave256');
		}

		if (!$this->request->post['redsys_term']) {
			$this->error['terminal'] = $this->language->get('error_terminal');
		}
		/*
		if ($this->request->post['redsys_trans']!="0") {
			$this->error['trans'] = $this->language->get('error_trans');
		}
		*/
		
		if (!$this->error) {
			return true;
		} else {
			return false;
		}	
	
	
	
	}
}
?>