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

/* front/base.html.twig */
class __TwigTemplate_3a62d52a972e2cafd2337f1f880873ce extends Template
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
            'meta_description' => [$this, 'block_meta_description'],
            'meta_keywords' => [$this, 'block_meta_keywords'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body_class' => [$this, 'block_body_class'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta name=\"description\" content=\"";
        // line 7
        yield from $this->unwrap()->yieldBlock('meta_description', $context, $blocks);
        yield "\">
    <meta name=\"keywords\" content=\"";
        // line 8
        yield from $this->unwrap()->yieldBlock('meta_keywords', $context, $blocks);
        yield "\">

    <!-- Favicons -->
    <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/img/apple-touch-icon.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\">

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/vendor/aos/aos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Main CSS File -->
    <link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/css/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    ";
        // line 29
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 30
        yield "</head>

<body class=\"";
        // line 32
        yield from $this->unwrap()->yieldBlock('body_class', $context, $blocks);
        yield "\">

    ";
        // line 34
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 62
        yield "
    <main class=\"main\">
        ";
        // line 64
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 65
        yield "    </main>

    ";
        // line 67
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 85
        yield "
    <!-- Scroll Top -->
    <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\">
        <i class=\"bi bi-arrow-up-short\"></i>
    </a>

    <!-- Preloader -->
    <div id=\"preloader\"></div>

    <!-- Vendor JS Files -->
    <script src=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/vendor/waypoints/noframework.waypoints.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Main JS File -->
    <script src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/js/main.js"), "html", null, true);
        yield "\"></script>

    ";
        // line 108
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 109
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Artty - Portfolio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_keywords(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_keywords"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_keywords"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
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

    // line 32
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

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 35
        yield "    <header id=\"header\" class=\"header d-flex align-items-center light-background sticky-top\">
        <div class=\"container-fluid position-relative d-flex align-items-center justify-content-between\">
            <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_index");
        yield "\" class=\"logo d-flex align-items-center me-auto me-xl-0\">
                <h1 class=\"sitename\">Artty</h1>
            </a>

            <nav id=\"navmenu\" class=\"navmenu\">
                <ul>
                    <li><a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_index");
        yield "\" class=\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "get", ["_route"], "method", false, false, false, 43) == "app_home")) {
            yield "active";
        }
        yield "\">Home</a></li>
                    <li><a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_about");
        yield "\" class=\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "get", ["_route"], "method", false, false, false, 44) == "app_about")) {
            yield "active";
        }
        yield "\">About</a></li>
                    <li><a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_resume");
        yield "\" class=\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "get", ["_route"], "method", false, false, false, 45) == "app_resume")) {
            yield "active";
        }
        yield "\">Resume</a></li>
                    <li><a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_services");
        yield "\" class=\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "get", ["_route"], "method", false, false, false, 46) == "app_services")) {
            yield "active";
        }
        yield "\">Services</a></li>
                    <li><a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_portfolio");
        yield "\" class=\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "get", ["_route"], "method", false, false, false, 47) == "app_portfolio")) {
            yield "active";
        }
        yield "\">Portfolio</a></li>
                    <li><a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_contact");
        yield "\" class=\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "get", ["_route"], "method", false, false, false, 48) == "app_contact")) {
            yield "active";
        }
        yield "\">Contact</a></li>
                </ul>
                <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
            </nav>

            <div class=\"header-social-links\">
                <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
            </div>
        </div>
    </header>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 64
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

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 68
        yield "    <footer id=\"footer\" class=\"footer light-background\">
        <div class=\"container\">
            <div class=\"copyright text-center\">
                <p>© <span>Copyright</span> <strong class=\"px-1 sitename\">Kelly</strong> <span>All Rights Reserved</span></p>
            </div>
            <div class=\"social-links d-flex justify-content-center\">
                <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
            </div>
            <div class=\"credits\">
                Designed by <a href=\"https://bootstrapmade.com/\">4SE2 Made</a>
            </div>
        </div>
    </footer>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 108
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
        return "front/base.html.twig";
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
        return array (  483 => 108,  456 => 68,  443 => 67,  421 => 64,  392 => 48,  384 => 47,  376 => 46,  368 => 45,  360 => 44,  352 => 43,  343 => 37,  339 => 35,  326 => 34,  304 => 32,  282 => 29,  260 => 8,  238 => 7,  215 => 6,  202 => 109,  200 => 108,  195 => 106,  189 => 103,  185 => 102,  181 => 101,  177 => 100,  173 => 99,  169 => 98,  165 => 97,  161 => 96,  157 => 95,  145 => 85,  143 => 67,  139 => 65,  137 => 64,  133 => 62,  131 => 34,  126 => 32,  122 => 30,  120 => 29,  115 => 27,  109 => 24,  105 => 23,  101 => 22,  97 => 21,  93 => 20,  82 => 12,  78 => 11,  72 => 8,  68 => 7,  64 => 6,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Artty - Portfolio{% endblock %}</title>
    <meta name=\"description\" content=\"{% block meta_description %}{% endblock %}\">
    <meta name=\"keywords\" content=\"{% block meta_keywords %}{% endblock %}\">

    <!-- Favicons -->
    <link href=\"{{ asset('Frontend/assets/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('Frontend/assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"{{ asset('Frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Frontend/assets/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Frontend/assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Frontend/assets/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">

    <!-- Main CSS File -->
    <link href=\"{{ asset('Frontend/assets/css/main.css') }}\" rel=\"stylesheet\">

    {% block stylesheets %}{% endblock %}
</head>

<body class=\"{% block body_class %}{% endblock %}\">

    {% block header %}
    <header id=\"header\" class=\"header d-flex align-items-center light-background sticky-top\">
        <div class=\"container-fluid position-relative d-flex align-items-center justify-content-between\">
            <a href=\"{{ path('app_front_index') }}\" class=\"logo d-flex align-items-center me-auto me-xl-0\">
                <h1 class=\"sitename\">Artty</h1>
            </a>

            <nav id=\"navmenu\" class=\"navmenu\">
                <ul>
                    <li><a href=\"{{ path('app_front_index') }}\" class=\"{% if app.request.get('_route') == 'app_home' %}active{% endif %}\">Home</a></li>
                    <li><a href=\"{{ path('app_front_about') }}\" class=\"{% if app.request.get('_route') == 'app_about' %}active{% endif %}\">About</a></li>
                    <li><a href=\"{{ path('app_front_resume') }}\" class=\"{% if app.request.get('_route') == 'app_resume' %}active{% endif %}\">Resume</a></li>
                    <li><a href=\"{{ path('app_front_services') }}\" class=\"{% if app.request.get('_route') == 'app_services' %}active{% endif %}\">Services</a></li>
                    <li><a href=\"{{ path('app_front_portfolio') }}\" class=\"{% if app.request.get('_route') == 'app_portfolio' %}active{% endif %}\">Portfolio</a></li>
                    <li><a href=\"{{ path('app_front_contact') }}\" class=\"{% if app.request.get('_route') == 'app_contact' %}active{% endif %}\">Contact</a></li>
                </ul>
                <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
            </nav>

            <div class=\"header-social-links\">
                <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
            </div>
        </div>
    </header>
    {% endblock %}

    <main class=\"main\">
        {% block body %}{% endblock %}
    </main>

    {% block footer %}
    <footer id=\"footer\" class=\"footer light-background\">
        <div class=\"container\">
            <div class=\"copyright text-center\">
                <p>© <span>Copyright</span> <strong class=\"px-1 sitename\">Kelly</strong> <span>All Rights Reserved</span></p>
            </div>
            <div class=\"social-links d-flex justify-content-center\">
                <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
            </div>
            <div class=\"credits\">
                Designed by <a href=\"https://bootstrapmade.com/\">4SE2 Made</a>
            </div>
        </div>
    </footer>
    {% endblock %}

    <!-- Scroll Top -->
    <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\">
        <i class=\"bi bi-arrow-up-short\"></i>
    </a>

    <!-- Preloader -->
    <div id=\"preloader\"></div>

    <!-- Vendor JS Files -->
    <script src=\"{{ asset('Frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('Frontend/assets/vendor/php-email-form/validate.js') }}\"></script>
    <script src=\"{{ asset('Frontend/assets/vendor/aos/aos.js') }}\"></script>
    <script src=\"{{ asset('Frontend/assets/vendor/waypoints/noframework.waypoints.js') }}\"></script>
    <script src=\"{{ asset('Frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}\"></script>
    <script src=\"{{ asset('Frontend/assets/vendor/swiper/swiper-bundle.min.js') }}\"></script>
    <script src=\"{{ asset('Frontend/assets/vendor/glightbox/js/glightbox.min.js') }}\"></script>
    <script src=\"{{ asset('Frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('Frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}\"></script>

    <!-- Main JS File -->
    <script src=\"{{ asset('Frontend/assets/js/main.js') }}\"></script>

    {% block javascripts %}{% endblock %}
</body>
</html>
", "front/base.html.twig", "C:\\xampp\\htdocs\\Artiste\\templates\\front\\base.html.twig");
    }
}
