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

/* CaregiverProfile/show.html */
class __TwigTemplate_7c8941106b4a0859f4189e0031b3ed25 extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "CaregiverProfile/show.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
";
        // line 6
        $this->loadTemplate("./inc/edit_banner.html", "CaregiverProfile/show.html", 6)->display($context);
        // line 7
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
              ";
        // line 17
        if (((((null === twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "profile_photo", [], "any", false, false, false, 17)) || (null === twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "diploma_pdf", [], "any", false, false, false, 17))) || (null === twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "caregiver_data", [], "any", false, false, false, 17))) || (null === twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "university_data", [], "any", false, false, false, 17)))) {
            // line 18
            echo "              
              <small><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/caregiver/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "user_id", [], "any", false, false, false, 19), "html", null, true);
            echo "\" style=\"color: red;\">Confirm your profile</a> <i class=\"bi bi-exclamation-circle-fill\" style=\"color: red;\" ></i></small>
              ";
        } else {
            // line 21
            echo "              <small>Confirmed profile <i class=\"bi bi-check-circle-fill\" style=\"color: green;\"></i></small>
              ";
        }
        // line 23
        echo "              
              
            </div>
            <div class=\"col-lg-4\">
                <div class=\"text-center\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/katanac1.png\" alt=\"\" style=\"width:150px; height: 120px;\"></div>
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
          <a href=\"\" class=\"text-decoration-none d-block profile grey\" data-bs-toggle=\"modal\" data-bs-target=\"#name\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i> My Profile</b></small><br><small >";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 41), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "surname", [], "any", false, false, false, 41), "html", null, true);
        echo "</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>   
          <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
          <a href=\"\" class=\"text-decoration-none d-block profile grey\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-sticky-fill\"></i> My Rights</b></small><br><small>See your rights</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          

          <p class=\"mt-4 ms-1\"><b>Login</b></p>
          <hr style=\"margin-bottom: -1px;\">
          <a href=\"\" class=\"text-decoration-none d-block profile grey\"  data-bs-toggle=\"modal\" data-bs-target=\"#phone\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-telephone-fill\"></i> Phones</b></small><br><small>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "phone", [], "any", false, false, false, 58), "html", null, true);
        echo "</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile grey\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-envelope-fill\"></i> Email</b></small><br><small >";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "email", [], "any", false, false, false, 65), "html", null, true);
        echo "</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile grey\" data-bs-toggle=\"modal\" data-bs-target=\"#password\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-shield-lock-fill\"></i> Password</b></small><br><small ><i class=\"bi bi-three-dots\" style=\"font-size: 24px;\"></i><i class=\"bi bi-three-dots\" style=\"font-size: 24px;\"></i></small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <p class=\"mt-4 ms-1\"><b>Payments and Billing</b></p>
          <hr style=\"margin-bottom: -1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile grey\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-credit-card-2-back-fill\"></i> Payment Methods</b></small><br><small >See your rights</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile grey\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-credit-card-2-back-fill\"></i> Online Payment Settings</b></small><br><small >See your rights</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>

          <p class=\"mt-4 ms-1\"><b>Confidentiality</b></p>
          <hr style=\"margin-bottom: -1px;\">
          <a href=\"\" class=\"text-decoration-none d-block profile\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_profile\">
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
          <a href=\"";
        // line 108
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/caregiver/logout\" class=\"text-decoration-none d-block profile\">
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

    <!--Name and Surname modal-->
    <div class=\"modal fade\" id=\"name\" tabindex=\"-1\" aria-labelledby=\"change_name\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
          <form action=\"";
        // line 125
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/caregiver/update/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "user_id", [], "any", false, false, false, 125), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"modal-header\">
              <h1 class=\"modal-title fs-5\" id=\"change_name\"><small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i>Edit My Profile</b></small><br><small></small></h1>
              <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
              <label for=\"\" class=\"mb-2 ms-1\"><small><b>Change my name</b></small></label>
              <input class=\"form-control form-control-sm\" type=\"text\" name=\"new_name\" placeholder=\"";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 132), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "surname", [], "any", false, false, false, 132), "html", null, true);
        echo "\" aria-label=\".form-control-sm example\">
            </div>
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
              <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--Phone-->
<div class=\"modal fade\" id=\"phone\" tabindex=\"-1\" aria-labelledby=\"change_phone\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <form action=\"";
        // line 146
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/caregiver/update/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "user_id", [], "any", false, false, false, 146), "html", null, true);
        echo "\" method=\"POST\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"change_phone\">
            <small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i>Edit My Profile</b></small><br><small></small>
          </h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
          <label for=\"\" class=\"mb-2 ms-1\"><small><b>Change my phone</b></small></label>
          <input class=\"form-control form-control-sm\" type=\"text\" name=\"phone\" aria-label=\".form-control-sm example\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "phone", [], "any", false, false, false, 155), "html", null, true);
        echo "\">
        </div>
        <div class=\"modal-footer\">
          <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Password Change Modal -->
<div class=\"modal fade\" id=\"password\" tabindex=\"-1\" aria-labelledby=\"change_password\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <form action=\"";
        // line 171
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/caregiver/update/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "user_id", [], "any", false, false, false, 171), "html", null, true);
        echo "\" method=\"POST\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"change_password\">
            <small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i> Edit My Profile</b></small>
          </h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
          <label for=\"old_password\" class=\"mb-2 ms-1\"><small><b>Change my password</b></small></label>
          <input class=\"form-control form-control-sm mb-2\" type=\"password\" name=\"old_password\" placeholder=\"Your old password\" required>

          <input class=\"form-control form-control-sm\" type=\"password\" name=\"new_password\" placeholder=\"Your new password\" required>
        </div>
        <div class=\"modal-footer\">
          <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>






";
    }

    // line 199
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 200
        echo "Profile
";
    }

    public function getTemplateName()
    {
        return "CaregiverProfile/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 200,  303 => 199,  269 => 171,  250 => 155,  236 => 146,  217 => 132,  205 => 125,  185 => 108,  139 => 65,  129 => 58,  107 => 41,  90 => 27,  84 => 23,  80 => 21,  73 => 19,  70 => 18,  68 => 17,  56 => 7,  54 => 6,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "CaregiverProfile/show.html", "C:\\laragon\\www\\doctorlab\\views\\CaregiverProfile\\show.html");
    }
}
