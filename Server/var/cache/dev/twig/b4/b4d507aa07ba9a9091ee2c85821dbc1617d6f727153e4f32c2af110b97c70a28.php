<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_459f9bdbce4c66cd2c1f1d1e70ebb624ed419484cd3dc555288604be464c63d8 extends Twig_Template
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
        $__internal_a05651e352efd9929a482383bf482085cd570ac88fdb836607af0990aaeefd87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05651e352efd9929a482383bf482085cd570ac88fdb836607af0990aaeefd87->enter($__internal_a05651e352efd9929a482383bf482085cd570ac88fdb836607af0990aaeefd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a05651e352efd9929a482383bf482085cd570ac88fdb836607af0990aaeefd87->leave($__internal_a05651e352efd9929a482383bf482085cd570ac88fdb836607af0990aaeefd87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
