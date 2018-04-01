<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_4561f26dd4fa871120f98a277a645b8c01118c913dd8b87b99bce5c0df86c43c extends Twig_Template
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
        $__internal_ecf870185b17ad23e4d484ac7962c922a6ab61ff553003824f83baa2c988dcf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf870185b17ad23e4d484ac7962c922a6ab61ff553003824f83baa2c988dcf6->enter($__internal_ecf870185b17ad23e4d484ac7962c922a6ab61ff553003824f83baa2c988dcf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_17c3dd465a8760452233cc2f0e8480ef9989320f7057638ef03d2ee058ff9f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c3dd465a8760452233cc2f0e8480ef9989320f7057638ef03d2ee058ff9f68->enter($__internal_17c3dd465a8760452233cc2f0e8480ef9989320f7057638ef03d2ee058ff9f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ecf870185b17ad23e4d484ac7962c922a6ab61ff553003824f83baa2c988dcf6->leave($__internal_ecf870185b17ad23e4d484ac7962c922a6ab61ff553003824f83baa2c988dcf6_prof);

        
        $__internal_17c3dd465a8760452233cc2f0e8480ef9989320f7057638ef03d2ee058ff9f68->leave($__internal_17c3dd465a8760452233cc2f0e8480ef9989320f7057638ef03d2ee058ff9f68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
