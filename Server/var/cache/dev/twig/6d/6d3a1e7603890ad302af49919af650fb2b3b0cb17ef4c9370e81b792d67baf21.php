<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5914ecf7a7aeec7d7d7132dd827bb5c9fa5c7b74e8951842ee3d4acef16bdc55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c26864485c5519a3a55e9c7c21b1d21273e5462cdbfc57c4cfb87f380ac483b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26864485c5519a3a55e9c7c21b1d21273e5462cdbfc57c4cfb87f380ac483b1->enter($__internal_c26864485c5519a3a55e9c7c21b1d21273e5462cdbfc57c4cfb87f380ac483b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c26864485c5519a3a55e9c7c21b1d21273e5462cdbfc57c4cfb87f380ac483b1->leave($__internal_c26864485c5519a3a55e9c7c21b1d21273e5462cdbfc57c4cfb87f380ac483b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf31059f00ef6c8c6cf9c43dded43937a8261f95cb91943c9f47c9b25fbd4917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf31059f00ef6c8c6cf9c43dded43937a8261f95cb91943c9f47c9b25fbd4917->enter($__internal_cf31059f00ef6c8c6cf9c43dded43937a8261f95cb91943c9f47c9b25fbd4917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cf31059f00ef6c8c6cf9c43dded43937a8261f95cb91943c9f47c9b25fbd4917->leave($__internal_cf31059f00ef6c8c6cf9c43dded43937a8261f95cb91943c9f47c9b25fbd4917_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d5dfd2950a285f1d011ecff2241242be941de3bf1dc271eb3111ffa943cf61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5dfd2950a285f1d011ecff2241242be941de3bf1dc271eb3111ffa943cf61a->enter($__internal_1d5dfd2950a285f1d011ecff2241242be941de3bf1dc271eb3111ffa943cf61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1d5dfd2950a285f1d011ecff2241242be941de3bf1dc271eb3111ffa943cf61a->leave($__internal_1d5dfd2950a285f1d011ecff2241242be941de3bf1dc271eb3111ffa943cf61a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_16ff3c2a6e43370edad06daad983d138125daf1a6b34fcec0f56d1011554a82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ff3c2a6e43370edad06daad983d138125daf1a6b34fcec0f56d1011554a82d->enter($__internal_16ff3c2a6e43370edad06daad983d138125daf1a6b34fcec0f56d1011554a82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_16ff3c2a6e43370edad06daad983d138125daf1a6b34fcec0f56d1011554a82d->leave($__internal_16ff3c2a6e43370edad06daad983d138125daf1a6b34fcec0f56d1011554a82d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
