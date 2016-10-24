<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_256815b97d78f2698c559646170db25cc5ba257a7270e77dafaa6ec844facd69 extends Twig_Template
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
        $__internal_bf48508e54121c6cfc1f557eac4cc11f44b003ff04257a88420a829173d0f9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf48508e54121c6cfc1f557eac4cc11f44b003ff04257a88420a829173d0f9a7->enter($__internal_bf48508e54121c6cfc1f557eac4cc11f44b003ff04257a88420a829173d0f9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bf48508e54121c6cfc1f557eac4cc11f44b003ff04257a88420a829173d0f9a7->leave($__internal_bf48508e54121c6cfc1f557eac4cc11f44b003ff04257a88420a829173d0f9a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
