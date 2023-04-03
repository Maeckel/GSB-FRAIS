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

/* visiteur/consulter.html.twig */
class __TwigTemplate_9406609c41be18a102f775c06d714a6e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/consulter.html.twig"));

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
        <h1>Visiteur - Consulter fiche frais</h1>
\t</head>
\t
\t<body>
\t\t<a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_renseigner");
        echo "\">Renseigner fiche frais</a>
\t\t<a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espace_visiteur");
        echo "\">Acceuil</a>
\t\t<a class=\"button\" onclick=\"openForm()\" href=\"#popup1\">Déconnexion</a>
\t\t<div id=\"popup1\" class=\"overlay\">
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
\t\t<form action=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulter");
        echo "\" method=\"POST\">
\t\t";
        // line 93
        if (((isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 93, $this->source); })()) != null)) {
            // line 94
            echo "\t\t\t<br/>
\t\t\t<label>Veuillez choisir un Mois :</label>
\t\t\t<br/>
\t\t\t<select name=\"Mois\" id=\"mois\">
\t\t\t";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 98, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unmois"]) {
                // line 99
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["unmois"], "id", [], "any", false, false, false, 99) != (isset($context["Month"]) || array_key_exists("Month", $context) ? $context["Month"] : (function () { throw new RuntimeError('Variable "Month" does not exist.', 99, $this->source); })()))) {
                    // line 100
                    echo "        \t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unmois"], "id", [], "any", false, false, false, 100), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unmois"], "id", [], "any", false, false, false, 100), "html", null, true);
                    echo "</option>
\t\t\t\t";
                }
                // line 102
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unmois'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "\t\t\t</select>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t";
            // line 106
            if (array_key_exists("fiche", $context)) {
                // line 107
                echo "\t\t\t\t<h2>Fiche frais<h2/>
\t\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<th>Mois</th>
\t\t\t\t\t<th>Justificatifs</th>
\t\t\t\t\t<th>Montant validé</th>
\t\t\t\t\t<th>Date de modifcation</th>
\t\t\t\t</thead>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 117, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 117), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 118, $this->source); })()), "montantValide", [], "any", false, false, false, 118), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 119
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 119, $this->source); })()), "dateModif", [], "any", false, false, false, 119), "d-m-Y"), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<br/>
\t\t\t\t<h2>Ligne frais hors forfait<h2/>
\t\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>Montant</th>
\t\t\t\t\t<th>Libelle</th>
\t\t\t\t</thead>
\t\t\t\t";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 130, $this->source); })()), "ligneFraisHorsForfaits", [], "any", false, false, false, 130));
                foreach ($context['_seq'] as $context["_key"] => $context["FHF"]) {
                    // line 131
                    echo "\t\t\t\t\t";
                    if (($context["FHF"] != null)) {
                        // line 132
                        echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                        // line 133
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "date", [], "any", false, false, false, 133), "d-m-Y"), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t<td>";
                        // line 134
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "montant", [], "any", false, false, false, 134), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t<td>";
                        // line 135
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "libelle", [], "any", false, false, false, 135), "html", null, true);
                        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
                    }
                    // line 138
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FHF'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "\t\t\t\t</table>
\t\t\t\t<br/>
\t\t\t\t<h2>Ligne frais forfait<h2/>
\t\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<th>Type</th>
\t\t\t\t\t<th>Libelle</th>
\t\t\t\t\t<th>Quantite</th>
\t\t\t\t\t<th>Montant</th>
\t\t\t\t</thead>
\t\t\t\t";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 149, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
                    // line 150
                    echo "\t\t\t\t";
                    if (($context["unfrais"] != null)) {
                        // line 151
                        echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                        // line 152
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unfrais"], "Fraisforfait", [], "any", false, false, false, 152), "id", [], "any", false, false, false, 152), "html", null, true);
                        echo "</td>
\t\t\t\t\t<td>";
                        // line 153
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unfrais"], "Fraisforfait", [], "any", false, false, false, 153), "libelle", [], "any", false, false, false, 153), "html", null, true);
                        echo "</td>
\t\t\t\t\t<td>";
                        // line 154
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unfrais"], "quantite", [], "any", false, false, false, 154), "html", null, true);
                        echo "</td>
\t\t\t\t\t<td>";
                        // line 155
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unfrais"], "Fraisforfait", [], "any", false, false, false, 155), "montant", [], "any", false, false, false, 155), "html", null, true);
                        echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
                    }
                    // line 158
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "\t\t\t\t</table>
\t\t\t";
            }
            // line 161
            echo "\t\t\t<br/>
\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\" />
\t\t";
        }
        // line 165
        echo "\t\t</form>
\t</body>
\t
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/consulter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 165,  299 => 161,  295 => 159,  289 => 158,  283 => 155,  279 => 154,  275 => 153,  271 => 152,  268 => 151,  265 => 150,  261 => 149,  249 => 139,  243 => 138,  237 => 135,  233 => 134,  229 => 133,  226 => 132,  223 => 131,  219 => 130,  205 => 119,  201 => 118,  197 => 117,  193 => 116,  182 => 107,  180 => 106,  175 => 103,  169 => 102,  161 => 100,  158 => 99,  154 => 98,  148 => 94,  146 => 93,  142 => 92,  135 => 88,  122 => 78,  118 => 77,  40 => 1,);
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
        <h1>Visiteur - Consulter fiche frais</h1>
\t</head>
\t
\t<body>
\t\t<a href=\"{{ path('app_renseigner') }}\">Renseigner fiche frais</a>
\t\t<a href=\"{{ path('app_espace_visiteur') }}\">Acceuil</a>
\t\t<a class=\"button\" onclick=\"openForm()\" href=\"#popup1\">Déconnexion</a>
\t\t<div id=\"popup1\" class=\"overlay\">
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
\t\t<form action=\"{{ path('app_consulter') }}\" method=\"POST\">
\t\t{% if mois != null %}
\t\t\t<br/>
\t\t\t<label>Veuillez choisir un Mois :</label>
\t\t\t<br/>
\t\t\t<select name=\"Mois\" id=\"mois\">
\t\t\t{% for unmois in mois %}
\t\t\t\t{% if unmois.id != Month %}
        \t\t\t<option value=\"{{ unmois.id }}\">{{ unmois.id }}</option>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t\t</select>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t{% if fiche is defined %}
\t\t\t\t<h2>Fiche frais<h2/>
\t\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<th>Mois</th>
\t\t\t\t\t<th>Justificatifs</th>
\t\t\t\t\t<th>Montant validé</th>
\t\t\t\t\t<th>Date de modifcation</th>
\t\t\t\t</thead>
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ fiche.id }}</td>
\t\t\t\t\t<td>{{ fiche.nbJustificatifs }}</td>
\t\t\t\t\t<td>{{ fiche.montantValide }}</td>
\t\t\t\t\t<td>{{ fiche.dateModif|date('d-m-Y') }}</td>
\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<br/>
\t\t\t\t<h2>Ligne frais hors forfait<h2/>
\t\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>Montant</th>
\t\t\t\t\t<th>Libelle</th>
\t\t\t\t</thead>
\t\t\t\t{% for FHF in fiche.ligneFraisHorsForfaits %}
\t\t\t\t\t{% if FHF != null %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ FHF.date|date('d-m-Y') }}</td>
\t\t\t\t\t\t<td>{{ FHF.montant }}</td>
\t\t\t\t\t\t<td>{{ FHF.libelle }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t</table>
\t\t\t\t<br/>
\t\t\t\t<h2>Ligne frais forfait<h2/>
\t\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<th>Type</th>
\t\t\t\t\t<th>Libelle</th>
\t\t\t\t\t<th>Quantite</th>
\t\t\t\t\t<th>Montant</th>
\t\t\t\t</thead>
\t\t\t\t{% for unfrais in frais %}
\t\t\t\t{% if unfrais != null %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ unfrais.Fraisforfait.id }}</td>
\t\t\t\t\t<td>{{ unfrais.Fraisforfait.libelle  }}</td>
\t\t\t\t\t<td>{{ unfrais.quantite }}</td>
\t\t\t\t\t<td>{{ unfrais.Fraisforfait.montant }}</td>
\t\t\t\t</tr>
\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t</table>
\t\t\t{% endif %}
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\" />
\t\t{% endif %}
\t\t</form>
\t</body>
\t
</html>
", "visiteur/consulter.html.twig", "/home/developpeur/GSB-AF/templates/visiteur/consulter.html.twig");
    }
}
