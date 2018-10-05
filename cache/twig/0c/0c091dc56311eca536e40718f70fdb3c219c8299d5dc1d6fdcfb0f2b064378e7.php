<?php

/* partials/scripts.html.twig */
class __TwigTemplate_42ffa6f58438d645d46eba89897015e8522e267ced45ad2a22e89e7e116f297a extends Twig_Template
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
        // line 1
        echo "<!--- Your global JavaScript code can go here -->
";
    }

    public function getTemplateName()
    {
        return "partials/scripts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--- Your global JavaScript code can go here -->
", "partials/scripts.html.twig", "/Users/jerrybrahm/repos/outragefatigue/user/themes/quark-open-publishing/templates/partials/scripts.html.twig");
    }
}
