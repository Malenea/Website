<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b63c6b49574aa7a4ee0d3de62fbe3566547741e8d618d931e0558f4e7aecf8dc extends Twig_Template
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
        $__internal_b000867abb26549648217a2d5c4a6fc5dffcd330d5ea3257d278b2fdde6e0462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b000867abb26549648217a2d5c4a6fc5dffcd330d5ea3257d278b2fdde6e0462->enter($__internal_b000867abb26549648217a2d5c4a6fc5dffcd330d5ea3257d278b2fdde6e0462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b000867abb26549648217a2d5c4a6fc5dffcd330d5ea3257d278b2fdde6e0462->leave($__internal_b000867abb26549648217a2d5c4a6fc5dffcd330d5ea3257d278b2fdde6e0462_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
