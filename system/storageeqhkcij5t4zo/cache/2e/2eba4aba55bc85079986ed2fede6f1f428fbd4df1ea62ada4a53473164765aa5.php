<?php

/* theme--50047/template/common/footer.twig */
class __TwigTemplate_609d418a18b59032a5d4f9d11b1794fa6a838a75aec8bab02fb98d191fecb130 extends Twig_Template
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
        echo "</div>
<!--footer_above-->
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["fabv"]) ? $context["fabv"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "<div class=\"footer-widget-area\" >
<div class=\"ttr_footer-widget-area_inner_above_widget_container\">
";
            // line 6
            list($context["flag"], $context["break"]) =             array(0, false);
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("footer_pos_above" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 8
                    if (($this->getAttribute($context["value"], 1, array()) == true)) {
                        // line 9
                        $context["flag"] = array(0 => 1);
                        // line 10
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["flag"]) ? $context["flag"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                                // line 11
                                echo "<div class=\"ttr_footer-widget-area_inner_above";
                                echo $context["i"];
                                echo "\">
";
                                // line 12
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
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("footer_pos_above" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 17
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " 
 ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            if ((isset($context["break"]) ? $context["break"] : null)) {
                // line 20
                echo "</div>
";
            }
            // line 22
            echo "</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "<footer id=\"ttr_footer\" >
<div id=\"ttr_footer_inner\">
<div>
";
        // line 29
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 30
            echo " <div class=\"col-md-3\">
<h5>";
            // line 31
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h5>
<ul class=\"links\">
";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 34
                echo "<li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "</ul></div> ";
        }
        // line 37
        echo " <div class=\"col-md-3\">
<h5>";
        // line 38
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h5>
<ul class=\"links\">
<li><a href=\"";
        // line 40
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
<li><a href=\"";
        // line 41
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
<li><a href=\"";
        // line 42
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
</ul>
</div>
 <div class=\"col-md-3\">
<h5>";
        // line 46
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h5>
<ul class=\"links\">
<li><a href=\"";
        // line 48
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\"><?php echo \$text_manufacturer; ?></a></li>
<li><a href=\"";
        // line 49
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
<li><a href=\"";
        // line 50
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
<li><a href=\"";
        // line 51
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
</ul>
</div>
 <div class=\"col-md-3\">
<h5>";
        // line 55
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h5>
<ul class=\"links\">
<li><a href=\"";
        // line 57
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
<li><a href=\"";
        // line 58
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
<li><a href=\"";
        // line 59
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
<li><a href=\"";
        // line 60
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
</ul>
</div>
 <div class=\" visible-sm-block visible-md-block visible-lg-block visible-xs-block d-xl-block d-lg-block d-sm-block d-md-block d-block \" style=\"clear:both;\"></div>
</div>
 <div class=\"ttr_footer_bottom_footer\">
 <div class=\"ttr_footer_bottom_footer_inner\">
<div class=\"ttr_footer_element_alignment container\">
</div>
";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["footer_pos"]) ? $context["footer_pos"] : null));
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
        echo "<div id=\"ttr_footer_designed_by_links\">
<a href=\"http://templatetoaster.com\" target=\"_self\" >
OpenCart Theme
</a>
<span id=\"ttr_footer_designed_by\">
Designed With TemplateToaster
</span>
</div>
</div>
</div>
</div>
<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>
</footer>
<!--footer_below-->
";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["fblw"]) ? $context["fblw"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 87
            echo "<div class=\"footer-widget-area\" >
<div class=\"ttr_footer-widget-area_inner_below_widget_container\">
";
            // line 89
            list($context["flag"], $context["break"]) =             array(0, false);
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("footer_pos_below" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 91
                    if (($this->getAttribute($context["value"], 1, array()) == true)) {
                        // line 92
                        $context["flag"] = array(0 => 1);
                        // line 93
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["flag"]) ? $context["flag"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                                // line 94
                                echo "<div class=\"ttr_footer-widget-area_inner_below";
                                echo $context["i"];
                                echo "\">
";
                                // line 95
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
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("footer_pos_below" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 100
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " 
 ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            if ((isset($context["break"]) ? $context["break"] : null)) {
                // line 103
                echo "</div>
";
            }
            // line 105
            echo "</div></div>
<div style=\"clear: both;\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "theme--50047/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 108,  315 => 105,  311 => 103,  309 => 102,  300 => 100,  295 => 99,  282 => 95,  277 => 94,  272 => 93,  270 => 92,  268 => 91,  263 => 90,  261 => 89,  257 => 87,  253 => 86,  237 => 72,  228 => 70,  223 => 69,  209 => 60,  203 => 59,  197 => 58,  191 => 57,  186 => 55,  177 => 51,  171 => 50,  165 => 49,  161 => 48,  156 => 46,  147 => 42,  141 => 41,  135 => 40,  130 => 38,  127 => 37,  124 => 36,  113 => 34,  109 => 33,  104 => 31,  101 => 30,  99 => 29,  94 => 26,  85 => 22,  81 => 20,  79 => 19,  70 => 17,  65 => 16,  52 => 12,  47 => 11,  42 => 10,  40 => 9,  38 => 8,  33 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* </div>*/
/* <!--footer_above-->*/
/* {% for i in 0..fabv-1 %}*/
/* <div class="footer-widget-area" >*/
/* <div class="ttr_footer-widget-area_inner_above_widget_container">*/
/* {% set flag, break = 0, false %}*/
/* {% for key, value in  attribute(_context, 'footer_pos_above' ~ i) if not key % 2 %}*/
/* {% if value.1 == true %}*/
/* {% set flag = [1] %}*/
/* {% for f in flag if not break %}*/
/* <div class="ttr_footer-widget-area_inner_above{{ i }}">*/
/* {% set break = true %}*/
/* {% endfor %}*/
/* {% endif %}*/
/* {% endfor %}*/
/* {% for key, value in attribute(_context, 'footer_pos_above' ~ i) if not key % 2 %}*/
/* {{ value.0 }} */
/*  {% endfor %}*/
/* {% if break %}*/
/* </div>*/
/* {% endif %}*/
/* </div>*/
/* </div>*/
/* <div style="clear: both;"></div>*/
/* {% endfor %}*/
/* <footer id="ttr_footer" >*/
/* <div id="ttr_footer_inner">*/
/* <div>*/
/* {% if informations %}*/
/*  <div class="col-md-3">*/
/* <h5>{{ text_information }}</h5>*/
/* <ul class="links">*/
/* {% for information in informations %}*/
/* <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/* {% endfor %}*/
/* </ul></div> {% endif %}*/
/*  <div class="col-md-3">*/
/* <h5>{{ text_service }}</h5>*/
/* <ul class="links">*/
/* <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/* <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/* <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/* </ul>*/
/* </div>*/
/*  <div class="col-md-3">*/
/* <h5>{{ text_extra }}</h5>*/
/* <ul class="links">*/
/* <li><a href="{{ manufacturer }}"><?php echo $text_manufacturer; ?></a></li>*/
/* <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/* <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/* <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/* </ul>*/
/* </div>*/
/*  <div class="col-md-3">*/
/* <h5>{{ text_account }}</h5>*/
/* <ul class="links">*/
/* <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/* <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/* <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/* <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/* </ul>*/
/* </div>*/
/*  <div class=" visible-sm-block visible-md-block visible-lg-block visible-xs-block d-xl-block d-lg-block d-sm-block d-md-block d-block " style="clear:both;"></div>*/
/* </div>*/
/*  <div class="ttr_footer_bottom_footer">*/
/*  <div class="ttr_footer_bottom_footer_inner">*/
/* <div class="ttr_footer_element_alignment container">*/
/* </div>*/
/* {% for key, value in footer_pos if not key % 2 %}*/
/* {{ value.0 }} */
/*  {% endfor %}*/
/* <div id="ttr_footer_designed_by_links">*/
/* <a href="http://templatetoaster.com" target="_self" >*/
/* OpenCart Theme*/
/* </a>*/
/* <span id="ttr_footer_designed_by">*/
/* Designed With TemplateToaster*/
/* </span>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>*/
/* </footer>*/
/* <!--footer_below-->*/
/* {% for i in 0..fblw-1 %}*/
/* <div class="footer-widget-area" >*/
/* <div class="ttr_footer-widget-area_inner_below_widget_container">*/
/* {% set flag, break = 0, false %}*/
/* {% for key, value in  attribute(_context, 'footer_pos_below' ~ i) if not key % 2 %}*/
/* {% if value.1 == true %}*/
/* {% set flag = [1] %}*/
/* {% for f in flag if not break %}*/
/* <div class="ttr_footer-widget-area_inner_below{{ i }}">*/
/* {% set break = true %}*/
/* {% endfor %}*/
/* {% endif %}*/
/* {% endfor %}*/
/* {% for key, value in attribute(_context, 'footer_pos_below' ~ i) if not key % 2 %}*/
/* {{ value.0 }} */
/*  {% endfor %}*/
/* {% if break %}*/
/* </div>*/
/* {% endif %}*/
/* </div></div>*/
/* <div style="clear: both;"></div>*/
/* {% endfor %}*/
/* </div>*/
/* */
