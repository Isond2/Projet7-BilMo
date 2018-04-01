<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ea3d7dc828f7099bfa243f94720c1251d3527d638bc39b797ee008c088b78fbf extends Twig_Template
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
        $__internal_48211ba309a7368107eeda59e8a2efeea222ea2c3f8e3c7bdd188a5fb45f662e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48211ba309a7368107eeda59e8a2efeea222ea2c3f8e3c7bdd188a5fb45f662e->enter($__internal_48211ba309a7368107eeda59e8a2efeea222ea2c3f8e3c7bdd188a5fb45f662e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_eab2d9c0005fe41e9d7ba813c2fc20ff2604ec1653ef1e44e7b09f6df2873198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab2d9c0005fe41e9d7ba813c2fc20ff2604ec1653ef1e44e7b09f6df2873198->enter($__internal_eab2d9c0005fe41e9d7ba813c2fc20ff2604ec1653ef1e44e7b09f6df2873198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_48211ba309a7368107eeda59e8a2efeea222ea2c3f8e3c7bdd188a5fb45f662e->leave($__internal_48211ba309a7368107eeda59e8a2efeea222ea2c3f8e3c7bdd188a5fb45f662e_prof);

        
        $__internal_eab2d9c0005fe41e9d7ba813c2fc20ff2604ec1653ef1e44e7b09f6df2873198->leave($__internal_eab2d9c0005fe41e9d7ba813c2fc20ff2604ec1653ef1e44e7b09f6df2873198_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
