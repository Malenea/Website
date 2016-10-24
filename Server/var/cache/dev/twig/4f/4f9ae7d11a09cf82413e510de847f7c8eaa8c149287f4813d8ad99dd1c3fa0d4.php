<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_099d0cb6e73e69d50f8bacd8d1958449e2ea05f0f3cb960aa594247c35f28a21 extends Twig_Template
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
        $__internal_c800e061511ae71381c8b3baed41ad5de1368af66b3ee174be8444433b7401b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c800e061511ae71381c8b3baed41ad5de1368af66b3ee174be8444433b7401b7->enter($__internal_c800e061511ae71381c8b3baed41ad5de1368af66b3ee174be8444433b7401b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c800e061511ae71381c8b3baed41ad5de1368af66b3ee174be8444433b7401b7->leave($__internal_c800e061511ae71381c8b3baed41ad5de1368af66b3ee174be8444433b7401b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
