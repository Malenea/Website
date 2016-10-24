<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a04dfb24b6134e9553d596c0072cd036dd1234109ab0c57309a4227c86ad4648 extends Twig_Template
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
        $__internal_ec71056605211add50871c29ee22812c455d779896b623b08eb7101f4646e366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec71056605211add50871c29ee22812c455d779896b623b08eb7101f4646e366->enter($__internal_ec71056605211add50871c29ee22812c455d779896b623b08eb7101f4646e366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ec71056605211add50871c29ee22812c455d779896b623b08eb7101f4646e366->leave($__internal_ec71056605211add50871c29ee22812c455d779896b623b08eb7101f4646e366_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
