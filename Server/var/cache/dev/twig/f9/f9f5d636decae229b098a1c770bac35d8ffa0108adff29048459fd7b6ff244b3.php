<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_7643a9c91d52cc7c6a0d93769ca73c75a055174cfe598c1b83d71e302c9a65ff extends Twig_Template
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
        $__internal_2748e9706253207141532e25e0b9055acb581566fac0e7b0535c84fa15ddf2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2748e9706253207141532e25e0b9055acb581566fac0e7b0535c84fa15ddf2f2->enter($__internal_2748e9706253207141532e25e0b9055acb581566fac0e7b0535c84fa15ddf2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2748e9706253207141532e25e0b9055acb581566fac0e7b0535c84fa15ddf2f2->leave($__internal_2748e9706253207141532e25e0b9055acb581566fac0e7b0535c84fa15ddf2f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
