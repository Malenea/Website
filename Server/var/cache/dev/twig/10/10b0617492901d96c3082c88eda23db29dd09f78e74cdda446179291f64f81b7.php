<?php

/* BHWebsiteBundle:Ws:confirmation.html.twig */
class __TwigTemplate_3daf1e4a8d1b4e7184eb757cdf1f5dede7eb7533a8432d6337db0813c59b41e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BHWebsiteBundle::layout.html.twig", "BHWebsiteBundle:Ws:confirmation.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'bhwebsite_body' => array($this, 'block_bhwebsite_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BHWebsiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_129c55bbdf3aef251e40a0db9de1c0a903ce9954b9cbbe12cf7b6657755cc236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129c55bbdf3aef251e40a0db9de1c0a903ce9954b9cbbe12cf7b6657755cc236->enter($__internal_129c55bbdf3aef251e40a0db9de1c0a903ce9954b9cbbe12cf7b6657755cc236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BHWebsiteBundle:Ws:confirmation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_129c55bbdf3aef251e40a0db9de1c0a903ce9954b9cbbe12cf7b6657755cc236->leave($__internal_129c55bbdf3aef251e40a0db9de1c0a903ce9954b9cbbe12cf7b6657755cc236_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da788cf8dc763350860904b0071700ad118916ab3b582502c30fdbfe4d101c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da788cf8dc763350860904b0071700ad118916ab3b582502c30fdbfe4d101c94->enter($__internal_da788cf8dc763350860904b0071700ad118916ab3b582502c30fdbfe4d101c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  BH Website - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_da788cf8dc763350860904b0071700ad118916ab3b582502c30fdbfe4d101c94->leave($__internal_da788cf8dc763350860904b0071700ad118916ab3b582502c30fdbfe4d101c94_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_043964c25722e1ab5014923cf6ad2c1abb5374c5a3ead58d99d0301d4f155bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043964c25722e1ab5014923cf6ad2c1abb5374c5a3ead58d99d0301d4f155bd9->enter($__internal_043964c25722e1ab5014923cf6ad2c1abb5374c5a3ead58d99d0301d4f155bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>Mayonnaise Response</title>
  </head>
  <body>
    <h1>What happened ?</h1>

    <div>
      <p>
\tThe mail you typed was sent</br>
\tYou can click the button below to return to the menu</br></br>
\t<a class=\"btn btn-primary btn-lg\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bh_website_homepage");
        echo "\">
\t  Return to homepage
\t</a>
      </p>
    </div>

  </body>
</html>

  ";
        // line 30
        $this->displayBlock('bhwebsite_body', $context, $blocks);
        // line 32
        echo "
";
        
        $__internal_043964c25722e1ab5014923cf6ad2c1abb5374c5a3ead58d99d0301d4f155bd9->leave($__internal_043964c25722e1ab5014923cf6ad2c1abb5374c5a3ead58d99d0301d4f155bd9_prof);

    }

    // line 30
    public function block_bhwebsite_body($context, array $blocks = array())
    {
        $__internal_db5a65c58af377f4176c16febbea36369350803d76585acba2c7fe7c959c14c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5a65c58af377f4176c16febbea36369350803d76585acba2c7fe7c959c14c6->enter($__internal_db5a65c58af377f4176c16febbea36369350803d76585acba2c7fe7c959c14c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bhwebsite_body"));

        // line 31
        echo "  ";
        
        $__internal_db5a65c58af377f4176c16febbea36369350803d76585acba2c7fe7c959c14c6->leave($__internal_db5a65c58af377f4176c16febbea36369350803d76585acba2c7fe7c959c14c6_prof);

    }

    public function getTemplateName()
    {
        return "BHWebsiteBundle:Ws:confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  95 => 30,  87 => 32,  85 => 30,  73 => 21,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"BHWebsiteBundle::layout.html.twig\" %}

{% block title %}
  BH Website - {{ parent() }}
{% endblock %}

{% block body %}

<!DOCTYPE html>
<html>
  <head>
    <title>Mayonnaise Response</title>
  </head>
  <body>
    <h1>What happened ?</h1>

    <div>
      <p>
\tThe mail you typed was sent</br>
\tYou can click the button below to return to the menu</br></br>
\t<a class=\"btn btn-primary btn-lg\" href=\"{{ path('bh_website_homepage') }}\">
\t  Return to homepage
\t</a>
      </p>
    </div>

  </body>
</html>

  {% block bhwebsite_body %}
  {% endblock %}

{% endblock %}
";
    }
}
