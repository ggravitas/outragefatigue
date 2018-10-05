<?php

/* @Page:/Users/jerrybrahm/repos/outragefatigue/user/pages/twitterfeed */
class __TwigTemplate_7c09f3170c79e6286a148ea3454603312321260f87d6d8c7cbc67c9540ef7f39 extends Twig_Template
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
        echo "   <div class=\"twitter-feed-wrapper\">
  
  <a class=\"twitter-timeline\" data-height=\"600\" data-chrome=\"noscrollbar\" href=\"https://twitter.com/Politifact\">Tweets by Poliyifact</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\"://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/jerrybrahm/repos/outragefatigue/user/pages/twitterfeed";
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
        return new Twig_Source("   <div class=\"twitter-feed-wrapper\">
  
  <a class=\"twitter-timeline\" data-height=\"600\" data-chrome=\"noscrollbar\" href=\"https://twitter.com/Politifact\">Tweets by Poliyifact</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\"://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
  </div>
", "@Page:/Users/jerrybrahm/repos/outragefatigue/user/pages/twitterfeed", "");
    }
}
