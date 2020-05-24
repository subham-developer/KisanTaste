<?php

/* theme--50047/template/common/header.twig */
class __TwigTemplate_bd318bc4989cb1b9339a4e0801b6da6ac64d8cd5083d50f30b1390af11aff66c extends Twig_Template
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
<html dir=\"";
        // line 2
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<head>
<meta charset=\"UTF-8\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<title>";
        // line 7
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 8
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\"/>
";
        // line 9
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 10
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\"/>
";
        }
        // line 12
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 13
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\"/>
";
        }
        // line 15
        echo "<script type=\"text/javascript\" src=\"catalog/view/theme/theme--50047/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/theme/theme--50047/javascript/jquery-ui-1.10.4.custom.min.js\"></script>
<link href=\"catalog/view/theme/theme--50047/stylesheet/bootstrap.css\" rel=\"stylesheet\" media=\"screen\"/>
<link href=\"catalog/view/theme/theme--50047/stylesheet/style_opencart.css\" rel=\"stylesheet\" media=\"screen\"/>
<script type=\"text/javascript\" src=\"catalog/view/theme/theme--50047/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"catalog/view/theme/theme--50047/stylesheet/styles.css\" rel=\"stylesheet\"/>
<script type=\"text/javascript\" src=\"catalog/view/theme/theme--50047/javascript/customjs.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/theme/theme--50047/javascript/html5shiv.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/theme/theme--50047/javascript/tt_slideshow.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/theme/theme--50047/javascript/totop.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/theme/theme--50047/javascript/tt_animation.js\"></script>
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 27
            echo "<link href=\"";
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 30
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "<script type=\"text/javascript\" src=\"catalog/view/theme/theme--50047/javascript/common.js\"></script>
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 35
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 38
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</head>
";
        // line 41
        if (twig_test_empty((isset($context["route"]) ? $context["route"] : null))) {
            // line 42
            $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . "ttr_ecommerce");
        }
        // line 44
        if (( !twig_test_empty((isset($context["route"]) ? $context["route"] : null)) && ((isset($context["route"]) ? $context["route"] : null) == "product/product"))) {
            // line 45
            $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . "ttr_ecommerce productdescription");
        } else {
            // line 47
            if (((((isset($context["route"]) ? $context["route"] : null) == "checkout/cart") || ((isset($context["route"]) ? $context["route"] : null) == "checkout/checkout")) || ((isset($context["route"]) ? $context["route"] : null) == "checkout/success"))) {
                // line 48
                $context["class"] = "ttr_ecommerce productcheckout";
            }
        }
        // line 51
        echo "<body class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
<div class=\"totopshow\">
<a class=\"back-to-top\" href=\"#\" style=\"display: inline;\"><img src=\"catalog/view/theme/theme--50047/image/gototop.png\" alt=\"Back to Top\"></img></a>
</div>
<!--header_above-->
";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["abv"]) ? $context["abv"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 57
            echo "<div class=\"ttr_banner_header\">
<div class=\"ttr_banner_header_inner_above_widget_container\">
";
            // line 59
            list($context["flag"], $context["break"]) =             array(0, false);
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("header_pos_above" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 61
                    if (($this->getAttribute($context["value"], 1, array()) == true)) {
                        // line 62
                        $context["flag"] = array(0 => 1);
                        // line 63
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["flag"]) ? $context["flag"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                                // line 64
                                echo "<div class=\"ttr_banner_header_inner_above";
                                echo $context["i"];
                                echo "\">
";
                                // line 65
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
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("header_pos_above" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 70
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " 
 ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            if ((isset($context["break"]) ? $context["break"] : null)) {
                // line 73
                echo "</div>
";
            }
            // line 75
            echo "</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "<!--header_above_end-->
<header id=\"ttr_header\">
<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>
<div id=\"ttr_header_inner\">
<div class=\"ttr_header_element_alignment container\">
<div class=\"ttr_header_links nav \" id=\"top-links\">
<ul class=\"list-inline links\">
<li class=\"first\">
<a class=\"ttr_phone_link\" href=\"";
        // line 87
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\"><span class=\"hidden-xs hidden-sm\">";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</span></a></li>
 <li class=\"dropdown\">
<a class=\"ttr_userlink_link\" href=\"";
        // line 89
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"hidden-xs hidden-sm\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span><span class=\"caret dropdown-toggle\"></span></a>
<ul class=\"dropdown-menu dropdown-menu-right\">
";
        // line 91
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 92
            echo "<li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
<li><a href=\"";
            // line 93
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
<li><a href=\"";
            // line 94
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
<li><a href=\"";
            // line 95
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
<li><a href=\"";
            // line 96
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
";
        } else {
            // line 98
            echo "<li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
<li><a href=\"";
            // line 99
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
";
        }
        // line 101
        echo "</ul>
</li>
<li><a class=\"ttr_wishlist_link\" href=\"";
        // line 103
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\"><span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</span></a></li>
<li><a class=\"ttr_cartlink_link\" href=\"";
        // line 104
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" title=\"";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "\"><span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "</span></a></li>
<li class=\"last\">
<a class=\"ttr_checkoutlink_link\" href=\"";
        // line 106
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\"><span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</span></a></li>
</ul>
</div>
<div class=\"ttr_header_cart \">
";
        // line 110
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
<div class=\"form-search input-group\">
";
        // line 112
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
 </div>
<div class=\"ttr_images_container\">
<div class=\"ttr_header_logo\">
";
        // line 116
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 117
            echo "<img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"\" />
";
        } else {
            // line 119
            echo "<h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
";
        }
        // line 121
        echo "</div>
</div>
</div>
<nav id=\"top\">
<div class=\"ttr_currency_container \">
";
        // line 126
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
";
        // line 127
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
</div>
</nav>
<div class=\"ttr_images_container\">
</div>
";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["header_pos"]) ? $context["header_pos"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if ( !($context["key"] % 2)) {
                // line 133
                echo $this->getAttribute($context["value"], 0, array());
                echo " 
 ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "</div>
</header>
<!--header_below-->
";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["blw"]) ? $context["blw"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 139
            echo "<div class=\"ttr_banner_header\">
<div class=\"ttr_banner_header_inner_below_widget_container\">
";
            // line 141
            list($context["flag"], $context["break"]) =             array(0, false);
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("header_pos_below" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 143
                    if (($this->getAttribute($context["value"], 1, array()) == true)) {
                        // line 144
                        $context["flag"] = array(0 => 1);
                        // line 145
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["flag"]) ? $context["flag"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                                // line 146
                                echo "<div class=\"ttr_banner_header_inner_below";
                                echo $context["i"];
                                echo "\">
";
                                // line 147
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
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("header_pos_below" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 152
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " 
 ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            if ((isset($context["break"]) ? $context["break"] : null)) {
                // line 155
                echo "</div>
";
            }
            // line 157
            echo "</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "<!--header_below_end-->
<!--menu_above-->
";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["mabv"]) ? $context["mabv"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 164
            echo "<div class=\"ttr_banner_menu\">
<div class=\"ttr_banner_menu_inner_above_widget_container\">
";
            // line 166
            list($context["flag"], $context["break"]) =             array(0, false);
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("menu_pos_above" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 168
                    if (($this->getAttribute($context["value"], 1, array()) == true)) {
                        // line 169
                        $context["flag"] = array(0 => 1);
                        // line 170
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["flag"]) ? $context["flag"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                                // line 171
                                echo "<div class=\"ttr_banner_menu_inner_above";
                                echo $context["i"];
                                echo "\">
";
                                // line 172
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
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("menu_pos_above" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 177
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " 
 ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            if ((isset($context["break"]) ? $context["break"] : null)) {
                // line 180
                echo "</div>
";
            }
            // line 182
            echo "</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "<!--menu_above_end-->
<div id=\"ttr_menu\"> 
<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>
<nav class=\"navbar-default navbar\">
   <div id=\"ttr_menu_inner_in\">
<div class=\"ttr_menu_element_alignment container\">
</div>
<div class=\"ttr_images_container\">
</div>
<?php if (\$categories) { ?>
<div id=\"navigationmenu\">
<div class=\"navbar-header\">
<button id=\"nav-expander\" data-target=\".navbar-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle\" type=\"button\">
<span class=\"ttr_menu_toggle_button\">
<span class=\"sr-only\">
</span>
<span class=\"icon-bar\">
</span>
<span class=\"icon-bar\">
</span>
<span class=\"icon-bar\">
</span>
</span>
<span class=\"ttr_menu_button_text\">
Menu
</span>
</button>
</div>
<div class=\"menu-center collapse navbar-collapse\">
";
        // line 215
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
</div>
</div>
<?php } ?>
";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu_pos"]) ? $context["menu_pos"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if ( !($context["key"] % 2)) {
                // line 220
                echo $this->getAttribute($context["value"], 0, array());
                echo "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "</div>
</nav>
</div>
<!--menu_below-->
";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["mblw"]) ? $context["mblw"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 227
            echo "<div class=\"ttr_banner_menu\">
<?php echo \${'menu_pos_below'.\$j}[\$i][0];
 } if (\$flag == 1){ ?>
<div class=\"ttr_banner_menu_inner_below_widget_container\">
";
            // line 231
            list($context["flag"], $context["break"]) =             array(0, false);
            // line 232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("menu_pos_below" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 233
                    if (($this->getAttribute($context["value"], 1, array()) == true)) {
                        // line 234
                        $context["flag"] = array(0 => 1);
                        // line 235
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["flag"]) ? $context["flag"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                                // line 236
                                echo "<div class=\"ttr_banner_menu_inner_below";
                                echo $context["i"];
                                echo "\">
";
                                // line 237
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
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("menu_pos_below" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 242
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " 
 ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            if ((isset($context["break"]) ? $context["break"] : null)) {
                // line 245
                echo "</div>
";
            }
            // line 247
            echo "</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "<!--menu_below_end-->
<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>
<div id=\"ttr_page\" class=\"container\">
";
    }

    public function getTemplateName()
    {
        return "theme--50047/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  682 => 251,  673 => 247,  669 => 245,  667 => 244,  658 => 242,  653 => 241,  640 => 237,  635 => 236,  630 => 235,  628 => 234,  626 => 233,  621 => 232,  619 => 231,  613 => 227,  609 => 226,  603 => 222,  594 => 220,  589 => 219,  582 => 215,  551 => 186,  542 => 182,  538 => 180,  536 => 179,  527 => 177,  522 => 176,  509 => 172,  504 => 171,  499 => 170,  497 => 169,  495 => 168,  490 => 167,  488 => 166,  484 => 164,  480 => 163,  476 => 161,  467 => 157,  463 => 155,  461 => 154,  452 => 152,  447 => 151,  434 => 147,  429 => 146,  424 => 145,  422 => 144,  420 => 143,  415 => 142,  413 => 141,  409 => 139,  405 => 138,  400 => 135,  391 => 133,  386 => 132,  378 => 127,  374 => 126,  367 => 121,  359 => 119,  349 => 117,  347 => 116,  340 => 112,  335 => 110,  324 => 106,  315 => 104,  307 => 103,  303 => 101,  296 => 99,  289 => 98,  282 => 96,  276 => 95,  270 => 94,  264 => 93,  257 => 92,  255 => 91,  246 => 89,  239 => 87,  229 => 79,  220 => 75,  216 => 73,  214 => 72,  205 => 70,  200 => 69,  187 => 65,  182 => 64,  177 => 63,  175 => 62,  173 => 61,  168 => 60,  166 => 59,  162 => 57,  158 => 56,  149 => 51,  145 => 48,  143 => 47,  140 => 45,  138 => 44,  135 => 42,  133 => 41,  130 => 40,  122 => 38,  118 => 37,  107 => 35,  103 => 34,  100 => 33,  90 => 30,  86 => 29,  73 => 27,  69 => 26,  56 => 15,  50 => 13,  48 => 12,  42 => 10,  40 => 9,  36 => 8,  32 => 7,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <head>*/
/* <meta charset="UTF-8"/>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}"/>*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}"/>*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}"/>*/
/* {% endif %}*/
/* <script type="text/javascript" src="catalog/view/theme/theme--50047/javascript/jquery/jquery-2.1.1.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/theme/theme--50047/javascript/jquery-ui-1.10.4.custom.min.js"></script>*/
/* <link href="catalog/view/theme/theme--50047/stylesheet/bootstrap.css" rel="stylesheet" media="screen"/>*/
/* <link href="catalog/view/theme/theme--50047/stylesheet/style_opencart.css" rel="stylesheet" media="screen"/>*/
/* <script type="text/javascript" src="catalog/view/theme/theme--50047/javascript/bootstrap/js/bootstrap.min.js"></script>*/
/* <link href="catalog/view/theme/theme--50047/stylesheet/styles.css" rel="stylesheet"/>*/
/* <script type="text/javascript" src="catalog/view/theme/theme--50047/javascript/customjs.js"></script>*/
/* <script type="text/javascript" src="catalog/view/theme/theme--50047/javascript/html5shiv.js"></script>*/
/* <script type="text/javascript" src="catalog/view/theme/theme--50047/javascript/tt_slideshow.js"></script>*/
/* <script type="text/javascript" src="catalog/view/theme/theme--50047/javascript/totop.js"></script>*/
/* <script type="text/javascript" src="catalog/view/theme/theme--50047/javascript/tt_animation.js"></script>*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/javascript/font-awesome/css/font-awesome.min.css"/>*/
/* {% endfor %}*/
/* <script type="text/javascript" src="catalog/view/theme/theme--50047/javascript/common.js"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* </head>*/
/* {% if route is empty %}*/
/* {% set class = class ~ 'ttr_ecommerce' %}*/
/* {% endif %}*/
/* {% if route is not empty and route == 'product/product' %}*/
/* {% set class = class ~ 'ttr_ecommerce productdescription' %}*/
/* {% else %}*/
/* {% if route == 'checkout/cart' or route == 'checkout/checkout' or route == 'checkout/success' %}*/
/* {% set class = 'ttr_ecommerce productcheckout' %}*/
/* {% endif %}*/
/* {% endif %}*/
/* <body class="{{ class }}">*/
/* <div class="totopshow">*/
/* <a class="back-to-top" href="#" style="display: inline;"><img src="catalog/view/theme/theme--50047/image/gototop.png" alt="Back to Top"></img></a>*/
/* </div>*/
/* <!--header_above-->*/
/* {% for i in 0..abv-1 %}*/
/* <div class="ttr_banner_header">*/
/* <div class="ttr_banner_header_inner_above_widget_container">*/
/* {% set flag, break = 0, false %}*/
/* {% for key, value in  attribute(_context, 'header_pos_above' ~ i) if not key % 2 %}*/
/* {% if value.1 == true %}*/
/* {% set flag = [1] %}*/
/* {% for f in flag if not break %}*/
/* <div class="ttr_banner_header_inner_above{{ i }}">*/
/* {% set break = true %}*/
/* {% endfor %}*/
/* {% endif %}*/
/* {% endfor %}*/
/* {% for key, value in attribute(_context, 'header_pos_above' ~ i) if not key % 2 %}*/
/* {{ value.0 }} */
/*  {% endfor %}*/
/* {% if break %}*/
/* </div>*/
/* {% endif %}*/
/* </div>*/
/* </div>*/
/* <div style="clear: both;"></div>*/
/* {% endfor %}*/
/* <!--header_above_end-->*/
/* <header id="ttr_header">*/
/* <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>*/
/* <div id="ttr_header_inner">*/
/* <div class="ttr_header_element_alignment container">*/
/* <div class="ttr_header_links nav " id="top-links">*/
/* <ul class="list-inline links">*/
/* <li class="first">*/
/* <a class="ttr_phone_link" href="{{ contact }}"><span class="hidden-xs hidden-sm">{{ telephone }}</span></a></li>*/
/*  <li class="dropdown">*/
/* <a class="ttr_userlink_link" href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><span class="hidden-xs hidden-sm">{{ text_account }}</span><span class="caret dropdown-toggle"></span></a>*/
/* <ul class="dropdown-menu dropdown-menu-right">*/
/* {% if logged %}*/
/* <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/* <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/* <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/* <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/* <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/* {% else %}*/
/* <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/* <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/* {% endif %}*/
/* </ul>*/
/* </li>*/
/* <li><a class="ttr_wishlist_link" href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}"><span class="hidden-xs hidden-sm hidden-md">{{ text_wishlist }}</span></a></li>*/
/* <li><a class="ttr_cartlink_link" href="{{ shopping_cart }}" title="{{ text_shopping_cart }}"><span class="hidden-xs hidden-sm hidden-md">{{ text_shopping_cart }}</span></a></li>*/
/* <li class="last">*/
/* <a class="ttr_checkoutlink_link" href="{{ checkout }}" title="{{ text_checkout }}"><span class="hidden-xs hidden-sm hidden-md">{{ text_checkout }}</span></a></li>*/
/* </ul>*/
/* </div>*/
/* <div class="ttr_header_cart ">*/
/* {{ cart }}</div>*/
/* <div class="form-search input-group">*/
/* {{ search }}*/
/*  </div>*/
/* <div class="ttr_images_container">*/
/* <div class="ttr_header_logo">*/
/* {% if logo %}*/
/* <img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="" />*/
/* {% else %}*/
/* <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/* {% endif %}*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <nav id="top">*/
/* <div class="ttr_currency_container ">*/
/* {{ currency }}*/
/* {{ language }}*/
/* </div>*/
/* </nav>*/
/* <div class="ttr_images_container">*/
/* </div>*/
/* {% for key, value in header_pos if not key % 2 %}*/
/* {{ value.0 }} */
/*  {% endfor %}*/
/* </div>*/
/* </header>*/
/* <!--header_below-->*/
/* {% for i in 0..blw-1 %}*/
/* <div class="ttr_banner_header">*/
/* <div class="ttr_banner_header_inner_below_widget_container">*/
/* {% set flag, break = 0, false %}*/
/* {% for key, value in  attribute(_context, 'header_pos_below' ~ i) if not key % 2 %}*/
/* {% if value.1 == true %}*/
/* {% set flag = [1] %}*/
/* {% for f in flag if not break %}*/
/* <div class="ttr_banner_header_inner_below{{ i }}">*/
/* {% set break = true %}*/
/* {% endfor %}*/
/* {% endif %}*/
/* {% endfor %}*/
/* {% for key, value in attribute(_context, 'header_pos_below' ~ i) if not key % 2 %}*/
/* {{ value.0 }} */
/*  {% endfor %}*/
/* {% if break %}*/
/* </div>*/
/* {% endif %}*/
/* </div>*/
/* </div>*/
/* <div style="clear: both;"></div>*/
/* {% endfor %}*/
/* <!--header_below_end-->*/
/* <!--menu_above-->*/
/* {% for i in 0..mabv-1 %}*/
/* <div class="ttr_banner_menu">*/
/* <div class="ttr_banner_menu_inner_above_widget_container">*/
/* {% set flag, break = 0, false %}*/
/* {% for key, value in  attribute(_context, 'menu_pos_above' ~ i) if not key % 2 %}*/
/* {% if value.1 == true %}*/
/* {% set flag = [1] %}*/
/* {% for f in flag if not break %}*/
/* <div class="ttr_banner_menu_inner_above{{ i }}">*/
/* {% set break = true %}*/
/* {% endfor %}*/
/* {% endif %}*/
/* {% endfor %}*/
/* {% for key, value in attribute(_context, 'menu_pos_above' ~ i) if not key % 2 %}*/
/* {{ value.0 }} */
/*  {% endfor %}*/
/* {% if break %}*/
/* </div>*/
/* {% endif %}*/
/* </div>*/
/* </div>*/
/* <div style="clear: both;"></div>*/
/* {% endfor %}*/
/* <!--menu_above_end-->*/
/* <div id="ttr_menu"> */
/* <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>*/
/* <nav class="navbar-default navbar">*/
/*    <div id="ttr_menu_inner_in">*/
/* <div class="ttr_menu_element_alignment container">*/
/* </div>*/
/* <div class="ttr_images_container">*/
/* </div>*/
/* <?php if ($categories) { ?>*/
/* <div id="navigationmenu">*/
/* <div class="navbar-header">*/
/* <button id="nav-expander" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">*/
/* <span class="ttr_menu_toggle_button">*/
/* <span class="sr-only">*/
/* </span>*/
/* <span class="icon-bar">*/
/* </span>*/
/* <span class="icon-bar">*/
/* </span>*/
/* <span class="icon-bar">*/
/* </span>*/
/* </span>*/
/* <span class="ttr_menu_button_text">*/
/* Menu*/
/* </span>*/
/* </button>*/
/* </div>*/
/* <div class="menu-center collapse navbar-collapse">*/
/* {{ menu }}*/
/* </div>*/
/* </div>*/
/* <?php } ?>*/
/* {% for key, value in menu_pos if not key % 2 %}*/
/* {{ value.0 }}*/
/* {% endfor %}*/
/* </div>*/
/* </nav>*/
/* </div>*/
/* <!--menu_below-->*/
/* {% for i in 0..mblw-1 %}*/
/* <div class="ttr_banner_menu">*/
/* <?php echo ${'menu_pos_below'.$j}[$i][0];*/
/*  } if ($flag == 1){ ?>*/
/* <div class="ttr_banner_menu_inner_below_widget_container">*/
/* {% set flag, break = 0, false %}*/
/* {% for key, value in  attribute(_context, 'menu_pos_below' ~ i) if not key % 2 %}*/
/* {% if value.1 == true %}*/
/* {% set flag = [1] %}*/
/* {% for f in flag if not break %}*/
/* <div class="ttr_banner_menu_inner_below{{ i }}">*/
/* {% set break = true %}*/
/* {% endfor %}*/
/* {% endif %}*/
/* {% endfor %}*/
/* {% for key, value in attribute(_context, 'menu_pos_below' ~ i) if not key % 2 %}*/
/* {{ value.0 }} */
/*  {% endfor %}*/
/* {% if break %}*/
/* </div>*/
/* {% endif %}*/
/* </div>*/
/* </div>*/
/* <div style="clear: both;"></div>*/
/* {% endfor %}*/
/* <!--menu_below_end-->*/
/* <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>*/
/* <div id="ttr_page" class="container">*/
/* */
