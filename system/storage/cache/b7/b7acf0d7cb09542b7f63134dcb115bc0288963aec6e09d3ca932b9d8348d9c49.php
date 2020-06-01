<?php

/* setting/setting.twig */
class __TwigTemplate_f05df0d8c91afee6af320f8b83de3944c92843a3035d5bd8f99415ecad5fee97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 21
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 28
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_store"]) ? $context["tab_store"] : null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_local"]) ? $context["tab_local"] : null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_mail"]) ? $context["tab_mail"] : null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["tab_server"]) ? $context["tab_server"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 44
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 46
        echo (isset($context["config_meta_title"]) ? $context["config_meta_title"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />";
        // line 47
        if ((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null)) {
            // line 48
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_meta_title"]) ? $context["error_meta_title"] : null);
            echo "</div>";
        }
        // line 49
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 52
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 54
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo (isset($context["config_meta_description"]) ? $context["config_meta_description"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 58
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 60
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo (isset($context["config_meta_keyword"]) ? $context["config_meta_keyword"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 64
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 69
            if (($this->getAttribute($context["theme"], "value", array()) == (isset($context["config_theme"]) ? $context["config_theme"] : null))) {
                // line 70
                echo "                    
                    <option value=\"";
                // line 71
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>";
            } else {
                // line 74
                echo "                    
                    <option value=\"";
                // line 75
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                  
                  </select>
                  <br />
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 85
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 90
            if (($this->getAttribute($context["layout"], "layout_id", array()) == (isset($context["config_layout_id"]) ? $context["config_layout_id"] : null))) {
                // line 91
                echo "                    
                    <option value=\"";
                // line 92
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>";
            } else {
                // line 95
                echo "                    
                    <option value=\"";
                // line 96
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 107
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 109
        echo (isset($context["config_name"]) ? $context["config_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />";
        // line 110
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 111
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>";
        }
        // line 112
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 115
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 117
        echo (isset($context["config_owner"]) ? $context["config_owner"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "\" id=\"input-owner\" class=\"form-control\" />";
        // line 118
        if ((isset($context["error_owner"]) ? $context["error_owner"] : null)) {
            // line 119
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_owner"]) ? $context["error_owner"] : null);
            echo "</div>";
        }
        // line 120
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 123
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 125
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo (isset($context["config_address"]) ? $context["config_address"] : null);
        echo "</textarea>";
        // line 126
        if ((isset($context["error_address"]) ? $context["error_address"] : null)) {
            // line 127
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_address"]) ? $context["error_address"] : null);
            echo "</div>";
        }
        // line 128
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 131
        echo (isset($context["help_geocode"]) ? $context["help_geocode"] : null);
        echo "\">";
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 133
        echo (isset($context["config_geocode"]) ? $context["config_geocode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 137
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 139
        echo (isset($context["config_email"]) ? $context["config_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />";
        // line 140
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 141
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>";
        }
        // line 142
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 145
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 147
        echo (isset($context["config_telephone"]) ? $context["config_telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />";
        // line 148
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 149
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>";
        }
        // line 150
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 153
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 155
        echo (isset($context["config_fax"]) ? $context["config_fax"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 159
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 160
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 161
        echo (isset($context["config_image"]) ? $context["config_image"] : null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 165
        echo (isset($context["help_open"]) ? $context["help_open"] : null);
        echo "\">";
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 167
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo (isset($context["config_open"]) ? $context["config_open"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 171
        echo (isset($context["help_comment"]) ? $context["help_comment"] : null);
        echo "\">";
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 173
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo (isset($context["config_comment"]) ? $context["config_comment"] : null);
        echo "</textarea>
                </div>
              </div>";
        // line 176
        if ((isset($context["locations"]) ? $context["locations"] : null)) {
            // line 177
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 178
            echo (isset($context["help_location"]) ? $context["help_location"] : null);
            echo "\">";
            echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 180
                echo "                  <div class=\"checkbox\">
                    <label>";
                // line 181
                if (twig_in_filter($this->getAttribute($context["location"], "location_id", array()), (isset($context["config_location"]) ? $context["config_location"] : null))) {
                    // line 182
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" checked=\"checked\" />";
                    // line 183
                    echo $this->getAttribute($context["location"], "name", array());
                } else {
                    // line 185
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" />";
                    // line 186
                    echo $this->getAttribute($context["location"], "name", array());
                }
                // line 187
                echo " </label>
                  </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo " </div>
              </div>";
        }
        // line 191
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 194
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 199
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["config_country_id"]) ? $context["config_country_id"] : null))) {
                // line 200
                echo "                    
                    <option value=\"";
                // line 201
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>";
            } else {
                // line 204
                echo "                    
                    <option value=\"";
                // line 205
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 214
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 221
        echo (isset($context["entry_language"]) ? $context["entry_language"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 226
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["config_language"]) ? $context["config_language"] : null))) {
                // line 227
                echo "                    
                    <option value=\"";
                // line 228
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>";
            } else {
                // line 231
                echo "                    
                    <option value=\"";
                // line 232
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 241
        echo (isset($context["entry_admin_language"]) ? $context["entry_admin_language"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 246
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["config_admin_language"]) ? $context["config_admin_language"] : null))) {
                // line 247
                echo "                    
                    <option value=\"";
                // line 248
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>";
            } else {
                // line 251
                echo "                    
                    <option value=\"";
                // line 252
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 261
        echo (isset($context["help_currency"]) ? $context["help_currency"] : null);
        echo "\">";
        echo (isset($context["entry_currency"]) ? $context["entry_currency"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 266
            if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["config_currency"]) ? $context["config_currency"] : null))) {
                // line 267
                echo "                    
                    <option value=\"";
                // line 268
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>";
            } else {
                // line 271
                echo "                    
                    <option value=\"";
                // line 272
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 281
        echo (isset($context["help_currency_auto"]) ? $context["help_currency_auto"] : null);
        echo "\">";
        echo (isset($context["entry_currency_auto"]) ? $context["entry_currency_auto"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">";
        // line 283
        if ((isset($context["config_currency_auto"]) ? $context["config_currency_auto"] : null)) {
            // line 284
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />";
            // line 285
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 287
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />";
            // line 288
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 289
        echo " </label>
                  <label class=\"radio-inline\">";
        // line 290
        if ( !(isset($context["config_currency_auto"]) ? $context["config_currency_auto"] : null)) {
            // line 291
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />";
            // line 292
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 294
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />";
            // line 295
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 296
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 300
        echo (isset($context["entry_length_class"]) ? $context["entry_length_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["length_classes"]) ? $context["length_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 305
            if (($this->getAttribute($context["length_class"], "length_class_id", array()) == (isset($context["config_length_class_id"]) ? $context["config_length_class_id"] : null))) {
                // line 306
                echo "                    
                    <option value=\"";
                // line 307
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>";
            } else {
                // line 310
                echo "                    
                    <option value=\"";
                // line 311
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 315
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 320
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">";
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 325
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["config_weight_class_id"]) ? $context["config_weight_class_id"] : null))) {
                // line 326
                echo "                    
                    <option value=\"";
                // line 327
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>";
            } else {
                // line 330
                echo "                    
                    <option value=\"";
                // line 331
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 335
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 342
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 344
        echo (isset($context["help_product_count"]) ? $context["help_product_count"] : null);
        echo "\">";
        echo (isset($context["entry_product_count"]) ? $context["entry_product_count"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 346
        if ((isset($context["config_product_count"]) ? $context["config_product_count"] : null)) {
            // line 347
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />";
            // line 348
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 350
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />";
            // line 351
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 352
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 353
        if ( !(isset($context["config_product_count"]) ? $context["config_product_count"] : null)) {
            // line 354
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />";
            // line 355
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 357
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />";
            // line 358
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 359
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 363
        echo (isset($context["help_limit_admin"]) ? $context["help_limit_admin"] : null);
        echo "\">";
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 365
        echo (isset($context["config_limit_admin"]) ? $context["config_limit_admin"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />";
        // line 366
        if ((isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null)) {
            // line 367
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null);
            echo "</div>";
        }
        // line 368
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 372
        echo (isset($context["text_review"]) ? $context["text_review"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 374
        echo (isset($context["help_review"]) ? $context["help_review"] : null);
        echo "\">";
        echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 376
        if ((isset($context["config_review_status"]) ? $context["config_review_status"] : null)) {
            // line 377
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />";
            // line 378
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 380
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />";
            // line 381
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 382
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 383
        if ( !(isset($context["config_review_status"]) ? $context["config_review_status"] : null)) {
            // line 384
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />";
            // line 385
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 387
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />";
            // line 388
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 389
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 393
        echo (isset($context["help_review_guest"]) ? $context["help_review_guest"] : null);
        echo "\">";
        echo (isset($context["entry_review_guest"]) ? $context["entry_review_guest"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 395
        if ((isset($context["config_review_guest"]) ? $context["config_review_guest"] : null)) {
            // line 396
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />";
            // line 397
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 399
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />";
            // line 400
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 401
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 402
        if ( !(isset($context["config_review_guest"]) ? $context["config_review_guest"] : null)) {
            // line 403
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />";
            // line 404
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 406
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />";
            // line 407
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 408
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 413
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 415
        echo (isset($context["help_voucher_min"]) ? $context["help_voucher_min"] : null);
        echo "\">";
        echo (isset($context["entry_voucher_min"]) ? $context["entry_voucher_min"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 417
        echo (isset($context["config_voucher_min"]) ? $context["config_voucher_min"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher_min"]) ? $context["entry_voucher_min"] : null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />";
        // line 418
        if ((isset($context["error_voucher_min"]) ? $context["error_voucher_min"] : null)) {
            // line 419
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_voucher_min"]) ? $context["error_voucher_min"] : null);
            echo "</div>";
        }
        // line 420
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 423
        echo (isset($context["help_voucher_max"]) ? $context["help_voucher_max"] : null);
        echo "\">";
        echo (isset($context["entry_voucher_max"]) ? $context["entry_voucher_max"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 425
        echo (isset($context["config_voucher_max"]) ? $context["config_voucher_max"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher_max"]) ? $context["entry_voucher_max"] : null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />";
        // line 426
        if ((isset($context["error_voucher_max"]) ? $context["error_voucher_max"] : null)) {
            // line 427
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_voucher_max"]) ? $context["error_voucher_max"] : null);
            echo "</div>";
        }
        // line 428
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 432
        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 434
        echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 436
        if ((isset($context["config_tax"]) ? $context["config_tax"] : null)) {
            // line 437
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />";
            // line 438
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 440
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />";
            // line 441
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 442
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 443
        if ( !(isset($context["config_tax"]) ? $context["config_tax"] : null)) {
            // line 444
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />";
            // line 445
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 447
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />";
            // line 448
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 449
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 453
        echo (isset($context["help_tax_default"]) ? $context["help_tax_default"] : null);
        echo "\">";
        echo (isset($context["entry_tax_default"]) ? $context["entry_tax_default"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 456
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>";
        // line 458
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "shipping")) {
            // line 459
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 460
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>";
        } else {
            // line 463
            echo "                      
                      <option value=\"shipping\">";
            // line 464
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>";
        }
        // line 467
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "payment")) {
            // line 468
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 469
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>";
        } else {
            // line 472
            echo "                      
                      <option value=\"payment\">";
            // line 473
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>";
        }
        // line 476
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 481
        echo (isset($context["help_tax_customer"]) ? $context["help_tax_customer"] : null);
        echo "\">";
        echo (isset($context["entry_tax_customer"]) ? $context["entry_tax_customer"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 484
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>";
        // line 486
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "shipping")) {
            // line 487
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 488
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>";
        } else {
            // line 491
            echo "                      
                      <option value=\"shipping\">";
            // line 492
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>";
        }
        // line 495
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "payment")) {
            // line 496
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 497
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>";
        } else {
            // line 500
            echo "                      
                      <option value=\"payment\">";
            // line 501
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>";
        }
        // line 504
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 510
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 512
        echo (isset($context["help_customer_online"]) ? $context["help_customer_online"] : null);
        echo "\">";
        echo (isset($context["entry_customer_online"]) ? $context["entry_customer_online"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 514
        if ((isset($context["config_customer_online"]) ? $context["config_customer_online"] : null)) {
            // line 515
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />";
            // line 516
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 518
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />";
            // line 519
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 520
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 521
        if ( !(isset($context["config_customer_online"]) ? $context["config_customer_online"] : null)) {
            // line 522
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />";
            // line 523
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 525
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />";
            // line 526
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 527
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 531
        echo (isset($context["help_customer_activity"]) ? $context["help_customer_activity"] : null);
        echo "\">";
        echo (isset($context["entry_customer_activity"]) ? $context["entry_customer_activity"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 533
        if ((isset($context["config_customer_activity"]) ? $context["config_customer_activity"] : null)) {
            // line 534
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />";
            // line 535
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 537
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />";
            // line 538
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 539
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 540
        if ( !(isset($context["config_customer_activity"]) ? $context["config_customer_activity"] : null)) {
            // line 541
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />";
            // line 542
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 544
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />";
            // line 545
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 546
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 550
        echo (isset($context["entry_customer_search"]) ? $context["entry_customer_search"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 552
        if ((isset($context["config_customer_search"]) ? $context["config_customer_search"] : null)) {
            // line 553
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />";
            // line 554
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 556
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />";
            // line 557
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 558
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 559
        if ( !(isset($context["config_customer_search"]) ? $context["config_customer_search"] : null)) {
            // line 560
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />";
            // line 561
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 563
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />";
            // line 564
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 565
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 569
        echo (isset($context["help_customer_group"]) ? $context["help_customer_group"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">";
        // line 573
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 574
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["config_customer_group_id"]) ? $context["config_customer_group_id"] : null))) {
                // line 575
                echo "                      
                      <option value=\"";
                // line 576
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>";
            } else {
                // line 579
                echo "                      
                      <option value=\"";
                // line 580
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 584
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 589
        echo (isset($context["help_customer_group_display"]) ? $context["help_customer_group_display"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group_display"]) ? $context["entry_customer_group_display"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">";
        // line 590
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 591
            echo "                    <div class=\"checkbox\">
                      <label>";
            // line 592
            if (twig_in_filter($this->getAttribute($context["customer_group"], "customer_group_id", array()), (isset($context["config_customer_group_display"]) ? $context["config_customer_group_display"] : null))) {
                // line 593
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" />";
                // line 594
                echo $this->getAttribute($context["customer_group"], "name", array());
            } else {
                // line 596
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" />";
                // line 597
                echo $this->getAttribute($context["customer_group"], "name", array());
            }
            // line 598
            echo " </label>
                    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 601
        if ((isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null)) {
            // line 602
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null);
            echo "</div>";
        }
        // line 603
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 606
        echo (isset($context["help_customer_price"]) ? $context["help_customer_price"] : null);
        echo "\">";
        echo (isset($context["entry_customer_price"]) ? $context["entry_customer_price"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 608
        if ((isset($context["config_customer_price"]) ? $context["config_customer_price"] : null)) {
            // line 609
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />";
            // line 610
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 612
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />";
            // line 613
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 614
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 615
        if ( !(isset($context["config_customer_price"]) ? $context["config_customer_price"] : null)) {
            // line 616
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />";
            // line 617
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 619
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />";
            // line 620
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 621
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 625
        echo (isset($context["help_login_attempts"]) ? $context["help_login_attempts"] : null);
        echo "\">";
        echo (isset($context["entry_login_attempts"]) ? $context["entry_login_attempts"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 627
        echo (isset($context["config_login_attempts"]) ? $context["config_login_attempts"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_login_attempts"]) ? $context["entry_login_attempts"] : null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />";
        // line 628
        if ((isset($context["error_login_attempts"]) ? $context["error_login_attempts"] : null)) {
            // line 629
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_login_attempts"]) ? $context["error_login_attempts"] : null);
            echo "</div>";
        }
        // line 630
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 633
        echo (isset($context["help_account"]) ? $context["help_account"] : null);
        echo "\">";
        echo (isset($context["entry_account"]) ? $context["entry_account"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 636
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>";
        // line 638
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 639
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_account_id"]) ? $context["config_account_id"] : null))) {
                // line 640
                echo "                      
                      <option value=\"";
                // line 641
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>";
            } else {
                // line 644
                echo "                      
                      <option value=\"";
                // line 645
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 649
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 655
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 657
        echo (isset($context["help_invoice_prefix"]) ? $context["help_invoice_prefix"] : null);
        echo "\">";
        echo (isset($context["entry_invoice_prefix"]) ? $context["entry_invoice_prefix"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 659
        echo (isset($context["config_invoice_prefix"]) ? $context["config_invoice_prefix"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_invoice_prefix"]) ? $context["entry_invoice_prefix"] : null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 663
        echo (isset($context["help_cart_weight"]) ? $context["help_cart_weight"] : null);
        echo "\">";
        echo (isset($context["entry_cart_weight"]) ? $context["entry_cart_weight"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 665
        if ((isset($context["config_cart_weight"]) ? $context["config_cart_weight"] : null)) {
            // line 666
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />";
            // line 667
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 669
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />";
            // line 670
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 671
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 672
        if ( !(isset($context["config_cart_weight"]) ? $context["config_cart_weight"] : null)) {
            // line 673
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />";
            // line 674
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 676
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />";
            // line 677
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 678
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 682
        echo (isset($context["help_checkout_guest"]) ? $context["help_checkout_guest"] : null);
        echo "\">";
        echo (isset($context["entry_checkout_guest"]) ? $context["entry_checkout_guest"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 684
        if ((isset($context["config_checkout_guest"]) ? $context["config_checkout_guest"] : null)) {
            // line 685
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />";
            // line 686
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 688
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />";
            // line 689
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 690
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 691
        if ( !(isset($context["config_checkout_guest"]) ? $context["config_checkout_guest"] : null)) {
            // line 692
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />";
            // line 693
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 695
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />";
            // line 696
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 697
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 701
        echo (isset($context["help_checkout"]) ? $context["help_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_checkout"]) ? $context["entry_checkout"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 704
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>";
        // line 706
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 707
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_checkout_id"]) ? $context["config_checkout_id"] : null))) {
                // line 708
                echo "                      
                      <option value=\"";
                // line 709
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>";
            } else {
                // line 712
                echo "                      
                      <option value=\"";
                // line 713
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 717
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 722
        echo (isset($context["help_order_status"]) ? $context["help_order_status"] : null);
        echo "\">";
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">";
        // line 726
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 727
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["config_order_status_id"]) ? $context["config_order_status_id"] : null))) {
                // line 728
                echo "                      
                      <option value=\"";
                // line 729
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            } else {
                // line 732
                echo "                      
                      <option value=\"";
                // line 733
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 737
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 742
        echo (isset($context["help_processing_status"]) ? $context["help_processing_status"] : null);
        echo "\">";
        echo (isset($context["entry_processing_status"]) ? $context["entry_processing_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">";
        // line 744
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 745
            echo "                      <div class=\"checkbox\">
                        <label>";
            // line 746
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_processing_status"]) ? $context["config_processing_status"] : null))) {
                // line 747
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" />";
                // line 748
                echo $this->getAttribute($context["order_status"], "name", array());
            } else {
                // line 750
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" />";
                // line 751
                echo $this->getAttribute($context["order_status"], "name", array());
            }
            // line 752
            echo " </label>
                      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 754
        echo " </div>";
        // line 755
        if ((isset($context["error_processing_status"]) ? $context["error_processing_status"] : null)) {
            // line 756
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_processing_status"]) ? $context["error_processing_status"] : null);
            echo "</div>";
        }
        // line 757
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 760
        echo (isset($context["help_complete_status"]) ? $context["help_complete_status"] : null);
        echo "\">";
        echo (isset($context["entry_complete_status"]) ? $context["entry_complete_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">";
        // line 762
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 763
            echo "                      <div class=\"checkbox\">
                        <label>";
            // line 764
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_complete_status"]) ? $context["config_complete_status"] : null))) {
                // line 765
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" />";
                // line 766
                echo $this->getAttribute($context["order_status"], "name", array());
            } else {
                // line 768
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" />";
                // line 769
                echo $this->getAttribute($context["order_status"], "name", array());
            }
            // line 770
            echo " </label>
                      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 772
        echo " </div>";
        // line 773
        if ((isset($context["error_complete_status"]) ? $context["error_complete_status"] : null)) {
            // line 774
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_complete_status"]) ? $context["error_complete_status"] : null);
            echo "</div>";
        }
        // line 775
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 778
        echo (isset($context["help_fraud_status"]) ? $context["help_fraud_status"] : null);
        echo "\">";
        echo (isset($context["entry_fraud_status"]) ? $context["entry_fraud_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">";
        // line 782
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 783
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["config_fraud_status_id"]) ? $context["config_fraud_status_id"] : null))) {
                // line 784
                echo "                      
                      <option value=\"";
                // line 785
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            } else {
                // line 788
                echo "                      
                      <option value=\"";
                // line 789
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 793
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 798
        echo (isset($context["help_api"]) ? $context["help_api"] : null);
        echo "\">";
        echo (isset($context["entry_api"]) ? $context["entry_api"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 801
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>";
        // line 803
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apis"]) ? $context["apis"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 804
            if (($this->getAttribute($context["api"], "api_id", array()) == (isset($context["config_api_id"]) ? $context["config_api_id"] : null))) {
                // line 805
                echo "                      
                      <option value=\"";
                // line 806
                echo $this->getAttribute($context["api"], "api_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["api"], "username", array());
                echo "</option>";
            } else {
                // line 809
                echo "                      
                      <option value=\"";
                // line 810
                echo $this->getAttribute($context["api"], "api_id", array());
                echo "\">";
                echo $this->getAttribute($context["api"], "username", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 814
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 820
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 822
        echo (isset($context["help_stock_display"]) ? $context["help_stock_display"] : null);
        echo "\">";
        echo (isset($context["entry_stock_display"]) ? $context["entry_stock_display"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 824
        if ((isset($context["config_stock_display"]) ? $context["config_stock_display"] : null)) {
            // line 825
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />";
            // line 826
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 828
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />";
            // line 829
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 830
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 831
        if ( !(isset($context["config_stock_display"]) ? $context["config_stock_display"] : null)) {
            // line 832
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />";
            // line 833
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 835
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />";
            // line 836
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 837
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 841
        echo (isset($context["help_stock_warning"]) ? $context["help_stock_warning"] : null);
        echo "\">";
        echo (isset($context["entry_stock_warning"]) ? $context["entry_stock_warning"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 843
        if ((isset($context["config_stock_warning"]) ? $context["config_stock_warning"] : null)) {
            // line 844
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />";
            // line 845
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 847
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />";
            // line 848
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 849
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 850
        if ( !(isset($context["config_stock_warning"]) ? $context["config_stock_warning"] : null)) {
            // line 851
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />";
            // line 852
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 854
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />";
            // line 855
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 856
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 860
        echo (isset($context["help_stock_checkout"]) ? $context["help_stock_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_stock_checkout"]) ? $context["entry_stock_checkout"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 862
        if ((isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)) {
            // line 863
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />";
            // line 864
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 866
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />";
            // line 867
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 868
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 869
        if ( !(isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)) {
            // line 870
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />";
            // line 871
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 873
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />";
            // line 874
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 875
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 880
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 882
        echo (isset($context["entry_affiliate_group"]) ? $context["entry_affiliate_group"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">";
        // line 886
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 887
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["config_affiliate_group_id"]) ? $context["config_affiliate_group_id"] : null))) {
                // line 888
                echo "                      
                      <option value=\"";
                // line 889
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>";
            } else {
                // line 892
                echo "                      
                      <option value=\"";
                // line 893
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 897
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 902
        echo (isset($context["help_affiliate_approval"]) ? $context["help_affiliate_approval"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_approval"]) ? $context["entry_affiliate_approval"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 904
        if ((isset($context["config_affiliate_approval"]) ? $context["config_affiliate_approval"] : null)) {
            // line 905
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />";
            // line 906
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 908
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />";
            // line 909
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 910
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 911
        if ( !(isset($context["config_affiliate_approval"]) ? $context["config_affiliate_approval"] : null)) {
            // line 912
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />";
            // line 913
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 915
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />";
            // line 916
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 917
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 921
        echo (isset($context["help_affiliate_auto"]) ? $context["help_affiliate_auto"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_auto"]) ? $context["entry_affiliate_auto"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 923
        if ((isset($context["config_affiliate_auto"]) ? $context["config_affiliate_auto"] : null)) {
            // line 924
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />";
            // line 925
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 927
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />";
            // line 928
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 929
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 930
        if ( !(isset($context["config_affiliate_auto"]) ? $context["config_affiliate_auto"] : null)) {
            // line 931
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />";
            // line 932
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 934
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />";
            // line 935
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 936
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 940
        echo (isset($context["help_affiliate_commission"]) ? $context["help_affiliate_commission"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_commission"]) ? $context["entry_affiliate_commission"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 942
        echo (isset($context["config_affiliate_commission"]) ? $context["config_affiliate_commission"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_affiliate_commission"]) ? $context["entry_affiliate_commission"] : null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 946
        echo (isset($context["help_affiliate"]) ? $context["help_affiliate"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate"]) ? $context["entry_affiliate"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 949
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>";
        // line 951
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 952
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_affiliate_id"]) ? $context["config_affiliate_id"] : null))) {
                // line 953
                echo "                      
                      <option value=\"";
                // line 954
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>";
            } else {
                // line 957
                echo "                      
                      <option value=\"";
                // line 958
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 962
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 968
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 970
        echo (isset($context["help_return"]) ? $context["help_return"] : null);
        echo "\">";
        echo (isset($context["entry_return"]) ? $context["entry_return"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 973
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>";
        // line 975
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 976
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_return_id"]) ? $context["config_return_id"] : null))) {
                // line 977
                echo "                      
                      <option value=\"";
                // line 978
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>";
            } else {
                // line 981
                echo "                      
                      <option value=\"";
                // line 982
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 986
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 991
        echo (isset($context["help_return_status"]) ? $context["help_return_status"] : null);
        echo "\">";
        echo (isset($context["entry_return_status"]) ? $context["entry_return_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">";
        // line 995
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["return_statuses"]) ? $context["return_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 996
            if (($this->getAttribute($context["return_status"], "return_status_id", array()) == (isset($context["config_return_status_id"]) ? $context["config_return_status_id"] : null))) {
                // line 997
                echo "                      
                      <option value=\"";
                // line 998
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>";
            } else {
                // line 1001
                echo "                      
                      <option value=\"";
                // line 1002
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1006
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1012
        echo (isset($context["text_captcha"]) ? $context["text_captcha"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1014
        echo (isset($context["help_captcha"]) ? $context["help_captcha"] : null);
        echo "\">";
        echo (isset($context["entry_captcha"]) ? $context["entry_captcha"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 1017
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>";
        // line 1019
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["captchas"]) ? $context["captchas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1020
            if (($this->getAttribute($context["captcha"], "value", array()) == (isset($context["config_captcha"]) ? $context["config_captcha"] : null))) {
                // line 1021
                echo "                      
                      <option value=\"";
                // line 1022
                echo $this->getAttribute($context["captcha"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["captcha"], "text", array());
                echo "</option>";
            } else {
                // line 1025
                echo "                      
                      <option value=\"";
                // line 1026
                echo $this->getAttribute($context["captcha"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["captcha"], "text", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1030
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1035
        echo (isset($context["entry_captcha_page"]) ? $context["entry_captcha_page"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">";
        // line 1037
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["captcha_pages"]) ? $context["captcha_pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1038
            echo "                      <div class=\"checkbox\">
                        <label>";
            // line 1039
            if (twig_in_filter($this->getAttribute($context["captcha_page"], "value", array()), (isset($context["config_captcha_page"]) ? $context["config_captcha_page"] : null))) {
                // line 1040
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo $this->getAttribute($context["captcha_page"], "value", array());
                echo "\" checked=\"checked\" />";
                // line 1041
                echo $this->getAttribute($context["captcha_page"], "text", array());
            } else {
                // line 1043
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo $this->getAttribute($context["captcha_page"], "value", array());
                echo "\" />";
                // line 1044
                echo $this->getAttribute($context["captcha_page"], "text", array());
            }
            // line 1045
            echo " </label>
                      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1047
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1054
        echo (isset($context["entry_logo"]) ? $context["entry_logo"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1055
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1056
        echo (isset($context["config_logo"]) ? $context["config_logo"] : null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1060
        echo (isset($context["help_icon"]) ? $context["help_icon"] : null);
        echo "\">";
        echo (isset($context["entry_icon"]) ? $context["entry_icon"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1061
        echo (isset($context["icon"]) ? $context["icon"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1062
        echo (isset($context["config_icon"]) ? $context["config_icon"] : null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1068
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1070
        echo (isset($context["help_mail_engine"]) ? $context["help_mail_engine"] : null);
        echo "\">";
        echo (isset($context["entry_mail_engine"]) ? $context["entry_mail_engine"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">";
        // line 1074
        if (((isset($context["config_mail_engine"]) ? $context["config_mail_engine"] : null) == "mail")) {
            // line 1075
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1076
            echo (isset($context["text_mail"]) ? $context["text_mail"] : null);
            echo "</option>";
        } else {
            // line 1079
            echo "                      
                      <option value=\"mail\">";
            // line 1080
            echo (isset($context["text_mail"]) ? $context["text_mail"] : null);
            echo "</option>";
        }
        // line 1083
        if (((isset($context["config_mail_engine"]) ? $context["config_mail_engine"] : null) == "smtp")) {
            // line 1084
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1085
            echo (isset($context["text_smtp"]) ? $context["text_smtp"] : null);
            echo "</option>";
        } else {
            // line 1088
            echo "                      
                      <option value=\"smtp\">";
            // line 1089
            echo (isset($context["text_smtp"]) ? $context["text_smtp"] : null);
            echo "</option>";
        }
        // line 1092
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1097
        echo (isset($context["help_mail_parameter"]) ? $context["help_mail_parameter"] : null);
        echo "\">";
        echo (isset($context["entry_mail_parameter"]) ? $context["entry_mail_parameter"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1099
        echo (isset($context["config_mail_parameter"]) ? $context["config_mail_parameter"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_parameter"]) ? $context["entry_mail_parameter"] : null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1103
        echo (isset($context["help_mail_smtp_hostname"]) ? $context["help_mail_smtp_hostname"] : null);
        echo "\">";
        echo (isset($context["entry_mail_smtp_hostname"]) ? $context["entry_mail_smtp_hostname"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1105
        echo (isset($context["config_mail_smtp_hostname"]) ? $context["config_mail_smtp_hostname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_hostname"]) ? $context["entry_mail_smtp_hostname"] : null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1109
        echo (isset($context["entry_mail_smtp_username"]) ? $context["entry_mail_smtp_username"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1111
        echo (isset($context["config_mail_smtp_username"]) ? $context["config_mail_smtp_username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_username"]) ? $context["entry_mail_smtp_username"] : null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1115
        echo (isset($context["help_mail_smtp_password"]) ? $context["help_mail_smtp_password"] : null);
        echo "\">";
        echo (isset($context["entry_mail_smtp_password"]) ? $context["entry_mail_smtp_password"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1117
        echo (isset($context["config_mail_smtp_password"]) ? $context["config_mail_smtp_password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_password"]) ? $context["entry_mail_smtp_password"] : null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1121
        echo (isset($context["entry_mail_smtp_port"]) ? $context["entry_mail_smtp_port"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1123
        echo (isset($context["config_mail_smtp_port"]) ? $context["config_mail_smtp_port"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_port"]) ? $context["entry_mail_smtp_port"] : null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1127
        echo (isset($context["entry_mail_smtp_timeout"]) ? $context["entry_mail_smtp_timeout"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1129
        echo (isset($context["config_mail_smtp_timeout"]) ? $context["config_mail_smtp_timeout"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_timeout"]) ? $context["entry_mail_smtp_timeout"] : null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1134
        echo (isset($context["text_mail_alert"]) ? $context["text_mail_alert"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1136
        echo (isset($context["help_mail_alert"]) ? $context["help_mail_alert"] : null);
        echo "\">";
        echo (isset($context["entry_mail_alert"]) ? $context["entry_mail_alert"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">";
        // line 1138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mail_alerts"]) ? $context["mail_alerts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1139
            echo "                      <div class=\"checkbox\">
                        <label>";
            // line 1140
            if (twig_in_filter($this->getAttribute($context["mail_alert"], "value", array()), (isset($context["config_mail_alert"]) ? $context["config_mail_alert"] : null))) {
                // line 1141
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo $this->getAttribute($context["mail_alert"], "value", array());
                echo "\" checked=\"checked\" />";
                // line 1142
                echo $this->getAttribute($context["mail_alert"], "text", array());
            } else {
                // line 1144
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo $this->getAttribute($context["mail_alert"], "value", array());
                echo "\" />";
                // line 1145
                echo $this->getAttribute($context["mail_alert"], "text", array());
            }
            // line 1146
            echo " </label>
                      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1148
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1152
        echo (isset($context["help_mail_alert_email"]) ? $context["help_mail_alert_email"] : null);
        echo "\">";
        echo (isset($context["entry_mail_alert_email"]) ? $context["entry_mail_alert_email"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1154
        echo (isset($context["entry_mail_alert_email"]) ? $context["entry_mail_alert_email"] : null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo (isset($context["config_mail_alert_email"]) ? $context["config_mail_alert_email"] : null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1161
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1163
        echo (isset($context["help_maintenance"]) ? $context["help_maintenance"] : null);
        echo "\">";
        echo (isset($context["entry_maintenance"]) ? $context["entry_maintenance"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1165
        if ((isset($context["config_maintenance"]) ? $context["config_maintenance"] : null)) {
            // line 1166
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />";
            // line 1167
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1169
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />";
            // line 1170
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1171
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1172
        if ( !(isset($context["config_maintenance"]) ? $context["config_maintenance"] : null)) {
            // line 1173
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />";
            // line 1174
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1176
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />";
            // line 1177
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1178
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1182
        echo (isset($context["help_seo_url"]) ? $context["help_seo_url"] : null);
        echo "\">";
        echo (isset($context["entry_seo_url"]) ? $context["entry_seo_url"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1184
        if ((isset($context["config_seo_url"]) ? $context["config_seo_url"] : null)) {
            // line 1185
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />";
            // line 1186
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1188
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />";
            // line 1189
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1190
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1191
        if ( !(isset($context["config_seo_url"]) ? $context["config_seo_url"] : null)) {
            // line 1192
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />";
            // line 1193
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1195
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />";
            // line 1196
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1197
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1201
        echo (isset($context["help_robots"]) ? $context["help_robots"] : null);
        echo "\">";
        echo (isset($context["entry_robots"]) ? $context["entry_robots"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1203
        echo (isset($context["entry_robots"]) ? $context["entry_robots"] : null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo (isset($context["config_robots"]) ? $context["config_robots"] : null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1207
        echo (isset($context["help_compression"]) ? $context["help_compression"] : null);
        echo "\">";
        echo (isset($context["entry_compression"]) ? $context["entry_compression"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1209
        echo (isset($context["config_compression"]) ? $context["config_compression"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_compression"]) ? $context["entry_compression"] : null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1214
        echo (isset($context["text_security"]) ? $context["text_security"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1216
        echo (isset($context["help_secure"]) ? $context["help_secure"] : null);
        echo "\">";
        echo (isset($context["entry_secure"]) ? $context["entry_secure"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1218
        if ((isset($context["config_secure"]) ? $context["config_secure"] : null)) {
            // line 1219
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />";
            // line 1220
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1222
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />";
            // line 1223
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1224
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1225
        if ( !(isset($context["config_secure"]) ? $context["config_secure"] : null)) {
            // line 1226
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />";
            // line 1227
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1229
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />";
            // line 1230
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1231
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1235
        echo (isset($context["help_password"]) ? $context["help_password"] : null);
        echo "\">";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1237
        if ((isset($context["config_password"]) ? $context["config_password"] : null)) {
            // line 1238
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />";
            // line 1239
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1241
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />";
            // line 1242
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1243
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1244
        if ( !(isset($context["config_password"]) ? $context["config_password"] : null)) {
            // line 1245
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />";
            // line 1246
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1248
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />";
            // line 1249
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1250
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1254
        echo (isset($context["help_shared"]) ? $context["help_shared"] : null);
        echo "\">";
        echo (isset($context["entry_shared"]) ? $context["entry_shared"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1256
        if ((isset($context["config_shared"]) ? $context["config_shared"] : null)) {
            // line 1257
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />";
            // line 1258
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1260
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />";
            // line 1261
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1262
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1263
        if ( !(isset($context["config_shared"]) ? $context["config_shared"] : null)) {
            // line 1264
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />";
            // line 1265
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1267
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />";
            // line 1268
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1269
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1273
        echo (isset($context["help_encryption"]) ? $context["help_encryption"] : null);
        echo "\">";
        echo (isset($context["entry_encryption"]) ? $context["entry_encryption"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1275
        echo (isset($context["entry_encryption"]) ? $context["entry_encryption"] : null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo (isset($context["config_encryption"]) ? $context["config_encryption"] : null);
        echo "</textarea>";
        // line 1276
        if ((isset($context["error_encryption"]) ? $context["error_encryption"] : null)) {
            // line 1277
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_encryption"]) ? $context["error_encryption"] : null);
            echo "</div>";
        }
        // line 1278
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1282
        echo (isset($context["text_upload"]) ? $context["text_upload"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1284
        echo (isset($context["help_file_max_size"]) ? $context["help_file_max_size"] : null);
        echo "\">";
        echo (isset($context["entry_file_max_size"]) ? $context["entry_file_max_size"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1286
        echo (isset($context["config_file_max_size"]) ? $context["config_file_max_size"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_file_max_size"]) ? $context["entry_file_max_size"] : null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1290
        echo (isset($context["help_file_ext_allowed"]) ? $context["help_file_ext_allowed"] : null);
        echo "\">";
        echo (isset($context["entry_file_ext_allowed"]) ? $context["entry_file_ext_allowed"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1292
        echo (isset($context["entry_file_ext_allowed"]) ? $context["entry_file_ext_allowed"] : null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo (isset($context["config_file_ext_allowed"]) ? $context["config_file_ext_allowed"] : null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1296
        echo (isset($context["help_file_mime_allowed"]) ? $context["help_file_mime_allowed"] : null);
        echo "\">";
        echo (isset($context["entry_file_mime_allowed"]) ? $context["entry_file_mime_allowed"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1298
        echo (isset($context["entry_file_mime_allowed"]) ? $context["entry_file_mime_allowed"] : null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo (isset($context["config_file_mime_allowed"]) ? $context["config_file_mime_allowed"] : null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1303
        echo (isset($context["text_error"]) ? $context["text_error"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1305
        echo (isset($context["entry_error_display"]) ? $context["entry_error_display"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1307
        if ((isset($context["config_error_display"]) ? $context["config_error_display"] : null)) {
            // line 1308
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />";
            // line 1309
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1311
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />";
            // line 1312
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1313
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1314
        if ( !(isset($context["config_error_display"]) ? $context["config_error_display"] : null)) {
            // line 1315
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />";
            // line 1316
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1318
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />";
            // line 1319
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1320
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1324
        echo (isset($context["entry_error_log"]) ? $context["entry_error_log"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1326
        if ((isset($context["config_error_log"]) ? $context["config_error_log"] : null)) {
            // line 1327
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />";
            // line 1328
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1330
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />";
            // line 1331
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1332
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1333
        if ( !(isset($context["config_error_log"]) ? $context["config_error_log"] : null)) {
            // line 1334
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />";
            // line 1335
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1337
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />";
            // line 1338
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1339
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1343
        echo (isset($context["entry_error_filename"]) ? $context["entry_error_filename"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1345
        echo (isset($context["config_error_filename"]) ? $context["config_error_filename"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_error_filename"]) ? $context["entry_error_filename"] : null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />";
        // line 1346
        if ((isset($context["error_log"]) ? $context["error_log"] : null)) {
            // line 1347
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_log"]) ? $context["error_log"] : null);
            echo "</div>";
        }
        // line 1348
        echo " </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1360
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1382
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1391
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1397
        echo (isset($context["config_zone_id"]) ? $context["config_zone_id"] : null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1404
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>";
        // line 1419
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3105 => 1419,  3088 => 1404,  3078 => 1397,  3069 => 1391,  3057 => 1382,  3032 => 1360,  3018 => 1348,  3013 => 1347,  3011 => 1346,  3006 => 1345,  3001 => 1343,  2995 => 1339,  2992 => 1338,  2990 => 1337,  2987 => 1335,  2985 => 1334,  2983 => 1333,  2980 => 1332,  2977 => 1331,  2975 => 1330,  2972 => 1328,  2970 => 1327,  2968 => 1326,  2963 => 1324,  2957 => 1320,  2954 => 1319,  2952 => 1318,  2949 => 1316,  2947 => 1315,  2945 => 1314,  2942 => 1313,  2939 => 1312,  2937 => 1311,  2934 => 1309,  2932 => 1308,  2930 => 1307,  2925 => 1305,  2920 => 1303,  2910 => 1298,  2903 => 1296,  2894 => 1292,  2887 => 1290,  2878 => 1286,  2871 => 1284,  2866 => 1282,  2860 => 1278,  2855 => 1277,  2853 => 1276,  2848 => 1275,  2841 => 1273,  2835 => 1269,  2832 => 1268,  2830 => 1267,  2827 => 1265,  2825 => 1264,  2823 => 1263,  2820 => 1262,  2817 => 1261,  2815 => 1260,  2812 => 1258,  2810 => 1257,  2808 => 1256,  2801 => 1254,  2795 => 1250,  2792 => 1249,  2790 => 1248,  2787 => 1246,  2785 => 1245,  2783 => 1244,  2780 => 1243,  2777 => 1242,  2775 => 1241,  2772 => 1239,  2770 => 1238,  2768 => 1237,  2761 => 1235,  2755 => 1231,  2752 => 1230,  2750 => 1229,  2747 => 1227,  2745 => 1226,  2743 => 1225,  2740 => 1224,  2737 => 1223,  2735 => 1222,  2732 => 1220,  2730 => 1219,  2728 => 1218,  2721 => 1216,  2716 => 1214,  2706 => 1209,  2699 => 1207,  2690 => 1203,  2683 => 1201,  2677 => 1197,  2674 => 1196,  2672 => 1195,  2669 => 1193,  2667 => 1192,  2665 => 1191,  2662 => 1190,  2659 => 1189,  2657 => 1188,  2654 => 1186,  2652 => 1185,  2650 => 1184,  2643 => 1182,  2637 => 1178,  2634 => 1177,  2632 => 1176,  2629 => 1174,  2627 => 1173,  2625 => 1172,  2622 => 1171,  2619 => 1170,  2617 => 1169,  2614 => 1167,  2612 => 1166,  2610 => 1165,  2603 => 1163,  2598 => 1161,  2586 => 1154,  2579 => 1152,  2573 => 1148,  2566 => 1146,  2563 => 1145,  2559 => 1144,  2556 => 1142,  2552 => 1141,  2550 => 1140,  2547 => 1139,  2543 => 1138,  2536 => 1136,  2531 => 1134,  2521 => 1129,  2516 => 1127,  2507 => 1123,  2502 => 1121,  2493 => 1117,  2486 => 1115,  2477 => 1111,  2472 => 1109,  2463 => 1105,  2456 => 1103,  2447 => 1099,  2440 => 1097,  2433 => 1092,  2429 => 1089,  2426 => 1088,  2422 => 1085,  2419 => 1084,  2417 => 1083,  2413 => 1080,  2410 => 1079,  2406 => 1076,  2403 => 1075,  2401 => 1074,  2394 => 1070,  2389 => 1068,  2380 => 1062,  2374 => 1061,  2368 => 1060,  2361 => 1056,  2355 => 1055,  2351 => 1054,  2342 => 1047,  2335 => 1045,  2332 => 1044,  2328 => 1043,  2325 => 1041,  2321 => 1040,  2319 => 1039,  2316 => 1038,  2312 => 1037,  2307 => 1035,  2300 => 1030,  2290 => 1026,  2287 => 1025,  2281 => 1022,  2278 => 1021,  2276 => 1020,  2272 => 1019,  2269 => 1017,  2261 => 1014,  2256 => 1012,  2248 => 1006,  2238 => 1002,  2235 => 1001,  2229 => 998,  2226 => 997,  2224 => 996,  2220 => 995,  2213 => 991,  2206 => 986,  2196 => 982,  2193 => 981,  2187 => 978,  2184 => 977,  2182 => 976,  2178 => 975,  2175 => 973,  2167 => 970,  2162 => 968,  2154 => 962,  2144 => 958,  2141 => 957,  2135 => 954,  2132 => 953,  2130 => 952,  2126 => 951,  2123 => 949,  2115 => 946,  2106 => 942,  2099 => 940,  2093 => 936,  2090 => 935,  2088 => 934,  2085 => 932,  2083 => 931,  2081 => 930,  2078 => 929,  2075 => 928,  2073 => 927,  2070 => 925,  2068 => 924,  2066 => 923,  2059 => 921,  2053 => 917,  2050 => 916,  2048 => 915,  2045 => 913,  2043 => 912,  2041 => 911,  2038 => 910,  2035 => 909,  2033 => 908,  2030 => 906,  2028 => 905,  2026 => 904,  2019 => 902,  2012 => 897,  2002 => 893,  1999 => 892,  1993 => 889,  1990 => 888,  1988 => 887,  1984 => 886,  1979 => 882,  1974 => 880,  1967 => 875,  1964 => 874,  1962 => 873,  1959 => 871,  1957 => 870,  1955 => 869,  1952 => 868,  1949 => 867,  1947 => 866,  1944 => 864,  1942 => 863,  1940 => 862,  1933 => 860,  1927 => 856,  1924 => 855,  1922 => 854,  1919 => 852,  1917 => 851,  1915 => 850,  1912 => 849,  1909 => 848,  1907 => 847,  1904 => 845,  1902 => 844,  1900 => 843,  1893 => 841,  1887 => 837,  1884 => 836,  1882 => 835,  1879 => 833,  1877 => 832,  1875 => 831,  1872 => 830,  1869 => 829,  1867 => 828,  1864 => 826,  1862 => 825,  1860 => 824,  1853 => 822,  1848 => 820,  1840 => 814,  1830 => 810,  1827 => 809,  1821 => 806,  1818 => 805,  1816 => 804,  1812 => 803,  1809 => 801,  1801 => 798,  1794 => 793,  1784 => 789,  1781 => 788,  1775 => 785,  1772 => 784,  1770 => 783,  1766 => 782,  1759 => 778,  1754 => 775,  1749 => 774,  1747 => 773,  1745 => 772,  1738 => 770,  1735 => 769,  1731 => 768,  1728 => 766,  1724 => 765,  1722 => 764,  1719 => 763,  1715 => 762,  1708 => 760,  1703 => 757,  1698 => 756,  1696 => 755,  1694 => 754,  1687 => 752,  1684 => 751,  1680 => 750,  1677 => 748,  1673 => 747,  1671 => 746,  1668 => 745,  1664 => 744,  1657 => 742,  1650 => 737,  1640 => 733,  1637 => 732,  1631 => 729,  1628 => 728,  1626 => 727,  1622 => 726,  1615 => 722,  1608 => 717,  1598 => 713,  1595 => 712,  1589 => 709,  1586 => 708,  1584 => 707,  1580 => 706,  1577 => 704,  1569 => 701,  1563 => 697,  1560 => 696,  1558 => 695,  1555 => 693,  1553 => 692,  1551 => 691,  1548 => 690,  1545 => 689,  1543 => 688,  1540 => 686,  1538 => 685,  1536 => 684,  1529 => 682,  1523 => 678,  1520 => 677,  1518 => 676,  1515 => 674,  1513 => 673,  1511 => 672,  1508 => 671,  1505 => 670,  1503 => 669,  1500 => 667,  1498 => 666,  1496 => 665,  1489 => 663,  1480 => 659,  1473 => 657,  1468 => 655,  1460 => 649,  1450 => 645,  1447 => 644,  1441 => 641,  1438 => 640,  1436 => 639,  1432 => 638,  1429 => 636,  1421 => 633,  1416 => 630,  1411 => 629,  1409 => 628,  1404 => 627,  1397 => 625,  1391 => 621,  1388 => 620,  1386 => 619,  1383 => 617,  1381 => 616,  1379 => 615,  1376 => 614,  1373 => 613,  1371 => 612,  1368 => 610,  1366 => 609,  1364 => 608,  1357 => 606,  1352 => 603,  1347 => 602,  1345 => 601,  1338 => 598,  1335 => 597,  1331 => 596,  1328 => 594,  1324 => 593,  1322 => 592,  1319 => 591,  1315 => 590,  1309 => 589,  1302 => 584,  1292 => 580,  1289 => 579,  1283 => 576,  1280 => 575,  1278 => 574,  1274 => 573,  1267 => 569,  1261 => 565,  1258 => 564,  1256 => 563,  1253 => 561,  1251 => 560,  1249 => 559,  1246 => 558,  1243 => 557,  1241 => 556,  1238 => 554,  1236 => 553,  1234 => 552,  1229 => 550,  1223 => 546,  1220 => 545,  1218 => 544,  1215 => 542,  1213 => 541,  1211 => 540,  1208 => 539,  1205 => 538,  1203 => 537,  1200 => 535,  1198 => 534,  1196 => 533,  1189 => 531,  1183 => 527,  1180 => 526,  1178 => 525,  1175 => 523,  1173 => 522,  1171 => 521,  1168 => 520,  1165 => 519,  1163 => 518,  1160 => 516,  1158 => 515,  1156 => 514,  1149 => 512,  1144 => 510,  1136 => 504,  1132 => 501,  1129 => 500,  1125 => 497,  1122 => 496,  1120 => 495,  1116 => 492,  1113 => 491,  1109 => 488,  1106 => 487,  1104 => 486,  1101 => 484,  1093 => 481,  1086 => 476,  1082 => 473,  1079 => 472,  1075 => 469,  1072 => 468,  1070 => 467,  1066 => 464,  1063 => 463,  1059 => 460,  1056 => 459,  1054 => 458,  1051 => 456,  1043 => 453,  1037 => 449,  1034 => 448,  1032 => 447,  1029 => 445,  1027 => 444,  1025 => 443,  1022 => 442,  1019 => 441,  1017 => 440,  1014 => 438,  1012 => 437,  1010 => 436,  1005 => 434,  1000 => 432,  994 => 428,  989 => 427,  987 => 426,  982 => 425,  975 => 423,  970 => 420,  965 => 419,  963 => 418,  958 => 417,  951 => 415,  946 => 413,  939 => 408,  936 => 407,  934 => 406,  931 => 404,  929 => 403,  927 => 402,  924 => 401,  921 => 400,  919 => 399,  916 => 397,  914 => 396,  912 => 395,  905 => 393,  899 => 389,  896 => 388,  894 => 387,  891 => 385,  889 => 384,  887 => 383,  884 => 382,  881 => 381,  879 => 380,  876 => 378,  874 => 377,  872 => 376,  865 => 374,  860 => 372,  854 => 368,  849 => 367,  847 => 366,  842 => 365,  835 => 363,  829 => 359,  826 => 358,  824 => 357,  821 => 355,  819 => 354,  817 => 353,  814 => 352,  811 => 351,  809 => 350,  806 => 348,  804 => 347,  802 => 346,  795 => 344,  790 => 342,  781 => 335,  771 => 331,  768 => 330,  762 => 327,  759 => 326,  757 => 325,  753 => 324,  748 => 320,  741 => 315,  731 => 311,  728 => 310,  722 => 307,  719 => 306,  717 => 305,  713 => 304,  708 => 300,  702 => 296,  699 => 295,  697 => 294,  694 => 292,  692 => 291,  690 => 290,  687 => 289,  684 => 288,  682 => 287,  679 => 285,  677 => 284,  675 => 283,  668 => 281,  661 => 276,  651 => 272,  648 => 271,  642 => 268,  639 => 267,  637 => 266,  633 => 265,  626 => 261,  619 => 256,  609 => 252,  606 => 251,  600 => 248,  597 => 247,  595 => 246,  591 => 245,  586 => 241,  579 => 236,  569 => 232,  566 => 231,  560 => 228,  557 => 227,  555 => 226,  551 => 225,  546 => 221,  536 => 214,  529 => 209,  519 => 205,  516 => 204,  510 => 201,  507 => 200,  505 => 199,  501 => 198,  496 => 194,  491 => 191,  487 => 189,  480 => 187,  477 => 186,  473 => 185,  470 => 183,  466 => 182,  464 => 181,  461 => 180,  457 => 179,  451 => 178,  448 => 177,  446 => 176,  439 => 173,  432 => 171,  423 => 167,  416 => 165,  409 => 161,  403 => 160,  399 => 159,  390 => 155,  385 => 153,  380 => 150,  375 => 149,  373 => 148,  368 => 147,  363 => 145,  358 => 142,  353 => 141,  351 => 140,  346 => 139,  341 => 137,  332 => 133,  325 => 131,  320 => 128,  315 => 127,  313 => 126,  308 => 125,  303 => 123,  298 => 120,  293 => 119,  291 => 118,  286 => 117,  281 => 115,  276 => 112,  271 => 111,  269 => 110,  264 => 109,  259 => 107,  250 => 100,  240 => 96,  237 => 95,  231 => 92,  228 => 91,  226 => 90,  222 => 89,  217 => 85,  209 => 79,  199 => 75,  196 => 74,  190 => 71,  187 => 70,  185 => 69,  181 => 68,  176 => 64,  167 => 60,  162 => 58,  153 => 54,  148 => 52,  143 => 49,  138 => 48,  136 => 47,  131 => 46,  126 => 44,  118 => 39,  114 => 38,  110 => 37,  106 => 36,  102 => 35,  98 => 34,  94 => 33,  89 => 31,  83 => 28,  79 => 26,  72 => 22,  70 => 21,  63 => 17,  61 => 16,  56 => 13,  46 => 11,  42 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" id="button-save" form="form-setting" data-toggle="tooltip" title="{{ button_save }}" disabled="disabled" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-setting" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-store" data-toggle="tab">{{ tab_store }}</a></li>*/
/*             <li><a href="#tab-local" data-toggle="tab">{{ tab_local }}</a></li>*/
/*             <li><a href="#tab-option" data-toggle="tab">{{ tab_option }}</a></li>*/
/*             <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
/*             <li><a href="#tab-mail" data-toggle="tab">{{ tab_mail }}</a></li>*/
/*             <li><a href="#tab-server" data-toggle="tab">{{ tab_server }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-title">{{ entry_meta_title }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_meta_title" value="{{ config_meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title" class="form-control" />*/
/*                   {% if error_meta_title %}*/
/*                   <div class="text-danger">{{ error_meta_title }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-description">{{ entry_meta_description }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_description" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description" class="form-control">{{ config_meta_description }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-keyword">{{ entry_meta_keyword }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_keyword" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword" class="form-control">{{ config_meta_keyword }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-theme">{{ entry_theme }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_theme" id="input-theme" class="form-control">*/
/*                     */
/*                     {% for theme in themes %}*/
/*                     {% if theme.value == config_theme %}*/
/*                     */
/*                     <option value="{{ theme.value }}" selected="selected">{{ theme.text }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ theme.value }}">{{ theme.text }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                   <br />*/
/*                   <img src="" alt="" id="theme" class="img-thumbnail" /></div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-layout">{{ entry_layout }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_layout_id" id="input-layout" class="form-control">*/
/*                     */
/*                     {% for layout in layouts %}*/
/*                     {% if layout.layout_id == config_layout_id %}*/
/*                     */
/*                     <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-store">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_name" value="{{ config_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*                   {% if error_name %}*/
/*                   <div class="text-danger">{{ error_name }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-owner">{{ entry_owner }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_owner" value="{{ config_owner }}" placeholder="{{ entry_owner }}" id="input-owner" class="form-control" />*/
/*                   {% if error_owner %}*/
/*                   <div class="text-danger">{{ error_owner }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-address">{{ entry_address }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_address" placeholder="{{ entry_address }}" rows="5" id="input-address" class="form-control">{{ config_address }}</textarea>*/
/*                   {% if error_address %}*/
/*                   <div class="text-danger">{{ error_address }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-geocode"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_geocode }}">{{ entry_geocode }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_geocode" value="{{ config_geocode }}" placeholder="{{ entry_geocode }}" id="input-geocode" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_email" value="{{ config_email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*                   {% if error_email %}*/
/*                   <div class="text-danger">{{ error_email }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_telephone" value="{{ config_telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*                   {% if error_telephone %}*/
/*                   <div class="text-danger">{{ error_telephone }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-fax">{{ entry_fax }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_fax" value="{{ config_fax }}" placeholder="{{ entry_fax }}" id="input-fax" class="form-control" />*/
/*                 </div>*/
/*               </div>              */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-image">{{ entry_image }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_image" value="{{ config_image }}" id="input-image" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-open"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_open }}">{{ entry_open }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_open" rows="5" placeholder="{{ entry_open }}" id="input-open" class="form-control">{{ config_open }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-comment"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_comment }}">{{ entry_comment }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_comment" rows="5" placeholder="{{ entry_comment }}" id="input-comment" class="form-control">{{ config_comment }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               {% if locations %}*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_location }}">{{ entry_location }}</span></label>*/
/*                 <div class="col-sm-10"> {% for location in locations %}*/
/*                   <div class="checkbox">*/
/*                     <label> {% if location.location_id in config_location %}*/
/*                       <input type="checkbox" name="config_location[]" value="{{ location.location_id }}" checked="checked" />*/
/*                       {{ location.name }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="config_location[]" value="{{ location.location_id }}" />*/
/*                       {{ location.name }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                   {% endfor %} </div>*/
/*               </div>*/
/*               {% endif %} </div>*/
/*             <div class="tab-pane" id="tab-local">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-country">{{ entry_country }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_country_id" id="input-country" class="form-control">*/
/*                     */
/*                     {% for country in countries %}*/
/*                     {% if country.country_id == config_country_id %}*/
/*                     */
/*                     <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-zone">{{ entry_zone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_zone_id" id="input-zone" class="form-control">*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-language">{{ entry_language }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_language" id="input-language" class="form-control">*/
/*                     */
/*                     {% for language in languages %}*/
/*                     {% if language.code == config_language %}*/
/*                     */
/*                     <option value="{{ language.code }}" selected="selected">{{ language.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ language.code }}">{{ language.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-admin-language">{{ entry_admin_language }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_admin_language" id="input-admin-language" class="form-control">*/
/*                     */
/*                     {% for language in languages %}*/
/*                     {% if language.code == config_admin_language %}*/
/*                     */
/*                     <option value="{{ language.code }}" selected="selected">{{ language.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ language.code }}">{{ language.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-currency"><span data-toggle="tooltip" title="{{ help_currency }}">{{ entry_currency }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_currency" id="input-currency" class="form-control">*/
/*                     */
/*                     {% for currency in currencies %}*/
/*                     {% if currency.code == config_currency %}*/
/*                     */
/*                     <option value="{{ currency.code }}" selected="selected">{{ currency.title }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ currency.code }}">{{ currency.title }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_currency_auto }}">{{ entry_currency_auto }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline"> {% if config_currency_auto %}*/
/*                     <input type="radio" name="config_currency_auto" value="1" checked="checked" />*/
/*                     {{ text_yes }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="config_currency_auto" value="1" />*/
/*                     {{ text_yes }}*/
/*                     {% endif %} </label>*/
/*                   <label class="radio-inline"> {% if not config_currency_auto %}*/
/*                     <input type="radio" name="config_currency_auto" value="0" checked="checked" />*/
/*                     {{ text_no }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="config_currency_auto" value="0" />*/
/*                     {{ text_no }}*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length-class">{{ entry_length_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_length_class_id" id="input-length-class" class="form-control">*/
/*                     */
/*                     {% for length_class in length_classes %}*/
/*                     {% if length_class.length_class_id == config_length_class_id %}*/
/*                     */
/*                     <option value="{{ length_class.length_class_id }}" selected="selected">{{ length_class.title }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ length_class.length_class_id }}">{{ length_class.title }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight-class">{{ entry_weight_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_weight_class_id" id="input-weight-class" class="form-control">*/
/*                     */
/*                     {% for weight_class in weight_classes %}*/
/*                     {% if weight_class.weight_class_id == config_weight_class_id %}*/
/*                     */
/*                     <option value="{{ weight_class.weight_class_id }}" selected="selected">{{ weight_class.title }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-option">*/
/*               <fieldset>*/
/*                 <legend>{{ text_product }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_product_count }}">{{ entry_product_count }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_product_count %}*/
/*                       <input type="radio" name="config_product_count" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_product_count" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_product_count %}*/
/*                       <input type="radio" name="config_product_count" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_product_count" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-admin-limit"><span data-toggle="tooltip" title="{{ help_limit_admin }}">{{ entry_limit_admin }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_limit_admin" value="{{ config_limit_admin }}" placeholder="{{ entry_limit_admin }}" id="input-admin-limit" class="form-control" />*/
/*                     {% if error_limit_admin %}*/
/*                     <div class="text-danger">{{ error_limit_admin }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_review }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_review }}">{{ entry_review }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_review_status %}*/
/*                       <input type="radio" name="config_review_status" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_status" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_review_status %}*/
/*                       <input type="radio" name="config_review_status" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_status" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_review_guest }}">{{ entry_review_guest }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_review_guest %}*/
/*                       <input type="radio" name="config_review_guest" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_guest" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_review_guest %}*/
/*                       <input type="radio" name="config_review_guest" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_guest" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_voucher }}</legend>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-voucher-min"><span data-toggle="tooltip" title="{{ help_voucher_min }}">{{ entry_voucher_min }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_voucher_min" value="{{ config_voucher_min }}" placeholder="{{ entry_voucher_min }}" id="input-voucher-min" class="form-control" />*/
/*                     {% if error_voucher_min %}*/
/*                     <div class="text-danger">{{ error_voucher_min }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-voucher-max"><span data-toggle="tooltip" title="{{ help_voucher_max }}">{{ entry_voucher_max }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_voucher_max" value="{{ config_voucher_max }}" placeholder="{{ entry_voucher_max }}" id="input-voucher-max" class="form-control" />*/
/*                     {% if error_voucher_max %}*/
/*                     <div class="text-danger">{{ error_voucher_max }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_tax }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_tax }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_tax %}*/
/*                       <input type="radio" name="config_tax" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_tax" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_tax %}*/
/*                       <input type="radio" name="config_tax" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_tax" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax-default"><span data-toggle="tooltip" title="{{ help_tax_default }}">{{ entry_tax_default }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_default" id="input-tax-default" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       */
/*                       {% if config_tax_default == 'shipping' %}*/
/*                       */
/*                       <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="shipping">{{ text_shipping }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% if config_tax_default == 'payment' %}*/
/*                       */
/*                       <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="payment">{{ text_payment }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax-customer"><span data-toggle="tooltip" title="{{ help_tax_customer }}">{{ entry_tax_customer }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_customer" id="input-tax-customer" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       */
/*                       {% if config_tax_customer == 'shipping' %}*/
/*                       */
/*                       <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="shipping">{{ text_shipping }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% if config_tax_customer == 'payment' %}*/
/*                       */
/*                       <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="payment">{{ text_payment }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_account }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_online }}">{{ entry_customer_online }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_online %}*/
/*                       <input type="radio" name="config_customer_online" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_online" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_online %}*/
/*                       <input type="radio" name="config_customer_online" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_online" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_activity }}">{{ entry_customer_activity }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_activity %}*/
/*                       <input type="radio" name="config_customer_activity" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_activity" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_activity %}*/
/*                       <input type="radio" name="config_customer_activity" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_activity" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_customer_search }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_search %}*/
/*                       <input type="radio" name="config_customer_search" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_search" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_search %}*/
/*                       <input type="radio" name="config_customer_search" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_search" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-customer-group"><span data-toggle="tooltip" title="{{ help_customer_group }}">{{ entry_customer_group }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_customer_group_id" id="input-customer-group" class="form-control">*/
/*                       */
/*                       {% for customer_group in customer_groups %}*/
/*                       {% if customer_group.customer_group_id == config_customer_group_id %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_group_display }}">{{ entry_customer_group_display }}</span></label>*/
/*                   <div class="col-sm-10"> {% for customer_group in customer_groups %}*/
/*                     <div class="checkbox">*/
/*                       <label> {% if customer_group.customer_group_id in config_customer_group_display %}*/
/*                         <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}" checked="checked" />*/
/*                         {{ customer_group.name }}*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}" />*/
/*                         {{ customer_group.name }}*/
/*                         {% endif %} </label>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                     {% if error_customer_group_display %}*/
/*                     <div class="text-danger">{{ error_customer_group_display }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_price }}">{{ entry_customer_price }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_price %}*/
/*                       <input type="radio" name="config_customer_price" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_price" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_price %}*/
/*                       <input type="radio" name="config_customer_price" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_price" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-login-attempts"><span data-toggle="tooltip" title="{{ help_login_attempts }}">{{ entry_login_attempts }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_login_attempts" value="{{ config_login_attempts }}" placeholder="{{ entry_login_attempts }}" id="input-login-attempts" class="form-control" />*/
/*                     {% if error_login_attempts %}*/
/*                     <div class="text-danger">{{ error_login_attempts }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-account"><span data-toggle="tooltip" title="{{ help_account }}">{{ entry_account }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_account_id" id="input-account" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_account_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_checkout }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-invoice-prefix"><span data-toggle="tooltip" title="{{ help_invoice_prefix }}">{{ entry_invoice_prefix }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_invoice_prefix" value="{{ config_invoice_prefix }}" placeholder="{{ entry_invoice_prefix }}" id="input-invoice-prefix" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_cart_weight }}">{{ entry_cart_weight }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_cart_weight %}*/
/*                       <input type="radio" name="config_cart_weight" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_cart_weight" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_cart_weight %}*/
/*                       <input type="radio" name="config_cart_weight" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_cart_weight" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_checkout_guest }}">{{ entry_checkout_guest }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_checkout_guest %}*/
/*                       <input type="radio" name="config_checkout_guest" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_checkout_guest" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_checkout_guest %}*/
/*                       <input type="radio" name="config_checkout_guest" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_checkout_guest" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-checkout"><span data-toggle="tooltip" title="{{ help_checkout }}">{{ entry_checkout }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_checkout_id" id="input-checkout" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_checkout_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-order-status"><span data-toggle="tooltip" title="{{ help_order_status }}">{{ entry_order_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_order_status_id" id="input-order-status" class="form-control">*/
/*                       */
/*                       {% for order_status in order_statuses %}*/
/*                       {% if order_status.order_status_id == config_order_status_id %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-process-status"><span data-toggle="tooltip" title="{{ help_processing_status }}">{{ entry_processing_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for order_status in order_statuses %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if order_status.order_status_id in config_processing_status %}*/
/*                           <input type="checkbox" name="config_processing_status[]" value="{{ order_status.order_status_id }}" checked="checked" />*/
/*                           {{ order_status.name }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_processing_status[]" value="{{ order_status.order_status_id }}" />*/
/*                           {{ order_status.name }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_processing_status %}*/
/*                     <div class="text-danger">{{ error_processing_status }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-complete-status"><span data-toggle="tooltip" title="{{ help_complete_status }}">{{ entry_complete_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for order_status in order_statuses %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if order_status.order_status_id in config_complete_status %}*/
/*                           <input type="checkbox" name="config_complete_status[]" value="{{ order_status.order_status_id }}" checked="checked" />*/
/*                           {{ order_status.name }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_complete_status[]" value="{{ order_status.order_status_id }}" />*/
/*                           {{ order_status.name }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_complete_status %}*/
/*                     <div class="text-danger">{{ error_complete_status }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-fraud-status"><span data-toggle="tooltip" title="{{ help_fraud_status }}">{{ entry_fraud_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_fraud_status_id" id="input-fraud-status" class="form-control">*/
/*                       */
/*                       {% for order_status in order_statuses %}*/
/*                       {% if order_status.order_status_id == config_fraud_status_id %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-api"><span data-toggle="tooltip" title="{{ help_api }}">{{ entry_api }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_api_id" id="input-api" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for api in apis %}*/
/*                       {% if api.api_id == config_api_id %}*/
/*                       */
/*                       <option value="{{ api.api_id }}" selected="selected">{{ api.username }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ api.api_id }}">{{ api.username }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_stock }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_display }}">{{ entry_stock_display }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_display %}*/
/*                       <input type="radio" name="config_stock_display" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_display" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_stock_display %}*/
/*                       <input type="radio" name="config_stock_display" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_display" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_warning }}">{{ entry_stock_warning }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_warning %}*/
/*                       <input type="radio" name="config_stock_warning" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_warning" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_stock_warning %}*/
/*                       <input type="radio" name="config_stock_warning" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_warning" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_checkout }}">{{ entry_stock_checkout }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_checkout %}*/
/*                       <input type="radio" name="config_stock_checkout" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_checkout" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_stock_checkout %}*/
/*                       <input type="radio" name="config_stock_checkout" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_checkout" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_affiliate }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate-group">{{ entry_affiliate_group }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_affiliate_group_id" id="input-affiliate-group" class="form-control">*/
/*                       */
/*                       {% for customer_group in customer_groups %}*/
/*                       {% if customer_group.customer_group_id == config_affiliate_group_id %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_affiliate_approval }}">{{ entry_affiliate_approval }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_affiliate_approval %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_affiliate_approval %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_affiliate_auto }}">{{ entry_affiliate_auto }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_affiliate_auto %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_affiliate_auto %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate-commission"><span data-toggle="tooltip" title="{{ help_affiliate_commission }}">{{ entry_affiliate_commission }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_affiliate_commission" value="{{ config_affiliate_commission }}" placeholder="{{ entry_affiliate_commission }}" id="input-affiliate-commission" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate"><span data-toggle="tooltip" title="{{ help_affiliate }}">{{ entry_affiliate }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_affiliate_id" id="input-affiliate" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_affiliate_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_return }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-return"><span data-toggle="tooltip" title="{{ help_return }}">{{ entry_return }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_return_id" id="input-return" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_return_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-return-status"><span data-toggle="tooltip" title="{{ help_return_status }}">{{ entry_return_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_return_status_id" id="input-return-status" class="form-control">*/
/*                       */
/*                       {% for return_status in return_statuses %}*/
/*                       {% if return_status.return_status_id == config_return_status_id %}*/
/*                       */
/*                       <option value="{{ return_status.return_status_id }}" selected="selected">{{ return_status.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ return_status.return_status_id }}">{{ return_status.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_captcha }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_captcha }}">{{ entry_captcha }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_captcha" id="input-captcha" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       */
/*                       {% for captcha in captchas %}*/
/*                       {% if captcha.value == config_captcha %}*/
/*                       */
/*                       <option value="{{ captcha.value }}" selected="selected">{{ captcha.text }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ captcha.value }}">{{ captcha.text }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_captcha_page }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for captcha_page in captcha_pages %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if captcha_page.value in config_captcha_page %}*/
/*                           <input type="checkbox" name="config_captcha_page[]" value="{{ captcha_page.value }}" checked="checked" />*/
/*                           {{ captcha_page.text }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_captcha_page[]" value="{{ captcha_page.value }}" />*/
/*                           {{ captcha_page.text }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-image">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-logo">{{ entry_logo }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-logo" data-toggle="image" class="img-thumbnail"><img src="{{ logo }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_logo" value="{{ config_logo }}" id="input-logo" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-icon"><span data-toggle="tooltip" title="{{ help_icon }}">{{ entry_icon }}</span></label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-icon" data-toggle="image" class="img-thumbnail"><img src="{{ icon }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_icon" value="{{ config_icon }}" id="input-icon" />*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-mail">*/
/*               <fieldset>*/
/*                 <legend>{{ text_general }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-engine"><span data-toggle="tooltip" title="{{ help_mail_engine }}">{{ entry_mail_engine }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_mail_engine" id="input-mail-engine" class="form-control">*/
/*                       */
/*                       {% if config_mail_engine == 'mail' %}*/
/*                       */
/*                       <option value="mail" selected="selected">{{ text_mail }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="mail">{{ text_mail }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% if config_mail_engine == 'smtp' %}*/
/*                       */
/*                       <option value="smtp" selected="selected">{{ text_smtp }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="smtp">{{ text_smtp }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-parameter"><span data-toggle="tooltip" title="{{ help_mail_parameter }}">{{ entry_mail_parameter }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_parameter" value="{{ config_mail_parameter }}" placeholder="{{ entry_mail_parameter }}" id="input-mail-parameter" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-hostname"><span data-toggle="tooltip" title="{{ help_mail_smtp_hostname }}">{{ entry_mail_smtp_hostname }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_hostname" value="{{ config_mail_smtp_hostname }}" placeholder="{{ entry_mail_smtp_hostname }}" id="input-mail-smtp-hostname" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-username">{{ entry_mail_smtp_username }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_username" value="{{ config_mail_smtp_username }}" placeholder="{{ entry_mail_smtp_username }}" id="input-mail-smtp-username" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-password"><span data-toggle="tooltip" title="{{ help_mail_smtp_password }}">{{ entry_mail_smtp_password }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_password" value="{{ config_mail_smtp_password }}" placeholder="{{ entry_mail_smtp_password }}" id="input-mail-smtp-password" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-port">{{ entry_mail_smtp_port }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_port" value="{{ config_mail_smtp_port }}" placeholder="{{ entry_mail_smtp_port }}" id="input-mail-smtp-port" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-timeout">{{ entry_mail_smtp_timeout }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_timeout" value="{{ config_mail_smtp_timeout }}" placeholder="{{ entry_mail_smtp_timeout }}" id="input-mail-smtp-timeout" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_mail_alert }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_mail_alert }}">{{ entry_mail_alert }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for mail_alert in mail_alerts %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if mail_alert.value in config_mail_alert %}*/
/*                           <input type="checkbox" name="config_mail_alert[]" value="{{ mail_alert.value }}" checked="checked" />*/
/*                           {{ mail_alert.text }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_mail_alert[]" value="{{ mail_alert.value }}" />*/
/*                           {{ mail_alert.text }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-alert-email"><span data-toggle="tooltip" title="{{ help_mail_alert_email }}">{{ entry_mail_alert_email }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_mail_alert_email" rows="5" placeholder="{{ entry_mail_alert_email }}" id="input-alert-email" class="form-control">{{ config_mail_alert_email }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-server">*/
/*               <fieldset>*/
/*                 <legend>{{ text_general }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_maintenance }}">{{ entry_maintenance }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_maintenance %}*/
/*                       <input type="radio" name="config_maintenance" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_maintenance" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_maintenance %}*/
/*                       <input type="radio" name="config_maintenance" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_maintenance" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_seo_url }}">{{ entry_seo_url }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_seo_url %}*/
/*                       <input type="radio" name="config_seo_url" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_seo_url" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_seo_url %}*/
/*                       <input type="radio" name="config_seo_url" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_seo_url" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-robots"><span data-toggle="tooltip" title="{{ help_robots }}">{{ entry_robots }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_robots" rows="5" placeholder="{{ entry_robots }}" id="input-robots" class="form-control">{{ config_robots }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-compression"><span data-toggle="tooltip" title="{{ help_compression }}">{{ entry_compression }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_compression" value="{{ config_compression }}" placeholder="{{ entry_compression }}" id="input-compression" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_security }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_secure }}">{{ entry_secure }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_secure %}*/
/*                       <input type="radio" name="config_secure" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_secure" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_secure %}*/
/*                       <input type="radio" name="config_secure" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_secure" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_password }}">{{ entry_password }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_password %}*/
/*                       <input type="radio" name="config_password" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_password" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_password %}*/
/*                       <input type="radio" name="config_password" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_password" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_shared }}">{{ entry_shared }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_shared %}*/
/*                       <input type="radio" name="config_shared" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_shared" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_shared %}*/
/*                       <input type="radio" name="config_shared" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_shared" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-encryption"><span data-toggle="tooltip" title="{{ help_encryption }}">{{ entry_encryption }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_encryption" rows="5" placeholder="{{ entry_encryption }}" id="input-encryption" class="form-control">{{ config_encryption }}</textarea>*/
/*                     {% if error_encryption %}*/
/*                     <div class="text-danger">{{ error_encryption }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_upload }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-max-size"><span data-toggle="tooltip" title="{{ help_file_max_size }}">{{ entry_file_max_size }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_file_max_size" value="{{ config_file_max_size }}" placeholder="{{ entry_file_max_size }}" id="input-file-max-size" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-ext-allowed"><span data-toggle="tooltip" title="{{ help_file_ext_allowed }}">{{ entry_file_ext_allowed }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_file_ext_allowed" rows="5" placeholder="{{ entry_file_ext_allowed }}" id="input-file-ext-allowed" class="form-control">{{ config_file_ext_allowed }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-mime-allowed"><span data-toggle="tooltip" title="{{ help_file_mime_allowed }}">{{ entry_file_mime_allowed }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_file_mime_allowed" rows="5" placeholder="{{ entry_file_mime_allowed }}" id="input-file-mime-allowed" class="form-control">{{ config_file_mime_allowed }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_error }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_error_display }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_error_display %}*/
/*                       <input type="radio" name="config_error_display" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_display" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_error_display %}*/
/*                       <input type="radio" name="config_error_display" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_display" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_error_log }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_error_log %}*/
/*                       <input type="radio" name="config_error_log" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_log" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_error_log %}*/
/*                       <input type="radio" name="config_error_log" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_log" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}</label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-error-filename">{{ entry_error_filename }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_error_filename" value="{{ config_error_filename }}" placeholder="{{ entry_error_filename }}" id="input-error-filename" class="form-control" />*/
/*                     {% if error_log %}*/
/*                     <div class="text-danger">{{ error_log }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('select[name=\'config_theme\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=setting/setting/theme&user_token={{ user_token }}&theme=' + this.value,*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'config_theme\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'config_theme\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(html) {*/
/* 			$('#theme').attr('src', html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'config_theme\']').trigger('change');*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('select[name=\'config_country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'config_country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'config_country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/*           			html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == '{{ config_zone_id }}') {*/
/*             			html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('select[name=\'config_zone_id\']').html(html);*/
/* 			*/
/* 			$('#button-save').prop('disabled', false);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'config_country_id\']').trigger('change');*/
/* //--></script></div>*/
/* {{ footer }} */
