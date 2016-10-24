<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3db861d19c751a50bab8f8cd5c8dd42224c74dbdcb1235dddb34639db4fd0899 extends Twig_Template
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
        $__internal_3542b5c3cc4a92c7fb352a6aa2248a0bf73d68fc637f5590614e26f6ab15731b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3542b5c3cc4a92c7fb352a6aa2248a0bf73d68fc637f5590614e26f6ab15731b->enter($__internal_3542b5c3cc4a92c7fb352a6aa2248a0bf73d68fc637f5590614e26f6ab15731b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3542b5c3cc4a92c7fb352a6aa2248a0bf73d68fc637f5590614e26f6ab15731b->leave($__internal_3542b5c3cc4a92c7fb352a6aa2248a0bf73d68fc637f5590614e26f6ab15731b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
