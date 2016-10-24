<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5f0c8345ca8e01b23a45a1501e8277bdeb1429cb69f20bfd167d0f42af55f269 extends Twig_Template
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
        $__internal_4d0d21d781c5e2e3100c06fa2fbcf387e54e0d5ef3c336281ebf0d2d6a90a18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0d21d781c5e2e3100c06fa2fbcf387e54e0d5ef3c336281ebf0d2d6a90a18b->enter($__internal_4d0d21d781c5e2e3100c06fa2fbcf387e54e0d5ef3c336281ebf0d2d6a90a18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4d0d21d781c5e2e3100c06fa2fbcf387e54e0d5ef3c336281ebf0d2d6a90a18b->leave($__internal_4d0d21d781c5e2e3100c06fa2fbcf387e54e0d5ef3c336281ebf0d2d6a90a18b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
