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

/* documents/new&edit.html.twig */
class __TwigTemplate_5bc01d6f40407671c8f7b9024e8d2510 extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/new&edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/new&edit.html.twig"));

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

        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Modifier";
        } else {
            yield "Nouveau";
        }
        yield " Document";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container-fluid px-4\">
    <div class=\"row justify-content-center\">
        <main class=\"col-md-10 col-lg-8 px-md-4\">
            <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
                <h1 class=\"h2 mb-0\">";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Modifier le document";
        } else {
            yield "Créer un nouveau document";
        }
        yield "</h1>
                <div class=\"btn-toolbar mb-2 mb-md-0\">
                    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index");
        yield "\" class=\"btn btn-sm btn-outline-secondary\">
                        <i class=\"bi bi-arrow-left me-1\"></i> Retour à la liste
                    </a>
                </div>
            </div>

            <div class=\"card shadow-sm border-0 mb-4\">
                <div class=\"card-header bg-primary text-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"bi bi-file-earmark-text me-2\"></i>Informations du document</h5>
                </div>
                <div class=\"card-body p-4\">
                    ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "type", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-select", "id" => "floatingType"]]);
        // line 33
        yield "
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "type", [], "any", false, false, false, 34), 'label', ["label_attr" => ["for" => "floatingType"]]);
        // line 36
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "type", [], "any", false, false, false, 38), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "status", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-select", "id" => "floatingStatus"]]);
        // line 49
        yield "
                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "status", [], "any", false, false, false, 50), 'label', ["label_attr" => ["for" => "floatingStatus"]]);
        // line 52
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "status", [], "any", false, false, false, 54), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "docDate", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "id" => "floatingDocDate"]]);
        // line 68
        yield "
                                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "docDate", [], "any", false, false, false, 69), 'label', ["label_attr" => ["for" => "floatingDocDate"]]);
        // line 71
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "docDate", [], "any", false, false, false, 73), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "montantHt", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control", "id" => "floatingMontantHt", "placeholder" => "0.00"]]);
        // line 85
        yield "
                                ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "montantHt", [], "any", false, false, false, 86), 'label', ["label_attr" => ["for" => "floatingMontantHt"]]);
        // line 88
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "montantHt", [], "any", false, false, false, 90), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "emetteur", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-select", "id" => "floatingEmetteur"]]);
        // line 104
        yield "
                                ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "emetteur", [], "any", false, false, false, 105), 'label', ["label_attr" => ["for" => "floatingEmetteur"]]);
        // line 107
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "emetteur", [], "any", false, false, false, 109), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "destinataire", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "form-select", "id" => "floatingDestinataire"]]);
        // line 120
        yield "
                                ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "destinataire", [], "any", false, false, false, 121), 'label', ["label_attr" => ["for" => "floatingDestinataire"]]);
        // line 123
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "destinataire", [], "any", false, false, false, 125), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-4\">
                            <div class=\"form-floating\">
                                ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "tauxTva", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "form-control", "id" => "floatingTauxTva"]]);
        // line 139
        yield "
                                ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "tauxTva", [], "any", false, false, false, 140), 'label', ["label_attr" => ["for" => "floatingTauxTva"]]);
        // line 142
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "tauxTva", [], "any", false, false, false, 144), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-floating\">
                                ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "timbre", [], "any", false, false, false, 150), 'widget', ["attr" => ["class" => "form-control", "id" => "floatingTimbre", "placeholder" => "0.00"]]);
        // line 156
        yield "
                                ";
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "timbre", [], "any", false, false, false, 157), 'label', ["label_attr" => ["for" => "floatingTimbre"]]);
        // line 159
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "timbre", [], "any", false, false, false, 161), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-floating\">
                                ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "retenu", [], "any", false, false, false, 167), 'widget', ["attr" => ["class" => "form-control", "id" => "floatingRetenu", "placeholder" => "0.00"]]);
        // line 173
        yield "
                                ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "retenu", [], "any", false, false, false, 174), 'label', ["label_attr" => ["for" => "floatingRetenu"]]);
        // line 176
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "retenu", [], "any", false, false, false, 178), 'errors')), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-end gap-3 pt-3 border-top\">
                        <a href=\"";
        // line 185
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index");
        yield "\" class=\"btn btn-light\">
                            <i class=\"bi bi-x-circle me-2\"></i>Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"bi bi-save me-2\"></i>Enregistrer
                        </button>
                    </div>

                    ";
        // line 193
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </main>
    </div>
</div>

<style>
    .form-floating > label {
        color: #6c757d;
    }
    .form-select:focus, 
    .form-select:valid,
    .form-control:focus,
    .form-control:valid {
        border-color: #86b7fe;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }
    .card {
        border-radius: 0.5rem;
        max-width: 800px;
        margin: 0 auto;
    }
    .invalid-feedback {
        display: block;
        margin-top: 0.25rem;
        font-size: 0.875em;
        color: #dc3545;
    }
    .card-body {
        padding: 2rem;
    }
    @media (max-width: 768px) {
        .card-body {
            padding: 1.5rem;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('.needs-validation');
    
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            form.classList.add('was-validated');
        }, false);
    });

    const montantHtInput = document.getElementById('floatingMontantHt');
    const tauxTvaSelect = document.getElementById('floatingTauxTva');
    
    if (montantHtInput && tauxTvaSelect) {
        function calculateTva() {
            const montantHt = parseFloat(montantHtInput.value) || 0;
            const tauxTva = parseFloat(tauxTvaSelect.value) || 0;
            const montantTva = montantHt * (tauxTva / 100);
            console.log('Montant TVA:', montantTva);
        }
        
        montantHtInput.addEventListener('change', calculateTva);
        tauxTvaSelect.addEventListener('change', calculateTva);
    }
});
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
        return "documents/new&edit.html.twig";
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
        return array (  343 => 193,  332 => 185,  322 => 178,  318 => 176,  316 => 174,  313 => 173,  311 => 167,  302 => 161,  298 => 159,  296 => 157,  293 => 156,  291 => 150,  282 => 144,  278 => 142,  276 => 140,  273 => 139,  271 => 134,  259 => 125,  255 => 123,  253 => 121,  250 => 120,  248 => 115,  239 => 109,  235 => 107,  233 => 105,  230 => 104,  228 => 99,  216 => 90,  212 => 88,  210 => 86,  207 => 85,  205 => 79,  196 => 73,  192 => 71,  190 => 69,  187 => 68,  185 => 63,  173 => 54,  169 => 52,  167 => 50,  164 => 49,  162 => 44,  153 => 38,  149 => 36,  147 => 34,  144 => 33,  142 => 28,  134 => 23,  120 => 12,  111 => 10,  105 => 6,  92 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% if document.id %}Modifier{% else %}Nouveau{% endif %} Document{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <div class=\"row justify-content-center\">
        <main class=\"col-md-10 col-lg-8 px-md-4\">
            <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
                <h1 class=\"h2 mb-0\">{% if document.id %}Modifier le document{% else %}Créer un nouveau document{% endif %}</h1>
                <div class=\"btn-toolbar mb-2 mb-md-0\">
                    <a href=\"{{ path('app_documents_index') }}\" class=\"btn btn-sm btn-outline-secondary\">
                        <i class=\"bi bi-arrow-left me-1\"></i> Retour à la liste
                    </a>
                </div>
            </div>

            <div class=\"card shadow-sm border-0 mb-4\">
                <div class=\"card-header bg-primary text-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"bi bi-file-earmark-text me-2\"></i>Informations du document</h5>
                </div>
                <div class=\"card-body p-4\">
                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.type, {
                                    'attr': {
                                        'class': 'form-select',
                                        'id': 'floatingType'
                                    }
                                }) }}
                                {{ form_label(form.type, null, {
                                    'label_attr': {'for': 'floatingType'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.type)|striptags }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.status, {
                                    'attr': {
                                        'class': 'form-select',
                                        'id': 'floatingStatus'
                                    }
                                }) }}
                                {{ form_label(form.status, null, {
                                    'label_attr': {'for': 'floatingStatus'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.status)|striptags }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.docDate, {
                                    'attr': {
                                        'class': 'form-control',
                                        'id': 'floatingDocDate'
                                    }
                                }) }}
                                {{ form_label(form.docDate, null, {
                                    'label_attr': {'for': 'floatingDocDate'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.docDate)|striptags }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.montantHt, {
                                    'attr': {
                                        'class': 'form-control',
                                        'id': 'floatingMontantHt',
                                        'placeholder': '0.00'
                                    }
                                }) }}
                                {{ form_label(form.montantHt, null, {
                                    'label_attr': {'for': 'floatingMontantHt'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.montantHt)|striptags }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.emetteur, {
                                    'attr': {
                                        'class': 'form-select',
                                        'id': 'floatingEmetteur'
                                    }
                                }) }}
                                {{ form_label(form.emetteur, null, {
                                    'label_attr': {'for': 'floatingEmetteur'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.emetteur)|striptags }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.destinataire, {
                                    'attr': {
                                        'class': 'form-select',
                                        'id': 'floatingDestinataire'
                                    }
                                }) }}
                                {{ form_label(form.destinataire, null, {
                                    'label_attr': {'for': 'floatingDestinataire'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.destinataire)|striptags }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-4\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.tauxTva, {
                                    'attr': {
                                        'class': 'form-control',
                                        'id': 'floatingTauxTva'
                                    }
                                }) }}
                                {{ form_label(form.tauxTva, null, {
                                    'label_attr': {'for': 'floatingTauxTva'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.tauxTva)|striptags }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.timbre, {
                                    'attr': {
                                        'class': 'form-control',
                                        'id': 'floatingTimbre',
                                        'placeholder': '0.00'
                                    }
                                }) }}
                                {{ form_label(form.timbre, null, {
                                    'label_attr': {'for': 'floatingTimbre'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.timbre)|striptags }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.retenu, {
                                    'attr': {
                                        'class': 'form-control',
                                        'id': 'floatingRetenu',
                                        'placeholder': '0.00'
                                    }
                                }) }}
                                {{ form_label(form.retenu, null, {
                                    'label_attr': {'for': 'floatingRetenu'}
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.retenu)|striptags }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-end gap-3 pt-3 border-top\">
                        <a href=\"{{ path('app_documents_index') }}\" class=\"btn btn-light\">
                            <i class=\"bi bi-x-circle me-2\"></i>Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"bi bi-save me-2\"></i>Enregistrer
                        </button>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </main>
    </div>
</div>

<style>
    .form-floating > label {
        color: #6c757d;
    }
    .form-select:focus, 
    .form-select:valid,
    .form-control:focus,
    .form-control:valid {
        border-color: #86b7fe;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }
    .card {
        border-radius: 0.5rem;
        max-width: 800px;
        margin: 0 auto;
    }
    .invalid-feedback {
        display: block;
        margin-top: 0.25rem;
        font-size: 0.875em;
        color: #dc3545;
    }
    .card-body {
        padding: 2rem;
    }
    @media (max-width: 768px) {
        .card-body {
            padding: 1.5rem;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('.needs-validation');
    
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            form.classList.add('was-validated');
        }, false);
    });

    const montantHtInput = document.getElementById('floatingMontantHt');
    const tauxTvaSelect = document.getElementById('floatingTauxTva');
    
    if (montantHtInput && tauxTvaSelect) {
        function calculateTva() {
            const montantHt = parseFloat(montantHtInput.value) || 0;
            const tauxTva = parseFloat(tauxTvaSelect.value) || 0;
            const montantTva = montantHt * (tauxTva / 100);
            console.log('Montant TVA:', montantTva);
        }
        
        montantHtInput.addEventListener('change', calculateTva);
        tauxTvaSelect.addEventListener('change', calculateTva);
    }
});
</script>
{% endblock %}", "documents/new&edit.html.twig", "C:\\Users\\Lenovo\\Downloads\\ERP_axia\\ProjetWeb - Copie (2)\\geex\\templates\\documents\\new&edit.html.twig");
    }
}
