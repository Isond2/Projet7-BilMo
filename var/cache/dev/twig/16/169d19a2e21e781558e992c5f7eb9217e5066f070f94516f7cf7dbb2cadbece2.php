<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_ff0cb9aeb35e9b237f97edd5c1624da3e684e7747ee8fc39c28c5f3269b72198 extends Twig_Template
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
        $__internal_fe9458c2b0065192545c9a9489bbe3d3f9c26b25966d7cb7e5c451f31393af4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9458c2b0065192545c9a9489bbe3d3f9c26b25966d7cb7e5c451f31393af4a->enter($__internal_fe9458c2b0065192545c9a9489bbe3d3f9c26b25966d7cb7e5c451f31393af4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_da4eb121ec9da57847e2f35d7a25f758c2422a8dd5d7d6a08bee2bac13c5270c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4eb121ec9da57847e2f35d7a25f758c2422a8dd5d7d6a08bee2bac13c5270c->enter($__internal_da4eb121ec9da57847e2f35d7a25f758c2422a8dd5d7d6a08bee2bac13c5270c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_fe9458c2b0065192545c9a9489bbe3d3f9c26b25966d7cb7e5c451f31393af4a->leave($__internal_fe9458c2b0065192545c9a9489bbe3d3f9c26b25966d7cb7e5c451f31393af4a_prof);

        
        $__internal_da4eb121ec9da57847e2f35d7a25f758c2422a8dd5d7d6a08bee2bac13c5270c->leave($__internal_da4eb121ec9da57847e2f35d7a25f758c2422a8dd5d7d6a08bee2bac13c5270c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
