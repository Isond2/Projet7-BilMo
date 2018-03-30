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
        $__internal_9d58bcaefbfc6251763745b13922310c8f071e94b000794d4e7ee4f53454e018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d58bcaefbfc6251763745b13922310c8f071e94b000794d4e7ee4f53454e018->enter($__internal_9d58bcaefbfc6251763745b13922310c8f071e94b000794d4e7ee4f53454e018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_29d830fd5bd0b948e257dfde55ede729721b912631fcca34ff5c22aa391d6084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d830fd5bd0b948e257dfde55ede729721b912631fcca34ff5c22aa391d6084->enter($__internal_29d830fd5bd0b948e257dfde55ede729721b912631fcca34ff5c22aa391d6084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9d58bcaefbfc6251763745b13922310c8f071e94b000794d4e7ee4f53454e018->leave($__internal_9d58bcaefbfc6251763745b13922310c8f071e94b000794d4e7ee4f53454e018_prof);

        
        $__internal_29d830fd5bd0b948e257dfde55ede729721b912631fcca34ff5c22aa391d6084->leave($__internal_29d830fd5bd0b948e257dfde55ede729721b912631fcca34ff5c22aa391d6084_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b40021b4d259e2ba0b3ec85f05a222cc826c49d3d20008915f4021e57a2b179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b40021b4d259e2ba0b3ec85f05a222cc826c49d3d20008915f4021e57a2b179->enter($__internal_1b40021b4d259e2ba0b3ec85f05a222cc826c49d3d20008915f4021e57a2b179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_733c5885ebd40786401dda6763ba6c962c78f35def426d51a006cfb712ea5f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733c5885ebd40786401dda6763ba6c962c78f35def426d51a006cfb712ea5f7b->enter($__internal_733c5885ebd40786401dda6763ba6c962c78f35def426d51a006cfb712ea5f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_733c5885ebd40786401dda6763ba6c962c78f35def426d51a006cfb712ea5f7b->leave($__internal_733c5885ebd40786401dda6763ba6c962c78f35def426d51a006cfb712ea5f7b_prof);

        
        $__internal_1b40021b4d259e2ba0b3ec85f05a222cc826c49d3d20008915f4021e57a2b179->leave($__internal_1b40021b4d259e2ba0b3ec85f05a222cc826c49d3d20008915f4021e57a2b179_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_27d01ae1cab95644df909d27459e7bd843065404a08bffec61ba6332b216dced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d01ae1cab95644df909d27459e7bd843065404a08bffec61ba6332b216dced->enter($__internal_27d01ae1cab95644df909d27459e7bd843065404a08bffec61ba6332b216dced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_31e9d544c0d79b3db17f411f4a686c2cf911550bf1ebce06707e4842b2650608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e9d544c0d79b3db17f411f4a686c2cf911550bf1ebce06707e4842b2650608->enter($__internal_31e9d544c0d79b3db17f411f4a686c2cf911550bf1ebce06707e4842b2650608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_31e9d544c0d79b3db17f411f4a686c2cf911550bf1ebce06707e4842b2650608->leave($__internal_31e9d544c0d79b3db17f411f4a686c2cf911550bf1ebce06707e4842b2650608_prof);

        
        $__internal_27d01ae1cab95644df909d27459e7bd843065404a08bffec61ba6332b216dced->leave($__internal_27d01ae1cab95644df909d27459e7bd843065404a08bffec61ba6332b216dced_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb2b058e7f6112f2590ad42c749e653c8b6ecfee9afecd27816f70468a7497b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2b058e7f6112f2590ad42c749e653c8b6ecfee9afecd27816f70468a7497b0->enter($__internal_fb2b058e7f6112f2590ad42c749e653c8b6ecfee9afecd27816f70468a7497b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68b1adaaafd8a9e6379e152cc9cd8b05e097e69c8f8e7fd54132f3f6b83dd136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b1adaaafd8a9e6379e152cc9cd8b05e097e69c8f8e7fd54132f3f6b83dd136->enter($__internal_68b1adaaafd8a9e6379e152cc9cd8b05e097e69c8f8e7fd54132f3f6b83dd136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_68b1adaaafd8a9e6379e152cc9cd8b05e097e69c8f8e7fd54132f3f6b83dd136->leave($__internal_68b1adaaafd8a9e6379e152cc9cd8b05e097e69c8f8e7fd54132f3f6b83dd136_prof);

        
        $__internal_fb2b058e7f6112f2590ad42c749e653c8b6ecfee9afecd27816f70468a7497b0->leave($__internal_fb2b058e7f6112f2590ad42c749e653c8b6ecfee9afecd27816f70468a7497b0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_25c243bc6be581f98d45f9089b00e1f15deb5fb9286617ab6a43ac0f1f394167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c243bc6be581f98d45f9089b00e1f15deb5fb9286617ab6a43ac0f1f394167->enter($__internal_25c243bc6be581f98d45f9089b00e1f15deb5fb9286617ab6a43ac0f1f394167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_74be973669f2bb9eeea76d641a68c2f6f1ba51b2cc01384cb53232533fb23d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74be973669f2bb9eeea76d641a68c2f6f1ba51b2cc01384cb53232533fb23d1b->enter($__internal_74be973669f2bb9eeea76d641a68c2f6f1ba51b2cc01384cb53232533fb23d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_74be973669f2bb9eeea76d641a68c2f6f1ba51b2cc01384cb53232533fb23d1b->leave($__internal_74be973669f2bb9eeea76d641a68c2f6f1ba51b2cc01384cb53232533fb23d1b_prof);

        
        $__internal_25c243bc6be581f98d45f9089b00e1f15deb5fb9286617ab6a43ac0f1f394167->leave($__internal_25c243bc6be581f98d45f9089b00e1f15deb5fb9286617ab6a43ac0f1f394167_prof);

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
