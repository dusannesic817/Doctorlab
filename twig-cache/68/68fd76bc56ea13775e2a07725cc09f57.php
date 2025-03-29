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
class __TwigTemplate_22b8ebdfd845176830f2a2fd3e10787a extends Template
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

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "



  <body class=\"light-blue\">
    <div class=\"container d-flex justify-content-center align-items-start min-vh-100 pt-5 mt-5\">
      <div class=\"row\">
        <h4 class=\"text-center\"><small><b>Login</b></small></h4>
        <div class=\"col-12 d-flex justify-content-center\">
          <div class=\"card p-4 border-0\" style=\"width: 500px; height: 350px;\">
            <div class=\"card-body d-flex flex-column justify-content-center align-items-center\">
              <div class=\"d-flex flex-column mb-3 w-100\">
                <form action=\"";
        // line 17
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
                   
                  <div class=\"mt-5\">
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
        // line 47
        $this->displayBlock('naslov', $context, $blocks);
        // line 50
        echo "

";
    }

    // line 47
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
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
        return array (  110 => 48,  106 => 47,  100 => 50,  98 => 47,  65 => 17,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/index.html\" %}


{% block main %}




  <body class=\"light-blue\">
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
                   
                  <div class=\"mt-5\">
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

 
  {% block naslov %}
    Login
  {% endblock %}


{% endblock %}", "User/login.html", "C:\\laragon\\www\\doctorlab\\views\\User\\login.html");
    }
}
