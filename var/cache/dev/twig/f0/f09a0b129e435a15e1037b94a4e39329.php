<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* back/dashboard.html.twig */
class __TwigTemplate_edcdcaab6e3006afb1c7a14fa11e1bb0 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "back/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/dashboard.html.twig"));

        $this->parent = $this->load("back/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Dashboard - Corporate UI";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <!-- Navbar -->
    <nav class=\"navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded\" id=\"navbarBlur\" navbar-scroll=\"true\">
        <div class=\"container-fluid py-1 px-2\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb bg-transparent mb-1 pb-0 pt-1 px-0 me-sm-6 me-5\">
                    <li class=\"breadcrumb-item text-sm\"><a class=\"opacity-5 text-dark\" href=\"javascript:;\">Dashboard</a></li>
                    <li class=\"breadcrumb-item text-sm text-dark active\" aria-current=\"page\">Dashboard</li>
                </ol>
                <h6 class=\"font-weight-bold mb-0\">Dashboard</h6>
            </nav>
            <div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
                <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
                    <div class=\"input-group\">
                    <span class=\"input-group-text text-body bg-white border-end-0\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16px\" height=\"16px\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\" />
                        </svg>
                    </span>
                        <input type=\"text\" class=\"form-control ps-0\" placeholder=\"Search\">
                    </div>
                </div>
                <ul class=\"navbar-nav justify-content-end\">
                    <li class=\"nav-item d-xl-none ps-3 d-flex align-items-center\">
                        <a href=\"javascript:;\" class=\"nav-link text-body p-0\" id=\"iconNavbarSidenav\">
                            <div class=\"sidenav-toggler-inner\">
                                <i class=\"sidenav-toggler-line\"></i>
                                <i class=\"sidenav-toggler-line\"></i>
                                <i class=\"sidenav-toggler-line\"></i>
                            </div>
                        </a>
                    </li>
                    <li class=\"nav-item ps-2 d-flex align-items-center\">
                        <a href=\"javascript:;\" class=\"nav-link text-body p-0\">
                            <img src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/img/team-2.jpg"), "html", null, true);
        yield "\" class=\"avatar avatar-sm\" alt=\"avatar\" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class=\"container-fluid py-4 px-5\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"d-md-flex align-items-center mb-3 mx-2\">
                    <div class=\"mb-md-0 mb-3\">
                        <h3 class=\"font-weight-bold mb-0\">Hello, Noah</h3>
                        <p class=\"mb-0\">Apps you might like!</p>
                    </div>
                    <button type=\"button\" class=\"btn btn-sm btn-white btn-icon d-flex align-items-center mb-0 ms-md-auto mb-sm-0 mb-2 me-2\">
                    <span class=\"btn-inner--icon\">
                        <span class=\"p-1 bg-success rounded-circle d-flex ms-auto me-2\">
                            <span class=\"visually-hidden\">New</span>
                        </span>
                    </span>
                        <span class=\"btn-inner--text\">Messages</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0\">
                    <span class=\"btn-inner--icon\">
                        <svg width=\"16\" height=\"16\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"d-block me-2\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99\" />
                        </svg>
                    </span>
                        <span class=\"btn-inner--text\">Sync</span>
                    </button>
                </div>
            </div>
        </div>

        <hr class=\"my-0\">

        <div class=\"row\">
            <div class=\"col-xl-3 col-sm-6 mb-xl-0\">
                <div class=\"card border shadow-xs mb-4\">
                    <div class=\"card-body text-start p-3 w-100\">
                        <div class=\"icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3\">
                            <svg height=\"16\" width=\"16\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                                <path d=\"M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z\" />
                                <path fill-rule=\"evenodd\" d=\"M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z\" clip-rule=\"evenodd\" />
                            </svg>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"w-100\">
                                    <p class=\"text-sm text-secondary mb-1\">Revenue</p>
                                    <h4 class=\"mb-2 font-weight-bold\">\$99,118.5</h4>
                                    <div class=\"d-flex align-items-center\">
                                    <span class=\"text-sm text-success font-weight-bolder\">
                                        <i class=\"fa fa-chevron-up text-xs me-1\"></i>10.5%
                                    </span>
                                        <span class=\"text-sm ms-1\">from \$89,740.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Répéter pour les autres cartes stats -->
        </div>

        <footer class=\"footer pt-3\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center justify-content-lg-between\">
                    <div class=\"col-lg-6 mb-lg-0 mb-4\">
                        <div class=\"copyright text-center text-xs text-muted text-lg-start\">
                            Copyright © <script>document.write(new Date().getFullYear())</script>
                            Corporate UI by <a href=\"https://www.creative-tim.com\" class=\"text-secondary\" target=\"_blank\">Creative Tim</a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/dashboard.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  135 => 39,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/base.html.twig' %}

{% block title %}Dashboard - Corporate UI{% endblock %}

{% block body %}
    <!-- Navbar -->
    <nav class=\"navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded\" id=\"navbarBlur\" navbar-scroll=\"true\">
        <div class=\"container-fluid py-1 px-2\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb bg-transparent mb-1 pb-0 pt-1 px-0 me-sm-6 me-5\">
                    <li class=\"breadcrumb-item text-sm\"><a class=\"opacity-5 text-dark\" href=\"javascript:;\">Dashboard</a></li>
                    <li class=\"breadcrumb-item text-sm text-dark active\" aria-current=\"page\">Dashboard</li>
                </ol>
                <h6 class=\"font-weight-bold mb-0\">Dashboard</h6>
            </nav>
            <div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
                <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
                    <div class=\"input-group\">
                    <span class=\"input-group-text text-body bg-white border-end-0\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16px\" height=\"16px\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\" />
                        </svg>
                    </span>
                        <input type=\"text\" class=\"form-control ps-0\" placeholder=\"Search\">
                    </div>
                </div>
                <ul class=\"navbar-nav justify-content-end\">
                    <li class=\"nav-item d-xl-none ps-3 d-flex align-items-center\">
                        <a href=\"javascript:;\" class=\"nav-link text-body p-0\" id=\"iconNavbarSidenav\">
                            <div class=\"sidenav-toggler-inner\">
                                <i class=\"sidenav-toggler-line\"></i>
                                <i class=\"sidenav-toggler-line\"></i>
                                <i class=\"sidenav-toggler-line\"></i>
                            </div>
                        </a>
                    </li>
                    <li class=\"nav-item ps-2 d-flex align-items-center\">
                        <a href=\"javascript:;\" class=\"nav-link text-body p-0\">
                            <img src=\"{{ asset('backend/assets/img/team-2.jpg') }}\" class=\"avatar avatar-sm\" alt=\"avatar\" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class=\"container-fluid py-4 px-5\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"d-md-flex align-items-center mb-3 mx-2\">
                    <div class=\"mb-md-0 mb-3\">
                        <h3 class=\"font-weight-bold mb-0\">Hello, Noah</h3>
                        <p class=\"mb-0\">Apps you might like!</p>
                    </div>
                    <button type=\"button\" class=\"btn btn-sm btn-white btn-icon d-flex align-items-center mb-0 ms-md-auto mb-sm-0 mb-2 me-2\">
                    <span class=\"btn-inner--icon\">
                        <span class=\"p-1 bg-success rounded-circle d-flex ms-auto me-2\">
                            <span class=\"visually-hidden\">New</span>
                        </span>
                    </span>
                        <span class=\"btn-inner--text\">Messages</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0\">
                    <span class=\"btn-inner--icon\">
                        <svg width=\"16\" height=\"16\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"d-block me-2\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99\" />
                        </svg>
                    </span>
                        <span class=\"btn-inner--text\">Sync</span>
                    </button>
                </div>
            </div>
        </div>

        <hr class=\"my-0\">

        <div class=\"row\">
            <div class=\"col-xl-3 col-sm-6 mb-xl-0\">
                <div class=\"card border shadow-xs mb-4\">
                    <div class=\"card-body text-start p-3 w-100\">
                        <div class=\"icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3\">
                            <svg height=\"16\" width=\"16\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                                <path d=\"M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z\" />
                                <path fill-rule=\"evenodd\" d=\"M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z\" clip-rule=\"evenodd\" />
                            </svg>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"w-100\">
                                    <p class=\"text-sm text-secondary mb-1\">Revenue</p>
                                    <h4 class=\"mb-2 font-weight-bold\">\$99,118.5</h4>
                                    <div class=\"d-flex align-items-center\">
                                    <span class=\"text-sm text-success font-weight-bolder\">
                                        <i class=\"fa fa-chevron-up text-xs me-1\"></i>10.5%
                                    </span>
                                        <span class=\"text-sm ms-1\">from \$89,740.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Répéter pour les autres cartes stats -->
        </div>

        <footer class=\"footer pt-3\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center justify-content-lg-between\">
                    <div class=\"col-lg-6 mb-lg-0 mb-4\">
                        <div class=\"copyright text-center text-xs text-muted text-lg-start\">
                            Copyright © <script>document.write(new Date().getFullYear())</script>
                            Corporate UI by <a href=\"https://www.creative-tim.com\" class=\"text-secondary\" target=\"_blank\">Creative Tim</a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
{% endblock %}", "back/dashboard.html.twig", "C:\\xampp\\htdocs\\Artiste\\templates\\back\\dashboard.html.twig");
    }
}
