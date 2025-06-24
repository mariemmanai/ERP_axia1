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

/* depots/index.html.twig */
class __TwigTemplate_7146219702d4778f002bb59c7e20cf63 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depots/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depots/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "depots/index.html.twig", 1);
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

        yield "Liste des Dépôts";
        
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
        .depot-list {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid #eaeaea;
        }
        
        .depot-list-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .depot-list-header h1 {
            color: #2c3e50;
            font-weight: 600;
            margin: 0;
            font-size: 1.5rem;
        }
        
        .depot-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 0.75rem;
        }
        
        .depot-table th {
            color: #7f8c8d;
            font-weight: 500;
            text-align: left;
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
        }
        
        .depot-table td {
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

    // line 105
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

        // line 106
        yield "    <div class=\"depot-list\">
        <div class=\"depot-list-header\">
            <h1>Liste des Dépôts</h1>
            <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depots_new");
        yield "\" class=\"btn-new\">
                <i class=\"uil uil-plus\"></i> Nouveau dépôt
            </a>
        </div>

        <table class=\"depot-table\">
            <thead>
                <tr>
                    <th>Intitulé</th>
                    <th>Créé le</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["depots"]) || array_key_exists("depots", $context) ? $context["depots"] : (function () { throw new RuntimeError('Variable "depots" does not exist.', 123, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["depot"]) {
            // line 124
            yield "                <tr>
                    <td>";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "intitule", [], "any", false, false, false, 125), "html", null, true);
            yield "</td>
                    <td>";
            // line 126
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "createAt", [], "any", false, false, false, 126)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "createAt", [], "any", false, false, false, 126), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "</td>
                    <td>
                        <div class=\"action-icons\">
                            <a href=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depots_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "id", [], "any", false, false, false, 129)]), "html", null, true);
            yield "\" class=\"action-icon edit\" title=\"Modifier\">
                                <i class=\"uil uil-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depots_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "id", [], "any", false, false, false, 132)]), "html", null, true);
            yield "\" onsubmit=\"return confirmDelete()\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "id", [], "any", false, false, false, 133))), "html", null, true);
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
        // line 141
        if (!$context['_iterated']) {
            // line 142
            yield "                <tr>
                    <td colspan=\"4\">Aucun dépôt trouvé</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['depot'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        yield "            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 151
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

        // line 152
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        function confirmDelete() {
            return confirm('Êtes-vous sûr de vouloir supprimer ce dépôt ? Cette action est irréversible.');
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
        return "depots/index.html.twig";
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
        return array (  326 => 152,  313 => 151,  299 => 146,  290 => 142,  288 => 141,  275 => 133,  271 => 132,  265 => 129,  259 => 126,  255 => 125,  252 => 124,  247 => 123,  230 => 109,  225 => 106,  212 => 105,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Dépôts{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .depot-list {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid #eaeaea;
        }
        
        .depot-list-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .depot-list-header h1 {
            color: #2c3e50;
            font-weight: 600;
            margin: 0;
            font-size: 1.5rem;
        }
        
        .depot-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 0.75rem;
        }
        
        .depot-table th {
            color: #7f8c8d;
            font-weight: 500;
            text-align: left;
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
        }
        
        .depot-table td {
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
    <div class=\"depot-list\">
        <div class=\"depot-list-header\">
            <h1>Liste des Dépôts</h1>
            <a href=\"{{ path('app_depots_new') }}\" class=\"btn-new\">
                <i class=\"uil uil-plus\"></i> Nouveau dépôt
            </a>
        </div>

        <table class=\"depot-table\">
            <thead>
                <tr>
                    <th>Intitulé</th>
                    <th>Créé le</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for depot in depots %}
                <tr>
                    <td>{{ depot.intitule }}</td>
                    <td>{{ depot.createAt ? depot.createAt|date('d/m/Y H:i') : '' }}</td>
                    <td>
                        <div class=\"action-icons\">
                            <a href=\"{{ path('app_depots_edit', {'id': depot.id}) }}\" class=\"action-icon edit\" title=\"Modifier\">
                                <i class=\"uil uil-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path('app_depots_delete', {'id': depot.id}) }}\" onsubmit=\"return confirmDelete()\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ depot.id) }}\">
                                <button type=\"submit\" class=\"action-icon delete\" title=\"Supprimer\">
                                    <i class=\"uil uil-trash-alt\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                {% else %}
                <tr>
                    <td colspan=\"4\">Aucun dépôt trouvé</td>
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
            return confirm('Êtes-vous sûr de vouloir supprimer ce dépôt ? Cette action est irréversible.');
        }
    </script>
{% endblock %}", "depots/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\ERP_axia\\ProjetWeb - Copie (2)\\geex\\templates\\depots\\index.html.twig");
    }
}
