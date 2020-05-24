<?php

/* mintleaf/template/common/search.twig */
class __TwigTemplate_59443ea2b5be33c15a965e7fbb7e85965977c4fbfcf2a430f86190a9d126f556 extends Twig_Template
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
        echo "<div class=\"btn-group search-dropdown\">
  <button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">
    <img src=\"catalog/view/theme/mintleaf/image/icon/search-icon.png\" alt=\"Search\">
  </button>
  <ul class=\"dropdown-menu\">
    <li>
      <div id=\"search\" class=\"input-group\">
        <input type=\"text\" name=\"search\" value=\"";
        // line 8
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control search-dropdown-input rounded-0\" />
        <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn search-dropdown-btn rounded-0\"><i class=\"fa fa-search\"></i></button>
        </span>
      </div>
    </li>
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "mintleaf/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }
}
/* <div class="btn-group search-dropdown">*/
/*   <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">*/
/*     <img src="catalog/view/theme/mintleaf/image/icon/search-icon.png" alt="Search">*/
/*   </button>*/
/*   <ul class="dropdown-menu">*/
/*     <li>*/
/*       <div id="search" class="input-group">*/
/*         <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control search-dropdown-input rounded-0" />*/
/*         <span class="input-group-btn">*/
/*           <button type="button" class="btn search-dropdown-btn rounded-0"><i class="fa fa-search"></i></button>*/
/*         </span>*/
/*       </div>*/
/*     </li>*/
/*   </ul>*/
/* </div>*/
/* */
