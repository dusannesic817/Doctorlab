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

/* ./inc/caregiver/tabel.html */
class __TwigTemplate_fae9d0472aedbce00fff93847cc82574 extends Template
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
        echo "<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-8\">
      <div class=\"card\">
        <div class=\"table-responsive pe-3 ps-3\">
          <table class=\"table table-hover align-middle\" id=\"pc-dt-simple\">
            <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th>User Name</th>
                <th>Contact</th>
                <th>Age</th>
                <th>Country</th>
                <th>Status</th>
                <th class=\"text-center\">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\">
                  </div>
                </td>
                <td>179</td>
                <td>
                  <div class=\"d-flex align-items-center\">
                    <img src=\"img/undraw_profile.svg\" alt=\"user-image\" class=\"rounded-circle me-2\"
                      style=\"width: 30px; height: 30px;\">
                    <div>
                      <h6 class=\"mb-0\">Addie Bass</h6>
                      <p class=\"text-muted f-12 mb-0 text-truncate\" style=\"max-width: 150px;\">mareva@gmail.com
                      </p>
                    </div>
                  </div>

        </div>
        </td>
        <td class=\"text-nowrap\">+1 (247) 849-6968</td>
        <td>45</td>
        <td>United Kingdom</td>
        <td>
          <span class=\"badge bg-light-success rounded-pill f-12\">Verified</span>
        </td>
        <td class=\"text-center\">
          <ul class=\"list-inline me-auto mb-0\">
            <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"View\">
              <a href=\"#\" class=\"avtar avtar-xs btn-link-secondary\" data-bs-toggle=\"modal\"
                data-bs-target=\"#user-modal\">
                <i class=\"ti ti-eye f-18\"></i>
              </a>
            </li>
            <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Edit\">
              <a href=\"#\" class=\"avtar avtar-xs btn-link-primary\" data-bs-toggle=\"modal\"
                data-bs-target=\"#user-edit_add-modal\">
                <i class=\"ti ti-edit-circle f-18\"></i>
              </a>
            </li>
            <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Delete\">
              <a href=\"#\" class=\"avtar avtar-xs btn-link-danger\">
                <i class=\"ti ti-trash f-18\"></i>
              </a>
            </li>
          </ul>
        </td>
        </tr>
        <tr>
          <td>
            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"checkbox\">
            </div>
          </td>
          <td>60</td>
          <td>
            <div class=\"d-flex align-items-center\">
              <img src=\"../assets/images/user/avatar-2.jpg\" alt=\"user-image\" class=\"wid-40 rounded-circle me-2\">
              <div>
                <h6 class=\"mb-0\">Agnes McGee</h6>
                <p class=\"text-muted f-12 mb-0 text-truncate\" style=\"max-width: 150px;\">heba@gmail.com</p>
              </div>
            </div>
          </td>
          <td class=\"text-nowrap\">+1 (247) 849-6968</td>
          <td>42</td>
          <td>Russia</td>
          <td>
            <span class=\"badge bg-light-success rounded-pill f-12\">Verified</span>
          </td>
          <td class=\"text-center\">
            <ul class=\"list-inline me-auto mb-0\">
              <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"View\">
                <a href=\"#\" class=\"avtar avtar-xs btn-link-secondary\" data-bs-toggle=\"modal\"
                  data-bs-target=\"#user-modal\">
                  <i class=\"ti ti-eye f-18\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Edit\">
                <a href=\"#\" class=\"avtar avtar-xs btn-link-primary\" data-bs-toggle=\"modal\"
                  data-bs-target=\"#user-edit_add-modal\">
                  <i class=\"ti ti-edit-circle f-18\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Delete\">
                <a href=\"#\" class=\"avtar avtar-xs btn-link-danger\">
                  <i class=\"ti ti-trash f-18\"></i>
                </a>
              </li>
            </ul>
          </td>
        </tr>
        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "./inc/caregiver/tabel.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-8\">
      <div class=\"card\">
        <div class=\"table-responsive pe-3 ps-3\">
          <table class=\"table table-hover align-middle\" id=\"pc-dt-simple\">
            <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th>User Name</th>
                <th>Contact</th>
                <th>Age</th>
                <th>Country</th>
                <th>Status</th>
                <th class=\"text-center\">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\">
                  </div>
                </td>
                <td>179</td>
                <td>
                  <div class=\"d-flex align-items-center\">
                    <img src=\"img/undraw_profile.svg\" alt=\"user-image\" class=\"rounded-circle me-2\"
                      style=\"width: 30px; height: 30px;\">
                    <div>
                      <h6 class=\"mb-0\">Addie Bass</h6>
                      <p class=\"text-muted f-12 mb-0 text-truncate\" style=\"max-width: 150px;\">mareva@gmail.com
                      </p>
                    </div>
                  </div>

        </div>
        </td>
        <td class=\"text-nowrap\">+1 (247) 849-6968</td>
        <td>45</td>
        <td>United Kingdom</td>
        <td>
          <span class=\"badge bg-light-success rounded-pill f-12\">Verified</span>
        </td>
        <td class=\"text-center\">
          <ul class=\"list-inline me-auto mb-0\">
            <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"View\">
              <a href=\"#\" class=\"avtar avtar-xs btn-link-secondary\" data-bs-toggle=\"modal\"
                data-bs-target=\"#user-modal\">
                <i class=\"ti ti-eye f-18\"></i>
              </a>
            </li>
            <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Edit\">
              <a href=\"#\" class=\"avtar avtar-xs btn-link-primary\" data-bs-toggle=\"modal\"
                data-bs-target=\"#user-edit_add-modal\">
                <i class=\"ti ti-edit-circle f-18\"></i>
              </a>
            </li>
            <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Delete\">
              <a href=\"#\" class=\"avtar avtar-xs btn-link-danger\">
                <i class=\"ti ti-trash f-18\"></i>
              </a>
            </li>
          </ul>
        </td>
        </tr>
        <tr>
          <td>
            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"checkbox\">
            </div>
          </td>
          <td>60</td>
          <td>
            <div class=\"d-flex align-items-center\">
              <img src=\"../assets/images/user/avatar-2.jpg\" alt=\"user-image\" class=\"wid-40 rounded-circle me-2\">
              <div>
                <h6 class=\"mb-0\">Agnes McGee</h6>
                <p class=\"text-muted f-12 mb-0 text-truncate\" style=\"max-width: 150px;\">heba@gmail.com</p>
              </div>
            </div>
          </td>
          <td class=\"text-nowrap\">+1 (247) 849-6968</td>
          <td>42</td>
          <td>Russia</td>
          <td>
            <span class=\"badge bg-light-success rounded-pill f-12\">Verified</span>
          </td>
          <td class=\"text-center\">
            <ul class=\"list-inline me-auto mb-0\">
              <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"View\">
                <a href=\"#\" class=\"avtar avtar-xs btn-link-secondary\" data-bs-toggle=\"modal\"
                  data-bs-target=\"#user-modal\">
                  <i class=\"ti ti-eye f-18\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Edit\">
                <a href=\"#\" class=\"avtar avtar-xs btn-link-primary\" data-bs-toggle=\"modal\"
                  data-bs-target=\"#user-edit_add-modal\">
                  <i class=\"ti ti-edit-circle f-18\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\" data-bs-toggle=\"tooltip\" title=\"Delete\">
                <a href=\"#\" class=\"avtar avtar-xs btn-link-danger\">
                  <i class=\"ti ti-trash f-18\"></i>
                </a>
              </li>
            </ul>
          </td>
        </tr>
        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>", "./inc/caregiver/tabel.html", "C:\\laragon\\www\\doctorlab\\views\\inc\\caregiver\\tabel.html");
    }
}
