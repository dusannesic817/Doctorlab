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

/* ./inc/session_alerts/appointment_wait.html */
class __TwigTemplate_6f775663b9a2cffce260066c1c294f9a extends Template
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
        if (($context["appointment"] ?? null)) {
            // line 2
            echo "  <div class=\"container-fluid \" style=\"background-color: #ffe4e9;\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"alert rounded-0\" role=\"alert\">
            <div class=\"d-flex justify-content-center align-items-start flex-wrap\">
              <!--Left-->
              <div class=\"text-center me-0 me-lg-4 mt-2\">
                <small><b>Attention: your appointment is not confirmed yet!</b></small><br>
                <small>You must confirm your appointment to finalize the reservation.</small><br>
                <div class=\"mt-4\">
                  <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/makeappointment/cancel\" class=\"btn btn-outline-primary me-2\">Cancel this App</a>
                  <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/user/login\" class=\"btn btn-primary\">Confirm this App</a>
                </div>
              </div>
               <!--Right-->
              <div class=\"ms-0 ms-lg-5 mt-3 mt-lg-0\">
                <div class=\"card\" style=\"width: 300px; height: 130px;\">
                  <div class=\"card-header text-white background\">
                    <small><i class=\"bi bi-calendar-event me-2\"></i> ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($__internal_compile_0 = ($context["appointment"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["day"] ?? null) : null), "F j, l"), "html", null, true);
            echo "
                       <i class=\"bi bi-clock ms-2 me-1\"></i> ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($__internal_compile_1 = ($context["appointment"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["time"] ?? null) : null), "H:i"), "html", null, true);
            echo "
                    </small>
                  </div>
                  <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                      <div class=\"p-2\">
                       <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/assets/uploads/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "profile_photo", [], "any", false, false, false, 28), "html", null, true);
            echo "\" alt=\"user-image\" class=\"rounded-circle me-2\"
                        style=\"width: 50px; height: 50px;\">
                      </div>
                      <div class=\"p-2\">
                        <small><b>Dr ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 32), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "surname", [], "any", false, false, false, 32), "html", null, true);
            echo "</b></small><br>
                        <small class=\"fs-6 text-muted\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "caregiver_data", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
            echo "</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div> 
          </div> 
        </div>
      </div>
    </div>
  </div>
";
        } else {
            // line 47
            echo "<div></div>
";
        }
    }

    public function getTemplateName()
    {
        return "./inc/session_alerts/appointment_wait.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 47,  94 => 33,  88 => 32,  79 => 28,  70 => 22,  66 => 21,  56 => 14,  52 => 13,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if appointment %}
  <div class=\"container-fluid \" style=\"background-color: #ffe4e9;\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"alert rounded-0\" role=\"alert\">
            <div class=\"d-flex justify-content-center align-items-start flex-wrap\">
              <!--Left-->
              <div class=\"text-center me-0 me-lg-4 mt-2\">
                <small><b>Attention: your appointment is not confirmed yet!</b></small><br>
                <small>You must confirm your appointment to finalize the reservation.</small><br>
                <div class=\"mt-4\">
                  <a href=\"{{ base_url }}/makeappointment/cancel\" class=\"btn btn-outline-primary me-2\">Cancel this App</a>
                  <a href=\"{{ base_url }}/user/login\" class=\"btn btn-primary\">Confirm this App</a>
                </div>
              </div>
               <!--Right-->
              <div class=\"ms-0 ms-lg-5 mt-3 mt-lg-0\">
                <div class=\"card\" style=\"width: 300px; height: 130px;\">
                  <div class=\"card-header text-white background\">
                    <small><i class=\"bi bi-calendar-event me-2\"></i> {{ appointment['day']|date(\"F j, l\") }}
                       <i class=\"bi bi-clock ms-2 me-1\"></i> {{ appointment['time']|date(\"H:i\") }}
                    </small>
                  </div>
                  <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                      <div class=\"p-2\">
                       <img src=\"{{base_url}}/assets/uploads/images/{{caregiver.profile_photo}}\" alt=\"user-image\" class=\"rounded-circle me-2\"
                        style=\"width: 50px; height: 50px;\">
                      </div>
                      <div class=\"p-2\">
                        <small><b>Dr {{caregiver.name}} {{caregiver.surname}}</b></small><br>
                        <small class=\"fs-6 text-muted\">{{caregiver.caregiver_data.title}}</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div> 
          </div> 
        </div>
      </div>
    </div>
  </div>
{%else%}
<div></div>
{%endif%}", "./inc/session_alerts/appointment_wait.html", "C:\\xampp\\htdocs\\Doctorlab\\views\\inc\\session_alerts\\appointment_wait.html");
    }
}
