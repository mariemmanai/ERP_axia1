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

/* depots/new&edit.html.twig */
class __TwigTemplate_75dfba591f84d9daba5f194f79d2fab7 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depots/new&edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depots/new&edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "depots/new&edit.html.twig", 1);
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

        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["depot"]) || array_key_exists("depot", $context) ? $context["depot"] : (function () { throw new RuntimeError('Variable "depot" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)) {
            yield "Modifier";
        } else {
            yield "Nouveau";
        }
        yield " Dépôt";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container-fluid px-4\">
    <div class=\"row justify-content-center\">
        <main class=\"col-md-10 col-lg-8 px-md-4\">
            <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
                <h1 class=\"h2 mb-0\">";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["depot"]) || array_key_exists("depot", $context) ? $context["depot"] : (function () { throw new RuntimeError('Variable "depot" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)) {
            yield "Modifier le dépôt";
        } else {
            yield "Créer un nouveau dépôt";
        }
        yield "</h1>
                <div class=\"btn-toolbar mb-2 mb-md-0\">
                    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depots_index");
        yield "\" class=\"btn btn-sm btn-outline-secondary\">
                        <i class=\"bi bi-arrow-left me-1\"></i> Retour à la liste
                    </a>
                </div>
            </div>

            <div class=\"card shadow-sm border-0 mb-4\">
                <div class=\"card-header bg-primary text-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"bi bi-archive me-2\"></i>Informations du dépôt</h5>
                </div>
                <div class=\"card-body p-4\">
                    ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                        <div class=\"mb-4\">
                            <div class=\"form-floating shadow-sm\">
                                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "intitule", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control rounded-3 border-light-subtle shadow-sm", "id" => "floatingIntitule", "placeholder" => "Entrez l'intitulé du dépôt"]]);
        // line 32
        yield "
                                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "intitule", [], "any", false, false, false, 33), 'label', ["label_attr" => ["for" => "floatingIntitule", "class" => "text-muted"]]);
        // line 35
        yield "
                                ";
        // line 36
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "intitule", [], "any", false, false, false, 36), 'errors')) {
            // line 37
            yield "                                    <div class=\"invalid-feedback d-block mt-1\">
                                        ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "intitule", [], "any", false, false, false, 38), 'errors')), "html", null, true);
            yield "
                                    </div>
                                ";
        }
        // line 41
        yield "                            </div>
                        </div>

                        <div class=\"d-flex justify-content-end gap-3 pt-3 border-top\">
                            <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depots_index");
        yield "\" class=\"btn btn-light\">
                                <i class=\"bi bi-x-circle me-2\"></i>Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"bi bi-save me-2\"></i>Enregistrer
                            </button>
                        </div>
                    ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </main>
    </div>
</div>

<style>
    .form-floating > label {
        color: #6c757d;
        padding-left: 0.75rem;
    }
    .form-control:focus {
        border-color: #9ec5fe;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.2);
        background-color: #fff;
    }

    .form-control {
        background-color: #f8f9fa;
        transition: all 0.3s ease;
    }

    .form-control::placeholder {
        color: transparent;
    }

    .form-control:focus::placeholder {
        color: #adb5bd;
    }
    .card {
        border-radius: 0.5rem;
        max-width: 800px;
        margin: 0 auto;
    }
    .invalid-feedback {
        display: block;
        margin-top: 0.25rem;
        font-size: 0.875em;
        color: #dc3545;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('.needs-validation');
    
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            form.classList.add('was-validated');
        }, false);
    });
});
</script>
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
        return "depots/new&edit.html.twig";
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
        return array (  177 => 52,  167 => 45,  161 => 41,  155 => 38,  152 => 37,  150 => 36,  147 => 35,  145 => 33,  142 => 32,  140 => 26,  134 => 23,  120 => 12,  111 => 10,  105 => 6,  92 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% if depot.id %}Modifier{% else %}Nouveau{% endif %} Dépôt{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <div class=\"row justify-content-center\">
        <main class=\"col-md-10 col-lg-8 px-md-4\">
            <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
                <h1 class=\"h2 mb-0\">{% if depot.id %}Modifier le dépôt{% else %}Créer un nouveau dépôt{% endif %}</h1>
                <div class=\"btn-toolbar mb-2 mb-md-0\">
                    <a href=\"{{ path('app_depots_index') }}\" class=\"btn btn-sm btn-outline-secondary\">
                        <i class=\"bi bi-arrow-left me-1\"></i> Retour à la liste
                    </a>
                </div>
            </div>

            <div class=\"card shadow-sm border-0 mb-4\">
                <div class=\"card-header bg-primary text-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"bi bi-archive me-2\"></i>Informations du dépôt</h5>
                </div>
                <div class=\"card-body p-4\">
                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                        <div class=\"mb-4\">
                            <div class=\"form-floating shadow-sm\">
                                {{ form_widget(form.intitule, {
                                    'attr': {
                                        'class': 'form-control rounded-3 border-light-subtle shadow-sm',
                                        'id': 'floatingIntitule',
                                        'placeholder': 'Entrez l\\'intitulé du dépôt'
                                    }
                                }) }}
                                {{ form_label(form.intitule, null, {
                                    'label_attr': {'for': 'floatingIntitule', 'class': 'text-muted'}
                                }) }}
                                {% if form_errors(form.intitule) %}
                                    <div class=\"invalid-feedback d-block mt-1\">
                                        {{ form_errors(form.intitule)|striptags }}
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        <div class=\"d-flex justify-content-end gap-3 pt-3 border-top\">
                            <a href=\"{{ path('app_depots_index') }}\" class=\"btn btn-light\">
                                <i class=\"bi bi-x-circle me-2\"></i>Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"bi bi-save me-2\"></i>Enregistrer
                            </button>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </main>
    </div>
</div>

<style>
    .form-floating > label {
        color: #6c757d;
        padding-left: 0.75rem;
    }
    .form-control:focus {
        border-color: #9ec5fe;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.2);
        background-color: #fff;
    }

    .form-control {
        background-color: #f8f9fa;
        transition: all 0.3s ease;
    }

    .form-control::placeholder {
        color: transparent;
    }

    .form-control:focus::placeholder {
        color: #adb5bd;
    }
    .card {
        border-radius: 0.5rem;
        max-width: 800px;
        margin: 0 auto;
    }
    .invalid-feedback {
        display: block;
        margin-top: 0.25rem;
        font-size: 0.875em;
        color: #dc3545;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('.needs-validation');
    
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            form.classList.add('was-validated');
        }, false);
    });
});
</script>
{% endblock %}", "depots/new&edit.html.twig", "C:\\Users\\Lenovo\\Downloads\\ERP_axia\\ProjetWeb - Copie (2)\\geex\\templates\\depots\\new&edit.html.twig");
    }
}
