<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_8466dbcba91d8b7ab5e38b2cc86e85dc5a974f2bc13cc5d408a70cfce7d29cfb extends Twig_Template
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
        $__internal_5c635d9725a8e9b342989720ff2e32aff1de8765474f5e62c047302785b29bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c635d9725a8e9b342989720ff2e32aff1de8765474f5e62c047302785b29bd8->enter($__internal_5c635d9725a8e9b342989720ff2e32aff1de8765474f5e62c047302785b29bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_00e68c4c7c4e14910f637059baebb77bd96e0915818ad39514140dc0e8d00ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e68c4c7c4e14910f637059baebb77bd96e0915818ad39514140dc0e8d00ac7->enter($__internal_00e68c4c7c4e14910f637059baebb77bd96e0915818ad39514140dc0e8d00ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_5c635d9725a8e9b342989720ff2e32aff1de8765474f5e62c047302785b29bd8->leave($__internal_5c635d9725a8e9b342989720ff2e32aff1de8765474f5e62c047302785b29bd8_prof);

        
        $__internal_00e68c4c7c4e14910f637059baebb77bd96e0915818ad39514140dc0e8d00ac7->leave($__internal_00e68c4c7c4e14910f637059baebb77bd96e0915818ad39514140dc0e8d00ac7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
