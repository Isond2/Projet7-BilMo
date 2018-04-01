<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8adaf9dea4eb39c9d8e2542494fb44b0cd14f4d6d3b1b4992f84f2edb868727c extends Twig_Template
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
        $__internal_f9092df9ab3cd08404c56b0e38e4b6baa3eef96ec053133944119fb734a93c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9092df9ab3cd08404c56b0e38e4b6baa3eef96ec053133944119fb734a93c2d->enter($__internal_f9092df9ab3cd08404c56b0e38e4b6baa3eef96ec053133944119fb734a93c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d4fd9ce49de550f525247f94a329213870950a9fff1629ac13ed3fefd49e94cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fd9ce49de550f525247f94a329213870950a9fff1629ac13ed3fefd49e94cf->enter($__internal_d4fd9ce49de550f525247f94a329213870950a9fff1629ac13ed3fefd49e94cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f9092df9ab3cd08404c56b0e38e4b6baa3eef96ec053133944119fb734a93c2d->leave($__internal_f9092df9ab3cd08404c56b0e38e4b6baa3eef96ec053133944119fb734a93c2d_prof);

        
        $__internal_d4fd9ce49de550f525247f94a329213870950a9fff1629ac13ed3fefd49e94cf->leave($__internal_d4fd9ce49de550f525247f94a329213870950a9fff1629ac13ed3fefd49e94cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
