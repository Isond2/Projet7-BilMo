<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_53a88975364a3a0dd2345af9b3e3191994c7a6faa503ac2d4a756fcbbb524356 extends Twig_Template
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
        $__internal_3e8d457e3ec28c6879578c9df7c431a34481499f15329b6ab0ff06e80de774c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8d457e3ec28c6879578c9df7c431a34481499f15329b6ab0ff06e80de774c2->enter($__internal_3e8d457e3ec28c6879578c9df7c431a34481499f15329b6ab0ff06e80de774c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5f2e428faca8b0f56a63d00b53d827665c8b0877a6959ef6284807792dcc3b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2e428faca8b0f56a63d00b53d827665c8b0877a6959ef6284807792dcc3b4d->enter($__internal_5f2e428faca8b0f56a63d00b53d827665c8b0877a6959ef6284807792dcc3b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3e8d457e3ec28c6879578c9df7c431a34481499f15329b6ab0ff06e80de774c2->leave($__internal_3e8d457e3ec28c6879578c9df7c431a34481499f15329b6ab0ff06e80de774c2_prof);

        
        $__internal_5f2e428faca8b0f56a63d00b53d827665c8b0877a6959ef6284807792dcc3b4d->leave($__internal_5f2e428faca8b0f56a63d00b53d827665c8b0877a6959ef6284807792dcc3b4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
