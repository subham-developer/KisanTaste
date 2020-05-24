<?php

/* mintleaf/template/extension/module/topcategory.twig */
class __TwigTemplate_eddcc948363b3319dfda6764b1f7657b4a7d04c67b57c317c4b4d807fff19af3 extends Twig_Template
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
        echo "<div id=\"topcat";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"cat-grid-wrap text-center animation\">
  <h3 class=\"module-product-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
  <div class=\"row\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "      <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-12\">
        <div class=\"cat-grid animation rounded-3\">
          <div class=\"cat-grid-image\">";
            // line 7
            if ($this->getAttribute($context["banner"], "link", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive img-center\" /></a>";
            } else {
                echo "<img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive img-center\" />";
            }
            echo "</div>
          ";
            // line 8
            if ($this->getAttribute($context["banner"], "link", array())) {
                echo "<h6 class=\"cat-grid-title\"><a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\">";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "</a></h6>";
            }
            // line 9
            echo "        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "mintleaf/template/extension/module/topcategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  63 => 9,  55 => 8,  37 => 7,  33 => 5,  29 => 4,  24 => 2,  19 => 1,);
    }
}
/* <div id="topcat{{ module }}" class="cat-grid-wrap text-center animation">*/
/*   <h3 class="module-product-heading">{{ heading_title }}</h3>*/
/*   <div class="row">*/
/*     {% for banner in banners %}*/
/*       <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">*/
/*         <div class="cat-grid animation rounded-3">*/
/*           <div class="cat-grid-image">{% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive img-center" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive img-center" />{% endif %}</div>*/
/*           {% if banner.link %}<h6 class="cat-grid-title"><a href="{{ banner.link }}">{{ banner.title }}</a></h6>{% endif %}*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
