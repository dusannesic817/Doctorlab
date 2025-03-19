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

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<form action=\"/caregiver/update/";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "user_id", [], "any", false, false, false, 7), "html", null, true);
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
                
            </div>
            <div class=\"col-lg-4\">
                <div class=\"text-center\">
                  ";
        // line 22
        if ((null === twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "profile_photo", [], "any", false, false, false, 22))) {
            // line 23
            echo "                    <img id=\"preview\" class=\"rounded\" src=\"../../assets/images/katanac1.png\" alt=\"Preview Image\" style=\"width:150px; height: 130px;\">
                  ";
        } else {
            // line 25
            echo "                  <img id=\"preview\" class=\"rounded\" src=\"../../assets/uploads/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "profile_photo", [], "any", false, false, false, 25), "html", null, true);
            echo "\" alt=\"Preview Image\" style=\"width:150px; height: 130px;\">
                  ";
        }
        // line 27
        echo "                
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
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 41), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "surname", [], "any", false, false, false, 41), "html", null, true);
        echo "</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-sticky-fill\"></i> Profile Photo</b></small><br></div>
              
            </div>
            <div class=\"mb-3 col-3\">
              <div><input class=\"form-control form-control-sm\" id=\"image\" name=\"profile_photo\"  type=\"file\" accept=\"image/*\"></div>
              <div class=\"mt-1 ms-1 grey\"><small>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "profile_photo", [], "any", false, false, false, 52), "html", null, true);
        echo "</small></div> 
            </div>
           
        

          <p class=\"mt-4 ms-1\"><b>Login</b></p>
          <hr style=\"margin-bottom: -1px;\">
          <a href=\"#\" class=\"text-decoration-none d-block profile grey\" data-bs-toggle=\"modal\" data-bs-target=\"#phone\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-telephone-fill\"></i> Phones</b></small><br><small>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "phone", [], "any", false, false, false, 61), "html", null, true);
        echo "</small></div>
              <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
            </div>
          </a>
          <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
          <a href=\"\" class=\"text-decoration-none d-block profile grey\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-envelope-fill\"></i> Email</b></small><br><small>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "email", [], "any", false, false, false, 68), "html", null, true);
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
              ";
        // line 86
        if ((null === twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "university_data", [], "any", false, false, false, 86))) {
            // line 87
            echo "              <option selected>Provide Your University</option>
              ";
        } else {
            // line 89
            echo "              <option selected>";
            echo twig_escape_filter($this->env, ($context["university"] ?? null), "html", null, true);
            echo "</option>
              ";
        }
        // line 91
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["data"]);
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 92
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
        // line 94
        echo "            </select>
          
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-credit-card-2-back-fill\"></i> Doctor</b></small><br></div>
            </div>
            <select class=\"form-select form-select-sm\" name=\"title\" aria-label=\"Small select example\">
              ";
        // line 100
        if ((null === twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "caregiver_data", [], "any", false, false, false, 100))) {
            // line 101
            echo "              <option selected>Provide Your Docotor</option>
              ";
        } else {
            // line 103
            echo "              <option selected>";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</option>
              ";
        }
        // line 105
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["caregiverData"] ?? null), "doctors", [], "any", false, false, false, 105));
        foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
            // line 106
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "title", [], "any", false, false, false, 106), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "title", [], "any", false, false, false, 106), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "             
            </select>

            <div class=\"mt-2\">
              <div><small><b class=\"teget p-2 \"><i class=\"bi bi-credit-card-2-back-fill\"></i> Diploma</b></small><br><small class=\"grey ms-1\">Please provide PDF file</small></div>
              <div class=\"mb-3 col-3\">
                <div><input class=\"form-control form-control-sm mt-2\" id=\"diploma_pdf\" name=\"diploma_pdf\" type=\"file\"></div>
                <div class=\"mt-1 ms-1 grey\"><small>";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "diploma_pdf", [], "any", false, false, false, 115), "html", null, true);
        echo "</small></div>
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
          <!-- Forma treba da bude pravilno postavljena -->
          <form action=\"/caregiver/update/";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "user_id", [], "any", false, false, false, 151), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"modal-header\">
              <h1 class=\"modal-title fs-5\" id=\"change_name\"><small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i>Edit My Profile</b></small><br><small></small></h1>
              <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
              <label for=\"\" class=\"mb-2 ms-1\"><small><b>Change my name</b></small></label>
              <input class=\"form-control form-control-sm\" type=\"text\" name=\"new_name\" placeholder=\"";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 158), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "surname", [], "any", false, false, false, 158), "html", null, true);
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
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "user_id", [], "any", false, false, false, 174), "html", null, true);
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
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "phone", [], "any", false, false, false, 183), "html", null, true);
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
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "user_id", [], "any", false, false, false, 199), "html", null, true);
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
        return array (  332 => 199,  313 => 183,  301 => 174,  280 => 158,  270 => 151,  231 => 115,  222 => 108,  211 => 106,  206 => 105,  200 => 103,  196 => 101,  194 => 100,  186 => 94,  175 => 92,  170 => 91,  164 => 89,  160 => 87,  158 => 86,  137 => 68,  127 => 61,  115 => 52,  99 => 41,  83 => 27,  77 => 25,  73 => 23,  71 => 22,  53 => 7,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "CaregiverProfile/edit.html", "C:\\laragon\\www\\auction\\views\\CaregiverProfile\\edit.html");
    }
}
