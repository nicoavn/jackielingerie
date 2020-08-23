<?php
/**
* NOTA SOBRE LA LICENCIA DE USO DEL SOFTWARE
* 
* El uso de este software estÃƒÂ¡ sujeto a las Condiciones de uso de software que
* se incluyen en el paquete en el documento "Aviso Legal.pdf". TambiÃƒÂ©n puede
* obtener una copia en la siguiente url:
* http://www.redsys.es/wps/portal/redsys/publica/areadeserviciosweb/descargaDeDocumentacionYEjecutables
* 
* Redsys es titular de todos los derechos de propiedad intelectual e industrial
* del software.
* 
* Quedan expresamente prohibidas la reproducciÃƒÂ³n, la distribuciÃƒÂ³n y la
* comunicaciÃƒÂ³n pÃƒÂºblica, incluida su modalidad de puesta a disposiciÃƒÂ³n con fines
* distintos a los descritos en las Condiciones de uso.
* 
* Redsys se reserva la posibilidad de ejercer las acciones legales que le
* correspondan para hacer valer sus derechos frente a cualquier infracciÃƒÂ³n de
* los derechos de propiedad intelectual y/o industrial.
* 
* Redsys Servicios de Procesamiento, S.L., CIF B85955367
*/

class ControllerExtensionPaymentBizum extends Controller {
	private $error = array(); 
 
	public function index() {
		$this->load->language('extension/payment/bizum');

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
			$this->model_setting_setting->editSetting('payment_bizum', $this->request->post);				
			$this->model_setting_setting->editSetting('bizum', $this->request->post);
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
		$data['entry_clave256'] = $this->language->get('entry_clave256');
		$data['entry_term'] = $this->language->get('entry_term');
		$data['entry_moneda'] = $this->language->get('entry_moneda');	
		$data['entry_trans'] = $this->language->get('entry_trans');		
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
			'href'      => $this->url->link('common/home', $tokenName.'=' . $this->session->data[$tokenName], 'SSL'),
		);

		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_payment'),
			'href'      => $this->url->link('extension/payment', $tokenName.'=' . $this->session->data[$tokenName], 'SSL'),       		
		);
		
		$data['breadcrumbs'][] = array(
			'text'		=> $this->language->get('text_extension'),
			'href'		=> $this->url->link('extension/payment/bizum', $tokenName.'=' . $this->session->data[$tokenName], 'SSL')
		);
		
		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('extension/payment/bizum', $tokenName.'=' . $this->session->data[$tokenName], 'SSL'),
		);

		$data['action'] = $this->url->link('extension/payment/bizum', $tokenName.'=' . $this->session->data[$tokenName], 'SSL');

		$data['cancel'] = $this->url->link('extension/extension', $tokenName.'=' . $this->session->data[$tokenName], 'SSL');

		
		
		//RECOGIDA DE PARAMS!!!
		
		if (isset($this->request->post['bizum_entorno'])) {
			$data['bizum_entorno'] = $this->request->post['bizum_entorno'];
		} else {
			$data['bizum_entorno'] = $this->config->get('bizum_entorno');
		}

		if (isset($this->request->post['bizum_nombre'])) {
			$data['bizum_nombre'] = $this->request->post['bizum_nombre'];
		} else {
			$data['bizum_nombre'] = $this->config->get('bizum_nombre');
		}

		if (isset($this->request->post['bizum_fuc'])) {
			$data['bizum_fuc'] = $this->request->post['bizum_fuc'];
		} else {
			$data['bizum_fuc'] = $this->config->get('bizum_fuc');
		}
		
		if (isset($this->request->post['bizum_clave256'])) {
			$data['bizum_clave256'] = $this->request->post['bizum_clave256'];
		} else {
			$data['bizum_clave256'] = $this->config->get('bizum_clave256');
		}
		
		if (isset($this->request->post['bizum_term'])) {
			$data['bizum_term'] = $this->request->post['bizum_term'];
		} else {
			$data['bizum_term'] = $this->config->get('bizum_term');
		}

		if (isset($this->request->post['bizum_moneda'])) {
			$data['bizum_moneda'] = $this->request->post['bizum_moneda'];
		} else {
			$data['bizum_moneda'] = $this->config->get('bizum_moneda');
		}
		
		if (isset($this->request->post['bizum_trans'])) {
			$data['bizum_trans'] = $this->request->post['bizum_trans'];
		} else {
			$data['bizum_trans'] = $this->config->get('bizum_trans');
		}
	
		if (isset($this->request->post['bizum_log'])) {
			$data['bizum_log'] = $this->request->post['bizum_log'];
		} else {
			$data['bizum_log'] = $this->config->get('bizum_log');
		}
		
		if (isset($this->request->post['bizum_error_pedido'])) {
			$data['bizum_error_pedido'] = $this->request->post['bizum_error_pedido'];
		} else {
			$data['bizum_error_pedido'] = $this->config->get('bizum_error_pedido');
		}
		
		if (isset($this->request->post['bizum_notif'])) {
			$data['bizum_notif'] = $this->request->post['bizum_notif'];
		} else {
			$data['bizum_notif'] = $this->config->get('bizum_notif');
		}
		
		if (isset($this->request->post['bizum_error'])) {
			$data['bizum_error'] = $this->request->post['bizum_error'];
		} else {
			$data['bizum_error'] = $this->config->get('bizum_error');
		}
		
		if (isset($this->request->post['bizum_idiomas'])) {
			$data['bizum_idiomas'] = $this->request->post['bizum_idiomas'];
		} else {
			$data['bizum_idiomas'] = $this->config->get('bizum_idiomas');
		}
		
		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
		
		if (isset($this->request->post['payment_bizum_status'])) {
			$data['payment_bizum_status'] = $this->request->post['payment_bizum_status'];
		} else {
			$data['payment_bizum_status'] = $this->config->get('payment_bizum_status');
		}
		
		if (isset($this->request->post['bizum_status'])) {
			$data['bizum_status'] = $this->request->post['bizum_status'];
		} else {
			$data['bizum_status'] = $this->config->get('bizum_status');
		}

		if (isset($this->request->post['bizum_order_status_id'])) {
			$data['bizum_order_status_id'] = $this->request->post['bizum_order_status_id'];
		} else {
			$data['bizum_order_status_id'] = $this->config->get('bizum_order_status_id'); 
		} 
		
		if (isset($this->request->post['bizum_sort_order'])) {
			$data['bizum_sort_order'] = $this->request->post['bizum_sort_order'];
		} else {
			$data['bizum_sort_order'] = $this->config->get('bizum_sort_order');
		}
		
			if (isset($this->request->post['bizum_total'])) {
			$data['bizum_total'] = $this->request->post['bizum_total'];
		} else {
			$data['bizum_total'] = $this->config->get('bizum_total'); 
		} 

		if (isset($this->request->post['bizum_geo_zone_id'])) {
			$data['bizum_geo_zone_id'] = $this->request->post['bizum_geo_zone_id'];
		} else {
			$data['bizum_geo_zone_id'] = $this->config->get('bizum_geo_zone_id'); 
		} 
		
		if (isset($this->request->post['bizum_estado_completo'])) {
			$data['bizum_estado_completo'] = $this->request->post['bizum_estado_completo'];
		} else {
			if (array_key_exists('bizum_estado_completo', $this->config)) {
				$data['bizum_estado_completo'] = $this->config->get('bizum_estado_completo');
			}
			$data['bizum_estado_completo'] = 5;
		}

		if (isset($this->request->post['bizum_estado_cancelado'])) {
			$data['bizum_estado_cancelado'] = $this->request->post['bizum_estado_cancelado'];
		} else {
			if (array_key_exists('bizum_estado_cancelado', $this->config)) {
				$data['bizum_estado_cancelado'] = $this->config->get('bizum_estado_cancelado');
			}
			$data['bizum_estado_cancelado'] = 7;
		}

		
		$this->load->model('localisation/geo_zone');

		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();
		
		
		//FIN DE RECOGIDA DE PARAMS.
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/payment/bizum', $data));

	}
	private function validate() {
		
		if (!$this->user->hasPermission('modify', 'extension/payment/bizum')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['bizum_nombre']) {
			$this->error['nombre'] = $this->language->get('error_nombre');
		}

		if (!$this->request->post['bizum_fuc']) {
			$this->error['fuc'] = $this->language->get('error_fuc');
		}
		
		if (!$this->request->post['bizum_clave256']) {
			$this->error['clave256'] = $this->language->get('error_clave256');
		}

		if (!$this->request->post['bizum_term']) {
			$this->error['terminal'] = $this->language->get('error_terminal');
		}
		
		if ($this->request->post['bizum_trans']!="0") {
			$this->error['trans'] = $this->language->get('error_trans');
		}

		
		if (!$this->error) {
			return true;
		} else {
			return false;
		}	
	
	
	
	}
}
?>