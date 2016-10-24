<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_77f9b18ef1413a418e1a759db57b6b1c966ba1bb11be58ecd2d6a35a5b329e09 extends Twig_Template
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
        $__internal_ba57820978c92502353b94de378b6b187ee1741e29bf972884be1785c037ae73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba57820978c92502353b94de378b6b187ee1741e29bf972884be1785c037ae73->enter($__internal_ba57820978c92502353b94de378b6b187ee1741e29bf972884be1785c037ae73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ba57820978c92502353b94de378b6b187ee1741e29bf972884be1785c037ae73->leave($__internal_ba57820978c92502353b94de378b6b187ee1741e29bf972884be1785c037ae73_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
