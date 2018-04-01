<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_57091af56627b5a5b5713f0b6d6ba18c8f363245e645c601a18010d52cdcd1a3 extends Twig_Template
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
        $__internal_d66550c9f49b2b71a94d72509e45f13cfab18c03235fdf6696d96cb567d72792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66550c9f49b2b71a94d72509e45f13cfab18c03235fdf6696d96cb567d72792->enter($__internal_d66550c9f49b2b71a94d72509e45f13cfab18c03235fdf6696d96cb567d72792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_41c7da0783a7c575e8a9c3bbd4fa8262d02c1c58cfbf376af42b54d96114fefe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c7da0783a7c575e8a9c3bbd4fa8262d02c1c58cfbf376af42b54d96114fefe->enter($__internal_41c7da0783a7c575e8a9c3bbd4fa8262d02c1c58cfbf376af42b54d96114fefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d66550c9f49b2b71a94d72509e45f13cfab18c03235fdf6696d96cb567d72792->leave($__internal_d66550c9f49b2b71a94d72509e45f13cfab18c03235fdf6696d96cb567d72792_prof);

        
        $__internal_41c7da0783a7c575e8a9c3bbd4fa8262d02c1c58cfbf376af42b54d96114fefe->leave($__internal_41c7da0783a7c575e8a9c3bbd4fa8262d02c1c58cfbf376af42b54d96114fefe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
