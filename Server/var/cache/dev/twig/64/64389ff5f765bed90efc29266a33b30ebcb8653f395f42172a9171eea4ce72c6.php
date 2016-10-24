<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4b5fa59356653754cc993b0599d87703cadde2cd42b93cdf824304b6007a7bf7 extends Twig_Template
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
        $__internal_8520c4ae01bc535e4ab974160fe6dcb31bfe3ad5b308849bf0c266782eb89b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8520c4ae01bc535e4ab974160fe6dcb31bfe3ad5b308849bf0c266782eb89b99->enter($__internal_8520c4ae01bc535e4ab974160fe6dcb31bfe3ad5b308849bf0c266782eb89b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8520c4ae01bc535e4ab974160fe6dcb31bfe3ad5b308849bf0c266782eb89b99->leave($__internal_8520c4ae01bc535e4ab974160fe6dcb31bfe3ad5b308849bf0c266782eb89b99_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
