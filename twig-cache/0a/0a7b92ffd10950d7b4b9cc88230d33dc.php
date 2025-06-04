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

/* Caregiver/query.html */
class __TwigTemplate_90b015f093453103b31222eaa90e04ce extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Caregiver/query.html", 1);
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
     <div class=\"row\">
      <div class=\"col-12 mt-2\">
        <small><b>994 Reults</b></small><br>
        <small>Find in Paris a Cardiologist(or a profesional offering acts of cardilogy and vascluar)offering online
          appointment booking</small>
      </div>
    </div>
    <div class=\"row mt-3 gy-3\">
      <div class=\"col-12 col-lg-8\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["caregivers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["caregiver"]) {
            // line 19
            echo "        <div class=\"card mb-2 border border-primary-subtle\" style=\"width: 100%;\" id=\"caregiver-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
          <div class=\"row\">
            <div class=\"col-12 col-lg-4\">
              <div class=\"d-flex flex-row mb-3\">
                <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/assets/uploads/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "profile_photo", [], "any", false, false, false, 23), "html", null, true);
            echo "\"
                  class=\"rounded-circle ms-3 mt-3\" alt=\"...\" style=\"width: 65px; height: 65px; object-fit: cover;\">
                <div class=\"p-2 ms-2 mt-3\">
                  <b>Dr. ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "surname", [], "any", false, false, false, 26), "html", null, true);
            echo "</b> <br> <small>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "doctor", [], "any", false, false, false, 26), "html", null, true);
            echo "</small>
                </div>
              </div>
              <div class=\"card-body ms-3\">
                <p class=\"card-text\"><b><i class=\"bi bi-geo-alt-fill mt-2\"></i></b><small class=\"ms-2\"><b>Rue de
                      Villiers</b></small> <br> <small class=\"ms-4\"><b>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "city", [], "any", false, false, false, 31), "html", null, true);
            echo "</b></small></p>
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/caregiver/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 32), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"
                  style=\"width: 100%;\">Make Appointment</a>
              </div>
            </div>

            <div class=\"col-12 col-lg-8\" style=\"margin-left:-2px;\">
              <div class=\"row\">
                <div class=\"col-12 mt-2 mb-3\">
                  <div class=\"d-flex justify-content-around\">
                    <i class=\"bi bi-arrow-left-circle-fill prevDate\" id=\"prevDate-";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 41), "html", null, true);
            echo "\"
                      style=\"cursor: pointer;\"></i>
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["caregiver"], "schedule", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["day"] => $context["value"]) {
                // line 44
                echo "                    <header class=\"day\" data-caregiver-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 44), "html", null, true);
                echo "\" data-day=\"";
                echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                echo "\">
                      <b>";
                // line 45
                echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                echo "</b>
                    </header>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['day'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                    <i class=\"bi bi-arrow-right-circle-fill nextDate\" id=\"nextDate-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 48), "html", null, true);
            echo "\"
                      style=\"cursor: pointer;\"></i>
                  </div>
                </div>

              </div>
              <div class=\"row gx-1 gy-2 time-slots\" data-caregiver-id=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 54), "html", null, true);
            echo "\">
                ";
            // line 55
            $context["index"] = 0;
            // line 56
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["caregiver"], "schedule", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["day"] => $context["times"]) {
                // line 57
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["times"], "times", [], "any", false, false, false, 57));
                foreach ($context['_seq'] as $context["_key"] => $context["time"]) {
                    // line 58
                    echo "                ";
                    $context["input_id"] = ((((("time_" . twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 58)) . "_") . $context["day"]) . "_") . ($context["index"] ?? null));
                    // line 59
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["time"], "status", [], "any", false, false, false, 59) == "free")) {
                        // line 60
                        echo "                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 time-slot\" data-day=\"";
                        echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                        echo "\"
                  data-caregiver-id=\"";
                        // line 61
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 61), "html", null, true);
                        echo "\">
                  <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" value=\"";
                        // line 62
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["time"], "time", [], "any", false, false, false, 62), "html", null, true);
                        echo "\"
                    name=\"appointment[";
                        // line 63
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 63), "html", null, true);
                        echo "][";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "name", [], "any", false, false, false, 63), "html", null, true);
                        echo "][";
                        echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                        echo "][]\" id=\"";
                        echo twig_escape_filter($this->env, ($context["input_id"] ?? null), "html", null, true);
                        echo "\"
                    data-caregiver-id=\"";
                        // line 64
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 64), "html", null, true);
                        echo "\" data-caregiver-name=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "name", [], "any", false, false, false, 64), "html", null, true);
                        echo "\"
                    data-day=\"";
                        // line 65
                        echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                        echo "\" onclick=\"saveToSession(this)\">

                  <label class=\"btn calendar-input w-100 text-truncate overflow-hidden\" for=\"";
                        // line 67
                        echo twig_escape_filter($this->env, ($context["input_id"] ?? null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                         // line 68
$context["time"], "time", [], "any", false, false, false, 68), "html", null, true);
                        echo "</label>

                </div>
                ";
                    } else {
                        // line 72
                        echo "                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 time-slot\" data-day=\"";
                        echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                        echo "\"
                  data-caregiver-id=\"";
                        // line 73
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caregiver"], "user_id", [], "any", false, false, false, 73), "html", null, true);
                        echo "\">
                  <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" value=\"\" id=\"";
                        // line 74
                        echo twig_escape_filter($this->env, ($context["input_id"] ?? null), "html", null, true);
                        echo "\" disabled>
                  <label class=\"btn calendar-input-busy w-100 text-truncate overflow-hidden\"
                    for=\"";
                        // line 76
                        echo twig_escape_filter($this->env, ($context["input_id"] ?? null), "html", null, true);
                        echo "\">-</label>
                </div>
                ";
                    }
                    // line 79
                    echo "                ";
                    $context["index"] = (($context["index"] ?? null) + 1);
                    // line 80
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['time'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['day'], $context['times'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "              </div>
            </div>
          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caregiver'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "      </div>
      </form>
       <!-- Col-4 for aside content -->
    <div class=\"col-12 col-lg-4 mb-5\">
      <div class=\"card sticky-top\" style=\"height: 400px; width: 100%; overflow: hidden;\">

        <div class=\"card-body p-0\">
          <div id=\"map\" data-caregivers='";
        // line 94
        echo json_encode(($context["caregivers"] ?? null));
        echo "'></div>
        </div>
      </div>
    </div>
    </div>
  </div>



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
        // line 192
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/makeappointment/store/';
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');



    xhr.onload = function () {
      if (xhr.status === 200) {

        window.location.href = '";
        // line 201
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/makeappointment/type/' + caregiverId;
      } else {
        console.error('Error');
      }
    };

    xhr.onerror = function () {
      console.error('Error');
    };

    xhr.send(params.toString());
  }
</script>
<script>
  
  function initMap() {
    const mapDiv = document.getElementById('map');
    const caregivers = JSON.parse(mapDiv.dataset.caregivers);

    if (caregivers.length === 0) return;

    const map = new google.maps.Map(mapDiv, {
      zoom: 13,
      center: {
        lat: parseFloat(caregivers[0].latitude),
        lng: parseFloat(caregivers[0].longitude)
      }
    });

    caregivers.forEach(cg => {
      new google.maps.Marker({
        position: {
          lat: parseFloat(cg.latitude),
          lng: parseFloat(cg.longitude)
        },
        map: map
      });
    });
  }
</script>











";
    }

    // line 253
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 254
        $this->loadTemplate("./inc/footer.html", "Caregiver/query.html", 254)->display($context);
    }

    // line 256
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 257
        echo "Search
";
    }

    public function getTemplateName()
    {
        return "Caregiver/query.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 257,  449 => 256,  445 => 254,  441 => 253,  385 => 201,  373 => 192,  272 => 94,  263 => 87,  253 => 82,  247 => 81,  241 => 80,  238 => 79,  232 => 76,  227 => 74,  223 => 73,  218 => 72,  211 => 68,  208 => 67,  203 => 65,  197 => 64,  187 => 63,  183 => 62,  179 => 61,  174 => 60,  171 => 59,  168 => 58,  163 => 57,  158 => 56,  156 => 55,  152 => 54,  142 => 48,  133 => 45,  126 => 44,  122 => 43,  117 => 41,  103 => 32,  99 => 31,  87 => 26,  79 => 23,  71 => 19,  67 => 18,  52 => 5,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/index.html\" %}


{% block main %}


<form action=\"\" method=\"POST\" id=\"appointmentForm\">
  <div class=\"container\">
     <div class=\"row\">
      <div class=\"col-12 mt-2\">
        <small><b>994 Reults</b></small><br>
        <small>Find in Paris a Cardiologist(or a profesional offering acts of cardilogy and vascluar)offering online
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
                <img src=\"{{base_url}}/assets/uploads/images/{{caregiver.profile_photo}}\"
                  class=\"rounded-circle ms-3 mt-3\" alt=\"...\" style=\"width: 65px; height: 65px; object-fit: cover;\">
                <div class=\"p-2 ms-2 mt-3\">
                  <b>Dr. {{caregiver.name}} {{caregiver.surname}}</b> <br> <small>{{caregiver.doctor}}</small>
                </div>
              </div>
              <div class=\"card-body ms-3\">
                <p class=\"card-text\"><b><i class=\"bi bi-geo-alt-fill mt-2\"></i></b><small class=\"ms-2\"><b>Rue de
                      Villiers</b></small> <br> <small class=\"ms-4\"><b>{{caregiver.city}}</b></small></p>
                <a href=\"{{base_url}}/caregiver/show/{{caregiver.user_id}}\" class=\"btn btn-primary mt-2\"
                  style=\"width: 100%;\">Make Appointment</a>
              </div>
            </div>

            <div class=\"col-12 col-lg-8\" style=\"margin-left:-2px;\">
              <div class=\"row\">
                <div class=\"col-12 mt-2 mb-3\">
                  <div class=\"d-flex justify-content-around\">
                    <i class=\"bi bi-arrow-left-circle-fill prevDate\" id=\"prevDate-{{caregiver.user_id}}\"
                      style=\"cursor: pointer;\"></i>
                    {% for day, value in caregiver.schedule %}
                    <header class=\"day\" data-caregiver-id=\"{{caregiver.user_id}}\" data-day=\"{{ day }}\">
                      <b>{{ day }}</b>
                    </header>
                    {% endfor %}
                    <i class=\"bi bi-arrow-right-circle-fill nextDate\" id=\"nextDate-{{caregiver.user_id}}\"
                      style=\"cursor: pointer;\"></i>
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
                    name=\"appointment[{{ caregiver.user_id }}][{{ caregiver.name }}][{{ day }}][]\" id=\"{{ input_id }}\"
                    data-caregiver-id=\"{{ caregiver.user_id }}\" data-caregiver-name=\"{{ caregiver.name }}\"
                    data-day=\"{{ day }}\" onclick=\"saveToSession(this)\">

                  <label class=\"btn calendar-input w-100 text-truncate overflow-hidden\" for=\"{{ input_id }}\">{{
                    time.time }}</label>

                </div>
                {% else %}
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 time-slot\" data-day=\"{{day}}\"
                  data-caregiver-id=\"{{caregiver.user_id}}\">
                  <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" value=\"\" id=\"{{ input_id }}\" disabled>
                  <label class=\"btn calendar-input-busy w-100 text-truncate overflow-hidden\"
                    for=\"{{ input_id }}\">-</label>
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
      </form>
       <!-- Col-4 for aside content -->
    <div class=\"col-12 col-lg-4 mb-5\">
      <div class=\"card sticky-top\" style=\"height: 400px; width: 100%; overflow: hidden;\">

        <div class=\"card-body p-0\">
          <div id=\"map\" data-caregivers='{{ caregivers|json_encode|raw }}'></div>
        </div>
      </div>
    </div>
    </div>
  </div>



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



    xhr.onload = function () {
      if (xhr.status === 200) {

        window.location.href = '{{ base_url }}/makeappointment/type/' + caregiverId;
      } else {
        console.error('Error');
      }
    };

    xhr.onerror = function () {
      console.error('Error');
    };

    xhr.send(params.toString());
  }
</script>
<script>
  
  function initMap() {
    const mapDiv = document.getElementById('map');
    const caregivers = JSON.parse(mapDiv.dataset.caregivers);

    if (caregivers.length === 0) return;

    const map = new google.maps.Map(mapDiv, {
      zoom: 13,
      center: {
        lat: parseFloat(caregivers[0].latitude),
        lng: parseFloat(caregivers[0].longitude)
      }
    });

    caregivers.forEach(cg => {
      new google.maps.Marker({
        position: {
          lat: parseFloat(cg.latitude),
          lng: parseFloat(cg.longitude)
        },
        map: map
      });
    });
  }
</script>











{% endblock %}
{% block footer %}
{% include './inc/footer.html'%}
{% endblock %}
{% block naslov %}
Search
{% endblock %}", "Caregiver/query.html", "C:\\laragon\\www\\doctorlab\\views\\Caregiver\\query.html");
    }
}
