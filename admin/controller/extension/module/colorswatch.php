<?php
class ControllerExtensionModuleColorswatch extends Controller {
	private $error = array();
    private $moduleName = 'colorswatch';
    public $mdata = array();
    private $store_id = 0;

	public function index() {
        $this->load->model("setting/setting");

        $this->mdata['module'] = array(
            'product_type' => 'color',
            'product_box_width'  => '25',
            'product_box_height' => '25',

            'category_type' => 'color',
            'category_box_width'  => '25',
            'category_box_height' => '25',

            'related_type' => 'color',
            'related_box_width'  => '25',
            'related_box_height' => '25',

            'featured_type' => 'color',
            'featured_box_width'  => '25',
            'featured_box_height' => '25',
            'featured_tml' => '255'
        );

        $module = $this->getSettingByStore( $this->moduleName );

        if( empty($module) ) {
            $default_data = array();
            $default_data[$this->moduleName]=$this->mdata['module'];
            $this->model_setting_setting->editSetting( $this->moduleName, $default_data );
            $this->mdata['first_installation'] = 1;
        }


        $this->load->language("extension/module/colorswatch");

		$this->document->setTitle($this->language->get("module_title"));

		$this->load->model("setting/module");


        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {

            $this->mdata['module'] = array(
                'product_type' => $this->request->post["product_type"],
                'product_box_width'  => $this->request->post["product_boxwidth"],
                'product_box_height' =>  $this->request->post["product_boxheight"],

                'category_type' => $this->request->post["category_type"],
                'category_box_width'  => $this->request->post["category_boxwidth"],
                'category_box_height' =>  $this->request->post["category_boxheight"],

                'related_type' => $this->request->post["related_type"],
                'related_box_width'  => $this->request->post["related_boxwidth"],
                'related_box_height' =>  $this->request->post["related_boxheight"],

                'featured_type' => $this->request->post["featured_type"],
                'featured_box_width'  => $this->request->post["featured_boxwidth"],
                'featured_box_height' =>  $this->request->post["featured_boxheight"],
                'featured_tml' => '255'
            );
            $default_data = array();
            $default_data[$this->moduleName]=$this->mdata['module'];

            $this->model_setting_setting->editSetting( $this->moduleName, $default_data );

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

		if (isset($this->error["product_boxwidth"])) {
			$data["error_width_product"] = $this->error["product_boxwidth"];
		} else {
			$data["error_width_product"] = "";
		}

        if (isset($this->error["category_boxwidth"])) {
            $data["error_width_category"] = $this->error["category_boxwidth"];
        } else {
            $data["error_width_category"] = "";
        }

        if (isset($this->error["related_boxwidth"])) {
            $data["error_width_related"] = $this->error["related_boxwidth"];
        } else {
            $data["error_width_related"] = "";
        }

        if (isset($this->error["featured_boxwidth"])) {
            $data["error_width_featured"] = $this->error["featured_boxwidth"];
        } else {
            $data["error_width_featured"] = "";
        }


        if (isset($this->error["product_boxheight"])) {
            $data["error_height_product"] = $this->error["product_boxheight"];
        } else {
            $data["error_height_product"] = "";
        }

        if (isset($this->error["category_boxheight"])) {
            $data["error_height_category"] = $this->error["category_boxheight"];
        } else {
            $data["error_height_category"] = "";
        }

        if (isset($this->error["related_boxheight"])) {
            $data["error_height_related"] = $this->error["related_boxheight"];
        } else {
            $data["error_height_related"] = "";
        }

        if (isset($this->error["featured_boxheight"])) {
            $data["error_height_featured"] = $this->error["featured_boxheight"];
        } else {
            $data["error_height_featured"] = "";
        }


		$data["breadcrumbs"] = array();

		$data["breadcrumbs"][] = array(
			"text" => $this->language->get("text_home"),
			"href" => $this->url->link("common/dashboard", "user_token=" . $this->session->data["user_token"], true)
		);

		$data["breadcrumbs"][] = array(
			"text" => $this->language->get("text_extension"),
			"href" => $this->url->link("marketplace/extension", "user_token=" . $this->session->data["user_token"] . "&type=module", true)
		);

		if (!isset($this->request->get["module_id"])) {
			$data["breadcrumbs"][] = array(
				"text" => $this->language->get("module_title"),
				"href" => $this->url->link("extension/module/colorswatch", "user_token=" . $this->session->data["user_token"], true)
			);
		} else {
			$data["breadcrumbs"][] = array(
				"text" => $this->language->get("module_title"),
				"href" => $this->url->link("extension/module/colorswatch", "user_token=" . $this->session->data["user_token"] . "&module_id=" . $this->request->get["module_id"], true)
			);
		}

		if (!isset($this->request->get["module_id"])) {
			$data["action"] = $this->url->link("extension/module/colorswatch", "user_token=" . $this->session->data["user_token"], true);
		} else {
			$data["action"] = $this->url->link("extension/module/colorswatch", "user_token=" . $this->session->data["user_token"] . "&module_id=" . $this->request->get["module_id"], true);
		}

		$data["cancel"] = $this->url->link("marketplace/extension", "user_token=" . $this->session->data["user_token"] . "&type=module", true);

		if (isset($this->request->get["module_id"]) && ($this->request->server["REQUEST_METHOD"] != "POST")) {
			$module_info = $this->model_setting_module->getModule($this->request->get["module_id"]);
		}
		
		if (isset($this->request->post["colorswatch"]))
		{
				$data["colorswatch"] = $this->request->post["colorswatch"];
			} elseif (!empty($module_info)) {
				$data["colorswatch"] = $module_info["colorswatch"];
			} else {
				$data["colorswatch"] = false;
		}
		$this->load->model("localisation/language");

		$data["languages"] = $this->model_localisation_language->getLanguages();
		
		if(!$data["colorswatch"]) {
			foreach($data["languages"] as $lang){
				$data["colorswatch"][$lang["language_id"]]["teknodegisken"] = "";
			}
		}
		if (isset($this->request->post["name"])) {
			$data["name"] = $this->request->post["name"];
		} elseif (!empty($module_info)) {
			$data["name"] = $module_info["name"];
		} else {
			$data["name"] = "";
		}

		if (isset($this->request->post["status"])) {
			$data["status"] = $this->request->post["status"];
		} elseif (!empty($module_info)) {
			$data["status"] = $module_info["status"];
		} else {
			$data["status"] = "";
		}


        if (isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'))) {
            $data['base'] = HTTPS_SERVER;
        } else {
            $data['base'] = HTTP_SERVER;
        }

        $this->load->model("extension/module/colorswatch");
        //$data["cs_setting"] = $this->model_extension_module_colorswatch->getColorSwSetting();
        $data["cs_setting"] = $this->getSettingByStore( $this->moduleName );


		$data["header"] = $this->load->controller("common/header");
		$data["column_left"] = $this->load->controller("common/column_left");
		$data["footer"] = $this->load->controller("common/footer");


		$this->response->setOutput($this->load->view("extension/module/colorswatch", $data));
	}

    public function install()
    {

        $this->addOption();

        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "colorswatch_image` (
          `colorsw_option_id` int(11) NOT NULL,
          `product_image_id` int(11) NOT NULL AUTO_INCREMENT,
          `product_id` int(11) NOT NULL,
          `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
          `sort_order` int(3) NOT NULL DEFAULT 0,
          `is_rotator` tinyint(1) NULL DEFAULT 0,
          PRIMARY KEY (`product_image_id`) USING BTREE,
          INDEX `product_id`(`product_id`) USING BTREE
        )");



    }

    public function uninstall()
    {

        $this->db->query("DROP TABLE `" . DB_PREFIX . "colorswatch_image`");
        $this->searchOption();

    }

    public function searchOption() {


        $this->load->model('catalog/option');


        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'od.name';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'ASC';
        }

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        $data['options'] = array();

        $filter_data = array(
            'sort'  => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->model_catalog_option->getTotalOptions(),
            'limit' => $this->model_catalog_option->getTotalOptions()
        );

        $results = $this->model_catalog_option->getOptions($filter_data);

        foreach ($results as $result) {

            if ($result['name'] == "Color") {
                $this->deleteOption($result['option_id']);
            }

        }

    }

    public function addOption() {

        $this->load->language('catalog/option');

        $this->document->setTitle($this->language->get('heading_title'));


        $this->load->model("localisation/language");
        $languages = $this->model_localisation_language->getLanguages();


        $option_description = array();
        $option_value = array();


        for($x = 1; count($languages) >= $x; $x++) { // LANG NAME LOOP

            $n=0;
            $option_description[$x]['name'] = "Color";

            $option_value[$n]['option_value_description'][$x]['name'] = "Black";
            $option_value[$n]['image'] = "catalog/color/black.jpg";
            $option_value[$n]['sort_order'] = $n+1;

            $option_value[$n+1]['option_value_description'][$x]['name'] = "White";
            $option_value[$n+1]['image'] = "catalog/color/white.jpg";
            $option_value[$n+1]['sort_order'] = $n+2;

            $option_value[$n+2]['option_value_description'][$x]['name'] = "Gray";
            $option_value[$n+2]['image'] = "catalog/color/gray.jpg";
            $option_value[$n+2]['sort_order'] = $n+3;

            $option_value[$n+3]['option_value_description'][$x]['name'] = "Blue";
            $option_value[$n+3]['image'] = "catalog/color/blue.jpg";
            $option_value[$n+3]['sort_order'] = $n+4;

            $option_value[$n+4]['option_value_description'][$x]['name'] = "Green";
            $option_value[$n+4]['image'] = "catalog/color/green.jpg";
            $option_value[$n+4]['sort_order'] = $n+5;

            $option_value[$n+5]['option_value_description'][$x]['name'] = "Khaki";
            $option_value[$n+5]['image'] = "catalog/color/khaki.jpg";
            $option_value[$n+5]['sort_order'] = $n+6;

            $option_value[$n+6]['option_value_description'][$x]['name'] = "Navy Blue";
            $option_value[$n+6]['image'] = "catalog/color/navy-blue.jpg";
            $option_value[$n+6]['sort_order'] = $n+7;

            $option_value[$n+7]['option_value_description'][$x]['name'] = "Red";
            $option_value[$n+7]['image'] = "catalog/color/red.jpg";
            $option_value[$n+7]['sort_order'] = $n+8;

            $option_value[$n+8]['option_value_description'][$x]['name'] = "Yellow";
            $option_value[$n+8]['image'] = "catalog/color/yellow.jpg";
            $option_value[$n+8]['sort_order'] = $n+9;

            $option_value[$n+9]['option_value_description'][$x]['name'] = "Fuchsia";
            $option_value[$n+9]['image'] = "catalog/color/fuchsia.jpg";
            $option_value[$n+9]['sort_order'] = $n+10;

        }




/*
        $option_description = array();
        $option_value = array();

        $option_description[1]['name'] = "COLOR TEST";
        $option_value[0]['option_value_description'][1]['name'] = "Black";
     //   $option_value[0]['image'] = "catalog/color2/black.jpg";
        $option_value[0]['sort_order'] = 1;

        $option_description[2]['name'] = "COLOR TEST";
        $option_value[0]['option_value_description'][2]['name'] = "Black";
        $option_value[0]['image'] = "catalog/color2/black.jpg";
        $option_value[0]['sort_order'] = 2;
*/

        $color = array(
            'option_description' => $option_description,
            'option_value' => $option_value,
            'type' => 'select',
            'sort_order' => 0,
        );


        $this->load->model('catalog/option');

        $this->model_catalog_option->addOption(array_merge($option_description, $option_value, $color));

    }

    public function deleteOption($option_id) {

        $this->load->model('catalog/option');

        $this->model_catalog_option->deleteOption($option_id);

    }

    public function getSettingByStore( $group ){
        $data = $this->model_setting_setting->getSetting( $group, $this->store_id );
        return isset( $data[$group] )?$data[$group] :array();
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/colorswatch')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (!$this->request->post['product_boxwidth']) {
            $this->error['product_boxwidth'] = $this->language->get('error_width');
        }
        else if (!is_numeric($this->request->post['product_boxwidth'])) {
            $this->error['product_boxwidth'] = $this->language->get('error_numeric');
        }

        if (!$this->request->post['category_boxwidth']) {
            $this->error['category_boxwidth'] = $this->language->get('error_width');
        }
        else if (!is_numeric($this->request->post['category_boxwidth'])) {
            $this->error['category_boxwidth'] = $this->language->get('error_numeric');
        }

        if (!$this->request->post['related_boxwidth']) {
            $this->error['related_boxwidth'] = $this->language->get('error_width');
        }
        else if (!is_numeric($this->request->post['related_boxwidth'])) {
            $this->error['related_boxwidth'] = $this->language->get('error_numeric');
        }

        if (!$this->request->post['featured_boxwidth']) {
            $this->error['featured_boxwidth'] = $this->language->get('error_width');
        }
        else if (!is_numeric($this->request->post['featured_boxwidth'])) {
            $this->error['featured_boxwidth'] = $this->language->get('error_numeric');
        }



        if (!$this->request->post['product_boxheight']) {
            $this->error['product_boxheight'] = $this->language->get('error_height');
        }
        else if (!is_numeric($this->request->post['product_boxheight'])) {
            $this->error['product_boxheight'] = $this->language->get('error_numeric');
        }

        if (!$this->request->post['category_boxheight'] ) {
            $this->error['category_boxheight'] = $this->language->get('error_height');
        }
        else if (!is_numeric($this->request->post['category_boxheight'])) {
            $this->error['category_boxheight'] = $this->language->get('error_numeric');
        }

        if (!$this->request->post['related_boxheight']) {
            $this->error['related_boxheight'] = $this->language->get('error_height');
        }
        else if (!is_numeric($this->request->post['related_boxheight'])) {
            $this->error['related_boxheight'] = $this->language->get('error_numeric');
        }

        if (!$this->request->post['featured_boxheight']) {
            $this->error['featured_boxheight'] = $this->language->get('error_height');
        }
        else if (!is_numeric($this->request->post['featured_boxheight'])) {
            $this->error['featured_boxheight'] = $this->language->get('error_numeric');
        }


        return !$this->error;
    }

    function errorCheck($value) {

    }
}