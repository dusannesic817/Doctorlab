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
class __TwigTemplate_ab352a9e2a6ff07c80c127375a4f0303 extends Template
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
          <div class=\"card mt-3 mb-3\" style=\"width: 8rem;\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/uploads/images/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "profile_photo", [], "any", false, false, false, 13), "html", null, true);
        echo "\" 
                 class=\"card-img-top w-100 h-100 object-fit-cover border rounded\" 
                 alt=\"...\" 
                 >
          </div>
          
          <div class=\"p-2 mt-4 ms-3\">
            <h3><b style=\"color: white;\">Dr ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 20), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "surname", [], "any", false, false, false, 20), "html", null, true);
        echo "</b></h3>
            <small style=\"color: white;\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "profile_photo", [], "any", false, false, false, 21), "html", null, true);
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
        <div class=\"card mt-5\">
          <div class=\"card-body\">
            <small><b>Maps and access information</b></small><br>
            <hr>
            <p>This is some text a card text</p>
            <hr>
            <p>This is some text a card text</p>
          </div>
        </div>
        <div class=\"card mt-2\">
          <div class=\"row\">
            <div class=\"col-4\">
              <div class=\"card-body\">
                <small><b>Maps and access information</b></small><br>
                <small>Name of institution</small><br>
                <small><b>Jagodina</b></small><br>
                <p><small>32 Avenue du Geeral Sarall, 750015 Paris,France</small></p>
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
            <small><b>Presetntation</b></small><br>
            <p><small>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.</small></p>
            <small><b>Languages Spoken</b></small><br>
            <small>English, Serbian, France</small>

            <hr>
            <small><b>Education</b></small><br>
            <p><small>Medicinski Fakultet Univerzite u Beogradu</small></p>
            <small><b>Expirience</b></small><br>
            <small>Lorem Ipsum has been the industry's standard<br> Lorem Ipsum has been the industry's standard
              <br>Lorem Ipsum has been the industry's standard</small>
          </div>
        </div>
        <div class=\"card mt-2\">
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
      <div class=\"col-12 col-lg-4 \">
        <div class=\"card mt-5 \">
          <div class=\"card-body\">
            <small><b>In summary</b></small>
            <hr>
            <p><small>Accepy new pattent</small></p>
            <small>Jagodina</small><br>
            <small>Knjegine Milice 15, Jagodina, Serbia</small><br>
            <div class=\"mt-4\"><a href=\"#\" class=\"btn btn-primary\" style=\"width: 100%;\"><b>MAKE AN APPOINTMENT</b></a>
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
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "name", [], "any", false, false, false, 131), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caregiver"] ?? null), "surname", [], "any", false, false, false, 131), "html", null, true);
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
        return array (  196 => 131,  192 => 130,  79 => 21,  73 => 20,  61 => 13,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Caregiver/show.html", "C:\\laragon\\www\\doctorlab\\views\\Caregiver\\show.html");
    }
}
