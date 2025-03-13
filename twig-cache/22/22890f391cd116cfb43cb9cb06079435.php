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

/* User/authenticate.html */
class __TwigTemplate_3dd2510c94f3febf71e2c46887226a7c extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "User/authenticate.html", 1);
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
              <form action=\"/user/login\" method=\"POST\">
                <div class=\"mb-3\">
                  <label for=\"input_email\" class=\"form-label\"><small><b><small class=\"ms-1\"><b><i class=\"bi bi-envelope-fill\"></i> Email address</b></small></label>
                  <input type=\"email\" class=\"form-control\" id=\"email_login\" name=\"email_login\" aria-describedby=\"emailHelp\">
                  <div id=\"emailHelp\" class=\"form-text\">";
        // line 18
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</div>
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
    }

    public function getTemplateName()
    {
        return "User/authenticate.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "User/authenticate.html", "C:\\laragon\\www\\auction\\views\\User\\authenticate.html");
    }
}
