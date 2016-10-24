<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_285534a9e334fd9b0d1a1e4ec32e830383b208d5ec2308d5655a1a8f1296b8d1 extends Twig_Template
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
        $__internal_00aa35cccba3caec35d9ea09ba7ee2663336e256194aafbdc8be985a5d7dfb88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00aa35cccba3caec35d9ea09ba7ee2663336e256194aafbdc8be985a5d7dfb88->enter($__internal_00aa35cccba3caec35d9ea09ba7ee2663336e256194aafbdc8be985a5d7dfb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_00aa35cccba3caec35d9ea09ba7ee2663336e256194aafbdc8be985a5d7dfb88->leave($__internal_00aa35cccba3caec35d9ea09ba7ee2663336e256194aafbdc8be985a5d7dfb88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
