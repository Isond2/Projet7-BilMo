<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f69d912674e1a2a54c35fb03e58c78719d58c46934a5cb18b9e6a5ccf3cf4c97 extends Twig_Template
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
        $__internal_7bcc4d7bc5511620aad02f1f15fc2cbc84951949aa97779a6630beed9fac63aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bcc4d7bc5511620aad02f1f15fc2cbc84951949aa97779a6630beed9fac63aa->enter($__internal_7bcc4d7bc5511620aad02f1f15fc2cbc84951949aa97779a6630beed9fac63aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_472e276cca6663bcb65bf0f9666d2df1fae6f4305ed41377a53f2ac0b0340c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472e276cca6663bcb65bf0f9666d2df1fae6f4305ed41377a53f2ac0b0340c4e->enter($__internal_472e276cca6663bcb65bf0f9666d2df1fae6f4305ed41377a53f2ac0b0340c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7bcc4d7bc5511620aad02f1f15fc2cbc84951949aa97779a6630beed9fac63aa->leave($__internal_7bcc4d7bc5511620aad02f1f15fc2cbc84951949aa97779a6630beed9fac63aa_prof);

        
        $__internal_472e276cca6663bcb65bf0f9666d2df1fae6f4305ed41377a53f2ac0b0340c4e->leave($__internal_472e276cca6663bcb65bf0f9666d2df1fae6f4305ed41377a53f2ac0b0340c4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
