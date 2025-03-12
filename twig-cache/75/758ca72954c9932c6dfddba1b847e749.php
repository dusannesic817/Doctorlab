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

/* ./inc/search.html */
class __TwigTemplate_d9a54b056e6566488b10ffd86485089a extends Template
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
        echo "<div class=\"container-fluid\">
  <!--Search-->
  <div class=\"row background d-flex align-items-center justify-content-center\" style=\"height: 50vh;\">
    <div class=\"col-xxl-4 col-xl-6 col-lg-6 col-md-8 col-sm-12 text-left\">
      <div class=\"search-container\">
        <h2>Live a healthier life</h2>
        <form action=\"/search\" method=\"GET\" class=\"search-box\">
          <div class=\"search-field\">
            <i class=\"bi bi-search\"></i>
            <input type=\"text\" placeholder=\"Name, specialty, practice\">
          </div>
          <div class=\"divider\"></div>
          <div class=\"search-field\">
            <i class=\"bi bi-geo-alt\"></i>
            <input type=\"text\" placeholder=\"Where?\">
          </div>
          <button class=\"search-button\">
            Search <i class=\"bi bi-chevron-right\"></i>
          </button>
        </form>
      </div>
    </div>
  </div>

</div>
</div>";
    }

    public function getTemplateName()
    {
        return "./inc/search.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./inc/search.html", "C:\\laragon\\www\\auction\\views\\inc\\search.html");
    }
}
