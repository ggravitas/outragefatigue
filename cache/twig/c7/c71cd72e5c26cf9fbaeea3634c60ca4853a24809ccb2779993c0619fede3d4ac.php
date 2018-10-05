<?php

/* partials/navigation.html.twig */
class __TwigTemplate_f06044170f87a69cbae107ab55677b292c46e4ecb94b1dc3b92b443e7ed8939a extends Twig_Template
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
        $context["hide_home_menu_link"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("hidehomemenulink");
        // line 2
        $context["home_alias"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "home", array()), "alias", array());
        // line 3
        echo "
";
        // line 34
        echo "
<ul ";
        // line 35
        echo (((isset($context["tree"]) ? $context["tree"] : null)) ? ("class=\"tree\"") : (""));
        echo ">
    ";
        // line 36
        echo $this->getAttribute($this, "nav_loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null), 1 => (isset($context["hide_home_menu_link"]) ? $context["hide_home_menu_link"] : null), 2 => (isset($context["home_alias"]) ? $context["home_alias"] : null)), "method");
        echo "
    ";
        // line 38
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("displaycustommenus.enabled")) {
            // line 39
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("menu"));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 40
                echo "        <li>
          <a href=\"";
                // line 41
                echo $this->getAttribute($context["mitem"], "url", array());
                echo "\" target=\"";
                echo $this->getAttribute($context["mitem"], "target", array());
                echo "\">
            ";
                // line 42
                if ($this->getAttribute($context["mitem"], "icon", array())) {
                    // line 43
                    echo "              <i class=\"fa fa-";
                    echo $this->getAttribute($context["mitem"], "icon", array());
                    echo "\"></i>
            ";
                }
                // line 45
                echo "            ";
                echo $this->getAttribute($context["mitem"], "text", array());
                echo "
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "    ";
        }
        // line 50
        echo "    ";
        // line 51
        echo "    ";
        if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "menu") || ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == (isset($context["empty"]) ? $context["empty"] : null)))) {
            // line 52
            echo "      <li>";
            $this->loadTemplate("partials/git_sync_repo_link.html.twig", "partials/navigation.html.twig", 52)->display($context);
            echo "</li>
    ";
        }
        // line 54
        echo "</ul>
";
    }

    // line 4
    public function getnav_loop($__page__ = null, $__hide_home_menu_link__ = null, $__home_alias__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "hide_home_menu_link" => $__hide_home_menu_link__,
            "home_alias" => $__home_alias__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 6
                echo "      ";
                // line 7
                echo "      ";
                if ( !((isset($context["hide_home_menu_link"]) ? $context["hide_home_menu_link"] : null) && twig_in_filter($this->getAttribute($context["p"], "slug", array()), (isset($context["home_alias"]) ? $context["home_alias"] : null)))) {
                    // line 8
                    echo "        ";
                    $context["active_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                    // line 9
                    echo "        ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                        // line 10
                        echo "            <li>
                <a href=\"";
                        // line 11
                        echo $this->getAttribute($context["p"], "url", array());
                        echo "\" class=\"";
                        echo (isset($context["active_page"]) ? $context["active_page"] : null);
                        echo "\">
                  ";
                        // line 12
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                            // line 13
                            echo "                    <i class=\"fa fa-";
                            echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                            echo "\"></i>
                  ";
                        }
                        // line 15
                        echo "                  ";
                        echo $this->getAttribute($context["p"], "menu", array());
                        echo "
                </a>
                <ul>
                    ";
                        // line 18
                        echo $this->getAttribute($this, "nav_loop", array(0 => $context["p"]), "method");
                        echo "
                </ul>
            </li>
        ";
                    } else {
                        // line 22
                        echo "            <li>
                <a href=\"";
                        // line 23
                        echo $this->getAttribute($context["p"], "url", array());
                        echo "\" class=\"";
                        echo (isset($context["active_page"]) ? $context["active_page"] : null);
                        echo "\">
                  ";
                        // line 24
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                            // line 25
                            echo "                    <i class=\"fa fa-";
                            echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                            echo "\"></i>
                  ";
                        }
                        // line 27
                        echo "                  ";
                        echo $this->getAttribute($context["p"], "menu", array());
                        echo "
                </a>
            </li>
        ";
                    }
                    // line 31
                    echo "      ";
                }
                // line 32
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 32,  178 => 31,  170 => 27,  164 => 25,  162 => 24,  156 => 23,  153 => 22,  146 => 18,  139 => 15,  133 => 13,  131 => 12,  125 => 11,  122 => 10,  119 => 9,  116 => 8,  113 => 7,  111 => 6,  106 => 5,  92 => 4,  87 => 54,  81 => 52,  78 => 51,  76 => 50,  73 => 49,  62 => 45,  56 => 43,  54 => 42,  48 => 41,  45 => 40,  40 => 39,  37 => 38,  33 => 36,  29 => 35,  26 => 34,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set hide_home_menu_link = theme_var('hidehomemenulink') %}
{% set home_alias = config.system.home.alias %}

{% macro nav_loop(page, hide_home_menu_link, home_alias) %}
    {% for p in page.children.visible %}
      {# Supress home menu link - hibbittsdesign.org #}
      {% if not((hide_home_menu_link) and (p.slug in home_alias)) %}
        {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if p.children.visible.count > 0 %}
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                  {% if p.header.icon %}
                    <i class=\"fa fa-{{ p.header.icon }}\"></i>
                  {% endif %}
                  {{ p.menu }}
                </a>
                <ul>
                    {{ _self.nav_loop(p) }}
                </ul>
            </li>
        {% else %}
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                  {% if p.header.icon %}
                    <i class=\"fa fa-{{ p.header.icon }}\"></i>
                  {% endif %}
                  {{ p.menu }}
                </a>
            </li>
        {% endif %}
      {% endif %}
    {% endfor %}
{% endmacro %}

<ul {{ tree ? 'class=\"tree\"' : '' }}>
    {{ _self.nav_loop(pages, hide_home_menu_link, home_alias ) }}
    {# custom menu items check and display - hibbittsdesign.org #}
    {% if theme_var('displaycustommenus.enabled') %}
      {% for mitem in theme_var('menu') %}
        <li>
          <a href=\"{{ mitem.url }}\" target=\"{{ mitem.target }}\">
            {% if mitem.icon %}
              <i class=\"fa fa-{{ mitem.icon }}\"></i>
            {% endif %}
            {{ mitem.text }}
          </a>
        </li>
      {% endfor %}
    {% endif %}
    {# check to display git sync link in menu - hibbittsdesign.org #}
    {% if theme_var('display_of_git_sync_repo_link') == 'menu' or theme_var('display_of_git_sync_repo_link') == empty %}
      <li>{% include 'partials/git_sync_repo_link.html.twig' %}</li>
    {% endif %}
</ul>
", "partials/navigation.html.twig", "/Users/jerrybrahm/repos/outragefatigue/user/themes/quark-open-publishing/templates/partials/navigation.html.twig");
    }
}
