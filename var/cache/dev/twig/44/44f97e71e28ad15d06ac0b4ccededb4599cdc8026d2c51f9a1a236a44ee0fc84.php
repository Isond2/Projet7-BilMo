<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_327ba8973a95dd38983a6ce8071819a87a4651b16de26acb4ba09f255bb1cdd6 extends Twig_Template
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
        $__internal_10833a6ce20d6c767f482e1c29ac467f21047c8ceab5b038d2fe264d63848d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10833a6ce20d6c767f482e1c29ac467f21047c8ceab5b038d2fe264d63848d6a->enter($__internal_10833a6ce20d6c767f482e1c29ac467f21047c8ceab5b038d2fe264d63848d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_edf528090fc6dbd8fa7a79a6dbff01f241231e75db9c3fc5b11b6d885a23beb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf528090fc6dbd8fa7a79a6dbff01f241231e75db9c3fc5b11b6d885a23beb8->enter($__internal_edf528090fc6dbd8fa7a79a6dbff01f241231e75db9c3fc5b11b6d885a23beb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_10833a6ce20d6c767f482e1c29ac467f21047c8ceab5b038d2fe264d63848d6a->leave($__internal_10833a6ce20d6c767f482e1c29ac467f21047c8ceab5b038d2fe264d63848d6a_prof);

        
        $__internal_edf528090fc6dbd8fa7a79a6dbff01f241231e75db9c3fc5b11b6d885a23beb8->leave($__internal_edf528090fc6dbd8fa7a79a6dbff01f241231e75db9c3fc5b11b6d885a23beb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
