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

/* MakeAppointment/type.html */
class __TwigTemplate_9084df527555b8ebe45fbfbc96762bc4 extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "MakeAppointment/type.html", 1);
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
          <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/caregiver/index\"><p class=\"mt-5 ms-4\"><small><i class=\"fa-solid fa-arrow-left-long\"></i> <b>Previous step</b></small></p></a>
          <div class=\"card-body\">
            <p class=\"ms-2 mb-4\"><i class=\"fa-solid fa-user-doctor\"></i> <small><b>Choose your piace of consultation</b></small></p>
            <div class=\"list-group\" id=\"services-list\">
              ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "caregiver_data", [], "any", false, false, false, 22), "services", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 23
            echo "              <label class=\"list-group-item list-group-item-action\" style=\"cursor: pointer;\">
                <input type=\"checkbox\" class=\"d-none\" name=\"caregiver_data\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $context["service"], "html", null, true);
            echo "\"
                  onclick=\"saveToSession(this)\" data-caregiver-data=\"";
            // line 25
            echo twig_escape_filter($this->env, $context["service"], "html", null, true);
            echo "\">
                <small>";
            // line 26
            echo twig_escape_filter($this->env, $context["service"], "html", null, true);
            echo "</small>
              </label>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </div>
          </div>
        </div>
      </div>
      <div class=\"col-12 col-lg-4 mt-4\">
        <div class=\"card\" style=\"width: 18rem;\">
          <div class=\"card-header text-white background\">
           <small><i class=\"bi bi-calendar-event me-2\"></i> ";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($__internal_compile_0 = ($context["appointment"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["day"] ?? null) : null), "F j, l"), "html", null, true);
        echo "
                       <i class=\"bi bi-clock ms-2 me-1\"></i> ";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($__internal_compile_1 = ($context["appointment"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["time"] ?? null) : null), "H:i"), "html", null, true);
        echo "
                    </small>
          </div>
          <div class=\"card-body\">
            <div class=\"d-flex align-items-center\">
              <div class=\"p-2\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/uploads/images/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "profile_photo", [], "any", false, false, false, 43), "html", null, true);
        echo "\" alt=\"user-image\" class=\"rounded-circle me-2\"
                  style=\"width: 50px; height: 50px;\">
              </div>
              <div class=\"p-2\">
                <span><b>Dr ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 47), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "surname", [], "any", false, false, false, 47), "html", null, true);
        echo "</b></span><br>
                <small class=\"fs-6 text-muted\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "caregiver_data", [], "any", false, false, false, 48), "title", [], "any", false, false, false, 48), "html", null, true);
        echo "</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>



</body>
<script>
  function saveToSession(checkbox) {
    const caregiver_data = checkbox.getAttribute('data-caregiver-data');

    const xhr = new XMLHttpRequest();
    const params = new URLSearchParams({
      caregiver_data: caregiver_data
    });

    const url = '";
        // line 70
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/makeappointment/store/';
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
      if (xhr.status === 200) {
        window.location.href = '";
        // line 76
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/makeappointment/create/';
      } else {
        console.error('Greška u odgovoru sa servera.');
      }
    };

    xhr.onerror = function () {
      console.error('Greška prilikom slanja zahteva.');
    };

    xhr.send(params.toString());
  }
</script>


";
    }

    // line 93
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "Type
";
    }

    public function getTemplateName()
    {
        return "MakeAppointment/type.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 94,  188 => 93,  168 => 76,  159 => 70,  134 => 48,  128 => 47,  119 => 43,  110 => 37,  106 => 36,  97 => 29,  88 => 26,  84 => 25,  80 => 24,  77 => 23,  73 => 22,  66 => 18,  51 => 5,  47 => 4,  36 => 1,);
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
          <a href=\"{{base_url}}/caregiver/index\"><p class=\"mt-5 ms-4\"><small><i class=\"fa-solid fa-arrow-left-long\"></i> <b>Previous step</b></small></p></a>
          <div class=\"card-body\">
            <p class=\"ms-2 mb-4\"><i class=\"fa-solid fa-user-doctor\"></i> <small><b>Choose your piace of consultation</b></small></p>
            <div class=\"list-group\" id=\"services-list\">
              {% for service in caregiver.caregiver_data.services %}
              <label class=\"list-group-item list-group-item-action\" style=\"cursor: pointer;\">
                <input type=\"checkbox\" class=\"d-none\" name=\"caregiver_data\" value=\"{{ service }}\"
                  onclick=\"saveToSession(this)\" data-caregiver-data=\"{{ service }}\">
                <small>{{ service }}</small>
              </label>
              {% endfor %}
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-12 col-lg-4 mt-4\">
        <div class=\"card\" style=\"width: 18rem;\">
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
                <span><b>Dr {{caregiver.name}} {{caregiver.surname}}</b></span><br>
                <small class=\"fs-6 text-muted\">{{caregiver.caregiver_data.title}}</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>



</body>
<script>
  function saveToSession(checkbox) {
    const caregiver_data = checkbox.getAttribute('data-caregiver-data');

    const xhr = new XMLHttpRequest();
    const params = new URLSearchParams({
      caregiver_data: caregiver_data
    });

    const url = '{{ base_url }}/makeappointment/store/';
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
      if (xhr.status === 200) {
        window.location.href = '{{ base_url }}/makeappointment/create/';
      } else {
        console.error('Greška u odgovoru sa servera.');
      }
    };

    xhr.onerror = function () {
      console.error('Greška prilikom slanja zahteva.');
    };

    xhr.send(params.toString());
  }
</script>


{% endblock %}

{% block naslov %}
Type
{% endblock %}", "MakeAppointment/type.html", "C:\\laragon\\www\\doctorlab\\views\\MakeAppointment\\type.html");
    }
}
