<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ed7eab7dd0daf4c76540ed948409decd61203e6b433f241f398dbbadaefd06db extends Twig_Template
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
        $__internal_844753058441b3b8012489b93416470a4cbc246e18fdead20848a134cc756684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844753058441b3b8012489b93416470a4cbc246e18fdead20848a134cc756684->enter($__internal_844753058441b3b8012489b93416470a4cbc246e18fdead20848a134cc756684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_55d9508b0db04d24a68a5ae56d7ba489b208ead34f07b7bacab20061646575cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d9508b0db04d24a68a5ae56d7ba489b208ead34f07b7bacab20061646575cd->enter($__internal_55d9508b0db04d24a68a5ae56d7ba489b208ead34f07b7bacab20061646575cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_844753058441b3b8012489b93416470a4cbc246e18fdead20848a134cc756684->leave($__internal_844753058441b3b8012489b93416470a4cbc246e18fdead20848a134cc756684_prof);

        
        $__internal_55d9508b0db04d24a68a5ae56d7ba489b208ead34f07b7bacab20061646575cd->leave($__internal_55d9508b0db04d24a68a5ae56d7ba489b208ead34f07b7bacab20061646575cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
