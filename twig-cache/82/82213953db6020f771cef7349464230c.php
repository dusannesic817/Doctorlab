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
          <p class=\"mt-5 ms-5\"><small><b>Previous step</b></small></p>
          <div class=\"card-body\">
            <p class=\"ms-2 mb-4\"><small><b>Choose your piace of consultation</b></small></p>
            <div class=\"list-group\" id=\"services-list\">
              ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "caregiver_data", [], "any", false, false, false, 22), "services", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 23
            echo "                <label class=\"list-group-item list-group-item-action\" style=\"cursor: pointer;\">
                  <input type=\"checkbox\"
                         class=\"d-none\"
                         name=\"caregiver_data\"
                         value=\"";
            // line 27
            echo twig_escape_filter($this->env, $context["service"], "html", null, true);
            echo "\"
                         onclick=\"saveToSession(this)\"
                         data-caregiver-data=\"";
            // line 29
            echo twig_escape_filter($this->env, $context["service"], "html", null, true);
            echo "\">
                  <small>";
            // line 30
            echo twig_escape_filter($this->env, $context["service"], "html", null, true);
            echo "</small>
                </label>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </div>
          </div>
        </div>
      </div>
      <div class=\"col-12 col-lg-4 mt-4\">
        <div class=\"card\" style=\"width: 18rem;\">
          <img src=\"...\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <p class=\"card-text\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
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
        // line 60
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/makeappointment/store/';
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
      if (xhr.status === 200) {
        window.location.href = '";
        // line 66
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/makeappointment/create/';
      } else {
        console.error('Greška u odgovoru sa servera.');
      }
    };

    xhr.onerror = function() {
      console.error('Greška prilikom slanja zahteva.');
    };

    xhr.send(params.toString());
  }
</script>

";
        // line 80
        $this->displayBlock('naslov', $context, $blocks);
        // line 83
        echo "
";
    }

    // line 80
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
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
        return array (  167 => 81,  163 => 80,  158 => 83,  156 => 80,  139 => 66,  130 => 60,  108 => 41,  98 => 33,  89 => 30,  85 => 29,  80 => 27,  74 => 23,  70 => 22,  51 => 5,  47 => 4,  36 => 1,);
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
            <p class=\"ms-2 mb-4\"><small><b>Choose your piace of consultation</b></small></p>
            <div class=\"list-group\" id=\"services-list\">
              {% for service in caregiver.caregiver_data.services %}
                <label class=\"list-group-item list-group-item-action\" style=\"cursor: pointer;\">
                  <input type=\"checkbox\"
                         class=\"d-none\"
                         name=\"caregiver_data\"
                         value=\"{{ service }}\"
                         onclick=\"saveToSession(this)\"
                         data-caregiver-data=\"{{ service }}\">
                  <small>{{ service }}</small>
                </label>
              {% endfor %}
            </div>
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

    xhr.onload = function() {
      if (xhr.status === 200) {
        window.location.href = '{{ base_url }}/makeappointment/create/';
      } else {
        console.error('Greška u odgovoru sa servera.');
      }
    };

    xhr.onerror = function() {
      console.error('Greška prilikom slanja zahteva.');
    };

    xhr.send(params.toString());
  }
</script>

{% block naslov %}
Type
{% endblock %}

{% endblock %}", "MakeAppointment/type.html", "C:\\laragon\\www\\doctorlab\\views\\MakeAppointment\\type.html");
    }
}
