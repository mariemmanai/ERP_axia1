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
    <br>
    <br>
    ";
        // line 6
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)) ? ("Modifier un document") : ("Créer un document"))]);
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
        // line 34
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "
        
        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid\">
                    ";
        // line 39
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Documents", "title" => ((twig_get_attribute($this->env, $this->source,         // line 41
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)) ? ("Modifier un document") : ("Créer un document"))]);
        // line 42
        echo "

                    <div class=\"row justify-content-center\">
                        <div class=\"col-xxl-9\">
                            <div class=\"card\">
                                ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        echo "
                                    <div class=\"card-body border-bottom border-bottom-dashed p-4\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4\">
                                                <div class=\"profile-user mx-auto mb-3\">
                                                    <input id=\"profile-img-file-input\" type=\"file\" class=\"profile-img-file-input\" />
                                                    <label for=\"profile-img-file-input\" class=\"d-block\" tabindex=\"0\">
                                                        <span class=\"overflow-hidden border border-dashed d-flex align-items-center justify-content-center rounded\" style=\"height: 60px; width: 256px;\">
                                                            <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-dark.png"), "html", null, true);
        echo "\" class=\"card-logo card-logo-dark user-profile-image img-fluid\" alt=\"logo dark\">
                                                            <img src=\"";
        // line 56
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
        // line 64
        if (twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)) {
            // line 65
            echo "                                                        <div class=\"form-control bg-light border-0\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "reference", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "value", [], "any", false, false, false, 65), "html", null, true);
            echo "</div>
                                                    ";
        } else {
            // line 67
            echo "                                                        <div id=\"reference-preview\" class=\"form-control bg-light border-0\">";
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 67), "reference", [], "any", true, true, false, 67) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 67), "reference", [], "any", false, false, false, 67)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 67), "reference", [], "any", false, false, false, 67), "html", null, true))) : (print ("La référence sera générée automatiquement")));
            echo "</div>
                                                    ";
        }
        // line 69
        echo "
                                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "reference", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)) ? ("d-none") : ("d-none"))]]);
        echo "
                                                </div>
                                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "docDate", [], "any", false, false, false, 72), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 74
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)) ? ("") : (" bg-light border-0")))], "label" => "Date"]);
        // line 77
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"card-body p-4\">
                                        <div class=\"row g-3\">
                                            <div class=\"col-lg-3 col-sm-6\">
                                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "type", [], "any", false, false, false, 85), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 87
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87)) ? ("") : (" bg-light border-0"))), "onchange" => ((twig_get_attribute($this->env, $this->source,         // line 88
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)) ? ("") : ("updateReferencePreview()")), "disabled" => ((twig_get_attribute($this->env, $this->source,         // line 89
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89)) ? ("disabled") : (false))], "label" => "Type"]);
        // line 92
        echo "
                                            </div>
                                            <div class=\"col-lg-3 col-sm-6\">
                                                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "status", [], "any", false, false, false, 95), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 96
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)) ? ("") : (" bg-light border-0")))], "label" => "Statut"]);
        // line 98
        echo "
                                            </div>
                                            <div class=\"col-lg-3 col-sm-6\">
                                                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "emetteur", [], "any", false, false, false, 101), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 102
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102)) ? ("") : (" bg-light border-0")))], "label" => "Émetteur"]);
        // line 104
        echo "
                                            </div>
                                            <div class=\"col-lg-3 col-sm-6\">
                                                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "destinataire", [], "any", false, false, false, 107), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 108
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108)) ? ("") : (" bg-light border-0")))], "label" => "Destinataire"]);
        // line 110
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
        // line 129
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "lignes", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "prototype", [], "any", false, false, false, 129), 'widget'), "html_attr");
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "lignes", [], "any", false, false, false, 129)), "html", null, true);
        echo "\">
                                                    ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "lignes", [], "any", false, false, false, 130));
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
            // line 131
            echo "                                                        <tr class=\"ligne-row\">
                                                            <td>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 132), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 133
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "article", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "</td>
                                                            <td>";
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "prixUnitaireHt", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,             // line 136
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 136, $this->source); })()), "id", [], "any", false, false, false, 136)) ? ("") : (" bg-light border-0"))), "onchange" => "updateLigneTotal(this)"], "label" => false]);
            // line 140
            echo "</td>
                                                            <td>";
            // line 141
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "qte", [], "any", false, false, false, 141), 'widget', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,             // line 143
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 143, $this->source); })()), "id", [], "any", false, false, false, 143)) ? ("") : (" bg-light border-0"))), "onchange" => "updateLigneTotal(this)"], "label" => false]);
            // line 147
            echo "</td>
                                                            <td>";
            // line 148
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "prixTotalHt", [], "any", false, false, false, 148), 'widget', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,             // line 150
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 150, $this->source); })()), "id", [], "any", false, false, false, 150)) ? ("") : (" bg-light border-0"))), "readonly" => "readonly"], "label" => false]);
            // line 154
            echo "</td>
                                                            
                                                            <td class=\"text-end\">";
            // line 156
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "remise", [], "any", false, false, false, 156), 'widget', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,             // line 158
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 158, $this->source); })()), "id", [], "any", false, false, false, 158)) ? ("") : (" bg-light border-0"))), "readonly" => "readonly"], "label" => false]);
            // line 162
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
        // line 169
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
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "montantHt", [], "any", false, false, false, 186), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 188
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 188, $this->source); })()), "id", [], "any", false, false, false, 188)) ? ("") : (" bg-light border-0"))), "readonly" => "readonly"], "label" => "Montant HT"]);
        // line 192
        echo "
                                                ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "tauxTva", [], "any", false, false, false, 193), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 195
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 195, $this->source); })()), "id", [], "any", false, false, false, 195)) ? ("") : (" bg-light border-0"))), "onchange" => "updateTotals()"], "label" => "Taux TVA"]);
        // line 199
        echo "
                                                ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "montantTva", [], "any", false, false, false, 200), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 202
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 202, $this->source); })()), "id", [], "any", false, false, false, 202)) ? ("") : (" bg-light border-0"))), "readonly" => "readonly"], "label" => "Montant TVA"]);
        // line 206
        echo "
                                                ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "montantAPayer", [], "any", false, false, false, 207), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 209
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 209, $this->source); })()), "id", [], "any", false, false, false, 209)) ? ("") : (" bg-light border-0"))), "readonly" => "readonly"], "label" => "Montant à payer"]);
        // line 213
        echo "
                                            </div>
                                            <div class=\"col-lg-4\">
                                                ";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "timbre", [], "any", false, false, false, 216), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 218
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 218, $this->source); })()), "id", [], "any", false, false, false, 218)) ? ("") : (" bg-light border-0"))), "onchange" => "updateTotals()"], "label" => "Timbre"]);
        // line 222
        echo "
                                                ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "retenu", [], "any", false, false, false, 223), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 225
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 225, $this->source); })()), "id", [], "any", false, false, false, 225)) ? ("") : (" bg-light border-0"))), "onchange" => "updateTotals()"], "label" => "Retenue"]);
        // line 229
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"card-body p-4\">
                                        <div class=\"hstack gap-2 justify-content-end\">
                                            <button type=\"submit\" class=\"btn btn-success\">
                                                <i class=\"ri-save-line align-bottom me-1\"></i> ";
        // line 237
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 237, $this->source); })()), "id", [], "any", false, false, false, 237)) ? ("Mettre à jour") : ("Enregistrer"));
        echo "
                                            </button>
                                            <a href=\"";
        // line 239
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index");
        echo "\" class=\"btn btn-light\">
                                                Annuler
                                            </a>
                                        </div>
                                    </div>
                                ";
        // line 244
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 250
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
    </div>

    ";
        // line 254
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "
    <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/dropzone/dropzone-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const ligneCollection = document.getElementById('document-lignes');
    let index = parseInt(ligneCollection.dataset.index);
    function updateReferencePreview() {
        const typeSelect = document.querySelector('#";
        // line 262
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "type", [], "any", false, false, false, 262), "vars", [], "any", false, false, false, 262), "id", [], "any", false, false, false, 262), "html", null, true);
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
        // line 285
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), "reference", [], "any", false, false, false, 285), "vars", [], "any", false, false, false, 285), "id", [], "any", false, false, false, 285), "html", null, true);
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
    function updateTotals() {
        let montantHt = 0;
        
        document.querySelectorAll('[id\$=\"_prixTotalHt\"]').forEach(input => {
            montantHt += parseFloat(input.value) || 0;
        });
        
        const tauxTva = parseFloat(document.querySelector('#";
        // line 343
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 343, $this->source); })()), "tauxTva", [], "any", false, false, false, 343), "vars", [], "any", false, false, false, 343), "id", [], "any", false, false, false, 343), "html", null, true);
        echo "').value) || 0;
        const montantTva = montantHt *(1+( tauxTva / 100));
        const montantTtc = montantHt + montantTva;
        
        const retenu = parseFloat(document.querySelector('#";
        // line 347
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 347, $this->source); })()), "retenu", [], "any", false, false, false, 347), "vars", [], "any", false, false, false, 347), "id", [], "any", false, false, false, 347), "html", null, true);
        echo "').value) || 0;
        const montantRetenu = montantTtc * retenu / 100;
        
        const timbre = parseFloat(document.querySelector('#";
        // line 350
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "timbre", [], "any", false, false, false, 350), "vars", [], "any", false, false, false, 350), "id", [], "any", false, false, false, 350), "html", null, true);
        echo "').value) || 0;
        const montantAPayer = montantTtc - montantRetenu + timbre;
        
        document.querySelector('#";
        // line 353
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 353, $this->source); })()), "montantHt", [], "any", false, false, false, 353), "vars", [], "any", false, false, false, 353), "id", [], "any", false, false, false, 353), "html", null, true);
        echo "').value = montantHt.toFixed(2);
        document.querySelector('#";
        // line 354
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 354, $this->source); })()), "montantTva", [], "any", false, false, false, 354), "vars", [], "any", false, false, false, 354), "id", [], "any", false, false, false, 354), "html", null, true);
        echo "').value = montantTva.toFixed(2);
        document.querySelector('#";
        // line 355
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 355, $this->source); })()), "montantAPayer", [], "any", false, false, false, 355), "vars", [], "any", false, false, false, 355), "id", [], "any", false, false, false, 355), "html", null, true);
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
        // line 370
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 370, $this->source); })()), "tauxTva", [], "any", false, false, false, 370), "vars", [], "any", false, false, false, 370), "id", [], "any", false, false, false, 370), "html", null, true);
        echo "').addEventListener('input', updateTotals);
    document.querySelector('#";
        // line 371
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 371, $this->source); })()), "timbre", [], "any", false, false, false, 371), "vars", [], "any", false, false, false, 371), "id", [], "any", false, false, false, 371), "html", null, true);
        echo "').addEventListener('input', updateTotals);
    document.querySelector('#";
        // line 372
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 372, $this->source); })()), "retenu", [], "any", false, false, false, 372), "vars", [], "any", false, false, false, 372), "id", [], "any", false, false, false, 372), "html", null, true);
        echo "').addEventListener('input', updateTotals);
    ";
        // line 373
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 373, $this->source); })()), "id", [], "any", false, false, false, 373)) {
            // line 374
            echo "        const typeSelect = document.querySelector('#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 374, $this->source); })()), "type", [], "any", false, false, false, 374), "vars", [], "any", false, false, false, 374), "id", [], "any", false, false, false, 374), "html", null, true);
            echo "');
        if (typeSelect.value) {
            updateReferencePreview();
        }
        typeSelect.addEventListener('change', updateReferencePreview);
    ";
        }
        // line 380
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
        return array (  568 => 380,  558 => 374,  556 => 373,  552 => 372,  548 => 371,  544 => 370,  526 => 355,  522 => 354,  518 => 353,  512 => 350,  506 => 347,  499 => 343,  438 => 285,  412 => 262,  403 => 256,  399 => 255,  395 => 254,  388 => 250,  379 => 244,  371 => 239,  366 => 237,  356 => 229,  354 => 225,  353 => 223,  350 => 222,  348 => 218,  347 => 216,  342 => 213,  340 => 209,  339 => 207,  336 => 206,  334 => 202,  333 => 200,  330 => 199,  328 => 195,  327 => 193,  324 => 192,  322 => 188,  321 => 186,  302 => 169,  282 => 162,  280 => 158,  279 => 156,  275 => 154,  273 => 150,  272 => 148,  269 => 147,  267 => 143,  266 => 141,  263 => 140,  261 => 136,  260 => 134,  256 => 133,  252 => 132,  249 => 131,  232 => 130,  226 => 129,  205 => 110,  203 => 108,  202 => 107,  197 => 104,  195 => 102,  194 => 101,  189 => 98,  187 => 96,  186 => 95,  181 => 92,  179 => 89,  178 => 88,  177 => 87,  176 => 85,  166 => 77,  164 => 74,  163 => 72,  158 => 70,  155 => 69,  149 => 67,  143 => 65,  141 => 64,  130 => 56,  126 => 55,  115 => 47,  108 => 42,  106 => 41,  105 => 39,  97 => 34,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>
    <br>
    <br>
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
</html>", "documents/new&edit.html.twig", "C:\\Users\\Lenovo\\Downloads\\velzon-symfony_v4.3.0\\Symfony\\saas\\templates\\documents\\new&edit.html.twig");
    }
}
