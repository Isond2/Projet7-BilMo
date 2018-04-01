<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_cfd00c590fba41c043a1a760819bb9a7efa364ea835e40bcea8e89b8965e5b9c extends Twig_Template
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
        $__internal_aa867498b4843bfa40aff05eebd218284ed2c927a5c5de7e01a147cd391bba2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa867498b4843bfa40aff05eebd218284ed2c927a5c5de7e01a147cd391bba2b->enter($__internal_aa867498b4843bfa40aff05eebd218284ed2c927a5c5de7e01a147cd391bba2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_34c5f9e9421197bf95f0689ac505f48cc5848e783b4ff5fc519339521fedec21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c5f9e9421197bf95f0689ac505f48cc5848e783b4ff5fc519339521fedec21->enter($__internal_34c5f9e9421197bf95f0689ac505f48cc5848e783b4ff5fc519339521fedec21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_aa867498b4843bfa40aff05eebd218284ed2c927a5c5de7e01a147cd391bba2b->leave($__internal_aa867498b4843bfa40aff05eebd218284ed2c927a5c5de7e01a147cd391bba2b_prof);

        
        $__internal_34c5f9e9421197bf95f0689ac505f48cc5848e783b4ff5fc519339521fedec21->leave($__internal_34c5f9e9421197bf95f0689ac505f48cc5848e783b4ff5fc519339521fedec21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
