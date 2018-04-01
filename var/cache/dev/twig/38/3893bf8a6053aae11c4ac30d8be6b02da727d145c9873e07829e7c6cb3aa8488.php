<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_d4afdfb2e1654d438b8ca31ed17afbeb9128901552624ca15d776fd989beff35 extends Twig_Template
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
        $__internal_3c3b465cfbf71e19213802fd7d9c43eef01da35ad78696aaff570a1baf40d571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c3b465cfbf71e19213802fd7d9c43eef01da35ad78696aaff570a1baf40d571->enter($__internal_3c3b465cfbf71e19213802fd7d9c43eef01da35ad78696aaff570a1baf40d571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_5aac2ac7e7e99d957aadab9f397a7b175097add70ab8c9f52f284bacd4d826d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aac2ac7e7e99d957aadab9f397a7b175097add70ab8c9f52f284bacd4d826d0->enter($__internal_5aac2ac7e7e99d957aadab9f397a7b175097add70ab8c9f52f284bacd4d826d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3c3b465cfbf71e19213802fd7d9c43eef01da35ad78696aaff570a1baf40d571->leave($__internal_3c3b465cfbf71e19213802fd7d9c43eef01da35ad78696aaff570a1baf40d571_prof);

        
        $__internal_5aac2ac7e7e99d957aadab9f397a7b175097add70ab8c9f52f284bacd4d826d0->leave($__internal_5aac2ac7e7e99d957aadab9f397a7b175097add70ab8c9f52f284bacd4d826d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
