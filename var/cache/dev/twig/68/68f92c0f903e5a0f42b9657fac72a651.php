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

/* visiteur/new.html.twig */
class __TwigTemplate_60bd1ee3e487dec36393e434949a098b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/new.html.twig"));

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
    <h1>Visiteur - Renseigner fiche frais</h1>
    <h2>Ajouter un frais hors forfait</h2>
</head>
\t
\t<body>
\t\t<a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_renseigner");
        echo "\">Renseigner fiche frais</a>
        <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulter");
        echo "\">Consulter fiche frais</a>
\t\t<a href=\"";
        // line 80
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
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visiteur_deconnexion");
        echo "\">Oui</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t<br/>
\t\t<form action=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frais_hors_forfait");
        echo "\" method=\"POST\">
        <br/>
        ";
        // line 96
        if ((array_key_exists("erreur", $context) && ((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 96, $this->source); })()) != null))) {
            // line 97
            echo "\t\t    <h5> ";
            echo twig_escape_filter($this->env, (isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 97, $this->source); })()), "html", null, true);
            echo " </h5>
\t\t";
        }
        // line 99
        echo "        <br/>
        <label>Veuillez choisir un libelle :</label>
        <br/>
\t\t\t<select name=\"Libelle\" id=\"libelle\">
        \t<option value=\"Repas avac un spécialiste lors d'une animation\">Repas avac un specialiste lors d'une animation</option>
            <option value=\"Achat de fournitures\">Achat de fournitures</option>
            <option value=\"Reservation de salle pour conférence\">Reservation de salle pour conférence</option>
\t\t\t</select>
        <br/>
        <br/>
        <br/>
        <label>Veuillez choisir une date d'engagement :</label>
        <br/>
        <input type=\"date\" id=\"Date\" name=\"date\" onkeydown=\"return false\">
        <br/>
        <br/>
        <br/>
        <label>Veuillez choisir un montant :</label>
        <br/>
        <input type=\"number\" id=\"Montant\" step=\"0.01\" name=\"montant\" max=\"9999999999.99\" required>
        <br/>
        <br/>
        <br/>
        <input type=\"submit\" value=\"Valider\" />
        </form>
\t</body>
\t
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 99,  154 => 97,  152 => 96,  147 => 94,  140 => 90,  127 => 80,  123 => 79,  119 => 78,  40 => 1,);
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
    <h1>Visiteur - Renseigner fiche frais</h1>
    <h2>Ajouter un frais hors forfait</h2>
</head>
\t
\t<body>
\t\t<a href=\"{{ path('app_renseigner') }}\">Renseigner fiche frais</a>
        <a href=\"{{ path('app_consulter') }}\">Consulter fiche frais</a>
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
\t\t<form action=\"{{ path('app_frais_hors_forfait') }}\" method=\"POST\">
        <br/>
        {% if erreur is defined and erreur != null %}
\t\t    <h5> {{ erreur }} </h5>
\t\t{% endif %}
        <br/>
        <label>Veuillez choisir un libelle :</label>
        <br/>
\t\t\t<select name=\"Libelle\" id=\"libelle\">
        \t<option value=\"Repas avac un spécialiste lors d'une animation\">Repas avac un specialiste lors d'une animation</option>
            <option value=\"Achat de fournitures\">Achat de fournitures</option>
            <option value=\"Reservation de salle pour conférence\">Reservation de salle pour conférence</option>
\t\t\t</select>
        <br/>
        <br/>
        <br/>
        <label>Veuillez choisir une date d'engagement :</label>
        <br/>
        <input type=\"date\" id=\"Date\" name=\"date\" onkeydown=\"return false\">
        <br/>
        <br/>
        <br/>
        <label>Veuillez choisir un montant :</label>
        <br/>
        <input type=\"number\" id=\"Montant\" step=\"0.01\" name=\"montant\" max=\"9999999999.99\" required>
        <br/>
        <br/>
        <br/>
        <input type=\"submit\" value=\"Valider\" />
        </form>
\t</body>
\t
</html>", "visiteur/new.html.twig", "/home/developpeur/GSB-AF/templates/visiteur/new.html.twig");
    }
}
