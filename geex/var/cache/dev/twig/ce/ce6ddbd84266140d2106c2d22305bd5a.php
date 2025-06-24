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

/* pages/signup.html.twig */
class __TwigTemplate_4d850f4a034ce014161949f1f6c05873 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/signup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/signup.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\" dir=\"ltr\">

<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t<title>SignUp - Geex Dashboard</title>

\t<link href=\"https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">

\t<!-- inject:css-->
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/bootstrap/bootstrap.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.min.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
\t<!-- endinject -->
\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.svg"), "html", null, true);
        yield "\">
\t<!-- Fonts -->
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css\">


    <script>
\t\t// Render localStorage JS:
\t\tif (localStorage.theme) document.documentElement.setAttribute(\"data-theme\", localStorage.theme);
\t\tif (localStorage.layout) document.documentElement.setAttribute(\"data-nav\", localStorage.navbar);
\t\tif (localStorage.layout) document.documentElement.setAttribute(\"dir\", localStorage.layout);
    </script>\t
</head>

<body class=\"geex-dashboard authentication-page\">
\t<main class=\"geex-content\">
\t\t<div class=\"geex-content__authentication\">
\t\t\t<div class=\"geex-content__authentication__content\">
\t\t\t\t<div class=\"geex-content__authentication__content__wrapper\">
\t\t\t\t\t<div class=\"geex-content__authentication__content__logo\">
\t\t\t\t\t\t<a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        yield "\">
\t\t\t\t\t\t\t<img class=\"logo-lite\" src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-dark.png"), "html", null, true);
        yield "\" alt=\"logo\">
\t\t\t\t\t\t\t<img class=\"logo-dark\" src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-lite.png"), "html", null, true);
        yield "\" alt=\"logo\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), 'form_start', ["attr" => ["class" => "geex-content__authentication__form"], "method" => "POST"]);
        yield "
\t\t\t\t\t\t<h2 class=\"geex-content__authentication__title\">Create Your Account 👋</h2>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
\t\t\t\t\t\t\t";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "firstName", [], "any", false, false, false, 45), 'label');
        yield "
\t\t\t\t\t\t\t";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "firstName", [], "any", false, false, false, 46), 'widget', ["attr" => ["placeholder" => "Enter Your First Name"]]);
        yield "
\t\t\t\t\t\t\t<i class=\"uil-user\"></i>
\t\t\t\t\t\t\t";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "firstName", [], "any", false, false, false, 48), 'errors');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
\t\t\t\t\t\t\t";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "lastName", [], "any", false, false, false, 52), 'label');
        yield "
\t\t\t\t\t\t\t";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "lastName", [], "any", false, false, false, 53), 'widget', ["attr" => ["placeholder" => "Enter Your Last Name"]]);
        yield "
\t\t\t\t\t\t\t<i class=\"uil-user\"></i>
\t\t\t\t\t\t\t";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "lastName", [], "any", false, false, false, 55), 'errors');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
\t\t\t\t\t\t\t";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "mail", [], "any", false, false, false, 59), 'label');
        yield "
\t\t\t\t\t\t\t";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "mail", [], "any", false, false, false, 60), 'widget', ["attr" => ["placeholder" => "Enter Your Email"]]);
        yield "
\t\t\t\t\t\t\t<i class=\"uil-envelope\"></i>
\t\t\t\t\t\t\t";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "mail", [], "any", false, false, false, 62), 'errors');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
\t\t\t\t\t\t\t";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "username", [], "any", false, false, false, 66), 'label');
        yield "
\t\t\t\t\t\t\t";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "username", [], "any", false, false, false, 67), 'widget', ["attr" => ["placeholder" => "Choose a Username"]]);
        yield "
\t\t\t\t\t\t\t<i class=\"uil-at\"></i>
\t\t\t\t\t\t\t";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "username", [], "any", false, false, false, 69), 'errors');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
\t\t\t\t\t\t\t";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "plainPassword", [], "any", false, false, false, 73), "first", [], "any", false, false, false, 73), 'label');
        yield "
\t\t\t\t\t\t\t";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 74, $this->source); })()), "plainPassword", [], "any", false, false, false, 74), "first", [], "any", false, false, false, 74), 'widget', ["attr" => ["placeholder" => "Password"]]);
        yield "
\t\t\t\t\t\t\t<i class=\"uil-eye toggle-password-type\"></i>
\t\t\t\t\t\t\t";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "plainPassword", [], "any", false, false, false, 76), "first", [], "any", false, false, false, 76), 'errors');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
\t\t\t\t\t\t\t";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "plainPassword", [], "any", false, false, false, 80), "second", [], "any", false, false, false, 80), 'label');
        yield "
\t\t\t\t\t\t\t";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "plainPassword", [], "any", false, false, false, 81), "second", [], "any", false, false, false, 81), 'widget', ["attr" => ["placeholder" => "Repeat Password"]]);
        yield "
\t\t\t\t\t\t\t<i class=\"uil-eye toggle-password-type\"></i>
\t\t\t\t\t\t\t";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "plainPassword", [], "any", false, false, false, 83), "second", [], "any", false, false, false, 83), 'errors');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
    \t\t\t\t\t\t";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), "profile", [], "any", false, false, false, 86), 'label');
        yield "
\t\t\t\t\t\t\t";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), "profile", [], "any", false, false, false, 87), 'widget', ["attr" => ["placeholder" => "Select your role"]]);
        yield "
\t\t\t\t\t\t\t
    \t\t\t\t\t\t";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 89, $this->source); })()), "profile", [], "any", false, false, false, 89), 'errors');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group custom-checkbox\" style=\"display:block;\">
    \t\t\t\t\t\t";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 93, $this->source); })()), "agreeTerms", [], "any", false, false, false, 93), 'widget');
        yield "
    \t\t\t\t\t\t";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 94, $this->source); })()), "agreeTerms", [], "any", false, false, false, 94), 'label');
        yield "
    \t\t\t\t\t\t";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 95, $this->source); })()), "agreeTerms", [], "any", false, false, false, 95), 'errors');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"submit\" class=\"geex-content__authentication__form-submit\">Sign Up</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-footer\">
\t\t\t\t\t\t\tAlready have an account? <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Sign In</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 103
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 103, $this->source); })()), "vars", [], "any", false, false, false, 103), "errors", [], "any", false, false, false, 103)) > 0)) {
            // line 104
            yield "    \t\t\t\t\t\t<div class=\"alert alert-danger\">
        \t\t\t\t\t";
            // line 105
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 105, $this->source); })()), 'errors');
            yield "
    \t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 108
        yield "\t\t\t\t\t";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 108, $this->source); })()), 'form_end');
        yield "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"geex-content__authentication__img\">
\t\t\t\t<img src=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/authentication.svg"), "html", null, true);
        yield "\" alt=\"\">
\t\t\t</div>
\t\t</div>
\t</main>

\t<!-- inject:js-->
\t<script src=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/jquery/jquery-3.5.1.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/jquery/jquery-ui.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/bootstrap/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
\t<!-- endinject-->
\t
\t<script>
\t\t// Toggle password visibility
\t\tdocument.querySelectorAll('.toggle-password-type').forEach(icon => {
\t\t\ticon.addEventListener('click', function() {
\t\t\t\tconst input = this.previousElementSibling;
\t\t\t\tconst type = input.getAttribute('type') === 'password' ? 'text' : 'password';
\t\t\t\tinput.setAttribute('type', type);
\t\t\t\tthis.classList.toggle('uil-eye-slash');
\t\t\t});
\t\t});
\t</script>
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
        return "pages/signup.html.twig";
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
        return array (  288 => 121,  284 => 120,  280 => 119,  276 => 118,  267 => 112,  259 => 108,  253 => 105,  250 => 104,  248 => 103,  243 => 101,  234 => 95,  230 => 94,  226 => 93,  219 => 89,  214 => 87,  210 => 86,  204 => 83,  199 => 81,  195 => 80,  188 => 76,  183 => 74,  179 => 73,  172 => 69,  167 => 67,  163 => 66,  156 => 62,  151 => 60,  147 => 59,  140 => 55,  135 => 53,  131 => 52,  124 => 48,  119 => 46,  115 => 45,  108 => 41,  102 => 38,  98 => 37,  94 => 36,  72 => 17,  67 => 15,  62 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"en\" dir=\"ltr\">

<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t<title>SignUp - Geex Dashboard</title>

\t<link href=\"https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">

\t<!-- inject:css-->
\t<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/bootstrap/bootstrap.css') }}\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.min.css\">
\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
\t<!-- endinject -->
\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('assets/img/favicon.svg') }}\">
\t<!-- Fonts -->
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css\">


    <script>
\t\t// Render localStorage JS:
\t\tif (localStorage.theme) document.documentElement.setAttribute(\"data-theme\", localStorage.theme);
\t\tif (localStorage.layout) document.documentElement.setAttribute(\"data-nav\", localStorage.navbar);
\t\tif (localStorage.layout) document.documentElement.setAttribute(\"dir\", localStorage.layout);
    </script>\t
</head>

<body class=\"geex-dashboard authentication-page\">
\t<main class=\"geex-content\">
\t\t<div class=\"geex-content__authentication\">
\t\t\t<div class=\"geex-content__authentication__content\">
\t\t\t\t<div class=\"geex-content__authentication__content__wrapper\">
\t\t\t\t\t<div class=\"geex-content__authentication__content__logo\">
\t\t\t\t\t\t<a href=\"{{ path('index') }}\">
\t\t\t\t\t\t\t<img class=\"logo-lite\" src=\"{{ asset('assets/img/logo-dark.png') }}\" alt=\"logo\">
\t\t\t\t\t\t\t<img class=\"logo-dark\" src=\"{{ asset('assets/img/logo-lite.png') }}\" alt=\"logo\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t{{ form_start(registrationForm, {'attr': {'class': 'geex-content__authentication__form'}, 'method': 'POST'}) }}
\t\t\t\t\t\t<h2 class=\"geex-content__authentication__title\">Create Your Account 👋</h2>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
\t\t\t\t\t\t\t{{ form_label(registrationForm.firstName) }}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.firstName, {'attr': {'placeholder': 'Enter Your First Name'}}) }}
\t\t\t\t\t\t\t<i class=\"uil-user\"></i>
\t\t\t\t\t\t\t{{ form_errors(registrationForm.firstName) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
\t\t\t\t\t\t\t{{ form_label(registrationForm.lastName) }}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.lastName, {'attr': {'placeholder': 'Enter Your Last Name'}}) }}
\t\t\t\t\t\t\t<i class=\"uil-user\"></i>
\t\t\t\t\t\t\t{{ form_errors(registrationForm.lastName) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
\t\t\t\t\t\t\t{{ form_label(registrationForm.mail) }}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.mail, {'attr': {'placeholder': 'Enter Your Email'}}) }}
\t\t\t\t\t\t\t<i class=\"uil-envelope\"></i>
\t\t\t\t\t\t\t{{ form_errors(registrationForm.mail) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
\t\t\t\t\t\t\t{{ form_label(registrationForm.username) }}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.username, {'attr': {'placeholder': 'Choose a Username'}}) }}
\t\t\t\t\t\t\t<i class=\"uil-at\"></i>
\t\t\t\t\t\t\t{{ form_errors(registrationForm.username) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
\t\t\t\t\t\t\t{{ form_label(registrationForm.plainPassword.first) }}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.plainPassword.first, {'attr': {'placeholder': 'Password'}}) }}
\t\t\t\t\t\t\t<i class=\"uil-eye toggle-password-type\"></i>
\t\t\t\t\t\t\t{{ form_errors(registrationForm.plainPassword.first) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
\t\t\t\t\t\t\t{{ form_label(registrationForm.plainPassword.second) }}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.plainPassword.second, {'attr': {'placeholder': 'Repeat Password'}}) }}
\t\t\t\t\t\t\t<i class=\"uil-eye toggle-password-type\"></i>
\t\t\t\t\t\t\t{{ form_errors(registrationForm.plainPassword.second) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
    \t\t\t\t\t\t{{ form_label(registrationForm.profile) }}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.profile, {'attr': {'placeholder': 'Select your role'}}) }}
\t\t\t\t\t\t\t
    \t\t\t\t\t\t{{ form_errors(registrationForm.profile) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group custom-checkbox\" style=\"display:block;\">
    \t\t\t\t\t\t{{ form_widget(registrationForm.agreeTerms) }}
    \t\t\t\t\t\t{{ form_label(registrationForm.agreeTerms) }}
    \t\t\t\t\t\t{{ form_errors(registrationForm.agreeTerms) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"submit\" class=\"geex-content__authentication__form-submit\">Sign Up</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-footer\">
\t\t\t\t\t\t\tAlready have an account? <a href=\"{{ path('app_login') }}\">Sign In</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% if registrationForm.vars.errors|length > 0 %}
    \t\t\t\t\t\t<div class=\"alert alert-danger\">
        \t\t\t\t\t{{ form_errors(registrationForm) }}
    \t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{{ form_end(registrationForm) }}
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"geex-content__authentication__img\">
\t\t\t\t<img src=\"{{ asset('assets/img/authentication.svg') }}\" alt=\"\">
\t\t\t</div>
\t\t</div>
\t</main>

\t<!-- inject:js-->
\t<script src=\"{{ asset('assets/vendor/js/jquery/jquery-3.5.1.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/vendor/js/jquery/jquery-ui.js') }}\"></script>
\t<script src=\"{{ asset('assets/vendor/js/bootstrap/bootstrap.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/main.js') }}\"></script>
\t<!-- endinject-->
\t
\t<script>
\t\t// Toggle password visibility
\t\tdocument.querySelectorAll('.toggle-password-type').forEach(icon => {
\t\t\ticon.addEventListener('click', function() {
\t\t\t\tconst input = this.previousElementSibling;
\t\t\t\tconst type = input.getAttribute('type') === 'password' ? 'text' : 'password';
\t\t\t\tinput.setAttribute('type', type);
\t\t\t\tthis.classList.toggle('uil-eye-slash');
\t\t\t});
\t\t});
\t</script>
</body>
</html>", "pages/signup.html.twig", "C:\\Users\\Lenovo\\Downloads\\ERP_axia\\ProjetWeb - Copie (2)\\geex\\templates\\pages\\signup.html.twig");
    }
}
