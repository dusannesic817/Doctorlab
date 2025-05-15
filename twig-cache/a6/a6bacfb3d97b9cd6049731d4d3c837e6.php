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

/* Appointment/index.html */
class __TwigTemplate_a29a5bec64a54d218342957734980288 extends Template
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
        $this->parent = $this->loadTemplate("_global/caregiver_index.html", "Appointment/index.html", 1);
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
        $this->loadTemplate("./inc/session_alerts/edit_banner.html", "Appointment/index.html", 5)->display($context);
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
        $this->loadTemplate("./inc/caregiver/tabel.html", "Appointment/index.html", 13)->display($context);
        // line 14
        echo "    </div>
  </div>
</div>




";
    }

    public function getTemplateName()
    {
        return "Appointment/index.html";
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




{% endblock %}", "Appointment/index.html", "C:\\laragon\\www\\doctorlab\\views\\Appointment\\index.html");
    }
}
