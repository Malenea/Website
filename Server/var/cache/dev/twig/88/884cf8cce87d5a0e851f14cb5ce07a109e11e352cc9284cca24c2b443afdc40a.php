<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_7298fef19891e7c94794ba61bcc6e290e9ea633aa5099c1578c8909591405ce7 extends Twig_Template
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
        $__internal_5dd23c4057cdd522423d4b7dfc81ec77e3eaf01b6bb30b175cd510b11e565f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd23c4057cdd522423d4b7dfc81ec77e3eaf01b6bb30b175cd510b11e565f2d->enter($__internal_5dd23c4057cdd522423d4b7dfc81ec77e3eaf01b6bb30b175cd510b11e565f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5dd23c4057cdd522423d4b7dfc81ec77e3eaf01b6bb30b175cd510b11e565f2d->leave($__internal_5dd23c4057cdd522423d4b7dfc81ec77e3eaf01b6bb30b175cd510b11e565f2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
