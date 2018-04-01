<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_cd90884e1566140ba349af6f41bdaa840e417c94c26c2fec87459e5624a8db80 extends Twig_Template
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
        $__internal_9914734892584bb76e6706dfc190d1d94298f37beddf48773e4f0f663fdb9597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9914734892584bb76e6706dfc190d1d94298f37beddf48773e4f0f663fdb9597->enter($__internal_9914734892584bb76e6706dfc190d1d94298f37beddf48773e4f0f663fdb9597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_e98359d2e43112cc8b4eb78fca83c170a3e964d90f27af14b9b7e1ad4536546c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98359d2e43112cc8b4eb78fca83c170a3e964d90f27af14b9b7e1ad4536546c->enter($__internal_e98359d2e43112cc8b4eb78fca83c170a3e964d90f27af14b9b7e1ad4536546c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9914734892584bb76e6706dfc190d1d94298f37beddf48773e4f0f663fdb9597->leave($__internal_9914734892584bb76e6706dfc190d1d94298f37beddf48773e4f0f663fdb9597_prof);

        
        $__internal_e98359d2e43112cc8b4eb78fca83c170a3e964d90f27af14b9b7e1ad4536546c->leave($__internal_e98359d2e43112cc8b4eb78fca83c170a3e964d90f27af14b9b7e1ad4536546c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
