<?php

/* marketing/coupon_list.twig */
class __TwigTemplate_fafccad81201fff2b03086e3aa082152bf177ead00d15f703bbed491f98505d0 extends Twig_Template
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
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-coupon').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
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
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 22
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i>";
        // line 29
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-coupon\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 38
        if (((isset($context["sort"]) ? $context["sort"] : null) == "name")) {
            // line 39
            echo "                    <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>";
        } else {
            // line 41
            echo "                    <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>";
        }
        // line 42
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
        if (((isset($context["sort"]) ? $context["sort"] : null) == "code")) {
            // line 44
            echo "                    <a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>";
        } else {
            // line 46
            echo "                    <a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>";
        }
        // line 47
        echo "</td>
                  <td class=\"text-right\">";
        // line 48
        if (((isset($context["sort"]) ? $context["sort"] : null) == "discount")) {
            // line 49
            echo "                    <a href=\"";
            echo (isset($context["sort_discount"]) ? $context["sort_discount"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_discount"]) ? $context["column_discount"] : null);
            echo "</a>";
        } else {
            // line 51
            echo "                    <a href=\"";
            echo (isset($context["sort_discount"]) ? $context["sort_discount"] : null);
            echo "\">";
            echo (isset($context["column_discount"]) ? $context["column_discount"] : null);
            echo "</a>";
        }
        // line 52
        echo "</td>
                  <td class=\"text-left\">";
        // line 53
        if (((isset($context["sort"]) ? $context["sort"] : null) == "date_start")) {
            // line 54
            echo "                    <a href=\"";
            echo (isset($context["sort_date_start"]) ? $context["sort_date_start"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_start"]) ? $context["column_date_start"] : null);
            echo "</a>";
        } else {
            // line 56
            echo "                    <a href=\"";
            echo (isset($context["sort_date_start"]) ? $context["sort_date_start"] : null);
            echo "\">";
            echo (isset($context["column_date_start"]) ? $context["column_date_start"] : null);
            echo "</a>";
        }
        // line 57
        echo "</td>
                  <td class=\"text-left\">";
        // line 58
        if (((isset($context["sort"]) ? $context["sort"] : null) == "date_end")) {
            // line 59
            echo "                    <a href=\"";
            echo (isset($context["sort_date_end"]) ? $context["sort_date_end"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_end"]) ? $context["column_date_end"] : null);
            echo "</a>";
        } else {
            // line 61
            echo "                    <a href=\"";
            echo (isset($context["sort_date_end"]) ? $context["sort_date_end"] : null);
            echo "\">";
            echo (isset($context["column_date_end"]) ? $context["column_date_end"] : null);
            echo "</a>";
        }
        // line 62
        echo "</td>
                  <td class=\"text-left\">";
        // line 63
        if (((isset($context["sort"]) ? $context["sort"] : null) == "status")) {
            // line 64
            echo "                    <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>";
        } else {
            // line 66
            echo "                    <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>";
        }
        // line 67
        echo "</td>
                  <td class=\"text-right\">";
        // line 68
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>";
        // line 72
        if ((isset($context["coupons"]) ? $context["coupons"] : null)) {
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["coupons"]) ? $context["coupons"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 74
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 75
                if (twig_in_filter($this->getAttribute($context["coupon"], "coupon_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 76
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["coupon"], "coupon_id", array());
                    echo "\" checked=\"checked\" />";
                } else {
                    // line 78
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["coupon"], "coupon_id", array());
                    echo "\" />";
                }
                // line 79
                echo "</td>
                  <td class=\"text-left\">";
                // line 80
                echo $this->getAttribute($context["coupon"], "name", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 81
                echo $this->getAttribute($context["coupon"], "code", array());
                echo "</td>
                  <td class=\"text-right\">";
                // line 82
                echo $this->getAttribute($context["coupon"], "discount", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 83
                echo $this->getAttribute($context["coupon"], "date_start", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 84
                echo $this->getAttribute($context["coupon"], "date_end", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 85
                echo $this->getAttribute($context["coupon"], "status", array());
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 86
                echo $this->getAttribute($context["coupon"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 90
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"8\">";
            // line 91
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>";
        }
        // line 94
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 99
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 100
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>";
        // line 106
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "marketing/coupon_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 106,  310 => 100,  306 => 99,  299 => 94,  294 => 91,  291 => 90,  280 => 86,  276 => 85,  272 => 84,  268 => 83,  264 => 82,  260 => 81,  256 => 80,  253 => 79,  248 => 78,  243 => 76,  241 => 75,  238 => 74,  234 => 73,  232 => 72,  226 => 68,  223 => 67,  216 => 66,  207 => 64,  205 => 63,  202 => 62,  195 => 61,  186 => 59,  184 => 58,  181 => 57,  174 => 56,  165 => 54,  163 => 53,  160 => 52,  153 => 51,  144 => 49,  142 => 48,  139 => 47,  132 => 46,  123 => 44,  121 => 43,  118 => 42,  111 => 41,  102 => 39,  100 => 38,  91 => 32,  85 => 29,  81 => 27,  74 => 23,  72 => 22,  65 => 18,  63 => 17,  58 => 13,  48 => 11,  44 => 10,  40 => 8,  33 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-coupon').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
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
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-coupon">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   <td class="text-left">{% if sort == 'name' %}*/
/*                     <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_name }}">{{ column_name }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'code' %}*/
/*                     <a href="{{ sort_code }}" class="{{ order|lower }}">{{ column_code }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_code }}">{{ column_code }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{% if sort == 'discount' %}*/
/*                     <a href="{{ sort_discount }}" class="{{ order|lower }}">{{ column_discount }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_discount }}">{{ column_discount }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'date_start' %}*/
/*                     <a href="{{ sort_date_start }}" class="{{ order|lower }}">{{ column_date_start }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_date_start }}">{{ column_date_start }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'date_end' %}*/
/*                     <a href="{{ sort_date_end }}" class="{{ order|lower }}">{{ column_date_end }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_date_end }}">{{ column_date_end }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'status' %}*/
/*                     <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_status }}">{{ column_status }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if coupons %}*/
/*                 {% for coupon in coupons %}*/
/*                 <tr>*/
/*                   <td class="text-center">{% if coupon.coupon_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ coupon.coupon_id }}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ coupon.coupon_id }}" />*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{{ coupon.name }}</td>*/
/*                   <td class="text-left">{{ coupon.code }}</td>*/
/*                   <td class="text-right">{{ coupon.discount }}</td>*/
/*                   <td class="text-left">{{ coupon.date_start }}</td>*/
/*                   <td class="text-left">{{ coupon.date_end }}</td>*/
/*                   <td class="text-left">{{ coupon.status }}</td>*/
/*                   <td class="text-right"><a href="{{ coupon.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="8">{{ text_no_results }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
