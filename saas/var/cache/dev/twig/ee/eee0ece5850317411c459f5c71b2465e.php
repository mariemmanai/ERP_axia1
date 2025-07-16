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

/* depots/index.html.twig */
class __TwigTemplate_9bae7caa8423931be97a6a2b7cdcc4c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depots/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depots/index.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "
<head>
    ";
        // line 3
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Documents List"]);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.css"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body>
    <div id=\"layout-wrapper\">
        ";
        // line 11
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "
        <div class=\"main-content\">
            <div class=\"page-content\">
            <br>
                <div class=\"container-fluid\">
                    ";
        // line 16
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Gestion des Dépôts", "title" => "Liste des Dépôts"]);
        // line 19
        echo "

                    <div class=\"row mb-4\">
                        <div class=\"col-sm-6\">
                            <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depots_new");
        echo "\" class=\"btn btn-primary\">
                                <i class=\"ri-add-line align-bottom me-1\"></i> Nouveau dépôt
                            </a>
                        </div>
                    </div>

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table align-middle table-nowrap mb-0\">
                                    <thead class=\"table-light\">
                                        <tr>
                                            <th scope=\"col\">Intitulé</th>
                                            <th scope=\"col\">Créé le</th>
                                            <th scope=\"col\">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["depots"]) || array_key_exists("depots", $context) ? $context["depots"] : (function () { throw new RuntimeError('Variable "depots" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["depot"]) {
            // line 42
            echo "                                            <tr>
                                                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["depot"], "intitule", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                                <td>";
            // line 44
            ((twig_get_attribute($this->env, $this->source, $context["depot"], "createAt", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["depot"], "createAt", [], "any", false, false, false, 44), "d/m/Y H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                                                <td>
                                                    <div class=\"hstack gap-2\">
                                                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depots_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["depot"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-soft-warning\" title=\"Modifier\">
                                                            <i class=\"ri-edit-line\"></i>
                                                        </a>
                                                        <form method=\"post\" action=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depots_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["depot"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" onsubmit=\"return confirmDelete();\" style=\"display: inline;\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["depot"], "id", [], "any", false, false, false, 51))), "html", null, true);
            echo "\">
                                                            <button type=\"submit\" class=\"btn btn-sm btn-soft-danger\" title=\"Supprimer\">
                                                                <i class=\"ri-delete-bin-line\"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "                                            <tr>
                                                <td colspan=\"3\" class=\"text-center\">Aucun dépôt trouvé.</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['depot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 74
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    ";
        // line 80
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "
    ";
        // line 81
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <script>
        function confirmDelete() {
            return confirm('Êtes-vous sûr de vouloir supprimer ce dépôt ? Cette action est irréversible.');
        }
    </script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "depots/index.html.twig";
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
        return array (  184 => 81,  180 => 80,  171 => 74,  159 => 64,  150 => 60,  136 => 51,  132 => 50,  126 => 47,  120 => 44,  116 => 43,  113 => 42,  108 => 41,  87 => 23,  81 => 19,  79 => 16,  71 => 11,  64 => 7,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}
<head>
    {{ include('partials/title-meta.html.twig', {title: 'Documents List'}) }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}\" />
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/icons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/app.min.css') }}\" rel=\"stylesheet\">
</head>
<body>
    <div id=\"layout-wrapper\">
        {{ include('partials/menu.html.twig') }}
        <div class=\"main-content\">
            <div class=\"page-content\">
            <br>
                <div class=\"container-fluid\">
                    {{ include('partials/page-title.html.twig', {
                        pagetitle: 'Gestion des Dépôts',
                        title: 'Liste des Dépôts'
                    }) }}

                    <div class=\"row mb-4\">
                        <div class=\"col-sm-6\">
                            <a href=\"{{ path('app_depots_new') }}\" class=\"btn btn-primary\">
                                <i class=\"ri-add-line align-bottom me-1\"></i> Nouveau dépôt
                            </a>
                        </div>
                    </div>

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table align-middle table-nowrap mb-0\">
                                    <thead class=\"table-light\">
                                        <tr>
                                            <th scope=\"col\">Intitulé</th>
                                            <th scope=\"col\">Créé le</th>
                                            <th scope=\"col\">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for depot in depots %}
                                            <tr>
                                                <td>{{ depot.intitule }}</td>
                                                <td>{{ depot.createAt ? depot.createAt|date('d/m/Y H:i') : '' }}</td>
                                                <td>
                                                    <div class=\"hstack gap-2\">
                                                        <a href=\"{{ path('app_depots_edit', {'id': depot.id}) }}\" class=\"btn btn-sm btn-soft-warning\" title=\"Modifier\">
                                                            <i class=\"ri-edit-line\"></i>
                                                        </a>
                                                        <form method=\"post\" action=\"{{ path('app_depots_delete', {'id': depot.id}) }}\" onsubmit=\"return confirmDelete();\" style=\"display: inline;\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ depot.id) }}\">
                                                            <button type=\"submit\" class=\"btn btn-sm btn-soft-danger\" title=\"Supprimer\">
                                                                <i class=\"ri-delete-bin-line\"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        {% else %}
                                            <tr>
                                                <td colspan=\"3\" class=\"text-center\">Aucun dépôt trouvé.</td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            {{ include('partials/footer.html.twig') }}
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    {{ include('partials/customizer.html.twig') }}
    {{ include('partials/vendor-scripts.html.twig') }}

    <script>
        function confirmDelete() {
            return confirm('Êtes-vous sûr de vouloir supprimer ce dépôt ? Cette action est irréversible.');
        }
    </script>
</body>
</html>
", "depots/index.html.twig", "C:\\Users\\Lenovo\\Desktop\\ERP_axia\\ERP_axia\\saas\\templates\\depots\\index.html.twig");
    }
}
