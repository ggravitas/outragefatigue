<?php

/* @Page:/Users/jerrybrahm/repos/outrage/user/pages/twitterfeed */
class __TwigTemplate_754166fa1996bb4a720357464092588c44938800e81554e3e1d68e19216c7af8 extends Twig_Template
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
        return "@Page:/Users/jerrybrahm/repos/outrage/user/pages/twitterfeed";
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
", "@Page:/Users/jerrybrahm/repos/outrage/user/pages/twitterfeed", "");
    }
}
