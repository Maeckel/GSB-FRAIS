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

/* comptable/suivre.html.twig */
class __TwigTemplate_d6c3d6e76b409c047b19dfe197af7e11 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/suivre.html.twig"));

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
        <h1>Comptable - Suivre fiche frais</h1>

\t\t<a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espace_comptable");
        echo "\">Acceuil</a>
\t\t<a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_valider");
        echo "\">Valider fiche frais</a>
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
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comptable_deconnexion");
        echo "\">Oui</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t</head>
\t<body>
\t<form action=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_suivre");
        echo "\" method=\"POST\">
\t</br>
\t</br>
\t";
        // line 94
        if ((array_key_exists("erreur", $context) && ((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 94, $this->source); })()) != null))) {
            // line 95
            echo "   \t\t\t <h5> ";
            echo twig_escape_filter($this->env, (isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 95, $this->source); })()), "html", null, true);
            echo " </h5>
   \t\t ";
        }
        // line 97
        echo "   \t <label>Veuillez choisir un visiteur :</label>
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
\t</br>
\t";
        // line 132
        if (((isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 132, $this->source); })()) != null)) {
            // line 133
            echo "\t</br>
\t<fieldset>
    <legend>Choissiser un état parmi ceux proposer :</legend>
    <div>
      <input type=\"radio\" id=\"VA\" name=\"Etat\" value=\"VA\" checked>
      <label for=\"huey\">Mise en paiment</label>
    </div>
    <div>
      <input type=\"radio\" id=\"RB\" name=\"Etat\" value=\"RB\" >
      <label for=\"RB\">Remboursée</label>
    </div>
    </fieldset>
\t</br>
  \t<h2>Fiche frais</h2>
    <table>
    <thead>
   \t     <th>Mois</th>
   \t\t <th>Justificatifs</th>
   \t\t <th>Montant validé</th>
   \t\t <th>Date de modification</th>
   \t </thead>
   \t <tr>
   \t\t <td>";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 155, $this->source); })()), "id", [], "any", false, false, false, 155), "html", null, true);
            echo "</td>
   \t\t <td>";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 156, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 156), "html", null, true);
            echo "</td>
   \t\t <td>";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 157, $this->source); })()), "montantValide", [], "any", false, false, false, 157), "html", null, true);
            echo "</td>
   \t\t <td>";
            // line 158
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 158, $this->source); })()), "dateModif", [], "any", false, false, false, 158), "d-m-Y"), "html", null, true);
            echo "</td>
   \t </tr>
   \t <h4>Etat : ";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 160, $this->source); })()), "etat", [], "any", false, false, false, 160), "libelle", [], "any", false, false, false, 160), "html", null, true);
            echo "</h4>
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
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 170, $this->source); })()), "ligneFraisHorsForfaits", [], "any", false, false, false, 170));
            foreach ($context['_seq'] as $context["_key"] => $context["FHF"]) {
                // line 171
                echo "   \t\t ";
                if (($context["FHF"] != null)) {
                    // line 172
                    echo "   \t\t\t <tr>
   \t\t\t\t <td>";
                    // line 173
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "date", [], "any", false, false, false, 173), "d-m-Y"), "html", null, true);
                    echo "</td>
   \t\t\t\t <td>";
                    // line 174
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "montant", [], "any", false, false, false, 174), "html", null, true);
                    echo "</td>
   \t\t\t\t <td>";
                    // line 175
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "libelle", [], "any", false, false, false, 175), "html", null, true);
                    echo "</td>
   \t\t\t </tr>
   \t\t ";
                }
                // line 178
                echo "   \t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FHF'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
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
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 190, $this->source); })()), "ligneFraisForfaits", [], "any", false, false, false, 190));
            foreach ($context['_seq'] as $context["_key"] => $context["FF"]) {
                // line 191
                echo "   \t\t ";
                if (($context["FF"] != null)) {
                    // line 192
                    echo "   \t\t\t <tr>
   \t\t\t\t <td>";
                    // line 193
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fraisforfait", [], "any", false, false, false, 193), "id", [], "any", false, false, false, 193), "html", null, true);
                    echo "</td>
   \t\t\t\t <td>";
                    // line 194
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fraisforfait", [], "any", false, false, false, 194), "libelle", [], "any", false, false, false, 194), "html", null, true);
                    echo "</td>
   \t\t\t\t <td>";
                    // line 195
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FF"], "quantite", [], "any", false, false, false, 195), "html", null, true);
                    echo "</td>
   \t\t\t\t <td>";
                    // line 196
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fraisforfait", [], "any", false, false, false, 196), "montant", [], "any", false, false, false, 196), "html", null, true);
                    echo "</td>
   \t\t\t </tr>
   \t\t ";
                }
                // line 199
                echo "   \t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FF'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "   \t </table>
   \t ";
        }
        // line 202
        echo "\t<br/>
\t<br/>
\t<input type=\"submit\" value=\"Envoyer\">
\t</br>
\t";
        // line 206
        if (((isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 206, $this->source); })()) != null)) {
            // line 207
            echo "\t</br>
\t<div class=\"box\">
\t\t\t\t\t<button><a class=\"button\" onclick=\"openForm()\" href=\"#popup2\">Suivre</a></button>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"popup2\" class=\"overlay\">
\t\t\t\t\t<div class=\"popup\">
\t\t\t\t\t<h2>Confirmation</h2>
\t\t\t\t\t<a class=\"close\" href=\"#\">&times;</a>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\tEtes-vous certains de vouloir poursuivre l'action suivante ?
\t\t\t\t\t</div>
    \t\t\t\t<br/>
    \t\t\t\t<input type=\"submit\" name=\"Suivre\" value=Oui>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t";
        }
        // line 225
        echo "\t</form>
\t</body>
\t
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comptable/suivre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 225,  365 => 207,  363 => 206,  357 => 202,  353 => 200,  347 => 199,  341 => 196,  337 => 195,  333 => 194,  329 => 193,  326 => 192,  323 => 191,  319 => 190,  306 => 179,  300 => 178,  294 => 175,  290 => 174,  286 => 173,  283 => 172,  280 => 171,  276 => 170,  263 => 160,  258 => 158,  254 => 157,  250 => 156,  246 => 155,  222 => 133,  220 => 132,  198 => 112,  187 => 110,  183 => 109,  175 => 103,  164 => 101,  160 => 100,  155 => 97,  149 => 95,  147 => 94,  141 => 91,  133 => 86,  120 => 76,  116 => 75,  40 => 1,);
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
        <h1>Comptable - Suivre fiche frais</h1>

\t\t<a href=\"{{ path('app_espace_comptable') }}\">Acceuil</a>
\t\t<a href=\"{{ path('app_valider') }}\">Valider fiche frais</a>
\t\t<a class=\"button\" onclick=\"openForm()\" href=\"#popup1\">Déconnexion</a>
\t\t<div id=\"popup1\" class=\"overlay\">
\t\t\t\t\t  <div class=\"popup\">
\t\t\t\t\t  <h2>Confirmation</h2>
\t\t\t\t\t  <a class=\"close\" href=\"#\">&times;</a>
\t\t\t\t\t  <div class=\"content\">
\t\t\t\t\t  Etes-vous certains de vouloir fermer la session ?
\t\t\t\t\t  </div>
    \t\t\t\t  <br/>
    \t\t\t\t  <a class=\"button\" href=\"{{ path('app_comptable_deconnexion') }}\">Oui</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t</head>
\t<body>
\t<form action=\"{{ path('app_suivre') }}\" method=\"POST\">
\t</br>
\t</br>
\t{% if erreur is defined and erreur != null %}
   \t\t\t <h5> {{ erreur }} </h5>
   \t\t {% endif %}
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
\t</br>
\t{% if fiche != null %}
\t</br>
\t<fieldset>
    <legend>Choissiser un état parmi ceux proposer :</legend>
    <div>
      <input type=\"radio\" id=\"VA\" name=\"Etat\" value=\"VA\" checked>
      <label for=\"huey\">Mise en paiment</label>
    </div>
    <div>
      <input type=\"radio\" id=\"RB\" name=\"Etat\" value=\"RB\" >
      <label for=\"RB\">Remboursée</label>
    </div>
    </fieldset>
\t</br>
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
   \t <h4>Etat : {{ fiche.etat.libelle }}</h4>
   \t </table>
   \t <br/>
   \t <h2>Ligne frais hors forfait</h2>
   \t <table>
   \t <thead>
   \t\t <th>Date</th>
   \t\t <th>Montant</th>
   \t\t <th>Libelle</th>
   \t </thead>
   \t {% for FHF in fiche.ligneFraisHorsForfaits %}
   \t\t {% if FHF != null %}
   \t\t\t <tr>
   \t\t\t\t <td>{{ FHF.date|date('d-m-Y') }}</td>
   \t\t\t\t <td>{{ FHF.montant }}</td>
   \t\t\t\t <td>{{ FHF.libelle }}</td>
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
   \t {% for FF in fiche.ligneFraisForfaits %}
   \t\t {% if FF != null %}
   \t\t\t <tr>
   \t\t\t\t <td>{{ FF.Fraisforfait.id }}</td>
   \t\t\t\t <td>{{ FF.Fraisforfait.libelle  }}</td>
   \t\t\t\t <td>{{ FF.quantite }}</td>
   \t\t\t\t <td>{{ FF.Fraisforfait.montant }}</td>
   \t\t\t </tr>
   \t\t {% endif %}
   \t {% endfor %}
   \t </table>
   \t {% endif %}
\t<br/>
\t<br/>
\t<input type=\"submit\" value=\"Envoyer\">
\t</br>
\t{% if fiche != null %}
\t</br>
\t<div class=\"box\">
\t\t\t\t\t<button><a class=\"button\" onclick=\"openForm()\" href=\"#popup2\">Suivre</a></button>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"popup2\" class=\"overlay\">
\t\t\t\t\t<div class=\"popup\">
\t\t\t\t\t<h2>Confirmation</h2>
\t\t\t\t\t<a class=\"close\" href=\"#\">&times;</a>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\tEtes-vous certains de vouloir poursuivre l'action suivante ?
\t\t\t\t\t</div>
    \t\t\t\t<br/>
    \t\t\t\t<input type=\"submit\" name=\"Suivre\" value=Oui>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t{% endif %}
\t</form>
\t</body>
\t
</html>", "comptable/suivre.html.twig", "/home/developpeur/GSB-AF/templates/comptable/suivre.html.twig");
    }
}
