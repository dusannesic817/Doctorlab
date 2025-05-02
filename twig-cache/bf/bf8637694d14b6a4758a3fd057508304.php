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

/* ./inc/caregiver/cards.html */
class __TwigTemplate_e55a5ca10d67ba7ce088f1e3c57e52ba extends Template
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
        echo "        <!-- Begin Page Content -->
        <div class=\"container-fluid\">

          <!-- Page Heading -->
          <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
          </div>
          <div class=\"row\">

            <!-- Earnings (Monthly) Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-0 shadow h-100 py-2\" style=\"border-left: 3px solid #4e73df !important;\">
                <div class=\"card-body\">
                  <div class=\"row g-0 align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                        Earnings (Monthly)
                      </div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$40,000</div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-start-success shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row g-0 align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                        Earnings (Annual)
                      </div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$215,000</div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tasks Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-start-info shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row g-0 align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Tasks</div>
                      <div class=\"row g-0 align-items-center\">
                        <div class=\"col-auto\">
                          <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
                        </div>
                        <div class=\"col\">
                          <div class=\"progress progress-sm\">
                            <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 50%\" aria-valuenow=\"50\"
                              aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-start-warning shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row g-0 align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                        Pending Requests
                      </div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

      
          <!-- Content goes here -->

        </div>";
    }

    public function getTemplateName()
    {
        return "./inc/caregiver/cards.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        <!-- Begin Page Content -->
        <div class=\"container-fluid\">

          <!-- Page Heading -->
          <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
          </div>
          <div class=\"row\">

            <!-- Earnings (Monthly) Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-0 shadow h-100 py-2\" style=\"border-left: 3px solid #4e73df !important;\">
                <div class=\"card-body\">
                  <div class=\"row g-0 align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                        Earnings (Monthly)
                      </div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$40,000</div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-start-success shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row g-0 align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                        Earnings (Annual)
                      </div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$215,000</div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tasks Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-start-info shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row g-0 align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Tasks</div>
                      <div class=\"row g-0 align-items-center\">
                        <div class=\"col-auto\">
                          <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
                        </div>
                        <div class=\"col\">
                          <div class=\"progress progress-sm\">
                            <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 50%\" aria-valuenow=\"50\"
                              aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-start-warning shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row g-0 align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                        Pending Requests
                      </div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

      
          <!-- Content goes here -->

        </div>", "./inc/caregiver/cards.html", "C:\\laragon\\www\\doctorlab\\views\\inc\\caregiver\\cards.html");
    }
}
