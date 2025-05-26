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

/* User/forgotPassword.html */
class __TwigTemplate_b3eda120402c5278984021a273184d59 extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "User/forgotPassword.html", 1);
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
        <h4 class=\"text-center\"><small><b>Reset Password</b></small></h4>
        <div class=\"col-12 d-flex justify-content-center\">
          <div class=\"card p-4 border-0\" style=\"width: 500px; height: 350px;\">
            <div class=\"card-body d-flex flex-column justify-content-center align-items-center\">
              <div class=\"d-flex flex-column mb-3 w-100\">
                <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/user/resetpassword\" method=\"POST\">
                  <div class=\"mb-3\">
                    <label for=\"email_reset\" class=\"form-label\"><small><b><i class=\"bi bi-envelope-fill me-1\"></i>Email address</b></small></label>
                    <input type=\"email\" class=\"form-control\" id=\"email_reset\" name=\"email_reset\" aria-describedby=\"emailHelp\">
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

    // line 34
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    Forhot Password
  ";
    }

    public function getTemplateName()
    {
        return "User/forgotPassword.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 35,  86 => 34,  61 => 13,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/index.html\" %}


{% block main %}
  <body class=\"light-blue\" style='background-color: #e4ecf7 !important'>
    <div class=\"container d-flex justify-content-center align-items-start min-vh-100 pt-5 mt-5\">
      <div class=\"row\">
        <h4 class=\"text-center\"><small><b>Reset Password</b></small></h4>
        <div class=\"col-12 d-flex justify-content-center\">
          <div class=\"card p-4 border-0\" style=\"width: 500px; height: 350px;\">
            <div class=\"card-body d-flex flex-column justify-content-center align-items-center\">
              <div class=\"d-flex flex-column mb-3 w-100\">
                <form action=\"{{base_url}}/user/resetpassword\" method=\"POST\">
                  <div class=\"mb-3\">
                    <label for=\"email_reset\" class=\"form-label\"><small><b><i class=\"bi bi-envelope-fill me-1\"></i>Email address</b></small></label>
                    <input type=\"email\" class=\"form-control\" id=\"email_reset\" name=\"email_reset\" aria-describedby=\"emailHelp\">
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
    Forhot Password
  {% endblock %}
", "User/forgotPassword.html", "C:\\laragon\\www\\doctorlab\\views\\User\\forgotPassword.html");
    }
}
