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

/* back/profile.html.twig */
class __TwigTemplate_c2515bf07a26ac3fc7e50dfff0d5fe80 extends Template
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
        // line 2
        return "back/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/profile.html.twig"));

        $this->parent = $this->load("back/base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Profile - Corporate UI";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <div class=\"container\">
        <div class=\"card card-body py-2 bg-transparent shadow-none\">
            <div class=\"row\">
                <div class=\"col-auto\">
                    <div class=\"avatar avatar-2xl rounded-circle position-relative mt-n7 border border-gray-100 border-4\">
                        <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team-2.jpg"), "html", null, true);
        yield "\" alt=\"profile_image\" class=\"w-100\">
                    </div>
                </div>
                <div class=\"col-auto my-auto\">
                    <div class=\"h-100\">
                        <h3 class=\"mb-0 font-weight-bold\">Noah Mclaren</h3>
                        <p class=\"mb-0\">noah_mclaren@mail.com</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 text-sm-end\">
                    <a href=\"javascript:;\" class=\"btn btn-sm btn-white\">Cancel</a>
                    <a href=\"javascript:;\" class=\"btn btn-sm btn-dark\">Save</a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container my-3 py-3\">
        <div class=\"row\">
            <!-- Notifications settings -->
            <div class=\"col-12 col-xl-4 mb-4\">
                <div class=\"card border shadow-xs h-100\">
                    <div class=\"card-header pb-0 p-3\">
                        <h6 class=\"mb-0 font-weight-semibold text-lg\">Notifications settings</h6>
                        <p class=\"text-sm mb-1\">Here you can set preferences.</p>
                    </div>
                    <div class=\"card-body p-3\">
                        <!-- Full notifications block here -->
                    </div>
                </div>
            </div>

            <!-- Profile information -->
            <div class=\"col-12 col-xl-4 mb-4\">
                <div class=\"card border shadow-xs h-100\">
                    <div class=\"card-header pb-0 p-3\">
                        <div class=\"row\">
                            <div class=\"col-md-8 col-9\">
                                <h6 class=\"mb-0 font-weight-semibold text-lg\">Profile information</h6>
                                <p class=\"text-sm mb-1\">Edit the information about you.</p>
                            </div>
                            <div class=\"col-md-4 col-3 text-end\">
                                <button type=\"button\" class=\"btn btn-white btn-icon px-2 py-2\">Edit</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body p-3\">
                        <!-- Full profile info block -->
                    </div>
                </div>
            </div>

            <!-- Internal chat -->
            <div class=\"col-12 col-xl-4 mb-4\">
                <div class=\"card border shadow-xs h-100\">
                    <div class=\"card-header pb-0 p-3\">
                        <div class=\"row mb-sm-0 mb-2\">
                            <div class=\"col-md-8 col-9\">
                                <h6 class=\"mb-0 font-weight-semibold text-lg\">Internal chat</h6>
                                <p class=\"text-sm mb-0\">/marketing channel</p>
                            </div>
                            <div class=\"col-md-4 col-3 text-end\">
                                <button type=\"button\" class=\"btn btn-white btn-icon px-2 py-2\">More</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body p-3 pt-0\">
                        <!-- Full chat list -->
                    </div>
                </div>
            </div>

            <!-- Last articles -->
            <div class=\"col-12\">
                <div class=\"card shadow-xs border mb-4 pb-3\">
                    <div class=\"card-header pb-0 p-3\">
                        <h6 class=\"mb-0 font-weight-semibold text-lg\">Last articles</h6>
                        <p class=\"text-sm mb-1\">Here you will find the latest articles.</p>
                    </div>
                    <div class=\"card-body p-3\">
                        <!-- Full articles grid -->
                    </div>
                </div>
            </div>
        </div>
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
        return "back/profile.html.twig";
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
        return array (  107 => 12,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/backend/profile.html.twig #}
{% extends 'back/base.html.twig' %}

{% block title %}Profile - Corporate UI{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"card card-body py-2 bg-transparent shadow-none\">
            <div class=\"row\">
                <div class=\"col-auto\">
                    <div class=\"avatar avatar-2xl rounded-circle position-relative mt-n7 border border-gray-100 border-4\">
                        <img src=\"{{ asset('assets/img/team-2.jpg') }}\" alt=\"profile_image\" class=\"w-100\">
                    </div>
                </div>
                <div class=\"col-auto my-auto\">
                    <div class=\"h-100\">
                        <h3 class=\"mb-0 font-weight-bold\">Noah Mclaren</h3>
                        <p class=\"mb-0\">noah_mclaren@mail.com</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 text-sm-end\">
                    <a href=\"javascript:;\" class=\"btn btn-sm btn-white\">Cancel</a>
                    <a href=\"javascript:;\" class=\"btn btn-sm btn-dark\">Save</a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container my-3 py-3\">
        <div class=\"row\">
            <!-- Notifications settings -->
            <div class=\"col-12 col-xl-4 mb-4\">
                <div class=\"card border shadow-xs h-100\">
                    <div class=\"card-header pb-0 p-3\">
                        <h6 class=\"mb-0 font-weight-semibold text-lg\">Notifications settings</h6>
                        <p class=\"text-sm mb-1\">Here you can set preferences.</p>
                    </div>
                    <div class=\"card-body p-3\">
                        <!-- Full notifications block here -->
                    </div>
                </div>
            </div>

            <!-- Profile information -->
            <div class=\"col-12 col-xl-4 mb-4\">
                <div class=\"card border shadow-xs h-100\">
                    <div class=\"card-header pb-0 p-3\">
                        <div class=\"row\">
                            <div class=\"col-md-8 col-9\">
                                <h6 class=\"mb-0 font-weight-semibold text-lg\">Profile information</h6>
                                <p class=\"text-sm mb-1\">Edit the information about you.</p>
                            </div>
                            <div class=\"col-md-4 col-3 text-end\">
                                <button type=\"button\" class=\"btn btn-white btn-icon px-2 py-2\">Edit</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body p-3\">
                        <!-- Full profile info block -->
                    </div>
                </div>
            </div>

            <!-- Internal chat -->
            <div class=\"col-12 col-xl-4 mb-4\">
                <div class=\"card border shadow-xs h-100\">
                    <div class=\"card-header pb-0 p-3\">
                        <div class=\"row mb-sm-0 mb-2\">
                            <div class=\"col-md-8 col-9\">
                                <h6 class=\"mb-0 font-weight-semibold text-lg\">Internal chat</h6>
                                <p class=\"text-sm mb-0\">/marketing channel</p>
                            </div>
                            <div class=\"col-md-4 col-3 text-end\">
                                <button type=\"button\" class=\"btn btn-white btn-icon px-2 py-2\">More</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body p-3 pt-0\">
                        <!-- Full chat list -->
                    </div>
                </div>
            </div>

            <!-- Last articles -->
            <div class=\"col-12\">
                <div class=\"card shadow-xs border mb-4 pb-3\">
                    <div class=\"card-header pb-0 p-3\">
                        <h6 class=\"mb-0 font-weight-semibold text-lg\">Last articles</h6>
                        <p class=\"text-sm mb-1\">Here you will find the latest articles.</p>
                    </div>
                    <div class=\"card-body p-3\">
                        <!-- Full articles grid -->
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "back/profile.html.twig", "C:\\xampp\\htdocs\\Artiste\\templates\\back\\profile.html.twig");
    }
}
