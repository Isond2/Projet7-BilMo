<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f17c521de65af8f9fcf2cc62ab5a7ec97e1e87bf7547221f6a7543a4ddcafb7a extends Twig_Template
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
        $__internal_f862eb3d278a0d014ac31a12c67554a56aad8913a3985a8279162ff020d50813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f862eb3d278a0d014ac31a12c67554a56aad8913a3985a8279162ff020d50813->enter($__internal_f862eb3d278a0d014ac31a12c67554a56aad8913a3985a8279162ff020d50813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_64fc191f3a9e8474920a6f22978a770dbe94027b0bb11ed0511f71f78d688f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fc191f3a9e8474920a6f22978a770dbe94027b0bb11ed0511f71f78d688f53->enter($__internal_64fc191f3a9e8474920a6f22978a770dbe94027b0bb11ed0511f71f78d688f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f862eb3d278a0d014ac31a12c67554a56aad8913a3985a8279162ff020d50813->leave($__internal_f862eb3d278a0d014ac31a12c67554a56aad8913a3985a8279162ff020d50813_prof);

        
        $__internal_64fc191f3a9e8474920a6f22978a770dbe94027b0bb11ed0511f71f78d688f53->leave($__internal_64fc191f3a9e8474920a6f22978a770dbe94027b0bb11ed0511f71f78d688f53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
