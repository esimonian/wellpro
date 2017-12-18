<?php

/* home.html.twig */
class __TwigTemplate_50f32895f7458901f7919561cf06a270910ac7eb4e04fb2753e3ea140fb74a4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div>
    ";
        // line 5
        $this->loadTemplate("partials/latest-posts.html.twig", "home.html.twig", 5)->display($context);
        // line 6
        echo "  </div>
  

  <!-- Content -->
  <section class=\"content blog-standard\">
    <div class=\"container relative\">
      <div class=\"row\">
        
        <!-- post content -->
        <div class=\"col-md-9 post-content mb-50\">
          ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", array(0 => array("category" => "Featured")), "method"), 0, 1));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "            ";
            $context["blog_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["post"], "media", array()), "images", array()));
            // line 18
            echo "            <!-- large post -->
              ";
            // line 19
            $this->loadTemplate("partials/large-post.html.twig", "home.html.twig", 19)->display($context);
            // line 20
            echo "            <!-- end large post -->
          ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "          <!-- grid posts -->
          <div class=\"row items-grid\">
          
          </div>
          <!-- end grid posts -->

          <div class=\"row items-grid\">

          </div> <!-- end grid posts -->

          <!-- large post -->
          <!-- end large post -->

          <!-- grid posts -->
          <div class=\"row\">
          </div>
          <!-- end grid posts -->
  <!--
        <div class=\"row mt-20\">
          <div class=\"col-md-12 text-center\">
            <a href=\"#\" class=\"btn btn-md btn-stroke\" id=\"load-more\">Load More</a>
          </div>
        </div>
  -->

      </div> <!-- end col -->
      
     ";
        // line 49
        $this->loadTemplate("partials/sidebar.html.twig", "home.html.twig", 49)->display($context);
        // line 50
        echo "
    </div> <!-- end row -->
  </div> <!-- end container -->
  </section> <!-- end content -->
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 50,  117 => 49,  88 => 22,  73 => 20,  71 => 19,  68 => 18,  65 => 17,  48 => 16,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
  <div>
    {% include 'partials/latest-posts.html.twig' %}
  </div>
  

  <!-- Content -->
  <section class=\"content blog-standard\">
    <div class=\"container relative\">
      <div class=\"row\">
        
        <!-- post content -->
        <div class=\"col-md-9 post-content mb-50\">
          {% for post in taxonomy.findTaxonomy({'category':'Featured'}) | slice(0, 1) %}
            {% set blog_image = post.media.images | first %}
            <!-- large post -->
              {% include 'partials/large-post.html.twig' %}
            <!-- end large post -->
          {% endfor %}
          <!-- grid posts -->
          <div class=\"row items-grid\">
          
          </div>
          <!-- end grid posts -->

          <div class=\"row items-grid\">

          </div> <!-- end grid posts -->

          <!-- large post -->
          <!-- end large post -->

          <!-- grid posts -->
          <div class=\"row\">
          </div>
          <!-- end grid posts -->
  <!--
        <div class=\"row mt-20\">
          <div class=\"col-md-12 text-center\">
            <a href=\"#\" class=\"btn btn-md btn-stroke\" id=\"load-more\">Load More</a>
          </div>
        </div>
  -->

      </div> <!-- end col -->
      
     {% include 'partials/sidebar.html.twig' %}

    </div> <!-- end row -->
  </div> <!-- end container -->
  </section> <!-- end content -->
{% endblock %}", "home.html.twig", "/Users/elizabethsimonian/freelance/wellpro/user/themes/soho/templates/home.html.twig");
    }
}
