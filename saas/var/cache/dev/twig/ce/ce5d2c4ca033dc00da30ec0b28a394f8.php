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

/* stock/index.html.twig */
class __TwigTemplate_1c16752e591ef860816e6e2fef2b6667 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/index.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>
    ";
        // line 4
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Stock List"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Stock Management", "title" => "Inventory List"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row mb-2\">
        
                                        <div class=\"col-sm-8\">
                                            <div class=\"text-sm-end\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"table-responsive\">
                                        <table class=\"table table-centered table-nowrap mb-0\">
                                            <thead class=\"table-light\">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Article</th>
                                                    <th>Depot</th>
                                                    <th>Entry Date</th>
                                                    <th>Main Stock</th>
                                                    <th>Available Stock</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stocks"]) || array_key_exists("stocks", $context) ? $context["stocks"] : (function () { throw new RuntimeError('Variable "stocks" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 46
            echo "                                                <tr>
                                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stock"], "article", [], "any", false, false, false, 48), "reference", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stock"], "depot", [], "any", false, false, false, 49), "intitule", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "dateEntree", [], "any", false, false, false, 50), "d/m/Y"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "qteStockPrincipal", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "qteStockDispo", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                                    <td>
                                                        <div class=\"d-flex gap-3\">
                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "                                                <tr>
                                                    <td colspan=\"7\" class=\"text-center\">No stock entries found</td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
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
        // line 73
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
    </div>

    ";
        // line 77
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "
    <script src=\"";
        // line 78
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
        return "stock/index.html.twig";
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
        return array (  183 => 78,  179 => 77,  172 => 73,  161 => 64,  152 => 60,  139 => 52,  135 => 51,  131 => 50,  127 => 49,  123 => 48,  119 => 47,  116 => 46,  111 => 45,  80 => 17,  73 => 13,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>
    {{ include('partials/title-meta.html.twig', {title: 'Stock List'}) }}
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
                    {{ include('partials/page-title.html.twig', {pagetitle: 'Stock Management', title: 'Inventory List'}) }}

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row mb-2\">
        
                                        <div class=\"col-sm-8\">
                                            <div class=\"text-sm-end\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"table-responsive\">
                                        <table class=\"table table-centered table-nowrap mb-0\">
                                            <thead class=\"table-light\">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Article</th>
                                                    <th>Depot</th>
                                                    <th>Entry Date</th>
                                                    <th>Main Stock</th>
                                                    <th>Available Stock</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for stock in stocks %}
                                                <tr>
                                                    <td>{{ stock.id }}</td>
                                                    <td>{{ stock.article.reference }}</td>
                                                    <td>{{ stock.depot.intitule }}</td>
                                                    <td>{{ stock.dateEntree|date('d/m/Y') }}</td>
                                                    <td>{{ stock.qteStockPrincipal }}</td>
                                                    <td>{{ stock.qteStockDispo }}</td>
                                                    <td>
                                                        <div class=\"d-flex gap-3\">
                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                                {% else %}
                                                <tr>
                                                    <td colspan=\"7\" class=\"text-center\">No stock entries found</td>
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
</html>", "stock/index.html.twig", "C:\\Users\\Lenovo\\Desktop\\ERP_axia\\ERP_axia\\saas\\templates\\stock\\index.html.twig");
    }
}
