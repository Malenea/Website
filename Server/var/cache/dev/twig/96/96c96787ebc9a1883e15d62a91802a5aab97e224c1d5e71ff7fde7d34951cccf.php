<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b830f9145d370d1e60f205d8d09b4bb0d08291cf61777f624b6bf7bbb6b6af6d extends Twig_Template
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
        $__internal_a87109f2e9981237fd97b6629bf3f1203c1f7301470b88631b3ef5c3f2b2da5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87109f2e9981237fd97b6629bf3f1203c1f7301470b88631b3ef5c3f2b2da5a->enter($__internal_a87109f2e9981237fd97b6629bf3f1203c1f7301470b88631b3ef5c3f2b2da5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a87109f2e9981237fd97b6629bf3f1203c1f7301470b88631b3ef5c3f2b2da5a->leave($__internal_a87109f2e9981237fd97b6629bf3f1203c1f7301470b88631b3ef5c3f2b2da5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
