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

/* auth/auth-signin-basic.html.twig */
class __TwigTemplate_b2c3dc4885f3d20d384ee5bf27153274 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/auth-signin-basic.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/auth-signin-basic.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>
    ";
        // line 4
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Connexion"]);
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
                                    <img src=\"../../assets/images/logo-light.png\" alt=\"\" height=\"20\">
                                </a>
                            </div>
                            <p class=\"mt-3 fs-15 fw-medium\">Tableau de bord d'administration</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class=\"row justify-content-center\">
                    <div class=\"col-md-8 col-lg-6 col-xl-5\">
                        <div class=\"card mt-4\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center mt-2\">
                                    <h5 class=\"text-primary\">Content de vous revoir !</h5>
                                    <p class=\"text-muted\">Connectez-vous pour continuer.</p>
                                </div>
                                
                                ";
        // line 46
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })())) {
            // line 47
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 47, $this->source); })()), "messageKey", [], "any", false, false, false, 47), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 47, $this->source); })()), "messageData", [], "any", false, false, false, 47), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 49
        echo "                                
                                <div class=\"p-2 mt-4\">
                                    <form action=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">
                                        <div class=\"mb-3\">
                                            <label for=\"mail\" class=\"form-label\">Adresse Email</label>
                                            <input type=\"email\" class=\"form-control\" id=\"mail\" name=\"mail\" placeholder=\"Entrez votre email\">
                                        </div>
                                        <div class=\"mb-3\">
                                            <div class=\"float-end\">
                                                <a href=\"auth-pass-reset-basic\" class=\"text-muted\">Mot de passe oublié ?</a>
                                            </div>
                                            <label class=\"form-label\" for=\"password-input\">Mot de passe</label>
                                            <div class=\"position-relative auth-pass-inputgroup mb-3\">
                                                <input type=\"password\" class=\"form-control pe-5 password-input\" name=\"_password\" placeholder=\"Entrez votre mot de passe\" id=\"password-input\">
                                                <button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon\" type=\"button\" id=\"password-addon\"><i class=\"ri-eye-fill align-middle\"></i></button>
                                            </div>
                                        </div>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"auth-remember-check\">
                                            <label class=\"form-check-label\" for=\"auth-remember-check\">Se souvenir de moi</label>
                                        </div>
                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                        <div class=\"mt-4\">
                                            <button class=\"btn btn-success w-100\" type=\"submit\">Se connecter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class=\"mt-4 text-center\">
                            <p class=\"mb-0\">Vous n'avez pas de compte ? <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signup");
        echo "\" class=\"fw-semibold text-primary text-decoration-underline\"> S'inscrire </a> </p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"text-center\">
                            <p class=\"mb-0 text-muted\">&copy;
                                <script>document.write(new Date().getFullYear())</script> Votre Application. Développé avec <i class=\"mdi mdi-heart text-danger\"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    ";
        // line 110
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "
    <!-- particles js -->
    <script src=\"../../assets/libs/particles.js/particles.js\"></script>
    <!-- particles app js -->
    <script src=\"../../assets/js/pages/particles.app.js\"></script>
    <!-- password-addon init -->
    <script src=\"../../assets/js/pages/password-addon.init.js\"></script>
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
        return "auth/auth-signin-basic.html.twig";
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
        return array (  177 => 110,  146 => 82,  131 => 70,  109 => 51,  105 => 49,  99 => 47,  97 => 46,  53 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>
    {{ include('partials/title-meta.html.twig', {title: 'Connexion'}) }}
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
                                    <img src=\"../../assets/images/logo-light.png\" alt=\"\" height=\"20\">
                                </a>
                            </div>
                            <p class=\"mt-3 fs-15 fw-medium\">Tableau de bord d'administration</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class=\"row justify-content-center\">
                    <div class=\"col-md-8 col-lg-6 col-xl-5\">
                        <div class=\"card mt-4\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center mt-2\">
                                    <h5 class=\"text-primary\">Content de vous revoir !</h5>
                                    <p class=\"text-muted\">Connectez-vous pour continuer.</p>
                                </div>
                                
                                {% if error %}
                                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                {% endif %}
                                
                                <div class=\"p-2 mt-4\">
                                    <form action=\"{{ path('app_login') }}\" method=\"post\">
                                        <div class=\"mb-3\">
                                            <label for=\"mail\" class=\"form-label\">Adresse Email</label>
                                            <input type=\"email\" class=\"form-control\" id=\"mail\" name=\"mail\" placeholder=\"Entrez votre email\">
                                        </div>
                                        <div class=\"mb-3\">
                                            <div class=\"float-end\">
                                                <a href=\"auth-pass-reset-basic\" class=\"text-muted\">Mot de passe oublié ?</a>
                                            </div>
                                            <label class=\"form-label\" for=\"password-input\">Mot de passe</label>
                                            <div class=\"position-relative auth-pass-inputgroup mb-3\">
                                                <input type=\"password\" class=\"form-control pe-5 password-input\" name=\"_password\" placeholder=\"Entrez votre mot de passe\" id=\"password-input\">
                                                <button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon\" type=\"button\" id=\"password-addon\"><i class=\"ri-eye-fill align-middle\"></i></button>
                                            </div>
                                        </div>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"auth-remember-check\">
                                            <label class=\"form-check-label\" for=\"auth-remember-check\">Se souvenir de moi</label>
                                        </div>
                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                        <div class=\"mt-4\">
                                            <button class=\"btn btn-success w-100\" type=\"submit\">Se connecter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class=\"mt-4 text-center\">
                            <p class=\"mb-0\">Vous n'avez pas de compte ? <a href=\"{{ path('app_signup') }}\" class=\"fw-semibold text-primary text-decoration-underline\"> S'inscrire </a> </p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"text-center\">
                            <p class=\"mb-0 text-muted\">&copy;
                                <script>document.write(new Date().getFullYear())</script> Votre Application. Développé avec <i class=\"mdi mdi-heart text-danger\"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    {{ include('partials/vendor-scripts.html.twig') }}
    <!-- particles js -->
    <script src=\"../../assets/libs/particles.js/particles.js\"></script>
    <!-- particles app js -->
    <script src=\"../../assets/js/pages/particles.app.js\"></script>
    <!-- password-addon init -->
    <script src=\"../../assets/js/pages/password-addon.init.js\"></script>
</body>
</html>", "auth/auth-signin-basic.html.twig", "C:\\Users\\Lenovo\\Desktop\\ERP_axia\\ERP_axia\\saas\\templates\\auth\\auth-signin-basic.html.twig");
    }
}
