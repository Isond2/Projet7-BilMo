<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_5b8f2543aee717879f202ecae6d7c54392ededb955be7f9442feef8a04f56151 extends Twig_Template
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
        $__internal_7e6d45dae44f08a0bc6ee20b53864c155493b0f22f2784950007f4bc86c938be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e6d45dae44f08a0bc6ee20b53864c155493b0f22f2784950007f4bc86c938be->enter($__internal_7e6d45dae44f08a0bc6ee20b53864c155493b0f22f2784950007f4bc86c938be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_53033ba8cbd1dd4c4b040c71d18153b78956c5388908e861a8f5af3ae706b187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53033ba8cbd1dd4c4b040c71d18153b78956c5388908e861a8f5af3ae706b187->enter($__internal_53033ba8cbd1dd4c4b040c71d18153b78956c5388908e861a8f5af3ae706b187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7e6d45dae44f08a0bc6ee20b53864c155493b0f22f2784950007f4bc86c938be->leave($__internal_7e6d45dae44f08a0bc6ee20b53864c155493b0f22f2784950007f4bc86c938be_prof);

        
        $__internal_53033ba8cbd1dd4c4b040c71d18153b78956c5388908e861a8f5af3ae706b187->leave($__internal_53033ba8cbd1dd4c4b040c71d18153b78956c5388908e861a8f5af3ae706b187_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
