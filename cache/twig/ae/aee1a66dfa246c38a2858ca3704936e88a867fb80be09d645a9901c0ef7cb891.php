<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_c723fed5fd5d875c43599a07c0620b5fe8169bc86c4af916d209b8f6cbec553a extends Twig_Template
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
        $context["feed_url"] = (((($this->getAttribute(($context["blog"] ?? null), "url", array()) == "/") || ($this->getAttribute(($context["blog"] ?? null), "url", array()) == ($context["base_url_relative"] ?? null)))) ? (((        // line 2
($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["blog"] ?? null), "slug", array()))) : ($this->getAttribute(        // line 3
($context["blog"] ?? null), "url", array())));
        // line 4
        $context["new_base_url"] = ((($this->getAttribute(($context["blog"] ?? null), "url", array()) == "/")) ? ("") : ($this->getAttribute(        // line 6
($context["blog"] ?? null), "url", array())));
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 9
            echo "  <div class=\"sidebar-content\">
    <h4>";
            // line 10
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.SIMPLE_SEARCH.HEADLINE");
            echo "</h4>
    ";
            // line 11
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 11)->display($context);
            // line 12
            echo "  </div>
";
        }
        // line 15
        echo "<div class=\"sidebar-content\">
  ";
        // line 16
        $context["content"] = $this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", array(0 => "/sidebar-markdown-widget"), "method"), "content", array());
        // line 17
        echo "  ";
        if (($context["content"] ?? null)) {
            // line 18
            echo "    ";
            echo ($context["content"] ?? null);
            echo "
  ";
        }
        // line 20
        echo "</div>
";
        // line 21
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 22
            echo "  <h4>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.RELATED_POSTS.HEADLINE");
            echo "</h4>
  ";
            // line 23
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 23)->display($context);
        }
        // line 25
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 26
            echo "  <div class=\"sidebar-content\">
    <h4>";
            // line 27
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.RANDOM_ARTICLE.HEADLINE");
            echo "</h4>
    <a class=\"button\" href=\"";
            // line 28
            echo ($context["base_url"] ?? null);
            echo "/random\">
      <i class=\"fa fa-retweet\"></i>
      ";
            // line 30
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY");
            echo "</a>
  </div>
";
        }
        // line 33
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 34
            echo "  <div class=\"sidebar-content\">
    <h4>";
            // line 35
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.POPULAR_TAGS.HEADLINE");
            echo "</h4>
    ";
            // line 36
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 36)->display(array_merge($context, array("base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag")));
            // line 37
            echo "  </div>
";
        }
        // line 39
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 40
            echo "  <div class=\"sidebar-content\">
    <h4>";
            // line 41
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.ARCHIVES.HEADLINE");
            echo "</h4>
    ";
            // line 42
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 42)->display(array_merge($context, array("base_url" => ($context["new_base_url"] ?? null))));
            // line 43
            echo "  </div>
";
        }
        // line 45
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 46
            echo "  <div class=\"sidebar-content syndicate\">
    <h4>";
            // line 47
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.SYNDICATE.HEADLINE");
            echo "</h4>
    <a class=\"button\" href=\"";
            // line 48
            echo ($context["feed_url"] ?? null);
            echo ".atom\">
      <i class=\"fa fa-rss-square\"></i>
      Atom 1.0</a>
    <a class=\"button\" href=\"";
            // line 51
            echo ($context["feed_url"] ?? null);
            echo ".rss\">
      <i class=\"fa fa-rss-square\"></i>
      RSS</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 51,  130 => 48,  126 => 47,  123 => 46,  121 => 45,  117 => 43,  115 => 42,  111 => 41,  108 => 40,  106 => 39,  102 => 37,  100 => 36,  96 => 35,  93 => 34,  91 => 33,  85 => 30,  80 => 28,  76 => 27,  73 => 26,  71 => 25,  68 => 23,  63 => 22,  61 => 21,  58 => 20,  52 => 18,  49 => 17,  47 => 16,  44 => 15,  40 => 12,  38 => 11,  34 => 10,  31 => 9,  29 => 8,  26 => 7,  24 => 6,  23 => 4,  21 => 3,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set feed_url = blog.url == '/' or blog.url == base_url_relative
  ? (base_url_relative ~ '/' ~ blog.slug)
  : blog.url %}
{% set new_base_url = blog.url == '/'
  ? ''
  : blog.url %}

{% if config.plugins.simplesearch.enabled %}
  <div class=\"sidebar-content\">
    <h4>{{ 'SIDEBAR.SIMPLE_SEARCH.HEADLINE'|t }}</h4>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
  </div>
{% endif %}
{# display sidebar markdown page - hibbittsdesign.org #}
<div class=\"sidebar-content\">
  {% set content = pages.find('/sidebar-markdown-widget').content %}
  {% if content %}
    {{ content }}
  {% endif %}
</div>
{% if config.plugins.relatedpages.enabled and related_pages | length > 0 %}
  <h4>{{ 'SIDEBAR.RELATED_POSTS.HEADLINE'|t }}</h4>
  {% include 'partials/relatedpages.html.twig' %}
{% endif %}
{% if config.plugins.random.enabled %}
  <div class=\"sidebar-content\">
    <h4>{{ 'SIDEBAR.RANDOM_ARTICLE.HEADLINE'|t }}</h4>
    <a class=\"button\" href=\"{{ base_url }}/random\">
      <i class=\"fa fa-retweet\"></i>
      {{ 'SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY'|t }}</a>
  </div>
{% endif %}
{% if config.plugins.taxonomylist.enabled %}
  <div class=\"sidebar-content\">
    <h4>{{ 'SIDEBAR.POPULAR_TAGS.HEADLINE'|t }}</h4>
    {% include 'partials/taxonomylist.html.twig' with {'base_url': new_base_url, 'taxonomy': 'tag'} %}
  </div>
{% endif %}
{% if config.plugins.archives.enabled %}
  <div class=\"sidebar-content\">
    <h4>{{ 'SIDEBAR.ARCHIVES.HEADLINE'|t }}</h4>
    {% include 'partials/archives.html.twig' with {'base_url': new_base_url} %}
  </div>
{% endif %}
{% if config.plugins.feed.enabled %}
  <div class=\"sidebar-content syndicate\">
    <h4>{{ 'SIDEBAR.SYNDICATE.HEADLINE'|t }}</h4>
    <a class=\"button\" href=\"{{ feed_url }}.atom\">
      <i class=\"fa fa-rss-square\"></i>
      Atom 1.0</a>
    <a class=\"button\" href=\"{{ feed_url }}.rss\">
      <i class=\"fa fa-rss-square\"></i>
      RSS</a>
  </div>
{% endif %}
", "partials/sidebar.html.twig", "/home/grav/www/html/user/themes/antimatter-open-publishing/templates/partials/sidebar.html.twig");
    }
}
