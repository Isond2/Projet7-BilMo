<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_0bce2ece8cae7cfa01f7720181e372f409910add58831206bd701a014a80c831 extends Twig_Template
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
        $__internal_b0a27098cda777425ee1e2ba9d73ca2bbbfd880e5b439c80ed3bc0f561267270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a27098cda777425ee1e2ba9d73ca2bbbfd880e5b439c80ed3bc0f561267270->enter($__internal_b0a27098cda777425ee1e2ba9d73ca2bbbfd880e5b439c80ed3bc0f561267270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_121466f3b3ed5e2bc8645ce4f5730b591afd448e50c560b58893e8c756037a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121466f3b3ed5e2bc8645ce4f5730b591afd448e50c560b58893e8c756037a56->enter($__internal_121466f3b3ed5e2bc8645ce4f5730b591afd448e50c560b58893e8c756037a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b0a27098cda777425ee1e2ba9d73ca2bbbfd880e5b439c80ed3bc0f561267270->leave($__internal_b0a27098cda777425ee1e2ba9d73ca2bbbfd880e5b439c80ed3bc0f561267270_prof);

        
        $__internal_121466f3b3ed5e2bc8645ce4f5730b591afd448e50c560b58893e8c756037a56->leave($__internal_121466f3b3ed5e2bc8645ce4f5730b591afd448e50c560b58893e8c756037a56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
