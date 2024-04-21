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

        // line 6
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "        <a class=\"btn btn-info mb-2\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("insert");
            echo "\" >
            Insertion d'un nouveau produit
        </a>
    ";
        }
        // line 11
        echo "    <div class=\"alert alert-primary\">Réduction 20% sur le produit: 
           ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastproduit"]) || array_key_exists("lastproduit", $context) ? $context["lastproduit"] : (function () { throw new RuntimeError('Variable "lastproduit" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
        echo " 
    </div> 
 
    <div class=\"d-flex flex-row justify-content-around flex-wrap\"> 
           ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeproduits"]) || array_key_exists("listeproduits", $context) ? $context["listeproduits"] : (function () { throw new RuntimeError('Variable "listeproduits" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            echo " 
                  <div class=\"card\" style=\"width: 18rem;\"> 
    <img class=\",card-img-top\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["produit"], "lienImage", [], "any", false, false, false, 18))), "html", null, true);
            echo " 
    \"height=\"200px\" alt=\"image\"> 
                 <div class=\",card-body\"> 
                        <h5 class=\",card-title\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 21), "html", null, true);
            echo "</h5> 
                              <ul class=\"list-group list-group-flush\"> 
                              <li class=\"list-group-item\"> 
                              ";
            // line 24
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["produit"], "reference", [], "any", false, false, false, 24))) {
                echo " 
                                    Référence: 
                                          ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "reference", [], "any", false, false, false, 26), "numero", [], "any", false, false, false, 26), "html", null, true);
                echo " 
                                    ";
            }
            // line 27
            echo " 
                              </li> 
           <li class=\"list-group-item\">Distributeurs: 
                  ";
            // line 30
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["produit"], "distributeurs", [], "any", false, false, false, 30))) {
                echo " 
                  ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["produit"], "distributeurs", [], "any", false, false, false, 31));
                foreach ($context['_seq'] as $context["_key"] => $context["distributeur"]) {
                    echo " 
                         ";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["distributeur"], "nom", [], "any", false, false, false, 32), "html", null, true);
                    echo "&nbsp; 
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['distributeur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo " 
                  ";
            } else {
                // line 34
                echo " 
                         pas de distributeur joint 
                  ";
            }
            // line 36
            echo " 
           </li> 
           <li class=\"list-group-item\">Prix: 
                 ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 39), "html", null, true);
            echo " Euros</li> 
           <li class=\"list-group-item\"> 
                 ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "rupture", [], "any", false, false, false, 41)) {
                echo " 
                        <strong>Rupture de stock</strong> 
                 ";
            } else {
                // line 43
                echo " 
                        Quantité: ";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 44), "html", null, true);
                echo " 
                 ";
            }
            // line 45
            echo " 
           </li> 
    </ul> 
    <div class=\"card-body\"> 
        <a href=\"#\" class=\"btn btn-primary\">Ajouter au Panier</a>
        ";
            // line 50
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 51
                echo "            <a  class=\"btn btn-warning mt-2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\"> Editer le produit</a>
            <a class=\"btn btn-danger mt-2\" href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" > Supprimer le produit</a>
        ";
            }
            // line 54
            echo "    </div> 
</div> 
</div> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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
        return array (  222 => 57,  213 => 54,  208 => 52,  203 => 51,  201 => 50,  194 => 45,  189 => 44,  186 => 43,  180 => 41,  175 => 39,  170 => 36,  165 => 34,  161 => 33,  153 => 32,  147 => 31,  143 => 30,  138 => 27,  133 => 26,  128 => 24,  122 => 21,  116 => 18,  109 => 16,  102 => 12,  99 => 11,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 
 
{% block title %}Liste des produits{% endblock %} 
 
{% block body %}
    {% if is_granted('ROLE_ADMIN')  %}
        <a class=\"btn btn-info mb-2\" href=\"{{ path('insert') }}\" >
            Insertion d'un nouveau produit
        </a>
    {% endif %}
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
        {% if is_granted('ROLE_ADMIN')  %}
            <a  class=\"btn btn-warning mt-2\" href=\"{{ path('update', {'id': produit.id }) }}\"> Editer le produit</a>
            <a class=\"btn btn-danger mt-2\" href=\"{{ path('delete', {'id': produit.id }) }}\" > Supprimer le produit</a>
        {% endif %}
    </div> 
</div> 
</div> 
{% endfor %} 
</div> 
{% endblock %} ", "liste_produits/index.html.twig", "C:\\wamp64\\www\\monAppliSymf\\templates\\liste_produits\\index.html.twig");
    }
}
