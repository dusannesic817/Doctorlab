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

/* Appointment/show.html */
class __TwigTemplate_55b0bdf23fe62b2b04abf0597d27e7c7 extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Appointment/show.html", 1);
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
        $this->loadTemplate("./inc/edit_banner.html", "Appointment/show.html", 6)->display($context);
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
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 17
            echo "          <button type=\"button\" class=\"list-group-item list-group-item-action light-blue border-0\"
            style=\"color: #0d6efd !important;\" onclick=\"toggleCards()\">
            <b>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "caregiver_data", [], "any", false, false, false, 19), "html", null, true);
            echo "</b>
          </button>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
      </div>
      <div class=\"col-lg-9 d-flex align-items-center justify-content-center\">
        <div class=\"card-container\">

          <!-- Prva kartica (početno vidljiva) -->
          <div id=\"defaultCard\" class=\"card card-my-information text-center border-0 light-blue\">
            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/calendar_transparent.png\" style=\"width: 12rem; height:10rem;\"
              class=\"card-img-top mx-auto d-block\" alt=\"...\">
            <div class=\"card-body\">
              <p class=\"card-text\"><b>No upcoming appointments</b></p>
              <p><small>Take charge of your health. Easily book your next appointment through Doctorlab</small></p>
              <a class=\"btn btn-primary\" href=\"index.html\" role=\"button\" style=\"width: 70%;\">Book an Appointment</a>
            </div>
          </div>

          <!-- Druga kartica (prikazuje se kada kliknes dugme) -->
          ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schedules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 40
            echo "          <div id=\"secondCard\" class=\"card  card-my-information hidden mb-5\" style=\"width: 600px; height:320px\">
            <header class=\"pb-1 pt-3 rounded-top\" style=\"background-color: #01264d\">
              <p class=\"ms-3\" style=\"color:white !important\"> <b><i class=\"bi bi-calendar2-event me-1\"></i> ";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "appointment_date", [], "any", false, false, false, 42), "F j, l"), "html", null, true);
            echo "
                  <span class=\"ms-4\"><i class=\"bi bi-clock-fill\"></i> ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "start_time", [], "any", false, false, false, 43), "H:i"), "html", null, true);
            echo "</span></b></p>
            </header>
           
            <div class=\"card-body\">
              <div class=\"d-flex flex-row mb-3\">
                <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/assets/uploads/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "photo", [], "any", false, false, false, 48), "html", null, true);
            echo "\" class=\"rounded-circle ms-3 mt-3\" alt=\"...\"
                  style=\"width: 65px; height: 65px; object-fit: cover;\">
                <div class=\"p-2 ms-2 mt-3\">
                  <b class=\"teget\"> Dr. ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "doctor_name", [], "any", false, false, false, 51), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "doctor_surname", [], "any", false, false, false, 51), "html", null, true);
            echo "</b><br> <small>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["schedule"], "docotor", [], "any", false, false, false, 51), "title", [], "any", false, false, false, 51), "html", null, true);
            echo "</small>
                </div>
              </div>
              <hr>
              <p style=\"margin-bottom: -4px;\"><small><b class=\"teget\">Your appointment details:</b></small></p>
              <small>Jagodina</small><br>
              <p><small>9 Rue Yvarm, 34562 Jagodina</small></p>
              <small>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "caregiver_data", [], "any", false, false, false, 58), "html", null, true);
            echo "</small>
            </div>
            
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </div>
      </div>
    </div>
  </div>


  <!--<div class=\"card text-center border-0 light-blue\" style=\"width: 40rem;\">
          <img src=\"images/calendar_transparent.png\" style=\"width: 12rem; height:10rem;\" class=\"card-img-top mx-auto d-block\" alt=\"...\">
          <div class=\"card-body\">
            <p class=\"card-text\"><b>No upcoming appointments</b></p>
            <p><small>Take charge of your health. Easily book your next appointment through Doctorlab</small></p>
            <a class=\"btn btn-primary\" href=\"#\" role=\"button\" style=\"width: 400px;\">Book an Appointment</a>
          </div>
        </div>-->

  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"
    integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\"
    crossorigin=\"anonymous\"></script>
  <script>
    function toggleCards() {
      document.getElementById(\"defaultCard\").classList.add(\"hidden\");
      document.getElementById(\"secondCard\").classList.remove(\"hidden\");
    }

    window.onload = function () {
      document.getElementById(\"defaultCard\").classList.remove(\"hidden\");
      document.getElementById(\"secondCard\").classList.add(\"hidden\");
    };
  </script>
</body>

";
    }

    public function getTemplateName()
    {
        return "Appointment/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 63,  147 => 58,  133 => 51,  125 => 48,  117 => 43,  113 => 42,  109 => 40,  105 => 39,  92 => 29,  83 => 22,  74 => 19,  70 => 17,  66 => 16,  55 => 7,  53 => 6,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/index.html\" %}


{% block main %}

{% include './inc/edit_banner.html' %}

<body class=\"light-blue\">

  <div class=\"container-fluid\">
    <div class=\"row vh-100\">
      <div class=\"col-lg-3 mt-3 text-center border-end border-secondary-subtle  h-100\">
        <p class=\"mt-4\"><b>Appointment History</b></p>
        <hr>
        <div class=\"list-group border-0\">
          {% for schedule in schedules%}
          <button type=\"button\" class=\"list-group-item list-group-item-action light-blue border-0\"
            style=\"color: #0d6efd !important;\" onclick=\"toggleCards()\">
            <b>{{schedule.caregiver_data}}</b>
          </button>
          {%endfor%}
        </div>
      </div>
      <div class=\"col-lg-9 d-flex align-items-center justify-content-center\">
        <div class=\"card-container\">

          <!-- Prva kartica (početno vidljiva) -->
          <div id=\"defaultCard\" class=\"card card-my-information text-center border-0 light-blue\">
            <img src=\"{{base_url}}/assets/images/calendar_transparent.png\" style=\"width: 12rem; height:10rem;\"
              class=\"card-img-top mx-auto d-block\" alt=\"...\">
            <div class=\"card-body\">
              <p class=\"card-text\"><b>No upcoming appointments</b></p>
              <p><small>Take charge of your health. Easily book your next appointment through Doctorlab</small></p>
              <a class=\"btn btn-primary\" href=\"index.html\" role=\"button\" style=\"width: 70%;\">Book an Appointment</a>
            </div>
          </div>

          <!-- Druga kartica (prikazuje se kada kliknes dugme) -->
          {%for schedule in schedules%}
          <div id=\"secondCard\" class=\"card  card-my-information hidden mb-5\" style=\"width: 600px; height:320px\">
            <header class=\"pb-1 pt-3 rounded-top\" style=\"background-color: #01264d\">
              <p class=\"ms-3\" style=\"color:white !important\"> <b><i class=\"bi bi-calendar2-event me-1\"></i> {{schedule.appointment_date|date(\"F j, l\")}}
                  <span class=\"ms-4\"><i class=\"bi bi-clock-fill\"></i> {{schedule.start_time|date(\"H:i\")}}</span></b></p>
            </header>
           
            <div class=\"card-body\">
              <div class=\"d-flex flex-row mb-3\">
                <img src=\"{{base_url}}/assets/uploads/images/{{schedule.photo}}\" class=\"rounded-circle ms-3 mt-3\" alt=\"...\"
                  style=\"width: 65px; height: 65px; object-fit: cover;\">
                <div class=\"p-2 ms-2 mt-3\">
                  <b class=\"teget\"> Dr. {{schedule.doctor_name}} {{schedule.doctor_surname}}</b><br> <small>{{schedule.docotor.title}}</small>
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


  <!--<div class=\"card text-center border-0 light-blue\" style=\"width: 40rem;\">
          <img src=\"images/calendar_transparent.png\" style=\"width: 12rem; height:10rem;\" class=\"card-img-top mx-auto d-block\" alt=\"...\">
          <div class=\"card-body\">
            <p class=\"card-text\"><b>No upcoming appointments</b></p>
            <p><small>Take charge of your health. Easily book your next appointment through Doctorlab</small></p>
            <a class=\"btn btn-primary\" href=\"#\" role=\"button\" style=\"width: 400px;\">Book an Appointment</a>
          </div>
        </div>-->

  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"
    integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\"
    crossorigin=\"anonymous\"></script>
  <script>
    function toggleCards() {
      document.getElementById(\"defaultCard\").classList.add(\"hidden\");
      document.getElementById(\"secondCard\").classList.remove(\"hidden\");
    }

    window.onload = function () {
      document.getElementById(\"defaultCard\").classList.remove(\"hidden\");
      document.getElementById(\"secondCard\").classList.add(\"hidden\");
    };
  </script>
</body>

{% endblock %}
", "Appointment/show.html", "C:\\laragon\\www\\doctorlab\\views\\Appointment\\show.html");
    }
}
