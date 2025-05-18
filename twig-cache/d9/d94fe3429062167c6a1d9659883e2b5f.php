<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* User/verify.html */
class __TwigTemplate_f2fc59eb00c73dde06c047e6c0bd1fc3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'naslov' => [$this, 'block_naslov'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_global/index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_global/index.html", "User/verify.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
 <p>Cestitamo uspesno ste se registorvali.</p>
 <p>Klikni ovde <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\"></a></p>
  ";
        // line 8
        $this->displayBlock('naslov', $context, $blocks);
        // line 11
        echo "

";
    }

    // line 8
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    Login
  ";
    }

    public function getTemplateName()
    {
        return "User/verify.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 9,  67 => 8,  61 => 11,  59 => 8,  55 => 7,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/index.html\" %}


{% block main %}

 <p>Cestitamo uspesno ste se registorvali.</p>
 <p>Klikni ovde <a href=\"{{base_url}}\"></a></p>
  {% block naslov %}
    Login
  {% endblock %}


{% endblock %}", "User/verify.html", "C:\\laragon\\www\\doctorlab\\views\\User\\verify.html");
    }
}
