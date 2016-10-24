<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ecfb925b77ffeb503eafef4f4834d50d4a5870f8c084182d695912bb8ee47b90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20d587ba74882a23cb8538468baa602d7cdb778a5e53eeb62e9189229e54babf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d587ba74882a23cb8538468baa602d7cdb778a5e53eeb62e9189229e54babf->enter($__internal_20d587ba74882a23cb8538468baa602d7cdb778a5e53eeb62e9189229e54babf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20d587ba74882a23cb8538468baa602d7cdb778a5e53eeb62e9189229e54babf->leave($__internal_20d587ba74882a23cb8538468baa602d7cdb778a5e53eeb62e9189229e54babf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5400009a1bc93c2b27459f30aab1c2b13799669cd1ffb93e0cadeecd0cc45ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5400009a1bc93c2b27459f30aab1c2b13799669cd1ffb93e0cadeecd0cc45ffb->enter($__internal_5400009a1bc93c2b27459f30aab1c2b13799669cd1ffb93e0cadeecd0cc45ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5400009a1bc93c2b27459f30aab1c2b13799669cd1ffb93e0cadeecd0cc45ffb->leave($__internal_5400009a1bc93c2b27459f30aab1c2b13799669cd1ffb93e0cadeecd0cc45ffb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3052274078d2bcaac7ff2eebcb82e25a3655618b5ef9aab28a605660747f76f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3052274078d2bcaac7ff2eebcb82e25a3655618b5ef9aab28a605660747f76f1->enter($__internal_3052274078d2bcaac7ff2eebcb82e25a3655618b5ef9aab28a605660747f76f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3052274078d2bcaac7ff2eebcb82e25a3655618b5ef9aab28a605660747f76f1->leave($__internal_3052274078d2bcaac7ff2eebcb82e25a3655618b5ef9aab28a605660747f76f1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
