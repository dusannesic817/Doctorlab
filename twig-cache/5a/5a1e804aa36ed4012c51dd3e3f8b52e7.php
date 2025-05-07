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
        $this->parent = $this->loadTemplate("_global/caregiver_index.html", "Appointment/show.html", 1);
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
        $this->loadTemplate("./inc/session_alerts/edit_banner.html", "Appointment/show.html", 5)->display($context);
        // line 6
        $this->loadTemplate("./inc/caregiver/cards.html", "Appointment/show.html", 6)->display($context);
        // line 7
        echo "
<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-8\">
      ";
        // line 11
        $this->loadTemplate("./inc/caregiver/tabel.html", "Appointment/show.html", 11)->display($context);
        // line 12
        echo "    </div>
  </div>
</div>


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
        return array (  65 => 12,  63 => 11,  57 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/caregiver_index.html\" %}

{% block caregiver %}

{% include './inc/session_alerts/edit_banner.html' %}
{% include './inc/caregiver/cards.html' %}

<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-8\">
      {% include './inc/caregiver/tabel.html' %}
    </div>
  </div>
</div>


{% endblock %}", "Appointment/show.html", "C:\\laragon\\www\\doctorlab\\views\\Appointment\\show.html");
    }
}
