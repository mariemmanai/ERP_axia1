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

/* documents/new&edit.html.twig */
class __TwigTemplate_e25ce3fff8541edeebe0c48dbb9e092c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/new&edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/new&edit.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "
<head>
    ";
        // line 3
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)) ? ("Modifier un document") : ("Créer un document"))]);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/dropzone/dropzone.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style>
        .ligne-row td {
            vertical-align: middle !important;
        }
        .form-control-sm {
            height: calc(1.5em + 0.5rem + 2px);
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }
        .input-group-sm > .form-control {
            height: calc(1.5em + 0.5rem + 2px);
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
        }
        .readonly-type {
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.375rem 0.75rem;
            height: calc(3.5rem + 2px);
        }
    </style>
</head>

<body>
    <div id=\"layout-wrapper\">
        ";
        // line 38
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "

        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid\">
                    ";
        // line 43
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Documents", "title" => ((twig_get_attribute($this->env, $this->source,         // line 45
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)) ? ("Modifier un document") : ("Créer un document"))]);
        // line 46
        echo "

                    <div class=\"row justify-content-center\">
                        <div class=\"col-xxl-9\">
                            <div class=\"card\">
                                ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        echo "
                                <div class=\"card-body border-bottom border-bottom-dashed p-4\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4\">
                                            <div class=\"profile-user mx-auto mb-3\">
                                                <input id=\"profile-img-file-input\" type=\"file\" class=\"profile-img-file-input\"/>
                                                <label for=\"profile-img-file-input\" class=\"d-block\" tabindex=\"0\">
                                                    <span class=\"overflow-hidden border border-dashed d-flex align-items-center justify-content-center rounded\" style=\"height: 60px; width: 256px;\">
                                                        <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-dark.png"), "html", null, true);
        echo "\" class=\"card-logo card-logo-dark user-profile-image img-fluid\" alt=\"logo dark\">
                                                        <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.png"), "html", null, true);
        echo "\" class=\"card-logo card-logo-light user-profile-image img-fluid\" alt=\"logo light\">
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4 ms-auto\">
                                            <div class=\"mb-3\">
                                                <label class=\"form-label\">Référence</label>
                                                ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)) {
            // line 69
            echo "                                                    <div class=\"form-control bg-light border-0\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "reference", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "value", [], "any", false, false, false, 69), "html", null, true);
            echo "</div>
                                                ";
        } else {
            // line 71
            echo "                                                    <div id=\"reference-preview\" class=\"form-control bg-light border-0\">";
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 71), "reference", [], "any", true, true, false, 71) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 71), "reference", [], "any", false, false, false, 71)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 71), "reference", [], "any", false, false, false, 71), "html", null, true))) : (print ("La référence sera générée automatiquement")));
            echo "</div>
                                                ";
        }
        // line 73
        echo "
                                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "reference", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)) ? ("d-none") : ("d-none"))]]);
        echo "
                                            </div>
                                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "docDate", [], "any", false, false, false, 76), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 78
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78)) ? ("") : (" bg-light border-0")))], "label" => "Date"]);
        // line 81
        echo "
                                        </div>
                                    </div>
                                </div>

                                <div class=\"card-body p-4\">
                                    <div class=\"row g-3\">
                                        <div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 89
        if ((isset($context["current_type"]) || array_key_exists("current_type", $context) ? $context["current_type"] : (function () { throw new RuntimeError('Variable "current_type" does not exist.', 89, $this->source); })())) {
            // line 90
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Type</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control bg-light border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["current_type"]) || array_key_exists("current_type", $context) ? $context["current_type"] : (function () { throw new RuntimeError('Variable "current_type" does not exist.', 93, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
        // line 98
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98) == null)) {
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "type", [], "any", false, false, false, 99), 'row');
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 101
        echo "\t\t\t\t\t\t\t\t\t\t</div>

                                       <div class=\"col-lg-3 col-sm-6\">
                                            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "status", [], "any", false, false, false, 104), 'row', ["attr" => ["class" => "form-control"], "label" => "Statut"]);
        // line 107
        echo "
                                        </div>
                                        <div class=\"col-lg-3 col-sm-6\">
                                            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "emetteur", [], "any", false, false, false, 110), 'row', ["attr" => ["class" => "form-control"], "label" => "Émetteur"]);
        // line 113
        echo "
                                        </div>
                                        <div class=\"col-lg-3 col-sm-6\">
                                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "destinataire", [], "any", false, false, false, 116), 'row', ["attr" => ["class" => "form-control"], "label" => "Destinataire"]);
        // line 119
        echo "
                                        </div>
                                    </div>
                                </div>

                                <div class=\"card-body p-4 border-top border-top-dashed\">
                                    <h5 class=\"mb-3\">Lignes du document</h5>
                                    <div class=\"table-responsive\">
                                        <table class=\"invoice-table table table-borderless table-nowrap mb-0\">
                                            <thead class=\"align-middle\">
                                                <tr class=\"table-active\">
                                                    <th class=\"col\">#</th>
                                                    <th class=\"col\">Article</th>
                                                    <th class=\"col\">Prix unitaire</th>
                                                    <th class=\"col\">Quantité</th>
                                                    <th class=\"col\">Montant</th>
                                                    <th class=\"col text-end\">Remise</th>
                                                </tr>
                                            </thead>
                                            <tbody id=\"document-lignes\" data-prototype=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "lignes", [], "any", false, false, false, 138), "vars", [], "any", false, false, false, 138), "prototype", [], "any", false, false, false, 138), 'widget'), "html_attr");
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "lignes", [], "any", false, false, false, 138)), "html", null, true);
        echo "\">
                                                ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "lignes", [], "any", false, false, false, 139));
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
            // line 140
            echo "                                                    <tr class=\"ligne-row\">
                                                        <td>";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 141), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 142
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "article", [], "any", false, false, false, 142), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "</td>
                                                        <td>";
            // line 143
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "prixUnitaireHt", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "form-control", "onchange" => "updateLigneTotal(this)"], "label" => false]);
            // line 149
            echo "</td>
                                                        <td>";
            // line 150
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "qte", [], "any", false, false, false, 150), 'widget', ["attr" => ["class" => "form-control", "onchange" => "updateLigneTotal(this)"], "label" => false]);
            // line 156
            echo "</td>
                                                        <td>";
            // line 157
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "prixTotalHt", [], "any", false, false, false, 157), 'widget', ["attr" => ["class" => "form-control bg-light border-0", "readonly" => "readonly"], "label" => false]);
            // line 163
            echo "</td>

                                                        <td class=\"text-end\">";
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "remise", [], "any", false, false, false, 165), 'widget', ["attr" => ["class" => "form-control bg-light border-0", "readonly" => "readonly"], "label" => false]);
            // line 171
            echo "
                                                            <button type=\"button\" class=\"btn btn-sm btn-danger remove-ligne\">
                                                                <i class=\"ri-delete-bin-line\"></i>
                                                            </button>
                                                        </td>
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
        // line 178
        echo "                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan=\"6\">
                                                        <button type=\"button\" id=\"add-ligne\" class=\"btn btn-soft-secondary fw-medium\">
                                                            <i class=\"ri-add-fill me-1 align-bottom\"></i>
                                                            Ajouter une ligne
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class=\"card-body p-4\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4\">
                                            ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "montantHt", [], "any", false, false, false, 195), 'row', ["attr" => ["class" => "form-control bg-light border-0", "readonly" => "readonly"], "label" => "Montant HT"]);
        // line 201
        echo "
                                            ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "tauxTva", [], "any", false, false, false, 202), 'row', ["attr" => ["class" => "form-control", "onchange" => "updateTotals()"], "label" => "Taux TVA"]);
        // line 208
        echo "
                                            ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "montantTva", [], "any", false, false, false, 209), 'row', ["attr" => ["class" => "form-control bg-light border-0", "readonly" => "readonly"], "label" => "Montant TVA"]);
        // line 215
        echo "
                                            ";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "montantAPayer", [], "any", false, false, false, 216), 'row', ["attr" => ["class" => "form-control bg-light border-0", "readonly" => "readonly"], "label" => "Montant à payer"]);
        // line 222
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "timbre", [], "any", false, false, false, 225), 'row', ["attr" => ["class" => "form-control", "onchange" => "updateTotals()"], "label" => "Timbre"]);
        // line 231
        echo "
                                            ";
        // line 232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "retenu", [], "any", false, false, false, 232), 'row', ["attr" => ["class" => "form-control", "onchange" => "updateTotals()"], "label" => "Retenue"]);
        // line 238
        echo "
                                        </div>
                                    </div>
                                </div>

                                <div class=\"card-body p-4\">
                                    <div class=\"hstack gap-2 justify-content-end\">
                                        <button type=\"submit\" class=\"btn btn-success\">
                                            <i class=\"ri-save-line align-bottom me-1\"></i>
                                            ";
        // line 247
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 247, $this->source); })()), "id", [], "any", false, false, false, 247)) ? ("Mettre à jour") : ("Enregistrer"));
        echo "
                                        </button>
                                        <a href=\"";
        // line 249
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index");
        echo "\" class=\"btn btn-light\">
                                            Annuler
                                        </a>
                                    </div>
                                </div>
                                ";
        // line 254
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 260
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
    </div>
    ";
        // line 263
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "
    <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/dropzone/dropzone-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ligneCollection = document.getElementById('document-lignes');
            let index = parseInt(ligneCollection.dataset.index);
            const form = document.querySelector('form');
            function updateReferencePreview() {
\t\t\t\tif (!document.id){
                const type = \"";
        // line 273
        echo twig_escape_filter($this->env, (isset($context["current_type"]) || array_key_exists("current_type", $context) ? $context["current_type"] : (function () { throw new RuntimeError('Variable "current_type" does not exist.', 273, $this->source); })()), "html", null, true);
        echo "\" || 
                         (document.querySelector('#";
        // line 274
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "type", [], "any", false, false, false, 274), "vars", [], "any", false, false, false, 274), "id", [], "any", false, false, false, 274), "html", null, true);
        echo "') 
                          ? document.querySelector('#";
        // line 275
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 275, $this->source); })()), "type", [], "any", false, false, false, 275), "vars", [], "any", false, false, false, 275), "id", [], "any", false, false, false, 275), "html", null, true);
        echo "').value 
                          : '');
\t\t\t\t\t\t  }
            \tconst year = new Date().getFullYear().toString().slice(-2);
                const prefixMap = {
                    'Devis achat': 'DA',
                    'Commande achat': 'CA',
                    'Facture achat': 'FA',
                    'Facture achat avoire': 'FAA',
                    'Bon d\\'entré': 'BE',
                    'Bon de transfert': 'BT',
                    'Bon de retour': 'BR',
                    'Devis vente': 'DV',
                    'Commande vente': 'CV',
                    'Facture vente': 'FV',
                    'Facture vente avoire': 'FVA',
                    'Bon de sortie': 'BS',
                    'Bon de livraison': 'BL',
                    'Inventaire': 'INV'
                };
\t\t\tconst prefix = prefixMap[type] || 'DOC';
            const referencePreview = prefix + year + '000001';

            if (document.querySelector('#reference-preview')) {
                document.querySelector('#reference-preview').textContent = referencePreview;
            }
            
            if (document.querySelector('#";
        // line 302
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 302, $this->source); })()), "reference", [], "any", false, false, false, 302), "vars", [], "any", false, false, false, 302), "id", [], "any", false, false, false, 302), "html", null, true);
        echo "')) {
                document.querySelector('#";
        // line 303
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), "reference", [], "any", false, false, false, 303), "vars", [], "any", false, false, false, 303), "id", [], "any", false, false, false, 303), "html", null, true);
        echo "').value = referencePreview;
            }
\t\t}

            function addLigneForm() {
                const prototype = ligneCollection.dataset.prototype;
                const newForm = prototype.replace(/__name__/g, index);
                const newRow = document.createElement('tr');
                newRow.className = 'ligne-row';
                newRow.innerHTML = newForm;

                const actionCell = document.createElement('td');
                actionCell.className = 'text-end';
                actionCell.innerHTML = `
                    <button type=\"button\" class=\"btn btn-sm btn-danger remove-ligne\">
                        <i class=\"ri-delete-bin-line\"></i>
                    </button>
                `;
                newRow.appendChild(actionCell);

                setupLigneEvents(newRow);
                ligneCollection.appendChild(newRow);
                index++;
                ligneCollection.dataset.index = index;
                updateTotals();
            }

            function setupLigneEvents(row) {
                const prixInput = row.querySelector('[id\$=\"_prixUnitaireHt\"]');
                const qteInput = row.querySelector('[id\$=\"_qte\"]');
                const remiseInput = row.querySelector('[id\$=\"_remise\"]');

                if (prixInput && qteInput) {
                    prixInput.addEventListener('input', function () {
                        updateLigneTotal(this);
                    });
                    qteInput.addEventListener('input', function () {
                        updateLigneTotal(this);
                    });
                }

                if (remiseInput) {
                    remiseInput.addEventListener('input', function () {
                        updateLigneTotal(this);
                    });
                }

                row.querySelector('.remove-ligne').addEventListener('click', function () {
                    row.remove();
                    updateTotals();
                });
            }

            function updateLigneTotal(input) {
                const row = input.closest('.ligne-row');
                const prixUnitaire = parseFloat(row.querySelector('[id\$=\"_prixUnitaireHt\"]').value) || 0;
                const qte = parseFloat(row.querySelector('[id\$=\"_qte\"]').value) || 0;
                const remise = parseFloat(row.querySelector('[id\$=\"_remise\"]').value) || 0;

                const totalHT = (prixUnitaire * qte) * (1 - remise / 100);
                row.querySelector('[id\$=\"_prixTotalHt\"]').value = totalHT.toFixed(2);

                updateTotals();
            }

            function updateTotals() {
                let montantHt = 0;

                document.querySelectorAll('[id\$=\"_prixTotalHt\"]').forEach(input => {
                    montantHt += parseFloat(input.value) || 0;
                });

                const tauxTva = parseFloat(document.querySelector('#";
        // line 375
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 375, $this->source); })()), "tauxTva", [], "any", false, false, false, 375), "vars", [], "any", false, false, false, 375), "id", [], "any", false, false, false, 375), "html", null, true);
        echo "').value) || 0;
                const montantTva = montantHt * (tauxTva / 100);
                const montantTtc = montantHt + montantTva;

                const timbre = parseFloat(document.querySelector('#";
        // line 379
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 379, $this->source); })()), "timbre", [], "any", false, false, false, 379), "vars", [], "any", false, false, false, 379), "id", [], "any", false, false, false, 379), "html", null, true);
        echo "').value) || 0;
                const retenu = parseFloat(document.querySelector('#";
        // line 380
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 380, $this->source); })()), "retenu", [], "any", false, false, false, 380), "vars", [], "any", false, false, false, 380), "id", [], "any", false, false, false, 380), "html", null, true);
        echo "').value) || 0;
                const montantAPayer = montantTtc + timbre - retenu;

                document.querySelector('#";
        // line 383
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 383, $this->source); })()), "montantHt", [], "any", false, false, false, 383), "vars", [], "any", false, false, false, 383), "id", [], "any", false, false, false, 383), "html", null, true);
        echo "').value = montantHt.toFixed(2);
                document.querySelector('#";
        // line 384
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 384, $this->source); })()), "montantTva", [], "any", false, false, false, 384), "vars", [], "any", false, false, false, 384), "id", [], "any", false, false, false, 384), "html", null, true);
        echo "').value = montantTtc.toFixed(2);
                document.querySelector('#";
        // line 385
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 385, $this->source); })()), "montantAPayer", [], "any", false, false, false, 385), "vars", [], "any", false, false, false, 385), "id", [], "any", false, false, false, 385), "html", null, true);
        echo "').value = montantAPayer.toFixed(2);
            }

            document.getElementById('add-ligne').addEventListener('click', addLigneForm);

            document.querySelectorAll('.ligne-row').forEach(row => {
                setupLigneEvents(row);
            });

            document.querySelector('#";
        // line 394
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "tauxTva", [], "any", false, false, false, 394), "vars", [], "any", false, false, false, 394), "id", [], "any", false, false, false, 394), "html", null, true);
        echo "').addEventListener('input', updateTotals);
            document.querySelector('#";
        // line 395
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 395, $this->source); })()), "timbre", [], "any", false, false, false, 395), "vars", [], "any", false, false, false, 395), "id", [], "any", false, false, false, 395), "html", null, true);
        echo "').addEventListener('input', updateTotals);
            document.querySelector('#";
        // line 396
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 396, $this->source); })()), "retenu", [], "any", false, false, false, 396), "vars", [], "any", false, false, false, 396), "id", [], "any", false, false, false, 396), "html", null, true);
        echo "').addEventListener('input', updateTotals);

            if (!";
        // line 398
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 398, $this->source); })()), "id", [], "any", false, false, false, 398)) ? ("true") : ("false"));
        echo ") {
                updateReferencePreview();
            }

            updateTotals();
            
            form.addEventListener('submit', function (e) {
                if (document.querySelectorAll('.ligne-row').length === 0) {
                    e.preventDefault();
                    alert('Veuillez ajouter au moins une ligne au document');
                    return;
                }

                let isValid = true;
                document.querySelectorAll('.ligne-row').forEach(row => {
                    const qte = parseFloat(row.querySelector('[id\$=\"_qte\"]').value) || 0;
                    const prix = parseFloat(row.querySelector('[id\$=\"_prixUnitaireHt\"]').value) || 0;

                    if (qte <= 0 || prix <= 0) {
                        isValid = false;
                        row.style.border = '1px solid red';
                    } else {
                        row.style.border = '';
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    alert('Veuillez corriger les lignes en rouge (quantité et prix doivent être > 0)');
                }
            });
        });
    </script>
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
        return "documents/new&edit.html.twig";
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
        return array (  592 => 398,  587 => 396,  583 => 395,  579 => 394,  567 => 385,  563 => 384,  559 => 383,  553 => 380,  549 => 379,  542 => 375,  467 => 303,  463 => 302,  433 => 275,  429 => 274,  425 => 273,  414 => 265,  410 => 264,  406 => 263,  400 => 260,  391 => 254,  383 => 249,  378 => 247,  367 => 238,  365 => 232,  362 => 231,  360 => 225,  355 => 222,  353 => 216,  350 => 215,  348 => 209,  345 => 208,  343 => 202,  340 => 201,  338 => 195,  319 => 178,  299 => 171,  297 => 165,  293 => 163,  291 => 157,  288 => 156,  286 => 150,  283 => 149,  281 => 143,  277 => 142,  273 => 141,  270 => 140,  253 => 139,  247 => 138,  226 => 119,  224 => 116,  219 => 113,  217 => 110,  212 => 107,  210 => 104,  205 => 101,  199 => 99,  197 => 98,  194 => 97,  187 => 93,  182 => 90,  180 => 89,  170 => 81,  168 => 78,  167 => 76,  162 => 74,  159 => 73,  153 => 71,  147 => 69,  145 => 68,  134 => 60,  130 => 59,  119 => 51,  112 => 46,  110 => 45,  109 => 43,  101 => 38,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}
<head>
    {{ include('partials/title-meta.html.twig', {title: document.id ? 'Modifier un document' : 'Créer un document'}) }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/libs/dropzone/dropzone.css') }}\" type=\"text/css\"/>
    <link href=\"{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/icons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/app.min.css') }}\" rel=\"stylesheet\">
    <style>
        .ligne-row td {
            vertical-align: middle !important;
        }
        .form-control-sm {
            height: calc(1.5em + 0.5rem + 2px);
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }
        .input-group-sm > .form-control {
            height: calc(1.5em + 0.5rem + 2px);
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
        }
        .readonly-type {
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.375rem 0.75rem;
            height: calc(3.5rem + 2px);
        }
    </style>
</head>

<body>
    <div id=\"layout-wrapper\">
        {{ include('partials/menu.html.twig') }}

        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid\">
                    {{ include('partials/page-title.html.twig', {
                        pagetitle: 'Documents',
                        title: document.id ? 'Modifier un document' : 'Créer un document'
                    }) }}

                    <div class=\"row justify-content-center\">
                        <div class=\"col-xxl-9\">
                            <div class=\"card\">
                                {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                                <div class=\"card-body border-bottom border-bottom-dashed p-4\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4\">
                                            <div class=\"profile-user mx-auto mb-3\">
                                                <input id=\"profile-img-file-input\" type=\"file\" class=\"profile-img-file-input\"/>
                                                <label for=\"profile-img-file-input\" class=\"d-block\" tabindex=\"0\">
                                                    <span class=\"overflow-hidden border border-dashed d-flex align-items-center justify-content-center rounded\" style=\"height: 60px; width: 256px;\">
                                                        <img src=\"{{ asset('assets/images/logo-dark.png') }}\" class=\"card-logo card-logo-dark user-profile-image img-fluid\" alt=\"logo dark\">
                                                        <img src=\"{{ asset('assets/images/logo-light.png') }}\" class=\"card-logo card-logo-light user-profile-image img-fluid\" alt=\"logo light\">
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4 ms-auto\">
                                            <div class=\"mb-3\">
                                                <label class=\"form-label\">Référence</label>
                                                {% if document.id %}
                                                    <div class=\"form-control bg-light border-0\">{{ form.reference.vars.value }}</div>
                                                {% else %}
                                                    <div id=\"reference-preview\" class=\"form-control bg-light border-0\">{{ form.vars.reference ?? 'La référence sera générée automatiquement' }}</div>
                                                {% endif %}

                                                {{ form_widget(form.reference, {'attr': {'class': document.id ? 'd-none' : 'd-none'}}) }}
                                            </div>
                                            {{ form_row(form.docDate, {
                                                'attr': {
                                                    'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0')
                                                }, 
                                                'label': 'Date'
                                            }) }}
                                        </div>
                                    </div>
                                </div>

                                <div class=\"card-body p-4\">
                                    <div class=\"row g-3\">
                                        <div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t{% if current_type %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Type</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control bg-light border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ current_type }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% if document.id == null %}
\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.type) }}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>

                                       <div class=\"col-lg-3 col-sm-6\">
                                            {{ form_row(form.status, {
                                                'attr': {'class': 'form-control'},
                                                'label': 'Statut'
                                            }) }}
                                        </div>
                                        <div class=\"col-lg-3 col-sm-6\">
                                            {{ form_row(form.emetteur, {
                                                'attr': {'class': 'form-control'},
                                                'label': 'Émetteur'
                                            }) }}
                                        </div>
                                        <div class=\"col-lg-3 col-sm-6\">
                                            {{ form_row(form.destinataire, {
                                                'attr': {'class': 'form-control'},
                                                'label': 'Destinataire'
                                            }) }}
                                        </div>
                                    </div>
                                </div>

                                <div class=\"card-body p-4 border-top border-top-dashed\">
                                    <h5 class=\"mb-3\">Lignes du document</h5>
                                    <div class=\"table-responsive\">
                                        <table class=\"invoice-table table table-borderless table-nowrap mb-0\">
                                            <thead class=\"align-middle\">
                                                <tr class=\"table-active\">
                                                    <th class=\"col\">#</th>
                                                    <th class=\"col\">Article</th>
                                                    <th class=\"col\">Prix unitaire</th>
                                                    <th class=\"col\">Quantité</th>
                                                    <th class=\"col\">Montant</th>
                                                    <th class=\"col text-end\">Remise</th>
                                                </tr>
                                            </thead>
                                            <tbody id=\"document-lignes\" data-prototype=\"{{ form_widget(form.lignes.vars.prototype)|e('html_attr') }}\" data-index=\"{{ form.lignes|length }}\">
                                                {% for ligne in form.lignes %}
                                                    <tr class=\"ligne-row\">
                                                        <td>{{ loop.index }}</td>
                                                        <td>{{ form_widget(ligne.article, {'attr': {'class': 'form-control'}}) }}</td>
                                                        <td>{{ form_widget(ligne.prixUnitaireHt, {
                                                                'attr': {
                                                                    'class': 'form-control',
                                                                    'onchange': 'updateLigneTotal(this)'
                                                                },
                                                                'label': false
                                                            }) }}</td>
                                                        <td>{{ form_widget(ligne.qte, {
                                                                'attr': {
                                                                    'class': 'form-control',
                                                                    'onchange': 'updateLigneTotal(this)'
                                                                },
                                                                'label': false
                                                            }) }}</td>
                                                        <td>{{ form_widget(ligne.prixTotalHt, {
                                                                'attr': {
                                                                    'class': 'form-control bg-light border-0',
                                                                    'readonly': 'readonly'
                                                                },
                                                                'label': false
                                                            }) }}</td>

                                                        <td class=\"text-end\">{{ form_widget(ligne.remise, {
                                                                'attr': {
                                                                    'class': 'form-control bg-light border-0',
                                                                    'readonly': 'readonly'
                                                                },
                                                                'label': false
                                                            }) }}
                                                            <button type=\"button\" class=\"btn btn-sm btn-danger remove-ligne\">
                                                                <i class=\"ri-delete-bin-line\"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                {% endfor %}
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan=\"6\">
                                                        <button type=\"button\" id=\"add-ligne\" class=\"btn btn-soft-secondary fw-medium\">
                                                            <i class=\"ri-add-fill me-1 align-bottom\"></i>
                                                            Ajouter une ligne
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class=\"card-body p-4\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4\">
                                            {{ form_row(form.montantHt, {
                                                    'attr': {
                                                        'class': 'form-control bg-light border-0',
                                                        'readonly': 'readonly'
                                                    },
                                                    'label': 'Montant HT'
                                                }) }}
                                            {{ form_row(form.tauxTva, {
                                                    'attr': {
                                                        'class': 'form-control',
                                                        'onchange': 'updateTotals()'
                                                    },
                                                    'label': 'Taux TVA'
                                                }) }}
                                            {{ form_row(form.montantTva, {
                                                    'attr': {
                                                        'class': 'form-control bg-light border-0',
                                                        'readonly': 'readonly'
                                                    },
                                                    'label': 'Montant TVA'
                                                }) }}
                                            {{ form_row(form.montantAPayer, {
                                                    'attr': {
                                                        'class': 'form-control bg-light border-0',
                                                        'readonly': 'readonly'
                                                    },
                                                    'label': 'Montant à payer'
                                                }) }}
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(form.timbre, {
                                                    'attr': {
                                                        'class': 'form-control',
                                                        'onchange': 'updateTotals()'
                                                    },
                                                    'label': 'Timbre'
                                                }) }}
                                            {{ form_row(form.retenu, {
                                                    'attr': {
                                                        'class': 'form-control',
                                                        'onchange': 'updateTotals()'
                                                    },
                                                    'label': 'Retenue'
                                                }) }}
                                        </div>
                                    </div>
                                </div>

                                <div class=\"card-body p-4\">
                                    <div class=\"hstack gap-2 justify-content-end\">
                                        <button type=\"submit\" class=\"btn btn-success\">
                                            <i class=\"ri-save-line align-bottom me-1\"></i>
                                            {{ document.id ? 'Mettre à jour' : 'Enregistrer' }}
                                        </button>
                                        <a href=\"{{ path('app_documents_index') }}\" class=\"btn btn-light\">
                                            Annuler
                                        </a>
                                    </div>
                                </div>
                                {{ form_end(form) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{ include('partials/footer.html.twig') }}
        </div>
    </div>
    {{ include('partials/vendor-scripts.html.twig') }}
    <script src=\"{{ asset('assets/libs/dropzone/dropzone-min.js') }}\"></script>
    <script src=\"{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ligneCollection = document.getElementById('document-lignes');
            let index = parseInt(ligneCollection.dataset.index);
            const form = document.querySelector('form');
            function updateReferencePreview() {
\t\t\t\tif (!document.id){
                const type = \"{{ current_type }}\" || 
                         (document.querySelector('#{{ form.type.vars.id }}') 
                          ? document.querySelector('#{{ form.type.vars.id }}').value 
                          : '');
\t\t\t\t\t\t  }
            \tconst year = new Date().getFullYear().toString().slice(-2);
                const prefixMap = {
                    'Devis achat': 'DA',
                    'Commande achat': 'CA',
                    'Facture achat': 'FA',
                    'Facture achat avoire': 'FAA',
                    'Bon d\\'entré': 'BE',
                    'Bon de transfert': 'BT',
                    'Bon de retour': 'BR',
                    'Devis vente': 'DV',
                    'Commande vente': 'CV',
                    'Facture vente': 'FV',
                    'Facture vente avoire': 'FVA',
                    'Bon de sortie': 'BS',
                    'Bon de livraison': 'BL',
                    'Inventaire': 'INV'
                };
\t\t\tconst prefix = prefixMap[type] || 'DOC';
            const referencePreview = prefix + year + '000001';

            if (document.querySelector('#reference-preview')) {
                document.querySelector('#reference-preview').textContent = referencePreview;
            }
            
            if (document.querySelector('#{{ form.reference.vars.id }}')) {
                document.querySelector('#{{ form.reference.vars.id }}').value = referencePreview;
            }
\t\t}

            function addLigneForm() {
                const prototype = ligneCollection.dataset.prototype;
                const newForm = prototype.replace(/__name__/g, index);
                const newRow = document.createElement('tr');
                newRow.className = 'ligne-row';
                newRow.innerHTML = newForm;

                const actionCell = document.createElement('td');
                actionCell.className = 'text-end';
                actionCell.innerHTML = `
                    <button type=\"button\" class=\"btn btn-sm btn-danger remove-ligne\">
                        <i class=\"ri-delete-bin-line\"></i>
                    </button>
                `;
                newRow.appendChild(actionCell);

                setupLigneEvents(newRow);
                ligneCollection.appendChild(newRow);
                index++;
                ligneCollection.dataset.index = index;
                updateTotals();
            }

            function setupLigneEvents(row) {
                const prixInput = row.querySelector('[id\$=\"_prixUnitaireHt\"]');
                const qteInput = row.querySelector('[id\$=\"_qte\"]');
                const remiseInput = row.querySelector('[id\$=\"_remise\"]');

                if (prixInput && qteInput) {
                    prixInput.addEventListener('input', function () {
                        updateLigneTotal(this);
                    });
                    qteInput.addEventListener('input', function () {
                        updateLigneTotal(this);
                    });
                }

                if (remiseInput) {
                    remiseInput.addEventListener('input', function () {
                        updateLigneTotal(this);
                    });
                }

                row.querySelector('.remove-ligne').addEventListener('click', function () {
                    row.remove();
                    updateTotals();
                });
            }

            function updateLigneTotal(input) {
                const row = input.closest('.ligne-row');
                const prixUnitaire = parseFloat(row.querySelector('[id\$=\"_prixUnitaireHt\"]').value) || 0;
                const qte = parseFloat(row.querySelector('[id\$=\"_qte\"]').value) || 0;
                const remise = parseFloat(row.querySelector('[id\$=\"_remise\"]').value) || 0;

                const totalHT = (prixUnitaire * qte) * (1 - remise / 100);
                row.querySelector('[id\$=\"_prixTotalHt\"]').value = totalHT.toFixed(2);

                updateTotals();
            }

            function updateTotals() {
                let montantHt = 0;

                document.querySelectorAll('[id\$=\"_prixTotalHt\"]').forEach(input => {
                    montantHt += parseFloat(input.value) || 0;
                });

                const tauxTva = parseFloat(document.querySelector('#{{ form.tauxTva.vars.id }}').value) || 0;
                const montantTva = montantHt * (tauxTva / 100);
                const montantTtc = montantHt + montantTva;

                const timbre = parseFloat(document.querySelector('#{{ form.timbre.vars.id }}').value) || 0;
                const retenu = parseFloat(document.querySelector('#{{ form.retenu.vars.id }}').value) || 0;
                const montantAPayer = montantTtc + timbre - retenu;

                document.querySelector('#{{ form.montantHt.vars.id }}').value = montantHt.toFixed(2);
                document.querySelector('#{{ form.montantTva.vars.id }}').value = montantTtc.toFixed(2);
                document.querySelector('#{{ form.montantAPayer.vars.id }}').value = montantAPayer.toFixed(2);
            }

            document.getElementById('add-ligne').addEventListener('click', addLigneForm);

            document.querySelectorAll('.ligne-row').forEach(row => {
                setupLigneEvents(row);
            });

            document.querySelector('#{{ form.tauxTva.vars.id }}').addEventListener('input', updateTotals);
            document.querySelector('#{{ form.timbre.vars.id }}').addEventListener('input', updateTotals);
            document.querySelector('#{{ form.retenu.vars.id }}').addEventListener('input', updateTotals);

            if (!{{ document.id ? 'true' : 'false' }}) {
                updateReferencePreview();
            }

            updateTotals();
            
            form.addEventListener('submit', function (e) {
                if (document.querySelectorAll('.ligne-row').length === 0) {
                    e.preventDefault();
                    alert('Veuillez ajouter au moins une ligne au document');
                    return;
                }

                let isValid = true;
                document.querySelectorAll('.ligne-row').forEach(row => {
                    const qte = parseFloat(row.querySelector('[id\$=\"_qte\"]').value) || 0;
                    const prix = parseFloat(row.querySelector('[id\$=\"_prixUnitaireHt\"]').value) || 0;

                    if (qte <= 0 || prix <= 0) {
                        isValid = false;
                        row.style.border = '1px solid red';
                    } else {
                        row.style.border = '';
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    alert('Veuillez corriger les lignes en rouge (quantité et prix doivent être > 0)');
                }
            });
        });
    </script>
</body>
</html>", "documents/new&edit.html.twig", "C:\\Users\\Lenovo\\Desktop\\ERP_axia\\ERP_axia\\saas\\templates\\documents\\new&edit.html.twig");
    }
}
