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

/* functions/index.html.twig */
class __TwigTemplate_5297b30e094a11f3ae3209d43e60d5df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "functions/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "functions/index.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>
    ";
        // line 4
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Functions List"]);
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
        echo "\" rel=\"stylesheet\">
</head>

<body>
    <div id=\"layout-wrapper\">
        ";
        // line 13
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "
        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid\">
                    ";
        // line 17
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Functions", "title" => "List"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col-sm-4\">
                                            <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_functions_new");
        echo "\" class=\"btn btn-success mb-2\">
                                                <i class=\"ri-add-line align-bottom me-1\"></i> Create Function
                                            </a>
                                        </div>
                                        <div class=\"col-sm-8\">
                                            <div class=\"text-sm-end\">
                                                <!-- You can add search or other filters here if needed -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"table-responsive\">
                                        <table class=\"table table-centered table-nowrap mb-0\">
                                            <thead class=\"table-light\">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Title</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new RuntimeError('Variable "functions" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["function"]) {
            // line 47
            echo "                                                <tr>
                                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["function"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["function"], "intitule", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                                    <td>
                                                        <div class=\"d-flex gap-3\">
                                                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_functions_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["function"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                                                                <i class=\"ri-pencil-line\"></i>
                                                            </a>
                                                            <form method=\"post\" action=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_functions_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["function"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this function?');\">
                                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["function"], "id", [], "any", false, false, false, 56))), "html", null, true);
            echo "\">
                                                                <button class=\"btn btn-sm btn-danger\">
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
            // line 65
            echo "                                                <tr>
                                                    <td colspan=\"3\" class=\"text-center\">No functions found</td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['function'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
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
        // line 78
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
    </div>

    ";
        // line 82
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.btn-danger');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const form = this.closest('form');
                    Swal.fire({
                        title: 'Are you sure?',
                        text: \"You won't be able to revert this!\",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
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
        return "functions/index.html.twig";
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
        return array (  188 => 83,  184 => 82,  177 => 78,  166 => 69,  157 => 65,  143 => 56,  139 => 55,  133 => 52,  127 => 49,  123 => 48,  120 => 47,  115 => 46,  91 => 25,  80 => 17,  73 => 13,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>
    {{ include('partials/title-meta.html.twig', {title: 'Functions List'}) }}
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
                <div class=\"container-fluid\">
                    {{ include('partials/page-title.html.twig', {pagetitle: 'Functions', title: 'List'}) }}

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col-sm-4\">
                                            <a href=\"{{ path('app_functions_new') }}\" class=\"btn btn-success mb-2\">
                                                <i class=\"ri-add-line align-bottom me-1\"></i> Create Function
                                            </a>
                                        </div>
                                        <div class=\"col-sm-8\">
                                            <div class=\"text-sm-end\">
                                                <!-- You can add search or other filters here if needed -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"table-responsive\">
                                        <table class=\"table table-centered table-nowrap mb-0\">
                                            <thead class=\"table-light\">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Title</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for function in functions %}
                                                <tr>
                                                    <td>{{ function.id }}</td>
                                                    <td>{{ function.intitule }}</td>
                                                    <td>
                                                        <div class=\"d-flex gap-3\">
                                                            <a href=\"{{ path('app_functions_edit', {'id': function.id}) }}\" class=\"btn btn-sm btn-primary\">
                                                                <i class=\"ri-pencil-line\"></i>
                                                            </a>
                                                            <form method=\"post\" action=\"{{ path('app_functions_delete', {'id': function.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this function?');\">
                                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ function.id) }}\">
                                                                <button class=\"btn btn-sm btn-danger\">
                                                                    <i class=\"ri-delete-bin-line\"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                {% else %}
                                                <tr>
                                                    <td colspan=\"3\" class=\"text-center\">No functions found</td>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.btn-danger');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const form = this.closest('form');
                    Swal.fire({
                        title: 'Are you sure?',
                        text: \"You won't be able to revert this!\",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>", "functions/index.html.twig", "C:\\Users\\Lenovo\\Desktop\\ERP_axia\\ERP_axia\\saas\\templates\\functions\\index.html.twig");
    }
}
