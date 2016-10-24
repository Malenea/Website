<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_65608093a72dcd0d7ad838e788364e784aab52d4e23aee0eedecb3748dd701d3 extends Twig_Template
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
        $__internal_c5999d8c29bb5c36fce92d5c0572be73ab5c02f954158cffb699e92737615e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5999d8c29bb5c36fce92d5c0572be73ab5c02f954158cffb699e92737615e04->enter($__internal_c5999d8c29bb5c36fce92d5c0572be73ab5c02f954158cffb699e92737615e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c5999d8c29bb5c36fce92d5c0572be73ab5c02f954158cffb699e92737615e04->leave($__internal_c5999d8c29bb5c36fce92d5c0572be73ab5c02f954158cffb699e92737615e04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
