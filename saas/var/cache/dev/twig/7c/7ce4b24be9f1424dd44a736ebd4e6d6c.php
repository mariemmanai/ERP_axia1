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
<div class=\"app-menu navbar-menu\">
    <!-- LOGO -->
    <div class=\"navbar-brand-box\">
        <!-- Dark Logo-->
        <a href=\"/\" class=\"logo logo-dark\">
            <span class=\"logo-sm\">
                <img src=\"../../assets/images/logo-sm.png\" alt=\"\" height=\"22\">
            </span>
            <span class=\"logo-lg\">
                <img src=\"../../assets/images/logo-dark.png\" alt=\"\" height=\"17\">
            </span>
        </a>
        <!-- Light Logo-->
        <a href=\"/\" class=\"logo logo-light\">
            <span class=\"logo-sm\">
                <img src=\"../../assets/images/logo-sm.png\" alt=\"\" height=\"22\">
            </span>
            <span class=\"logo-lg\">
                <img src=\"../../assets/images/logo-light.png\" alt=\"\" height=\"17\">
            </span>
        </a>
        <button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\" id=\"vertical-hover\">
            <i class=\"ri-record-circle-line\"></i>
        </button>
    </div>

    <div id=\"scrollbar\">
        <div class=\"container-fluid\">
        <div id=\"two-column-menu\"></div>
        <ul class=\"navbar-nav\" id=\"navbar-nav\">
            <li class=\"menu-title\"><span data-key=\"t-menu\">Menu</span></li>

            <!-- Dashboards -->
            <li class=\"nav-item\">
            <a class=\"nav-link menu-link\" href=\"#sidebarDashboards\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarDashboards\">
                <i class=\"ri-dashboard-2-line\"></i>
                <span data-key=\"t-dashboards\">Dashboards</span>
            </a>
            <div class=\"collapse menu-dropdown\" id=\"sidebarDashboards\">
                <ul class=\"nav nav-sm flex-column\">
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">Dashboard Principal</a>
                </li>
                </ul>
            </div>
            </li>

            <!-- Messages -->
            <li class=\"nav-item\">
            <a class=\"nav-link menu-link\" href=\"#sidebarMessages\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarMessages\">
                <i class=\"ri-mail-line\"></i>
                <span data-key=\"t-messages\">Messages</span>
            </a>
            <div class=\"collapse menu-dropdown\" id=\"sidebarMessages\">
                <ul class=\"nav nav-sm flex-column\">
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Boite Réception</a></li>
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Nouveaux Messages</a></li>
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Messages Envoyés</a></li>
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Corbeilles</a></li>
                </ul>
            </div>
            </li>

            <!-- Gestion Des Achats -->
            <li class=\"nav-item\">
            <a class=\"nav-link menu-link\" href=\"#sidebarPurchases\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarPurchases\">
                <i class=\"ri-shopping-cart-line\"></i>
                <span>Gestion Des Achats</span>
            </a>
            <div class=\"collapse menu-dropdown\" id=\"sidebarPurchases\">
                <ul class=\"nav nav-sm flex-column\">
                <li class=\"nav-item\"><a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "devis_achat"]);
        echo "\" class=\"nav-link\">Devis achat</a></li>                
                <li class=\"nav-item\"><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "commandes_achat"]);
        echo "\" class=\"nav-link\">Commandes achat</a></li>                
                <li class=\"nav-item\"><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "factures_achat"]);
        echo "\" class=\"nav-link\">Factures achat</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "factures_achat_avoire"]);
        echo "\" class=\"nav-link\">Factures achat Avoire</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "bon_entree"]);
        echo "\" class=\"nav-link\">Bon d'entrée</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "bon_transfert"]);
        echo "\" class=\"nav-link\">Bon de transfert</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "bon_retour"]);
        echo "\" class=\"nav-link\">Bon de retour</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "inventaire"]);
        echo "\" class=\"nav-link\">Inventaire</a></li>
                </ul>
            </div>
            </li>

            <!-- Gestion Des Productions -->
           <li class=\"nav-item\">
                <a class=\"nav-link menu-link\" href=\"#sidebarProduction\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarProduction\">
                    <i class=\"ri-building-2-line\"></i>
                    <span>Gestion Des Productions</span>
                </a>
                <div class=\"collapse menu-dropdown\" id=\"sidebarProduction\">
                    <ul class=\"nav nav-sm flex-column\">
                    <li class=\"nav-item\"><a href=\"layouts-horizontal\" target=\"_blank\" class=\"nav-link\">Création des OF</a></li>
                    <li class=\"nav-item\"><a href=\"layouts-detached\" target=\"_blank\" class=\"nav-link\">Demande de besoins</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "bon_entree"]);
        echo "\" class=\"nav-link\">Bon d'entrée</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "bon_sortie"]);
        echo "\" class=\"nav-link\">Bon de sortie</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "bon_transfert"]);
        echo "\" class=\"nav-link\">Bon de transfert</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "bon_retour"]);
        echo "\" class=\"nav-link\">Bon de retour</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "inventaire"]);
        echo "\" class=\"nav-link\">Inventaire</a></li>
                    </ul>
                </div>
            </li>


            <!-- Gestion Des Ventes -->
            <li class=\"nav-item\">
            <a class=\"nav-link menu-link\" href=\"#sidebarSales\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarSales\">
                <i class=\"ri-handbag-line\"></i>
                <span>Gestion Des Ventes</span>
            </a>
            <div class=\"collapse menu-dropdown\" id=\"sidebarSales\">
                <ul class=\"nav nav-sm flex-column\">
                <li class=\"nav-item\"><a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "devis_vente"]);
        echo "\" class=\"nav-link\">Devis vente</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "commandes_vente"]);
        echo "\" class=\"nav-link\">Commandes vente</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "factures_vente"]);
        echo "\" class=\"nav-link\">Factures vente</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "factures_vente_avoire"]);
        echo "\" class=\"nav-link\">Factures vente avoire</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "bon_sortie"]);
        echo "\" class=\"nav-link\">Bon de sortie</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "bon_livraison"]);
        echo "\" class=\"nav-link\">Bon de livraison</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index", ["filter" => "inventaire"]);
        echo "\" class=\"nav-link\">Inventaire</a></li>
                </ul>
            </div>
            </li>

            <!-- Administration -->
            <li class=\"nav-item\">
            <a class=\"nav-link menu-link\" href=\"#sidebarAdmin\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarAdmin\">
                <i class=\"ri-settings-3-line\"></i>
                <span>Administration</span>
            </a>
            <div class=\"collapse menu-dropdown\" id=\"sidebarAdmin\">
                <ul class=\"nav nav-sm flex-column\">
                <li class=\"nav-item\"><a href=\"layouts-horizontal\" target=\"_blank\" class=\"nav-link\">Droits d'accès</a></li>
                <li class=\"nav-item\"><a href=\"layouts-detached\" target=\"_blank\" class=\"nav-link\">Profiles</a></li>
                <li class=\"nav-item\"><a href=\"layouts-vertical-hovered\" target=\"_blank\" class=\"nav-link\">Utilisateurs Internes</a></li>
                <li class=\"nav-item\">
                    <a href=\"#sidebarTiers\" class=\"nav-link\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarTiers\">
                    <i class=\"ri-group-line\"></i> Tiers
                    </a>
                    <div class=\"collapse menu-dropdown\" id=\"sidebarTiers\">
                    <ul class=\"nav nav-sm flex-column\">
                        <li class=\"nav-item\"><a href=\"apps-ecommerce-products\" class=\"nav-link\">Clients</a></li>
                        <li class=\"nav-item\"><a href=\"apps-ecommerce-products\" class=\"nav-link\">Fournisseurs</a></li>
                    </ul>
                    </div>
                </li>
                <li class=\"nav-item\"><a href=\"layouts-vertical-hovered\" target=\"_blank\" class=\"nav-link\">Magasins</a></li>
                <li class=\"nav-item\">
                    <a href=\"#sidebarArticles\" class=\"nav-link\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarArticles\">
                    <i class=\"ri-archive-line\"></i> Articles
                    </a>
                    <div class=\"collapse menu-dropdown\" id=\"sidebarArticles\">
                    <ul class=\"nav nav-sm flex-column\">
                        <li class=\"nav-item\"><a href=\"apps-ecommerce-products\" class=\"nav-link\">Matières Premières</a></li>
                        <li class=\"nav-item\"><a href=\"apps-ecommerce-products\" class=\"nav-link\">Produits Finis</a></li>
                        <li class=\"nav-item\"><a href=\"apps-ecommerce-products\" class=\"nav-link\">Nomenclature</a></li>
                    </ul>
                    </div>
                </li>
                </ul>
            </div>
            </li>

            <!-- Statistiques -->
            <li class=\"nav-item\">
            <a class=\"nav-link menu-link\" href=\"#sidebarStats\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarStats\">
                <i class=\"ri-bar-chart-line\"></i>
                <span data-key=\"t-statistics\">Statistiques</span>
            </a>
            <div class=\"collapse menu-dropdown\" id=\"sidebarStats\">
                <ul class=\"nav nav-sm flex-column\">
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Générale</a></li>
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Achats</a></li>
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Productions</a></li>
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Ventes</a></li>
                </ul>
            </div>
            </li>

            <!-- Logs -->
            <li class=\"nav-item\">
            <a class=\"nav-link menu-link\" href=\"#sidebarLogs\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarLogs\">
                <i class=\"ri-file-list-2-line\"></i>
                <span data-key=\"t-logs\">Logs</span>
            </a>
            <div class=\"collapse menu-dropdown\" id=\"sidebarLogs\">
                <ul class=\"nav nav-sm flex-column\">
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Administration</a></li>
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Système</a></li>
                </ul>
            </div>
            </li>
        </ul>
    </div>
    </div>

    <div class=\"sidebar-background\"></div>
</div>
<div class=\"vertical-overlay\"></div>";
        
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
        return array (  220 => 119,  216 => 118,  212 => 117,  208 => 116,  204 => 115,  200 => 114,  196 => 113,  179 => 99,  175 => 98,  171 => 97,  167 => 96,  163 => 95,  145 => 80,  141 => 79,  137 => 78,  133 => 77,  129 => 76,  125 => 75,  121 => 74,  117 => 73,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ========== App Menu ========== -->
<div class=\"app-menu navbar-menu\">
    <!-- LOGO -->
    <div class=\"navbar-brand-box\">
        <!-- Dark Logo-->
        <a href=\"/\" class=\"logo logo-dark\">
            <span class=\"logo-sm\">
                <img src=\"../../assets/images/logo-sm.png\" alt=\"\" height=\"22\">
            </span>
            <span class=\"logo-lg\">
                <img src=\"../../assets/images/logo-dark.png\" alt=\"\" height=\"17\">
            </span>
        </a>
        <!-- Light Logo-->
        <a href=\"/\" class=\"logo logo-light\">
            <span class=\"logo-sm\">
                <img src=\"../../assets/images/logo-sm.png\" alt=\"\" height=\"22\">
            </span>
            <span class=\"logo-lg\">
                <img src=\"../../assets/images/logo-light.png\" alt=\"\" height=\"17\">
            </span>
        </a>
        <button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\" id=\"vertical-hover\">
            <i class=\"ri-record-circle-line\"></i>
        </button>
    </div>

    <div id=\"scrollbar\">
        <div class=\"container-fluid\">
        <div id=\"two-column-menu\"></div>
        <ul class=\"navbar-nav\" id=\"navbar-nav\">
            <li class=\"menu-title\"><span data-key=\"t-menu\">Menu</span></li>

            <!-- Dashboards -->
            <li class=\"nav-item\">
            <a class=\"nav-link menu-link\" href=\"#sidebarDashboards\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarDashboards\">
                <i class=\"ri-dashboard-2-line\"></i>
                <span data-key=\"t-dashboards\">Dashboards</span>
            </a>
            <div class=\"collapse menu-dropdown\" id=\"sidebarDashboards\">
                <ul class=\"nav nav-sm flex-column\">
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">Dashboard Principal</a>
                </li>
                </ul>
            </div>
            </li>

            <!-- Messages -->
            <li class=\"nav-item\">
            <a class=\"nav-link menu-link\" href=\"#sidebarMessages\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarMessages\">
                <i class=\"ri-mail-line\"></i>
                <span data-key=\"t-messages\">Messages</span>
            </a>
            <div class=\"collapse menu-dropdown\" id=\"sidebarMessages\">
                <ul class=\"nav nav-sm flex-column\">
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Boite Réception</a></li>
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Nouveaux Messages</a></li>
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Messages Envoyés</a></li>
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Corbeilles</a></li>
                </ul>
            </div>
            </li>

            <!-- Gestion Des Achats -->
            <li class=\"nav-item\">
            <a class=\"nav-link menu-link\" href=\"#sidebarPurchases\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarPurchases\">
                <i class=\"ri-shopping-cart-line\"></i>
                <span>Gestion Des Achats</span>
            </a>
            <div class=\"collapse menu-dropdown\" id=\"sidebarPurchases\">
                <ul class=\"nav nav-sm flex-column\">
                <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'devis_achat'}) }}\" class=\"nav-link\">Devis achat</a></li>                
                <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'commandes_achat'}) }}\" class=\"nav-link\">Commandes achat</a></li>                
                <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'factures_achat'}) }}\" class=\"nav-link\">Factures achat</a></li>
                <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'factures_achat_avoire'}) }}\" class=\"nav-link\">Factures achat Avoire</a></li>
                <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'bon_entree'}) }}\" class=\"nav-link\">Bon d'entrée</a></li>
                <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'bon_transfert'}) }}\" class=\"nav-link\">Bon de transfert</a></li>
                <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'bon_retour'}) }}\" class=\"nav-link\">Bon de retour</a></li>
                <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'inventaire'}) }}\" class=\"nav-link\">Inventaire</a></li>
                </ul>
            </div>
            </li>

            <!-- Gestion Des Productions -->
           <li class=\"nav-item\">
                <a class=\"nav-link menu-link\" href=\"#sidebarProduction\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarProduction\">
                    <i class=\"ri-building-2-line\"></i>
                    <span>Gestion Des Productions</span>
                </a>
                <div class=\"collapse menu-dropdown\" id=\"sidebarProduction\">
                    <ul class=\"nav nav-sm flex-column\">
                    <li class=\"nav-item\"><a href=\"layouts-horizontal\" target=\"_blank\" class=\"nav-link\">Création des OF</a></li>
                    <li class=\"nav-item\"><a href=\"layouts-detached\" target=\"_blank\" class=\"nav-link\">Demande de besoins</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'bon_entree'}) }}\" class=\"nav-link\">Bon d'entrée</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'bon_sortie'}) }}\" class=\"nav-link\">Bon de sortie</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'bon_transfert'}) }}\" class=\"nav-link\">Bon de transfert</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'bon_retour'}) }}\" class=\"nav-link\">Bon de retour</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'inventaire'}) }}\" class=\"nav-link\">Inventaire</a></li>
                    </ul>
                </div>
            </li>


            <!-- Gestion Des Ventes -->
            <li class=\"nav-item\">
            <a class=\"nav-link menu-link\" href=\"#sidebarSales\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarSales\">
                <i class=\"ri-handbag-line\"></i>
                <span>Gestion Des Ventes</span>
            </a>
            <div class=\"collapse menu-dropdown\" id=\"sidebarSales\">
                <ul class=\"nav nav-sm flex-column\">
                <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'devis_vente'}) }}\" class=\"nav-link\">Devis vente</a></li>
                <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'commandes_vente'}) }}\" class=\"nav-link\">Commandes vente</a></li>
                <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'factures_vente'}) }}\" class=\"nav-link\">Factures vente</a></li>
                <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'factures_vente_avoire'}) }}\" class=\"nav-link\">Factures vente avoire</a></li>
                <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'bon_sortie'}) }}\" class=\"nav-link\">Bon de sortie</a></li>
                <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'bon_livraison'}) }}\" class=\"nav-link\">Bon de livraison</a></li>
                <li class=\"nav-item\"><a href=\"{{ path('app_documents_index', {'filter': 'inventaire'}) }}\" class=\"nav-link\">Inventaire</a></li>
                </ul>
            </div>
            </li>

            <!-- Administration -->
            <li class=\"nav-item\">
            <a class=\"nav-link menu-link\" href=\"#sidebarAdmin\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarAdmin\">
                <i class=\"ri-settings-3-line\"></i>
                <span>Administration</span>
            </a>
            <div class=\"collapse menu-dropdown\" id=\"sidebarAdmin\">
                <ul class=\"nav nav-sm flex-column\">
                <li class=\"nav-item\"><a href=\"layouts-horizontal\" target=\"_blank\" class=\"nav-link\">Droits d'accès</a></li>
                <li class=\"nav-item\"><a href=\"layouts-detached\" target=\"_blank\" class=\"nav-link\">Profiles</a></li>
                <li class=\"nav-item\"><a href=\"layouts-vertical-hovered\" target=\"_blank\" class=\"nav-link\">Utilisateurs Internes</a></li>
                <li class=\"nav-item\">
                    <a href=\"#sidebarTiers\" class=\"nav-link\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarTiers\">
                    <i class=\"ri-group-line\"></i> Tiers
                    </a>
                    <div class=\"collapse menu-dropdown\" id=\"sidebarTiers\">
                    <ul class=\"nav nav-sm flex-column\">
                        <li class=\"nav-item\"><a href=\"apps-ecommerce-products\" class=\"nav-link\">Clients</a></li>
                        <li class=\"nav-item\"><a href=\"apps-ecommerce-products\" class=\"nav-link\">Fournisseurs</a></li>
                    </ul>
                    </div>
                </li>
                <li class=\"nav-item\"><a href=\"layouts-vertical-hovered\" target=\"_blank\" class=\"nav-link\">Magasins</a></li>
                <li class=\"nav-item\">
                    <a href=\"#sidebarArticles\" class=\"nav-link\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarArticles\">
                    <i class=\"ri-archive-line\"></i> Articles
                    </a>
                    <div class=\"collapse menu-dropdown\" id=\"sidebarArticles\">
                    <ul class=\"nav nav-sm flex-column\">
                        <li class=\"nav-item\"><a href=\"apps-ecommerce-products\" class=\"nav-link\">Matières Premières</a></li>
                        <li class=\"nav-item\"><a href=\"apps-ecommerce-products\" class=\"nav-link\">Produits Finis</a></li>
                        <li class=\"nav-item\"><a href=\"apps-ecommerce-products\" class=\"nav-link\">Nomenclature</a></li>
                    </ul>
                    </div>
                </li>
                </ul>
            </div>
            </li>

            <!-- Statistiques -->
            <li class=\"nav-item\">
            <a class=\"nav-link menu-link\" href=\"#sidebarStats\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarStats\">
                <i class=\"ri-bar-chart-line\"></i>
                <span data-key=\"t-statistics\">Statistiques</span>
            </a>
            <div class=\"collapse menu-dropdown\" id=\"sidebarStats\">
                <ul class=\"nav nav-sm flex-column\">
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Générale</a></li>
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Achats</a></li>
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Productions</a></li>
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Ventes</a></li>
                </ul>
            </div>
            </li>

            <!-- Logs -->
            <li class=\"nav-item\">
            <a class=\"nav-link menu-link\" href=\"#sidebarLogs\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarLogs\">
                <i class=\"ri-file-list-2-line\"></i>
                <span data-key=\"t-logs\">Logs</span>
            </a>
            <div class=\"collapse menu-dropdown\" id=\"sidebarLogs\">
                <ul class=\"nav nav-sm flex-column\">
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Administration</a></li>
                <li class=\"nav-item\"><a href=\"apps-chat\" class=\"nav-link\">Système</a></li>
                </ul>
            </div>
            </li>
        </ul>
    </div>
    </div>

    <div class=\"sidebar-background\"></div>
</div>
<div class=\"vertical-overlay\"></div>", "partials/sidebar.html.twig", "C:\\Users\\Lenovo\\Desktop\\ERP_axia\\ERP_axia\\saas\\templates\\partials\\sidebar.html.twig");
    }
}
