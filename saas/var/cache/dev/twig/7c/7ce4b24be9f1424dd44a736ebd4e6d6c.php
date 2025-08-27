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

/* partials/sidebar.html.twig */
class __TwigTemplate_6a1a37ca11cf8266845f44c29da419e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        // line 1
        echo "<!-- ========== App Menu ========== -->
<div
\tclass=\"app-menu navbar-menu\">
\t<!-- LOGO -->
\t<div
\t\tclass=\"navbar-brand-box\">
\t\t<!-- Dark Logo-->
\t\t<a href=\"/\" class=\"logo logo-dark\">
\t\t\t<span class=\"logo-sm\">
\t\t\t\t<img src=\"../../assets/images/logo-sm.png\" alt=\"\" height=\"22\">
\t\t\t</span>
\t\t\t<span class=\"logo-lg\">
\t\t\t\t<img src=\"../../assets/images/logo-dark.png\" alt=\"\" height=\"17\">
\t\t\t</span>
\t\t</a>
\t\t<!-- Light Logo-->
\t\t<a href=\"/\" class=\"logo logo-light\">
\t\t\t<span class=\"logo-sm\">
\t\t\t\t<img src=\"../../assets/images/logo-sm.png\" alt=\"\" height=\"22\">
\t\t\t</span>
\t\t\t<span class=\"logo-lg\">
\t\t\t\t<img src=\"../../assets/images/logo-light.png\" alt=\"\" height=\"17\">
\t\t\t</span>
\t\t</a>
\t\t<button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\" id=\"vertical-hover\">
\t\t\t<i class=\"ri-record-circle-line\"></i>
\t\t</button>
\t</div>

\t<div id=\"scrollbar\">
\t\t<div class=\"container-fluid\">
\t\t\t<div id=\"two-column-menu\"></div>
\t\t\t<ul class=\"navbar-nav\" id=\"navbar-nav\">
\t\t\t\t<li class=\"menu-title\">
\t\t\t\t\t<span data-key=\"t-menu\">Menu</span>
\t\t\t\t</li>

\t\t\t\t<!-- Dashboards -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link menu-link\" href=\"#sidebarDashboards\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarDashboards\">
\t\t\t\t\t\t<i class=\"ri-dashboard-2-line\"></i>
\t\t\t\t\t\t<span data-key=\"t-dashboards\">Dashboards</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarDashboards\">
\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Tableau de Bord Principal</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<!-- Messages -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link menu-link\" href=\"#sidebarMessages\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarMessages\">
\t\t\t\t\t\t<i class=\"ri-mail-line\"></i>
\t\t\t\t\t\t<span data-key=\"t-messages\">Messages</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarMessages\">
\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Boite Réception</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Nouveaux Messages</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Messages Envoyés</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Corbeilles</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<!-- Gestion Des Achats -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link menu-link\" href=\"#sidebarPurchases\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarPurchases\">
\t\t\t\t\t\t<i class=\"ri-shopping-cart-line\"></i>
\t\t\t\t\t\t<span>Gestion Des Achats</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarPurchases\">
\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "DA"]);
        echo "\" class=\"nav-link\">Devis achat</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "CA"]);
        echo "\" class=\"nav-link\">Commandes achat</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "FA"]);
        echo "\" class=\"nav-link\">Factures achat</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "FAA"]);
        echo "\" class=\"nav-link\">Factures achat Avoire</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "BE"]);
        echo "\" class=\"nav-link\">Bon d'entrée</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "BT"]);
        echo "\" class=\"nav-link\">Bon de transfert</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "BR"]);
        echo "\" class=\"nav-link\">Bon de retour</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "Inv"]);
        echo "\" class=\"nav-link\">Inventaire</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<!-- Gestion Des Productions -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link menu-link\" href=\"#sidebarProduction\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarProduction\">
\t\t\t\t\t\t<i class=\"ri-building-2-line\"></i>
\t\t\t\t\t\t<span>Gestion Des Productions</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarProduction\">
\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"layouts-horizontal\" target=\"_blank\" class=\"nav-link\">Création des OF</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"layouts-detached\" target=\"_blank\" class=\"nav-link\">Demande de besoins</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "BE"]);
        echo "\" class=\"nav-link\">Bon d'entrée</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "BS"]);
        echo "\" class=\"nav-link\">Bon de sortie</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "BT"]);
        echo "\" class=\"nav-link\">Bon de transfert</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "BR"]);
        echo "\" class=\"nav-link\">Bon de retour</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "Inv"]);
        echo "\" class=\"nav-link\">Inventaire</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>


\t\t\t\t<!-- Gestion Des Ventes -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link menu-link\" href=\"#sidebarSales\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarSales\">
\t\t\t\t\t\t<i class=\"ri-handbag-line\"></i>
\t\t\t\t\t\t<span>Gestion Des Ventes</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarSales\">
\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "DV"]);
        echo "\" class=\"nav-link\">Devis vente</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "CV"]);
        echo "\" class=\"nav-link\">Commandes vente</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "FV"]);
        echo "\" class=\"nav-link\">Factures vente</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 165
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "FVA"]);
        echo "\" class=\"nav-link\">Factures vente avoire</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 168
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "BS"]);
        echo "\" class=\"nav-link\">Bon de sortie</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "BL"]);
        echo "\" class=\"nav-link\">Bon de livraison</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["Doc" => "Inv"]);
        echo "\" class=\"nav-link\">Inventaire</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<!-- Administration -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link menu-link\" href=\"#sidebarAdmin\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarAdmin\">
\t\t\t\t\t\t<i class=\"ri-settings-3-line\"></i>
\t\t\t\t\t\t<span>Administration</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarAdmin\">
\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"layouts-horizontal\" target=\"_blank\" class=\"nav-link\">Droits d'accès</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"layouts-detached\" target=\"_blank\" class=\"nav-link\">Profiles</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"layouts-vertical-hovered\" target=\"_blank\" class=\"nav-link\">Utilisateurs Internes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#sidebarTiers\" class=\"nav-link\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarTiers\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-group-line\"></i>
\t\t\t\t\t\t\t\t\tTiers
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarTiers\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-products\" class=\"nav-link\">Clients</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-products\" class=\"nav-link\">Fournisseurs</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"layouts-vertical-hovered\" target=\"_blank\" class=\"nav-link\">Magasins</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#sidebarArticles\" class=\"nav-link\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarArticles\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-archive-line\"></i>
\t\t\t\t\t\t\t\t\tArticles
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarArticles\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-products\" class=\"nav-link\">Matières Premières</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-products\" class=\"nav-link\">Produits Finis</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-products\" class=\"nav-link\">Nomenclature</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<!-- Statistiques -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link menu-link\" href=\"#sidebarStats\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarStats\">
\t\t\t\t\t\t<i class=\"ri-bar-chart-line\"></i>
\t\t\t\t\t\t<span data-key=\"t-statistics\">Statistiques</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarStats\">
\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Générale</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Achats</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Productions</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Ventes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<!-- Logs -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link menu-link\" href=\"#sidebarLogs\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarLogs\">
\t\t\t\t\t\t<i class=\"ri-file-list-2-line\"></i>
\t\t\t\t\t\t<span data-key=\"t-logs\">Logs</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarLogs\">
\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Administration</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Système</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"sidebar-background\"></div>
</div>
<div class=\"vertical-overlay\"></div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
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
        return array (  275 => 174,  269 => 171,  263 => 168,  257 => 165,  251 => 162,  245 => 159,  239 => 156,  220 => 140,  214 => 137,  208 => 134,  202 => 131,  196 => 128,  172 => 107,  166 => 104,  160 => 101,  154 => 98,  148 => 95,  142 => 92,  136 => 89,  130 => 86,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ========== App Menu ========== -->
<div
\tclass=\"app-menu navbar-menu\">
\t<!-- LOGO -->
\t<div
\t\tclass=\"navbar-brand-box\">
\t\t<!-- Dark Logo-->
\t\t<a href=\"/\" class=\"logo logo-dark\">
\t\t\t<span class=\"logo-sm\">
\t\t\t\t<img src=\"../../assets/images/logo-sm.png\" alt=\"\" height=\"22\">
\t\t\t</span>
\t\t\t<span class=\"logo-lg\">
\t\t\t\t<img src=\"../../assets/images/logo-dark.png\" alt=\"\" height=\"17\">
\t\t\t</span>
\t\t</a>
\t\t<!-- Light Logo-->
\t\t<a href=\"/\" class=\"logo logo-light\">
\t\t\t<span class=\"logo-sm\">
\t\t\t\t<img src=\"../../assets/images/logo-sm.png\" alt=\"\" height=\"22\">
\t\t\t</span>
\t\t\t<span class=\"logo-lg\">
\t\t\t\t<img src=\"../../assets/images/logo-light.png\" alt=\"\" height=\"17\">
\t\t\t</span>
\t\t</a>
\t\t<button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\" id=\"vertical-hover\">
\t\t\t<i class=\"ri-record-circle-line\"></i>
\t\t</button>
\t</div>

\t<div id=\"scrollbar\">
\t\t<div class=\"container-fluid\">
\t\t\t<div id=\"two-column-menu\"></div>
\t\t\t<ul class=\"navbar-nav\" id=\"navbar-nav\">
\t\t\t\t<li class=\"menu-title\">
\t\t\t\t\t<span data-key=\"t-menu\">Menu</span>
\t\t\t\t</li>

\t\t\t\t<!-- Dashboards -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link menu-link\" href=\"#sidebarDashboards\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarDashboards\">
\t\t\t\t\t\t<i class=\"ri-dashboard-2-line\"></i>
\t\t\t\t\t\t<span data-key=\"t-dashboards\">Dashboards</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarDashboards\">
\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Tableau de Bord Principal</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<!-- Messages -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link menu-link\" href=\"#sidebarMessages\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarMessages\">
\t\t\t\t\t\t<i class=\"ri-mail-line\"></i>
\t\t\t\t\t\t<span data-key=\"t-messages\">Messages</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarMessages\">
\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Boite Réception</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Nouveaux Messages</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Messages Envoyés</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Corbeilles</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<!-- Gestion Des Achats -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link menu-link\" href=\"#sidebarPurchases\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarPurchases\">
\t\t\t\t\t\t<i class=\"ri-shopping-cart-line\"></i>
\t\t\t\t\t\t<span>Gestion Des Achats</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarPurchases\">
\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'DA'}) }}\" class=\"nav-link\">Devis achat</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'CA'}) }}\" class=\"nav-link\">Commandes achat</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'FA'}) }}\" class=\"nav-link\">Factures achat</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'FAA'}) }}\" class=\"nav-link\">Factures achat Avoire</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'BE'}) }}\" class=\"nav-link\">Bon d'entrée</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'BT'}) }}\" class=\"nav-link\">Bon de transfert</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'BR'}) }}\" class=\"nav-link\">Bon de retour</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'Inv'}) }}\" class=\"nav-link\">Inventaire</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<!-- Gestion Des Productions -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link menu-link\" href=\"#sidebarProduction\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarProduction\">
\t\t\t\t\t\t<i class=\"ri-building-2-line\"></i>
\t\t\t\t\t\t<span>Gestion Des Productions</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarProduction\">
\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"layouts-horizontal\" target=\"_blank\" class=\"nav-link\">Création des OF</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"layouts-detached\" target=\"_blank\" class=\"nav-link\">Demande de besoins</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'BE'}) }}\" class=\"nav-link\">Bon d'entrée</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'BS'}) }}\" class=\"nav-link\">Bon de sortie</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'BT'}) }}\" class=\"nav-link\">Bon de transfert</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'BR'}) }}\" class=\"nav-link\">Bon de retour</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'Inv'}) }}\" class=\"nav-link\">Inventaire</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>


\t\t\t\t<!-- Gestion Des Ventes -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link menu-link\" href=\"#sidebarSales\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarSales\">
\t\t\t\t\t\t<i class=\"ri-handbag-line\"></i>
\t\t\t\t\t\t<span>Gestion Des Ventes</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarSales\">
\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'DV'}) }}\" class=\"nav-link\">Devis vente</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'CV'}) }}\" class=\"nav-link\">Commandes vente</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'FV'}) }}\" class=\"nav-link\">Factures vente</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'FVA'}) }}\" class=\"nav-link\">Factures vente avoire</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'BS'}) }}\" class=\"nav-link\">Bon de sortie</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'BL'}) }}\" class=\"nav-link\">Bon de livraison</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index', {'Doc': 'Inv'}) }}\" class=\"nav-link\">Inventaire</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<!-- Administration -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link menu-link\" href=\"#sidebarAdmin\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarAdmin\">
\t\t\t\t\t\t<i class=\"ri-settings-3-line\"></i>
\t\t\t\t\t\t<span>Administration</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarAdmin\">
\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"layouts-horizontal\" target=\"_blank\" class=\"nav-link\">Droits d'accès</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"layouts-detached\" target=\"_blank\" class=\"nav-link\">Profiles</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"layouts-vertical-hovered\" target=\"_blank\" class=\"nav-link\">Utilisateurs Internes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#sidebarTiers\" class=\"nav-link\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarTiers\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-group-line\"></i>
\t\t\t\t\t\t\t\t\tTiers
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarTiers\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-products\" class=\"nav-link\">Clients</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-products\" class=\"nav-link\">Fournisseurs</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"layouts-vertical-hovered\" target=\"_blank\" class=\"nav-link\">Magasins</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#sidebarArticles\" class=\"nav-link\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarArticles\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-archive-line\"></i>
\t\t\t\t\t\t\t\t\tArticles
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarArticles\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-products\" class=\"nav-link\">Matières Premières</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-products\" class=\"nav-link\">Produits Finis</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-products\" class=\"nav-link\">Nomenclature</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<!-- Statistiques -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link menu-link\" href=\"#sidebarStats\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarStats\">
\t\t\t\t\t\t<i class=\"ri-bar-chart-line\"></i>
\t\t\t\t\t\t<span data-key=\"t-statistics\">Statistiques</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarStats\">
\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Générale</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Achats</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Productions</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Ventes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<!-- Logs -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link menu-link\" href=\"#sidebarLogs\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarLogs\">
\t\t\t\t\t\t<i class=\"ri-file-list-2-line\"></i>
\t\t\t\t\t\t<span data-key=\"t-logs\">Logs</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse menu-dropdown\" id=\"sidebarLogs\">
\t\t\t\t\t\t<ul class=\"nav nav-sm flex-column\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Administration</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"apps-chat\" class=\"nav-link\">Système</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"sidebar-background\"></div>
</div>
<div class=\"vertical-overlay\"></div>
", "partials/sidebar.html.twig", "C:\\Users\\Lenovo\\Desktop\\ERP_axia\\ERP_axia\\saas\\templates\\partials\\sidebar.html.twig");
    }
}
