<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_20c9acb85c11012451ac94cf04d52255374d7e961e05009630bebfb43109b42e extends Twig_Template
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
        $__internal_4b75f53c22ee0205ae1f895a41faabefa9983a173451993b0f68e9740a45ec5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b75f53c22ee0205ae1f895a41faabefa9983a173451993b0f68e9740a45ec5f->enter($__internal_4b75f53c22ee0205ae1f895a41faabefa9983a173451993b0f68e9740a45ec5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_401854b03eb0e37a223fee5c730f9092409f4269ccf704e7be75d4220e81c425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401854b03eb0e37a223fee5c730f9092409f4269ccf704e7be75d4220e81c425->enter($__internal_401854b03eb0e37a223fee5c730f9092409f4269ccf704e7be75d4220e81c425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4b75f53c22ee0205ae1f895a41faabefa9983a173451993b0f68e9740a45ec5f->leave($__internal_4b75f53c22ee0205ae1f895a41faabefa9983a173451993b0f68e9740a45ec5f_prof);

        
        $__internal_401854b03eb0e37a223fee5c730f9092409f4269ccf704e7be75d4220e81c425->leave($__internal_401854b03eb0e37a223fee5c730f9092409f4269ccf704e7be75d4220e81c425_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
