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
      
      <div class=\"card flex-grow-1 mb-3\">
        <div class=\"card-body d-flex flex-column justify-content-end\">

          <div class=\"d-flex justify-content-start align-items-center mb-2\">
  <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/doctor.jpg\" alt=\"Avatar\" class=\"rounded-circle me-2 img-fluid\" style=\"width: 40px; height: 40px;\">
  <span class=\"d-inline p-2 text-bg-info rounded text-white\">Poruka gpt</span>
</div>

          <div class=\"d-flex justify-content-end align-items-center\">
            <span class=\"d-inline p-2 text-bg-primary rounded\">Moja poruka koju cu pitati nesto gpt</span>
            <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/undraw_profile.svg\" alt=\"Avatar\" class=\"rounded-circle ms-2 img-fluid\" style=\"width: 40px; height: 40px;\">
          </div>

        </div>
      </div>

      <form>
        <div class=\"input-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Provide us your problem\" aria-label=\"Problem\" required>
          <button class=\"btn btn-primary\" type=\"submit\">
            <i class=\"fa-solid fa-paper-plane\"></i>
          </button>
        </div>
      </form>

    </div>
  </div>
</div>




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
        return array (  80 => 30,  71 => 24,  50 => 5,  46 => 4,  35 => 1,);
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
      
      <div class=\"card flex-grow-1 mb-3\">
        <div class=\"card-body d-flex flex-column justify-content-end\">

          <div class=\"d-flex justify-content-start align-items-center mb-2\">
  <img src=\"{{base_url}}/assets/images/doctor.jpg\" alt=\"Avatar\" class=\"rounded-circle me-2 img-fluid\" style=\"width: 40px; height: 40px;\">
  <span class=\"d-inline p-2 text-bg-info rounded text-white\">Poruka gpt</span>
</div>

          <div class=\"d-flex justify-content-end align-items-center\">
            <span class=\"d-inline p-2 text-bg-primary rounded\">Moja poruka koju cu pitati nesto gpt</span>
            <img src=\"{{base_url}}/assets/images/undraw_profile.svg\" alt=\"Avatar\" class=\"rounded-circle ms-2 img-fluid\" style=\"width: 40px; height: 40px;\">
          </div>

        </div>
      </div>

      <form>
        <div class=\"input-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Provide us your problem\" aria-label=\"Problem\" required>
          <button class=\"btn btn-primary\" type=\"submit\">
            <i class=\"fa-solid fa-paper-plane\"></i>
          </button>
        </div>
      </form>

    </div>
  </div>
</div>




{%endblock%}", "ChatGpt/index.html", "C:\\laragon\\www\\doctorlab\\views\\ChatGpt\\index.html");
    }
}
