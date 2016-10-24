<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d3ef8ff16f0735a418a32654eb64ea927b679dd8faab46fbe03ad4e4b8e5a88f extends Twig_Template
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
        $__internal_104ad5e9497386c02852bf5627bb7dfe9a2d48bf06874c464c9c51ad916ab5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104ad5e9497386c02852bf5627bb7dfe9a2d48bf06874c464c9c51ad916ab5a0->enter($__internal_104ad5e9497386c02852bf5627bb7dfe9a2d48bf06874c464c9c51ad916ab5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_104ad5e9497386c02852bf5627bb7dfe9a2d48bf06874c464c9c51ad916ab5a0->leave($__internal_104ad5e9497386c02852bf5627bb7dfe9a2d48bf06874c464c9c51ad916ab5a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
