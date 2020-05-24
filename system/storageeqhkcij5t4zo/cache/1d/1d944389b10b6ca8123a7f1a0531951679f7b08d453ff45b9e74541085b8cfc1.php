<?php

/* mintleaf/template/product/category.twig */
class __TwigTemplate_704ee4778a3b16a67b1315ecb16c5fc8ae384fb02839930ac4796aa915ef68e5 extends Twig_Template
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
<div id=\"product-category\" class=\"container\">
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
      <div class=\"row cat-desc-wrap\">
        <div class=\"col-xs-2\">
        ";
        // line 19
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 20
            echo "          <p><img src=\"";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" class=\"img-responsive img-style-1 rounded-3\" /></p>
        ";
        }
        // line 22
        echo "        </div>
        <div class=\"col-xs-10\">
          <h4 class=\"page-heading-1\">";
        // line 24
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h4>
          ";
        // line 25
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 26
            echo "          <div>";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
          ";
        }
        // line 28
        echo "        </div>
      </div>
      ";
        // line 30
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 31
            echo "        <h5 class=\"page-sub-heading-1\">";
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h5>
        <ul class=\"list-unstyled list-inline list-cat-1 animation\">
        ";
            // line 33
            if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) <= 5)) {
                echo "          
          ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 35
                    echo "            <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "        ";
            } else {
                // line 38
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["categories"]) ? $context["categories"] : null), twig_round((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 39
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 40
                        echo "              <li><a href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "            
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "        ";
            }
            // line 44
            echo "        </ul>
      ";
        }
        // line 46
        echo "      ";
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 47
            echo "        <div class=\"product-sort-wrap rounded-3\">
          <div class=\"row\">
            <div class=\"col-md-2 col-xs-4\">
              <div class=\"btn-group\">
                <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 51
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
                <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 52
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
              </div>
            </div>
            <div class=\"col-md-3 col-xs-8 text-right-sm text-right-xs\">
              <div class=\"form-group\"><a href=\"";
            // line 56
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
            </div>
            <div class=\"col-md-4 col-xs-6\">
              <div class=\"form-group input-group\">
                <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 60
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
                <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                  ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 63
                echo "                    ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 64
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                    ";
                } else {
                    // line 66
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                    ";
                }
                // line 68
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                </select>
              </div>
            </div>
            <div class=\"col-md-3 col-xs-6\">
              <div class=\"form-group input-group\">
                <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 74
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
                <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                  ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 77
                echo "                    ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 78
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                    ";
                } else {
                    // line 80
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                    ";
                }
                // line 82
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                </select>
              </div>
            </div>
          </div>
        </div>
      <div class=\"row\"> ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 89
                echo "      <!-- Product Col Starts -->
        <div class=\"product-layout product-list col-xs-12\">
        <!-- Product Module Starts -->
          <div class=\"product-thumb module-product animation\">
          <!-- Product Image Starts -->
            <div class=\"module-product-image\">
              <a href=\"";
                // line 95
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
                // line 101
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h6>
            <!-- Product Name Ends -->
            <!-- Product Description Starts -->
              <div class=\"module-product-description\">
                ";
                // line 105
                echo $this->getAttribute($context["product"], "description", array());
                echo "
              </div>
            <!-- Product Description Ends -->
            ";
                // line 108
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 109
                    echo "            <!-- Product Ratings Starts -->
              <div class=\"module-product-ratings\">
                ";
                    // line 111
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 112
                        echo "                  ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 113
                            echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        } else {
                            // line 115
                            echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        }
                        // line 117
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    echo "              </div>
            <!-- Product Ratings Ends -->
            ";
                }
                // line 121
                echo "             ";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 122
                    echo "              <!-- Product Price Starts -->
                <div class=\"module-product-price\">
                  ";
                    // line 124
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 125
                        echo "                    ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                  ";
                    } else {
                        // line 127
                        echo "                    <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                  ";
                    }
                    // line 129
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 130
                        echo "                  <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
                  ";
                    }
                    // line 132
                    echo "                </div>
              <!-- Product Price Ends -->
              ";
                }
                // line 135
                echo "              <!-- Add To Cart Button Starts -->
                <button type=\"button\" class=\"btn module-product-btn-cart animation\" onclick=\"cart.add('";
                // line 136
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
            // line 144
            echo " </div>
        <div class=\"pagination-wrap\">
          <div class=\"row\">
            <div class=\"col-sm-6 text-left-lg text-left-md text-left-sm results\">";
            // line 147
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
            <div class=\"col-sm-6 text-right-lg text-right-md text-right-sm\">";
            // line 148
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
          </div>
        </div>
      ";
        }
        // line 152
        echo "      ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 153
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
            // line 155
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 158
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 159
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 161
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "mintleaf/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 161,  455 => 159,  450 => 158,  442 => 155,  436 => 153,  433 => 152,  426 => 148,  422 => 147,  417 => 144,  400 => 136,  397 => 135,  392 => 132,  384 => 130,  381 => 129,  373 => 127,  367 => 125,  365 => 124,  361 => 122,  358 => 121,  353 => 118,  347 => 117,  343 => 115,  339 => 113,  336 => 112,  332 => 111,  328 => 109,  326 => 108,  320 => 105,  311 => 101,  296 => 95,  288 => 89,  284 => 88,  277 => 83,  271 => 82,  263 => 80,  255 => 78,  252 => 77,  248 => 76,  243 => 74,  236 => 69,  230 => 68,  222 => 66,  214 => 64,  211 => 63,  207 => 62,  202 => 60,  193 => 56,  186 => 52,  182 => 51,  176 => 47,  173 => 46,  169 => 44,  166 => 43,  159 => 41,  148 => 40,  143 => 39,  138 => 38,  135 => 37,  124 => 35,  120 => 34,  116 => 33,  110 => 31,  108 => 30,  104 => 28,  98 => 26,  96 => 25,  92 => 24,  88 => 22,  78 => 20,  76 => 19,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-category" class="container">*/
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
/*       <div class="row cat-desc-wrap">*/
/*         <div class="col-xs-2">*/
/*         {% if thumb %}*/
/*           <p><img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-responsive img-style-1 rounded-3" /></p>*/
/*         {% endif %}*/
/*         </div>*/
/*         <div class="col-xs-10">*/
/*           <h4 class="page-heading-1">{{ heading_title }}</h4>*/
/*           {% if description %}*/
/*           <div>{{ description }}</div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*       {% if categories %}*/
/*         <h5 class="page-sub-heading-1">{{ text_refine }}</h5>*/
/*         <ul class="list-unstyled list-inline list-cat-1 animation">*/
/*         {% if categories|length <= 5 %}          */
/*           {% for category in categories %}*/
/*             <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*           {% endfor %}*/
/*         {% else %}*/
/*           {% for category in categories|batch((categories|length / 4)|round(1, 'ceil')) %}*/
/*             {% for child in category %}*/
/*               <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*             {% endfor %}            */
/*           {% endfor %}*/
/*         {% endif %}*/
/*         </ul>*/
/*       {% endif %}*/
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
/*       {% endif %}*/
/*       {% if not categories and not products %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
/* */
