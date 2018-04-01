<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a527f83c38af725b09ad0ce8f5d47d40223915ebd237ecab034bf8ef8bea1323 extends Twig_Template
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
        $__internal_88b6f8cf7727900c147e45ebd1bda859b2eecab09899d8d6e19bf484c294c13c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b6f8cf7727900c147e45ebd1bda859b2eecab09899d8d6e19bf484c294c13c->enter($__internal_88b6f8cf7727900c147e45ebd1bda859b2eecab09899d8d6e19bf484c294c13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_1dd1e08994512424c9b0fdf6056ac04c242c838ab45261592099417db0c583ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd1e08994512424c9b0fdf6056ac04c242c838ab45261592099417db0c583ac->enter($__internal_1dd1e08994512424c9b0fdf6056ac04c242c838ab45261592099417db0c583ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_88b6f8cf7727900c147e45ebd1bda859b2eecab09899d8d6e19bf484c294c13c->leave($__internal_88b6f8cf7727900c147e45ebd1bda859b2eecab09899d8d6e19bf484c294c13c_prof);

        
        $__internal_1dd1e08994512424c9b0fdf6056ac04c242c838ab45261592099417db0c583ac->leave($__internal_1dd1e08994512424c9b0fdf6056ac04c242c838ab45261592099417db0c583ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
