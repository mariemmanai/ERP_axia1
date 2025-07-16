<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* auth/auth-signup-basic.html.twig */
class __TwigTemplate_417b06402a7c0e39af779128e309ed10 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/auth-signup-basic.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/auth-signup-basic.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>
    ";
        // line 4
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Sign Up"]);
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "partials/head-css.html.twig");
        echo "
</head>

<body>
    <div class=\"auth-page-wrapper pt-5\">
        <!-- auth page bg -->
        <div class=\"auth-one-bg-position auth-one-bg\" id=\"auth-particles\">
            <div class=\"bg-overlay\"></div>
            <div class=\"shape\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 1440 120\">
                    <path d=\"M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z\"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class=\"auth-page-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"text-center mt-sm-5 mb-4 text-white-50\">
                            <div>
                                <a href=\"/\" class=\"d-inline-block auth-logo\">
                                    <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.png"), "html", null, true);
        echo "\" alt=\"\" height=\"20\">
                                </a>
                            </div>
                            <p class=\"mt-3 fs-15 fw-medium\">Premium Admin & Dashboard Template</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class=\"row justify-content-center\">
                    <div class=\"col-md-8 col-lg-6 col-xl-5\">
                        <div class=\"card mt-4\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center mt-2\">
                                    <h5 class=\"text-primary\">Create New Account</h5>
                                    <p class=\"text-muted\">Get your free account now</p>
                                </div>
                                <div class=\"p-2 mt-4\">
                                    ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        echo "

                                        <div class=\"mb-3\">
                                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "firstName", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"], "label" => "First Name"]);
        echo "
                                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "firstName", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter first name"]]);
        echo "
                                            <div class=\"invalid-feedback\">
                                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "firstName", [], "any", false, false, false, 52), 'errors');
        echo "
                                            </div>
                                        </div>

                                        <div class=\"mb-3\">
                                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "lastName", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Last Name"]);
        echo "
                                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "lastName", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter last name"]]);
        echo "
                                            <div class=\"invalid-feedback\">
                                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "lastName", [], "any", false, false, false, 60), 'errors');
        echo "
                                            </div>
                                        </div>

                                        <div class=\"mb-3\">
                                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "mail", [], "any", false, false, false, 65), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        echo "
                                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "mail", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter email address"]]);
        echo "
                                            <div class=\"invalid-feedback\">
                                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "mail", [], "any", false, false, false, 68), 'errors');
        echo "
                                            </div>
                                        </div>

                                        <div class=\"mb-3\">
                                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "username", [], "any", false, false, false, 73), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Username"]);
        echo "
                                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 74, $this->source); })()), "username", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter username"]]);
        echo "
                                            <div class=\"invalid-feedback\">
                                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "username", [], "any", false, false, false, 76), 'errors');
        echo "
                                            </div>
                                        </div>

                                        <div class=\"mb-3\">
                                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "plainPassword", [], "any", false, false, false, 81), "first", [], "any", false, false, false, 81), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Password"]);
        echo "
                                            <div class=\"position-relative auth-pass-inputgroup\">
                                                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "plainPassword", [], "any", false, false, false, 83), "first", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control pe-5 password-input", "placeholder" => "Enter password", "onpaste" => "return false", "pattern" => "(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"]]);
        // line 88
        echo "
                                                <button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon\" type=\"button\" id=\"password-addon\">
                                                    <i class=\"ri-eye-fill align-middle\"></i>
                                                </button>
                                                <div class=\"invalid-feedback\">
                                                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 93, $this->source); })()), "plainPassword", [], "any", false, false, false, 93), "first", [], "any", false, false, false, 93), 'errors');
        echo "
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"mb-3\">
                                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 99, $this->source); })()), "plainPassword", [], "any", false, false, false, 99), "second", [], "any", false, false, false, 99), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Confirm Password"]);
        echo "
                                            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 100, $this->source); })()), "plainPassword", [], "any", false, false, false, 100), "second", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Confirm password"]]);
        // line 103
        echo "
                                            <div class=\"invalid-feedback\">
                                                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 105, $this->source); })()), "plainPassword", [], "any", false, false, false, 105), "second", [], "any", false, false, false, 105), 'errors');
        echo "
                                            </div>
                                        </div>

                                        <div class=\"mb-3\">
                                            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 110, $this->source); })()), "profile", [], "any", false, false, false, 110), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Your Role"]);
        echo "
                                            ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 111, $this->source); })()), "profile", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "form-select"]]);
        echo "
                                            <div class=\"invalid-feedback\">
                                                ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 113, $this->source); })()), "profile", [], "any", false, false, false, 113), 'errors');
        echo "
                                            </div>
                                        </div>

                                        <div class=\"mb-4\">
                                            ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 118, $this->source); })()), "agreeTerms", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                                            <label class=\"form-check-label\" for=\"";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 119, $this->source); })()), "agreeTerms", [], "any", false, false, false, 119), "vars", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119), "html", null, true);
        echo "\">
                                                I agree to the <a href=\"#\" class=\"text-primary text-decoration-underline\">Terms of Use</a>
                                            </label>
                                            <div class=\"invalid-feedback\">
                                                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 123, $this->source); })()), "agreeTerms", [], "any", false, false, false, 123), 'errors');
        echo "
                                            </div>
                                        </div>

                                        <div id=\"password-contain\" class=\"p-3 bg-light mb-2 rounded\">
                                            <h5 class=\"fs-13\">Password must contain:</h5>
                                            <p id=\"pass-length\" class=\"invalid fs-12 mb-2\">Minimum <b>8 characters</b></p>
                                            <p id=\"pass-lower\" class=\"invalid fs-12 mb-2\">At <b>lowercase</b> letter (a-z)</p>
                                            <p id=\"pass-upper\" class=\"invalid fs-12 mb-2\">At least <b>uppercase</b> letter (A-Z)</p>
                                            <p id=\"pass-number\" class=\"invalid fs-12 mb-0\">A least <b>number</b> (0-9)</p>
                                        </div>

                                        <div class=\"mt-4\">
                                            <button class=\"btn btn-success w-100\" type=\"submit\">Sign Up</button>
                                        </div>

                                    ";
        // line 139
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 139, $this->source); })()), 'form_end');
        echo "
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class=\"mt-4 text-center\">
                            <p class=\"mb-0\">Already have an account ? <a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"fw-semibold text-primary text-decoration-underline\"> Sign in </a> </p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        ";
        // line 157
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
    </div>
    <!-- end auth-page-wrapper -->

    ";
        // line 161
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- particles js -->
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/particles.js/particles.js"), "html", null, true);
        echo "\"></script>
    <!-- particles app js -->
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/particles.app.js"), "html", null, true);
        echo "\"></script>
    <!-- validation init -->
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/form-validation.init.js"), "html", null, true);
        echo "\"></script>
    <!-- password create init -->
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/passowrd-create.init.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "auth/auth-signup-basic.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  314 => 170,  309 => 168,  304 => 166,  299 => 164,  293 => 161,  286 => 157,  273 => 147,  262 => 139,  243 => 123,  236 => 119,  232 => 118,  224 => 113,  219 => 111,  215 => 110,  207 => 105,  203 => 103,  201 => 100,  197 => 99,  188 => 93,  181 => 88,  179 => 83,  174 => 81,  166 => 76,  161 => 74,  157 => 73,  149 => 68,  144 => 66,  140 => 65,  132 => 60,  127 => 58,  123 => 57,  115 => 52,  110 => 50,  106 => 49,  100 => 46,  79 => 28,  53 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>
    {{ include('partials/title-meta.html.twig', {title: 'Sign Up'}) }}
    {{ include('partials/head-css.html.twig') }}
</head>

<body>
    <div class=\"auth-page-wrapper pt-5\">
        <!-- auth page bg -->
        <div class=\"auth-one-bg-position auth-one-bg\" id=\"auth-particles\">
            <div class=\"bg-overlay\"></div>
            <div class=\"shape\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 1440 120\">
                    <path d=\"M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z\"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class=\"auth-page-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"text-center mt-sm-5 mb-4 text-white-50\">
                            <div>
                                <a href=\"/\" class=\"d-inline-block auth-logo\">
                                    <img src=\"{{ asset('assets/images/logo-light.png') }}\" alt=\"\" height=\"20\">
                                </a>
                            </div>
                            <p class=\"mt-3 fs-15 fw-medium\">Premium Admin & Dashboard Template</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class=\"row justify-content-center\">
                    <div class=\"col-md-8 col-lg-6 col-xl-5\">
                        <div class=\"card mt-4\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center mt-2\">
                                    <h5 class=\"text-primary\">Create New Account</h5>
                                    <p class=\"text-muted\">Get your free account now</p>
                                </div>
                                <div class=\"p-2 mt-4\">
                                    {{ form_start(registrationForm, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

                                        <div class=\"mb-3\">
                                            {{ form_label(registrationForm.firstName, 'First Name', {'label_attr': {'class': 'form-label'}}) }}
                                            {{ form_widget(registrationForm.firstName, {'attr': {'class': 'form-control', 'placeholder': 'Enter first name'}}) }}
                                            <div class=\"invalid-feedback\">
                                                {{ form_errors(registrationForm.firstName) }}
                                            </div>
                                        </div>

                                        <div class=\"mb-3\">
                                            {{ form_label(registrationForm.lastName, 'Last Name', {'label_attr': {'class': 'form-label'}}) }}
                                            {{ form_widget(registrationForm.lastName, {'attr': {'class': 'form-control', 'placeholder': 'Enter last name'}}) }}
                                            <div class=\"invalid-feedback\">
                                                {{ form_errors(registrationForm.lastName) }}
                                            </div>
                                        </div>

                                        <div class=\"mb-3\">
                                            {{ form_label(registrationForm.mail, 'Email', {'label_attr': {'class': 'form-label'}}) }}
                                            {{ form_widget(registrationForm.mail, {'attr': {'class': 'form-control', 'placeholder': 'Enter email address'}}) }}
                                            <div class=\"invalid-feedback\">
                                                {{ form_errors(registrationForm.mail) }}
                                            </div>
                                        </div>

                                        <div class=\"mb-3\">
                                            {{ form_label(registrationForm.username, 'Username', {'label_attr': {'class': 'form-label'}}) }}
                                            {{ form_widget(registrationForm.username, {'attr': {'class': 'form-control', 'placeholder': 'Enter username'}}) }}
                                            <div class=\"invalid-feedback\">
                                                {{ form_errors(registrationForm.username) }}
                                            </div>
                                        </div>

                                        <div class=\"mb-3\">
                                            {{ form_label(registrationForm.plainPassword.first, 'Password', {'label_attr': {'class': 'form-label'}}) }}
                                            <div class=\"position-relative auth-pass-inputgroup\">
                                                {{ form_widget(registrationForm.plainPassword.first, {'attr': {
                                                    'class': 'form-control pe-5 password-input',
                                                    'placeholder': 'Enter password',
                                                    'onpaste': 'return false',
                                                    'pattern': '(?=.*\\\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'
                                                }}) }}
                                                <button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon\" type=\"button\" id=\"password-addon\">
                                                    <i class=\"ri-eye-fill align-middle\"></i>
                                                </button>
                                                <div class=\"invalid-feedback\">
                                                    {{ form_errors(registrationForm.plainPassword.first) }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"mb-3\">
                                            {{ form_label(registrationForm.plainPassword.second, 'Confirm Password', {'label_attr': {'class': 'form-label'}}) }}
                                            {{ form_widget(registrationForm.plainPassword.second, {'attr': {
                                                'class': 'form-control',
                                                'placeholder': 'Confirm password'
                                            }}) }}
                                            <div class=\"invalid-feedback\">
                                                {{ form_errors(registrationForm.plainPassword.second) }}
                                            </div>
                                        </div>

                                        <div class=\"mb-3\">
                                            {{ form_label(registrationForm.profile, 'Your Role', {'label_attr': {'class': 'form-label'}}) }}
                                            {{ form_widget(registrationForm.profile, {'attr': {'class': 'form-select'}}) }}
                                            <div class=\"invalid-feedback\">
                                                {{ form_errors(registrationForm.profile) }}
                                            </div>
                                        </div>

                                        <div class=\"mb-4\">
                                            {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input'}}) }}
                                            <label class=\"form-check-label\" for=\"{{ registrationForm.agreeTerms.vars.id }}\">
                                                I agree to the <a href=\"#\" class=\"text-primary text-decoration-underline\">Terms of Use</a>
                                            </label>
                                            <div class=\"invalid-feedback\">
                                                {{ form_errors(registrationForm.agreeTerms) }}
                                            </div>
                                        </div>

                                        <div id=\"password-contain\" class=\"p-3 bg-light mb-2 rounded\">
                                            <h5 class=\"fs-13\">Password must contain:</h5>
                                            <p id=\"pass-length\" class=\"invalid fs-12 mb-2\">Minimum <b>8 characters</b></p>
                                            <p id=\"pass-lower\" class=\"invalid fs-12 mb-2\">At <b>lowercase</b> letter (a-z)</p>
                                            <p id=\"pass-upper\" class=\"invalid fs-12 mb-2\">At least <b>uppercase</b> letter (A-Z)</p>
                                            <p id=\"pass-number\" class=\"invalid fs-12 mb-0\">A least <b>number</b> (0-9)</p>
                                        </div>

                                        <div class=\"mt-4\">
                                            <button class=\"btn btn-success w-100\" type=\"submit\">Sign Up</button>
                                        </div>

                                    {{ form_end(registrationForm) }}
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class=\"mt-4 text-center\">
                            <p class=\"mb-0\">Already have an account ? <a href=\"{{ path('app_login') }}\" class=\"fw-semibold text-primary text-decoration-underline\"> Sign in </a> </p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        {{ include('partials/footer.html.twig') }}
    </div>
    <!-- end auth-page-wrapper -->

    {{ include('partials/vendor-scripts.html.twig') }}

    <!-- particles js -->
    <script src=\"{{ asset('assets/libs/particles.js/particles.js') }}\"></script>
    <!-- particles app js -->
    <script src=\"{{ asset('assets/js/pages/particles.app.js') }}\"></script>
    <!-- validation init -->
    <script src=\"{{ asset('assets/js/pages/form-validation.init.js') }}\"></script>
    <!-- password create init -->
    <script src=\"{{ asset('assets/js/pages/passowrd-create.init.js') }}\"></script>
</body>
</html>", "auth/auth-signup-basic.html.twig", "C:\\Users\\Lenovo\\Desktop\\ERP_axia\\ERP_axia\\saas\\templates\\auth\\auth-signup-basic.html.twig");
    }
}
