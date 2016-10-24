<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_44aa3fde80be95ef2f94cc45acc4fc37526f1fb5f0267779e032c9b78e4fd6f1 extends Twig_Template
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
        $__internal_c1d5185a574fc410267dc14c0e08483accdf37d012379b15cf21706755973c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d5185a574fc410267dc14c0e08483accdf37d012379b15cf21706755973c3f->enter($__internal_c1d5185a574fc410267dc14c0e08483accdf37d012379b15cf21706755973c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c1d5185a574fc410267dc14c0e08483accdf37d012379b15cf21706755973c3f->leave($__internal_c1d5185a574fc410267dc14c0e08483accdf37d012379b15cf21706755973c3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
