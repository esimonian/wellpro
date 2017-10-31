<?php

/* partials/header.html.twig */
class __TwigTemplate_e60d91abed49520c5b6fa0c6eb83b228ce0a758eb3233c64980a69e8244bd1d9 extends Twig_Template
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
        echo "<div class=\"main-wrapper oh\">
<header class=\"nav-type-1 dark-nav\">

      <!-- Fullscreen search -->
      <div class=\"search-wrap\">
        <div class=\"search-inner\">
          <div class=\"search-cell\">
            <form method=\"get\">
              <div class=\"search-field-holder\">
                <input type=\"search\" class=\"form-control main-search-input\" placeholder=\"Search for\">
                <div class=\"search-submit-icon\"><i class=\"icon icon_search\"></i></div>
                <input type=\"submit\" class=\"search-submit\" value=\"search\">
              </div>
            </form>
          </div>
        </div>
        <i class=\"icon icon_close search-close\" id=\"search-close\"></i>
      </div> <!-- end fullscreen search -->

      <nav class=\"navbar navbar-fixed-top\">
        <div class=\"navigation\">
          <div class=\"container relative\">

            <div class=\"row\">

              <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                  <span class=\"sr-only\">Toggle navigation</span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                </button>
              </div> <!-- end navbar-header -->


              <!-- side menu -->
              <div class=\"side-menu nav-left hidden-sm hidden-xs\">
                <div class=\"nav-inner\">
                  <div class=\"nav-search-wrap hidden-sm hidden-xs\">
                    <a href=\"#\" class=\"nav-search search-trigger\">
                      <i class=\"icon icon_search\"></i>
                    </a>
                  </div>
                </div>
              </div> <!-- end side menu -->

              <div class=\"col-md-12 nav-wrap\">
                <div class=\"collapse navbar-collapse text-center\" id=\"navbar-collapse\">

                  <ul class=\"nav navbar-nav\">
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["site"] ?? null), "menus", array()), "main", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 52
            echo "                  <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">
                    ";
            // line 53
            echo $this->getAttribute($context["item"], "title", array());
            echo "
                  </a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                <!--
                    <li class=\"dropdown active\">
                      <a href=\"index.html\">Home</a><i class=\"fa fa-angle-down dropdown-toggle\" data-toggle=\"dropdown\"></i>
                      <ul class=\"dropdown-menu\">
                        <li><a href=\"index.html\">Classic</a></li>
                        <li><a href=\"index-2.html\">Hero Slider</a></li>
                        <li><a href=\"index-3.html\">Modern</a></li>
                      </ul>
                    </li> -->


                    <li id=\"mobile-search\" class=\"hidden-lg hidden-md\">
                      <form method=\"get\" class=\"mobile-search\">
                        <input type=\"search\" class=\"form-control\" placeholder=\"Search...\">
                        <button type=\"submit\" class=\"search-button\">
                          <i class=\"icon icon_search\"></i>
                        </button>
                      </form>
                    </li>

                  </ul> <!-- end menu -->
                </div> <!-- end collapse -->
              </div> <!-- end col -->

              <!-- side menu -->
              <div class=\"side-menu right mobile-left-align\">
                <div class=\"nav-inner menu-socials social-icons\">
                  <div class=\"right\">
                    <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-heart\"></i></a>
                  </div>
                </div>
              </div> <!-- end side menu -->

            </div> <!-- end row -->
          </div> <!-- end container -->
        </div> <!-- end navigation -->
      </nav> <!-- end navbar -->
</header>
 <section class=\"header-wrap hero-section bg-light\">
    <div class=\"container\">
      <div class=\"logo-container text-center\">
        <div class=\"logo-wrap\">
          <a href=\"index.html\">
          </a>
        </div>
      </div>
    </div>
  </section>

  <div class=\"content-wrapper oh\">
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 56,  80 => 53,  75 => 52,  71 => 51,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"main-wrapper oh\">
<header class=\"nav-type-1 dark-nav\">

      <!-- Fullscreen search -->
      <div class=\"search-wrap\">
        <div class=\"search-inner\">
          <div class=\"search-cell\">
            <form method=\"get\">
              <div class=\"search-field-holder\">
                <input type=\"search\" class=\"form-control main-search-input\" placeholder=\"Search for\">
                <div class=\"search-submit-icon\"><i class=\"icon icon_search\"></i></div>
                <input type=\"submit\" class=\"search-submit\" value=\"search\">
              </div>
            </form>
          </div>
        </div>
        <i class=\"icon icon_close search-close\" id=\"search-close\"></i>
      </div> <!-- end fullscreen search -->

      <nav class=\"navbar navbar-fixed-top\">
        <div class=\"navigation\">
          <div class=\"container relative\">

            <div class=\"row\">

              <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                  <span class=\"sr-only\">Toggle navigation</span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                </button>
              </div> <!-- end navbar-header -->


              <!-- side menu -->
              <div class=\"side-menu nav-left hidden-sm hidden-xs\">
                <div class=\"nav-inner\">
                  <div class=\"nav-search-wrap hidden-sm hidden-xs\">
                    <a href=\"#\" class=\"nav-search search-trigger\">
                      <i class=\"icon icon_search\"></i>
                    </a>
                  </div>
                </div>
              </div> <!-- end side menu -->

              <div class=\"col-md-12 nav-wrap\">
                <div class=\"collapse navbar-collapse text-center\" id=\"navbar-collapse\">

                  <ul class=\"nav navbar-nav\">
                    {% for item in site.menus.main %}
                  <li><a href=\"{{ item.url }}\">
                    {{ item.title }}
                  </a></li>
                {% endfor %}
                <!--
                    <li class=\"dropdown active\">
                      <a href=\"index.html\">Home</a><i class=\"fa fa-angle-down dropdown-toggle\" data-toggle=\"dropdown\"></i>
                      <ul class=\"dropdown-menu\">
                        <li><a href=\"index.html\">Classic</a></li>
                        <li><a href=\"index-2.html\">Hero Slider</a></li>
                        <li><a href=\"index-3.html\">Modern</a></li>
                      </ul>
                    </li> -->


                    <li id=\"mobile-search\" class=\"hidden-lg hidden-md\">
                      <form method=\"get\" class=\"mobile-search\">
                        <input type=\"search\" class=\"form-control\" placeholder=\"Search...\">
                        <button type=\"submit\" class=\"search-button\">
                          <i class=\"icon icon_search\"></i>
                        </button>
                      </form>
                    </li>

                  </ul> <!-- end menu -->
                </div> <!-- end collapse -->
              </div> <!-- end col -->

              <!-- side menu -->
              <div class=\"side-menu right mobile-left-align\">
                <div class=\"nav-inner menu-socials social-icons\">
                  <div class=\"right\">
                    <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-heart\"></i></a>
                  </div>
                </div>
              </div> <!-- end side menu -->

            </div> <!-- end row -->
          </div> <!-- end container -->
        </div> <!-- end navigation -->
      </nav> <!-- end navbar -->
</header>
 <section class=\"header-wrap hero-section bg-light\">
    <div class=\"container\">
      <div class=\"logo-container text-center\">
        <div class=\"logo-wrap\">
          <a href=\"index.html\">
          </a>
        </div>
      </div>
    </div>
  </section>

  <div class=\"content-wrapper oh\">
", "partials/header.html.twig", "/Users/elizabethsimonian/freelance/wellpro/user/themes/soho/templates/partials/header.html.twig");
    }
}
