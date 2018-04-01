<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_37987a5e83482312e098c32e0f8495a7d8d1facaf723ae0b2a35d425929d749a extends Twig_Template
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
        $__internal_e14db6bdb4ca9564afa129991c2da4ba0316f78875d2533283fe14417b4fd989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14db6bdb4ca9564afa129991c2da4ba0316f78875d2533283fe14417b4fd989->enter($__internal_e14db6bdb4ca9564afa129991c2da4ba0316f78875d2533283fe14417b4fd989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_776a2c7cddd4bb0871d87e8009842eaad0cbc65aa3a72c4ae630ffb92e5382a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776a2c7cddd4bb0871d87e8009842eaad0cbc65aa3a72c4ae630ffb92e5382a4->enter($__internal_776a2c7cddd4bb0871d87e8009842eaad0cbc65aa3a72c4ae630ffb92e5382a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e14db6bdb4ca9564afa129991c2da4ba0316f78875d2533283fe14417b4fd989->leave($__internal_e14db6bdb4ca9564afa129991c2da4ba0316f78875d2533283fe14417b4fd989_prof);

        
        $__internal_776a2c7cddd4bb0871d87e8009842eaad0cbc65aa3a72c4ae630ffb92e5382a4->leave($__internal_776a2c7cddd4bb0871d87e8009842eaad0cbc65aa3a72c4ae630ffb92e5382a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
