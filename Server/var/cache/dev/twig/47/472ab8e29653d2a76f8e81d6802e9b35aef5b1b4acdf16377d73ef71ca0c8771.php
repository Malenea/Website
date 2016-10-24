<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c4efb3942820b4364f5a8122920efa23dbcb6389bcf15b23dc57ec15dad4cff5 extends Twig_Template
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
        $__internal_30b2508e83bf71810f2a9edcc1da02633cae65f4a6da4a1c307b8aa276829f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b2508e83bf71810f2a9edcc1da02633cae65f4a6da4a1c307b8aa276829f04->enter($__internal_30b2508e83bf71810f2a9edcc1da02633cae65f4a6da4a1c307b8aa276829f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_30b2508e83bf71810f2a9edcc1da02633cae65f4a6da4a1c307b8aa276829f04->leave($__internal_30b2508e83bf71810f2a9edcc1da02633cae65f4a6da4a1c307b8aa276829f04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
