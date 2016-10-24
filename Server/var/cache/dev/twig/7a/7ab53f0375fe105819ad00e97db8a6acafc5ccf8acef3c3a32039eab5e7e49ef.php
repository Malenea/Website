<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_bc36bef94e3dea0117771b359f06a6e86aaee2bcc5f8125538b98d0e14586a2d extends Twig_Template
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
        $__internal_53a6f24ee1f571db66dfa9d6972c37709240fb8e7d3aed1a547b80f134f784e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a6f24ee1f571db66dfa9d6972c37709240fb8e7d3aed1a547b80f134f784e8->enter($__internal_53a6f24ee1f571db66dfa9d6972c37709240fb8e7d3aed1a547b80f134f784e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_53a6f24ee1f571db66dfa9d6972c37709240fb8e7d3aed1a547b80f134f784e8->leave($__internal_53a6f24ee1f571db66dfa9d6972c37709240fb8e7d3aed1a547b80f134f784e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
