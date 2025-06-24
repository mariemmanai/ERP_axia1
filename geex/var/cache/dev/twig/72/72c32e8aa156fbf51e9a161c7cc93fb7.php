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

/* stock/index.html.twig */
class __TwigTemplate_db2901d36e20f1ba4a2039998abc56ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stock/index.html.twig", 1);
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

        yield "Gestion des stocks";
        
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
        .stock-list {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid #eaeaea;
        }
        
        .stock-list-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .stock-list-header h1 {
            color: #2c3e50;
            font-weight: 600;
            margin: 0;
            font-size: 1.5rem;
        }
        
        .stock-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 0.75rem;
        }
        
        .stock-table th {
            color: #7f8c8d;
            font-weight: 500;
            text-align: left;
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
        }
        
        .stock-table td {
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
        }
        
        .action-icons {
            display: flex;
            gap: 0.75rem;
        }
        
        .action-icon {
            color: #64748b;
            font-size: 1.1rem;
            transition: all 0.2s ease;
            padding: 0.5rem;
            border-radius: 6px;
            background: #f1f5f9;
            cursor: pointer;
        }
        
        .action-icon:hover {
            transform: translateY(-2px);
        }
        
        .action-icon.view:hover {
            color: #10b981;
            background: #d1fae5;
        }
        
        .action-icon.edit:hover {
            color: #f59e0b;
            background: #fef3c7;
        }
        
        .action-icon.delete:hover {
            color: #ef4444;
            background: #fee2e2;
        }
        
        
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 107
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

        // line 108
        yield "    <div class=\"stock-list\">
        <div class=\"stock-list-header\">
            <h1>Gestion des stocks</h1>
            <a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_new");
        yield "\" class=\"btn-new\">
                <i class=\"uil uil-plus\"></i> Nouveau stock
            </a>
        </div>

        <table class=\"stock-table\">
            <thead>
                <tr>
                    <th>Article</th>
                    <th>Dépôt</th>
                    <th>Date entrée</th>
                    <th>Stock principal</th>
                    <th>Stock dispo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stocks"]) || array_key_exists("stocks", $context) ? $context["stocks"] : (function () { throw new RuntimeError('Variable "stocks" does not exist.', 128, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 129
            yield "                <tr>
                    <td>
                        <div class=\"d-flex flex-column\">
                            <span class=\"fw-bold\">";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "article", [], "any", false, false, false, 132), "reference", [], "any", false, false, false, 132), "html", null, true);
            yield "</span>
                            <span class=\"text-muted small\">";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "article", [], "any", false, false, false, 133), "type", [], "any", false, false, false, 133), "html", null, true);
            yield "</span>
                        </div>
                    </td>
                    <td>";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "depot", [], "any", false, false, false, 136), "intitule", [], "any", false, false, false, 136), "html", null, true);
            yield "</td>
                    <td>";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "dateEntree", [], "any", false, false, false, 137), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                    <td>
                        <span class=\"me-1\">";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "qteStockPrincipal", [], "any", false, false, false, 139), "html", null, true);
            yield "</span>
                        <span class=\"unit-badge\">";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "article", [], "any", false, false, false, 140), "unite", [], "any", false, false, false, 140), "html", null, true);
            yield "</span>
                    </td>
                    <td>
                        <span class=\"me-1\">";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "qteStockDispo", [], "any", false, false, false, 143), "html", null, true);
            yield "</span>
                        <span class=\"unit-badge\">";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "article", [], "any", false, false, false, 144), "unite", [], "any", false, false, false, 144), "html", null, true);
            yield "</span>
                    </td>
                    <td>
                        <div class=\"action-icons\">
                            
                            <a href=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "id", [], "any", false, false, false, 149)]), "html", null, true);
            yield "\" class=\"action-icon edit\" title=\"Modifier\">
                                <i class=\"uil uil-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "id", [], "any", false, false, false, 152)]), "html", null, true);
            yield "\" onsubmit=\"return confirmDelete()\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "id", [], "any", false, false, false, 153))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"action-icon delete\" title=\"Supprimer\">
                                    <i class=\"uil uil-trash-alt\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 161
        if (!$context['_iterated']) {
            // line 162
            yield "                <tr>
                    <td colspan=\"6\">Aucun stock enregistré</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stock'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 171
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

        // line 172
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
        return "stock/index.html.twig";
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
        return array (  364 => 172,  351 => 171,  337 => 166,  328 => 162,  326 => 161,  313 => 153,  309 => 152,  303 => 149,  295 => 144,  291 => 143,  285 => 140,  281 => 139,  276 => 137,  272 => 136,  266 => 133,  262 => 132,  257 => 129,  252 => 128,  232 => 111,  227 => 108,  214 => 107,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des stocks{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .stock-list {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid #eaeaea;
        }
        
        .stock-list-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .stock-list-header h1 {
            color: #2c3e50;
            font-weight: 600;
            margin: 0;
            font-size: 1.5rem;
        }
        
        .stock-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 0.75rem;
        }
        
        .stock-table th {
            color: #7f8c8d;
            font-weight: 500;
            text-align: left;
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
        }
        
        .stock-table td {
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
        }
        
        .action-icons {
            display: flex;
            gap: 0.75rem;
        }
        
        .action-icon {
            color: #64748b;
            font-size: 1.1rem;
            transition: all 0.2s ease;
            padding: 0.5rem;
            border-radius: 6px;
            background: #f1f5f9;
            cursor: pointer;
        }
        
        .action-icon:hover {
            transform: translateY(-2px);
        }
        
        .action-icon.view:hover {
            color: #10b981;
            background: #d1fae5;
        }
        
        .action-icon.edit:hover {
            color: #f59e0b;
            background: #fef3c7;
        }
        
        .action-icon.delete:hover {
            color: #ef4444;
            background: #fee2e2;
        }
        
        
    </style>
{% endblock %}

{% block body %}
    <div class=\"stock-list\">
        <div class=\"stock-list-header\">
            <h1>Gestion des stocks</h1>
            <a href=\"{{ path('app_stock_new') }}\" class=\"btn-new\">
                <i class=\"uil uil-plus\"></i> Nouveau stock
            </a>
        </div>

        <table class=\"stock-table\">
            <thead>
                <tr>
                    <th>Article</th>
                    <th>Dépôt</th>
                    <th>Date entrée</th>
                    <th>Stock principal</th>
                    <th>Stock dispo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for stock in stocks %}
                <tr>
                    <td>
                        <div class=\"d-flex flex-column\">
                            <span class=\"fw-bold\">{{ stock.article.reference }}</span>
                            <span class=\"text-muted small\">{{ stock.article.type }}</span>
                        </div>
                    </td>
                    <td>{{ stock.depot.intitule }}</td>
                    <td>{{ stock.dateEntree|date('d/m/Y H:i') }}</td>
                    <td>
                        <span class=\"me-1\">{{ stock.qteStockPrincipal }}</span>
                        <span class=\"unit-badge\">{{ stock.article.unite }}</span>
                    </td>
                    <td>
                        <span class=\"me-1\">{{ stock.qteStockDispo }}</span>
                        <span class=\"unit-badge\">{{ stock.article.unite }}</span>
                    </td>
                    <td>
                        <div class=\"action-icons\">
                            
                            <a href=\"{{ path('app_stock_edit', {'id': stock.id}) }}\" class=\"action-icon edit\" title=\"Modifier\">
                                <i class=\"uil uil-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path('app_stock_delete', {'id': stock.id}) }}\" onsubmit=\"return confirmDelete()\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ stock.id) }}\">
                                <button type=\"submit\" class=\"action-icon delete\" title=\"Supprimer\">
                                    <i class=\"uil uil-trash-alt\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                {% else %}
                <tr>
                    <td colspan=\"6\">Aucun stock enregistré</td>
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
{% endblock %}", "stock/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\ERP_axia\\ProjetWeb - Copie (2)\\geex\\templates\\stock\\index.html.twig");
    }
}
