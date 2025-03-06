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

/* User/create.html */
class __TwigTemplate_415710563d3fdc4c0e62949d3cf71603 extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "User/create.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
<form action=\"/user/register\" method=\"POST\">

  <div>
    <label for=\"input_email\">Email</label>
    <input type=\"email\" name=\"reg_email\" id=\"input_email\" required placeholder=\"Please enter your email\">
  </div>

  <div>
    <label for=\"input_forename\">Forename</label>
    <input type=\"text\" name=\"reg_forename\" id=\"input_forename\" required placeholder=\"Please enter your name\">
  </div>

  <div>
    <label for=\"input_surname\">Surname</label>
    <input type=\"text\" name=\"reg_surname\" id=\"input_surname\" required placeholder=\"Please enter your surname\">
  </div>

  <div>
    <label for=\"input_username\">Username</label>
    <input type=\"text\" name=\"reg_username\" id=\"input_username\" required placeholder=\"Please enter your email\">
  </div>
  <div>
    <label for=\"input_address\">Address</label>
    <input type=\"text\" name=\"reg_address\" id=\"input_address\" required placeholder=\"Please enter your address\">
  </div>

  <div>
    <label for=\"input_password_1\">Password</label>
    <input type=\"password\" name=\"reg_password_1\" id=\"input_password_1\" required placeholder=\"Please enter your passsword\">
  </div>

  <div>
    <label for=\"input_password_2\">Password 2</label>
    <input type=\"password\" name=\"reg_password_2\" id=\"input_password_2\" required placeholder=\"Please enter your password2\">
  </div>

  <div>
    <button type=\"submit\">Submit</button>
  </div>


</form>

";
    }

    public function getTemplateName()
    {
        return "User/create.html";
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
        return new Source("", "User/create.html", "C:\\laragon\\www\\auction\\views\\User\\create.html");
    }
}
