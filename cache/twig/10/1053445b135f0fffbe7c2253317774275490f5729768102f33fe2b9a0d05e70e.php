<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_d8b629773fbb3effc52c6ec22bf3300feaae7c8ab0c654013049e765e19569a5 extends Twig_Template
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
        echo "<div class=\"list-item h-entry\">

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
   <!-- <span class=\"list-blog-date\">
      <time class=\"dt-published\" datetime=\"";
        // line 10
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), " c");
        echo "\">
        <span>";
        // line 11
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d");
        echo "</span>
        <em>";
        // line 12
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "M");
        echo "</em>
      </time>
    </span>-->
    ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
            // line 16
            echo "      <h4 class=\"p-name\">
        ";
            // line 17
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
                // line 18
                echo "          <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\">
            <i class=\"fa fa-angle-double-right u-url\"></i>
          </a>
        ";
            }
            // line 22
            echo "        <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a>
      </h4>
    ";
        } else {
            // line 25
            echo "        <h4 class=\"p-name\"><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a></h4>
    ";
        }
        // line 27
        echo "
    ";
        // line 28
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
            // line 29
            echo "    <span class=\"tags\">
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 31
                echo "        <a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["blog"] ?? null), "url", array()), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\" class=\"p-category\">";
                echo $context["tag"];
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    </span>
    ";
        }
        // line 35
        echo "    ";
        if (($context["header_image"] ?? null)) {
            // line 36
            echo "      ";
            if (($context["header_image_file"] ?? null)) {
                // line 37
                echo "        ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), ($context["header_image_file"] ?? null), array(), "array");
                // line 38
                echo "      ";
            } else {
                // line 39
                echo "        ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
                // line 40
                echo "      ";
            }
            // line 41
            echo "      ";
            // line 42
            echo "      <img src=\"";
            echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", array(0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)), "method"), "url", array());
            echo "\" alt=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "alt_text", array());
            echo "\"/>
    ";
        }
        // line 44
        echo "
  </div>

  <div class=\"list-blog-padding\">

    ";
        // line 49
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
            // line 50
            echo "      <div class=\"e-content\">
        ";
            // line 51
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
      </div>
      ";
            // line 53
            if ( !($context["truncate"] ?? null)) {
                // line 54
                echo "        ";
                $context["show_prev_next"] = true;
                // line 55
                echo "      ";
            }
            // line 56
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
            // line 57
            echo "      <div class=\"p-summary e-content\">
          ";
            // line 58
            echo $this->getAttribute(($context["page"] ?? null), "summary", array());
            echo "
          <p><a href=\"";
            // line 59
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a></p>
      </div>
      ";
        } elseif (        // line 61
($context["truncate"] ?? null)) {
            // line 62
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 63
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
            <p><a href=\"";
            // line 64
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a></p>
        </div>
    ";
        } else {
            // line 67
            echo "
      ";
            // line 69
            echo "      ";
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "displaypostsummary", array()), "enabled", array())) {
                // line 70
                echo "        ";
                $context["content"] = twig_slice($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), twig_length_filter($this->env, $this->getAttribute(($context["page"] ?? null), "summary", array())));
                // line 71
                echo "      ";
            } else {
                // line 72
                echo "        ";
                $context["content"] = $this->getAttribute(($context["page"] ?? null), "content", array());
                // line 73
                echo "      ";
            }
            // line 74
            echo "
      <div class=\"e-content\">
        ";
            // line 76
            echo ($context["content"] ?? null);
            echo "
      </div>

      ";
            // line 79
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "comments", array()), "enabled", array())) {
                // line 80
                echo "        ";
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 80)->display($context);
                // line 81
                echo "      ";
            }
            // line 82
            echo "
      ";
            // line 83
            $context["show_prev_next"] = true;
            // line 84
            echo "    ";
        }
        // line 85
        echo "
    ";
        // line 86
        if (($context["show_prev_next"] ?? null)) {
            // line 87
            echo "
      ";
            // line 89
            echo "      <p class=\"prev-next\">
        ";
            // line 90
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
                // line 91
                echo "            <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
                echo "\">
              <i class=\"fa fa-chevron-left\"></i>
              ";
                // line 93
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.PREV_POST");
                echo "</a>
        ";
            }
            // line 95
            echo "
        ";
            // line 96
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
                // line 97
                echo "            <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
                echo "\">
              ";
                // line 98
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.NEXT_POST");
                echo "
              <i class=\"fa fa-chevron-right\"></i>
            </a>
        ";
            }
            // line 102
            echo "
      </p>

    ";
        }
        // line 106
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 106,  287 => 102,  280 => 98,  275 => 97,  273 => 96,  270 => 95,  265 => 93,  259 => 91,  257 => 90,  254 => 89,  251 => 87,  249 => 86,  246 => 85,  243 => 84,  241 => 83,  238 => 82,  235 => 81,  232 => 80,  230 => 79,  224 => 76,  220 => 74,  217 => 73,  214 => 72,  211 => 71,  208 => 70,  205 => 69,  202 => 67,  194 => 64,  190 => 63,  187 => 62,  185 => 61,  178 => 59,  174 => 58,  171 => 57,  168 => 56,  165 => 55,  162 => 54,  160 => 53,  155 => 51,  152 => 50,  150 => 49,  143 => 44,  135 => 42,  133 => 41,  130 => 40,  127 => 39,  124 => 38,  121 => 37,  118 => 36,  115 => 35,  111 => 33,  97 => 31,  93 => 30,  90 => 29,  88 => 28,  85 => 27,  77 => 25,  68 => 22,  60 => 18,  58 => 17,  55 => 16,  53 => 15,  47 => 12,  43 => 11,  39 => 10,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"list-item h-entry\">

  {% set header_image = page.header.header_image | defined(true) %}
  {% set header_image_width = page.header.header_image_width | defined(900) %}
  {% set header_image_height = page.header.header_image_height | defined(300) %}
  {% set header_image_file = page.header.header_image_file %}

  <div class=\"list-blog-header\">
   <!-- <span class=\"list-blog-date\">
      <time class=\"dt-published\" datetime=\"{{ page.date|date(\" c\") }}\">
        <span>{{ page.date|date(\"d\") }}</span>
        <em>{{ page.date|date(\"M\") }}</em>
      </time>
    </span>-->
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

    {% if page.taxonomy.tag %}
    <span class=\"tags\">
        {% for tag in page.taxonomy.tag %}
        <a href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">{{ tag }}</a>
        {% endfor %}
    </span>
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
      <div class=\"p-summary e-content\">
          {{ page.summary }}
          <p><a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>
      </div>
      {% elseif truncate %}
        <div class=\"p-summary e-content\">
            {{ page.content }}
            <p><a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>
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
", "partials/blog_item.html.twig", "/home/grav/www/html/user/themes/niazi/templates/partials/blog_item.html.twig");
    }
}
