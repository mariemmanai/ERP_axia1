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

/* documentslignes/index.html.twig */
class __TwigTemplate_09268e60c605820d0912ad2b3fcd47f6 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentslignes/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentslignes/index.html.twig"));

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

        yield "Lignes du Document";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .document-list {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid #eaeaea;
        }
        
        .document-list-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .document-list-header h1 {
            color: #2c3e50;
            font-weight: 600;
            margin: 0;
            font-size: 1.5rem;
        }
        
        .document-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 0.75rem;
        }
        
        .document-table th {
            color: #7f8c8d;
            font-weight: 500;
            text-align: left;
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
        }
        
        .document-table td {
            background: #f8fafc;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            font-weight: 500;
            color: #2c3e50;
            font-size: 0.95rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.03);
        }
        
        .btn-new {
            padding: 0.6rem 1.25rem;
            border-radius: 8px;
            background-color: #3b82f6;
            color: white;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        
        .btn-new:hover {
            background-color: #2563eb;
            transform: translateY(-1px);
        }
        
        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }
        
        .btn-sm {
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            font-size: 0.85rem;
            transition: all 0.2s ease;
        }
        
        .btn-info {
            background-color: #0ea5e9;
            color: white;
        }
        
        .btn-info:hover {
            background-color: #0284c7;
            transform: translateY(-1px);
        }
        
        .btn-warning {
            background-color: #f59e0b;
            color: white;
        }
        
        .btn-warning:hover {
            background-color: #d97706;
            transform: translateY(-1px);
        }
        
        .btn-danger {
            background-color: #ef4444;
            color: white;
        }
        
        .btn-danger:hover {
            background-color: #dc2626;
            transform: translateY(-1px);
        }
        
        .text-muted {
            color: #64748b;
        }
        
        .badge {
            display: inline-block;
            padding: 0.25em 0.4em;
            font-size: 75%;
            font-weight: 500;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
        }
        
        .badge-success {
            background-color: #10b981;
            color: white;
        }
        
        .badge-warning {
            background-color: #f59e0b;
            color: white;
        }
        
        .badge-danger {
            background-color: #ef4444;
            color: white;
        }
        
        .btn-secondary {
            background-color: #64748b;
            color: white;
        }
        
        .btn-secondary:hover {
            background-color: #475569;
            transform: translateY(-1px);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 160
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

        // line 161
        yield "    <div class=\"document-list\">
        <div class=\"document-list-header\">
            <h1>Lignes du Document ";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 163, $this->source); })()), "reference", [], "any", false, false, false, 163), "html", null, true);
        yield "</h1>
            <a href=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documentslignes_new", ["documentId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 164, $this->source); })()), "id", [], "any", false, false, false, 164)]), "html", null, true);
        yield "\" class=\"btn-new\">
                <i class=\"uil uil-plus\"></i> Ajouter une ligne
            </a>
        </div>

        <table class=\"document-table\">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Référence</th>
                    <th>Quantité</th>
                    <th>Prix unitaire HT</th>
                    <th>Remise (%)</th>
                    <th>Prix total HT</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 182, $this->source); })()), "lignes", [], "any", false, false, false, 182));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 183
            yield "                <tr>
                    <td>";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "article", [], "any", false, false, false, 184), "type", [], "any", false, false, false, 184), "html", null, true);
            yield "</td>
                    <td>";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "article", [], "any", false, false, false, 185), "reference", [], "any", false, false, false, 185), "html", null, true);
            yield "</td>
                    <td>";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "qte", [], "any", false, false, false, 186), "html", null, true);
            yield "</td>
                    <td>";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "prixUnitaireHt", [], "any", false, false, false, 187), 2, ",", " "), "html", null, true);
            yield " €</td>
                    <td>";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "remise", [], "any", false, false, false, 188), 2, ",", " "), "html", null, true);
            yield "</td>
                    <td>";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "prixTotalHt", [], "any", false, false, false, 189), 2, ",", " "), "html", null, true);
            yield " €</td>
                    <td>
                        <div class=\"action-buttons\">
                            <a href=\"";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documentslignes_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "id", [], "any", false, false, false, 192)]), "html", null, true);
            yield "\" class=\"btn-sm btn-info\" title=\"Voir\">
                                <i class=\"uil uil-eye\"></i>
                            </a>
                            <a href=\"";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documentslignes_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "id", [], "any", false, false, false, 195)]), "html", null, true);
            yield "\" class=\"btn-sm btn-warning\" title=\"Modifier\">
                                <i class=\"uil uil-edit\"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 201
        if (!$context['_iterated']) {
            // line 202
            yield "                <tr>
                    <td colspan=\"7\">Aucune ligne trouvée</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ligne'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        yield "                        </tbody>
                    </table>

                    <div class=\"mt-3\">
                        <a href=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 210, $this->source); })()), "id", [], "any", false, false, false, 210)]), "html", null, true);
        yield "\" class=\"btn-secondary btn-sm\">
                            <i class=\"uil uil-arrow-left\"></i> Retour au document
                        </a>
                    </div>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 217
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 218
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        function confirmDelete() {
            return confirm('Êtes-vous sûr de vouloir supprimer cette ligne ? Cette action est irréversible.');
        }
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
        return "documentslignes/index.html.twig";
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
        return array (  407 => 218,  394 => 217,  377 => 210,  371 => 206,  362 => 202,  360 => 201,  349 => 195,  343 => 192,  337 => 189,  333 => 188,  329 => 187,  325 => 186,  321 => 185,  317 => 184,  314 => 183,  309 => 182,  288 => 164,  284 => 163,  280 => 161,  267 => 160,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Lignes du Document{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .document-list {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid #eaeaea;
        }
        
        .document-list-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .document-list-header h1 {
            color: #2c3e50;
            font-weight: 600;
            margin: 0;
            font-size: 1.5rem;
        }
        
        .document-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 0.75rem;
        }
        
        .document-table th {
            color: #7f8c8d;
            font-weight: 500;
            text-align: left;
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
        }
        
        .document-table td {
            background: #f8fafc;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            font-weight: 500;
            color: #2c3e50;
            font-size: 0.95rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.03);
        }
        
        .btn-new {
            padding: 0.6rem 1.25rem;
            border-radius: 8px;
            background-color: #3b82f6;
            color: white;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        
        .btn-new:hover {
            background-color: #2563eb;
            transform: translateY(-1px);
        }
        
        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }
        
        .btn-sm {
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            font-size: 0.85rem;
            transition: all 0.2s ease;
        }
        
        .btn-info {
            background-color: #0ea5e9;
            color: white;
        }
        
        .btn-info:hover {
            background-color: #0284c7;
            transform: translateY(-1px);
        }
        
        .btn-warning {
            background-color: #f59e0b;
            color: white;
        }
        
        .btn-warning:hover {
            background-color: #d97706;
            transform: translateY(-1px);
        }
        
        .btn-danger {
            background-color: #ef4444;
            color: white;
        }
        
        .btn-danger:hover {
            background-color: #dc2626;
            transform: translateY(-1px);
        }
        
        .text-muted {
            color: #64748b;
        }
        
        .badge {
            display: inline-block;
            padding: 0.25em 0.4em;
            font-size: 75%;
            font-weight: 500;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
        }
        
        .badge-success {
            background-color: #10b981;
            color: white;
        }
        
        .badge-warning {
            background-color: #f59e0b;
            color: white;
        }
        
        .badge-danger {
            background-color: #ef4444;
            color: white;
        }
        
        .btn-secondary {
            background-color: #64748b;
            color: white;
        }
        
        .btn-secondary:hover {
            background-color: #475569;
            transform: translateY(-1px);
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"document-list\">
        <div class=\"document-list-header\">
            <h1>Lignes du Document {{ document.reference }}</h1>
            <a href=\"{{ path('app_documentslignes_new', {'documentId': document.id}) }}\" class=\"btn-new\">
                <i class=\"uil uil-plus\"></i> Ajouter une ligne
            </a>
        </div>

        <table class=\"document-table\">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Référence</th>
                    <th>Quantité</th>
                    <th>Prix unitaire HT</th>
                    <th>Remise (%)</th>
                    <th>Prix total HT</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for ligne in document.lignes %}
                <tr>
                    <td>{{ ligne.article.type }}</td>
                    <td>{{ ligne.article.reference }}</td>
                    <td>{{ ligne.qte }}</td>
                    <td>{{ ligne.prixUnitaireHt|number_format(2, ',', ' ') }} €</td>
                    <td>{{ ligne.remise|number_format(2, ',', ' ') }}</td>
                    <td>{{ ligne.prixTotalHt|number_format(2, ',', ' ') }} €</td>
                    <td>
                        <div class=\"action-buttons\">
                            <a href=\"{{ path('app_documentslignes_show', {'id': ligne.id}) }}\" class=\"btn-sm btn-info\" title=\"Voir\">
                                <i class=\"uil uil-eye\"></i>
                            </a>
                            <a href=\"{{ path('app_documentslignes_edit', {'id': ligne.id}) }}\" class=\"btn-sm btn-warning\" title=\"Modifier\">
                                <i class=\"uil uil-edit\"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"7\">Aucune ligne trouvée</td>
                </tr>
            {% endfor %}
                        </tbody>
                    </table>

                    <div class=\"mt-3\">
                        <a href=\"{{ path('app_documents_show', {'id': document.id}) }}\" class=\"btn-secondary btn-sm\">
                            <i class=\"uil uil-arrow-left\"></i> Retour au document
                        </a>
                    </div>
                </div>
            {% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        function confirmDelete() {
            return confirm('Êtes-vous sûr de vouloir supprimer cette ligne ? Cette action est irréversible.');
        }
    </script>
{% endblock %}", "documentslignes/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\ERP_axia\\ProjetWeb - Copie (2)\\geex\\templates\\documentslignes\\index.html.twig");
    }
}
