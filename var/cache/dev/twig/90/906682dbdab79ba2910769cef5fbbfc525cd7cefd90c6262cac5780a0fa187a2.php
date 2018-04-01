<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_02a7bf36c74bbbd4f350201d46a57fcf40cf7324686e5dd9153d858ace6fde66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_618869e648b21e1e00443b3c0583ad9660bce75bb4c6217b518c978cf7cdef9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_618869e648b21e1e00443b3c0583ad9660bce75bb4c6217b518c978cf7cdef9d->enter($__internal_618869e648b21e1e00443b3c0583ad9660bce75bb4c6217b518c978cf7cdef9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d1bc94bbfc3a853c90df255681b4d37630f82f449b24b7233121932537c3db3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1bc94bbfc3a853c90df255681b4d37630f82f449b24b7233121932537c3db3f->enter($__internal_d1bc94bbfc3a853c90df255681b4d37630f82f449b24b7233121932537c3db3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_618869e648b21e1e00443b3c0583ad9660bce75bb4c6217b518c978cf7cdef9d->leave($__internal_618869e648b21e1e00443b3c0583ad9660bce75bb4c6217b518c978cf7cdef9d_prof);

        
        $__internal_d1bc94bbfc3a853c90df255681b4d37630f82f449b24b7233121932537c3db3f->leave($__internal_d1bc94bbfc3a853c90df255681b4d37630f82f449b24b7233121932537c3db3f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4fd3ebc17def9af968695fd01a61fbd14b3a4e95e6961bfccce87830e9595b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4fd3ebc17def9af968695fd01a61fbd14b3a4e95e6961bfccce87830e9595b3->enter($__internal_b4fd3ebc17def9af968695fd01a61fbd14b3a4e95e6961bfccce87830e9595b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_490ddc17acb3e64d15d06c54646c331fd0debaa256d8217aa4a779e69665fec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490ddc17acb3e64d15d06c54646c331fd0debaa256d8217aa4a779e69665fec0->enter($__internal_490ddc17acb3e64d15d06c54646c331fd0debaa256d8217aa4a779e69665fec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_490ddc17acb3e64d15d06c54646c331fd0debaa256d8217aa4a779e69665fec0->leave($__internal_490ddc17acb3e64d15d06c54646c331fd0debaa256d8217aa4a779e69665fec0_prof);

        
        $__internal_b4fd3ebc17def9af968695fd01a61fbd14b3a4e95e6961bfccce87830e9595b3->leave($__internal_b4fd3ebc17def9af968695fd01a61fbd14b3a4e95e6961bfccce87830e9595b3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
