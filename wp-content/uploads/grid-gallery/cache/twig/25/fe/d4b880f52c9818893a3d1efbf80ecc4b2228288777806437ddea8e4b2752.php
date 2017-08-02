<?php

/* @core/helpers.twig */
class __TwigTemplate_25fed4b880f52c9818893a3d1efbf80ecc4b2228288777806437ddea8e4b2752 extends Twig_Template
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
    }

    // line 1
    public function getshowTooltip($_message = null)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $_message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <i class=\"fa fa-question supsystic-tooltip\" title=\"";
            echo (isset($context["message"]) ? $context["message"] : null);
            echo "\"></i>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@core/helpers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 1,  207 => 75,  202 => 73,  197 => 15,  190 => 11,  186 => 9,  183 => 8,  178 => 76,  176 => 75,  173 => 74,  171 => 73,  165 => 69,  155 => 66,  151 => 64,  149 => 63,  144 => 62,  139 => 61,  137 => 55,  132 => 53,  128 => 51,  122 => 48,  117 => 47,  115 => 46,  110 => 44,  106 => 43,  98 => 37,  88 => 34,  84 => 32,  82 => 31,  77 => 30,  72 => 29,  70 => 24,  63 => 20,  59 => 19,  54 => 16,  52 => 15,  49 => 14,  47 => 8,  43 => 7,  40 => 6,  38 => 5,  35 => 4,  32 => 2,);
    }
}
