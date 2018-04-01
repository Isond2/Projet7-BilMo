<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3c9cf19f0a311ed220c82c87827e793f668127ff36d79c8b282f6e263a59a601 extends Twig_Template
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
        $__internal_5bb8a44fe04cdb2d6af5d421b117074995b30f74b98618be4b973d95e38c042c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb8a44fe04cdb2d6af5d421b117074995b30f74b98618be4b973d95e38c042c->enter($__internal_5bb8a44fe04cdb2d6af5d421b117074995b30f74b98618be4b973d95e38c042c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_2a57b8d5b138294c6781ae7f6ec6de6595f2579bffcc25f4866019a903aa227c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a57b8d5b138294c6781ae7f6ec6de6595f2579bffcc25f4866019a903aa227c->enter($__internal_2a57b8d5b138294c6781ae7f6ec6de6595f2579bffcc25f4866019a903aa227c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5bb8a44fe04cdb2d6af5d421b117074995b30f74b98618be4b973d95e38c042c->leave($__internal_5bb8a44fe04cdb2d6af5d421b117074995b30f74b98618be4b973d95e38c042c_prof);

        
        $__internal_2a57b8d5b138294c6781ae7f6ec6de6595f2579bffcc25f4866019a903aa227c->leave($__internal_2a57b8d5b138294c6781ae7f6ec6de6595f2579bffcc25f4866019a903aa227c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
