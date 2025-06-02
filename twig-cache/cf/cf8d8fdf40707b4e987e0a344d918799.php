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
class __TwigTemplate_ef0ddbf4fa78c87c3895315fdfd1b6ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'caregiver' => [$this, 'block_caregiver'],
            'naslov' => [$this, 'block_naslov'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_global/caregiver_index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_global/caregiver_index.html", "CaregiverProfile/edit.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_caregiver($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/caregiver/update/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "user_id", [], "any", false, false, false, 5), "html", null, true);
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
        // line 20
        if ((null === twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "profile_photo", [], "any", false, false, false, 20))) {
            // line 21
            echo "                  <img id=\"preview\" class=\"object-fit-cover border rounded\"
                    src=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/assets/images/katanac1.png\" alt=\"Preview Image\"
                    style=\"width:150px; height: 130px;\">
                  ";
        } else {
            // line 25
            echo "                  <img id=\"preview\" class=\"object-fit-cover border rounded\"
                    src=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/assets/uploads/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "profile_photo", [], "any", false, false, false, 26), "html", null, true);
            echo "\" alt=\"Preview Image\"
                    style=\"width:150px; height: 130px;\">
                  ";
        }
        // line 29
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
                <div><small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i> My
                      Profile</b></small><br><small>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 44), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "surname", [], "any", false, false, false, 44), "html", null, true);
        echo "</small></div>
                <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
              </div>
            </a>
            <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-sticky-fill\"></i> Profile Photo</b></small><br></div>

            </div>
            <div class=\"mb-3 col-3\">
              <div><input class=\"form-control form-control-sm\" id=\"image\" name=\"profile_photo\" type=\"file\"
                  accept=\"image/*\"></div>
              <div class=\"mt-1 ms-1 grey\"><small>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "profile_photo", [], "any", false, false, false, 56), "html", null, true);
        echo "</small></div>
            </div>



            <p class=\"mt-4 ms-1\"><b>Login</b></p>
            <hr style=\"margin-bottom: -1px;\">
            <a href=\"#\" class=\"text-decoration-none d-block profile grey\" data-bs-toggle=\"modal\"
              data-bs-target=\"#phone\">
              <div class=\"d-flex justify-content-between p-2 rounded\">
                <div><small><b class=\"teget\"><i class=\"bi bi-telephone-fill\"></i>
                      Phones</b></small><br><small>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "phone", [], "any", false, false, false, 67), "html", null, true);
        echo "</small></div>
                <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
              </div>
            </a>
            <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
            <a href=\"\" class=\"text-decoration-none d-block profile grey\">
              <div class=\"d-flex justify-content-between p-2 rounded\">
                <div><small><b class=\"teget\"><i class=\"bi bi-envelope-fill\"></i>
                      Email</b></small><br><small>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "email", [], "any", false, false, false, 75), "html", null, true);
        echo "</small></div>
                <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
              </div>
            </a>
            <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
            <a href=\"#\" class=\"text-decoration-none d-block profile grey\" data-bs-toggle=\"modal\"
              data-bs-target=\"#password\">
              <div class=\"d-flex justify-content-between p-2 rounded\">
                <div><small><b class=\"teget\"><i class=\"bi bi-shield-lock-fill\"></i> Password</b></small><br><small><i
                      class=\"bi bi-three-dots\"></i><i class=\"bi bi-three-dots\"></i></small></div>
                <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
              </div>
            </a>
            <p class=\"mt-4 ms-1\"><b>Caregiver Information</b></p>
            <hr style=\"margin-bottom: -1px;\">

            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-credit-card-2-back-fill\"></i> Your University</b></small><br>
              </div>
            </div>
            <select class=\"form-select form-select-sm\" name=\"university\" aria-label=\"Small select example\">
              ";
        // line 96
        if ((null === twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "university_data", [], "any", false, false, false, 96))) {
            // line 97
            echo "              <option selected>Provide Your University</option>
              ";
        } else {
            // line 99
            echo "              <option selected>";
            echo twig_escape_filter($this->env, ($context["university"] ?? null), "html", null, true);
            echo "</option>
              ";
        }
        // line 101
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["data"]);
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 102
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
        // line 104
        echo "            </select>

            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-credit-card-2-back-fill\"></i> Doctor</b></small><br></div>
            </div>
            <select class=\"form-select form-select-sm\" name=\"title\" aria-label=\"Small select example\">
              ";
        // line 110
        if ((null === twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "caregiver_data", [], "any", false, false, false, 110))) {
            // line 111
            echo "              <option selected>Provide Your Docotor</option>
              ";
        } else {
            // line 113
            echo "              <option selected>";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</option>
              ";
        }
        // line 115
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["caregiverData"] ?? null), "doctors", [], "any", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
            // line 116
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "title", [], "any", false, false, false, 116), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "title", [], "any", false, false, false, 116), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
            </select>

            <div class=\"mt-2\">
              <div><small><b class=\"teget p-2 \"><i class=\"bi bi-credit-card-2-back-fill\"></i>
                    Diploma</b></small><br><small class=\"grey ms-1\">Please provide PDF file</small></div>
              <div class=\"mb-3 col-3\">
                <div><input class=\"form-control form-control-sm mt-2\" id=\"diploma_pdf\" name=\"diploma_pdf\" type=\"file\">
                </div>
                <div class=\"mt-1 ms-1 grey\"><small>";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "diploma_pdf", [], "any", false, false, false, 127), "html", null, true);
        echo "</small></div>
              </div>
            </div>

            <p class=\"mt-4 ms-1\"><b>Place where you work</b></p>
            <div class=\"mb-3\">

              <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\"Clinic Name\" name=\"clinic\"
                aria-label=\".form-control-sm example\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "clinic_name", [], "any", false, false, false, 135), "html", null, true);
        echo "\">

            </div>
            <div class=\"mb-3\">

              <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\"City\" name=\"clinic_city\"
                aria-label=\".form-control-sm example\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "city", [], "any", false, false, false, 141), "html", null, true);
        echo "\">

            </div>
            <div class=\"mb-5\">

              <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\"Address\" name=\"clinic_address\"
                aria-label=\".form-control-sm example\" value=\"";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "address", [], "any", false, false, false, 147), "html", null, true);
        echo "\">

            </div>
            <hr style=\"margin-bottom: -1px;\">
            <a href=\"\" class=\"text-decoration-none d-block profile\">
              <div class=\"d-flex justify-content-between p-2 rounded\">
                <div><small class=\"grey\">Delete Account</small></div>
                <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
              </div>
            </a>
            <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
            <a href=\"\" class=\"text-decoration-none d-block profile\">
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
      <form action=\"";
        // line 181
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/caregiver/update/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "user_id", [], "any", false, false, false, 181), "html", null, true);
        echo "\" method=\"POST\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"change_name\"><small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i>Edit My
                Profile</b></small><br><small></small></h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
          <label for=\"\" class=\"mb-2 ms-1\"><small><b>Change my name</b></small></label>
          <input class=\"form-control form-control-sm\" type=\"text\" name=\"new_name\"
            placeholder=\"";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 190), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "surname", [], "any", false, false, false, 190), "html", null, true);
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
        // line 206
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/caregiver/update/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "user_id", [], "any", false, false, false, 206), "html", null, true);
        echo "\" method=\"POST\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"change_phone\">
            <small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i>Edit My Profile</b></small><br><small></small>
          </h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
          <label for=\"\" class=\"mb-2 ms-1\"><small><b>Change my phone</b></small></label>
          <input class=\"form-control form-control-sm\" type=\"text\" name=\"phone\" aria-label=\".form-control-sm example\"
            value=\"";
        // line 216
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "phone", [], "any", false, false, false, 216), "html", null, true);
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
        // line 232
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/caregiver/update/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "user_id", [], "any", false, false, false, 232), "html", null, true);
        echo "\" method=\"POST\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"change_password\">
            <small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i> Edit My Profile</b></small>
          </h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
          <label for=\"old_password\" class=\"mb-2 ms-1\"><small><b>Change my password</b></small></label>
          <input class=\"form-control form-control-sm mb-2\" type=\"password\" name=\"old_password\"
            placeholder=\"Your old password\" required>

          <input class=\"form-control form-control-sm\" type=\"password\" name=\"new_password\"
            placeholder=\"Your new password\" required>
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
  document.getElementById(\"image\").addEventListener(\"change\", function (event) {
    var file = event.target.files[0];
    if (file) {
      var reader = new FileReader();
      reader.onload = function (e) {
        document.getElementById(\"preview\").src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  });
</script>




";
    }

    // line 274
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 275
        echo "Settings
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
        return array (  441 => 275,  437 => 274,  389 => 232,  370 => 216,  355 => 206,  334 => 190,  320 => 181,  283 => 147,  274 => 141,  265 => 135,  254 => 127,  243 => 118,  232 => 116,  227 => 115,  221 => 113,  217 => 111,  215 => 110,  207 => 104,  196 => 102,  191 => 101,  185 => 99,  181 => 97,  179 => 96,  155 => 75,  144 => 67,  130 => 56,  113 => 44,  96 => 29,  88 => 26,  85 => 25,  79 => 22,  76 => 21,  74 => 20,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/caregiver_index.html\" %}

{% block caregiver %}

<form action=\"{{ base_url }}/caregiver/update/{{caregiver.user_id}}\" method=\"POST\" enctype=\"multipart/form-data\">
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
                  {%if caregiver.profile_photo is null%}
                  <img id=\"preview\" class=\"object-fit-cover border rounded\"
                    src=\"{{ base_url }}/assets/images/katanac1.png\" alt=\"Preview Image\"
                    style=\"width:150px; height: 130px;\">
                  {%else%}
                  <img id=\"preview\" class=\"object-fit-cover border rounded\"
                    src=\"{{ base_url }}/assets/uploads/images/{{ caregiver.profile_photo }}\" alt=\"Preview Image\"
                    style=\"width:150px; height: 130px;\">
                  {%endif%}

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
                <div><small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i> My
                      Profile</b></small><br><small>{{caregiver.name}} {{caregiver.surname}}</small></div>
                <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
              </div>
            </a>
            <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-sticky-fill\"></i> Profile Photo</b></small><br></div>

            </div>
            <div class=\"mb-3 col-3\">
              <div><input class=\"form-control form-control-sm\" id=\"image\" name=\"profile_photo\" type=\"file\"
                  accept=\"image/*\"></div>
              <div class=\"mt-1 ms-1 grey\"><small>{{caregiver.profile_photo}}</small></div>
            </div>



            <p class=\"mt-4 ms-1\"><b>Login</b></p>
            <hr style=\"margin-bottom: -1px;\">
            <a href=\"#\" class=\"text-decoration-none d-block profile grey\" data-bs-toggle=\"modal\"
              data-bs-target=\"#phone\">
              <div class=\"d-flex justify-content-between p-2 rounded\">
                <div><small><b class=\"teget\"><i class=\"bi bi-telephone-fill\"></i>
                      Phones</b></small><br><small>{{caregiver.phone}}</small></div>
                <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
              </div>
            </a>
            <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
            <a href=\"\" class=\"text-decoration-none d-block profile grey\">
              <div class=\"d-flex justify-content-between p-2 rounded\">
                <div><small><b class=\"teget\"><i class=\"bi bi-envelope-fill\"></i>
                      Email</b></small><br><small>{{caregiver.email}}</small></div>
                <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
              </div>
            </a>
            <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
            <a href=\"#\" class=\"text-decoration-none d-block profile grey\" data-bs-toggle=\"modal\"
              data-bs-target=\"#password\">
              <div class=\"d-flex justify-content-between p-2 rounded\">
                <div><small><b class=\"teget\"><i class=\"bi bi-shield-lock-fill\"></i> Password</b></small><br><small><i
                      class=\"bi bi-three-dots\"></i><i class=\"bi bi-three-dots\"></i></small></div>
                <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
              </div>
            </a>
            <p class=\"mt-4 ms-1\"><b>Caregiver Information</b></p>
            <hr style=\"margin-bottom: -1px;\">

            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-credit-card-2-back-fill\"></i> Your University</b></small><br>
              </div>
            </div>
            <select class=\"form-select form-select-sm\" name=\"university\" aria-label=\"Small select example\">
              {%if caregiver.university_data is null%}
              <option selected>Provide Your University</option>
              {%else%}
              <option selected>{{university}}</option>
              {%endif%}
              {% for data in data%}
              <option value=\"{{data}}\">{{data}}</option>
              {%endfor%}
            </select>

            <div class=\"d-flex justify-content-between p-2 rounded\">
              <div><small><b class=\"teget\"><i class=\"bi bi-credit-card-2-back-fill\"></i> Doctor</b></small><br></div>
            </div>
            <select class=\"form-select form-select-sm\" name=\"title\" aria-label=\"Small select example\">
              {%if caregiver.caregiver_data is null %}
              <option selected>Provide Your Docotor</option>
              {%else%}
              <option selected>{{title}}</option>
              {%endif%}
              {% for doctor in caregiverData.doctors %}
              <option value=\"{{doctor.title}}\">{{doctor.title}}</option>
              {%endfor%}

            </select>

            <div class=\"mt-2\">
              <div><small><b class=\"teget p-2 \"><i class=\"bi bi-credit-card-2-back-fill\"></i>
                    Diploma</b></small><br><small class=\"grey ms-1\">Please provide PDF file</small></div>
              <div class=\"mb-3 col-3\">
                <div><input class=\"form-control form-control-sm mt-2\" id=\"diploma_pdf\" name=\"diploma_pdf\" type=\"file\">
                </div>
                <div class=\"mt-1 ms-1 grey\"><small>{{caregiver.diploma_pdf}}</small></div>
              </div>
            </div>

            <p class=\"mt-4 ms-1\"><b>Place where you work</b></p>
            <div class=\"mb-3\">

              <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\"Clinic Name\" name=\"clinic\"
                aria-label=\".form-control-sm example\" value=\"{{caregiver.clinic_name}}\">

            </div>
            <div class=\"mb-3\">

              <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\"City\" name=\"clinic_city\"
                aria-label=\".form-control-sm example\" value=\"{{caregiver.city}}\">

            </div>
            <div class=\"mb-5\">

              <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\"Address\" name=\"clinic_address\"
                aria-label=\".form-control-sm example\" value=\"{{caregiver.address}}\">

            </div>
            <hr style=\"margin-bottom: -1px;\">
            <a href=\"\" class=\"text-decoration-none d-block profile\">
              <div class=\"d-flex justify-content-between p-2 rounded\">
                <div><small class=\"grey\">Delete Account</small></div>
                <div class=\"d-flex align-items-center\"><i class=\"bi bi-caret-right-fill grey\"></i></div>
              </div>
            </a>
            <hr style=\"margin-bottom: -1px; margin-top:-1px;\">
            <a href=\"\" class=\"text-decoration-none d-block profile\">
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
      <form action=\"{{ base_url }}/caregiver/update/{{caregiver.user_id}}\" method=\"POST\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"change_name\"><small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i>Edit My
                Profile</b></small><br><small></small></h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
          <label for=\"\" class=\"mb-2 ms-1\"><small><b>Change my name</b></small></label>
          <input class=\"form-control form-control-sm\" type=\"text\" name=\"new_name\"
            placeholder=\"{{caregiver.name}} {{caregiver.surname}}\" aria-label=\".form-control-sm example\">
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
      <form action=\"{{ base_url }}/caregiver/update/{{caregiver.user_id}}\" method=\"POST\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"change_phone\">
            <small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i>Edit My Profile</b></small><br><small></small>
          </h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
          <label for=\"\" class=\"mb-2 ms-1\"><small><b>Change my phone</b></small></label>
          <input class=\"form-control form-control-sm\" type=\"text\" name=\"phone\" aria-label=\".form-control-sm example\"
            value=\"{{ caregiver.phone }}\">
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
      <form action=\"{{ base_url }}/caregiver/update/{{ caregiver.user_id }}\" method=\"POST\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"change_password\">
            <small><b class=\"teget\"><i class=\"bi bi-person-fill\"></i> Edit My Profile</b></small>
          </h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
          <label for=\"old_password\" class=\"mb-2 ms-1\"><small><b>Change my password</b></small></label>
          <input class=\"form-control form-control-sm mb-2\" type=\"password\" name=\"old_password\"
            placeholder=\"Your old password\" required>

          <input class=\"form-control form-control-sm\" type=\"password\" name=\"new_password\"
            placeholder=\"Your new password\" required>
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
  document.getElementById(\"image\").addEventListener(\"change\", function (event) {
    var file = event.target.files[0];
    if (file) {
      var reader = new FileReader();
      reader.onload = function (e) {
        document.getElementById(\"preview\").src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  });
</script>




{% endblock %}
{% block naslov %}
Settings
{% endblock %}", "CaregiverProfile/edit.html", "C:\\laragon\\www\\doctorlab\\views\\CaregiverProfile\\edit.html");
    }
}
