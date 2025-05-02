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
class __TwigTemplate_7cb3473b22529ae5a95449f2f730985a extends Template
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
  <div class=\"row background-navbar d-flex align-items-center justify-content-evenly\" style=\"height: 48vh;\">
    <div class=\"col-xxl-4 col-xl-6 col-lg-6 col-md-8 col-sm-12 text-left\">


      <h1 class=\"ms-1 pb-4\" style=\"color: white;\"><b>Live a <span style=\"color: #9dc6ff;\">healthier life</span></b></h1>
      <div class=\"search-container\">
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
</div>
<div class=\"position-relative\">
  <div class=\"position-absolute bottom-0 end-0 d-none d-xl-block\">
    <div class=\"float-end\">
      <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/patient_background.png\" class=\"rounded\" alt=\"...\">
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "./inc/search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 33,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
  <div class=\"row background-navbar d-flex align-items-center justify-content-evenly\" style=\"height: 48vh;\">
    <div class=\"col-xxl-4 col-xl-6 col-lg-6 col-md-8 col-sm-12 text-left\">


      <h1 class=\"ms-1 pb-4\" style=\"color: white;\"><b>Live a <span style=\"color: #9dc6ff;\">healthier life</span></b></h1>
      <div class=\"search-container\">
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
</div>
<div class=\"position-relative\">
  <div class=\"position-absolute bottom-0 end-0 d-none d-xl-block\">
    <div class=\"float-end\">
      <img src=\"{{base_url}}/assets/images/patient_background.png\" class=\"rounded\" alt=\"...\">
    </div>
  </div>
</div>", "./inc/search.html", "C:\\laragon\\www\\doctorlab\\views\\inc\\search.html");
    }
}
