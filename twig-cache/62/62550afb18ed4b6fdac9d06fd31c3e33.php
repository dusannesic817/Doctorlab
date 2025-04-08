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

/* Caregiver/index.html */
class __TwigTemplate_6b6eb6f33d69f59d05cac13c55a907c1 extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Caregiver/index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "

<div class=\"container\">
  <div class=\"row mt-3\">
    <div class=\"col-12\">
      <div class=\"d-flex flex-row mb-3\">
        <div class=\"p-2 me-2\">
          <div class=\"dropdown\">
            <button class=\"btn border rounded-pill dugme\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              <small class=\"pe-2 ps-2\">Availabilties</small>
            </button>
            <ul class=\"dropdown-menu p-4 text-body-secondary dropdown-menu-custom\">
              <li><a class=\"dropdown-item\" href=\"#\">Regular link</a></li>
              <li><a class=\"dropdown-item disabled\" aria-disabled=\"true\">Disabled link</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">Another link</a></li>
            </ul>
          </div>
        </div>
        <div class=\"p-2 me-2\">
          <div class=\"dropdown \">
            <button class=\"btn border rounded-pill dugme\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              <small class=\"pe-2 ps-2\">Honoriaa</small>
            </button>
            <ul class=\"dropdown-menu p-4 text-body-secondary dropdown-menu-custom\">
              <li><a class=\"dropdown-item\" href=\"#\">Regular link</a></li>
              <li><a class=\"dropdown-item disabled\" aria-disabled=\"true\">Disabled link</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">Another link</a></li>
            </ul>
          </div>
        </div>
        <div class=\"p-2 \">

          <div class=\"dropdown \">
            <button class=\"btn border rounded-pill dugme\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              <small class=\"pe-2 ps-2\">Reason for consultation</small>
            </button>
            <ul class=\"dropdown-menu p-4 text-body-secondary dropdown-menu-custom\">
              <li><a class=\"dropdown-item\" href=\"#\">Regular link</a></li>
              <li><a class=\"dropdown-item disabled\" aria-disabled=\"true\">Disabled link</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">Another link</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<hr class=\"custom-hr\">

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-12\">
      <small><b>";
        // line 58
        echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
        echo " Reults</b></small><br>
      <small>Find in Serbia a Doctor (or a profesional offering acts of cardilogy and vascluar) offering online
        appointment booking</small>
    </div>
  </div>
  <div class=\"row mt-3 gy-3\">
    <div class=\"col-12 col-lg-8\">
      ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["caregivers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["caregiver"]) {
            // line 66
            echo "      <div class=\"card mb-2 border border-primary-subtle\" style=\"width: 100%;\">
        <div class=\"row\">
          <div class=\"col-12 col-lg-4\">
            <div class=\"d-flex flex-row mb-3\">
              <img src=\"";
            // line 70
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/assets/uploads/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "profile_photo", [], "any", false, false, false, 70), "html", null, true);
            echo "\" class=\"rounded-circle ms-3 mt-3\"
                alt=\"...\" style=\"width: 65px; height: 65px; object-fit: cover;\">
              <div class=\"p-2 ms-2 mt-3\">
                <b>Dr. ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "name", [], "any", false, false, false, 73), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "surname", [], "any", false, false, false, 73), "html", null, true);
            echo "</b> <br> <small>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "doctor", [], "any", false, false, false, 73), "html", null, true);
            echo "</small></div>
            </div>
            <div class=\"card-body ms-3\">
              <p class=\"card-text\"><b><i class=\"bi bi-geo-alt-fill mt-2\"></i></b><small class=\"ms-2\"><b>Rue de
                    Villiers</b></small> <br> <small class=\"ms-4\"><b>Paris</b></small></p>

              <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/caregiver/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 79), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"
                style=\"width: 100%;\">Make Appointment</a>
            </div>
          </div>

          <div class=\"col-12 col-lg-8\" style=\"margin-left:-2px;\">
            <div class=\"row\">
              <div class=\"col-12  mt-2 mb-3\">
                <div class=\"d-flex justify-content-around\">
                  <i class=\"bi bi-arrow-left-circle-fill\" id=\"prevDate\"></i>
                  <header><b>April 7 Monday</b></header>
                  <i class=\"bi bi-arrow-right-circle-fill\" id=\"nextDate\"></i>
              </div>
              </div>
            </div>
            <div class=\"row gx-1 gy-2\">
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" name=\"\" value=\"08:00\" id=\"\">
                <label class=\"btn calendar-input w-100 text-truncate overflow-hidden\" for=\"\">08:00</label>
              </div>

            </div>
          </div>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caregiver'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "

    </div>
    <!-- Col-4 for aside content -->
    <div class=\"col-12 col-lg-4\">
      <div class=\"card sticky-top h-75\" style=\"width: 100%;\">
        <div class=\"card-body p-0\">
          <iframe
            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45973.02516856684!2d21.354716326223837!3d43.93217331171238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4756bf451d4d0011%3A0x22d95992c68c3da7!2zxIZ1cHJpamE!5e0!3m2!1sbs!2srs!4v1740178064511!5m2!1sbs!2srs\"
            style=\"border:0; width: 100%; height: 100%;\" allowfullscreen=\"\" loading=\"lazy\"
            referrerpolicy=\"no-referrer-when-downgrade\">
          </iframe>
        </div>
      </div>
    </div>

  </div>
</div>






";
        // line 129
        $this->displayBlock('naslov', $context, $blocks);
        // line 133
        echo "

";
    }

    // line 129
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "Search

";
    }

    public function getTemplateName()
    {
        return "Caregiver/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 130,  215 => 129,  209 => 133,  207 => 129,  181 => 105,  147 => 79,  134 => 73,  126 => 70,  120 => 66,  116 => 65,  106 => 58,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/index.html\" %}


{% block main %}


<div class=\"container\">
  <div class=\"row mt-3\">
    <div class=\"col-12\">
      <div class=\"d-flex flex-row mb-3\">
        <div class=\"p-2 me-2\">
          <div class=\"dropdown\">
            <button class=\"btn border rounded-pill dugme\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              <small class=\"pe-2 ps-2\">Availabilties</small>
            </button>
            <ul class=\"dropdown-menu p-4 text-body-secondary dropdown-menu-custom\">
              <li><a class=\"dropdown-item\" href=\"#\">Regular link</a></li>
              <li><a class=\"dropdown-item disabled\" aria-disabled=\"true\">Disabled link</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">Another link</a></li>
            </ul>
          </div>
        </div>
        <div class=\"p-2 me-2\">
          <div class=\"dropdown \">
            <button class=\"btn border rounded-pill dugme\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              <small class=\"pe-2 ps-2\">Honoriaa</small>
            </button>
            <ul class=\"dropdown-menu p-4 text-body-secondary dropdown-menu-custom\">
              <li><a class=\"dropdown-item\" href=\"#\">Regular link</a></li>
              <li><a class=\"dropdown-item disabled\" aria-disabled=\"true\">Disabled link</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">Another link</a></li>
            </ul>
          </div>
        </div>
        <div class=\"p-2 \">

          <div class=\"dropdown \">
            <button class=\"btn border rounded-pill dugme\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              <small class=\"pe-2 ps-2\">Reason for consultation</small>
            </button>
            <ul class=\"dropdown-menu p-4 text-body-secondary dropdown-menu-custom\">
              <li><a class=\"dropdown-item\" href=\"#\">Regular link</a></li>
              <li><a class=\"dropdown-item disabled\" aria-disabled=\"true\">Disabled link</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">Another link</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<hr class=\"custom-hr\">

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-12\">
      <small><b>{{count}} Reults</b></small><br>
      <small>Find in Serbia a Doctor (or a profesional offering acts of cardilogy and vascluar) offering online
        appointment booking</small>
    </div>
  </div>
  <div class=\"row mt-3 gy-3\">
    <div class=\"col-12 col-lg-8\">
      {% for caregiver in caregivers%}
      <div class=\"card mb-2 border border-primary-subtle\" style=\"width: 100%;\">
        <div class=\"row\">
          <div class=\"col-12 col-lg-4\">
            <div class=\"d-flex flex-row mb-3\">
              <img src=\"{{base_url}}/assets/uploads/images/{{caregiver.profile_photo}}\" class=\"rounded-circle ms-3 mt-3\"
                alt=\"...\" style=\"width: 65px; height: 65px; object-fit: cover;\">
              <div class=\"p-2 ms-2 mt-3\">
                <b>Dr. {{caregiver.name}} {{caregiver.surname}}</b> <br> <small>{{caregiver.doctor}}</small></div>
            </div>
            <div class=\"card-body ms-3\">
              <p class=\"card-text\"><b><i class=\"bi bi-geo-alt-fill mt-2\"></i></b><small class=\"ms-2\"><b>Rue de
                    Villiers</b></small> <br> <small class=\"ms-4\"><b>Paris</b></small></p>

              <a href=\"{{base_url}}/caregiver/show/{{caregiver.user_id}}\" class=\"btn btn-primary mt-2\"
                style=\"width: 100%;\">Make Appointment</a>
            </div>
          </div>

          <div class=\"col-12 col-lg-8\" style=\"margin-left:-2px;\">
            <div class=\"row\">
              <div class=\"col-12  mt-2 mb-3\">
                <div class=\"d-flex justify-content-around\">
                  <i class=\"bi bi-arrow-left-circle-fill\" id=\"prevDate\"></i>
                  <header><b>April 7 Monday</b></header>
                  <i class=\"bi bi-arrow-right-circle-fill\" id=\"nextDate\"></i>
              </div>
              </div>
            </div>
            <div class=\"row gx-1 gy-2\">
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" name=\"\" value=\"08:00\" id=\"\">
                <label class=\"btn calendar-input w-100 text-truncate overflow-hidden\" for=\"\">08:00</label>
              </div>

            </div>
          </div>
        </div>
      </div>
      {%endfor%}


    </div>
    <!-- Col-4 for aside content -->
    <div class=\"col-12 col-lg-4\">
      <div class=\"card sticky-top h-75\" style=\"width: 100%;\">
        <div class=\"card-body p-0\">
          <iframe
            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45973.02516856684!2d21.354716326223837!3d43.93217331171238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4756bf451d4d0011%3A0x22d95992c68c3da7!2zxIZ1cHJpamE!5e0!3m2!1sbs!2srs!4v1740178064511!5m2!1sbs!2srs\"
            style=\"border:0; width: 100%; height: 100%;\" allowfullscreen=\"\" loading=\"lazy\"
            referrerpolicy=\"no-referrer-when-downgrade\">
          </iframe>
        </div>
      </div>
    </div>

  </div>
</div>






{% block naslov %}
Search

{% endblock %}


{% endblock %}


", "Caregiver/index.html", "C:\\laragon\\www\\doctorlab\\views\\Caregiver\\index.html");
    }
}
