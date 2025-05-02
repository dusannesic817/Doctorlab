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
    <a class=\"nav-link\" href=\"\">
      
      <span>Dashboard</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class=\"sidebar-divider\">

  <!-- Heading -->
  <div class=\"sidebar-heading\">
    Interface
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class=\"nav-item\">
    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\"
      aria-expanded=\"true\" aria-controls=\"collapseTwo\">
      <i class=\"fas fa-fw fa-cog\"></i>
      <span>Components</span>
    </a>
    <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionSidebar\">
      <div class=\"bg-white py-2 collapse-inner rounded\">
        <h6 class=\"collapse-header\">Custom Components:</h6>
        <a class=\"collapse-item\" href=\"buttons.html\">Buttons</a>
        <a class=\"collapse-item\" href=\"cards.html\">Cards</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class=\"nav-item\">
    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseUtilities\"
      aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
      <i class=\"fas fa-fw fa-wrench\"></i>
      <span>Utilities</span>
    </a>
    <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\"
      data-bs-parent=\"#accordionSidebar\">
      <div class=\"bg-white py-2 collapse-inner rounded\">
        <h6 class=\"collapse-header\">Custom Utilities:</h6>
        <a class=\"collapse-item\" href=\"utilities-color.html\">Colors</a>
        <a class=\"collapse-item\" href=\"utilities-border.html\">Borders</a>
        <a class=\"collapse-item\" href=\"utilities-animation.html\">Animations</a>
        <a class=\"collapse-item\" href=\"utilities-other.html\">Other</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class=\"sidebar-divider\">

  <!-- Heading -->
  <div class=\"sidebar-heading\">
    Addons
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
    <a class=\"nav-link\" href=\"charts.html\">
      <i class=\"fas fa-fw fa-chart-area\"></i>
      <span>Charts</span>
    </a>
  </li>

  <!-- Nav Item - Tables -->
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"tables.html\">
      <i class=\"fas fa-fw fa-table\"></i>
      <span>Tables</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class=\"sidebar-divider d-none d-md-block\">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class=\"text-center d-none d-md-inline\">
    <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
  </div>

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
        return array (  47 => 6,  42 => 4,  37 => 1,);
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
    <a class=\"nav-link\" href=\"\">
      
      <span>Dashboard</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class=\"sidebar-divider\">

  <!-- Heading -->
  <div class=\"sidebar-heading\">
    Interface
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class=\"nav-item\">
    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\"
      aria-expanded=\"true\" aria-controls=\"collapseTwo\">
      <i class=\"fas fa-fw fa-cog\"></i>
      <span>Components</span>
    </a>
    <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionSidebar\">
      <div class=\"bg-white py-2 collapse-inner rounded\">
        <h6 class=\"collapse-header\">Custom Components:</h6>
        <a class=\"collapse-item\" href=\"buttons.html\">Buttons</a>
        <a class=\"collapse-item\" href=\"cards.html\">Cards</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class=\"nav-item\">
    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseUtilities\"
      aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
      <i class=\"fas fa-fw fa-wrench\"></i>
      <span>Utilities</span>
    </a>
    <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\"
      data-bs-parent=\"#accordionSidebar\">
      <div class=\"bg-white py-2 collapse-inner rounded\">
        <h6 class=\"collapse-header\">Custom Utilities:</h6>
        <a class=\"collapse-item\" href=\"utilities-color.html\">Colors</a>
        <a class=\"collapse-item\" href=\"utilities-border.html\">Borders</a>
        <a class=\"collapse-item\" href=\"utilities-animation.html\">Animations</a>
        <a class=\"collapse-item\" href=\"utilities-other.html\">Other</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class=\"sidebar-divider\">

  <!-- Heading -->
  <div class=\"sidebar-heading\">
    Addons
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
    <a class=\"nav-link\" href=\"charts.html\">
      <i class=\"fas fa-fw fa-chart-area\"></i>
      <span>Charts</span>
    </a>
  </li>

  <!-- Nav Item - Tables -->
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"tables.html\">
      <i class=\"fas fa-fw fa-table\"></i>
      <span>Tables</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class=\"sidebar-divider d-none d-md-block\">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class=\"text-center d-none d-md-inline\">
    <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
  </div>

</ul>", "./inc/caregiver/sidebar.html", "C:\\laragon\\www\\doctorlab\\views\\inc\\caregiver\\sidebar.html");
    }
}
