<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d461d470c78c62a021e6d41ca5aebafba557cd235a73d8369e765cbd3ad8cf8a extends Twig_Template
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
        $__internal_fc26936739a505c85ace6a8081bae7e45ce5a4b0d5610849e3e1390a60d5759a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc26936739a505c85ace6a8081bae7e45ce5a4b0d5610849e3e1390a60d5759a->enter($__internal_fc26936739a505c85ace6a8081bae7e45ce5a4b0d5610849e3e1390a60d5759a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_fc26936739a505c85ace6a8081bae7e45ce5a4b0d5610849e3e1390a60d5759a->leave($__internal_fc26936739a505c85ace6a8081bae7e45ce5a4b0d5610849e3e1390a60d5759a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
