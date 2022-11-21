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

/* visiteur/ficheFraisVisiteur.html.twig */
class __TwigTemplate_d270842da37b393ccb2ffe33c8d4fbd1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/ficheFraisVisiteur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/ficheFraisVisiteur.html.twig"));

        // line 1
        echo "<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>GSB Frais - Connexion</title>
    </head>
    <body>
        <form action=\"./FicheDeFraisController\" method=\"GET\">
            <table>
                <tbody>
                    <tr>
                        <td>Forfait Etape</td>
                        <td> <input type=\"number\" placeholder=\"0\" name=\"frais\"required> </td>
                    </tr>


                    ";
        // line 34
        echo "                </tbody>
            </table>    
            <input type=\"submit\" id='submit' value=\"Soumettre\" >
        </form>

    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/ficheFraisVisiteur.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 34,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>GSB Frais - Connexion</title>
    </head>
    <body>
        <form action=\"./FicheDeFraisController\" method=\"GET\">
            <table>
                <tbody>
                    <tr>
                        <td>Forfait Etape</td>
                        <td> <input type=\"number\" placeholder=\"0\" name=\"frais\"required> </td>
                    </tr>


                    {#<tr>
                        <td>Frais Kilométrique</td>
                        <td> <input type=\"number\" placeholder=\"0\" name=\"frais\"> </td>
                    </tr>


                    <tr>
                        <td>Nuitée Hôtel</td>
                        <td> <input type=\"number\" placeholder=\"0\" name=\"frais\"> </td>
                    </tr>
                    

                    <tr>
                        <td>Repas Restaurant</td>
                        <td> <input type=\"number\" placeholder=\"0\" name=\"frais\"> </td>
                    </tr>#}
                </tbody>
            </table>    
            <input type=\"submit\" id='submit' value=\"Soumettre\" >
        </form>

    </body>
</html>", "visiteur/ficheFraisVisiteur.html.twig", "/home/r-mehdi/SIO/Projet-GSB-Frais/symfony_gsb/templates/visiteur/ficheFraisVisiteur.html.twig");
    }
}
