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
<form action=\"/caregiver/update/";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "user_id", [], "any", false, false, false, 6), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
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
                <small><a href=\"\" style=\"color: red;\">Confirm your profile</a> 
                    <i class=\"bi bi-exclamation-circle-fill\" style=\"color: red;\"></i>
                </small>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"text-center\">
                    <img id=\"preview\" src=\"../../assets/images/katanac1.png\" alt=\"Preview Image\" style=\"width:150px; height: 120px;\">
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
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 38), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "surname", [], "any", false, false, false, 38), "html", null, true);
        echo "</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-sticky-fill\"></i> Profile Photo</b></small><br></div>
              
            </div>
            <div class=\"mb-3 col-4\">
              <input class=\"form-control form-control-sm\" id=\"image\" name=\"profile_photo\"  type=\"file\" accept=\"image/*\">
          </div>
        

          <p class=\"mt-4 ms-1\"><b>Login</b></p>
          <hr style=\"margin-bottom: -1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile grey\" data-bs-toggle=\"modal\" data-bs-target=\"#phone\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-telephone-fill\"></i> Phones</b></small><br><small>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "phone", [], "any", false, false, false, 56), "html", null, true);
        echo "</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
          <a href=\"\" class=\"text-decoration-none d-block profile grey\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-envelope-fill\"></i> Email</b></small><br><small>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "email", [], "any", false, false, false, 63), "html", null, true);
        echo "</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile grey\"  data-bs-toggle=\"modal\" data-bs-target=\"#password\">
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
            <select class=\"form-select form-select-sm\" name=\"university\"  aria-label=\"Small select example\">
              <option selected>Provide Your University</option>
              ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["data"]);
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 83
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
        // line 85
        echo "            </select>
          
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-credit-card-2-back-fill\"></i> Doctor</b></small><br></div>
            </div>
            <select class=\"form-select form-select-sm\" name=\"title\" aria-label=\"Small select example\">
              <option selected>Provide Your Docotor</option>
              ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["caregiverData"] ?? null), "doctors", [], "any", false, false, false, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
            // line 93
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "title", [], "any", false, false, false, 93), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "title", [], "any", false, false, false, 93), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "             
            </select>

            <div class=\"mt-2\">
              <div><small><b class=\"teget p-2 \"><i class=\"bi bi-credit-card-2-back-fill\"></i> Diploma</b></small><br><small class=\"grey\">Please provide PDF file</small></div>
              <div class=\"mb-3 col-4\">
                <input class=\"form-control form-control-sm mt-2\" id=\"diploma_pdf\" name=\"diploma_pdf\" type=\"file\">
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

          <button class=\"btn btn-primary\" type=\"submit\">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>

  
    <!--Name and Surname modal-->
    <div class=\"modal fade\" id=\"name\" tabindex=\"-1\" aria-labelledby=\"change_name\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
          <form action=\"/caregiver/update/";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "user_id", [], "any", false, false, false, 135), "html", null, true);
        echo "\" method=\"POST\"></form>
          <div class=\"modal-header\">
            <h1 class=\"modal-title fs-5\" id=\"change_name\"><small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i>Edit My Profile</b></small><br><small></small></h1>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          <div class=\"modal-body\">
            <label for=\"\" class=\"mb-2 ms-1\"><small><b>Change my name</b></small></label>
            <input class=\"form-control form-control-sm\" type=\"text\" name=\"new_name\" placeholder=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 142), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "surname", [], "any", false, false, false, 142), "html", null, true);
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
          <form action=\"/caregiver/update/";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "user_id", [], "any", false, false, false, 158), "html", null, true);
        echo "\" method=\"POST\"></form>
          <div class=\"modal-header\">
            <h1 class=\"modal-title fs-5\" id=\"change_phone\"><small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i>Edit My Profile</b></small><br><small></small></h1>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          <div class=\"modal-body\">
            <label for=\"\" class=\"mb-2 ms-1\"><small><b>Change my phone</b></small></label>
            <input class=\"form-control form-control-sm\" type=\"text\" name=\"phone\" aria-label=\".form-control-sm example\" value=\"";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "phone", [], "any", false, false, false, 165), "html", null, true);
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
      <form action=\"/caregiver/update/";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "user_id", [], "any", false, false, false, 180), "html", null, true);
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


<script>
  document.getElementById(\"image\").addEventListener(\"change\", function(event) {
      var file = event.target.files[0]; // Uzimamo prvi fajl
      if (file) {
          var reader = new FileReader();
          reader.onload = function(e) {
              document.getElementById(\"preview\").src = e.target.result; // Postavljamo sliku u <img>
          };
          reader.readAsDataURL(file); // Čitamo fajl kao URL
      }
  });
  </script>
  


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
        return array (  283 => 180,  265 => 165,  255 => 158,  234 => 142,  224 => 135,  182 => 95,  171 => 93,  167 => 92,  158 => 85,  147 => 83,  143 => 82,  121 => 63,  111 => 56,  88 => 38,  53 => 6,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "CaregiverProfile/edit.html", "C:\\laragon\\www\\auction\\views\\CaregiverProfile\\edit.html");
    }
}
