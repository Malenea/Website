<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_cfb85eed306730225a05e25fdf9a52c336c92ab498ea822bafb7c747cf7bcb1d extends Twig_Template
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
        $__internal_a85326112a35bc541949ef84c75a465cf0c22b644478d9ba32f5227bfb046b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85326112a35bc541949ef84c75a465cf0c22b644478d9ba32f5227bfb046b09->enter($__internal_a85326112a35bc541949ef84c75a465cf0c22b644478d9ba32f5227bfb046b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a85326112a35bc541949ef84c75a465cf0c22b644478d9ba32f5227bfb046b09->leave($__internal_a85326112a35bc541949ef84c75a465cf0c22b644478d9ba32f5227bfb046b09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
