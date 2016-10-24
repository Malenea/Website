<?php

/* BHWebsiteBundle::layout.html.twig */
class __TwigTemplate_efff44a1a1dfc80b38b11b58d245f05e5c442739aacca7e0e87239c24504c560 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "BHWebsiteBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'bhwebsite_body' => array($this, 'block_bhwebsite_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_974106ea70d25e88d8edcdb7fd5d77f772c5ad5eb74e9dc42fdd61dc4059cc29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974106ea70d25e88d8edcdb7fd5d77f772c5ad5eb74e9dc42fdd61dc4059cc29->enter($__internal_974106ea70d25e88d8edcdb7fd5d77f772c5ad5eb74e9dc42fdd61dc4059cc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BHWebsiteBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_974106ea70d25e88d8edcdb7fd5d77f772c5ad5eb74e9dc42fdd61dc4059cc29->leave($__internal_974106ea70d25e88d8edcdb7fd5d77f772c5ad5eb74e9dc42fdd61dc4059cc29_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39d976c04daec0d2adffa3ee835c84eb59326b90073c2fdc27bd96c20a3a0423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d976c04daec0d2adffa3ee835c84eb59326b90073c2fdc27bd96c20a3a0423->enter($__internal_39d976c04daec0d2adffa3ee835c84eb59326b90073c2fdc27bd96c20a3a0423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mayonnaise - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_39d976c04daec0d2adffa3ee835c84eb59326b90073c2fdc27bd96c20a3a0423->leave($__internal_39d976c04daec0d2adffa3ee835c84eb59326b90073c2fdc27bd96c20a3a0423_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fdd04820d48b68eeaa8229cb1abe4c3aa64d8560bdde65b13ab748445ff6e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fdd04820d48b68eeaa8229cb1abe4c3aa64d8560bdde65b13ab748445ff6e95->enter($__internal_9fdd04820d48b68eeaa8229cb1abe4c3aa64d8560bdde65b13ab748445ff6e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <h1>Ze Mayonnaise</h1>
    <p>
       Mayonnaise is a thick, creamy dressing often used as a condiment.
       It is a stable emulsion of oil, egg yolk, and either vinegar or lemon juice,
       with many options for embellishment with other herbs and spices.
       Proteins and lecithin in the egg yolk serve as emulsifiers in both
       mayonnaise and hollandaise sauce. Commercial egg-free alternatives are available
       for vegans and others who want to avoid animal products and cholesterol,
       or who are allergic to eggs.</br>
    </p>
    <p>
      <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bh_website_recipe");
        echo "\">
\tI wanna make my own Mayonnaise
      </a>
    </p>

     <hr>
</div>

  ";
        // line 28
        $this->displayBlock('bhwebsite_body', $context, $blocks);
        // line 30
        echo "
";
        
        $__internal_9fdd04820d48b68eeaa8229cb1abe4c3aa64d8560bdde65b13ab748445ff6e95->leave($__internal_9fdd04820d48b68eeaa8229cb1abe4c3aa64d8560bdde65b13ab748445ff6e95_prof);

    }

    // line 28
    public function block_bhwebsite_body($context, array $blocks = array())
    {
        $__internal_8ecbe7d29463d9a32615a58be7bc508048f8fe248d3468fc0c97ae722c70ee79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ecbe7d29463d9a32615a58be7bc508048f8fe248d3468fc0c97ae722c70ee79->enter($__internal_8ecbe7d29463d9a32615a58be7bc508048f8fe248d3468fc0c97ae722c70ee79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bhwebsite_body"));

        // line 29
        echo "  ";
        
        $__internal_8ecbe7d29463d9a32615a58be7bc508048f8fe248d3468fc0c97ae722c70ee79->leave($__internal_8ecbe7d29463d9a32615a58be7bc508048f8fe248d3468fc0c97ae722c70ee79_prof);

    }

    public function getTemplateName()
    {
        return "BHWebsiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  93 => 28,  85 => 30,  83 => 28,  72 => 20,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::layout.html.twig\" %}

{% block title %}
  Mayonnaise - {{ parent() }}
{% endblock %}

{% block body %}

    <h1>Ze Mayonnaise</h1>
    <p>
       Mayonnaise is a thick, creamy dressing often used as a condiment.
       It is a stable emulsion of oil, egg yolk, and either vinegar or lemon juice,
       with many options for embellishment with other herbs and spices.
       Proteins and lecithin in the egg yolk serve as emulsifiers in both
       mayonnaise and hollandaise sauce. Commercial egg-free alternatives are available
       for vegans and others who want to avoid animal products and cholesterol,
       or who are allergic to eggs.</br>
    </p>
    <p>
      <a class=\"btn btn-primary btn-lg\" href=\"{{ path('bh_website_recipe') }}\">
\tI wanna make my own Mayonnaise
      </a>
    </p>

     <hr>
</div>

  {% block bhwebsite_body %}
  {% endblock %}

{% endblock %}
";
    }
}
