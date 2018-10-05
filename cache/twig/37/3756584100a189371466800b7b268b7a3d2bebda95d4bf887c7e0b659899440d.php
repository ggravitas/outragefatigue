<?php

/* partials/hero.html.twig */
class __TwigTemplate_71609e9c0c57079d8054438604a7aeb163ba87a78a6374f93a5815463b98696f extends Twig_Template
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
        echo "<section id=\"";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\" class=\"section modular-hero hero ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hero_classes", array());
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "background", array()), "parallax", array())) ? ("parallax") : (""));
        echo "\" ";
        if ((isset($context["hero_image"]) ? $context["hero_image"] : null)) {
            echo "style=\"background-image: url(";
            echo $this->getAttribute((isset($context["hero_image"]) ? $context["hero_image"] : null), "url", array());
            echo ");\"";
        }
        echo ">
    <div class=\"image-overlay\"></div>
    <section class=\"container ";
        // line 3
        echo (isset($context["grid_size"]) ? $context["grid_size"] : null);
        echo "\" style=\"text-align: ";
        echo (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "hero_align", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "hero_align", array()), "center")) : ("center"));
        echo "\">
        ";
        // line 4
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    </section>
    <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  35 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"{{ id }}\" class=\"section modular-hero hero {{ page.header.hero_classes }} {{ page.header.background.parallax ? 'parallax' : '' }}\" {% if hero_image %}style=\"background-image: url({{ hero_image.url }});\"{% endif %}>
    <div class=\"image-overlay\"></div>
    <section class=\"container {{ grid_size }}\" style=\"text-align: {{ page.header.hero_align|default('center') }}\">
        {{ content }}
    </section>
    <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>", "partials/hero.html.twig", "/Users/jerrybrahm/repos/outragefatigue/user/themes/quark/templates/partials/hero.html.twig");
    }
}
