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
echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-redsys" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <img src="view/image/extension/payment/Redsys.png" alt="" height="65" width="172"/>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-redsys" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $entry_entorno; ?></label>
            <div class="col-sm-10">
              <select name="redsys_entorno">
                <?php if ($redsys_entorno == 'Real') { ?>
                <option value="Real" selected="selected"><?php echo $text_real; ?></option>
                <?php } else { ?>
                <option value="Real"><?php echo $text_real; ?></option>
                <?php } ?>
                <?php if ($redsys_entorno == 'Sis-d') { ?>
                <option value="Sis-d" selected="selected"><?php echo $text_sisd; ?></option>
                <?php } else { ?>
                <option value="Sis-d"><?php echo $text_sisd; ?></option>
                <?php } ?>
                <?php if ($redsys_entorno == 'Sis-i') { ?>
                <option value="Sis-i" selected="selected"><?php echo $text_sisi; ?></option>
                <?php } else { ?>
                <option value="Sis-i"><?php echo $text_sisi; ?></option>
                <?php } ?>
				<?php if ($redsys_entorno == 'Sis-t') { ?>
                <option value="Sis-t" selected="selected"><?php echo $text_sist; ?></option>
                <?php } else { ?>
                <option value="Sis-t"><?php echo $text_sist; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
		  
		  <div class="form-group required">
            <label class="col-sm-2 control-label"><?php echo $entry_nombre; ?></label>
            <div class="col-sm-10">
              <input type="text" name="redsys_nombre" value="<?php echo $redsys_nombre; ?>" class="form-control" />
            </div>
          </div>
		  
		  <div class="form-group required">
            <label class="col-sm-2 control-label"><?php echo $entry_fuc; ?></label>
            <div class="col-sm-10">
              <input type="text" name="redsys_fuc" value="<?php echo $redsys_fuc; ?>" class="form-control" />
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $entry_tipopago; ?></label>
            <div class="col-sm-10">
			        <select name="redsys_tipopago">
                <?php if ($redsys_tipopago == ' ') { ?>
                <option value=" " selected="selected">Todos</option>
                <?php } else { ?>
                <option value=" ">Todos</option>
                <?php } ?>
                <?php if ($redsys_tipopago == 'C') { ?>
                <option value="C" selected="selected">Solo tarjeta</option>
                <?php } else { ?>
                <option value="C">Solo tarjeta</option>
                <?php } ?>
			
              </select>
            </div>
          </div>
		  
		  <div class="form-group required">
            <label class="col-sm-2 control-label" ><?php echo $entry_clave256; ?></label>
            <div class="col-sm-10">
              <input type="text" name="redsys_clave256" value="<?php echo $redsys_clave256; ?>" class="form-control" />
            </div>
          </div>
		  
		  <div class="form-group required">
            <label class="col-sm-2 control-label" ><?php echo $entry_term; ?></label>
            <div class="col-sm-10">
              <input type="text" name="redsys_term" value="<?php echo $redsys_term; ?>" class="form-control" />
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $entry_moneda; ?></label>
            <div class="col-sm-10">
			  <select name="redsys_moneda">
                <?php if ($redsys_moneda == 'EURO') { ?>
                <option value="EURO" selected="selected">EURO</option>
                <?php } else { ?>
                <option value="EURO">EURO</option>
                <?php } ?>
                <?php if ($redsys_moneda == 'DOLAR') { ?>
                <option value="DOLAR" selected="selected">DOLAR</option>
                <?php } else { ?>
                <option value="DOLAR">DOLAR</option>
                <?php } ?>
              </select>
            </div>
          </div>
		  
      <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $entry_log; ?></label>
            <div class="col-sm-10">
       <select name="redsys_log">
                <?php if ($redsys_log == 'Si') { ?>
                <option value="Si" selected="selected">Si</option>
                <?php } else { ?>
                <option value="Si">Si</option>
                <?php } ?>
                <?php if ($redsys_log == 'No') { ?>
                <option value="No" selected="selected">No</option>
                <?php } else { ?>
                <option value="No">No</option>
                <?php } ?>
              </select>
            </div>
          </div>          
      
 <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $entry_activar_3ds; ?></label>
            <div class="col-sm-10">
       <select name="redsys_activar_3ds">
                <?php if ($redsys_activar_3ds == 'Si') { ?>
                <option value="Si" selected="selected">Si</option>
                <?php } else { ?>
                <option value="Si">Si</option>
                <?php } ?>
                <?php if ($redsys_activar_3ds == 'No') { ?>
                <option value="No" selected="selected">No</option>
                <?php } else { ?>
                <option value="No">No</option>
                <?php } ?>
              </select>
            </div>
          </div> 

      <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $entry_error_pedido; ?></label>
            <div class="col-sm-10">
       <select name="redsys_error_pedido">
                <?php if ($redsys_error_pedido == 'Si') { ?>
                <option value="Si" selected="selected">Si</option>
                <?php } else { ?>
                <option value="Si">Si</option>
                <?php } ?>
                <?php if ($redsys_error_pedido == 'No') { ?>
                <option value="No" selected="selected">No</option>
                <?php } else { ?>
                <option value="No">No</option>
                <?php } ?>
              </select>
            </div>
          </div>
      
      <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $entry_notif; ?></label>
            <div class="col-sm-10">
       <select name="redsys_notif">
                <?php if ($redsys_notif == 'Si') { ?>
                <option value="Si" selected="selected">Si</option>
                <?php } else { ?>
                <option value="Si">Si</option>
                <?php } ?>
                <?php if ($redsys_notif == 'No') { ?>
                <option value="No" selected="selected">No</option>
                <?php } else { ?>
                <option value="No">No</option>
                <?php } ?>
              </select>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $entry_error; ?></label>
            <div class="col-sm-10">
			  <select name="redsys_error">
                <?php if ($redsys_error == 'Si') { ?>
                <option value="Si" selected="selected">Si</option>
                <?php } else { ?>
                <option value="Si">Si</option>
                <?php } ?>
                <?php if ($redsys_error == 'No') { ?>
                <option value="No" selected="selected">No</option>
                <?php } else { ?>
                <option value="No">No</option>
                <?php } ?>
              </select>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $entry_idiomas; ?></label>
            <div class="col-sm-10">
			  <select name="redsys_idiomas">
                <?php if ($redsys_idiomas == 'Si') { ?>
                <option value="Si" selected="selected">Si</option>
                <?php } else { ?>
                <option value="Si">Si</option>
                <?php } ?>
                <?php if ($redsys_idiomas == 'No') { ?>
                <option value="No" selected="selected">No</option>
                <?php } else { ?>
                <option value="No">No</option>
                <?php } ?>
              </select>
            </div>
          </div>

		  <div class="form-group">
			<label class="col-sm-2 control-label"><?php echo $entry_completo; ?></label>
			<div class="col-sm-10">
			  <select name="redsys_estado_completo" class="form-control">
				<?php foreach ($order_statuses as $order_status) { ?>
				<?php if ($order_status['order_status_id'] == $redsys_estado_completo) { ?>
				<option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
				<?php } else { ?>
				<option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
				<?php } ?>
				<?php } ?>
			  </select>
			</div>
		  </div>

		  <div class="form-group">
			<label class="col-sm-2 control-label"><?php echo $entry_cancelado; ?></label>
			<div class="col-sm-10">
			  <select name="redsys_estado_cancelado" class="form-control">
				<?php foreach ($order_statuses as $order_status) { ?>
				<?php if ($order_status['order_status_id'] == $redsys_estado_cancelado) { ?>
				<option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
				<?php } else { ?>
				<option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
				<?php } ?>
				<?php } ?>
			  </select>
			</div>
		  </div>

		  
		  <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $entry_status; ?></label>
            <div class="col-sm-10">
			  <select name="redsys_status">
                <?php if ($redsys_status) { ?>
                <option value="1" selected="selected">Activo</option>
                <option value="0">Desactivo</option>
                <?php } else { ?>
                <option value="1">Activo</option>
                <option value="0" selected="selected">Desactivo</option>
                <?php } ?>
              </select>
            </div>
          </div>
	  
		  <div class="form-group">
            <label class="col-sm-2 control-label" for="input-sort-order"><?php echo $entry_sort_order; ?></label>
            <div class="col-sm-10">
              <input type="text" name="redsys_sort_order" value="<?php echo $redsys_sort_order; ?>" class="form-control" />
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $entry_total; ?></label>
            <div class="col-sm-10">
              <input type="text" name="redsys_total" value="<?php echo $redsys_total; ?>" class="form-control" />
            </div>
          </div>
		  
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-geo-zone"><?php echo $entry_geo_zone; ?></label>
            <div class="col-sm-10">
              <select name="redsys_geo_zone_id" id="input-geo-zone" class="form-control">
                <option value="0"><?php echo $text_all_zones; ?></option>
                <?php foreach ($geo_zones as $geo_zone) { ?>
                <?php if ($geo_zone['geo_zone_id'] == $redsys_geo_zone_id) { ?>
                <option value="<?php echo $geo_zone['geo_zone_id']; ?>" selected="selected"><?php echo $geo_zone['name']; ?></option>
                <?php } else { ?>
                <option value="<?php echo $geo_zone['geo_zone_id']; ?>"><?php echo $geo_zone['name']; ?></option>
                <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
<?php echo $footer; ?> 