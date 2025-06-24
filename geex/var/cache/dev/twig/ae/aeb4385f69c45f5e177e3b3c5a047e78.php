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

/* stock/new&edit.html.twig */
class __TwigTemplate_469a85ef3495931bfdedf9ca34a985ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/new&edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/new&edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stock/new&edit.html.twig", 1);
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

        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)) {
            yield "Modifier";
        } else {
            yield "Nouveau";
        }
        yield " Stock";
        
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
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)) {
            yield "Modifier le stock";
        } else {
            yield "Ajouter un nouveau stock";
        }
        yield "</h1>
                <div class=\"btn-toolbar mb-2 mb-md-0\">
                    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_index");
        yield "\" class=\"btn btn-sm btn-outline-secondary\">
                        <i class=\"bi bi-arrow-left me-1\"></i> Retour à la liste
                    </a>
                </div>
            </div>

            <div class=\"card shadow-sm border-0 mb-4\">
                <div class=\"card-header bg-primary text-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"bi bi-box-seam me-2\"></i>Informations du stock</h5>
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "article", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-select", "id" => "floatingArticle"]]);
        // line 33
        yield "
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "article", [], "any", false, false, false, 34), 'label', ["label_attr" => ["for" => "floatingArticle"]]);
        // line 36
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "article", [], "any", false, false, false, 38), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "depot", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-select", "id" => "floatingDepot"]]);
        // line 49
        yield "
                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "depot", [], "any", false, false, false, 50), 'label', ["label_attr" => ["for" => "floatingDepot"]]);
        // line 52
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "depot", [], "any", false, false, false, 54), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "qteStockPrincipal", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control", "id" => "floatingStockPrincipal", "placeholder" => "0.00"]]);
        // line 68
        yield "
                                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "qteStockPrincipal", [], "any", false, false, false, 69), 'label', ["label_attr" => ["for" => "floatingStockPrincipal"]]);
        // line 71
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "qteStockPrincipal", [], "any", false, false, false, 73), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "qteStockDispo", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control", "id" => "floatingStockDispo", "placeholder" => "0.00"]]);
        // line 85
        yield "
                                ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "qteStockDispo", [], "any", false, false, false, 86), 'label', ["label_attr" => ["for" => "floatingStockDispo"]]);
        // line 88
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "qteStockDispo", [], "any", false, false, false, 90), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-end gap-3 pt-3 border-top\">
                        <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_index");
        yield "\" class=\"btn btn-light\">
                            <i class=\"bi bi-x-circle me-2\"></i>Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"bi bi-save me-2\"></i>Enregistrer
                        </button>
                    </div>

                    ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_end');
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

    const articleSelect = document.getElementById('floatingArticle');
    const stockPrincipalInput = document.getElementById('floatingStockPrincipal');
    const stockDispoInput = document.getElementById('floatingStockDispo');
    
    if (articleSelect) {
        articleSelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            if (selectedOption) {
                const unit = selectedOption.text.match(/\\(([^)]+)\\)/)?.[1] || '';
                stockPrincipalInput.placeholder = '0.00 ' + unit;
                stockDispoInput.placeholder = '0.00 ' + unit;
            }
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
        return "stock/new&edit.html.twig";
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
        return array (  235 => 104,  224 => 96,  215 => 90,  211 => 88,  209 => 86,  206 => 85,  204 => 79,  195 => 73,  191 => 71,  189 => 69,  186 => 68,  184 => 62,  173 => 54,  169 => 52,  167 => 50,  164 => 49,  162 => 44,  153 => 38,  149 => 36,  147 => 34,  144 => 33,  142 => 28,  134 => 23,  120 => 12,  111 => 10,  105 => 6,  92 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% if stock.id %}Modifier{% else %}Nouveau{% endif %} Stock{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <div class=\"row justify-content-center\">
        <main class=\"col-md-10 col-lg-8 px-md-4\">
            <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
                <h1 class=\"h2 mb-0\">{% if stock.id %}Modifier le stock{% else %}Ajouter un nouveau stock{% endif %}</h1>
                <div class=\"btn-toolbar mb-2 mb-md-0\">
                    <a href=\"{{ path('app_stock_index') }}\" class=\"btn btn-sm btn-outline-secondary\">
                        <i class=\"bi bi-arrow-left me-1\"></i> Retour à la liste
                    </a>
                </div>
            </div>

            <div class=\"card shadow-sm border-0 mb-4\">
                <div class=\"card-header bg-primary text-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"bi bi-box-seam me-2\"></i>Informations du stock</h5>
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
                                {{ form_widget(form.depot, {
                                    'attr': {
                                        'class': 'form-select',
                                        'id': 'floatingDepot'
                                    }
                                }) }}
                                {{ form_label(form.depot, null, {
                                    'label_attr': {'for': 'floatingDepot'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.depot)|striptags }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.qteStockPrincipal, {
                                    'attr': {
                                        'class': 'form-control',
                                        'id': 'floatingStockPrincipal',
                                        'placeholder': '0.00'
                                    }
                                }) }}
                                {{ form_label(form.qteStockPrincipal, null, {
                                    'label_attr': {'for': 'floatingStockPrincipal'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.qteStockPrincipal)|striptags }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.qteStockDispo, {
                                    'attr': {
                                        'class': 'form-control',
                                        'id': 'floatingStockDispo',
                                        'placeholder': '0.00'
                                    }
                                }) }}
                                {{ form_label(form.qteStockDispo, null, {
                                    'label_attr': {'for': 'floatingStockDispo'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.qteStockDispo)|striptags }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-end gap-3 pt-3 border-top\">
                        <a href=\"{{ path('app_stock_index') }}\" class=\"btn btn-light\">
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

    const articleSelect = document.getElementById('floatingArticle');
    const stockPrincipalInput = document.getElementById('floatingStockPrincipal');
    const stockDispoInput = document.getElementById('floatingStockDispo');
    
    if (articleSelect) {
        articleSelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            if (selectedOption) {
                const unit = selectedOption.text.match(/\\(([^)]+)\\)/)?.[1] || '';
                stockPrincipalInput.placeholder = '0.00 ' + unit;
                stockDispoInput.placeholder = '0.00 ' + unit;
            }
        });
    }
});
</script>
{% endblock %}", "stock/new&edit.html.twig", "C:\\Users\\Lenovo\\Downloads\\ERP_axia\\ProjetWeb - Copie (2)\\geex\\templates\\stock\\new&edit.html.twig");
    }
}
