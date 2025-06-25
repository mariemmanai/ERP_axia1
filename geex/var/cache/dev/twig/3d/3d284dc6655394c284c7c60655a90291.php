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

/* documents/show.html.twig */
class __TwigTemplate_d977494effcf4067c82c40c823c2f1b7 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Document ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 3, $this->source); })()), "reference", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .document-details {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid #eaeaea;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .document-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .document-header h1 {
            color: #2c3e50;
            font-weight: 600;
            margin: 0;
            font-size: 1.5rem;
        }
        
        .document-info {
            margin-bottom: 2rem;
        }
        
        .document-info h2 {
            color: #3b82f6;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #eaeaea;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }
        
        .info-item {
            margin-bottom: 1rem;
        }
        
        .info-label {
            font-weight: 500;
            color: #64748b;
            margin-bottom: 0.25rem;
            font-size: 0.9rem;
        }
        
        .info-value {
            font-weight: 500;
            color: #2c3e50;
            font-size: 1rem;
        }
        
        .amount-section {
            background: #f8fafc;
            padding: 1.5rem;
            border-radius: 8px;
            margin-top: 2rem;
        }
        
        .amount-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
        }
        
        .amount-item {
            text-align: center;
        }
        
        .amount-label {
            font-weight: 500;
            color: #64748b;
            margin-bottom: 0.5rem;
        }
        
        .amount-value {
            font-weight: 600;
            font-size: 1.1rem;
            color: #2c3e50;
        }
        
        .document-actions {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid #f0f0f0;
        }
        
        .badge {
            display: inline-block;
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 600;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
        }
        
        .badge-success {
            background-color: #10b981;
            color: white;
        }
        
        .badge-warning {
            background-color: #f59e0b;
            color: white;
        }
        
        .badge-danger {
            background-color: #ef4444;
            color: white;
        }
        
        .document-reference {
            font-size: 1.25rem;
            font-weight: 600;
            color: #3b82f6;
            margin-bottom: 0.5rem;
        }
        
        .document-type {
            font-size: 1rem;
            font-weight: 500;
            color: #64748b;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 151
        yield "    <div class=\"document-details\">
        <div class=\"document-header\">
            <div>
                <div class=\"document-reference\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 154, $this->source); })()), "reference", [], "any", false, false, false, 154), "html", null, true);
        yield "</div>
                <div class=\"document-type\">";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 155, $this->source); })()), "type", [], "any", false, false, false, 155), "html", null, true);
        yield "</div>
            </div>
            <div>
                ";
        // line 158
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 158, $this->source); })()), "status", [], "any", false, false, false, 158) == "Confirmer")) {
            // line 159
            yield "                    <span class=\"badge badge-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 159, $this->source); })()), "status", [], "any", false, false, false, 159), "html", null, true);
            yield "</span>
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 160
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 160, $this->source); })()), "status", [], "any", false, false, false, 160) == "Ouvert")) {
            // line 161
            yield "                    <span class=\"badge badge-warning\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 161, $this->source); })()), "status", [], "any", false, false, false, 161), "html", null, true);
            yield "</span>
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 162
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 162, $this->source); })()), "status", [], "any", false, false, false, 162) == "Cloturée")) {
            // line 163
            yield "                    <span class=\"badge badge-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 163, $this->source); })()), "status", [], "any", false, false, false, 163), "html", null, true);
            yield "</span>
                ";
        } else {
            // line 165
            yield "                    <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 165, $this->source); })()), "status", [], "any", false, false, false, 165), "html", null, true);
            yield "</span>
                ";
        }
        // line 167
        yield "            </div>
        </div>

        <div class=\"document-info\">
            <h2>Informations générales</h2>
            <div class=\"info-grid\">
                <div class=\"info-item\">
                    <div class=\"info-label\">Date du document</div>
                    <div class=\"info-value\">";
        // line 175
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 175, $this->source); })()), "docDate", [], "any", false, false, false, 175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 175, $this->source); })()), "docDate", [], "any", false, false, false, 175), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</div>
                </div>
                
                <div class=\"info-item\">
                    <div class=\"info-label\">Créé le</div>
                    <div class=\"info-value\">";
        // line 180
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 180, $this->source); })()), "createAt", [], "any", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 180, $this->source); })()), "createAt", [], "any", false, false, false, 180), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "</div>
                </div>
                
                <div class=\"info-item\">
                    <div class=\"info-label\">Émetteur</div>
                    <div class=\"info-value\">
                        ";
        // line 186
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 186, $this->source); })()), "emetteur", [], "any", false, false, false, 186)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 187
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 187, $this->source); })()), "emetteur", [], "any", false, false, false, 187), "firstName", [], "any", false, false, false, 187), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 187, $this->source); })()), "emetteur", [], "any", false, false, false, 187), "lastName", [], "any", false, false, false, 187), "html", null, true);
            yield "
                            <div class=\"text-muted small\">";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 188, $this->source); })()), "emetteur", [], "any", false, false, false, 188), "username", [], "any", false, false, false, 188), "html", null, true);
            yield "</div>
                        ";
        } else {
            // line 190
            yield "                            -
                        ";
        }
        // line 192
        yield "                    </div>
                </div>
                
                <div class=\"info-item\">
                    <div class=\"info-label\">Destinataire</div>
                    <div class=\"info-value\">
                        ";
        // line 198
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 198, $this->source); })()), "destinataire", [], "any", false, false, false, 198)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 199
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 199, $this->source); })()), "destinataire", [], "any", false, false, false, 199), "firstName", [], "any", false, false, false, 199), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 199, $this->source); })()), "destinataire", [], "any", false, false, false, 199), "lastName", [], "any", false, false, false, 199), "html", null, true);
            yield "
                            <div class=\"text-muted small\">";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 200, $this->source); })()), "destinataire", [], "any", false, false, false, 200), "username", [], "any", false, false, false, 200), "html", null, true);
            yield "</div>
                        ";
        } else {
            // line 202
            yield "                            -
                        ";
        }
        // line 204
        yield "                    </div>
                </div>
                
                <div class=\"info-item\">
                    <div class=\"info-label\">Créé par</div>
                    <div class=\"info-value\">
                        ";
        // line 210
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 210, $this->source); })()), "createBy", [], "any", false, false, false, 210)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 211
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 211, $this->source); })()), "createBy", [], "any", false, false, false, 211), "firstName", [], "any", false, false, false, 211), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 211, $this->source); })()), "createBy", [], "any", false, false, false, 211), "lastName", [], "any", false, false, false, 211), "html", null, true);
            yield "
                            <div class=\"text-muted small\">";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 212, $this->source); })()), "createBy", [], "any", false, false, false, 212), "username", [], "any", false, false, false, 212), "html", null, true);
            yield "</div>
                        ";
        } else {
            // line 214
            yield "                            -
                        ";
        }
        // line 216
        yield "                    </div>
                </div>
            </div>
        </div>

        <div class=\"amount-section\">
            <h2>Montants</h2>
            <div class=\"amount-grid\">
                <div class=\"amount-item\">
                    <div class=\"amount-label\">Montant HT</div>
                    <div class=\"amount-value\">";
        // line 226
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 226, $this->source); })()), "montantHt", [], "any", false, false, false, 226))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 226, $this->source); })()), "montantHt", [], "any", false, false, false, 226), 2, ",", " ") . " €"), "html", null, true)) : ("-"));
        yield "</div>
                </div>
                
                <div class=\"amount-item\">
                    <div class=\"amount-label\">Taux TVA</div>
                    <div class=\"amount-value\">";
        // line 231
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 231, $this->source); })()), "tauxTva", [], "any", false, false, false, 231))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 231, $this->source); })()), "tauxTva", [], "any", false, false, false, 231) . "%"), "html", null, true)) : ("-"));
        yield "</div>
                </div>
                
                <div class=\"amount-item\">
                    <div class=\"amount-label\">Montant TVA</div>
                    <div class=\"amount-value\">";
        // line 236
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 236, $this->source); })()), "montantTva", [], "any", false, false, false, 236))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 236, $this->source); })()), "montantTva", [], "any", false, false, false, 236), 2, ",", " ") . " €"), "html", null, true)) : ("-"));
        yield "</div>
                </div>
                
                <div class=\"amount-item\">
                    <div class=\"amount-label\">Timbre</div>
                    <div class=\"amount-value\">";
        // line 241
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 241, $this->source); })()), "timbre", [], "any", false, false, false, 241))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 241, $this->source); })()), "timbre", [], "any", false, false, false, 241), 2, ",", " ") . " €"), "html", null, true)) : ("-"));
        yield "</div>
                </div>
                
                <div class=\"amount-item\">
                    <div class=\"amount-label\">Retenu</div>
                    <div class=\"amount-value\">";
        // line 246
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 246, $this->source); })()), "retenu", [], "any", false, false, false, 246))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 246, $this->source); })()), "retenu", [], "any", false, false, false, 246), 2, ",", " ") . " €"), "html", null, true)) : ("-"));
        yield "</div>
                </div>
                
                <div class=\"amount-item\">
                    <div class=\"amount-label\">Total TTC</div>
                    <div class=\"amount-value\">
                        ";
        // line 252
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 252, $this->source); })()), "montantHt", [], "any", false, false, false, 252)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 252, $this->source); })()), "montantTva", [], "any", false, false, false, 252)))) {
            // line 253
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 253, $this->source); })()), "montantHt", [], "any", false, false, false, 253) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 253, $this->source); })()), "montantTva", [], "any", false, false, false, 253)), 2, ",", " "), "html", null, true);
            yield " €
                        ";
        } else {
            // line 255
            yield "                            -
                        ";
        }
        // line 257
        yield "                    </div>
                </div>
            </div>
        </div>

        <div class=\"document-actions\">
            <a href=\"";
        // line 263
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-arrow-left me-1\"></i> Retour à la liste
            </a>
            <a href=\"";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 266, $this->source); })()), "id", [], "any", false, false, false, 266)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                <i class=\"bi bi-pencil me-1\"></i> Modifier
            </a>
            <form method=\"post\" action=\"";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 269, $this->source); })()), "id", [], "any", false, false, false, 269)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce document ?');\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 270, $this->source); })()), "id", [], "any", false, false, false, 270))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-danger\">
                    <i class=\"bi bi-trash me-1\"></i> Supprimer
                </button>
            </form>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 279
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 280
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        // Scripts supplémentaires si nécessaire
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "documents/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  532 => 280,  519 => 279,  500 => 270,  496 => 269,  490 => 266,  484 => 263,  476 => 257,  472 => 255,  466 => 253,  464 => 252,  455 => 246,  447 => 241,  439 => 236,  431 => 231,  423 => 226,  411 => 216,  407 => 214,  402 => 212,  395 => 211,  393 => 210,  385 => 204,  381 => 202,  376 => 200,  369 => 199,  367 => 198,  359 => 192,  355 => 190,  350 => 188,  343 => 187,  341 => 186,  332 => 180,  324 => 175,  314 => 167,  308 => 165,  302 => 163,  300 => 162,  295 => 161,  293 => 160,  288 => 159,  286 => 158,  280 => 155,  276 => 154,  271 => 151,  258 => 150,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Document {{ document.reference }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .document-details {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid #eaeaea;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .document-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .document-header h1 {
            color: #2c3e50;
            font-weight: 600;
            margin: 0;
            font-size: 1.5rem;
        }
        
        .document-info {
            margin-bottom: 2rem;
        }
        
        .document-info h2 {
            color: #3b82f6;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #eaeaea;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }
        
        .info-item {
            margin-bottom: 1rem;
        }
        
        .info-label {
            font-weight: 500;
            color: #64748b;
            margin-bottom: 0.25rem;
            font-size: 0.9rem;
        }
        
        .info-value {
            font-weight: 500;
            color: #2c3e50;
            font-size: 1rem;
        }
        
        .amount-section {
            background: #f8fafc;
            padding: 1.5rem;
            border-radius: 8px;
            margin-top: 2rem;
        }
        
        .amount-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
        }
        
        .amount-item {
            text-align: center;
        }
        
        .amount-label {
            font-weight: 500;
            color: #64748b;
            margin-bottom: 0.5rem;
        }
        
        .amount-value {
            font-weight: 600;
            font-size: 1.1rem;
            color: #2c3e50;
        }
        
        .document-actions {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid #f0f0f0;
        }
        
        .badge {
            display: inline-block;
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 600;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
        }
        
        .badge-success {
            background-color: #10b981;
            color: white;
        }
        
        .badge-warning {
            background-color: #f59e0b;
            color: white;
        }
        
        .badge-danger {
            background-color: #ef4444;
            color: white;
        }
        
        .document-reference {
            font-size: 1.25rem;
            font-weight: 600;
            color: #3b82f6;
            margin-bottom: 0.5rem;
        }
        
        .document-type {
            font-size: 1rem;
            font-weight: 500;
            color: #64748b;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"document-details\">
        <div class=\"document-header\">
            <div>
                <div class=\"document-reference\">{{ document.reference }}</div>
                <div class=\"document-type\">{{ document.type }}</div>
            </div>
            <div>
                {% if document.status == 'Confirmer' %}
                    <span class=\"badge badge-success\">{{ document.status }}</span>
                {% elseif document.status == 'Ouvert' %}
                    <span class=\"badge badge-warning\">{{ document.status }}</span>
                {% elseif document.status == 'Cloturée' %}
                    <span class=\"badge badge-danger\">{{ document.status }}</span>
                {% else %}
                    <span class=\"badge\">{{ document.status }}</span>
                {% endif %}
            </div>
        </div>

        <div class=\"document-info\">
            <h2>Informations générales</h2>
            <div class=\"info-grid\">
                <div class=\"info-item\">
                    <div class=\"info-label\">Date du document</div>
                    <div class=\"info-value\">{{ document.docDate ? document.docDate|date('d/m/Y') : '-' }}</div>
                </div>
                
                <div class=\"info-item\">
                    <div class=\"info-label\">Créé le</div>
                    <div class=\"info-value\">{{ document.createAt ? document.createAt|date('d/m/Y H:i') : '-' }}</div>
                </div>
                
                <div class=\"info-item\">
                    <div class=\"info-label\">Émetteur</div>
                    <div class=\"info-value\">
                        {% if document.emetteur %}
                            {{ document.emetteur.firstName }} {{ document.emetteur.lastName }}
                            <div class=\"text-muted small\">{{ document.emetteur.username }}</div>
                        {% else %}
                            -
                        {% endif %}
                    </div>
                </div>
                
                <div class=\"info-item\">
                    <div class=\"info-label\">Destinataire</div>
                    <div class=\"info-value\">
                        {% if document.destinataire %}
                            {{ document.destinataire.firstName }} {{ document.destinataire.lastName }}
                            <div class=\"text-muted small\">{{ document.destinataire.username }}</div>
                        {% else %}
                            -
                        {% endif %}
                    </div>
                </div>
                
                <div class=\"info-item\">
                    <div class=\"info-label\">Créé par</div>
                    <div class=\"info-value\">
                        {% if document.createBy %}
                            {{ document.createBy.firstName }} {{ document.createBy.lastName }}
                            <div class=\"text-muted small\">{{ document.createBy.username }}</div>
                        {% else %}
                            -
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"amount-section\">
            <h2>Montants</h2>
            <div class=\"amount-grid\">
                <div class=\"amount-item\">
                    <div class=\"amount-label\">Montant HT</div>
                    <div class=\"amount-value\">{{ document.montantHt is not null ? document.montantHt|number_format(2, ',', ' ') ~ ' €' : '-' }}</div>
                </div>
                
                <div class=\"amount-item\">
                    <div class=\"amount-label\">Taux TVA</div>
                    <div class=\"amount-value\">{{ document.tauxTva is not null ? document.tauxTva ~ '%' : '-' }}</div>
                </div>
                
                <div class=\"amount-item\">
                    <div class=\"amount-label\">Montant TVA</div>
                    <div class=\"amount-value\">{{ document.montantTva is not null ? document.montantTva|number_format(2, ',', ' ') ~ ' €' : '-' }}</div>
                </div>
                
                <div class=\"amount-item\">
                    <div class=\"amount-label\">Timbre</div>
                    <div class=\"amount-value\">{{ document.timbre is not null ? document.timbre|number_format(2, ',', ' ') ~ ' €' : '-' }}</div>
                </div>
                
                <div class=\"amount-item\">
                    <div class=\"amount-label\">Retenu</div>
                    <div class=\"amount-value\">{{ document.retenu is not null ? document.retenu|number_format(2, ',', ' ') ~ ' €' : '-' }}</div>
                </div>
                
                <div class=\"amount-item\">
                    <div class=\"amount-label\">Total TTC</div>
                    <div class=\"amount-value\">
                        {% if document.montantHt is not null and document.montantTva is not null %}
                            {{ (document.montantHt + document.montantTva)|number_format(2, ',', ' ') }} €
                        {% else %}
                            -
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"document-actions\">
            <a href=\"{{ path('app_documents_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-arrow-left me-1\"></i> Retour à la liste
            </a>
            <a href=\"{{ path('app_documents_edit', {'id': document.id}) }}\" class=\"btn btn-primary\">
                <i class=\"bi bi-pencil me-1\"></i> Modifier
            </a>
            <form method=\"post\" action=\"{{ path('app_documents_delete', {'id': document.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce document ?');\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ document.id) }}\">
                <button type=\"submit\" class=\"btn btn-danger\">
                    <i class=\"bi bi-trash me-1\"></i> Supprimer
                </button>
            </form>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        // Scripts supplémentaires si nécessaire
    </script>
{% endblock %}", "documents/show.html.twig", "C:\\Users\\Lenovo\\Downloads\\ERP_axia\\ProjetWeb - Copie (2)\\geex\\templates\\documents\\show.html.twig");
    }
}
