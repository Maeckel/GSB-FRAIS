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

/* comptable/reporter.html.twig */
class __TwigTemplate_38b9ad6cbfa996d13aec0062b4fcd335 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/reporter.html.twig"));

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

<head>
\t<meta charset=\"utf-8\">
\t<title>GSB - Frais</title>
    <h1>Comptable - Valider fiche frais</h1>
    <h2>Comptable - Reporter frais hors forfait</h2>
</head>
<body>
\t<a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_valider");
        echo "\">Valider fiche frais</a>
    <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_suivre");
        echo "\">suivre fiche frais</a>
\t<a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espace_comptable");
        echo "\">Acceuil</a>
\t<a class=\"button\" onclick=\"openForm()\" href=\"#popup1\">Déconnexion</a>
\t\t<div id=\"popup1\" class=\"overlay\">
\t\t\t\t\t  <div class=\"popup\">
\t\t\t\t\t  <h2>Confirmation</h2>
\t\t\t\t\t  <a class=\"close\" href=\"#\">&times;</a>
\t\t\t\t\t  <div class=\"content\">
\t\t\t\t\t  Etes-vous certains de vouloir fermer la session ?
\t\t\t\t\t  </div>
    \t\t\t\t  <br/>
    \t\t\t\t  <a class=\"button\" href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comptable_deconnexion");
        echo "\">Oui</a>
\t\t\t\t</div>
\t\t\t</div>
    <form action=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reporter", ["Visiteur" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 92, $this->source); })()), "Visiteur", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92), "FicheFrais" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 92, $this->source); })()), "Fichefrais", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92), "FraisHorsForfait" => twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "html", null, true);
        echo "\" method=\"POST\">
    <br/>
    <label>Libelle du frais hors forfait :</label>
        <br/>
\t\t<select name=\"Libelle\" id=\"libelle\" readonly>
        \t<option value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 97, $this->source); })()), "libelle", [], "any", false, false, false, 97), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 97, $this->source); })()), "libelle", [], "any", false, false, false, 97), "html", null, true);
        echo "</option>
        </select>
        <br/>
        <br/>
        <br/>
        <label>Date d'engagement du frais hors forfait :</label>
        <br/>
        <input type=\"date\" id=\"Date\" name=\"date\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 104, $this->source); })()), "date", [], "any", false, false, false, 104), "Y-m-d"), "html", null, true);
        echo "\" readonly>
        <br/>
        <br/>
        <br/>
        <label>Montant du frais hors forfait :</label>
        <br/>
        <input type=\"number\" id=\"Montant\" name=\"montant\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 110, $this->source); })()), "montant", [], "any", false, false, false, 110), "html", null, true);
        echo "\" readonly>
        <br/>
        <br/>
        <br/>
        <input type=\"submit\" value=\"Valider\" />
        </form>
\t</body>

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comptable/reporter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 110,  165 => 104,  153 => 97,  145 => 92,  139 => 89,  126 => 79,  122 => 78,  118 => 77,  40 => 1,);
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

<head>
\t<meta charset=\"utf-8\">
\t<title>GSB - Frais</title>
    <h1>Comptable - Valider fiche frais</h1>
    <h2>Comptable - Reporter frais hors forfait</h2>
</head>
<body>
\t<a href=\"{{ path('app_valider') }}\">Valider fiche frais</a>
    <a href=\"{{ path('app_suivre') }}\">suivre fiche frais</a>
\t<a href=\"{{ path('app_espace_comptable') }}\">Acceuil</a>
\t<a class=\"button\" onclick=\"openForm()\" href=\"#popup1\">Déconnexion</a>
\t\t<div id=\"popup1\" class=\"overlay\">
\t\t\t\t\t  <div class=\"popup\">
\t\t\t\t\t  <h2>Confirmation</h2>
\t\t\t\t\t  <a class=\"close\" href=\"#\">&times;</a>
\t\t\t\t\t  <div class=\"content\">
\t\t\t\t\t  Etes-vous certains de vouloir fermer la session ?
\t\t\t\t\t  </div>
    \t\t\t\t  <br/>
    \t\t\t\t  <a class=\"button\" href=\"{{ path('app_comptable_deconnexion') }}\">Oui</a>
\t\t\t\t</div>
\t\t\t</div>
    <form action=\"{{ path('app_reporter', { \"Visiteur\": frais.Visiteur.id , \"FicheFrais\": frais.Fichefrais.id , \"FraisHorsForfait\": frais.id }) }}\" method=\"POST\">
    <br/>
    <label>Libelle du frais hors forfait :</label>
        <br/>
\t\t<select name=\"Libelle\" id=\"libelle\" readonly>
        \t<option value=\"{{ frais.libelle }}\">{{ frais.libelle }}</option>
        </select>
        <br/>
        <br/>
        <br/>
        <label>Date d'engagement du frais hors forfait :</label>
        <br/>
        <input type=\"date\" id=\"Date\" name=\"date\" value=\"{{ frais.date|date('Y-m-d') }}\" readonly>
        <br/>
        <br/>
        <br/>
        <label>Montant du frais hors forfait :</label>
        <br/>
        <input type=\"number\" id=\"Montant\" name=\"montant\" value=\"{{ frais.montant }}\" readonly>
        <br/>
        <br/>
        <br/>
        <input type=\"submit\" value=\"Valider\" />
        </form>
\t</body>

</html>", "comptable/reporter.html.twig", "/home/developpeur/GSB-AF/templates/comptable/reporter.html.twig");
    }
}
