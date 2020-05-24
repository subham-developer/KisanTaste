<?php

/* mintleaf/template/common/header.twig */
class __TwigTemplate_738a5f07ef6862e65b576df785d6f75b09a5c7347e3622fc97e83623fb84761d extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>

  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 13
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
  <base href=\"";
        // line 14
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
  ";
        // line 15
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 16
            echo "  <meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
  ";
        }
        // line 18
        echo "  ";
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 19
            echo "  <meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
  ";
        }
        // line 21
        echo "
  <!-- jQuery -->
  <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>

  <!-- Bootstrap -->
  <link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
  <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>

  <!-- Font Awesome -->
  <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />

  <!-- Google Web Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700\" rel=\"stylesheet\"> 

  <!-- CSS  -->
  <link href=\"catalog/view/theme/mintleaf/stylesheet/stylesheet.css\" rel=\"stylesheet\">
  <link href=\"catalog/view/theme/mintleaf/stylesheet/stylesheet-responsive.css\" rel=\"stylesheet\">
  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 39
            echo "  <link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 42
            echo "  <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
  <!-- JavaScript  -->
  <script src=\"catalog/view/theme/mintleaf/js/custom.js\" type=\"text/javascript\"></script>
  <script src=\"catalog/view/theme/mintleaf/js/common.js\" type=\"text/javascript\"></script>
  ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 49
            echo "  <link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "  
  ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 53
            echo "  ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
</head>
<body>
<!-- Main Header Starts -->
  <header class=\"main-header\">
  <!-- Nested Container Starts -->
    <div class=\"container\">
    <!-- Top Bar Starts -->
      <div class=\"topbar clearfix text-center-xs font-weight-medium\">
      <!-- Welcome Text Starts -->
        <div class=\"pull-left-lg pull-left-md pull-left-sm\">
          <p class=\"mb-lg-0 mb-md-0\">Welcome to Mint Leaf Theme</p>
        </div>
      <!-- Welcome Text Ends -->
      <!-- Top Links Starts -->
        <div class=\"pull-right-lg pull-right-md pull-right-sm\">
          <ul class=\"list-unstyled list-inline top-links mb-0 text-right-lg text-right-md text-right-sm\">
            <li class=\"dropdown\"><a href=\"";
        // line 72
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle animation\" data-toggle=\"dropdown\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo " <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu dropdown-menu-right rounded-0\">
                ";
        // line 74
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 75
            echo "                  <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
                  <li><a href=\"";
            // line 76
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
                  <li><a href=\"";
            // line 77
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
                  <li><a href=\"";
            // line 78
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
                  <li><a href=\"";
            // line 79
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
                ";
        } else {
            // line 81
            echo "                  <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
                  <li><a href=\"";
            // line 82
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
                ";
        }
        // line 84
        echo "              </ul>
            </li>
            <li class=\"animation\"><a href=\"";
        // line 86
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
            <li class=\"animation\"><a href=\"";
        // line 87
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" title=\"";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "\">";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "</a></li>
            <li class=\"animation\"><a href=\"";
        // line 88
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</a></li>
          </ul>
        </div>
      <!-- Top Links Ends -->
      </div>
    <!-- Top Bar Ends -->
    <!-- Main Menu Starts -->
      ";
        // line 95
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
    <!-- Main Menu Ends -->
    </div>
  <!-- Nested Container Ends -->
  </header>
<!-- Main Header Ends -->
";
    }

    public function getTemplateName()
    {
        return "mintleaf/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 95,  256 => 88,  248 => 87,  240 => 86,  236 => 84,  229 => 82,  222 => 81,  215 => 79,  209 => 78,  203 => 77,  197 => 76,  190 => 75,  188 => 74,  179 => 72,  160 => 55,  151 => 53,  147 => 52,  144 => 51,  133 => 49,  129 => 48,  123 => 44,  114 => 42,  109 => 41,  96 => 39,  92 => 38,  73 => 21,  67 => 19,  64 => 18,  58 => 16,  56 => 15,  52 => 14,  48 => 13,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* */
/*   <meta charset="UTF-8" />*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <title>{{ title }}</title>*/
/*   <base href="{{ base }}" />*/
/*   {% if description %}*/
/*   <meta name="description" content="{{ description }}" />*/
/*   {% endif %}*/
/*   {% if keywords %}*/
/*   <meta name="keywords" content="{{ keywords }}" />*/
/*   {% endif %}*/
/* */
/*   <!-- jQuery -->*/
/*   <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* */
/*   <!-- Bootstrap -->*/
/*   <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/*   <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* */
/*   <!-- Font Awesome -->*/
/*   <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* */
/*   <!-- Google Web Fonts -->*/
/*   <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet"> */
/* */
/*   <!-- CSS  -->*/
/*   <link href="catalog/view/theme/mintleaf/stylesheet/stylesheet.css" rel="stylesheet">*/
/*   <link href="catalog/view/theme/mintleaf/stylesheet/stylesheet-responsive.css" rel="stylesheet">*/
/*   {% for style in styles %}*/
/*   <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/*   {% endfor %}*/
/*   {% for script in scripts %}*/
/*   <script src="{{ script }}" type="text/javascript"></script>*/
/*   {% endfor %}*/
/* */
/*   <!-- JavaScript  -->*/
/*   <script src="catalog/view/theme/mintleaf/js/custom.js" type="text/javascript"></script>*/
/*   <script src="catalog/view/theme/mintleaf/js/common.js" type="text/javascript"></script>*/
/*   {% for link in links %}*/
/*   <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/*   {% endfor %}*/
/*   */
/*   {% for analytic in analytics %}*/
/*   {{ analytic }}*/
/*   {% endfor %}*/
/* */
/* </head>*/
/* <body>*/
/* <!-- Main Header Starts -->*/
/*   <header class="main-header">*/
/*   <!-- Nested Container Starts -->*/
/*     <div class="container">*/
/*     <!-- Top Bar Starts -->*/
/*       <div class="topbar clearfix text-center-xs font-weight-medium">*/
/*       <!-- Welcome Text Starts -->*/
/*         <div class="pull-left-lg pull-left-md pull-left-sm">*/
/*           <p class="mb-lg-0 mb-md-0">Welcome to Mint Leaf Theme</p>*/
/*         </div>*/
/*       <!-- Welcome Text Ends -->*/
/*       <!-- Top Links Starts -->*/
/*         <div class="pull-right-lg pull-right-md pull-right-sm">*/
/*           <ul class="list-unstyled list-inline top-links mb-0 text-right-lg text-right-md text-right-sm">*/
/*             <li class="dropdown"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle animation" data-toggle="dropdown">{{ text_account }} <span class="caret"></span></a>*/
/*               <ul class="dropdown-menu dropdown-menu-right rounded-0">*/
/*                 {% if logged %}*/
/*                   <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*                   <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*                   <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*                   <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*                   <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*                 {% else %}*/
/*                   <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*                   <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*                 {% endif %}*/
/*               </ul>*/
/*             </li>*/
/*             <li class="animation"><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}">{{ text_wishlist }}</a></li>*/
/*             <li class="animation"><a href="{{ shopping_cart }}" title="{{ text_shopping_cart }}">{{ text_shopping_cart }}</a></li>*/
/*             <li class="animation"><a href="{{ checkout }}" title="{{ text_checkout }}">{{ text_checkout }}</a></li>*/
/*           </ul>*/
/*         </div>*/
/*       <!-- Top Links Ends -->*/
/*       </div>*/
/*     <!-- Top Bar Ends -->*/
/*     <!-- Main Menu Starts -->*/
/*       {{ menu }}*/
/*     <!-- Main Menu Ends -->*/
/*     </div>*/
/*   <!-- Nested Container Ends -->*/
/*   </header>*/
/* <!-- Main Header Ends -->*/
/* */
