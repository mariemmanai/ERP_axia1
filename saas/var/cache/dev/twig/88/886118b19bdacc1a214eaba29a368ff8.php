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

/* documents/index.html.twig */
class __TwigTemplate_64eb4b2f278e5a99cdbea41eedbbf1ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/index.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>
    ";
        // line 4
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Documents List"]);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.css"), "html", null, true);
        echo "\" />
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
        echo "\" rel=\"stylesheet\"></head>

<body>
    <div id=\"layout-wrapper\">
        ";
        // line 12
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "
        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid\">
                    ";
        // line 16
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Documents", "title" => "List"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col-sm-4\">
                                            <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_new");
        echo "\" class=\"btn btn-success mb-2\">
                                                <i class=\"ri-add-line align-bottom me-1\"></i> Create Document
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"table-responsive\">
                                        <table class=\"table table-centered table-nowrap mb-0\">
                                            <thead class=\"table-light\">
                                                <tr>
                                                    <th>Reference</th>
                                                    <th>Date</th>
                                                    <th>Type</th>
                                                    <th>Sender</th>
                                                    <th>Recipient</th>
                                                    <th>Total HT</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 46
            echo "                                                <tr>
                                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "reference", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "docDate", [], "any", false, false, false, 48), "d/m/Y"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "type", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["document"], "emetteur", [], "any", false, false, false, 50), "username", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["document"], "destinataire", [], "any", false, false, false, 51), "username", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "montantHt", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                                    <td>
                                                        <span class=\"badge bg-";
            // line 54
            echo (((twig_get_attribute($this->env, $this->source, $context["document"], "status", [], "any", false, false, false, 54) == "Paid")) ? ("success") : ("warning"));
            echo "\">
                                                            ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "status", [], "any", false, false, false, 55), "html", null, true);
            echo "
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_show", ["id" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-light\">
                                                            <i class=\"ri-eye-line\"></i>
                                                        </a>
                                                        <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                                                            <i class=\"ri-pencil-line\"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "                                                <tr>
                                                    <td colspan=\"8\" class=\"text-center\">No documents found</td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 81
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
    </div>

    ";
        // line 85
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.js"), "html", null, true);
        echo "\"></script>
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
        return "documents/index.html.twig";
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
        return array (  206 => 86,  202 => 85,  195 => 81,  184 => 72,  175 => 68,  164 => 62,  158 => 59,  151 => 55,  147 => 54,  142 => 52,  138 => 51,  134 => 50,  130 => 49,  126 => 48,  122 => 47,  119 => 46,  114 => 45,  90 => 24,  79 => 16,  72 => 12,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>
    {{ include('partials/title-meta.html.twig', {title: 'Documents List'}) }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}\" />
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/icons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/app.min.css') }}\" rel=\"stylesheet\"></head>

<body>
    <div id=\"layout-wrapper\">
        {{ include('partials/menu.html.twig') }}
        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid\">
                    {{ include('partials/page-title.html.twig', {pagetitle: 'Documents', title: 'List'}) }}

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col-sm-4\">
                                            <a href=\"{{ path('app_documents_new') }}\" class=\"btn btn-success mb-2\">
                                                <i class=\"ri-add-line align-bottom me-1\"></i> Create Document
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"table-responsive\">
                                        <table class=\"table table-centered table-nowrap mb-0\">
                                            <thead class=\"table-light\">
                                                <tr>
                                                    <th>Reference</th>
                                                    <th>Date</th>
                                                    <th>Type</th>
                                                    <th>Sender</th>
                                                    <th>Recipient</th>
                                                    <th>Total HT</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for document in documents %}
                                                <tr>
                                                    <td>{{ document.reference }}</td>
                                                    <td>{{ document.docDate|date('d/m/Y') }}</td>
                                                    <td>{{ document.type }}</td>
                                                    <td>{{ document.emetteur.username }}</td>
                                                    <td>{{ document.destinataire.username }}</td>
                                                    <td>{{ document.montantHt }}</td>
                                                    <td>
                                                        <span class=\"badge bg-{{ document.status == 'Paid' ? 'success' : 'warning' }}\">
                                                            {{ document.status }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href=\"{{ path('app_documents_show', {'id': document.id}) }}\" class=\"btn btn-sm btn-light\">
                                                            <i class=\"ri-eye-line\"></i>
                                                        </a>
                                                        <a href=\"{{ path('app_documents_edit', {'id': document.id}) }}\" class=\"btn btn-sm btn-primary\">
                                                            <i class=\"ri-pencil-line\"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                {% else %}
                                                <tr>
                                                    <td colspan=\"8\" class=\"text-center\">No documents found</td>
                                                </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
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
    <script src=\"{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}\"></script>
    <script src=\"../../assets/js/app.js\"></script>
</body>
</html>", "documents/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\velzon-symfony_v4.3.0\\Symfony\\saas\\templates\\documents\\index.html.twig");
    }
}
