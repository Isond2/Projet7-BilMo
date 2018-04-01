<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3c47d5eccb5f1f70895168154a6c072dd8e491fa9e26bc1d0836c1adfbd565f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_8619f2b44a694e4746389d5bc01963f3b5cfc07f202957c18efa1f3a3ae91e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8619f2b44a694e4746389d5bc01963f3b5cfc07f202957c18efa1f3a3ae91e72->enter($__internal_8619f2b44a694e4746389d5bc01963f3b5cfc07f202957c18efa1f3a3ae91e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_85631af97b6c3534de49c594c4873baabf42e85f80369eadd0206e5d7f68643c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85631af97b6c3534de49c594c4873baabf42e85f80369eadd0206e5d7f68643c->enter($__internal_85631af97b6c3534de49c594c4873baabf42e85f80369eadd0206e5d7f68643c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8619f2b44a694e4746389d5bc01963f3b5cfc07f202957c18efa1f3a3ae91e72->leave($__internal_8619f2b44a694e4746389d5bc01963f3b5cfc07f202957c18efa1f3a3ae91e72_prof);

        
        $__internal_85631af97b6c3534de49c594c4873baabf42e85f80369eadd0206e5d7f68643c->leave($__internal_85631af97b6c3534de49c594c4873baabf42e85f80369eadd0206e5d7f68643c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd3100f8a557b574d826e0202d1ff3fcdc97e4f082863767be0d7bdd6b720738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3100f8a557b574d826e0202d1ff3fcdc97e4f082863767be0d7bdd6b720738->enter($__internal_cd3100f8a557b574d826e0202d1ff3fcdc97e4f082863767be0d7bdd6b720738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d048b814eea816f652e7bbf2b070d04a600b31816a71b60ab06802d53005f04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d048b814eea816f652e7bbf2b070d04a600b31816a71b60ab06802d53005f04f->enter($__internal_d048b814eea816f652e7bbf2b070d04a600b31816a71b60ab06802d53005f04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d048b814eea816f652e7bbf2b070d04a600b31816a71b60ab06802d53005f04f->leave($__internal_d048b814eea816f652e7bbf2b070d04a600b31816a71b60ab06802d53005f04f_prof);

        
        $__internal_cd3100f8a557b574d826e0202d1ff3fcdc97e4f082863767be0d7bdd6b720738->leave($__internal_cd3100f8a557b574d826e0202d1ff3fcdc97e4f082863767be0d7bdd6b720738_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_30ea86a42cddae0f19b855fb7cd1f8903422b20969d4800c8a5e8c40efbba873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30ea86a42cddae0f19b855fb7cd1f8903422b20969d4800c8a5e8c40efbba873->enter($__internal_30ea86a42cddae0f19b855fb7cd1f8903422b20969d4800c8a5e8c40efbba873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f31167178ad0ba923540eca588d89df46c31a41224f98348e9a95af6fe8e874b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31167178ad0ba923540eca588d89df46c31a41224f98348e9a95af6fe8e874b->enter($__internal_f31167178ad0ba923540eca588d89df46c31a41224f98348e9a95af6fe8e874b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f31167178ad0ba923540eca588d89df46c31a41224f98348e9a95af6fe8e874b->leave($__internal_f31167178ad0ba923540eca588d89df46c31a41224f98348e9a95af6fe8e874b_prof);

        
        $__internal_30ea86a42cddae0f19b855fb7cd1f8903422b20969d4800c8a5e8c40efbba873->leave($__internal_30ea86a42cddae0f19b855fb7cd1f8903422b20969d4800c8a5e8c40efbba873_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
