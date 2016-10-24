<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_67b340b2f9000dd67e6d24d11cbcd87879dbb398463fc501e159c0cb94e4e458 extends Twig_Template
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
        $__internal_dcf66486e7079918d81ea1388495a1c2cf5bfac587325a00698c21a8ff66d87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf66486e7079918d81ea1388495a1c2cf5bfac587325a00698c21a8ff66d87e->enter($__internal_dcf66486e7079918d81ea1388495a1c2cf5bfac587325a00698c21a8ff66d87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_dcf66486e7079918d81ea1388495a1c2cf5bfac587325a00698c21a8ff66d87e->leave($__internal_dcf66486e7079918d81ea1388495a1c2cf5bfac587325a00698c21a8ff66d87e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
