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
        echo " Results</b></small><br>
      <small>Find in Serbia a Doctor (or a professional offering acts of cardiology and vascular) offering online
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
            echo "      <div class=\"card mb-2 border border-primary-subtle\" style=\"width: 100%;\" id=\"caregiver-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 66), "html", null, true);
            echo "\">
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
            echo "</small>
              </div>
            </div>
            <div class=\"card-body ms-3\">
              <p class=\"card-text\"><b><i class=\"bi bi-geo-alt-fill mt-2\"></i></b><small class=\"ms-2\"><b>Rue de
                    Villiers</b></small> <br> <small class=\"ms-4\"><b>Paris</b></small></p>

              <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/caregiver/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 80), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"
                style=\"width: 100%;\">Make Appointment</a>
            </div>
          </div>

          <div class=\"col-12 col-lg-8\" style=\"margin-left:-2px;\">
            <div class=\"row\">
              <div class=\"col-12 mt-2 mb-3\">
                <div class=\"d-flex justify-content-around\">
                  <i class=\"bi bi-arrow-left-circle-fill prevDate\" id=\"prevDate-";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 89), "html", null, true);
            echo "\" style=\"cursor: pointer;\"></i>
                  <!-- Strelica levo -->

                  ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["caregiver"], "schedule", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["day"] => $context["value"]) {
                // line 93
                echo "                  <header class=\"day\" data-caregiver-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 93), "html", null, true);
                echo "\" data-day=\"";
                echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                echo "\">
                    <b>";
                // line 94
                echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                echo "</b>
                  </header>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['day'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "
                  <i class=\"bi bi-arrow-right-circle-fill nextDate\" id=\"nextDate-";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 98), "html", null, true);
            echo "\" style=\"cursor: pointer;\"></i>
                  <!-- Strelica desno -->
                </div>
              </div>

            </div>
            <div class=\"row gx-1 gy-2 time-slots\" data-caregiver-id=\"";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 104), "html", null, true);
            echo "\">
              ";
            // line 105
            $context["index"] = 0;
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["caregiver"], "schedule", [], "any", false, false, false, 106));
            foreach ($context['_seq'] as $context["day"] => $context["times"]) {
                // line 107
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["times"], "times", [], "any", false, false, false, 107));
                foreach ($context['_seq'] as $context["_key"] => $context["time"]) {
                    // line 108
                    echo "    ";
                    $context["input_id"] = ((((("time_" . twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 108)) . "_") . $context["day"]) . "_") . ($context["index"] ?? null));
                    // line 109
                    echo "    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["time"], "status", [], "any", false, false, false, 109) == "free")) {
                        // line 110
                        echo "      <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 time-slot\" data-day=\"";
                        echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                        echo "\" data-caregiver-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 110), "html", null, true);
                        echo "\">
        <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" value=\"";
                        // line 111
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["time"], "time", [], "any", false, false, false, 111), "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, ($context["input_id"] ?? null), "html", null, true);
                        echo "\">
        <label class=\"btn calendar-input w-100 text-truncate overflow-hidden\" for=\"";
                        // line 112
                        echo twig_escape_filter($this->env, ($context["input_id"] ?? null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["time"], "time", [], "any", false, false, false, 112), "html", null, true);
                        echo "</label>
      </div>
    ";
                    } else {
                        // line 115
                        echo "      <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 time-slot\" data-day=\"";
                        echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                        echo "\" data-caregiver-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 115), "html", null, true);
                        echo "\">
        <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" value=\"\" id=\"";
                        // line 116
                        echo twig_escape_filter($this->env, ($context["input_id"] ?? null), "html", null, true);
                        echo "\" disabled>
        <label class=\"btn calendar-input-busy w-100 text-truncate overflow-hidden\" for=\"";
                        // line 117
                        echo twig_escape_filter($this->env, ($context["input_id"] ?? null), "html", null, true);
                        echo "\">-</label>
      </div>
    ";
                    }
                    // line 120
                    echo "    ";
                    $context["index"] = (($context["index"] ?? null) + 1);
                    // line 121
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['time'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['day'], $context['times'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "
              
            </div>
          </div>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caregiver'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "    </div>

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
<script>
  document.addEventListener(\"DOMContentLoaded\", function () {
    
    const allCaregivers = document.querySelectorAll(\".day[data-caregiver-id]\");

    // Grupisanje po caregiver-u
    const caregivers = {};

    allCaregivers.forEach(dayEl => {
      const caregiverId = dayEl.dataset.caregiverId;

      if (!caregivers[caregiverId]) {
        caregivers[caregiverId] = {
          days: [],
          currentIndex: 0
        };
      }

      caregivers[caregiverId].days.push(dayEl);
    });

    // Funkcija da osveži prikaz za konkretnog caregiver-a
    function updateDisplay(caregiverId) {
      const caregiver = caregivers[caregiverId];
      const currentDayEl = caregiver.days[caregiver.currentIndex];
      const currentDay = currentDayEl.dataset.day;

      // Sakrij sve dane
      caregiver.days.forEach(day => day.style.display = \"none\");
      currentDayEl.style.display = \"block\";

      // Sakrij sve time slotove
      const timeSlots = document.querySelectorAll(`.time-slot[data-caregiver-id=\"\${caregiverId}\"]`);
      timeSlots.forEach(slot => {
        if (slot.dataset.day === currentDay) {
          slot.style.display = \"block\";
        } else {
          slot.style.display = \"none\";
        }
      });
    }

    // Inicijalni prikaz
    for (const id in caregivers) {
      updateDisplay(id);

      // Strelice
      const prevBtn = document.getElementById(`prevDate-\${id}`);
      const nextBtn = document.getElementById(`nextDate-\${id}`);

      prevBtn?.addEventListener(\"click\", () => {
        caregivers[id].currentIndex = (caregivers[id].currentIndex - 1 + caregivers[id].days.length) % caregivers[id].days.length;
        updateDisplay(id);
      });

      nextBtn?.addEventListener(\"click\", () => {
        caregivers[id].currentIndex = (caregivers[id].currentIndex + 1) % caregivers[id].days.length;
        updateDisplay(id);
      });
    }
  });

</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const inputs = document.querySelectorAll('.calendar-input');
  
    inputs.forEach(input => {
      input.addEventListener('change', function () {
        if (this.checked) {
          inputs.forEach(i => {
            if (i !== this) i.checked = false;
          });
        }
      });
    });
  });
  
</script>




";
        // line 231
        $this->displayBlock('naslov', $context, $blocks);
        // line 235
        echo "

";
    }

    // line 231
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 232
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
        return array (  401 => 232,  397 => 231,  391 => 235,  389 => 231,  286 => 130,  274 => 123,  264 => 121,  261 => 120,  255 => 117,  251 => 116,  244 => 115,  236 => 112,  230 => 111,  223 => 110,  220 => 109,  217 => 108,  212 => 107,  208 => 106,  206 => 105,  202 => 104,  193 => 98,  190 => 97,  181 => 94,  174 => 93,  170 => 92,  164 => 89,  150 => 80,  136 => 73,  128 => 70,  120 => 66,  116 => 65,  106 => 58,  51 => 5,  47 => 4,  36 => 1,);
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
      <small><b>{{count}} Results</b></small><br>
      <small>Find in Serbia a Doctor (or a professional offering acts of cardiology and vascular) offering online
        appointment booking</small>
    </div>
  </div>
  <div class=\"row mt-3 gy-3\">
    <div class=\"col-12 col-lg-8\">
      {% for caregiver in caregivers %}
      <div class=\"card mb-2 border border-primary-subtle\" style=\"width: 100%;\" id=\"caregiver-{{ caregiver.user_id }}\">
        <div class=\"row\">
          <div class=\"col-12 col-lg-4\">
            <div class=\"d-flex flex-row mb-3\">
              <img src=\"{{base_url}}/assets/uploads/images/{{caregiver.profile_photo}}\" class=\"rounded-circle ms-3 mt-3\"
                alt=\"...\" style=\"width: 65px; height: 65px; object-fit: cover;\">
              <div class=\"p-2 ms-2 mt-3\">
                <b>Dr. {{caregiver.name}} {{caregiver.surname}}</b> <br> <small>{{caregiver.doctor}}</small>
              </div>
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
              <div class=\"col-12 mt-2 mb-3\">
                <div class=\"d-flex justify-content-around\">
                  <i class=\"bi bi-arrow-left-circle-fill prevDate\" id=\"prevDate-{{caregiver.user_id}}\" style=\"cursor: pointer;\"></i>
                  <!-- Strelica levo -->

                  {% for day, value in caregiver.schedule %}
                  <header class=\"day\" data-caregiver-id=\"{{caregiver.user_id}}\" data-day=\"{{ day }}\">
                    <b>{{ day }}</b>
                  </header>
                  {% endfor %}

                  <i class=\"bi bi-arrow-right-circle-fill nextDate\" id=\"nextDate-{{caregiver.user_id}}\" style=\"cursor: pointer;\"></i>
                  <!-- Strelica desno -->
                </div>
              </div>

            </div>
            <div class=\"row gx-1 gy-2 time-slots\" data-caregiver-id=\"{{caregiver.user_id}}\">
              {% set index = 0 %}
{% for day, times in caregiver.schedule %}
  {% for time in times.times %}
    {% set input_id = 'time_' ~ caregiver.user_id ~ '_' ~ day ~ '_' ~ index %}
    {% if time.status == \"free\" %}
      <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 time-slot\" data-day=\"{{day}}\" data-caregiver-id=\"{{caregiver.user_id}}\">
        <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" value=\"{{time.time}}\" id=\"{{ input_id }}\">
        <label class=\"btn calendar-input w-100 text-truncate overflow-hidden\" for=\"{{ input_id }}\">{{time.time}}</label>
      </div>
    {% else %}
      <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 time-slot\" data-day=\"{{day}}\" data-caregiver-id=\"{{caregiver.user_id}}\">
        <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" value=\"\" id=\"{{ input_id }}\" disabled>
        <label class=\"btn calendar-input-busy w-100 text-truncate overflow-hidden\" for=\"{{ input_id }}\">-</label>
      </div>
    {% endif %}
    {% set index = index + 1 %}
  {% endfor %}
{% endfor %}

              
            </div>
          </div>
        </div>
      </div>
      {% endfor %}
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
<script>
  document.addEventListener(\"DOMContentLoaded\", function () {
    
    const allCaregivers = document.querySelectorAll(\".day[data-caregiver-id]\");

    // Grupisanje po caregiver-u
    const caregivers = {};

    allCaregivers.forEach(dayEl => {
      const caregiverId = dayEl.dataset.caregiverId;

      if (!caregivers[caregiverId]) {
        caregivers[caregiverId] = {
          days: [],
          currentIndex: 0
        };
      }

      caregivers[caregiverId].days.push(dayEl);
    });

    // Funkcija da osveži prikaz za konkretnog caregiver-a
    function updateDisplay(caregiverId) {
      const caregiver = caregivers[caregiverId];
      const currentDayEl = caregiver.days[caregiver.currentIndex];
      const currentDay = currentDayEl.dataset.day;

      // Sakrij sve dane
      caregiver.days.forEach(day => day.style.display = \"none\");
      currentDayEl.style.display = \"block\";

      // Sakrij sve time slotove
      const timeSlots = document.querySelectorAll(`.time-slot[data-caregiver-id=\"\${caregiverId}\"]`);
      timeSlots.forEach(slot => {
        if (slot.dataset.day === currentDay) {
          slot.style.display = \"block\";
        } else {
          slot.style.display = \"none\";
        }
      });
    }

    // Inicijalni prikaz
    for (const id in caregivers) {
      updateDisplay(id);

      // Strelice
      const prevBtn = document.getElementById(`prevDate-\${id}`);
      const nextBtn = document.getElementById(`nextDate-\${id}`);

      prevBtn?.addEventListener(\"click\", () => {
        caregivers[id].currentIndex = (caregivers[id].currentIndex - 1 + caregivers[id].days.length) % caregivers[id].days.length;
        updateDisplay(id);
      });

      nextBtn?.addEventListener(\"click\", () => {
        caregivers[id].currentIndex = (caregivers[id].currentIndex + 1) % caregivers[id].days.length;
        updateDisplay(id);
      });
    }
  });

</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const inputs = document.querySelectorAll('.calendar-input');
  
    inputs.forEach(input => {
      input.addEventListener('change', function () {
        if (this.checked) {
          inputs.forEach(i => {
            if (i !== this) i.checked = false;
          });
        }
      });
    });
  });
  
</script>




{% block naslov %}
Search

{% endblock %}


{% endblock %}", "Caregiver/index.html", "C:\\laragon\\www\\doctorlab\\views\\Caregiver\\index.html");
    }
}
