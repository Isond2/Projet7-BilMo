<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_85674de0fb2b26aab3503c36e85c47876e48798c3e9c6b3e3339eb5e18cd18c2 extends Twig_Template
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
        $__internal_f276019720dd4a82c2c1b56e71d84c9f10fac5f3f78894e15779b6c48b003c6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f276019720dd4a82c2c1b56e71d84c9f10fac5f3f78894e15779b6c48b003c6f->enter($__internal_f276019720dd4a82c2c1b56e71d84c9f10fac5f3f78894e15779b6c48b003c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_6473936f6f328954c72ad8f2037075d05ecf424389c7d33f9f67c302f3322fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6473936f6f328954c72ad8f2037075d05ecf424389c7d33f9f67c302f3322fcb->enter($__internal_6473936f6f328954c72ad8f2037075d05ecf424389c7d33f9f67c302f3322fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f276019720dd4a82c2c1b56e71d84c9f10fac5f3f78894e15779b6c48b003c6f->leave($__internal_f276019720dd4a82c2c1b56e71d84c9f10fac5f3f78894e15779b6c48b003c6f_prof);

        
        $__internal_6473936f6f328954c72ad8f2037075d05ecf424389c7d33f9f67c302f3322fcb->leave($__internal_6473936f6f328954c72ad8f2037075d05ecf424389c7d33f9f67c302f3322fcb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
