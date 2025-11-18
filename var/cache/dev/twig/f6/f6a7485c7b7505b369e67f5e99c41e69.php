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

/* back/base.html.twig */
class __TwigTemplate_ed4562b4d27a7c3033cbc39337b5a6d2 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body_class' => [$this, 'block_body_class'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/img/apple-icon.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/img/favicon.png"), "html", null, true);
        yield "\">

    <title>";
        // line 10
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700\" rel=\"stylesheet\" />

    <!-- Nucleo Icons -->
    <link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/css/nucleo-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/css/nucleo-svg.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

    <!-- Font Awesome -->
    <script src=\"https://kit.fontawesome.com/349ee9c857.js\" crossorigin=\"anonymous\"></script>

    <!-- Main CSS -->
    <link id=\"pagestyle\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/css/corporate-ui-dashboard.css?v=1.0.0"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

    ";
        // line 25
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 26
        yield "</head>

<body class=\"g-sidenav-show bg-gray-100 ";
        // line 28
        yield from $this->unwrap()->yieldBlock('body_class', $context, $blocks);
        yield "\">

";
        // line 31
        yield "<aside class=\"sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-start\" id=\"sidenav-main\">
    <div class=\"sidenav-header\">
        <i class=\"fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
        <a class=\"navbar-brand d-flex align-items-center m-0\" href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_dashboard");
        yield "\">
            <span class=\"font-weight-bold text-lg\">Corporate UI</span>
        </a>
    </div>

    <hr class=\"horizontal light mt-0\">

    <div class=\"collapse navbar-collapse w-auto\" id=\"sidenav-collapse-main\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link ";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "attributes", [], "any", false, false, false, 44), "get", ["_route"], "method", false, false, false, 44) == "app_back_dashboard")) {
            yield "active";
        }
        yield "\"
                   href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_dashboard");
        yield "\">
                    <div class=\"icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center\">
                        <svg width=\"30px\" height=\"30px\" viewBox=\"0 0 48 48\" xmlns=\"http://www.w3.org/2000/svg\">
                            <title>dashboard</title>
                            <g fill=\"#FFFFFF\">
                                <path d=\"M0,1.71428571 C0,0.76752 0.76752,0 1.71428571,0 L22.2857143,0 C23.2325143,0 24,0.76752 24,1.71428571 L24,5.14285714 C24,6.08962286 23.2325143,6.85714286 22.2857143,6.85714286 L1.71428571,6.85714286 C0.76752,6.85714286 0,6.08962286 0,5.14285714 L0,1.71428571 Z\"></path>
                                <path d=\"M0,12 C0,11.0532171 0.76752,10.2857143 1.71428571,10.2857143 L12,10.2857143 C12.9468,10.2857143 13.7142857,11.0532171 13.7142857,12 L13.7142857,22.2857143 C13.7142857,23.2325143 12.9468,24 12,24 L1.71428571,24 C0.76752,24 0,23.2325143 0,22.2857143 L0,12 Z\"></path>
                                <path d=\"M18.8571429,10.2857143 C17.9103429,10.2857143 17.1428571,11.0532171 17.1428571,12 L17.1428571,22.2857143 C17.1428571,23.2325143 17.9103429,24 18.8571429,24 L22.2857143,24 C23.2325143,24 24,23.2325143 24,22.2857143 L24,12 C24,11.0532171 23.2325143,10.2857143 22.2857143,10.2857143 L18.8571429,10.2857143 Z\"></path>
                            </g>
                        </svg>
                    </div>
                    <span class=\"nav-link-text ms-1\">Dashboard</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link ";
        // line 61
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "attributes", [], "any", false, false, false, 61), "get", ["_route"], "method", false, false, false, 61) == "app_back_tables")) {
            yield "active";
        }
        yield "\"
                   href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_tables");
        yield "\">
                    <div class=\"icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center\">
                        <svg width=\"30px\" height=\"30px\" viewBox=\"0 0 48 48\" xmlns=\"http://www.w3.org/2000/svg\">
                            <title>table</title>
                            <g fill=\"#FFFFFF\">
                                <path d=\"M3.42857143,0 C1.53502286,0 0,1.53502286 0,3.42857143 L0,6.85714286 C0,8.75069143 1.53502286,10.2857143 3.42857143,10.2857143 L6.85714286,10.2857143 C8.75069143,10.2857143 10.2857143,8.75069143 10.2857143,6.85714286 L10.2857143,3.42857143 C10.2857143,1.53502286 8.75069143,0 6.85714286,0 L3.42857143,0 Z\"></path>
                                <path d=\"M3.42857143,13.7142857 C1.53502286,13.7142857 0,15.2492571 0,17.1428571 L0,20.5714286 C0,22.4650286 1.53502286,24 3.42857143,24 L6.85714286,24 C8.75069143,24 10.2857143,22.4650286 10.2857143,20.5714286 L10.2857143,17.1428571 C10.2857143,15.2492571 8.75069143,13.7142857 6.85714286,13.7142857 L3.42857143,13.7142857 Z\"></path>
                                <path d=\"M13.7142857,3.42857143 C13.7142857,1.53502286 15.2492571,0 17.1428571,0 L20.5714286,0 C22.4650286,0 24,1.53502286 24,3.42857143 L24,6.85714286 C24,8.75069143 22.4650286,10.2857143 20.5714286,10.2857143 L17.1428571,10.2857143 C15.2492571,10.2857143 13.7142857,8.75069143 13.7142857,6.85714286 L13.7142857,3.42857143 Z\"></path>
                                <path d=\"M13.7142857,17.1428571 C13.7142857,15.2492571 15.2492571,13.7142857 17.1428571,13.7142857 L20.5714286,13.7142857 C22.4650286,13.7142857 24,15.2492571 24,17.1428571 L24,20.5714286 C24,22.4650286 22.4650286,24 20.5714286,24 L17.1428571,24 C15.2492571,24 13.7142857,22.4650286 13.7142857,20.5714286 L13.7142857,17.1428571 Z\"></path>
                            </g>
                        </svg>
                    </div>
                    <span class=\"nav-link-text ms-1\">Tables</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link ";
        // line 79
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "request", [], "any", false, false, false, 79), "attributes", [], "any", false, false, false, 79), "get", ["_route"], "method", false, false, false, 79) == "app_back_wallet")) {
            yield "active";
        }
        yield "\"
                   href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_wallet");
        yield "\">
                    <div class=\"icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center\">
                        <svg width=\"30px\" height=\"30px\" viewBox=\"0 0 48 48\" xmlns=\"http://www.w3.org/2000/svg\">
                            <title>wallet</title>
                            <g fill=\"#FFFFFF\">
                                <path d=\"M3,0 C1.343145,0 0,1.343145 0,3 L0,4.5 L24,4.5 L24,3 C24,1.343145 22.6569,0 21,0 L3,0 Z\"></path>
                                <path d=\"M24,7.5 L0,7.5 L0,15 C0,16.6569 1.343145,18 3,18 L21,18 C22.6569,18 24,16.6569 24,15 L24,7.5 Z M3,13.5 C3,12.67155 3.67158,12 4.5,12 L6,12 C6.82842,12 7.5,12.67155 7.5,13.5 C7.5,14.32845 6.82842,15 6,15 L4.5,15 C3.67158,15 3,14.32845 3,13.5 Z M10.5,12 C9.67158,12 9,12.67155 9,13.5 C9,14.32845 9.67158,15 10.5,15 L12,15 C12.82845,15 13.5,14.32845 13.5,13.5 C13.5,12.67155 12.82845,12 12,12 L10.5,12 Z\"></path>
                            </g>
                        </svg>
                    </div>
                    <span class=\"nav-link-text ms-1\">Wallet</span>
                </a>
            </li>

            <li class=\"nav-item mt-3\">
                <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Account pages</h6>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_profile");
        yield "\">
                    <span class=\"nav-link-text ms-1\">Profile</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_signin");
        yield "\">
                    <span class=\"nav-link-text ms-1\">Sign In</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_signup");
        yield "\">
                    <span class=\"nav-link-text ms-1\">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

";
        // line 117
        yield "<main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg\">
    ";
        // line 118
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 119
        yield "</main>

";
        // line 122
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/js/core/popper.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/js/core/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/js/plugins/smooth-scrollbar.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/js/plugins/chartjs.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/js/plugins/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/js/corporate-ui-dashboard.min.js?v=1.0.0"), "html", null, true);
        yield "\"></script>

";
        // line 130
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 131
        yield "
<script async defer src=\"https://buttons.github.io/buttons.js\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
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

        yield "Corporate UI - Backend";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 28
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 130
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/base.html.twig";
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
        return array (  375 => 130,  353 => 118,  331 => 28,  309 => 25,  286 => 10,  272 => 131,  270 => 130,  265 => 128,  261 => 127,  257 => 126,  253 => 125,  249 => 124,  245 => 123,  240 => 122,  236 => 119,  234 => 118,  231 => 117,  220 => 108,  212 => 103,  204 => 98,  183 => 80,  177 => 79,  157 => 62,  151 => 61,  132 => 45,  126 => 44,  113 => 34,  108 => 31,  103 => 28,  99 => 26,  97 => 25,  92 => 23,  83 => 17,  79 => 16,  70 => 10,  65 => 8,  61 => 7,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('backend/assets/img/apple-icon.png') }}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('backend/assets/img/favicon.png') }}\">

    <title>{% block title %}Corporate UI - Backend{% endblock %}</title>

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700\" rel=\"stylesheet\" />

    <!-- Nucleo Icons -->
    <link href=\"{{ asset('backend/assets/css/nucleo-icons.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('backend/assets/css/nucleo-svg.css') }}\" rel=\"stylesheet\" />

    <!-- Font Awesome -->
    <script src=\"https://kit.fontawesome.com/349ee9c857.js\" crossorigin=\"anonymous\"></script>

    <!-- Main CSS -->
    <link id=\"pagestyle\" href=\"{{ asset('backend/assets/css/corporate-ui-dashboard.css?v=1.0.0') }}\" rel=\"stylesheet\" />

    {% block stylesheets %}{% endblock %}
</head>

<body class=\"g-sidenav-show bg-gray-100 {% block body_class %}{% endblock %}\">

{# ==================== SIDEBAR ==================== #}
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
                <a class=\"nav-link {% if app.request.attributes.get('_route') == 'app_back_dashboard' %}active{% endif %}\"
                   href=\"{{ path('app_back_dashboard') }}\">
                    <div class=\"icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center\">
                        <svg width=\"30px\" height=\"30px\" viewBox=\"0 0 48 48\" xmlns=\"http://www.w3.org/2000/svg\">
                            <title>dashboard</title>
                            <g fill=\"#FFFFFF\">
                                <path d=\"M0,1.71428571 C0,0.76752 0.76752,0 1.71428571,0 L22.2857143,0 C23.2325143,0 24,0.76752 24,1.71428571 L24,5.14285714 C24,6.08962286 23.2325143,6.85714286 22.2857143,6.85714286 L1.71428571,6.85714286 C0.76752,6.85714286 0,6.08962286 0,5.14285714 L0,1.71428571 Z\"></path>
                                <path d=\"M0,12 C0,11.0532171 0.76752,10.2857143 1.71428571,10.2857143 L12,10.2857143 C12.9468,10.2857143 13.7142857,11.0532171 13.7142857,12 L13.7142857,22.2857143 C13.7142857,23.2325143 12.9468,24 12,24 L1.71428571,24 C0.76752,24 0,23.2325143 0,22.2857143 L0,12 Z\"></path>
                                <path d=\"M18.8571429,10.2857143 C17.9103429,10.2857143 17.1428571,11.0532171 17.1428571,12 L17.1428571,22.2857143 C17.1428571,23.2325143 17.9103429,24 18.8571429,24 L22.2857143,24 C23.2325143,24 24,23.2325143 24,22.2857143 L24,12 C24,11.0532171 23.2325143,10.2857143 22.2857143,10.2857143 L18.8571429,10.2857143 Z\"></path>
                            </g>
                        </svg>
                    </div>
                    <span class=\"nav-link-text ms-1\">Dashboard</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link {% if app.request.attributes.get('_route') == 'app_back_tables' %}active{% endif %}\"
                   href=\"{{ path('app_back_tables') }}\">
                    <div class=\"icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center\">
                        <svg width=\"30px\" height=\"30px\" viewBox=\"0 0 48 48\" xmlns=\"http://www.w3.org/2000/svg\">
                            <title>table</title>
                            <g fill=\"#FFFFFF\">
                                <path d=\"M3.42857143,0 C1.53502286,0 0,1.53502286 0,3.42857143 L0,6.85714286 C0,8.75069143 1.53502286,10.2857143 3.42857143,10.2857143 L6.85714286,10.2857143 C8.75069143,10.2857143 10.2857143,8.75069143 10.2857143,6.85714286 L10.2857143,3.42857143 C10.2857143,1.53502286 8.75069143,0 6.85714286,0 L3.42857143,0 Z\"></path>
                                <path d=\"M3.42857143,13.7142857 C1.53502286,13.7142857 0,15.2492571 0,17.1428571 L0,20.5714286 C0,22.4650286 1.53502286,24 3.42857143,24 L6.85714286,24 C8.75069143,24 10.2857143,22.4650286 10.2857143,20.5714286 L10.2857143,17.1428571 C10.2857143,15.2492571 8.75069143,13.7142857 6.85714286,13.7142857 L3.42857143,13.7142857 Z\"></path>
                                <path d=\"M13.7142857,3.42857143 C13.7142857,1.53502286 15.2492571,0 17.1428571,0 L20.5714286,0 C22.4650286,0 24,1.53502286 24,3.42857143 L24,6.85714286 C24,8.75069143 22.4650286,10.2857143 20.5714286,10.2857143 L17.1428571,10.2857143 C15.2492571,10.2857143 13.7142857,8.75069143 13.7142857,6.85714286 L13.7142857,3.42857143 Z\"></path>
                                <path d=\"M13.7142857,17.1428571 C13.7142857,15.2492571 15.2492571,13.7142857 17.1428571,13.7142857 L20.5714286,13.7142857 C22.4650286,13.7142857 24,15.2492571 24,17.1428571 L24,20.5714286 C24,22.4650286 22.4650286,24 20.5714286,24 L17.1428571,24 C15.2492571,24 13.7142857,22.4650286 13.7142857,20.5714286 L13.7142857,17.1428571 Z\"></path>
                            </g>
                        </svg>
                    </div>
                    <span class=\"nav-link-text ms-1\">Tables</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link {% if app.request.attributes.get('_route') == 'app_back_wallet' %}active{% endif %}\"
                   href=\"{{ path('app_back_wallet') }}\">
                    <div class=\"icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center\">
                        <svg width=\"30px\" height=\"30px\" viewBox=\"0 0 48 48\" xmlns=\"http://www.w3.org/2000/svg\">
                            <title>wallet</title>
                            <g fill=\"#FFFFFF\">
                                <path d=\"M3,0 C1.343145,0 0,1.343145 0,3 L0,4.5 L24,4.5 L24,3 C24,1.343145 22.6569,0 21,0 L3,0 Z\"></path>
                                <path d=\"M24,7.5 L0,7.5 L0,15 C0,16.6569 1.343145,18 3,18 L21,18 C22.6569,18 24,16.6569 24,15 L24,7.5 Z M3,13.5 C3,12.67155 3.67158,12 4.5,12 L6,12 C6.82842,12 7.5,12.67155 7.5,13.5 C7.5,14.32845 6.82842,15 6,15 L4.5,15 C3.67158,15 3,14.32845 3,13.5 Z M10.5,12 C9.67158,12 9,12.67155 9,13.5 C9,14.32845 9.67158,15 10.5,15 L12,15 C12.82845,15 13.5,14.32845 13.5,13.5 C13.5,12.67155 12.82845,12 12,12 L10.5,12 Z\"></path>
                            </g>
                        </svg>
                    </div>
                    <span class=\"nav-link-text ms-1\">Wallet</span>
                </a>
            </li>

            <li class=\"nav-item mt-3\">
                <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Account pages</h6>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_back_profile') }}\">
                    <span class=\"nav-link-text ms-1\">Profile</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_back_signin') }}\">
                    <span class=\"nav-link-text ms-1\">Sign In</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_back_signup') }}\">
                    <span class=\"nav-link-text ms-1\">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

{# ==================== MAIN CONTENT ==================== #}
<main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg\">
    {% block body %}{% endblock %}
</main>

{# ==================== SCRIPTS ==================== #}
<script src=\"{{ asset('backend/assets/js/core/popper.min.js') }}\"></script>
<script src=\"{{ asset('backend/assets/js/core/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('backend/assets/js/plugins/perfect-scrollbar.min.js') }}\"></script>
<script src=\"{{ asset('backend/assets/js/plugins/smooth-scrollbar.min.js') }}\"></script>
<script src=\"{{ asset('backend/assets/js/plugins/chartjs.min.js') }}\"></script>
<script src=\"{{ asset('backend/assets/js/plugins/swiper-bundle.min.js') }}\"></script>
<script src=\"{{ asset('backend/assets/js/corporate-ui-dashboard.min.js?v=1.0.0') }}\"></script>

{% block javascripts %}{% endblock %}

<script async defer src=\"https://buttons.github.io/buttons.js\"></script>
</body>
</html>", "back/base.html.twig", "C:\\xampp\\htdocs\\Artiste\\templates\\back\\base.html.twig");
    }
}
