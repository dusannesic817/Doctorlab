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
        <div id=\"chat-messages\">
        
        </div>

        </div>
      </div>
      <form method=\"POST\" action=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assistent\">
        <div class=\"input-group\">
          <input type=\"text\" class=\"form-control\" name=\"prompt\" placeholder=\"Provide us your problem\"
            aria-label=\"Problem\" required>
          <button class=\"btn btn-primary\" type=\"submit\">
            <i class=\"fa-solid fa-paper-plane\"></i>
          </button>
        </div>
      </form>

    </div>
  </div>
</div>

<script>
  
  Pusher.logToConsole = true;
  var base_url = \"";
        // line 54
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\"; 
  var pusher = new Pusher('6d7d51c13b5451452dd9', {
    cluster: 'eu'
  });

var channel = pusher.subscribe('my-channel');
channel.bind('gpt', function(data) {
console.log('Pusher data:', data);

  var container = document.getElementById('chat-messages');

  var wrapper = document.createElement('div');
  wrapper.className = \"d-flex justify-content-start align-items-center mt-2\";

  var img = document.createElement('img');
  img.src = base_url + \"/assets/images/doctor.jpg\";
  img.alt = \"Avatar\";
  img.className = \"rounded-circle me-2 img-fluid\";
  img.style.width = \"40px\";
  img.style.height = \"40px\";

  var span = document.createElement('span');
  span.className = \"d-inline p-2 text-bg-info rounded text-white\";

  if (typeof data === 'string') {
    span.textContent = data;
  } else if (typeof data === 'object' && data.message){
    span.textContent = data.message;
  } else {
    span.textContent = '[Prazna poruka]';
  }

  wrapper.appendChild(img);
  wrapper.appendChild(span);
  container.appendChild(wrapper);
});


document.querySelector('form').addEventListener('submit', function(e){
  e.preventDefault();
  var input = this.querySelector('input[name=\"prompt\"]');
  var userText = input.value.trim();
  if (!userText) return;

  // Prikaži korisničku poruku odmah
  var container = document.getElementById('chat-messages');

  var wrapper = document.createElement('div');
  wrapper.className = \"d-flex justify-content-end align-items-center mt-2\";

  var span = document.createElement('span');
  span.className = \"d-inline p-2 text-bg-primary rounded\";
  span.textContent = userText;

  var img = document.createElement('img');
  img.src = base_url + \"/assets/images/undraw_profile.svg\";
  img.alt = \"Avatar\";
  img.className = \"rounded-circle ms-2 img-fluid\";
  img.style.width = \"40px\";
  img.style.height = \"40px\";

  wrapper.appendChild(span);
  wrapper.appendChild(img);
  container.appendChild(wrapper);

  input.value = '';

  fetch(\"";
        // line 121
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assistent\", {
    method: \"POST\",
    headers: {
      \"Content-Type\": \"application/x-www-form-urlencoded\",
    },
    body: \"prompt=\" + encodeURIComponent(userText),
  }).then(response => {
    
  }).catch(console.error);

  container.scrollTop = container.scrollHeight;
});



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
        return array (  185 => 121,  115 => 54,  95 => 37,  86 => 30,  79 => 26,  75 => 25,  72 => 24,  70 => 23,  50 => 5,  46 => 4,  35 => 1,);
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

        <div id=\"chat-messages\">
        
        </div>

        </div>
      </div>
      <form method=\"POST\" action=\"{{base_url}}/assistent\">
        <div class=\"input-group\">
          <input type=\"text\" class=\"form-control\" name=\"prompt\" placeholder=\"Provide us your problem\"
            aria-label=\"Problem\" required>
          <button class=\"btn btn-primary\" type=\"submit\">
            <i class=\"fa-solid fa-paper-plane\"></i>
          </button>
        </div>
      </form>

    </div>
  </div>
</div>

<script>
  
  Pusher.logToConsole = true;
  var base_url = \"{{ base_url }}\"; 
  var pusher = new Pusher('6d7d51c13b5451452dd9', {
    cluster: 'eu'
  });

var channel = pusher.subscribe('my-channel');
channel.bind('gpt', function(data) {
console.log('Pusher data:', data);

  var container = document.getElementById('chat-messages');

  var wrapper = document.createElement('div');
  wrapper.className = \"d-flex justify-content-start align-items-center mt-2\";

  var img = document.createElement('img');
  img.src = base_url + \"/assets/images/doctor.jpg\";
  img.alt = \"Avatar\";
  img.className = \"rounded-circle me-2 img-fluid\";
  img.style.width = \"40px\";
  img.style.height = \"40px\";

  var span = document.createElement('span');
  span.className = \"d-inline p-2 text-bg-info rounded text-white\";

  if (typeof data === 'string') {
    span.textContent = data;
  } else if (typeof data === 'object' && data.message){
    span.textContent = data.message;
  } else {
    span.textContent = '[Prazna poruka]';
  }

  wrapper.appendChild(img);
  wrapper.appendChild(span);
  container.appendChild(wrapper);
});


document.querySelector('form').addEventListener('submit', function(e){
  e.preventDefault();
  var input = this.querySelector('input[name=\"prompt\"]');
  var userText = input.value.trim();
  if (!userText) return;

  // Prikaži korisničku poruku odmah
  var container = document.getElementById('chat-messages');

  var wrapper = document.createElement('div');
  wrapper.className = \"d-flex justify-content-end align-items-center mt-2\";

  var span = document.createElement('span');
  span.className = \"d-inline p-2 text-bg-primary rounded\";
  span.textContent = userText;

  var img = document.createElement('img');
  img.src = base_url + \"/assets/images/undraw_profile.svg\";
  img.alt = \"Avatar\";
  img.className = \"rounded-circle ms-2 img-fluid\";
  img.style.width = \"40px\";
  img.style.height = \"40px\";

  wrapper.appendChild(span);
  wrapper.appendChild(img);
  container.appendChild(wrapper);

  input.value = '';

  fetch(\"{{ base_url }}/assistent\", {
    method: \"POST\",
    headers: {
      \"Content-Type\": \"application/x-www-form-urlencoded\",
    },
    body: \"prompt=\" + encodeURIComponent(userText),
  }).then(response => {
    
  }).catch(console.error);

  container.scrollTop = container.scrollHeight;
});



</script>



{%endblock%}", "ChatGpt/index.html", "C:\\laragon\\www\\doctorlab\\views\\ChatGpt\\index.html");
    }
}
