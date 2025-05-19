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
        $this->parent = $this->loadTemplate("_global/caregiver_index.html", "Availability/create.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_caregiver($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  <div class=\"container-fluid\">
    <div class=\"row\" style=\"height: 100vh;\">
      <div class=\"col-6 d-flex justify-content-center align-items-center border-end border-dark-subtle\">
        <div class=\"card p-3 w-50\">
          <form method=\"POST\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/availability/store\">
          <h5 class=\"text-center mb-5\"><i class=\"bi bi-calendar-check-fill\"></i> Organize Your Monthly Schedule 2025</h5>
          <h5 class=\"text-center\">
            <span id=\"month-name\" 
            data-months=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_join_filter(($context["months"] ?? null), ", "), "html", null, true);
        echo "\" 
            data-current-month=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["currentMonthIndex"] ?? null), "html", null, true);
        echo "\">
              <span id=\"prev-month\" class=\"arrow me-5\" style=\"cursor: pointer;\">
                <i class=\"bi bi-caret-left-fill\"></i>
              </span>
              <span id=\"current-month\">";
        // line 18
        echo twig_escape_filter($this->env, ($context["currentMonth"] ?? null), "html", null, true);
        echo "</span>
              <span id=\"next-month\" class=\"arrow ms-5\" style=\"cursor: pointer;\">
                <i class=\"bi bi-caret-right-fill\"></i>
              </span>
            </span>
          </h5>
          <div class=\"card-body\">
            <div class=\"container\">
              <div class=\"row row-gap-3\">
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["timesData"] ?? null), "times", [], "any", false, false, false, 27));
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
            // line 28
            echo "                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                  <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" name=\"time[]\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, $context["time"], "html", null, true);
            echo "\" id=\"time";
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
        echo "              </div>
            </div>
          </div>
          <!-- Dodavanje hidden input-a za mesec koji je selektovan -->
          <input type=\"hidden\" name=\"selected_month\" id=\"selected_month\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["currentMonth"] ?? null), "html", null, true);
        echo "\">
          
          <div class=\"d-flex justify-content-between mt-3 gap-1\">
            <button id=\"submit-btn\" type=\"submit\" class=\"btn btn-primary\" style=\"width: 30%;\">Submit</button>
            <button id=\"submit-btn\" type=\"button\" class=\"btn btn-secondary\" style=\"width: 30%;\">Cancel</button>
          </div>
        </form>
        </div>
      </div>
      <div class=\"col-4 d-flex justify-content-center align-items-center\">
        <div class=\"card p-3\">aas</div>
      </div>
    </div>
  </div>


<script>

</script>
";
    }

    // line 57
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "Create Schedule
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
        return array (  166 => 58,  162 => 57,  138 => 37,  132 => 33,  113 => 30,  107 => 29,  104 => 28,  87 => 27,  75 => 18,  68 => 14,  64 => 13,  57 => 9,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_global/caregiver_index.html\" %}


{% block caregiver %}
  <div class=\"container-fluid\">
    <div class=\"row\" style=\"height: 100vh;\">
      <div class=\"col-6 d-flex justify-content-center align-items-center border-end border-dark-subtle\">
        <div class=\"card p-3 w-50\">
          <form method=\"POST\" action=\"{{base_url}}/availability/store\">
          <h5 class=\"text-center mb-5\"><i class=\"bi bi-calendar-check-fill\"></i> Organize Your Monthly Schedule 2025</h5>
          <h5 class=\"text-center\">
            <span id=\"month-name\" 
            data-months=\"{{ months|join(', ') }}\" 
            data-current-month=\"{{ currentMonthIndex }}\">
              <span id=\"prev-month\" class=\"arrow me-5\" style=\"cursor: pointer;\">
                <i class=\"bi bi-caret-left-fill\"></i>
              </span>
              <span id=\"current-month\">{{ currentMonth }}</span>
              <span id=\"next-month\" class=\"arrow ms-5\" style=\"cursor: pointer;\">
                <i class=\"bi bi-caret-right-fill\"></i>
              </span>
            </span>
          </h5>
          <div class=\"card-body\">
            <div class=\"container\">
              <div class=\"row row-gap-3\">
                {% for time in timesData.times %}
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                  <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" name=\"time[]\" value=\"{{ time }}\" id=\"time{{ loop.index }}\">
                  <label class=\"btn calendar-input w-100\" for=\"time{{ loop.index }}\">{{ time }}</label>
                </div>
                {% endfor %}
              </div>
            </div>
          </div>
          <!-- Dodavanje hidden input-a za mesec koji je selektovan -->
          <input type=\"hidden\" name=\"selected_month\" id=\"selected_month\" value=\"{{ currentMonth }}\">
          
          <div class=\"d-flex justify-content-between mt-3 gap-1\">
            <button id=\"submit-btn\" type=\"submit\" class=\"btn btn-primary\" style=\"width: 30%;\">Submit</button>
            <button id=\"submit-btn\" type=\"button\" class=\"btn btn-secondary\" style=\"width: 30%;\">Cancel</button>
          </div>
        </form>
        </div>
      </div>
      <div class=\"col-4 d-flex justify-content-center align-items-center\">
        <div class=\"card p-3\">aas</div>
      </div>
    </div>
  </div>


<script>

</script>
{% endblock %}
{% block naslov %}
Create Schedule
{% endblock %}", "Availability/create.html", "C:\\laragon\\www\\doctorlab\\views\\Availability\\create.html");
    }
}
