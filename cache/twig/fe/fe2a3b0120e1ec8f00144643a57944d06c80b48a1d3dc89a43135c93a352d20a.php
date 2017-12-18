<?php

/* blog_post.html.twig */
class __TwigTemplate_63c7b363ed834ea908a51846e2bd7bf461fcaaef766c0e826625a39d661386c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog_post.html.twig", 1);
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
        echo "  <!-- Content -->
  <section class=\"content post-single pt-70 pt-mdm-60\">
   <div class=\"container relative\">
     <div class=\"row\">

       <!-- post content -->
       <div class=\"col-md-9 post-content mb-50\">

         <!-- large post -->
         <article class=\"entry-item large-post\">

           <div class=\"entry-header\">
             <a href=\"#\" class=\"entry-category\">Category</a>
             <h1 class=\"entry-title\">";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
           </div>

           <div class=\"entry-img\">
             <img src=\"\" alt=\"\">
           </div>

           <div class=\"entry-wrap\">
             <div class=\"entry\">

               <div class=\"entry-content\">
                 <div class=\"article\" itemprop=\"articleBody\">
                   ";
        // line 29
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

                 </div>

                 <!-- tags -->
                 <div class=\"entry-tags tags mb-50 mt-40 clearfix\">
                   <a href=\"#\">Category</a>
                 </div>

                 <div class=\"entry-meta-wrap clearfix\">
                   <ul class=\"entry-meta\">
                     <li class=\"entry-date\">
                       <a href=\"#\">Date</a>
                     </li>
                     <li class=\"entry-comments\">
                       <a href=\"blog-single.html\">2 Comments</a>
                     </li>
                   </ul>

                   <div class=\"social-icons right\">
                     <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                     <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                     <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                     <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                     <a href=\"#\"><i class=\"fa fa-heart\"></i></a>
                   </div>
                 </div>

                 <!-- entry author -->
                 <div class=\"entry-author-box clearfix\">
                   <img src=\"";
        // line 59
        echo ($context["theme_url"] ?? null);
        echo "/images/aboutsteph.jpg\" class=\"author-img\" alt=\"img\">
                   <div class=\"author-info\">
                     <h6 class=\"author-name\"><a href=\"#\">Author</a></h6>
                     <p class=\"mb-0\">bio</p>
                     <!--
                     <div class=\"social-icons\">
                       <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                       <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                       <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                       <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                       <a href=\"#\"><i class=\"fa fa-heart\"></i></a>
                     </div>
                     -->
                   </div>
                 </div>

                 <!-- related posts -->

                 <!-- Comments -->

                  <!--  end comments -->

               </div>
             </div>
           </div>
         </article> <!-- end large post -->
       </div> <!-- end col -->

       ";
        // line 87
        $this->loadTemplate("partials/sidebar.html.twig", "blog_post.html.twig", 87)->display($context);
        // line 88
        echo "     </div> <!-- end row -->
   </div> <!-- end container -->
  </section> <!-- end content -->
";
    }

    public function getTemplateName()
    {
        return "blog_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 88,  125 => 87,  94 => 59,  61 => 29,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
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
  <!-- Content -->
  <section class=\"content post-single pt-70 pt-mdm-60\">
   <div class=\"container relative\">
     <div class=\"row\">

       <!-- post content -->
       <div class=\"col-md-9 post-content mb-50\">

         <!-- large post -->
         <article class=\"entry-item large-post\">

           <div class=\"entry-header\">
             <a href=\"#\" class=\"entry-category\">Category</a>
             <h1 class=\"entry-title\">{{ page.title }}</h1>
           </div>

           <div class=\"entry-img\">
             <img src=\"\" alt=\"\">
           </div>

           <div class=\"entry-wrap\">
             <div class=\"entry\">

               <div class=\"entry-content\">
                 <div class=\"article\" itemprop=\"articleBody\">
                   {{ page.content }}

                 </div>

                 <!-- tags -->
                 <div class=\"entry-tags tags mb-50 mt-40 clearfix\">
                   <a href=\"#\">Category</a>
                 </div>

                 <div class=\"entry-meta-wrap clearfix\">
                   <ul class=\"entry-meta\">
                     <li class=\"entry-date\">
                       <a href=\"#\">Date</a>
                     </li>
                     <li class=\"entry-comments\">
                       <a href=\"blog-single.html\">2 Comments</a>
                     </li>
                   </ul>

                   <div class=\"social-icons right\">
                     <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                     <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                     <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                     <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                     <a href=\"#\"><i class=\"fa fa-heart\"></i></a>
                   </div>
                 </div>

                 <!-- entry author -->
                 <div class=\"entry-author-box clearfix\">
                   <img src=\"{{ theme_url }}/images/aboutsteph.jpg\" class=\"author-img\" alt=\"img\">
                   <div class=\"author-info\">
                     <h6 class=\"author-name\"><a href=\"#\">Author</a></h6>
                     <p class=\"mb-0\">bio</p>
                     <!--
                     <div class=\"social-icons\">
                       <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                       <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                       <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                       <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                       <a href=\"#\"><i class=\"fa fa-heart\"></i></a>
                     </div>
                     -->
                   </div>
                 </div>

                 <!-- related posts -->

                 <!-- Comments -->

                  <!--  end comments -->

               </div>
             </div>
           </div>
         </article> <!-- end large post -->
       </div> <!-- end col -->

       {% include 'partials/sidebar.html.twig' %}
     </div> <!-- end row -->
   </div> <!-- end container -->
  </section> <!-- end content -->
{% endblock %}
", "blog_post.html.twig", "/Users/elizabethsimonian/freelance/wellpro/user/themes/soho/templates/blog_post.html.twig");
    }
}
