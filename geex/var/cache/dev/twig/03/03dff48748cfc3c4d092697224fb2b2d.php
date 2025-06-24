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

/* partials/sidebar.html.twig */
class __TwigTemplate_6d62e9aa352fd454ddfbb18e67a9b336 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        // line 1
        yield "<div class=\"geex-sidebar\">
\t<a href=\"#\" class=\"geex-sidebar__close\">
\t\t<i class=\"uil uil-times\"></i>
\t</a>
\t<div class=\"geex-sidebar__wrapper\">
\t\t<div class=\"geex-sidebar__header\">
\t\t\t<a href=\"index\" class=\"geex-sidebar__logo\">
\t\t\t\t<img class=\"logo-lite\" src=\"assets/img/logo-dark.png\" alt=\"logo\" />
\t\t\t\t<img class=\"logo-dark\" src=\"assets/img/logo-lite.png\" alt=\"logo\" />
\t\t\t</a>
\t\t</div>
\t\t<nav class=\"geex-sidebar__menu-wrapper\">
\t\t\t<ul class=\"geex-sidebar__menu\">
\t\t\t\t<li class=\"geex-sidebar__menu__item has-children\">
\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link\">
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<g clip-path=\"url(#clip0_dashboard)\">
\t\t\t\t\t\t\t\t<!-- Cadre du dashboard -->
\t\t\t\t\t\t\t\t<rect x=\"3\" y=\"3\" width=\"16\" height=\"16\" rx=\"1\" stroke=\"#B9BBBD\" stroke-width=\"2\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- Indicateurs -->
\t\t\t\t\t\t\t\t<circle cx=\"7\" cy=\"7\" r=\"2\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<circle cx=\"15\" cy=\"7\" r=\"2\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<circle cx=\"7\" cy=\"15\" r=\"2\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<circle cx=\"15\" cy=\"15\" r=\"2\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- Lignes de connexion -->
\t\t\t\t\t\t\t\t<path d=\"M7 9V13M15 9V13M9 7H13M9 15H13\" stroke=\"#B9BBBD\" stroke-width=\"1.5\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t<clipPath id=\"clip0_dashboard\">
\t\t\t\t\t\t\t\t\t<rect width=\"22\" height=\"22\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t</svg>\t\t\t\t\t\t\t
\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t</a>  
\t\t\t\t</li>

\t\t\t\t<li class=\"geex-sidebar__menu__item has-children\">
\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link\">
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<g clip-path=\"url(#clip0_msg)\">
\t\t\t\t\t\t\t\t<!-- Enveloppe de message -->
\t\t\t\t\t\t\t\t<path d=\"M19 4H3C1.89543 4 1 4.89543 1 6V16C1 17.1046 1.89543 18 3 18H19C20.1046 18 21 17.1046 21 16V6C21 4.89543 20.1046 4 19 4Z\" stroke=\"#B9BBBD\" stroke-width=\"2\"/>
\t\t\t\t\t\t\t\t<path d=\"M1 6L11 12L21 6\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t<clipPath id=\"clip0_msg\">
\t\t\t\t\t\t\t\t\t<rect width=\"22\" height=\"22\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t</svg>\t\t\t\t\t\t
\t\t\t\t\t\t<span>Messages</span>
\t\t\t\t\t</a>  
\t\t\t\t\t<ul class=\"geex-sidebar__submenu\">
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link geex-customizer__btn--top\">Nouveaux Messages</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link geex-customizer__btn--side\">Boite Réception</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link geex-customizer__btn--light\">Messages envoyés</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link geex-customizer__btn--dark\">Corbeille</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"geex-sidebar__menu__item has-children\">
\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link\">
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<g clip-path=\"url(#clip0_purchase)\">
\t\t\t\t\t\t\t\t<!-- Panier/sac d'achat -->
\t\t\t\t\t\t\t\t<path d=\"M6 8V5C6 3.34315 7.34315 2 9 2H13C14.6569 2 16 3.34315 16 5V8\" stroke=\"#B9BBBD\" stroke-width=\"2\"/>
\t\t\t\t\t\t\t\t<!-- Conteneur principal -->
\t\t\t\t\t\t\t\t<path d=\"M18 8H4C2.89543 8 2 8.89543 2 10V18C2 19.1046 2.89543 20 4 20H18C19.1046 20 20 19.1046 20 18V10C20 8.89543 19.1046 8 18 8Z\" stroke=\"#B9BBBD\" stroke-width=\"2\"/>
\t\t\t\t\t\t\t\t<!-- Lignes représentant des documents/factures -->
\t\t\t\t\t\t\t\t<path d=\"M6 12H16\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t\t<path d=\"M6 15H16\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t\t<path d=\"M6 18H13\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t\t<!-- Symbole dollar/euro pour les achats -->
\t\t\t\t\t\t\t\t<path d=\"M11 10V12\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t\t<path d=\"M10 11H12\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t<clipPath id=\"clip0_purchase\">
\t\t\t\t\t\t\t\t\t<rect width=\"22\" height=\"22\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t</svg>\t\t\t\t\t\t\t
\t\t\t\t\t\t<span>Gestion des achats</span>
\t\t\t\t\t</a>  
\t\t\t\t\t<ul class=\"geex-sidebar__submenu\">
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"todo\" class=\"geex-sidebar__menu__link\">Devis fournisseurs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"chat\" class=\"geex-sidebar__menu__link\">Commandes fournisseurs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"calendar\" class=\"geex-sidebar__menu__link\">Factures fournisseurs avoire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"todo\" class=\"geex-sidebar__menu__link\">Bons d'entrée</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"chat\" class=\"geex-sidebar__menu__link\">Bons de transfert</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"calendar\" class=\"geex-sidebar__menu__link\">Bons de retour</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"calendar\" class=\"geex-sidebar__menu__link\">Inventaire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"geex-sidebar__menu__item has-children\">
\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link\">
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<g clip-path=\"url(#clip0_production)\">
\t\t\t\t\t\t\t\t<!-- Chaîne de production -->
\t\t\t\t\t\t\t\t<path d=\"M2 6H20V8H2V6Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M4 10H18V12H4V10Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M6 14H16V16H6V14Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- Engrenages -->
\t\t\t\t\t\t\t\t<path d=\"M18 4C19.1046 4 20 3.10457 20 2C20 0.89543 19.1046 0 18 0C16.8954 0 16 0.89543 16 2C16 3.10457 16.8954 4 18 4Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M4 22C5.10457 22 6 21.1046 6 20C6 18.8954 5.10457 18 4 18C2.89543 18 2 18.8954 2 20C2 21.1046 2.89543 22 4 22Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- Flèche de processus -->
\t\t\t\t\t\t\t\t<path d=\"M11 5V17M11 17L15 13M11 17L7 13\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t<clipPath id=\"clip0_production\">
\t\t\t\t\t\t\t\t\t<rect width=\"22\" height=\"22\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t</svg>\t\t\t\t\t\t
\t\t\t\t\t\t<span>Gestion de production</span>
\t\t\t\t\t</a>  
\t\t\t\t\t<ul class=\"geex-sidebar__submenu\">
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"chart\" class=\"geex-sidebar__menu__link\">Devis client</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"badge\" class=\"geex-sidebar__menu__link\">Commandes client</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"button\" class=\"geex-sidebar__menu__link\">Bons d'entrée</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"color\" class=\"geex-sidebar__menu__link\">Bons de transfert</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"form\" class=\"geex-sidebar__menu__link\">Bons de sortie</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"icon\" class=\"geex-sidebar__menu__link\">Bons de retour</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"geex-sidebar__menu__item has-children\">
\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link\">
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<g clip-path=\"url(#clip0_sales)\">
\t\t\t\t\t\t\t\t<!-- Graphique de croissance (ligne de tendance) -->
\t\t\t\t\t\t\t\t<path d=\"M1 15L5 11L9 15L13 7L17 11L21 7\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- Caddie/sac d'achat -->
\t\t\t\t\t\t\t\t<path d=\"M18 19C18.5523 19 19 18.5523 19 18C19 17.4477 18.5523 17 18 17C17.4477 17 17 17.4477 17 18C17 18.5523 17.4477 19 18 19Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M6 19C6.55228 19 7 18.5523 7 18C7 17.4477 6.55228 17 6 17C5.44772 17 5 17.4477 5 18C5 18.5523 5.44772 19 6 19Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M1 3H3L5 13H17L19 7H7\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- Graphique à barres (petit) -->
\t\t\t\t\t\t\t\t<path d=\"M3 6H5V10H3V6Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M7 6H9V8H7V6Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M11 6H13V12H11V6Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t<clipPath id=\"clip0_sales\">
\t\t\t\t\t\t\t\t\t<rect width=\"22\" height=\"22\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t</svg>\t\t\t\t\t\t
\t\t\t\t\t\t<span>Gestion de ventes</span>
\t\t\t\t\t</a>  
\t\t\t\t\t<ul class=\"geex-sidebar__submenu\">
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"blog\" class=\"geex-sidebar__menu__link\">Devis client</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"faq\" class=\"geex-sidebar__menu__link\">Commandes client</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"pricing\" class=\"geex-sidebar__menu__link\">Bons d'entrée</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"testimonial\" class=\"geex-sidebar__menu__link\">Bons de sortie</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"terms\" class=\"geex-sidebar__menu__link\">Bons de livraison </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"signin\" class=\"geex-sidebar__menu__link\">Inventaire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"signup\" class=\"geex-sidebar__menu__link\">Factures client</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"forgot-password\" class=\"geex-sidebar__menu__link\">Factures client avoire</a>
\t\t\t\t\t\t</li>\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"geex-sidebar__menu__item has-children\">
\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link\">
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<g clip-path=\"url(#clip0_admin)\">
\t\t\t\t\t\t\t\t<!-- Bâtiment/admin -->
\t\t\t\t\t\t\t\t<path d=\"M11 7V3L3 7V21H19V7L11 3Z\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t<!-- Fenêtres -->
\t\t\t\t\t\t\t\t<path d=\"M7 11H9V13H7V11Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M13 11H15V13H13V11Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M7 15H9V17H7V15Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M13 15H15V17H13V15Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<!-- Porte -->
\t\t\t\t\t\t\t\t<path d=\"M10 18V21\" stroke=\"#B9BBBD\" stroke-width=\"2\"/>
\t\t\t\t\t\t\t\t<path d=\"M12 18V21\" stroke=\"#B9BBBD\" stroke-width=\"2\"/>
\t\t\t\t\t\t\t\t<path d=\"M9 18H13V21H9V18Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<!-- Toit/détail -->
\t\t\t\t\t\t\t\t<path d=\"M11 3L3 7H19L11 3Z\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t<clipPath id=\"clip0_admin\">
\t\t\t\t\t\t\t\t\t<rect width=\"22\" height=\"22\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t</svg>\t\t\t\t\t\t\t
\t\t\t\t\t\t<span>Administration</span>
\t\t\t\t\t</a>  
\t\t\t\t\t<ul class=\"geex-sidebar__submenu\">
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"blog\" class=\"geex-sidebar__menu__link\">Droit d'accès</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"faq\" class=\"geex-sidebar__menu__link\">Profiles</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"pricing\" class=\"geex-sidebar__menu__link\">Utilissateurs internes</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"testimonial\" class=\"geex-sidebar__menu__link\">Tiers</a>
\t\t\t\t\t\t\t\t<ul class=\"geex-sidebar__submenu\">
                \t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
                    \t\t\t\t\t<a href=\"tiers/fournisseurs\" class=\"geex-sidebar__menu__link\">Fournisseurs</a>
                \t\t\t\t\t</li>
                \t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
                    \t\t\t\t\t<a href=\"tiers/clients\" class=\"geex-sidebar__menu__link\">Clients</a>
                \t\t\t\t\t</li>
            \t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"terms\" class=\"geex-sidebar__menu__link\">Magasins </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"signin\" class=\"geex-sidebar__menu__link\">Articles</a>
\t\t\t\t\t\t\t\t<ul class=\"geex-sidebar__submenu\">
\t\t\t\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"blog\" class=\"geex-sidebar__menu__link\">Produits Finaux</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"faq\" class=\"geex-sidebar__menu__link\">Matières Premières</a>
\t\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"faq\" class=\"geex-sidebar__menu__link\">Nomenclatures</a>
\t\t\t\t\t\t\t\t\t</li>\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"geex-sidebar__menu__item has-children\">
\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link\">
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<g clip-path=\"url(#clip0_stats)\">
\t\t\t\t\t\t\t\t<path d=\"M21 21H1V1\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t\t<path d=\"M5 15L9 11L13 15L17 9\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t<path d=\"M19 5H17V7H19V5Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M15 9H13V11H15V9Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M11 13H9V15H11V13Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M7 17H5V19H7V17Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t<clipPath id=\"clip0_stats\">
\t\t\t\t\t\t\t\t\t<rect width=\"22\" height=\"22\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t</svg>\t\t\t\t\t\t
\t\t\t\t\t\t<span>Statistiques</span>
\t\t\t\t\t</a>  
\t\t\t\t\t<ul class=\"geex-sidebar__submenu\">
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"blog\" class=\"geex-sidebar__menu__link\">Générale</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"faq\" class=\"geex-sidebar__menu__link\">Commandes client</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"pricing\" class=\"geex-sidebar__menu__link\">Bons d'entrée</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"testimonial\" class=\"geex-sidebar__menu__link\">Bons de sortie</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"terms\" class=\"geex-sidebar__menu__link\">Bons de livraison </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"signin\" class=\"geex-sidebar__menu__link\">Inventaire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"signup\" class=\"geex-sidebar__menu__link\">Factures client</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"forgot-password\" class=\"geex-sidebar__menu__link\">Factures client avoire</a>
\t\t\t\t\t\t</li>\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
        
\t</div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/sidebar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"geex-sidebar\">
\t<a href=\"#\" class=\"geex-sidebar__close\">
\t\t<i class=\"uil uil-times\"></i>
\t</a>
\t<div class=\"geex-sidebar__wrapper\">
\t\t<div class=\"geex-sidebar__header\">
\t\t\t<a href=\"index\" class=\"geex-sidebar__logo\">
\t\t\t\t<img class=\"logo-lite\" src=\"assets/img/logo-dark.png\" alt=\"logo\" />
\t\t\t\t<img class=\"logo-dark\" src=\"assets/img/logo-lite.png\" alt=\"logo\" />
\t\t\t</a>
\t\t</div>
\t\t<nav class=\"geex-sidebar__menu-wrapper\">
\t\t\t<ul class=\"geex-sidebar__menu\">
\t\t\t\t<li class=\"geex-sidebar__menu__item has-children\">
\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link\">
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<g clip-path=\"url(#clip0_dashboard)\">
\t\t\t\t\t\t\t\t<!-- Cadre du dashboard -->
\t\t\t\t\t\t\t\t<rect x=\"3\" y=\"3\" width=\"16\" height=\"16\" rx=\"1\" stroke=\"#B9BBBD\" stroke-width=\"2\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- Indicateurs -->
\t\t\t\t\t\t\t\t<circle cx=\"7\" cy=\"7\" r=\"2\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<circle cx=\"15\" cy=\"7\" r=\"2\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<circle cx=\"7\" cy=\"15\" r=\"2\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<circle cx=\"15\" cy=\"15\" r=\"2\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- Lignes de connexion -->
\t\t\t\t\t\t\t\t<path d=\"M7 9V13M15 9V13M9 7H13M9 15H13\" stroke=\"#B9BBBD\" stroke-width=\"1.5\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t<clipPath id=\"clip0_dashboard\">
\t\t\t\t\t\t\t\t\t<rect width=\"22\" height=\"22\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t</svg>\t\t\t\t\t\t\t
\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t</a>  
\t\t\t\t</li>

\t\t\t\t<li class=\"geex-sidebar__menu__item has-children\">
\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link\">
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<g clip-path=\"url(#clip0_msg)\">
\t\t\t\t\t\t\t\t<!-- Enveloppe de message -->
\t\t\t\t\t\t\t\t<path d=\"M19 4H3C1.89543 4 1 4.89543 1 6V16C1 17.1046 1.89543 18 3 18H19C20.1046 18 21 17.1046 21 16V6C21 4.89543 20.1046 4 19 4Z\" stroke=\"#B9BBBD\" stroke-width=\"2\"/>
\t\t\t\t\t\t\t\t<path d=\"M1 6L11 12L21 6\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t<clipPath id=\"clip0_msg\">
\t\t\t\t\t\t\t\t\t<rect width=\"22\" height=\"22\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t</svg>\t\t\t\t\t\t
\t\t\t\t\t\t<span>Messages</span>
\t\t\t\t\t</a>  
\t\t\t\t\t<ul class=\"geex-sidebar__submenu\">
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link geex-customizer__btn--top\">Nouveaux Messages</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link geex-customizer__btn--side\">Boite Réception</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link geex-customizer__btn--light\">Messages envoyés</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link geex-customizer__btn--dark\">Corbeille</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"geex-sidebar__menu__item has-children\">
\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link\">
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<g clip-path=\"url(#clip0_purchase)\">
\t\t\t\t\t\t\t\t<!-- Panier/sac d'achat -->
\t\t\t\t\t\t\t\t<path d=\"M6 8V5C6 3.34315 7.34315 2 9 2H13C14.6569 2 16 3.34315 16 5V8\" stroke=\"#B9BBBD\" stroke-width=\"2\"/>
\t\t\t\t\t\t\t\t<!-- Conteneur principal -->
\t\t\t\t\t\t\t\t<path d=\"M18 8H4C2.89543 8 2 8.89543 2 10V18C2 19.1046 2.89543 20 4 20H18C19.1046 20 20 19.1046 20 18V10C20 8.89543 19.1046 8 18 8Z\" stroke=\"#B9BBBD\" stroke-width=\"2\"/>
\t\t\t\t\t\t\t\t<!-- Lignes représentant des documents/factures -->
\t\t\t\t\t\t\t\t<path d=\"M6 12H16\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t\t<path d=\"M6 15H16\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t\t<path d=\"M6 18H13\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t\t<!-- Symbole dollar/euro pour les achats -->
\t\t\t\t\t\t\t\t<path d=\"M11 10V12\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t\t<path d=\"M10 11H12\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t<clipPath id=\"clip0_purchase\">
\t\t\t\t\t\t\t\t\t<rect width=\"22\" height=\"22\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t</svg>\t\t\t\t\t\t\t
\t\t\t\t\t\t<span>Gestion des achats</span>
\t\t\t\t\t</a>  
\t\t\t\t\t<ul class=\"geex-sidebar__submenu\">
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"todo\" class=\"geex-sidebar__menu__link\">Devis fournisseurs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"chat\" class=\"geex-sidebar__menu__link\">Commandes fournisseurs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"calendar\" class=\"geex-sidebar__menu__link\">Factures fournisseurs avoire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"todo\" class=\"geex-sidebar__menu__link\">Bons d'entrée</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"chat\" class=\"geex-sidebar__menu__link\">Bons de transfert</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"calendar\" class=\"geex-sidebar__menu__link\">Bons de retour</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"calendar\" class=\"geex-sidebar__menu__link\">Inventaire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"geex-sidebar__menu__item has-children\">
\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link\">
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<g clip-path=\"url(#clip0_production)\">
\t\t\t\t\t\t\t\t<!-- Chaîne de production -->
\t\t\t\t\t\t\t\t<path d=\"M2 6H20V8H2V6Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M4 10H18V12H4V10Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M6 14H16V16H6V14Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- Engrenages -->
\t\t\t\t\t\t\t\t<path d=\"M18 4C19.1046 4 20 3.10457 20 2C20 0.89543 19.1046 0 18 0C16.8954 0 16 0.89543 16 2C16 3.10457 16.8954 4 18 4Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M4 22C5.10457 22 6 21.1046 6 20C6 18.8954 5.10457 18 4 18C2.89543 18 2 18.8954 2 20C2 21.1046 2.89543 22 4 22Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- Flèche de processus -->
\t\t\t\t\t\t\t\t<path d=\"M11 5V17M11 17L15 13M11 17L7 13\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t<clipPath id=\"clip0_production\">
\t\t\t\t\t\t\t\t\t<rect width=\"22\" height=\"22\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t</svg>\t\t\t\t\t\t
\t\t\t\t\t\t<span>Gestion de production</span>
\t\t\t\t\t</a>  
\t\t\t\t\t<ul class=\"geex-sidebar__submenu\">
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"chart\" class=\"geex-sidebar__menu__link\">Devis client</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"badge\" class=\"geex-sidebar__menu__link\">Commandes client</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"button\" class=\"geex-sidebar__menu__link\">Bons d'entrée</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"color\" class=\"geex-sidebar__menu__link\">Bons de transfert</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"form\" class=\"geex-sidebar__menu__link\">Bons de sortie</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"icon\" class=\"geex-sidebar__menu__link\">Bons de retour</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"geex-sidebar__menu__item has-children\">
\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link\">
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<g clip-path=\"url(#clip0_sales)\">
\t\t\t\t\t\t\t\t<!-- Graphique de croissance (ligne de tendance) -->
\t\t\t\t\t\t\t\t<path d=\"M1 15L5 11L9 15L13 7L17 11L21 7\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- Caddie/sac d'achat -->
\t\t\t\t\t\t\t\t<path d=\"M18 19C18.5523 19 19 18.5523 19 18C19 17.4477 18.5523 17 18 17C17.4477 17 17 17.4477 17 18C17 18.5523 17.4477 19 18 19Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M6 19C6.55228 19 7 18.5523 7 18C7 17.4477 6.55228 17 6 17C5.44772 17 5 17.4477 5 18C5 18.5523 5.44772 19 6 19Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M1 3H3L5 13H17L19 7H7\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- Graphique à barres (petit) -->
\t\t\t\t\t\t\t\t<path d=\"M3 6H5V10H3V6Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M7 6H9V8H7V6Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M11 6H13V12H11V6Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t<clipPath id=\"clip0_sales\">
\t\t\t\t\t\t\t\t\t<rect width=\"22\" height=\"22\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t</svg>\t\t\t\t\t\t
\t\t\t\t\t\t<span>Gestion de ventes</span>
\t\t\t\t\t</a>  
\t\t\t\t\t<ul class=\"geex-sidebar__submenu\">
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"blog\" class=\"geex-sidebar__menu__link\">Devis client</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"faq\" class=\"geex-sidebar__menu__link\">Commandes client</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"pricing\" class=\"geex-sidebar__menu__link\">Bons d'entrée</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"testimonial\" class=\"geex-sidebar__menu__link\">Bons de sortie</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"terms\" class=\"geex-sidebar__menu__link\">Bons de livraison </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"signin\" class=\"geex-sidebar__menu__link\">Inventaire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"signup\" class=\"geex-sidebar__menu__link\">Factures client</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"forgot-password\" class=\"geex-sidebar__menu__link\">Factures client avoire</a>
\t\t\t\t\t\t</li>\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"geex-sidebar__menu__item has-children\">
\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link\">
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<g clip-path=\"url(#clip0_admin)\">
\t\t\t\t\t\t\t\t<!-- Bâtiment/admin -->
\t\t\t\t\t\t\t\t<path d=\"M11 7V3L3 7V21H19V7L11 3Z\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t<!-- Fenêtres -->
\t\t\t\t\t\t\t\t<path d=\"M7 11H9V13H7V11Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M13 11H15V13H13V11Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M7 15H9V17H7V15Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M13 15H15V17H13V15Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<!-- Porte -->
\t\t\t\t\t\t\t\t<path d=\"M10 18V21\" stroke=\"#B9BBBD\" stroke-width=\"2\"/>
\t\t\t\t\t\t\t\t<path d=\"M12 18V21\" stroke=\"#B9BBBD\" stroke-width=\"2\"/>
\t\t\t\t\t\t\t\t<path d=\"M9 18H13V21H9V18Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<!-- Toit/détail -->
\t\t\t\t\t\t\t\t<path d=\"M11 3L3 7H19L11 3Z\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t<clipPath id=\"clip0_admin\">
\t\t\t\t\t\t\t\t\t<rect width=\"22\" height=\"22\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t</svg>\t\t\t\t\t\t\t
\t\t\t\t\t\t<span>Administration</span>
\t\t\t\t\t</a>  
\t\t\t\t\t<ul class=\"geex-sidebar__submenu\">
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"blog\" class=\"geex-sidebar__menu__link\">Droit d'accès</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"faq\" class=\"geex-sidebar__menu__link\">Profiles</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"pricing\" class=\"geex-sidebar__menu__link\">Utilissateurs internes</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"testimonial\" class=\"geex-sidebar__menu__link\">Tiers</a>
\t\t\t\t\t\t\t\t<ul class=\"geex-sidebar__submenu\">
                \t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
                    \t\t\t\t\t<a href=\"tiers/fournisseurs\" class=\"geex-sidebar__menu__link\">Fournisseurs</a>
                \t\t\t\t\t</li>
                \t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
                    \t\t\t\t\t<a href=\"tiers/clients\" class=\"geex-sidebar__menu__link\">Clients</a>
                \t\t\t\t\t</li>
            \t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"terms\" class=\"geex-sidebar__menu__link\">Magasins </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"signin\" class=\"geex-sidebar__menu__link\">Articles</a>
\t\t\t\t\t\t\t\t<ul class=\"geex-sidebar__submenu\">
\t\t\t\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"blog\" class=\"geex-sidebar__menu__link\">Produits Finaux</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"faq\" class=\"geex-sidebar__menu__link\">Matières Premières</a>
\t\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"faq\" class=\"geex-sidebar__menu__link\">Nomenclatures</a>
\t\t\t\t\t\t\t\t\t</li>\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"geex-sidebar__menu__item has-children\">
\t\t\t\t\t<a href=\"#\" class=\"geex-sidebar__menu__link\">
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<g clip-path=\"url(#clip0_stats)\">
\t\t\t\t\t\t\t\t<path d=\"M21 21H1V1\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t\t<path d=\"M5 15L9 11L13 15L17 9\" stroke=\"#B9BBBD\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t<path d=\"M19 5H17V7H19V5Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M15 9H13V11H15V9Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M11 13H9V15H11V13Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t\t<path d=\"M7 17H5V19H7V17Z\" fill=\"#B9BBBD\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t<clipPath id=\"clip0_stats\">
\t\t\t\t\t\t\t\t\t<rect width=\"22\" height=\"22\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t</svg>\t\t\t\t\t\t
\t\t\t\t\t\t<span>Statistiques</span>
\t\t\t\t\t</a>  
\t\t\t\t\t<ul class=\"geex-sidebar__submenu\">
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"blog\" class=\"geex-sidebar__menu__link\">Générale</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"faq\" class=\"geex-sidebar__menu__link\">Commandes client</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"pricing\" class=\"geex-sidebar__menu__link\">Bons d'entrée</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"testimonial\" class=\"geex-sidebar__menu__link\">Bons de sortie</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"terms\" class=\"geex-sidebar__menu__link\">Bons de livraison </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"signin\" class=\"geex-sidebar__menu__link\">Inventaire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"signup\" class=\"geex-sidebar__menu__link\">Factures client</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geex-sidebar__menu__item\">
\t\t\t\t\t\t\t<a href=\"forgot-password\" class=\"geex-sidebar__menu__link\">Factures client avoire</a>
\t\t\t\t\t\t</li>\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
        
\t</div>
</div>", "partials/sidebar.html.twig", "C:\\Users\\Lenovo\\Downloads\\ERP_axia\\ProjetWeb - Copie (2)\\geex\\templates\\partials\\sidebar.html.twig");
    }
}
