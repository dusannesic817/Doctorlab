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
        <p class=\"mt-4\"><b>Appointment History";
        // line 13
        echo twig_escape_filter($this->env, ($context["role"] ?? null), "html", null, true);
        echo "</b></p>
        <hr>
        <div class=\"list-group border-0\">
          <button type=\"button\" class=\"list-group-item list-group-item-action light-blue border-0\"
            style=\"color: #0d6efd !important;\" onclick=\"toggleCards()\">
            <b>A second button item</b>
          </button>
          <button type=\"button\" class=\"list-group-item list-group-item-action  light-blue border-0\"
            style=\"color: #0d6efd !important;\"><b>A second button item</b></button>
          <button type=\"button\" class=\"list-group-item list-group-item-action  light-blue border-0\">A fourth button
            item</button>
        </div>
      </div>
      <div class=\"col-lg-9 d-flex align-items-center justify-content-center\">
        <div class=\"card-container\">

          <!-- Prva kartica (početno vidljiva) -->
          <div id=\"defaultCard\" class=\"card card-my-information text-center border-0 light-blue\">
            <img src=\"";
        // line 31
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
          <div id=\"secondCard\" class=\"card  card-my-information hidden mb-5\" style=\"width: 600px; height:350px\">
            <header class=\"pb-1 pt-3 rounded-top\" style=\"background-color: #01264d\">
              <p class=\"ms-3\" style=\"color:white !important\"> <b><i class=\"bi bi-calendar2-event\"></i> Thuesday, 4 Mart
                  <span class=\"ms-4\"><i class=\"bi bi-clock-fill\"></i> 16:00</span></b></p>
            </header>
            <div class=\"card-body\">
              <div class=\"d-flex flex-row mb-3\">
                <img src=\"images/image_1.jpg\" class=\"rounded-circle ms-3 mt-3\" alt=\"...\"
                  style=\"width: 65px; height: 65px; object-fit: cover;\">
                <div class=\"p-2 ms-2 mt-3\">
                  <b class=\"teget\"> Dr. Vera Bogdanova </b><br> <small>Cardiologe</small>
                </div>
              </div>
              <hr>
              <p><small><b class=\"teget\">Your appointment details:</b></small></p>
              <small>Jagodina</small><br>
              <p><small>9 Rue Yvarm, 34562 Jagodina</small></p>
              <small>Vrsta Pregleda</small>
            </div>
          </div>
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
        return array (  84 => 31,  63 => 13,  55 => 7,  53 => 6,  50 => 5,  46 => 4,  35 => 1,);
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
        <p class=\"mt-4\"><b>Appointment History{{role}}</b></p>
        <hr>
        <div class=\"list-group border-0\">
          <button type=\"button\" class=\"list-group-item list-group-item-action light-blue border-0\"
            style=\"color: #0d6efd !important;\" onclick=\"toggleCards()\">
            <b>A second button item</b>
          </button>
          <button type=\"button\" class=\"list-group-item list-group-item-action  light-blue border-0\"
            style=\"color: #0d6efd !important;\"><b>A second button item</b></button>
          <button type=\"button\" class=\"list-group-item list-group-item-action  light-blue border-0\">A fourth button
            item</button>
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
          <div id=\"secondCard\" class=\"card  card-my-information hidden mb-5\" style=\"width: 600px; height:350px\">
            <header class=\"pb-1 pt-3 rounded-top\" style=\"background-color: #01264d\">
              <p class=\"ms-3\" style=\"color:white !important\"> <b><i class=\"bi bi-calendar2-event\"></i> Thuesday, 4 Mart
                  <span class=\"ms-4\"><i class=\"bi bi-clock-fill\"></i> 16:00</span></b></p>
            </header>
            <div class=\"card-body\">
              <div class=\"d-flex flex-row mb-3\">
                <img src=\"images/image_1.jpg\" class=\"rounded-circle ms-3 mt-3\" alt=\"...\"
                  style=\"width: 65px; height: 65px; object-fit: cover;\">
                <div class=\"p-2 ms-2 mt-3\">
                  <b class=\"teget\"> Dr. Vera Bogdanova </b><br> <small>Cardiologe</small>
                </div>
              </div>
              <hr>
              <p><small><b class=\"teget\">Your appointment details:</b></small></p>
              <small>Jagodina</small><br>
              <p><small>9 Rue Yvarm, 34562 Jagodina</small></p>
              <small>Vrsta Pregleda</small>
            </div>
          </div>
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
