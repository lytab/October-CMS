<?php

/* E:\ProjetHostWamp\www\OctoberCMS/themes/acme/pages/about.htm */
class __TwigTemplate_7464a8b246a660847fac904c74c83b7da986f34efaf312981439fe6182047324 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>About Us</h1>
<p>This is the about page</p>
<hr>
";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resourcesLinks"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "E:\\ProjetHostWamp\\www\\OctoberCMS/themes/acme/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>About Us</h1>
<p>This is the about page</p>
<hr>
{% component 'resourcesLinks' %}", "E:\\ProjetHostWamp\\www\\OctoberCMS/themes/acme/pages/about.htm", "");
    }
}
