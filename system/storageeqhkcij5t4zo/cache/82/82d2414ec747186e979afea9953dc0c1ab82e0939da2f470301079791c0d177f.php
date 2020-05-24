<?php

/* theme--50047/template/checkout/cart.twig */
class __TwigTemplate_a4403898417a887ff06275fe13c175ce3d68b443de193e627038aaa6b00cdadd extends Twig_Template
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
<div id=\"ttr_content_and_sidebar_container\" class=\"container\">
";
        // line 3
        if ((isset($context["attention"]) ? $context["attention"] : null)) {
            // line 4
            echo "<div id=\"alert alert-info\">< i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["attention"]) ? $context["attention"] : null);
            echo "
<button type=\"button\" class=\"close\" data-dismiss=\"alert\">\$times;</button> 
</div>
";
        }
        // line 8
        echo "<div class=\"row\">
";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            $context["class"] = "ttr_both_sidebar";
        } elseif ((        // line 11
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            $context["class"] = "ttr_single_sidebar";
        } else {
            // line 14
            $context["class"] = "ttr_zero_sidebar";
        }
        // line 16
        echo " <div id=\"ttr_content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
 <div id=\"ttr_content_margin\" >
<div id=\"content\">";
        // line 18
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
<ul class=\"breadcrumb\">
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 21
            echo " <li> <a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ul>
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["cabv"]) ? $context["cabv"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            list($context["flag"], $context["break"]) =             array(0, false);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("content_pos_above" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    if (($this->getAttribute($context["value"], 1, array()) == true)) {
                        $context["flag"] = array(0 => 1);
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["flag"]) ? $context["flag"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                                echo "<div class=\"contenttopcolumn";
                                echo $context["i"];
                                echo "\">";
                                $context["break"] = true;
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("content_pos_above" . $context["i"])));
            foreach ($context['_seq'] as $context["i"] => $context["value"]) {
                if ( !($context["i"] % 2)) {
                    echo " ";
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            if ((isset($context["break"]) ? $context["break"] : null)) {
                echo " </div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "<div style=\"clear: both;\"></div><!--content_above_end-->
<h1 class=\"ttr_page_title\">";
        // line 25
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "
";
        // line 26
        if ((isset($context["weight"]) ? $context["weight"] : null)) {
            // line 27
            echo " &nbsp;(";
            echo (isset($context["weight"]) ? $context["weight"] : null);
            echo ") 
";
        }
        // line 29
        echo "</h1>
<form action=\"";
        // line 30
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
<div class=\"table-responsive\">
<table id=\"cart_summary\" class=\"ttr_prochec_table_background col-lg-12 col-md-12 col-sm-12 col-xs-12 std table\">
<thead class=\"table_head_background\">
<tr class=\"ttr_prochec_Heading\">
<td class=\"text-center\">";
        // line 35
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
<td class=\"text-left\">";
        // line 36
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
<td class=\"text-left\">";
        // line 37
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
<td class=\"text-left\">";
        // line 38
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
<td class=\"text-left\">";
        // line 39
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
<td class=\"text-left\">";
        // line 40
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
</tr>
</thead>
 <tbody>
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 45
            echo "<tr class=\"ttr_prochec_row_1 row-1\">
<td class=\"text-center ttr_prochec_image_border col-lg-2 col-md-2 col-sm-5 col-xs-5 prochec_img\" data-title=\"Image\">";
            // line 46
            if ($this->getAttribute($context["product"], "thumb", array())) {
                // line 47
                echo "<a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-thumbnail\"/></a>
";
            }
            // line 48
            echo "</td>
<td class=\"text-center col-lg-2 col-md-4 col-sm-4 col-xs-4 \"data-title=\"Product Name\" style=\"word-wrap: break-word;\" ><a class=\"ttr_prochec_product_link\" href=\"";
            // line 49
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a>
";
            // line 50
            if ( !$this->getAttribute($context["product"], "stock", array())) {
                // line 51
                echo "<span class=\"text-danger\">***</span>
";
            }
            // line 53
            if ($this->getAttribute($context["product"], "option", array())) {
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 55
                    echo "<br />
<small>";
                    // line 56
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 59
            if ($this->getAttribute($context["product"], "reward", array())) {
                // line 60
                echo "<br />
<small>";
                // line 61
                echo $this->getAttribute($context["product"], "reward", array());
                echo "</small>
";
            }
            // line 63
            if ($this->getAttribute($context["product"], "recurring", array())) {
                // line 64
                echo "  <br />
<span class=\"label label-info\">";
                // line 65
                echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                echo "</span> <small>";
                echo $this->getAttribute($context["product"], "recurring", array());
                echo "</small>
";
            }
            // line 66
            echo "</td>
<td class=\"text-center opc_cart_desc col-lg-2 col-md-2\" data-title=\"Model\">";
            // line 67
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
<td class=\"text-center col-lg-2 col-md-2 col-sm-1 col-xs-1\" data-title=\"Quantity\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
<input type=\"text\"name=\"quantity[";
            // line 69
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "]\"value=\"";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\"size=\"1\"class=\"form-control\"/>
<span class=\"input-group-btn\">
<button type=\"submit\" class=\"btn btn-info btn-sm\"style=\"margin:0px; height:34px;\"><span class=\"glyphicon glyphicon-repeat\"></span></button>
<button type=\"button\"class=\"btn btn-danger btn-sm\"onclick=\"cart.remove('";
            // line 72
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "');\"style=\"margin:0px; height:34px;\"><span class=\"glyphicon glyphicon-remove-circle\"></span></button>
</span></div></td>
<td class=\"text-center ttr_prochec_price col-lg-2 col-md-2 col-sm-1 col-xs-1\"data-title=\"Unit Price\">";
            // line 74
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
<td class=\"text-center ttr_prochec_price col-lg-2 col-md-2 col-sm-1 col-xs-1\"data-title=\"Total\">";
            // line 75
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 79
            echo "<tr>
<td data-title=\"Image\"></td>
<td class=\"text-center\" data-title=\"Product Name\"><span class=\"cart_product_name\">";
            // line 81
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</span></td>
<td class=\"text-center\" data-title=\"Model\"></td>
<td class=\"text-center\" data-title=\"Quantity\"><div class=\"input-group btn-block\"style=\"max:width:200px;\">
<input type=\"text\" name=\" \" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\"/>
<span class=\"input-group-btn\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 85
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger btn-sm\" onclick=\"voucher.remove('";
            echo $this->getAttribute($context["voucher"], "key", array());
            echo "');\" style=\"margin:0px; height:34px;\"><span class=\"glyphicon glyphicon-remove-circle\"></span></button></span></div></td>
<td class=\"text-center ttr_prochec_price\" data-title=\"Unit Price\">";
            // line 86
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
<td class=\"text-center ttr_prochec_price\" data-title=\"Total\">";
            // line 87
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
 </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo " </tbody>
 </table >
 </div>
 </form>
";
        // line 94
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 95
            echo "<h2 class=\"opc_cart_heading\">";
            echo (isset($context["text_next"]) ? $context["text_next"] : null);
            echo "</h2>
<p class=\"ttr_cart_content\">";
            // line 96
            echo (isset($context["text_next_choice"]) ? $context["text_next_choice"] : null);
            echo "</p>
<div class=\"panel-group ttr_shopping_expander\" id=\"accordion\">
";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 99
                echo $context["module"];
                echo "
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "</div>
";
        }
        // line 104
        echo " <br/>
<div class=\"row\" >
<div class=\"col-lg-5 col-lg-offset-7 col-md-6 col-md-offset-6 \" >
<table id=\"cart_summary_total\" class=\"table table-bordered cart_bottom_table  ttr_prochec_table_background col-md-4 \" >
";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 109
            echo "<tr class=\"ttr_opc_table\">
<td class=\"text-right ttr_prochec_subtotal\"><strong>";
            // line 110
            echo $this->getAttribute($context["total"], "title", array());
            echo ":</strong></td>
<td class=\"text-right ttr_prochec_subtotal\">";
            // line 111
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
 </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo " </table >
</div>
</div>
<div class=\"buttons cart_buttons\">
<div class=\"pull-left ttr_button_align\"><a href=\"";
        // line 118
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_shopping"]) ? $context["button_shopping"] : null);
        echo "</a></div>
<div class=\"pull-right ttr_button_align\"><a href=\"";
        // line 119
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" class=\"btn btn-default\">Proceed to Checkout</a></div>
</div> <div style=\"clear: both;\"></div>
";
        // line 121
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["cblw"]) ? $context["cblw"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            list($context["flag"], $context["break"]) =             array(0, false);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("content_pos_below" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    if (($this->getAttribute($context["value"], 1, array()) == true)) {
                        $context["flag"] = array(0 => 1);
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["flag"]) ? $context["flag"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                                echo "<div class=\"contentbottomcolumn";
                                echo $context["i"];
                                echo "\">";
                                $context["break"] = true;
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("content_pos_below" . $context["i"])));
            foreach ($context['_seq'] as $context["i"] => $context["value"]) {
                if ( !($context["i"] % 2)) {
                    echo " ";
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            if ((isset($context["break"]) ? $context["break"] : null)) {
                echo " </div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "<div style=\"clear: both;\"></div><!--content_below_end-->
</div></div>
</div>
</div>
</div>
";
        // line 127
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "theme--50047/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 127,  407 => 122,  403 => 121,  398 => 119,  392 => 118,  386 => 114,  377 => 111,  373 => 110,  370 => 109,  366 => 108,  360 => 104,  356 => 102,  347 => 99,  343 => 98,  338 => 96,  333 => 95,  331 => 94,  325 => 90,  316 => 87,  312 => 86,  306 => 85,  299 => 81,  295 => 79,  291 => 78,  282 => 75,  278 => 74,  273 => 72,  265 => 69,  260 => 67,  257 => 66,  250 => 65,  247 => 64,  245 => 63,  240 => 61,  237 => 60,  235 => 59,  224 => 56,  221 => 55,  217 => 54,  215 => 53,  211 => 51,  209 => 50,  203 => 49,  200 => 48,  188 => 47,  186 => 46,  183 => 45,  179 => 44,  172 => 40,  168 => 39,  164 => 38,  160 => 37,  156 => 36,  152 => 35,  144 => 30,  141 => 29,  135 => 27,  133 => 26,  129 => 25,  78 => 24,  75 => 23,  64 => 21,  60 => 20,  55 => 18,  49 => 16,  46 => 14,  43 => 12,  41 => 11,  39 => 10,  37 => 9,  34 => 8,  26 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="ttr_content_and_sidebar_container" class="container">*/
/* {% if attention %}*/
/* <div id="alert alert-info">< i class="fa fa-info-circle"></i> {{ attention }}*/
/* <button type="button" class="close" data-dismiss="alert">$times;</button> */
/* </div>*/
/* {% endif %}*/
/* <div class="row">*/
/* {% if column_left and column_right %}*/
/* {% set class = 'ttr_both_sidebar' %}*/
/* {% elseif column_left or column_right %}*/
/* {% set class = 'ttr_single_sidebar' %}*/
/* {% else %}*/
/* {% set class = 'ttr_zero_sidebar' %}*/
/* {% endif %}*/
/*  <div id="ttr_content" class="{{ class }}">*/
/*  <div id="ttr_content_margin" >*/
/* <div id="content">{{ content_top }}*/
/* <ul class="breadcrumb">*/
/* {% for breadcrumb in breadcrumbs %}*/
/*  <li> <a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* {% endfor %}*/
/* </ul>*/
/* {% for i in 0..cabv-1 %}{% set flag, break = 0, false %}{% for key, value in  attribute(_context, 'content_pos_above' ~ i) if not key % 2 %}{% if value.1 == true %}{% set flag = [1] %}{% for f in flag if not break %}<div class="contenttopcolumn{{ i }}">{% set break = true %}{% endfor %}{% endif %}{% endfor %}{% for i,value in attribute(_context, 'content_pos_above' ~ i) if not i % 2 %} {{ value.0 }} {% endfor %}{% if break %} </div>{% endif %}{% endfor %}<div style="clear: both;"></div><!--content_above_end-->*/
/* <h1 class="ttr_page_title">{{ heading_title }}*/
/* {% if weight %}*/
/*  &nbsp;({{ weight }}) */
/* {% endif %}*/
/* </h1>*/
/* <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/* <div class="table-responsive">*/
/* <table id="cart_summary" class="ttr_prochec_table_background col-lg-12 col-md-12 col-sm-12 col-xs-12 std table">*/
/* <thead class="table_head_background">*/
/* <tr class="ttr_prochec_Heading">*/
/* <td class="text-center">{{ column_image }}</td>*/
/* <td class="text-left">{{ column_name }}</td>*/
/* <td class="text-left">{{ column_model }}</td>*/
/* <td class="text-left">{{ column_quantity }}</td>*/
/* <td class="text-left">{{ column_price }}</td>*/
/* <td class="text-left">{{ column_total }}</td>*/
/* </tr>*/
/* </thead>*/
/*  <tbody>*/
/* {% for product in products %}*/
/* <tr class="ttr_prochec_row_1 row-1">*/
/* <td class="text-center ttr_prochec_image_border col-lg-2 col-md-2 col-sm-5 col-xs-5 prochec_img" data-title="Image">{% if product.thumb %}*/
/* <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail"/></a>*/
/* {% endif %}</td>*/
/* <td class="text-center col-lg-2 col-md-4 col-sm-4 col-xs-4 "data-title="Product Name" style="word-wrap: break-word;" ><a class="ttr_prochec_product_link" href="{{ product.href }}">{{ product.name }}</a>*/
/* {% if not product.stock %}*/
/* <span class="text-danger">***</span>*/
/* {% endif %}*/
/* {% if product.option %}*/
/* {% for option in product.option %}*/
/* <br />*/
/* <small>{{ option.name }}: {{ option.value }}</small>*/
/* {% endfor %}*/
/* {% endif %}*/
/* {% if product.reward %}*/
/* <br />*/
/* <small>{{ product.reward }}</small>*/
/* {% endif %}*/
/* {% if product.recurring %}*/
/*   <br />*/
/* <span class="label label-info">{{ text_recurring_item }}</span> <small>{{ product.recurring }}</small>*/
/* {% endif %}</td>*/
/* <td class="text-center opc_cart_desc col-lg-2 col-md-2" data-title="Model">{{ product.model }}</td>*/
/* <td class="text-center col-lg-2 col-md-2 col-sm-1 col-xs-1" data-title="Quantity"><div class="input-group btn-block" style="max-width: 200px;">*/
/* <input type="text"name="quantity[{{ product.cart_id }}]"value="{{ product.quantity }}"size="1"class="form-control"/>*/
/* <span class="input-group-btn">*/
/* <button type="submit" class="btn btn-info btn-sm"style="margin:0px; height:34px;"><span class="glyphicon glyphicon-repeat"></span></button>*/
/* <button type="button"class="btn btn-danger btn-sm"onclick="cart.remove('{{ product.cart_id }}');"style="margin:0px; height:34px;"><span class="glyphicon glyphicon-remove-circle"></span></button>*/
/* </span></div></td>*/
/* <td class="text-center ttr_prochec_price col-lg-2 col-md-2 col-sm-1 col-xs-1"data-title="Unit Price">{{ product.price }}</td>*/
/* <td class="text-center ttr_prochec_price col-lg-2 col-md-2 col-sm-1 col-xs-1"data-title="Total">{{ product.total }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* {% for voucher in vouchers %}*/
/* <tr>*/
/* <td data-title="Image"></td>*/
/* <td class="text-center" data-title="Product Name"><span class="cart_product_name">{{ voucher.description }}</span></td>*/
/* <td class="text-center" data-title="Model"></td>*/
/* <td class="text-center" data-title="Quantity"><div class="input-group btn-block"style="max:width:200px;">*/
/* <input type="text" name=" " value="1" size="1" disabled="disabled" class="form-control"/>*/
/* <span class="input-group-btn"><button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm" onclick="voucher.remove('{{ voucher.key }}');" style="margin:0px; height:34px;"><span class="glyphicon glyphicon-remove-circle"></span></button></span></div></td>*/
/* <td class="text-center ttr_prochec_price" data-title="Unit Price">{{ voucher.amount }}</td>*/
/* <td class="text-center ttr_prochec_price" data-title="Total">{{ voucher.amount }}</td>*/
/*  </tr>*/
/* {% endfor %}*/
/*  </tbody>*/
/*  </table >*/
/*  </div>*/
/*  </form>*/
/* {% if modules %}*/
/* <h2 class="opc_cart_heading">{{ text_next }}</h2>*/
/* <p class="ttr_cart_content">{{ text_next_choice }}</p>*/
/* <div class="panel-group ttr_shopping_expander" id="accordion">*/
/* {% for module in modules %}*/
/* {{ module }}*/
/* </div>*/
/* {% endfor %}*/
/* </div>*/
/* {% endif %}*/
/*  <br/>*/
/* <div class="row" >*/
/* <div class="col-lg-5 col-lg-offset-7 col-md-6 col-md-offset-6 " >*/
/* <table id="cart_summary_total" class="table table-bordered cart_bottom_table  ttr_prochec_table_background col-md-4 " >*/
/* {% for total in totals %}*/
/* <tr class="ttr_opc_table">*/
/* <td class="text-right ttr_prochec_subtotal"><strong>{{ total.title }}:</strong></td>*/
/* <td class="text-right ttr_prochec_subtotal">{{ total.text }}</td>*/
/*  </tr>*/
/* {% endfor %}*/
/*  </table >*/
/* </div>*/
/* </div>*/
/* <div class="buttons cart_buttons">*/
/* <div class="pull-left ttr_button_align"><a href="{{ continue }}" class="btn btn-primary">{{ button_shopping }}</a></div>*/
/* <div class="pull-right ttr_button_align"><a href="{{ checkout }}" class="btn btn-default">Proceed to Checkout</a></div>*/
/* </div> <div style="clear: both;"></div>*/
/* {{ content_bottom }}</div>*/
/* {% for i in 0..cblw-1 %}{% set flag, break = 0, false %}{% for key, value in  attribute(_context, 'content_pos_below' ~ i) if not key % 2 %}{% if value.1 == true %}{% set flag = [1] %}{% for f in flag if not break %}<div class="contentbottomcolumn{{ i }}">{% set break = true %}{% endfor %}{% endif %}{% endfor %}{% for i,value in attribute(_context, 'content_pos_below' ~ i) if not i % 2 %} {{ value.0 }} {% endfor %}{% if break %} </div>{% endif %}{% endfor %}<div style="clear: both;"></div><!--content_below_end-->*/
/* </div></div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
