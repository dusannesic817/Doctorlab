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

/* _global/index.html */
class __TwigTemplate_f632f0baf0787e18abb394f43ba17bc4 extends Template
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
            'main' => [$this, 'block_main'],
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
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/main.css\">

  <title>Doctorlab | ";
        // line 14
        $this->displayBlock('naslov', $context, $blocks);
        echo "</title>
</head>

<body>
  <header>
    ";
        // line 19
        $this->loadTemplate("./inc/header.html", "_global/index.html", 19)->display($context);
        // line 20
        echo "  </header>
  <main>
    ";
        // line 22
        $this->displayBlock('main', $context, $blocks);
        // line 25
        echo "  </main>
  <footer>
    footer
  </footer>
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"
    integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\"
    crossorigin=\"anonymous\"></script>
    
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/main.js\" defer></script>
</body>

</html>";
    }

    // line 14
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Home";
    }

    // line 22
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 23,  101 => 22,  94 => 14,  86 => 33,  76 => 25,  74 => 22,  70 => 20,  68 => 19,  60 => 14,  55 => 12,  49 => 9,  39 => 1,);
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
  <link rel=\"stylesheet\" href=\"{{ base_url }}/assets/main.css\">

  <title>Doctorlab | {%block naslov%}Home{%endblock%}</title>
</head>

<body>
  <header>
    {% include './inc/header.html' %}
  </header>
  <main>
    {% block main %}

    {% endblock %}
  </main>
  <footer>
    footer
  </footer>
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"
    integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\"
    crossorigin=\"anonymous\"></script>
    
    <script src=\"{{ base_url }}/assets/main.js\" defer></script>
</body>

</html>", "_global/index.html", "C:\\laragon\\www\\doctorlab\\views\\_global\\index.html");
    }
}
