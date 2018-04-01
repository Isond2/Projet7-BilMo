<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b822934624010defb279e065ea69fcabb0a12027996799ecbdf39d68e13b5290 extends Twig_Template
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
        $__internal_880443ccdbdb49c02e1abf85d3f0de6cbeacdc727e21ae44895fd2f62cc8512f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_880443ccdbdb49c02e1abf85d3f0de6cbeacdc727e21ae44895fd2f62cc8512f->enter($__internal_880443ccdbdb49c02e1abf85d3f0de6cbeacdc727e21ae44895fd2f62cc8512f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_2660115cc863476c279638c0dc9741718e38ef1bd205bead0aa5bbc23cc99015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2660115cc863476c279638c0dc9741718e38ef1bd205bead0aa5bbc23cc99015->enter($__internal_2660115cc863476c279638c0dc9741718e38ef1bd205bead0aa5bbc23cc99015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_880443ccdbdb49c02e1abf85d3f0de6cbeacdc727e21ae44895fd2f62cc8512f->leave($__internal_880443ccdbdb49c02e1abf85d3f0de6cbeacdc727e21ae44895fd2f62cc8512f_prof);

        
        $__internal_2660115cc863476c279638c0dc9741718e38ef1bd205bead0aa5bbc23cc99015->leave($__internal_2660115cc863476c279638c0dc9741718e38ef1bd205bead0aa5bbc23cc99015_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
