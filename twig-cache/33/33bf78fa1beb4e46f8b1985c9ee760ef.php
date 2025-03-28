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

/* Main/home.html */
class __TwigTemplate_4cf08ed59d71df07e9a838835caad1f3 extends Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Main/home.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $this->loadTemplate("./inc/search.html", "Main/home.html", 5)->display($context);
        // line 6
        echo "
<div class=\"container\">
  <div class=\"row mt-5\">
    <div class=\"col-12\">
      <div class=\"d-flex flex-row mb-3\">
        <div class=\"p-2 links me-3\"><a href=\"\"><b>Profits</b></a></div>
        <div class=\"p-2 links me-3\"><a href=\"\"><b>Solutions</b></a></div>
        <div class=\"p-2 links\"><a href=\"\"><b>Innovations</b></a></div>
      </div>
    </div>
    <hr>
  </div>
  <!--Benefits to improve your daily life-->
  <div class=\"row mb-2 mt-3\">
    <div class=\"col-12 text-center\">
      <h2><b>Benefits to improve your daily life</b></h2>
    </div>
  </div>
  <div class=\"row mt-5 h-50 gy-2 justify-content-center\">
    <div class=\"col-12 col-lg-4 d-flex justify-content-center\">
      <div class=\"card shadow-lg card-hover\" style=\"width: 25rem;\">
        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/image_3.png\" class=\"card-img-top\" alt=\"...\">
        <div class=\"card-body\">
          <p class=\"card-text\">Increase the ravenue of your business</p>
        </div>
      </div>
    </div>
    <div class=\"col-12 col-lg-4 d-flex justify-content-center\">
      <div class=\"card shadow-lg card-hover\" style=\"width: 25rem;\">
        <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/image_2.jpg\" class=\"card-img-top\" alt=\"...\">
        <div class=\"card-body\">
          <p class=\"card-text\">Enjoy a better quality of life </p>
        </div>
      </div>
    </div>
    <div class=\"col-12 col-lg-4 d-flex justify-content-center\">
      <div class=\"card shadow-lg card-hover\" style=\"width: 25rem;\">
        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/image_1.jpg\" class=\"card-img-top\" alt=\"...\">
        <div class=\"card-body\">
          <p class=\"card-text\">Provide the best possible care to your patients</p>
        </div>
      </div>
    </div>
  </div>
  <!--Your health partner every day-->
  <div class=\"row row-health mb-5\">
    <div class=\"col-12\">
      <h2 class=\"text-center\"><b>Your health partner every day</b></h2>
    </div>
  </div>
  <div class=\"row ms-5 justify-content-center\">
    <div class=\"col-12 col-md-6 col-lg-4 d-flex justify-content-center\">
      <div class=\"card border-0\" style=\"width: 18rem;\">
        <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/cal.png\" class=\"card-img-top\" alt=\"...\">
        <div class=\"card-body text-center\">
          <small><b>Access to care more easily</b></small><br>
          <small>Book face to face consultations, and receive reminders so you never miss them</small>
        </div>
      </div>
    </div>
    <div class=\"col-12 col-md-6 col-lg-4 d-flex justify-content-center\">
      <div class=\"card  border-0\" style=\"width: 18rem;\">
        <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/msg.png\" class=\"card-img-top\" alt=\"...\">
        <div class=\"card-body text-center mt-4\">
          <small><b>Benefit from personalized care</b></small><br>
          <small>Talk to your caregivers by message, get preventive advice, and receive care when you need</small>
        </div>
      </div>
    </div>
    <div class=\"col-12 col-md-6 col-lg-4 d-flex justify-content-center\">
      <div class=\"cardborder-0\" style=\"width: 18rem;\">
        <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/heart.png\" class=\"card-img-top\" alt=\"...\">
        <div class=\"card-body text-center\">
          <small><b>Manage your health</b></small><br>
          <small>Easily gather all of your health information and that of those who matter to you</small>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"container-fluid background mt-5 d-flex align-items-center border-bottom shadow-lg\" style=\"height: 50vh;\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-3 col-12 d-flex justify-content-center\">
        <div class=\"card\" style=\"width: 100%; max-width: 18rem; border-color: #01264d !important\">
          <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/doctor.jpg\" class=\"card-img-top img-fluid rounded-bottom\" alt=\"...\"
            style=\"object-fit: cover; width: 100%; height: 100%;\">
        </div>
      </div>

      <div class=\"col-lg-8 col-12 d-flex justify-content-center\">
        <div class=\"d-flex flex-column mb-3 caregivers\">
          <div class=\"p-2 d-none  d-lg-block\">
            <h3><b>Are you caregiver?</b></h3>
          </div>
          <div class=\"p-2 mb-3 d-none  d-lg-block\" style=\"margin-top: -20px;\"><small><b>Discover Docotorlab for
                caregiver and improve your daily life</b></small></div>
          <div class=\"p-2 d-none d-lg-block\"><i class=\"bi bi-arrow-right\" style=\"color:  #ffcd4d\"></i> Provide the
            best possible care to your patients</div>
          <div class=\"p-2 d-none d-lg-block\"><i class=\"bi bi-arrow-right\" style=\"color:  #ffcd4d\"></i> Enjoy a better
            quality of life at work</div>
          <div class=\"p-2 d-none  d-lg-block\"><i class=\"bi bi-arrow-right\" style=\"color:  #ffcd4d\"></i> Increase the
            revenue of your business</div>
          <a class=\"btn btn-primary mt-4\" href=\"#\" role=\"button\">Learn more about our solutions</a>
        </div>
      </div>
    </div>
  </div>
</div>







<div class=\"container-fluid  d-flex align-items-center\" style=\"background-color: #e4ecf7; height: 60vh;\">
  <div class=\"container\">
    <div class=\"row mb-5 d-none d-lg-block\">
      <div class=\"col-lg-12\">
        <h2 class=\"text-center\" style=\"margin-top: -60px;\"><b>Discover Our Solutions Designed for You</b></h2>
      </div>
    </div>
    <div class=\"row justify-content-center text-center\">
      <!-- Image Section -->
      <div class=\"col-4 col-lg-4 mt-2 d-flex justify-content-center\">
        <div class=\"card border-0\" style=\"width: 18rem; background-color: #e4ecf7;\">
          <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/ass.png\" class=\"card-img-top\" alt=\"...\">
        </div>
      </div>
      <!-- Left Column -->
      <div class=\"col-4 col-lg-3 mt-4 d-flex flex-column align-items-center\">
        <div class=\"d-flex flex-column mb-3 text-center caregiver\">
        
          ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["caregiver_data"] ?? null), "doctors", [], "any", false, false, false, 141));
        foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
            // line 142
            echo "                <div class=\"p-2\">
                    <a href=\"#\">
                        <small><b>";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "title", [], "any", false, false, false, 144), "html", null, true);
            echo "</b></small> 
                        <i class=\"bi bi-arrow-right-short\"></i>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "        </div>
    </div>
    
      <!-- Right Column -->
      <div class=\"col-4 col-lg-3 mt-4 d-flex flex-column align-items-center\">
        <div class=\"d-flex flex-column mb-3 text-center caregiver\">
          <div class=\"p-2\"><a href=\"#\"><small><b>General Practitioner</b></small> <i
                class=\"bi bi-arrow-right-short\"></i></a></div>
          <div class=\"p-2\"><a href=\"#\"><small><b>General Practitioner</b></small></a></div>
          <div class=\"p-2\"><a href=\"#\"><small><b>General Practitioner</b></small></a></div>
          <div class=\"p-2\"><a href=\"#\"><small><b>General Practitioner</b></small></a></div>
          <div class=\"p-2\"><a href=\"#\"><small><b>General Practitioner</b></small></a></div>
          <div class=\"p-2\"><a href=\"#\"><small><b>General Practitioner</b></small></a></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Stats-->
<div class=\"container\" style=\"height: 30vh\">
  <div class=\"row mt-5\">
    <div class=\"col-md-12 col-lg-12\">
      <div class=\"d-flex flex-wrap justify-content-around\">
        <div class=\"p-2 text-center\">
          <h1><b>80 Milion </b><i class=\"bi bi-check-circle-fill\" style=\"color:  green\"></i></h1><br><small>Better
            Cared People</small>
        </div>
        <div class=\"p-2 text-center\">
          <h1><b>410K </b><i class=\"bi bi-check-circle-fill\" style=\"color:  green\"></i></h1><br><small>Caregivers
            using Doctolab</small>
        </div>
        <div class=\"p-2 text-center\">
          <h1><b>4 Milion </b><i class=\"bi bi-check-circle-fill\" style=\"color:  green\"></i></h1><br><small>Documents
            Shared Each Month</small>
        </div>
        <div class=\"p-2 text-center\">
          <h1><b>1 Milion </b><i class=\"bi bi-check-circle-fill\" style=\"color:  green\"></i></h1><br><small>Visits Each
            Month</small>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Footer-->
<div class=\"container-fluid\">
  <hr class=\"shadow-lg\" style=\"color: #6da7f7;\">
  <div class=\"container py-3\">
    <div class=\"row mt-5 text-center text-lg-start d-flex justify-content-center align-items-center\">
      <div class=\"col-12 col-lg-4\">
        <div><b class=\"teget\">Have a question?</b></div>
        <small class=\"grey\">Get help online for quick advice, or contact us for consultation</small>
      </div>
      <div class=\" col-12 col-lg-8 d-flex justify-content-center justify-content-lg-end mt-3 mt-lg-0\">
        <div class=\"d-flex flex-row-reverse\">
          <div class=\"p-2\"><a class=\"btn btn-primary\" href=\"#\" role=\"button\" style=\"width: 200px;\"><i
                class=\"bi bi-chat-dots-fill\"></i> Chat</a></div>
        </div>
      </div>
    </div>
    <hr style=\"color: #6da7f7;\">
    <div class=\"row text-center text-lg-start d-flex justify-content-center align-items-center\">
      <div class=\"col-12 col-lg-4\">
        <div class=\"mb-2\"><img src=\"";
        // line 213
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/logo_white.png\" alt=\"DoctorLab Logo\" ></div>
        <small class=\"grey\">Copyright 2025 Docotorlab, all right reserved</small>
      </div>
      <div class=\"col-12 col-lg-8 d-flex justify-content-center justify-content-lg-end mt-3 mt-lg-0\">
        <div class=\"d-flex flex-row-reverse\">
          <div class=\"p-2\">
            <img src=\"";
        // line 219
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/app_download.png\" alt=\"...\" style=\"height: 6rem;\">
          </div>

        </div>
      </div>
      <div class=\"row mt-5\" style=\"margin-left: -40px;\">
        <div class=\"col-lg-12 pb-5\">
          <small class=\"grey\">
            Doctolib, united for your health
            Terms and conditions of use
            • Terms of use agreement
            • Personal data protection policy
            • Cookie policy
            • Cookie management and consent settings
            • Listing rules
            • Legal notice
            • Signal illicit content
            CNOM directory of doctors
            • ONCD directory of dentists
            • Ordre National des Médecins
            • Ordre National des Chirurgiens-Dentistes
          </small>
        </div>
      </div>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "Main/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 219,  298 => 213,  232 => 149,  221 => 144,  217 => 142,  213 => 141,  203 => 134,  158 => 92,  140 => 77,  128 => 68,  116 => 59,  97 => 43,  86 => 35,  75 => 27,  52 => 6,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/home.html", "C:\\laragon\\www\\doctorlab\\views\\Main\\home.html");
    }
}
