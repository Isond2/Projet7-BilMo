<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_16da90186dc34283e3a4bde23bc9a0a72e5719d5dbdc6dfe4e19eaf043fe89a4 extends Twig_Template
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
        $__internal_5c86269112c2e264588f3ed166f3baba28b905c01864180bf2406c8370239e9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c86269112c2e264588f3ed166f3baba28b905c01864180bf2406c8370239e9b->enter($__internal_5c86269112c2e264588f3ed166f3baba28b905c01864180bf2406c8370239e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_d5969e200c6f704f74446a10f1f859af3688f30817950104c120df4af85ea3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5969e200c6f704f74446a10f1f859af3688f30817950104c120df4af85ea3d4->enter($__internal_d5969e200c6f704f74446a10f1f859af3688f30817950104c120df4af85ea3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5c86269112c2e264588f3ed166f3baba28b905c01864180bf2406c8370239e9b->leave($__internal_5c86269112c2e264588f3ed166f3baba28b905c01864180bf2406c8370239e9b_prof);

        
        $__internal_d5969e200c6f704f74446a10f1f859af3688f30817950104c120df4af85ea3d4->leave($__internal_d5969e200c6f704f74446a10f1f859af3688f30817950104c120df4af85ea3d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
