<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_307bd6c6664235fb8b7911b12130e9f018e360f5f5186777f0771fe3226f5431 extends Twig_Template
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
        $__internal_fe520c8d5bdbbfa23892c4be1299e6b633be2d070e468fbad83f2115dad41cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe520c8d5bdbbfa23892c4be1299e6b633be2d070e468fbad83f2115dad41cce->enter($__internal_fe520c8d5bdbbfa23892c4be1299e6b633be2d070e468fbad83f2115dad41cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_cf112f047803db23a7c7abefb7aae12bf26ff51baf03b64af4c882447be3847b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf112f047803db23a7c7abefb7aae12bf26ff51baf03b64af4c882447be3847b->enter($__internal_cf112f047803db23a7c7abefb7aae12bf26ff51baf03b64af4c882447be3847b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fe520c8d5bdbbfa23892c4be1299e6b633be2d070e468fbad83f2115dad41cce->leave($__internal_fe520c8d5bdbbfa23892c4be1299e6b633be2d070e468fbad83f2115dad41cce_prof);

        
        $__internal_cf112f047803db23a7c7abefb7aae12bf26ff51baf03b64af4c882447be3847b->leave($__internal_cf112f047803db23a7c7abefb7aae12bf26ff51baf03b64af4c882447be3847b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
