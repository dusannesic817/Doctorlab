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

/* Availability/create.html */
class __TwigTemplate_946462a6d1f6bbabdbd9c929ce2520d4 extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Availability/create.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"container-fluid\">
  <div class=\"row\" style=\"height: 100vh;\">
    <!-- Prva kolona sa centriranom karticom -->
    <div class=\"col-6 d-flex justify-content-center align-items-center border-end border-dark-subtle\">

      <div class=\"card p-3 w-50\">

        <h5 class=\"text-center mb-5\"><i class=\"bi bi-calendar-check-fill\"></i> Organize Yout Monthly Schedule 2025</b>
        </h5>

        <h5 class=\"text-center\">
          <span id=\"prev-month\" class=\"arrow me-4\" style=\"cursor: pointer;\"><i class=\"bi bi-caret-left-fill\"></i></span>
          <span id=\"month-name\"></span>
          <span id=\"next-month\" class=\"arrow ms-4\" style=\"cursor: pointer;\"><i
              class=\"bi bi-caret-right-fill\"></i></span>
        </h5>


        <div class=\"card-body\">
          <div class=\"container\">
            <div class=\"row  row-gap-3\">
              ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["timesData"] ?? null), "times", [], "any", false, false, false, 26));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["time"]) {
            // line 27
            echo "              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" name=\"time[]\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, $context["time"], "html", null, true);
            echo "\"
                  id=\"time";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29), "html", null, true);
            echo "\">
                <label class=\"btn calendar-input w-100\" for=\"time";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["time"], "html", null, true);
            echo "</label>
              </div>
              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['time'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </div>
          </div>
        </div>
        <div class=\"d-flex justify-content-between mt-3 gap-1\">
          <button id=\"submit-btn\" type=\"button\" class=\"btn btn-primary\" style=\"width: 30%;\">Submit</button>
          <button id=\"submit-btn\" type=\"button\" class=\"btn btn-secondary\" style=\"width: 30%;\">Cancel</button>

        </div>

      </div>


    </div>
    <div class=\"col-4 d-flex justify-content-center align-items-center\">
      <div class=\"card p-3\">aas</div>
    </div>
  </div>
</div>
</div>

<script>
  document.addEventListener(\"DOMContentLoaded\", function () {
    const monthElement = document.getElementById(\"month-name\");
    const prevMonthElement = document.getElementById(\"prev-month\");
    const nextMonthElement = document.getElementById(\"next-month\");

    const months = [\"April\", \"Maj\", \"Jun\", \"Jul\", \"Avgust\", \"Septembar\", \"Oktobar\", \"Novembar\", \"Decembar\"];

    let currentMonth = 0; // Počinje od Aprila, koji je prvi u nizu (index 0)

    function updateMonth() {
      monthElement.textContent = months[currentMonth];

      // Sakrij ili prikaži strelice u zavisnosti od trenutnog meseca
      prevMonthElement.style.visibility = currentMonth === 0 ? \"hidden\" : \"visible\";
      nextMonthElement.style.visibility = currentMonth === months.length - 1 ? \"hidden\" : \"visible\";
    }

    nextMonthElement.addEventListener(\"click\", function () {
      if (currentMonth < months.length - 1) {
        currentMonth++;
        updateMonth();
      }
    });

    prevMonthElement.addEventListener(\"click\", function () {
      if (currentMonth > 0) {
        currentMonth--;
        updateMonth();
      }
    });

    updateMonth(); // Inicijalno postavlja mesec i ažurira vidljivost strelica
  });
</script>




";
    }

    public function getTemplateName()
    {
        return "Availability/create.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  101 => 30,  97 => 29,  93 => 28,  90 => 27,  73 => 26,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/index.html\" %}


{% block main %}
<div class=\"container-fluid\">
  <div class=\"row\" style=\"height: 100vh;\">
    <!-- Prva kolona sa centriranom karticom -->
    <div class=\"col-6 d-flex justify-content-center align-items-center border-end border-dark-subtle\">

      <div class=\"card p-3 w-50\">

        <h5 class=\"text-center mb-5\"><i class=\"bi bi-calendar-check-fill\"></i> Organize Yout Monthly Schedule 2025</b>
        </h5>

        <h5 class=\"text-center\">
          <span id=\"prev-month\" class=\"arrow me-4\" style=\"cursor: pointer;\"><i class=\"bi bi-caret-left-fill\"></i></span>
          <span id=\"month-name\"></span>
          <span id=\"next-month\" class=\"arrow ms-4\" style=\"cursor: pointer;\"><i
              class=\"bi bi-caret-right-fill\"></i></span>
        </h5>


        <div class=\"card-body\">
          <div class=\"container\">
            <div class=\"row  row-gap-3\">
              {% for time in timesData.times %}
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" name=\"time[]\" value=\"{{ time }}\"
                  id=\"time{{ loop.index }}\">
                <label class=\"btn calendar-input w-100\" for=\"time{{ loop.index }}\">{{ time }}</label>
              </div>
              {%endfor%}
            </div>
          </div>
        </div>
        <div class=\"d-flex justify-content-between mt-3 gap-1\">
          <button id=\"submit-btn\" type=\"button\" class=\"btn btn-primary\" style=\"width: 30%;\">Submit</button>
          <button id=\"submit-btn\" type=\"button\" class=\"btn btn-secondary\" style=\"width: 30%;\">Cancel</button>

        </div>

      </div>


    </div>
    <div class=\"col-4 d-flex justify-content-center align-items-center\">
      <div class=\"card p-3\">aas</div>
    </div>
  </div>
</div>
</div>

<script>
  document.addEventListener(\"DOMContentLoaded\", function () {
    const monthElement = document.getElementById(\"month-name\");
    const prevMonthElement = document.getElementById(\"prev-month\");
    const nextMonthElement = document.getElementById(\"next-month\");

    const months = [\"April\", \"Maj\", \"Jun\", \"Jul\", \"Avgust\", \"Septembar\", \"Oktobar\", \"Novembar\", \"Decembar\"];

    let currentMonth = 0; // Počinje od Aprila, koji je prvi u nizu (index 0)

    function updateMonth() {
      monthElement.textContent = months[currentMonth];

      // Sakrij ili prikaži strelice u zavisnosti od trenutnog meseca
      prevMonthElement.style.visibility = currentMonth === 0 ? \"hidden\" : \"visible\";
      nextMonthElement.style.visibility = currentMonth === months.length - 1 ? \"hidden\" : \"visible\";
    }

    nextMonthElement.addEventListener(\"click\", function () {
      if (currentMonth < months.length - 1) {
        currentMonth++;
        updateMonth();
      }
    });

    prevMonthElement.addEventListener(\"click\", function () {
      if (currentMonth > 0) {
        currentMonth--;
        updateMonth();
      }
    });

    updateMonth(); // Inicijalno postavlja mesec i ažurira vidljivost strelica
  });
</script>




{% endblock %}", "Availability/create.html", "C:\\laragon\\www\\doctorlab\\views\\Availability\\create.html");
    }
}
