<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ed2d196e07cfb6942d21d999bf0f2e954852db5681a9175256e39ae6e5ce51c8 extends Twig_Template
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
        $__internal_c683404b17fc43a33572550d88cd1815bc5f90ed8128d616e4bc33f3ce47ed83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c683404b17fc43a33572550d88cd1815bc5f90ed8128d616e4bc33f3ce47ed83->enter($__internal_c683404b17fc43a33572550d88cd1815bc5f90ed8128d616e4bc33f3ce47ed83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_892763669081b83b9b6db32f17c05be2a4cad31e926dbd7553da4f74e277a578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892763669081b83b9b6db32f17c05be2a4cad31e926dbd7553da4f74e277a578->enter($__internal_892763669081b83b9b6db32f17c05be2a4cad31e926dbd7553da4f74e277a578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c683404b17fc43a33572550d88cd1815bc5f90ed8128d616e4bc33f3ce47ed83->leave($__internal_c683404b17fc43a33572550d88cd1815bc5f90ed8128d616e4bc33f3ce47ed83_prof);

        
        $__internal_892763669081b83b9b6db32f17c05be2a4cad31e926dbd7553da4f74e277a578->leave($__internal_892763669081b83b9b6db32f17c05be2a4cad31e926dbd7553da4f74e277a578_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
