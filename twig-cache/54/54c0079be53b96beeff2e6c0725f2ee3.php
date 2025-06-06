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

/* _global/caregiver_index.html */
class __TwigTemplate_ce3700ee9ca62a1743c37422bb0a3af3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'naslov' => [$this, 'block_naslov'],
            'caregiver' => [$this, 'block_caregiver'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/images/logo_browser.png\">
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\">
  <script src=\"https://kit.fontawesome.com/3f1d14d928.js\" crossorigin=\"anonymous\"></script>
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/css/sb-admin-2.min.css\">
  <script src=\"https://js.pusher.com/8.4.0/pusher.min.js\"></script>

  <title>";
        // line 16
        $this->displayBlock('naslov', $context, $blocks);
        echo "</title>

  <!-- Custom fonts for this template-->
  <link href=\"vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
  <link
    href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
    rel=\"stylesheet\">

  <!-- Custom styles for this template-->
  <!-- Bootstrap 4 CSS (via sb-admin-2) -->
  <link href=\"css/sb-admin-2.min.css\" rel=\"stylesheet\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
</head>

<body id=\"page-top\">
  <div id=\"wrapper\">

    ";
        // line 33
        $this->loadTemplate("./inc/caregiver/sidebar.html", "_global/caregiver_index.html", 33)->display($context);
        // line 34
        echo "
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">
      <!-- Main Content -->
      <div id=\"content\">
        ";
        // line 38
        $this->loadTemplate("./inc/caregiver/topbar_caregiver.html", "_global/caregiver_index.html", 38)->display($context);
        // line 39
        echo "

        ";
        // line 41
        $this->displayBlock('caregiver', $context, $blocks);
        // line 44
        echo "
      </div>
    </div>

 <!-- Extended component library za <gmpx-placeautocomplete> -->


<!-- Google Maps API sa Places + callback -->



  <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js\"></script>
  <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/main.js\" defer></script>

</body>

</html>";
    }

    // line 16
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 41
    public function block_caregiver($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "_global/caregiver_index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 42,  129 => 41,  122 => 16,  113 => 57,  98 => 44,  96 => 41,  92 => 39,  90 => 38,  84 => 34,  82 => 33,  62 => 16,  56 => 13,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{ base_url }}/assets/images/logo_browser.png\">
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\">
  <script src=\"https://kit.fontawesome.com/3f1d14d928.js\" crossorigin=\"anonymous\"></script>
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <link rel=\"stylesheet\" href=\"{{ base_url }}/assets/css/sb-admin-2.min.css\">
  <script src=\"https://js.pusher.com/8.4.0/pusher.min.js\"></script>

  <title>{%block naslov%} {%endblock%}</title>

  <!-- Custom fonts for this template-->
  <link href=\"vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
  <link
    href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
    rel=\"stylesheet\">

  <!-- Custom styles for this template-->
  <!-- Bootstrap 4 CSS (via sb-admin-2) -->
  <link href=\"css/sb-admin-2.min.css\" rel=\"stylesheet\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
</head>

<body id=\"page-top\">
  <div id=\"wrapper\">

    {% include './inc/caregiver/sidebar.html' %}

    <div id=\"content-wrapper\" class=\"d-flex flex-column\">
      <!-- Main Content -->
      <div id=\"content\">
        {% include './inc/caregiver/topbar_caregiver.html' %}


        {% block caregiver %}

        {% endblock %}

      </div>
    </div>

 <!-- Extended component library za <gmpx-placeautocomplete> -->


<!-- Google Maps API sa Places + callback -->



  <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js\"></script>
  <script src=\"{{ base_url }}/assets/main.js\" defer></script>

</body>

</html>", "_global/caregiver_index.html", "C:\\laragon\\www\\doctorlab\\views\\_global\\caregiver_index.html");
    }
}
