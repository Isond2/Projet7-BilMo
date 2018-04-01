<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e9fa6cadf20bc8e5cdcc599fb76736800405e0b90b0e4409e88a3640e8fa501a extends Twig_Template
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
        $__internal_98aaa56fcc8f95f0794272c0e576999bc0aab863d99e8296eaa09d2932ae7103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98aaa56fcc8f95f0794272c0e576999bc0aab863d99e8296eaa09d2932ae7103->enter($__internal_98aaa56fcc8f95f0794272c0e576999bc0aab863d99e8296eaa09d2932ae7103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_aec6b373a39dc9826c228c49f0ac7b7e2c91d911173633d255d291480ff68dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec6b373a39dc9826c228c49f0ac7b7e2c91d911173633d255d291480ff68dc2->enter($__internal_aec6b373a39dc9826c228c49f0ac7b7e2c91d911173633d255d291480ff68dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_98aaa56fcc8f95f0794272c0e576999bc0aab863d99e8296eaa09d2932ae7103->leave($__internal_98aaa56fcc8f95f0794272c0e576999bc0aab863d99e8296eaa09d2932ae7103_prof);

        
        $__internal_aec6b373a39dc9826c228c49f0ac7b7e2c91d911173633d255d291480ff68dc2->leave($__internal_aec6b373a39dc9826c228c49f0ac7b7e2c91d911173633d255d291480ff68dc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
