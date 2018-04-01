<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_370d35637156a8bfd12ce5b798cde77a420cceca861cc86282d72975386f70df extends Twig_Template
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
        $__internal_5c1994b2a12ca4ca5ca76a637309526ff5ff043f24be5efe1b592439d8d5c5d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1994b2a12ca4ca5ca76a637309526ff5ff043f24be5efe1b592439d8d5c5d8->enter($__internal_5c1994b2a12ca4ca5ca76a637309526ff5ff043f24be5efe1b592439d8d5c5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b357c66a2638bbdc1a998ce9a05b3b7866bc0cd97296d5aeb086e1c54c5c2ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b357c66a2638bbdc1a998ce9a05b3b7866bc0cd97296d5aeb086e1c54c5c2ee5->enter($__internal_b357c66a2638bbdc1a998ce9a05b3b7866bc0cd97296d5aeb086e1c54c5c2ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5c1994b2a12ca4ca5ca76a637309526ff5ff043f24be5efe1b592439d8d5c5d8->leave($__internal_5c1994b2a12ca4ca5ca76a637309526ff5ff043f24be5efe1b592439d8d5c5d8_prof);

        
        $__internal_b357c66a2638bbdc1a998ce9a05b3b7866bc0cd97296d5aeb086e1c54c5c2ee5->leave($__internal_b357c66a2638bbdc1a998ce9a05b3b7866bc0cd97296d5aeb086e1c54c5c2ee5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
