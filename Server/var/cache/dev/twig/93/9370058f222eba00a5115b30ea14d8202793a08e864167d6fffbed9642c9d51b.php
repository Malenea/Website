<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e5268ddfb4783dc1057b202e200a0aa0d601e370c71f1e9faa7a24e1a2323464 extends Twig_Template
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
        $__internal_84549691d1e08d8fd4d8318d3bf5dd77700abe2d59e954d5bb8bcf4b8a7f26d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84549691d1e08d8fd4d8318d3bf5dd77700abe2d59e954d5bb8bcf4b8a7f26d3->enter($__internal_84549691d1e08d8fd4d8318d3bf5dd77700abe2d59e954d5bb8bcf4b8a7f26d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_84549691d1e08d8fd4d8318d3bf5dd77700abe2d59e954d5bb8bcf4b8a7f26d3->leave($__internal_84549691d1e08d8fd4d8318d3bf5dd77700abe2d59e954d5bb8bcf4b8a7f26d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
