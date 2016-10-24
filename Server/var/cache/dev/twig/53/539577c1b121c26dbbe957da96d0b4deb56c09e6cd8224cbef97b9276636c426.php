<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_284ff35531e3a4fa30eded94f46cd79d52fd9952f213cd1eef486d9687d3bec3 extends Twig_Template
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
        $__internal_13ac2e8829ff71284fe3626ecc74016b4c4880ba047358b59c3d186ef9e7ab67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ac2e8829ff71284fe3626ecc74016b4c4880ba047358b59c3d186ef9e7ab67->enter($__internal_13ac2e8829ff71284fe3626ecc74016b4c4880ba047358b59c3d186ef9e7ab67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_13ac2e8829ff71284fe3626ecc74016b4c4880ba047358b59c3d186ef9e7ab67->leave($__internal_13ac2e8829ff71284fe3626ecc74016b4c4880ba047358b59c3d186ef9e7ab67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
