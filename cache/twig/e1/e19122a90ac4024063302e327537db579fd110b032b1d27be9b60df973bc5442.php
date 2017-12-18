<?php

/* partials/large-post.html.twig */
class __TwigTemplate_8bde7c68cabf7f32d612ed5516ca008295725ce77d758de525e3379b68c3a0b5 extends Twig_Template
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
        echo "<article class=\"entry-item large-post\">
  <div class=\"entry-header\">
    <a href=\"#\" class=\"entry-category\">Category</a>
    <h2 class=\"entry-title\">
      <a href=\"";
        // line 5
        echo $this->getAttribute(($context["post"] ?? null), "url", array());
        echo "\">";
        echo $this->getAttribute(($context["post"] ?? null), "title", array());
        echo "</a>
    </h2>
  </div>
  
  <div class=\"entry-img\">
    <a href=\"";
        // line 10
        echo $this->getAttribute(($context["site"] ?? null), "url", array());
        echo "/";
        echo $this->getAttribute(($context["post"] ?? null), "url", array());
        echo "\">
      <img src=\"";
        // line 11
        echo $this->getAttribute(($context["blog_image"] ?? null), "url", array());
        echo "\" alt=\"\">
    </a>
  </div>

  <div class=\"entry-wrap\">
    <div class=\"entry\">                    
                          
      <div class=\"entry-content\">
        <p>";
        // line 19
        echo $this->getAttribute(($context["post"] ?? null), "description", array());
        echo "
        </p>
        <div class=\"text-center\">
          <a href=\"";
        // line 22
        echo $this->getAttribute(($context["site"] ?? null), "url", array());
        echo "/";
        echo $this->getAttribute(($context["post"] ?? null), "url", array());
        echo "\" class=\"read-more underline-link\">Read More</a>
        </div>
      </div>

      <div class=\"entry-meta-wrap clearfix\">
        <ul class=\"entry-meta\">
          <li class=\"entry-date\">
            <a href=\"#\">";
        // line 29
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", array()), "M/d/Y");
        echo "</a>
          </li>                 
          <li class=\"entry-comments\">

            <a href=\"";
        // line 33
        echo ($context["base_url"] ?? null);
        echo "/";
        echo $this->getAttribute(($context["post"] ?? null), "url", array());
        echo "#disqus_thread\" data-disqus-identifier=\"";
        echo $this->getAttribute(($context["post"] ?? null), "id", array());
        echo "\">Comments</a>
          </li>             
        </ul>

        <div class=\"social-icons right\">
          <a href=\"#\">
            <i class=\"fa fa-instagram\"></i>
          </a>
          <a href=\"#\">
            <i class=\"fa fa-facebook\"></i>
          </a>
          <a href=\"#\">
            <i class=\"fa fa-twitter\"></i>
          </a>                        
          <a href=\"#\">
            <i class=\"fa fa-pinterest-p\"></i>
          </a>
          <a href=\"#\">
            <i class=\"fa fa-heart\"></i>
          </a>
        </div>
      </div>

    </div>
  </div>
              </article>";
    }

    public function getTemplateName()
    {
        return "partials/large-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  70 => 29,  58 => 22,  52 => 19,  41 => 11,  35 => 10,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<article class=\"entry-item large-post\">
  <div class=\"entry-header\">
    <a href=\"#\" class=\"entry-category\">Category</a>
    <h2 class=\"entry-title\">
      <a href=\"{{ post.url }}\">{{ post.title}}</a>
    </h2>
  </div>
  
  <div class=\"entry-img\">
    <a href=\"{{ site.url}}/{{ post.url }}\">
      <img src=\"{{blog_image.url}}\" alt=\"\">
    </a>
  </div>

  <div class=\"entry-wrap\">
    <div class=\"entry\">                    
                          
      <div class=\"entry-content\">
        <p>{{ post.description}}
        </p>
        <div class=\"text-center\">
          <a href=\"{{ site.url}}/{{ post.url }}\" class=\"read-more underline-link\">Read More</a>
        </div>
      </div>

      <div class=\"entry-meta-wrap clearfix\">
        <ul class=\"entry-meta\">
          <li class=\"entry-date\">
            <a href=\"#\">{{ post.date | date(\"M/d/Y\") }}</a>
          </li>                 
          <li class=\"entry-comments\">

            <a href=\"{{ base_url }}/{{ post.url }}#disqus_thread\" data-disqus-identifier=\"{{post.id}}\">Comments</a>
          </li>             
        </ul>

        <div class=\"social-icons right\">
          <a href=\"#\">
            <i class=\"fa fa-instagram\"></i>
          </a>
          <a href=\"#\">
            <i class=\"fa fa-facebook\"></i>
          </a>
          <a href=\"#\">
            <i class=\"fa fa-twitter\"></i>
          </a>                        
          <a href=\"#\">
            <i class=\"fa fa-pinterest-p\"></i>
          </a>
          <a href=\"#\">
            <i class=\"fa fa-heart\"></i>
          </a>
        </div>
      </div>

    </div>
  </div>
              </article>", "partials/large-post.html.twig", "/home/grav/www/html/user/themes/soho/templates/partials/large-post.html.twig");
    }
}
