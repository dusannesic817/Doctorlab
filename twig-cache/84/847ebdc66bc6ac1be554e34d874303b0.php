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

/* ./inc/footer.html */
class __TwigTemplate_98f7913ea081110e0b6c53a5ca4b5965 extends Template
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
        echo "  <!-- Tvoj footer (sa već pripremljenim kodom) -->
  <footer class=\"mt-auto pt-3 border\">
    
    <div class=\"container py-3\">
      <div class=\"row mt-5 text-center text-lg-start d-flex justify-content-center align-items-center\">
        <div class=\"col-12 col-lg-4\">
          <div><b class=\"teget\">Have a question?</b></div>
          <small class=\"grey\">Get help online for quick advice, or contact us for consultation</small>
        </div>
        <div class=\" col-12 col-lg-8 d-flex justify-content-center justify-content-lg-end mt-3 mt-lg-0\">
          <div class=\"d-flex flex-row-reverse\">
            <div class=\"p-2\">
              <a class=\"btn btn-primary\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assistent\" role=\"button\" style=\"width: 200px;\">
                <i class=\"bi bi-chat-dots-fill\"></i> Chat
              </a>
            </div>
          </div>
        </div>
      </div>
      <hr style=\"color: #6da7f7;\">
      <div class=\"row text-center text-lg-start d-flex justify-content-center align-items-center\">
        <div class=\"col-12 col-lg-4\">
          <div class=\"mb-2\">
            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/logo_white.png\" alt=\"DoctorLab Logo\">
          </div>
          <small class=\"grey\">Copyright 2025 Doctorlab, all rights reserved</small>
        </div>
        <div class=\"col-12 col-lg-8 d-flex justify-content-center justify-content-lg-end mt-3 mt-lg-0\">
          <div class=\"d-flex flex-row-reverse\">
            <div class=\"p-2\">
              <img src=\"";
        // line 31
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
  </footer>";
    }

    public function getTemplateName()
    {
        return "./inc/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 31,  65 => 24,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <!-- Tvoj footer (sa već pripremljenim kodom) -->
  <footer class=\"mt-auto pt-3 border\">
    
    <div class=\"container py-3\">
      <div class=\"row mt-5 text-center text-lg-start d-flex justify-content-center align-items-center\">
        <div class=\"col-12 col-lg-4\">
          <div><b class=\"teget\">Have a question?</b></div>
          <small class=\"grey\">Get help online for quick advice, or contact us for consultation</small>
        </div>
        <div class=\" col-12 col-lg-8 d-flex justify-content-center justify-content-lg-end mt-3 mt-lg-0\">
          <div class=\"d-flex flex-row-reverse\">
            <div class=\"p-2\">
              <a class=\"btn btn-primary\" href=\"{{base_url}}/assistent\" role=\"button\" style=\"width: 200px;\">
                <i class=\"bi bi-chat-dots-fill\"></i> Chat
              </a>
            </div>
          </div>
        </div>
      </div>
      <hr style=\"color: #6da7f7;\">
      <div class=\"row text-center text-lg-start d-flex justify-content-center align-items-center\">
        <div class=\"col-12 col-lg-4\">
          <div class=\"mb-2\">
            <img src=\"{{ base_url }}/assets/images/logo_white.png\" alt=\"DoctorLab Logo\">
          </div>
          <small class=\"grey\">Copyright 2025 Doctorlab, all rights reserved</small>
        </div>
        <div class=\"col-12 col-lg-8 d-flex justify-content-center justify-content-lg-end mt-3 mt-lg-0\">
          <div class=\"d-flex flex-row-reverse\">
            <div class=\"p-2\">
              <img src=\"{{ base_url }}/assets/images/app_download.png\" alt=\"...\" style=\"height: 6rem;\">
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
  </footer>", "./inc/footer.html", "C:\\laragon\\www\\doctorlab\\views\\inc\\footer.html");
    }
}
