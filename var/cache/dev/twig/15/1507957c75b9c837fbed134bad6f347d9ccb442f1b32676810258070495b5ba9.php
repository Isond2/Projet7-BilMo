<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_88b9f47c08212424c9b12fea7e71cdf17e81c9ee22c59eb97498fe32b05872dc extends Twig_Template
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
        $__internal_20bf8c4999dfb0f97ca43d942264abdad6308dfed791a92153e3f843d408f9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20bf8c4999dfb0f97ca43d942264abdad6308dfed791a92153e3f843d408f9f8->enter($__internal_20bf8c4999dfb0f97ca43d942264abdad6308dfed791a92153e3f843d408f9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_ee9a523b61b50c520dd6b1c38f88280b94a530d66ce05254d2e8491f7cdc6a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9a523b61b50c520dd6b1c38f88280b94a530d66ce05254d2e8491f7cdc6a63->enter($__internal_ee9a523b61b50c520dd6b1c38f88280b94a530d66ce05254d2e8491f7cdc6a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_20bf8c4999dfb0f97ca43d942264abdad6308dfed791a92153e3f843d408f9f8->leave($__internal_20bf8c4999dfb0f97ca43d942264abdad6308dfed791a92153e3f843d408f9f8_prof);

        
        $__internal_ee9a523b61b50c520dd6b1c38f88280b94a530d66ce05254d2e8491f7cdc6a63->leave($__internal_ee9a523b61b50c520dd6b1c38f88280b94a530d66ce05254d2e8491f7cdc6a63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
