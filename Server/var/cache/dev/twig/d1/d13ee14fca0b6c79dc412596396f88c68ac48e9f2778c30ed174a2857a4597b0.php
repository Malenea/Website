<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f562c3aca8d4d97d2ee1a031cfc857c3dfac87f7de5bc1cb7206a3c4e486a4de extends Twig_Template
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
        $__internal_257d4cd11888a3a15cc41758368ff188b6bd931e8587e88cad7cdebbd90d9e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257d4cd11888a3a15cc41758368ff188b6bd931e8587e88cad7cdebbd90d9e73->enter($__internal_257d4cd11888a3a15cc41758368ff188b6bd931e8587e88cad7cdebbd90d9e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_257d4cd11888a3a15cc41758368ff188b6bd931e8587e88cad7cdebbd90d9e73->leave($__internal_257d4cd11888a3a15cc41758368ff188b6bd931e8587e88cad7cdebbd90d9e73_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
