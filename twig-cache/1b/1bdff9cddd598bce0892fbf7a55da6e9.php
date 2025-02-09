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

/* Auction/show.html */
class __TwigTemplate_dc866308bcc7757fc5a22bdfbdc3c744 extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Auction/show.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "


<h1>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "title", [], "any", false, false, false, 7));
        echo "</h1>
<p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "description", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
<p>Poslednja cena: ";
        // line 9
        echo twig_escape_filter($this->env, ($context["lastOfferPrice"] ?? null), "html", null, true);
        echo " Eur </p>


";
    }

    // line 14
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "title", [], "any", false, false, false, 15));
        echo "
";
    }

    public function getTemplateName()
    {
        return "Auction/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  72 => 14,  64 => 9,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Auction/show.html", "C:\\laragon\\www\\auction\\views\\Auction\\show.html");
    }
}
