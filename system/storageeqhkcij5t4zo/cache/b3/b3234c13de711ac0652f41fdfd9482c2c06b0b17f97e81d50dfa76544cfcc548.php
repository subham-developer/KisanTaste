<?php

/* theme--50047/template/product/category.twig */
class __TwigTemplate_e0939e1e8a349b624d8fc40eec4300187f16ae961ace29f0354a5cc7b6cc20d3 extends Twig_Template
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
<div id=\"ttr_content_and_sidebar_container\" > 
";
        // line 3
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 4
            $context["class"] = "ttr_both_sidebar";
        } elseif (        // line 5
(isset($context["column_left"]) ? $context["column_left"] : null)) {
            // line 6
            $context["class"] = "ttr_single_sidebar";
        } elseif (        // line 7
(isset($context["column_right"]) ? $context["column_right"] : null)) {
            // line 8
            $context["class"] = "ttr_single_sidebar_right";
        } else {
            // line 10
            $context["class"] = "ttr_zero_sidebar";
        }
        // line 12
        echo " <div id=\"ttr_content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\" >
 <div id=\"ttr_content_margin\" >
<div id=\"content\">
 <ul class=\"breadcrumb\">
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
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
        // line 19
        echo "</ul>
";
        // line 20
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
";
        // line 21
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
<h2 class=\"opc_cart_heading\">";
        // line 22
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
";
        // line 23
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            // line 24
            echo "<div class=\"row opc_category_description\">
";
            // line 25
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 26
                echo "<div class=\"text-center col-md-2\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"img-thumbnail\" /></div>
";
            }
            // line 28
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 29
                echo "<div class=\"col-md-10 postcontent\">";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "</div>
";
            }
            // line 31
            echo "</div>
<hr>
";
        }
        // line 34
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 35
            echo " <h3>";
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h3>
";
            // line 36
            if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) <= 5)) {
                // line 37
                echo "<div class=\"row\">
<div class=\"col-md-3\">
<ul>
";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 41
                    echo "<li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "</ul>
</div>
</div>
";
            } else {
                // line 47
                echo "<div class=\"row\">
";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["categories"]) ? $context["categories"] : null), twig_round((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 49
                    echo "<div class=\"col-md-3\">
<ul>
";
                    // line 51
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 52
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a></li>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "</ul>
</div>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "</div>
";
            }
        }
        // line 60
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 61
            echo "<p class=\"opc_category_description\"><a href=\"";
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></p>
<div class=\"row\">
<div class=\"col-md-3 col-lg-2 hidden-xs\">
<div class=\"btn-group hidden-xs\">
<button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 65
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"glyphicon glyphicon-th-list\"></i></button>
 <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 66
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"glyphicon glyphicon-th\"></i></button>
</div>
</div>
<div class=\"col-md-2 col-sm-2 col-lg-2 col-xs-2 col-lg-offset-2 col-md-offset-1 text-right opc_filters\">
<label class=\"control-label\" for=\"input-sort\">";
            // line 70
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
</div>
<div class=\"col-md-2 col-sm-4 col-lg-2 col-xs-4 text-right\">
<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 75
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 76
                    echo "<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
";
                } else {
                    // line 78
                    echo "<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "</select>
</div>
<div class=\"col-md-2 col-sm-2 col-lg-2 col-xs-2 text-right opc_filters\">
<label class=\"control-label\" for=\"input-limit\">";
            // line 84
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
</div>
<div class=\"col-md-2 col-sm-2 col-lg-2 col-xs-4 text-right\">
<select id=\"input-limit\" class=\"form-control\"onchange=\"location = this.value;\">
";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 89
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 90
                    echo "<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
";
                } else {
                    // line 92
                    echo "<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "</select>
</div>
</div>
 <br />
<div class=\"row\">
";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 101
                echo "<div class=\"product-layout product-list\" data-lgcol=\" col-lg-3\"  data-mdcol=\" col-md-3\" data-smcol =\" col-sm-12\" data-xscol=\" col-xs-12\" id=\"custom-class\">
<div class=\"product-thumb ttr_post\">
<div class=\"image product-image\"><a href=\"";
                // line 103
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" /></a></div>
<div>
<div class=\"product-shop\">
<div class=\"product-shop-margin postcontent\">
<div class=\"caption ttr_article\">
<div class=\"ttr_post_inner_box\">
<h4 class=\"ttr_post_title\"><a href=\"";
                // line 109
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
</div>
<p>";
                // line 111
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
";
                // line 112
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 113
                    echo "<div class=\"rating\">
";
                    // line 114
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 115
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 116
                            echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
";
                        } else {
                            // line 118
                            echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "</div>
";
                }
                // line 123
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 124
                    echo " <div class=\" price\">
";
                    // line 125
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 126
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
";
                    } else {
                        // line 128
                        echo "<span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
";
                    }
                    // line 130
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 131
                        echo "<span class=\"price-tax\"><?php echo \$text_tax; ?> ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
";
                    }
                    // line 133
                    echo "</div>
";
                }
                // line 135
                echo "</div>
<div class=\"button-group postedon add-to-cart\">
 <button class=\"btn btn-primary\" type=\"button\" onclick=\"cart.add('";
                // line 137
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</button>
<ul class=\"add-to-links\" style=\"clear:both;padding-left:0px;padding-right:0px;\">
<li> <a class=\" \"  type=\"button\" onclick=\"wishlist.add('";
                // line 139
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\">Add to Wishlist</a></li>
<li><a class=\" \" type=\"button\"  onclick=\"compare.add('";
                // line 140
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\">Add to Compare</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>
 <div class=\"row\" >
<div class=\"col-md-6 text-left\" >";
            // line 151
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
<div class=\"col-md-6 text-right\">";
            // line 152
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
</div>
";
        }
        // line 155
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 156
            echo "<p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
<div class=\"buttons\">
<div class=\" pull-right\"><a href=\"";
            // line 158
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\" >";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
</div>
";
        }
        // line 161
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
";
        // line 162
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
";
        // line 166
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "theme--50047/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  543 => 166,  489 => 162,  485 => 161,  477 => 158,  471 => 156,  469 => 155,  463 => 152,  459 => 151,  455 => 149,  440 => 140,  436 => 139,  427 => 137,  423 => 135,  419 => 133,  413 => 131,  411 => 130,  403 => 128,  398 => 126,  396 => 125,  393 => 124,  391 => 123,  387 => 121,  379 => 118,  375 => 116,  373 => 115,  369 => 114,  366 => 113,  364 => 112,  360 => 111,  353 => 109,  338 => 103,  334 => 101,  330 => 100,  323 => 95,  311 => 92,  303 => 90,  301 => 89,  297 => 88,  290 => 84,  285 => 81,  273 => 78,  265 => 76,  263 => 75,  259 => 74,  252 => 70,  245 => 66,  241 => 65,  231 => 61,  229 => 60,  224 => 57,  216 => 54,  205 => 52,  201 => 51,  197 => 49,  193 => 48,  190 => 47,  184 => 43,  173 => 41,  169 => 40,  164 => 37,  162 => 36,  157 => 35,  155 => 34,  150 => 31,  144 => 29,  142 => 28,  132 => 26,  130 => 25,  127 => 24,  125 => 23,  121 => 22,  70 => 21,  66 => 20,  63 => 19,  52 => 17,  48 => 16,  40 => 12,  37 => 10,  34 => 8,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="ttr_content_and_sidebar_container" > */
/* {% if column_left and column_right %}*/
/* {% set class = 'ttr_both_sidebar' %}*/
/* {% elseif column_left %}*/
/* {% set class = 'ttr_single_sidebar' %}*/
/* {% elseif column_right %}*/
/* {% set class = 'ttr_single_sidebar_right' %}*/
/* {% else %}*/
/* {% set class = 'ttr_zero_sidebar' %}*/
/* {% endif %}*/
/*  <div id="ttr_content" class="{{ class }}" >*/
/*  <div id="ttr_content_margin" >*/
/* <div id="content">*/
/*  <ul class="breadcrumb">*/
/* {% for breadcrumb in breadcrumbs %}*/
/*  <li> <a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* {% endfor %}*/
/* </ul>*/
/* {{ content_top }}*/
/* {% for i in 0..cabv-1 %}{% set flag, break = 0, false %}{% for key, value in  attribute(_context, 'content_pos_above' ~ i) if not key % 2 %}{% if value.1 == true %}{% set flag = [1] %}{% for f in flag if not break %}<div class="contenttopcolumn{{ i }}">{% set break = true %}{% endfor %}{% endif %}{% endfor %}{% for i,value in attribute(_context, 'content_pos_above' ~ i) if not i % 2 %} {{ value.0 }} {% endfor %}{% if break %} </div>{% endif %}{% endfor %}<div style="clear: both;"></div><!--content_above_end-->*/
/* <h2 class="opc_cart_heading">{{ heading_title }}</h2>*/
/* {% if thumb or description %}*/
/* <div class="row opc_category_description">*/
/* {% if thumb %}*/
/* <div class="text-center col-md-2"><img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" /></div>*/
/* {% endif %}*/
/* {% if description %}*/
/* <div class="col-md-10 postcontent">{{ description }}</div>*/
/* {% endif %}*/
/* </div>*/
/* <hr>*/
/* {% endif %}*/
/* {% if categories %}*/
/*  <h3>{{ text_refine }}</h3>*/
/* {% if categories|length <= 5 %}*/
/* <div class="row">*/
/* <div class="col-md-3">*/
/* <ul>*/
/* {% for category in categories %}*/
/* <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/* {% endfor %}*/
/* </ul>*/
/* </div>*/
/* </div>*/
/* {% else %}*/
/* <div class="row">*/
/* {% for category in categories|batch((categories|length / 4)|round(1, 'ceil')) %}*/
/* <div class="col-md-3">*/
/* <ul>*/
/* {% for child in category %}*/
/* <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/* {% endfor %}*/
/* </ul>*/
/* </div>*/
/* {% endfor %}*/
/* </div>*/
/* {% endif %}*/
/* {% endif %}*/
/* {% if products %}*/
/* <p class="opc_category_description"><a href="{{ compare }}" id="compare-total">{{ text_compare }}</a></p>*/
/* <div class="row">*/
/* <div class="col-md-3 col-lg-2 hidden-xs">*/
/* <div class="btn-group hidden-xs">*/
/* <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_list }}"><i class="glyphicon glyphicon-th-list"></i></button>*/
/*  <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_grid }}"><i class="glyphicon glyphicon-th"></i></button>*/
/* </div>*/
/* </div>*/
/* <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 col-lg-offset-2 col-md-offset-1 text-right opc_filters">*/
/* <label class="control-label" for="input-sort">{{ text_sort }}</label>*/
/* </div>*/
/* <div class="col-md-2 col-sm-4 col-lg-2 col-xs-4 text-right">*/
/* <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/* {% for sorts in sorts %}*/
/* {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/* <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/* {% else %}*/
/* <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/* {% endif %}*/
/* {% endfor %}*/
/* </select>*/
/* </div>*/
/* <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 text-right opc_filters">*/
/* <label class="control-label" for="input-limit">{{ text_limit }}</label>*/
/* </div>*/
/* <div class="col-md-2 col-sm-2 col-lg-2 col-xs-4 text-right">*/
/* <select id="input-limit" class="form-control"onchange="location = this.value;">*/
/* {% for limits in limits %}*/
/* {% if limits.value == limit %}*/
/* <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/* {% else %}*/
/* <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/* {% endif %}*/
/* {% endfor %}*/
/* </select>*/
/* </div>*/
/* </div>*/
/*  <br />*/
/* <div class="row">*/
/* {% for product in products %}*/
/* <div class="product-layout product-list" data-lgcol=" col-lg-3"  data-mdcol=" col-md-3" data-smcol =" col-sm-12" data-xscol=" col-xs-12" id="custom-class">*/
/* <div class="product-thumb ttr_post">*/
/* <div class="image product-image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" /></a></div>*/
/* <div>*/
/* <div class="product-shop">*/
/* <div class="product-shop-margin postcontent">*/
/* <div class="caption ttr_article">*/
/* <div class="ttr_post_inner_box">*/
/* <h4 class="ttr_post_title"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* </div>*/
/* <p>{{ product.description }}</p>*/
/* {% if product.rating %}*/
/* <div class="rating">*/
/* {% for i in 1..5 %}*/
/* {% if product.rating < i %}*/
/* <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* {% else %}*/
/* <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* {% endif %}*/
/* {% endfor %}*/
/* </div>*/
/* {% endif %}*/
/* {% if product.price %}*/
/*  <div class=" price">*/
/* {% if not product.special %}*/
/* {{ product.price }}*/
/* {% else %}*/
/* <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* {% endif %}*/
/* {% if product.tax %}*/
/* <span class="price-tax"><?php echo $text_tax; ?> {{ product.tax }}</span>*/
/* {% endif %}*/
/* </div>*/
/* {% endif %}*/
/* </div>*/
/* <div class="button-group postedon add-to-cart">*/
/*  <button class="btn btn-primary" type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');">{{ button_cart }}</button>*/
/* <ul class="add-to-links" style="clear:both;padding-left:0px;padding-right:0px;">*/
/* <li> <a class=" "  type="button" onclick="wishlist.add('{{ product.product_id }}');">Add to Wishlist</a></li>*/
/* <li><a class=" " type="button"  onclick="compare.add('{{ product.product_id }}');">Add to Compare</a></li>*/
/* </ul>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* {% endfor %}*/
/* </div>*/
/*  <div class="row" >*/
/* <div class="col-md-6 text-left" >{{ pagination }}</div>*/
/* <div class="col-md-6 text-right">{{ results }}</div>*/
/* </div>*/
/* {% endif %}*/
/* {% if not categories and not products %}*/
/* <p>{{ text_empty }}</p>*/
/* <div class="buttons">*/
/* <div class=" pull-right"><a href="{{ continue }}" class="btn btn-primary" >{{ button_continue }}</a></div>*/
/* </div>*/
/* {% endif %}*/
/* {{ content_bottom }}*/
/* {% for i in 0..cblw-1 %}{% set flag, break = 0, false %}{% for key, value in  attribute(_context, 'content_pos_below' ~ i) if not key % 2 %}{% if value.1 == true %}{% set flag = [1] %}{% for f in flag if not break %}<div class="contentbottomcolumn{{ i }}">{% set break = true %}{% endfor %}{% endif %}{% endfor %}{% for i,value in attribute(_context, 'content_pos_below' ~ i) if not i % 2 %} {{ value.0 }} {% endfor %}{% if break %} </div>{% endif %}{% endfor %}<div style="clear: both;"></div><!--content_below_end-->*/
/* </div></div>*/
/* </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
