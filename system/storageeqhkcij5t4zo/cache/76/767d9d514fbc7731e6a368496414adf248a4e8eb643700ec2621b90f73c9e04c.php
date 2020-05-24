<?php

/* mintleaf/template/extension/module/category.twig */
class __TwigTemplate_7d8b0204e5104908a2679b35568d345cd9ba72709ffe333e48b806162822ff9a extends Twig_Template
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
        echo "<div class=\"sblock-1 rounded-3\">
  <h5 class=\"sblock-1-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h5>
  <div class=\"sblock-1-content\">
    <div class=\"list-group animation\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "        ";
            if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                echo " 
          <a href=\"";
                // line 7
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"list-group-item active\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a> 
        ";
                // line 8
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 9
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 10
                        echo "            ";
                        if (($this->getAttribute($context["child"], "category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                            // line 11
                            echo "              <a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item child active\">&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a> 
            ";
                        } else {
                            // line 12
                            echo " 
            <a href=\"";
                            // line 13
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item child\">&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
            ";
                        }
                        // line 15
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "        ";
                }
                // line 17
                echo "        ";
            } else {
                echo " 
          <a href=\"";
                // line 18
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"list-group-item\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
        ";
            }
            // line 20
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
  </div>  
</div>";
    }

    public function getTemplateName()
    {
        return "mintleaf/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  92 => 20,  85 => 18,  80 => 17,  77 => 16,  71 => 15,  64 => 13,  61 => 12,  53 => 11,  50 => 10,  45 => 9,  43 => 8,  37 => 7,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div class="sblock-1 rounded-3">*/
/*   <h5 class="sblock-1-heading">{{ heading_title }}</h5>*/
/*   <div class="sblock-1-content">*/
/*     <div class="list-group animation">*/
/*       {% for category in categories %}*/
/*         {% if category.category_id == category_id %} */
/*           <a href="{{ category.href }}" class="list-group-item active">{{ category.name }}</a> */
/*         {% if category.children %}*/
/*           {% for child in category.children %}*/
/*             {% if child.category_id == child_id %}*/
/*               <a href="{{ child.href }}" class="list-group-item child active">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a> */
/*             {% else %} */
/*             <a href="{{ child.href }}" class="list-group-item child">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         {% endif %}*/
/*         {% else %} */
/*           <a href="{{ category.href }}" class="list-group-item">{{ category.name }}</a>*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>  */
/* </div>*/
