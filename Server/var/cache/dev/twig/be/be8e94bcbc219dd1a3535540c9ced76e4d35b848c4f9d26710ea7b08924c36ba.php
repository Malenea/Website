<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_db71e8ec2f3b7b6aafc72602ed2a920c1c27d4f435f0d47f131ad8f5878f6e87 extends Twig_Template
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
        $__internal_243387f2d88e8cde424932989c17e6c914b9745a9f26780c45d25de387bc91f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243387f2d88e8cde424932989c17e6c914b9745a9f26780c45d25de387bc91f3->enter($__internal_243387f2d88e8cde424932989c17e6c914b9745a9f26780c45d25de387bc91f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_243387f2d88e8cde424932989c17e6c914b9745a9f26780c45d25de387bc91f3->leave($__internal_243387f2d88e8cde424932989c17e6c914b9745a9f26780c45d25de387bc91f3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
