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

/* User/reset.html */
class __TwigTemplate_2b55f93793cbc370d98befdd8247089f extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "User/reset.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  <body class=\"light-blue\" style='background-color: #e4ecf7 !important'>
    <div class=\"container d-flex justify-content-center align-items-start min-vh-100 pt-5 mt-5\">
      <div class=\"row\">
        <h4 class=\"text-center\"><small><b>Please confirm new password</b></small></h4>
        <div class=\"col-12 d-flex justify-content-center\">
          <div class=\"card p-4 border-0\" style=\"width: 500px; height: 350px;\">
            <div class=\"card-body d-flex flex-column justify-content-center align-items-center\">
              <div class=\"d-flex flex-column mb-3 w-100\">
                <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/confirmreset\" method=\"POST\">
                  <div class=\"mb-3\">
                    <label for=\"password_reset\" class=\"form-label\"><small><b><i class=\"bi bi-lock-fill\"></i> Password</b></small></label>
                    <input type=\"password\" class=\"form-control\" id=\"password_reset\" name=\"password_reset\">
                  </div>
                  <div class=\"mb-3\">
                    <label for=\"password_reset1\" class=\"form-label\"><small><b><i class=\"bi bi-lock-fill\"></i>Retype Password</b></small></label>
                    <input type=\"password\" class=\"form-control\" id=\"password_reset1\" name=\"password_reset1\">
                  </div>
                <div class=\"mt-4\">
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"width: 100%;\">Submit</button>                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

 


";
    }

    // line 38
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    Reset
  ";
    }

    public function getTemplateName()
    {
        return "User/reset.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 39,  90 => 38,  61 => 13,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/index.html\" %}


{% block main %}
  <body class=\"light-blue\" style='background-color: #e4ecf7 !important'>
    <div class=\"container d-flex justify-content-center align-items-start min-vh-100 pt-5 mt-5\">
      <div class=\"row\">
        <h4 class=\"text-center\"><small><b>Please confirm new password</b></small></h4>
        <div class=\"col-12 d-flex justify-content-center\">
          <div class=\"card p-4 border-0\" style=\"width: 500px; height: 350px;\">
            <div class=\"card-body d-flex flex-column justify-content-center align-items-center\">
              <div class=\"d-flex flex-column mb-3 w-100\">
                <form action=\"{{ base_url }}/confirmreset\" method=\"POST\">
                  <div class=\"mb-3\">
                    <label for=\"password_reset\" class=\"form-label\"><small><b><i class=\"bi bi-lock-fill\"></i> Password</b></small></label>
                    <input type=\"password\" class=\"form-control\" id=\"password_reset\" name=\"password_reset\">
                  </div>
                  <div class=\"mb-3\">
                    <label for=\"password_reset1\" class=\"form-label\"><small><b><i class=\"bi bi-lock-fill\"></i>Retype Password</b></small></label>
                    <input type=\"password\" class=\"form-control\" id=\"password_reset1\" name=\"password_reset1\">
                  </div>
                <div class=\"mt-4\">
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"width: 100%;\">Submit</button>                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

 


{% endblock %}
  {% block naslov %}
    Reset
  {% endblock %}
", "User/reset.html", "C:\\laragon\\www\\doctorlab\\views\\User\\reset.html");
    }
}
