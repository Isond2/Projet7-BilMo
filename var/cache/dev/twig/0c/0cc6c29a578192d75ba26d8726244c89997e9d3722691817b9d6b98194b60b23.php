<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_a2982af43f3c5b3081340ee357064d046051c1d4d7b8be2aefbb409cbd6e6daf extends Twig_Template
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
        $__internal_83b9a05d27bf48f246f76a623264deaef55b2ed56d3769fa95d8d216349f3f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b9a05d27bf48f246f76a623264deaef55b2ed56d3769fa95d8d216349f3f44->enter($__internal_83b9a05d27bf48f246f76a623264deaef55b2ed56d3769fa95d8d216349f3f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8b8d2f095419382dd29a63ed63e6fde80ce2cdbd9e895cca250dec0dd4361fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8d2f095419382dd29a63ed63e6fde80ce2cdbd9e895cca250dec0dd4361fbc->enter($__internal_8b8d2f095419382dd29a63ed63e6fde80ce2cdbd9e895cca250dec0dd4361fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_83b9a05d27bf48f246f76a623264deaef55b2ed56d3769fa95d8d216349f3f44->leave($__internal_83b9a05d27bf48f246f76a623264deaef55b2ed56d3769fa95d8d216349f3f44_prof);

        
        $__internal_8b8d2f095419382dd29a63ed63e6fde80ce2cdbd9e895cca250dec0dd4361fbc->leave($__internal_8b8d2f095419382dd29a63ed63e6fde80ce2cdbd9e895cca250dec0dd4361fbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
