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

/* Availability/show.html */
class __TwigTemplate_2f855a97414576fde944eaed7cac349c extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Availability/show.html", 1);
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
     
          <h5 class=\"text-center mb-5\"><i class=\"bi bi-calendar-check-fill\"></i> Organize Yout Monthly Schedule 2025</b></h5>
      
          <h5 class=\"text-center\">
            <span id=\"prev-month\" class=\"arrow me-4\" style=\"cursor: pointer;\"><i class=\"bi bi-caret-left-fill\"></i></span>
            <span id=\"month-name\"></span>
            <span id=\"next-month\" class=\"arrow ms-4\" style=\"cursor: pointer;\"><i class=\"bi bi-caret-right-fill\"></i></span>
        </h5>
        

          <div class=\"card-body\">
            <div class=\"container\">
            <div class=\"row  row-gap-3\">
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" name=\"time[]\" value=\"08:00\" id=\"time1\">
                <label class=\"btn calendar-input w-100\" for=\"time1\">08:00</label>
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 \">
                <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" name=\"time[]\" value=\"08:00\" id=\"time2\">
                <label class=\"btn calendar-input w-100\" for=\"time2\">08:00</label>
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 \">
                <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" name=\"time[]\" value=\"08:00\" id=\"time3\">
                <label class=\"btn calendar-input w-100\" for=\"time3\">08:00</label>
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 \">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
            </div>        
          </div>    
          </div>
          <div class=\"d-flex justify-content-between mt-3 gap-1\">
            <button id=\"submit-btn\" type=\"button\" class=\"btn btn-primary\" style=\"width: 30%;\">Submit</button>
            <button id=\"submit-btn\" type=\"button\" class=\"btn btn-secondary\" style=\"width: 30%;\">Cancel</button>
            
          </div>
            
        </div>
      
        
      </div>
    </div>

    <div class=\"col-4 d-flex justify-content-center align-items-center\">
      <div class=\"card p-3\">aas</div>
    </div>
  </div>
</div>

<script >
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
        return "Availability/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  46 => 4,  35 => 1,);
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
     
          <h5 class=\"text-center mb-5\"><i class=\"bi bi-calendar-check-fill\"></i> Organize Yout Monthly Schedule 2025</b></h5>
      
          <h5 class=\"text-center\">
            <span id=\"prev-month\" class=\"arrow me-4\" style=\"cursor: pointer;\"><i class=\"bi bi-caret-left-fill\"></i></span>
            <span id=\"month-name\"></span>
            <span id=\"next-month\" class=\"arrow ms-4\" style=\"cursor: pointer;\"><i class=\"bi bi-caret-right-fill\"></i></span>
        </h5>
        

          <div class=\"card-body\">
            <div class=\"container\">
            <div class=\"row  row-gap-3\">
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" name=\"time[]\" value=\"08:00\" id=\"time1\">
                <label class=\"btn calendar-input w-100\" for=\"time1\">08:00</label>
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 \">
                <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" name=\"time[]\" value=\"08:00\" id=\"time2\">
                <label class=\"btn calendar-input w-100\" for=\"time2\">08:00</label>
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 \">
                <input type=\"checkbox\" class=\"btn-check w-100 calendar-input\" name=\"time[]\" value=\"08:00\" id=\"time3\">
                <label class=\"btn calendar-input w-100\" for=\"time3\">08:00</label>
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 \">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
              <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                <input type=\"button\" class=\"btn w-100 calendar-input \" value=\"08:00\">
              </div>
            </div>        
          </div>    
          </div>
          <div class=\"d-flex justify-content-between mt-3 gap-1\">
            <button id=\"submit-btn\" type=\"button\" class=\"btn btn-primary\" style=\"width: 30%;\">Submit</button>
            <button id=\"submit-btn\" type=\"button\" class=\"btn btn-secondary\" style=\"width: 30%;\">Cancel</button>
            
          </div>
            
        </div>
      
        
      </div>
    </div>

    <div class=\"col-4 d-flex justify-content-center align-items-center\">
      <div class=\"card p-3\">aas</div>
    </div>
  </div>
</div>

<script >
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




{% endblock %}", "Availability/show.html", "C:\\laragon\\www\\doctorlab\\views\\Availability\\show.html");
    }
}
