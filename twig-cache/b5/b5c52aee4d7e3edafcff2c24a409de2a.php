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
class __TwigTemplate_562dcd7e1501bf9ba94f2aecefbec3fc extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "User/login.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
<form action=\"/user/login\" method=\"POST\">

 

  <div>
    <label for=\"input_username\">Username</label>
    <input type=\"text\" name=\"login_username\" id=\"input_username\" required placeholder=\"Please enter your username\">
  </div>

  <div>
    <label for=\"input_password_1\">Password</label>
    <input type=\"password\" name=\"login_password\" id=\"input_password_1\" required placeholder=\"Please enter your passsword\">
  </div>

 
  <div>
    <button type=\"submit\">Login</button>
  </div>


</form>

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
        return array (  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "User/login.html", "C:\\laragon\\www\\auction\\views\\User\\login.html");
    }
}
