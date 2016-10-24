<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_086bd0f1c0d1cff6296ae39482db75d2bedbfe22f0fa34fb14d59aae1adf73b6 extends Twig_Template
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
        $__internal_0c8fbe2cbc8c27acfa324d20abeb760a59865ffd9dc096d20c47d6ecb39f7b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8fbe2cbc8c27acfa324d20abeb760a59865ffd9dc096d20c47d6ecb39f7b01->enter($__internal_0c8fbe2cbc8c27acfa324d20abeb760a59865ffd9dc096d20c47d6ecb39f7b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0c8fbe2cbc8c27acfa324d20abeb760a59865ffd9dc096d20c47d6ecb39f7b01->leave($__internal_0c8fbe2cbc8c27acfa324d20abeb760a59865ffd9dc096d20c47d6ecb39f7b01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
