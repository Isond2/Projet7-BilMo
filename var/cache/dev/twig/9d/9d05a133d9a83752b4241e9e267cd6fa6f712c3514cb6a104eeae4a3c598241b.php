<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_e640bf6930e6d073fdc03784dbc138d5c67301b9a56b721b25de5df24f342b64 extends Twig_Template
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
        $__internal_7913df7162a10ee20d196508aeb673285931ce8eb54f58fa4badc4ae51c63618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7913df7162a10ee20d196508aeb673285931ce8eb54f58fa4badc4ae51c63618->enter($__internal_7913df7162a10ee20d196508aeb673285931ce8eb54f58fa4badc4ae51c63618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_2937f920251cb0bae5198ec22013a6d939ce5d4bbc39e432a92c5ac8a086bd88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2937f920251cb0bae5198ec22013a6d939ce5d4bbc39e432a92c5ac8a086bd88->enter($__internal_2937f920251cb0bae5198ec22013a6d939ce5d4bbc39e432a92c5ac8a086bd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_7913df7162a10ee20d196508aeb673285931ce8eb54f58fa4badc4ae51c63618->leave($__internal_7913df7162a10ee20d196508aeb673285931ce8eb54f58fa4badc4ae51c63618_prof);

        
        $__internal_2937f920251cb0bae5198ec22013a6d939ce5d4bbc39e432a92c5ac8a086bd88->leave($__internal_2937f920251cb0bae5198ec22013a6d939ce5d4bbc39e432a92c5ac8a086bd88_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dfe0ec3097af1745feb9d44873c57be8831d199c10e803136b9b4dbaccd3d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dfe0ec3097af1745feb9d44873c57be8831d199c10e803136b9b4dbaccd3d47->enter($__internal_3dfe0ec3097af1745feb9d44873c57be8831d199c10e803136b9b4dbaccd3d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_69e89b0184beb166d551d02a369644c692e5aa57765c604abdc766e2c4002c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e89b0184beb166d551d02a369644c692e5aa57765c604abdc766e2c4002c0c->enter($__internal_69e89b0184beb166d551d02a369644c692e5aa57765c604abdc766e2c4002c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_69e89b0184beb166d551d02a369644c692e5aa57765c604abdc766e2c4002c0c->leave($__internal_69e89b0184beb166d551d02a369644c692e5aa57765c604abdc766e2c4002c0c_prof);

        
        $__internal_3dfe0ec3097af1745feb9d44873c57be8831d199c10e803136b9b4dbaccd3d47->leave($__internal_3dfe0ec3097af1745feb9d44873c57be8831d199c10e803136b9b4dbaccd3d47_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0fe512ada046f515ad744143122abb51199ebcd789671682aa62bf792baf112e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe512ada046f515ad744143122abb51199ebcd789671682aa62bf792baf112e->enter($__internal_0fe512ada046f515ad744143122abb51199ebcd789671682aa62bf792baf112e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ae05f29d35cd2d26639230943d21b0bdf2029fc43713d10aa92bd470792dd846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae05f29d35cd2d26639230943d21b0bdf2029fc43713d10aa92bd470792dd846->enter($__internal_ae05f29d35cd2d26639230943d21b0bdf2029fc43713d10aa92bd470792dd846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ae05f29d35cd2d26639230943d21b0bdf2029fc43713d10aa92bd470792dd846->leave($__internal_ae05f29d35cd2d26639230943d21b0bdf2029fc43713d10aa92bd470792dd846_prof);

        
        $__internal_0fe512ada046f515ad744143122abb51199ebcd789671682aa62bf792baf112e->leave($__internal_0fe512ada046f515ad744143122abb51199ebcd789671682aa62bf792baf112e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a792a38cb32fe1539613ad9b747e85aff1bb6753b08e4340c09a19e7f44bc77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a792a38cb32fe1539613ad9b747e85aff1bb6753b08e4340c09a19e7f44bc77->enter($__internal_4a792a38cb32fe1539613ad9b747e85aff1bb6753b08e4340c09a19e7f44bc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d7a801c0e794bae763b4e2cee6643cc9366f2adf44ec1b72e65ad7430bc10c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7a801c0e794bae763b4e2cee6643cc9366f2adf44ec1b72e65ad7430bc10c2->enter($__internal_5d7a801c0e794bae763b4e2cee6643cc9366f2adf44ec1b72e65ad7430bc10c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5d7a801c0e794bae763b4e2cee6643cc9366f2adf44ec1b72e65ad7430bc10c2->leave($__internal_5d7a801c0e794bae763b4e2cee6643cc9366f2adf44ec1b72e65ad7430bc10c2_prof);

        
        $__internal_4a792a38cb32fe1539613ad9b747e85aff1bb6753b08e4340c09a19e7f44bc77->leave($__internal_4a792a38cb32fe1539613ad9b747e85aff1bb6753b08e4340c09a19e7f44bc77_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
