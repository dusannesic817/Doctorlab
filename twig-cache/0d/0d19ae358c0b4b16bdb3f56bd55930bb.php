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

/* ChatGpt/index.html */
class __TwigTemplate_5ea54c7ed6922403a42678871894b191 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
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
        $this->parent = $this->loadTemplate("_global/index.html", "ChatGpt/index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
<div class=\"container\">
  <div class=\"row mt-3\">
    <div class=\"col-12\">
      <div class=\"text-center\">
        Welcome to Doctorlab Virtual assistent.
      </div>
    </div>
  </div>
</div>

<div class=\"container-fluid\">
  <div class=\"row justify-content-center\">
    <div class=\"col-10 col-md-8 col-lg-10 mx-auto d-flex flex-column\" style=\"height: 75vh;\">

      <div class=\"card flex-grow-1 mb-3\" style=\"height: 75vh;\">
        <div class=\"card-body d-flex flex-column-reverse overflow-auto\" style=\"height: 100%;\">
          <!-- poruke -->
          ";
        // line 23
        if (($context["userPrompt"] ?? null)) {
            // line 24
            echo "          <div class=\"d-flex justify-content-end align-items-center mt-2\">
            <span class=\"d-inline p-2 text-bg-primary rounded\">";
            // line 25
            echo twig_escape_filter($this->env, ($context["userPrompt"] ?? null), "html", null, true);
            echo "</span>
            <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/assets/images/undraw_profile.svg\" alt=\"Avatar\" class=\"rounded-circle ms-2 img-fluid\"
              style=\"width: 40px; height: 40px;\">
          </div>
          ";
        }
        // line 30
        echo "
          ";
        // line 31
        if (($context["gptResponse"] ?? null)) {
            // line 32
            echo "          <div class=\"d-flex justify-content-start align-items-center mt-2\">
            <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/assets/images/doctor.jpg\" alt=\"Avatar\" class=\"rounded-circle me-2 img-fluid\"
              style=\"width: 40px; height: 40px;\">
            <span class=\"d-inline p-2 text-bg-info rounded text-white\">";
            // line 35
            echo twig_escape_filter($this->env, ($context["gptResponse"] ?? null), "html", null, true);
            echo "</span>
          </div>
          ";
        }
        // line 38
        echo "
        </div>
      </div>
      <form method=\"POST\" url=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assistent\">
        <div class=\"input-group\">
          <input type=\"text\" class=\"form-control\" name=\"prompt\" placeholder=\"Provide us your problem\" aria-label=\"Problem\" required>
          <button class=\"btn btn-primary\" type=\"submit\">
            <i class=\"fa-solid fa-paper-plane\"></i>
          </button>
        </div>
      </form>

    </div>
  </div>
</div>


<script>
  // Omogući logovanje u konzolu radi debugovanja
  Pusher.logToConsole = true;

  // Inicijalizuj Pusher
  var pusher = new Pusher('6d7d51c13b5451452dd9', {
    cluster: 'eu'
  });

  // Pretplati se na kanal
  var channel = pusher.subscribe('my-channel');

  // Slušaj događaj 'gpt'
  channel.bind('gpt', function(data) {
    console.log('Primljena poruka od servera:', data);

    if (data.message) {
      const container = document.createElement('div');
      container.className = 'alert alert-info mt-2';
      container.innerText = 'GPT odgovor: ' + data.message;

      // Dodaj poruku na vrh stranice
      document.body.prepend(container);
    }
  });

  // === Test prikaz bez Pusher servera ===
  // Ako hoćeš samo da vidiš kako izgleda u DOM-u:
  /*
  document.addEventListener(\"DOMContentLoaded\", function () {
    const testData = { message: 'Ovo je lokalna test poruka bez Pusher-a' };
    const container = document.createElement('div');
    container.className = 'alert alert-warning mt-2';
    container.innerText = 'GPT odgovor: ' + testData.message;
    document.body.prepend(container);
  });
  */
</script>


";
    }

    public function getTemplateName()
    {
        return "ChatGpt/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  105 => 38,  99 => 35,  94 => 33,  91 => 32,  89 => 31,  86 => 30,  79 => 26,  75 => 25,  72 => 24,  70 => 23,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/index.html\" %}


{% block main %}

<div class=\"container\">
  <div class=\"row mt-3\">
    <div class=\"col-12\">
      <div class=\"text-center\">
        Welcome to Doctorlab Virtual assistent.
      </div>
    </div>
  </div>
</div>

<div class=\"container-fluid\">
  <div class=\"row justify-content-center\">
    <div class=\"col-10 col-md-8 col-lg-10 mx-auto d-flex flex-column\" style=\"height: 75vh;\">

      <div class=\"card flex-grow-1 mb-3\" style=\"height: 75vh;\">
        <div class=\"card-body d-flex flex-column-reverse overflow-auto\" style=\"height: 100%;\">
          <!-- poruke -->
          {% if userPrompt %}
          <div class=\"d-flex justify-content-end align-items-center mt-2\">
            <span class=\"d-inline p-2 text-bg-primary rounded\">{{ userPrompt }}</span>
            <img src=\"{{base_url}}/assets/images/undraw_profile.svg\" alt=\"Avatar\" class=\"rounded-circle ms-2 img-fluid\"
              style=\"width: 40px; height: 40px;\">
          </div>
          {% endif %}

          {% if gptResponse %}
          <div class=\"d-flex justify-content-start align-items-center mt-2\">
            <img src=\"{{base_url}}/assets/images/doctor.jpg\" alt=\"Avatar\" class=\"rounded-circle me-2 img-fluid\"
              style=\"width: 40px; height: 40px;\">
            <span class=\"d-inline p-2 text-bg-info rounded text-white\">{{ gptResponse }}</span>
          </div>
          {% endif %}

        </div>
      </div>
      <form method=\"POST\" url=\"{{base_url}}/assistent\">
        <div class=\"input-group\">
          <input type=\"text\" class=\"form-control\" name=\"prompt\" placeholder=\"Provide us your problem\" aria-label=\"Problem\" required>
          <button class=\"btn btn-primary\" type=\"submit\">
            <i class=\"fa-solid fa-paper-plane\"></i>
          </button>
        </div>
      </form>

    </div>
  </div>
</div>


<script>
  // Omogući logovanje u konzolu radi debugovanja
  Pusher.logToConsole = true;

  // Inicijalizuj Pusher
  var pusher = new Pusher('6d7d51c13b5451452dd9', {
    cluster: 'eu'
  });

  // Pretplati se na kanal
  var channel = pusher.subscribe('my-channel');

  // Slušaj događaj 'gpt'
  channel.bind('gpt', function(data) {
    console.log('Primljena poruka od servera:', data);

    if (data.message) {
      const container = document.createElement('div');
      container.className = 'alert alert-info mt-2';
      container.innerText = 'GPT odgovor: ' + data.message;

      // Dodaj poruku na vrh stranice
      document.body.prepend(container);
    }
  });

  // === Test prikaz bez Pusher servera ===
  // Ako hoćeš samo da vidiš kako izgleda u DOM-u:
  /*
  document.addEventListener(\"DOMContentLoaded\", function () {
    const testData = { message: 'Ovo je lokalna test poruka bez Pusher-a' };
    const container = document.createElement('div');
    container.className = 'alert alert-warning mt-2';
    container.innerText = 'GPT odgovor: ' + testData.message;
    document.body.prepend(container);
  });
  */
</script>


{%endblock%}", "ChatGpt/index.html", "C:\\laragon\\www\\doctorlab\\views\\ChatGpt\\index.html");
    }
}
