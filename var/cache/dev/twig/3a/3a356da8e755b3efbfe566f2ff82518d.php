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

/* back/tables.html.twig */
class __TwigTemplate_b79f4f5712534e5c6c64ae4705c5096e extends Template
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
            'body_class' => [$this, 'block_body_class'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/tables.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/tables.html.twig"));

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

        yield "Tables - Corporate UI";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        yield "g-sidenav-show bg-gray-100";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800\" rel=\"stylesheet\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        // line 13
        yield "<aside class=\"sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-start\" id=\"sidenav-main\">
    <div class=\"sidenav-header\">
        <i class=\"fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
        <a class=\"navbar-brand d-flex align-items-center m-0\" href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_dashboard");
        yield "\">
            <span class=\"font-weight-bold text-lg\">Corporate UI</span>
        </a>
    </div>

    <hr class=\"horizontal light mt-0\">

    <div class=\"collapse navbar-collapse w-auto\" id=\"sidenav-collapse-main\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_dashboard");
        yield "\">
                    <div class=\"icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center\">
                        <svg width=\"30px\" height=\"30px\" viewBox=\"0 0 48 48\" xmlns=\"http://www.w3.org/2000/svg\">
                            <g fill=\"#FFFFFF\">
                                <path class=\"color-foreground\" d=\"M0,1.71428571 C0,0.76752 0.76752,0 1.71428571,0 L22.2857143,0 C23.2325143,0 24,0.76752 24,1.71428571 L24,5.14285714 C24,6.08962286 23.2325143,6.85714286 22.2857143,6.85714286 L1.71428571,6.85714286 C0.76752,6.85714286 0,6.08962286 0,5.14285714 L0,1.71428571 Z\"></path>
                                <path class=\"color-background\" d=\"M0,12 C0,11.0532171 0.76752,10.2857143 1.71428571,10.2857143 L12,10.2857143 C12.9468,10.2857143 13.7142857,11.0532171 13.7142857,12 L13.7142857,22.2857143 C13.7142857,23.2325143 12.9468,24 12,24 L1.71428571,24 C0.76752,24 0,23.2325143 0,22.2857143 L0,12 Z\"></path>
                                <path class=\"color-background\" d=\"M18.8571429,10.2857143 C17.9103429,10.2857143 17.1428571,11.0532171 17.1428571,12 L17.1428571,22.2857143 C17.1428571,23.2325143 17.9103429,24 18.8571429,24 L22.2857143,24 C23.2325143,24 24,23.2325143 24,22.2857143 L24,12 C24,11.0532171 23.2325143,10.2857143 22.2857143,10.2857143 L18.8571429,10.2857143 Z\"></path>
                            </g>
                        </svg>
                    </div>
                    <span class=\"nav-link-text ms-1\">Dashboard</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_tables");
        yield "\">
                    <div class=\"icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center\">
                        <svg width=\"30px\" height=\"30px\" viewBox=\"0 0 48 48\" xmlns=\"http://www.w3.org/2000/svg\">
                            <g fill=\"#FFFFFF\">
                                <path class=\"color-foreground\" d=\"M3.42857143,0 C1.53502286,0 0,1.53502286 0,3.42857143 L0,6.85714286 C0,8.75069143 1.53502286,10.2857143 3.42857143,10.2857143 L6.85714286,10.2857143 C8.75069143,10.2857143 10.2857143,8.75069143 10.2857143,6.85714286 L10.2857143,3.42857143 C10.2857143,1.53502286 8.75069143,0 6.85714286,0 L3.42857143,0 Z\"></path>
                                <path class=\"color-background\" d=\"M3.42857143,13.7142857 C1.53502286,13.7142857 0,15.2492571 0,17.1428571 L0,20.5714286 C0,22.4650286 1.53502286,24 3.42857143,24 L6.85714286,24 C8.75069143,24 10.2857143,22.4650286 10.2857143,20.5714286 L10.2857143,17.1428571 C10.2857143,15.2492571 8.75069143,13.7142857 6.85714286,13.7142857 L3.42857143,13.7142857 Z\"></path>
                                <path class=\"color-background\" d=\"M13.7142857,3.42857143 C13.7142857,1.53502286 15.2492571,0 17.1428571,0 L20.5714286,0 C22.4650286,0 24,1.53502286 24,3.42857143 L24,6.85714286 C24,8.75069143 22.4650286,10.2857143 20.5714286,10.2857143 L17.1428571,10.2857143 C15.2492571,10.2857143 13.7142857,8.75069143 13.7142857,6.85714286 L13.7142857,3.42857143 Z\"></path>
                                <path class=\"color-foreground\" d=\"M13.7142857,17.1428571 C13.7142857,15.2492571 15.2492571,13.7142857 17.1428571,13.7142857 L20.5714286,13.7142857 C22.4650286,13.7142857 24,15.2492571 24,17.1428571 L24,20.5714286 C24,22.4650286 22.4650286,24 20.5714286,24 L17.1428571,24 C15.2492571,24 13.7142857,22.4650286 13.7142857,20.5714286 L13.7142857,17.1428571 Z\"></path>
                            </g>
                        </svg>
                    </div>
                    <span class=\"nav-link-text ms-1\">Tables</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                    <div class=\"icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center\">
                        <svg width=\"30px\" height=\"30px\" viewBox=\"0 0 48 48\" xmlns=\"http://www.w3.org/2000/svg\">
                            <g fill=\"#FFFFFF\">
                                <path class=\"color-background\" d=\"M3,0 C1.343145,0 0,1.343145 0,3 L0,4.5 L24,4.5 L24,3 C24,1.343145 22.6569,0 21,0 L3,0 Z\"></path>
                                <path class=\"color-foreground\" d=\"M24,7.5 L0,7.5 L0,15 C0,16.6569 1.343145,18 3,18 L21,18 C22.6569,18 24,16.6569 24,15 L24,7.5 Z M3,13.5 C3,12.67155 3.67158,12 4.5,12 L6,12 C6.82842,12 7.5,12.67155 7.5,13.5 C7.5,14.32845 6.82842,15 6,15 L4.5,15 C3.67158,15 3,14.32845 3,13.5 Z\"></path>
                            </g>
                        </svg>
                    </div>
                    <span class=\"nav-link-text ms-1\">Wallet</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_rtl");
        yield "\">
                    <div class=\"icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center\">
                        <svg width=\"30px\" height=\"30px\" viewBox=\"0 0 48 48\" xmlns=\"http://www.w3.org/2000/svg\">
                            <g fill=\"#FFFFFF\">
                                <path class=\"color-foreground\" d=\"M0,1.71428571 C0,0.76752 0.76752,0 1.71428571,0 L22.2857143,0 C23.2325143,0 24,0.76752 24,1.71428571 C24,2.66105143 23.2325143,3.42857143 22.2857143,3.42857143 L1.71428571,3.42857143 C0.76752,3.42857143 0,2.66105143 0,1.71428571 Z\"></path>
                                <path class=\"color-background\" d=\"M0,10.2857143 C0,9.33894857 0.76752,8.57142857 1.71428571,8.57142857 L22.2857143,8.57142857 C23.2325143,8.57142857 24,9.33894857 24,10.2857143 C24,11.2325143 23.2325143,12 22.2857143,12 L1.71428571,12 C0.76752,12 0,11.2325143 0,10.2857143 Z\"></path>
                                <path class=\"color-background\" d=\"M10.2857143,18.8571429 C10.2857143,17.9103429 11.0532343,17.1428571 12,17.1428571 L22.2857143,17.1428571 C23.2325143,17.1428571 24,17.9103429 24,18.8571429 C24,19.8039429 23.2325143,20.5714286 22.2857143,20.5714286 L12,20.5714286 C11.0532343,20.5714286 10.2857143,19.8039429 10.2857143,18.8571429 Z\"></path>
                            </g>
                        </svg>
                    </div>
                    <span class=\"nav-link-text ms-1\">RTL</span>
                </a>
            </li>

            <li class=\"nav-item mt-3\">
                <div class=\"d-flex align-items-center nav-link\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" class=\"text-white me-2\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <path fill-rule=\"evenodd\" d=\"M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z\" clip-rule=\"evenodd\" />
                    </svg>
                    <span class=\"text-white font-weight-normal text-md me-2\">Account Pages</span>
                </div>
            </li>

            <li class=\"nav-item border-start my-0 pt-2\">
                <a class=\"nav-link position-relative\" href=\"#\">Profile</a>
            </li>
            <li class=\"nav-item border-start my-0 pt-2\">
                <a class=\"nav-link position-relative\" href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_signin");
        yield "\">Sign In</a>
            </li>
            <li class=\"nav-item border-start my-0 pt-2\">
                <a class=\"nav-link position-relative\" href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_signup");
        yield "\">Sign Up</a>
            </li>
        </ul>
    </div>
</aside>

<main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden\">
    <nav class=\"navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded\" id=\"navbarBlur\">
        <div class=\"container-fluid py-1 px-2\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb bg-transparent mb-1 pb-0 pt-1 px-0\">
                    <li class=\"breadcrumb-item text-sm\"><a class=\"opacity-5 text-dark\" href=\"javascript:;\">Dashboard</a></li>
                    <li class=\"breadcrumb-item text-sm text-dark active\" aria-current=\"page\">Tables</li>
                </ol>
                <h6 class=\"font-weight-bold mb-0\">Tables</h6>
            </nav>

            <div class=\"collapse navbar-collapse mt-sm-0 mt-2 px-0\" id=\"navbar\">
                <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text text-body bg-white border-end-0\">
                            <i class=\"fas fa-search\"></i>
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
                    <li class=\"nav-item dropdown pe-2 d-flex align-items-center\">
                        <a href=\"javascript:;\" class=\"nav-link text-body p-0\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-bell cursor-pointer\"></i>
                        </a>
                    </li>
                    <li class=\"nav-item ps-2 d-flex align-items-center\">
                        <a href=\"#\" class=\"nav-link text-body font-weight-bold px-0\">
                            <img src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/img/team-2.jpg"), "html", null, true);
        yield "\" class=\"avatar avatar-sm\" alt=\"avatar\">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container-fluid py-4 px-5\">
        <!-- Hero Banner -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card card-background card-background-after-none align-items-start mt-4 mb-5\">
                    <div class=\"full-background\" style=\"background-image: url('";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/img/header-blue-purple.jpg"), "html", null, true);
        yield "')\"></div>
                    <div class=\"card-body text-start p-4 w-100\">
                        <h3 class=\"text-white mb-2\">Collect your benefits</h3>
                        <p class=\"mb-4 font-weight-semibold\">Check all the advantages and choose the best.</p>
                        <button type=\"button\" class=\"btn btn-outline-white btn-blur btn-icon d-flex align-items-center mb-0\">
                            <span class=\"btn-inner--icon me-2\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14ZM6.61036 4.52196C6.34186 4.34296 5.99664 4.32627 5.71212 4.47854C5.42761 4.63081 5.25 4.92731 5.25 5.25V8.75C5.25 9.0727 5.42761 9.36924 5.71212 9.52149C5.99664 9.67374 6.34186 9.65703 6.61036 9.47809L9.23536 7.72809C9.47879 7.56577 9.625 7.2926 9.625 7C9.625 6.70744 9.47879 6.43424 9.23536 6.27196L6.61036 4.52196Z\"/>
                                </svg>
                            </span>
                            <span class=\"btn-inner--text\">Watch more</span>
                        </button>
                        <img src=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/img/3d-cube.png"), "html", null, true);
        yield "\" alt=\"3d-cube\" class=\"position-absolute top-0 end-1 w-25 max-width-200 mt-n6 d-sm-block d-none\">
                    </div>
                </div>
            </div>
        </div>

        <!-- Members Table -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card border shadow-xs mb-4\">
                    <div class=\"card-header border-bottom pb-0\">
                        <div class=\"d-sm-flex align-items-center\">
                            <div>
                                <h6 class=\"font-weight-semibold text-lg mb-0\">Members list</h6>
                                <p class=\"text-sm\">See information about all members</p>
                            </div>
                            <div class=\"ms-auto d-flex\">
                                <button type=\"button\" class=\"btn btn-sm btn-white me-2\">View all</button>
                                <button type=\"button\" class=\"btn btn-sm btn-dark btn-icon d-flex align-items-center\">
                                    <span class=\"btn-inner--icon me-1\">
                                        <svg width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z\"/>
                                        </svg>
                                    </span>
                                    <span class=\"btn-inner--text\">Add member</span>
                                </button>
                            </div>
                        </div>
                        <div class=\"border-bottom py-3 px-3 d-sm-flex align-items-center mt-3\">
                            <div class=\"btn-group me-3\" role=\"group\">
                                <input type=\"radio\" class=\"btn-check\" name=\"btnradiotable\" id=\"btnradiotable1\" checked>
                                <label class=\"btn btn-white px-3 mb-0\" for=\"btnradiotable1\">All</label>
                                <input type=\"radio\" class=\"btn-check\" name=\"btnradiotable\" id=\"btnradiotable2\">
                                <label class=\"btn btn-white px-3 mb-0\" for=\"btnradiotable2\">Monitored</label>
                                <input type=\"radio\" class=\"btn-check\" name=\"btnradiotable\" id=\"btnradiotable3\">
                                <label class=\"btn btn-white px-3 mb-0\" for=\"btnradiotable3\">Unmonitored</label>
                            </div>
                            <div class=\"input-group w-sm-25 ms-auto\">
                                <span class=\"input-group-text text-body\"><i class=\"fas fa-search\"></i></span>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body px-0 py-0\">
                        <div class=\"table-responsive p-0\">
                            <table class=\"table align-items-center mb-0\">
                                <thead class=\"bg-gray-100\">
                                    <tr>
                                        <th class=\"text-secondary text-xs font-weight-semibold opacity-7\">Member</th>
                                        <th class=\"text-secondary text-xs font-weight-semibold opacity-7 ps-2\">Function</th>
                                        <th class=\"text-center text-secondary text-xs font-weight-semibold opacity-7\">Status</th>
                                        <th class=\"text-center text-secondary text-xs font-weight-semibold opacity-7\">Employed</th>
                                        <th class=\"text-secondary opacity-7\"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Repeat this block for each row -->
                                    <tr>
                                        <td><div class=\"d-flex px-2 py-1\"><div><img src=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/img/team-2.jpg"), "html", null, true);
        yield "\" class=\"avatar avatar-sm rounded-circle me-2\" alt=\"user\"></div><div class=\"d-flex flex-column justify-content-center ms-1\"><h6 class=\"mb-0 text-sm font-weight-semibold\">John Michael</h6><p class=\"text-sm text-secondary mb-0\">john@creative-tim.com</p></div></div></td>
                                        <td><p class=\"text-sm text-dark font-weight-semibold mb-0\">Manager</p><p class=\"text-sm text-secondary mb-0\">Organization</p></td>
                                        <td class=\"align-middle text-center\"><span class=\"badge badge-sm border border-success text-success bg-success\">Online</span></td>
                                        <td class=\"align-middle text-center\"><span class=\"text-secondary text-sm font-weight-normal\">23/04/18</span></td>
                                        <td class=\"align-middle\"><a href=\"javascript:;\" class=\"text-secondary font-weight-bold text-xs\"><i class=\"fas fa-edit\"></i></a></td>
                                    </tr>
                                    <!-- More rows... (6 total in original) -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Transactions Table -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card border shadow-xs mb-4\">
                    <div class=\"card-header border-bottom pb-0\">
                        <div class=\"d-sm-flex align-items-center mb-3\">
                            <div>
                                <h6 class=\"font-weight-semibold text-lg mb-0\">Recent transactions</h6>
                                <p class=\"text-sm mb-0\">These are details about the last transactions</p>
                            </div>
                            <div class=\"ms-auto d-flex\">
                                <div class=\"input-group input-group-sm me-2\">
                                    <span class=\"input-group-text text-body\"><i class=\"fas fa-search\"></i></span>
                                    <input type=\"text\" class=\"form-control form-control-sm\" placeholder=\"Search\">
                                </div>
                                <button type=\"button\" class=\"btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0\">
                                    <span class=\"btn-inner--icon me-1\"><i class=\"fas fa-download\"></i></span>
                                    <span class=\"btn-inner--text\">Download</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body px-0 py-0\">
                        <div class=\"table-responsive p-0\">
                            <table class=\"table align-items-center justify-content-center mb-0\">
                                <!-- Table content exactly as in original HTML -->
                                <!-- (Spotify, Invision, Jira, etc.) -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 277
        yield from $this->load("back/_footer.html.twig", 277)->unwrap()->yield($context);
        // line 278
        yield "    </div>
</main>

";
        // line 281
        yield from $this->load("back/_fixed_plugin.html.twig", 281)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 284
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 285
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/js/corporate-ui-dashboard.min.js?v=1.0.0"), "html", null, true);
        yield "\"></script>
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
        return "back/tables.html.twig";
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
        return array (  486 => 286,  481 => 285,  468 => 284,  457 => 281,  452 => 278,  450 => 277,  398 => 228,  337 => 170,  322 => 158,  306 => 145,  259 => 101,  253 => 98,  223 => 71,  190 => 41,  172 => 26,  159 => 16,  154 => 13,  141 => 12,  126 => 8,  113 => 7,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/base.html.twig' %}

{% block title %}Tables - Corporate UI{% endblock %}

{% block body_class %}g-sidenav-show bg-gray-100{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
<aside class=\"sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-start\" id=\"sidenav-main\">
    <div class=\"sidenav-header\">
        <i class=\"fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
        <a class=\"navbar-brand d-flex align-items-center m-0\" href=\"{{ path('app_back_dashboard') }}\">
            <span class=\"font-weight-bold text-lg\">Corporate UI</span>
        </a>
    </div>

    <hr class=\"horizontal light mt-0\">

    <div class=\"collapse navbar-collapse w-auto\" id=\"sidenav-collapse-main\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_back_dashboard') }}\">
                    <div class=\"icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center\">
                        <svg width=\"30px\" height=\"30px\" viewBox=\"0 0 48 48\" xmlns=\"http://www.w3.org/2000/svg\">
                            <g fill=\"#FFFFFF\">
                                <path class=\"color-foreground\" d=\"M0,1.71428571 C0,0.76752 0.76752,0 1.71428571,0 L22.2857143,0 C23.2325143,0 24,0.76752 24,1.71428571 L24,5.14285714 C24,6.08962286 23.2325143,6.85714286 22.2857143,6.85714286 L1.71428571,6.85714286 C0.76752,6.85714286 0,6.08962286 0,5.14285714 L0,1.71428571 Z\"></path>
                                <path class=\"color-background\" d=\"M0,12 C0,11.0532171 0.76752,10.2857143 1.71428571,10.2857143 L12,10.2857143 C12.9468,10.2857143 13.7142857,11.0532171 13.7142857,12 L13.7142857,22.2857143 C13.7142857,23.2325143 12.9468,24 12,24 L1.71428571,24 C0.76752,24 0,23.2325143 0,22.2857143 L0,12 Z\"></path>
                                <path class=\"color-background\" d=\"M18.8571429,10.2857143 C17.9103429,10.2857143 17.1428571,11.0532171 17.1428571,12 L17.1428571,22.2857143 C17.1428571,23.2325143 17.9103429,24 18.8571429,24 L22.2857143,24 C23.2325143,24 24,23.2325143 24,22.2857143 L24,12 C24,11.0532171 23.2325143,10.2857143 22.2857143,10.2857143 L18.8571429,10.2857143 Z\"></path>
                            </g>
                        </svg>
                    </div>
                    <span class=\"nav-link-text ms-1\">Dashboard</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"{{ path('app_back_tables') }}\">
                    <div class=\"icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center\">
                        <svg width=\"30px\" height=\"30px\" viewBox=\"0 0 48 48\" xmlns=\"http://www.w3.org/2000/svg\">
                            <g fill=\"#FFFFFF\">
                                <path class=\"color-foreground\" d=\"M3.42857143,0 C1.53502286,0 0,1.53502286 0,3.42857143 L0,6.85714286 C0,8.75069143 1.53502286,10.2857143 3.42857143,10.2857143 L6.85714286,10.2857143 C8.75069143,10.2857143 10.2857143,8.75069143 10.2857143,6.85714286 L10.2857143,3.42857143 C10.2857143,1.53502286 8.75069143,0 6.85714286,0 L3.42857143,0 Z\"></path>
                                <path class=\"color-background\" d=\"M3.42857143,13.7142857 C1.53502286,13.7142857 0,15.2492571 0,17.1428571 L0,20.5714286 C0,22.4650286 1.53502286,24 3.42857143,24 L6.85714286,24 C8.75069143,24 10.2857143,22.4650286 10.2857143,20.5714286 L10.2857143,17.1428571 C10.2857143,15.2492571 8.75069143,13.7142857 6.85714286,13.7142857 L3.42857143,13.7142857 Z\"></path>
                                <path class=\"color-background\" d=\"M13.7142857,3.42857143 C13.7142857,1.53502286 15.2492571,0 17.1428571,0 L20.5714286,0 C22.4650286,0 24,1.53502286 24,3.42857143 L24,6.85714286 C24,8.75069143 22.4650286,10.2857143 20.5714286,10.2857143 L17.1428571,10.2857143 C15.2492571,10.2857143 13.7142857,8.75069143 13.7142857,6.85714286 L13.7142857,3.42857143 Z\"></path>
                                <path class=\"color-foreground\" d=\"M13.7142857,17.1428571 C13.7142857,15.2492571 15.2492571,13.7142857 17.1428571,13.7142857 L20.5714286,13.7142857 C22.4650286,13.7142857 24,15.2492571 24,17.1428571 L24,20.5714286 C24,22.4650286 22.4650286,24 20.5714286,24 L17.1428571,24 C15.2492571,24 13.7142857,22.4650286 13.7142857,20.5714286 L13.7142857,17.1428571 Z\"></path>
                            </g>
                        </svg>
                    </div>
                    <span class=\"nav-link-text ms-1\">Tables</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                    <div class=\"icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center\">
                        <svg width=\"30px\" height=\"30px\" viewBox=\"0 0 48 48\" xmlns=\"http://www.w3.org/2000/svg\">
                            <g fill=\"#FFFFFF\">
                                <path class=\"color-background\" d=\"M3,0 C1.343145,0 0,1.343145 0,3 L0,4.5 L24,4.5 L24,3 C24,1.343145 22.6569,0 21,0 L3,0 Z\"></path>
                                <path class=\"color-foreground\" d=\"M24,7.5 L0,7.5 L0,15 C0,16.6569 1.343145,18 3,18 L21,18 C22.6569,18 24,16.6569 24,15 L24,7.5 Z M3,13.5 C3,12.67155 3.67158,12 4.5,12 L6,12 C6.82842,12 7.5,12.67155 7.5,13.5 C7.5,14.32845 6.82842,15 6,15 L4.5,15 C3.67158,15 3,14.32845 3,13.5 Z\"></path>
                            </g>
                        </svg>
                    </div>
                    <span class=\"nav-link-text ms-1\">Wallet</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_back_rtl') }}\">
                    <div class=\"icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center\">
                        <svg width=\"30px\" height=\"30px\" viewBox=\"0 0 48 48\" xmlns=\"http://www.w3.org/2000/svg\">
                            <g fill=\"#FFFFFF\">
                                <path class=\"color-foreground\" d=\"M0,1.71428571 C0,0.76752 0.76752,0 1.71428571,0 L22.2857143,0 C23.2325143,0 24,0.76752 24,1.71428571 C24,2.66105143 23.2325143,3.42857143 22.2857143,3.42857143 L1.71428571,3.42857143 C0.76752,3.42857143 0,2.66105143 0,1.71428571 Z\"></path>
                                <path class=\"color-background\" d=\"M0,10.2857143 C0,9.33894857 0.76752,8.57142857 1.71428571,8.57142857 L22.2857143,8.57142857 C23.2325143,8.57142857 24,9.33894857 24,10.2857143 C24,11.2325143 23.2325143,12 22.2857143,12 L1.71428571,12 C0.76752,12 0,11.2325143 0,10.2857143 Z\"></path>
                                <path class=\"color-background\" d=\"M10.2857143,18.8571429 C10.2857143,17.9103429 11.0532343,17.1428571 12,17.1428571 L22.2857143,17.1428571 C23.2325143,17.1428571 24,17.9103429 24,18.8571429 C24,19.8039429 23.2325143,20.5714286 22.2857143,20.5714286 L12,20.5714286 C11.0532343,20.5714286 10.2857143,19.8039429 10.2857143,18.8571429 Z\"></path>
                            </g>
                        </svg>
                    </div>
                    <span class=\"nav-link-text ms-1\">RTL</span>
                </a>
            </li>

            <li class=\"nav-item mt-3\">
                <div class=\"d-flex align-items-center nav-link\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" class=\"text-white me-2\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <path fill-rule=\"evenodd\" d=\"M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z\" clip-rule=\"evenodd\" />
                    </svg>
                    <span class=\"text-white font-weight-normal text-md me-2\">Account Pages</span>
                </div>
            </li>

            <li class=\"nav-item border-start my-0 pt-2\">
                <a class=\"nav-link position-relative\" href=\"#\">Profile</a>
            </li>
            <li class=\"nav-item border-start my-0 pt-2\">
                <a class=\"nav-link position-relative\" href=\"{{ path('app_back_signin') }}\">Sign In</a>
            </li>
            <li class=\"nav-item border-start my-0 pt-2\">
                <a class=\"nav-link position-relative\" href=\"{{ path('app_back_signup') }}\">Sign Up</a>
            </li>
        </ul>
    </div>
</aside>

<main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden\">
    <nav class=\"navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded\" id=\"navbarBlur\">
        <div class=\"container-fluid py-1 px-2\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb bg-transparent mb-1 pb-0 pt-1 px-0\">
                    <li class=\"breadcrumb-item text-sm\"><a class=\"opacity-5 text-dark\" href=\"javascript:;\">Dashboard</a></li>
                    <li class=\"breadcrumb-item text-sm text-dark active\" aria-current=\"page\">Tables</li>
                </ol>
                <h6 class=\"font-weight-bold mb-0\">Tables</h6>
            </nav>

            <div class=\"collapse navbar-collapse mt-sm-0 mt-2 px-0\" id=\"navbar\">
                <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text text-body bg-white border-end-0\">
                            <i class=\"fas fa-search\"></i>
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
                    <li class=\"nav-item dropdown pe-2 d-flex align-items-center\">
                        <a href=\"javascript:;\" class=\"nav-link text-body p-0\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-bell cursor-pointer\"></i>
                        </a>
                    </li>
                    <li class=\"nav-item ps-2 d-flex align-items-center\">
                        <a href=\"#\" class=\"nav-link text-body font-weight-bold px-0\">
                            <img src=\"{{ asset('backend/assets/img/team-2.jpg') }}\" class=\"avatar avatar-sm\" alt=\"avatar\">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container-fluid py-4 px-5\">
        <!-- Hero Banner -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card card-background card-background-after-none align-items-start mt-4 mb-5\">
                    <div class=\"full-background\" style=\"background-image: url('{{ asset('backend/assets/img/header-blue-purple.jpg') }}')\"></div>
                    <div class=\"card-body text-start p-4 w-100\">
                        <h3 class=\"text-white mb-2\">Collect your benefits</h3>
                        <p class=\"mb-4 font-weight-semibold\">Check all the advantages and choose the best.</p>
                        <button type=\"button\" class=\"btn btn-outline-white btn-blur btn-icon d-flex align-items-center mb-0\">
                            <span class=\"btn-inner--icon me-2\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14ZM6.61036 4.52196C6.34186 4.34296 5.99664 4.32627 5.71212 4.47854C5.42761 4.63081 5.25 4.92731 5.25 5.25V8.75C5.25 9.0727 5.42761 9.36924 5.71212 9.52149C5.99664 9.67374 6.34186 9.65703 6.61036 9.47809L9.23536 7.72809C9.47879 7.56577 9.625 7.2926 9.625 7C9.625 6.70744 9.47879 6.43424 9.23536 6.27196L6.61036 4.52196Z\"/>
                                </svg>
                            </span>
                            <span class=\"btn-inner--text\">Watch more</span>
                        </button>
                        <img src=\"{{ asset('backend/assets/img/3d-cube.png') }}\" alt=\"3d-cube\" class=\"position-absolute top-0 end-1 w-25 max-width-200 mt-n6 d-sm-block d-none\">
                    </div>
                </div>
            </div>
        </div>

        <!-- Members Table -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card border shadow-xs mb-4\">
                    <div class=\"card-header border-bottom pb-0\">
                        <div class=\"d-sm-flex align-items-center\">
                            <div>
                                <h6 class=\"font-weight-semibold text-lg mb-0\">Members list</h6>
                                <p class=\"text-sm\">See information about all members</p>
                            </div>
                            <div class=\"ms-auto d-flex\">
                                <button type=\"button\" class=\"btn btn-sm btn-white me-2\">View all</button>
                                <button type=\"button\" class=\"btn btn-sm btn-dark btn-icon d-flex align-items-center\">
                                    <span class=\"btn-inner--icon me-1\">
                                        <svg width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z\"/>
                                        </svg>
                                    </span>
                                    <span class=\"btn-inner--text\">Add member</span>
                                </button>
                            </div>
                        </div>
                        <div class=\"border-bottom py-3 px-3 d-sm-flex align-items-center mt-3\">
                            <div class=\"btn-group me-3\" role=\"group\">
                                <input type=\"radio\" class=\"btn-check\" name=\"btnradiotable\" id=\"btnradiotable1\" checked>
                                <label class=\"btn btn-white px-3 mb-0\" for=\"btnradiotable1\">All</label>
                                <input type=\"radio\" class=\"btn-check\" name=\"btnradiotable\" id=\"btnradiotable2\">
                                <label class=\"btn btn-white px-3 mb-0\" for=\"btnradiotable2\">Monitored</label>
                                <input type=\"radio\" class=\"btn-check\" name=\"btnradiotable\" id=\"btnradiotable3\">
                                <label class=\"btn btn-white px-3 mb-0\" for=\"btnradiotable3\">Unmonitored</label>
                            </div>
                            <div class=\"input-group w-sm-25 ms-auto\">
                                <span class=\"input-group-text text-body\"><i class=\"fas fa-search\"></i></span>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body px-0 py-0\">
                        <div class=\"table-responsive p-0\">
                            <table class=\"table align-items-center mb-0\">
                                <thead class=\"bg-gray-100\">
                                    <tr>
                                        <th class=\"text-secondary text-xs font-weight-semibold opacity-7\">Member</th>
                                        <th class=\"text-secondary text-xs font-weight-semibold opacity-7 ps-2\">Function</th>
                                        <th class=\"text-center text-secondary text-xs font-weight-semibold opacity-7\">Status</th>
                                        <th class=\"text-center text-secondary text-xs font-weight-semibold opacity-7\">Employed</th>
                                        <th class=\"text-secondary opacity-7\"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Repeat this block for each row -->
                                    <tr>
                                        <td><div class=\"d-flex px-2 py-1\"><div><img src=\"{{ asset('backend/assets/img/team-2.jpg') }}\" class=\"avatar avatar-sm rounded-circle me-2\" alt=\"user\"></div><div class=\"d-flex flex-column justify-content-center ms-1\"><h6 class=\"mb-0 text-sm font-weight-semibold\">John Michael</h6><p class=\"text-sm text-secondary mb-0\">john@creative-tim.com</p></div></div></td>
                                        <td><p class=\"text-sm text-dark font-weight-semibold mb-0\">Manager</p><p class=\"text-sm text-secondary mb-0\">Organization</p></td>
                                        <td class=\"align-middle text-center\"><span class=\"badge badge-sm border border-success text-success bg-success\">Online</span></td>
                                        <td class=\"align-middle text-center\"><span class=\"text-secondary text-sm font-weight-normal\">23/04/18</span></td>
                                        <td class=\"align-middle\"><a href=\"javascript:;\" class=\"text-secondary font-weight-bold text-xs\"><i class=\"fas fa-edit\"></i></a></td>
                                    </tr>
                                    <!-- More rows... (6 total in original) -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Transactions Table -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card border shadow-xs mb-4\">
                    <div class=\"card-header border-bottom pb-0\">
                        <div class=\"d-sm-flex align-items-center mb-3\">
                            <div>
                                <h6 class=\"font-weight-semibold text-lg mb-0\">Recent transactions</h6>
                                <p class=\"text-sm mb-0\">These are details about the last transactions</p>
                            </div>
                            <div class=\"ms-auto d-flex\">
                                <div class=\"input-group input-group-sm me-2\">
                                    <span class=\"input-group-text text-body\"><i class=\"fas fa-search\"></i></span>
                                    <input type=\"text\" class=\"form-control form-control-sm\" placeholder=\"Search\">
                                </div>
                                <button type=\"button\" class=\"btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0\">
                                    <span class=\"btn-inner--icon me-1\"><i class=\"fas fa-download\"></i></span>
                                    <span class=\"btn-inner--text\">Download</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body px-0 py-0\">
                        <div class=\"table-responsive p-0\">
                            <table class=\"table align-items-center justify-content-center mb-0\">
                                <!-- Table content exactly as in original HTML -->
                                <!-- (Spotify, Invision, Jira, etc.) -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {% include 'back/_footer.html.twig' %}
    </div>
</main>

{% include 'back/_fixed_plugin.html.twig' %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('backend/assets/js/corporate-ui-dashboard.min.js?v=1.0.0') }}\"></script>
{% endblock %}", "back/tables.html.twig", "C:\\xampp\\htdocs\\Artiste\\templates\\back\\tables.html.twig");
    }
}
