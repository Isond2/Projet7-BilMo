<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_89fba73236ab68d068da62e03e730cc54d56103f24c9035ce7f060f1fb6ecb51 extends Twig_Template
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
        $__internal_41f605496818e19267284630dd004ede63800374ee1a04660c87a38f52e1b837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f605496818e19267284630dd004ede63800374ee1a04660c87a38f52e1b837->enter($__internal_41f605496818e19267284630dd004ede63800374ee1a04660c87a38f52e1b837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_1c95efb1134990cf32e7f210c76af7ddd372b9e47e4e0758f0795918631c4622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c95efb1134990cf32e7f210c76af7ddd372b9e47e4e0758f0795918631c4622->enter($__internal_1c95efb1134990cf32e7f210c76af7ddd372b9e47e4e0758f0795918631c4622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_41f605496818e19267284630dd004ede63800374ee1a04660c87a38f52e1b837->leave($__internal_41f605496818e19267284630dd004ede63800374ee1a04660c87a38f52e1b837_prof);

        
        $__internal_1c95efb1134990cf32e7f210c76af7ddd372b9e47e4e0758f0795918631c4622->leave($__internal_1c95efb1134990cf32e7f210c76af7ddd372b9e47e4e0758f0795918631c4622_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
