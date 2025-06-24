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

/* pages/signin.html.twig */
class __TwigTemplate_1c7ef43fcb6aa5891e9bf12fe8bf0d58 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/signin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/signin.html.twig"));

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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["SignInForm"]) || array_key_exists("SignInForm", $context) ? $context["SignInForm"] : (function () { throw new RuntimeError('Variable "SignInForm" does not exist.', 41, $this->source); })()), 'form_start', ["attr" => ["class" => "geex-content__authentication__form"], "method" => "POST"]);
        yield "
\t\t\t\t\t\t<h2 class=\"geex-content__authentication__title\">Connect 👋</h2>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
\t\t\t\t\t\t\t";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["SignInForm"]) || array_key_exists("SignInForm", $context) ? $context["SignInForm"] : (function () { throw new RuntimeError('Variable "SignInForm" does not exist.', 45, $this->source); })()), "username", [], "any", false, false, false, 45), 'label');
        yield "
\t\t\t\t\t\t\t";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["SignInForm"]) || array_key_exists("SignInForm", $context) ? $context["SignInForm"] : (function () { throw new RuntimeError('Variable "SignInForm" does not exist.', 46, $this->source); })()), "username", [], "any", false, false, false, 46), 'widget', ["attr" => ["placeholder" => "Choose a Username"]]);
        yield "
\t\t\t\t\t\t\t<i class=\"uil-at\"></i>
\t\t\t\t\t\t\t";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["SignInForm"]) || array_key_exists("SignInForm", $context) ? $context["SignInForm"] : (function () { throw new RuntimeError('Variable "SignInForm" does not exist.', 48, $this->source); })()), "username", [], "any", false, false, false, 48), 'errors');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
\t\t\t\t\t\t\t";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["SignInForm"]) || array_key_exists("SignInForm", $context) ? $context["SignInForm"] : (function () { throw new RuntimeError('Variable "SignInForm" does not exist.', 52, $this->source); })()), "plainPassword", [], "any", false, false, false, 52), "first", [], "any", false, false, false, 52), 'label');
        yield "
\t\t\t\t\t\t\t";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["SignInForm"]) || array_key_exists("SignInForm", $context) ? $context["SignInForm"] : (function () { throw new RuntimeError('Variable "SignInForm" does not exist.', 53, $this->source); })()), "plainPassword", [], "any", false, false, false, 53), "first", [], "any", false, false, false, 53), 'widget', ["attr" => ["placeholder" => "Password"]]);
        yield "
\t\t\t\t\t\t\t<i class=\"uil-eye toggle-password-type\"></i>
\t\t\t\t\t\t\t";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["SignInForm"]) || array_key_exists("SignInForm", $context) ? $context["SignInForm"] : (function () { throw new RuntimeError('Variable "SignInForm" does not exist.', 55, $this->source); })()), "plainPassword", [], "any", false, false, false, 55), "first", [], "any", false, false, false, 55), 'errors');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"submit\" class=\"geex-content__authentication__form-submit\">Sign In</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-footer\">
\t\t\t\t\t\t\tNew user? <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sign-up");
        yield "\">Sign Up</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 63
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["SignInForm"]) || array_key_exists("SignInForm", $context) ? $context["SignInForm"] : (function () { throw new RuntimeError('Variable "SignInForm" does not exist.', 63, $this->source); })()), "vars", [], "any", false, false, false, 63), "errors", [], "any", false, false, false, 63)) > 0)) {
            // line 64
            yield "    \t\t\t\t\t\t<div class=\"alert alert-danger\">
        \t\t\t\t\t";
            // line 65
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["SignInForm"]) || array_key_exists("SignInForm", $context) ? $context["SignInForm"] : (function () { throw new RuntimeError('Variable "SignInForm" does not exist.', 65, $this->source); })()), 'errors');
            yield "
    \t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 68
        yield "\t\t\t\t\t";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["SignInForm"]) || array_key_exists("SignInForm", $context) ? $context["SignInForm"] : (function () { throw new RuntimeError('Variable "SignInForm" does not exist.', 68, $this->source); })()), 'form_end');
        yield "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"geex-content__authentication__img\">
\t\t\t\t<img src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/authentication.svg"), "html", null, true);
        yield "\" alt=\"\">
\t\t\t</div>
\t\t</div>
\t</main>

\t<!-- inject:js-->
\t<script src=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/jquery/jquery-3.5.1.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/jquery/jquery-ui.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/bootstrap/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 81
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
        return "pages/signin.html.twig";
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
        return array (  194 => 81,  190 => 80,  186 => 79,  182 => 78,  173 => 72,  165 => 68,  159 => 65,  156 => 64,  154 => 63,  149 => 61,  140 => 55,  135 => 53,  131 => 52,  124 => 48,  119 => 46,  115 => 45,  108 => 41,  102 => 38,  98 => 37,  94 => 36,  72 => 17,  67 => 15,  62 => 13,  48 => 1,);
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
\t\t\t\t\t{{ form_start(SignInForm, {'attr': {'class': 'geex-content__authentication__form'}, 'method': 'POST'}) }}
\t\t\t\t\t\t<h2 class=\"geex-content__authentication__title\">Connect 👋</h2>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
\t\t\t\t\t\t\t{{ form_label(SignInForm.username) }}
\t\t\t\t\t\t\t{{ form_widget(SignInForm.username, {'attr': {'placeholder': 'Choose a Username'}}) }}
\t\t\t\t\t\t\t<i class=\"uil-at\"></i>
\t\t\t\t\t\t\t{{ form_errors(SignInForm.username) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-group\">
\t\t\t\t\t\t\t{{ form_label(SignInForm.plainPassword.first) }}
\t\t\t\t\t\t\t{{ form_widget(SignInForm.plainPassword.first, {'attr': {'placeholder': 'Password'}}) }}
\t\t\t\t\t\t\t<i class=\"uil-eye toggle-password-type\"></i>
\t\t\t\t\t\t\t{{ form_errors(SignInForm.plainPassword.first) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"submit\" class=\"geex-content__authentication__form-submit\">Sign In</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"geex-content__authentication__form-footer\">
\t\t\t\t\t\t\tNew user? <a href=\"{{ path('sign-up') }}\">Sign Up</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% if SignInForm.vars.errors|length > 0 %}
    \t\t\t\t\t\t<div class=\"alert alert-danger\">
        \t\t\t\t\t{{ form_errors(SignInForm) }}
    \t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{{ form_end(SignInForm) }}
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
</html>", "pages/signin.html.twig", "C:\\Users\\Lenovo\\Downloads\\ERP_axia\\ProjetWeb - Copie (2)\\geex\\templates\\pages\\signin.html.twig");
    }
}
