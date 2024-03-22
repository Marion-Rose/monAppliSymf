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

/* liste_produits/distributeurs.html.twig */
class __TwigTemplate_8f1d18c06f3978ffc2bc450abb2ae893 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste_produits/distributeurs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste_produits/distributeurs.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "liste_produits/distributeurs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
    <table class=\"table mx-auto\" border=\"2\" style=\"width:400px\" > 
        <tr> 
            <th>Distributeur</th> 
            <th> 
            <table> 
                <th width=\"120px\">Produit</th> 
                <th>Référence</th> 
            </table> 
            </th> 
        </tr> 
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["distributeurs"]) || array_key_exists("distributeurs", $context) ? $context["distributeurs"] : (function () { throw new RuntimeError('Variable "distributeurs" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["distributeur"]) {
            echo " 
            <tr> 
                <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["distributeur"], "nom", [], "any", false, false, false, 15), "html", null, true);
            echo "</td> 
                <td> 
                <table border=\"2\" style=\"background-color:grey; \"> 
            ";
            // line 18
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["distributeur"], "produits", [], "any", false, false, false, 18))) {
                echo " 
            ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["distributeur"], "produits", [], "any", false, false, false, 19));
                foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                    echo " 
                    <tr> 
                <td align=\"center\">";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 21), "html", null, true);
                    echo "</td> 
                <td align=\"center\">";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "reference", [], "any", false, false, false, 22), "numero", [], "any", false, false, false, 22), "html", null, true);
                    echo "</td> 
                    </tr> 
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo " 
            ";
            }
            // line 25
            echo " 
                    </table> 
                </td> 
            </tr> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['distributeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo " 
    </table> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "liste_produits/distributeurs.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  131 => 29,  121 => 25,  117 => 24,  108 => 22,  104 => 21,  97 => 19,  93 => 18,  87 => 15,  80 => 13,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 
{% block body %} 
    <table class=\"table mx-auto\" border=\"2\" style=\"width:400px\" > 
        <tr> 
            <th>Distributeur</th> 
            <th> 
            <table> 
                <th width=\"120px\">Produit</th> 
                <th>Référence</th> 
            </table> 
            </th> 
        </tr> 
        {% for distributeur in distributeurs %} 
            <tr> 
                <td>{{ distributeur.nom }}</td> 
                <td> 
                <table border=\"2\" style=\"background-color:grey; \"> 
            {% if distributeur.produits is not empty %} 
            {% for produit in distributeur.produits %} 
                    <tr> 
                <td align=\"center\">{{ produit.nom }}</td> 
                <td align=\"center\">{{ produit.reference.numero }}</td> 
                    </tr> 
            {% endfor %} 
            {% endif %} 
                    </table> 
                </td> 
            </tr> 
        {% endfor %} 
    </table> 
{% endblock %} ", "liste_produits/distributeurs.html.twig", "C:\\wamp64\\www\\monAppliSymf - Copie\\templates\\liste_produits\\distributeurs.html.twig");
    }
}
