<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_86999c0a5dffab370ae4c6834040cec06a72da0e70a12054a31732deb182324d extends Twig_Template
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
        $__internal_d672f0608a47d7be2c5c2fa272bc0a25c022a4d03e30d733a1870ab7fcb5a45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d672f0608a47d7be2c5c2fa272bc0a25c022a4d03e30d733a1870ab7fcb5a45a->enter($__internal_d672f0608a47d7be2c5c2fa272bc0a25c022a4d03e30d733a1870ab7fcb5a45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d672f0608a47d7be2c5c2fa272bc0a25c022a4d03e30d733a1870ab7fcb5a45a->leave($__internal_d672f0608a47d7be2c5c2fa272bc0a25c022a4d03e30d733a1870ab7fcb5a45a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
