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

/* front/about.html.twig */
class __TwigTemplate_4099e0c941572e67131dd3b709084754 extends Template
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
            'meta_description' => [$this, 'block_meta_description'],
            'meta_keywords' => [$this, 'block_meta_keywords'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/about.html.twig"));

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

        yield "About - Artty";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        yield "Learn more about me, my skills, experience, and what clients say";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        yield "about, ui/ux designer, web developer, graphic design, freelance, skills, testimonials";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        yield "about-page";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "  <!-- About Section -->
  <section id=\"about\" class=\"about section\">

    <!-- Section Title -->
    <div class=\"container section-title\" data-aos=\"fade-up\">
      <h2>About</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row gy-4 justify-content-center\">
        <div class=\"col-lg-4\">
          <img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/img/profile-img.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Profile picture\">
        </div>
        <div class=\"col-lg-8 content\">
          <h2>UI/UX Designer &amp; Web Developer.</h2>
          <p class=\"fst-italic py-3\">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <div class=\"row\">
            <div class=\"col-lg-6\">
              <ul>
                <li><i class=\"bi bi-chevron-right\"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li>
                <li><i class=\"bi bi-chevron-right\"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                <li><i class=\"bi bi-chevron-right\"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li>
                <li><i class=\"bi bi-chevron-right\"></i> <strong>City:</strong> <span>New York, USA</span></li>
              </ul>
            </div>
            <div class=\"col-lg-6\">
              <ul>
                <li><i class=\"bi bi-chevron-right\"></i> <strong>Age:</strong> <span>30</span></li>
                <li><i class=\"bi bi-chevron-right\"></i> <strong>Degree:</strong> <span>Master</span></li>
                <li><i class=\"bi bi-chevron-right\"></i> <strong>Email:</strong> <span>email@example.com</span></li>
                <li><i class=\"bi bi-chevron-right\"></i> <strong>Freelance:</strong> <span>Available</span></li>
              </ul>
            </div>
          </div>
          <p class=\"py-3\">
            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque.
          </p>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

  <!-- Skills Section -->
  <section id=\"skills\" class=\"skills section\">

    <!-- Section Title -->
    <div class=\"container section-title\" data-aos=\"fade-up\">
      <h2>Skills</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row skills-content skills-animation\">

        <div class=\"col-lg-6\">

          <div class=\"progress\">
            <span class=\"skill\"><span>HTML</span> <i class=\"val\">100%</i></span>
            <div class=\"progress-bar-wrap\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
          </div>

          <div class=\"progress\">
            <span class=\"skill\"><span>CSS</span> <i class=\"val\">90%</i></span>
            <div class=\"progress-bar-wrap\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
          </div>

          <div class=\"progress\">
            <span class=\"skill\"><span>JavaScript</span> <i class=\"val\">75%</i></span>
            <div class=\"progress-bar-wrap\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
          </div>

        </div>

        <div class=\"col-lg-6\">

          <div class=\"progress\">
            <span class=\"skill\"><span>PHP</span> <i class=\"val\">80%</i></span>
            <div class=\"progress-bar-wrap\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
          </div>

          <div class=\"progress\">
            <span class=\"skill\"><span>WordPress/CMS</span> <i class=\"val\">90%</i></span>
            <div class=\"progress-bar-wrap\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
          </div>

          <div class=\"progress\">
            <span class=\"skill\"><span>Photoshop</span> <i class=\"val\">55%</i></span>
            <div class=\"progress-bar-wrap\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"55\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
          </div>

        </div>

      </div>

    </div>

  </section><!-- /Skills Section -->

  <!-- Stats Section -->
  <section id=\"stats\" class=\"stats section\">

    <!-- Section Title -->
    <div class=\"container section-title\" data-aos=\"fade-up\">
      <h2>Facts</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row gy-4\">

        <div class=\"col-lg-3 col-md-6\">
          <div class=\"stats-item text-center w-100 h-100\">
            <span data-purecounter-start=\"0\" data-purecounter-end=\"232\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
            <p>Clients</p>
          </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
          <div class=\"stats-item text-center w-100 h-100\">
            <span data-purecounter-start=\"0\" data-purecounter-end=\"521\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
            <p>Projects</p>
          </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
          <div class=\"stats-item text-center w-100 h-100\">
            <span data-purecounter-start=\"0\" data-purecounter-end=\"1453\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
            <p>Hours Of Support</p>
          </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
          <div class=\"stats-item text-center w-100 h-100\">
            <span data-purecounter-start=\"0\" data-purecounter-end=\"32\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
            <p>Workers</p>
          </div>
        </div>

      </div>

    </div>

  </section><!-- /Stats Section -->

  <!-- Testimonials Section -->
  <section id=\"testimonials\" class=\"testimonials section\">

    <!-- Section Title -->
    <div class=\"container section-title\" data-aos=\"fade-up\">
      <h2>Testimonials</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"swiper init-swiper\">
        <script type=\"application/json\" class=\"swiper-config\">
          {
            \"loop\": true,
            \"speed\": 600,
            \"autoplay\": { \"delay\": 5000 },
            \"slidesPerView\": \"auto\",
            \"pagination\": {
              \"el\": \".swiper-pagination\",
              \"type\": \"bullets\",
              \"clickable\": true
            }
          }
        </script>
        <div class=\"swiper-wrapper\">

          <div class=\"swiper-slide\">
            <div class=\"testimonial-item\">
              <img src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/img/testimonials/testimonials-1.jpg"), "html", null, true);
        yield "\" class=\"testimonial-img\" alt=\"\">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <div class=\"stars\">
                <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
              </div>
              <p>
                <i class=\"bi bi-quote quote-icon-left\"></i>
                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                <i class=\"bi bi-quote quote-icon-right\"></i>
              </p>
            </div>
          </div>

          <div class=\"swiper-slide\">
            <div class=\"testimonial-item\">
              <img src=\"";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/img/testimonials/testimonials-2.jpg"), "html", null, true);
        yield "\" class=\"testimonial-img\" alt=\"\">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <div class=\"stars\">
                <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
              </div>
              <p>
                <i class=\"bi bi-quote quote-icon-left\"></i>
                <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                <i class=\"bi bi-quote quote-icon-right\"></i>
              </p>
            </div>
          </div>

          <div class=\"swiper-slide\">
            <div class=\"testimonial-item\">
              <img src=\"";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/img/testimonials/testimonials-3.jpg"), "html", null, true);
        yield "\" class=\"testimonial-img\" alt=\"\">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <div class=\"stars\">
                <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
              </div>
              <p>
                <i class=\"bi bi-quote quote-icon-left\"></i>
                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                <i class=\"bi bi-quote quote-icon-right\"></i>
              </p>
            </div>
          </div>

          <div class=\"swiper-slide\">
            <div class=\"testimonial-item\">
              <img src=\"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/img/testimonials/testimonials-4.jpg"), "html", null, true);
        yield "\" class=\"testimonial-img\" alt=\"\">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <div class=\"stars\">
                <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
              </div>
              <p>
                <i class=\"bi bi-quote quote-icon-left\"></i>
                <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                <i class=\"bi bi-quote quote-icon-right\"></i>
              </p>
            </div>
          </div>

          <div class=\"swiper-slide\">
            <div class=\"testimonial-item\">
              <img src=\"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/assets/img/testimonials/testimonials-5.jpg"), "html", null, true);
        yield "\" class=\"testimonial-img\" alt=\"\">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <div class=\"stars\">
                <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
              </div>
              <p>
                <i class=\"bi bi-quote quote-icon-left\"></i>
                <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                <i class=\"bi bi-quote quote-icon-right\"></i>
              </p>
            </div>
          </div>

        </div>
        <div class=\"swiper-pagination\"></div>
      </div>

    </div>

  </section><!-- /Testimonials Section -->
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
        return "front/about.html.twig";
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
        return array (  448 => 270,  429 => 254,  410 => 238,  391 => 222,  372 => 206,  187 => 24,  172 => 11,  159 => 10,  136 => 8,  113 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}About - Artty{% endblock %}

{% block meta_description %}Learn more about me, my skills, experience, and what clients say{% endblock %}
{% block meta_keywords %}about, ui/ux designer, web developer, graphic design, freelance, skills, testimonials{% endblock %}

{% block body_class %}about-page{% endblock %}

{% block body %}
  <!-- About Section -->
  <section id=\"about\" class=\"about section\">

    <!-- Section Title -->
    <div class=\"container section-title\" data-aos=\"fade-up\">
      <h2>About</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row gy-4 justify-content-center\">
        <div class=\"col-lg-4\">
          <img src=\"{{ asset('Frontend/assets/img/profile-img.jpg') }}\" class=\"img-fluid\" alt=\"Profile picture\">
        </div>
        <div class=\"col-lg-8 content\">
          <h2>UI/UX Designer &amp; Web Developer.</h2>
          <p class=\"fst-italic py-3\">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <div class=\"row\">
            <div class=\"col-lg-6\">
              <ul>
                <li><i class=\"bi bi-chevron-right\"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li>
                <li><i class=\"bi bi-chevron-right\"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                <li><i class=\"bi bi-chevron-right\"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li>
                <li><i class=\"bi bi-chevron-right\"></i> <strong>City:</strong> <span>New York, USA</span></li>
              </ul>
            </div>
            <div class=\"col-lg-6\">
              <ul>
                <li><i class=\"bi bi-chevron-right\"></i> <strong>Age:</strong> <span>30</span></li>
                <li><i class=\"bi bi-chevron-right\"></i> <strong>Degree:</strong> <span>Master</span></li>
                <li><i class=\"bi bi-chevron-right\"></i> <strong>Email:</strong> <span>email@example.com</span></li>
                <li><i class=\"bi bi-chevron-right\"></i> <strong>Freelance:</strong> <span>Available</span></li>
              </ul>
            </div>
          </div>
          <p class=\"py-3\">
            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque.
          </p>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

  <!-- Skills Section -->
  <section id=\"skills\" class=\"skills section\">

    <!-- Section Title -->
    <div class=\"container section-title\" data-aos=\"fade-up\">
      <h2>Skills</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row skills-content skills-animation\">

        <div class=\"col-lg-6\">

          <div class=\"progress\">
            <span class=\"skill\"><span>HTML</span> <i class=\"val\">100%</i></span>
            <div class=\"progress-bar-wrap\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
          </div>

          <div class=\"progress\">
            <span class=\"skill\"><span>CSS</span> <i class=\"val\">90%</i></span>
            <div class=\"progress-bar-wrap\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
          </div>

          <div class=\"progress\">
            <span class=\"skill\"><span>JavaScript</span> <i class=\"val\">75%</i></span>
            <div class=\"progress-bar-wrap\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
          </div>

        </div>

        <div class=\"col-lg-6\">

          <div class=\"progress\">
            <span class=\"skill\"><span>PHP</span> <i class=\"val\">80%</i></span>
            <div class=\"progress-bar-wrap\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
          </div>

          <div class=\"progress\">
            <span class=\"skill\"><span>WordPress/CMS</span> <i class=\"val\">90%</i></span>
            <div class=\"progress-bar-wrap\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
          </div>

          <div class=\"progress\">
            <span class=\"skill\"><span>Photoshop</span> <i class=\"val\">55%</i></span>
            <div class=\"progress-bar-wrap\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"55\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
          </div>

        </div>

      </div>

    </div>

  </section><!-- /Skills Section -->

  <!-- Stats Section -->
  <section id=\"stats\" class=\"stats section\">

    <!-- Section Title -->
    <div class=\"container section-title\" data-aos=\"fade-up\">
      <h2>Facts</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row gy-4\">

        <div class=\"col-lg-3 col-md-6\">
          <div class=\"stats-item text-center w-100 h-100\">
            <span data-purecounter-start=\"0\" data-purecounter-end=\"232\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
            <p>Clients</p>
          </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
          <div class=\"stats-item text-center w-100 h-100\">
            <span data-purecounter-start=\"0\" data-purecounter-end=\"521\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
            <p>Projects</p>
          </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
          <div class=\"stats-item text-center w-100 h-100\">
            <span data-purecounter-start=\"0\" data-purecounter-end=\"1453\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
            <p>Hours Of Support</p>
          </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
          <div class=\"stats-item text-center w-100 h-100\">
            <span data-purecounter-start=\"0\" data-purecounter-end=\"32\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
            <p>Workers</p>
          </div>
        </div>

      </div>

    </div>

  </section><!-- /Stats Section -->

  <!-- Testimonials Section -->
  <section id=\"testimonials\" class=\"testimonials section\">

    <!-- Section Title -->
    <div class=\"container section-title\" data-aos=\"fade-up\">
      <h2>Testimonials</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"swiper init-swiper\">
        <script type=\"application/json\" class=\"swiper-config\">
          {
            \"loop\": true,
            \"speed\": 600,
            \"autoplay\": { \"delay\": 5000 },
            \"slidesPerView\": \"auto\",
            \"pagination\": {
              \"el\": \".swiper-pagination\",
              \"type\": \"bullets\",
              \"clickable\": true
            }
          }
        </script>
        <div class=\"swiper-wrapper\">

          <div class=\"swiper-slide\">
            <div class=\"testimonial-item\">
              <img src=\"{{ asset('Frontend/assets/img/testimonials/testimonials-1.jpg') }}\" class=\"testimonial-img\" alt=\"\">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <div class=\"stars\">
                <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
              </div>
              <p>
                <i class=\"bi bi-quote quote-icon-left\"></i>
                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                <i class=\"bi bi-quote quote-icon-right\"></i>
              </p>
            </div>
          </div>

          <div class=\"swiper-slide\">
            <div class=\"testimonial-item\">
              <img src=\"{{ asset('Frontend/assets/img/testimonials/testimonials-2.jpg') }}\" class=\"testimonial-img\" alt=\"\">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <div class=\"stars\">
                <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
              </div>
              <p>
                <i class=\"bi bi-quote quote-icon-left\"></i>
                <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                <i class=\"bi bi-quote quote-icon-right\"></i>
              </p>
            </div>
          </div>

          <div class=\"swiper-slide\">
            <div class=\"testimonial-item\">
              <img src=\"{{ asset('Frontend/assets/img/testimonials/testimonials-3.jpg') }}\" class=\"testimonial-img\" alt=\"\">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <div class=\"stars\">
                <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
              </div>
              <p>
                <i class=\"bi bi-quote quote-icon-left\"></i>
                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                <i class=\"bi bi-quote quote-icon-right\"></i>
              </p>
            </div>
          </div>

          <div class=\"swiper-slide\">
            <div class=\"testimonial-item\">
              <img src=\"{{ asset('Frontend/assets/img/testimonials/testimonials-4.jpg') }}\" class=\"testimonial-img\" alt=\"\">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <div class=\"stars\">
                <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
              </div>
              <p>
                <i class=\"bi bi-quote quote-icon-left\"></i>
                <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                <i class=\"bi bi-quote quote-icon-right\"></i>
              </p>
            </div>
          </div>

          <div class=\"swiper-slide\">
            <div class=\"testimonial-item\">
              <img src=\"{{ asset('Frontend/assets/img/testimonials/testimonials-5.jpg') }}\" class=\"testimonial-img\" alt=\"\">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <div class=\"stars\">
                <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
              </div>
              <p>
                <i class=\"bi bi-quote quote-icon-left\"></i>
                <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                <i class=\"bi bi-quote quote-icon-right\"></i>
              </p>
            </div>
          </div>

        </div>
        <div class=\"swiper-pagination\"></div>
      </div>

    </div>

  </section><!-- /Testimonials Section -->
{% endblock %}", "front/about.html.twig", "C:\\xampp\\htdocs\\Artiste\\templates\\front\\about.html.twig");
    }
}
