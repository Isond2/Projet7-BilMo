<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1fab207a71b62c184a9c714f9376ea910c4af981226f81fbe319921275625bd9 extends Twig_Template
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
        $__internal_6888d745e019390f403fbfa10acc40adb29a7f4b5c1847c43cb1172c186a9228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6888d745e019390f403fbfa10acc40adb29a7f4b5c1847c43cb1172c186a9228->enter($__internal_6888d745e019390f403fbfa10acc40adb29a7f4b5c1847c43cb1172c186a9228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_30dbab58566b12006bbd5f76615c9c8e3998627bf5f1a42282e32ed253d69795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30dbab58566b12006bbd5f76615c9c8e3998627bf5f1a42282e32ed253d69795->enter($__internal_30dbab58566b12006bbd5f76615c9c8e3998627bf5f1a42282e32ed253d69795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_6888d745e019390f403fbfa10acc40adb29a7f4b5c1847c43cb1172c186a9228->leave($__internal_6888d745e019390f403fbfa10acc40adb29a7f4b5c1847c43cb1172c186a9228_prof);

        
        $__internal_30dbab58566b12006bbd5f76615c9c8e3998627bf5f1a42282e32ed253d69795->leave($__internal_30dbab58566b12006bbd5f76615c9c8e3998627bf5f1a42282e32ed253d69795_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
