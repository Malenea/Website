<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_86cb6b461b99d6fa3711a75ef3a259613c88debe173e73e78a150757aa6a6f10 extends Twig_Template
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
        $__internal_e4a6d73e0ab6ffebe3af23e0c48f3cf6c1b75fdbf0f6604bb6a4639ff64a44ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a6d73e0ab6ffebe3af23e0c48f3cf6c1b75fdbf0f6604bb6a4639ff64a44ba->enter($__internal_e4a6d73e0ab6ffebe3af23e0c48f3cf6c1b75fdbf0f6604bb6a4639ff64a44ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e4a6d73e0ab6ffebe3af23e0c48f3cf6c1b75fdbf0f6604bb6a4639ff64a44ba->leave($__internal_e4a6d73e0ab6ffebe3af23e0c48f3cf6c1b75fdbf0f6604bb6a4639ff64a44ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
