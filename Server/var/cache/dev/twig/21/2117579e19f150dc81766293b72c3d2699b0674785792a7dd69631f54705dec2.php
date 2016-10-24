<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_63d093a567fb4313ae532731db2e6ca7617bd39a40996c1dfe9f4ac1e62c0ffc extends Twig_Template
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
        $__internal_3fdc3b8cd9c7c0049fad1b0d926159fed910dda62885b6e76f5a8b3623be8862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fdc3b8cd9c7c0049fad1b0d926159fed910dda62885b6e76f5a8b3623be8862->enter($__internal_3fdc3b8cd9c7c0049fad1b0d926159fed910dda62885b6e76f5a8b3623be8862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3fdc3b8cd9c7c0049fad1b0d926159fed910dda62885b6e76f5a8b3623be8862->leave($__internal_3fdc3b8cd9c7c0049fad1b0d926159fed910dda62885b6e76f5a8b3623be8862_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
