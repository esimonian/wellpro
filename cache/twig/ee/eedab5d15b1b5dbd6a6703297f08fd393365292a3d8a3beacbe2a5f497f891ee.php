<?php

/* partials/base.html.twig */
class __TwigTemplate_7e10477ef266a55fbd561c2431f980f5fc5612122a07f613e9d6d55894ec8d82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "</head>
<body id=\"top\">
  <!-- Preloader -->
  <div class=\"loader-mask\">
    <div class=\"loader\">
      <div></div>
      <div></div>
    </div>
  </div>

  <div class=\"main-wrapper oh\">
    ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 52
        echo "    <div class=\"content-wrapper oh\">
      ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "

</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 100), "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/bootstrap.min.css", 1 => 99), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-icons.css", 1 => 98), "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/sliders.css", 1 => 97), "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/style.css", 1 => 96), "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/responsive.css", 1 => 95), "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/spacings.css", 1 => 94), "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/animate.css", 1 => 94), "method");
        // line 25
        echo "
    ";
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.min.js", 1 => 100), "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/bootstrap.min.js"), "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/plugins.js"), "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/scripts.js"), "method");
        // line 34
        echo "    ";
    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        // line 50
        echo "      ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 50)->display($context);
        // line 51
        echo "    ";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 54
        echo "        <main class=\"page-content\" aria-label=\"Content\">
          <div class=\"wrapper\">
            ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "          </div> <!-- end content wrapper -->
    </div> <!-- end main wrapper -->
  </div>
        </main>
      ";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        // line 64
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 64,  203 => 63,  198 => 56,  190 => 57,  188 => 56,  184 => 54,  181 => 53,  177 => 51,  174 => 50,  171 => 49,  167 => 34,  164 => 33,  161 => 32,  158 => 31,  155 => 30,  152 => 29,  147 => 25,  144 => 24,  141 => 23,  138 => 22,  135 => 21,  132 => 20,  129 => 19,  126 => 18,  123 => 17,  120 => 16,  112 => 35,  110 => 29,  104 => 27,  102 => 16,  97 => 14,  93 => 13,  90 => 12,  88 => 11,  77 => 7,  74 => 6,  71 => 5,  63 => 66,  61 => 63,  58 => 62,  56 => 53,  53 => 52,  51 => 49,  38 => 38,  36 => 5,  31 => 3,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 100) %}
        {% do assets.addCss('theme://css/bootstrap.min.css', 99) %}
        {% do assets.addCss('theme://css/font-icons.css', 98) %}
        {% do assets.addCss('theme://css/sliders.css', 97) %}
        {% do assets.addCss('theme://css/style.css', 96) %}
        {% do assets.addCss('theme://css/responsive.css', 95) %}
        {% do assets.addCss('theme://css/spacings.css', 94) %}
        {% do assets.addCss('theme://css/animate.css', 94) %}

    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('theme://js/jquery.min.js', 100) %}
        {% do assets.addJs('theme://js/bootstrap.min.js') %}
        {% do assets.addJs('theme://js/plugins.js') %}
        {% do assets.addJs('theme://js/scripts.js') %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\">
  <!-- Preloader -->
  <div class=\"loader-mask\">
    <div class=\"loader\">
      <div></div>
      <div></div>
    </div>
  </div>

  <div class=\"main-wrapper oh\">
    {% block header %}
      {% include 'partials/header.html.twig' %}
    {% endblock %}
    <div class=\"content-wrapper oh\">
      {% block body %}
        <main class=\"page-content\" aria-label=\"Content\">
          <div class=\"wrapper\">
            {% block content %}{% endblock %}
          </div> <!-- end content wrapper -->
    </div> <!-- end main wrapper -->
  </div>
        </main>
      {% endblock %}

{% block footer %}

{% endblock %}


</body>
</html>
", "partials/base.html.twig", "/Users/elizabethsimonian/freelance/wellpro/user/themes/soho/templates/partials/base.html.twig");
    }
}
