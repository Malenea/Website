<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_376a981b6ba3c0fb4e407c390303ca469502f5512aab7120c160e18a70bde977 extends Twig_Template
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
        $__internal_647f1bf9267ccd68e342efa975beab5d603cfe55cb864b67cb3d9069fe3613f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647f1bf9267ccd68e342efa975beab5d603cfe55cb864b67cb3d9069fe3613f9->enter($__internal_647f1bf9267ccd68e342efa975beab5d603cfe55cb864b67cb3d9069fe3613f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_647f1bf9267ccd68e342efa975beab5d603cfe55cb864b67cb3d9069fe3613f9->leave($__internal_647f1bf9267ccd68e342efa975beab5d603cfe55cb864b67cb3d9069fe3613f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
