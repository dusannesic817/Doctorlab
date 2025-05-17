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

/* ./inc/caregiver/sidebar.html */
class __TwigTemplate_1c4767be4b327fe3a5ec49f8b229842c extends Template
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
        echo "<ul class=\"navbar-nav  sidebar sidebar-dark accordion\" id=\"accordionSidebar\" style=\"background-color: #107aca !important;\">

  <!-- Sidebar - Brand -->
  <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\" >
    <div class=\"sidebar-brand-icon \">
      <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/logos.png\" alt=\"\">
    </div>
   

  </a>

  <!-- Divider -->
  <hr class=\"sidebar-divider my-0\">

  <!-- Nav Item - Dashboard -->
  <li class=\"nav-item active\">
    <a class=\"nav-link\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/caregiver/appointments/";
        echo twig_escape_filter($this->env, ($context["auth"] ?? null), "html", null, true);
        echo "\">
      
      <span>Dashboard</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class=\"sidebar-divider\">

  <!-- Heading -->
  <div class=\"sidebar-heading\">
    My Profile
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
    <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/caregiver/profile/";
        echo twig_escape_filter($this->env, ($context["auth"] ?? null), "html", null, true);
        echo "\">
      <i class=\"fa-solid fa-user\"></i>
      <span>Profile</span>
    </a>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"\">
      <i class=\"fas fa-fw fa-chart-area\"></i>
      <span>Smisliti sta staviti</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class=\"sidebar-divider\">

  <!-- Heading -->
  <div class=\"sidebar-heading\">
    Clients
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class=\"nav-item\">
    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePages\"
      aria-expanded=\"true\" aria-controls=\"collapsePages\">
      <i class=\"fas fa-fw fa-folder\"></i>
      <span>Pages</span>
    </a>
    <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-bs-parent=\"#accordionSidebar\">
      <div class=\"bg-white py-2 collapse-inner rounded\">
        <h6 class=\"collapse-header\">Login Screens:</h6>
        <a class=\"collapse-item\" href=\"login.html\">Login</a>
        <a class=\"collapse-item\" href=\"register.html\">Register</a>
        <a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>
        <div class=\"collapse-divider\"></div>
        <h6 class=\"collapse-header\">Other Pages:</h6>
        <a class=\"collapse-item\" href=\"404.html\">404 Page</a>
        <a class=\"collapse-item\" href=\"blank.html\">Blank Page</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Charts -->
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/caregiver/appointments/index\">
      <i class=\"fa-solid fa-user-group\"></i>
      <span>My clients</span>
    </a>
  </li>

  <!-- Nav Item - Tables -->
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/availability/create\">
      <i class=\"fas fa-fw fa-table\"></i>
      <span>Make schedule</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class=\"sidebar-divider d-none d-md-block\">



</ul>";
    }

    public function getTemplateName()
    {
        return "./inc/caregiver/sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 86,  132 => 78,  82 => 33,  61 => 17,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"navbar-nav  sidebar sidebar-dark accordion\" id=\"accordionSidebar\" style=\"background-color: #107aca !important;\">

  <!-- Sidebar - Brand -->
  <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"{{base_url}}\" >
    <div class=\"sidebar-brand-icon \">
      <img src=\"{{base_url}}/assets/images/logos.png\" alt=\"\">
    </div>
   

  </a>

  <!-- Divider -->
  <hr class=\"sidebar-divider my-0\">

  <!-- Nav Item - Dashboard -->
  <li class=\"nav-item active\">
    <a class=\"nav-link\" href=\"{{base_url}}/caregiver/appointments/{{auth}}\">
      
      <span>Dashboard</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class=\"sidebar-divider\">

  <!-- Heading -->
  <div class=\"sidebar-heading\">
    My Profile
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
    <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{base_url}}/caregiver/profile/{{auth}}\">
      <i class=\"fa-solid fa-user\"></i>
      <span>Profile</span>
    </a>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"\">
      <i class=\"fas fa-fw fa-chart-area\"></i>
      <span>Smisliti sta staviti</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class=\"sidebar-divider\">

  <!-- Heading -->
  <div class=\"sidebar-heading\">
    Clients
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class=\"nav-item\">
    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePages\"
      aria-expanded=\"true\" aria-controls=\"collapsePages\">
      <i class=\"fas fa-fw fa-folder\"></i>
      <span>Pages</span>
    </a>
    <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-bs-parent=\"#accordionSidebar\">
      <div class=\"bg-white py-2 collapse-inner rounded\">
        <h6 class=\"collapse-header\">Login Screens:</h6>
        <a class=\"collapse-item\" href=\"login.html\">Login</a>
        <a class=\"collapse-item\" href=\"register.html\">Register</a>
        <a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>
        <div class=\"collapse-divider\"></div>
        <h6 class=\"collapse-header\">Other Pages:</h6>
        <a class=\"collapse-item\" href=\"404.html\">404 Page</a>
        <a class=\"collapse-item\" href=\"blank.html\">Blank Page</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Charts -->
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{base_url}}/caregiver/appointments/index\">
      <i class=\"fa-solid fa-user-group\"></i>
      <span>My clients</span>
    </a>
  </li>

  <!-- Nav Item - Tables -->
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{base_url}}/availability/create\">
      <i class=\"fas fa-fw fa-table\"></i>
      <span>Make schedule</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class=\"sidebar-divider d-none d-md-block\">



</ul>", "./inc/caregiver/sidebar.html", "C:\\laragon\\www\\doctorlab\\views\\inc\\caregiver\\sidebar.html");
    }
}
