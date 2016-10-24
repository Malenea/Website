<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_759ad406321efc2a268f277c97a3dc86ce43c5bab5e166cc6e17078fdbf246a9 extends Twig_Template
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
        $__internal_be45cabf65c563ece4ff4adc676b6d1eeac3f57c6b4df0793bf5d9c61223678b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be45cabf65c563ece4ff4adc676b6d1eeac3f57c6b4df0793bf5d9c61223678b->enter($__internal_be45cabf65c563ece4ff4adc676b6d1eeac3f57c6b4df0793bf5d9c61223678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_be45cabf65c563ece4ff4adc676b6d1eeac3f57c6b4df0793bf5d9c61223678b->leave($__internal_be45cabf65c563ece4ff4adc676b6d1eeac3f57c6b4df0793bf5d9c61223678b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
