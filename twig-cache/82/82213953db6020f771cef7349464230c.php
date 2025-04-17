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
            <div class=\"list-group\">
              ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "caregiver_data", [], "any", false, false, false, 22), "services", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 23
            echo "                
              <button type=\"button\" class=\"list-group-item list-group-item-action\"><small>";
            // line 24
            echo twig_escape_filter($this->env, $context["service"], "html", null, true);
            echo "</small></button>
              
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "               
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-12 col-lg-4 mt-4\">
        <div class=\"card\" style=\"width: 18rem;\">
          <img src=\"...\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <p class=\"card-text\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 36), "html", null, true);
        echo "</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


</body>


";
        // line 48
        $this->displayBlock('naslov', $context, $blocks);
        // line 51
        echo "
";
    }

    // line 48
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
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
        return array (  123 => 49,  119 => 48,  114 => 51,  112 => 48,  97 => 36,  86 => 27,  77 => 24,  74 => 23,  70 => 22,  51 => 5,  47 => 4,  36 => 1,);
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
            <div class=\"list-group\">
              {%for service in caregiver.caregiver_data.services %}
                
              <button type=\"button\" class=\"list-group-item list-group-item-action\"><small>{{service}}</small></button>
              
             {%endfor%}
               
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


{% block naslov %}
Type
{% endblock %}

{% endblock %}", "MakeAppointment/type.html", "C:\\laragon\\www\\doctorlab\\views\\MakeAppointment\\type.html");
    }
}
