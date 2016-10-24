<?php

/* base.html.twig */
class __TwigTemplate_55e254d95b3e627cd3d4f271745e6a974cd4fb61b53c28301040734bdbe99e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56e23077b9b79f8d5a12eafea4a791668247a6e9faf76b1c6fe3c3fc1ad6ad00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e23077b9b79f8d5a12eafea4a791668247a6e9faf76b1c6fe3c3fc1ad6ad00->enter($__internal_56e23077b9b79f8d5a12eafea4a791668247a6e9faf76b1c6fe3c3fc1ad6ad00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_56e23077b9b79f8d5a12eafea4a791668247a6e9faf76b1c6fe3c3fc1ad6ad00->leave($__internal_56e23077b9b79f8d5a12eafea4a791668247a6e9faf76b1c6fe3c3fc1ad6ad00_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_57b16e303e85f2017887ae7462a855974f57cbb2437361da82c37827d0f6a7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b16e303e85f2017887ae7462a855974f57cbb2437361da82c37827d0f6a7e7->enter($__internal_57b16e303e85f2017887ae7462a855974f57cbb2437361da82c37827d0f6a7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_57b16e303e85f2017887ae7462a855974f57cbb2437361da82c37827d0f6a7e7->leave($__internal_57b16e303e85f2017887ae7462a855974f57cbb2437361da82c37827d0f6a7e7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c47a5613f72aedc19e29b0d3a26c1a23d5780731b1c76f2e7af68c0cd1302ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47a5613f72aedc19e29b0d3a26c1a23d5780731b1c76f2e7af68c0cd1302ed1->enter($__internal_c47a5613f72aedc19e29b0d3a26c1a23d5780731b1c76f2e7af68c0cd1302ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c47a5613f72aedc19e29b0d3a26c1a23d5780731b1c76f2e7af68c0cd1302ed1->leave($__internal_c47a5613f72aedc19e29b0d3a26c1a23d5780731b1c76f2e7af68c0cd1302ed1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd87d45147ee91be2467ca6c32046b5d445ac8d5fec69e38c15e9204c71608a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd87d45147ee91be2467ca6c32046b5d445ac8d5fec69e38c15e9204c71608a4->enter($__internal_dd87d45147ee91be2467ca6c32046b5d445ac8d5fec69e38c15e9204c71608a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dd87d45147ee91be2467ca6c32046b5d445ac8d5fec69e38c15e9204c71608a4->leave($__internal_dd87d45147ee91be2467ca6c32046b5d445ac8d5fec69e38c15e9204c71608a4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e6cb3aef01e36b9b9c034cb9f00036ef9bfc4b86298f1f39817f4450a22fe14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6cb3aef01e36b9b9c034cb9f00036ef9bfc4b86298f1f39817f4450a22fe14->enter($__internal_2e6cb3aef01e36b9b9c034cb9f00036ef9bfc4b86298f1f39817f4450a22fe14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2e6cb3aef01e36b9b9c034cb9f00036ef9bfc4b86298f1f39817f4450a22fe14->leave($__internal_2e6cb3aef01e36b9b9c034cb9f00036ef9bfc4b86298f1f39817f4450a22fe14_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
