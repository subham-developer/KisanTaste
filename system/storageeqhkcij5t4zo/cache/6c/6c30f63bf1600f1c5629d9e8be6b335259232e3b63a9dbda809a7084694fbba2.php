<?php

/* mintleaf/template/product/product.twig */
class __TwigTemplate_f0cb308d9aa4e3b70ba682b31bab0595b77aaea29130201d00f43a9f3ed693d9 extends Twig_Template
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
<!-- Product Container Starts -->
<div id=\"product-product\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
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
        // line 8
        echo "  </ul>
<!-- Row Starts -->  
  <div class=\"row\">
    ";
        // line 11
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 12
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "  <!-- Content Area Starts -->
    <div id=\"content\" class=\"";
        // line 20
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      ";
        // line 21
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
    <!-- Nested Row Starts -->
      <div class=\"row\"> 
        ";
        // line 24
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 25
            echo "          ";
            $context["class"] = "col-sm-5";
            // line 26
            echo "        ";
        } else {
            // line 27
            echo "          ";
            $context["class"] = "col-sm-5";
            // line 28
            echo "        ";
        }
        // line 29
        echo "      ";
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 30
            echo "      <!-- Product Image Area Starts -->
        <div class=\"";
            // line 31
            echo (isset($context["class"]) ? $context["class"] : null);
            echo " product-image-wrap\">        
        ";
            // line 32
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 33
                echo "        <!-- Product Image Starts -->
          <div class=\"product-image\">
            <a href=\"";
                // line 35
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"img-responsive img-center\" /></a>
          </div>
        <!-- Product Image Ends -->
        ";
            }
            // line 39
            echo "        ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 40
                echo "        <!-- Additional Images Starts -->
          <ul class=\"list-unstyled list-inline product-image-additional\">            
          ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    echo "          
            <li><a href=\"";
                    // line 43
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\"> <img src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" class=\"img-responsive img-center\" /></a></li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "            
          </ul>
        <!-- Additional Images Ends -->          
        ";
            }
            // line 48
            echo "        </div>
      <!-- Product Image Area Ends -->   
      ";
        }
        // line 51
        echo "      ";
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 52
            echo "        ";
            $context["class"] = "col-sm-7";
            // line 53
            echo "      ";
        } else {
            // line 54
            echo "        ";
            $context["class"] = "col-sm-7";
            // line 55
            echo "      ";
        }
        // line 56
        echo "      <!-- Product Info Starts -->  
        <div id=\"product\" class=\"";
        // line 57
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " product-info\">
        <!-- Product Title Starts -->
          <h4 class=\"product-info-title\">";
        // line 59
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h4>
        <!-- Product Title Ends -->
        <!-- Product Details Starts -->
          <ul class=\"list-unstyled product-info-details\">
            ";
        // line 63
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 64
            echo "            <li>";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "&nbsp; <a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></li>
            ";
        }
        // line 66
        echo "            <li>";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo "&nbsp; <span>";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</span></li>
            ";
        // line 67
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 68
            echo "            <li>";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "&nbsp; <span>";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</span></li>
            ";
        }
        // line 70
        echo "            <li>";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo "&nbsp; <span>";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</span></li>
          </ul>
        <!-- Product Details Ends -->
        ";
        // line 73
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 74
            echo "        <!-- Product Options Starts -->
          <div class=\"product-info-options\">
            <h5 class=\"product-info-options-title\">";
            // line 76
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h5>
            ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 78
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 79
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 80
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <select name=\"option[";
                    // line 81
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 82
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 84
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                ";
                        // line 85
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 86
                            echo "                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                ";
                        }
                        // line 87
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 89
                    echo "              </select>
            </div>
            ";
                }
                // line 92
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 93
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 94
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 95
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 96
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 98
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 99
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 100
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 101
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 102
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 103
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 105
                    echo " </div>
            </div>
            ";
                }
                // line 108
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 109
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 110
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 111
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 112
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 114
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 115
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 116
                        echo "                    ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 117
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 118
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 119
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo " </div>
            </div>
            ";
                }
                // line 124
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 125
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 126
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 127
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 130
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 131
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 132
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <textarea name=\"option[";
                    // line 133
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
            </div>
            ";
                }
                // line 136
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 137
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 138
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 139
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-outline-1 btn-block animation\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 140
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
            </div>
            ";
                }
                // line 143
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 144
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 145
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 147
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 153
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 154
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 155
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 157
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 163
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 164
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 165
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 167
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 173
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "            ";
            if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
                // line 175
                echo "            <hr>
            <h3>";
                // line 176
                echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
                echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
                // line 179
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
                ";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                    // line 181
                    echo "                <option value=\"";
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["recurring"], "name", array());
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 183
                echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
            }
            // line 187
            echo "          </div>
        <!-- Product Options Ends -->
        ";
        }
        // line 190
        echo "        ";
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 191
            echo "        <!-- Price Starts -->
          <div class=\"product-info-price clearfix\">
          ";
            // line 193
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 194
                echo "            <span class=\"price-new\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span>
          ";
            } else {
                // line 196
                echo "            <span class=\"price-new\">";
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</span> <span class=\"price-old\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span>
          ";
            }
            // line 198
            echo "          ";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 199
                echo "            <p class=\"product-info-price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</p>
          ";
            }
            // line 201
            echo "          ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 202
                echo "            <p class=\"product-info-price-rewards\">";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</p>
          ";
            }
            // line 204
            echo "          ";
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 205
                echo "          <div class=\"table-responsive\"> 
            <table class=\"table table-dark table-bordered table-striped\">
              <tbody>
              ";
                // line 208
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 209
                    echo "                <tr><td>";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</td></tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                echo "              </tbody>
            </table>
          </div>
          ";
            }
            // line 215
            echo "          </div>
        <!-- Price Ends -->
        ";
        }
        // line 217
        echo "        
        <!-- Reviews Starts -->
        ";
        // line 219
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 220
            echo "          <div class=\"product-info-rating\">
            <ul class=\"list-unstyled list-inline product-info-rating-list\">
            ";
            // line 222
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 223
                echo "               ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    // line 224
                    echo "                  <li class=\"product-info-rating-list-star\"><span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span></li>
                  ";
                } else {
                    // line 226
                    echo "                  <li class=\"product-info-rating-list-star\"><span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span></li>
               ";
                }
                // line 228
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "              <li class=\"product-info-rating-list-review\">
                <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">
                  ";
            // line 231
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "
                </a>
              </li>
              <li class=\"product-info-rating-list-review\">
                <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">
                 <i class=\"fa fa-edit\"></i>";
            // line 236
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "
                </a>
              </li>
            </ul>
          </div>
        ";
        }
        // line 241
        echo " 
        <!-- Reviews Ends -->
        <!-- Qty & Product Add Buttons Starts -->
          <div class=\"product-info-cart\">
            <div class=\"clearfix\">
              <div class=\"form-inline\">
                <div class=\"form-group pull-left-lg pull-left-md pull-left-sm\">
                  <label class=\"control-label\" for=\"input-quantity\">";
        // line 248
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 249
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 250
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />
                </div>
              </div>            
              <div class=\"button-group product-info-cart-btns-wrap pull-left-lg pull-left-md pull-left-sm\">
                <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 254
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-cart animation\"><i class=\"fa fa-shopping-cart\"></i> ";
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button>
                <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-wishlist animation\" title=\"";
        // line 255
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "\" onclick=\"wishlist.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-compare animation\" title=\"";
        // line 256
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "\" onclick=\"compare.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
            </div>
            ";
        // line 259
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 260
            echo "              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
            ";
        }
        // line 262
        echo "          </div>
        <!-- Qty & Product Add Buttons Ends -->
        <!-- AddThis Button BEGIN -->
          <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
        // line 265
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
          <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
        <!-- AddThis Button END --> 
        </div>
      <!-- Product Info Ends -->   
      </div>
    <!-- Nested Row Ends -->
    <!-- Product Tabs Wrap Starts -->
      <div class=\"product-tabs-wrap\">
      <!-- Product Tabs Starts -->
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 276
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
          ";
        // line 277
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 278
            echo "          <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
          ";
        }
        // line 280
        echo "          ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 281
            echo "          <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
          ";
        }
        // line 283
        echo "        </ul>
      <!-- Product Tabs Ends -->
      <!-- Product Tab Content Starts -->
        <div class=\"tab-content\">
        <!-- Product Description Starts -->
          <div class=\"tab-pane active\" id=\"tab-description\">
            ";
        // line 289
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "
          </div>
        <!-- Product Description Ends -->
        ";
        // line 292
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 293
            echo "        <!-- Product Attribute Starts -->
          <div class=\"tab-pane\" id=\"tab-specification\">
            <table class=\"table table-dark table-striped table-bordered\">
              ";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 297
                echo "              <thead>
                <tr>
                  <td colspan=\"2\"><strong>";
                // line 299
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                </tr>
              </thead>
              <tbody>
              ";
                // line 303
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 304
                    echo "              <tr>
                <td>";
                    // line 305
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                <td>";
                    // line 306
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
              </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 309
                echo "                </tbody>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 311
            echo "            </table>
          </div>
        <!-- Product Attribute Ends -->
        ";
        }
        // line 315
        echo "        ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 316
            echo "        <!-- Product Review Starts -->
          <div class=\"tab-pane\" id=\"tab-review\">
            <form class=\"form-horizontal\" id=\"form-review\">
              <div id=\"review\"></div><br>
              <h4>";
            // line 320
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h4><hr>
              ";
            // line 321
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 322
                echo "              <div class=\"form-group required\">
                <div class=\"col-sm-12\">
                  <label class=\"control-label\" for=\"input-name\">";
                // line 324
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                  <input type=\"text\" name=\"name\" value=\"";
                // line 325
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <div class=\"col-sm-12\">
                  <label class=\"control-label\" for=\"input-review\">";
                // line 330
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                  <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                  <div class=\"help-block\">";
                // line 332
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                </div>
              </div>
              <div class=\"form-group required\">
                <div class=\"col-sm-12\">
                  <label class=\"control-label\">";
                // line 337
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                  &nbsp;&nbsp;&nbsp; ";
                // line 338
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                  <input type=\"radio\" name=\"rating\" value=\"1\" />
                  &nbsp;
                  <input type=\"radio\" name=\"rating\" value=\"2\" />
                  &nbsp;
                  <input type=\"radio\" name=\"rating\" value=\"3\" />
                  &nbsp;
                  <input type=\"radio\" name=\"rating\" value=\"4\" />
                  &nbsp;
                  <input type=\"radio\" name=\"rating\" value=\"5\" />
                  &nbsp;";
                // line 348
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
              </div>
              ";
                // line 350
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
              <div class=\"buttons clearfix\">
                <div class=\"pull-right\">
                  <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 353
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                </div>
              </div>
              ";
            } else {
                // line 357
                echo "              ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
              ";
            }
            // line 359
            echo "            </form>
          </div>
        <!-- Product Review Ends -->
        ";
        }
        // line 363
        echo "        </div>
      <!-- Product Tab Content Ends -->
      </div>
    <!-- Product Tabs Wrap Ends -->
    ";
        // line 367
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 368
            echo "      <p>&nbsp;</p>
    <!-- Related Products Starts -->
      <div class=\"module-product-wrap\">
      <!-- Module Heading Starts -->
        <h4 class=\"module-product-heading\">";
            // line 372
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</h4>
      <!-- Module Heading Ends -->
      <!-- Nested Row Starts -->
        <div class=\"row\">
        ";
            // line 376
            $context["i"] = 0;
            // line 377
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 378
                echo "          ";
                if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
                    // line 379
                    echo "            ";
                    $context["class"] = "col-sm-6 col-xs-12";
                    // line 380
                    echo "          ";
                } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                    // line 381
                    echo "            ";
                    $context["class"] = "col-md-4 col-sm-6 col-xs-12";
                    // line 382
                    echo "          ";
                } else {
                    // line 383
                    echo "            ";
                    $context["class"] = "col-lg-3 col-md-4 col-sm-6 col-xs-12";
                    // line 384
                    echo "          ";
                }
                // line 385
                echo "        <!-- Product Col Starts -->
          <div class=\"product-layout ";
                // line 386
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\">
          <!-- Product Module Starts -->
            <div class=\"product-thumb module-product animation rounded-3\">
            <!-- Product Image Starts -->
              <div class=\"module-product-image\">
                <a href=\"";
                // line 391
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
                  <img src=\"";
                // line 392
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
                // line 399
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h6>
              <!-- Product Name Ends -->
              <!-- Product Description Starts -->
                <div class=\"module-product-description hidden\">
                  ";
                // line 403
                echo $this->getAttribute($context["product"], "description", array());
                echo "
                </div>
              <!-- Product Description Ends -->
              ";
                // line 406
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 407
                    echo "              <!-- Product Ratings Starts -->
                <div class=\"module-product-ratings\">
                  ";
                    // line 409
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 410
                        echo "                    ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 411
                            echo "                      <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    ";
                        } else {
                            // line 413
                            echo "                      <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    ";
                        }
                        // line 415
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 416
                    echo "                </div>
              <!-- Product Ratings Ends -->
              ";
                }
                // line 419
                echo "              ";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 420
                    echo "              <!-- Product Price Starts -->
                <div class=\"module-product-price\">
                  ";
                    // line 422
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 423
                        echo "                    ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                  ";
                    } else {
                        // line 425
                        echo "                    <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                  ";
                    }
                    // line 427
                    echo "                </div>
              <!-- Product Price Ends -->
              ";
                }
                // line 430
                echo "              <!-- Add To Cart Button Starts -->
                <button type=\"button\" class=\"btn module-product-btn-cart animation rounded-3\" onclick=\"cart.add('";
                // line 431
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
                // line 439
                if ((((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null)) && ((((isset($context["i"]) ? $context["i"] : null) + 1) % 2) == 0))) {
                    // line 440
                    echo "            <div class=\"clearfix visible-md visible-sm\"></div>
          ";
                } elseif ((                // line 441
(isset($context["column_left"]) ? $context["column_left"] : null) || ((isset($context["column_right"]) ? $context["column_right"] : null) && ((((isset($context["i"]) ? $context["i"] : null) + 1) % 3) == 0)))) {
                    // line 442
                    echo "            <div class=\"clearfix visible-md\"></div>
          ";
                } elseif ((((                // line 443
(isset($context["i"]) ? $context["i"] : null) + 1) % 4) == 0)) {
                    // line 444
                    echo "            <div class=\"clearfix visible-md\"></div>
          ";
                }
                // line 446
                echo "            ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 447
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "  
        </div>
      <!-- Nested Row Ends -->
      </div>
    <!-- Related Products Ends -->
    ";
        }
        // line 453
        echo "    ";
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            echo "    
    <!-- Tags Starts -->
      <p>
        ";
            // line 456
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
        ";
            // line 457
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 458
                echo "          ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
          ";
                } else {
                    // line 459
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> ";
                }
                // line 460
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
      </p>
    <!-- Tags Ends -->
    ";
        }
        // line 464
        echo "    ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
  <!-- Content Area Ends -->    
    ";
        // line 467
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
  </div>
<!-- Row Ends -->  
</div>
<!-- Product Container Ends -->
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

        \$('#cart > button').html('<img src=\"catalog/view/theme/mintleaf/image/icon/shopping-bag.png\" alt=\"Search\"><span id=\"cart-total\" class=\"rounded-circle\">' + json['total'][0] + json['total'][1] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 548
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 553
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 559
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 626
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 630
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.product-image-wrap').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script> 
";
        // line 668
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "mintleaf/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1534 => 668,  1493 => 630,  1486 => 626,  1416 => 559,  1407 => 553,  1399 => 548,  1315 => 467,  1308 => 464,  1297 => 460,  1290 => 459,  1280 => 458,  1276 => 457,  1272 => 456,  1265 => 453,  1252 => 447,  1249 => 446,  1245 => 444,  1243 => 443,  1240 => 442,  1238 => 441,  1235 => 440,  1233 => 439,  1220 => 431,  1217 => 430,  1212 => 427,  1204 => 425,  1198 => 423,  1196 => 422,  1192 => 420,  1189 => 419,  1184 => 416,  1178 => 415,  1174 => 413,  1170 => 411,  1167 => 410,  1163 => 409,  1159 => 407,  1157 => 406,  1151 => 403,  1142 => 399,  1128 => 392,  1124 => 391,  1116 => 386,  1113 => 385,  1110 => 384,  1107 => 383,  1104 => 382,  1101 => 381,  1098 => 380,  1095 => 379,  1092 => 378,  1087 => 377,  1085 => 376,  1078 => 372,  1072 => 368,  1070 => 367,  1064 => 363,  1058 => 359,  1052 => 357,  1043 => 353,  1037 => 350,  1032 => 348,  1019 => 338,  1015 => 337,  1007 => 332,  1002 => 330,  994 => 325,  990 => 324,  986 => 322,  984 => 321,  980 => 320,  974 => 316,  971 => 315,  965 => 311,  958 => 309,  949 => 306,  945 => 305,  942 => 304,  938 => 303,  931 => 299,  927 => 297,  923 => 296,  918 => 293,  916 => 292,  910 => 289,  902 => 283,  896 => 281,  893 => 280,  887 => 278,  885 => 277,  881 => 276,  867 => 265,  862 => 262,  856 => 260,  854 => 259,  846 => 256,  840 => 255,  834 => 254,  827 => 250,  823 => 249,  819 => 248,  810 => 241,  801 => 236,  793 => 231,  789 => 229,  783 => 228,  779 => 226,  775 => 224,  772 => 223,  768 => 222,  764 => 220,  762 => 219,  758 => 217,  753 => 215,  747 => 211,  736 => 209,  732 => 208,  727 => 205,  724 => 204,  716 => 202,  713 => 201,  705 => 199,  702 => 198,  694 => 196,  688 => 194,  686 => 193,  682 => 191,  679 => 190,  674 => 187,  668 => 183,  657 => 181,  653 => 180,  649 => 179,  643 => 176,  640 => 175,  637 => 174,  631 => 173,  618 => 167,  611 => 165,  604 => 164,  601 => 163,  588 => 157,  581 => 155,  574 => 154,  571 => 153,  558 => 147,  551 => 145,  544 => 144,  541 => 143,  533 => 140,  525 => 139,  521 => 138,  514 => 137,  511 => 136,  499 => 133,  493 => 132,  486 => 131,  483 => 130,  471 => 127,  465 => 126,  458 => 125,  455 => 124,  450 => 121,  442 => 119,  435 => 118,  433 => 117,  428 => 116,  412 => 115,  406 => 114,  402 => 112,  396 => 111,  392 => 110,  385 => 109,  382 => 108,  377 => 105,  369 => 103,  362 => 102,  360 => 101,  356 => 100,  338 => 99,  332 => 98,  328 => 96,  322 => 95,  318 => 94,  311 => 93,  308 => 92,  303 => 89,  296 => 87,  289 => 86,  287 => 85,  280 => 84,  276 => 83,  272 => 82,  266 => 81,  260 => 80,  253 => 79,  250 => 78,  246 => 77,  242 => 76,  238 => 74,  236 => 73,  227 => 70,  219 => 68,  217 => 67,  210 => 66,  200 => 64,  198 => 63,  191 => 59,  186 => 57,  183 => 56,  180 => 55,  177 => 54,  174 => 53,  171 => 52,  168 => 51,  163 => 48,  157 => 44,  141 => 43,  135 => 42,  131 => 40,  128 => 39,  113 => 35,  109 => 33,  107 => 32,  103 => 31,  100 => 30,  97 => 29,  94 => 28,  91 => 27,  88 => 26,  85 => 25,  83 => 24,  77 => 21,  73 => 20,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  52 => 13,  50 => 12,  46 => 11,  41 => 8,  30 => 6,  26 => 5,  19 => 1,);
    }
}
/* {{ header }}*/
/* <!-- Product Container Starts -->*/
/* <div id="product-product" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* <!-- Row Starts -->  */
/*   <div class="row">*/
/*     {{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*   <!-- Content Area Starts -->*/
/*     <div id="content" class="{{ class }}">*/
/*       {{ content_top }}*/
/*     <!-- Nested Row Starts -->*/
/*       <div class="row"> */
/*         {% if column_left or column_right %}*/
/*           {% set class = 'col-sm-5' %}*/
/*         {% else %}*/
/*           {% set class = 'col-sm-5' %}*/
/*         {% endif %}*/
/*       {% if thumb or images %}*/
/*       <!-- Product Image Area Starts -->*/
/*         <div class="{{ class }} product-image-wrap">        */
/*         {% if thumb %}*/
/*         <!-- Product Image Starts -->*/
/*           <div class="product-image">*/
/*             <a href="{{ popup }}" title="{{ heading_title }}"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" class="img-responsive img-center" /></a>*/
/*           </div>*/
/*         <!-- Product Image Ends -->*/
/*         {% endif %}*/
/*         {% if images %}*/
/*         <!-- Additional Images Starts -->*/
/*           <ul class="list-unstyled list-inline product-image-additional">            */
/*           {% for image in images %}          */
/*             <li><a href="{{ image.popup }}" title="{{ heading_title }}"> <img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" class="img-responsive img-center" /></a></li>*/
/*           {% endfor %}            */
/*           </ul>*/
/*         <!-- Additional Images Ends -->          */
/*         {% endif %}*/
/*         </div>*/
/*       <!-- Product Image Area Ends -->   */
/*       {% endif %}*/
/*       {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-7' %}*/
/*       {% else %}*/
/*         {% set class = 'col-sm-7' %}*/
/*       {% endif %}*/
/*       <!-- Product Info Starts -->  */
/*         <div id="product" class="{{ class }} product-info">*/
/*         <!-- Product Title Starts -->*/
/*           <h4 class="product-info-title">{{ heading_title }}</h4>*/
/*         <!-- Product Title Ends -->*/
/*         <!-- Product Details Starts -->*/
/*           <ul class="list-unstyled product-info-details">*/
/*             {% if manufacturer %}*/
/*             <li>{{ text_manufacturer }}&nbsp; <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*             {% endif %}*/
/*             <li>{{ text_model }}&nbsp; <span>{{ model }}</span></li>*/
/*             {% if reward %}*/
/*             <li>{{ text_reward }}&nbsp; <span>{{ reward }}</span></li>*/
/*             {% endif %}*/
/*             <li>{{ text_stock }}&nbsp; <span>{{ stock }}</span></li>*/
/*           </ul>*/
/*         <!-- Product Details Ends -->*/
/*         {% if options %}*/
/*         <!-- Product Options Starts -->*/
/*           <div class="product-info-options">*/
/*             <h5 class="product-info-options-title">{{ text_option }}</h5>*/
/*             {% for option in options %}*/
/*             {% if option.type == 'select' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for option_value in option.product_option_value %}*/
/*                 <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                 {% if option_value.price %}*/
/*                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                 {% endif %} </option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'radio' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="radio">*/
/*                   <label>*/
/*                     <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}                  */
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'checkbox' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'text' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'textarea' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'file' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-outline-1 btn-block animation"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'date' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'datetime' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'time' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group time">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% if recurrings %}*/
/*             <hr>*/
/*             <h3>{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                 <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*             {% endif %}*/
/*           </div>*/
/*         <!-- Product Options Ends -->*/
/*         {% endif %}*/
/*         {% if price %}*/
/*         <!-- Price Starts -->*/
/*           <div class="product-info-price clearfix">*/
/*           {% if not special %}*/
/*             <span class="price-new">{{ price }}</span>*/
/*           {% else %}*/
/*             <span class="price-new">{{ special }}</span> <span class="price-old">{{ price }}</span>*/
/*           {% endif %}*/
/*           {% if tax %}*/
/*             <p class="product-info-price-tax">{{ text_tax }} {{ tax }}</p>*/
/*           {% endif %}*/
/*           {% if points %}*/
/*             <p class="product-info-price-rewards">{{ text_points }} {{ points }}</p>*/
/*           {% endif %}*/
/*           {% if discounts %}*/
/*           <div class="table-responsive"> */
/*             <table class="table table-dark table-bordered table-striped">*/
/*               <tbody>*/
/*               {% for discount in discounts %}*/
/*                 <tr><td>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</td></tr>*/
/*               {% endfor %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*           {% endif %}*/
/*           </div>*/
/*         <!-- Price Ends -->*/
/*         {% endif %}        */
/*         <!-- Reviews Starts -->*/
/*         {% if review_status %}*/
/*           <div class="product-info-rating">*/
/*             <ul class="list-unstyled list-inline product-info-rating-list">*/
/*             {% for i in 1..5 %}*/
/*                {% if rating < i %}*/
/*                   <li class="product-info-rating-list-star"><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span></li>*/
/*                   {% else %}*/
/*                   <li class="product-info-rating-list-star"><span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span></li>*/
/*                {% endif %}*/
/*             {% endfor %}*/
/*               <li class="product-info-rating-list-review">*/
/*                 <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">*/
/*                   {{ reviews }}*/
/*                 </a>*/
/*               </li>*/
/*               <li class="product-info-rating-list-review">*/
/*                 <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">*/
/*                  <i class="fa fa-edit"></i>{{ text_write }}*/
/*                 </a>*/
/*               </li>*/
/*             </ul>*/
/*           </div>*/
/*         {% endif %} */
/*         <!-- Reviews Ends -->*/
/*         <!-- Qty & Product Add Buttons Starts -->*/
/*           <div class="product-info-cart">*/
/*             <div class="clearfix">*/
/*               <div class="form-inline">*/
/*                 <div class="form-group pull-left-lg pull-left-md pull-left-sm">*/
/*                   <label class="control-label" for="input-quantity">{{ entry_qty }}</label>*/
/*                   <input type="text" name="quantity" value="{{ minimum }}" size="2" id="input-quantity" class="form-control" />*/
/*                   <input type="hidden" name="product_id" value="{{ product_id }}" />*/
/*                 </div>*/
/*               </div>            */
/*               <div class="button-group product-info-cart-btns-wrap pull-left-lg pull-left-md pull-left-sm">*/
/*                 <button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="btn btn-cart animation"><i class="fa fa-shopping-cart"></i> {{ button_cart }}</button>*/
/*                 <button type="button" data-toggle="tooltip" class="btn btn-wishlist animation" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product_id }}');"><i class="fa fa-heart"></i></button>*/
/*                 <button type="button" data-toggle="tooltip" class="btn btn-compare animation" title="{{ button_compare }}" onclick="compare.add('{{ product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*               </div>*/
/*             </div>*/
/*             {% if minimum > 1 %}*/
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         <!-- Qty & Product Add Buttons Ends -->*/
/*         <!-- AddThis Button BEGIN -->*/
/*           <div class="addthis_toolbox addthis_default_style" data-url="{{ share }}"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>*/
/*           <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script> */
/*         <!-- AddThis Button END --> */
/*         </div>*/
/*       <!-- Product Info Ends -->   */
/*       </div>*/
/*     <!-- Nested Row Ends -->*/
/*     <!-- Product Tabs Wrap Starts -->*/
/*       <div class="product-tabs-wrap">*/
/*       <!-- Product Tabs Starts -->*/
/*         <ul class="nav nav-tabs">*/
/*           <li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*           {% if attribute_groups %}*/
/*           <li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*           {% endif %}*/
/*           {% if review_status %}*/
/*           <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*           {% endif %}*/
/*         </ul>*/
/*       <!-- Product Tabs Ends -->*/
/*       <!-- Product Tab Content Starts -->*/
/*         <div class="tab-content">*/
/*         <!-- Product Description Starts -->*/
/*           <div class="tab-pane active" id="tab-description">*/
/*             {{ description }}*/
/*           </div>*/
/*         <!-- Product Description Ends -->*/
/*         {% if attribute_groups %}*/
/*         <!-- Product Attribute Starts -->*/
/*           <div class="tab-pane" id="tab-specification">*/
/*             <table class="table table-dark table-striped table-bordered">*/
/*               {% for attribute_group in attribute_groups %}*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*               {% for attribute in attribute_group.attribute %}*/
/*               <tr>*/
/*                 <td>{{ attribute.name }}</td>*/
/*                 <td>{{ attribute.text }}</td>*/
/*               </tr>*/
/*               {% endfor %}*/
/*                 </tbody>*/
/*               {% endfor %}*/
/*             </table>*/
/*           </div>*/
/*         <!-- Product Attribute Ends -->*/
/*         {% endif %}*/
/*         {% if review_status %}*/
/*         <!-- Product Review Starts -->*/
/*           <div class="tab-pane" id="tab-review">*/
/*             <form class="form-horizontal" id="form-review">*/
/*               <div id="review"></div><br>*/
/*               <h4>{{ text_write }}</h4><hr>*/
/*               {% if review_guest %}*/
/*               <div class="form-group required">*/
/*                 <div class="col-sm-12">*/
/*                   <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                   <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <div class="col-sm-12">*/
/*                   <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*                   <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                   <div class="help-block">{{ text_note }}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <div class="col-sm-12">*/
/*                   <label class="control-label">{{ entry_rating }}</label>*/
/*                   &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                   <input type="radio" name="rating" value="1" />*/
/*                   &nbsp;*/
/*                   <input type="radio" name="rating" value="2" />*/
/*                   &nbsp;*/
/*                   <input type="radio" name="rating" value="3" />*/
/*                   &nbsp;*/
/*                   <input type="radio" name="rating" value="4" />*/
/*                   &nbsp;*/
/*                   <input type="radio" name="rating" value="5" />*/
/*                   &nbsp;{{ entry_good }}</div>*/
/*               </div>*/
/*               {{ captcha }}*/
/*               <div class="buttons clearfix">*/
/*                 <div class="pull-right">*/
/*                   <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/*                 </div>*/
/*               </div>*/
/*               {% else %}*/
/*               {{ text_login }}*/
/*               {% endif %}*/
/*             </form>*/
/*           </div>*/
/*         <!-- Product Review Ends -->*/
/*         {% endif %}*/
/*         </div>*/
/*       <!-- Product Tab Content Ends -->*/
/*       </div>*/
/*     <!-- Product Tabs Wrap Ends -->*/
/*     {% if products %}*/
/*       <p>&nbsp;</p>*/
/*     <!-- Related Products Starts -->*/
/*       <div class="module-product-wrap">*/
/*       <!-- Module Heading Starts -->*/
/*         <h4 class="module-product-heading">{{ text_related }}</h4>*/
/*       <!-- Module Heading Ends -->*/
/*       <!-- Nested Row Starts -->*/
/*         <div class="row">*/
/*         {% set i = 0 %}*/
/*         {% for product in products %}*/
/*           {% if column_left and column_right %}*/
/*             {% set class = 'col-sm-6 col-xs-12' %}*/
/*           {% elseif column_left or column_right %}*/
/*             {% set class = 'col-md-4 col-sm-6 col-xs-12' %}*/
/*           {% else %}*/
/*             {% set class = 'col-lg-3 col-md-4 col-sm-6 col-xs-12' %}*/
/*           {% endif %}*/
/*         <!-- Product Col Starts -->*/
/*           <div class="product-layout {{ class }}">*/
/*           <!-- Product Module Starts -->*/
/*             <div class="product-thumb module-product animation rounded-3">*/
/*             <!-- Product Image Starts -->*/
/*               <div class="module-product-image">*/
/*                 <a href="{{ product.href }}">*/
/*                   <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive img-center" />*/
/*                 </a>*/
/*               </div>*/
/*             <!-- Product Image Ends -->*/
/*             <!-- Product Caption Starts -->*/
/*               <div class="module-product-caption">*/
/*               <!-- Product Name Starts -->*/
/*                 <h6 class="module-product-title"><a href="{{ product.href }}">{{ product.name }}</a></h6>*/
/*               <!-- Product Name Ends -->*/
/*               <!-- Product Description Starts -->*/
/*                 <div class="module-product-description hidden">*/
/*                   {{ product.description }}*/
/*                 </div>*/
/*               <!-- Product Description Ends -->*/
/*               {% if product.rating %}*/
/*               <!-- Product Ratings Starts -->*/
/*                 <div class="module-product-ratings">*/
/*                   {% for i in 1..5 %}*/
/*                     {% if product.rating < i %}*/
/*                       <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                     {% else %}*/
/*                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                     {% endif %}*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               <!-- Product Ratings Ends -->*/
/*               {% endif %}*/
/*               {% if product.price %}*/
/*               <!-- Product Price Starts -->*/
/*                 <div class="module-product-price">*/
/*                   {% if not product.special %}*/
/*                     {{ product.price }}*/
/*                   {% else %}*/
/*                     <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               <!-- Product Price Ends -->*/
/*               {% endif %}*/
/*               <!-- Add To Cart Button Starts -->*/
/*                 <button type="button" class="btn module-product-btn-cart animation rounded-3" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> {{ button_cart }}</button>*/
/*               <!-- Add To Cart Button Ends -->*/
/*               </div>*/
/*             <!-- Product Caption Ends -->*/
/*             </div>*/
/*           <!-- Product Module Ends -->*/
/*           </div>*/
/*         <!-- Product Col Ends -->*/
/*           {% if column_left and column_right and (i + 1) % 2 == 0 %}*/
/*             <div class="clearfix visible-md visible-sm"></div>*/
/*           {% elseif column_left or column_right and (i + 1) % 3 == 0 %}*/
/*             <div class="clearfix visible-md"></div>*/
/*           {% elseif (i + 1) % 4 == 0 %}*/
/*             <div class="clearfix visible-md"></div>*/
/*           {% endif %}*/
/*             {% set i = i + 1 %}*/
/*         {% endfor %}  */
/*         </div>*/
/*       <!-- Nested Row Ends -->*/
/*       </div>*/
/*     <!-- Related Products Ends -->*/
/*     {% endif %}*/
/*     {% if tags %}    */
/*     <!-- Tags Starts -->*/
/*       <p>*/
/*         {{ text_tags }}*/
/*         {% for i in 0..tags|length %}*/
/*           {% if i < (tags|length - 1) %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/*           {% else %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a> {% endif %}*/
/*         {% endfor %} */
/*       </p>*/
/*     <!-- Tags Ends -->*/
/*     {% endif %}*/
/*     {{ content_bottom }}*/
/*     </div>*/
/*   <!-- Content Area Ends -->    */
/*     {{ column_right }}*/
/*   </div>*/
/* <!-- Row Ends -->  */
/* </div>*/
/* <!-- Product Container Ends -->*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#button-cart').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/cart/add',*/
/* 		type: 'post',*/
/* 		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-cart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-cart').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if (json['error']['recurring']) {*/
/* 					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('.breadcrumb').after('<div class="alert alert-success alert-dismissible">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*         $('#cart > button').html('<img src="catalog/view/theme/mintleaf/image/icon/shopping-bag.png" alt="Search"><span id="cart-total" class="rounded-circle">' + json['total'][0] + json['total'][1] + '</span>');*/
/* */
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 				$('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/* 			}*/
/* 		},*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/* });*/
/* */
/* $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/* $('#button-review').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $("#form-review").serialize(),*/
/* 		beforeSend: function() {*/
/* 			$('#button-review').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-review').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('input[name=\'name\']').val('');*/
/* 				$('textarea[name=\'text\']').val('');*/
/* 				$('input[name=\'rating\']:checked').prop('checked', false);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).ready(function() {*/
/* 	$('.product-image-wrap').magnificPopup({*/
/* 		type:'image',*/
/* 		delegate: 'a',*/
/* 		gallery: {*/
/* 			enabled: true*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* {{ footer }} */
/* */
