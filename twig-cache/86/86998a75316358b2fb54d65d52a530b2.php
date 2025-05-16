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
          <span id=\"notification-count\" class=\"badge bg-danger\" style=\"display: none;\">0</span>
        </a>

        <div class=\"dropdown-menu dropdown-menu-end shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
          <h6 class=\"dropdown-header\">
            Alerts Center
          </h6>

          <div id=\"notification-list\"></div>
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
        // line 37
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["role"] ?? null), "html", null, true);
        echo "/profile/";
        echo twig_escape_filter($this->env, ($context["auth"] ?? null), "html", null, true);
        echo "\">
            <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i> Profile
          </a>
          <a class=\"dropdown-item\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/caregiver/edit/";
        echo twig_escape_filter($this->env, ($context["auth"] ?? null), "html", null, true);
        echo "\">
            <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i> Settings
          </a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/caregiver/logout/out\">
          <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>


</div>


<script>
  let isDropdownOpen = false;
  let lastNotificationCount = 0;

  function formatDateToReadable(dateString) {
    const date = new Date(dateString);
    const options = { month: 'short', day: 'numeric', weekday: 'long' };
    return date.toLocaleDateString('en-US', options);
  }

  function fetchNotifications() {
    \$.ajax({
      url: '";
        // line 68
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/api/appointments/notifications',
      method: 'GET',
      success: function (data) {
        const \$notificationCount = \$('#notification-count');
        const \$notificationList = \$('#notification-list');

        if (data.length === lastNotificationCount && isDropdownOpen) return;

        lastNotificationCount = data.length;
        \$notificationList.empty();

        if (data.length > 0 && !isDropdownOpen) {
          let displayCount = data.length > 3 ? '3+' : data.length;
          \$notificationCount.text(displayCount).show();
        } else {
          \$notificationCount.hide();
        }

        data.forEach(notification => {
          const formattedDate = formatDateToReadable(notification.appointment_date);
          const html = `
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"me-3\">\${notification.icon}</div>
                        <div>
                            <div class=\"small text-gray-500\">\${formattedDate} \${notification.start_time} \${notification.appointment_type}</div>
                            <span class=\"font-weight-bold\">\${notification.message}</span>
                        </div>
                    </a>`;
          \$notificationList.append(html);
        });
      },
      error: function (xhr, status, error) {
        console.error('Greška prilikom učitavanja notifikacija:', status, error);
        console.log(xhr.responseText);
      }
    });
  }

  fetchNotifications();
  setInterval(fetchNotifications, 3000);

  \$('#alertsDropdown').on('click', function () {
    isDropdownOpen = true;

  });

  \$('#alertsDropdown').on('hidden.bs.dropdown', function () {
    isDropdownOpen = false;

    \$.ajax({
      url: '";
        // line 118
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/api/appointments/notifications/read',
      method: 'POST',
      success: function () {
        console.log('Notifikacije označene kao pročitane.');
        \$('#notification-count').hide();
      },
      error: function () {
        console.error('Greška prilikom označavanja notifikacija.');
      }
    });
  });


  \$('.dropdown-menu').on('mouseleave', function () {
    isDropdownOpen = false;
  });
</script>";
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
        return array (  174 => 118,  121 => 68,  94 => 44,  85 => 40,  75 => 37,  37 => 1,);
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
          <span id=\"notification-count\" class=\"badge bg-danger\" style=\"display: none;\">0</span>
        </a>

        <div class=\"dropdown-menu dropdown-menu-end shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
          <h6 class=\"dropdown-header\">
            Alerts Center
          </h6>

          <div id=\"notification-list\"></div>
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
          <a class=\"dropdown-item\" href=\"{{ base_url }}/caregiver/logout/out\">
          <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>


</div>


<script>
  let isDropdownOpen = false;
  let lastNotificationCount = 0;

  function formatDateToReadable(dateString) {
    const date = new Date(dateString);
    const options = { month: 'short', day: 'numeric', weekday: 'long' };
    return date.toLocaleDateString('en-US', options);
  }

  function fetchNotifications() {
    \$.ajax({
      url: '{{base_url}}/api/appointments/notifications',
      method: 'GET',
      success: function (data) {
        const \$notificationCount = \$('#notification-count');
        const \$notificationList = \$('#notification-list');

        if (data.length === lastNotificationCount && isDropdownOpen) return;

        lastNotificationCount = data.length;
        \$notificationList.empty();

        if (data.length > 0 && !isDropdownOpen) {
          let displayCount = data.length > 3 ? '3+' : data.length;
          \$notificationCount.text(displayCount).show();
        } else {
          \$notificationCount.hide();
        }

        data.forEach(notification => {
          const formattedDate = formatDateToReadable(notification.appointment_date);
          const html = `
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"me-3\">\${notification.icon}</div>
                        <div>
                            <div class=\"small text-gray-500\">\${formattedDate} \${notification.start_time} \${notification.appointment_type}</div>
                            <span class=\"font-weight-bold\">\${notification.message}</span>
                        </div>
                    </a>`;
          \$notificationList.append(html);
        });
      },
      error: function (xhr, status, error) {
        console.error('Greška prilikom učitavanja notifikacija:', status, error);
        console.log(xhr.responseText);
      }
    });
  }

  fetchNotifications();
  setInterval(fetchNotifications, 3000);

  \$('#alertsDropdown').on('click', function () {
    isDropdownOpen = true;

  });

  \$('#alertsDropdown').on('hidden.bs.dropdown', function () {
    isDropdownOpen = false;

    \$.ajax({
      url: '{{base_url}}/api/appointments/notifications/read',
      method: 'POST',
      success: function () {
        console.log('Notifikacije označene kao pročitane.');
        \$('#notification-count').hide();
      },
      error: function () {
        console.error('Greška prilikom označavanja notifikacija.');
      }
    });
  });


  \$('.dropdown-menu').on('mouseleave', function () {
    isDropdownOpen = false;
  });
</script>", "./inc/caregiver/topbar_caregiver.html", "C:\\laragon\\www\\doctorlab\\views\\inc\\caregiver\\topbar_caregiver.html");
    }
}
