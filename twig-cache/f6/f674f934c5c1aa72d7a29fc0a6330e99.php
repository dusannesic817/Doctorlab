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

/* User/login.html */
class __TwigTemplate_c2496ffdf0329a60d4d99e2adebabf84 extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "User/login.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $this->loadTemplate("./inc/session_alerts/reset_password.html", "User/login.html", 4)->display($context);
        // line 5
        echo "  <body class=\"light-blue\" style='background-color: #e4ecf7 !important'>
    <div class=\"container d-flex justify-content-center align-items-start min-vh-100 pt-5 mt-5\">
      <div class=\"row\">
        <h4 class=\"text-center\"><small><b>Login</b></small></h4>
        <div class=\"col-12 d-flex justify-content-center\">
          <div class=\"card p-4 border-0\" style=\"width: 500px; height: 350px;\">
            <div class=\"card-body d-flex flex-column justify-content-center align-items-center\">
              <div class=\"d-flex flex-column mb-3 w-100\">
                <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/user/login\" method=\"POST\">
                  <div class=\"mb-3\">
                    <label for=\"input_email\" class=\"form-label\"><small><b><small class=\"ms-1\"><b><i class=\"bi bi-envelope-fill\"></i> Email address</b></small></label>
                    <input type=\"email\" class=\"form-control\" id=\"email_login\" name=\"email_login\" aria-describedby=\"emailHelp\">
                    
                  </div>
                  <div class=\"mb-3\">
                    <label for=\"input_password_1\" class=\"form-label\"><small><b><i class=\"bi bi-lock-fill\"></i> Password</b></small></label>
                    <input type=\"password\" class=\"form-control\" id=\"password_login\" name=\"password_login\">
                  </div>
                    <div class=\"text-center\"><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/user/forgotpassword\">Forgot Password?</a></div>
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

    // line 40
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    Login
  ";
    }

    public function getTemplateName()
    {
        return "User/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 41,  97 => 40,  76 => 23,  63 => 13,  53 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/index.html\" %}

{% block main %}
{% include './inc/session_alerts/reset_password.html'%}
  <body class=\"light-blue\" style='background-color: #e4ecf7 !important'>
    <div class=\"container d-flex justify-content-center align-items-start min-vh-100 pt-5 mt-5\">
      <div class=\"row\">
        <h4 class=\"text-center\"><small><b>Login</b></small></h4>
        <div class=\"col-12 d-flex justify-content-center\">
          <div class=\"card p-4 border-0\" style=\"width: 500px; height: 350px;\">
            <div class=\"card-body d-flex flex-column justify-content-center align-items-center\">
              <div class=\"d-flex flex-column mb-3 w-100\">
                <form action=\"{{ base_url }}/user/login\" method=\"POST\">
                  <div class=\"mb-3\">
                    <label for=\"input_email\" class=\"form-label\"><small><b><small class=\"ms-1\"><b><i class=\"bi bi-envelope-fill\"></i> Email address</b></small></label>
                    <input type=\"email\" class=\"form-control\" id=\"email_login\" name=\"email_login\" aria-describedby=\"emailHelp\">
                    
                  </div>
                  <div class=\"mb-3\">
                    <label for=\"input_password_1\" class=\"form-label\"><small><b><i class=\"bi bi-lock-fill\"></i> Password</b></small></label>
                    <input type=\"password\" class=\"form-control\" id=\"password_login\" name=\"password_login\">
                  </div>
                    <div class=\"text-center\"><a href=\"{{ base_url }}/user/forgotpassword\">Forgot Password?</a></div>
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
    Login
  {% endblock %}
", "User/login.html", "C:\\xampp\\htdocs\\Doctorlab\\views\\User\\login.html");
    }
}
