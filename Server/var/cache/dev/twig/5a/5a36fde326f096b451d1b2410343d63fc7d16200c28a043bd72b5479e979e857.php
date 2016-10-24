<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b0cf3130b7005e00ee70fb14bf0c10c13f90b56c26ce52c26dda94ec410667f6 extends Twig_Template
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
        $__internal_147ac4b478ef0a06b34c7732beffacdadd7ddb45ee9d8b97f7c4f49b8d8ca3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147ac4b478ef0a06b34c7732beffacdadd7ddb45ee9d8b97f7c4f49b8d8ca3e6->enter($__internal_147ac4b478ef0a06b34c7732beffacdadd7ddb45ee9d8b97f7c4f49b8d8ca3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_147ac4b478ef0a06b34c7732beffacdadd7ddb45ee9d8b97f7c4f49b8d8ca3e6->leave($__internal_147ac4b478ef0a06b34c7732beffacdadd7ddb45ee9d8b97f7c4f49b8d8ca3e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
