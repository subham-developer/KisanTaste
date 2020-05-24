<?php

/* mintleaf/template/information/contact.twig */
class __TwigTemplate_ba4109351fc1e7e9b7991c688c9de1d9c5201cfc749bb2ee7027ecf68524ec14 extends Twig_Template
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
        echo "
<div id=\"information-contact\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h4 class=\"page-heading-1 alt\">";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h4>
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h5 class=\"panel-title\">";
        // line 20
        echo (isset($context["text_location"]) ? $context["text_location"] : null);
        echo "</h5>
        </div>
        <div class=\"panel-body\">
          <div class=\"row\">
            ";
        // line 24
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 25
            echo "            <div class=\"col-sm-3\"><img src=\"";
            echo (isset($context["image"]) ? $context["image"] : null);
            echo "\" alt=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" title=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" class=\"img-thumbnail\" /></div>
            ";
        }
        // line 27
        echo "            <div class=\"col-sm-3\"><strong>";
        echo (isset($context["store"]) ? $context["store"] : null);
        echo "</strong><br />
              <address>
              ";
        // line 29
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "
              </address>
              ";
        // line 31
        if ((isset($context["geocode"]) ? $context["geocode"] : null)) {
            // line 32
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter((isset($context["geocode"]) ? $context["geocode"] : null));
            echo "&hl=";
            echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo (isset($context["button_map"]) ? $context["button_map"] : null);
            echo "</a>
              ";
        }
        // line 34
        echo "            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 35
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo "</strong><br>
              ";
        // line 36
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "<br />
              <br />
              ";
        // line 38
        if ((isset($context["fax"]) ? $context["fax"] : null)) {
            // line 39
            echo "              <strong>";
            echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
            echo "</strong><br>
              ";
            // line 40
            echo (isset($context["fax"]) ? $context["fax"] : null);
            echo "
              ";
        }
        // line 42
        echo "            </div>
            <div class=\"col-sm-3\">
              ";
        // line 44
        if ((isset($context["open"]) ? $context["open"] : null)) {
            // line 45
            echo "              <strong>";
            echo (isset($context["text_open"]) ? $context["text_open"] : null);
            echo "</strong><br />
              ";
            // line 46
            echo (isset($context["open"]) ? $context["open"] : null);
            echo "<br />
              <br />
              ";
        }
        // line 49
        echo "              ";
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 50
            echo "              <strong>";
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "</strong><br />
              ";
            // line 51
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "
              ";
        }
        // line 53
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 57
        if ((isset($context["locations"]) ? $context["locations"] : null)) {
            // line 58
            echo "      <h4 class=\"page-heading-1\">";
            echo (isset($context["text_store"]) ? $context["text_store"] : null);
            echo "</h4>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 61
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h5 class=\"panel-title\"><a href=\"#collapse-location";
                // line 63
                echo $this->getAttribute($context["location"], "location_id", array());
                echo "\" class=\"accordion-toggle5 data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo $this->getAttribute($context["location"], "name", array());
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 65
                echo $this->getAttribute($context["location"], "location_id", array());
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 68
                if ($this->getAttribute($context["location"], "image", array())) {
                    // line 69
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo $this->getAttribute($context["location"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 71
                echo "                <div class=\"col-sm-3\"><strong>";
                echo $this->getAttribute($context["location"], "name", array());
                echo "</strong><br />
                  <address>
                  ";
                // line 73
                echo $this->getAttribute($context["location"], "address", array());
                echo "
                  </address>
                  ";
                // line 75
                if ($this->getAttribute($context["location"], "geocode", array())) {
                    // line 76
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter($this->getAttribute($context["location"], "geocode", array()));
                    echo "&hl=";
                    echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo (isset($context["button_map"]) ? $context["button_map"] : null);
                    echo "</a>
                  ";
                }
                // line 78
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 79
                echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
                echo "</strong><br>
                  ";
                // line 80
                echo $this->getAttribute($context["location"], "telephone", array());
                echo "<br />
                  <br />
                  ";
                // line 82
                if ($this->getAttribute($context["location"], "fax", array())) {
                    // line 83
                    echo "                  <strong>";
                    echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
                    echo "</strong><br>
                  ";
                    // line 84
                    echo $this->getAttribute($context["location"], "fax", array());
                    echo "
                  ";
                }
                // line 86
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 88
                if ($this->getAttribute($context["location"], "open", array())) {
                    // line 89
                    echo "                  <strong>";
                    echo (isset($context["text_open"]) ? $context["text_open"] : null);
                    echo "</strong><br />
                  ";
                    // line 90
                    echo $this->getAttribute($context["location"], "open", array());
                    echo "<br />
                  <br />
                  ";
                }
                // line 93
                echo "                  ";
                if ($this->getAttribute($context["location"], "comment", array())) {
                    // line 94
                    echo "                  <strong>";
                    echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
                    echo "</strong><br />
                  ";
                    // line 95
                    echo $this->getAttribute($context["location"], "comment", array());
                    echo "
                  ";
                }
                // line 97
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "      </div>
      ";
        }
        // line 105
        echo "      <form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 107
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 109
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 111
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 112
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 113
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
              ";
        }
        // line 115
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 118
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 120
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 121
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 122
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
              ";
        }
        // line 124
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 127
        echo (isset($context["entry_enquiry"]) ? $context["entry_enquiry"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 129
        echo (isset($context["enquiry"]) ? $context["enquiry"] : null);
        echo "</textarea>
              ";
        // line 130
        if ((isset($context["error_enquiry"]) ? $context["error_enquiry"] : null)) {
            // line 131
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_enquiry"]) ? $context["error_enquiry"] : null);
            echo "</div>
              ";
        }
        // line 133
        echo "            </div>
          </div>
          ";
        // line 135
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
        </fieldset>
        <div class=\"buttons clearfix\">
          <div class=\"pull-right\">
            <input class=\"btn btn-main\" type=\"submit\" value=\"";
        // line 139
        echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
        echo "\" />
          </div>
        </div>
      </form>
      ";
        // line 143
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 144
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 146
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "mintleaf/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 146,  409 => 144,  405 => 143,  398 => 139,  391 => 135,  387 => 133,  381 => 131,  379 => 130,  375 => 129,  370 => 127,  365 => 124,  359 => 122,  357 => 121,  353 => 120,  348 => 118,  343 => 115,  337 => 113,  335 => 112,  331 => 111,  326 => 109,  321 => 107,  315 => 105,  311 => 103,  300 => 97,  295 => 95,  290 => 94,  287 => 93,  281 => 90,  276 => 89,  274 => 88,  270 => 86,  265 => 84,  260 => 83,  258 => 82,  253 => 80,  249 => 79,  246 => 78,  236 => 76,  234 => 75,  229 => 73,  223 => 71,  213 => 69,  211 => 68,  205 => 65,  198 => 63,  194 => 61,  190 => 60,  184 => 58,  182 => 57,  176 => 53,  171 => 51,  166 => 50,  163 => 49,  157 => 46,  152 => 45,  150 => 44,  146 => 42,  141 => 40,  136 => 39,  134 => 38,  129 => 36,  125 => 35,  122 => 34,  112 => 32,  110 => 31,  105 => 29,  99 => 27,  89 => 25,  87 => 24,  80 => 20,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="information-contact" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h4 class="page-heading-1 alt">{{ heading_title }}</h4>*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <h5 class="panel-title">{{ text_location }}</h5>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*           <div class="row">*/
/*             {% if image %}*/
/*             <div class="col-sm-3"><img src="{{ image }}" alt="{{ store }}" title="{{ store }}" class="img-thumbnail" /></div>*/
/*             {% endif %}*/
/*             <div class="col-sm-3"><strong>{{ store }}</strong><br />*/
/*               <address>*/
/*               {{ address }}*/
/*               </address>*/
/*               {% if geocode %}*/
/*               <a href="https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-3"><strong>{{ text_telephone }}</strong><br>*/
/*               {{ telephone }}<br />*/
/*               <br />*/
/*               {% if fax %}*/
/*               <strong>{{ text_fax }}</strong><br>*/
/*               {{ fax }}*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-3">*/
/*               {% if open %}*/
/*               <strong>{{ text_open }}</strong><br />*/
/*               {{ open }}<br />*/
/*               <br />*/
/*               {% endif %}*/
/*               {% if comment %}*/
/*               <strong>{{ text_comment }}</strong><br />*/
/*               {{ comment }}*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% if locations %}*/
/*       <h4 class="page-heading-1">{{ text_store }}</h4>*/
/*       <div class="panel-group" id="accordion">*/
/*         {% for location in locations %}*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h5 class="panel-title"><a href="#collapse-location{{ location.location_id }}" class="accordion-toggle5 data-toggle="collapse" data-parent="#accordion">{{ location.name }} <i class="fa fa-caret-down"></i></a></h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-location{{ location.location_id }}">*/
/*             <div class="panel-body">*/
/*               <div class="row">*/
/*                 {% if location.image %}*/
/*                 <div class="col-sm-3"><img src="{{ location.image }}" alt="{{ location.name }}" title="{{ location.name }}" class="img-thumbnail" /></div>*/
/*                 {% endif %}*/
/*                 <div class="col-sm-3"><strong>{{ location.name }}</strong><br />*/
/*                   <address>*/
/*                   {{ location.address }}*/
/*                   </address>*/
/*                   {% if location.geocode %}*/
/*                   <a href="https://maps.google.com/maps?q={{ location.geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="col-sm-3"> <strong>{{ text_telephone }}</strong><br>*/
/*                   {{ location.telephone }}<br />*/
/*                   <br />*/
/*                   {% if location.fax %}*/
/*                   <strong>{{ text_fax }}</strong><br>*/
/*                   {{ location.fax }}*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="col-sm-3">*/
/*                   {% if location.open %}*/
/*                   <strong>{{ text_open }}</strong><br />*/
/*                   {{ location.open }}<br />*/
/*                   <br />*/
/*                   {% endif %}*/
/*                   {% if location.comment %}*/
/*                   <strong>{{ text_comment }}</strong><br />*/
/*                   {{ location.comment }}*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       {% endif %}*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <fieldset>*/
/*           <legend>{{ text_contact }}</legend>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %}*/
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="email" value="{{ email }}" id="input-email" class="form-control" />*/
/*               {% if error_email %}*/
/*               <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-enquiry">{{ entry_enquiry }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control">{{ enquiry }}</textarea>*/
/*               {% if error_enquiry %}*/
/*               <div class="text-danger">{{ error_enquiry }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {{ captcha }}*/
/*         </fieldset>*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-right">*/
/*             <input class="btn btn-main" type="submit" value="{{ button_submit }}" />*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
