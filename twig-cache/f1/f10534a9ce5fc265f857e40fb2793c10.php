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

/* MakeAppointment/create.html */
class __TwigTemplate_cce75a21795928050b04daac702e06bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'naslov' => [$this, 'block_naslov'],
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
        $this->parent = $this->loadTemplate("_global/index.html", "MakeAppointment/create.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
<body class=\"choose_type\">

  <div class=\"container\">
    <div class=\"row mt-5 ms-5\">
      <div class=\"col-12 ms-1\">
        <h4><b>Make your appointemt online</b></h4>
        <small>Fill in the following information</small>
      </div>
    </div>
    <div class=\"row ms-5\">
      <div class=\"col-12 col-lg-6 mt-4\">
        <div class=\"card\">
          <p class=\"mt-5 ms-4\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/makeappointment/type/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "caregiver_id", [], "any", false, false, false, 18), "html", null, true);
        echo "\"><small><b><i class=\"bi bi-arrow-left\"></i> Previous step</b></small></a></p>
          <div class=\"card-body\">
            <p class=\"ms-2 mb-4\"><small><b>Confirm the appointment time</b></small></p>
            <div class=\"text-center\">
              <small>You have selected the <b>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "day", [], "any", false, false, false, 22), "html", null, true);
        echo "</b> to <b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "time", [], "any", false, false, false, 22), "html", null, true);
        echo "</b></small>
              <button type=\"button\" class=\"btn btn-primary  w-100  mt-3 mb-3\" data-bs-toggle=\"modal\"
                data-bs-target=\"#staticBackdrop\"><b>Continue</b></button>

            </div>

            <!-- Modal -->
          <form id=\"autoSubmitForm\" action=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/makeappointment/storeappointment\" method=\"POST\" >
            <div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
              aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                  <div class=\"modal-header border-0\">

                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>

                  </div>
                  <div class=\"modal-body\">
                    <h5 class=\"text-center\">Read before making an appointemt</h5>
                    <small>Reason of consultation</small>
                    <p ><small><b>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "caregiver_data", [], "any", false, false, false, 42), "html", null, true);
        echo "</b></small></p>
                    <p class=\"border-top mt-2\"><small>Instruciton</small></p>
                    <p>If not slot is avalibale during the day please call ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "phone", [], "any", false, false, false, 44), "html", null, true);
        echo "</p>
                    <p>An appointment is dedicated to a single patient. For the same family member, please make an
                      appointemt per person.</p>
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-primary w-100\"><b>Yes i have read and accept
                        instruction</b></button>
                  </div>
                </div>
              </div>
            </div>
          </form>

          </div>
        </div>
      </div>
      <div class=\"col-12 col-lg-4 mt-4\">
        <div class=\"card\" style=\"width: 18rem;\">
          <div>
            <img src=\"...\" class=\"card-img-top \" alt=\"...\">
            
          </div>
          <div>
          <p><small><b>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 67), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "surname", [], "any", false, false, false, 67), "html", null, true);
        echo "</b></small></p>
          <small>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "caregiver_data", [], "any", false, false, false, 68), "title", [], "any", false, false, false, 68), "html", null, true);
        echo "</small>
          </div>
          <div class=\"card-body text-center border-top\">
            <div class=\"card-text\"><small><b>Your appointment in detail</b></small></div>
            <small class=\"grey\"> <i class=\"bi bi-check2\"></i> ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "day", [], "any", false, false, false, 72), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "time", [], "any", false, false, false, 72), "html", null, true);
        echo "</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


</body>


";
        // line 84
        $this->displayBlock('naslov', $context, $blocks);
        // line 87
        echo "
";
    }

    // line 84
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "Type
";
    }

    public function getTemplateName()
    {
        return "MakeAppointment/create.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 85,  171 => 84,  166 => 87,  164 => 84,  147 => 72,  140 => 68,  134 => 67,  108 => 44,  103 => 42,  87 => 29,  75 => 22,  66 => 18,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/index.html\" %}


{% block main %}

<body class=\"choose_type\">

  <div class=\"container\">
    <div class=\"row mt-5 ms-5\">
      <div class=\"col-12 ms-1\">
        <h4><b>Make your appointemt online</b></h4>
        <small>Fill in the following information</small>
      </div>
    </div>
    <div class=\"row ms-5\">
      <div class=\"col-12 col-lg-6 mt-4\">
        <div class=\"card\">
          <p class=\"mt-5 ms-4\"><a href=\"{{base_url}}/makeappointment/type/{{appointment.caregiver_id}}\"><small><b><i class=\"bi bi-arrow-left\"></i> Previous step</b></small></a></p>
          <div class=\"card-body\">
            <p class=\"ms-2 mb-4\"><small><b>Confirm the appointment time</b></small></p>
            <div class=\"text-center\">
              <small>You have selected the <b>{{appointment.day}}</b> to <b>{{appointment.time}}</b></small>
              <button type=\"button\" class=\"btn btn-primary  w-100  mt-3 mb-3\" data-bs-toggle=\"modal\"
                data-bs-target=\"#staticBackdrop\"><b>Continue</b></button>

            </div>

            <!-- Modal -->
          <form id=\"autoSubmitForm\" action=\"{{base_url}}/makeappointment/storeappointment\" method=\"POST\" >
            <div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
              aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                  <div class=\"modal-header border-0\">

                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>

                  </div>
                  <div class=\"modal-body\">
                    <h5 class=\"text-center\">Read before making an appointemt</h5>
                    <small>Reason of consultation</small>
                    <p ><small><b>{{appointment.caregiver_data}}</b></small></p>
                    <p class=\"border-top mt-2\"><small>Instruciton</small></p>
                    <p>If not slot is avalibale during the day please call {{caregiver.phone}}</p>
                    <p>An appointment is dedicated to a single patient. For the same family member, please make an
                      appointemt per person.</p>
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-primary w-100\"><b>Yes i have read and accept
                        instruction</b></button>
                  </div>
                </div>
              </div>
            </div>
          </form>

          </div>
        </div>
      </div>
      <div class=\"col-12 col-lg-4 mt-4\">
        <div class=\"card\" style=\"width: 18rem;\">
          <div>
            <img src=\"...\" class=\"card-img-top \" alt=\"...\">
            
          </div>
          <div>
          <p><small><b>{{caregiver.name}} {{caregiver.surname}}</b></small></p>
          <small>{{caregiver.caregiver_data.title}}</small>
          </div>
          <div class=\"card-body text-center border-top\">
            <div class=\"card-text\"><small><b>Your appointment in detail</b></small></div>
            <small class=\"grey\"> <i class=\"bi bi-check2\"></i> {{appointment.day}} {{appointment.time}}</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


</body>


{% block naslov %}
Type
{% endblock %}

{% endblock %}", "MakeAppointment/create.html", "C:\\laragon\\www\\doctorlab\\views\\MakeAppointment\\create.html");
    }
}
