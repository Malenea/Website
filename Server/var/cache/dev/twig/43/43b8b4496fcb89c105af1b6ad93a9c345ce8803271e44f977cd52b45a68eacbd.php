<?php

/* BHWebsiteBundle:Ws:index.html.twig */
class __TwigTemplate_18eb09ee5e0d753a5b41cbc88865678a6c2eaa71751be0d7e963a2239347d3e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BHWebsiteBundle::layout.html.twig", "BHWebsiteBundle:Ws:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BHWebsiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae0fb1c90744b4e36126772e52a0422c4aee17017a424d92a9db7dd96ce8c74b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0fb1c90744b4e36126772e52a0422c4aee17017a424d92a9db7dd96ce8c74b->enter($__internal_ae0fb1c90744b4e36126772e52a0422c4aee17017a424d92a9db7dd96ce8c74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BHWebsiteBundle:Ws:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae0fb1c90744b4e36126772e52a0422c4aee17017a424d92a9db7dd96ce8c74b->leave($__internal_ae0fb1c90744b4e36126772e52a0422c4aee17017a424d92a9db7dd96ce8c74b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5089b50be52fb3ba981d383a3a4aa725c8bf4bc4ae10e0d6ae7fe2cdc051d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5089b50be52fb3ba981d383a3a4aa725c8bf4bc4ae10e0d6ae7fe2cdc051d28->enter($__internal_d5089b50be52fb3ba981d383a3a4aa725c8bf4bc4ae10e0d6ae7fe2cdc051d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  My Home-naise page - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d5089b50be52fb3ba981d383a3a4aa725c8bf4bc4ae10e0d6ae7fe2cdc051d28->leave($__internal_d5089b50be52fb3ba981d383a3a4aa725c8bf4bc4ae10e0d6ae7fe2cdc051d28_prof);

    }

    public function getTemplateName()
    {
        return "BHWebsiteBundle:Ws:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"BHWebsiteBundle::layout.html.twig\" %}

{% block title %}
  My Home-naise page - {{ parent() }}
{% endblock %}
";
    }
}
