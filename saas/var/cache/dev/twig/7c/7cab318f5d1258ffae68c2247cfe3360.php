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

/* pages/landing.html.twig */
class __TwigTemplate_dd5c3a416f5ebc32682107bedbe710c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/landing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/landing.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>
\t";
        // line 4
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Tableau de Bord ERP"]);
        echo "

\t<!-- plugin css -->
\t<link href=\"../../assets/libs/jsvectormap/jsvectormap.min.css\" rel=\"stylesheet\" type=\"text/css\"/>

\t";
        // line 9
        echo twig_include($this->env, $context, "partials/head-css.html.twig");
        echo "

\t<style>
\t\t.card-stat {
\t\t\tborder-left: 4px solid #0ab39c;
\t\t}
\t\t.card-stat-warning {
\t\t\tborder-left: 4px solid #f7b84b;
\t\t}
\t\t.card-stat-danger {
\t\t\tborder-left: 4px solid #f06548;
\t\t}
\t\t.stat-icon {
\t\t\tfont-size: 22px;
\t\t\tbackground-color: rgba(10, 179, 156, 0.1);
\t\t\theight: 50px;
\t\t\twidth: 50px;
\t\t\tline-height: 50px;
\t\t\ttext-align: center;
\t\t\tborder-radius: 50%;
\t\t\tcolor: #0ab39c;
\t\t}
\t\t.stat-icon-warning {
\t\t\tbackground-color: rgba(247, 184, 75, 0.1);
\t\t\tcolor: #f7b84b;
\t\t}
\t\t.stat-icon-danger {
\t\t\tbackground-color: rgba(240, 101, 72, 0.1);
\t\t\tcolor: #f06548;
\t\t}
\t</style>
</head>

<body>
\t<!-- Begin page -->
\t<div id=\"layout-wrapper\">
\t\t";
        // line 45
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "

\t\t<!-- ============================================================== -->
\t\t<!-- Start right Content here -->
\t\t<!-- ============================================================== -->
\t\t\t<div class=\"main-content\"> <div class=\"page-content\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t";
        // line 52
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Tableau de Bord", "title" => "Vue d'ensemble"]);
        echo "

                    <div class=\"row\">
                        <!-- Statistiques principales -->
                        <div class=\"col-xl-3 col-md-6\">
                            <div class=\"card card-animate card-stat\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <p class=\"fw-medium text-muted mb-0\">Chiffre d'Affaires</p>
                                            <h2 class=\"mt-4 ff-secondary fw-semibold\">
                                                <span class=\"counter-value\" data-target=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["ca_mois"]) || array_key_exists("ca_mois", $context) ? $context["ca_mois"] : (function () { throw new RuntimeError('Variable "ca_mois" does not exist.', 63, $this->source); })()), 2, ",", " "), "html", null, true);
        echo "\">0</span> €
                                            </h2>
                                            <p class=\"mb-0 text-muted\">
                                                <span class=\"badge bg-light text-success mb-0\">
                                                    <i class=\"ri-arrow-up-line align-middle\"></i> ";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["evolution_ca"]) || array_key_exists("evolution_ca", $context) ? $context["evolution_ca"] : (function () { throw new RuntimeError('Variable "evolution_ca" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t%
\t\t\t\t</span>
\t\t\t\tvs. mois dernier
\t\t\t</p>
\t\t</div>
\t\t<div>
\t\t\t<div class=\"avatar-sm flex-shrink-0\">
\t\t\t\t<span class=\"avatar-title bg-info-subtle rounded-circle fs-2\">
\t\t\t\t\t<i data-feather=\"dollar-sign\" class=\"text-info\"></i>
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</div>
</body></div></div></div><div class=\"col-xl-3 col-md-6\"><div class=\"card card-animate card-stat\"><div class=\"card-body\">
<div class=\"d-flex justify-content-between\">
\t<div>
\t\t<p class=\"fw-medium text-muted mb-0\">Commandes en cours</p>
\t\t<h2 class=\"mt-4 ff-secondary fw-semibold\">
\t\t\t<span class=\"counter-value\" data-target=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["commandes_encours"]) || array_key_exists("commandes_encours", $context) ? $context["commandes_encours"] : (function () { throw new RuntimeError('Variable "commandes_encours" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "\">0</span>
\t\t</h2>
\t\t<p class=\"mb-0 text-muted\">
\t\t\t<span class=\"badge bg-light text-success mb-0\">
\t\t\t\t<i class=\"ri-arrow-up-line align-middle\"></i>
\t\t\t\t";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["evolution_commandes"]) || array_key_exists("evolution_commandes", $context) ? $context["evolution_commandes"] : (function () { throw new RuntimeError('Variable "evolution_commandes" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t%
\t\t\t</span>
\t\t\tvs. mois dernier
\t\t</p>
\t</div>
\t<div>
\t\t<div class=\"avatar-sm flex-shrink-0\">
\t\t\t<span class=\"avatar-title bg-info-subtle rounded-circle fs-2\">
\t\t\t\t<i data-feather=\"shopping-cart\" class=\"text-info\"></i>
\t\t\t</span>
\t\t</div>
\t</div>
</div></div></div></div><div class=\"col-xl-3 col-md-6\"><div class=\"card card-animate card-stat-warning\"><div class=\"card-body\">
<div class=\"d-flex justify-content-between\">
\t<div>
\t\t<p class=\"fw-medium text-muted mb-0\">Stocks Faibles</p>
\t\t<h2 class=\"mt-4 ff-secondary fw-semibold\">
\t\t\t<span class=\"counter-value\" data-target=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["stocks_faibles"]) || array_key_exists("stocks_faibles", $context) ? $context["stocks_faibles"] : (function () { throw new RuntimeError('Variable "stocks_faibles" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "\">0</span>
\t\t</h2>
\t\t<p class=\"mb-0 text-muted\">Articles à réapprovisionner</p>
\t</div>
\t<div>
\t\t<div class=\"avatar-sm flex-shrink-0\">
\t\t\t<span class=\"avatar-title bg-warning-subtle rounded-circle fs-2\">
\t\t\t\t<i data-feather=\"alert-triangle\" class=\"text-warning\"></i>
\t\t\t</span>
\t\t</div>
\t</div>
</div></div></div></div><div class=\"col-xl-3 col-md-6\"><div class=\"card card-animate card-stat-danger\"><div class=\"card-body\">
<div class=\"d-flex justify-content-between\">
\t<div>
\t\t<p class=\"fw-medium text-muted mb-0\">Documents en attente</p>
\t\t<h2 class=\"mt-4 ff-secondary fw-semibold\">
\t\t\t<span class=\"counter-value\" data-target=\"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["documents_attente"]) || array_key_exists("documents_attente", $context) ? $context["documents_attente"] : (function () { throw new RuntimeError('Variable "documents_attente" does not exist.', 125, $this->source); })()), "html", null, true);
        echo "\">0</span>
\t\t</h2>
\t\t<p class=\"mb-0 text-muted\">En attente de validation</p>
\t</div>
\t<div>
\t\t<div class=\"avatar-sm flex-shrink-0\">
\t\t\t<span class=\"avatar-title bg-danger-subtle rounded-circle fs-2\">
\t\t\t\t<i data-feather=\"clock\" class=\"text-danger\"></i>
\t\t\t</span>
\t\t</div>
\t</div>
</div></div></div></div></div><divclass=\"row\"><!-- Graphique CA vs Dépenses --><div class=\"col-xl-8\"><div class=\"card\"><div class=\"card-header align-items-center d-flex\">
<h4 class=\"card-title mb-0 flex-grow-1\">Évolution du Chiffre d'Affaires</h4>
<div class=\"flex-shrink-0\">
\t<div class=\"dropdown\">
\t\t<a class=\"text-reset dropdown-btn\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t<span class=\"fw-semibold text-uppercase fs-12\">Mensuel</span>
\t\t</a>
\t</div>
</div></div><div class=\"card-body\">
<div id=\"ca-chart\" data-colors='[\"--vz-success\", \"--vz-primary\"]' class=\"apex-charts\" dir=\"ltr\"></div></div></div></div><!-- Statistiques documents --><div class=\"col-xl-4\"><div class=\"card\"><div class=\"card-header align-items-center d-flex\">
<h4 class=\"card-title mb-0 flex-grow-1\">Répartition des Documents</h4></div><div class=\"card-body\">
<div id=\"documents-chart\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-info\"]' class=\"apex-charts\" dir=\"ltr\"></div>

<div class=\"mt-3\">
\t<div class=\"d-flex align-items-center mb-2\">
\t\t<div class=\"flex-grow-1\">
\t\t\t<p class=\"text-truncate text-muted fs-14 mb-0\">
\t\t\t\t<i class=\"mdi mdi-circle align-middle text-primary me-2\"></i>
\t\t\t\tFactures Vente
\t\t\t</p>
\t\t</div>
\t\t<div class=\"flex-shrink-0\">
\t\t\t<p class=\"mb-0\">";
        // line 158
        (((twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Facture vente", [], "array", true, true, false, 158) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Facture vente", [], "array", false, false, false, 158)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Facture vente", [], "array", false, false, false, 158), "html", null, true))) : (print (0)));
        echo "</p>
\t\t</div>
\t</div>
\t<div class=\"d-flex align-items-center mb-2\">
\t\t<div class=\"flex-grow-1\">
\t\t\t<p class=\"text-truncate text-muted fs-14 mb-0\">
\t\t\t\t<i class=\"mdi mdi-circle align-middle text-success me-2\"></i>
\t\t\t\tCommandes Achat
\t\t\t</p>
\t\t</div>
\t\t<div class=\"flex-shrink-0\">
\t\t\t<p class=\"mb-0\">";
        // line 169
        (((twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Commande achat", [], "array", true, true, false, 169) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Commande achat", [], "array", false, false, false, 169)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Commande achat", [], "array", false, false, false, 169), "html", null, true))) : (print (0)));
        echo "</p>
\t\t</div>
\t</div>
\t<div class=\"d-flex align-items-center mb-2\">
\t\t<div class=\"flex-grow-1\">
\t\t\t<p class=\"text-truncate text-muted fs-14 mb-0\">
\t\t\t\t<i class=\"mdi mdi-circle align-middle text-warning me-2\"></i>
\t\t\t\tDevis
\t\t\t</p>
\t\t</div>
\t\t<div class=\"flex-shrink-0\">
\t\t\t<p class=\"mb-0\">";
        // line 180
        echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Devis achat", [], "array", true, true, false, 180) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Devis achat", [], "array", false, false, false, 180)))) ? (twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Devis achat", [], "array", false, false, false, 180)) : (0)) + (((twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Devis vente", [], "array", true, true, false, 180) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Devis vente", [], "array", false, false, false, 180)))) ? (twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Devis vente", [], "array", false, false, false, 180)) : (0))), "html", null, true);
        echo "</p>
\t\t</div>
\t</div>
\t<div class=\"d-flex align-items-center mb-2\">
\t\t<div class=\"flex-grow-1\">
\t\t\t<p class=\"text-truncate text-muted fs-14 mb-0\">
\t\t\t\t<i class=\"mdi mdi-circle align-middle text-danger me-2\"></i>
\t\t\t\tBons d'Entrée/Sortie
\t\t\t</p>
\t\t</div>
\t\t<div class=\"flex-shrink-0\">
\t\t\t<p class=\"mb-0\">";
        // line 191
        echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Bon entré", [], "array", true, true, false, 191) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Bon entré", [], "array", false, false, false, 191)))) ? (twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Bon entré", [], "array", false, false, false, 191)) : (0)) + (((twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Bon de sortie", [], "array", true, true, false, 191) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Bon de sortie", [], "array", false, false, false, 191)))) ? (twig_get_attribute($this->env, $this->source, ($context["stats_documents"] ?? null), "Bon de sortie", [], "array", false, false, false, 191)) : (0))), "html", null, true);
        echo "</p>
\t\t</div>
\t</div>
</div></div></div></div></div><divclass=\"row\"><!-- Stocks faibles --><div class=\"col-xl-6\"><div class=\"card\"><div class=\"card-header align-items-center d-flex\">
<h4 class=\"card-title mb-0 flex-grow-1\">Stocks Faibles</h4>
<div class=\"flex-shrink-0\">
\t<a href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_index");
        echo "\" class=\"btn btn-soft-primary btn-sm\">Voir tous les stocks</a>
</div></div><div class=\"card-body\">
<div class=\"table-responsive\">
\t<table class=\"table table-borderless table-centered align-middle table-nowrap mb-0\">
\t\t<thead class=\"text-muted border-dashed border border-start-0 border-end-0 bg-light-subtle\">
\t\t\t<tr>
\t\t\t\t<th>Article</th>
\t\t\t\t<th>Référence</th>
\t\t\t\t<th>Dépôt</th>
\t\t\t\t<th>Stock Actuel</th>
\t\t\t\t<th>Action</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alertes_stocks"]) || array_key_exists("alertes_stocks", $context) ? $context["alertes_stocks"] : (function () { throw new RuntimeError('Variable "alertes_stocks" does not exist.', 211, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 212
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-2\">
\t\t\t\t\t\t\t\t<i data-feather=\"package\" class=\"text-warning\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"flex-grow-1\">Article
\t\t\t\t\t\t\t\t";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "article_id", [], "any", false, false, false, 219), "html", null, true);
            echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "reference", [], "any", false, false, false, 222), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>Dépôt
\t\t\t\t\t\t";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "depot_id", [], "any", false, false, false, 224), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"text-danger fw-semibold\">";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "qte_stock_dispo", [], "any", false, false, false, 226), "html", null, true);
            echo "</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 229
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_achat_new");
            echo "\" class=\"btn btn-sm btn-soft-warning\">Commander</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 233
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\" class=\"text-center\">Aucun stock faible</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "\t\t</tbody>
\t</table>
</div></div></div></div><!-- Documents récents --><div class=\"col-xl-6\"><div class=\"card\"><div class=\"card-header align-items-center d-flex\">
<h4 class=\"card-title mb-0 flex-grow-1\">Documents Récents</h4>
<div class=\"flex-shrink-0\">
\t<a href=\"";
        // line 242
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index");
        echo "\" class=\"btn btn-soft-primary btn-sm\">Voir tous</a>
</div></div><div class=\"card-body\">
<div class=\"table-responsive\">
\t<table class=\"table table-borderless table-centered align-middle table-nowrap mb-0\">
\t\t<thead class=\"text-muted border-dashed border border-start-0 border-end-0 bg-light-subtle\">
\t\t\t<tr>
\t\t\t\t<th>Référence</th>
\t\t\t\t<th>Type</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Montant</th>
\t\t\t\t<th>Statut</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents_recents"]) || array_key_exists("documents_recents", $context) ? $context["documents_recents"] : (function () { throw new RuntimeError('Variable "documents_recents" does not exist.', 256, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 257
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 259
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_show", ["id" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 259)]), "html", null, true);
            echo "\" class=\"fw-medium\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "reference", [], "any", false, false, false, 259), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 261
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "type", [], "any", false, false, false, 261), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 262
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "doc_date", [], "any", false, false, false, 262), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 263
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "montant_ht", [], "any", false, false, false, 263), 2, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t€</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 266
            if ((twig_get_attribute($this->env, $this->source, $context["document"], "statut", [], "any", false, false, false, 266) == "Confirmé")) {
                // line 267
                echo "\t\t\t\t\t\t\t<span class=\"badge bg-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "statut", [], "any", false, false, false, 267), "html", null, true);
                echo "</span>
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 268
$context["document"], "statut", [], "any", false, false, false, 268) == "Ouvert")) {
                // line 269
                echo "\t\t\t\t\t\t\t<span class=\"badge bg-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "statut", [], "any", false, false, false, 269), "html", null, true);
                echo "</span>
\t\t\t\t\t\t";
            } else {
                // line 271
                echo "\t\t\t\t\t\t\t<span class=\"badge bg-secondary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "statut", [], "any", false, false, false, 271), "html", null, true);
                echo "</span>
\t\t\t\t\t\t";
            }
            // line 273
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 276
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\" class=\"text-center\">Aucun document récent</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        echo "\t\t</tbody>
\t</table>
</div></div></div></div></div><divclass=\"row\"><!-- Top articles --><div class=\"col-xl-6\"><div class=\"card\"><div class=\"card-header align-items-center d-flex\">
<h4 class=\"card-title mb-0 flex-grow-1\">Articles les Plus Vendus</h4></div><div class=\"card-body\">
<div id=\"top-articles-chart\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-info\", \"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div></div></div></div><!-- Activité récente --><div class=\"col-xl-6\"><div class=\"card\"><div class=\"card-header align-items-center d-flex\">
<h4 class=\"card-title mb-0 flex-grow-1\">Activité Récente</h4></div><div class=\"card-body\">
<div class=\"simplebar-wrapper\" style=\"max-height: 365px;\">
\t<div data-simplebar style=\"height: 365px;\">
\t\t";
        // line 288
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activites_recentes"]) || array_key_exists("activites_recentes", $context) ? $context["activites_recentes"] : (function () { throw new RuntimeError('Variable "activites_recentes" does not exist.', 288, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 289
            echo "\t\t\t<div class=\"d-flex align-items-center mb-4\">
\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t<div class=\"stat-icon\">
\t\t\t\t\t\t<i data-feather=\"";
            // line 292
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "icon", [], "any", false, false, false, 292), "html", null, true);
            echo "\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t<h6 class=\"mb-1\">";
            // line 296
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "titre", [], "any", false, false, false, 296), "html", null, true);
            echo "</h6>
\t\t\t\t\t<p class=\"text-muted mb-0\">";
            // line 297
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "description", [], "any", false, false, false, 297), "html", null, true);
            echo "</p>
\t\t\t\t\t<ul class=\"list-inline mb-0\">
\t\t\t\t\t\t<li class=\"list-inline-item\">";
            // line 299
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "date", [], "any", false, false, false, 299), "d/m/Y H:i"), "html", null, true);
            echo "</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 304
            echo "\t\t\t<p class=\"text-muted text-center\">Aucune activité récente</p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 306
        echo "\t</div>
</div></div></div></div></div></div></div>";
        // line 307
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "</div></div>";
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "<script src=\"../../assets/libs/apexcharts/apexcharts.min.js\"></script><script src=\"../../assets/libs/jsvectormap/jsvectormap.min.js\"></script><script src=\"../../assets/js/pages/dashboard-analytics.init.js\"></script><script src=\"../../assets/js/app.js\"></script><script>document.addEventListener(\"DOMContentLoaded\", function () { // Chart CA vs Dépenses
var options = {
series: [
{
name: 'Chiffre d\\'Affaires',
data: ";
        // line 312
        echo (isset($context["ca_data"]) || array_key_exists("ca_data", $context) ? $context["ca_data"] : (function () { throw new RuntimeError('Variable "ca_data" does not exist.', 312, $this->source); })());
        echo "
}, {
name: 'Dépenses',
data: ";
        // line 315
        echo (isset($context["depenses_data"]) || array_key_exists("depenses_data", $context) ? $context["depenses_data"] : (function () { throw new RuntimeError('Variable "depenses_data" does not exist.', 315, $this->source); })());
        echo "
}
],
chart: {
height: 350,
type: 'area',
toolbar: {
show: false
}
},
colors: [
'#0ab39c', '#f7b84b'
],
dataLabels: {
enabled: false
},
stroke: {
curve: 'smooth',
width: 2
},
fill: {
type: 'gradient',
gradient: {
shadeIntensity: 1,
inverseColors: false,
opacityFrom: 0.45,
opacityTo: 0.05,
stops: [20, 100, 100, 100]
}
},
xaxis: {
categories: ";
        // line 346
        echo (isset($context["mois_labels"]) || array_key_exists("mois_labels", $context) ? $context["mois_labels"] : (function () { throw new RuntimeError('Variable "mois_labels" does not exist.', 346, $this->source); })());
        echo "
},
tooltip: {
y: {
formatter: function (val) {
return val + \" €\";
}
}
}
};

var chart = new ApexCharts(document.querySelector(\"#ca-chart\"), options);
chart.render();

// Chart répartition documents
var documentChart = {
series: ";
        // line 362
        echo (isset($context["documents_series"]) || array_key_exists("documents_series", $context) ? $context["documents_series"] : (function () { throw new RuntimeError('Variable "documents_series" does not exist.', 362, $this->source); })());
        echo ",
chart: {
type: 'donut',
height: 320
},
labels: ";
        // line 367
        echo (isset($context["documents_labels"]) || array_key_exists("documents_labels", $context) ? $context["documents_labels"] : (function () { throw new RuntimeError('Variable "documents_labels" does not exist.', 367, $this->source); })());
        echo ",
colors: [
'#405189',
'#0ab39c',
'#f7b84b',
'#f06548',
'#3577f1'
],
legend: {
position: 'bottom'
},
plotOptions: {
pie: {
donut: {
size: '65%'
}
}
}
};

var chart2 = new ApexCharts(document.querySelector(\"#documents-chart\"), documentChart);
chart2.render();

// Chart top articles
var topArticlesChart = {
series: [
{
data: ";
        // line 394
        echo (isset($context["top_articles_values"]) || array_key_exists("top_articles_values", $context) ? $context["top_articles_values"] : (function () { throw new RuntimeError('Variable "top_articles_values" does not exist.', 394, $this->source); })());
        echo "
}
],
chart: {
type: 'bar',
height: 320
},
plotOptions: {
bar: {
borderRadius: 4,
horizontal: true
}
},
dataLabels: {
enabled: false
},
xaxis: {
categories: ";
        // line 411
        echo (isset($context["top_articles_labels"]) || array_key_exists("top_articles_labels", $context) ? $context["top_articles_labels"] : (function () { throw new RuntimeError('Variable "top_articles_labels" does not exist.', 411, $this->source); })());
        echo "
},
colors: ['#0ab39c']
};

var chart3 = new ApexCharts(document.querySelector(\"#top-articles-chart\"), topArticlesChart);
chart3.render();
});</script></body> </html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/landing.html.twig";
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
        return array (  630 => 411,  610 => 394,  580 => 367,  572 => 362,  553 => 346,  519 => 315,  513 => 312,  502 => 307,  499 => 306,  492 => 304,  482 => 299,  477 => 297,  473 => 296,  466 => 292,  461 => 289,  456 => 288,  446 => 280,  437 => 276,  430 => 273,  424 => 271,  418 => 269,  416 => 268,  411 => 267,  409 => 266,  403 => 263,  399 => 262,  395 => 261,  388 => 259,  384 => 257,  379 => 256,  362 => 242,  355 => 237,  346 => 233,  337 => 229,  331 => 226,  326 => 224,  321 => 222,  315 => 219,  306 => 212,  301 => 211,  284 => 197,  275 => 191,  261 => 180,  247 => 169,  233 => 158,  197 => 125,  178 => 109,  157 => 91,  149 => 86,  127 => 67,  120 => 63,  106 => 52,  96 => 45,  57 => 9,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>
\t{{ include('partials/title-meta.html.twig', {title: 'Tableau de Bord ERP'}) }}

\t<!-- plugin css -->
\t<link href=\"../../assets/libs/jsvectormap/jsvectormap.min.css\" rel=\"stylesheet\" type=\"text/css\"/>

\t{{ include('partials/head-css.html.twig') }}

\t<style>
\t\t.card-stat {
\t\t\tborder-left: 4px solid #0ab39c;
\t\t}
\t\t.card-stat-warning {
\t\t\tborder-left: 4px solid #f7b84b;
\t\t}
\t\t.card-stat-danger {
\t\t\tborder-left: 4px solid #f06548;
\t\t}
\t\t.stat-icon {
\t\t\tfont-size: 22px;
\t\t\tbackground-color: rgba(10, 179, 156, 0.1);
\t\t\theight: 50px;
\t\t\twidth: 50px;
\t\t\tline-height: 50px;
\t\t\ttext-align: center;
\t\t\tborder-radius: 50%;
\t\t\tcolor: #0ab39c;
\t\t}
\t\t.stat-icon-warning {
\t\t\tbackground-color: rgba(247, 184, 75, 0.1);
\t\t\tcolor: #f7b84b;
\t\t}
\t\t.stat-icon-danger {
\t\t\tbackground-color: rgba(240, 101, 72, 0.1);
\t\t\tcolor: #f06548;
\t\t}
\t</style>
</head>

<body>
\t<!-- Begin page -->
\t<div id=\"layout-wrapper\">
\t\t{{ include('partials/menu.html.twig') }}

\t\t<!-- ============================================================== -->
\t\t<!-- Start right Content here -->
\t\t<!-- ============================================================== -->
\t\t\t<div class=\"main-content\"> <div class=\"page-content\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t{{ include('partials/page-title.html.twig', {pagetitle: 'Tableau de Bord', title: 'Vue d\\'ensemble'}) }}

                    <div class=\"row\">
                        <!-- Statistiques principales -->
                        <div class=\"col-xl-3 col-md-6\">
                            <div class=\"card card-animate card-stat\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <p class=\"fw-medium text-muted mb-0\">Chiffre d'Affaires</p>
                                            <h2 class=\"mt-4 ff-secondary fw-semibold\">
                                                <span class=\"counter-value\" data-target=\"{{ ca_mois|number_format(2, ',', ' ') }}\">0</span> €
                                            </h2>
                                            <p class=\"mb-0 text-muted\">
                                                <span class=\"badge bg-light text-success mb-0\">
                                                    <i class=\"ri-arrow-up-line align-middle\"></i> {{ evolution_ca }}
\t\t\t\t\t%
\t\t\t\t</span>
\t\t\t\tvs. mois dernier
\t\t\t</p>
\t\t</div>
\t\t<div>
\t\t\t<div class=\"avatar-sm flex-shrink-0\">
\t\t\t\t<span class=\"avatar-title bg-info-subtle rounded-circle fs-2\">
\t\t\t\t\t<i data-feather=\"dollar-sign\" class=\"text-info\"></i>
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</div>
</body></div></div></div><div class=\"col-xl-3 col-md-6\"><div class=\"card card-animate card-stat\"><div class=\"card-body\">
<div class=\"d-flex justify-content-between\">
\t<div>
\t\t<p class=\"fw-medium text-muted mb-0\">Commandes en cours</p>
\t\t<h2 class=\"mt-4 ff-secondary fw-semibold\">
\t\t\t<span class=\"counter-value\" data-target=\"{{ commandes_encours }}\">0</span>
\t\t</h2>
\t\t<p class=\"mb-0 text-muted\">
\t\t\t<span class=\"badge bg-light text-success mb-0\">
\t\t\t\t<i class=\"ri-arrow-up-line align-middle\"></i>
\t\t\t\t{{ evolution_commandes }}
\t\t\t\t%
\t\t\t</span>
\t\t\tvs. mois dernier
\t\t</p>
\t</div>
\t<div>
\t\t<div class=\"avatar-sm flex-shrink-0\">
\t\t\t<span class=\"avatar-title bg-info-subtle rounded-circle fs-2\">
\t\t\t\t<i data-feather=\"shopping-cart\" class=\"text-info\"></i>
\t\t\t</span>
\t\t</div>
\t</div>
</div></div></div></div><div class=\"col-xl-3 col-md-6\"><div class=\"card card-animate card-stat-warning\"><div class=\"card-body\">
<div class=\"d-flex justify-content-between\">
\t<div>
\t\t<p class=\"fw-medium text-muted mb-0\">Stocks Faibles</p>
\t\t<h2 class=\"mt-4 ff-secondary fw-semibold\">
\t\t\t<span class=\"counter-value\" data-target=\"{{ stocks_faibles }}\">0</span>
\t\t</h2>
\t\t<p class=\"mb-0 text-muted\">Articles à réapprovisionner</p>
\t</div>
\t<div>
\t\t<div class=\"avatar-sm flex-shrink-0\">
\t\t\t<span class=\"avatar-title bg-warning-subtle rounded-circle fs-2\">
\t\t\t\t<i data-feather=\"alert-triangle\" class=\"text-warning\"></i>
\t\t\t</span>
\t\t</div>
\t</div>
</div></div></div></div><div class=\"col-xl-3 col-md-6\"><div class=\"card card-animate card-stat-danger\"><div class=\"card-body\">
<div class=\"d-flex justify-content-between\">
\t<div>
\t\t<p class=\"fw-medium text-muted mb-0\">Documents en attente</p>
\t\t<h2 class=\"mt-4 ff-secondary fw-semibold\">
\t\t\t<span class=\"counter-value\" data-target=\"{{ documents_attente }}\">0</span>
\t\t</h2>
\t\t<p class=\"mb-0 text-muted\">En attente de validation</p>
\t</div>
\t<div>
\t\t<div class=\"avatar-sm flex-shrink-0\">
\t\t\t<span class=\"avatar-title bg-danger-subtle rounded-circle fs-2\">
\t\t\t\t<i data-feather=\"clock\" class=\"text-danger\"></i>
\t\t\t</span>
\t\t</div>
\t</div>
</div></div></div></div></div><divclass=\"row\"><!-- Graphique CA vs Dépenses --><div class=\"col-xl-8\"><div class=\"card\"><div class=\"card-header align-items-center d-flex\">
<h4 class=\"card-title mb-0 flex-grow-1\">Évolution du Chiffre d'Affaires</h4>
<div class=\"flex-shrink-0\">
\t<div class=\"dropdown\">
\t\t<a class=\"text-reset dropdown-btn\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t<span class=\"fw-semibold text-uppercase fs-12\">Mensuel</span>
\t\t</a>
\t</div>
</div></div><div class=\"card-body\">
<div id=\"ca-chart\" data-colors='[\"--vz-success\", \"--vz-primary\"]' class=\"apex-charts\" dir=\"ltr\"></div></div></div></div><!-- Statistiques documents --><div class=\"col-xl-4\"><div class=\"card\"><div class=\"card-header align-items-center d-flex\">
<h4 class=\"card-title mb-0 flex-grow-1\">Répartition des Documents</h4></div><div class=\"card-body\">
<div id=\"documents-chart\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-info\"]' class=\"apex-charts\" dir=\"ltr\"></div>

<div class=\"mt-3\">
\t<div class=\"d-flex align-items-center mb-2\">
\t\t<div class=\"flex-grow-1\">
\t\t\t<p class=\"text-truncate text-muted fs-14 mb-0\">
\t\t\t\t<i class=\"mdi mdi-circle align-middle text-primary me-2\"></i>
\t\t\t\tFactures Vente
\t\t\t</p>
\t\t</div>
\t\t<div class=\"flex-shrink-0\">
\t\t\t<p class=\"mb-0\">{{ stats_documents['Facture vente'] ?? 0 }}</p>
\t\t</div>
\t</div>
\t<div class=\"d-flex align-items-center mb-2\">
\t\t<div class=\"flex-grow-1\">
\t\t\t<p class=\"text-truncate text-muted fs-14 mb-0\">
\t\t\t\t<i class=\"mdi mdi-circle align-middle text-success me-2\"></i>
\t\t\t\tCommandes Achat
\t\t\t</p>
\t\t</div>
\t\t<div class=\"flex-shrink-0\">
\t\t\t<p class=\"mb-0\">{{ stats_documents['Commande achat'] ?? 0 }}</p>
\t\t</div>
\t</div>
\t<div class=\"d-flex align-items-center mb-2\">
\t\t<div class=\"flex-grow-1\">
\t\t\t<p class=\"text-truncate text-muted fs-14 mb-0\">
\t\t\t\t<i class=\"mdi mdi-circle align-middle text-warning me-2\"></i>
\t\t\t\tDevis
\t\t\t</p>
\t\t</div>
\t\t<div class=\"flex-shrink-0\">
\t\t\t<p class=\"mb-0\">{{ (stats_documents['Devis achat'] ?? 0) + (stats_documents['Devis vente'] ?? 0) }}</p>
\t\t</div>
\t</div>
\t<div class=\"d-flex align-items-center mb-2\">
\t\t<div class=\"flex-grow-1\">
\t\t\t<p class=\"text-truncate text-muted fs-14 mb-0\">
\t\t\t\t<i class=\"mdi mdi-circle align-middle text-danger me-2\"></i>
\t\t\t\tBons d'Entrée/Sortie
\t\t\t</p>
\t\t</div>
\t\t<div class=\"flex-shrink-0\">
\t\t\t<p class=\"mb-0\">{{ (stats_documents['Bon entré'] ?? 0) + (stats_documents['Bon de sortie'] ?? 0) }}</p>
\t\t</div>
\t</div>
</div></div></div></div></div><divclass=\"row\"><!-- Stocks faibles --><div class=\"col-xl-6\"><div class=\"card\"><div class=\"card-header align-items-center d-flex\">
<h4 class=\"card-title mb-0 flex-grow-1\">Stocks Faibles</h4>
<div class=\"flex-shrink-0\">
\t<a href=\"{{ path('app_stock_index') }}\" class=\"btn btn-soft-primary btn-sm\">Voir tous les stocks</a>
</div></div><div class=\"card-body\">
<div class=\"table-responsive\">
\t<table class=\"table table-borderless table-centered align-middle table-nowrap mb-0\">
\t\t<thead class=\"text-muted border-dashed border border-start-0 border-end-0 bg-light-subtle\">
\t\t\t<tr>
\t\t\t\t<th>Article</th>
\t\t\t\t<th>Référence</th>
\t\t\t\t<th>Dépôt</th>
\t\t\t\t<th>Stock Actuel</th>
\t\t\t\t<th>Action</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for stock in alertes_stocks %}
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-2\">
\t\t\t\t\t\t\t\t<i data-feather=\"package\" class=\"text-warning\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"flex-grow-1\">Article
\t\t\t\t\t\t\t\t{{ stock.article_id }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{ stock.reference }}</td>
\t\t\t\t\t<td>Dépôt
\t\t\t\t\t\t{{ stock.depot_id }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"text-danger fw-semibold\">{{ stock.qte_stock_dispo }}</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('app_commande_achat_new') }}\" class=\"btn btn-sm btn-soft-warning\">Commander</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\" class=\"text-center\">Aucun stock faible</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
</div></div></div></div><!-- Documents récents --><div class=\"col-xl-6\"><div class=\"card\"><div class=\"card-header align-items-center d-flex\">
<h4 class=\"card-title mb-0 flex-grow-1\">Documents Récents</h4>
<div class=\"flex-shrink-0\">
\t<a href=\"{{ path('app_documents_index') }}\" class=\"btn btn-soft-primary btn-sm\">Voir tous</a>
</div></div><div class=\"card-body\">
<div class=\"table-responsive\">
\t<table class=\"table table-borderless table-centered align-middle table-nowrap mb-0\">
\t\t<thead class=\"text-muted border-dashed border border-start-0 border-end-0 bg-light-subtle\">
\t\t\t<tr>
\t\t\t\t<th>Référence</th>
\t\t\t\t<th>Type</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Montant</th>
\t\t\t\t<th>Statut</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for document in documents_recents %}
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('app_documents_show', {'id': document.id}) }}\" class=\"fw-medium\">{{ document.reference }}</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{ document.type }}</td>
\t\t\t\t\t<td>{{ document.doc_date|date('d/m/Y') }}</td>
\t\t\t\t\t<td>{{ document.montant_ht|number_format(2, ',', ' ') }}
\t\t\t\t\t\t€</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% if document.statut == 'Confirmé' %}
\t\t\t\t\t\t\t<span class=\"badge bg-success\">{{ document.statut }}</span>
\t\t\t\t\t\t{% elseif document.statut == 'Ouvert' %}
\t\t\t\t\t\t\t<span class=\"badge bg-warning\">{{ document.statut }}</span>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<span class=\"badge bg-secondary\">{{ document.statut }}</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\" class=\"text-center\">Aucun document récent</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
</div></div></div></div></div><divclass=\"row\"><!-- Top articles --><div class=\"col-xl-6\"><div class=\"card\"><div class=\"card-header align-items-center d-flex\">
<h4 class=\"card-title mb-0 flex-grow-1\">Articles les Plus Vendus</h4></div><div class=\"card-body\">
<div id=\"top-articles-chart\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-info\", \"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div></div></div></div><!-- Activité récente --><div class=\"col-xl-6\"><div class=\"card\"><div class=\"card-header align-items-center d-flex\">
<h4 class=\"card-title mb-0 flex-grow-1\">Activité Récente</h4></div><div class=\"card-body\">
<div class=\"simplebar-wrapper\" style=\"max-height: 365px;\">
\t<div data-simplebar style=\"height: 365px;\">
\t\t{% for activite in activites_recentes %}
\t\t\t<div class=\"d-flex align-items-center mb-4\">
\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t<div class=\"stat-icon\">
\t\t\t\t\t\t<i data-feather=\"{{ activite.icon }}\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t<h6 class=\"mb-1\">{{ activite.titre }}</h6>
\t\t\t\t\t<p class=\"text-muted mb-0\">{{ activite.description }}</p>
\t\t\t\t\t<ul class=\"list-inline mb-0\">
\t\t\t\t\t\t<li class=\"list-inline-item\">{{ activite.date|date('d/m/Y H:i') }}</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% else %}
\t\t\t<p class=\"text-muted text-center\">Aucune activité récente</p>
\t\t{% endfor %}
\t</div>
</div></div></div></div></div></div></div>{{ include('partials/footer.html.twig') }}</div></div>{{ include('partials/customizer.html.twig') }}{{ include('partials/vendor-scripts.html.twig') }}<script src=\"../../assets/libs/apexcharts/apexcharts.min.js\"></script><script src=\"../../assets/libs/jsvectormap/jsvectormap.min.js\"></script><script src=\"../../assets/js/pages/dashboard-analytics.init.js\"></script><script src=\"../../assets/js/app.js\"></script><script>document.addEventListener(\"DOMContentLoaded\", function () { // Chart CA vs Dépenses
var options = {
series: [
{
name: 'Chiffre d\\'Affaires',
data: {{ ca_data|raw }}
}, {
name: 'Dépenses',
data: {{ depenses_data|raw }}
}
],
chart: {
height: 350,
type: 'area',
toolbar: {
show: false
}
},
colors: [
'#0ab39c', '#f7b84b'
],
dataLabels: {
enabled: false
},
stroke: {
curve: 'smooth',
width: 2
},
fill: {
type: 'gradient',
gradient: {
shadeIntensity: 1,
inverseColors: false,
opacityFrom: 0.45,
opacityTo: 0.05,
stops: [20, 100, 100, 100]
}
},
xaxis: {
categories: {{ mois_labels|raw }}
},
tooltip: {
y: {
formatter: function (val) {
return val + \" €\";
}
}
}
};

var chart = new ApexCharts(document.querySelector(\"#ca-chart\"), options);
chart.render();

// Chart répartition documents
var documentChart = {
series: {{ documents_series|raw }},
chart: {
type: 'donut',
height: 320
},
labels: {{ documents_labels|raw }},
colors: [
'#405189',
'#0ab39c',
'#f7b84b',
'#f06548',
'#3577f1'
],
legend: {
position: 'bottom'
},
plotOptions: {
pie: {
donut: {
size: '65%'
}
}
}
};

var chart2 = new ApexCharts(document.querySelector(\"#documents-chart\"), documentChart);
chart2.render();

// Chart top articles
var topArticlesChart = {
series: [
{
data: {{ top_articles_values|raw }}
}
],
chart: {
type: 'bar',
height: 320
},
plotOptions: {
bar: {
borderRadius: 4,
horizontal: true
}
},
dataLabels: {
enabled: false
},
xaxis: {
categories: {{ top_articles_labels|raw }}
},
colors: ['#0ab39c']
};

var chart3 = new ApexCharts(document.querySelector(\"#top-articles-chart\"), topArticlesChart);
chart3.render();
});</script></body> </html>
", "pages/landing.html.twig", "C:\\Users\\Lenovo\\Desktop\\ERP_axia\\ERP_axia\\saas\\templates\\pages\\landing.html.twig");
    }
}
