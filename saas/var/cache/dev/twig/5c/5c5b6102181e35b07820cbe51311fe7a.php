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
        // line 4
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)) ? ("Modifier un document") : ("Créer un document"))]);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/dropzone/dropzone.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
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
    </style>
</head>

<body>
    <div id=\"layout-wrapper\">
        ";
        // line 32
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "
        
        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid mt-3\">
                    ";
        // line 37
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Documents", "title" => ((twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)) ? ("Modifier un document") : ("Créer un document"))]);
        // line 40
        echo "

                    <div class=\"row justify-content-center\">
                        <div class=\"col-xxl-9\">
                            <div class=\"card\">
                                ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        echo "
                                    <div class=\"card-body border-bottom border-bottom-dashed p-4\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4\">
                                                <div class=\"profile-user mx-auto mb-3\">
                                                    <input id=\"profile-img-file-input\" type=\"file\" class=\"profile-img-file-input\" />
                                                    <label for=\"profile-img-file-input\" class=\"d-block\" tabindex=\"0\">
                                                        <span class=\"overflow-hidden border border-dashed d-flex align-items-center justify-content-center rounded\" style=\"height: 60px; width: 256px;\">
                                                            <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-dark.png"), "html", null, true);
        echo "\" class=\"card-logo card-logo-dark user-profile-image img-fluid\" alt=\"logo dark\">
                                                            <img src=\"";
        // line 54
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
        // line 62
        if (twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)) {
            // line 63
            echo "                                                        <div class=\"form-control bg-light border-0\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "reference", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "value", [], "any", false, false, false, 63), "html", null, true);
            echo "</div>
                                                    ";
        } else {
            // line 65
            echo "                                                        <div id=\"reference-preview\" class=\"form-control bg-light border-0\">";
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 65), "reference", [], "any", true, true, false, 65) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 65), "reference", [], "any", false, false, false, 65)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 65), "reference", [], "any", false, false, false, 65), "html", null, true))) : (print ("La référence sera générée automatiquement")));
            echo "</div>
                                                    ";
        }
        // line 67
        echo "
                                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "reference", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)) ? ("d-none") : ("d-none"))]]);
        echo "
                                                </div>
                                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "docDate", [], "any", false, false, false, 70), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 72
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72)) ? ("") : (" bg-light border-0")))], "label" => "Date"]);
        // line 75
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"card-body p-4\">
                                        <div class=\"row g-3\">
                                            <div class=\"col-lg-3 col-sm-6\">
                                                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "type", [], "any", false, false, false, 83), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 85
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)) ? ("") : (" bg-light border-0"))), "onchange" => ((twig_get_attribute($this->env, $this->source,         // line 86
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86)) ? ("") : ("updateReferencePreview()")), "disabled" => ((twig_get_attribute($this->env, $this->source,         // line 87
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87)) ? ("disabled") : (false))], "label" => "Type"]);
        // line 90
        echo "
                                            </div>
                                            <div class=\"col-lg-3 col-sm-6\">
                                                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "status", [], "any", false, false, false, 93), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 94
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94)) ? ("") : (" bg-light border-0")))], "label" => "Statut"]);
        // line 96
        echo "
                                            </div>
                                            <div class=\"col-lg-3 col-sm-6\">
                                                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "emetteur", [], "any", false, false, false, 99), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 100
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)) ? ("") : (" bg-light border-0")))], "label" => "Émetteur"]);
        // line 102
        echo "
                                            </div>
                                            <div class=\"col-lg-3 col-sm-6\">
                                                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "destinataire", [], "any", false, false, false, 105), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 106
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106)) ? ("") : (" bg-light border-0")))], "label" => "Destinataire"]);
        // line 108
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
        // line 127
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "lignes", [], "any", false, false, false, 127), "vars", [], "any", false, false, false, 127), "prototype", [], "any", false, false, false, 127), 'widget'), "html_attr");
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "lignes", [], "any", false, false, false, 127)), "html", null, true);
        echo "\">
                                                    ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "lignes", [], "any", false, false, false, 128));
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
            // line 129
            echo "                                                        <tr class=\"ligne-row\">
                                                            <td>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 130), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 131
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "article", [], "any", false, false, false, 131), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "</td>
                                                            <td>";
            // line 132
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "prixUnitaireHt", [], "any", false, false, false, 132), 'widget', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,             // line 134
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 134, $this->source); })()), "id", [], "any", false, false, false, 134)) ? ("") : (" bg-light border-0"))), "onchange" => "updateLigneTotal(this)"], "label" => false]);
            // line 138
            echo "</td>
                                                            <td>";
            // line 139
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "qte", [], "any", false, false, false, 139), 'widget', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,             // line 141
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 141, $this->source); })()), "id", [], "any", false, false, false, 141)) ? ("") : (" bg-light border-0"))), "onchange" => "updateLigneTotal(this)"], "label" => false]);
            // line 145
            echo "</td>
                                                            <td>";
            // line 146
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "prixTotalHt", [], "any", false, false, false, 146), 'widget', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,             // line 148
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 148, $this->source); })()), "id", [], "any", false, false, false, 148)) ? ("") : (" bg-light border-0"))), "readonly" => "readonly"], "label" => false]);
            // line 152
            echo "</td>
                                                            
                                                            <td class=\"text-end\">";
            // line 154
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "remise", [], "any", false, false, false, 154), 'widget', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,             // line 156
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 156, $this->source); })()), "id", [], "any", false, false, false, 156)) ? ("") : (" bg-light border-0"))), "oninput" => "updateRemise(this)"], "label" => false]);
            // line 160
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
        // line 168
        echo "                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan=\"6\">
                                                            <button type=\"button\" id=\"add-ligne\" class=\"btn btn-soft-secondary fw-medium\">
                                                                <i class=\"ri-add-fill me-1 align-bottom\"></i> Ajouter une ligne
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
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "montantHt", [], "any", false, false, false, 185), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 187
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 187, $this->source); })()), "id", [], "any", false, false, false, 187)) ? ("") : (" bg-light border-0"))), "readonly" => "readonly"], "label" => "Montant HT"]);
        // line 191
        echo "
                                                ";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "tauxTva", [], "any", false, false, false, 192), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 194
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 194, $this->source); })()), "id", [], "any", false, false, false, 194)) ? ("") : (" bg-light border-0"))), "onchange" => "updateTotals()"], "label" => "Taux TVA"]);
        // line 198
        echo "
                                                ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "montantTva", [], "any", false, false, false, 199), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 201
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 201, $this->source); })()), "id", [], "any", false, false, false, 201)) ? ("") : (" bg-light border-0"))), "readonly" => "readonly"], "label" => "Montant TVA"]);
        // line 205
        echo "
                                                ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "montantAPayer", [], "any", false, false, false, 206), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 208
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 208, $this->source); })()), "id", [], "any", false, false, false, 208)) ? ("") : (" bg-light border-0"))), "readonly" => "readonly"], "label" => "Montant à payer"]);
        // line 212
        echo "
                                            </div>
                                            <div class=\"col-lg-4\">
                                                ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "timbre", [], "any", false, false, false, 215), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 217
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 217, $this->source); })()), "id", [], "any", false, false, false, 217)) ? ("") : (" bg-light border-0"))), "onchange" => "updateTotals()"], "label" => "Timbre"]);
        // line 221
        echo "
                                                ";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), "retenu", [], "any", false, false, false, 222), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 224
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 224, $this->source); })()), "id", [], "any", false, false, false, 224)) ? ("") : (" bg-light border-0"))), "onchange" => "updateTotals()"], "label" => "Retenue"]);
        // line 228
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"card-body p-4\">
                                        <div class=\"hstack gap-2 justify-content-end\">
                                            <button type=\"submit\" class=\"btn btn-success\">
                                                <i class=\"ri-save-line align-bottom me-1\"></i> ";
        // line 236
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 236, $this->source); })()), "id", [], "any", false, false, false, 236)) ? ("Mettre à jour") : ("Enregistrer"));
        echo "
                                            </button>
                                            <a href=\"";
        // line 238
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index");
        echo "\" class=\"btn btn-light\">
                                                Annuler
                                            </a>
                                        </div>
                                    </div>
                                ";
        // line 243
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 249
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
    </div>

    ";
        // line 253
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/dropzone/dropzone-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const ligneCollection = document.getElementById('document-lignes');
    let index = parseInt(ligneCollection.dataset.index);
    function updateHiddenFields() {
        document.querySelectorAll('input[readonly]').forEach(input => {
            if (input.name.includes('montant') || input.name.includes('taux')) {
                const clone = input.cloneNode(true);
                clone.removeAttribute('readonly');
                clone.classList.add('d-none');
                input.parentNode.appendChild(clone);
            }
        });
    }
    function updateReferencePreview() {
        const typeSelect = document.querySelector('#";
        // line 271
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "type", [], "any", false, false, false, 271), "vars", [], "any", false, false, false, 271), "id", [], "any", false, false, false, 271), "html", null, true);
        echo "');
        const type = typeSelect.options[typeSelect.selectedIndex].text;
        const year = new Date().getFullYear().toString().slice(-2);
        
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
        const prefix = prefixMap[type] || 'DOC';
        const referencePreview = prefix + year + '000001';
        document.querySelector('#reference-preview').textContent = referencePreview;
        document.querySelector('#";
        // line 294
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), "reference", [], "any", false, false, false, 294), "vars", [], "any", false, false, false, 294), "id", [], "any", false, false, false, 294), "html", null, true);
        echo "').value = referencePreview;
    }
    function addLigneForm() {
        const newForm = ligneCollection.dataset.prototype
            .replace(/__name__label__/g, index)
            .replace(/__name__/g, index);
        
        const newRow = document.createElement('tr');
        newRow.className = 'ligne-row';
        newRow.innerHTML = newForm;
        
        const removeCell = document.createElement('td');
        removeCell.className = 'text-end';
        removeCell.innerHTML = `
            <button type=\"button\" class=\"btn btn-sm btn-danger remove-ligne\">
                <i class=\"ri-delete-bin-line\"></i>
            </button>
        `;
        newRow.appendChild(removeCell);
        setupLigneEvents(newRow);
        ligneCollection.appendChild(newRow);
        index++;
        ligneCollection.dataset.index = index;
        updateTotals();
        return newRow;
    }
    function setupLigneEvents(row) {
        const prixUnitaireInput = row.querySelector('[id\$=\"_prixUnitaireHt\"]');
        const qteInput = row.querySelector('[id\$=\"_qte\"]');
        
        if (prixUnitaireInput && qteInput) {
            prixUnitaireInput.addEventListener('input', function() { updateLigneTotal(this); });
            qteInput.addEventListener('input', function() { updateLigneTotal(this); });
        }
        
        row.querySelector('.remove-ligne').addEventListener('click', function() {
            row.remove();
            updateTotals();
        });
    }
    function updateLigneTotal(input) {
        const row = input.closest('.ligne-row');
        const prixUnitaire = parseFloat(row.querySelector('[id\$=\"_prixUnitaireHt\"]').value) || 0;
        const qte = parseFloat(row.querySelector('[id\$=\"_qte\"]').value) || 0;
        const remise = parseFloat(row.querySelector('[id\$=\"_remise\"]').value) || 0;
        const total = (prixUnitaire * qte) * (1 - remise/100);
        const totalInput = row.querySelector('[id\$=\"_prixTotalHt\"]');
        totalInput.value = total.toFixed(2);
        
        updateTotals();
    }
    function updateRemise(input) {
        const row = input.closest('.ligne-row');
        const prixUnitaire = parseFloat(row.querySelector('[id\$=\"_prixUnitaireHt\"]').value) || 0;
        const qte = parseFloat(row.querySelector('[id\$=\"_qte\"]').value) || 0;
        const remise = parseFloat(input.value) || 0;
        const total = (prixUnitaire * qte) * (1 - remise / 100);

        const totalInput = row.querySelector('[id\$=\"_prixTotalHt\"]');
        totalInput.value = total.toFixed(2);
        updateTotals();
    }
    function updateTotals() {
        let montantHt = 0;
        
        document.querySelectorAll('[id\$=\"_prixTotalHt\"]').forEach(input => {
            montantHt += parseFloat(input.value) || 0;
        });
        
        const tauxTva = parseFloat(document.querySelector('#";
        // line 363
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 363, $this->source); })()), "tauxTva", [], "any", false, false, false, 363), "vars", [], "any", false, false, false, 363), "id", [], "any", false, false, false, 363), "html", null, true);
        echo "').value) || 0;
        const montantTva = montantHt *(1+( tauxTva / 100));
        const montantTtc = montantHt + montantTva;
        
        const retenu = parseFloat(document.querySelector('#";
        // line 367
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 367, $this->source); })()), "retenu", [], "any", false, false, false, 367), "vars", [], "any", false, false, false, 367), "id", [], "any", false, false, false, 367), "html", null, true);
        echo "').value) || 0;
        const montantRetenu = montantTtc * retenu / 100;
        
        const timbre = parseFloat(document.querySelector('#";
        // line 370
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 370, $this->source); })()), "timbre", [], "any", false, false, false, 370), "vars", [], "any", false, false, false, 370), "id", [], "any", false, false, false, 370), "html", null, true);
        echo "').value) || 0;
        const montantAPayer = montantTtc - montantRetenu + timbre;
        
        document.querySelector('#";
        // line 373
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 373, $this->source); })()), "montantHt", [], "any", false, false, false, 373), "vars", [], "any", false, false, false, 373), "id", [], "any", false, false, false, 373), "html", null, true);
        echo "').value = montantHt.toFixed(2);
        document.querySelector('#";
        // line 374
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 374, $this->source); })()), "montantTva", [], "any", false, false, false, 374), "vars", [], "any", false, false, false, 374), "id", [], "any", false, false, false, 374), "html", null, true);
        echo "').value = montantTva.toFixed(2);
        document.querySelector('#";
        // line 375
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 375, $this->source); })()), "montantAPayer", [], "any", false, false, false, 375), "vars", [], "any", false, false, false, 375), "id", [], "any", false, false, false, 375), "html", null, true);
        echo "').value = montantAPayer.toFixed(2);
    }
    document.getElementById('add-ligne').addEventListener('click', function(e) {
        e.preventDefault();
        addLigneForm();
    });

    document.querySelectorAll('.ligne-row').forEach(row => {
        setupLigneEvents(row);
    });

    document.querySelectorAll('[id\$=\"_prixUnitaireHt\"], [id\$=\"_qte\"], [id\$=\"_remise\"]').forEach(input => {
        input.addEventListener('input', function() { updateLigneTotal(this); });
    });

    document.querySelector('#";
        // line 390
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 390, $this->source); })()), "tauxTva", [], "any", false, false, false, 390), "vars", [], "any", false, false, false, 390), "id", [], "any", false, false, false, 390), "html", null, true);
        echo "').addEventListener('input', updateTotals);
    document.querySelector('#";
        // line 391
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "timbre", [], "any", false, false, false, 391), "vars", [], "any", false, false, false, 391), "id", [], "any", false, false, false, 391), "html", null, true);
        echo "').addEventListener('input', updateTotals);
    document.querySelector('#";
        // line 392
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 392, $this->source); })()), "retenu", [], "any", false, false, false, 392), "vars", [], "any", false, false, false, 392), "id", [], "any", false, false, false, 392), "html", null, true);
        echo "').addEventListener('input', updateTotals);
    ";
        // line 393
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 393, $this->source); })()), "id", [], "any", false, false, false, 393)) {
            // line 394
            echo "        const typeSelect = document.querySelector('#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "type", [], "any", false, false, false, 394), "vars", [], "any", false, false, false, 394), "id", [], "any", false, false, false, 394), "html", null, true);
            echo "');
        if (typeSelect.value) {
            updateReferencePreview();
        }
        typeSelect.addEventListener('change', updateReferencePreview);
    ";
        }
        // line 400
        echo "    document.querySelector('form').addEventListener('submit', function(e) {
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
        return array (  588 => 400,  578 => 394,  576 => 393,  572 => 392,  568 => 391,  564 => 390,  546 => 375,  542 => 374,  538 => 373,  532 => 370,  526 => 367,  519 => 363,  447 => 294,  421 => 271,  402 => 255,  398 => 254,  394 => 253,  387 => 249,  378 => 243,  370 => 238,  365 => 236,  355 => 228,  353 => 224,  352 => 222,  349 => 221,  347 => 217,  346 => 215,  341 => 212,  339 => 208,  338 => 206,  335 => 205,  333 => 201,  332 => 199,  329 => 198,  327 => 194,  326 => 192,  323 => 191,  321 => 187,  320 => 185,  301 => 168,  280 => 160,  278 => 156,  277 => 154,  273 => 152,  271 => 148,  270 => 146,  267 => 145,  265 => 141,  264 => 139,  261 => 138,  259 => 134,  258 => 132,  254 => 131,  250 => 130,  247 => 129,  230 => 128,  224 => 127,  203 => 108,  201 => 106,  200 => 105,  195 => 102,  193 => 100,  192 => 99,  187 => 96,  185 => 94,  184 => 93,  179 => 90,  177 => 87,  176 => 86,  175 => 85,  174 => 83,  164 => 75,  162 => 72,  161 => 70,  156 => 68,  153 => 67,  147 => 65,  141 => 63,  139 => 62,  128 => 54,  124 => 53,  113 => 45,  106 => 40,  104 => 39,  103 => 37,  95 => 32,  69 => 9,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>
    {{ include('partials/title-meta.html.twig', {title: document.id ? 'Modifier un document' : 'Créer un document'}) }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/libs/dropzone/dropzone.css') }}\" type=\"text/css\" />
    <link href=\"{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
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
    </style>
</head>

<body>
    <div id=\"layout-wrapper\">
        {{ include('partials/menu.html.twig') }}
        
        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid mt-3\">
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
                                                    <input id=\"profile-img-file-input\" type=\"file\" class=\"profile-img-file-input\" />
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
                                                {{ form_row(form.type, {
                                                    'attr': {
                                                        'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                        'onchange': document.id ? '' : 'updateReferencePreview()',
                                                        'disabled': document.id ? 'disabled' : false
                                                    },
                                                    'label': 'Type'
                                                }) }}
                                            </div>
                                            <div class=\"col-lg-3 col-sm-6\">
                                                {{ form_row(form.status, {
                                                    'attr': {'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0')},
                                                    'label': 'Statut'
                                                }) }}
                                            </div>
                                            <div class=\"col-lg-3 col-sm-6\">
                                                {{ form_row(form.emetteur, {
                                                    'attr': {'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0')},
                                                    'label': 'Émetteur'
                                                }) }}
                                            </div>
                                            <div class=\"col-lg-3 col-sm-6\">
                                                {{ form_row(form.destinataire, {
                                                    'attr': {'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0')},
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
                                                                    'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                                    'onchange': 'updateLigneTotal(this)'
                                                                },
                                                                'label': false
                                                            }) }}</td>
                                                            <td>{{ form_widget(ligne.qte, {
                                                                'attr': {
                                                                    'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                                    'onchange': 'updateLigneTotal(this)'
                                                                },
                                                                'label': false
                                                            }) }}</td>
                                                            <td>{{ form_widget(ligne.prixTotalHt, {
                                                                'attr': {
                                                                    'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                                    'readonly': 'readonly'
                                                                },
                                                                'label': false
                                                            }) }}</td>
                                                            
                                                            <td class=\"text-end\">{{ form_widget(ligne.remise, {
                                                                'attr': {
                                                                    'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                                    'oninput': 'updateRemise(this)'
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
                                                                <i class=\"ri-add-fill me-1 align-bottom\"></i> Ajouter une ligne
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
                                                        'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                        'readonly': 'readonly'
                                                    },
                                                    'label': 'Montant HT'
                                                }) }}
                                                {{ form_row(form.tauxTva, {
                                                    'attr': {
                                                        'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                        'onchange': 'updateTotals()'
                                                    },
                                                    'label': 'Taux TVA'
                                                }) }}
                                                {{ form_row(form.montantTva, {
                                                    'attr': {
                                                        'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                        'readonly': 'readonly'
                                                    },
                                                    'label': 'Montant TVA'
                                                }) }}
                                                {{ form_row(form.montantAPayer, {
                                                    'attr': {
                                                        'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                        'readonly': 'readonly'
                                                    },
                                                    'label': 'Montant à payer'
                                                }) }}
                                            </div>
                                            <div class=\"col-lg-4\">
                                                {{ form_row(form.timbre, {
                                                    'attr': {
                                                        'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                        'onchange': 'updateTotals()'
                                                    },
                                                    'label': 'Timbre'
                                                }) }}
                                                {{ form_row(form.retenu, {
                                                    'attr': {
                                                        'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
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
                                                <i class=\"ri-save-line align-bottom me-1\"></i> {{ document.id ? 'Mettre à jour' : 'Enregistrer' }}
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
        document.addEventListener('DOMContentLoaded', function() {
    const ligneCollection = document.getElementById('document-lignes');
    let index = parseInt(ligneCollection.dataset.index);
    function updateHiddenFields() {
        document.querySelectorAll('input[readonly]').forEach(input => {
            if (input.name.includes('montant') || input.name.includes('taux')) {
                const clone = input.cloneNode(true);
                clone.removeAttribute('readonly');
                clone.classList.add('d-none');
                input.parentNode.appendChild(clone);
            }
        });
    }
    function updateReferencePreview() {
        const typeSelect = document.querySelector('#{{ form.type.vars.id }}');
        const type = typeSelect.options[typeSelect.selectedIndex].text;
        const year = new Date().getFullYear().toString().slice(-2);
        
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
        const prefix = prefixMap[type] || 'DOC';
        const referencePreview = prefix + year + '000001';
        document.querySelector('#reference-preview').textContent = referencePreview;
        document.querySelector('#{{ form.reference.vars.id }}').value = referencePreview;
    }
    function addLigneForm() {
        const newForm = ligneCollection.dataset.prototype
            .replace(/__name__label__/g, index)
            .replace(/__name__/g, index);
        
        const newRow = document.createElement('tr');
        newRow.className = 'ligne-row';
        newRow.innerHTML = newForm;
        
        const removeCell = document.createElement('td');
        removeCell.className = 'text-end';
        removeCell.innerHTML = `
            <button type=\"button\" class=\"btn btn-sm btn-danger remove-ligne\">
                <i class=\"ri-delete-bin-line\"></i>
            </button>
        `;
        newRow.appendChild(removeCell);
        setupLigneEvents(newRow);
        ligneCollection.appendChild(newRow);
        index++;
        ligneCollection.dataset.index = index;
        updateTotals();
        return newRow;
    }
    function setupLigneEvents(row) {
        const prixUnitaireInput = row.querySelector('[id\$=\"_prixUnitaireHt\"]');
        const qteInput = row.querySelector('[id\$=\"_qte\"]');
        
        if (prixUnitaireInput && qteInput) {
            prixUnitaireInput.addEventListener('input', function() { updateLigneTotal(this); });
            qteInput.addEventListener('input', function() { updateLigneTotal(this); });
        }
        
        row.querySelector('.remove-ligne').addEventListener('click', function() {
            row.remove();
            updateTotals();
        });
    }
    function updateLigneTotal(input) {
        const row = input.closest('.ligne-row');
        const prixUnitaire = parseFloat(row.querySelector('[id\$=\"_prixUnitaireHt\"]').value) || 0;
        const qte = parseFloat(row.querySelector('[id\$=\"_qte\"]').value) || 0;
        const remise = parseFloat(row.querySelector('[id\$=\"_remise\"]').value) || 0;
        const total = (prixUnitaire * qte) * (1 - remise/100);
        const totalInput = row.querySelector('[id\$=\"_prixTotalHt\"]');
        totalInput.value = total.toFixed(2);
        
        updateTotals();
    }
    function updateRemise(input) {
        const row = input.closest('.ligne-row');
        const prixUnitaire = parseFloat(row.querySelector('[id\$=\"_prixUnitaireHt\"]').value) || 0;
        const qte = parseFloat(row.querySelector('[id\$=\"_qte\"]').value) || 0;
        const remise = parseFloat(input.value) || 0;
        const total = (prixUnitaire * qte) * (1 - remise / 100);

        const totalInput = row.querySelector('[id\$=\"_prixTotalHt\"]');
        totalInput.value = total.toFixed(2);
        updateTotals();
    }
    function updateTotals() {
        let montantHt = 0;
        
        document.querySelectorAll('[id\$=\"_prixTotalHt\"]').forEach(input => {
            montantHt += parseFloat(input.value) || 0;
        });
        
        const tauxTva = parseFloat(document.querySelector('#{{ form.tauxTva.vars.id }}').value) || 0;
        const montantTva = montantHt *(1+( tauxTva / 100));
        const montantTtc = montantHt + montantTva;
        
        const retenu = parseFloat(document.querySelector('#{{ form.retenu.vars.id }}').value) || 0;
        const montantRetenu = montantTtc * retenu / 100;
        
        const timbre = parseFloat(document.querySelector('#{{ form.timbre.vars.id }}').value) || 0;
        const montantAPayer = montantTtc - montantRetenu + timbre;
        
        document.querySelector('#{{ form.montantHt.vars.id }}').value = montantHt.toFixed(2);
        document.querySelector('#{{ form.montantTva.vars.id }}').value = montantTva.toFixed(2);
        document.querySelector('#{{ form.montantAPayer.vars.id }}').value = montantAPayer.toFixed(2);
    }
    document.getElementById('add-ligne').addEventListener('click', function(e) {
        e.preventDefault();
        addLigneForm();
    });

    document.querySelectorAll('.ligne-row').forEach(row => {
        setupLigneEvents(row);
    });

    document.querySelectorAll('[id\$=\"_prixUnitaireHt\"], [id\$=\"_qte\"], [id\$=\"_remise\"]').forEach(input => {
        input.addEventListener('input', function() { updateLigneTotal(this); });
    });

    document.querySelector('#{{ form.tauxTva.vars.id }}').addEventListener('input', updateTotals);
    document.querySelector('#{{ form.timbre.vars.id }}').addEventListener('input', updateTotals);
    document.querySelector('#{{ form.retenu.vars.id }}').addEventListener('input', updateTotals);
    {% if not document.id %}
        const typeSelect = document.querySelector('#{{ form.type.vars.id }}');
        if (typeSelect.value) {
            updateReferencePreview();
        }
        typeSelect.addEventListener('change', updateReferencePreview);
    {% endif %}
    document.querySelector('form').addEventListener('submit', function(e) {
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
