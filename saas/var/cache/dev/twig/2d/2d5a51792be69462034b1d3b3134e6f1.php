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

/* index.html.twig */
class __TwigTemplate_fd4e23f22a952e8c3a6b2b21be93e7a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>
  ";
        // line 4
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Dashboard"]);
        echo "

  <!-- jsvectormap css (si tu l'utilises ailleurs) -->
  <link href=\"../../assets/libs/jsvectormap/jsvectormap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
  <!--Swiper slider css (optionnel)-->
  <link href=\"../../assets/libs/swiper/swiper-bundle.min.css\" rel=\"stylesheet\" type=\"text/css\" />

  ";
        // line 11
        echo twig_include($this->env, $context, "partials/head-css.html.twig");
        echo "
</head>

<body>

  <div id=\"layout-wrapper\">
    ";
        // line 17
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "

    <div class=\"main-content\">
      <div class=\"page-content\">
        <div class=\"container-fluid\">

          ";
        // line 24
        echo "          <div class=\"row mb-3\">
            <div class=\"col-12\">
              <div class=\"d-flex align-items-lg-center flex-lg-row flex-column\">
                <div class=\"flex-grow-1\">
                  <h4 class=\"fs-16 mb-1\">Tableau de bord</h4>
                  ";
        // line 29
        if ((isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "  <div class=\"mb-3\">
    <span class=\"badge bg-secondary\">Période affichée : ";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "</span>
  </div>
";
        }
        // line 34
        echo "
    <form method=\"get\" class=\"mb-3 d-flex align-items-center\" id=\"monthFilter\">
  <label class=\"me-2 mb-0 text-muted\" for=\"month\">Période :</label>
  <input type=\"month\" name=\"month\" id=\"month\"
         value=\"";
        // line 38
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 38), "query", [], "any", false, true, false, 38), "get", ["month"], "method", true, true, false, 38) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 38), "query", [], "any", false, true, false, 38), "get", ["month"], "method", false, false, false, 38)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 38), "query", [], "any", false, true, false, 38), "get", ["month"], "method", false, false, false, 38)) : (twig_date_format_filter($this->env, twig_date_converter($this->env), "Y-m"))), "html", null, true);
        echo "\"
         class=\"form-control\" style=\"max-width:220px;\">
  <button class=\"btn btn-primary ms-2\">Appliquer</button>
  ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "query", [], "any", false, false, false, 41), "get", ["month"], "method", false, false, false, 41)) {
            // line 42
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "pathinfo", [], "any", false, false, false, 42), "html", null, true);
            echo "\" class=\"btn btn-link ms-2\">Mois courant</a>
  ";
        }
        // line 44
        echo "</form>

                  <p class=\"text-muted mb-0\">Synthèse ventes, achats, stock & productivité (mois en cours).</p>
                </div>
              </div>
            </div>
          </div>

          ";
        // line 53
        echo "          <div class=\"row g-3\">
            <div class=\"col-xl-3 col-md-6\">
              <div class=\"card card-animate h-100\">
                <div class=\"card-body\">
                  <p class=\"text-uppercase fw-medium text-muted mb-2\">Chiffre d'affaires Mensuel (HT)</p>
                  <h4 class=\"fs-22 fw-semibold ff-secondary mb-2\">
                    ";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["caMensuel"]) || array_key_exists("caMensuel", $context) ? $context["caMensuel"] : (function () { throw new RuntimeError('Variable "caMensuel" does not exist.', 59, $this->source); })()), 2, ".", " "), "html", null, true);
        echo " TND
                  </h4>
                  <span class=\"badge bg-success-subtle text-success\">Ventes (FV confirmées)</span>
                </div>
              </div>
            </div>
            <div class=\"col-xl-3 col-md-6\">
              <div class=\"card card-animate h-100\">
                <div class=\"card-body\">
                  <p class=\"text-uppercase fw-medium text-muted mb-2\">Dépenses Mensuelles (HT)</p>
                  <h4 class=\"fs-22 fw-semibold ff-secondary mb-2\">
                    ";
        // line 70
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["depMensuelles"]) || array_key_exists("depMensuelles", $context) ? $context["depMensuelles"] : (function () { throw new RuntimeError('Variable "depMensuelles" does not exist.', 70, $this->source); })()), 2, ".", " "), "html", null, true);
        echo " TND
                  </h4>
                  <span class=\"badge bg-warning-subtle text-warning\">Achats (FA confirmées)</span>
                </div>
              </div>
            </div>
            <div class=\"col-xl-3 col-md-6\">
              <div class=\"card card-animate h-100\">
                <div class=\"card-body\">
                  <p class=\"text-uppercase fw-medium text-muted mb-2\">Valeur du Stock (estimée)</p>
                  <h4 class=\"fs-22 fw-semibold ff-secondary mb-2\">
                    ";
        // line 81
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valStock"]) || array_key_exists("valStock", $context) ? $context["valStock"] : (function () { throw new RuntimeError('Variable "valStock" does not exist.', 81, $this->source); })()), 2, ".", " "), "html", null, true);
        echo " TND
                  </h4>
                  <span class=\"badge bg-info-subtle text-info\">qty × coût moyen</span>
                </div>
              </div>
            </div>
            <div class=\"col-xl-3 col-md-6\">
              <div class=\"card card-animate h-100\">
                <div class=\"card-body\">
                  <p class=\"text-uppercase fw-medium text-muted mb-2\">Documents créés (mois)</p>
                  <h4 class=\"fs-22 fw-semibold ff-secondary mb-2\">";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["nbDocsMensuel"]) || array_key_exists("nbDocsMensuel", $context) ? $context["nbDocsMensuel"] : (function () { throw new RuntimeError('Variable "nbDocsMensuel" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "</h4>
                  <span class=\"badge bg-primary-subtle text-primary\">Tous types</span>
                </div>
              </div>
            </div>
          </div>

          ";
        // line 99
        echo "          <div class=\"row g-3 mt-1\">
            <div class=\"col-xl-8\">
              <div class=\"card h-100\">
                <div class=\"card-header border-0 align-items-center d-flex\">
                  <h4 class=\"card-title mb-0 flex-grow-1\">CA des 12 derniers mois (HT)</h4>
                </div>
                <div class=\"card-body\">
                  <div id=\"ca12moisChart\" class=\"apex-charts\" style=\"min-height: 320px;\"></div>
                </div>
              </div>
            </div>

            <div class=\"col-xl-4\">
              <div class=\"card h-100\">
                <div class=\"card-header align-items-center d-flex\">
                  <h4 class=\"card-title mb-0 flex-grow-1\">Utilisateurs les plus actifs (mois)</h4>
                </div>
                <div class=\"card-body\">
                  <ol class=\"mb-0\">
                    ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topUsers"]) || array_key_exists("topUsers", $context) ? $context["topUsers"] : (function () { throw new RuntimeError('Variable "topUsers" does not exist.', 118, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 119
            echo "                      <li>Utilisateur #";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_id", [], "any", false, false, false, 119), "html", null, true);
            echo " — <strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "nb", [], "any", false, false, false, 119), "html", null, true);
            echo "</strong> docs</li>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 121
            echo "                      <li class=\"text-muted\">Aucune donnée</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                  </ol>
                </div>
              </div>
            </div>
          </div>

          ";
        // line 130
        echo "          <div class=\"row g-3 mt-1\">
            <div class=\"col-xl-6\">
              <div class=\"card h-100\">
                <div class=\"card-header align-items-center d-flex\">
                  <h4 class=\"card-title mb-0 flex-grow-1\">Top 5 Clients par CA (mois en cours)</h4>
                </div>
                <div class=\"card-body\">
                  <div class=\"table-responsive table-card\">
                    <table class=\"table table-hover table-centered align-middle table-nowrap mb-0\">
                      <thead class=\"text-muted table-light\">
                        <tr>
                          <th>#</th>
                          <th>Client</th>
                          <th class=\"text-end\">CA (HT)</th>
                        </tr>
                      </thead>
                      <tbody>
                        ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topClients"]) || array_key_exists("topClients", $context) ? $context["topClients"] : (function () { throw new RuntimeError('Variable "topClients" does not exist.', 147, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 148
            echo "                          <tr>
                            <td>";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 149), "html", null, true);
            echo "</td>
                            <td>";
            // line 150
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["c"], "customer_name", [], "any", true, true, false, 150) &&  !(null === twig_get_attribute($this->env, $this->source, $context["c"], "customer_name", [], "any", false, false, false, 150)))) ? (twig_get_attribute($this->env, $this->source, $context["c"], "customer_name", [], "any", false, false, false, 150)) : (("#" . twig_get_attribute($this->env, $this->source, $context["c"], "customer_id", [], "any", false, false, false, 150)))), "html", null, true);
            echo "</td>

                            <td class=\"text-end\">";
            // line 152
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "ca", [], "any", false, false, false, 152), 2, ".", " "), "html", null, true);
            echo "</td>
                          </tr>
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 155
            echo "                          <tr><td colspan=\"3\" class=\"text-muted text-center\">Aucune donnée</td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"col-xl-6\">
              <div class=\"card h-100\">
                <div class=\"card-header align-items-center d-flex\">
                  <h4 class=\"card-title mb-0 flex-grow-1\">Top 5 Fournisseurs (mois en cours)</h4>
                </div>
                <div class=\"card-body\">
                  <div class=\"table-responsive table-card\">
                    <table class=\"table table-hover table-centered align-middle table-nowrap mb-0\">
                      <thead class=\"text-muted table-light\">
                        <tr>
                          <th>#</th>
                          <th>Fournisseur</th>
                          <th class=\"text-end\">Total Achats (HT)</th>
                        </tr>
                      </thead>
                      <tbody>
                        ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topFournisseurs"]) || array_key_exists("topFournisseurs", $context) ? $context["topFournisseurs"] : (function () { throw new RuntimeError('Variable "topFournisseurs" does not exist.', 180, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 181
            echo "                          <tr>
                            <td>";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 182), "html", null, true);
            echo "</td>
                            <td>";
            // line 183
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["f"], "supplier_name", [], "any", true, true, false, 183) &&  !(null === twig_get_attribute($this->env, $this->source, $context["f"], "supplier_name", [], "any", false, false, false, 183)))) ? (twig_get_attribute($this->env, $this->source, $context["f"], "supplier_name", [], "any", false, false, false, 183)) : (("#" . twig_get_attribute($this->env, $this->source, $context["f"], "supplier_id", [], "any", false, false, false, 183)))), "html", null, true);
            echo "</td><td class=\"text-end\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "total", [], "any", false, false, false, 183), 2, ".", " "), "html", null, true);
            echo "</td>
                          </tr>
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 186
            echo "                          <tr><td colspan=\"3\" class=\"text-muted text-center\">Aucune donnée</td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          ";
        // line 197
        echo "          <div class=\"row g-3 mt-1\">
            <div class=\"col-12\">
              <div class=\"card\">
                <div class=\"card-header align-items-center d-flex\">
                  <h4 class=\"card-title mb-0 flex-grow-1\">Articles en rupture</h4>
                </div>
                <div class=\"card-body\">
                  <div class=\"table-responsive table-card\">
                    <table class=\"table table-borderless table-centered align-middle table-nowrap mb-0\">
                      <thead class=\"text-muted table-light\">
                        <tr>
                          <th>ID</th>
                          <th>Article</th>
                          <th class=\"text-end\">Qté</th>
                          <th class=\"text-end\">Seuil</th>
                        </tr>
                      </thead>
                      <tbody>
                        ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ruptures"]) || array_key_exists("ruptures", $context) ? $context["ruptures"] : (function () { throw new RuntimeError('Variable "ruptures" does not exist.', 215, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 216
            echo "                          <tr class=\"table-warning\">
                            <td>";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 217), "html", null, true);
            echo "</td>
                            <td>";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "name", [], "any", false, false, false, 218), "html", null, true);
            echo "</td>
                            <td class=\"text-end\">";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "qty", [], "any", false, false, false, 219), "html", null, true);
            echo "</td>
                            <td class=\"text-end\">";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "reorder_threshold", [], "any", false, false, false, 220), "html", null, true);
            echo "</td>
                          </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 223
            echo "                          <tr><td colspan=\"4\" class=\"text-muted text-center\">Aucune rupture</td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div> ";
        // line 234
        echo "      </div> ";
        // line 235
        echo "
      ";
        // line 236
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
    </div> ";
        // line 238
        echo "  </div> ";
        // line 239
        echo "
  ";
        // line 240
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "
  ";
        // line 241
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "
<script>
(async () => {
  const qs = new URLSearchParams(window.location.search); // pour propager ?month=
  const suffix = qs.toString() ? `?\${qs}` : '';

  try {
    const [ca, dep, rupt] = await Promise.all([
      fetch('";
        // line 249
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_kpi_ca_mois");
        echo "' + suffix).then(r=>r.json()),
      fetch('";
        // line 250
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_kpi_dep_mois");
        echo "' + suffix).then(r=>r.json()),
      fetch('";
        // line 251
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_kpi_ruptures_count");
        echo "' + suffix).then(r=>r.json()),
    ]);
    if (document.getElementById('badge-ca'))   document.getElementById('badge-ca').textContent   = (ca.value ?? 0).toLocaleString('fr-FR', {maximumFractionDigits:0});
    if (document.getElementById('badge-dep'))  document.getElementById('badge-dep').textContent  = (dep.value ?? 0).toLocaleString('fr-FR', {maximumFractionDigits:0});
    if (document.getElementById('badge-rupt')) document.getElementById('badge-rupt').textContent = rupt.value ?? 0;
  } catch(e) { console.warn('Badges KPI: ', e); }
})();
</script>

  <!-- apexcharts -->
  <script src=\"../../assets/libs/apexcharts/apexcharts.min.js\"></script>

  <script>
    // Graphe CA 12 derniers mois (ApexCharts + fetch)
    (async function() {
      try {
        const res = await fetch('";
        // line 267
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_stats_ca_12_mois");
        echo "', { headers: { 'X-Requested-With': 'XMLHttpRequest' }});
        const data = await res.json(); // [{label:\"YYYY-MM\", value:1234.56}, ...]

        const labels = data.map(p => p.label);
        const values = data.map(p => p.value);

        const options = {
          chart: { type: 'area', height: 320, toolbar: { show: false } },
          dataLabels: { enabled: false },
          stroke: { curve: 'smooth', width: 2 },
          fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.35, opacityTo: 0.05 } },
          series: [{ name: 'CA (HT)', data: values }],
          xaxis: { categories: labels, labels: { rotate: -15 } },
          yaxis: { labels: { formatter: val => (val).toLocaleString('fr-FR') } },
          tooltip: {
            y: { formatter: val => `\${Number(val).toLocaleString('fr-FR', { minimumFractionDigits: 2, maximumFractionDigits: 2 })} TND` }
          }
        };

        const chart = new ApexCharts(document.querySelector(\"#ca12moisChart\"), options);
        chart.render();
      } catch (e) {
        console.error('Erreur CA 12 mois:', e);
      }
    })();
  </script>

  <!-- App js -->
  <script src=\"../../assets/js/app.js\"></script>
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
        return "index.html.twig";
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
        return array (  513 => 267,  494 => 251,  490 => 250,  486 => 249,  475 => 241,  471 => 240,  468 => 239,  466 => 238,  462 => 236,  459 => 235,  457 => 234,  447 => 225,  440 => 223,  432 => 220,  428 => 219,  424 => 218,  420 => 217,  417 => 216,  412 => 215,  392 => 197,  382 => 188,  375 => 186,  357 => 183,  353 => 182,  350 => 181,  332 => 180,  307 => 157,  300 => 155,  284 => 152,  279 => 150,  275 => 149,  272 => 148,  254 => 147,  235 => 130,  227 => 123,  220 => 121,  210 => 119,  205 => 118,  184 => 99,  174 => 91,  161 => 81,  147 => 70,  133 => 59,  125 => 53,  115 => 44,  109 => 42,  107 => 41,  101 => 38,  95 => 34,  89 => 31,  86 => 30,  84 => 29,  77 => 24,  68 => 17,  59 => 11,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>
  {{ include('partials/title-meta.html.twig', {title: 'Dashboard'}) }}

  <!-- jsvectormap css (si tu l'utilises ailleurs) -->
  <link href=\"../../assets/libs/jsvectormap/jsvectormap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
  <!--Swiper slider css (optionnel)-->
  <link href=\"../../assets/libs/swiper/swiper-bundle.min.css\" rel=\"stylesheet\" type=\"text/css\" />

  {{ include('partials/head-css.html.twig') }}
</head>

<body>

  <div id=\"layout-wrapper\">
    {{ include('partials/menu.html.twig') }}

    <div class=\"main-content\">
      <div class=\"page-content\">
        <div class=\"container-fluid\">

          {# ========= HEADER ========= #}
          <div class=\"row mb-3\">
            <div class=\"col-12\">
              <div class=\"d-flex align-items-lg-center flex-lg-row flex-column\">
                <div class=\"flex-grow-1\">
                  <h4 class=\"fs-16 mb-1\">Tableau de bord</h4>
                  {% if currentMonth %}
  <div class=\"mb-3\">
    <span class=\"badge bg-secondary\">Période affichée : {{ currentMonth }}</span>
  </div>
{% endif %}

    <form method=\"get\" class=\"mb-3 d-flex align-items-center\" id=\"monthFilter\">
  <label class=\"me-2 mb-0 text-muted\" for=\"month\">Période :</label>
  <input type=\"month\" name=\"month\" id=\"month\"
         value=\"{{ app.request.query.get('month') ?? (date()|date('Y-m')) }}\"
         class=\"form-control\" style=\"max-width:220px;\">
  <button class=\"btn btn-primary ms-2\">Appliquer</button>
  {% if app.request.query.get('month') %}
    <a href=\"{{ app.request.pathinfo }}\" class=\"btn btn-link ms-2\">Mois courant</a>
  {% endif %}
</form>

                  <p class=\"text-muted mb-0\">Synthèse ventes, achats, stock & productivité (mois en cours).</p>
                </div>
              </div>
            </div>
          </div>

          {# ========= KPIs (4 cartes) ========= #}
          <div class=\"row g-3\">
            <div class=\"col-xl-3 col-md-6\">
              <div class=\"card card-animate h-100\">
                <div class=\"card-body\">
                  <p class=\"text-uppercase fw-medium text-muted mb-2\">Chiffre d'affaires Mensuel (HT)</p>
                  <h4 class=\"fs-22 fw-semibold ff-secondary mb-2\">
                    {{ caMensuel|number_format(2, '.', ' ') }} TND
                  </h4>
                  <span class=\"badge bg-success-subtle text-success\">Ventes (FV confirmées)</span>
                </div>
              </div>
            </div>
            <div class=\"col-xl-3 col-md-6\">
              <div class=\"card card-animate h-100\">
                <div class=\"card-body\">
                  <p class=\"text-uppercase fw-medium text-muted mb-2\">Dépenses Mensuelles (HT)</p>
                  <h4 class=\"fs-22 fw-semibold ff-secondary mb-2\">
                    {{ depMensuelles|number_format(2, '.', ' ') }} TND
                  </h4>
                  <span class=\"badge bg-warning-subtle text-warning\">Achats (FA confirmées)</span>
                </div>
              </div>
            </div>
            <div class=\"col-xl-3 col-md-6\">
              <div class=\"card card-animate h-100\">
                <div class=\"card-body\">
                  <p class=\"text-uppercase fw-medium text-muted mb-2\">Valeur du Stock (estimée)</p>
                  <h4 class=\"fs-22 fw-semibold ff-secondary mb-2\">
                    {{ valStock|number_format(2, '.', ' ') }} TND
                  </h4>
                  <span class=\"badge bg-info-subtle text-info\">qty × coût moyen</span>
                </div>
              </div>
            </div>
            <div class=\"col-xl-3 col-md-6\">
              <div class=\"card card-animate h-100\">
                <div class=\"card-body\">
                  <p class=\"text-uppercase fw-medium text-muted mb-2\">Documents créés (mois)</p>
                  <h4 class=\"fs-22 fw-semibold ff-secondary mb-2\">{{ nbDocsMensuel }}</h4>
                  <span class=\"badge bg-primary-subtle text-primary\">Tous types</span>
                </div>
              </div>
            </div>
          </div>

          {# ========= Graph CA 12 derniers mois + Top utilisateurs ========= #}
          <div class=\"row g-3 mt-1\">
            <div class=\"col-xl-8\">
              <div class=\"card h-100\">
                <div class=\"card-header border-0 align-items-center d-flex\">
                  <h4 class=\"card-title mb-0 flex-grow-1\">CA des 12 derniers mois (HT)</h4>
                </div>
                <div class=\"card-body\">
                  <div id=\"ca12moisChart\" class=\"apex-charts\" style=\"min-height: 320px;\"></div>
                </div>
              </div>
            </div>

            <div class=\"col-xl-4\">
              <div class=\"card h-100\">
                <div class=\"card-header align-items-center d-flex\">
                  <h4 class=\"card-title mb-0 flex-grow-1\">Utilisateurs les plus actifs (mois)</h4>
                </div>
                <div class=\"card-body\">
                  <ol class=\"mb-0\">
                    {% for u in topUsers %}
                      <li>Utilisateur #{{ u.user_id }} — <strong>{{ u.nb }}</strong> docs</li>
                    {% else %}
                      <li class=\"text-muted\">Aucune donnée</li>
                    {% endfor %}
                  </ol>
                </div>
              </div>
            </div>
          </div>

          {# ========= Top clients / Top fournisseurs ========= #}
          <div class=\"row g-3 mt-1\">
            <div class=\"col-xl-6\">
              <div class=\"card h-100\">
                <div class=\"card-header align-items-center d-flex\">
                  <h4 class=\"card-title mb-0 flex-grow-1\">Top 5 Clients par CA (mois en cours)</h4>
                </div>
                <div class=\"card-body\">
                  <div class=\"table-responsive table-card\">
                    <table class=\"table table-hover table-centered align-middle table-nowrap mb-0\">
                      <thead class=\"text-muted table-light\">
                        <tr>
                          <th>#</th>
                          <th>Client</th>
                          <th class=\"text-end\">CA (HT)</th>
                        </tr>
                      </thead>
                      <tbody>
                        {% for c in topClients %}
                          <tr>
                            <td>{{ loop.index }}</td>
                            <td>{{ c.customer_name ?? ('#' ~ c.customer_id) }}</td>

                            <td class=\"text-end\">{{ c.ca|number_format(2, '.', ' ') }}</td>
                          </tr>
                        {% else %}
                          <tr><td colspan=\"3\" class=\"text-muted text-center\">Aucune donnée</td></tr>
                        {% endfor %}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"col-xl-6\">
              <div class=\"card h-100\">
                <div class=\"card-header align-items-center d-flex\">
                  <h4 class=\"card-title mb-0 flex-grow-1\">Top 5 Fournisseurs (mois en cours)</h4>
                </div>
                <div class=\"card-body\">
                  <div class=\"table-responsive table-card\">
                    <table class=\"table table-hover table-centered align-middle table-nowrap mb-0\">
                      <thead class=\"text-muted table-light\">
                        <tr>
                          <th>#</th>
                          <th>Fournisseur</th>
                          <th class=\"text-end\">Total Achats (HT)</th>
                        </tr>
                      </thead>
                      <tbody>
                        {% for f in topFournisseurs %}
                          <tr>
                            <td>{{ loop.index }}</td>
                            <td>{{ f.supplier_name ?? ('#' ~ f.supplier_id) }}</td><td class=\"text-end\">{{ f.total|number_format(2, '.', ' ') }}</td>
                          </tr>
                        {% else %}
                          <tr><td colspan=\"3\" class=\"text-muted text-center\">Aucune donnée</td></tr>
                        {% endfor %}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {# ========= Ruptures de stock ========= #}
          <div class=\"row g-3 mt-1\">
            <div class=\"col-12\">
              <div class=\"card\">
                <div class=\"card-header align-items-center d-flex\">
                  <h4 class=\"card-title mb-0 flex-grow-1\">Articles en rupture</h4>
                </div>
                <div class=\"card-body\">
                  <div class=\"table-responsive table-card\">
                    <table class=\"table table-borderless table-centered align-middle table-nowrap mb-0\">
                      <thead class=\"text-muted table-light\">
                        <tr>
                          <th>ID</th>
                          <th>Article</th>
                          <th class=\"text-end\">Qté</th>
                          <th class=\"text-end\">Seuil</th>
                        </tr>
                      </thead>
                      <tbody>
                        {% for a in ruptures %}
                          <tr class=\"table-warning\">
                            <td>{{ a.id }}</td>
                            <td>{{ a.name }}</td>
                            <td class=\"text-end\">{{ a.qty }}</td>
                            <td class=\"text-end\">{{ a.reorder_threshold }}</td>
                          </tr>
                        {% else %}
                          <tr><td colspan=\"4\" class=\"text-muted text-center\">Aucune rupture</td></tr>
                        {% endfor %}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div> {# /container-fluid #}
      </div> {# /page-content #}

      {{ include('partials/footer.html.twig') }}
    </div> {# /main-content #}
  </div> {# /layout-wrapper #}

  {{ include('partials/customizer.html.twig') }}
  {{ include('partials/vendor-scripts.html.twig') }}
<script>
(async () => {
  const qs = new URLSearchParams(window.location.search); // pour propager ?month=
  const suffix = qs.toString() ? `?\${qs}` : '';

  try {
    const [ca, dep, rupt] = await Promise.all([
      fetch('{{ path(\"api_kpi_ca_mois\") }}' + suffix).then(r=>r.json()),
      fetch('{{ path(\"api_kpi_dep_mois\") }}' + suffix).then(r=>r.json()),
      fetch('{{ path(\"api_kpi_ruptures_count\") }}' + suffix).then(r=>r.json()),
    ]);
    if (document.getElementById('badge-ca'))   document.getElementById('badge-ca').textContent   = (ca.value ?? 0).toLocaleString('fr-FR', {maximumFractionDigits:0});
    if (document.getElementById('badge-dep'))  document.getElementById('badge-dep').textContent  = (dep.value ?? 0).toLocaleString('fr-FR', {maximumFractionDigits:0});
    if (document.getElementById('badge-rupt')) document.getElementById('badge-rupt').textContent = rupt.value ?? 0;
  } catch(e) { console.warn('Badges KPI: ', e); }
})();
</script>

  <!-- apexcharts -->
  <script src=\"../../assets/libs/apexcharts/apexcharts.min.js\"></script>

  <script>
    // Graphe CA 12 derniers mois (ApexCharts + fetch)
    (async function() {
      try {
        const res = await fetch('{{ path(\"api_stats_ca_12_mois\") }}', { headers: { 'X-Requested-With': 'XMLHttpRequest' }});
        const data = await res.json(); // [{label:\"YYYY-MM\", value:1234.56}, ...]

        const labels = data.map(p => p.label);
        const values = data.map(p => p.value);

        const options = {
          chart: { type: 'area', height: 320, toolbar: { show: false } },
          dataLabels: { enabled: false },
          stroke: { curve: 'smooth', width: 2 },
          fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.35, opacityTo: 0.05 } },
          series: [{ name: 'CA (HT)', data: values }],
          xaxis: { categories: labels, labels: { rotate: -15 } },
          yaxis: { labels: { formatter: val => (val).toLocaleString('fr-FR') } },
          tooltip: {
            y: { formatter: val => `\${Number(val).toLocaleString('fr-FR', { minimumFractionDigits: 2, maximumFractionDigits: 2 })} TND` }
          }
        };

        const chart = new ApexCharts(document.querySelector(\"#ca12moisChart\"), options);
        chart.render();
      } catch (e) {
        console.error('Erreur CA 12 mois:', e);
      }
    })();
  </script>

  <!-- App js -->
  <script src=\"../../assets/js/app.js\"></script>
</body>
</html>
", "index.html.twig", "C:\\Users\\Lenovo\\Desktop\\ERP_axia\\ERP_axia\\saas\\templates\\index.html.twig");
    }
}
