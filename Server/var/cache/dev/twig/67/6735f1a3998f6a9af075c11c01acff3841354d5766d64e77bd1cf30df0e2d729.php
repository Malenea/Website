<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c47db8c07eb192781b17f8491c938c03e3a3bfef41d78a7bf45e0e5977bc172a extends Twig_Template
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
        $__internal_70a2f9faaca1214967f18dbcdc9b3891e79b0ea8ebf5729fa867558a723b8c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a2f9faaca1214967f18dbcdc9b3891e79b0ea8ebf5729fa867558a723b8c2e->enter($__internal_70a2f9faaca1214967f18dbcdc9b3891e79b0ea8ebf5729fa867558a723b8c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_70a2f9faaca1214967f18dbcdc9b3891e79b0ea8ebf5729fa867558a723b8c2e->leave($__internal_70a2f9faaca1214967f18dbcdc9b3891e79b0ea8ebf5729fa867558a723b8c2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
