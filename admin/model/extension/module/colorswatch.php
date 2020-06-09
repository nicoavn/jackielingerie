<?php
class ModelExtensionModuleColorswatch extends Model {

    /*COLORSWATCH*/
      public function getColorSwSetting() {
          $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "colorswatch_setting");

          return $query->rows;
      }

   /* public function salata() {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "colorswatch_image WHERE colorsw_option_id = 10 ORDER BY sort_order ASC");

        return $query->rows;
    }
    */

}


