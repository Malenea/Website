<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e118e8f9527fe024bab7453a4eec4843d6bbd6dd2ddb661404e0355d625d9d1b extends Twig_Template
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
        $__internal_9a9162fb9dd74172a01ab3f14e21c3b131a9fb55d85daf99ec0d97796e96bd4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9162fb9dd74172a01ab3f14e21c3b131a9fb55d85daf99ec0d97796e96bd4a->enter($__internal_9a9162fb9dd74172a01ab3f14e21c3b131a9fb55d85daf99ec0d97796e96bd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9a9162fb9dd74172a01ab3f14e21c3b131a9fb55d85daf99ec0d97796e96bd4a->leave($__internal_9a9162fb9dd74172a01ab3f14e21c3b131a9fb55d85daf99ec0d97796e96bd4a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
