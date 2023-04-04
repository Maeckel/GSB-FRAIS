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

/* visiteur/renseigner.html.twig */
class __TwigTemplate_0fd204ffb69858ee26b85f06373bf2e2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/renseigner.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<script>
function openForm() {
  document.getElementById(\"popup1\").style.display = \"block\";
}

function closeForm() {
  document.getElementById(\"popup1\").style.display = \"none\";
}
</script>

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    table{
  border-collapse: collapse;
}
tr, td{
  border: 1px solid black;
  padding: 10px;
}
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
</style>

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>GSB - Frais</title>
        <h1>Visiteur - Renseigner fiche frais</h1>
\t</head>
\t
\t<body>
\t\t<a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulter");
        echo "\">Consulter fiche frais</a>
\t\t<a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espace_visiteur");
        echo "\">Acceuil</a>
\t\t<a class=\"button\" onclick=\"openForm()\" href=\"#popup2\">Déconnexion</a>
\t\t<div id=\"popup2\" class=\"overlay\">
\t\t\t\t\t  <div class=\"popup\">
\t\t\t\t\t  <h2>Confirmation</h2>
\t\t\t\t\t  <a class=\"close\" href=\"#\">&times;</a>
\t\t\t\t\t  <div class=\"content\">
\t\t\t\t\t  Etes-vous certains de vouloir fermer la session ?
\t\t\t\t\t  </div>
    \t\t\t\t  <br/>
    \t\t\t\t  <a class=\"button\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visiteur_deconnexion");
        echo "\">Oui</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t<br/>
\t\t<br/>
\t\t<a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frais_hors_forfait");
        echo "\">+ Nouveau frais hors forfait +</a>
\t</body>
\t<br/>
\t<form action=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_renseigner");
        echo "\" method=\"POST\">
\t<br/>
\t<h2>Fiche frais</h2>
\t<table>
\t<thead>
\t\t<th>Mois</th>
\t\t\t<th>Justificatifs</th>
\t\t\t<th>Montant validé</th>
\t\t\t<th>Date de modifcation</th>
\t\t</thead>
\t\t<tr>
\t\t\t<td>";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 108, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 108), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 109, $this->source); })()), "montantValide", [], "any", false, false, false, 109), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 110
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 110, $this->source); })()), "dateModif", [], "any", false, false, false, 110), "d-m-Y"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t</table>
\t\t<br/>
\t\t<h2>Ligne frais hors forfait</h2>
\t\t<table>
\t\t<thead>
\t\t\t<th>Date</th>
\t\t\t<th>Montant</th>
\t\t\t<th>Libelle</th>
\t\t</thead>
\t\t";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 121, $this->source); })()), "ligneFraisHorsForfaits", [], "any", false, false, false, 121));
        foreach ($context['_seq'] as $context["_key"] => $context["FHF"]) {
            // line 122
            echo "\t\t\t";
            if (($context["FHF"] != null)) {
                // line 123
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FHF"], "Visiteur", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "session", [], "any", false, false, false, 123), "get", [0 => "id"], "method", false, false, false, 123))) {
                    // line 124
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                    // line 125
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "date", [], "any", false, false, false, 125), "d-m-Y"), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>";
                    // line 126
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "montant", [], "any", false, false, false, 126), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>";
                    // line 127
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "libelle", [], "any", false, false, false, 127), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t<a class=\"button\" onclick=\"openForm()\" href=\"#popup1\">Supprimer</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"popup1\" class=\"overlay\">
\t\t\t\t\t<div class=\"popup\">
\t\t\t\t\t<h2>Confirmation</h2>
\t\t\t\t\t<a class=\"close\" href=\"#\">&times;</a>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\tEtes-vous certains de vouloir poursuivre l'action suivante ?
\t\t\t\t\t</div>
    \t\t\t\t<br/>
    \t\t\t\t<button type=\"submit\" name=\"Id\" value=\"";
                    // line 141
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "id", [], "any", false, false, false, 141), "html", null, true);
                    echo "\">Oui</button>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
                }
                // line 147
                echo "\t\t\t";
            }
            // line 148
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FHF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "\t\t</form>
\t\t</table>
\t\t<br/>
\t\t<h2>Ligne frais forfait</h2>
\t\t<table>
\t\t<thead>
\t\t\t<th>Type</th>
\t\t\t<th>Libelle</th>
\t\t\t<th>Quantite</th>
\t\t\t<th>Montant</th>
\t\t</thead>
\t\t";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 160, $this->source); })()), "ligneFraisForfaits", [], "any", false, false, false, 160));
        foreach ($context['_seq'] as $context["_key"] => $context["FF"]) {
            // line 161
            echo "\t\t\t";
            if (($context["FF"] != null)) {
                // line 162
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Visiteur", [], "any", false, false, false, 162), "id", [], "any", false, false, false, 162) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "session", [], "any", false, false, false, 162), "get", [0 => "id"], "method", false, false, false, 162))) {
                    // line 163
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                    // line 164
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fraisforfait", [], "any", false, false, false, 164), "id", [], "any", false, false, false, 164), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>";
                    // line 165
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fraisforfait", [], "any", false, false, false, 165), "libelle", [], "any", false, false, false, 165), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>";
                    // line 166
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FF"], "quantite", [], "any", false, false, false, 166), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>";
                    // line 167
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fraisforfait", [], "any", false, false, false, 167), "montant", [], "any", false, false, false, 167), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td> <a href=\"";
                    // line 168
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frais_forfait", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fraisforfait", [], "any", false, false, false, 168), "id", [], "any", false, false, false, 168)]), "html", null, true);
                    echo "\">Editer</a> </td>
\t\t\t\t</tr>
\t\t\t";
                }
                // line 171
                echo "\t\t\t";
            }
            // line 172
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "\t\t</table>
\t
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/renseigner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 173,  296 => 172,  293 => 171,  287 => 168,  283 => 167,  279 => 166,  275 => 165,  271 => 164,  268 => 163,  265 => 162,  262 => 161,  258 => 160,  245 => 149,  239 => 148,  236 => 147,  227 => 141,  210 => 127,  206 => 126,  202 => 125,  199 => 124,  196 => 123,  193 => 122,  189 => 121,  175 => 110,  171 => 109,  167 => 108,  163 => 107,  149 => 96,  143 => 93,  135 => 88,  122 => 78,  118 => 77,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<script>
function openForm() {
  document.getElementById(\"popup1\").style.display = \"block\";
}

function closeForm() {
  document.getElementById(\"popup1\").style.display = \"none\";
}
</script>

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    table{
  border-collapse: collapse;
}
tr, td{
  border: 1px solid black;
  padding: 10px;
}
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
</style>

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>GSB - Frais</title>
        <h1>Visiteur - Renseigner fiche frais</h1>
\t</head>
\t
\t<body>
\t\t<a href=\"{{ path('app_consulter') }}\">Consulter fiche frais</a>
\t\t<a href=\"{{ path('app_espace_visiteur') }}\">Acceuil</a>
\t\t<a class=\"button\" onclick=\"openForm()\" href=\"#popup2\">Déconnexion</a>
\t\t<div id=\"popup2\" class=\"overlay\">
\t\t\t\t\t  <div class=\"popup\">
\t\t\t\t\t  <h2>Confirmation</h2>
\t\t\t\t\t  <a class=\"close\" href=\"#\">&times;</a>
\t\t\t\t\t  <div class=\"content\">
\t\t\t\t\t  Etes-vous certains de vouloir fermer la session ?
\t\t\t\t\t  </div>
    \t\t\t\t  <br/>
    \t\t\t\t  <a class=\"button\" href=\"{{ path('app_visiteur_deconnexion') }}\">Oui</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t<br/>
\t\t<br/>
\t\t<a href=\"{{ path('app_frais_hors_forfait') }}\">+ Nouveau frais hors forfait +</a>
\t</body>
\t<br/>
\t<form action=\"{{ path('app_renseigner') }}\" method=\"POST\">
\t<br/>
\t<h2>Fiche frais</h2>
\t<table>
\t<thead>
\t\t<th>Mois</th>
\t\t\t<th>Justificatifs</th>
\t\t\t<th>Montant validé</th>
\t\t\t<th>Date de modifcation</th>
\t\t</thead>
\t\t<tr>
\t\t\t<td>{{ fiche.id }}</td>
\t\t\t<td>{{ fiche.nbJustificatifs }}</td>
\t\t\t<td>{{ fiche.montantValide }}</td>
\t\t\t<td>{{ fiche.dateModif|date('d-m-Y') }}</td>
\t\t</tr>
\t\t</table>
\t\t<br/>
\t\t<h2>Ligne frais hors forfait</h2>
\t\t<table>
\t\t<thead>
\t\t\t<th>Date</th>
\t\t\t<th>Montant</th>
\t\t\t<th>Libelle</th>
\t\t</thead>
\t\t{% for FHF in fiche.ligneFraisHorsForfaits %}
\t\t\t{% if FHF != null %}
\t\t\t{% if FHF.Visiteur.id == app.session.get(\"id\") %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ FHF.date|date('d-m-Y') }}</td>
\t\t\t\t\t<td>{{ FHF.montant }}</td>
\t\t\t\t\t<td>{{ FHF.libelle }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t<a class=\"button\" onclick=\"openForm()\" href=\"#popup1\">Supprimer</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"popup1\" class=\"overlay\">
\t\t\t\t\t<div class=\"popup\">
\t\t\t\t\t<h2>Confirmation</h2>
\t\t\t\t\t<a class=\"close\" href=\"#\">&times;</a>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\tEtes-vous certains de vouloir poursuivre l'action suivante ?
\t\t\t\t\t</div>
    \t\t\t\t<br/>
    \t\t\t\t<button type=\"submit\" name=\"Id\" value=\"{{ FHF.id }}\">Oui</button>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endif %}
\t\t\t{% endif %}
\t\t{% endfor %}
\t\t</form>
\t\t</table>
\t\t<br/>
\t\t<h2>Ligne frais forfait</h2>
\t\t<table>
\t\t<thead>
\t\t\t<th>Type</th>
\t\t\t<th>Libelle</th>
\t\t\t<th>Quantite</th>
\t\t\t<th>Montant</th>
\t\t</thead>
\t\t{% for FF in fiche.ligneFraisForfaits %}
\t\t\t{% if FF != null %}
\t\t\t{% if FF.Visiteur.id == app.session.get(\"id\") %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ FF.Fraisforfait.id }}</td>
\t\t\t\t\t<td>{{ FF.Fraisforfait.libelle  }}</td>
\t\t\t\t\t<td>{{ FF.quantite }}</td>
\t\t\t\t\t<td>{{ FF.Fraisforfait.montant }}</td>
\t\t\t\t\t<td> <a href=\"{{ path('app_frais_forfait', {'id': FF.Fraisforfait.id}) }}\">Editer</a> </td>
\t\t\t\t</tr>
\t\t\t{% endif %}
\t\t\t{% endif %}
\t\t{% endfor %}
\t\t</table>
\t
</html>
", "visiteur/renseigner.html.twig", "/home/developpeur/GSB-AF/templates/visiteur/renseigner.html.twig");
    }
}
