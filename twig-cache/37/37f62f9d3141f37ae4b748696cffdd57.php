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

/* Appointment/appointments.html */
class __TwigTemplate_b34ef53c923173c5703561818d0afb2b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'caregiver' => [$this, 'block_caregiver'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_global/caregiver_index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_global/caregiver_index.html", "Appointment/appointments.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_caregiver($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("./inc/session_alerts/edit_banner.html", "Appointment/appointments.html", 5)->display($context);
        // line 6
        echo "
<div class=\"container-fluid\">
       <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Clients</h1>
          </div>
  <div class=\"row\">
    <div class=\"col-12\">
      ";
        // line 13
        $this->loadTemplate("./inc/caregiver/tabel.html", "Appointment/appointments.html", 13)->display($context);
        // line 14
        echo "    </div>
  </div>
</div>




";
    }

    public function getTemplateName()
    {
        return "Appointment/appointments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  64 => 13,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/caregiver_index.html\" %}

{% block caregiver %}

{% include './inc/session_alerts/edit_banner.html' %}

<div class=\"container-fluid\">
       <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Clients</h1>
          </div>
  <div class=\"row\">
    <div class=\"col-12\">
      {% include './inc/caregiver/tabel.html' %}
    </div>
  </div>
</div>




{% endblock %}", "Appointment/appointments.html", "C:\\laragon\\www\\doctorlab\\views\\Appointment\\appointments.html");
    }
}
