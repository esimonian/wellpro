<?php

/* partials/latest-posts.html.twig */
class __TwigTemplate_206ec7e7769854f0e41b220cc6ad1585e623745bf7a76be4068c3d9f89d20bdd extends Twig_Template
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
        echo "<!-- Latest Stories -->
<section class=\"section-wrap latest-stories pb-0\">
  <div class=\"container-fluid nopadding\">

    <div class=\"heading-row text-center mb-40\">
      <h2 class=\"heading uppercase small\">Latest Stories</h2>
    </div>

    <div id=\"main-slider\" class=\"flickity-slider-wrap\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/blog"), "method"), "children", array()), "order", array(0 => "date", 1 => "desc"), "method"), "slice", array(0 => 0, 1 => 5), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "        ";
            $context["blog_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["post"], "media", array()), "images", array()));
            // line 12
            echo "        <div class=\"gallery-cell\">
          <article>
            <a href=\"";
            // line 14
            echo $this->getAttribute($context["post"], "url", array());
            echo "\" class=\"entry-img\">
              <img src=\"";
            // line 15
            echo $this->getAttribute(($context["blog_image"] ?? null), "url", array());
            echo "\" alt=\"\">

              <span class=\"entry-category\"></span>
            </a>
            <div class=\"entry text-center\">                  
              <h4 class=\"entry-title uppercase\"><a href=\"\">";
            // line 20
            echo $this->getAttribute($context["post"], "title", array());
            echo "</a></h4>
              <span class=\"entry-date\">";
            // line 21
            echo twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "M/d/Y");
            echo "</span>
            </div>
          </article>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
  </div>
</section> <!-- end latest stories -->";
    }

    public function getTemplateName()
    {
        return "partials/latest-posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 26,  57 => 21,  53 => 20,  45 => 15,  41 => 14,  37 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Latest Stories -->
<section class=\"section-wrap latest-stories pb-0\">
  <div class=\"container-fluid nopadding\">

    <div class=\"heading-row text-center mb-40\">
      <h2 class=\"heading uppercase small\">Latest Stories</h2>
    </div>

    <div id=\"main-slider\" class=\"flickity-slider-wrap\">
      {% for post in page.find('/blog').children.order('date', 'desc').slice(0, 5) %}
        {% set blog_image = post.media.images | first %}
        <div class=\"gallery-cell\">
          <article>
            <a href=\"{{ post.url }}\" class=\"entry-img\">
              <img src=\"{{blog_image.url}}\" alt=\"\">

              <span class=\"entry-category\"></span>
            </a>
            <div class=\"entry text-center\">                  
              <h4 class=\"entry-title uppercase\"><a href=\"\">{{ post.title }}</a></h4>
              <span class=\"entry-date\">{{post.date | date(\"M/d/Y\") }}</span>
            </div>
          </article>
        </div>
      {% endfor %}
    </div>
  </div>
</section> <!-- end latest stories -->", "partials/latest-posts.html.twig", "/Users/elizabethsimonian/freelance/wellpro/user/themes/soho/templates/partials/latest-posts.html.twig");
    }
}
