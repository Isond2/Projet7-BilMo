<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_775b8f8891249a3e510a98e3e81519771ac66b0c890688744315709e67091836 extends Twig_Template
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
        $__internal_782a5fbe27159cf79c33896eae7401965c927a701491db27839c6ad0dd75193c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782a5fbe27159cf79c33896eae7401965c927a701491db27839c6ad0dd75193c->enter($__internal_782a5fbe27159cf79c33896eae7401965c927a701491db27839c6ad0dd75193c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_47539d9a7ac895b66cc3eb63e1d9c42d63695ae766122a3c05b64a0dbbadeb98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47539d9a7ac895b66cc3eb63e1d9c42d63695ae766122a3c05b64a0dbbadeb98->enter($__internal_47539d9a7ac895b66cc3eb63e1d9c42d63695ae766122a3c05b64a0dbbadeb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_782a5fbe27159cf79c33896eae7401965c927a701491db27839c6ad0dd75193c->leave($__internal_782a5fbe27159cf79c33896eae7401965c927a701491db27839c6ad0dd75193c_prof);

        
        $__internal_47539d9a7ac895b66cc3eb63e1d9c42d63695ae766122a3c05b64a0dbbadeb98->leave($__internal_47539d9a7ac895b66cc3eb63e1d9c42d63695ae766122a3c05b64a0dbbadeb98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
