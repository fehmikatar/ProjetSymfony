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

/* front/portfolio.html.twig */
class __TwigTemplate_28c0da425e3359701c1de5abb01c6cdd extends Template
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
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/portfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/portfolio.html.twig"));

        $this->parent = $this->load("front/base.html.twig", 1);
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

        yield "Portfolio - Artty";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        yield "portfolio-page";
        
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
        yield "
<section id=\"portfolio\" class=\"portfolio section\">

    <!-- Section Title -->
    <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Portfolio</h2>
        <p>Discover our creative work and projects</p>
    </div>
    <!-- End Section Title -->

    <div class=\"container\">

        <div class=\"isotope-layout\" data-default-filter=\"*\" data-layout=\"masonry\" data-sort=\"original-order\">

            <ul class=\"portfolio-filters isotope-filters\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <li data-filter=\"*\" class=\"filter-active\">All</li>
                <li data-filter=\".filter-app\">App</li>
                <li data-filter=\".filter-product\">Card</li>
                <li data-filter=\".filter-branding\">Web</li>
            </ul>

            <div class=\"row gy-4 isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">

                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 31
            yield "                    ";
            $context["imagePath"] = (("Frontend/assets/img/masonry-portfolio/masonry-portfolio-" . $context["i"]) . ".jpg");
            // line 32
            yield "                    <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item 
                        ";
            // line 33
            if (CoreExtension::inFilter($context["i"], [1, 4, 7])) {
                yield "filter-app
                        ";
            } elseif (CoreExtension::inFilter(            // line 34
$context["i"], [2, 5, 8])) {
                yield "filter-product
                        ";
            } else {
                // line 35
                yield "filter-branding";
            }
            yield "\">
                        
                        <img src=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 37, $this->source); })())), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\">

                        <div class=\"portfolio-info\">
                            <h4>Item ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</h4>
                            <p>Lorem ipsum dolor sit</p>
                            <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 42, $this->source); })())), "html", null, true);
            yield "\"
                               title=\"Preview\"
                               data-gallery=\"portfolio-gallery\"
                               class=\"glightbox preview-link\">
                                <i class=\"bi bi-zoom-in\"></i>
                            </a>
                            <a href=\"";
            // line 48
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_portfolio_details");
            yield "\"
                               title=\"More Details\"
                               class=\"details-link\">
                                <i class=\"bi bi-link-45deg\"></i>
                            </a>
                        </div>

                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "
            </div>
        </div>
    </div>

</section>

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
        return "front/portfolio.html.twig";
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
        return array (  209 => 57,  194 => 48,  185 => 42,  180 => 40,  174 => 37,  168 => 35,  163 => 34,  159 => 33,  156 => 32,  153 => 31,  149 => 30,  124 => 7,  111 => 6,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Portfolio - Artty{% endblock %}
{% block body_class %}portfolio-page{% endblock %}

{% block body %}

<section id=\"portfolio\" class=\"portfolio section\">

    <!-- Section Title -->
    <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Portfolio</h2>
        <p>Discover our creative work and projects</p>
    </div>
    <!-- End Section Title -->

    <div class=\"container\">

        <div class=\"isotope-layout\" data-default-filter=\"*\" data-layout=\"masonry\" data-sort=\"original-order\">

            <ul class=\"portfolio-filters isotope-filters\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <li data-filter=\"*\" class=\"filter-active\">All</li>
                <li data-filter=\".filter-app\">App</li>
                <li data-filter=\".filter-product\">Card</li>
                <li data-filter=\".filter-branding\">Web</li>
            </ul>

            <div class=\"row gy-4 isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">

                {% for i in 1..9 %}
                    {% set imagePath = 'Frontend/assets/img/masonry-portfolio/masonry-portfolio-' ~ i ~ '.jpg' %}
                    <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item 
                        {% if i in [1,4,7] %}filter-app
                        {% elseif i in [2,5,8] %}filter-product
                        {% else %}filter-branding{% endif %}\">
                        
                        <img src=\"{{ asset(imagePath) }}\" class=\"img-fluid\" alt=\"\">

                        <div class=\"portfolio-info\">
                            <h4>Item {{ i }}</h4>
                            <p>Lorem ipsum dolor sit</p>
                            <a href=\"{{ asset(imagePath) }}\"
                               title=\"Preview\"
                               data-gallery=\"portfolio-gallery\"
                               class=\"glightbox preview-link\">
                                <i class=\"bi bi-zoom-in\"></i>
                            </a>
                            <a href=\"{{ path('app_front_portfolio_details') }}\"
                               title=\"More Details\"
                               class=\"details-link\">
                                <i class=\"bi bi-link-45deg\"></i>
                            </a>
                        </div>

                    </div>
                {% endfor %}

            </div>
        </div>
    </div>

</section>

{% endblock %}
", "front/portfolio.html.twig", "C:\\xampp\\htdocs\\Artiste\\templates\\front\\portfolio.html.twig");
    }
}
