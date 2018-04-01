<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a8e2726c9bff272003196e9228d78627ee56cbc42e533c8681e222d284fc5c4d extends Twig_Template
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
        $__internal_768c5e2430f959f7deb2b3b25aeb09f744699e3f1bbd44e0c36de1a016c3cc09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_768c5e2430f959f7deb2b3b25aeb09f744699e3f1bbd44e0c36de1a016c3cc09->enter($__internal_768c5e2430f959f7deb2b3b25aeb09f744699e3f1bbd44e0c36de1a016c3cc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_59900a9b247f490f015d86594388c021931ed4204e41d45a4874219e56d75239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59900a9b247f490f015d86594388c021931ed4204e41d45a4874219e56d75239->enter($__internal_59900a9b247f490f015d86594388c021931ed4204e41d45a4874219e56d75239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_768c5e2430f959f7deb2b3b25aeb09f744699e3f1bbd44e0c36de1a016c3cc09->leave($__internal_768c5e2430f959f7deb2b3b25aeb09f744699e3f1bbd44e0c36de1a016c3cc09_prof);

        
        $__internal_59900a9b247f490f015d86594388c021931ed4204e41d45a4874219e56d75239->leave($__internal_59900a9b247f490f015d86594388c021931ed4204e41d45a4874219e56d75239_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
