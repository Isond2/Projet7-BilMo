<?php

/* ::base.html.twig */
class __TwigTemplate_0a53ec0aafcf3a3e88bd18e67cbc58fe1a7ed6f0ed30a1d0228413a85277d363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7632ab7627858670da70c6e02472b0c5b132820d2c47db1143af22c55b773a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7632ab7627858670da70c6e02472b0c5b132820d2c47db1143af22c55b773a4c->enter($__internal_7632ab7627858670da70c6e02472b0c5b132820d2c47db1143af22c55b773a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8cfc60329df3c564907d8fc7b82d4592eddcf4aeafc14c75efaac5115070a143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cfc60329df3c564907d8fc7b82d4592eddcf4aeafc14c75efaac5115070a143->enter($__internal_8cfc60329df3c564907d8fc7b82d4592eddcf4aeafc14c75efaac5115070a143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7632ab7627858670da70c6e02472b0c5b132820d2c47db1143af22c55b773a4c->leave($__internal_7632ab7627858670da70c6e02472b0c5b132820d2c47db1143af22c55b773a4c_prof);

        
        $__internal_8cfc60329df3c564907d8fc7b82d4592eddcf4aeafc14c75efaac5115070a143->leave($__internal_8cfc60329df3c564907d8fc7b82d4592eddcf4aeafc14c75efaac5115070a143_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e4df2e97336db7a818055440de1009a1887932f4481a247990256fb5ef4ff78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4df2e97336db7a818055440de1009a1887932f4481a247990256fb5ef4ff78->enter($__internal_7e4df2e97336db7a818055440de1009a1887932f4481a247990256fb5ef4ff78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f7bb6dcd7806087ce752caeef051ef80a1d1ee6c3c8ef0401b303f567087aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7bb6dcd7806087ce752caeef051ef80a1d1ee6c3c8ef0401b303f567087aeb->enter($__internal_2f7bb6dcd7806087ce752caeef051ef80a1d1ee6c3c8ef0401b303f567087aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2f7bb6dcd7806087ce752caeef051ef80a1d1ee6c3c8ef0401b303f567087aeb->leave($__internal_2f7bb6dcd7806087ce752caeef051ef80a1d1ee6c3c8ef0401b303f567087aeb_prof);

        
        $__internal_7e4df2e97336db7a818055440de1009a1887932f4481a247990256fb5ef4ff78->leave($__internal_7e4df2e97336db7a818055440de1009a1887932f4481a247990256fb5ef4ff78_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f93d34f68e3ccb36af88dc0a7415c99bc2258c76728b900030a76b679484f578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93d34f68e3ccb36af88dc0a7415c99bc2258c76728b900030a76b679484f578->enter($__internal_f93d34f68e3ccb36af88dc0a7415c99bc2258c76728b900030a76b679484f578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bca6be6f2c4eaf3d44d7e24741de491ee44d1e2135906b182052ce67571c13f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca6be6f2c4eaf3d44d7e24741de491ee44d1e2135906b182052ce67571c13f0->enter($__internal_bca6be6f2c4eaf3d44d7e24741de491ee44d1e2135906b182052ce67571c13f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bca6be6f2c4eaf3d44d7e24741de491ee44d1e2135906b182052ce67571c13f0->leave($__internal_bca6be6f2c4eaf3d44d7e24741de491ee44d1e2135906b182052ce67571c13f0_prof);

        
        $__internal_f93d34f68e3ccb36af88dc0a7415c99bc2258c76728b900030a76b679484f578->leave($__internal_f93d34f68e3ccb36af88dc0a7415c99bc2258c76728b900030a76b679484f578_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8dd40aae1d751a87d028bb3071095692000b27b4eecf60e6668156452344821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8dd40aae1d751a87d028bb3071095692000b27b4eecf60e6668156452344821->enter($__internal_e8dd40aae1d751a87d028bb3071095692000b27b4eecf60e6668156452344821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c321ec81d647cb8f6bc314f6e8daaf53cdb8b5494713a924d0aedd8be7be7654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c321ec81d647cb8f6bc314f6e8daaf53cdb8b5494713a924d0aedd8be7be7654->enter($__internal_c321ec81d647cb8f6bc314f6e8daaf53cdb8b5494713a924d0aedd8be7be7654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c321ec81d647cb8f6bc314f6e8daaf53cdb8b5494713a924d0aedd8be7be7654->leave($__internal_c321ec81d647cb8f6bc314f6e8daaf53cdb8b5494713a924d0aedd8be7be7654_prof);

        
        $__internal_e8dd40aae1d751a87d028bb3071095692000b27b4eecf60e6668156452344821->leave($__internal_e8dd40aae1d751a87d028bb3071095692000b27b4eecf60e6668156452344821_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb4d54509a710761d909595442ff7bfc9fd2839bf50638dd08e051b0fe0de3c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4d54509a710761d909595442ff7bfc9fd2839bf50638dd08e051b0fe0de3c4->enter($__internal_eb4d54509a710761d909595442ff7bfc9fd2839bf50638dd08e051b0fe0de3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_06627a5251f8ec59655c4efc1319dcc02f713846ecf470d63ae7bddeeda91bc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06627a5251f8ec59655c4efc1319dcc02f713846ecf470d63ae7bddeeda91bc5->enter($__internal_06627a5251f8ec59655c4efc1319dcc02f713846ecf470d63ae7bddeeda91bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_06627a5251f8ec59655c4efc1319dcc02f713846ecf470d63ae7bddeeda91bc5->leave($__internal_06627a5251f8ec59655c4efc1319dcc02f713846ecf470d63ae7bddeeda91bc5_prof);

        
        $__internal_eb4d54509a710761d909595442ff7bfc9fd2839bf50638dd08e051b0fe0de3c4->leave($__internal_eb4d54509a710761d909595442ff7bfc9fd2839bf50638dd08e051b0fe0de3c4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\Symfony3\\app/Resources\\views/base.html.twig");
    }
}
