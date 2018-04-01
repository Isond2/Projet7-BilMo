<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_37efd6b08f073b30364f2d0a3ed90dff35b1c621f44b315a640646c183be5a89 extends Twig_Template
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
        $__internal_d2df18fc93a3447dc2267518f946d0e5c5bf470b41fad7065129d85ce486dbe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2df18fc93a3447dc2267518f946d0e5c5bf470b41fad7065129d85ce486dbe1->enter($__internal_d2df18fc93a3447dc2267518f946d0e5c5bf470b41fad7065129d85ce486dbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_ac89148bf5cfa6b25ba89adaeff2eaabd2dfbd6cd4516eb5ede6d1982115e2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac89148bf5cfa6b25ba89adaeff2eaabd2dfbd6cd4516eb5ede6d1982115e2a0->enter($__internal_ac89148bf5cfa6b25ba89adaeff2eaabd2dfbd6cd4516eb5ede6d1982115e2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d2df18fc93a3447dc2267518f946d0e5c5bf470b41fad7065129d85ce486dbe1->leave($__internal_d2df18fc93a3447dc2267518f946d0e5c5bf470b41fad7065129d85ce486dbe1_prof);

        
        $__internal_ac89148bf5cfa6b25ba89adaeff2eaabd2dfbd6cd4516eb5ede6d1982115e2a0->leave($__internal_ac89148bf5cfa6b25ba89adaeff2eaabd2dfbd6cd4516eb5ede6d1982115e2a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
