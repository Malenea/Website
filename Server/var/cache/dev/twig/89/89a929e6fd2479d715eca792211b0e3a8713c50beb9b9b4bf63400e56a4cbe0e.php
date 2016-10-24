<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_576c4209b7fe1dc5051a265372a441388726056c363a1c6cf43618adc2f3bd14 extends Twig_Template
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
        $__internal_d5f21cabfb060a02d938bf200ec2fe10607f04310c01065bfbb4798bcc91d124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f21cabfb060a02d938bf200ec2fe10607f04310c01065bfbb4798bcc91d124->enter($__internal_d5f21cabfb060a02d938bf200ec2fe10607f04310c01065bfbb4798bcc91d124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d5f21cabfb060a02d938bf200ec2fe10607f04310c01065bfbb4798bcc91d124->leave($__internal_d5f21cabfb060a02d938bf200ec2fe10607f04310c01065bfbb4798bcc91d124_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
