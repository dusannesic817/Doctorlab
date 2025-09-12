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
          <p class=\"mt-4 ms-4\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/makeappointment/type/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "caregiver_id", [], "any", false, false, false, 18), "html", null, true);
        echo "\"><small><b><i
                    class=\"bi bi-arrow-left\"></i> Previous step</b></small></a></p>
          <div class=\"card-body\">
            <p class=\"ms-2 mb-4\">
              <small><b>Confirm the appointment time</b> <i class=\"fa-regular fa-circle-check\"
                  style=\"color: green;\"></i></small></p>
            <div class=\"text-center\">
              <p>You have selected the</p> <b><i class=\"fa-solid fa-calendar\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "day", [], "any", false, false, false, 25), "F j, l"), "html", null, true);
        echo "</b>  <i
                  class=\"fa-regular fa-clock\"></i> <b>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "time", [], "any", false, false, false, 26), "H:i"), "html", null, true);
        echo "</b>
              <button type=\"button\" class=\"btn btn-primary  w-100  mt-3 mb-3\" data-bs-toggle=\"modal\"
                data-bs-target=\"#staticBackdrop\"><b>Continue</b></button>

            </div>

            <!-- Modal -->
            <form id=\"autoSubmitForm\" action=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/makeappointment/storeappointment\" method=\"POST\">
              <div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\"
                tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered\">
                  <div class=\"modal-content\">
                    <div class=\"modal-header border-0\">

                      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>

                    </div>
                    <div class=\"modal-body\">
                      <h5 class=\"text-center\">Read before making an appointemt</h5>
                      <small><i class=\"fa-solid fa-list\"></i> Reason of consultation</small>
                      <p class=\"mt-1\"><small><b>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "caregiver_data", [], "any", false, false, false, 46), "html", null, true);
        echo "</b></small></p>
                      <div class=\"border-bottom\"></div>
                      <p class=\"mt-2\"><i class=\"fa-solid fa-list\"></i> Instruciton</p>
                      <p> <small>If not slot is avalibale during the day please call ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "phone", [], "any", false, false, false, 49), "html", null, true);
        echo " <i class=\"fa-solid fa-phone\"></i> </small></p>
                      <p><small>An appointment is dedicated to a single patient. For the same family member, please make an
                        appointemt <b>per person</b>.</small></p>
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
          <div class=\"card-body\">
            <div class=\"d-flex align-items-center\">
              <div class=\"p-2\">
                <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/uploads/images/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "profile_photo", [], "any", false, false, false, 70), "html", null, true);
        echo "\" alt=\"user-image\"
                  class=\"rounded-circle me-2\" style=\"width: 50px; height: 50px;\">
              </div>
              <div class=\"p-2\">
                <span><b>Dr ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 74), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "surname", [], "any", false, false, false, 74), "html", null, true);
        echo "</b></span><br>
                <small class=\"fs-6 text-muted\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "caregiver_data", [], "any", false, false, false, 75), "title", [], "any", false, false, false, 75), "html", null, true);
        echo "</small>
              </div>
            </div>
          </div>
          <div class=\"card-body text-center border-top\">
            <div class=\"card-text\"><small><b>Your appointment in detail</b></small></div>
            <small class=\"grey\"> <i class=\"bi bi-check2\"></i> ";
        // line 81
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "day", [], "any", false, false, false, 81), "F j, l"), "html", null, true);
        echo " at
              ";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "time", [], "any", false, false, false, 82), "H:i"), "html", null, true);
        echo "h</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


</body>
<script>
  window.onload = function () {
    var form = document.getElementById('autoSubmitForm');
    if (form) {
      form.submit();
    }
  };

</script>

";
        // line 102
        $this->displayBlock('naslov', $context, $blocks);
        // line 105
        echo "
";
    }

    // line 102
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "
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
        return array (  200 => 103,  196 => 102,  191 => 105,  189 => 102,  166 => 82,  162 => 81,  153 => 75,  147 => 74,  138 => 70,  114 => 49,  108 => 46,  92 => 33,  82 => 26,  78 => 25,  66 => 18,  51 => 5,  47 => 4,  36 => 1,);
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
          <p class=\"mt-4 ms-4\"><a href=\"{{base_url}}/makeappointment/type/{{appointment.caregiver_id}}\"><small><b><i
                    class=\"bi bi-arrow-left\"></i> Previous step</b></small></a></p>
          <div class=\"card-body\">
            <p class=\"ms-2 mb-4\">
              <small><b>Confirm the appointment time</b> <i class=\"fa-regular fa-circle-check\"
                  style=\"color: green;\"></i></small></p>
            <div class=\"text-center\">
              <p>You have selected the</p> <b><i class=\"fa-solid fa-calendar\"></i> {{appointment.day|date(\"F j, l\")}}</b>  <i
                  class=\"fa-regular fa-clock\"></i> <b>{{appointment.time|date(\"H:i\")}}</b>
              <button type=\"button\" class=\"btn btn-primary  w-100  mt-3 mb-3\" data-bs-toggle=\"modal\"
                data-bs-target=\"#staticBackdrop\"><b>Continue</b></button>

            </div>

            <!-- Modal -->
            <form id=\"autoSubmitForm\" action=\"{{base_url}}/makeappointment/storeappointment\" method=\"POST\">
              <div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\"
                tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered\">
                  <div class=\"modal-content\">
                    <div class=\"modal-header border-0\">

                      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>

                    </div>
                    <div class=\"modal-body\">
                      <h5 class=\"text-center\">Read before making an appointemt</h5>
                      <small><i class=\"fa-solid fa-list\"></i> Reason of consultation</small>
                      <p class=\"mt-1\"><small><b>{{appointment.caregiver_data}}</b></small></p>
                      <div class=\"border-bottom\"></div>
                      <p class=\"mt-2\"><i class=\"fa-solid fa-list\"></i> Instruciton</p>
                      <p> <small>If not slot is avalibale during the day please call {{caregiver.phone}} <i class=\"fa-solid fa-phone\"></i> </small></p>
                      <p><small>An appointment is dedicated to a single patient. For the same family member, please make an
                        appointemt <b>per person</b>.</small></p>
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
          <div class=\"card-body\">
            <div class=\"d-flex align-items-center\">
              <div class=\"p-2\">
                <img src=\"{{base_url}}/assets/uploads/images/{{caregiver.profile_photo}}\" alt=\"user-image\"
                  class=\"rounded-circle me-2\" style=\"width: 50px; height: 50px;\">
              </div>
              <div class=\"p-2\">
                <span><b>Dr {{caregiver.name}} {{caregiver.surname}}</b></span><br>
                <small class=\"fs-6 text-muted\">{{caregiver.caregiver_data.title}}</small>
              </div>
            </div>
          </div>
          <div class=\"card-body text-center border-top\">
            <div class=\"card-text\"><small><b>Your appointment in detail</b></small></div>
            <small class=\"grey\"> <i class=\"bi bi-check2\"></i> {{appointment.day|date(\"F j, l\")}} at
              {{appointment.time|date(\"H:i\")}}h</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


</body>
<script>
  window.onload = function () {
    var form = document.getElementById('autoSubmitForm');
    if (form) {
      form.submit();
    }
  };

</script>

{% block naslov %}

{% endblock %}

{% endblock %}", "MakeAppointment/create.html", "C:\\laragon\\www\\doctorlab\\views\\MakeAppointment\\create.html");
    }
}
