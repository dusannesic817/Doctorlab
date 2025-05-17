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
        echo "<div class=\"card mt-3\">
  <nav class=\"navbar\">
    <div class=\"container-fluid justify-content-end\">
      <form class=\"d-flex\" role=\"search\"  method=\"POST\" action=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/appointment/search\">
        <div class=\"input-group\">
          <input class=\"form-control\" type=\"search\" name=\"query\" placeholder=\"Search\" aria-label=\"Search\" />
          <button class=\"btn btn-outline-primary\" type=\"submit\">Search</button>
        </div>
      </form>
    </div>
  </nav>
  <div class=\"table-responsive pe-3 ps-3\">

    <table class=\"table table-hover align-middle\" id=\"pc-dt-simple\">

      <thead>
        <tr>
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myclients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 30
            echo "        <tr>
          <td>
            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"checkbox\">
            </div>
          </td>
          <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "user_id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
          <td>
            <div class=\"d-flex align-items-center\">
              <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/assets/images/undraw_profile.svg\" alt=\"user-image\" class=\"rounded-circle me-2\"
                style=\"width: 30px; height: 30px;\">
              <div>
                <h6 class=\"mb-0\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "patient_name", [], "any", false, false, false, 42), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "patient_surname", [], "any", false, false, false, 42), "html", null, true);
            echo "</h6>
                <p class=\"text-muted f-12 mb-0 text-truncate\" style=\"max-width: 150px;\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "patient_email", [], "any", false, false, false, 43), "html", null, true);
            echo "</p>
              </div>
            </div>
          </td>
          <td class=\"text-nowrap\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "patient_phone", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
          <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "appointment_date", [], "any", false, false, false, 48), "F j, l"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "start_time", [], "any", false, false, false, 48), "H:i"), "html", null, true);
            echo "</td>
          <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "caregiver_data", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
          <td>
            ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 51) == "scheduled")) {
                // line 52
                echo "            <span class=\"badge bg-success rounded-pill\" style=\"font-size: 12px;\">Verify</span>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 53
$context["client"], "status", [], "any", false, false, false, 53) == "canceled")) {
                // line 54
                echo "            <span class=\"badge bg-danger rounded-pill\" style=\"font-size: 12px;\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 54)), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 56
                echo "            <span class=\"badge bg-primary rounded-pill\" style=\"font-size: 12px;\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 56)), "html", null, true);
                echo "</span>
            ";
            }
            // line 58
            echo "          </td>
          <td class=\"text-center\">
            <ul class=\"list-inline me-auto mb-0\">
              ";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 61) == "scheduled")) {
                // line 62
                echo "              <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Complete\">
                <form id=\"complete-form-";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "appointment_id", [], "any", false, false, false, 63), "html", null, true);
                echo "\"
                  action=\"";
                // line 64
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/appointments/update/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "appointment_id", [], "any", false, false, false, 64), "html", null, true);
                echo "\" method=\"POST\"
                  class=\"d-inline\">
                  <a href=\"#\" class=\"avtar avtar-xs btn-link-secondary\"
                    onclick=\"event.preventDefault(); document.getElementById('complete-form-";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "appointment_id", [], "any", false, false, false, 67), "html", null, true);
                echo "').submit();\">
                    <i class=\"fa-solid fa-circle-check\" style=\"color: green;\"></i>
                  </a>
                </form>
              </li>
              ";
            }
            // line 73
            echo "              <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Contact\">
                <a href=\"mailto:";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "patient_email", [], "any", false, false, false, 74), "html", null, true);
            echo "\" class=\"avtar avtar-xs btn-link-primary\">
                  <i class=\"fa-solid fa-envelope\"></i>
                </a>
              </li>

              ";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 79) == "scheduled")) {
                // line 80
                echo "              <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Cancel\">
                <form id=\"cancel-form-";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "appointment_id", [], "any", false, false, false, 81), "html", null, true);
                echo "\"
                  action=\"";
                // line 82
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/appointments/cancel/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "appointment_id", [], "any", false, false, false, 82), "html", null, true);
                echo "\" method=\"POST\"
                  class=\"d-inline\">
                  <a href=\"#\" class=\"avtar avtar-xs btn-link-danger\"
                    onclick=\"event.preventDefault(); document.getElementById('cancel-form-";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "appointment_id", [], "any", false, false, false, 85), "html", null, true);
                echo "').submit();\">
                    <i class=\"fa-solid fa-user-slash\" style=\"color: rgb(212, 7, 7);\"></i>
                  </a>
                </form>
              </li>
              ";
            }
            // line 91
            echo "

            </ul>
          </td>

        </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
      </tbody>

    </table>

    <nav aria-label=\"...\" class=\"mt-5\">
      <ul class=\"pagination justify-content-end\">
        <li class=\"page-item disabled\">
          <a class=\"page-link\">Previous</a>
        </li>
        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
        <li class=\"page-item active\">
          <a class=\"page-link\" href=\"#\" aria-current=\"page\">2</a>
        </li>
        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
        <li class=\"page-item\">
          <a class=\"page-link\" href=\"#\">Next</a>
        </li>
      </ul>
    </nav>
  </div>

  <script>
  \$(document).ready(function () {
  \$('form[role=\"search\"]').on('submit', function (e) {
    e.preventDefault();

    const form = \$(this);
    const query = form.find('input[name=\"query\"]').val();

    \$.ajax({
      url: form.attr('action'), 
      method: 'POST',
      data: { query: query },
      success: function (response) {
       
        \$('#pc-dt-simple tbody').html(response);
      },
      error: function () {
        alert('Došlo je do greške prilikom pretrage.');
      }
    });
  });
});

</script>";
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
        return array (  222 => 99,  209 => 91,  200 => 85,  192 => 82,  188 => 81,  185 => 80,  183 => 79,  175 => 74,  172 => 73,  163 => 67,  155 => 64,  151 => 63,  148 => 62,  146 => 61,  141 => 58,  135 => 56,  129 => 54,  127 => 53,  124 => 52,  122 => 51,  117 => 49,  111 => 48,  107 => 47,  100 => 43,  94 => 42,  88 => 39,  82 => 36,  74 => 30,  70 => 29,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mt-3\">
  <nav class=\"navbar\">
    <div class=\"container-fluid justify-content-end\">
      <form class=\"d-flex\" role=\"search\"  method=\"POST\" action=\"{{ base_url }}/appointment/search\">
        <div class=\"input-group\">
          <input class=\"form-control\" type=\"search\" name=\"query\" placeholder=\"Search\" aria-label=\"Search\" />
          <button class=\"btn btn-outline-primary\" type=\"submit\">Search</button>
        </div>
      </form>
    </div>
  </nav>
  <div class=\"table-responsive pe-3 ps-3\">

    <table class=\"table table-hover align-middle\" id=\"pc-dt-simple\">

      <thead>
        <tr>
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
              <img src=\"{{base_url}}/assets/images/undraw_profile.svg\" alt=\"user-image\" class=\"rounded-circle me-2\"
                style=\"width: 30px; height: 30px;\">
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
            <span class=\"badge bg-success rounded-pill\" style=\"font-size: 12px;\">Verify</span>
            {% elseif client.status == 'canceled' %}
            <span class=\"badge bg-danger rounded-pill\" style=\"font-size: 12px;\">{{ client.status|capitalize }}</span>
            {% else %}
            <span class=\"badge bg-primary rounded-pill\" style=\"font-size: 12px;\">{{ client.status|capitalize }}</span>
            {% endif %}
          </td>
          <td class=\"text-center\">
            <ul class=\"list-inline me-auto mb-0\">
              {%if client.status=='scheduled'%}
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
              {%endif%}
              <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Contact\">
                <a href=\"mailto:{{client.patient_email}}\" class=\"avtar avtar-xs btn-link-primary\">
                  <i class=\"fa-solid fa-envelope\"></i>
                </a>
              </li>

              {%if client.status=='scheduled'%}
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
              {%endif%}


            </ul>
          </td>

        </tr>

        {%endfor%}

      </tbody>

    </table>

    <nav aria-label=\"...\" class=\"mt-5\">
      <ul class=\"pagination justify-content-end\">
        <li class=\"page-item disabled\">
          <a class=\"page-link\">Previous</a>
        </li>
        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
        <li class=\"page-item active\">
          <a class=\"page-link\" href=\"#\" aria-current=\"page\">2</a>
        </li>
        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
        <li class=\"page-item\">
          <a class=\"page-link\" href=\"#\">Next</a>
        </li>
      </ul>
    </nav>
  </div>

  <script>
  \$(document).ready(function () {
  \$('form[role=\"search\"]').on('submit', function (e) {
    e.preventDefault();

    const form = \$(this);
    const query = form.find('input[name=\"query\"]').val();

    \$.ajax({
      url: form.attr('action'), 
      method: 'POST',
      data: { query: query },
      success: function (response) {
       
        \$('#pc-dt-simple tbody').html(response);
      },
      error: function () {
        alert('Došlo je do greške prilikom pretrage.');
      }
    });
  });
});

</script>", "./inc/caregiver/tabel.html", "C:\\laragon\\www\\doctorlab\\views\\inc\\caregiver\\tabel.html");
    }
}
