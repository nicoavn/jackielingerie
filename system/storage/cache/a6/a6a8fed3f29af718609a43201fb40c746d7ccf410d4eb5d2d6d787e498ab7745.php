<?php

/* catalog/recurring_list.twig */
class __TwigTemplate_7cecc411c7f751dbe3bcb29bb7645b59175a7c06bcc8494edbab6e7d10ce2efb extends Twig_Template
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
        <button type=\"submit\" form=\"form-recurring\" formaction=\"";
        // line 6
        echo (isset($context["copy"]) ? $context["copy"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_copy"]) ? $context["button_copy"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-recurring').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 23
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 24
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 28
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i>";
        // line 30
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 33
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-recurring\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-center\" width=\"1\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 39
        if (((isset($context["sort"]) ? $context["sort"] : null) == "pd.name")) {
            // line 40
            echo "                    <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>";
        } else {
            // line 42
            echo "                    <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>";
        }
        // line 43
        echo "</td>
                  <td class=\"text-right\">";
        // line 44
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.sort_order")) {
            // line 45
            echo "                    <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>";
        } else {
            // line 47
            echo "                    <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>";
        }
        // line 48
        echo "</td>
                  <td class=\"text-right\">";
        // line 49
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>";
        // line 53
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 55
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 56
                if (twig_in_filter($this->getAttribute($context["recurring"], "recurring_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 57
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\" checked=\"checked\" />";
                } else {
                    // line 59
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\" />";
                }
                // line 60
                echo "</td>
                  <td class=\"text-left\">";
                // line 61
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</td>
                  <td class=\"text-right\">";
                // line 62
                echo $this->getAttribute($context["recurring"], "sort_order", array());
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 63
                echo $this->getAttribute($context["recurring"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 67
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 68
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>";
        }
        // line 71
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 76
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 77
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>";
        // line 83
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "catalog/recurring_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 83,  216 => 77,  212 => 76,  205 => 71,  200 => 68,  197 => 67,  186 => 63,  182 => 62,  178 => 61,  175 => 60,  170 => 59,  165 => 57,  163 => 56,  160 => 55,  156 => 54,  154 => 53,  148 => 49,  145 => 48,  138 => 47,  129 => 45,  127 => 44,  124 => 43,  117 => 42,  108 => 40,  106 => 39,  97 => 33,  91 => 30,  87 => 28,  80 => 24,  78 => 23,  71 => 19,  69 => 18,  64 => 14,  54 => 12,  50 => 11,  46 => 9,  39 => 7,  33 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="submit" form="form-recurring" formaction="{{ copy }}" data-toggle="tooltip" title="{{ button_copy }}" class="btn btn-default"><i class="fa fa-copy"></i></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-recurring').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
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
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-recurring">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td class="text-center" width="1"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   <td class="text-left">{% if sort == 'pd.name' %}*/
/*                     <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_name }}">{{ column_name }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{% if sort == 'p.sort_order' %}*/
/*                     <a href="{{ sort_sort_order }}" class="{{ order|lower }}">{{ column_sort_order }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_sort_order }}">{{ column_sort_order }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if recurrings %}*/
/*                 {% for recurring in recurrings %}*/
/*                 <tr>*/
/*                   <td class="text-center">{% if recurring.recurring_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ recurring.recurring_id }}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ recurring.recurring_id }}" />*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{{ recurring.name }}</td>*/
/*                   <td class="text-right">{{ recurring.sort_order }}</td>*/
/*                   <td class="text-right"><a href="{{ recurring.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="4">{{ text_no_results }}</td>*/
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
