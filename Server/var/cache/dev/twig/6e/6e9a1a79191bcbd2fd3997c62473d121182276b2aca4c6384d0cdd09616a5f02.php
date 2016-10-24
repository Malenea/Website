<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d0e37c45781c4e41853b4e9a93947025793606a3aaa67e0ecf7af830cb6579b8 extends Twig_Template
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
        $__internal_523b79d9902eb4510cfa45159f7532708c1dba87b30daa67e2047004af60a5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523b79d9902eb4510cfa45159f7532708c1dba87b30daa67e2047004af60a5f8->enter($__internal_523b79d9902eb4510cfa45159f7532708c1dba87b30daa67e2047004af60a5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_523b79d9902eb4510cfa45159f7532708c1dba87b30daa67e2047004af60a5f8->leave($__internal_523b79d9902eb4510cfa45159f7532708c1dba87b30daa67e2047004af60a5f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
