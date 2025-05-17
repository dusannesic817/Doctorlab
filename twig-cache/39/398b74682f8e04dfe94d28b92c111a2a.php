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

/* Appointment/search.html */
class __TwigTemplate_af0f6f9634452f979775f702172a50bf extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myclients"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 2
            echo "<tr>
  <td>
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"checkbox\">
    </div>
  </td>
  <td>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "user_id", [], "any", false, false, false, 8), "html", null, true);
            echo "</td>
  <td>
    <div class=\"d-flex align-items-center\">
      <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/assets/images/undraw_profile.svg\" alt=\"user-image\" class=\"rounded-circle me-2\"
        style=\"width: 30px; height: 30px;\">
      <div>
        <h6 class=\"mb-0\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "user_name", [], "any", false, false, false, 14), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "user_surname", [], "any", false, false, false, 14), "html", null, true);
            echo "</h6>
        <p class=\"text-muted f-12 mb-0 text-truncate\" style=\"max-width: 150px;\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "user_email", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
      </div>
    </div>
  </td>
  <td class=\"text-nowrap\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "user_phone", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
  <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "appointment_date", [], "any", false, false, false, 20), "F j, l"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "start_time", [], "any", false, false, false, 20), "H:i"), "html", null, true);
            echo "</td>
  <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
  <td>
    ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 23) == "scheduled")) {
                // line 24
                echo "    <span class=\"badge bg-success rounded-pill\" style=\"font-size: 12px;\">Verify</span>
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 25
$context["client"], "status", [], "any", false, false, false, 25) == "canceled")) {
                // line 26
                echo "    <span class=\"badge bg-danger rounded-pill\" style=\"font-size: 12px;\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 26)), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 28
                echo "    <span class=\"badge bg-primary rounded-pill\" style=\"font-size: 12px;\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 28)), "html", null, true);
                echo "</span>
    ";
            }
            // line 30
            echo "  </td>
  <td class=\"text-center\">
    <ul class=\"list-inline me-auto mb-0\">
      ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 33) == "scheduled")) {
                // line 34
                echo "      <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Complete\">
        <form id=\"complete-form-";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "appointment_id", [], "any", false, false, false, 35), "html", null, true);
                echo "\"
          action=\"";
                // line 36
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/appointments/update/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "appointment_id", [], "any", false, false, false, 36), "html", null, true);
                echo "\" method=\"POST\"
          class=\"d-inline\">
          <a href=\"#\" class=\"avtar avtar-xs btn-link-secondary\"
            onclick=\"event.preventDefault(); document.getElementById('complete-form-";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "appointment_id", [], "any", false, false, false, 39), "html", null, true);
                echo "').submit();\">
            <i class=\"fa-solid fa-circle-check\" style=\"color: green;\"></i>
          </a>
        </form>
      </li>
      ";
            }
            // line 45
            echo "      <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Contact\">
        <a href=\"mailto:";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "patient_email", [], "any", false, false, false, 46), "html", null, true);
            echo "\" class=\"avtar avtar-xs btn-link-primary\">
          <i class=\"fa-solid fa-envelope\"></i>
        </a>
      </li>
      ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 50) == "scheduled")) {
                // line 51
                echo "      <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Cancel\">
        <form id=\"cancel-form-";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "appointment_id", [], "any", false, false, false, 52), "html", null, true);
                echo "\"
          action=\"";
                // line 53
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/appointments/cancel/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "appointment_id", [], "any", false, false, false, 53), "html", null, true);
                echo "\" method=\"POST\"
          class=\"d-inline\">
          <a href=\"#\" class=\"avtar avtar-xs btn-link-danger\"
            onclick=\"event.preventDefault(); document.getElementById('cancel-form-";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "appointment_id", [], "any", false, false, false, 56), "html", null, true);
                echo "').submit();\">
            <i class=\"fa-solid fa-user-slash\" style=\"color: rgb(212, 7, 7);\"></i>
          </a>
        </form>
      </li>
      ";
            }
            // line 62
            echo "    </ul>
  </td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "<tr><td colspan=\"8\" class=\"text-center text-muted\">No results found.</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "

";
    }

    public function getTemplateName()
    {
        return "Appointment/search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 68,  184 => 66,  176 => 62,  167 => 56,  159 => 53,  155 => 52,  152 => 51,  150 => 50,  143 => 46,  140 => 45,  131 => 39,  123 => 36,  119 => 35,  116 => 34,  114 => 33,  109 => 30,  103 => 28,  97 => 26,  95 => 25,  92 => 24,  90 => 23,  85 => 21,  79 => 20,  75 => 19,  68 => 15,  62 => 14,  56 => 11,  50 => 8,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for client in myclients %}
<tr>
  <td>
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"checkbox\">
    </div>
  </td>
  <td>{{client.user_id}}</td>
  <td>
    <div class=\"d-flex align-items-center\">
      <img src=\"{{base_url}}/assets/images/undraw_profile.svg\" alt=\"user-image\" class=\"rounded-circle me-2\"
        style=\"width: 30px; height: 30px;\">
      <div>
        <h6 class=\"mb-0\">{{client.user_name}} {{client.user_surname}}</h6>
        <p class=\"text-muted f-12 mb-0 text-truncate\" style=\"max-width: 150px;\">{{client.user_email}}</p>
      </div>
    </div>
  </td>
  <td class=\"text-nowrap\">{{client.user_phone}}</td>
  <td>{{client.appointment_date|date(\"F j, l\")}} - {{client.start_time|date(\"H:i\")}}</td>
  <td>{{client.type}}</td>
  <td>
    {% if client.status == 'scheduled' %}
    <span class=\"badge bg-success rounded-pill\" style=\"font-size: 12px;\">Verify</span>
    {% elseif client.status == 'canceled' %}
    <span class=\"badge bg-danger rounded-pill\" style=\"font-size: 12px;\">{{ client.status|capitalize }}</span>
    {% else %}
    <span class=\"badge bg-primary rounded-pill\" style=\"font-size: 12px;\">{{ client.status|capitalize }}</span>
    {% endif %}
  </td>
  <td class=\"text-center\">
    <ul class=\"list-inline me-auto mb-0\">
      {% if client.status=='scheduled' %}
      <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Complete\">
        <form id=\"complete-form-{{ client.appointment_id }}\"
          action=\"{{ base_url }}/appointments/update/{{ client.appointment_id }}\" method=\"POST\"
          class=\"d-inline\">
          <a href=\"#\" class=\"avtar avtar-xs btn-link-secondary\"
            onclick=\"event.preventDefault(); document.getElementById('complete-form-{{ client.appointment_id }}').submit();\">
            <i class=\"fa-solid fa-circle-check\" style=\"color: green;\"></i>
          </a>
        </form>
      </li>
      {% endif %}
      <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Contact\">
        <a href=\"mailto:{{client.patient_email}}\" class=\"avtar avtar-xs btn-link-primary\">
          <i class=\"fa-solid fa-envelope\"></i>
        </a>
      </li>
      {% if client.status=='scheduled' %}
      <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Cancel\">
        <form id=\"cancel-form-{{ client.appointment_id }}\"
          action=\"{{ base_url }}/appointments/cancel/{{  client.appointment_id}}\" method=\"POST\"
          class=\"d-inline\">
          <a href=\"#\" class=\"avtar avtar-xs btn-link-danger\"
            onclick=\"event.preventDefault(); document.getElementById('cancel-form-{{ client.appointment_id }}').submit();\">
            <i class=\"fa-solid fa-user-slash\" style=\"color: rgb(212, 7, 7);\"></i>
          </a>
        </form>
      </li>
      {% endif %}
    </ul>
  </td>
</tr>
{% else %}
<tr><td colspan=\"8\" class=\"text-center text-muted\">No results found.</td></tr>
{% endfor %}


", "Appointment/search.html", "C:\\laragon\\www\\doctorlab\\views\\Appointment\\search.html");
    }
}
