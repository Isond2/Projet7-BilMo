<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_80b71afaf612eb8f4c366bce9811b6fe0ca3b1bbeb5fa1a77143a7f4e710e2ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a026f88e7616a9a05b3e9fd7f3ae4e68ec073cf1d903d0175bfafa5ade9b36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a026f88e7616a9a05b3e9fd7f3ae4e68ec073cf1d903d0175bfafa5ade9b36f->enter($__internal_2a026f88e7616a9a05b3e9fd7f3ae4e68ec073cf1d903d0175bfafa5ade9b36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_25d7bafe51a683c4e96d7930742f6ef6a990f97cc21278095bf29bc4942b19d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d7bafe51a683c4e96d7930742f6ef6a990f97cc21278095bf29bc4942b19d4->enter($__internal_25d7bafe51a683c4e96d7930742f6ef6a990f97cc21278095bf29bc4942b19d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2a026f88e7616a9a05b3e9fd7f3ae4e68ec073cf1d903d0175bfafa5ade9b36f->leave($__internal_2a026f88e7616a9a05b3e9fd7f3ae4e68ec073cf1d903d0175bfafa5ade9b36f_prof);

        
        $__internal_25d7bafe51a683c4e96d7930742f6ef6a990f97cc21278095bf29bc4942b19d4->leave($__internal_25d7bafe51a683c4e96d7930742f6ef6a990f97cc21278095bf29bc4942b19d4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_55abf95bc13a305af3f29119eea6e75828c5d7bb9949f6488bf62588407a401d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55abf95bc13a305af3f29119eea6e75828c5d7bb9949f6488bf62588407a401d->enter($__internal_55abf95bc13a305af3f29119eea6e75828c5d7bb9949f6488bf62588407a401d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2bee1a3a683a0a605be5a7c19d742115b9395360d75630af1f2f7fae1072985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2bee1a3a683a0a605be5a7c19d742115b9395360d75630af1f2f7fae1072985->enter($__internal_a2bee1a3a683a0a605be5a7c19d742115b9395360d75630af1f2f7fae1072985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a2bee1a3a683a0a605be5a7c19d742115b9395360d75630af1f2f7fae1072985->leave($__internal_a2bee1a3a683a0a605be5a7c19d742115b9395360d75630af1f2f7fae1072985_prof);

        
        $__internal_55abf95bc13a305af3f29119eea6e75828c5d7bb9949f6488bf62588407a401d->leave($__internal_55abf95bc13a305af3f29119eea6e75828c5d7bb9949f6488bf62588407a401d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_89276490d82583bfcdbd255894b98dd2d0d86ec90ce793c767e1ca740f41e459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89276490d82583bfcdbd255894b98dd2d0d86ec90ce793c767e1ca740f41e459->enter($__internal_89276490d82583bfcdbd255894b98dd2d0d86ec90ce793c767e1ca740f41e459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1a760af53b7c587a8245ffa456d20b1fe251ba2f0e30d8c9cfc379e2e25da17a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a760af53b7c587a8245ffa456d20b1fe251ba2f0e30d8c9cfc379e2e25da17a->enter($__internal_1a760af53b7c587a8245ffa456d20b1fe251ba2f0e30d8c9cfc379e2e25da17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1a760af53b7c587a8245ffa456d20b1fe251ba2f0e30d8c9cfc379e2e25da17a->leave($__internal_1a760af53b7c587a8245ffa456d20b1fe251ba2f0e30d8c9cfc379e2e25da17a_prof);

        
        $__internal_89276490d82583bfcdbd255894b98dd2d0d86ec90ce793c767e1ca740f41e459->leave($__internal_89276490d82583bfcdbd255894b98dd2d0d86ec90ce793c767e1ca740f41e459_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_435ce38510be4c7d56bea21e57d6741270f5263d4377b81652ab959a070c81cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435ce38510be4c7d56bea21e57d6741270f5263d4377b81652ab959a070c81cc->enter($__internal_435ce38510be4c7d56bea21e57d6741270f5263d4377b81652ab959a070c81cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a8dec3e03945a6412fd9e824939b08d2281b5d454b64880656e7efd8bc761e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8dec3e03945a6412fd9e824939b08d2281b5d454b64880656e7efd8bc761e1->enter($__internal_0a8dec3e03945a6412fd9e824939b08d2281b5d454b64880656e7efd8bc761e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0a8dec3e03945a6412fd9e824939b08d2281b5d454b64880656e7efd8bc761e1->leave($__internal_0a8dec3e03945a6412fd9e824939b08d2281b5d454b64880656e7efd8bc761e1_prof);

        
        $__internal_435ce38510be4c7d56bea21e57d6741270f5263d4377b81652ab959a070c81cc->leave($__internal_435ce38510be4c7d56bea21e57d6741270f5263d4377b81652ab959a070c81cc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
