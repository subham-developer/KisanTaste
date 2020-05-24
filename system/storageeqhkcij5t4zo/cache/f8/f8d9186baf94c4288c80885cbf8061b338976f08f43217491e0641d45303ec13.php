<?php

/* mintleaf/template/extension/module/featured.twig */
class __TwigTemplate_3c99c32450a24afab23455a18c709fcdf7a2e006fdbd77ece86f9fe5697b3262 extends Twig_Template
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
        echo "<div class=\"module-product-wrap\">
<!-- Module Heading Starts -->
  <h3 class=\"module-product-heading\">";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
<!-- Module Heading Ends -->
<!-- Nested Row Starts -->
  <div class=\"row\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "  <!-- Product Col Starts -->
    <div class=\"product-layout col-lg-3 col-md-4 col-sm-6 col-xs-12\">
    <!-- Product Module Starts -->
      <div class=\"product-thumb module-product animation rounded-3\">
      <!-- Product Image Starts -->
        <div class=\"module-product-image\">
          <a href=\"";
            // line 14
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">
            <img src=\"";
            // line 15
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive img-center\" />
          </a>
        </div>
      <!-- Product Image Ends -->
      <!-- Product Caption Starts -->
        <div class=\"module-product-caption\">
        <!-- Product Name Starts -->
          <h6 class=\"module-product-title\"><a href=\"";
            // line 22
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h6>
        <!-- Product Name Ends -->
        <!-- Product Description Starts -->
          <div class=\"module-product-description hidden\">
            ";
            // line 26
            echo $this->getAttribute($context["product"], "description", array());
            echo "
          </div>
        <!-- Product Description Ends -->
        ";
            // line 29
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 30
                echo "        <!-- Product Ratings Starts -->
          <div class=\"module-product-ratings\">
            ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 33
                    echo "              ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 34
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
              ";
                    } else {
                        // line 36
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
              ";
                    }
                    // line 38
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "          </div>
        <!-- Product Ratings Ends -->
        ";
            }
            // line 42
            echo "        ";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 43
                echo "        <!-- Product Price Starts -->
          <div class=\"module-product-price\">
            ";
                // line 45
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 46
                    echo "              ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
            ";
                } else {
                    // line 48
                    echo "              <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
            ";
                }
                // line 50
                echo "          </div>
        <!-- Product Price Ends -->
        ";
            }
            // line 53
            echo "        <!-- Add To Cart Button Starts -->
          <button type=\"button\" class=\"btn module-product-btn-cart animation rounded-3\" onclick=\"cart.add('";
            // line 54
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
        // line 62
        echo "  
  </div>
<!-- Nested Row Ends -->
</div>";
    }

    public function getTemplateName()
    {
        return "mintleaf/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 62,  138 => 54,  135 => 53,  130 => 50,  122 => 48,  116 => 46,  114 => 45,  110 => 43,  107 => 42,  102 => 39,  96 => 38,  92 => 36,  88 => 34,  85 => 33,  81 => 32,  77 => 30,  75 => 29,  69 => 26,  60 => 22,  46 => 15,  42 => 14,  34 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }
}
/* <div class="module-product-wrap">*/
/* <!-- Module Heading Starts -->*/
/*   <h3 class="module-product-heading">{{ heading_title }}</h3>*/
/* <!-- Module Heading Ends -->*/
/* <!-- Nested Row Starts -->*/
/*   <div class="row">*/
/*   {% for product in products %}*/
/*   <!-- Product Col Starts -->*/
/*     <div class="product-layout col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/*     <!-- Product Module Starts -->*/
/*       <div class="product-thumb module-product animation rounded-3">*/
/*       <!-- Product Image Starts -->*/
/*         <div class="module-product-image">*/
/*           <a href="{{ product.href }}">*/
/*             <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive img-center" />*/
/*           </a>*/
/*         </div>*/
/*       <!-- Product Image Ends -->*/
/*       <!-- Product Caption Starts -->*/
/*         <div class="module-product-caption">*/
/*         <!-- Product Name Starts -->*/
/*           <h6 class="module-product-title"><a href="{{ product.href }}">{{ product.name }}</a></h6>*/
/*         <!-- Product Name Ends -->*/
/*         <!-- Product Description Starts -->*/
/*           <div class="module-product-description hidden">*/
/*             {{ product.description }}*/
/*           </div>*/
/*         <!-- Product Description Ends -->*/
/*         {% if product.rating %}*/
/*         <!-- Product Ratings Starts -->*/
/*           <div class="module-product-ratings">*/
/*             {% for i in 1..5 %}*/
/*               {% if product.rating < i %}*/
/*                 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*               {% else %}*/
/*                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           </div>*/
/*         <!-- Product Ratings Ends -->*/
/*         {% endif %}*/
/*         {% if product.price %}*/
/*         <!-- Product Price Starts -->*/
/*           <div class="module-product-price">*/
/*             {% if not product.special %}*/
/*               {{ product.price }}*/
/*             {% else %}*/
/*               <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*             {% endif %}*/
/*           </div>*/
/*         <!-- Product Price Ends -->*/
/*         {% endif %}*/
/*         <!-- Add To Cart Button Starts -->*/
/*           <button type="button" class="btn module-product-btn-cart animation rounded-3" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> {{ button_cart }}</button>*/
/*         <!-- Add To Cart Button Ends -->*/
/*         </div>*/
/*       <!-- Product Caption Ends -->*/
/*       </div>*/
/*     <!-- Product Module Ends -->*/
/*     </div>*/
/*   <!-- Product Col Ends -->*/
/*   {% endfor %}  */
/*   </div>*/
/* <!-- Nested Row Ends -->*/
/* </div>*/
