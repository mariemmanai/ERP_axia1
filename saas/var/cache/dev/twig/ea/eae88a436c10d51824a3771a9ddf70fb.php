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

/* documents/show.html.Twig */
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/show.html.Twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/show.html.Twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>
    <br>
    <br>
    ";
        // line 6
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Détails du document"]);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/dropzone/dropzone.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body>
    <div id=\"layout-wrapper\">
        ";
        // line 16
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "

        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid\">
                    ";
        // line 21
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Documents", "title" => "Détails du document"]);
        // line 24
        echo "

                    <div class=\"row justify-content-center\">
                        <div class=\"col-xxl-9\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"invoice-title\">
                                        <h4 class=\"float-end font-size-16\">Document #";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 31, $this->source); })()), "reference", [], "any", false, false, false, 31), "html", null, true);
        echo "</h4>
                                        <div class=\"mb-4\">
                                            <img src=\"../../assets/images/logo-dark.png\" alt=\"logo\" height=\"28\">
                                        </div>
                                    </div>

                                    <hr class=\"my-4\">

                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <h6 class=\"fw-semibold\">Expéditeur :</h6>
                                            <address>
                                                ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 43, $this->source); })()), "emetteur", [], "any", false, false, false, 43), "username", [], "any", false, false, false, 43), "html", null, true);
        echo "<br>
                                                ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 44, $this->source); })()), "emetteur", [], "any", false, false, false, 44), "mail", [], "any", false, false, false, 44), "html", null, true);
        echo "<br>
                                            </address>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <h6 class=\"fw-semibold\">Destinataire :</h6>
                                            <address>
                                                ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 50, $this->source); })()), "destinataire", [], "any", false, false, false, 50), "username", [], "any", false, false, false, 50), "html", null, true);
        echo "<br>
                                                ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 51, $this->source); })()), "destinataire", [], "any", false, false, false, 51), "mail", [], "any", false, false, false, 51), "html", null, true);
        echo "<br>
                                            </address>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"mt-3\">
                                                <h6 class=\"fw-semibold\">Date du document :</h6>
                                                <p>";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 60, $this->source); })()), "docDate", [], "any", false, false, false, 60), "d/m/Y"), "html", null, true);
        echo "</p>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"mt-3\">
                                                <h6 class=\"fw-semibold\">Statut :</h6>
                                                <span class=\"badge bg-";
        // line 66
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 66, $this->source); })()), "status", [], "any", false, false, false, 66) == "Paid")) ? ("success") : ("warning"));
        echo "\">
                                                    ";
        // line 67
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 67, $this->source); })()), "status", [], "any", false, false, false, 67) == "Paid")) ? ("Payé") : ("En attente"));
        echo "
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"py-2 mt-3\">
                                        <h5 class=\"font-size-15\">Résumé du document</h5>
                                    </div>

                                    <div class=\"table-responsive\">
                                        <table class=\"table table-nowrap\">
                                            <thead>
                                                <tr>
                                                    <th style=\"width: 70px;\">N°</th>
                                                    <th>Article</th>
                                                    <th class=\"text-end\">Prix unitaire</th>
                                                    <th class=\"text-end\">Quantité</th>
                                                    <th class=\"text-end\">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
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
            echo "                                                <tr>
                                                    <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "article", [], "any", false, false, false, 92), "reference", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                                                    <td class=\"text-end\">";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["ligne"], "prixUnitaireHt", [], "any", false, false, false, 93), "EUR"), "html", null, true);
            echo "</td>
                                                    <td class=\"text-end\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "qte", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                                                    <td class=\"text-end\">";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["ligne"], "prixTotalHt", [], "any", false, false, false, 95), "EUR"), "html", null, true);
            echo "</td>
                                                </tr>
                                                ";
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
        echo "                                                <tr>
                                                    <td colspan=\"4\" class=\"border-0 text-end\">
                                                        <strong>Sous-total</strong>
                                                    </td>
                                                    <td class=\"border-0 text-end\">
                                                        <strong>";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 103, $this->source); })()), "montantHt", [], "any", false, false, false, 103), "EUR"), "html", null, true);
        echo "</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan=\"4\" class=\"border-0 text-end\">
                                                        <strong>TVA (";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 108, $this->source); })()), "tauxTva", [], "any", false, false, false, 108), "html", null, true);
        echo "%)</strong>
                                                    </td>
                                                    <td class=\"border-0 text-end\">
                                                        <strong>";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 111, $this->source); })()), "montantTva", [], "any", false, false, false, 111), "EUR"), "html", null, true);
        echo "</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan=\"4\" class=\"border-0 text-end\">
                                                        <strong>Total TTC</strong>
                                                    </td>
                                                    <td class=\"border-0 text-end\">
                                                        <h4 class=\"m-0\">";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 119, $this->source); })()), "montantHt", [], "any", false, false, false, 119) + twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 119, $this->source); })()), "montantTva", [], "any", false, false, false, 119)), "EUR"), "html", null, true);
        echo "</h4>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class=\"d-print-none mt-3\">
                                        <div class=\"float-end\">
                                            <a href=\"javascript:window.print()\" class=\"btn btn-success me-1\">
                                                <i class=\"ri-printer-line align-bottom me-1\"></i> Imprimer
                                            </a>
                                            <a href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                                                <i class=\"ri-pencil-line align-bottom me-1\"></i> Modifier
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 142
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
    </div>

    ";
        // line 146
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "
    <script src=\"../../assets/js/app.js\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "documents/show.html.Twig";
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
        return array (  301 => 146,  294 => 142,  280 => 131,  265 => 119,  254 => 111,  248 => 108,  240 => 103,  233 => 98,  216 => 95,  212 => 94,  208 => 93,  204 => 92,  200 => 91,  197 => 90,  180 => 89,  155 => 67,  151 => 66,  142 => 60,  130 => 51,  126 => 50,  117 => 44,  113 => 43,  98 => 31,  89 => 24,  87 => 21,  79 => 16,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>
    <br>
    <br>
    {{ include('partials/title-meta.html.twig', {title: 'Détails du document'}) }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/libs/dropzone/dropzone.css') }}\" type=\"text/css\" />
    <link href=\"{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/icons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/app.min.css') }}\" rel=\"stylesheet\">
</head>

<body>
    <div id=\"layout-wrapper\">
        {{ include('partials/menu.html.twig') }}

        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid\">
                    {{ include('partials/page-title.html.twig', {
                        pagetitle: 'Documents',
                        title: 'Détails du document'
                    }) }}

                    <div class=\"row justify-content-center\">
                        <div class=\"col-xxl-9\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"invoice-title\">
                                        <h4 class=\"float-end font-size-16\">Document #{{ document.reference }}</h4>
                                        <div class=\"mb-4\">
                                            <img src=\"../../assets/images/logo-dark.png\" alt=\"logo\" height=\"28\">
                                        </div>
                                    </div>

                                    <hr class=\"my-4\">

                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <h6 class=\"fw-semibold\">Expéditeur :</h6>
                                            <address>
                                                {{ document.emetteur.username }}<br>
                                                {{ document.emetteur.mail }}<br>
                                            </address>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <h6 class=\"fw-semibold\">Destinataire :</h6>
                                            <address>
                                                {{ document.destinataire.username }}<br>
                                                {{ document.destinataire.mail }}<br>
                                            </address>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"mt-3\">
                                                <h6 class=\"fw-semibold\">Date du document :</h6>
                                                <p>{{ document.docDate|date('d/m/Y') }}</p>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"mt-3\">
                                                <h6 class=\"fw-semibold\">Statut :</h6>
                                                <span class=\"badge bg-{{ document.status == 'Paid' ? 'success' : 'warning' }}\">
                                                    {{ document.status == 'Paid' ? 'Payé' : 'En attente' }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"py-2 mt-3\">
                                        <h5 class=\"font-size-15\">Résumé du document</h5>
                                    </div>

                                    <div class=\"table-responsive\">
                                        <table class=\"table table-nowrap\">
                                            <thead>
                                                <tr>
                                                    <th style=\"width: 70px;\">N°</th>
                                                    <th>Article</th>
                                                    <th class=\"text-end\">Prix unitaire</th>
                                                    <th class=\"text-end\">Quantité</th>
                                                    <th class=\"text-end\">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for ligne in document.lignes %}
                                                <tr>
                                                    <td>{{ loop.index }}</td>
                                                    <td>{{ ligne.article.reference }}</td>
                                                    <td class=\"text-end\">{{ ligne.prixUnitaireHt|format_currency('EUR') }}</td>
                                                    <td class=\"text-end\">{{ ligne.qte }}</td>
                                                    <td class=\"text-end\">{{ ligne.prixTotalHt|format_currency('EUR') }}</td>
                                                </tr>
                                                {% endfor %}
                                                <tr>
                                                    <td colspan=\"4\" class=\"border-0 text-end\">
                                                        <strong>Sous-total</strong>
                                                    </td>
                                                    <td class=\"border-0 text-end\">
                                                        <strong>{{ document.montantHt|format_currency('EUR') }}</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan=\"4\" class=\"border-0 text-end\">
                                                        <strong>TVA ({{ document.tauxTva }}%)</strong>
                                                    </td>
                                                    <td class=\"border-0 text-end\">
                                                        <strong>{{ document.montantTva|format_currency('EUR') }}</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan=\"4\" class=\"border-0 text-end\">
                                                        <strong>Total TTC</strong>
                                                    </td>
                                                    <td class=\"border-0 text-end\">
                                                        <h4 class=\"m-0\">{{ (document.montantHt + document.montantTva)|format_currency('EUR') }}</h4>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class=\"d-print-none mt-3\">
                                        <div class=\"float-end\">
                                            <a href=\"javascript:window.print()\" class=\"btn btn-success me-1\">
                                                <i class=\"ri-printer-line align-bottom me-1\"></i> Imprimer
                                            </a>
                                            <a href=\"{{ path('app_documents_edit', {'id': document.id}) }}\" class=\"btn btn-primary\">
                                                <i class=\"ri-pencil-line align-bottom me-1\"></i> Modifier
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{ include('partials/footer.html.twig') }}
        </div>
    </div>

    {{ include('partials/vendor-scripts.html.twig') }}
    <script src=\"../../assets/js/app.js\"></script>
</body>
</html>", "documents/show.html.Twig", "C:\\Users\\Lenovo\\Desktop\\ERP_axia\\ERP_axia\\saas\\templates\\documents\\show.html.Twig");
    }
}
