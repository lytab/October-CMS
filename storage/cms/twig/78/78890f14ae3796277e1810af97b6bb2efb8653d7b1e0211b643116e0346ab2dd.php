<?php

/* E:\ProjetHostWamp\www\OctoberCMS/themes/acme/partials/site/header.htm */
class __TwigTemplate_96e04362ffc13fa7d16381a77fb92478273c7c67b76a262175fb11291888c4d8 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <a class=\"navbar-brand\" href=\"#\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
  
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item active\">
          <a class=\"nav-link ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a>
        </li>
        <li class=\"nav-item\">
                <a class=\"nav-link ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a>
              </li>
        <li class=\"nav-item\">
          <a class=\"nav-link ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
        </li>
       
      </ul>
      <form class=\"form-inline my-2 my-lg-0\">
        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
        <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
      </form>
    </div>
  </nav>";
    }

    public function getTemplateName()
    {
        return "E:\\ProjetHostWamp\\www\\OctoberCMS/themes/acme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  57 => 16,  47 => 13,  37 => 10,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <a class=\"navbar-brand\" href=\"#\">{{this.theme.site_name}}</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
  
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item active\">
          <a class=\"nav-link {% if this.page.id == 'home'%}active{%endif%}\" href=\"{{ 'home'|page}}\">Home <span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link {% if this.page.id == 'about'%}active{%endif%}\" href=\"{{ 'about'|page}}\">About</a>
        </li>
        <li class=\"nav-item\">
                <a class=\"nav-link {% if this.page.id == 'blog'%}active{%endif%}\" href=\"{{ 'blog'|page}}\">Blog</a>
              </li>
        <li class=\"nav-item\">
          <a class=\"nav-link {% if this.page.id == 'contact'%}active{%endif%}\" href=\"{{ 'contact'|page}}\">Contact</a>
        </li>
       
      </ul>
      <form class=\"form-inline my-2 my-lg-0\">
        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
        <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
      </form>
    </div>
  </nav>", "E:\\ProjetHostWamp\\www\\OctoberCMS/themes/acme/partials/site/header.htm", "");
    }
}
