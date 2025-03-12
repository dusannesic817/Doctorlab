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

/* UserProfile/show.html */
class __TwigTemplate_2d0fba3cccfa9a1cb761e922b30e1fda extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "UserProfile/show.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "

<div class=\"container\">
  <div class=\"row d-flex justify-content-center mt-5\">
    <div class=\"col-lg-8\">
      <div class=\"card ms-2\" style=\"background-color: #ebf6fc;\">
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-lg-8\">
              <p><b>Your health. Your data</b></p>
              <p><small>The confidentiality of your personal information is an absolute priority for Doctolib and guides our daily actions.</small></p>
              
              
            </div>
            <div class=\"col-lg-4\">
                <div class=\"text-center\"><img src=\"../../assets/images/katanac1.png\" alt=\"\" style=\"width:150px; height: 120px;\"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class=\"col-lg-8 mt-5\">
      <div class=\"card border-0\">
        <div class=\"card-body\">
          <p class=\"ms-1\"><b>Personal information</b></p>
          <hr style=\"margin-bottom: -1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i> My Profile</b></small><br><small >";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "name", [], "any", false, false, false, 34), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "surname", [], "any", false, false, false, 34), "html", null, true);
        echo "</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>   
          <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-sticky-fill\"></i> My Rights</b></small><br><small>See your rights</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          
          <p class=\"mt-4 ms-1\"><b>Login</b></p>
          <hr style=\"margin-bottom: -1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-telephone-fill\"></i> Phones</b></small><br><small>See your rights</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-envelope-fill\"></i> Email</b></small><br><small >";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", [], "any", false, false, false, 57), "html", null, true);
        echo "</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-shield-lock-fill\"></i> Password</b></small><br><small >See your rights</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <p class=\"mt-4 ms-1\"><b>Payments and Billing</b></p>
          <hr style=\"margin-bottom: -1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-credit-card-2-back-fill\"></i> Payment Methods</b></small><br><small >See your rights</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-credit-card-2-back-fill\"></i> Online Payment Settings</b></small><br><small >See your rights</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>

          <p class=\"mt-4 ms-1\"><b>Confidentiality</b></p>
          <hr style=\"margin-bottom: -1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small class=\"grey\">Delete Account</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small class=\"grey\">Legal Information</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <hr class=\"mb-5\"style=\"margin-bottom: -1px; margin-top:-1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b style=\"color: rgb(145, 25, 25);\"><i class=\"bi bi-box-arrow-right\"></i> Log Out</b></small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          
        </div>
      </div>
    </div>
  </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "UserProfile/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 57,  81 => 34,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "UserProfile/show.html", "C:\\laragon\\www\\auction\\views\\UserProfile\\show.html");
    }
}
