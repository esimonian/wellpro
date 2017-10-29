<?php

/* partials/category_item.html.twig */
class __TwigTemplate_eafaeb224296936dda5bc3960e75f0f093613b9bc8e1740f8bfbd7f4fa3631df extends Twig_Template
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
        echo "<div class=\"pure-u-11-24 list-item h-entry\">

  ";
        // line 3
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image", array()), true);
        // line 4
        echo "  ";
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_width", array()), 900);
        // line 5
        echo "  ";
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_height", array()), 300);
        // line 6
        echo "  ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_file", array());
        // line 7
        echo "
  <div class=\"list-blog-header\">
    ";
        // line 9
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
            // line 10
            echo "      <h4 class=\"p-name\">
        ";
            // line 11
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
                // line 12
                echo "          <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\">
            <i class=\"fa fa-angle-double-right u-url\"></i>
          </a>
        ";
            }
            // line 16
            echo "        <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a>
      </h4>
    ";
        } else {
            // line 19
            echo "        <h4 class=\"p-name\"><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a></h4>
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if (($context["header_image"] ?? null)) {
            // line 23
            echo "      ";
            if (($context["header_image_file"] ?? null)) {
                // line 24
                echo "        ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), ($context["header_image_file"] ?? null), array(), "array");
                // line 25
                echo "      ";
            } else {
                // line 26
                echo "        ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
                // line 27
                echo "      ";
            }
            // line 28
            echo "      ";
            // line 29
            echo "      <img src=\"";
            echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", array(0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)), "method"), "url", array());
            echo "\" alt=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "alt_text", array());
            echo "\"/>
    ";
        }
        // line 31
        echo "
  </div>

  <div class=\"list-blog-padding\">

    ";
        // line 36
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
            // line 37
            echo "      <div class=\"e-content\">
        ";
            // line 38
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
      </div>
      ";
            // line 40
            if ( !($context["truncate"] ?? null)) {
                // line 41
                echo "        ";
                $context["show_prev_next"] = true;
                // line 42
                echo "      ";
            }
            // line 43
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
            // line 44
            echo "      ";
        } elseif (($context["truncate"] ?? null)) {
            // line 45
            echo "        </div>
    ";
        } else {
            // line 47
            echo "
      ";
            // line 49
            echo "      ";
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "displaypostsummary", array()), "enabled", array())) {
                // line 50
                echo "        ";
                $context["content"] = twig_slice($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), twig_length_filter($this->env, $this->getAttribute(($context["page"] ?? null), "summary", array())));
                // line 51
                echo "      ";
            } else {
                // line 52
                echo "        ";
                $context["content"] = $this->getAttribute(($context["page"] ?? null), "content", array());
                // line 53
                echo "      ";
            }
            // line 54
            echo "
      <div class=\"e-content\">
        ";
            // line 56
            echo ($context["content"] ?? null);
            echo "
      </div>

      ";
            // line 59
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "comments", array()), "enabled", array())) {
                // line 60
                echo "        ";
                $this->loadTemplate("partials/comments.html.twig", "partials/category_item.html.twig", 60)->display($context);
                // line 61
                echo "      ";
            }
            // line 62
            echo "
      ";
            // line 63
            $context["show_prev_next"] = true;
            // line 64
            echo "    ";
        }
        // line 65
        echo "
    ";
        // line 66
        if (($context["show_prev_next"] ?? null)) {
            // line 67
            echo "
      ";
            // line 69
            echo "      <p class=\"prev-next\">
        ";
            // line 70
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
                // line 71
                echo "            <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
                echo "\">
              <i class=\"fa fa-chevron-left\"></i>
              ";
                // line 73
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.PREV_POST");
                echo "</a>
        ";
            }
            // line 75
            echo "
        ";
            // line 76
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
                // line 77
                echo "            <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
                echo "\">
              ";
                // line 78
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.NEXT_POST");
                echo "
              <i class=\"fa fa-chevron-right\"></i>
            </a>
        ";
            }
            // line 82
            echo "
      </p>

    ";
        }
        // line 86
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/category_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 86,  220 => 82,  213 => 78,  208 => 77,  206 => 76,  203 => 75,  198 => 73,  192 => 71,  190 => 70,  187 => 69,  184 => 67,  182 => 66,  179 => 65,  176 => 64,  174 => 63,  171 => 62,  168 => 61,  165 => 60,  163 => 59,  157 => 56,  153 => 54,  150 => 53,  147 => 52,  144 => 51,  141 => 50,  138 => 49,  135 => 47,  131 => 45,  128 => 44,  125 => 43,  122 => 42,  119 => 41,  117 => 40,  112 => 38,  109 => 37,  107 => 36,  100 => 31,  92 => 29,  90 => 28,  87 => 27,  84 => 26,  81 => 25,  78 => 24,  75 => 23,  73 => 22,  70 => 21,  62 => 19,  53 => 16,  45 => 12,  43 => 11,  40 => 10,  38 => 9,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"pure-u-11-24 list-item h-entry\">

  {% set header_image = page.header.header_image | defined(true) %}
  {% set header_image_width = page.header.header_image_width | defined(900) %}
  {% set header_image_height = page.header.header_image_height | defined(300) %}
  {% set header_image_file = page.header.header_image_file %}

  <div class=\"list-blog-header\">
    {% if page.header.link %}
      <h4 class=\"p-name\">
        {% if page.header.continue_link is not sameas(false) %}
          <a href=\"{{ page.url }}\">
            <i class=\"fa fa-angle-double-right u-url\"></i>
          </a>
        {% endif %}
        <a href=\"{{ page.header.link }}\" class=\"u-url\">{{ page.title }}</a>
      </h4>
    {% else %}
        <h4 class=\"p-name\"><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.title }}</a></h4>
    {% endif %}

    {% if header_image %}
      {% if header_image_file %}
        {% set header_image_media = page.media.images[header_image_file] %}
      {% else %}
        {% set header_image_media = page.media.images | first %}
      {% endif %}
      {# changed image display method to support ALT image tag - hibbittsdesign.org #}
      <img src=\"{{ header_image_media.cropZoom(header_image_width, header_image_height).url }}\" alt=\"{{ page.header.alt_text }}\"/>
    {% endif %}

  </div>

  <div class=\"list-blog-padding\">

    {% if page.header.continue_link is sameas(false) %}
      <div class=\"e-content\">
        {{ page.content }}
      </div>
      {% if not truncate %}
        {% set show_prev_next = true %}
      {% endif %}
    {% elseif truncate and page.summary != page.content %}
      {% elseif truncate %}
        </div>
    {% else %}

      {# check to hide post summary on page - hibbittsdesign.org #}
      {% if theme_config.displaypostsummary.enabled %}
        {% set content = page.content | slice(page.summary | length) %}
      {% else %}
        {% set content = page.content %}
      {% endif %}

      <div class=\"e-content\">
        {{ content }}
      </div>

      {% if config.plugins.comments.enabled %}
        {% include 'partials/comments.html.twig' %}
      {% endif %}

      {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

      {# reversed order of buttons - hibbittsdesign.org #}
      <p class=\"prev-next\">
        {% if not page.isLast %}
            <a class=\"button\" href=\"{{ page.prevSibling.url }}\">
              <i class=\"fa fa-chevron-left\"></i>
              {{ 'BLOG.ITEM.PREV_POST'|t }}</a>
        {% endif %}

        {% if not page.isFirst %}
            <a class=\"button\" href=\"{{ page.nextSibling.url }}\">
              {{ 'BLOG.ITEM.NEXT_POST'|t }}
              <i class=\"fa fa-chevron-right\"></i>
            </a>
        {% endif %}

      </p>

    {% endif %}

  </div>
</div>
", "partials/category_item.html.twig", "/home/grav/www/html/user/themes/niazi/templates/partials/category_item.html.twig");
    }
}
