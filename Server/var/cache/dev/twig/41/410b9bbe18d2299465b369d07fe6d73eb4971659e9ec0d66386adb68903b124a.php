<?php

/* BHWebsiteBundle:Ws:recipe.html.twig */
class __TwigTemplate_43dfbb87374b179c61f53ffbf9462596123046d9e26f4af521dddc3732330dcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BHWebsiteBundle::layout.html.twig", "BHWebsiteBundle:Ws:recipe.html.twig", 1);
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
        $__internal_5dca0bf13d668bb6508709113ed43b51314101bde7334e232972edf9e83838bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dca0bf13d668bb6508709113ed43b51314101bde7334e232972edf9e83838bc->enter($__internal_5dca0bf13d668bb6508709113ed43b51314101bde7334e232972edf9e83838bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BHWebsiteBundle:Ws:recipe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dca0bf13d668bb6508709113ed43b51314101bde7334e232972edf9e83838bc->leave($__internal_5dca0bf13d668bb6508709113ed43b51314101bde7334e232972edf9e83838bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b0c9f4734f0af3d7acc65d51f1378feff281279865c8626e5a3707621c96713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0c9f4734f0af3d7acc65d51f1378feff281279865c8626e5a3707621c96713->enter($__internal_5b0c9f4734f0af3d7acc65d51f1378feff281279865c8626e5a3707621c96713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  BH Website - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5b0c9f4734f0af3d7acc65d51f1378feff281279865c8626e5a3707621c96713->leave($__internal_5b0c9f4734f0af3d7acc65d51f1378feff281279865c8626e5a3707621c96713_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_592df06ea7229ba11996f1482281cfa05b909c3d5573a490d724abf4b92c47f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592df06ea7229ba11996f1482281cfa05b909c3d5573a490d724abf4b92c47f6->enter($__internal_592df06ea7229ba11996f1482281cfa05b909c3d5573a490d724abf4b92c47f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
   <h1>Recipe and may Yonnaise be with you</h1>
     <p>
       
       <h2>Ingredients</h2></br>

        2 whole pastured eggs</br>
        1 tbsp. apple cider vinegar</br>
        3/4 tsp. salt</br>
        2 tsp. prepared mustard</br>
        2 cups light olive oil (not a vegetable blend)</br></br>

       <h3>Instructions</h3></br>

       Blend eggs, vinegar, salt, and mustard in food processor. While machine is running, slowly add oil, VERY SLOWLY!! Continue until all of the oil has been added and the eggs and oil have formed an emulsion or Mayonnaise. Taste for salt and adjust if needed.</br>
     </p>

     <p>
       <a class=\"btn btn-primary btn-lg\" href=\"https://www.youtube.com/watch?v=qSHXG-5ShFk\">
\t Mayonnaise Youtube
       </a>
     </p>

  <hr>

  ";
        // line 33
        $this->displayBlock('bhwebsite_body', $context, $blocks);
        // line 35
        echo "
";
        
        $__internal_592df06ea7229ba11996f1482281cfa05b909c3d5573a490d724abf4b92c47f6->leave($__internal_592df06ea7229ba11996f1482281cfa05b909c3d5573a490d724abf4b92c47f6_prof);

    }

    // line 33
    public function block_bhwebsite_body($context, array $blocks = array())
    {
        $__internal_d6ffc913a4c94da26245c7c8cbbd3daeb1fcab46218b891e55c3a03fd493b43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ffc913a4c94da26245c7c8cbbd3daeb1fcab46218b891e55c3a03fd493b43a->enter($__internal_d6ffc913a4c94da26245c7c8cbbd3daeb1fcab46218b891e55c3a03fd493b43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bhwebsite_body"));

        // line 34
        echo "  ";
        
        $__internal_d6ffc913a4c94da26245c7c8cbbd3daeb1fcab46218b891e55c3a03fd493b43a->leave($__internal_d6ffc913a4c94da26245c7c8cbbd3daeb1fcab46218b891e55c3a03fd493b43a_prof);

    }

    public function getTemplateName()
    {
        return "BHWebsiteBundle:Ws:recipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 34,  95 => 33,  87 => 35,  85 => 33,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"BHWebsiteBundle::layout.html.twig\" %}

{% block title %}
  BH Website - {{ parent() }}
{% endblock %}

{% block body %}

   <h1>Recipe and may Yonnaise be with you</h1>
     <p>
       
       <h2>Ingredients</h2></br>

        2 whole pastured eggs</br>
        1 tbsp. apple cider vinegar</br>
        3/4 tsp. salt</br>
        2 tsp. prepared mustard</br>
        2 cups light olive oil (not a vegetable blend)</br></br>

       <h3>Instructions</h3></br>

       Blend eggs, vinegar, salt, and mustard in food processor. While machine is running, slowly add oil, VERY SLOWLY!! Continue until all of the oil has been added and the eggs and oil have formed an emulsion or Mayonnaise. Taste for salt and adjust if needed.</br>
     </p>

     <p>
       <a class=\"btn btn-primary btn-lg\" href=\"https://www.youtube.com/watch?v=qSHXG-5ShFk\">
\t Mayonnaise Youtube
       </a>
     </p>

  <hr>

  {% block bhwebsite_body %}
  {% endblock %}

{% endblock %}
";
    }
}
