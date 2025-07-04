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
        $this->parent = $this->loadTemplate("_global/index.html", "Caregiver/index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "

<form action=\"\" method=\"POST\" id=\"appointmentForm\">
  <div class=\"container\">
    <div class=\"row mt-3 gy-3\">
      <div class=\"col-12 col-lg-8\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["caregivers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["caregiver"]) {
            // line 12
            echo "        <div class=\"card mb-2 border border-primary-subtle\" style=\"width: 100%;\" id=\"caregiver-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
          <div class=\"row\">
            <div class=\"col-12 col-lg-4\">
              <div class=\"d-flex flex-row mb-3\">
                <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/assets/uploads/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "profile_photo", [], "any", false, false, false, 16), "html", null, true);
            echo "\" class=\"rounded-circle ms-3 mt-3\"
                  alt=\"...\" style=\"width: 65px; height: 65px; object-fit: cover;\">
                <div class=\"p-2 ms-2 mt-3\">
                  <b>Dr. ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "surname", [], "any", false, false, false, 19), "html", null, true);
            echo "</b> <br> <small>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "doctor", [], "any", false, false, false, 19), "html", null, true);
            echo "</small>
                </div>
              </div>
              <div class=\"card-body ms-3\">
                <p class=\"card-text\"><b><i class=\"bi bi-geo-alt-fill mt-2\"></i></b><small class=\"ms-2\"><b>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "clinic_address", [], "any", false, false, false, 23), "html", null, true);
            echo "</b></small> <br> <small class=\"ms-4\"><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "city", [], "any", false, false, false, 23), "html", null, true);
            echo "</b></small></p>
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/caregiver/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 24), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"
                  style=\"width: 100%;\">Make Appointment</a>
              </div>
            </div>

            <div class=\"col-12 col-lg-8\" style=\"margin-left:-2px;\">
              <div class=\"row\">
                <div class=\"col-12 mt-2 mb-3\">
                  <div class=\"d-flex justify-content-around\">
                    <i class=\"bi bi-arrow-left-circle-fill prevDate\" id=\"prevDate-";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 33), "html", null, true);
            echo "\" style=\"cursor: pointer;\"></i>
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["caregiver"], "schedule", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["day"] => $context["value"]) {
                // line 35
                echo "                    <header class=\"day\" data-caregiver-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 35), "html", null, true);
                echo "\" data-day=\"";
                echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                echo "\">
                      <b>";
                // line 36
                echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                echo "</b>
                    </header>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['day'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    <i class=\"bi bi-arrow-right-circle-fill nextDate\" id=\"nextDate-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" style=\"cursor: pointer;\"></i>
                  </div>
                </div>

              </div>
              <div class=\"row gx-1 gy-2 time-slots\" data-caregiver-id=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 44), "html", null, true);
            echo "\">
                ";
            // line 45
            $context["index"] = 0;
            // line 46
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["caregiver"], "schedule", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["day"] => $context["times"]) {
                // line 47
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["times"], "times", [], "any", false, false, false, 47));
                foreach ($context['_seq'] as $context["_key"] => $context["time"]) {
                    // line 48
                    echo "                ";
                    $context["input_id"] = ((((("time_" . twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 48)) . "_") . $context["day"]) . "_") . ($context["index"] ?? null));
                    // line 49
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["time"], "status", [], "any", false, false, false, 49) == "free")) {
                        // line 50
                        echo "                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 time-slot\" data-day=\"";
                        echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                        echo "\"
                  data-caregiver-id=\"";
                        // line 51
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 51), "html", null, true);
                        echo "\">
                <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" value=\"";
                        // line 52
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["time"], "time", [], "any", false, false, false, 52), "html", null, true);
                        echo "\" 
                name=\"appointment[";
                        // line 53
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 53), "html", null, true);
                        echo "][";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "name", [], "any", false, false, false, 53), "html", null, true);
                        echo "][";
                        echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                        echo "][]\" 
                id=\"";
                        // line 54
                        echo twig_escape_filter($this->env, ($context["input_id"] ?? null), "html", null, true);
                        echo "\" data-caregiver-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 54), "html", null, true);
                        echo "\" data-caregiver-name=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "name", [], "any", false, false, false, 54), "html", null, true);
                        echo "\" 
                data-day=\"";
                        // line 55
                        echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                        echo "\" onclick=\"saveToSession(this)\">
            
            <label class=\"btn calendar-input w-100 text-truncate overflow-hidden\" for=\"";
                        // line 57
                        echo twig_escape_filter($this->env, ($context["input_id"] ?? null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["time"], "time", [], "any", false, false, false, 57), "html", null, true);
                        echo "</label>
            
                </div>
                ";
                    } else {
                        // line 61
                        echo "                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 time-slot\" data-day=\"";
                        echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                        echo "\"
                  data-caregiver-id=\"";
                        // line 62
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 62), "html", null, true);
                        echo "\">
                  <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" value=\"\" id=\"";
                        // line 63
                        echo twig_escape_filter($this->env, ($context["input_id"] ?? null), "html", null, true);
                        echo "\" disabled>
                  <label class=\"btn calendar-input-busy w-100 text-truncate overflow-hidden\" for=\"";
                        // line 64
                        echo twig_escape_filter($this->env, ($context["input_id"] ?? null), "html", null, true);
                        echo "\">-</label>
                </div>
                ";
                    }
                    // line 67
                    echo "                ";
                    $context["index"] = (($context["index"] ?? null) + 1);
                    // line 68
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['time'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['day'], $context['times'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "              </div>
            </div>
          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caregiver'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "      </div>
    </div>
  </div>
</form>


<script>
  document.addEventListener(\"DOMContentLoaded\", function () {

    const allCaregivers = document.querySelectorAll(\".day[data-caregiver-id]\");
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

    function updateDisplay(caregiverId) {
      const caregiver = caregivers[caregiverId];
      const currentDayEl = caregiver.days[caregiver.currentIndex];
      const currentDay = currentDayEl.dataset.day;

      caregiver.days.forEach(day => day.style.display = \"none\");
      currentDayEl.style.display = \"block\";

      const timeSlots = document.querySelectorAll(`.time-slot[data-caregiver-id=\"\${caregiverId}\"]`);
      timeSlots.forEach(slot => {
        if (slot.dataset.day === currentDay) {
          slot.style.display = \"block\";
        } else {
          slot.style.display = \"none\";
        }
      });
    }


    for (const id in caregivers) {
      updateDisplay(id);

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
<script>
  function saveToSession(checkbox) {
    const caregiverId = checkbox.getAttribute('data-caregiver-id');
    const caregiverName = checkbox.getAttribute('data-caregiver-name');
    const day = checkbox.getAttribute('data-day');
    const time = checkbox.value;
  
    const xhr = new XMLHttpRequest();
    const params = new URLSearchParams({
        caregiver_id: caregiverId,
        caregiver_name: caregiverName,
        day: day,
        time: time
    });
  
    const url = '";
        // line 170
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/makeappointment/store/';
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  

  
    xhr.onload = function() {
        if (xhr.status === 200) {

             window.location.href = '";
        // line 179
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/makeappointment/type/' + caregiverId;
        } else {
            console.error('Error');
        }
    };
  
    xhr.onerror = function() {
        console.error('Error');
    };
  
    xhr.send(params.toString());
  }
  </script>
  









";
    }

    // line 203
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 204
        echo "    ";
        $this->loadTemplate("./inc/footer.html", "Caregiver/index.html", 204)->display($context);
        // line 205
        echo "  ";
    }

    // line 206
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 207
        echo "Doctors
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
        return array (  405 => 207,  401 => 206,  397 => 205,  394 => 204,  390 => 203,  362 => 179,  350 => 170,  253 => 75,  243 => 70,  237 => 69,  231 => 68,  228 => 67,  222 => 64,  218 => 63,  214 => 62,  209 => 61,  200 => 57,  195 => 55,  187 => 54,  179 => 53,  175 => 52,  171 => 51,  166 => 50,  163 => 49,  160 => 48,  155 => 47,  150 => 46,  148 => 45,  144 => 44,  135 => 39,  126 => 36,  119 => 35,  115 => 34,  111 => 33,  97 => 24,  91 => 23,  80 => 19,  72 => 16,  64 => 12,  60 => 11,  52 => 5,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/index.html\" %}


{% block main %}


<form action=\"\" method=\"POST\" id=\"appointmentForm\">
  <div class=\"container\">
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
                <p class=\"card-text\"><b><i class=\"bi bi-geo-alt-fill mt-2\"></i></b><small class=\"ms-2\"><b>{{caregiver.clinic_address}}</b></small> <br> <small class=\"ms-4\"><b>{{caregiver.city}}</b></small></p>
                <a href=\"{{base_url}}/caregiver/show/{{caregiver.user_id}}\" class=\"btn btn-primary mt-2\"
                  style=\"width: 100%;\">Make Appointment</a>
              </div>
            </div>

            <div class=\"col-12 col-lg-8\" style=\"margin-left:-2px;\">
              <div class=\"row\">
                <div class=\"col-12 mt-2 mb-3\">
                  <div class=\"d-flex justify-content-around\">
                    <i class=\"bi bi-arrow-left-circle-fill prevDate\" id=\"prevDate-{{caregiver.user_id}}\" style=\"cursor: pointer;\"></i>
                    {% for day, value in caregiver.schedule %}
                    <header class=\"day\" data-caregiver-id=\"{{caregiver.user_id}}\" data-day=\"{{ day }}\">
                      <b>{{ day }}</b>
                    </header>
                    {% endfor %}
                    <i class=\"bi bi-arrow-right-circle-fill nextDate\" id=\"nextDate-{{caregiver.user_id}}\" style=\"cursor: pointer;\"></i>
                  </div>
                </div>

              </div>
              <div class=\"row gx-1 gy-2 time-slots\" data-caregiver-id=\"{{caregiver.user_id}}\">
                {% set index = 0 %}
                {% for day, times in caregiver.schedule %}
                {% for time in times.times %}
                {% set input_id = 'time_' ~ caregiver.user_id ~ '_' ~ day ~ '_' ~ index %}
                {% if time.status == \"free\" %}
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 time-slot\" data-day=\"{{day}}\"
                  data-caregiver-id=\"{{caregiver.user_id}}\">
                <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" value=\"{{ time.time }}\" 
                name=\"appointment[{{ caregiver.user_id }}][{{ caregiver.name }}][{{ day }}][]\" 
                id=\"{{ input_id }}\" data-caregiver-id=\"{{ caregiver.user_id }}\" data-caregiver-name=\"{{ caregiver.name }}\" 
                data-day=\"{{ day }}\" onclick=\"saveToSession(this)\">
            
            <label class=\"btn calendar-input w-100 text-truncate overflow-hidden\" for=\"{{ input_id }}\">{{ time.time }}</label>
            
                </div>
                {% else %}
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 time-slot\" data-day=\"{{day}}\"
                  data-caregiver-id=\"{{caregiver.user_id}}\">
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
    </div>
  </div>
</form>


<script>
  document.addEventListener(\"DOMContentLoaded\", function () {

    const allCaregivers = document.querySelectorAll(\".day[data-caregiver-id]\");
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

    function updateDisplay(caregiverId) {
      const caregiver = caregivers[caregiverId];
      const currentDayEl = caregiver.days[caregiver.currentIndex];
      const currentDay = currentDayEl.dataset.day;

      caregiver.days.forEach(day => day.style.display = \"none\");
      currentDayEl.style.display = \"block\";

      const timeSlots = document.querySelectorAll(`.time-slot[data-caregiver-id=\"\${caregiverId}\"]`);
      timeSlots.forEach(slot => {
        if (slot.dataset.day === currentDay) {
          slot.style.display = \"block\";
        } else {
          slot.style.display = \"none\";
        }
      });
    }


    for (const id in caregivers) {
      updateDisplay(id);

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
<script>
  function saveToSession(checkbox) {
    const caregiverId = checkbox.getAttribute('data-caregiver-id');
    const caregiverName = checkbox.getAttribute('data-caregiver-name');
    const day = checkbox.getAttribute('data-day');
    const time = checkbox.value;
  
    const xhr = new XMLHttpRequest();
    const params = new URLSearchParams({
        caregiver_id: caregiverId,
        caregiver_name: caregiverName,
        day: day,
        time: time
    });
  
    const url = '{{ base_url }}/makeappointment/store/';
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  

  
    xhr.onload = function() {
        if (xhr.status === 200) {

             window.location.href = '{{ base_url }}/makeappointment/type/' + caregiverId;
        } else {
            console.error('Error');
        }
    };
  
    xhr.onerror = function() {
        console.error('Error');
    };
  
    xhr.send(params.toString());
  }
  </script>
  









{% endblock %}
    {% block footer %}
    {% include './inc/footer.html'%}
  {% endblock %}
{% block naslov %}
Doctors
{% endblock %}
", "Caregiver/index.html", "C:\\laragon\\www\\doctorlab\\views\\Caregiver\\index.html");
    }
}
