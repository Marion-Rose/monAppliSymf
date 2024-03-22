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

/* test/hello.html.twig */
class __TwigTemplate_4899cf7e57ca3529868d3a44a1d627f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/hello.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/hello.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "test/hello.html.twig", 1);
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

        $this->displayParentBlock("title", $context, $blocks);
        echo " Page de bienvenue";
        
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
    <h2>Bienvenue à ";
        // line 6
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 6, $this->source); })())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["prenom"]) || array_key_exists("prenom", $context) ? $context["prenom"] : (function () { throw new RuntimeError('Variable "prenom" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h2> 
    test date: ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, 1680435000, "d-m-Y H:i:s"), "html", null, true);
        echo " 
     ";
        // line 8
        echo " 
    ";
        // line 9
        if (((isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new RuntimeError('Variable "age" does not exist.', 9, $this->source); })()) > 60)) {
            echo " 
    <h3>Vous êtes un senior</h3> 
    ";
        } else {
            // line 11
            echo " 
    <h3>Vous êtes un junior</h3> 
    ";
        }
        // line 13
        echo " 
    
    ";
        // line 15
        echo (isset($context["messageHtml"]) || array_key_exists("messageHtml", $context) ? $context["messageHtml"] : (function () { throw new RuntimeError('Variable "messageHtml" does not exist.', 15, $this->source); })());
        echo " 

    <turbo-frame id=\"the_frame_id\"> 
        <button> 
            <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test");
        echo "\" title=\"vers Test\">vers Test</a> 
        </button> 
    </turbo-frame> 

    ";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["monTableau"]) || array_key_exists("monTableau", $context) ? $context["monTableau"] : (function () { throw new RuntimeError('Variable "monTableau" does not exist.', 23, $this->source); })()));
        echo " 

    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["monTableau"]) || array_key_exists("monTableau", $context) ? $context["monTableau"] : (function () { throw new RuntimeError('Variable "monTableau" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["element"]) {
            echo " 
        ";
            // line 26
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $context["element"], "html", null, true);
            echo "<br/> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    ";
        // line 29
        echo " 
    <div class=\"w-25 h-25\" > 
        ";
        // line 31
        echo $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 31, $this->source); })()));
        echo " 
    </div>

    ";
        // line 34
        echo " 
   <div class=\"w-25 h-25\" > 
    ";
        // line 36
        echo $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["histo"]) || array_key_exists("histo", $context) ? $context["histo"] : (function () { throw new RuntimeError('Variable "histo" does not exist.', 36, $this->source); })()));
        echo " 
   </div>

    ";
        // line 45
        echo " 
        <div id=\"app\"> 
            <button @click=\"compteur++\"> 
                Le compteur est à {{ compteur }} 
            </button> 
        </div>
    ";
        echo " 

    <div ";
        // line 47
        echo $this->extensions['Symfony\UX\React\Twig\ReactComponentExtension']->renderReactComponent("MonComposant", ["fullName" => "Yves"]);
        echo "></div> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "test/hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 47,  177 => 45,  171 => 36,  167 => 34,  161 => 31,  157 => 29,  154 => 28,  144 => 26,  138 => 25,  133 => 23,  126 => 19,  119 => 15,  115 => 13,  110 => 11,  104 => 9,  101 => 8,  97 => 7,  91 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 
 
{% block title %}{{ parent() }} Page de bienvenue{% endblock %} 
 
{% block body %} 
    <h2>Bienvenue à {{ nom | upper }} {{ prenom }}</h2> 
    test date: {{ 1680435000 | date('d-m-Y H:i:s')}} 
     {# test de l'age du participant  #} 
    {% if age > 60 %} 
    <h3>Vous êtes un senior</h3> 
    {% else %} 
    <h3>Vous êtes un junior</h3> 
    {% endif %} 
    
    {{ messageHtml | raw }} 

    <turbo-frame id=\"the_frame_id\"> 
        <button> 
            <a href=\"{{ path('app_test') }}\" title=\"vers Test\">vers Test</a> 
        </button> 
    </turbo-frame> 

    {{ dump( monTableau) }} 

    {% for key, element in monTableau %} 
        {{key }} : {{ element }}<br/> 
    {% endfor %}

    {# incrustation du graphique Chart.js #} 
    <div class=\"w-25 h-25\" > 
        {{render_chart(chart)}} 
    </div>

    {# incrustation du graphique histogramme #} 
   <div class=\"w-25 h-25\" > 
    {{render_chart(histo)}} 
   </div>

    {% verbatim %} 
        <div id=\"app\"> 
            <button @click=\"compteur++\"> 
                Le compteur est à {{ compteur }} 
            </button> 
        </div>
    {% endverbatim %} 

    <div {{ react_component('MonComposant', { 'fullName': 'Yves' }) }}></div> 
{% endblock %} ", "test/hello.html.twig", "C:\\wamp64\\www\\monAppliSymf - Copie\\templates\\test\\hello.html.twig");
    }
}
