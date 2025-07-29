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
\t<br>
\t<br>
\t";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)) ? ("Modifier un document") : ("Créer un document"))]);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/dropzone/dropzone.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<style>
\t\t.ligne-row td {
\t\t\tvertical-align: middle !important;
\t\t}
\t\t.form-control-sm {
\t\t\theight: calc(1.5em + 0.5rem + 2px);
\t\t\tpadding: 0.25rem 0.5rem;
\t\t\tfont-size: 0.875rem;
\t\t\tline-height: 1.5;
\t\t\tborder-radius: 0.2rem;
\t\t}
\t\t.input-group-sm > .form-control {
\t\t\theight: calc(1.5em + 0.5rem + 2px);
\t\t\tpadding: 0.25rem 0.5rem;
\t\t\tfont-size: 0.875rem;
\t\t\tline-height: 1.5;
\t\t}
\t</style>
</head>

<body>
\t<div id=\"layout-wrapper\">
\t\t";
        // line 33
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "

\t\t<div class=\"main-content\">
\t\t\t<div class=\"page-content\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t";
        // line 38
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Documents", "title" => ((twig_get_attribute($this->env, $this->source,         // line 40
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)) ? ("Modifier un document") : ("Créer un document"))]);
        // line 41
        echo "

\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t<div class=\"col-xxl-9\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        echo "
\t\t\t\t\t\t\t\t<div class=\"card-body border-bottom border-bottom-dashed p-4\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"profile-user mx-auto mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"profile-img-file-input\" type=\"file\" class=\"profile-img-file-input\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"profile-img-file-input\" class=\"d-block\" tabindex=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"overflow-hidden border border-dashed d-flex align-items-center justify-content-center rounded\" style=\"height: 60px; width: 256px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-dark.png"), "html", null, true);
        echo "\" class=\"card-logo card-logo-dark user-profile-image img-fluid\" alt=\"logo dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.png"), "html", null, true);
        echo "\" class=\"card-logo card-logo-light user-profile-image img-fluid\" alt=\"logo light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 ms-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Référence</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 63
        if (twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)) {
            // line 64
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control bg-light border-0\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "reference", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "value", [], "any", false, false, false, 64), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"reference-preview\" class=\"form-control bg-light border-0\">";
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 66), "reference", [], "any", true, true, false, 66) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 66), "reference", [], "any", false, false, false, 66)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 66), "reference", [], "any", false, false, false, 66), "html", null, true))) : (print ("La référence sera générée automatiquement")));
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 68
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "reference", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)) ? ("d-none") : ("d-none"))]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "docDate", [], "any", false, false, false, 71), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 73
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)) ? ("") : (" bg-light border-0")))], "label" => "Date"]);
        // line 76
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 84
        if (twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84)) {
            // line 85
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 86
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "type", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "d-none"]]);
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 89
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Type</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control bg-light border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "type", [], "any", false, false, false, 92), "vars", [], "any", false, false, false, 92), "value", [], "any", false, false, false, 92), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 96
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "type", [], "any", false, false, false, 96), 'row', ["attr" => ["class" => "form-control bg-light border-0", "onchange" => "updateReferencePreview()", "disabled" => ((twig_get_attribute($this->env, $this->source,             // line 100
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)) ? ("disabled") : (false))], "label" => "Type"]);
            // line 103
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 105
        echo "\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "status", [], "any", false, false, false, 108), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 109
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109)) ? ("") : (" bg-light border-0")))], "label" => "Statut"]);
        // line 111
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "emetteur", [], "any", false, false, false, 114), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 115
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 115, $this->source); })()), "id", [], "any", false, false, false, 115)) ? ("") : (" bg-light border-0")))], "label" => "Émetteur"]);
        // line 117
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "destinataire", [], "any", false, false, false, 120), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 121
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 121, $this->source); })()), "id", [], "any", false, false, false, 121)) ? ("") : (" bg-light border-0")))], "label" => "Destinataire"]);
        // line 123
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body p-4 border-top border-top-dashed\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Lignes du document</h5>
\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t<table class=\"invoice-table table table-borderless table-nowrap mb-0\">
\t\t\t\t\t\t\t\t\t\t\t<thead class=\"align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"table-active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col\">#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col\">Article</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col\">Prix unitaire</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col\">Quantité</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col\">Montant</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col text-end\">Remise</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"document-lignes\" data-prototype=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "lignes", [], "any", false, false, false, 142), "vars", [], "any", false, false, false, 142), "prototype", [], "any", false, false, false, 142), 'widget'), "html_attr");
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "lignes", [], "any", false, false, false, 142)), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "lignes", [], "any", false, false, false, 143));
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
            // line 144
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"ligne-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 145), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 146
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "article", [], "any", false, false, false, 146), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 147
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "prixUnitaireHt", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,             // line 149
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 149, $this->source); })()), "id", [], "any", false, false, false, 149)) ? ("") : (" bg-light border-0"))), "onchange" => "updateLigneTotal(this)"], "label" => false]);
            // line 153
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 154
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "qte", [], "any", false, false, false, 154), 'widget', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,             // line 156
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 156, $this->source); })()), "id", [], "any", false, false, false, 156)) ? ("") : (" bg-light border-0"))), "onchange" => "updateLigneTotal(this)"], "label" => false]);
            // line 160
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 161
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "prixTotalHt", [], "any", false, false, false, 161), 'widget', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,             // line 163
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 163, $this->source); })()), "id", [], "any", false, false, false, 163)) ? ("") : (" bg-light border-0"))), "readonly" => "readonly"], "label" => false]);
            // line 167
            echo "</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">";
            // line 169
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ligne"], "remise", [], "any", false, false, false, 169), 'widget', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,             // line 171
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 171, $this->source); })()), "id", [], "any", false, false, false, 171)) ? ("") : (" bg-light border-0"))), "readonly" => "readonly"], "label" => false]);
            // line 175
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger remove-ligne\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-delete-bin-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
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
        // line 182
        echo "\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"add-ligne\" class=\"btn btn-soft-secondary fw-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-add-fill me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAjouter une ligne
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "montantHt", [], "any", false, false, false, 199), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 201
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 201, $this->source); })()), "id", [], "any", false, false, false, 201)) ? ("") : (" bg-light border-0"))), "readonly" => "readonly"], "label" => "Montant HT"]);
        // line 205
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "tauxTva", [], "any", false, false, false, 206), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 208
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 208, $this->source); })()), "id", [], "any", false, false, false, 208)) ? ("") : (" bg-light border-0"))), "onchange" => "updateTotals()"], "label" => "Taux TVA"]);
        // line 212
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "montantTva", [], "any", false, false, false, 213), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 215
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 215, $this->source); })()), "id", [], "any", false, false, false, 215)) ? ("") : (" bg-light border-0"))), "readonly" => "readonly"], "label" => "Montant TVA"]);
        // line 219
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "montantAPayer", [], "any", false, false, false, 220), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 222
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 222, $this->source); })()), "id", [], "any", false, false, false, 222)) ? ("") : (" bg-light border-0"))), "readonly" => "readonly"], "label" => "Montant à payer"]);
        // line 226
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "timbre", [], "any", false, false, false, 229), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 231
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 231, $this->source); })()), "id", [], "any", false, false, false, 231)) ? ("") : (" bg-light border-0"))), "onchange" => "updateTotals()"], "label" => "Timbre"]);
        // line 235
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), "retenu", [], "any", false, false, false, 236), 'row', ["attr" => ["class" => ("form-control" . ((twig_get_attribute($this->env, $this->source,         // line 238
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 238, $this->source); })()), "id", [], "any", false, false, false, 238)) ? ("") : (" bg-light border-0"))), "onchange" => "updateTotals()"], "label" => "Retenue"]);
        // line 242
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2 justify-content-end\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-save-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 251
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 251, $this->source); })()), "id", [], "any", false, false, false, 251)) ? ("Mettre à jour") : ("Enregistrer"));
        echo "
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 253
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index");
        echo "\" class=\"btn btn-light\">
\t\t\t\t\t\t\t\t\t\t\tAnnuler
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 258
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 264
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
\t\t</div>
\t</div>
\t";
        // line 267
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "
\t<script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/dropzone/dropzone-min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () {
const ligneCollection = document.getElementById('document-lignes');
let index = parseInt(ligneCollection.dataset.index);
const form = document.querySelector('form');
function updateReferencePreview() {
const typeSelect = document.querySelector('#";
        // line 276
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "type", [], "any", false, false, false, 276), "vars", [], "any", false, false, false, 276), "id", [], "any", false, false, false, 276), "html", null, true);
        echo "');
const type = typeSelect.value;
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
        // line 301
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), "reference", [], "any", false, false, false, 301), "vars", [], "any", false, false, false, 301), "id", [], "any", false, false, false, 301), "html", null, true);
        echo "').value = referencePreview;
}
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
        // line 371
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 371, $this->source); })()), "tauxTva", [], "any", false, false, false, 371), "vars", [], "any", false, false, false, 371), "id", [], "any", false, false, false, 371), "html", null, true);
        echo "').value) || 0;
const montantTva = montantHt * (tauxTva / 100);
const montantTtc = montantHt + montantTva;

const timbre = parseFloat(document.querySelector('#";
        // line 375
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 375, $this->source); })()), "timbre", [], "any", false, false, false, 375), "vars", [], "any", false, false, false, 375), "id", [], "any", false, false, false, 375), "html", null, true);
        echo "').value) || 0;
const retenu = parseFloat(document.querySelector('#";
        // line 376
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 376, $this->source); })()), "retenu", [], "any", false, false, false, 376), "vars", [], "any", false, false, false, 376), "id", [], "any", false, false, false, 376), "html", null, true);
        echo "').value) || 0;
const montantAPayer = montantTtc + timbre - retenu;

document.querySelector('#";
        // line 379
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 379, $this->source); })()), "montantHt", [], "any", false, false, false, 379), "vars", [], "any", false, false, false, 379), "id", [], "any", false, false, false, 379), "html", null, true);
        echo "').value = montantHt.toFixed(2);
document.querySelector('#";
        // line 380
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 380, $this->source); })()), "montantTva", [], "any", false, false, false, 380), "vars", [], "any", false, false, false, 380), "id", [], "any", false, false, false, 380), "html", null, true);
        echo "').value = montantTtc.toFixed(2);
document.querySelector('#";
        // line 381
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 381, $this->source); })()), "montantAPayer", [], "any", false, false, false, 381), "vars", [], "any", false, false, false, 381), "id", [], "any", false, false, false, 381), "html", null, true);
        echo "').value = montantAPayer.toFixed(2);
}
document.getElementById('add-ligne').addEventListener('click', addLigneForm);

document.querySelectorAll('.ligne-row').forEach(row => {
setupLigneEvents(row);
});

document.querySelector('#";
        // line 389
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 389, $this->source); })()), "tauxTva", [], "any", false, false, false, 389), "vars", [], "any", false, false, false, 389), "id", [], "any", false, false, false, 389), "html", null, true);
        echo "').addEventListener('input', updateTotals);
document.querySelector('#";
        // line 390
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 390, $this->source); })()), "timbre", [], "any", false, false, false, 390), "vars", [], "any", false, false, false, 390), "id", [], "any", false, false, false, 390), "html", null, true);
        echo "').addEventListener('input', updateTotals);
document.querySelector('#";
        // line 391
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "retenu", [], "any", false, false, false, 391), "vars", [], "any", false, false, false, 391), "id", [], "any", false, false, false, 391), "html", null, true);
        echo "').addEventListener('input', updateTotals);

if (!";
        // line 393
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 393, $this->source); })()), "id", [], "any", false, false, false, 393)) ? ("true") : ("false"));
        echo ") {
const typeSelect = document.querySelector('#";
        // line 394
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "type", [], "any", false, false, false, 394), "vars", [], "any", false, false, false, 394), "id", [], "any", false, false, false, 394), "html", null, true);
        echo "');
typeSelect.addEventListener('change', updateReferencePreview);
if (typeSelect.value) {
updateReferencePreview();
}
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

if (! isValid) {
e.preventDefault();
alert('Veuillez corriger les lignes en rouge (quantité et prix doivent être > 0)');
}
});
});
\t</script>

</body></html>
";
        
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
        return array (  591 => 394,  587 => 393,  582 => 391,  578 => 390,  574 => 389,  563 => 381,  559 => 380,  555 => 379,  549 => 376,  545 => 375,  538 => 371,  465 => 301,  437 => 276,  427 => 269,  423 => 268,  419 => 267,  413 => 264,  404 => 258,  396 => 253,  391 => 251,  380 => 242,  378 => 238,  377 => 236,  374 => 235,  372 => 231,  371 => 229,  366 => 226,  364 => 222,  363 => 220,  360 => 219,  358 => 215,  357 => 213,  354 => 212,  352 => 208,  351 => 206,  348 => 205,  346 => 201,  345 => 199,  326 => 182,  306 => 175,  304 => 171,  303 => 169,  299 => 167,  297 => 163,  296 => 161,  293 => 160,  291 => 156,  290 => 154,  287 => 153,  285 => 149,  284 => 147,  280 => 146,  276 => 145,  273 => 144,  256 => 143,  250 => 142,  229 => 123,  227 => 121,  226 => 120,  221 => 117,  219 => 115,  218 => 114,  213 => 111,  211 => 109,  210 => 108,  205 => 105,  201 => 103,  199 => 100,  197 => 96,  190 => 92,  185 => 89,  179 => 86,  177 => 85,  175 => 84,  165 => 76,  163 => 73,  162 => 71,  157 => 69,  154 => 68,  148 => 66,  142 => 64,  140 => 63,  129 => 55,  125 => 54,  114 => 46,  107 => 41,  105 => 40,  104 => 38,  96 => 33,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}
<head>
\t<br>
\t<br>
\t{{ include('partials/title-meta.html.twig', {title: document.id ? 'Modifier un document' : 'Créer un document'}) }}
\t<link rel=\"stylesheet\" href=\"{{ asset('assets/libs/dropzone/dropzone.css') }}\" type=\"text/css\"/>
\t<link href=\"{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
\t<link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('assets/css/icons.min.css') }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('assets/css/app.min.css') }}\" rel=\"stylesheet\">
\t<style>
\t\t.ligne-row td {
\t\t\tvertical-align: middle !important;
\t\t}
\t\t.form-control-sm {
\t\t\theight: calc(1.5em + 0.5rem + 2px);
\t\t\tpadding: 0.25rem 0.5rem;
\t\t\tfont-size: 0.875rem;
\t\t\tline-height: 1.5;
\t\t\tborder-radius: 0.2rem;
\t\t}
\t\t.input-group-sm > .form-control {
\t\t\theight: calc(1.5em + 0.5rem + 2px);
\t\t\tpadding: 0.25rem 0.5rem;
\t\t\tfont-size: 0.875rem;
\t\t\tline-height: 1.5;
\t\t}
\t</style>
</head>

<body>
\t<div id=\"layout-wrapper\">
\t\t{{ include('partials/menu.html.twig') }}

\t\t<div class=\"main-content\">
\t\t\t<div class=\"page-content\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t{{ include('partials/page-title.html.twig', {
                        pagetitle: 'Documents',
                        title: document.id ? 'Modifier un document' : 'Créer un document'
                    }) }}

\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t<div class=\"col-xxl-9\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
\t\t\t\t\t\t\t\t<div class=\"card-body border-bottom border-bottom-dashed p-4\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"profile-user mx-auto mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"profile-img-file-input\" type=\"file\" class=\"profile-img-file-input\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"profile-img-file-input\" class=\"d-block\" tabindex=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"overflow-hidden border border-dashed d-flex align-items-center justify-content-center rounded\" style=\"height: 60px; width: 256px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/images/logo-dark.png') }}\" class=\"card-logo card-logo-dark user-profile-image img-fluid\" alt=\"logo dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/images/logo-light.png') }}\" class=\"card-logo card-logo-light user-profile-image img-fluid\" alt=\"logo light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 ms-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Référence</label>
\t\t\t\t\t\t\t\t\t\t\t\t{% if document.id %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control bg-light border-0\">{{ form.reference.vars.value }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"reference-preview\" class=\"form-control bg-light border-0\">{{ form.vars.reference ?? 'La référence sera générée automatiquement' }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.reference, {'attr': {'class': document.id ? 'd-none' : 'd-none'}}) }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.docDate, {
                                                    'attr': {
                                                        'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0')
                                                    }, 
                                                    'label': 'Date'
                                                }) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t{% if document.id %}
\t\t\t\t\t\t\t\t\t\t\t\t{#Champ caché pour soumettre la valeur #}
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.type, {'attr': {'class': 'd-none'}}) }}

\t\t\t\t\t\t\t\t\t\t\t\t{#Affichage en lecture seule #}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Type</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control bg-light border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form.type.vars.value }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.type, {
\t\t\t\t\t\t\t\t\t\t\t\t\t'attr': {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'class': 'form-control bg-light border-0',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'onchange': 'updateReferencePreview()',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'disabled': document.id ? 'disabled' : false
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t'label': 'Type'
\t\t\t\t\t\t\t\t\t\t\t\t}) }}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.status, {
                                                    'attr': {'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0')},
                                                    'label': 'Statut'
                                                }) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.emetteur, {
                                                    'attr': {'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0')},
                                                    'label': 'Émetteur'
                                                }) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.destinataire, {
                                                    'attr': {'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0')},
                                                    'label': 'Destinataire'
                                                }) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body p-4 border-top border-top-dashed\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Lignes du document</h5>
\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t<table class=\"invoice-table table table-borderless table-nowrap mb-0\">
\t\t\t\t\t\t\t\t\t\t\t<thead class=\"align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"table-active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col\">#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col\">Article</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col\">Prix unitaire</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col\">Quantité</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col\">Montant</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col text-end\">Remise</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"document-lignes\" data-prototype=\"{{ form_widget(form.lignes.vars.prototype)|e('html_attr') }}\" data-index=\"{{ form.lignes|length }}\">
\t\t\t\t\t\t\t\t\t\t\t\t{% for ligne in form.lignes %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"ligne-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ loop.index }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ form_widget(ligne.article, {'attr': {'class': 'form-control'}}) }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ form_widget(ligne.prixUnitaireHt, {
                                                                'attr': {
                                                                    'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                                    'onchange': 'updateLigneTotal(this)'
                                                                },
                                                                'label': false
                                                            }) }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ form_widget(ligne.qte, {
                                                                'attr': {
                                                                    'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                                    'onchange': 'updateLigneTotal(this)'
                                                                },
                                                                'label': false
                                                            }) }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ form_widget(ligne.prixTotalHt, {
                                                                'attr': {
                                                                    'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                                    'readonly': 'readonly'
                                                                },
                                                                'label': false
                                                            }) }}</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">{{ form_widget(ligne.remise, {
                                                                'attr': {
                                                                    'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                                    'readonly': 'readonly'
                                                                },
                                                                'label': false
                                                            }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger remove-ligne\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-delete-bin-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"add-ligne\" class=\"btn btn-soft-secondary fw-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-add-fill me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAjouter une ligne
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.montantHt, {
                                                    'attr': {
                                                        'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                        'readonly': 'readonly'
                                                    },
                                                    'label': 'Montant HT'
                                                }) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.tauxTva, {
                                                    'attr': {
                                                        'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                        'onchange': 'updateTotals()'
                                                    },
                                                    'label': 'Taux TVA'
                                                }) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.montantTva, {
                                                    'attr': {
                                                        'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                        'readonly': 'readonly'
                                                    },
                                                    'label': 'Montant TVA'
                                                }) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.montantAPayer, {
                                                    'attr': {
                                                        'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                        'readonly': 'readonly'
                                                    },
                                                    'label': 'Montant à payer'
                                                }) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.timbre, {
                                                    'attr': {
                                                        'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                        'onchange': 'updateTotals()'
                                                    },
                                                    'label': 'Timbre'
                                                }) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.retenu, {
                                                    'attr': {
                                                        'class': 'form-control' ~ (document.id ? '' : ' bg-light border-0'),
                                                        'onchange': 'updateTotals()'
                                                    },
                                                    'label': 'Retenue'
                                                }) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2 justify-content-end\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-save-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t{{ document.id ? 'Mettre à jour' : 'Enregistrer' }}
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_documents_index') }}\" class=\"btn btn-light\">
\t\t\t\t\t\t\t\t\t\t\tAnnuler
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{{ include('partials/footer.html.twig') }}
\t\t</div>
\t</div>
\t{{ include('partials/vendor-scripts.html.twig') }}
\t<script src=\"{{ asset('assets/libs/dropzone/dropzone-min.js') }}\"></script>
\t<script src=\"{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}\"></script>
\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () {
const ligneCollection = document.getElementById('document-lignes');
let index = parseInt(ligneCollection.dataset.index);
const form = document.querySelector('form');
function updateReferencePreview() {
const typeSelect = document.querySelector('#{{ form.type.vars.id }}');
const type = typeSelect.value;
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
const typeSelect = document.querySelector('#{{ form.type.vars.id }}');
typeSelect.addEventListener('change', updateReferencePreview);
if (typeSelect.value) {
updateReferencePreview();
}
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

if (! isValid) {
e.preventDefault();
alert('Veuillez corriger les lignes en rouge (quantité et prix doivent être > 0)');
}
});
});
\t</script>

</body></html>
", "documents/new&edit.html.twig", "C:\\Users\\Lenovo\\Desktop\\ERP_axia\\ERP_axia\\saas\\templates\\documents\\new&edit.html.twig");
    }
}
