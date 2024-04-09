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

/* liste_produits/index.html.twig */
class __TwigTemplate_45adb6b72bb527f63632d8a4ae164f3a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste_produits/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste_produits/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "liste_produits/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des produits";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
    <div class=\"alert alert-primary\">Réduction 20% sur le produit: 
           ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastproduit"]) || array_key_exists("lastproduit", $context) ? $context["lastproduit"] : (function () { throw new RuntimeError('Variable "lastproduit" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
        echo " 
    </div> 
 
    <div class=\"d-flex flex-row justify-content-around flex-wrap\"> 
           ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeproduits"]) || array_key_exists("listeproduits", $context) ? $context["listeproduits"] : (function () { throw new RuntimeError('Variable "listeproduits" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            echo " 
                  <div class=\"card\" style=\"width: 18rem;\"> 
    <img class=\",card-img-top\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["produit"], "lienImage", [], "any", false, false, false, 13))), "html", null, true);
            echo " 
    \"height=\"200px\" alt=\"image\"> 
                 <div class=\",card-body\"> 
                        <h5 class=\",card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5> 
                              <ul class=\"list-group list-group-flush\"> 
                              <li class=\"list-group-item\"> 
                              ";
            // line 19
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["produit"], "reference", [], "any", false, false, false, 19))) {
                echo " 
                                    Référence: 
                                          ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "reference", [], "any", false, false, false, 21), "numero", [], "any", false, false, false, 21), "html", null, true);
                echo " 
                                    ";
            }
            // line 22
            echo " 
                              </li> 
           <li class=\"list-group-item\">Distributeurs: 
                  ";
            // line 25
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["produit"], "distributeurs", [], "any", false, false, false, 25))) {
                echo " 
                  ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["produit"], "distributeurs", [], "any", false, false, false, 26));
                foreach ($context['_seq'] as $context["_key"] => $context["distributeur"]) {
                    echo " 
                         ";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["distributeur"], "nom", [], "any", false, false, false, 27), "html", null, true);
                    echo "&nbsp; 
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['distributeur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo " 
                  ";
            } else {
                // line 29
                echo " 
                         pas de distributeur joint 
                  ";
            }
            // line 31
            echo " 
           </li> 
           <li class=\"list-group-item\">Prix: 
                 ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 34), "html", null, true);
            echo " Euros</li> 
           <li class=\"list-group-item\"> 
                 ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "rupture", [], "any", false, false, false, 36)) {
                echo " 
                        <strong>Rupture de stock</strong> 
                 ";
            } else {
                // line 38
                echo " 
                        Quantité: ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 39), "html", null, true);
                echo " 
                 ";
            }
            // line 40
            echo " 
           </li> 
    </ul> 
    <div class=\"card-body\"> 
           <a href=\"#\" class=\"btn btn-primary\">Ajouter au Panier</a>
        <a class=\"btn btn-warning mt-2\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">Editer le produit</a>
        <a class=\"btn btn-danger mt-2\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" >Supprimer le produit</a>
    </div> 
</div> 
</div> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo " 
</div> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "liste_produits/index.html.twig";
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
        return array (  205 => 50,  194 => 46,  190 => 45,  183 => 40,  178 => 39,  175 => 38,  169 => 36,  164 => 34,  159 => 31,  154 => 29,  150 => 28,  142 => 27,  136 => 26,  132 => 25,  127 => 22,  122 => 21,  117 => 19,  111 => 16,  105 => 13,  98 => 11,  91 => 7,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 
 
{% block title %}Liste des produits{% endblock %} 
 
{% block body %} 
    <div class=\"alert alert-primary\">Réduction 20% sur le produit: 
           {{ lastproduit.nom }} 
    </div> 
 
    <div class=\"d-flex flex-row justify-content-around flex-wrap\"> 
           {% for produit in listeproduits %} 
                  <div class=\"card\" style=\"width: 18rem;\"> 
    <img class=\",card-img-top\" src=\"{{ asset('img/'~produit.lienImage) }} 
    \"height=\"200px\" alt=\"image\"> 
                 <div class=\",card-body\"> 
                        <h5 class=\",card-title\">{{ produit.nom }}</h5> 
                              <ul class=\"list-group list-group-flush\"> 
                              <li class=\"list-group-item\"> 
                              {% if  produit.reference is not null %} 
                                    Référence: 
                                          {{ produit.reference.numero }} 
                                    {% endif %} 
                              </li> 
           <li class=\"list-group-item\">Distributeurs: 
                  {% if produit.distributeurs is not empty %} 
                  {%for distributeur in produit.distributeurs %} 
                         {{ distributeur.nom }}&nbsp; 
                  {% endfor %} 
                  {% else %} 
                         pas de distributeur joint 
                  {% endif %} 
           </li> 
           <li class=\"list-group-item\">Prix: 
                 {{ produit.prix }} Euros</li> 
           <li class=\"list-group-item\"> 
                 {% if produit.rupture %} 
                        <strong>Rupture de stock</strong> 
                 {% else %} 
                        Quantité: {{ produit.quantite }} 
                 {% endif %} 
           </li> 
    </ul> 
    <div class=\"card-body\"> 
           <a href=\"#\" class=\"btn btn-primary\">Ajouter au Panier</a>
        <a class=\"btn btn-warning mt-2\" href=\"{{ path('update', {'id': produit.id }) }}\">Editer le produit</a>
        <a class=\"btn btn-danger mt-2\" href=\"{{ path('delete', {'id': produit.id }) }}\" >Supprimer le produit</a>
    </div> 
</div> 
</div> 
{% endfor %} 
</div> 
{% endblock %} ", "liste_produits/index.html.twig", "C:\\wamp64\\www\\monAppliSymf\\templates\\liste_produits\\index.html.twig");
    }
}
