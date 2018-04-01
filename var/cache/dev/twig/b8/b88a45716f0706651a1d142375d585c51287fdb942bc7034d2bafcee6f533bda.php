<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_156b0e904874452eda2202230d8c1eab1d38864eda4898480bfc9fb2030ac217 extends Twig_Template
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
        $__internal_757183729b7fa41c32501864475f71a259918b5180640c524aa47f500d3d5632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_757183729b7fa41c32501864475f71a259918b5180640c524aa47f500d3d5632->enter($__internal_757183729b7fa41c32501864475f71a259918b5180640c524aa47f500d3d5632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_2719de4448a6ff47a19b41b3d208ff05c6dfe2ab5b0d41ac6b7117814e706c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2719de4448a6ff47a19b41b3d208ff05c6dfe2ab5b0d41ac6b7117814e706c2c->enter($__internal_2719de4448a6ff47a19b41b3d208ff05c6dfe2ab5b0d41ac6b7117814e706c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_757183729b7fa41c32501864475f71a259918b5180640c524aa47f500d3d5632->leave($__internal_757183729b7fa41c32501864475f71a259918b5180640c524aa47f500d3d5632_prof);

        
        $__internal_2719de4448a6ff47a19b41b3d208ff05c6dfe2ab5b0d41ac6b7117814e706c2c->leave($__internal_2719de4448a6ff47a19b41b3d208ff05c6dfe2ab5b0d41ac6b7117814e706c2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
