<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b49745d7b8f8de861da29f28a8ec30715c46a65f7d9688b9f1dfee8edb300e62 extends Twig_Template
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
        $__internal_3a84e1bd2e3be90f9241076064e9825517ca4310ce73134e6e69241d9588b8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a84e1bd2e3be90f9241076064e9825517ca4310ce73134e6e69241d9588b8bb->enter($__internal_3a84e1bd2e3be90f9241076064e9825517ca4310ce73134e6e69241d9588b8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3a84e1bd2e3be90f9241076064e9825517ca4310ce73134e6e69241d9588b8bb->leave($__internal_3a84e1bd2e3be90f9241076064e9825517ca4310ce73134e6e69241d9588b8bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
