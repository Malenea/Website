<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ed87a41a3a0827be51207aeb4491430e36e85913eb25d1ac9a6e74cef5fdb43d extends Twig_Template
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
        $__internal_c26c4c0dde9f6d56fecf78a707f964bd48328fa7d21189913f9f82842a9a9ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26c4c0dde9f6d56fecf78a707f964bd48328fa7d21189913f9f82842a9a9ad1->enter($__internal_c26c4c0dde9f6d56fecf78a707f964bd48328fa7d21189913f9f82842a9a9ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c26c4c0dde9f6d56fecf78a707f964bd48328fa7d21189913f9f82842a9a9ad1->leave($__internal_c26c4c0dde9f6d56fecf78a707f964bd48328fa7d21189913f9f82842a9a9ad1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
