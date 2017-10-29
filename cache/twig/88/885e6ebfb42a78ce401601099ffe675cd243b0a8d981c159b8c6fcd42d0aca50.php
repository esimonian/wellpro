<?php

/* category.html.twig */
class __TwigTemplate_3f14e0cad2951a4e78649d5f266f2141c8333325b3031b0f36a72207fac0c866 extends Twig_Template
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
        $this->loadTemplate("category.html.twig", "category.html.twig", 1, "1617842583")->display($context);
    }

    public function getTemplateName()
    {
        return "category.html.twig";
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
\t  {% else %}
          <div class=\"blog-header\">
          {% endif %}
        </div>
      {% else %}
        <div style=\"margin-bottom: -16px;\"></div>
      {% endif %}

      {% if config.plugins.breadcrumbs.enabled %}
        {% include 'partials/breadcrumbs.html.twig' %}
      {% endif %}

      <div class=\"content-wrapperblog-content-list grid pure-g\">
        <div id=\"listing\" class=\"category block pure-u-1-1 h-feed\">
\t\t\t{{page.content}}
          {# check if taxonomy and archive parm is false - hibbittsdesign.org #}
          {% if not(grav.uri.param('tag')) and (not(grav.uri.param('archives_month')) and (not(grav.uri.param('page')))) %}

            {# display posts with 'featured' tag - hibbittsdesign.org #}
            {% for child in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
              {% include 'partials/category_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
            {% endfor %}

            {# display posts without 'featured' tag - hibbittsdesign.org #}
            {% for child in collection %}
              {% if \"featured\" not in child.taxonomy['tag'] %}
                {% include 'partials/category_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
              {% endif %}
            {% endfor %}

          {% else %}

            {% for child in collection %}
              {% include 'partials/category_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
            {% endfor %}

          {% endif %}

          {% if config.plugins.pagination.enabled and collection.params.pagination %}
            {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination': collection.params.pagination} %}
          {% endif %}

        </div>

        {# check content display flag - hibbittsdesign.org #}
        {% if not(grav.uri.param('chromeless')) and (not theme_config.chromeless.enabled) %}


        {% endif %}

      </div>
    {% endblock %}

  {% endembed %}
", "category.html.twig", "/home/grav/www/html/user/themes/niazi/templates/category.html.twig");
    }
}


/* category.html.twig */
class __TwigTemplate_3f14e0cad2951a4e78649d5f266f2141c8333325b3031b0f36a72207fac0c866_1617842583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "category.html.twig", 1);
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
            } else {
                // line 17
                echo "          <div class=\"blog-header\">
          ";
            }
            // line 19
            echo "        </div>
      ";
        } else {
            // line 21
            echo "        <div style=\"margin-bottom: -16px;\"></div>
      ";
        }
        // line 23
        echo "
      ";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 25
            echo "        ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "category.html.twig", 25)->display($context);
            // line 26
            echo "      ";
        }
        // line 27
        echo "
      <div class=\"content-wrapperblog-content-list grid pure-g\">
        <div id=\"listing\" class=\"category block pure-u-1-1 h-feed\">
\t\t\t";
        // line 30
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
          ";
        // line 32
        echo "          ";
        if (( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "tag"), "method") && ( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "archives_month"), "method") &&  !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "page"), "method")))) {
            // line 33
            echo "
            ";
            // line 35
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
                // line 36
                echo "              ";
                $this->loadTemplate("partials/category_item.html.twig", "category.html.twig", 36)->display(array_merge($context, array("blog" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true)));
                // line 37
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
            // line 38
            echo "
            ";
            // line 40
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
                // line 41
                echo "              ";
                if (!twig_in_filter("featured", $this->getAttribute($this->getAttribute($context["child"], "taxonomy", array()), "tag", array(), "array"))) {
                    // line 42
                    echo "                ";
                    $this->loadTemplate("partials/category_item.html.twig", "category.html.twig", 42)->display(array_merge($context, array("blog" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true)));
                    // line 43
                    echo "              ";
                }
                // line 44
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
            // line 45
            echo "
          ";
        } else {
            // line 47
            echo "
            ";
            // line 48
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
                // line 49
                echo "              ";
                $this->loadTemplate("partials/category_item.html.twig", "category.html.twig", 49)->display(array_merge($context, array("blog" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true)));
                // line 50
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
            // line 51
            echo "
          ";
        }
        // line 53
        echo "
          ";
        // line 54
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 55
            echo "            ";
            $this->loadTemplate("partials/pagination.html.twig", "category.html.twig", 55)->display(array_merge($context, array("base_url" => $this->getAttribute(($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 56
            echo "          ";
        }
        // line 57
        echo "
        </div>

        ";
        // line 61
        echo "        ";
        if (( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "chromeless"), "method") &&  !$this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "chromeless", array()), "enabled", array()))) {
            // line 62
            echo "

        ";
        }
        // line 65
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 65,  354 => 62,  351 => 61,  346 => 57,  343 => 56,  340 => 55,  338 => 54,  335 => 53,  331 => 51,  317 => 50,  314 => 49,  297 => 48,  294 => 47,  290 => 45,  276 => 44,  273 => 43,  270 => 42,  267 => 41,  249 => 40,  246 => 38,  232 => 37,  229 => 36,  211 => 35,  208 => 33,  205 => 32,  201 => 30,  196 => 27,  193 => 26,  190 => 25,  188 => 24,  185 => 23,  181 => 21,  177 => 19,  173 => 17,  168 => 15,  163 => 14,  161 => 13,  158 => 12,  155 => 11,  152 => 9,  149 => 8,  146 => 6,  143 => 5,  139 => 1,  137 => 3,  19 => 1,);
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
\t  {% else %}
          <div class=\"blog-header\">
          {% endif %}
        </div>
      {% else %}
        <div style=\"margin-bottom: -16px;\"></div>
      {% endif %}

      {% if config.plugins.breadcrumbs.enabled %}
        {% include 'partials/breadcrumbs.html.twig' %}
      {% endif %}

      <div class=\"content-wrapperblog-content-list grid pure-g\">
        <div id=\"listing\" class=\"category block pure-u-1-1 h-feed\">
\t\t\t{{page.content}}
          {# check if taxonomy and archive parm is false - hibbittsdesign.org #}
          {% if not(grav.uri.param('tag')) and (not(grav.uri.param('archives_month')) and (not(grav.uri.param('page')))) %}

            {# display posts with 'featured' tag - hibbittsdesign.org #}
            {% for child in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
              {% include 'partials/category_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
            {% endfor %}

            {# display posts without 'featured' tag - hibbittsdesign.org #}
            {% for child in collection %}
              {% if \"featured\" not in child.taxonomy['tag'] %}
                {% include 'partials/category_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
              {% endif %}
            {% endfor %}

          {% else %}

            {% for child in collection %}
              {% include 'partials/category_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
            {% endfor %}

          {% endif %}

          {% if config.plugins.pagination.enabled and collection.params.pagination %}
            {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination': collection.params.pagination} %}
          {% endif %}

        </div>

        {# check content display flag - hibbittsdesign.org #}
        {% if not(grav.uri.param('chromeless')) and (not theme_config.chromeless.enabled) %}


        {% endif %}

      </div>
    {% endblock %}

  {% endembed %}
", "category.html.twig", "/home/grav/www/html/user/themes/niazi/templates/category.html.twig");
    }
}
