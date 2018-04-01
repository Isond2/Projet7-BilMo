<?php

/* base.html.twig */
class __TwigTemplate_76e0c5eacccad0d62efa5a9070c7a54df85e605307bcfd501cf2152aa72b0792 extends Twig_Template
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
        $__internal_5b8e946c8ff1952cdbe590e024e45b4c6197f91cf329ba1c9f33a85f139be1cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b8e946c8ff1952cdbe590e024e45b4c6197f91cf329ba1c9f33a85f139be1cf->enter($__internal_5b8e946c8ff1952cdbe590e024e45b4c6197f91cf329ba1c9f33a85f139be1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fe2332bf5c9e4032955340d3b333dce1819935c6be8cd409895a2a884ee6d9e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2332bf5c9e4032955340d3b333dce1819935c6be8cd409895a2a884ee6d9e6->enter($__internal_fe2332bf5c9e4032955340d3b333dce1819935c6be8cd409895a2a884ee6d9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5b8e946c8ff1952cdbe590e024e45b4c6197f91cf329ba1c9f33a85f139be1cf->leave($__internal_5b8e946c8ff1952cdbe590e024e45b4c6197f91cf329ba1c9f33a85f139be1cf_prof);

        
        $__internal_fe2332bf5c9e4032955340d3b333dce1819935c6be8cd409895a2a884ee6d9e6->leave($__internal_fe2332bf5c9e4032955340d3b333dce1819935c6be8cd409895a2a884ee6d9e6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e10e8105f9eaaa115451bbba2d44b66aa69d39de4bc4814cb40340879cc961db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10e8105f9eaaa115451bbba2d44b66aa69d39de4bc4814cb40340879cc961db->enter($__internal_e10e8105f9eaaa115451bbba2d44b66aa69d39de4bc4814cb40340879cc961db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7c76891850c79bcc3bf88fed3943696e9c4f381ab5bb98c15f58d2f6b98d972a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c76891850c79bcc3bf88fed3943696e9c4f381ab5bb98c15f58d2f6b98d972a->enter($__internal_7c76891850c79bcc3bf88fed3943696e9c4f381ab5bb98c15f58d2f6b98d972a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7c76891850c79bcc3bf88fed3943696e9c4f381ab5bb98c15f58d2f6b98d972a->leave($__internal_7c76891850c79bcc3bf88fed3943696e9c4f381ab5bb98c15f58d2f6b98d972a_prof);

        
        $__internal_e10e8105f9eaaa115451bbba2d44b66aa69d39de4bc4814cb40340879cc961db->leave($__internal_e10e8105f9eaaa115451bbba2d44b66aa69d39de4bc4814cb40340879cc961db_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1448b68e760ef815deecddfe1b1d999b77417450c15856ecb9ea2cd92a074aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1448b68e760ef815deecddfe1b1d999b77417450c15856ecb9ea2cd92a074aca->enter($__internal_1448b68e760ef815deecddfe1b1d999b77417450c15856ecb9ea2cd92a074aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a68d121920c332287ee7cbe8394654a8082cb4701367564b51ce77c3739d43a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68d121920c332287ee7cbe8394654a8082cb4701367564b51ce77c3739d43a6->enter($__internal_a68d121920c332287ee7cbe8394654a8082cb4701367564b51ce77c3739d43a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a68d121920c332287ee7cbe8394654a8082cb4701367564b51ce77c3739d43a6->leave($__internal_a68d121920c332287ee7cbe8394654a8082cb4701367564b51ce77c3739d43a6_prof);

        
        $__internal_1448b68e760ef815deecddfe1b1d999b77417450c15856ecb9ea2cd92a074aca->leave($__internal_1448b68e760ef815deecddfe1b1d999b77417450c15856ecb9ea2cd92a074aca_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e3fcb629538a55bafcf1aa82ef722eda71f023b56220be48a90e8b2c10fa736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3fcb629538a55bafcf1aa82ef722eda71f023b56220be48a90e8b2c10fa736->enter($__internal_6e3fcb629538a55bafcf1aa82ef722eda71f023b56220be48a90e8b2c10fa736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_834f2b32f0535a190688be9cdf64c666385ac7e3d73c81192c8a9f97c1a66403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834f2b32f0535a190688be9cdf64c666385ac7e3d73c81192c8a9f97c1a66403->enter($__internal_834f2b32f0535a190688be9cdf64c666385ac7e3d73c81192c8a9f97c1a66403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_834f2b32f0535a190688be9cdf64c666385ac7e3d73c81192c8a9f97c1a66403->leave($__internal_834f2b32f0535a190688be9cdf64c666385ac7e3d73c81192c8a9f97c1a66403_prof);

        
        $__internal_6e3fcb629538a55bafcf1aa82ef722eda71f023b56220be48a90e8b2c10fa736->leave($__internal_6e3fcb629538a55bafcf1aa82ef722eda71f023b56220be48a90e8b2c10fa736_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11cdcbc37f32ec5b3c521b2a2fa4984df74a222b62ba6f4fc978cf3887c94c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11cdcbc37f32ec5b3c521b2a2fa4984df74a222b62ba6f4fc978cf3887c94c5e->enter($__internal_11cdcbc37f32ec5b3c521b2a2fa4984df74a222b62ba6f4fc978cf3887c94c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d820f65d2c02153d92531516d27e68dd88233b058dc675e14a872ad77d6f346a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d820f65d2c02153d92531516d27e68dd88233b058dc675e14a872ad77d6f346a->enter($__internal_d820f65d2c02153d92531516d27e68dd88233b058dc675e14a872ad77d6f346a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d820f65d2c02153d92531516d27e68dd88233b058dc675e14a872ad77d6f346a->leave($__internal_d820f65d2c02153d92531516d27e68dd88233b058dc675e14a872ad77d6f346a_prof);

        
        $__internal_11cdcbc37f32ec5b3c521b2a2fa4984df74a222b62ba6f4fc978cf3887c94c5e->leave($__internal_11cdcbc37f32ec5b3c521b2a2fa4984df74a222b62ba6f4fc978cf3887c94c5e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp64\\www\\Symfony3\\app\\Resources\\views\\base.html.twig");
    }
}
