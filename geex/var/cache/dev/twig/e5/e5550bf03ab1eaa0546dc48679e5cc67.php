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

/* documents/index.html.twig */
class __TwigTemplate_abcb41bdf090219269ca9a5e1d208be0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/index.html.twig"));

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

        yield "Liste des documents";
        
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
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 150
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

        // line 151
        yield "    <div class=\"document-list\">
        <div class=\"document-list-header\">
            <h1>Liste des documents</h1>
            <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_new");
        yield "\" class=\"btn-new\">
                <i class=\"uil uil-plus\"></i> Nouveau document
            </a>
        </div>

        <table class=\"document-table\">
            <thead>
                <tr>
                    <th>Référence</th>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Statut</th>
                    <th>Montant HT</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 171, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 172
            yield "                <tr>
                    <td>
                        <div class=\"d-flex flex-column\">
                            <span class=\"fw-bold\">";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "reference", [], "any", false, false, false, 175), "html", null, true);
            yield "</span>
                            <span class=\"text-muted small\">
                                ";
            // line 177
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["document"], "emetteur", [], "any", false, false, false, 177)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 178
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["document"], "emetteur", [], "any", false, false, false, 178), "username", [], "any", false, false, false, 178), "html", null, true);
                yield "
                                ";
            }
            // line 180
            yield "                            </span>
                        </div>
                    </td>
                    <td>";
            // line 183
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["document"], "docDate", [], "any", false, false, false, 183)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "docDate", [], "any", false, false, false, 183), "d/m/Y"), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "type", [], "any", false, false, false, 184), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 186
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["document"], "status", [], "any", false, false, false, 186) == "Confirmer")) {
                // line 187
                yield "                            <span class=\"badge badge-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "status", [], "any", false, false, false, 187), "html", null, true);
                yield "</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 188
$context["document"], "status", [], "any", false, false, false, 188) == "Ouvert")) {
                // line 189
                yield "                            <span class=\"badge badge-warning\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "status", [], "any", false, false, false, 189), "html", null, true);
                yield "</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 190
$context["document"], "status", [], "any", false, false, false, 190) == "Cloturée")) {
                // line 191
                yield "                            <span class=\"badge badge-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "status", [], "any", false, false, false, 191), "html", null, true);
                yield "</span>
                        ";
            } else {
                // line 193
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "status", [], "any", false, false, false, 193), "html", null, true);
                yield "
                        ";
            }
            // line 195
            yield "                    </td>
                    <td>";
            // line 196
            yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["document"], "montantHt", [], "any", false, false, false, 196))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "montantHt", [], "any", false, false, false, 196), 2, ",", " ") . " €"), "html", null, true)) : ("-"));
            yield "</td>
                    <td>
                        <div class=\"action-buttons\">
                            <a href=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 199)]), "html", null, true);
            yield "\" class=\"btn-sm btn-info\" title=\"Voir\">
                                <i class=\"uil uil-eye\"></i>
                            </a>
                            <a href=\"";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 202)]), "html", null, true);
            yield "\" class=\"btn-sm btn-warning\" title=\"Modifier\">
                                <i class=\"uil uil-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 205)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce document ?')\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 206))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn-sm btn-danger\" title=\"Supprimer\">
                                    <i class=\"uil uil-trash-alt\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 214
        if (!$context['_iterated']) {
            // line 215
            yield "                <tr>
                    <td colspan=\"6\">Aucun document trouvé</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['document'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        yield "            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 225
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

        // line 226
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        function confirmDelete() {
            return confirm('Êtes-vous sûr de vouloir supprimer ce stock ? Cette action est irréversible.');
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
        return "documents/index.html.twig";
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
        return array (  436 => 226,  423 => 225,  409 => 219,  400 => 215,  398 => 214,  385 => 206,  381 => 205,  375 => 202,  369 => 199,  363 => 196,  360 => 195,  354 => 193,  348 => 191,  346 => 190,  341 => 189,  339 => 188,  334 => 187,  332 => 186,  327 => 184,  323 => 183,  318 => 180,  312 => 178,  310 => 177,  305 => 175,  300 => 172,  295 => 171,  275 => 154,  270 => 151,  257 => 150,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des documents{% endblock %}

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
    </style>
{% endblock %}

{% block body %}
    <div class=\"document-list\">
        <div class=\"document-list-header\">
            <h1>Liste des documents</h1>
            <a href=\"{{ path('app_documents_new') }}\" class=\"btn-new\">
                <i class=\"uil uil-plus\"></i> Nouveau document
            </a>
        </div>

        <table class=\"document-table\">
            <thead>
                <tr>
                    <th>Référence</th>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Statut</th>
                    <th>Montant HT</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for document in documents %}
                <tr>
                    <td>
                        <div class=\"d-flex flex-column\">
                            <span class=\"fw-bold\">{{ document.reference }}</span>
                            <span class=\"text-muted small\">
                                {% if document.emetteur %}
                                    {{ document.emetteur.username }}
                                {% endif %}
                            </span>
                        </div>
                    </td>
                    <td>{{ document.docDate ? document.docDate|date('d/m/Y') : '' }}</td>
                    <td>{{ document.type }}</td>
                    <td>
                        {% if document.status == 'Confirmer' %}
                            <span class=\"badge badge-success\">{{ document.status }}</span>
                        {% elseif document.status == 'Ouvert' %}
                            <span class=\"badge badge-warning\">{{ document.status }}</span>
                        {% elseif document.status == 'Cloturée' %}
                            <span class=\"badge badge-danger\">{{ document.status }}</span>
                        {% else %}
                            {{ document.status }}
                        {% endif %}
                    </td>
                    <td>{{ document.montantHt is not null ? document.montantHt|number_format(2, ',', ' ') ~ ' €' : '-' }}</td>
                    <td>
                        <div class=\"action-buttons\">
                            <a href=\"{{ path('app_documents_show', {'id': document.id}) }}\" class=\"btn-sm btn-info\" title=\"Voir\">
                                <i class=\"uil uil-eye\"></i>
                            </a>
                            <a href=\"{{ path('app_documents_edit', {'id': document.id}) }}\" class=\"btn-sm btn-warning\" title=\"Modifier\">
                                <i class=\"uil uil-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path('app_documents_delete', {'id': document.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce document ?')\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ document.id) }}\">
                                <button type=\"submit\" class=\"btn-sm btn-danger\" title=\"Supprimer\">
                                    <i class=\"uil uil-trash-alt\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"6\">Aucun document trouvé</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}


{% block javascripts %}
    {{ parent() }}
    <script>
        function confirmDelete() {
            return confirm('Êtes-vous sûr de vouloir supprimer ce stock ? Cette action est irréversible.');
        }
    </script>
{% endblock %}", "documents/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\ERP_axia\\ProjetWeb - Copie (2)\\geex\\templates\\documents\\index.html.twig");
    }
}
