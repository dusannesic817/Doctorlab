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
class __TwigTemplate_d677f1e064777c11248ea69251f0256e extends Template
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
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\">
  <link rel=\"stylesheet\" href=\"../../assets/main.css\">
  <title>Doctorlab | ";
        // line 11
        $this->displayBlock('naslov', $context, $blocks);
        echo "</title>
</head>

<body>
  <header>
    ";
        // line 16
        $this->loadTemplate("./inc/header.html", "_global/index.html", 16)->display($context);
        // line 17
        echo "  </header>
  <main>
    ";
        // line 19
        $this->displayBlock('main', $context, $blocks);
        // line 22
        echo "  </main>
  <footer>
    footer
  </footer>
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"
    integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\"
    crossorigin=\"anonymous\"></script>
</body>

</html>";
    }

    // line 11
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Pocetna";
    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
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
        return array (  91 => 20,  87 => 19,  80 => 11,  67 => 22,  65 => 19,  61 => 17,  59 => 16,  51 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_global/index.html", "C:\\laragon\\www\\auction\\views\\_global\\index.html");
    }
}
