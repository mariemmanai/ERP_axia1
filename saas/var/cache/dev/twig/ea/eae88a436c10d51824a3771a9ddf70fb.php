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

/* documents/show.html.twig */
class __TwigTemplate_ee25fe6ddfc73fb72a2b4fdebdb43651 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/show.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>
\t<br>
\t<br>
\t";
        // line 6
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Détails du document"]);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/dropzone/dropzone.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body>
\t<div id=\"layout-wrapper\">
\t\t";
        // line 16
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "

\t\t<div class=\"main-content\">
\t\t\t<div class=\"page-content\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t";
        // line 21
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Documents", "title" => "Détails du document"]);
        // line 24
        echo "

\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t<div class=\"col-xxl-9\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"invoice-title\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"float-end font-size-16\">Document #";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 31, $this->source); })()), "reference", [], "any", false, false, false, 31), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../assets/images/logo-dark.png\" alt=\"logo\" height=\"28\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<hr class=\"my-4\">

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-semibold\">Expéditeur :</h6>
\t\t\t\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 43, $this->source); })()), "emetteur", [], "any", false, false, false, 43), "username", [], "any", false, false, false, 43), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 44, $this->source); })()), "emetteur", [], "any", false, false, false, 44), "mail", [], "any", false, false, false, 44), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-semibold\">Destinataire :</h6>
\t\t\t\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 50, $this->source); })()), "destinataire", [], "any", false, false, false, 50), "username", [], "any", false, false, false, 50), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 51, $this->source); })()), "destinataire", [], "any", false, false, false, 51), "mail", [], "any", false, false, false, 51), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-semibold\">Date du document :</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 60, $this->source); })()), "docDate", [], "any", false, false, false, 60), "d/m/Y"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-semibold\">Statut :</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-";
        // line 66
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 66, $this->source); })()), "status", [], "any", false, false, false, 66) == "Paid")) ? ("success") : ("warning"));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 67
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 67, $this->source); })()), "status", [], "any", false, false, false, 67) == "Paid")) ? ("Payé") : ("En attente"));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"py-2 mt-3\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-size-15\">Résumé du document</h5>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-nowrap\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 70px;\">N°</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Article</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\">Prix unitaire</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\">Quantité</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\">Total</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 89, $this->source); })()), "lignes", [], "any", false, false, false, 89));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 90
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "article", [], "any", false, false, false, 92), "reference", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["ligne"], "prixUnitaireHt", [], "any", false, false, false, 93), "EUR"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "qte", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["ligne"], "prixTotalHt", [], "any", false, false, false, 95), "EUR"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\" class=\"border-0 text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Sous-total</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"border-0 text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 103, $this->source); })()), "montantHt", [], "any", false, false, false, 103), "EUR"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\" class=\"border-0 text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>TVA (";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 108, $this->source); })()), "tauxTva", [], "any", false, false, false, 108), "html", null, true);
        echo "%)</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"border-0 text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 111, $this->source); })()), "tauxTva", [], "any", false, false, false, 111), "EUR"), "html", null, true);
        echo "</strong>

\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\" class=\"border-0 text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Montant TTC</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"border-0 text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"m-0\">";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 120, $this->source); })()), "montantHt", [], "any", false, false, false, 120) + twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 120, $this->source); })()), "tauxTva", [], "any", false, false, false, 120)), "EUR"), "html", null, true);
        echo "</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-print-none mt-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index");
        echo "\" class=\"btn btn-light me-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-left-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tRetour à la liste
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:window.print()\" class=\"btn btn-success me-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-printer-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tImprimer
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-pencil-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tModifier
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 150
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
\t\t</div>
\t</div>

\t";
        // line 154
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "
\t<script src=\"../../assets/js/app.js\"></script>
</body></body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "documents/show.html.twig";
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
        return array (  312 => 154,  305 => 150,  290 => 138,  279 => 130,  266 => 120,  254 => 111,  248 => 108,  240 => 103,  233 => 98,  216 => 95,  212 => 94,  208 => 93,  204 => 92,  200 => 91,  197 => 90,  180 => 89,  155 => 67,  151 => 66,  142 => 60,  130 => 51,  126 => 50,  117 => 44,  113 => 43,  98 => 31,  89 => 24,  87 => 21,  79 => 16,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>
\t<br>
\t<br>
\t{{ include('partials/title-meta.html.twig', {title: 'Détails du document'}) }}
\t<link rel=\"stylesheet\" href=\"{{ asset('assets/libs/dropzone/dropzone.css') }}\" type=\"text/css\"/>
\t<link href=\"{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
\t<link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('assets/css/icons.min.css') }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('assets/css/app.min.css') }}\" rel=\"stylesheet\">
</head>

<body>
\t<div id=\"layout-wrapper\">
\t\t{{ include('partials/menu.html.twig') }}

\t\t<div class=\"main-content\">
\t\t\t<div class=\"page-content\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t{{ include('partials/page-title.html.twig', {
                        pagetitle: 'Documents',
                        title: 'Détails du document'
                    }) }}

\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t<div class=\"col-xxl-9\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"invoice-title\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"float-end font-size-16\">Document #{{ document.reference }}</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../assets/images/logo-dark.png\" alt=\"logo\" height=\"28\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<hr class=\"my-4\">

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-semibold\">Expéditeur :</h6>
\t\t\t\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t\t\t\t{{ document.emetteur.username }}<br>
\t\t\t\t\t\t\t\t\t\t\t\t{{ document.emetteur.mail }}<br>
\t\t\t\t\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-semibold\">Destinataire :</h6>
\t\t\t\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t\t\t\t{{ document.destinataire.username }}<br>
\t\t\t\t\t\t\t\t\t\t\t\t{{ document.destinataire.mail }}<br>
\t\t\t\t\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-semibold\">Date du document :</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ document.docDate|date('d/m/Y') }}</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-semibold\">Statut :</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-{{ document.status == 'Paid' ? 'success' : 'warning' }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ document.status == 'Paid' ? 'Payé' : 'En attente' }}
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"py-2 mt-3\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-size-15\">Résumé du document</h5>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-nowrap\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 70px;\">N°</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Article</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\">Prix unitaire</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\">Quantité</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\">Total</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t{% for ligne in document.lignes %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ loop.index }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ ligne.article.reference }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">{{ ligne.prixUnitaireHt|format_currency('EUR') }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">{{ ligne.qte }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">{{ ligne.prixTotalHt|format_currency('EUR') }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\" class=\"border-0 text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Sous-total</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"border-0 text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{ document.montantHt|format_currency('EUR') }}</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\" class=\"border-0 text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>TVA ({{ document.tauxTva }}%)</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"border-0 text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{ document.tauxTva|format_currency('EUR') }}</strong>

\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\" class=\"border-0 text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Montant TTC</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"border-0 text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"m-0\">{{ (document.montantHt + document.tauxTva)|format_currency('EUR') }}</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-print-none mt-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index') }}\" class=\"btn btn-light me-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-left-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tRetour à la liste
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:window.print()\" class=\"btn btn-success me-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-printer-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tImprimer
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_edit', {'id': document.id}) }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-pencil-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tModifier
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{{ include('partials/footer.html.twig') }}
\t\t</div>
\t</div>

\t{{ include('partials/vendor-scripts.html.twig') }}
\t<script src=\"../../assets/js/app.js\"></script>
</body></body></html>
", "documents/show.html.twig", "C:\\Users\\Lenovo\\Desktop\\ERP_axia\\ERP_axia\\saas\\templates\\documents\\show.html.Twig");
    }
}
