<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c44d254bbc2803b95409df25552bcef85348e9c7d5d478b61be85b9409783700 extends Twig_Template
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
        $__internal_860657a94a52701f6bcba19bd1775e45db27d0583537e8493343d7e0b63516ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860657a94a52701f6bcba19bd1775e45db27d0583537e8493343d7e0b63516ff->enter($__internal_860657a94a52701f6bcba19bd1775e45db27d0583537e8493343d7e0b63516ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_3ba9d86b970cb448f1c12dbf577ea5f281b9d808b01b6613d5fd104760aa023f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba9d86b970cb448f1c12dbf577ea5f281b9d808b01b6613d5fd104760aa023f->enter($__internal_3ba9d86b970cb448f1c12dbf577ea5f281b9d808b01b6613d5fd104760aa023f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_860657a94a52701f6bcba19bd1775e45db27d0583537e8493343d7e0b63516ff->leave($__internal_860657a94a52701f6bcba19bd1775e45db27d0583537e8493343d7e0b63516ff_prof);

        
        $__internal_3ba9d86b970cb448f1c12dbf577ea5f281b9d808b01b6613d5fd104760aa023f->leave($__internal_3ba9d86b970cb448f1c12dbf577ea5f281b9d808b01b6613d5fd104760aa023f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
