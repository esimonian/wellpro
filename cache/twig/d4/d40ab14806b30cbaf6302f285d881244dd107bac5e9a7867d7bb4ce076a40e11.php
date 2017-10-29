<?php

/* partials/base.html.twig */
class __TwigTemplate_fe6d2133f1024aba3d8c5fe61f8e68e3b30999c46982602195ed0d73da7ccb38 extends Twig_Template
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
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
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
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 42
        echo "</head>

    <body id=\"top\" class=\"";
        // line 44
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">

      ";
        // line 47
        echo "      <h1 class=\"hidden\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>

      <div id=\"sb-site\">

        ";
        // line 51
        echo " ";
        if (( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "chromeless"), "method") &&  !$this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "chromeless", array()), "enabled", array()))) {
            echo " ";
            $this->displayBlock('header', $context, $blocks);
            // line 61
            echo " ";
            $this->displayBlock('showcase', $context, $blocks);
            echo " ";
        } else {
            // line 62
            echo "        <div style=\"margin-bottom: -130px;\"></div>
        ";
        }
        // line 63
        echo " ";
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo " ";
        echo " ";
        if (( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "chromeless"), "method") &&  !$this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "chromeless", array()), "enabled", array()))) {
            echo " ";
            $this->displayBlock('footer', $context, $blocks);
            // line 85
            echo " ";
        }
        // line 86
        echo "
      </div>
      <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
          ";
        // line 90
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 90)->display($context);
        // line 91
        echo "        </div>
      </div>
      ";
        // line 93
        $this->displayBlock('bottom', $context, $blocks);
        // line 105
        echo "    </body>

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
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

      ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

  ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css", 1 => 104), "method");
        // line 15
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 103), "method");
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/template.css", 1 => 102), "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/theme.css", 1 => 100), "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 101), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/slidebars.min.css"), "method");
        // line 21
        echo "
        ";
        // line 22
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 10))) {
            // line 23
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 24
            echo "        ";
        }
        // line 25
        echo "        ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 26
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 27
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 28
            echo "      ";
        }
        // line 29
        echo "  ";
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        // line 33
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 102), "method");
        // line 34
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 101), "method");
        // line 35
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/my.js", 1 => 100), "method");
        // line 36
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/antimatter.js"), "method");
        // line 37
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 38
        echo "  ";
    }

    // line 51
    public function block_header($context, array $blocks = array())
    {
        // line 52
        echo "        <header id=\"header\">
          <div id=\"logo\">
            <h3><a href=\"";
        // line 54
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\"><img src=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/wellprologo2017.png");
        echo "\" /></a></h3>
          </div>
          <div id=\"navbar\">
            ";
        // line 57
        $this->displayBlock('header_extra', $context, $blocks);
        echo " ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            echo " ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 57)->display($context);
            echo " ";
        }
        echo " ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 58
        echo "            <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
          </div>
        </header>
        ";
    }

    // line 57
    public function block_header_extra($context, array $blocks = array())
    {
    }

    public function block_header_navigation($context, array $blocks = array())
    {
        echo " ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 57)->display($context);
        echo " ";
    }

    // line 61
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        // line 64
        echo "        <section id=\"body\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
          ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        echo " ";
        echo " ";
        echo " ";
        if (($this->getAttribute(($context["theme_config"] ?? null), "display_of_git_sync_repo_link", array()) == "page")) {
            // line 66
            echo "          <div class=\"content-wrapper\">
            <p>";
            // line 67
            $this->loadTemplate("partials/git_sync_repo_link.html.twig", "partials/base.html.twig", 67)->display($context);
            echo "</p>
          </div>
          ";
        }
        // line 69
        echo " ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "enabled", array())) {
            // line 70
            echo "          <div class=\"content-wrapper\">
            <p>";
            // line 71
            $this->loadTemplate("partials/creative_commons_license.html.twig", "partials/base.html.twig", 71)->display($context);
            echo "</p>
          </div>
          ";
        }
        // line 74
        echo "        </section>
        ";
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        // line 76
        echo "        <footer id=\"footer\">
          <div class=\"totop\">
            <span><a href=\"#\" id=\"toTop\"><i class=\"fa fa-arrow-up\"></i></a></span>
          </div>
          ";
        // line 80
        echo " ";
        if (($this->getAttribute(($context["theme_config"] ?? null), "display_of_git_sync_repo_link", array()) == "footer")) {
            // line 81
            echo "          <p>";
            $this->loadTemplate("partials/git_sync_repo_link.html.twig", "partials/base.html.twig", 81)->display($context);
            echo "</p>
          ";
        }
        // line 83
        echo "          <p>Copyright 2017 Wellpro Dubai <p>
        </footer>
        ";
    }

    // line 93
    public function block_bottom($context, array $blocks = array())
    {
        echo " ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
      <script>
        \$(function() {
          \$(document).ready(function() {
            \$.slidebars({
              hideControlClasses: true,
              scrollLock: true
            });
          });
        });
      </script>
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
        return array (  344 => 93,  338 => 83,  332 => 81,  329 => 80,  323 => 76,  320 => 75,  314 => 65,  309 => 74,  303 => 71,  300 => 70,  297 => 69,  291 => 67,  288 => 66,  282 => 65,  277 => 64,  274 => 63,  269 => 61,  257 => 57,  250 => 58,  240 => 57,  232 => 54,  228 => 52,  225 => 51,  221 => 38,  218 => 37,  215 => 36,  212 => 35,  209 => 34,  206 => 33,  203 => 32,  199 => 29,  196 => 28,  193 => 27,  190 => 26,  187 => 25,  184 => 24,  181 => 23,  179 => 22,  176 => 21,  173 => 20,  170 => 19,  167 => 18,  164 => 17,  161 => 16,  158 => 15,  155 => 14,  152 => 13,  144 => 39,  142 => 32,  136 => 30,  134 => 13,  129 => 11,  125 => 10,  122 => 9,  120 => 8,  112 => 7,  109 => 6,  106 => 5,  99 => 105,  97 => 93,  93 => 91,  91 => 90,  85 => 86,  82 => 85,  76 => 75,  73 => 63,  69 => 62,  64 => 61,  59 => 51,  51 => 47,  46 => 44,  42 => 42,  40 => 5,  35 => 3,  32 => 2,  30 => 1,);
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
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

      {% block stylesheets %}
        {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css', 104) %}
        {% do assets.addCss('theme://css-compiled/nucleus.css', 103) %}
        {% do assets.addCss('theme://css-compiled/template.css', 102) %}
        {% do assets.addCss('theme://css/theme.css',100) %}
        {% do assets.addCss('theme://css/custom.css', 101) %}
        {% do assets.addCss('theme://css/font-awesome.min.css', 100) %}
        {% do assets.addCss('theme://css/slidebars.min.css') %}

        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <=9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
      {% endif %}
  {% endblock %}
  {{ assets.css() }}

  {% block javascripts %}
      {% do assets.addJs('jquery', 102) %}
      {% do assets.addJs('theme://js/modernizr.custom.71422.js', 101) %}
      {% do assets.addJs('theme://js/my.js', 100) %}
      {% do assets.addJs('theme://js/antimatter.js') %}
      {% do assets.addJs('theme://js/slidebars.min.js') %}
  {% endblock %}
  {{ assets.js() }}

{% endblock head %}
</head>

    <body id=\"top\" class=\"{{ page.header.body_classes }}\">

      {# added hidden page title for screen readers - hibbittsdesign.org #}
      <h1 class=\"hidden\">{{page.title}}</h1>

      <div id=\"sb-site\">

        {# check content display flag - hibbittsdesign.org #} {% if not (grav.uri.param('chromeless')) and (not theme_config.chromeless.enabled) %} {% block header %}
        <header id=\"header\">
          <div id=\"logo\">
            <h3><a href=\"{{ base_url == '' ? '/' : base_url }}\"><img src=\"{{ url('theme://images/wellprologo2017.png') }}\" /></a></h3>
          </div>
          <div id=\"navbar\">
            {% block header_extra %}{% endblock %} {% if config.plugins.langswitcher.enabled %} {% include 'partials/langswitcher.html.twig' %} {% endif %} {% block header_navigation %} {% include 'partials/navigation.html.twig' %} {% endblock %}
            <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
          </div>
        </header>
        {% endblock %} {% block showcase %}{% endblock %} {% else %}
        <div style=\"margin-bottom: -130px;\"></div>
        {% endif %} {% block body %}
        <section id=\"body\" class=\"{{ class }}\">
          {% block content %} {% endblock %} {# check to display CC License - hibbittsdesign.org #} {# check to display git sync link in page - hibbittsdesign.org #} {% if theme_config.display_of_git_sync_repo_link == 'page' %}
          <div class=\"content-wrapper\">
            <p>{% include 'partials/git_sync_repo_link.html.twig' %}</p>
          </div>
          {% endif %} {% if theme_config.cc_license.enabled %}
          <div class=\"content-wrapper\">
            <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
          </div>
          {% endif %}
        </section>
        {% endblock %} {# check content display flag - hibbittsdesign.org #} {% if not (grav.uri.param('chromeless')) and (not theme_config.chromeless.enabled) %} {% block footer %}
        <footer id=\"footer\">
          <div class=\"totop\">
            <span><a href=\"#\" id=\"toTop\"><i class=\"fa fa-arrow-up\"></i></a></span>
          </div>
          {# check to display git sync link in footer or not yet defined by saving theme settings - hibbittsdesign.org #} {% if theme_config.display_of_git_sync_repo_link == 'footer' %}
          <p>{% include 'partials/git_sync_repo_link.html.twig' %}</p>
          {% endif %}
          <p>Copyright 2017 Wellpro Dubai <p>
        </footer>
        {% endblock %} {% endif %}

      </div>
      <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
          {% include 'partials/navigation.html.twig' %}
        </div>
      </div>
      {% block bottom %} {{ assets.js('bottom') }}
      <script>
        \$(function() {
          \$(document).ready(function() {
            \$.slidebars({
              hideControlClasses: true,
              scrollLock: true
            });
          });
        });
      </script>
      {% endblock %}
    </body>

</html>
", "partials/base.html.twig", "/home/grav/www/html/user/themes/niazi/templates/partials/base.html.twig");
    }
}
