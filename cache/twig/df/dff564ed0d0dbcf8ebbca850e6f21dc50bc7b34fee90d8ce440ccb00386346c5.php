<?php

/* blog.html.twig */
class __TwigTemplate_9510a59f20c75783b3eef967d2ef30bc544b90e96fe1018d1c1545da811bc83b extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "586344287")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

  {% set collection = page.collection() %}

  {% block content %}

    {# check content display flag - hibbittsdesign.org #}
    {% if not(grav.uri.param('chromeless')) and (not theme_config.chromeless.enabled) %}

      {# display blog header image without any visual effects - hibbittsdesign.org #}
      {% set blog_image = page.media.images | first %}

      {% if blog_image %}
        <div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\">
      \t\t<h1>{{page.title}}</h1>  
\t  {% elseif page.slug == 'blog'%}
\t  \t<div>
\t  {% else %}
          <div class=\"blog-header\">
          {% endif %}
        </div>
      {% else %}
        <div style=\"margin-bottom: -16px;\"></div>
      {% endif %}

      {% if config.plugins.breadcrumbs.enabled and page.slug != 'blog'%}
        {% include 'partials/breadcrumbs.html.twig' %}
      {% endif %}

      <div class=\"content-wrapper blog-content-list grid pure-g\">
        <div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t{{page.content}}
          {# check if taxonomy and archive parm is false - hibbittsdesign.org #}
          {% if not(grav.uri.param('tag')) and (not(grav.uri.param('archives_month')) and (not(grav.uri.param('page')))) %}

            {# display posts with 'featured' tag - hibbittsdesign.org #}
            {% for child in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
              {% include 'partials/blog_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
            {% endfor %}

            {# display posts without 'featured' tag - hibbittsdesign.org #}
            {% for child in collection %}
              {% if \"featured\" not in child.taxonomy['tag'] %}
                {% include 'partials/blog_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
              {% endif %}
            {% endfor %}

          {% else %}

            {% for child in collection %}
              {% include 'partials/blog_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
            {% endfor %}

          {% endif %}

          {% if config.plugins.pagination.enabled and collection.params.pagination %}
            {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination': collection.params.pagination} %}
          {% endif %}

        </div>

        {# check content display flag - hibbittsdesign.org #}
        {% if not(grav.uri.param('chromeless')) and (not theme_config.chromeless.enabled) %}

          <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
            {% include 'partials/sidebar.html.twig' with {'blog': page} %}
          </div>

        {% endif %}

      </div>
    {% endblock %}

  {% endembed %}
", "blog.html.twig", "/home/grav/www/html/user/themes/niazi/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_9510a59f20c75783b3eef967d2ef30bc544b90e96fe1018d1c1545da811bc83b_586344287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 8
        echo "    ";
        if (( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "chromeless"), "method") &&  !$this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "chromeless", array()), "enabled", array()))) {
            // line 9
            echo "
      ";
            // line 11
            echo "      ";
            $context["blog_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
            // line 12
            echo "
      ";
            // line 13
            if (($context["blog_image"] ?? null)) {
                // line 14
                echo "        <div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url(";
                echo $this->getAttribute(($context["blog_image"] ?? null), "url", array());
                echo ");\">
      \t\t<h1>";
                // line 15
                echo $this->getAttribute(($context["page"] ?? null), "title", array());
                echo "</h1>  
\t  ";
            } elseif (($this->getAttribute(            // line 16
($context["page"] ?? null), "slug", array()) == "blog")) {
                // line 17
                echo "\t  \t<div>
\t  ";
            } else {
                // line 19
                echo "          <div class=\"blog-header\">
          ";
            }
            // line 21
            echo "        </div>
      ";
        } else {
            // line 23
            echo "        <div style=\"margin-bottom: -16px;\"></div>
      ";
        }
        // line 25
        echo "
      ";
        // line 26
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array()) && ($this->getAttribute(($context["page"] ?? null), "slug", array()) != "blog"))) {
            // line 27
            echo "        ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 27)->display($context);
            // line 28
            echo "      ";
        }
        // line 29
        echo "
      <div class=\"content-wrapper blog-content-list grid pure-g\">
        <div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t";
        // line 32
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
          ";
        // line 34
        echo "          ";
        if (( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "tag"), "method") && ( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "archives_month"), "method") &&  !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "page"), "method")))) {
            // line 35
            echo "
            ";
            // line 37
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", array(0 => array("tag" => "featured")), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 38
                echo "              ";
                $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 38)->display(array_merge($context, array("blog" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true)));
                // line 39
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
            ";
            // line 42
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 43
                echo "              ";
                if (!twig_in_filter("featured", $this->getAttribute($this->getAttribute($context["child"], "taxonomy", array()), "tag", array(), "array"))) {
                    // line 44
                    echo "                ";
                    $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 44)->display(array_merge($context, array("blog" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true)));
                    // line 45
                    echo "              ";
                }
                // line 46
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
          ";
        } else {
            // line 49
            echo "
            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 51
                echo "              ";
                $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 51)->display(array_merge($context, array("blog" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true)));
                // line 52
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
          ";
        }
        // line 55
        echo "
          ";
        // line 56
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 57
            echo "            ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 57)->display(array_merge($context, array("base_url" => $this->getAttribute(($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 58
            echo "          ";
        }
        // line 59
        echo "
        </div>

        ";
        // line 63
        echo "        ";
        if (( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "chromeless"), "method") &&  !$this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "chromeless", array()), "enabled", array()))) {
            // line 64
            echo "
          <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
            ";
            // line 66
            $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 66)->display(array_merge($context, array("blog" => ($context["page"] ?? null))));
            // line 67
            echo "          </div>

        ";
        }
        // line 70
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 70,  370 => 67,  368 => 66,  364 => 64,  361 => 63,  356 => 59,  353 => 58,  350 => 57,  348 => 56,  345 => 55,  341 => 53,  327 => 52,  324 => 51,  307 => 50,  304 => 49,  300 => 47,  286 => 46,  283 => 45,  280 => 44,  277 => 43,  259 => 42,  256 => 40,  242 => 39,  239 => 38,  221 => 37,  218 => 35,  215 => 34,  211 => 32,  206 => 29,  203 => 28,  200 => 27,  198 => 26,  195 => 25,  191 => 23,  187 => 21,  183 => 19,  179 => 17,  177 => 16,  173 => 15,  168 => 14,  166 => 13,  163 => 12,  160 => 11,  157 => 9,  154 => 8,  151 => 6,  148 => 5,  144 => 1,  142 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

  {% set collection = page.collection() %}

  {% block content %}

    {# check content display flag - hibbittsdesign.org #}
    {% if not(grav.uri.param('chromeless')) and (not theme_config.chromeless.enabled) %}

      {# display blog header image without any visual effects - hibbittsdesign.org #}
      {% set blog_image = page.media.images | first %}

      {% if blog_image %}
        <div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\">
      \t\t<h1>{{page.title}}</h1>  
\t  {% elseif page.slug == 'blog'%}
\t  \t<div>
\t  {% else %}
          <div class=\"blog-header\">
          {% endif %}
        </div>
      {% else %}
        <div style=\"margin-bottom: -16px;\"></div>
      {% endif %}

      {% if config.plugins.breadcrumbs.enabled and page.slug != 'blog'%}
        {% include 'partials/breadcrumbs.html.twig' %}
      {% endif %}

      <div class=\"content-wrapper blog-content-list grid pure-g\">
        <div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t{{page.content}}
          {# check if taxonomy and archive parm is false - hibbittsdesign.org #}
          {% if not(grav.uri.param('tag')) and (not(grav.uri.param('archives_month')) and (not(grav.uri.param('page')))) %}

            {# display posts with 'featured' tag - hibbittsdesign.org #}
            {% for child in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
              {% include 'partials/blog_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
            {% endfor %}

            {# display posts without 'featured' tag - hibbittsdesign.org #}
            {% for child in collection %}
              {% if \"featured\" not in child.taxonomy['tag'] %}
                {% include 'partials/blog_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
              {% endif %}
            {% endfor %}

          {% else %}

            {% for child in collection %}
              {% include 'partials/blog_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
            {% endfor %}

          {% endif %}

          {% if config.plugins.pagination.enabled and collection.params.pagination %}
            {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination': collection.params.pagination} %}
          {% endif %}

        </div>

        {# check content display flag - hibbittsdesign.org #}
        {% if not(grav.uri.param('chromeless')) and (not theme_config.chromeless.enabled) %}

          <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
            {% include 'partials/sidebar.html.twig' with {'blog': page} %}
          </div>

        {% endif %}

      </div>
    {% endblock %}

  {% endembed %}
", "blog.html.twig", "/home/grav/www/html/user/themes/niazi/templates/blog.html.twig");
    }
}
