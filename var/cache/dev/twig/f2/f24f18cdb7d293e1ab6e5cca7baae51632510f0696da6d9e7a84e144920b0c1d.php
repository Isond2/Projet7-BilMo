<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e9f876b0e9df1eb8ee9ee193870b9e2ab2b45b05704f2d26b5b13cc1c2639f0b extends Twig_Template
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
        $__internal_13cd54c7e1f8a4078c589787e72f883bb39840916802e5a6cae824f37441c8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13cd54c7e1f8a4078c589787e72f883bb39840916802e5a6cae824f37441c8a2->enter($__internal_13cd54c7e1f8a4078c589787e72f883bb39840916802e5a6cae824f37441c8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_a1175c76bdcca37ac320b75ebe613cbd0c6fa2b2556f98a6fb51ae3be63a70dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1175c76bdcca37ac320b75ebe613cbd0c6fa2b2556f98a6fb51ae3be63a70dd->enter($__internal_a1175c76bdcca37ac320b75ebe613cbd0c6fa2b2556f98a6fb51ae3be63a70dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_13cd54c7e1f8a4078c589787e72f883bb39840916802e5a6cae824f37441c8a2->leave($__internal_13cd54c7e1f8a4078c589787e72f883bb39840916802e5a6cae824f37441c8a2_prof);

        
        $__internal_a1175c76bdcca37ac320b75ebe613cbd0c6fa2b2556f98a6fb51ae3be63a70dd->leave($__internal_a1175c76bdcca37ac320b75ebe613cbd0c6fa2b2556f98a6fb51ae3be63a70dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
