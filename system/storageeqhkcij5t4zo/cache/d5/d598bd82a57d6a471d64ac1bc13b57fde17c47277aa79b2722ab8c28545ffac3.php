<?php

/* mintleaf/template/common/footer.twig */
class __TwigTemplate_db70f9f31fc72cf5e53b7610f20391ce05b769027d5f7f9f0b79d287f6621c24 extends Twig_Template
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
        echo "<!-- Footer Starts -->
  <footer class=\"main-footer animation\">
  <!-- Nested Container Starts -->
    <div class=\"container\">
    <!-- Nested Row Starts -->
      <div class=\"row\">
      ";
        // line 7
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 8
            echo "      <!-- Information Column Starts -->
        <div class=\"col-md-3 col-sm-4 col-xs-12\">
        <!-- Foot Col Starts -->
          <div class=\"foot-col\">
          <!-- Foot Col Head Starts -->
            <h4 class=\"foot-col-head text-color-brand font-weight-medium\">";
            // line 13
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h4>
          <!-- Foot Col Head Ends -->
          <!-- Foot Col Body Starts -->
            <div class=\"foot-col-body\">
            <!-- Footer Links Starts -->
              <ul class=\"list-unstyled footer-links mb-xs-0 mb-sm-0 font-weight-medium\">
              ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 20
                echo "                <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "              </ul>
            <!-- Footer Links Ends -->
            </div>
          <!-- Foot Col Body Ends -->
          </div>
        <!-- Foot Col Ends -->
        </div>
      <!-- Information Column Ends -->
      ";
        }
        // line 31
        echo "      <!-- My Account Column Starts -->
        <div class=\"col-md-3 col-sm-4 col-xs-12\">
        <!-- Foot Col Starts -->
          <div class=\"foot-col\">
          <!-- Foot Col Head Starts -->
            <h4 class=\"foot-col-head text-color-brand font-weight-medium\">";
        // line 36
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h4>
          <!-- Foot Col Head Ends -->
          <!-- Foot Col Body Starts -->
            <div class=\"foot-col-body\">
            <!-- Footer Links Starts -->
              <ul class=\"list-unstyled footer-links mb-xs-0 mb-sm-0 font-weight-medium\">
                <li><a href=\"";
        // line 42
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 43
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 44
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 45
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
              </ul>
            <!-- Footer Links Ends -->
            </div>
          <!-- Foot Col Body Ends -->
          </div>
        <!-- Foot Col Ends -->
        </div>
      <!-- My Account Column Ends -->
      <!-- Customer Services Column Starts -->
        <div class=\"col-md-3 col-sm-4 col-xs-12\">
        <!-- Foot Col Starts -->
          <div class=\"foot-col\">
          <!-- Foot Col Head Starts -->
            <h4 class=\"foot-col-head text-color-brand font-weight-medium\">";
        // line 59
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h4>
          <!-- Foot Col Head Ends -->
          <!-- Foot Col Body Starts -->
            <div class=\"foot-col-body\">
            <!-- Footer Links Starts -->
              <ul class=\"list-unstyled footer-links mb-xs-0 mb-sm-0 font-weight-medium\">
                <li><a href=\"";
        // line 65
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 66
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 67
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
              </ul>
            <!-- Footer Links Ends -->
            </div>
          <!-- Foot Col Body Ends -->
          </div>
        <!-- Foot Col Ends -->
        </div>
      <!-- Customer Services Column Ends -->
      <!-- Divider For Small Screens Starts -->
        <div class=\"col-xs-12 hidden-xs hidden-md hidden-lg\"><hr class=\"hr-1\"></div>
      <!-- Divider For Small Screens Ends -->
      <!-- Contact Us Column Starts -->
        <div class=\"col-md-3 col-xs-12\">
        <!-- Foot Col Starts -->
          <div class=\"foot-col last\">
          <!-- Foot Col Head Starts -->
            <h4 class=\"foot-col-head text-color-brand font-weight-medium\">Contact Us</h4>
          <!-- Foot Col Head Ends -->
          <!-- Foot Col Body Starts -->
            <div class=\"foot-col-body\">
            <!-- Footer Contact Links Starts -->
              <ul class=\"list-unstyled footer-contact-links mb-xs-0 mb-sm-0 font-weight-medium\">
                <li><i class=\"fa fa-shopping-cart\"></i> Mint Leaf Shopping Cart</li>
                <li><i class=\"fa fa-map-marker\"></i> My Company, Road No.</li>
                <li><i class=\"fa fa-envelope-o\"></i> E-mail : <a href=\"mailto:E-mail : info@yourdomain.com\">info@yourdomain.com</a></li>
                <li><i class=\"fa fa-phone\"></i> Phone: <a href=\"tel:0012345678900\">001 234 567 8900</a></li>
              </ul>
            <!-- Footer Contact Links Ends -->
            </div>
          <!-- Foot Col Body Ends -->
          </div>
        <!-- Foot Col Ends -->
        </div>
      <!-- Contact Us Column Ends -->
      </div>
    <!-- Nested Row Ends -->
    </div>
  <!-- Nested Container Ends -->
  </footer>
<!-- Footer Ends -->
<!-- Copyright Starts -->
  <div class=\"copyright\">
  <!-- Nested Container Starts -->
    <div class=\"container text-center-xs text-center-sm clearfix\">
    <!-- Copyright Text Starts -->
      <div class=\"pull-left-lg pull-left-md\">
        <p class=\"copyright-text mb-lg-0 mb-md-0\">";
        // line 114
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo ". Theme By <a href=\"https://www.patreon.com/settysantu\" target=\"_blank\">Santosh Setty</a></p>
      </div>
    <!-- Copyright Text Ends -->
    <!-- Payment Gateway Starts -->
      <div class=\"pull-right-lg pull-right-md\">
        <ul class=\"list-unstyled list-inline mb-0 text-right-lg text-right-md animation\">
          <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
          <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
          <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
          <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
        </ul>
      </div>
    <!-- Payment Gateway Ends -->
    </div>
  <!-- Nested Container Ends -->
  </div>
<!-- Copyright Ends -->
";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 132
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "mintleaf/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 134,  221 => 132,  217 => 131,  197 => 114,  145 => 67,  139 => 66,  133 => 65,  124 => 59,  105 => 45,  99 => 44,  93 => 43,  87 => 42,  78 => 36,  71 => 31,  60 => 22,  49 => 20,  45 => 19,  36 => 13,  29 => 8,  27 => 7,  19 => 1,);
    }
}
/* <!-- Footer Starts -->*/
/*   <footer class="main-footer animation">*/
/*   <!-- Nested Container Starts -->*/
/*     <div class="container">*/
/*     <!-- Nested Row Starts -->*/
/*       <div class="row">*/
/*       {% if informations %}*/
/*       <!-- Information Column Starts -->*/
/*         <div class="col-md-3 col-sm-4 col-xs-12">*/
/*         <!-- Foot Col Starts -->*/
/*           <div class="foot-col">*/
/*           <!-- Foot Col Head Starts -->*/
/*             <h4 class="foot-col-head text-color-brand font-weight-medium">{{ text_information }}</h4>*/
/*           <!-- Foot Col Head Ends -->*/
/*           <!-- Foot Col Body Starts -->*/
/*             <div class="foot-col-body">*/
/*             <!-- Footer Links Starts -->*/
/*               <ul class="list-unstyled footer-links mb-xs-0 mb-sm-0 font-weight-medium">*/
/*               {% for information in informations %}*/
/*                 <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*               {% endfor %}*/
/*               </ul>*/
/*             <!-- Footer Links Ends -->*/
/*             </div>*/
/*           <!-- Foot Col Body Ends -->*/
/*           </div>*/
/*         <!-- Foot Col Ends -->*/
/*         </div>*/
/*       <!-- Information Column Ends -->*/
/*       {% endif %}*/
/*       <!-- My Account Column Starts -->*/
/*         <div class="col-md-3 col-sm-4 col-xs-12">*/
/*         <!-- Foot Col Starts -->*/
/*           <div class="foot-col">*/
/*           <!-- Foot Col Head Starts -->*/
/*             <h4 class="foot-col-head text-color-brand font-weight-medium">{{ text_account }}</h4>*/
/*           <!-- Foot Col Head Ends -->*/
/*           <!-- Foot Col Body Starts -->*/
/*             <div class="foot-col-body">*/
/*             <!-- Footer Links Starts -->*/
/*               <ul class="list-unstyled footer-links mb-xs-0 mb-sm-0 font-weight-medium">*/
/*                 <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*                 <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*                 <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*                 <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*               </ul>*/
/*             <!-- Footer Links Ends -->*/
/*             </div>*/
/*           <!-- Foot Col Body Ends -->*/
/*           </div>*/
/*         <!-- Foot Col Ends -->*/
/*         </div>*/
/*       <!-- My Account Column Ends -->*/
/*       <!-- Customer Services Column Starts -->*/
/*         <div class="col-md-3 col-sm-4 col-xs-12">*/
/*         <!-- Foot Col Starts -->*/
/*           <div class="foot-col">*/
/*           <!-- Foot Col Head Starts -->*/
/*             <h4 class="foot-col-head text-color-brand font-weight-medium">{{ text_service }}</h4>*/
/*           <!-- Foot Col Head Ends -->*/
/*           <!-- Foot Col Body Starts -->*/
/*             <div class="foot-col-body">*/
/*             <!-- Footer Links Starts -->*/
/*               <ul class="list-unstyled footer-links mb-xs-0 mb-sm-0 font-weight-medium">*/
/*                 <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*                 <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*                 <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*               </ul>*/
/*             <!-- Footer Links Ends -->*/
/*             </div>*/
/*           <!-- Foot Col Body Ends -->*/
/*           </div>*/
/*         <!-- Foot Col Ends -->*/
/*         </div>*/
/*       <!-- Customer Services Column Ends -->*/
/*       <!-- Divider For Small Screens Starts -->*/
/*         <div class="col-xs-12 hidden-xs hidden-md hidden-lg"><hr class="hr-1"></div>*/
/*       <!-- Divider For Small Screens Ends -->*/
/*       <!-- Contact Us Column Starts -->*/
/*         <div class="col-md-3 col-xs-12">*/
/*         <!-- Foot Col Starts -->*/
/*           <div class="foot-col last">*/
/*           <!-- Foot Col Head Starts -->*/
/*             <h4 class="foot-col-head text-color-brand font-weight-medium">Contact Us</h4>*/
/*           <!-- Foot Col Head Ends -->*/
/*           <!-- Foot Col Body Starts -->*/
/*             <div class="foot-col-body">*/
/*             <!-- Footer Contact Links Starts -->*/
/*               <ul class="list-unstyled footer-contact-links mb-xs-0 mb-sm-0 font-weight-medium">*/
/*                 <li><i class="fa fa-shopping-cart"></i> Mint Leaf Shopping Cart</li>*/
/*                 <li><i class="fa fa-map-marker"></i> My Company, Road No.</li>*/
/*                 <li><i class="fa fa-envelope-o"></i> E-mail : <a href="mailto:E-mail : info@yourdomain.com">info@yourdomain.com</a></li>*/
/*                 <li><i class="fa fa-phone"></i> Phone: <a href="tel:0012345678900">001 234 567 8900</a></li>*/
/*               </ul>*/
/*             <!-- Footer Contact Links Ends -->*/
/*             </div>*/
/*           <!-- Foot Col Body Ends -->*/
/*           </div>*/
/*         <!-- Foot Col Ends -->*/
/*         </div>*/
/*       <!-- Contact Us Column Ends -->*/
/*       </div>*/
/*     <!-- Nested Row Ends -->*/
/*     </div>*/
/*   <!-- Nested Container Ends -->*/
/*   </footer>*/
/* <!-- Footer Ends -->*/
/* <!-- Copyright Starts -->*/
/*   <div class="copyright">*/
/*   <!-- Nested Container Starts -->*/
/*     <div class="container text-center-xs text-center-sm clearfix">*/
/*     <!-- Copyright Text Starts -->*/
/*       <div class="pull-left-lg pull-left-md">*/
/*         <p class="copyright-text mb-lg-0 mb-md-0">{{ powered }}. Theme By <a href="https://www.patreon.com/settysantu" target="_blank">Santosh Setty</a></p>*/
/*       </div>*/
/*     <!-- Copyright Text Ends -->*/
/*     <!-- Payment Gateway Starts -->*/
/*       <div class="pull-right-lg pull-right-md">*/
/*         <ul class="list-unstyled list-inline mb-0 text-right-lg text-right-md animation">*/
/*           <li><a href="#"><i class="fa fa-facebook"></i></a></li>*/
/*           <li><a href="#"><i class="fa fa-twitter"></i></a></li>*/
/*           <li><a href="#"><i class="fa fa-instagram"></i></a></li>*/
/*           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>*/
/*         </ul>*/
/*       </div>*/
/*     <!-- Payment Gateway Ends -->*/
/*     </div>*/
/*   <!-- Nested Container Ends -->*/
/*   </div>*/
/* <!-- Copyright Ends -->*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //-->*/
/* </body></html>*/
