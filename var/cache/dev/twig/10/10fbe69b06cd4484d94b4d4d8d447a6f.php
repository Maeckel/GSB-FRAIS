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

/* comptable/valider.html.twig */
class __TwigTemplate_2e5daa97733fbbf01194ad405324f4b8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/valider.html.twig"));

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
\t.example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
\t.example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
\ttable{
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

    <head>
   \t <meta charset=\"utf-8\">
   \t <title>GSB - Frais</title>
    \t<h1>Comptable - Valider fiche frais</h1>
   \t <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espace_comptable");
        echo "\">Acceuil</a>
   \t <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_suivre");
        echo "\">Suivre fiche frais</a>
   \t <a class=\"button\" onclick=\"openForm()\" href=\"#popup1\">Déconnexion</a>
   \t <div id=\"popup1\" class=\"overlay\">
   \t\t\t\t   <div class=\"popup\">
   \t\t\t\t   <h2>Confirmation</h2>
   \t\t\t\t   <a class=\"close\" href=\"#\">&times;</a>
   \t\t\t\t   <div class=\"content\">
   \t\t\t\t   Etes-vous certains de vouloir fermer la session ?
   \t\t\t\t   </div>
   \t\t\t\t   <br/>
   \t\t\t\t   <a class=\"button\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comptable_deconnexion");
        echo "\">Oui</a>
   \t\t\t </div>
   \t\t </div>
    </head>

    <body>
   \t <form action=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_valider");
        echo "\" method=\"POST\">
\t";
        // line 92
        if ((array_key_exists("erreur", $context) && ((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 92, $this->source); })()) != null))) {
            // line 93
            echo "   \t\t\t <h5> ";
            echo twig_escape_filter($this->env, (isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 93, $this->source); })()), "html", null, true);
            echo " </h5>
   \t\t ";
        }
        // line 95
        echo "   \t <br/>
   \t <br/>
   \t <label>Veuillez choisir un visiteur :</label>
   \t <br/>
   \t <select name=\"Visiteur\" id=\"visiteur\">
   \t ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["visiteurs"]) || array_key_exists("visiteurs", $context) ? $context["visiteurs"] : (function () { throw new RuntimeError('Variable "visiteurs" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["visiteur"]) {
            // line 101
            echo "   \t\t <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visiteur"], "id", [], "any", false, false, false, 101), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["visiteur"], "nom", [], "any", false, false, false, 101) . " ") . twig_get_attribute($this->env, $this->source, $context["visiteur"], "prenom", [], "any", false, false, false, 101)), "html", null, true);
            echo "</option>
   \t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visiteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "   \t </select>
   \t <br/>
\t<br/>
   \t <label>Veuillez choisir une année :</label>
   \t <br/>
\t<select name=\"Annee\" id=\"annee\">
\t";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 110
            echo "   \t\t <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annees"]) || array_key_exists("annees", $context) ? $context["annees"] : (function () { throw new RuntimeError('Variable "annees" does not exist.', 110, $this->source); })()), $context["i"], [], "array", false, false, false, 110), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annees"]) || array_key_exists("annees", $context) ? $context["annees"] : (function () { throw new RuntimeError('Variable "annees" does not exist.', 110, $this->source); })()), $context["i"], [], "array", false, false, false, 110), "html", null, true);
            echo "</option>
   \t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "   \t </select>
\t<br/>
\t<br/>
   \t <label>Veuillez choisir un mois :</label>
   \t <br/>
\t<select name=\"Mois\" id=\"mois\">
\t<option value=\"01\">Janvier</option>
\t<option value=\"02\">Février</option>
\t<option value=\"03\">Mars</option>
\t<option value=\"04\">Avril</option>
\t<option value=\"05\">Maï</option>
\t<option value=\"06\">Juin</option>
\t<option value=\"07\">Juillet</option>
\t<option value=\"08\">Août</option>
\t<option value=\"09\">Septembre</option>
\t<option value=\"10\">Octobre</option>
\t<option value=\"11\">Novembre</option>
\t<option value=\"12\">Décembre</option>
\t</select>
\t<br/>
\t<br/>
\t";
        // line 133
        if (((isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 133, $this->source); })()) != null)) {
            // line 134
            echo "  \t<h2>Fiche frais</h2>
    <table>
    <thead>
   \t     <th>Mois</th>
   \t\t <th>Justificatifs</th>
   \t\t <th>Montant validé</th>
   \t\t <th>Date de modification</th>
   \t </thead>
   \t <tr>
   \t\t <td>";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 143, $this->source); })()), "id", [], "any", false, false, false, 143), "html", null, true);
            echo "</td>
   \t\t <td>";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 144, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 144), "html", null, true);
            echo "</td>
   \t\t <td>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 145, $this->source); })()), "montantValide", [], "any", false, false, false, 145), "html", null, true);
            echo "</td>
   \t\t <td>";
            // line 146
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 146, $this->source); })()), "dateModif", [], "any", false, false, false, 146), "d-m-Y"), "html", null, true);
            echo "</td>
   \t </tr>
   \t </table>
   \t <br/>
   \t <h2>Ligne frais hors forfait</h2>
   \t <table>
   \t <thead>
   \t\t <th>Date</th>
   \t\t <th>Montant</th>
   \t\t <th>Libelle</th>
   \t </thead>
   \t ";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fraisH"]) || array_key_exists("fraisH", $context) ? $context["fraisH"] : (function () { throw new RuntimeError('Variable "fraisH" does not exist.', 157, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["FHF"]) {
                // line 158
                echo "   \t\t ";
                if (($context["FHF"] != null)) {
                    // line 159
                    echo "   \t\t\t <tr>
   \t\t\t\t <td>";
                    // line 160
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "date", [], "any", false, false, false, 160), "d-m-Y"), "html", null, true);
                    echo "</td>
   \t\t\t\t <td>";
                    // line 161
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "montant", [], "any", false, false, false, 161), "html", null, true);
                    echo "</td>
   \t\t\t\t <td>";
                    // line 162
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "libelle", [], "any", false, false, false, 162), "html", null, true);
                    echo "</td>
   \t\t\t\t <td>
   \t\t\t\t <div class=\"box\">
\t\t\t\t\t<a class=\"button\" onclick=\"openForm()\" href=\"#popup2\">Refuser</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"popup2\" class=\"overlay\">
\t\t\t\t\t<div class=\"popup\">
\t\t\t\t\t<h2>Confirmation</h2>
\t\t\t\t\t<a class=\"close\" href=\"#\">&times;</a>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\tEtes-vous certains de vouloir poursuivre l'action suivante ?
\t\t\t\t\t</div>
    \t\t\t\t<br/>
    \t\t\t\t<button type=\"submit\" name=\"Refuser\" value=\"";
                    // line 176
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "id", [], "any", false, false, false, 176), "html", null, true);
                    echo "\">Oui</button>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
   \t\t\t\t </td>
   \t\t\t\t ";
                    // line 180
                    if (!twig_in_filter("REFUSE", twig_get_attribute($this->env, $this->source, $context["FHF"], "libelle", [], "any", false, false, false, 180))) {
                        // line 181
                        echo "   \t\t\t\t <td> <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reporter", ["Visiteur" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FHF"], "Visiteur", [], "any", false, false, false, 181), "id", [], "any", false, false, false, 181), "FicheFrais" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FHF"], "Fichefrais", [], "any", false, false, false, 181), "id", [], "any", false, false, false, 181), "FraisHorsForfait" => twig_get_attribute($this->env, $this->source, $context["FHF"], "id", [], "any", false, false, false, 181)]), "html", null, true);
                        echo "\">Reporter</a> </td>
   \t\t\t     ";
                    }
                    // line 183
                    echo "   \t\t\t </tr>
   \t\t ";
                }
                // line 185
                echo "   \t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FHF'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "   \t </form>
   \t </table>
   \t <br/>
   \t <h2>Ligne frais forfait</h2>
   \t <table>
   \t <thead>
   \t\t <th>Type</th>
   \t\t <th>Libelle</th>
   \t\t <th>Quantite</th>
   \t\t <th>Montant</th>
   \t </thead>
   \t ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fraisF"]) || array_key_exists("fraisF", $context) ? $context["fraisF"] : (function () { throw new RuntimeError('Variable "fraisF" does not exist.', 197, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["FF"]) {
                // line 198
                echo "   \t\t ";
                if (($context["FF"] != null)) {
                    // line 199
                    echo "   \t\t\t <tr>
   \t\t\t\t <td>";
                    // line 200
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fraisforfait", [], "any", false, false, false, 200), "id", [], "any", false, false, false, 200), "html", null, true);
                    echo "</td>
   \t\t\t\t <td>";
                    // line 201
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fraisforfait", [], "any", false, false, false, 201), "libelle", [], "any", false, false, false, 201), "html", null, true);
                    echo "</td>
   \t\t\t\t <td>";
                    // line 202
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FF"], "quantite", [], "any", false, false, false, 202), "html", null, true);
                    echo "</td>
   \t\t\t\t <td>";
                    // line 203
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fraisforfait", [], "any", false, false, false, 203), "montant", [], "any", false, false, false, 203), "html", null, true);
                    echo "</td>
   \t\t\t\t <td> <a href=\"";
                    // line 204
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualiser", ["Visiteur" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Visiteur", [], "any", false, false, false, 204), "id", [], "any", false, false, false, 204), "FicheFrais" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fichefrais", [], "any", false, false, false, 204), "id", [], "any", false, false, false, 204), "FraisForfait" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fraisforfait", [], "any", false, false, false, 204), "id", [], "any", false, false, false, 204)]), "html", null, true);
                    echo "\">Actualiser</a> </td>
   \t\t\t </tr>
   \t\t ";
                }
                // line 207
                echo "   \t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FF'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "   \t </table>
\t";
        }
        // line 210
        echo "\t<br/>
   \t <input type=\"submit\" value=\"Envoyer\"></input> ";
        // line 211
        if (((isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 211, $this->source); })()) != null)) {
            echo " <button><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_validée", ["Visiteur" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 211, $this->source); })()), "Visiteur", [], "any", false, false, false, 211), "id", [], "any", false, false, false, 211), "FicheFrais" => twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 211, $this->source); })()), "id", [], "any", false, false, false, 211)]), "html", null, true);
            echo "\">Valider fiche frais</a></button> ";
        }
        // line 212
        echo "    </body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comptable/valider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 212,  378 => 211,  375 => 210,  371 => 208,  365 => 207,  359 => 204,  355 => 203,  351 => 202,  347 => 201,  343 => 200,  340 => 199,  337 => 198,  333 => 197,  320 => 186,  314 => 185,  310 => 183,  304 => 181,  302 => 180,  295 => 176,  278 => 162,  274 => 161,  270 => 160,  267 => 159,  264 => 158,  260 => 157,  246 => 146,  242 => 145,  238 => 144,  234 => 143,  223 => 134,  221 => 133,  198 => 112,  187 => 110,  183 => 109,  175 => 103,  164 => 101,  160 => 100,  153 => 95,  147 => 93,  145 => 92,  141 => 91,  132 => 85,  119 => 75,  115 => 74,  40 => 1,);
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
\t.example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
\t.example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
\ttable{
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

    <head>
   \t <meta charset=\"utf-8\">
   \t <title>GSB - Frais</title>
    \t<h1>Comptable - Valider fiche frais</h1>
   \t <a href=\"{{ path('app_espace_comptable') }}\">Acceuil</a>
   \t <a href=\"{{ path('app_suivre') }}\">Suivre fiche frais</a>
   \t <a class=\"button\" onclick=\"openForm()\" href=\"#popup1\">Déconnexion</a>
   \t <div id=\"popup1\" class=\"overlay\">
   \t\t\t\t   <div class=\"popup\">
   \t\t\t\t   <h2>Confirmation</h2>
   \t\t\t\t   <a class=\"close\" href=\"#\">&times;</a>
   \t\t\t\t   <div class=\"content\">
   \t\t\t\t   Etes-vous certains de vouloir fermer la session ?
   \t\t\t\t   </div>
   \t\t\t\t   <br/>
   \t\t\t\t   <a class=\"button\" href=\"{{ path('app_comptable_deconnexion') }}\">Oui</a>
   \t\t\t </div>
   \t\t </div>
    </head>

    <body>
   \t <form action=\"{{ path('app_valider') }}\" method=\"POST\">
\t{% if erreur is defined and erreur != null %}
   \t\t\t <h5> {{ erreur }} </h5>
   \t\t {% endif %}
   \t <br/>
   \t <br/>
   \t <label>Veuillez choisir un visiteur :</label>
   \t <br/>
   \t <select name=\"Visiteur\" id=\"visiteur\">
   \t {% for visiteur in visiteurs %}
   \t\t <option value=\"{{ visiteur.id }}\">{{ visiteur.nom ~ \" \" ~ visiteur.prenom }}</option>
   \t {% endfor %}
   \t </select>
   \t <br/>
\t<br/>
   \t <label>Veuillez choisir une année :</label>
   \t <br/>
\t<select name=\"Annee\" id=\"annee\">
\t{% for i in 0..4 %}
   \t\t <option value=\"{{ annees[i] }}\">{{ annees[i] }}</option>
   \t {% endfor %}
   \t </select>
\t<br/>
\t<br/>
   \t <label>Veuillez choisir un mois :</label>
   \t <br/>
\t<select name=\"Mois\" id=\"mois\">
\t<option value=\"01\">Janvier</option>
\t<option value=\"02\">Février</option>
\t<option value=\"03\">Mars</option>
\t<option value=\"04\">Avril</option>
\t<option value=\"05\">Maï</option>
\t<option value=\"06\">Juin</option>
\t<option value=\"07\">Juillet</option>
\t<option value=\"08\">Août</option>
\t<option value=\"09\">Septembre</option>
\t<option value=\"10\">Octobre</option>
\t<option value=\"11\">Novembre</option>
\t<option value=\"12\">Décembre</option>
\t</select>
\t<br/>
\t<br/>
\t{% if fiche != null %}
  \t<h2>Fiche frais</h2>
    <table>
    <thead>
   \t     <th>Mois</th>
   \t\t <th>Justificatifs</th>
   \t\t <th>Montant validé</th>
   \t\t <th>Date de modification</th>
   \t </thead>
   \t <tr>
   \t\t <td>{{ fiche.id }}</td>
   \t\t <td>{{ fiche.nbJustificatifs }}</td>
   \t\t <td>{{ fiche.montantValide }}</td>
   \t\t <td>{{ fiche.dateModif|date('d-m-Y') }}</td>
   \t </tr>
   \t </table>
   \t <br/>
   \t <h2>Ligne frais hors forfait</h2>
   \t <table>
   \t <thead>
   \t\t <th>Date</th>
   \t\t <th>Montant</th>
   \t\t <th>Libelle</th>
   \t </thead>
   \t {% for FHF in fraisH %}
   \t\t {% if FHF != null %}
   \t\t\t <tr>
   \t\t\t\t <td>{{ FHF.date|date('d-m-Y') }}</td>
   \t\t\t\t <td>{{ FHF.montant }}</td>
   \t\t\t\t <td>{{ FHF.libelle }}</td>
   \t\t\t\t <td>
   \t\t\t\t <div class=\"box\">
\t\t\t\t\t<a class=\"button\" onclick=\"openForm()\" href=\"#popup2\">Refuser</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"popup2\" class=\"overlay\">
\t\t\t\t\t<div class=\"popup\">
\t\t\t\t\t<h2>Confirmation</h2>
\t\t\t\t\t<a class=\"close\" href=\"#\">&times;</a>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\tEtes-vous certains de vouloir poursuivre l'action suivante ?
\t\t\t\t\t</div>
    \t\t\t\t<br/>
    \t\t\t\t<button type=\"submit\" name=\"Refuser\" value=\"{{ FHF.id }}\">Oui</button>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
   \t\t\t\t </td>
   \t\t\t\t {% if 'REFUSE' not in FHF.libelle %}
   \t\t\t\t <td> <a href=\"{{ path('app_reporter', { \"Visiteur\": FHF.Visiteur.id , \"FicheFrais\": FHF.Fichefrais.id , \"FraisHorsForfait\": FHF.id }) }}\">Reporter</a> </td>
   \t\t\t     {% endif %}
   \t\t\t </tr>
   \t\t {% endif %}
   \t {% endfor %}
   \t </form>
   \t </table>
   \t <br/>
   \t <h2>Ligne frais forfait</h2>
   \t <table>
   \t <thead>
   \t\t <th>Type</th>
   \t\t <th>Libelle</th>
   \t\t <th>Quantite</th>
   \t\t <th>Montant</th>
   \t </thead>
   \t {% for FF in fraisF %}
   \t\t {% if FF != null %}
   \t\t\t <tr>
   \t\t\t\t <td>{{ FF.Fraisforfait.id }}</td>
   \t\t\t\t <td>{{ FF.Fraisforfait.libelle  }}</td>
   \t\t\t\t <td>{{ FF.quantite }}</td>
   \t\t\t\t <td>{{ FF.Fraisforfait.montant }}</td>
   \t\t\t\t <td> <a href=\"{{ path('app_actualiser', { \"Visiteur\": FF.Visiteur.id , \"FicheFrais\": FF.Fichefrais.id , \"FraisForfait\": FF.Fraisforfait.id }) }}\">Actualiser</a> </td>
   \t\t\t </tr>
   \t\t {% endif %}
   \t {% endfor %}
   \t </table>
\t{% endif %}
\t<br/>
   \t <input type=\"submit\" value=\"Envoyer\"></input> {% if fiche != null %} <button><a href=\"{{ path('app_validée', { \"Visiteur\": fiche.Visiteur.id , \"FicheFrais\": fiche.id }) }}\">Valider fiche frais</a></button> {% endif %}
    </body>

</html>
", "comptable/valider.html.twig", "/home/developpeur/GSB-AF/templates/comptable/valider.html.twig");
    }
}
