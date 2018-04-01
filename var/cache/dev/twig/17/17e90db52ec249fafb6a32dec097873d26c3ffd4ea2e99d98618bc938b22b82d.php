<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_bc9c96038f6f7ac7f6cc0283f6e072ac16741627b926c0e2b585cfcde158d5ea extends Twig_Template
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
        $__internal_eb0fa67aa115e22ecb58461a552fe4a8dc18dbdfc13f103ce8f1f5fd6b062832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb0fa67aa115e22ecb58461a552fe4a8dc18dbdfc13f103ce8f1f5fd6b062832->enter($__internal_eb0fa67aa115e22ecb58461a552fe4a8dc18dbdfc13f103ce8f1f5fd6b062832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_b2671cc8aeef47469bf467b299f5f8d9817fe93ef6d504a155a1852bdd350f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2671cc8aeef47469bf467b299f5f8d9817fe93ef6d504a155a1852bdd350f47->enter($__internal_b2671cc8aeef47469bf467b299f5f8d9817fe93ef6d504a155a1852bdd350f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_eb0fa67aa115e22ecb58461a552fe4a8dc18dbdfc13f103ce8f1f5fd6b062832->leave($__internal_eb0fa67aa115e22ecb58461a552fe4a8dc18dbdfc13f103ce8f1f5fd6b062832_prof);

        
        $__internal_b2671cc8aeef47469bf467b299f5f8d9817fe93ef6d504a155a1852bdd350f47->leave($__internal_b2671cc8aeef47469bf467b299f5f8d9817fe93ef6d504a155a1852bdd350f47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
