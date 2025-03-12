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

/* CaregiverProfile/edit.html */
class __TwigTemplate_f79e32708b217fdc8131cc648ca5f43b extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "CaregiverProfile/edit.html", 1);
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
              <p><small>The confidentiality of your personal information is an absolute priority for Doctolib and
                  guides our daily actions.</small></p>
              <small><a href=\"\" style=\"color: red;\">Confirm your profile</a> <i class=\"bi bi-exclamation-circle-fill\"
                  style=\"color: red;\"></i></small>

            </div>
            <div class=\"col-lg-4\">
              <div class=\"text-center\"><img src=\"../../assets/images/katanac1.png\" alt=\"\" style=\"width:150px; height: 120px;\">
              </div>
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
          <a href=\"#\" class=\"text-decoration-none d-block profile grey\" data-bs-toggle=\"modal\" data-bs-target=\"#name\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i> My Profile</b></small><br><small>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 37), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "surname", [], "any", false, false, false, 37), "html", null, true);
        echo "</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-sticky-fill\"></i> Profile Photo</b></small><br></div>
              
            </div>
            <div class=\"mb-3 col-4\">
              <input class=\"form-control form-control-sm\" id=\"formFileSm\" type=\"file\">
            </div>
        

          <p class=\"mt-4 ms-1\"><b>Login</b></p>
          <hr style=\"margin-bottom: -1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile grey\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-telephone-fill\"></i> Phones</b></small><br><small>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "phone", [], "any", false, false, false, 55), "html", null, true);
        echo "</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile grey\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-envelope-fill\"></i> Email</b></small><br><small>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "email", [], "any", false, false, false, 62), "html", null, true);
        echo "</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile grey\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-shield-lock-fill\"></i> Password</b></small><br><small><i class=\"bi bi-three-dots\"></i><i class=\"bi bi-three-dots\"></i></small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <p class=\"mt-4 ms-1\"><b>Caregiver Information</b></p>
          <hr style=\"margin-bottom: -1px;\">
         
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-credit-card-2-back-fill\"></i> Your University</b></small><br></div>
            </div>
            <select class=\"form-select form-select-sm\" aria-label=\"Small select example\">
              <option selected>Provide Your University</option>
              ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["data"]);
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 82
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            </select>
          
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-credit-card-2-back-fill\"></i> Doctor</b></small><br></div>
            </div>
            <select class=\"form-select form-select-sm\" aria-label=\"Small select example\">
              <option selected>Provide Your Docotor</option>
              ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["caregiverData"] ?? null), "doctors", [], "any", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
            // line 92
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "title", [], "any", false, false, false, 92), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "title", [], "any", false, false, false, 92), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "             
            </select>

            <div class=\"mt-2\">
              <div><small><b class=\"teget p-2 \"><i class=\"bi bi-credit-card-2-back-fill\"></i> Diploma</b></small><br></div>
              <div class=\"mb-3 col-4\">
                <input class=\"form-control form-control-sm mt-2\" id=\"formFileSm\" type=\"file\">
              </div>
            </div>

          <p class=\"mt-4 ms-1\"><b>Place where you work</b></p>
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
          <hr class=\"mb-5\" style=\"margin-bottom: -1px; margin-top:-1px;\">
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"name\" tabindex=\"-1\" aria-labelledby=\"change_name\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\" id=\"change_name\"><small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i>Edit My Profile</b></small><br><small></small></h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
        <label for=\"\" class=\"mb-2 ms-1\"><small><b>Change my name</b></small></label>
        <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\"Dusan Nesic\" aria-label=\".form-control-sm example\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>





";
    }

    public function getTemplateName()
    {
        return "CaregiverProfile/edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 94,  167 => 92,  163 => 91,  154 => 84,  143 => 82,  139 => 81,  117 => 62,  107 => 55,  84 => 37,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "CaregiverProfile/edit.html", "C:\\laragon\\www\\auction\\views\\CaregiverProfile\\edit.html");
    }
}
