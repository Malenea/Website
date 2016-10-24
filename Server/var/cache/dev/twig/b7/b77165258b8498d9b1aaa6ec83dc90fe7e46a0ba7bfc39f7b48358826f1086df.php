<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_2d62879d7411d50fb763f10ec458422f8d49ed277b81697dee00c786cbb16b86 extends Twig_Template
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
        $__internal_5d049d08f56dec6f4be01c9ae491a7ef3597ca86ca1d46945038e5e85e1da25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d049d08f56dec6f4be01c9ae491a7ef3597ca86ca1d46945038e5e85e1da25f->enter($__internal_5d049d08f56dec6f4be01c9ae491a7ef3597ca86ca1d46945038e5e85e1da25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_5d049d08f56dec6f4be01c9ae491a7ef3597ca86ca1d46945038e5e85e1da25f->leave($__internal_5d049d08f56dec6f4be01c9ae491a7ef3597ca86ca1d46945038e5e85e1da25f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
