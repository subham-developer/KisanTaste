<?php

/* mintleaf/template/product/manufacturer_info.twig */
class __TwigTemplate_d62cffc71e01616936fadcd656ee25914665433a754bab4d6c3e7eff6404b056 extends Twig_Template
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
<div id=\"product-manufacturer\" class=\"container\">
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
      ";
        // line 18
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 19
            echo "        <div class=\"product-sort-wrap rounded-3\">
          <div class=\"row\">
            <div class=\"col-md-2 col-xs-4\">
              <div class=\"btn-group\">
                <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 23
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
                <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 24
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
              </div>
            </div>
            <div class=\"col-md-3 col-xs-8 text-right-sm text-right-xs\">
              <div class=\"form-group\"><a href=\"";
            // line 28
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
            </div>
            <div class=\"col-md-4 col-xs-6\">
              <div class=\"form-group input-group\">
                <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 32
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
                <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                  ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 35
                echo "                    ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 36
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                    ";
                } else {
                    // line 38
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                    ";
                }
                // line 40
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                </select>
              </div>
            </div>
            <div class=\"col-md-3 col-xs-6\">
              <div class=\"form-group input-group\">
                <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 46
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
                <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                  ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 49
                echo "                    ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 50
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                    ";
                } else {
                    // line 52
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                    ";
                }
                // line 54
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                </select>
              </div>
            </div>
          </div>
        </div>
      <div class=\"row\"> ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 61
                echo "      <!-- Product Col Starts -->
        <div class=\"product-layout product-list col-xs-12\">
        <!-- Product Module Starts -->
          <div class=\"product-thumb module-product animation\">
          <!-- Product Image Starts -->
            <div class=\"module-product-image\">
              <a href=\"";
                // line 67
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" /></a>
            </div>
          <!-- Product Image Ends -->
          <!-- Product Caption Starts -->
            <div class=\"module-product-caption\">
            <!-- Product Name Starts -->
              <h6 class=\"module-product-title\"><a href=\"";
                // line 73
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h6>
            <!-- Product Name Ends -->
            <!-- Product Description Starts -->
              <div class=\"module-product-description\">
                ";
                // line 77
                echo $this->getAttribute($context["product"], "description", array());
                echo "
              </div>
            <!-- Product Description Ends -->
            ";
                // line 80
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 81
                    echo "            <!-- Product Ratings Starts -->
              <div class=\"module-product-ratings\">
                ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 84
                        echo "                  ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 85
                            echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        } else {
                            // line 87
                            echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        }
                        // line 89
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "              </div>
            <!-- Product Ratings Ends -->
            ";
                }
                // line 93
                echo "             ";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 94
                    echo "              <!-- Product Price Starts -->
                <div class=\"module-product-price\">
                  ";
                    // line 96
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 97
                        echo "                    ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                  ";
                    } else {
                        // line 99
                        echo "                    <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                  ";
                    }
                    // line 101
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 102
                        echo "                  <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
                  ";
                    }
                    // line 104
                    echo "                </div>
              <!-- Product Price Ends -->
              ";
                }
                // line 107
                echo "              <!-- Add To Cart Button Starts -->
                <button type=\"button\" class=\"btn module-product-btn-cart animation\" onclick=\"cart.add('";
                // line 108
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> ";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</button>
              <!-- Add To Cart Button Ends -->
            </div>
          <!-- Product Caption Ends -->
          </div>
        <!-- Product Module Ends -->
        </div>
      <!-- Product Col Ends -->
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo " </div>
        <div class=\"pagination-wrap\">
          <div class=\"row\">
            <div class=\"col-sm-6 text-left-lg text-left-md text-left-sm results\">";
            // line 119
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
            <div class=\"col-sm-6 text-right-lg text-right-md text-right-sm\">";
            // line 120
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
          </div>
        </div>
      ";
        } else {
            // line 124
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
            // line 126
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 129
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 130
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 132
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "mintleaf/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 132,  356 => 130,  351 => 129,  343 => 126,  337 => 124,  330 => 120,  326 => 119,  321 => 116,  304 => 108,  301 => 107,  296 => 104,  288 => 102,  285 => 101,  277 => 99,  271 => 97,  269 => 96,  265 => 94,  262 => 93,  257 => 90,  251 => 89,  247 => 87,  243 => 85,  240 => 84,  236 => 83,  232 => 81,  230 => 80,  224 => 77,  215 => 73,  200 => 67,  192 => 61,  188 => 60,  181 => 55,  175 => 54,  167 => 52,  159 => 50,  156 => 49,  152 => 48,  147 => 46,  140 => 41,  134 => 40,  126 => 38,  118 => 36,  115 => 35,  111 => 34,  106 => 32,  97 => 28,  90 => 24,  86 => 23,  80 => 19,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-manufacturer" class="container">*/
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
/*       {% if products %}*/
/*         <div class="product-sort-wrap rounded-3">*/
/*           <div class="row">*/
/*             <div class="col-md-2 col-xs-4">*/
/*               <div class="btn-group">*/
/*                 <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>*/
/*                 <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/*               </div>*/
/*             </div>*/
/*             <div class="col-md-3 col-xs-8 text-right-sm text-right-xs">*/
/*               <div class="form-group"><a href="{{ compare }}" id="compare-total" class="btn btn-link">{{ text_compare }}</a></div>*/
/*             </div>*/
/*             <div class="col-md-4 col-xs-6">*/
/*               <div class="form-group input-group">*/
/*                 <label class="input-group-addon" for="input-sort">{{ text_sort }}</label>*/
/*                 <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*                   {% for sorts in sorts %}*/
/*                     {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*                       <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                     {% else %}*/
/*                       <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                     {% endif %}*/
/*                   {% endfor %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="col-md-3 col-xs-6">*/
/*               <div class="form-group input-group">*/
/*                 <label class="input-group-addon" for="input-limit">{{ text_limit }}</label>*/
/*                 <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*                   {% for limits in limits %}*/
/*                     {% if limits.value == limit %}*/
/*                       <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*                     {% else %}*/
/*                       <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*                     {% endif %}*/
/*                   {% endfor %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       <div class="row"> {% for product in products %}*/
/*       <!-- Product Col Starts -->*/
/*         <div class="product-layout product-list col-xs-12">*/
/*         <!-- Product Module Starts -->*/
/*           <div class="product-thumb module-product animation">*/
/*           <!-- Product Image Starts -->*/
/*             <div class="module-product-image">*/
/*               <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a>*/
/*             </div>*/
/*           <!-- Product Image Ends -->*/
/*           <!-- Product Caption Starts -->*/
/*             <div class="module-product-caption">*/
/*             <!-- Product Name Starts -->*/
/*               <h6 class="module-product-title"><a href="{{ product.href }}">{{ product.name }}</a></h6>*/
/*             <!-- Product Name Ends -->*/
/*             <!-- Product Description Starts -->*/
/*               <div class="module-product-description">*/
/*                 {{ product.description }}*/
/*               </div>*/
/*             <!-- Product Description Ends -->*/
/*             {% if product.rating %}*/
/*             <!-- Product Ratings Starts -->*/
/*               <div class="module-product-ratings">*/
/*                 {% for i in 1..5 %}*/
/*                   {% if product.rating < i %}*/
/*                     <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                   {% else %}*/
/*                     <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </div>*/
/*             <!-- Product Ratings Ends -->*/
/*             {% endif %}*/
/*              {% if product.price %}*/
/*               <!-- Product Price Starts -->*/
/*                 <div class="module-product-price">*/
/*                   {% if not product.special %}*/
/*                     {{ product.price }}*/
/*                   {% else %}*/
/*                     <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*                   {% endif %}*/
/*                   {% if product.tax %}*/
/*                   <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               <!-- Product Price Ends -->*/
/*               {% endif %}*/
/*               <!-- Add To Cart Button Starts -->*/
/*                 <button type="button" class="btn module-product-btn-cart animation" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> {{ button_cart }}</button>*/
/*               <!-- Add To Cart Button Ends -->*/
/*             </div>*/
/*           <!-- Product Caption Ends -->*/
/*           </div>*/
/*         <!-- Product Module Ends -->*/
/*         </div>*/
/*       <!-- Product Col Ends -->*/
/*         {% endfor %} </div>*/
/*         <div class="pagination-wrap">*/
/*           <div class="row">*/
/*             <div class="col-sm-6 text-left-lg text-left-md text-left-sm results">{{ results }}</div>*/
/*             <div class="col-sm-6 text-right-lg text-right-md text-right-sm">{{ pagination }}</div>*/
/*           </div>*/
/*         </div>*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
