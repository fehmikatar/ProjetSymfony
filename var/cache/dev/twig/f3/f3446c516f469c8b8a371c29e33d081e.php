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

/* back/sign-in.html.twig */
class __TwigTemplate_a9eb5a1e2591f9f5ea41530f561856c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/sign-in.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/sign-in.html.twig"));

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

        yield "Sign In - Corporate UI";
        
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

        yield "bg-gray-100";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<div class=\"container position-sticky z-index-sticky top-0\">
    <div class=\"row\">
        <div class=\"col-12\">
            <!-- Public top navbar (same style as original auth pages) -->
            <nav class=\"navbar navbar-expand-lg blur border-radius-sm top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4\">
                <div class=\"container-fluid px-1\">
                    <a class=\"navbar-brand font-weight-bolder ms-lg-0\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_dashboard");
        yield "\">
                        Corporate UI
                    </a>
                    <button class=\"navbar-toggler shadow-none ms-2\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navigation\">
                        <span class=\"navbar-toggler-icon mt-2\">
                            <span class=\"navbar-toggler-bar bar1\"></span>
                            <span class=\"navbar-toggler-bar bar2\"></span>
                            <span class=\"navbar-toggler-bar bar3\"></span>
                        </span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navigation\">
                        <ul class=\"navbar-nav mx-auto ms-xl-auto\">
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_dashboard");
        yield "\">Dashboard</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_profile");
        yield "\">Profile</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_signup");
        yield "\">Sign Up</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link text-dark font-weight-bold\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_signin");
        yield "\">Sign In</a></li>
                        </ul>
                        <ul class=\"navbar-nav d-lg-block d-none\">
                            <li class=\"nav-item\">
                                <a href=\"https://www.creative-tim.com/product/corporate-ui-dashboard\" class=\"btn btn-sm mb-0 bg-gradient-dark\">Free download</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<main class=\"main-content mt-0\">
    <section>
        <div class=\"page-header min-vh-100\">
            <div class=\"container\">
                <div class=\"row\">

                    <!-- Sign In Form (centered on mobile, left on desktop) -->
                    <div class=\"col-xl-4 col-md-6 d-flex flex-column mx-auto\">
                        <div class=\"card card-plain mt-8\">
                            <div class=\"card-header pb-0 text-left bg-transparent\">
                                <h3 class=\"font-weight-black text-dark display-6\">Welcome back</h3>
                                <p class=\"mb-0\">Welcome back! Please enter your details.</p>
                            </div>
                            <div class=\"card-body\">
                                <form role=\"form\">
                                    <label>Email Address</label>
                                    <div class=\"mb-3\">
                                        <input type=\"email\" class=\"form-control\" placeholder=\"Enter your email address\" aria-label=\"Email\">
                                    </div>
                                    <label>Password</label>
                                    <div class=\"mb-3\">
                                        <input type=\"password\" class=\"form-control\" placeholder=\"Enter password\" aria-label=\"Password\">
                                    </div>
                                    <div class=\"d-flex align-items-center mb-4\">
                                        <div class=\"form-check form-check-info text-left mb-0\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"flexCheckDefault\">
                                            <label class=\"font-weight-normal text-dark mb-0\" for=\"flexCheckDefault\">
                                                Remember for 14 days
                                            </label>
                                        </div>
                                        <a href=\"javascript:;\" class=\"text-xs font-weight-bold ms-auto\">Forgot password?</a>
                                    </div>
                                    <div class=\"text-center\">
                                        <button type=\"button\" class=\"btn btn-dark w-100 mt-4 mb-3\">Sign in</button>
                                        <button type=\"button\" class=\"btn btn-white btn-icon w-100 mb-3\">
                                            <span class=\"btn-inner--icon me-1\">
                                                <img class=\"w-5\" src=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/img/logos/google-logo.svg"), "html", null, true);
        yield "\" alt=\"google-logo\">
                                            </span>
                                            <span class=\"btn-inner--text\">Sign in with Google</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class=\"card-footer text-center pt-0 px-lg-2 px-1\">
                                <p class=\"mb-4 text-xs mx-auto\">
                                    Don't have an account?
                                    <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_signup");
        yield "\" class=\"text-dark font-weight-bold\">Sign up</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Right decorative image (desktop only) -->
                    <div class=\"col-md-6\">
                        <div class=\"position-absolute w-40 top-0 end-0 h-100 d-md-block d-none\">
                            <div class=\"oblique-image position-absolute fixed-top ms-auto h-100 z-index-0 bg-cover ms-n8\"
                                 style=\"background-image:url('";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/img/image-sign-in.jpg"), "html", null, true);
        yield "')\">
                                <div class=\"blur mt-12 p-4 text-center border border-white border-radius-md position-absolute fixed-bottom m-4\">
                                    <h2 class=\"mt-3 text-dark font-weight-bold\">Enter our global community of developers.</h2>
                                    <h6 class=\"text-dark text-sm mt-5\">Copyright © ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Corporate UI by Creative Tim.</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
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
        return "back/sign-in.html.twig";
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
        return array (  244 => 102,  238 => 99,  225 => 89,  212 => 79,  159 => 29,  155 => 28,  151 => 27,  147 => 26,  132 => 14,  124 => 8,  111 => 7,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/base.html.twig' %}

{% block title %}Sign In - Corporate UI{% endblock %}

{% block body_class %}bg-gray-100{% endblock %}

{% block body %}
<div class=\"container position-sticky z-index-sticky top-0\">
    <div class=\"row\">
        <div class=\"col-12\">
            <!-- Public top navbar (same style as original auth pages) -->
            <nav class=\"navbar navbar-expand-lg blur border-radius-sm top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4\">
                <div class=\"container-fluid px-1\">
                    <a class=\"navbar-brand font-weight-bolder ms-lg-0\" href=\"{{ path('app_back_dashboard') }}\">
                        Corporate UI
                    </a>
                    <button class=\"navbar-toggler shadow-none ms-2\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navigation\">
                        <span class=\"navbar-toggler-icon mt-2\">
                            <span class=\"navbar-toggler-bar bar1\"></span>
                            <span class=\"navbar-toggler-bar bar2\"></span>
                            <span class=\"navbar-toggler-bar bar3\"></span>
                        </span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navigation\">
                        <ul class=\"navbar-nav mx-auto ms-xl-auto\">
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_back_dashboard') }}\">Dashboard</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_back_profile') }}\">Profile</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_back_signup') }}\">Sign Up</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link text-dark font-weight-bold\" href=\"{{ path('app_back_signin') }}\">Sign In</a></li>
                        </ul>
                        <ul class=\"navbar-nav d-lg-block d-none\">
                            <li class=\"nav-item\">
                                <a href=\"https://www.creative-tim.com/product/corporate-ui-dashboard\" class=\"btn btn-sm mb-0 bg-gradient-dark\">Free download</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<main class=\"main-content mt-0\">
    <section>
        <div class=\"page-header min-vh-100\">
            <div class=\"container\">
                <div class=\"row\">

                    <!-- Sign In Form (centered on mobile, left on desktop) -->
                    <div class=\"col-xl-4 col-md-6 d-flex flex-column mx-auto\">
                        <div class=\"card card-plain mt-8\">
                            <div class=\"card-header pb-0 text-left bg-transparent\">
                                <h3 class=\"font-weight-black text-dark display-6\">Welcome back</h3>
                                <p class=\"mb-0\">Welcome back! Please enter your details.</p>
                            </div>
                            <div class=\"card-body\">
                                <form role=\"form\">
                                    <label>Email Address</label>
                                    <div class=\"mb-3\">
                                        <input type=\"email\" class=\"form-control\" placeholder=\"Enter your email address\" aria-label=\"Email\">
                                    </div>
                                    <label>Password</label>
                                    <div class=\"mb-3\">
                                        <input type=\"password\" class=\"form-control\" placeholder=\"Enter password\" aria-label=\"Password\">
                                    </div>
                                    <div class=\"d-flex align-items-center mb-4\">
                                        <div class=\"form-check form-check-info text-left mb-0\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"flexCheckDefault\">
                                            <label class=\"font-weight-normal text-dark mb-0\" for=\"flexCheckDefault\">
                                                Remember for 14 days
                                            </label>
                                        </div>
                                        <a href=\"javascript:;\" class=\"text-xs font-weight-bold ms-auto\">Forgot password?</a>
                                    </div>
                                    <div class=\"text-center\">
                                        <button type=\"button\" class=\"btn btn-dark w-100 mt-4 mb-3\">Sign in</button>
                                        <button type=\"button\" class=\"btn btn-white btn-icon w-100 mb-3\">
                                            <span class=\"btn-inner--icon me-1\">
                                                <img class=\"w-5\" src=\"{{ asset('backend/assets/img/logos/google-logo.svg') }}\" alt=\"google-logo\">
                                            </span>
                                            <span class=\"btn-inner--text\">Sign in with Google</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class=\"card-footer text-center pt-0 px-lg-2 px-1\">
                                <p class=\"mb-4 text-xs mx-auto\">
                                    Don't have an account?
                                    <a href=\"{{ path('app_back_signup') }}\" class=\"text-dark font-weight-bold\">Sign up</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Right decorative image (desktop only) -->
                    <div class=\"col-md-6\">
                        <div class=\"position-absolute w-40 top-0 end-0 h-100 d-md-block d-none\">
                            <div class=\"oblique-image position-absolute fixed-top ms-auto h-100 z-index-0 bg-cover ms-n8\"
                                 style=\"background-image:url('{{ asset('backend/assets/img/image-sign-in.jpg') }}')\">
                                <div class=\"blur mt-12 p-4 text-center border border-white border-radius-md position-absolute fixed-bottom m-4\">
                                    <h2 class=\"mt-3 text-dark font-weight-bold\">Enter our global community of developers.</h2>
                                    <h6 class=\"text-dark text-sm mt-5\">Copyright © {{ \"now\"|date(\"Y\") }} Corporate UI by Creative Tim.</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
{% endblock %}", "back/sign-in.html.twig", "C:\\xampp\\htdocs\\Artiste\\templates\\back\\sign-in.html.twig");
    }
}
