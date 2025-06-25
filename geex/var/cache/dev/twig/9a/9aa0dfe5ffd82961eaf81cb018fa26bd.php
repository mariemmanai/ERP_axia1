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

/* nomenclature/new&edit.html.twig */
class __TwigTemplate_7b157b41b0757212e9cf02b760c83e48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nomenclature/new&edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nomenclature/new&edit.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        if ((($tmp = ((array_key_exists("edit_mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 3, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Modifier";
        } else {
            yield "Créer";
        }
        yield " une Nomenclature";
        
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
        <main class=\"col-md-10 px-md-4\">
            <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
                <h1 class=\"h2 mb-0\">";
        // line 10
        if ((($tmp = ((array_key_exists("edit_mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 10, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Modifier la nomenclature";
        } else {
            yield "Créer une nomenclature";
        }
        yield "</h1>
                <div class=\"btn-toolbar mb-2 mb-md-0\">
                    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nomenclature_index");
        yield "\" class=\"btn btn-sm btn-outline-secondary\">
                        <i class=\"bi bi-arrow-left me-1\"></i> Retour à la liste
                    </a>
                </div>
            </div>

            <div class=\"card shadow-sm border-0 mb-4\">
                <div class=\"card-header bg-primary text-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"bi bi-diagram-3 me-2\"></i>Détails de la nomenclature</h5>
                </div>
                <div class=\"card-body p-4\">
                    ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "produit", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-select", "id" => "floatingProduit"]]);
        // line 33
        yield "
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "produit", [], "any", false, false, false, 34), 'label', ["label_attr" => ["for" => "floatingProduit"]]);
        // line 36
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "produit", [], "any", false, false, false, 38), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "consommation", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "id" => "floatingConsommation", "placeholder" => "0.00"]]);
        // line 50
        yield "
                                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "consommation", [], "any", false, false, false, 51), 'label', ["label_attr" => ["for" => "floatingConsommation"]]);
        // line 53
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "consommation", [], "any", false, false, false, 55), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-12\">
                            <div class=\"form-floating\">
                                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "matieres", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-select", "id" => "floatingMatieres", "multiple" => "multiple"]]);
        // line 70
        yield "
                                ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "matieres", [], "any", false, false, false, 71), 'label', ["label_attr" => ["for" => "floatingMatieres"]]);
        // line 73
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "matieres", [], "any", false, false, false, 75), 'errors')), "html", null, true);
        yield "
                                </div>
                                <small class=\"text-muted\">Maintenez Ctrl (Windows) ou Cmd (Mac) pour sélectionner plusieurs matières</small>
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-end gap-3 pt-3 border-top\">
                        <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nomenclature_index");
        yield "\" class=\"btn btn-light\">
                            <i class=\"bi bi-x-circle me-2\"></i>Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"bi bi-save me-2\"></i>";
        // line 87
        if ((($tmp = ((array_key_exists("edit_mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 87, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Mettre à jour";
        } else {
            yield "Enregistrer";
        }
        // line 88
        yield "                        </button>
                    </div>

                    ";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </main>
    </div>
</div>

<style>
    .form-floating > label {
        color: #6c757d;
    }
    .form-select:focus, 
    .form-select:valid,
    .form-control:focus,
    .form-control:valid {
        border-color: #86b7fe;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
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
    .card-body {
        padding: 2rem;
    }
    @media (max-width: 100%) {
        .card-body {
            padding: 1.5rem;
        }
    }
    select[multiple] {
        height: auto;
        min-height: 120px;
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
        return "nomenclature/new&edit.html.twig";
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
        return array (  225 => 91,  220 => 88,  214 => 87,  207 => 83,  196 => 75,  192 => 73,  190 => 71,  187 => 70,  185 => 64,  173 => 55,  169 => 53,  167 => 51,  164 => 50,  162 => 44,  153 => 38,  149 => 36,  147 => 34,  144 => 33,  142 => 28,  134 => 23,  120 => 12,  111 => 10,  105 => 6,  92 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% if edit_mode|default(false) %}Modifier{% else %}Créer{% endif %} une Nomenclature{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <div class=\"row justify-content-center\">
        <main class=\"col-md-10 px-md-4\">
            <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
                <h1 class=\"h2 mb-0\">{% if edit_mode|default(false) %}Modifier la nomenclature{% else %}Créer une nomenclature{% endif %}</h1>
                <div class=\"btn-toolbar mb-2 mb-md-0\">
                    <a href=\"{{ path('app_nomenclature_index') }}\" class=\"btn btn-sm btn-outline-secondary\">
                        <i class=\"bi bi-arrow-left me-1\"></i> Retour à la liste
                    </a>
                </div>
            </div>

            <div class=\"card shadow-sm border-0 mb-4\">
                <div class=\"card-header bg-primary text-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"bi bi-diagram-3 me-2\"></i>Détails de la nomenclature</h5>
                </div>
                <div class=\"card-body p-4\">
                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.produit, {
                                    'attr': {
                                        'class': 'form-select',
                                        'id': 'floatingProduit'
                                    }
                                }) }}
                                {{ form_label(form.produit, null, {
                                    'label_attr': {'for': 'floatingProduit'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.produit)|striptags }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.consommation, {
                                    'attr': {
                                        'class': 'form-control',
                                        'id': 'floatingConsommation',
                                        'placeholder': '0.00'
                                    }
                                }) }}
                                {{ form_label(form.consommation, null, {
                                    'label_attr': {'for': 'floatingConsommation'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.consommation)|striptags }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-12\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.matieres, {
                                    'attr': {
                                        'class': 'form-select',
                                        'id': 'floatingMatieres',
                                        'multiple': 'multiple'
                                    }
                                }) }}
                                {{ form_label(form.matieres, null, {
                                    'label_attr': {'for': 'floatingMatieres'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.matieres)|striptags }}
                                </div>
                                <small class=\"text-muted\">Maintenez Ctrl (Windows) ou Cmd (Mac) pour sélectionner plusieurs matières</small>
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-end gap-3 pt-3 border-top\">
                        <a href=\"{{ path('app_nomenclature_index') }}\" class=\"btn btn-light\">
                            <i class=\"bi bi-x-circle me-2\"></i>Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"bi bi-save me-2\"></i>{% if edit_mode|default(false) %}Mettre à jour{% else %}Enregistrer{% endif %}
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
    }
    .form-select:focus, 
    .form-select:valid,
    .form-control:focus,
    .form-control:valid {
        border-color: #86b7fe;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
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
    .card-body {
        padding: 2rem;
    }
    @media (max-width: 100%) {
        .card-body {
            padding: 1.5rem;
        }
    }
    select[multiple] {
        height: auto;
        min-height: 120px;
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
{% endblock %}", "nomenclature/new&edit.html.twig", "C:\\Users\\Lenovo\\Downloads\\ERP_axia\\ProjetWeb - Copie (2)\\geex\\templates\\nomenclature\\new&edit.html.twig");
    }
}
