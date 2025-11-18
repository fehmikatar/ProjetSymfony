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

/* back/rtl.html.twig */
class __TwigTemplate_840f866776166e484ee31277e7e209e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/rtl.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/rtl.html.twig"));

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

        yield "RTL Dashboard - Corporate UI";
        
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

        yield "g-sidenav-show rtl bg-gray-100";
        
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
    <link href=\"https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700,800\" rel=\"stylesheet\" />
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
        yield "<aside class=\"sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-end rotate-caret\" id=\"sidenav-main\">
    <div class=\"sidenav-header\">
        <i class=\"fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute start-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
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
                    <span class=\"nav-link-text me-1\">Dashboard</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
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
                    <span class=\"nav-link-text me-1\">Tables</span>
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
                    <span class=\"nav-link-text me-1\">Billing</span>
                </a>
            </li>

            <li class=\"nav-item active\">
                <a class=\"nav-link active\" href=\"";
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
                    <span class=\"nav-link-text me-1\">RTL</span>
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
                <ol class=\"breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0\">
                    <li class=\"breadcrumb-item text-sm ps-2\"><a class=\"opacity-5 text-dark\" href=\"javascript:;\">Pages</a></li>
                    <li class=\"breadcrumb-item text-sm text-dark active\" aria-current=\"page\">RTL</li>
                </ol>
                <h6 class=\"font-weight-bold mb-0\">RTL Dashboard</h6>
            </nav>

            <div class=\"collapse navbar-collapse mt-sm-0 mt-2 px-0\" id=\"navbar\">
                <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text text-body bg-white border-start-0\">
                            <i class=\"fas fa-search\"></i>
                        </span>
                        <input type=\"text\" class=\"form-control pe-0\" placeholder=\"Type here...\">
                    </div>
                </div>

                <ul class=\"navbar-nav me-auto ms-0 justify-content-end\">
                    <li class=\"nav-item d-xl-none pe-3 d-flex align-items-center\">
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
                    <li class=\"nav-item d-flex align-items-center\">
                        <a href=\"#\" class=\"nav-link text-body font-weight-bold px-0\">
                            <img src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/img/team-2.jpg"), "html", null, true);
        yield "\" class=\"avatar avatar-sm me-3\" alt=\"avatar\">
                            <span class=\"d-sm-inline d-none\">Noah</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container-fluid py-4 px-5\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"d-md-flex align-items-center mb-3\">
                    <div>
                        <h3 class=\"font-weight-bold mb-0\">Hello, Noah</h3>
                        <p class=\"mb-0\">Nice to see you again!</p>
                    </div>
                    <div class=\"ms-auto d-flex\">
                        <button type=\"button\" class=\"btn btn-sm btn-white btn-icon d-flex align-items-center mb-0 me-2\">
                            <span class=\"btn-inner--icon me-1\"><span class=\"p-1 bg-success rounded-circle\"></span></span>
                            <span class=\"btn-inner--text\">Messages</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0\">
                            <span class=\"btn-inner--icon\"><i class=\"fas fa-sync\"></i></span>
                            <span class=\"btn-inner--text\">Sync</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <hr class=\"horizontal dark my-4\">

        ";
        // line 179
        yield "        ";
        // line 180
        yield "        ";
        // line 181
        yield "
    </div>

    ";
        // line 184
        yield from $this->load("back/_footer.html.twig", 184)->unwrap()->yield($context);
        // line 185
        yield "</main>

";
        // line 187
        yield from $this->load("back/_fixed_plugin.html.twig", 187)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 190
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

        // line 191
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>
    <link href=\"https://unpkg.com/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

    <script>
        // Force RTL mode
        document.documentElement.dir = \"rtl\";
        document.documentElement.lang = \"en\"; // or \"ar\" if you want Arabic

        // Swiper init
        new Swiper(\".mySwiper\", {
            effect: \"cards\",
            grabCursor: true,
            initialSlide: 1,
        });

        // All Chart.js code from the original template works unchanged
    </script>
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
        return "back/rtl.html.twig";
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
        return array (  378 => 191,  365 => 190,  354 => 187,  350 => 185,  348 => 184,  343 => 181,  341 => 180,  339 => 179,  303 => 145,  256 => 101,  250 => 98,  220 => 71,  172 => 26,  159 => 16,  154 => 13,  141 => 12,  126 => 8,  113 => 7,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/base.html.twig' %}

{% block title %}RTL Dashboard - Corporate UI{% endblock %}

{% block body_class %}g-sidenav-show rtl bg-gray-100{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700,800\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
<aside class=\"sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-end rotate-caret\" id=\"sidenav-main\">
    <div class=\"sidenav-header\">
        <i class=\"fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute start-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
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
                    <span class=\"nav-link-text me-1\">Dashboard</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
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
                    <span class=\"nav-link-text me-1\">Tables</span>
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
                    <span class=\"nav-link-text me-1\">Billing</span>
                </a>
            </li>

            <li class=\"nav-item active\">
                <a class=\"nav-link active\" href=\"{{ path('app_back_rtl') }}\">
                    <div class=\"icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center\">
                        <svg width=\"30px\" height=\"30px\" viewBox=\"0 0 48 48\" xmlns=\"http://www.w3.org/2000/svg\">
                            <g fill=\"#FFFFFF\">
                                <path class=\"color-foreground\" d=\"M0,1.71428571 C0,0.76752 0.76752,0 1.71428571,0 L22.2857143,0 C23.2325143,0 24,0.76752 24,1.71428571 C24,2.66105143 23.2325143,3.42857143 22.2857143,3.42857143 L1.71428571,3.42857143 C0.76752,3.42857143 0,2.66105143 0,1.71428571 Z\"></path>
                                <path class=\"color-background\" d=\"M0,10.2857143 C0,9.33894857 0.76752,8.57142857 1.71428571,8.57142857 L22.2857143,8.57142857 C23.2325143,8.57142857 24,9.33894857 24,10.2857143 C24,11.2325143 23.2325143,12 22.2857143,12 L1.71428571,12 C0.76752,12 0,11.2325143 0,10.2857143 Z\"></path>
                                <path class=\"color-background\" d=\"M10.2857143,18.8571429 C10.2857143,17.9103429 11.0532343,17.1428571 12,17.1428571 L22.2857143,17.1428571 C23.2325143,17.1428571 24,17.9103429 24,18.8571429 C24,19.8039429 23.2325143,20.5714286 22.2857143,20.5714286 L12,20.5714286 C11.0532343,20.5714286 10.2857143,19.8039429 10.2857143,18.8571429 Z\"></path>
                            </g>
                        </svg>
                    </div>
                    <span class=\"nav-link-text me-1\">RTL</span>
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
                <ol class=\"breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0\">
                    <li class=\"breadcrumb-item text-sm ps-2\"><a class=\"opacity-5 text-dark\" href=\"javascript:;\">Pages</a></li>
                    <li class=\"breadcrumb-item text-sm text-dark active\" aria-current=\"page\">RTL</li>
                </ol>
                <h6 class=\"font-weight-bold mb-0\">RTL Dashboard</h6>
            </nav>

            <div class=\"collapse navbar-collapse mt-sm-0 mt-2 px-0\" id=\"navbar\">
                <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text text-body bg-white border-start-0\">
                            <i class=\"fas fa-search\"></i>
                        </span>
                        <input type=\"text\" class=\"form-control pe-0\" placeholder=\"Type here...\">
                    </div>
                </div>

                <ul class=\"navbar-nav me-auto ms-0 justify-content-end\">
                    <li class=\"nav-item d-xl-none pe-3 d-flex align-items-center\">
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
                    <li class=\"nav-item d-flex align-items-center\">
                        <a href=\"#\" class=\"nav-link text-body font-weight-bold px-0\">
                            <img src=\"{{ asset('backend/assets/img/team-2.jpg') }}\" class=\"avatar avatar-sm me-3\" alt=\"avatar\">
                            <span class=\"d-sm-inline d-none\">Noah</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container-fluid py-4 px-5\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"d-md-flex align-items-center mb-3\">
                    <div>
                        <h3 class=\"font-weight-bold mb-0\">Hello, Noah</h3>
                        <p class=\"mb-0\">Nice to see you again!</p>
                    </div>
                    <div class=\"ms-auto d-flex\">
                        <button type=\"button\" class=\"btn btn-sm btn-white btn-icon d-flex align-items-center mb-0 me-2\">
                            <span class=\"btn-inner--icon me-1\"><span class=\"p-1 bg-success rounded-circle\"></span></span>
                            <span class=\"btn-inner--text\">Messages</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0\">
                            <span class=\"btn-inner--icon\"><i class=\"fas fa-sync\"></i></span>
                            <span class=\"btn-inner--text\">Sync</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <hr class=\"horizontal dark my-4\">

        {# Paste the entire original content (Swiper, cards, charts, tables, etc.) here #}
        {# Everything from <div class=\"row\"> after the navbar down to the footer #}
        {# It will work 100% as-is since all assets are correctly referenced #}

    </div>

    {% include 'back/_footer.html.twig' %}
</main>

{% include 'back/_fixed_plugin.html.twig' %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>
    <link href=\"https://unpkg.com/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

    <script>
        // Force RTL mode
        document.documentElement.dir = \"rtl\";
        document.documentElement.lang = \"en\"; // or \"ar\" if you want Arabic

        // Swiper init
        new Swiper(\".mySwiper\", {
            effect: \"cards\",
            grabCursor: true,
            initialSlide: 1,
        });

        // All Chart.js code from the original template works unchanged
    </script>
{% endblock %}", "back/rtl.html.twig", "C:\\xampp\\htdocs\\Artiste\\templates\\back\\rtl.html.twig");
    }
}
