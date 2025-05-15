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

/* ./inc/header.html */
class __TwigTemplate_50224a08d9a49685f418e06832038247 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container-fluid background-navbar\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <nav class=\"navbar navbar-expand-lg mt-2\">
          <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\">
              <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/logos.png\" alt=\"DoctorLab Logo\" >
          </a>
          
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
            aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <svg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path stroke=\"white\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-miterlimit=\"10\"
                    d=\"M4 7h22M4 15h22M4 23h22\" />
            </svg>
          </button>
      
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
              <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown\">
                  <a class=\"nav-link mt-2\" href=\"\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <b><small>Discover Doctorlab</small></b>
                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-custom\">
                    <div class=\"row ps-5 pt-3\">
                      <small><b>Chose your tretmant</b></small>
                    </div>
                    <div class=\"mt-5 mb-5\">
                      <div class=\"d-flex flex-column flex-lg-row mb-3 justify-content-start ms-5 caregiver\">
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["doctors"] ?? null), "doctors", [], "any", false, false, false, 31), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
            // line 32
            echo "                          <div class=\"p-2 mb-2 me-2\">
                            <li><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/caregiver/";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "title", [], "any", false, false, false, 33)), "html", null, true);
            echo "\" style=\"color: black !important;\"><i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "icon", [], "any", false, false, false, 33), "html", null, true);
            echo "\"></i><b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "title", [], "any", false, false, false, 33), "html", null, true);
            echo "</b> </a></li>
                          </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                      </div>
                      
                      <div class=\"d-flex flex-column flex-lg-row mb-3 justify-content-start ms-5 caregiver\">
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["doctors"] ?? null), "doctors", [], "any", false, false, false, 39), 4, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
            // line 40
            echo "                          <div class=\"p-2  mb-2 me-2\">
                            <li><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/caregiver/";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "title", [], "any", false, false, false, 41)), "html", null, true);
            echo "\" style=\"color: black !important;\"><i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "icon", [], "any", false, false, false, 41), "html", null, true);
            echo " \"></i> <b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "title", [], "any", false, false, false, 41), "html", null, true);
            echo "</b></a></li>
                          </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                      </div>
                      <div class=\"d-flex flex-column flex-lg-row mb-3 justify-content-start ms-5 caregiver\">
                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["doctors"] ?? null), "doctors", [], "any", false, false, false, 46), 8, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
            // line 47
            echo "                          <div class=\"p-2  mb-2 me-2\">
                            <li><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/caregiver/";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "title", [], "any", false, false, false, 48)), "html", null, true);
            echo "\" style=\"color: black !important;\"><i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "icon", [], "any", false, false, false, 48), "html", null, true);
            echo "\"></i> <b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "title", [], "any", false, false, false, 48), "html", null, true);
            echo "</b></a></li>
                          </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                      </div>
                    </div>
                  </ul>
                  
                
       
                  
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link mt-2 ms-2\" href=\"/\"><b><small>Tarrifs</small></b></a>
                </li>

                ";
        // line 63
        if (($context["auth"] ?? null)) {
            // line 64
            echo "                      
              </ul>
              <ul class=\"navbar-nav ms-auto mt-2\">
                <li class=\"nav-item\">
                  <a class=\"nav-link ms-2\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ($context["role"] ?? null), "html", null, true);
            echo "/profile/";
            echo twig_escape_filter($this->env, ($context["auth"] ?? null), "html", null, true);
            echo "\"><b><small>Profile</small></b></a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link ms-2\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ($context["role"] ?? null), "html", null, true);
            echo "/appointments/";
            echo twig_escape_filter($this->env, ($context["auth"] ?? null), "html", null, true);
            echo "\"><b><small>My appoitments</small></b></a>
                </li>
              </ul>
             
              ";
        } else {
            // line 76
            echo "              </ul>
              <ul class=\"navbar-nav ms-auto mt-2\">
                <li class=\"nav-item border rounded me-2 border-success ps-1 pe-1 mb-1\">
                  <a class=\"nav-link\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/caregiver/register\"><b><small>Are you a health professional?</small></b></a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link ms-2\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/login\"><b><small>Make appoitment?</small></b></a>
                </li>
              </ul>
              ";
        }
        // line 86
        echo "            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "./inc/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 86,  205 => 82,  199 => 79,  194 => 76,  182 => 71,  172 => 68,  166 => 64,  164 => 63,  150 => 51,  135 => 48,  132 => 47,  128 => 46,  124 => 44,  109 => 41,  106 => 40,  102 => 39,  97 => 36,  82 => 33,  79 => 32,  75 => 31,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid background-navbar\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <nav class=\"navbar navbar-expand-lg mt-2\">
          <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"{{ base_url }}\">
              <img src=\"{{ base_url }}/assets/images/logos.png\" alt=\"DoctorLab Logo\" >
          </a>
          
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
            aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <svg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path stroke=\"white\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-miterlimit=\"10\"
                    d=\"M4 7h22M4 15h22M4 23h22\" />
            </svg>
          </button>
      
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
              <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown\">
                  <a class=\"nav-link mt-2\" href=\"\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <b><small>Discover Doctorlab</small></b>
                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-custom\">
                    <div class=\"row ps-5 pt-3\">
                      <small><b>Chose your tretmant</b></small>
                    </div>
                    <div class=\"mt-5 mb-5\">
                      <div class=\"d-flex flex-column flex-lg-row mb-3 justify-content-start ms-5 caregiver\">
                        {% for doctor in doctors.doctors|slice(0, 4) %}
                          <div class=\"p-2 mb-2 me-2\">
                            <li><a href=\"{{base_url}}/caregiver/{{ doctor.title|lower }}\" style=\"color: black !important;\"><i class=\"{{ doctor.icon }}\"></i><b> {{ doctor.title }}</b> </a></li>
                          </div>
                        {% endfor %}
                      </div>
                      
                      <div class=\"d-flex flex-column flex-lg-row mb-3 justify-content-start ms-5 caregiver\">
                        {% for doctor in doctors.doctors|slice(4,4) %}
                          <div class=\"p-2  mb-2 me-2\">
                            <li><a href=\"{{base_url}}/caregiver/{{ doctor.title|lower }}\" style=\"color: black !important;\"><i class=\"{{ doctor.icon }} \"></i> <b> {{ doctor.title }}</b></a></li>
                          </div>
                        {% endfor %}
                      </div>
                      <div class=\"d-flex flex-column flex-lg-row mb-3 justify-content-start ms-5 caregiver\">
                        {% for doctor in doctors.doctors|slice(8,2) %}
                          <div class=\"p-2  mb-2 me-2\">
                            <li><a href=\"{{base_url}}/caregiver/{{ doctor.title|lower }}\" style=\"color: black !important;\"><i class=\"{{ doctor.icon }}\"></i> <b> {{ doctor.title }}</b></a></li>
                          </div>
                        {% endfor %}
                      </div>
                    </div>
                  </ul>
                  
                
       
                  
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link mt-2 ms-2\" href=\"/\"><b><small>Tarrifs</small></b></a>
                </li>

                {%if auth %}
                      
              </ul>
              <ul class=\"navbar-nav ms-auto mt-2\">
                <li class=\"nav-item\">
                  <a class=\"nav-link ms-2\" href=\"{{ base_url }}/{{role}}/profile/{{auth}}\"><b><small>Profile</small></b></a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link ms-2\" href=\"{{ base_url }}/{{role}}/appointments/{{auth}}\"><b><small>My appoitments</small></b></a>
                </li>
              </ul>
             
              {%else%}
              </ul>
              <ul class=\"navbar-nav ms-auto mt-2\">
                <li class=\"nav-item border rounded me-2 border-success ps-1 pe-1 mb-1\">
                  <a class=\"nav-link\" href=\"{{ base_url }}/caregiver/register\"><b><small>Are you a health professional?</small></b></a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link ms-2\" href=\"{{ base_url }}/login\"><b><small>Make appoitment?</small></b></a>
                </li>
              </ul>
              {%endif%}
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>", "./inc/header.html", "C:\\laragon\\www\\doctorlab\\views\\inc\\header.html");
    }
}
