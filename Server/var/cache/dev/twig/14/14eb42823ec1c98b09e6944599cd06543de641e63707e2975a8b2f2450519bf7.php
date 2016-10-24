<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a30c2c5d9d7c3f2add5885e1b77af82afbcb81337900885a3befad2fe07fb378 extends Twig_Template
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
        $__internal_5b5d3f757d34f10f1a07d311204159cc0023033803fc10a28c0ae5d70bbbfa07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5d3f757d34f10f1a07d311204159cc0023033803fc10a28c0ae5d70bbbfa07->enter($__internal_5b5d3f757d34f10f1a07d311204159cc0023033803fc10a28c0ae5d70bbbfa07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5b5d3f757d34f10f1a07d311204159cc0023033803fc10a28c0ae5d70bbbfa07->leave($__internal_5b5d3f757d34f10f1a07d311204159cc0023033803fc10a28c0ae5d70bbbfa07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
