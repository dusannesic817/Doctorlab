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

/* User/index.html */
class __TwigTemplate_39ed99ce3669a9374e4cac531cad97f9 extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "User/index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
<body class=\"light-blue\" style='background-color: #e4ecf7 !important'>
  <div class=\"container d-flex justify-content-center align-items-start min-vh-100 pt-5 mt-5\">
    <div class=\"row\">
      <h4 class=\"text-center\"><small><b>Register or Log in</b></small></h4>
      <div class=\"col-12 d-flex justify-content-center\">
        <div class=\"card p-4 border-0\" style=\"width: 500px; height: 400px;\">
          <div class=\"card-body d-flex flex-column justify-content-center align-items-center\">
            <div class=\"d-flex flex-column mb-3 w-100\">
              <small class=\"text-center mb-2\"><b>I already have an account</b></small>
              <a class=\"btn btn-warning mb-2\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/user/login\" role=\"button\"><b class=\"text-light\">Login</b></a>

              <small class=\"text-center mb-2 mt-5\"><b>Do you have Google Account?</b></small>
              <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["googleAuth"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-primary mb-2\"><b class=\"text-warning\">Google</b></a>
              <small class=\"text-center mb-2\"><b>New to Doctolab?</b></small>
              <a class=\"btn btn-primary\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/user/register\" role=\"button\"><b>Sing Up</b></a>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

";
        // line 33
        $this->displayBlock('naslov', $context, $blocks);
        // line 36
        echo "

";
    }

    // line 33
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "  Login
";
    }

    public function getTemplateName()
    {
        return "User/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  98 => 33,  92 => 36,  90 => 33,  74 => 20,  69 => 18,  63 => 15,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/index.html\" %}


{% block main %}

<body class=\"light-blue\" style='background-color: #e4ecf7 !important'>
  <div class=\"container d-flex justify-content-center align-items-start min-vh-100 pt-5 mt-5\">
    <div class=\"row\">
      <h4 class=\"text-center\"><small><b>Register or Log in</b></small></h4>
      <div class=\"col-12 d-flex justify-content-center\">
        <div class=\"card p-4 border-0\" style=\"width: 500px; height: 400px;\">
          <div class=\"card-body d-flex flex-column justify-content-center align-items-center\">
            <div class=\"d-flex flex-column mb-3 w-100\">
              <small class=\"text-center mb-2\"><b>I already have an account</b></small>
              <a class=\"btn btn-warning mb-2\" href=\"{{ base_url }}/user/login\" role=\"button\"><b class=\"text-light\">Login</b></a>

              <small class=\"text-center mb-2 mt-5\"><b>Do you have Google Account?</b></small>
              <a href=\"{{googleAuth}}\" class=\"btn btn-primary mb-2\"><b class=\"text-warning\">Google</b></a>
              <small class=\"text-center mb-2\"><b>New to Doctolab?</b></small>
              <a class=\"btn btn-primary\" href=\"{{ base_url }}/user/register\" role=\"button\"><b>Sing Up</b></a>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

{% block naslov %}
  Login
{% endblock %}


{% endblock %}", "User/index.html", "C:\\laragon\\www\\doctorlab\\views\\User\\index.html");
    }
}
