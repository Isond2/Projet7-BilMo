<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_4d10f19f7ab39b572e890402310134b712203b3e8da8b543ce7b69e7ba84f22e extends Twig_Template
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
        $__internal_f53ce62260c189267c98dc7aae7b9428a4bee386363434e14d974d0d6f3c1593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53ce62260c189267c98dc7aae7b9428a4bee386363434e14d974d0d6f3c1593->enter($__internal_f53ce62260c189267c98dc7aae7b9428a4bee386363434e14d974d0d6f3c1593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_32e7e1dcecfc37cf22e6d5b96252e8d13c4e14fd6296eafb471e8fb8ec327b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e7e1dcecfc37cf22e6d5b96252e8d13c4e14fd6296eafb471e8fb8ec327b07->enter($__internal_32e7e1dcecfc37cf22e6d5b96252e8d13c4e14fd6296eafb471e8fb8ec327b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f53ce62260c189267c98dc7aae7b9428a4bee386363434e14d974d0d6f3c1593->leave($__internal_f53ce62260c189267c98dc7aae7b9428a4bee386363434e14d974d0d6f3c1593_prof);

        
        $__internal_32e7e1dcecfc37cf22e6d5b96252e8d13c4e14fd6296eafb471e8fb8ec327b07->leave($__internal_32e7e1dcecfc37cf22e6d5b96252e8d13c4e14fd6296eafb471e8fb8ec327b07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
