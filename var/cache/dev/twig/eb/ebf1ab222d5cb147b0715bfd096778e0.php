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

/* front/starter-page.html.twig */
class __TwigTemplate_e54055ddbbd85d0618e9b0cd9475a68e extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/starter-page.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/starter-page.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Starter Page - Kelly Bootstrap Template</title>
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">

  <!-- Favicons -->
  <link href=\"assets/img/favicon.png\" rel=\"icon\">
  <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"assets/css/main.css\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Kelly
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class=\"starter-page-page\">

  <header id=\"header\" class=\"header d-flex align-items-center light-background sticky-top\">
    <div class=\"container-fluid position-relative d-flex align-items-center justify-content-between\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto me-xl-0\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
        <h1 class=\"sitename\">Kelly</h1>
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"index.html\">Home</a></li>
          <li><a href=\"about.html\">About</a></li>
          <li><a href=\"resume.html\">Resume</a></li>
          <li><a href=\"services.html\">Services</a></li>
          <li><a href=\"portfolio.html\">Portfolio</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Dropdown</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"#\">Dropdown 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Deep Dropdown</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Dropdown 1</a></li>
                  <li><a href=\"#\">Deep Dropdown 2</a></li>
                  <li><a href=\"#\">Deep Dropdown 3</a></li>
                  <li><a href=\"#\">Deep Dropdown 4</a></li>
                  <li><a href=\"#\">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Dropdown 2</a></li>
              <li><a href=\"#\">Dropdown 3</a></li>
              <li><a href=\"#\">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href=\"contact.html\">Contact</a></li>
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

  <main class=\"main\">

    <!-- Starter Section Section -->
    <section id=\"starter-section\" class=\"starter-section section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Starter Section</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\" data-aos=\"fade-up\">
        <p>Use this page as a starter for your own custom pages.</p>
      </div>

    </section><!-- /Starter Section Section -->

  </main>

  <footer id=\"footer\" class=\"footer light-background\">

    <div class=\"container\">
      <div class=\"copyright text-center \">
        <p>© <span>Copyright</span> <strong class=\"px-1 sitename\">Kelly</strong> <span>All Rights Reserved<br></span></p>
      </div>
      <div class=\"social-links d-flex justify-content-center\">
        <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
        <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
        <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
        <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Preloader -->
  <div id=\"preloader\"></div>

  <!-- Vendor JS Files -->
  <script src=\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"assets/vendor/php-email-form/validate.js\"></script>
  <script src=\"assets/vendor/aos/aos.js\"></script>
  <script src=\"assets/vendor/waypoints/noframework.waypoints.js\"></script>
  <script src=\"assets/vendor/purecounter/purecounter_vanilla.js\"></script>
  <script src=\"assets/vendor/swiper/swiper-bundle.min.js\"></script>
  <script src=\"assets/vendor/glightbox/js/glightbox.min.js\"></script>
  <script src=\"assets/vendor/imagesloaded/imagesloaded.pkgd.min.js\"></script>
  <script src=\"assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>

  <!-- Main JS File -->
  <script src=\"assets/js/main.js\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/starter-page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Starter Page - Kelly Bootstrap Template</title>
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">

  <!-- Favicons -->
  <link href=\"assets/img/favicon.png\" rel=\"icon\">
  <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"assets/css/main.css\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Kelly
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class=\"starter-page-page\">

  <header id=\"header\" class=\"header d-flex align-items-center light-background sticky-top\">
    <div class=\"container-fluid position-relative d-flex align-items-center justify-content-between\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto me-xl-0\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
        <h1 class=\"sitename\">Kelly</h1>
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"index.html\">Home</a></li>
          <li><a href=\"about.html\">About</a></li>
          <li><a href=\"resume.html\">Resume</a></li>
          <li><a href=\"services.html\">Services</a></li>
          <li><a href=\"portfolio.html\">Portfolio</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Dropdown</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"#\">Dropdown 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Deep Dropdown</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Dropdown 1</a></li>
                  <li><a href=\"#\">Deep Dropdown 2</a></li>
                  <li><a href=\"#\">Deep Dropdown 3</a></li>
                  <li><a href=\"#\">Deep Dropdown 4</a></li>
                  <li><a href=\"#\">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Dropdown 2</a></li>
              <li><a href=\"#\">Dropdown 3</a></li>
              <li><a href=\"#\">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href=\"contact.html\">Contact</a></li>
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

  <main class=\"main\">

    <!-- Starter Section Section -->
    <section id=\"starter-section\" class=\"starter-section section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Starter Section</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\" data-aos=\"fade-up\">
        <p>Use this page as a starter for your own custom pages.</p>
      </div>

    </section><!-- /Starter Section Section -->

  </main>

  <footer id=\"footer\" class=\"footer light-background\">

    <div class=\"container\">
      <div class=\"copyright text-center \">
        <p>© <span>Copyright</span> <strong class=\"px-1 sitename\">Kelly</strong> <span>All Rights Reserved<br></span></p>
      </div>
      <div class=\"social-links d-flex justify-content-center\">
        <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
        <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
        <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
        <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Preloader -->
  <div id=\"preloader\"></div>

  <!-- Vendor JS Files -->
  <script src=\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"assets/vendor/php-email-form/validate.js\"></script>
  <script src=\"assets/vendor/aos/aos.js\"></script>
  <script src=\"assets/vendor/waypoints/noframework.waypoints.js\"></script>
  <script src=\"assets/vendor/purecounter/purecounter_vanilla.js\"></script>
  <script src=\"assets/vendor/swiper/swiper-bundle.min.js\"></script>
  <script src=\"assets/vendor/glightbox/js/glightbox.min.js\"></script>
  <script src=\"assets/vendor/imagesloaded/imagesloaded.pkgd.min.js\"></script>
  <script src=\"assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>

  <!-- Main JS File -->
  <script src=\"assets/js/main.js\"></script>

</body>

</html>", "front/starter-page.html.twig", "C:\\xampp\\htdocs\\Artiste\\templates\\front\\starter-page.html.twig");
    }
}
