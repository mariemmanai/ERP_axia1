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

/* documentslignes/new&edit.html.twig */
class __TwigTemplate_b232eb64ad5041ce9e0fa65b2a02ad7d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentslignes/new&edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentslignes/new&edit.html.twig"));

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
            yield "Ajouter";
        }
        yield " une ligne de document";
        
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
        if ((($tmp = ((array_key_exists("edit_mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 10, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Modifier la ligne";
        } else {
            yield "Ajouter une ligne";
        }
        yield "</h1>
                <div class=\"btn-toolbar mb-2 mb-md-0\">
                    ";
        // line 12
        if ((($tmp = ((array_key_exists("edit_mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 12, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "                        ";
            $context["documentId"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13), "document", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13);
            // line 14
            yield "                    ";
        }
        // line 15
        yield "                    <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documentslignes_index", ["id" => (isset($context["documentId"]) || array_key_exists("documentId", $context) ? $context["documentId"] : (function () { throw new RuntimeError('Variable "documentId" does not exist.', 15, $this->source); })())]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-secondary\">
                        <i class=\"bi bi-arrow-left me-1\"></i> Retour à la liste
                    </a>
                </div>
            </div>

            <div class=\"card shadow-sm border-0 mb-4\">
                <div class=\"card-header bg-primary text-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"bi bi-list-ul me-2\"></i>Détails de la ligne</h5>
                </div>
                <div class=\"card-body p-4\">
                    ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "article", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-select", "id" => "floatingArticle"]]);
        // line 36
        yield "
                                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "article", [], "any", false, false, false, 37), 'label', ["label_attr" => ["for" => "floatingArticle"]]);
        // line 39
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "article", [], "any", false, false, false, 41), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "qte", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "id" => "floatingQte", "placeholder" => "1"]]);
        // line 53
        yield "
                                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "qte", [], "any", false, false, false, 54), 'label', ["label_attr" => ["for" => "floatingQte"]]);
        // line 56
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "qte", [], "any", false, false, false, 58), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-4\">
                            <div class=\"form-floating\">
                                ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "prixUnitaireHt", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control", "id" => "floatingPrixUnitaire", "placeholder" => "0.00"]]);
        // line 73
        yield "
                                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "prixUnitaireHt", [], "any", false, false, false, 74), 'label', ["label_attr" => ["for" => "floatingPrixUnitaire"]]);
        // line 76
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "prixUnitaireHt", [], "any", false, false, false, 78), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-floating\">
                                ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "remise", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control", "id" => "floatingRemise", "placeholder" => "0"]]);
        // line 90
        yield "
                                ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "remise", [], "any", false, false, false, 91), 'label', ["label_attr" => ["for" => "floatingRemise"]]);
        // line 93
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "remise", [], "any", false, false, false, 95), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"bg-light p-3 rounded\">
                                <h6 class=\"mb-2\">Prix Total HT</h6>
                                <div class=\"d-flex align-items-center\">
                                    <span id=\"prixTotalDisplay\" class=\"fs-4 fw-bold\">0.00</span>
                                    <span class=\"ms-2\">€</span>
                                </div>
                                ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "prixTotalHt", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "d-none"]]);
        // line 110
        yield "
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-end gap-3 pt-3 border-top\">
                        <a href=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documentslignes_index", ["id" => (isset($context["documentId"]) || array_key_exists("documentId", $context) ? $context["documentId"] : (function () { throw new RuntimeError('Variable "documentId" does not exist.', 116, $this->source); })())]), "html", null, true);
        yield "\" class=\"btn btn-light\">
                            <i class=\"bi bi-x-circle me-2\"></i>Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"bi bi-save me-2\"></i>";
        // line 120
        if ((($tmp = ((array_key_exists("edit_mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 120, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Mettre à jour";
        } else {
            yield "Enregistrer";
        }
        // line 121
        yield "                        </button>
                    </div>

                    ";
        // line 124
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), 'form_end');
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
    @media (max-width: 768px) {
        .card-body {
            padding: 1.5rem;
        }
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
    const prixUnitaireInput = document.getElementById('floatingPrixUnitaire');
    const qteInput = document.getElementById('floatingQte');
    const remiseInput = document.getElementById('floatingRemise');
    const prixTotalInput = document.querySelector('input[name*=\"[prixTotalHt]\"]');
    const prixTotalDisplay = document.getElementById('prixTotalDisplay');
    
    function calculateTotal() {
        const prixUnitaire = parseFloat(prixUnitaireInput.value) || 0;
        const qte = parseFloat(qteInput.value) || 0;
        const remise = parseFloat(remiseInput.value) || 0;
        
        const total = (prixUnitaire * qte) * (1 - (remise / 100));
        const formattedTotal = total.toFixed(2);
                if (prixTotalInput) {
            prixTotalInput.value = formattedTotal;
        }
                if (prixTotalDisplay) {
            prixTotalDisplay.textContent = formattedTotal;
        }
    }
        if (prixUnitaireInput) prixUnitaireInput.addEventListener('input', calculateTotal);
    if (qteInput) qteInput.addEventListener('input', calculateTotal);
    if (remiseInput) remiseInput.addEventListener('input', calculateTotal);
        calculateTotal();

    // Si vous voulez pré-remplir le prix unitaire lors de la sélection d'un article
    const articleSelect = document.getElementById('floatingArticle');
    if (articleSelect) {
        articleSelect.addEventListener('change', function() {
            // Ici vous pourriez faire un appel AJAX pour récupérer le prix de l'article
            // Exemple:
            // fetch(`/api/articles/\${this.value}/price`)
            //     .then(response => response.json())
            //     .then(data => {
            //         prixUnitaireInput.value = data.price;
            //         calculateTotal();
            //     });
        });
    }
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
        return "documentslignes/new&edit.html.twig";
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
        return array (  267 => 124,  262 => 121,  256 => 120,  249 => 116,  241 => 110,  239 => 106,  225 => 95,  221 => 93,  219 => 91,  216 => 90,  214 => 84,  205 => 78,  201 => 76,  199 => 74,  196 => 73,  194 => 67,  182 => 58,  178 => 56,  176 => 54,  173 => 53,  171 => 47,  162 => 41,  158 => 39,  156 => 37,  153 => 36,  151 => 31,  143 => 26,  128 => 15,  125 => 14,  122 => 13,  120 => 12,  111 => 10,  105 => 6,  92 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% if edit_mode|default(false) %}Modifier{% else %}Ajouter{% endif %} une ligne de document{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <div class=\"row justify-content-center\">
        <main class=\"col-md-10 col-lg-8 px-md-4\">
            <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
                <h1 class=\"h2 mb-0\">{% if edit_mode|default(false) %}Modifier la ligne{% else %}Ajouter une ligne{% endif %}</h1>
                <div class=\"btn-toolbar mb-2 mb-md-0\">
                    {% if edit_mode|default(false) %}
                        {% set documentId = form.vars.value.document.id %}
                    {% endif %}
                    <a href=\"{{ path('app_documentslignes_index', {'id': documentId}) }}\" class=\"btn btn-sm btn-outline-secondary\">
                        <i class=\"bi bi-arrow-left me-1\"></i> Retour à la liste
                    </a>
                </div>
            </div>

            <div class=\"card shadow-sm border-0 mb-4\">
                <div class=\"card-header bg-primary text-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"bi bi-list-ul me-2\"></i>Détails de la ligne</h5>
                </div>
                <div class=\"card-body p-4\">
                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.article, {
                                    'attr': {
                                        'class': 'form-select',
                                        'id': 'floatingArticle'
                                    }
                                }) }}
                                {{ form_label(form.article, null, {
                                    'label_attr': {'for': 'floatingArticle'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.article)|striptags }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.qte, {
                                    'attr': {
                                        'class': 'form-control',
                                        'id': 'floatingQte',
                                        'placeholder': '1'
                                    }
                                }) }}
                                {{ form_label(form.qte, null, {
                                    'label_attr': {'for': 'floatingQte'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.qte)|striptags }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-4\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.prixUnitaireHt, {
                                    'attr': {
                                        'class': 'form-control',
                                        'id': 'floatingPrixUnitaire',
                                        'placeholder': '0.00'
                                    }
                                }) }}
                                {{ form_label(form.prixUnitaireHt, null, {
                                    'label_attr': {'for': 'floatingPrixUnitaire'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.prixUnitaireHt)|striptags }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.remise, {
                                    'attr': {
                                        'class': 'form-control',
                                        'id': 'floatingRemise',
                                        'placeholder': '0'
                                    }
                                }) }}
                                {{ form_label(form.remise, null, {
                                    'label_attr': {'for': 'floatingRemise'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.remise)|striptags }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"bg-light p-3 rounded\">
                                <h6 class=\"mb-2\">Prix Total HT</h6>
                                <div class=\"d-flex align-items-center\">
                                    <span id=\"prixTotalDisplay\" class=\"fs-4 fw-bold\">0.00</span>
                                    <span class=\"ms-2\">€</span>
                                </div>
                                {{ form_widget(form.prixTotalHt, {
                                    'attr': {
                                        'class': 'd-none'
                                    }
                                }) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-end gap-3 pt-3 border-top\">
                        <a href=\"{{ path('app_documentslignes_index', {'id': documentId}) }}\" class=\"btn btn-light\">
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
    @media (max-width: 768px) {
        .card-body {
            padding: 1.5rem;
        }
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
    const prixUnitaireInput = document.getElementById('floatingPrixUnitaire');
    const qteInput = document.getElementById('floatingQte');
    const remiseInput = document.getElementById('floatingRemise');
    const prixTotalInput = document.querySelector('input[name*=\"[prixTotalHt]\"]');
    const prixTotalDisplay = document.getElementById('prixTotalDisplay');
    
    function calculateTotal() {
        const prixUnitaire = parseFloat(prixUnitaireInput.value) || 0;
        const qte = parseFloat(qteInput.value) || 0;
        const remise = parseFloat(remiseInput.value) || 0;
        
        const total = (prixUnitaire * qte) * (1 - (remise / 100));
        const formattedTotal = total.toFixed(2);
                if (prixTotalInput) {
            prixTotalInput.value = formattedTotal;
        }
                if (prixTotalDisplay) {
            prixTotalDisplay.textContent = formattedTotal;
        }
    }
        if (prixUnitaireInput) prixUnitaireInput.addEventListener('input', calculateTotal);
    if (qteInput) qteInput.addEventListener('input', calculateTotal);
    if (remiseInput) remiseInput.addEventListener('input', calculateTotal);
        calculateTotal();

    // Si vous voulez pré-remplir le prix unitaire lors de la sélection d'un article
    const articleSelect = document.getElementById('floatingArticle');
    if (articleSelect) {
        articleSelect.addEventListener('change', function() {
            // Ici vous pourriez faire un appel AJAX pour récupérer le prix de l'article
            // Exemple:
            // fetch(`/api/articles/\${this.value}/price`)
            //     .then(response => response.json())
            //     .then(data => {
            //         prixUnitaireInput.value = data.price;
            //         calculateTotal();
            //     });
        });
    }
});
</script>
{% endblock %}", "documentslignes/new&edit.html.twig", "C:\\Users\\Lenovo\\Downloads\\ERP_axia\\ProjetWeb - Copie (2)\\geex\\templates\\documentslignes\\new&edit.html.twig");
    }
}
