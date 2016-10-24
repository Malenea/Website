<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0fb496956ac037d5c15fc2bc6c20ca85f084a1c9e53d2629f28036290e301538 extends Twig_Template
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
        $__internal_6ec5b4b9d3652a20f7a9cb7304a2b74827e653df2696e04d197c9d96ebc750e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec5b4b9d3652a20f7a9cb7304a2b74827e653df2696e04d197c9d96ebc750e8->enter($__internal_6ec5b4b9d3652a20f7a9cb7304a2b74827e653df2696e04d197c9d96ebc750e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6ec5b4b9d3652a20f7a9cb7304a2b74827e653df2696e04d197c9d96ebc750e8->leave($__internal_6ec5b4b9d3652a20f7a9cb7304a2b74827e653df2696e04d197c9d96ebc750e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
