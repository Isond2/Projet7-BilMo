<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f03c17cd967390ab6874b258de9edc1e44e78bd710df52ccddc38062b98892cc extends Twig_Template
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
        $__internal_46fe2da929819421d7d402c6a98b5a269073088ab3d56d198a48a7f1ed478998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46fe2da929819421d7d402c6a98b5a269073088ab3d56d198a48a7f1ed478998->enter($__internal_46fe2da929819421d7d402c6a98b5a269073088ab3d56d198a48a7f1ed478998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_369439b58f1692ab8121961de5925f8a2909cd2861733495534546c49fcd8224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369439b58f1692ab8121961de5925f8a2909cd2861733495534546c49fcd8224->enter($__internal_369439b58f1692ab8121961de5925f8a2909cd2861733495534546c49fcd8224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_46fe2da929819421d7d402c6a98b5a269073088ab3d56d198a48a7f1ed478998->leave($__internal_46fe2da929819421d7d402c6a98b5a269073088ab3d56d198a48a7f1ed478998_prof);

        
        $__internal_369439b58f1692ab8121961de5925f8a2909cd2861733495534546c49fcd8224->leave($__internal_369439b58f1692ab8121961de5925f8a2909cd2861733495534546c49fcd8224_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
