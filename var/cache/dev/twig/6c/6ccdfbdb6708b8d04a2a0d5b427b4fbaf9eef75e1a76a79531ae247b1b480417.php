<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_54897bf8c05ca0837c455b64aff51b7efc8113bf8817e599caa2f86442c27053 extends Twig_Template
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
        $__internal_c7385a2352452e43a9d37fb9cfaa26dc8625a0488d058d677bb9e33a79f0c07a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7385a2352452e43a9d37fb9cfaa26dc8625a0488d058d677bb9e33a79f0c07a->enter($__internal_c7385a2352452e43a9d37fb9cfaa26dc8625a0488d058d677bb9e33a79f0c07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b8dd698f5e2af3eb2207b9d56f4d226909b7017123feab6ab2ed48a4c2439924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8dd698f5e2af3eb2207b9d56f4d226909b7017123feab6ab2ed48a4c2439924->enter($__internal_b8dd698f5e2af3eb2207b9d56f4d226909b7017123feab6ab2ed48a4c2439924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c7385a2352452e43a9d37fb9cfaa26dc8625a0488d058d677bb9e33a79f0c07a->leave($__internal_c7385a2352452e43a9d37fb9cfaa26dc8625a0488d058d677bb9e33a79f0c07a_prof);

        
        $__internal_b8dd698f5e2af3eb2207b9d56f4d226909b7017123feab6ab2ed48a4c2439924->leave($__internal_b8dd698f5e2af3eb2207b9d56f4d226909b7017123feab6ab2ed48a4c2439924_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
