<?php

/* plugins/jscomments/facebook.html.twig */
class __TwigTemplate_783ab934ef0a6e9e5de6bb5152c3d1c4af02cb0192b46bef3149d3912e403ca9 extends Twig_Template
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
        // line 6
        echo "<div id=\"jscomments\">
  <div id=\"fb-root\"></div>

  ";
        // line 9
        if (( !(isset($context["language"]) ? $context["language"] : null) && $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "enabled", array()))) {
            // line 10
            echo "    ";
            // line 11
            echo "    ";
            $context["language"] = ((twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) . "_") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())));
            // line 12
            echo "  ";
        }
        // line 13
        echo "
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = \"//connect.facebook.net/";
        // line 19
        echo twig_escape_filter($this->env, (((isset($context["language"]) || array_key_exists("language", $context))) ? (_twig_default_filter((isset($context["language"]) ? $context["language"] : null), "en_US")) : ("en_US")), "js");
        echo "/all.js#xfbml=1&amp;appId=";
        echo twig_escape_filter($this->env, (isset($context["app_id"]) ? $context["app_id"] : null), "js");
        echo "\";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <div class=\"fb-comments\" data-href=\"";
        // line 24
        echo twig_escape_filter($this->env, (((isset($context["url"]) || array_key_exists("url", $context))) ? (_twig_default_filter((isset($context["url"]) ? $context["url"] : null), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method"))) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method"))), "html_attr");
        echo "\" data-numposts=\"";
        echo twig_escape_filter($this->env, (isset($context["num_posts"]) ? $context["num_posts"] : null), "html_attr");
        echo "\" data-colorscheme=\"";
        echo twig_escape_filter($this->env, (isset($context["colorscheme"]) ? $context["colorscheme"] : null), "html_attr");
        echo "\" data-order-by=\"";
        echo twig_escape_filter($this->env, (isset($context["order_by"]) ? $context["order_by"] : null), "html_attr");
        echo "\" data-width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html_attr");
        echo "\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "plugins/jscomments/facebook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 24,  42 => 19,  34 => 13,  31 => 12,  28 => 11,  26 => 10,  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   Facebook comments

   @see https://developers.facebook.com/docs/plugins/comments
#}
<div id=\"jscomments\">
  <div id=\"fb-root\"></div>

  {% if not language and grav.language.enabled %}
    {# I don't know if this is the best way to get the Facebook language, but in most case working fine! #}
    {% set language = grav.language.getLanguage|lower ~ '_' ~ grav.language.getLanguage|upper %}
  {% endif %}

  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = \"//connect.facebook.net/{{ language|default('en_US')|e('js') }}/all.js#xfbml=1&amp;appId={{ app_id|e('js') }}\";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <div class=\"fb-comments\" data-href=\"{{ url|default(page.url(true, true))|e('html_attr') }}\" data-numposts=\"{{ num_posts|e('html_attr') }}\" data-colorscheme=\"{{ colorscheme|e('html_attr') }}\" data-order-by=\"{{ order_by|e('html_attr') }}\" data-width=\"{{ width|e('html_attr') }}\"></div>
</div>
", "plugins/jscomments/facebook.html.twig", "/Users/jerrybrahm/repos/outragefatigue/user/plugins/jscomments/templates/plugins/jscomments/facebook.html.twig");
    }
}
