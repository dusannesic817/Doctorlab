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

/* Caregiver/show.html */
class __TwigTemplate_cc6dc1163ed366974106606bceb37d4d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
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
        $this->parent = $this->loadTemplate("_global/index.html", "Caregiver/show.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "

<div class=\"container-fluid\" style=\"background-color: #324e66;\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"d-flex flex-row mb-3\">
          <div class=\"mt-3 mb-3\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/uploads/images/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "profile_photo", [], "any", false, false, false, 13), "html", null, true);
        echo "\" alt=\"user-image\"
              class=\"rounded-circle me-2\" style=\"width: 100px; height: 100px;\">
          </div>

          <div class=\"p-2 mt-4 ms-3\">
            <h3><b style=\"color: white;\">Dr ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "surname", [], "any", false, false, false, 18), "html", null, true);
        echo "</b></h3>
            <small style=\"color: white;\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "caregiver_data", [], "any", false, false, false, 19), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid sticky-top shadow-sm\" style=\"background-color: white; border-bottom:1px solid #ddd7d7;\">
  <div class=\"container\">
    <div class=\"row mt-2\">
      <div class=\"col-12\" style=\"margin-bottom:-10px;\">
        <div class=\"d-flex flex-row mb-3\" style=\"padding-bottom: -10px;\">
          <div class=\"p-2 links_2 me-3\"><a href=\"#\"><b>Profits</b></a></div>
          <div class=\"p-2 links_2 me-3\"><a href=\"#\"><b>Solutions</b></a></div>
          <div class=\"p-2 links_2 \"><a href=\"\"><b>Innovations</b></a></div>
        </div>
      </div>
    </div>
  </div>

</div>
<!--<hr class=\"custom-hr\">-->
<div class=\"container-fluid full-height\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-8\">
        <div class=\"card mt-5 overflow-hidden\" style=\"height: 250px;\">
  <div class=\"card-body p-0\">
    <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/e_medicine.jpg\" 
         class=\"w-100 h-50 object-fit-cover \" 
         alt=\"...\">
  </div>
</div>


        <div class=\"card mt-2\">
          <div class=\"row\">
            <div class=\"col-4\">
              <div class=\"card-body\">
                <small><i class=\"fa-solid fa-location-dot me-2\"></i><b>Maps and access information</b></small><br>
                <small>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "clinic_name", [], "any", false, false, false, 59), "html", null, true);
        echo "</small><br>
                <small>Serbia</small><br>
                <p><small>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "address", [], "any", false, false, false, 61), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "city", [], "any", false, false, false, 61), "html", null, true);
        echo "</small></p>
                <small><b>Public Parking</b></small>
                <p><small>3 Places of Parking</small></p>
              </div>
            </div>
            <div class=\"col-8\">
              <p>MAPS</p>
            </div>
          </div>
        </div>
        <div class=\"card mt-2\">
          <div class=\"card-body\">
            <small><i class=\"fa-solid fa-circle-info me-2\"></i><b>Presetntation</b></small><br>
            <p><small>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.</small></p>
            <small><i class=\"fa-solid fa-language me-2\"></i><b>Languages Spoken</b></small><br>
            <small>English, Serbian, France</small>

            <hr>
            <small><i class=\"fa-solid fa-building-columns me-2\"></i><b>Education</b></small><br>
            <p><small>Medicinski Fakultet Univerzite u Beogradu</small></p>
            <small><i class=\"fa-solid fa-briefcase me-2\"></i><b>Expirience</b></small><br>
            <small>Lorem Ipsum has been the industry's standard<br> Lorem Ipsum has been the industry's standard
              <br>Lorem Ipsum has been the industry's standard</small>
          </div>
        </div>
        <div class=\"card mt-2 mb-5\">
          <div class=\"card-body\">
            <small><b>Schedules and coordinates</b></small><br>
            <p><small><b>Opening hours</b></small></p>
            <small>Monday: 08 - 18h</small><br>
            <small>Tuesday: 08 - 18h</small><br>
            <small>Wendesday: 08 - 18h</small><br>
            <small>Thursdey: 08 - 18h</small><br>
            <small>Friday: 08 - 18h</small><br>

            <p><small><b>Coordinates</b></small><br></p>
            <p><small>061 30 197 12</small></p>
          </div>
        </div>
      </div>
      <div class=\"col-12 col-lg-4\">
        <div class=\"card mt-5 \">
          <div class=\"card-body\">
            <small><b>In summary</b></small>
            <hr>
            <p><small>Accepy new pattent <i class=\"fa-solid fa-circle-check\" style=\"color: green;\"></i></small></p>
            <small><i class=\"fa-solid fa-location-dot me-1\"></i>";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "city", [], "any", false, false, false, 112), "html", null, true);
        echo "</small><br>
            <small>";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "address", [], "any", false, false, false, 113), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "city", [], "any", false, false, false, 113), "html", null, true);
        echo ", Serbia</small><br>
            <div class=\"mt-4\"><a href=\"";
        // line 114
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/makeappointment/show/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "user_id", [], "any", false, false, false, 114), "html", null, true);
        echo "\" class=\"btn btn-primary\"
                style=\"width: 100%;\"><b><small><i class=\"fa-solid fa-calendar-days me-2\"></i>MAKE AN
                    APPOINTMENT</small></b></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>




";
    }

    // line 130
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        $this->loadTemplate("./inc/footer.html", "Caregiver/show.html", 131)->display($context);
    }

    // line 133
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "Dr ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 134), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "surname", [], "any", false, false, false, 134), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "Caregiver/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 134,  225 => 133,  221 => 131,  217 => 130,  195 => 114,  189 => 113,  185 => 112,  129 => 61,  124 => 59,  109 => 47,  78 => 19,  72 => 18,  62 => 13,  52 => 5,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/index.html\" %}


{% block main %}


<div class=\"container-fluid\" style=\"background-color: #324e66;\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"d-flex flex-row mb-3\">
          <div class=\"mt-3 mb-3\">
            <img src=\"{{base_url}}/assets/uploads/images/{{caregiver.profile_photo}}\" alt=\"user-image\"
              class=\"rounded-circle me-2\" style=\"width: 100px; height: 100px;\">
          </div>

          <div class=\"p-2 mt-4 ms-3\">
            <h3><b style=\"color: white;\">Dr {{caregiver.name}} {{caregiver.surname}}</b></h3>
            <small style=\"color: white;\">{{caregiver.caregiver_data.title}}</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid sticky-top shadow-sm\" style=\"background-color: white; border-bottom:1px solid #ddd7d7;\">
  <div class=\"container\">
    <div class=\"row mt-2\">
      <div class=\"col-12\" style=\"margin-bottom:-10px;\">
        <div class=\"d-flex flex-row mb-3\" style=\"padding-bottom: -10px;\">
          <div class=\"p-2 links_2 me-3\"><a href=\"#\"><b>Profits</b></a></div>
          <div class=\"p-2 links_2 me-3\"><a href=\"#\"><b>Solutions</b></a></div>
          <div class=\"p-2 links_2 \"><a href=\"\"><b>Innovations</b></a></div>
        </div>
      </div>
    </div>
  </div>

</div>
<!--<hr class=\"custom-hr\">-->
<div class=\"container-fluid full-height\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-8\">
        <div class=\"card mt-5 overflow-hidden\" style=\"height: 250px;\">
  <div class=\"card-body p-0\">
    <img src=\"{{base_url}}/assets/images/e_medicine.jpg\" 
         class=\"w-100 h-50 object-fit-cover \" 
         alt=\"...\">
  </div>
</div>


        <div class=\"card mt-2\">
          <div class=\"row\">
            <div class=\"col-4\">
              <div class=\"card-body\">
                <small><i class=\"fa-solid fa-location-dot me-2\"></i><b>Maps and access information</b></small><br>
                <small>{{caregiver.clinic_name}}</small><br>
                <small>Serbia</small><br>
                <p><small>{{caregiver.address}}, {{caregiver.city}}</small></p>
                <small><b>Public Parking</b></small>
                <p><small>3 Places of Parking</small></p>
              </div>
            </div>
            <div class=\"col-8\">
              <p>MAPS</p>
            </div>
          </div>
        </div>
        <div class=\"card mt-2\">
          <div class=\"card-body\">
            <small><i class=\"fa-solid fa-circle-info me-2\"></i><b>Presetntation</b></small><br>
            <p><small>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.</small></p>
            <small><i class=\"fa-solid fa-language me-2\"></i><b>Languages Spoken</b></small><br>
            <small>English, Serbian, France</small>

            <hr>
            <small><i class=\"fa-solid fa-building-columns me-2\"></i><b>Education</b></small><br>
            <p><small>Medicinski Fakultet Univerzite u Beogradu</small></p>
            <small><i class=\"fa-solid fa-briefcase me-2\"></i><b>Expirience</b></small><br>
            <small>Lorem Ipsum has been the industry's standard<br> Lorem Ipsum has been the industry's standard
              <br>Lorem Ipsum has been the industry's standard</small>
          </div>
        </div>
        <div class=\"card mt-2 mb-5\">
          <div class=\"card-body\">
            <small><b>Schedules and coordinates</b></small><br>
            <p><small><b>Opening hours</b></small></p>
            <small>Monday: 08 - 18h</small><br>
            <small>Tuesday: 08 - 18h</small><br>
            <small>Wendesday: 08 - 18h</small><br>
            <small>Thursdey: 08 - 18h</small><br>
            <small>Friday: 08 - 18h</small><br>

            <p><small><b>Coordinates</b></small><br></p>
            <p><small>061 30 197 12</small></p>
          </div>
        </div>
      </div>
      <div class=\"col-12 col-lg-4\">
        <div class=\"card mt-5 \">
          <div class=\"card-body\">
            <small><b>In summary</b></small>
            <hr>
            <p><small>Accepy new pattent <i class=\"fa-solid fa-circle-check\" style=\"color: green;\"></i></small></p>
            <small><i class=\"fa-solid fa-location-dot me-1\"></i>{{caregiver.city}}</small><br>
            <small>{{caregiver.address}}, {{caregiver.city}}, Serbia</small><br>
            <div class=\"mt-4\"><a href=\"{{base_url}}/makeappointment/show/{{caregiver.user_id}}\" class=\"btn btn-primary\"
                style=\"width: 100%;\"><b><small><i class=\"fa-solid fa-calendar-days me-2\"></i>MAKE AN
                    APPOINTMENT</small></b></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>




{% endblock %}
{% block footer %}
{% include './inc/footer.html'%}
{% endblock %}
{% block naslov %}
Dr {{caregiver.name}} {{caregiver.surname}}
{% endblock %}", "Caregiver/show.html", "C:\\laragon\\www\\doctorlab\\views\\Caregiver\\show.html");
    }
}
