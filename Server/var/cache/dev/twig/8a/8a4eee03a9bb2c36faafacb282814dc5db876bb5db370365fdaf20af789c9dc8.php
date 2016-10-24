<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7f6d35ec947f566da6b01a59c75db36e6c9fe89acb3cbbcd1c9369fbef9eaeb5 extends Twig_Template
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
        $__internal_df44c2b93be1dc844659d777d199034aaf24d6ccd1f689c190bd73f70ef53a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df44c2b93be1dc844659d777d199034aaf24d6ccd1f689c190bd73f70ef53a5a->enter($__internal_df44c2b93be1dc844659d777d199034aaf24d6ccd1f689c190bd73f70ef53a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_df44c2b93be1dc844659d777d199034aaf24d6ccd1f689c190bd73f70ef53a5a->leave($__internal_df44c2b93be1dc844659d777d199034aaf24d6ccd1f689c190bd73f70ef53a5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
