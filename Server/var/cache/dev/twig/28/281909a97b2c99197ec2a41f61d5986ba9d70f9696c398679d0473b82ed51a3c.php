<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_89a150e195a804f660a20b8f716d090387a2332e3b338ab409797d5d17fb0298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3248641109a8361323790b6de602fbe804c3f7a9602da68a62f318347f9b4d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3248641109a8361323790b6de602fbe804c3f7a9602da68a62f318347f9b4d1f->enter($__internal_3248641109a8361323790b6de602fbe804c3f7a9602da68a62f318347f9b4d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3248641109a8361323790b6de602fbe804c3f7a9602da68a62f318347f9b4d1f->leave($__internal_3248641109a8361323790b6de602fbe804c3f7a9602da68a62f318347f9b4d1f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e96618a7f93314b9cadf154588f86bc61078e4c0b71f13b879eb7e5a59fa3c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96618a7f93314b9cadf154588f86bc61078e4c0b71f13b879eb7e5a59fa3c8d->enter($__internal_e96618a7f93314b9cadf154588f86bc61078e4c0b71f13b879eb7e5a59fa3c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e96618a7f93314b9cadf154588f86bc61078e4c0b71f13b879eb7e5a59fa3c8d->leave($__internal_e96618a7f93314b9cadf154588f86bc61078e4c0b71f13b879eb7e5a59fa3c8d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_381608753a51d39eb99ede0d0f36685b2863718cd22e40662653575a1e58014a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381608753a51d39eb99ede0d0f36685b2863718cd22e40662653575a1e58014a->enter($__internal_381608753a51d39eb99ede0d0f36685b2863718cd22e40662653575a1e58014a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_381608753a51d39eb99ede0d0f36685b2863718cd22e40662653575a1e58014a->leave($__internal_381608753a51d39eb99ede0d0f36685b2863718cd22e40662653575a1e58014a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f539c85d841f5cfcdfd8444fc985736da3373336fabc69caa569e3a3d1638d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f539c85d841f5cfcdfd8444fc985736da3373336fabc69caa569e3a3d1638d4->enter($__internal_5f539c85d841f5cfcdfd8444fc985736da3373336fabc69caa569e3a3d1638d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5f539c85d841f5cfcdfd8444fc985736da3373336fabc69caa569e3a3d1638d4->leave($__internal_5f539c85d841f5cfcdfd8444fc985736da3373336fabc69caa569e3a3d1638d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
