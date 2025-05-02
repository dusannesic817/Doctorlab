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

/* ./inc/session_alerts/edit_banner.html */
class __TwigTemplate_6481eaa78e130442a4c426750c548278 extends Template
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
        if (($context["change"] ?? null)) {
            // line 2
            echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\" id=\"successAlert\">
  <i class=\"bi bi-check-circle-fill\" style=\"color: green;\"></i><small class=\"text-center\"><b> ";
            // line 3
            echo twig_escape_filter($this->env, ($context["change"] ?? null), "html", null, true);
            echo "</b></small>
  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
</div>
";
        } else {
            // line 7
            echo "<div></div>
";
        }
    }

    public function getTemplateName()
    {
        return "./inc/session_alerts/edit_banner.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%if change %}
<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\" id=\"successAlert\">
  <i class=\"bi bi-check-circle-fill\" style=\"color: green;\"></i><small class=\"text-center\"><b> {{ change }}</b></small>
  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
</div>
{%else%}
<div></div>
{%endif%}", "./inc/session_alerts/edit_banner.html", "C:\\laragon\\www\\doctorlab\\views\\inc\\session_alerts\\edit_banner.html");
    }
}
