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
            'bottom' => array($this, 'block_bottom'),
            'bottomjavascripts' => array($this, 'block_bottomjavascripts'),
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
        // line 35
        echo "</head>
<body id=\"top\" class=\"";
        // line 36
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">

";
        // line 38
        $this->displayBlock('header', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('bottom', $context, $blocks);
        // line 61
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
        // line 32
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => ($context["bottom"] ?? null)), "method");
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
        echo "        {}% do assets.addCss('theme://css/animate.css', 94) %}

    ";
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery.min.js", 1 => 100), "method");
        // line 31
        echo "    ";
    }

    // line 38
    public function block_header($context, array $blocks = array())
    {
        // line 39
        echo "  ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 39)->display($context);
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 43
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "        </div>
    </section>
";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        // line 51
        echo "
";
    }

    // line 54
    public function block_bottom($context, array $blocks = array())
    {
        // line 55
        echo "  ";
        $this->displayBlock('bottomjavascripts', $context, $blocks);
    }

    public function block_bottomjavascripts($context, array $blocks = array())
    {
        // line 56
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "bootstrap.min.js"), "method");
        // line 57
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "plugins.js"), "method");
        // line 58
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "scripts.js"), "method");
        // line 59
        echo "    ";
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
        return array (  216 => 59,  213 => 58,  210 => 57,  207 => 56,  200 => 55,  197 => 54,  192 => 51,  189 => 50,  184 => 45,  178 => 46,  176 => 45,  172 => 43,  169 => 42,  164 => 39,  161 => 38,  157 => 31,  154 => 30,  151 => 29,  145 => 24,  142 => 23,  139 => 22,  136 => 21,  133 => 20,  130 => 19,  127 => 18,  124 => 17,  121 => 16,  113 => 32,  111 => 29,  105 => 27,  103 => 16,  98 => 14,  94 => 13,  91 => 12,  89 => 11,  78 => 7,  75 => 6,  72 => 5,  65 => 61,  63 => 54,  60 => 53,  58 => 50,  55 => 49,  53 => 42,  50 => 41,  48 => 38,  43 => 36,  40 => 35,  38 => 5,  33 => 3,  30 => 2,  28 => 1,);
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
        {}% do assets.addCss('theme://css/animate.css', 94) %}

    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery.min.js', 100) %}
    {% endblock %}
    {{ assets.js(bottom) }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

{% block header %}
  {% include 'partials/header.html.twig' %}
{% endblock %}

{% block body %}
    <section id=\"body\">
        <div class=\"wrapper padding\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}

{% block footer %}

{% endblock %}

{% block bottom %}
  {% block bottomjavascripts %}
        {% do assets.addJs('bootstrap.min.js') %}
        {% do assets.addJs('plugins.js') %}
        {% do assets.addJs('scripts.js') %}
    {% endblock %}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/Users/elizabethsimonian/freelance/wellpro/user/themes/soho/templates/partials/base.html.twig");
    }
}
