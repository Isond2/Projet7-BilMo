<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c22ef3abfb12d722a6799cb8657008f78fbf9490ddbe563aee0520837b956756 extends Twig_Template
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
        $__internal_6ed81cc76be2688e49d4df5201f695a7ef4adb519f8c1f98a10e6725e5f6b7b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed81cc76be2688e49d4df5201f695a7ef4adb519f8c1f98a10e6725e5f6b7b1->enter($__internal_6ed81cc76be2688e49d4df5201f695a7ef4adb519f8c1f98a10e6725e5f6b7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b4640d01330510e6cf0f9596ed8366685aa0d7a92ca2d068a55da5a5a4ef0d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4640d01330510e6cf0f9596ed8366685aa0d7a92ca2d068a55da5a5a4ef0d59->enter($__internal_b4640d01330510e6cf0f9596ed8366685aa0d7a92ca2d068a55da5a5a4ef0d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6ed81cc76be2688e49d4df5201f695a7ef4adb519f8c1f98a10e6725e5f6b7b1->leave($__internal_6ed81cc76be2688e49d4df5201f695a7ef4adb519f8c1f98a10e6725e5f6b7b1_prof);

        
        $__internal_b4640d01330510e6cf0f9596ed8366685aa0d7a92ca2d068a55da5a5a4ef0d59->leave($__internal_b4640d01330510e6cf0f9596ed8366685aa0d7a92ca2d068a55da5a5a4ef0d59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
