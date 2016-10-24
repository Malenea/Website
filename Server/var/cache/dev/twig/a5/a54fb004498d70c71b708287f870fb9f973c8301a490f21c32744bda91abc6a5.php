<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_60e83c60cafe544bdab0cef16d83ddd9f19d6483c5528c891904c8bf36b11cc3 extends Twig_Template
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
        $__internal_a351c81633119cc1028f5c42ad213cc0ca8555f1acac07f07272d9baa9b92a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a351c81633119cc1028f5c42ad213cc0ca8555f1acac07f07272d9baa9b92a8e->enter($__internal_a351c81633119cc1028f5c42ad213cc0ca8555f1acac07f07272d9baa9b92a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_a351c81633119cc1028f5c42ad213cc0ca8555f1acac07f07272d9baa9b92a8e->leave($__internal_a351c81633119cc1028f5c42ad213cc0ca8555f1acac07f07272d9baa9b92a8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
