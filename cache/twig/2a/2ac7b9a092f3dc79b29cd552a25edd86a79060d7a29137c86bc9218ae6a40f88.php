<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_cf0320dd58bcfb8998a7ea897035bdff1d651af6376a3039330ea1c4aae2f527 extends Twig_Template
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
        echo "<!-- Sidebar -->
<aside class=\"col-md-3 sidebar\">

  <div class=\"widget about-blog text-center\">
    <div class=\"heading-lines\">
      <h3 class=\"widget-title heading\">About Me</h3>
    </div>
    <img src=\"/img/aboutsteph.jpg\" alt=\"\" class=\"side-about-img\">
    <p class=\"mb-20 mt-30\">Super interesting text here</p>
    <img src=\"/img/signature.png\" alt=\"\">
  </div>

  <!-- Newsletter -->
  <div class=\"widget newsletter\">
    <div class=\"heading-lines\">
      <h3 class=\"widget-title heading\">Newsletter</h3>
    </div>
    <form class=\"relative newsletter-form\">
      <input type=\"email\" placeholder=\"Your email address\">
    </form>
    <input type=\"submit\" value=\"Subscribe\" id=\"submit-button\" class=\"btn btn-lg btn-color\">
  </div>              

  <!-- Instagram Feed Grid -->
  <div class=\"widget instagram\">
    <div class=\"heading-lines\">
      <h3 class=\"widget-title heading\">Instagram</h3>
    </div>
    <ul id=\"instafeed-grid\"></ul>
  </div>

  <!-- Categories -->
  <div class=\"widget categories\">
    <div class=\"heading-lines\">
      <h3 class=\"widget-title heading\">Categories</h3>
    </div>
    <ul class=\"list-dividers\">

    ";
        // line 39
        $context["taxlist"] = $this->getAttribute(($context["taxonomylist"] ?? null), "get", array(), "method");
        // line 40
        echo "
      <li>
        <a href=\"\"></a><span>(3)</span>
      </li>

    </ul>

  </div>

  <!-- Ad banner 
  <div class=\"widget custom-ad-banner\">
    <a href=\"#\">
      <img src=\"/img/banner.jpg\" alt=\"\">
    </a>
  </div>
-->
  <!-- Recent Posts 
  <div class=\"widget recent-posts\">
    <div class=\"heading-lines\">
      <h3 class=\"widget-title heading\">Recent Posts</h3>
    </div>
    <div class=\"entry-list w-thumbs\">
      <ul class=\"posts-list list-dividers\">

        <li class=\"entry-li\">
          <article class=\"post-small clearfix\">
            <div class=\"entry-img\">
              <a href=\"";
        // line 67
        echo $this->getAttribute(($context["site"] ?? null), "url", array());
        echo "/";
        echo $this->getAttribute(($context["post"] ?? null), "url", array());
        echo "\">
                <img src=\"";
        // line 68
        echo $this->getAttribute(($context["site"] ?? null), "url", array());
        echo "/";
        echo $this->getAttribute(($context["post"] ?? null), "image", array());
        echo "\" alt=\"\">
              </a>
            </div>
            <div class=\"entry\">
              <h3 class=\"entry-title\"><a href=\"";
        // line 72
        echo $this->getAttribute(($context["site"] ?? null), "url", array());
        echo "/";
        echo $this->getAttribute(($context["post"] ?? null), "url", array());
        echo "\">";
        echo $this->getAttribute(($context["post"] ?? null), "title", array());
        echo "</a></h3>
              <ul class=\"entry-meta list-inline\">
                <li class=\"entry-date\">
                  <a href=\"";
        // line 75
        echo $this->getAttribute(($context["site"] ?? null), "url", array());
        echo "/";
        echo $this->getAttribute(($context["post"] ?? null), "url", array());
        echo "\">";
        echo call_user_func_array($this->env->getFilter('date_to_string')->getCallable(), array($this->getAttribute(($context["post"] ?? null), "date", array())));
        echo "</a>
                </li>
              </ul>
            </div>
          </article>
        </li>
      </ul>
    </div>
  </div>-->

  <!-- Latest Tweets -->
  <div class=\"widget categories\">
    <div class=\"heading-lines\">
      <h3 class=\"widget-title heading\">Latest Tweets</h3>
    </div>
    <div class=\"twitter-slider text-center\">
      <i class=\"fa fa-twitter twitter-icon\"></i>
      <a href=\"https://twitter.com/deothemes\"></a>
      <div id=\"tweets\"></div>
    </div>
  </div>

</aside> <!-- end sidebar -->";
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
        return array (  115 => 75,  105 => 72,  96 => 68,  90 => 67,  61 => 40,  59 => 39,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Sidebar -->
<aside class=\"col-md-3 sidebar\">

  <div class=\"widget about-blog text-center\">
    <div class=\"heading-lines\">
      <h3 class=\"widget-title heading\">About Me</h3>
    </div>
    <img src=\"/img/aboutsteph.jpg\" alt=\"\" class=\"side-about-img\">
    <p class=\"mb-20 mt-30\">Super interesting text here</p>
    <img src=\"/img/signature.png\" alt=\"\">
  </div>

  <!-- Newsletter -->
  <div class=\"widget newsletter\">
    <div class=\"heading-lines\">
      <h3 class=\"widget-title heading\">Newsletter</h3>
    </div>
    <form class=\"relative newsletter-form\">
      <input type=\"email\" placeholder=\"Your email address\">
    </form>
    <input type=\"submit\" value=\"Subscribe\" id=\"submit-button\" class=\"btn btn-lg btn-color\">
  </div>              

  <!-- Instagram Feed Grid -->
  <div class=\"widget instagram\">
    <div class=\"heading-lines\">
      <h3 class=\"widget-title heading\">Instagram</h3>
    </div>
    <ul id=\"instafeed-grid\"></ul>
  </div>

  <!-- Categories -->
  <div class=\"widget categories\">
    <div class=\"heading-lines\">
      <h3 class=\"widget-title heading\">Categories</h3>
    </div>
    <ul class=\"list-dividers\">

    {% set taxlist = taxonomylist.get() %}

      <li>
        <a href=\"\"></a><span>(3)</span>
      </li>

    </ul>

  </div>

  <!-- Ad banner 
  <div class=\"widget custom-ad-banner\">
    <a href=\"#\">
      <img src=\"/img/banner.jpg\" alt=\"\">
    </a>
  </div>
-->
  <!-- Recent Posts 
  <div class=\"widget recent-posts\">
    <div class=\"heading-lines\">
      <h3 class=\"widget-title heading\">Recent Posts</h3>
    </div>
    <div class=\"entry-list w-thumbs\">
      <ul class=\"posts-list list-dividers\">

        <li class=\"entry-li\">
          <article class=\"post-small clearfix\">
            <div class=\"entry-img\">
              <a href=\"{{ site.url}}/{{ post.url }}\">
                <img src=\"{{ site.url}}/{{ post.image }}\" alt=\"\">
              </a>
            </div>
            <div class=\"entry\">
              <h3 class=\"entry-title\"><a href=\"{{ site.url}}/{{ post.url }}\">{{ post.title }}</a></h3>
              <ul class=\"entry-meta list-inline\">
                <li class=\"entry-date\">
                  <a href=\"{{ site.url}}/{{ post.url }}\">{{ post.date | date_to_string }}</a>
                </li>
              </ul>
            </div>
          </article>
        </li>
      </ul>
    </div>
  </div>-->

  <!-- Latest Tweets -->
  <div class=\"widget categories\">
    <div class=\"heading-lines\">
      <h3 class=\"widget-title heading\">Latest Tweets</h3>
    </div>
    <div class=\"twitter-slider text-center\">
      <i class=\"fa fa-twitter twitter-icon\"></i>
      <a href=\"https://twitter.com/deothemes\"></a>
      <div id=\"tweets\"></div>
    </div>
  </div>

</aside> <!-- end sidebar -->", "partials/sidebar.html.twig", "/home/grav/www/html/user/themes/soho/templates/partials/sidebar.html.twig");
    }
}
