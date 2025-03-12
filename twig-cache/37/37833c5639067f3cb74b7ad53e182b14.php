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
        echo "<div class=\"container-fluid background\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <nav class=\"navbar navbar-expand-lg mt-2\">
          <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\"><img src=\"\" alt=\"\" > </i></a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
              aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
              <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown\">
                  <a class=\"nav-link \" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <b><small>Discover Doctorlab</small></b>
                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-custom\">
                    <div class=\"row ps-5 pe-5 mb-4\">
                      <div class=\"col-12 col-lg-3\">
                        <li><a href=\"\">Medical - Specilist</a></li>
                      </div>
                      <div class=\"col-12 col-lg-3\">
                        <li><a href=\"\">Dentist</a></li>
                      </div>
                      <div class=\"col-12 col-lg-3\">
                        <li><a href=\"\">Cardiologe</a></li>
                      </div>
                      <div class=\"col-12 col-lg-3\">
                        <li><a href=\"\">aaaaaaaaa</a></li>
                      </div>

                    </div>
                    <div class=\"row ps-5 pe-5 gy-5\">
                      <div class=\"col-12 col-lg-3\">
                        <li><a href=\"\">A</a></li>
                      </div>
                      <div class=\"col-12 col-lg-3\">
                        <li><a href=\"\">A</a></li>
                      </div>
                      <div class=\"col-12 col-lg-3\">
                        <li><a href=\"\">A</a></li>
                      </div>
                      <div class=\"col-12 col-lg-3\">
                        <li><a href=\"\">A</a></li>
                      </div>
                    </div>
                  </ul>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"/\"><b><small>Tarrifs</small></b></a>
                </li>


              </ul>
              <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item border rounded me-2 border-success ps-1 pe-1 mb-1\">
                  <a class=\"nav-link\" href=\"/caregiver/register\"><b><small>Are you a health professional?</small></b></a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"/login\"><b><small>Make appoitment?</small></b></a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>";
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
