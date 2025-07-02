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

/* profiles/new&edit.html.twig */
class __TwigTemplate_2799a84276fb12abcd97267637863a06 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profiles/new&edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profiles/new&edit.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>
    <br>
    <br>
    ";
        // line 6
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => ((twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)) ? ("Modifier le profil") : ("Créer un profil"))]);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style>
        .form-control-sm {
            height: calc(1.5em + 0.5rem + 2px);
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }
    </style>
</head>

<body>
    <div id=\"layout-wrapper\">
        ";
        // line 24
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "
        
        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid\">
                    ";
        // line 29
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Profiles", "title" => ((twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)) ? ("Modifier le profil") : ("Créer un profil"))]);
        // line 32
        echo "

                    <div class=\"row justify-content-center\">
                        <div class=\"col-xxl-9\">
                            <div class=\"card\">
                                ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        echo "
                                    <div class=\"card-body border-bottom border-bottom-dashed p-4\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4\">
                                                <div class=\"profile-user mx-auto mb-3\">
                                                    <input id=\"profile-img-file-input\" type=\"file\" class=\"profile-img-file-input\" />
                                                    <label for=\"profile-img-file-input\" class=\"d-block\" tabindex=\"0\">
                                                        <span class=\"overflow-hidden border border-dashed d-flex align-items-center justify-content-center rounded\" style=\"height: 60px; width: 256px;\">
                                                            <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-dark.png"), "html", null, true);
        echo "\" class=\"card-logo card-logo-dark user-profile-image img-fluid\" alt=\"logo dark\">
                                                            <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.png"), "html", null, true);
        echo "\" class=\"card-logo card-logo-light user-profile-image img-fluid\" alt=\"logo light\">
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-4 ms-auto\">
                                                <div class=\"mb-3\">
                                                    <label class=\"form-label\">ID</label>
                                                    ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)) {
            // line 55
            echo "                                                        <div class=\"form-control bg-light border-0\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "html", null, true);
            echo "</div>
                                                    ";
        } else {
            // line 57
            echo "                                                        <div class=\"form-control bg-light border-0\">Nouveau profil</div>
                                                    ";
        }
        // line 59
        echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"card-body p-4\">
                                        <div class=\"row g-3\">
                                            <div class=\"col-lg-12\">
                                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "intitule", [], "any", false, false, false, 67), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Entrez l'intitulé du profil"], "label" => "Intitulé du profil"]);
        // line 73
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"card-body p-4\">
                                        <div class=\"hstack gap-2 justify-content-end\">
                                            <button type=\"submit\" class=\"btn btn-success\">
                                                <i class=\"ri-save-line align-bottom me-1\"></i> ";
        // line 81
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81)) ? ("Mettre à jour") : ("Enregistrer"));
        echo "
                                            </button>
                                            <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profiles_index");
        echo "\" class=\"btn btn-light\">
                                                Annuler
                                            </a>
                                        </div>
                                    </div>
                                ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 94
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
    </div>

    ";
        // line 98
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            \$('[data-toggle=\"tooltip\"]').tooltip();
            ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "flashes", ["success"], "method", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 104
            echo "                Swal.fire({
                    icon: 'success',
                    title: 'Succès',
                    text: '";
            // line 107
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "',
                    showConfirmButton: false,
                    timer: 3000
                });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "            
            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "flashes", ["error"], "method", false, false, false, 113));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 114
            echo "                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: '";
            // line 117
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "',
                    showConfirmButton: true
                });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "        });
    </script>
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
        return "profiles/new&edit.html.twig";
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
        return array (  244 => 121,  234 => 117,  229 => 114,  225 => 113,  222 => 112,  211 => 107,  206 => 104,  202 => 103,  195 => 99,  191 => 98,  184 => 94,  175 => 88,  167 => 83,  162 => 81,  152 => 73,  150 => 67,  140 => 59,  136 => 57,  130 => 55,  128 => 54,  117 => 46,  113 => 45,  102 => 37,  95 => 32,  93 => 31,  92 => 29,  84 => 24,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>
    <br>
    <br>
    {{ include('partials/title-meta.html.twig', {title: profile.id ? 'Modifier le profil' : 'Créer un profil'}) }}
    <link href=\"{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/icons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/app.min.css') }}\" rel=\"stylesheet\">
    <style>
        .form-control-sm {
            height: calc(1.5em + 0.5rem + 2px);
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }
    </style>
</head>

<body>
    <div id=\"layout-wrapper\">
        {{ include('partials/menu.html.twig') }}
        
        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid\">
                    {{ include('partials/page-title.html.twig', {
                        pagetitle: 'Profiles',
                        title: profile.id ? 'Modifier le profil' : 'Créer un profil'
                    }) }}

                    <div class=\"row justify-content-center\">
                        <div class=\"col-xxl-9\">
                            <div class=\"card\">
                                {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                                    <div class=\"card-body border-bottom border-bottom-dashed p-4\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4\">
                                                <div class=\"profile-user mx-auto mb-3\">
                                                    <input id=\"profile-img-file-input\" type=\"file\" class=\"profile-img-file-input\" />
                                                    <label for=\"profile-img-file-input\" class=\"d-block\" tabindex=\"0\">
                                                        <span class=\"overflow-hidden border border-dashed d-flex align-items-center justify-content-center rounded\" style=\"height: 60px; width: 256px;\">
                                                            <img src=\"{{ asset('assets/images/logo-dark.png') }}\" class=\"card-logo card-logo-dark user-profile-image img-fluid\" alt=\"logo dark\">
                                                            <img src=\"{{ asset('assets/images/logo-light.png') }}\" class=\"card-logo card-logo-light user-profile-image img-fluid\" alt=\"logo light\">
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-4 ms-auto\">
                                                <div class=\"mb-3\">
                                                    <label class=\"form-label\">ID</label>
                                                    {% if profile.id %}
                                                        <div class=\"form-control bg-light border-0\">{{ profile.id }}</div>
                                                    {% else %}
                                                        <div class=\"form-control bg-light border-0\">Nouveau profil</div>
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"card-body p-4\">
                                        <div class=\"row g-3\">
                                            <div class=\"col-lg-12\">
                                                {{ form_row(form.intitule, {
                                                    'attr': {
                                                        'class': 'form-control',
                                                        'placeholder': 'Entrez l\\'intitulé du profil'
                                                    },
                                                    'label': 'Intitulé du profil'
                                                }) }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"card-body p-4\">
                                        <div class=\"hstack gap-2 justify-content-end\">
                                            <button type=\"submit\" class=\"btn btn-success\">
                                                <i class=\"ri-save-line align-bottom me-1\"></i> {{ profile.id ? 'Mettre à jour' : 'Enregistrer' }}
                                            </button>
                                            <a href=\"{{ path('app_profiles_index') }}\" class=\"btn btn-light\">
                                                Annuler
                                            </a>
                                        </div>
                                    </div>
                                {{ form_end(form) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{ include('partials/footer.html.twig') }}
        </div>
    </div>

    {{ include('partials/vendor-scripts.html.twig') }}
    <script src=\"{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            \$('[data-toggle=\"tooltip\"]').tooltip();
            {% for message in app.flashes('success') %}
                Swal.fire({
                    icon: 'success',
                    title: 'Succès',
                    text: '{{ message }}',
                    showConfirmButton: false,
                    timer: 3000
                });
            {% endfor %}
            
            {% for message in app.flashes('error') %}
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: '{{ message }}',
                    showConfirmButton: true
                });
            {% endfor %}
        });
    </script>
</body>
</html>", "profiles/new&edit.html.twig", "C:\\Users\\Lenovo\\Downloads\\velzon-symfony_v4.3.0\\Symfony\\saas\\templates\\profiles\\new&edit.html.twig");
    }
}
