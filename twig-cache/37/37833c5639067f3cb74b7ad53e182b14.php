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
            <a class=\"navbar-brand\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\">
              <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/home_logo.png\" alt=\"DoctorLab Logo\" >
          </a>
          
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
            aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <svg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path stroke=\"white\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-miterlimit=\"10\"
                    d=\"M4 7h22M4 15h22M4 23h22\" />
            </svg>
          </button>
      
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
              <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown\">
                  <a class=\"nav-link mt-2\" href=\"\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
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
                  <a class=\"nav-link mt-2 ms-2\" href=\"/\"><b><small>Tarrifs</small></b></a>
                </li>


              </ul>
              <ul class=\"navbar-nav ms-auto mt-2\">
                <li class=\"nav-item border rounded me-2 border-success ps-1 pe-1 mb-1\">
                  <a class=\"nav-link\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/caregiver/register\"><b><small>Are you a health professional?</small></b></a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link ms-2\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/login\"><b><small>Make appoitment?</small></b></a>
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 68,  109 => 65,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./inc/header.html", "C:\\laragon\\www\\doctorlab\\views\\inc\\header.html");
    }
}
