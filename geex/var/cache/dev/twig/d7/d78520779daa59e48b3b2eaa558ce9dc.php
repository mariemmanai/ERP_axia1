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

/* articles/index.html.twig */
class __TwigTemplate_b01e1e2d9f9035b6a46ccce12ea81715 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

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

        yield "Liste des Articles";
        
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
        .article-list {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid #eaeaea;
        }
        
        .article-list-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .article-list-header h1 {
            color: #2c3e50;
            font-weight: 600;
            margin: 0;
            font-size: 1.5rem;
        }
        
        .article-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 0.75rem;
        }
        
        .article-table th {
            color: #7f8c8d;
            font-weight: 500;
            text-align: left;
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
        }
        
        .article-table td {
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
        yield "    <div class=\"article-list\">
        <div class=\"article-list-header\">
            <h1>Liste des Articles</h1>
            <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_new");
        yield "\" class=\"btn-new\">
                <i class=\"uil uil-plus\"></i> Nouvel article
            </a>
        </div>

        <table class=\"article-table\">
            <thead>
                <tr>
                    <th>Référence</th>
                    <th>Type</th>
                    <th>Unité</th>
                    <th>Fournisseur</th>
                    <th>Créé le </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 126, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 127
            yield "                <tr>
                    <td>";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "reference", [], "any", false, false, false, 128), "html", null, true);
            yield "</td>
                    <td>";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "type", [], "any", false, false, false, 129), "html", null, true);
            yield "</td>
                    <td>";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "unite", [], "any", false, false, false, 130), "html", null, true);
            yield "</td>
                    <td>";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "fournisseur", [], "any", false, false, false, 131), "username", [], "any", false, false, false, 131), "html", null, true);
            yield "</td>
                    <td>";
            // line 132
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "createAt", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "createAt", [], "any", false, false, false, 132), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "</td>
                    <td>
                        <div class=\"action-icons\">
                            <a href=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 135)]), "html", null, true);
            yield "\" class=\"action-icon edit\" title=\"Modifier\">
                                <i class=\"uil uil-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 138)]), "html", null, true);
            yield "\" onsubmit=\"return confirmDelete()\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 139))), "html", null, true);
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
        // line 147
        if (!$context['_iterated']) {
            // line 148
            yield "                <tr>
                    <td colspan=\"5\">Aucun article trouvé</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 157
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

        // line 158
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        function confirmDelete() {
            return confirm('Êtes-vous sûr de vouloir supprimer cet article ? Cette action est irréversible.');
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
        return "articles/index.html.twig";
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
        return array (  341 => 158,  328 => 157,  314 => 152,  305 => 148,  303 => 147,  290 => 139,  286 => 138,  280 => 135,  274 => 132,  270 => 131,  266 => 130,  262 => 129,  258 => 128,  255 => 127,  250 => 126,  230 => 109,  225 => 106,  212 => 105,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Articles{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .article-list {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid #eaeaea;
        }
        
        .article-list-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .article-list-header h1 {
            color: #2c3e50;
            font-weight: 600;
            margin: 0;
            font-size: 1.5rem;
        }
        
        .article-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 0.75rem;
        }
        
        .article-table th {
            color: #7f8c8d;
            font-weight: 500;
            text-align: left;
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
        }
        
        .article-table td {
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
    <div class=\"article-list\">
        <div class=\"article-list-header\">
            <h1>Liste des Articles</h1>
            <a href=\"{{ path('app_articles_new') }}\" class=\"btn-new\">
                <i class=\"uil uil-plus\"></i> Nouvel article
            </a>
        </div>

        <table class=\"article-table\">
            <thead>
                <tr>
                    <th>Référence</th>
                    <th>Type</th>
                    <th>Unité</th>
                    <th>Fournisseur</th>
                    <th>Créé le </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for article in articles %}
                <tr>
                    <td>{{ article.reference }}</td>
                    <td>{{ article.type }}</td>
                    <td>{{ article.unite }}</td>
                    <td>{{ article.fournisseur.username }}</td>
                    <td>{{ article.createAt ? article.createAt|date('d/m/Y H:i') : '' }}</td>
                    <td>
                        <div class=\"action-icons\">
                            <a href=\"{{ path('app_articles_edit', {'id': article.id}) }}\" class=\"action-icon edit\" title=\"Modifier\">
                                <i class=\"uil uil-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path('app_articles_delete', {'id': article.id}) }}\" onsubmit=\"return confirmDelete()\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ article.id) }}\">
                                <button type=\"submit\" class=\"action-icon delete\" title=\"Supprimer\">
                                    <i class=\"uil uil-trash-alt\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                {% else %}
                <tr>
                    <td colspan=\"5\">Aucun article trouvé</td>
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
            return confirm('Êtes-vous sûr de vouloir supprimer cet article ? Cette action est irréversible.');
        }
    </script>
{% endblock %}", "articles/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\ERP_axia\\ProjetWeb - Copie (2)\\geex\\templates\\articles\\index.html.twig");
    }
}
