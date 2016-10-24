<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d3c4743b473c029116f0977e22bd287b8b5f3d2f4d404ea59970656ca291e417 extends Twig_Template
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
        $__internal_0b9cbde3a34c1aa8cf1e42f79fa5f7198f178c5af688e5d852cff58d8f32ae24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9cbde3a34c1aa8cf1e42f79fa5f7198f178c5af688e5d852cff58d8f32ae24->enter($__internal_0b9cbde3a34c1aa8cf1e42f79fa5f7198f178c5af688e5d852cff58d8f32ae24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0b9cbde3a34c1aa8cf1e42f79fa5f7198f178c5af688e5d852cff58d8f32ae24->leave($__internal_0b9cbde3a34c1aa8cf1e42f79fa5f7198f178c5af688e5d852cff58d8f32ae24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
