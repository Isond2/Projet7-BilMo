<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_476efb5303496c199c4a254a49a007a8d40d676baeac0512ce588935a50db61f extends Twig_Template
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
        $__internal_c9c8c86130bc86b5977c8a6a5bdea41a30a5be60eafaa09f8b965e2806a81559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c8c86130bc86b5977c8a6a5bdea41a30a5be60eafaa09f8b965e2806a81559->enter($__internal_c9c8c86130bc86b5977c8a6a5bdea41a30a5be60eafaa09f8b965e2806a81559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_ab172027c1fef249da0761b9952ea6cb65632bb84af6792900d7d294064e08ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab172027c1fef249da0761b9952ea6cb65632bb84af6792900d7d294064e08ae->enter($__internal_ab172027c1fef249da0761b9952ea6cb65632bb84af6792900d7d294064e08ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c9c8c86130bc86b5977c8a6a5bdea41a30a5be60eafaa09f8b965e2806a81559->leave($__internal_c9c8c86130bc86b5977c8a6a5bdea41a30a5be60eafaa09f8b965e2806a81559_prof);

        
        $__internal_ab172027c1fef249da0761b9952ea6cb65632bb84af6792900d7d294064e08ae->leave($__internal_ab172027c1fef249da0761b9952ea6cb65632bb84af6792900d7d294064e08ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
