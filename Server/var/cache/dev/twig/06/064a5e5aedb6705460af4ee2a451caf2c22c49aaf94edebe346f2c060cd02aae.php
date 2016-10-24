<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b35bb1a213da66011ccae40b05ec948a49238751cf39cfc7fc36193d3e8ab7bd extends Twig_Template
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
        $__internal_2a99c3aee6383447960920db6975ce9a2fc3266c0dc2974271626350a2c5939d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a99c3aee6383447960920db6975ce9a2fc3266c0dc2974271626350a2c5939d->enter($__internal_2a99c3aee6383447960920db6975ce9a2fc3266c0dc2974271626350a2c5939d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2a99c3aee6383447960920db6975ce9a2fc3266c0dc2974271626350a2c5939d->leave($__internal_2a99c3aee6383447960920db6975ce9a2fc3266c0dc2974271626350a2c5939d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
