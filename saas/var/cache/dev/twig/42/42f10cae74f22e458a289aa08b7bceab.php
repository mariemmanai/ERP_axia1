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

/* depots/new&edit.html.twig */
class __TwigTemplate_f8a53434d903257853532fb0b1f69bc0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depots/new&edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depots/new&edit.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>
    ";
        // line 4
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => (((twig_get_attribute($this->env, $this->source, (isset($context["depot"]) || array_key_exists("depot", $context) ? $context["depot"] : (function () { throw new RuntimeError('Variable "depot" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)) ? ("Modifier") : ("Créer")) . " un dépôt")]);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body>
    <div id=\"layout-wrapper\">
        ";
        // line 12
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "
        
        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid\">
                <br>
                    ";
        // line 18
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Gestion des Dépôts", "title" => ((twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["depot"]) || array_key_exists("depot", $context) ? $context["depot"] : (function () { throw new RuntimeError('Variable "depot" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)) ? ("Modifier un dépôt") : ("Créer un nouveau dépôt"))]);
        // line 21
        echo "
                    
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h4 class=\"card-title mb-4\">";
        // line 27
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["depot"]) || array_key_exists("depot", $context) ? $context["depot"] : (function () { throw new RuntimeError('Variable "depot" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)) ? ("Modifier le dépôt") : ("Nouveau dépôt"));
        echo "</h4>
                                    
                                    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        echo "
                                        <div class=\"mb-3\">
                                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "intitule", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
                                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "intitule", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            <div class=\"invalid-feedback\">
                                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "intitule", [], "any", false, false, false, 34), 'errors');
        echo "
                                            </div>
                                        </div>
                                        
                                        <div class=\"row mt-4\">
                                            <div class=\"col-sm-6\">
                                                <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depots_index");
        echo "\" class=\"btn btn-secondary waves-effect\">
                                                    <i class=\"ri-arrow-left-line align-bottom me-1\"></i> Retour à la liste
                                                </a>
                                            </div>
                                            <div class=\"col-sm-6\">
                                                <div class=\"text-sm-end\">
                                                    <button type=\"submit\" class=\"btn btn-success waves-effect waves-light\">
                                                        <i class=\"ri-save-line align-bottom me-1\"></i> ";
        // line 47
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["depot"]) || array_key_exists("depot", $context) ? $context["depot"] : (function () { throw new RuntimeError('Variable "depot" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)) ? ("Modifier") : ("Enregistrer"));
        echo "
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 59
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
    </div>
    
    ";
        // line 63
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "
    ";
        // line 64
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "
    
    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
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
        return "depots/new&edit.html.twig";
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
        return array (  156 => 64,  152 => 63,  145 => 59,  135 => 52,  127 => 47,  117 => 40,  108 => 34,  103 => 32,  99 => 31,  94 => 29,  89 => 27,  81 => 21,  79 => 20,  78 => 18,  69 => 12,  61 => 7,  57 => 6,  53 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>
    {{ include('partials/title-meta.html.twig', {title: (depot.id ? 'Modifier' : 'Créer') ~ ' un dépôt'}) }}
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/icons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/app.min.css') }}\" rel=\"stylesheet\">
</head>

<body>
    <div id=\"layout-wrapper\">
        {{ include('partials/menu.html.twig') }}
        
        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid\">
                <br>
                    {{ include('partials/page-title.html.twig', {
                        pagetitle: 'Gestion des Dépôts',
                        title: (depot.id ? 'Modifier un dépôt' : 'Créer un nouveau dépôt')
                    }) }}
                    
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h4 class=\"card-title mb-4\">{{ depot.id ? 'Modifier le dépôt' : 'Nouveau dépôt' }}</h4>
                                    
                                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                                        <div class=\"mb-3\">
                                            {{ form_label(form.intitule, null, {'label_attr': {'class': 'form-label'}}) }}
                                            {{ form_widget(form.intitule, {'attr': {'class': 'form-control'}}) }}
                                            <div class=\"invalid-feedback\">
                                                {{ form_errors(form.intitule) }}
                                            </div>
                                        </div>
                                        
                                        <div class=\"row mt-4\">
                                            <div class=\"col-sm-6\">
                                                <a href=\"{{ path('app_depots_index') }}\" class=\"btn btn-secondary waves-effect\">
                                                    <i class=\"ri-arrow-left-line align-bottom me-1\"></i> Retour à la liste
                                                </a>
                                            </div>
                                            <div class=\"col-sm-6\">
                                                <div class=\"text-sm-end\">
                                                    <button type=\"submit\" class=\"btn btn-success waves-effect waves-light\">
                                                        <i class=\"ri-save-line align-bottom me-1\"></i> {{ depot.id ? 'Modifier' : 'Enregistrer' }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    {{ form_end(form) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{ include('partials/footer.html.twig') }}
        </div>
    </div>
    
    {{ include('partials/customizer.html.twig') }}
    {{ include('partials/vendor-scripts.html.twig') }}
    
    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>", "depots/new&edit.html.twig", "C:\\Users\\Lenovo\\Desktop\\ERP_axia\\ERP_axia\\saas\\templates\\depots\\new&edit.html.twig");
    }
}
