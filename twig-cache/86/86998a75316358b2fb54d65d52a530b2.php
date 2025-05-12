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

/* ./inc/caregiver/topbar_caregiver.html */
class __TwigTemplate_66540d55b76e2b27fbb4bb1a9c8ee6e3 extends Template
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
        echo "<div>
  <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
    <!-- Sidebar Toggle (Topbar) -->
    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
      <i class=\"fa fa-bars\"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class=\"navbar-nav ms-auto\">
      <!-- Nav Item - Alerts -->
      <li class=\"nav-item dropdown no-arrow mx-1\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\"
           aria-haspopup=\"true\" aria-expanded=\"false\">
          <i class=\"fas fa-bell fa-fw\"></i>
          <span id=\"notification-count\" class=\"badge bg-danger\" style=\"display: none;\">3+</span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class=\"dropdown-menu dropdown-menu-end shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
          <h6 class=\"dropdown-header\">
            Alerts Center
          </h6>
          <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
            <div class=\"mr-3\">
              <div class=\"icon-circle bg-primary\">
                <i class=\"fas fa-file-alt text-white\"></i>
              </div>
            </div>
            <div>
              <div class=\"small text-gray-500\">Just now</div>
              <span id=\"notification\" class=\"font-weight-bold\"></span>
            </div>
          </a>
        </div>
      </li>

      <!-- Nav Item - User Information -->
      <div class=\"topbar-divider d-none d-sm-block\"></div>
      <li class=\"nav-item dropdown no-arrow\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-bs-toggle=\"dropdown\"
           aria-haspopup=\"true\" aria-expanded=\"false\">
          <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"></span>
          <img class=\"img-profile rounded-circle\" src=\"\" />
        </a>
        <!-- Dropdown - User Information -->
        <div class=\"dropdown-menu dropdown-menu-end shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
          <a class=\"dropdown-item\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["role"] ?? null), "html", null, true);
        echo "/profile/";
        echo twig_escape_filter($this->env, ($context["auth"] ?? null), "html", null, true);
        echo "\">
            <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i> Profile
          </a>
          <a class=\"dropdown-item\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/caregiver/edit/";
        echo twig_escape_filter($this->env, ($context["auth"] ?? null), "html", null, true);
        echo "\">
            <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i> Settings
          </a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/caregiver/logout\" data-bs-toggle=\"modal\" data-bs-target=\"#logoutModal\">
            <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>


</div>
<script>
  var caregiver = \"";
        // line 64
        echo twig_escape_filter($this->env, ($context["caregiver_id"] ?? null), "html", null, true);
        echo "\"; // bez navodnika ako je broj
 

  Pusher.logToConsole = true;

  var pusher = new Pusher('6d7d51c13b5451452dd9', {
    cluster: 'eu'
  });

  var channel = pusher.subscribe('notification');
  channel.bind('cancel-' + caregiver, function(data) {
    alert(JSON.stringify(data));
  });
</script>


";
    }

    public function getTemplateName()
    {
        return "./inc/caregiver/topbar_caregiver.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 64,  103 => 53,  94 => 49,  84 => 46,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
  <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
    <!-- Sidebar Toggle (Topbar) -->
    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
      <i class=\"fa fa-bars\"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class=\"navbar-nav ms-auto\">
      <!-- Nav Item - Alerts -->
      <li class=\"nav-item dropdown no-arrow mx-1\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\"
           aria-haspopup=\"true\" aria-expanded=\"false\">
          <i class=\"fas fa-bell fa-fw\"></i>
          <span id=\"notification-count\" class=\"badge bg-danger\" style=\"display: none;\">3+</span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class=\"dropdown-menu dropdown-menu-end shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
          <h6 class=\"dropdown-header\">
            Alerts Center
          </h6>
          <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
            <div class=\"mr-3\">
              <div class=\"icon-circle bg-primary\">
                <i class=\"fas fa-file-alt text-white\"></i>
              </div>
            </div>
            <div>
              <div class=\"small text-gray-500\">Just now</div>
              <span id=\"notification\" class=\"font-weight-bold\"></span>
            </div>
          </a>
        </div>
      </li>

      <!-- Nav Item - User Information -->
      <div class=\"topbar-divider d-none d-sm-block\"></div>
      <li class=\"nav-item dropdown no-arrow\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-bs-toggle=\"dropdown\"
           aria-haspopup=\"true\" aria-expanded=\"false\">
          <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"></span>
          <img class=\"img-profile rounded-circle\" src=\"\" />
        </a>
        <!-- Dropdown - User Information -->
        <div class=\"dropdown-menu dropdown-menu-end shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
          <a class=\"dropdown-item\" href=\"{{ base_url }}/{{role}}/profile/{{auth}}\">
            <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i> Profile
          </a>
          <a class=\"dropdown-item\" href=\"{{base_url}}/caregiver/edit/{{auth}}\">
            <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i> Settings
          </a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"{{base_url}}/caregiver/logout\" data-bs-toggle=\"modal\" data-bs-target=\"#logoutModal\">
            <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>


</div>
<script>
  var caregiver = \"{{caregiver_id}}\"; // bez navodnika ako je broj
 

  Pusher.logToConsole = true;

  var pusher = new Pusher('6d7d51c13b5451452dd9', {
    cluster: 'eu'
  });

  var channel = pusher.subscribe('notification');
  channel.bind('cancel-' + caregiver, function(data) {
    alert(JSON.stringify(data));
  });
</script>


", "./inc/caregiver/topbar_caregiver.html", "C:\\laragon\\www\\doctorlab\\views\\inc\\caregiver\\topbar_caregiver.html");
    }
}
