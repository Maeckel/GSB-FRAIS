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

/* visiteur/editer.html.twig */
class __TwigTemplate_3a41f584a651fb2866b51869d8f63506 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/editer.html.twig"));

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
    <h2>Visiteur - Editer frais au forfait</h2>
</head>
<body>
\t<a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_renseigner");
        echo "\">Renseigner fiche frais</a>
    <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulter");
        echo "\">Consulter fiche frais</a>
\t<a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espace_visiteur");
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visiteur_deconnexion");
        echo "\">Oui</a>
\t\t\t\t</div>
\t\t\t</div>

    <form action=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frais_forfait", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 93, $this->source); })()), "Fraisforfait", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93)]), "html", null, true);
        echo "\" method=\"POST\">
    <br/>
    ";
        // line 95
        if ((array_key_exists("erreur", $context) && ((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 95, $this->source); })()) != null))) {
            // line 96
            echo "\t\t    <h5> ";
            echo twig_escape_filter($this->env, (isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 96, $this->source); })()), "html", null, true);
            echo " </h5>
\t";
        }
        // line 98
        echo "    <br/>
    <label>Type de frais forfait :</label>
    <br/>
    <input type=\"text\" name=\"Id\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 101, $this->source); })()), "Fraisforfait", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101), "html", null, true);
        echo "\" readonly/>
    <br/>
    <br/>
    <label>Libelle du frais forfait:</label>
    <br/>
    <select name=\"Libelle\" id=\"libelle\" readonly>
    <option value=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 107, $this->source); })()), "Fraisforfait", [], "any", false, false, false, 107), "libelle", [], "any", false, false, false, 107), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 107, $this->source); })()), "Fraisforfait", [], "any", false, false, false, 107), "libelle", [], "any", false, false, false, 107), "html", null, true);
        echo "</option>
\t</select>
    <br/>
    <br/>
    <label>Montant du frais forfait :</label>
    <br/>
    <input type=\"number\" name=\"Montant\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 113, $this->source); })()), "Fraisforfait", [], "any", false, false, false, 113), "montant", [], "any", false, false, false, 113), "html", null, true);
        echo "\" readonly/>
    <br/>
    <br/>
    <label>Quantite du frais forfait :</label>
    <br/>
    <input type=\"number\" name=\"Quantite\" step=\"1\" min=\"";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 118, $this->source); })()), "quantite", [], "any", false, false, false, 118), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 118, $this->source); })()), "quantite", [], "any", false, false, false, 118), "html", null, true);
        echo "\" />
    <br/>
    <br/>
    <br/>
    <input type=\"submit\" value=\"Valider\" />
    </form>
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 118,  184 => 113,  173 => 107,  164 => 101,  159 => 98,  153 => 96,  151 => 95,  146 => 93,  139 => 89,  126 => 79,  122 => 78,  118 => 77,  40 => 1,);
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
    <h2>Visiteur - Editer frais au forfait</h2>
</head>
<body>
\t<a href=\"{{ path('app_renseigner') }}\">Renseigner fiche frais</a>
    <a href=\"{{ path('app_consulter') }}\">Consulter fiche frais</a>
\t<a href=\"{{ path('app_espace_visiteur') }}\">Acceuil</a>
\t<a class=\"button\" onclick=\"openForm()\" href=\"#popup1\">Déconnexion</a>
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

    <form action=\"{{ path('app_frais_forfait', {'id': frais.Fraisforfait.id}) }}\" method=\"POST\">
    <br/>
    {% if erreur is defined and erreur != null %}
\t\t    <h5> {{ erreur }} </h5>
\t{% endif %}
    <br/>
    <label>Type de frais forfait :</label>
    <br/>
    <input type=\"text\" name=\"Id\" value=\"{{ frais.Fraisforfait.id }}\" readonly/>
    <br/>
    <br/>
    <label>Libelle du frais forfait:</label>
    <br/>
    <select name=\"Libelle\" id=\"libelle\" readonly>
    <option value=\"{{ frais.Fraisforfait.libelle }}\">{{ frais.Fraisforfait.libelle }}</option>
\t</select>
    <br/>
    <br/>
    <label>Montant du frais forfait :</label>
    <br/>
    <input type=\"number\" name=\"Montant\" value=\"{{ frais.Fraisforfait.montant }}\" readonly/>
    <br/>
    <br/>
    <label>Quantite du frais forfait :</label>
    <br/>
    <input type=\"number\" name=\"Quantite\" step=\"1\" min=\"{{ frais.quantite }}\" value=\"{{ frais.quantite }}\" />
    <br/>
    <br/>
    <br/>
    <input type=\"submit\" value=\"Valider\" />
    </form>
</body>
</html>", "visiteur/editer.html.twig", "/home/developpeur/GSB-AF/templates/visiteur/editer.html.twig");
    }
}
