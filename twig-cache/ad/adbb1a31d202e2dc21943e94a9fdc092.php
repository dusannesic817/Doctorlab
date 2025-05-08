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

/* ./inc/caregiver/tabel.html */
class __TwigTemplate_fae9d0472aedbce00fff93847cc82574 extends Template
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
        echo "<div class=\"card\">
  <div class=\"table-responsive pe-3 ps-3\">
    <table class=\"table table-hover align-middle\" id=\"pc-dt-simple\">
      <thead>
        <tr >
          <th></th>
          <th>#</th>
          <th>Patient</th>
          <th>Contact</th>
          <th>Time</th>
          <th>Type of appointment</th>
          <th>Status</th>
          <th class=\"text-center\">Actions</th>
        </tr>
      </thead>
      <tbody>
      ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myclients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 18
            echo "  <tr>
    <td>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\">
      </div>
    </td>
    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "user_id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
    <td>
      <div class=\"d-flex align-items-center\">
        <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/assets/images/undraw_profile.svg\" alt=\"user-image\"
                class=\"rounded-circle me-2\" style=\"width: 30px; height: 30px;\">
        <div>
          <h6 class=\"mb-0\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "patient_name", [], "any", false, false, false, 30), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "patient_surname", [], "any", false, false, false, 30), "html", null, true);
            echo "</h6>
          <p class=\"text-muted f-12 mb-0 text-truncate\" style=\"max-width: 150px;\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "patient_email", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
        </div>
      </div>
    </td>
    <td class=\"text-nowrap\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "patient_phone", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "appointment_date", [], "any", false, false, false, 36), "F j, l"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "start_time", [], "any", false, false, false, 36), "H:i"), "html", null, true);
            echo "</td>
    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "caregiver_data", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
    <td>
      ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 39) == "scheduled")) {
                // line 40
                echo "        <span class=\"badge bg-success rounded-pill\" style=\"font-size: 12px;\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 40)), "html", null, true);
                echo "</span>
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 41
$context["client"], "status", [], "any", false, false, false, 41) == "canceled")) {
                // line 42
                echo "        <span class=\"badge bg-danger rounded-pill\" style=\"font-size: 12px;\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 42)), "html", null, true);
                echo "</span>
      ";
            } else {
                // line 44
                echo "        <span class=\"badge bg-primary rounded-pill\" style=\"font-size: 12px;\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 44)), "html", null, true);
                echo "</span>
      ";
            }
            // line 46
            echo "    </td>
    <td class=\"text-center\">
      <ul class=\"list-inline me-auto mb-0\">
        <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"View\">
          <a href=\"#\" class=\"avtar avtar-xs btn-link-secondary\" data-bs-toggle=\"modal\"
            data-bs-target=\"#user-modal\">
            <i class=\"fa-solid fa-circle-check\" style=\"color: green;\"></i>
          </a>
        </li>
        <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Edit\">
          <a href=\"#\" class=\"avtar avtar-xs btn-link-primary\" data-bs-toggle=\"modal\"
            data-bs-target=\"#user-edit_add-modal\">
            <i class=\"fa-solid fa-trash\" style=\"color: rgb(156, 7, 7);\"></i>
          </a>
        </li>
        <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Delete\">
          <a href=\"#\" class=\"avtar avtar-xs btn-link-danger\">
            <i class=\"fa-solid fa-user-slash\"></i>
          </a>
        </li>
      </ul>
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "  </tbody>
  </table>
</div>";
    }

    public function getTemplateName()
    {
        return "./inc/caregiver/tabel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 70,  128 => 46,  122 => 44,  116 => 42,  114 => 41,  109 => 40,  107 => 39,  102 => 37,  96 => 36,  92 => 35,  85 => 31,  79 => 30,  73 => 27,  67 => 24,  59 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
  <div class=\"table-responsive pe-3 ps-3\">
    <table class=\"table table-hover align-middle\" id=\"pc-dt-simple\">
      <thead>
        <tr >
          <th></th>
          <th>#</th>
          <th>Patient</th>
          <th>Contact</th>
          <th>Time</th>
          <th>Type of appointment</th>
          <th>Status</th>
          <th class=\"text-center\">Actions</th>
        </tr>
      </thead>
      <tbody>
      {% for client in myclients %}
  <tr>
    <td>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\">
      </div>
    </td>
    <td>{{client.user_id}}</td>
    <td>
      <div class=\"d-flex align-items-center\">
        <img src=\"{{base_url}}/assets/images/undraw_profile.svg\" alt=\"user-image\"
                class=\"rounded-circle me-2\" style=\"width: 30px; height: 30px;\">
        <div>
          <h6 class=\"mb-0\">{{client.patient_name}} {{client.patient_surname}}</h6>
          <p class=\"text-muted f-12 mb-0 text-truncate\" style=\"max-width: 150px;\">{{client.patient_email}}</p>
        </div>
      </div>
    </td>
    <td class=\"text-nowrap\">{{client.patient_phone}}</td>
    <td>{{client.appointment_date|date(\"F j, l\")}} - {{client.start_time|date(\"H:i\")}}</td>
    <td>{{client.caregiver_data}}</td>
    <td>
      {% if client.status == 'scheduled' %}
        <span class=\"badge bg-success rounded-pill\" style=\"font-size: 12px;\">{{ client.status|capitalize }}</span>
      {% elseif client.status == 'canceled' %}
        <span class=\"badge bg-danger rounded-pill\" style=\"font-size: 12px;\">{{ client.status|capitalize }}</span>
      {% else %}
        <span class=\"badge bg-primary rounded-pill\" style=\"font-size: 12px;\">{{ client.status|capitalize }}</span>
      {% endif %}
    </td>
    <td class=\"text-center\">
      <ul class=\"list-inline me-auto mb-0\">
        <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"View\">
          <a href=\"#\" class=\"avtar avtar-xs btn-link-secondary\" data-bs-toggle=\"modal\"
            data-bs-target=\"#user-modal\">
            <i class=\"fa-solid fa-circle-check\" style=\"color: green;\"></i>
          </a>
        </li>
        <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Edit\">
          <a href=\"#\" class=\"avtar avtar-xs btn-link-primary\" data-bs-toggle=\"modal\"
            data-bs-target=\"#user-edit_add-modal\">
            <i class=\"fa-solid fa-trash\" style=\"color: rgb(156, 7, 7);\"></i>
          </a>
        </li>
        <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Delete\">
          <a href=\"#\" class=\"avtar avtar-xs btn-link-danger\">
            <i class=\"fa-solid fa-user-slash\"></i>
          </a>
        </li>
      </ul>
    </td>
  </tr>
  {%endfor%}
  </tbody>
  </table>
</div>", "./inc/caregiver/tabel.html", "C:\\laragon\\www\\doctorlab\\views\\inc\\caregiver\\tabel.html");
    }
}
