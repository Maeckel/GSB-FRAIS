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

/* visiteur/index.html.twig */
class __TwigTemplate_d574827958708231748439f7d241dd1e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>GSB - Frais</title>
        <h1>Visiteur</h1>
\t</head>
\t<body>
\t\t
\t\t<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_acceuil");
        echo "\">Acceuil</a>
\t\t<br/>
\t\t
\t\t<form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visiteur_connecter");
        echo "\" method=\"POST\">
\t\t\t<p>Identifiant :</p>
\t\t\t";
        // line 16
        if ((array_key_exists("erreur", $context) && ((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 16, $this->source); })()) != null))) {
            // line 17
            echo "\t\t\t\t<h5> ";
            echo twig_escape_filter($this->env, (isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 17, $this->source); })()), "html", null, true);
            echo " </h5>
\t\t\t";
        }
        // line 19
        echo "\t\t\t<input type=\"text\" name=\"login\" /><br/>
\t\t\tMot de passe :<br/>
\t\t\t<input type=\"password\" name=\"mdp\" /><br/>
\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\" />
\t\t</form>
\t\t
\t</body>
\t
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  65 => 17,  63 => 16,  58 => 14,  52 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>GSB - Frais</title>
        <h1>Visiteur</h1>
\t</head>
\t<body>
\t\t
\t\t<a href=\"{{ path( 'app_acceuil' ) }}\">Acceuil</a>
\t\t<br/>
\t\t
\t\t<form action=\"{{ path('app_visiteur_connecter') }}\" method=\"POST\">
\t\t\t<p>Identifiant :</p>
\t\t\t{% if erreur is defined and erreur != null %}
\t\t\t\t<h5> {{ erreur }} </h5>
\t\t\t{% endif %}
\t\t\t<input type=\"text\" name=\"login\" /><br/>
\t\t\tMot de passe :<br/>
\t\t\t<input type=\"password\" name=\"mdp\" /><br/>
\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\" />
\t\t</form>
\t\t
\t</body>
\t
</html>", "visiteur/index.html.twig", "/home/developpeur/GSB-AF/templates/visiteur/index.html.twig");
    }
}
