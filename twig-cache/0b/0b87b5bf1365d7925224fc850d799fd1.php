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

/* ./inc/appointment_wait.html */
class __TwigTemplate_7f778adae92f99cdd2906d203e1287c4 extends Template
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
            echo "
  <div class=\"container-fluid \" style=\"background-color: #ffe4e9;\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"alert rounded-0\" role=\"alert\">
            <div class=\"d-flex justify-content-center align-items-start flex-wrap\">

              <!-- Left side: Info and buttons -->
              <div class=\"text-center me-0 me-lg-4 mt-2\">
                <small><b>Attention: your appointment is not confirmed yet!</b></small><br>
                <small>You must confirm your appointment to finalize the reservation.</small><br>

                <div class=\"mt-4\">
                  <button type=\"button\" class=\"btn btn-outline-primary me-2\">Cancel this App</button>
                  <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/user/login\" class=\"btn btn-primary\">Confirm this App</a>

                </div>
              </div>

              <!-- Right side: Appointment card -->
              <div class=\"ms-0 ms-lg-5 mt-3 mt-lg-0\">
                <div class=\"card\" style=\"width: 300px; height: 130px;\">
                  <div class=\"card-header text-white background\">
                    <small><i class=\"bi bi-calendar-event me-2\"></i> ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($__internal_compile_0 = ($context["appointment"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["day"] ?? null) : null), "F j, l"), "html", null, true);
            echo "
                       <i class=\"bi bi-clock ms-2 me-1\"></i> ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($__internal_compile_1 = ($context["appointment"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["time"] ?? null) : null), "H:i"), "html", null, true);
            echo "
                    </small>
                  </div>
                  <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                      <div class=\"p-2\">
                        <div class=\"rounded bg-secondary\" style=\"width: 40px; height: 40px;\"></div> 
                      </div>
                      <div class=\"p-2\">
                        <small><b>Dr. Matheu Areo</b></small><br>
                        <small>Cardiology</small>
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
            // line 51
            echo "<div></div>
";
        }
    }

    public function getTemplateName()
    {
        return "./inc/appointment_wait.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 51,  72 => 27,  68 => 26,  56 => 17,  39 => 2,  37 => 1,);
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

              <!-- Left side: Info and buttons -->
              <div class=\"text-center me-0 me-lg-4 mt-2\">
                <small><b>Attention: your appointment is not confirmed yet!</b></small><br>
                <small>You must confirm your appointment to finalize the reservation.</small><br>

                <div class=\"mt-4\">
                  <button type=\"button\" class=\"btn btn-outline-primary me-2\">Cancel this App</button>
                  <a href=\"{{ base_url }}/user/login\" class=\"btn btn-primary\">Confirm this App</a>

                </div>
              </div>

              <!-- Right side: Appointment card -->
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
                        <div class=\"rounded bg-secondary\" style=\"width: 40px; height: 40px;\"></div> 
                      </div>
                      <div class=\"p-2\">
                        <small><b>Dr. Matheu Areo</b></small><br>
                        <small>Cardiology</small>
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
{%endif%}", "./inc/appointment_wait.html", "C:\\laragon\\www\\doctorlab\\views\\inc\\appointment_wait.html");
    }
}
