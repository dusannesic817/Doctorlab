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

/* ./inc/header.html */
class __TwigTemplate_47eb47f30af045a97f1ed06b366c0bf9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav class=\"navbar navbar-expand-lg bg-info text-light\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"#\">
      <img src=\"/docs/5.3/assets/brand/bootstrap-logo.svg\" alt=\"Logo\" width=\"30\" height=\"24\" class=\"d-inline-block align-text-top\">
      Bootstrap
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Pocetna</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/categories\">Kategorije</a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Dropdown
          </a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" href=\"#\">Action</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
          </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/profile\">My Profile</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/contact\">Contact</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/log-out\">Odjava</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "./inc/header.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./inc/header.html", "C:\\laragon\\www\\auction\\views\\inc\\header.html");
    }
}
