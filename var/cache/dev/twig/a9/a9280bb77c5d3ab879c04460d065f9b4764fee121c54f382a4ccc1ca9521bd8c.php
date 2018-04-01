<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_b99aae822373dbad48102e719241f591b4af74c23181feee0e39e4d4c966b726 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fd055dee96bec28c8483b83031f4d99e54048802a0b1b2541d262ff4a3bce41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fd055dee96bec28c8483b83031f4d99e54048802a0b1b2541d262ff4a3bce41->enter($__internal_8fd055dee96bec28c8483b83031f4d99e54048802a0b1b2541d262ff4a3bce41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_d59bfd5486c97bf9e2e9e362df6ec6c0878a88f2767eab829467cd2f032b6079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59bfd5486c97bf9e2e9e362df6ec6c0878a88f2767eab829467cd2f032b6079->enter($__internal_d59bfd5486c97bf9e2e9e362df6ec6c0878a88f2767eab829467cd2f032b6079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fd055dee96bec28c8483b83031f4d99e54048802a0b1b2541d262ff4a3bce41->leave($__internal_8fd055dee96bec28c8483b83031f4d99e54048802a0b1b2541d262ff4a3bce41_prof);

        
        $__internal_d59bfd5486c97bf9e2e9e362df6ec6c0878a88f2767eab829467cd2f032b6079->leave($__internal_d59bfd5486c97bf9e2e9e362df6ec6c0878a88f2767eab829467cd2f032b6079_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d219677477de0af7c5281b787a7d857bd3c3ccf4ef1c24044c30d8e4a970684e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d219677477de0af7c5281b787a7d857bd3c3ccf4ef1c24044c30d8e4a970684e->enter($__internal_d219677477de0af7c5281b787a7d857bd3c3ccf4ef1c24044c30d8e4a970684e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e82e8186db7facbb508fd7a0aecd833f8d42126a5208ee17c1d04f3d03d7e3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82e8186db7facbb508fd7a0aecd833f8d42126a5208ee17c1d04f3d03d7e3be->enter($__internal_e82e8186db7facbb508fd7a0aecd833f8d42126a5208ee17c1d04f3d03d7e3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e82e8186db7facbb508fd7a0aecd833f8d42126a5208ee17c1d04f3d03d7e3be->leave($__internal_e82e8186db7facbb508fd7a0aecd833f8d42126a5208ee17c1d04f3d03d7e3be_prof);

        
        $__internal_d219677477de0af7c5281b787a7d857bd3c3ccf4ef1c24044c30d8e4a970684e->leave($__internal_d219677477de0af7c5281b787a7d857bd3c3ccf4ef1c24044c30d8e4a970684e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a97aab45039ee80752f522b92695823e0771f95257989acf98c6de4a63634aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97aab45039ee80752f522b92695823e0771f95257989acf98c6de4a63634aae->enter($__internal_a97aab45039ee80752f522b92695823e0771f95257989acf98c6de4a63634aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3756cf519b9e1166cdfa6da194ff05e91886a7c10bd8584a5dd2bf939fb96f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3756cf519b9e1166cdfa6da194ff05e91886a7c10bd8584a5dd2bf939fb96f36->enter($__internal_3756cf519b9e1166cdfa6da194ff05e91886a7c10bd8584a5dd2bf939fb96f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3756cf519b9e1166cdfa6da194ff05e91886a7c10bd8584a5dd2bf939fb96f36->leave($__internal_3756cf519b9e1166cdfa6da194ff05e91886a7c10bd8584a5dd2bf939fb96f36_prof);

        
        $__internal_a97aab45039ee80752f522b92695823e0771f95257989acf98c6de4a63634aae->leave($__internal_a97aab45039ee80752f522b92695823e0771f95257989acf98c6de4a63634aae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
