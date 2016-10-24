<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b5f6b6991f77f234c9c76c9130d8a849a3b8400c6029c52be990b4d6cb4fc969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a3740704773033e7ca691d1b7a3ed32823c103baca720954d854f7006dc36b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3740704773033e7ca691d1b7a3ed32823c103baca720954d854f7006dc36b6->enter($__internal_0a3740704773033e7ca691d1b7a3ed32823c103baca720954d854f7006dc36b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0a3740704773033e7ca691d1b7a3ed32823c103baca720954d854f7006dc36b6->leave($__internal_0a3740704773033e7ca691d1b7a3ed32823c103baca720954d854f7006dc36b6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_61dc2c3eab36f36f13904422edc81d95ca9bfa65bca8592486078273105debd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61dc2c3eab36f36f13904422edc81d95ca9bfa65bca8592486078273105debd5->enter($__internal_61dc2c3eab36f36f13904422edc81d95ca9bfa65bca8592486078273105debd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_61dc2c3eab36f36f13904422edc81d95ca9bfa65bca8592486078273105debd5->leave($__internal_61dc2c3eab36f36f13904422edc81d95ca9bfa65bca8592486078273105debd5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
