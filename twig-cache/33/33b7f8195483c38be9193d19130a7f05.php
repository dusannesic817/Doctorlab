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

/* Appointment/client.html */
class __TwigTemplate_9eeab2894a4594ac53078db2037a1741 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_global/index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_global/index.html", "Appointment/client.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
";
        // line 6
        $this->loadTemplate("./inc/session_alerts/edit_banner.html", "Appointment/client.html", 6)->display($context);
        // line 7
        echo "
<body class=\"light-blue\">

  <div class=\"container-fluid\">
    <div class=\"row vh-100\">
      <div class=\"col-lg-3 mt-3 text-center border-end border-secondary-subtle  h-100\">
        <p class=\"mt-4\"><b>Appointment History</b></p>
        <hr>
        <div class=\"list-group border-0\">
          ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schedules"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 17
            echo "          <button type=\"button\" class=\"list-group-item list-group-item-action light-blue border-0\"
            style=\"color: #0d6efd !important;\" onclick=\"toggleCards('card";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18), "html", null, true);
            echo "')\">
            <b>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "caregiver_data", [], "any", false, false, false, 19), "html", null, true);
            echo "</b>
          </button>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        </div>
      </div>
      <div class=\"col-lg-9 d-flex align-items-center justify-content-center\">
        <div class=\"card-container\">

          <!-- Prva kartica (pocetno vidljiva) -->
          <div id=\"defaultCard\" class=\"card card-my-information text-center border-0 light-blue\">
            <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/calendar_transparent.png\" style=\"width: 12rem; height:10rem;\"
              class=\"card-img-top mx-auto d-block\" alt=\"...\">
            <div class=\"card-body\">
              <p class=\"card-text\"><b>No upcoming appointments</b></p>
              <p><small>Take charge of your health. Easily book your next appointment through Doctorlab</small></p>
              <a class=\"btn btn-primary\" href=\"index.html\" role=\"button\" style=\"width: 70%;\">Book an Appointment</a>
            </div>
          </div>

          <!-- Druga kartica (prikazuje se kada kliknem dugme) -->
          ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schedules"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 41
            echo "          <div id=\"card";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41), "html", null, true);
            echo "\" class=\"card card-my-information hidden mb-5\"
            style=\"width: 600px; height:320px\">
            <header class=\"pb-1 pt-3 rounded-top\" style=\"background-color: #01264d\">
              <div class=\"d-flex justify-content-between\">
                <p class=\"ms-3\" style=\"color:white !important\"> <b><i class=\"bi bi-calendar2-event me-1\"></i>
                    ";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "appointment_date", [], "any", false, false, false, 46), "F j, l"), "html", null, true);
            echo "
                    <span class=\"ms-4\"><i class=\"bi bi-clock-fill\"></i> ";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "start_time", [], "any", false, false, false, 47), "H:i"), "html", null, true);
            echo "</span></b>
                </p>
                ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["schedule"], "status", [], "any", false, false, false, 49) != "canceled")) {
                // line 50
                echo "                
                <form action=\"";
                // line 51
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/appointments/cancel/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "appointment_id", [], "any", false, false, false, 51), "html", null, true);
                echo "\" method=\"POST\">
                  <p class=\"me-3\">
                  <button type=\"submit\" class=\"btn btn-primary ms-3\"
                    style=\"--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;\">
                    Cancel appointment
                  </button>
                  </p>
                </form>
                
                ";
            }
            // line 61
            echo "              </div>
            </header>
            <div class=\"card-body\">
              <div class=\"d-flex flex-row mb-3\">
                <img src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/assets/uploads/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "photo", [], "any", false, false, false, 65), "html", null, true);
            echo "\" class=\"rounded-circle ms-3 mt-3\"
                  alt=\"...\" style=\"width: 65px; height: 65px; object-fit: cover;\">
                <div class=\"p-2 ms-2 mt-3\">
                  <b class=\"teget\">Dr ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "doctor_name", [], "any", false, false, false, 68), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "doctor_surname", [], "any", false, false, false, 68), "html", null, true);
            echo "</b><br>
                  <small>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["schedule"], "docotor", [], "any", false, false, false, 69), "title", [], "any", false, false, false, 69), "html", null, true);
            echo "</small>
                </div>
              </div>
              <hr>
              <p style=\"margin-bottom: -4px;\"><small><b class=\"teget\">Your appointment details:</b></small></p>
              <small>Jagodina</small><br>
              <p><small>9 Rue Yvarm, 34562 Jagodina</small></p>
              <small>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "caregiver_data", [], "any", false, false, false, 76), "html", null, true);
            echo "</small>
            </div>

          </div>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </div>
      </div>
    </div>
  </div>





  <script>
    function toggleCards(cardId) {
      // Sakrij sve kartice
      const cards = document.querySelectorAll(\".card-my-information\");
      cards.forEach(card => card.classList.add(\"hidden\"));

      // Prikazi odgovarajuću
      const selectedCard = document.getElementById(cardId);
      if (selectedCard) {
        selectedCard.classList.remove(\"hidden\");
      }
    }

  </script>
</body>

";
    }

    public function getTemplateName()
    {
        return "Appointment/client.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 81,  215 => 76,  205 => 69,  199 => 68,  191 => 65,  185 => 61,  170 => 51,  167 => 50,  165 => 49,  160 => 47,  156 => 46,  147 => 41,  130 => 40,  117 => 30,  107 => 22,  90 => 19,  86 => 18,  83 => 17,  66 => 16,  55 => 7,  53 => 6,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/index.html\" %}


{% block main %}

{% include './inc/session_alerts/edit_banner.html' %}

<body class=\"light-blue\">

  <div class=\"container-fluid\">
    <div class=\"row vh-100\">
      <div class=\"col-lg-3 mt-3 text-center border-end border-secondary-subtle  h-100\">
        <p class=\"mt-4\"><b>Appointment History</b></p>
        <hr>
        <div class=\"list-group border-0\">
          {% for schedule in schedules %}
          <button type=\"button\" class=\"list-group-item list-group-item-action light-blue border-0\"
            style=\"color: #0d6efd !important;\" onclick=\"toggleCards('card{{ loop.index }}')\">
            <b>{{ schedule.caregiver_data }}</b>
          </button>
          {% endfor %}

        </div>
      </div>
      <div class=\"col-lg-9 d-flex align-items-center justify-content-center\">
        <div class=\"card-container\">

          <!-- Prva kartica (pocetno vidljiva) -->
          <div id=\"defaultCard\" class=\"card card-my-information text-center border-0 light-blue\">
            <img src=\"{{base_url}}/assets/images/calendar_transparent.png\" style=\"width: 12rem; height:10rem;\"
              class=\"card-img-top mx-auto d-block\" alt=\"...\">
            <div class=\"card-body\">
              <p class=\"card-text\"><b>No upcoming appointments</b></p>
              <p><small>Take charge of your health. Easily book your next appointment through Doctorlab</small></p>
              <a class=\"btn btn-primary\" href=\"index.html\" role=\"button\" style=\"width: 70%;\">Book an Appointment</a>
            </div>
          </div>

          <!-- Druga kartica (prikazuje se kada kliknem dugme) -->
          {%for schedule in schedules%}
          <div id=\"card{{ loop.index }}\" class=\"card card-my-information hidden mb-5\"
            style=\"width: 600px; height:320px\">
            <header class=\"pb-1 pt-3 rounded-top\" style=\"background-color: #01264d\">
              <div class=\"d-flex justify-content-between\">
                <p class=\"ms-3\" style=\"color:white !important\"> <b><i class=\"bi bi-calendar2-event me-1\"></i>
                    {{schedule.appointment_date|date(\"F j, l\")}}
                    <span class=\"ms-4\"><i class=\"bi bi-clock-fill\"></i> {{schedule.start_time|date(\"H:i\")}}</span></b>
                </p>
                {% if schedule.status != 'canceled' %}
                
                <form action=\"{{ base_url }}/appointments/cancel/{{ schedule.appointment_id }}\" method=\"POST\">
                  <p class=\"me-3\">
                  <button type=\"submit\" class=\"btn btn-primary ms-3\"
                    style=\"--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;\">
                    Cancel appointment
                  </button>
                  </p>
                </form>
                
                {%endif%}
              </div>
            </header>
            <div class=\"card-body\">
              <div class=\"d-flex flex-row mb-3\">
                <img src=\"{{base_url}}/assets/uploads/images/{{schedule.photo}}\" class=\"rounded-circle ms-3 mt-3\"
                  alt=\"...\" style=\"width: 65px; height: 65px; object-fit: cover;\">
                <div class=\"p-2 ms-2 mt-3\">
                  <b class=\"teget\">Dr {{schedule.doctor_name}} {{schedule.doctor_surname}}</b><br>
                  <small>{{schedule.docotor.title}}</small>
                </div>
              </div>
              <hr>
              <p style=\"margin-bottom: -4px;\"><small><b class=\"teget\">Your appointment details:</b></small></p>
              <small>Jagodina</small><br>
              <p><small>9 Rue Yvarm, 34562 Jagodina</small></p>
              <small>{{schedule.caregiver_data}}</small>
            </div>

          </div>
          {%endfor%}
        </div>
      </div>
    </div>
  </div>





  <script>
    function toggleCards(cardId) {
      // Sakrij sve kartice
      const cards = document.querySelectorAll(\".card-my-information\");
      cards.forEach(card => card.classList.add(\"hidden\"));

      // Prikazi odgovarajuću
      const selectedCard = document.getElementById(cardId);
      if (selectedCard) {
        selectedCard.classList.remove(\"hidden\");
      }
    }

  </script>
</body>

{% endblock %}", "Appointment/client.html", "C:\\laragon\\www\\doctorlab\\views\\Appointment\\client.html");
    }
}
