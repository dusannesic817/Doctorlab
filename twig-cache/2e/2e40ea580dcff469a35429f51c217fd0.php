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
<body class=\"light-blue\">
  <div class=\"container d-flex justify-content-center align-items-start min-vh-100 pt-5 mt-2\">
    <div class=\"row\">
      <h4 class=\"text-center\"><small><b>Sing Up</b></small></h4>
      <div class=\"col-12 d-flex justify-content-center\">
        <div class=\"card p-4 border-0\" style=\"width: 500px; height: 800px;\">
          <div class=\"card-body d-flex flex-column justify-content-center align-items-center\">
            <div class=\"d-flex flex-column mb-3 w-100\">
              <form action=\"/user/register\" method=\"POST\">
                <div class=\"mb-3\">
                  <label for=\"exampleInputEmail1\" class=\"form-label\"><small class=\"ms-1\"><b><i class=\"bi bi-envelope-fill\"></i> Email
                        address</b></small></label>
                  <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Your email\">
                  <div id=\"emailHelp\" class=\"form-text\">We'll never share your email with anyone else.</div>
                </div>
                <div class=\"mb-1\">
                  <label for=\"exampleInputPassword1\" class=\"form-label\"><small
                      class=\"ms-1\"><i class=\"bi bi-person-fill\"></i> <b>Identity</b></small></label>
                  <input type=\"text\" class=\"form-control\" id=\"first_name\" name=\"first_name\" placeholder=\"First name\">
                  <div id=\"emailHelp\" class=\"form-text\">We'll never share your email with anyone else.</div>
                </div>
                <div class=\"mb-1\">
                  <input type=\"text\" class=\"form-control\" id=\"last_name\" name=\"last_name\" placeholder=\"Last Name\">
                  <div id=\"emailHelp\" class=\"form-text\">We'll never share your email with anyone else.</div>
                </div>
                
                <div class=\"d-flex flex-row mb-2 gap-2\">
                  <div class=\"form-check border rounded w-50 p-2\">
                    <input class=\"form-check-input ms-2 me-2\" type=\"radio\" name=\"gender\" id=\"female\" value=\"female\">
                    <label class=\"form-check-label\" for=\"female\">Female</label>
                  </div>
                  <div class=\"form-check border rounded w-50 p-2\">
                    <input class=\"form-check-input ms-2 me-2\" type=\"radio\" name=\"gender\" id=\"male\" value=\"male\" checked>
                    <label class=\"form-check-label\" for=\"male\">Male</label>
                  </div>
                </div>
                
                <div class=\"mb-3\">
                  <div class=\"border rounded w-100 p-1\">
                    <input type=\"text\" id=\"datum\" name=\"birth\" class=\"form-control border-0\" placeholder=\"Date of Birth\"
                      onfocus=\"this.type='date'; setTimeout(() => this.showPicker(), 0);\"
                      onblur=\"if(!this.value){this.type='text'; this.placeholder='Date of Birth';}\">
                  </div>
                </div>
                <div class=\"mb-1\">
                  <label for=\"exampleInputPassword1\" class=\"form-label\"><small class=\"ms-1\"><b><i class=\"bi bi-lock-fill\"></i> Password</b></small></label>
                  <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\"   placeholder=\"Password\">
                  <div id=\"emailHelp\" class=\"form-text\">We'll never share your email with anyone else.</div>
                </div>
                <div class=\"mb-5\">            
                  <input type=\"password\" class=\"form-control\" id=\"retype_password\"  name=\"retype_password\" placeholder=\"Retype Password\">
                  <div id=\"emailHelp\" class=\"form-text\">We'll never share your email with anyone else.</div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary w-100\">Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>






  <script>
    document.getElementById('datum').addEventListener('change', function () {
      document.getElementById('prikazDatuma').textContent = this.value;
    });
  </script>

</body>












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
