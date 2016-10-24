<?php

/* BHWebsiteBundle:Ws:mail.html.twig */
class __TwigTemplate_47099f2dd963e52152f1800e499490981f575d0f4229230debccf7b1172a5a02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BHWebsiteBundle::layout.html.twig", "BHWebsiteBundle:Ws:mail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'bhwebsite_body' => array($this, 'block_bhwebsite_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BHWebsiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea79058399952979e9f64079e82dc4224fb236eea5df3609049c3ca01add3d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea79058399952979e9f64079e82dc4224fb236eea5df3609049c3ca01add3d59->enter($__internal_ea79058399952979e9f64079e82dc4224fb236eea5df3609049c3ca01add3d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BHWebsiteBundle:Ws:mail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea79058399952979e9f64079e82dc4224fb236eea5df3609049c3ca01add3d59->leave($__internal_ea79058399952979e9f64079e82dc4224fb236eea5df3609049c3ca01add3d59_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fba06c884b91a7fe2e1f157b5818822427219a779d8b4e38117d8b7d7e745d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fba06c884b91a7fe2e1f157b5818822427219a779d8b4e38117d8b7d7e745d8->enter($__internal_1fba06c884b91a7fe2e1f157b5818822427219a779d8b4e38117d8b7d7e745d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  BH Website - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1fba06c884b91a7fe2e1f157b5818822427219a779d8b4e38117d8b7d7e745d8->leave($__internal_1fba06c884b91a7fe2e1f157b5818822427219a779d8b4e38117d8b7d7e745d8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6075054cf8acfa06efc2d1438fc32c3285a456befa6aa59b06db471808c23a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6075054cf8acfa06efc2d1438fc32c3285a456befa6aa59b06db471808c23a61->enter($__internal_6075054cf8acfa06efc2d1438fc32c3285a456befa6aa59b06db471808c23a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
   <h1>Contact me by mail-yonnaise</h1>

   <!DOCTYPE html>
   <head>
     <title>Form submission</title>
   </head>
   <body>

     <form action=\"\" method=\"post\">
       Your First Name : <input type=\"text\" name=\"first_name\"><br>
       Your Last Name : <input type=\"text\" name=\"last_name\"><br>
       Your Mail-yonnaise : <input type=\"text\" name=\"email\"><br></br>
       Your Message:<br><textarea rows=\"10\" name=\"message\" cols=\"60\"></textarea><br>
       <input type=\"submit\" name=\"submit\" value=\"Send\">
     </form>

   </body>
   </html> 

  <hr>

  ";
        // line 30
        $this->displayBlock('bhwebsite_body', $context, $blocks);
        // line 32
        echo "
";
        
        $__internal_6075054cf8acfa06efc2d1438fc32c3285a456befa6aa59b06db471808c23a61->leave($__internal_6075054cf8acfa06efc2d1438fc32c3285a456befa6aa59b06db471808c23a61_prof);

    }

    // line 30
    public function block_bhwebsite_body($context, array $blocks = array())
    {
        $__internal_c868272f34f4216e5abf0cd8f759769c5ad0f344b53fac70045d65e52662c4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c868272f34f4216e5abf0cd8f759769c5ad0f344b53fac70045d65e52662c4be->enter($__internal_c868272f34f4216e5abf0cd8f759769c5ad0f344b53fac70045d65e52662c4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bhwebsite_body"));

        // line 31
        echo "  ";
        
        $__internal_c868272f34f4216e5abf0cd8f759769c5ad0f344b53fac70045d65e52662c4be->leave($__internal_c868272f34f4216e5abf0cd8f759769c5ad0f344b53fac70045d65e52662c4be_prof);

    }

    public function getTemplateName()
    {
        return "BHWebsiteBundle:Ws:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  92 => 30,  84 => 32,  82 => 30,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"BHWebsiteBundle::layout.html.twig\" %}

{% block title %}
  BH Website - {{ parent() }}
{% endblock %}

{% block body %}

   <h1>Contact me by mail-yonnaise</h1>

   <!DOCTYPE html>
   <head>
     <title>Form submission</title>
   </head>
   <body>

     <form action=\"\" method=\"post\">
       Your First Name : <input type=\"text\" name=\"first_name\"><br>
       Your Last Name : <input type=\"text\" name=\"last_name\"><br>
       Your Mail-yonnaise : <input type=\"text\" name=\"email\"><br></br>
       Your Message:<br><textarea rows=\"10\" name=\"message\" cols=\"60\"></textarea><br>
       <input type=\"submit\" name=\"submit\" value=\"Send\">
     </form>

   </body>
   </html> 

  <hr>

  {% block bhwebsite_body %}
  {% endblock %}

{% endblock %}
";
    }
}
