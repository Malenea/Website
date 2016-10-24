<?php

/* ::layout.html.twig */
class __TwigTemplate_4746ce841ac32db2e21f550a6f0e26849de2371428a05e2d78b125ce1122bd36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3de3b7d116cca571ec8ecdeb238e430b6919a1146b58ea78019c0dd61ef1ee99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de3b7d116cca571ec8ecdeb238e430b6919a1146b58ea78019c0dd61ef1ee99->enter($__internal_3de3b7d116cca571ec8ecdeb238e430b6919a1146b58ea78019c0dd61ef1ee99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initiale-scale=1\">

    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "  </head>

  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"jumbotron\">
\t<h1>Mayonnaise</h1>
\t<p>
\t  A wonderful website with the only purpose to worship Mayonnaise
\t</p>
      </div>

      <div class=\"row\">
\t<div id=\"menu\" class=\"col-md-3\">
\t  <h3>Menu</h3>
\t  <ul class=\"nav nav-pills nav-stacked\">
\t    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bh_website_homepage");
        echo "\">My Home-naise</a></li>
\t    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bh_website_recipe");
        echo "\">Mayonnaise wonderful recipe</a></li>
\t    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bh_website_mail");
        echo "\">Send me a mail-yonnaise</a></li>
\t    </br></br></br></br></br></br></br></br></br></br></br></br>
\t  </ul>
\t</div>

\t";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "
\t<hr>

\t<footer>
\t  <p>Mayonnaise was updated in @ ";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
\t</footer>
      </div>

  </body>
</html>
";
        
        $__internal_3de3b7d116cca571ec8ecdeb238e430b6919a1146b58ea78019c0dd61ef1ee99->leave($__internal_3de3b7d116cca571ec8ecdeb238e430b6919a1146b58ea78019c0dd61ef1ee99_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f85dee56be11f031a7e1569217249b10010601c5926166db95f1393a57676ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f85dee56be11f031a7e1569217249b10010601c5926166db95f1393a57676ec->enter($__internal_9f85dee56be11f031a7e1569217249b10010601c5926166db95f1393a57676ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BH Website";
        
        $__internal_9f85dee56be11f031a7e1569217249b10010601c5926166db95f1393a57676ec->leave($__internal_9f85dee56be11f031a7e1569217249b10010601c5926166db95f1393a57676ec_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_824d0cf9d31aa5f98f1a127cbe6a205ff175859680d20d40cdb8b2ca72093477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824d0cf9d31aa5f98f1a127cbe6a205ff175859680d20d40cdb8b2ca72093477->enter($__internal_824d0cf9d31aa5f98f1a127cbe6a205ff175859680d20d40cdb8b2ca72093477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_824d0cf9d31aa5f98f1a127cbe6a205ff175859680d20d40cdb8b2ca72093477->leave($__internal_824d0cf9d31aa5f98f1a127cbe6a205ff175859680d20d40cdb8b2ca72093477_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_d228a1f95f8283380f832b7f6dcd4e0592ea52265cf60537f601b637d3716b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d228a1f95f8283380f832b7f6dcd4e0592ea52265cf60537f601b637d3716b78->enter($__internal_d228a1f95f8283380f832b7f6dcd4e0592ea52265cf60537f601b637d3716b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "\t";
        
        $__internal_d228a1f95f8283380f832b7f6dcd4e0592ea52265cf60537f601b637d3716b78->leave($__internal_d228a1f95f8283380f832b7f6dcd4e0592ea52265cf60537f601b637d3716b78_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 35,  121 => 34,  113 => 10,  107 => 9,  95 => 7,  81 => 40,  75 => 36,  73 => 34,  65 => 29,  61 => 28,  57 => 27,  40 => 12,  38 => 9,  33 => 7,  25 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initiale-scale=1\">

    <title>{% block title %}BH Website{% endblock %}</title>

    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    {% endblock %}
  </head>

  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"jumbotron\">
\t<h1>Mayonnaise</h1>
\t<p>
\t  A wonderful website with the only purpose to worship Mayonnaise
\t</p>
      </div>

      <div class=\"row\">
\t<div id=\"menu\" class=\"col-md-3\">
\t  <h3>Menu</h3>
\t  <ul class=\"nav nav-pills nav-stacked\">
\t    <li><a href=\"{{ path('bh_website_homepage') }}\">My Home-naise</a></li>
\t    <li><a href=\"{{ path('bh_website_recipe') }}\">Mayonnaise wonderful recipe</a></li>
\t    <li><a href=\"{{ path('bh_website_mail') }}\">Send me a mail-yonnaise</a></li>
\t    </br></br></br></br></br></br></br></br></br></br></br></br>
\t  </ul>
\t</div>

\t{% block body %}
\t{% endblock %}

\t<hr>

\t<footer>
\t  <p>Mayonnaise was updated in @ {{ 'now'|date('Y') }}</p>
\t</footer>
      </div>

  </body>
</html>
";
    }
}
