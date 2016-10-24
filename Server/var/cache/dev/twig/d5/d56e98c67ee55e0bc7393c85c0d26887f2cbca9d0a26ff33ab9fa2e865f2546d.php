<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_83e39fa681066be7b8c6a577b479bd29533c3fceb0d4962c3c574e5620e76ddb extends Twig_Template
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
        $__internal_9573b0e69e04ccab77f6c19928c1551f0fd1bf31ac8c0b4a346047a543cb8e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9573b0e69e04ccab77f6c19928c1551f0fd1bf31ac8c0b4a346047a543cb8e41->enter($__internal_9573b0e69e04ccab77f6c19928c1551f0fd1bf31ac8c0b4a346047a543cb8e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9573b0e69e04ccab77f6c19928c1551f0fd1bf31ac8c0b4a346047a543cb8e41->leave($__internal_9573b0e69e04ccab77f6c19928c1551f0fd1bf31ac8c0b4a346047a543cb8e41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
