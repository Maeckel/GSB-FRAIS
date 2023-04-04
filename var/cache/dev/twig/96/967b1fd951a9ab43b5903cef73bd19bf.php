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

/* comptable/validée.html.twig */
class __TwigTemplate_0e6c2076f0bb0a4aa9ef96ffc85c61ac extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/validée.html.twig"));

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
   \t    <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_valider");
        echo "\">Valider fiche frais</a>
        <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_suivre");
        echo "\">suivre fiche frais</a>
\t    <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espace_comptable");
        echo "\">Acceuil</a>
   \t    <a class=\"button\" onclick=\"openForm()\" href=\"#popup1\">Déconnexion</a>
   \t    <div id=\"popup1\" class=\"overlay\">
   \t\t\t\t   <div class=\"popup\">
   \t\t\t\t   <h2>Confirmation</h2>
   \t\t\t\t   <a class=\"close\" href=\"#\">&times;</a>
   \t\t\t\t   <div class=\"content\">
   \t\t\t\t   Etes-vous certains de vouloir fermer la session ?
   \t\t\t\t   </div>
   \t\t\t\t   <br/>
   \t\t\t\t   <a class=\"button\" href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comptable_deconnexion");
        echo "\">Oui</a>
   \t\t\t </div>
   \t\t </div>
    </head>
</br>
<body>
<form action=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_validée", ["Visiteur" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 92, $this->source); })()), "Visiteur", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92), "FicheFrais" => twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "html", null, true);
        echo "\" method=\"POST\">
<h4>";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 93, $this->source); })()), "Visiteur", [], "any", false, false, false, 93), "nom", [], "any", false, false, false, 93), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 93, $this->source); })()), "Visiteur", [], "any", false, false, false, 93), "prenom", [], "any", false, false, false, 93), "html", null, true);
        echo " </h4>
<h4>Etat de la fiche: ";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 94, $this->source); })()), "Etat", [], "any", false, false, false, 94), "libelle", [], "any", false, false, false, 94), "html", null, true);
        echo "<h4>
<h2>Fiche frais</h2>
    <table>
    <thead>
   \t <th>Mois</th>
   \t\t <th>Justificatifs</th>
   \t\t <th>Montant validé</th>
   \t\t <th>Date de modification</th>
   \t </thead>
   \t <tr>
   \t\t <td>";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104), "html", null, true);
        echo "</td>
   \t\t <td>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 105, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 105), "html", null, true);
        echo "</td>
   \t\t <td>";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 106, $this->source); })()), "montantValide", [], "any", false, false, false, 106), "html", null, true);
        echo "</td>
   \t\t <td>";
        // line 107
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 107, $this->source); })()), "dateModif", [], "any", false, false, false, 107), "d-m-Y"), "html", null, true);
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
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 118, $this->source); })()), "ligneFraisHorsForfaits", [], "any", false, false, false, 118));
        foreach ($context['_seq'] as $context["_key"] => $context["FHF"]) {
            // line 119
            echo "   \t\t ";
            if (($context["FHF"] != null)) {
                // line 120
                echo "   \t\t\t <tr>
   \t\t\t\t <td>";
                // line 121
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "date", [], "any", false, false, false, 121), "d-m-Y"), "html", null, true);
                echo "</td>
   \t\t\t\t <td>";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "montant", [], "any", false, false, false, 122), "html", null, true);
                echo "</td>
   \t\t\t\t <td>";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "libelle", [], "any", false, false, false, 123), "html", null, true);
                echo "</td>
   \t\t\t </tr>
   \t\t ";
            }
            // line 126
            echo "   \t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FHF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
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
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 138, $this->source); })()), "ligneFraisForfaits", [], "any", false, false, false, 138));
        foreach ($context['_seq'] as $context["_key"] => $context["FF"]) {
            // line 139
            echo "   \t\t ";
            if (($context["FF"] != null)) {
                // line 140
                echo "   \t\t\t <tr>
   \t\t\t\t <td>";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fraisforfait", [], "any", false, false, false, 141), "id", [], "any", false, false, false, 141), "html", null, true);
                echo "</td>
   \t\t\t\t <td>";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fraisforfait", [], "any", false, false, false, 142), "libelle", [], "any", false, false, false, 142), "html", null, true);
                echo "</td>
   \t\t\t\t <td>";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FF"], "quantite", [], "any", false, false, false, 143), "html", null, true);
                echo "</td>
   \t\t\t\t <td>";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fraisforfait", [], "any", false, false, false, 144), "montant", [], "any", false, false, false, 144), "html", null, true);
                echo "</td>
   \t\t\t </tr>
   \t\t ";
            }
            // line 147
            echo "   \t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "   \t </table>
   \t </br>
   \t ";
        // line 150
        if ((array_key_exists("erreur", $context) && ((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 150, $this->source); })()) != null))) {
            // line 151
            echo "   \t\t\t <h5> ";
            echo twig_escape_filter($this->env, (isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 151, $this->source); })()), "html", null, true);
            echo " </h5>
   \t\t\t </br>
   \t\t ";
        }
        // line 154
        echo "   \t <button><a class=\"button\" onclick=\"openForm()\" href=\"#popup2\">Valider</a></button>
\t\t<div id=\"popup2\" class=\"overlay\">
\t\t\t\t\t  <div class=\"popup\">
\t\t\t\t\t  <h2>Confirmation</h2>
\t\t\t\t\t  <a class=\"close\" href=\"#\">&times;</a>
\t\t\t\t\t  <div class=\"content\">
\t\t\t\t\t  Etes-vous certains de vouloir poursuivre l'opération suivante ?
\t\t\t\t\t  </div>
    \t\t\t\t  <br/>
    \t\t\t\t  <input type=\"submit\" value=\"Valider\"></input>
\t\t\t\t</div>
\t\t\t</div>
   \t </body>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comptable/validée.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 154,  277 => 151,  275 => 150,  271 => 148,  265 => 147,  259 => 144,  255 => 143,  251 => 142,  247 => 141,  244 => 140,  241 => 139,  237 => 138,  224 => 127,  218 => 126,  212 => 123,  208 => 122,  204 => 121,  201 => 120,  198 => 119,  194 => 118,  180 => 107,  176 => 106,  172 => 105,  168 => 104,  155 => 94,  149 => 93,  145 => 92,  136 => 86,  123 => 76,  119 => 75,  115 => 74,  40 => 1,);
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
   \t    <a href=\"{{ path('app_valider') }}\">Valider fiche frais</a>
        <a href=\"{{ path('app_suivre') }}\">suivre fiche frais</a>
\t    <a href=\"{{ path('app_espace_comptable') }}\">Acceuil</a>
   \t    <a class=\"button\" onclick=\"openForm()\" href=\"#popup1\">Déconnexion</a>
   \t    <div id=\"popup1\" class=\"overlay\">
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
</br>
<body>
<form action=\"{{ path('app_validée', { \"Visiteur\": fiche.Visiteur.id , \"FicheFrais\": fiche.id }) }}\" method=\"POST\">
<h4>{{ fiche.Visiteur.nom }} {{ fiche.Visiteur.prenom }} </h4>
<h4>Etat de la fiche: {{ fiche.Etat.libelle }}<h4>
<h2>Fiche frais</h2>
    <table>
    <thead>
   \t <th>Mois</th>
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
   \t </br>
   \t {% if erreur is defined and erreur != null %}
   \t\t\t <h5> {{ erreur }} </h5>
   \t\t\t </br>
   \t\t {% endif %}
   \t <button><a class=\"button\" onclick=\"openForm()\" href=\"#popup2\">Valider</a></button>
\t\t<div id=\"popup2\" class=\"overlay\">
\t\t\t\t\t  <div class=\"popup\">
\t\t\t\t\t  <h2>Confirmation</h2>
\t\t\t\t\t  <a class=\"close\" href=\"#\">&times;</a>
\t\t\t\t\t  <div class=\"content\">
\t\t\t\t\t  Etes-vous certains de vouloir poursuivre l'opération suivante ?
\t\t\t\t\t  </div>
    \t\t\t\t  <br/>
    \t\t\t\t  <input type=\"submit\" value=\"Valider\"></input>
\t\t\t\t</div>
\t\t\t</div>
   \t </body>", "comptable/validée.html.twig", "/home/developpeur/GSB-AF/templates/comptable/validée.html.twig");
    }
}
