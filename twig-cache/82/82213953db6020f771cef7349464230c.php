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
              <button type=\"button\" class=\"list-group-item list-group-item-action\"><small>A second button item</small></button>
              <button type=\"button\" class=\"list-group-item list-group-item-action\"><small>A second button item</small></button>
              <button type=\"button\" class=\"list-group-item list-group-item-action\"><small>A second button item</small></button>
              <button type=\"button\" class=\"list-group-item list-group-item-action\" ><small>A second button item</small></button>
              <button type=\"button\" class=\"list-group-item list-group-item-action\"><small>A second button item</small></button>
              <button type=\"button\" class=\"list-group-item list-group-item-action\"><small>A second button item</small></button>
              <button type=\"button\" class=\"list-group-item list-group-item-action\" ><small>A second button item</small></button>
               
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-12 col-lg-4 mt-4\">
        <div class=\"card\" style=\"width: 18rem;\">
          <img src=\"...\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


</body>


";
        // line 50
        $this->displayBlock('naslov', $context, $blocks);
        // line 53
        echo "
";
    }

    // line 50
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
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
        return array (  109 => 51,  105 => 50,  100 => 53,  98 => 50,  51 => 5,  47 => 4,  36 => 1,);
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
              <button type=\"button\" class=\"list-group-item list-group-item-action\"><small>A second button item</small></button>
              <button type=\"button\" class=\"list-group-item list-group-item-action\"><small>A second button item</small></button>
              <button type=\"button\" class=\"list-group-item list-group-item-action\"><small>A second button item</small></button>
              <button type=\"button\" class=\"list-group-item list-group-item-action\" ><small>A second button item</small></button>
              <button type=\"button\" class=\"list-group-item list-group-item-action\"><small>A second button item</small></button>
              <button type=\"button\" class=\"list-group-item list-group-item-action\"><small>A second button item</small></button>
              <button type=\"button\" class=\"list-group-item list-group-item-action\" ><small>A second button item</small></button>
               
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-12 col-lg-4 mt-4\">
        <div class=\"card\" style=\"width: 18rem;\">
          <img src=\"...\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
