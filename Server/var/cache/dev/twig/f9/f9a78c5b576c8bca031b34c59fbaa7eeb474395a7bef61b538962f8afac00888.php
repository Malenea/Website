<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_14b9712974a237c04bfb665ac0273bc5be7841f4d9021181e2079cfa2f9e528f extends Twig_Template
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
        $__internal_5e4c8c1f9b971cd5f43af20edeebcc6a79b454557d0fc29f833859ec97e8b272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4c8c1f9b971cd5f43af20edeebcc6a79b454557d0fc29f833859ec97e8b272->enter($__internal_5e4c8c1f9b971cd5f43af20edeebcc6a79b454557d0fc29f833859ec97e8b272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_5e4c8c1f9b971cd5f43af20edeebcc6a79b454557d0fc29f833859ec97e8b272->leave($__internal_5e4c8c1f9b971cd5f43af20edeebcc6a79b454557d0fc29f833859ec97e8b272_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
    }
}
