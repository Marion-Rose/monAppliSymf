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
        echo "
    ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "        <a class=\"btn btn-info mb-2\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("insert");
            echo "\" >
            Insertion d'un nouveau produit
        </a>
    ";
        }
        // line 12
        echo "
    <div class=\"alert alert-primary\">
        Réduction 20% sur le produit: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastproduit"]) || array_key_exists("lastproduit", $context) ? $context["lastproduit"] : (function () { throw new RuntimeError('Variable "lastproduit" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "html", null, true);
        echo "
    </div> 
 
    <div class=\"d-flex flex-row justify-content-around flex-wrap\"> 
           ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeproduits"]) || array_key_exists("listeproduits", $context) ? $context["listeproduits"] : (function () { throw new RuntimeError('Variable "listeproduits" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            echo " 
                  <div class=\"card border-dark mb-3\" style=\"width: 18rem;\">

                        <img class=\"card-img-top\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["produit"], "lienImage", [], "any", false, false, false, 21))), "html", null, true);
            echo " \"height=\"200px\" alt=\"image\">

                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 24), "html", null, true);
            echo "</h5>

                                <ul class=\"list-group list-group-flush\">
                                    <li class=\"list-group-item\">
                                        ";
            // line 28
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["produit"], "reference", [], "any", false, false, false, 28))) {
                // line 29
                echo "                                            Référence: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "reference", [], "any", false, false, false, 29), "numero", [], "any", false, false, false, 29), "html", null, true);
                echo "
                                        ";
            }
            // line 31
            echo "                                    </li>

                                    <li class=\"list-group-item\">Distributeurs:
                                        ";
            // line 34
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["produit"], "distributeurs", [], "any", false, false, false, 34))) {
                // line 35
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["produit"], "distributeurs", [], "any", false, false, false, 35));
                foreach ($context['_seq'] as $context["_key"] => $context["distributeur"]) {
                    // line 36
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["distributeur"], "nom", [], "any", false, false, false, 36), "html", null, true);
                    echo "&nbsp;
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['distributeur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                                        ";
            } else {
                // line 39
                echo "                                            pas de distributeur joint
                                        ";
            }
            // line 41
            echo "                                    </li>

                                    <li class=\"list-group-item\">Prix: ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 43), "html", null, true);
            echo " Euros</li>

                                    <li class=\"list-group-item\">
                                        ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "rupture", [], "any", false, false, false, 46)) {
                // line 47
                echo "                                            <strong>Rupture de stock</strong>
                                        ";
            } else {
                // line 49
                echo "                                            Quantité: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 49), "html", null, true);
                echo "
                                        ";
            }
            // line 51
            echo "                                    </li>
                                </ul>

                                <div class=\"card-body\">
                                    <a href=\"#\" class=\"btn btn-primary\">Ajouter au Panier</a>
                                    ";
            // line 56
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 57
                echo "                                        <a  class=\"btn btn-warning mt-2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\"> Editer le produit</a>
                                        <a class=\"btn btn-danger mt-2\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\" > Supprimer le produit</a>
                                    ";
            }
            // line 60
            echo "                                </div>
                            </div>
                  </div>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </div>
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
        return array (  219 => 64,  210 => 60,  205 => 58,  200 => 57,  198 => 56,  191 => 51,  185 => 49,  181 => 47,  179 => 46,  173 => 43,  169 => 41,  165 => 39,  162 => 38,  153 => 36,  148 => 35,  146 => 34,  141 => 31,  135 => 29,  133 => 28,  126 => 24,  120 => 21,  112 => 18,  105 => 14,  101 => 12,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

    <div class=\"alert alert-primary\">
        Réduction 20% sur le produit: {{ lastproduit.nom }}
    </div> 
 
    <div class=\"d-flex flex-row justify-content-around flex-wrap\"> 
           {% for produit in listeproduits %} 
                  <div class=\"card border-dark mb-3\" style=\"width: 18rem;\">

                        <img class=\"card-img-top\" src=\"{{ asset('img/'~produit.lienImage) }} \"height=\"200px\" alt=\"image\">

                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ produit.nom }}</h5>

                                <ul class=\"list-group list-group-flush\">
                                    <li class=\"list-group-item\">
                                        {% if  produit.reference is not null %}
                                            Référence: {{ produit.reference.numero }}
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

                                    <li class=\"list-group-item\">Prix: {{ produit.prix }} Euros</li>

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
