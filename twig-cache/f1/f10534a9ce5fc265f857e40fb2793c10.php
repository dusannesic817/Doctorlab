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
          <p class=\"mt-5 ms-5\"><small><b>Previous step</b></small></p>
          <div class=\"card-body\">
            <p class=\"ms-2 mb-4\"><small><b>Confirm the appointment time</b></small></p>
            <div class=\"text-center\">
              <small>You have selected the <b>Tuesday 22 April 2025</b> to <b>16:45</b></small>
              <button type=\"button\" class=\"btn btn-primary  w-100  mt-3 mb-3\" data-bs-toggle=\"modal\"
                data-bs-target=\"#staticBackdrop\"><b>Continue</b></button>

            </div>

            <!-- Modal -->
          <form  action=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/makeappointment/store\" method=\"POST\" >
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
                    <p class=\"border-bottom\">aaaaaaaaaaaaaaaaa</p>
                    <small>Instruciton</small>
                    <p>if not slot is avalibale during the day please call 061302131312</p>
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
          <img src=\"...\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <p class=\"card-text\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 64), "html", null, true);
        echo "</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


</body>


";
        // line 76
        $this->displayBlock('naslov', $context, $blocks);
        // line 79
        echo "
";
    }

    // line 76
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
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
        return array (  141 => 77,  137 => 76,  132 => 79,  130 => 76,  115 => 64,  77 => 29,  51 => 5,  47 => 4,  36 => 1,);
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
          <p class=\"mt-5 ms-5\"><small><b>Previous step</b></small></p>
          <div class=\"card-body\">
            <p class=\"ms-2 mb-4\"><small><b>Confirm the appointment time</b></small></p>
            <div class=\"text-center\">
              <small>You have selected the <b>Tuesday 22 April 2025</b> to <b>16:45</b></small>
              <button type=\"button\" class=\"btn btn-primary  w-100  mt-3 mb-3\" data-bs-toggle=\"modal\"
                data-bs-target=\"#staticBackdrop\"><b>Continue</b></button>

            </div>

            <!-- Modal -->
          <form  action=\"{{base_url}}/makeappointment/store\" method=\"POST\" >
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
                    <p class=\"border-bottom\">aaaaaaaaaaaaaaaaa</p>
                    <small>Instruciton</small>
                    <p>if not slot is avalibale during the day please call 061302131312</p>
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
          <img src=\"...\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <p class=\"card-text\">{{caregiver.name}}</p>
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
