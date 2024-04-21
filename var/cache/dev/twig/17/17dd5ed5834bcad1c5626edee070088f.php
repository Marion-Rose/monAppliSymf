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

/* administration/create.html.twig */
class __TwigTemplate_e08454f7290f481f2f98d8aad480218f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/create.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 2, $this->source); })()), ["Form/form_errors.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "administration/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Administration du site
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div
            class=\"d-flex justify-content-center\">
        ";
        // line 11
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 12, $this->source); })()), 'errors');
        echo "
        <div class=\"form-group\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'label');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 16
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), 'errors');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 20, $this->source); })()), "prix", [], "any", false, false, false, 20), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 21, $this->source); })()), "prix", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 22
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 23, $this->source); })()), "prix", [], "any", false, false, false, 23), 'errors');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 26, $this->source); })()), "quantite", [], "any", false, false, false, 26), 'label');
        echo "
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 27, $this->source); })()), "quantite", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 28
        echo "
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 29, $this->source); })()), "quantite", [], "any", false, false, false, 29), 'errors');
        echo "
        </div>
        <div class=\"form-group mt-3\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 32, $this->source); })()), "rupture", [], "any", false, false, false, 32), 'label');
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 33, $this->source); })()), "rupture", [], "any", false, false, false, 33), 'widget');
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 34, $this->source); })()), "rupture", [], "any", false, false, false, 34), 'errors');
        echo "
        </div>
        <div class=\"form-group mt-3\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 37, $this->source); })()), "lienImage", [], "any", false, false, false, 37), 'label');
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 38, $this->source); })()), "lienImage", [], "any", false, false, false, 38), 'widget');
        echo "
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 39, $this->source); })()), "lienImage", [], "any", false, false, false, 39), 'errors');
        echo "
        </div>
        <div class=\"form-group mt-3\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 42, $this->source); })()), "reference", [], "any", false, false, false, 42), "numero", [], "any", false, false, false, 42), 'label');
        echo "
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 43, $this->source); })()), "reference", [], "any", false, false, false, 43), "numero", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 44, $this->source); })()), "reference", [], "any", false, false, false, 44), "numero", [], "any", false, false, false, 44), 'errors');
        echo "
        </div>
        <div class=\"form-group mt-3\">
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 47, $this->source); })()), "distributeurs", [], "any", false, false, false, 47), 'label');
        echo "
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 48, $this->source); })()), "distributeurs", [], "any", false, false, false, 48), 'widget');
        echo "
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 49, $this->source); })()), "distributeurs", [], "any", false, false, false, 49), 'errors');
        echo "
        </div>

";
        // line 59
        echo "
        <div class=\"mt-3\">
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 61, $this->source); })()), "creer", [], "any", false, false, false, 61), 'row', ["attr" => ["class" => "btn btn-info"]]);
        echo "
        </div>
    </div>
    ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 64, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "administration/create.html.twig";
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
        return array (  217 => 64,  211 => 61,  207 => 59,  201 => 49,  197 => 48,  193 => 47,  187 => 44,  183 => 43,  179 => 42,  173 => 39,  169 => 38,  165 => 37,  159 => 34,  155 => 33,  151 => 32,  145 => 29,  142 => 28,  140 => 27,  136 => 26,  130 => 23,  127 => 22,  125 => 21,  121 => 20,  115 => 17,  112 => 16,  110 => 15,  106 => 14,  101 => 12,  96 => 11,  92 => 8,  82 => 7,  62 => 4,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% form_theme my_form with ['Form/form_errors.html.twig'] %}

{% block title %}Administration du site
{% endblock %}

{% block body %}
    <div
            class=\"d-flex justify-content-center\">
        {# {{ form(my_form) }} #}
        {{ form_start(my_form) }}
        {{ form_errors(my_form) }}
        <div class=\"form-group\">
            {{ form_label(my_form.nom) }}
            {{ form_widget(my_form.nom, {'attr':
                { 'class':'form-control'}}) }}
            {{ form_errors(my_form.nom) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(my_form.prix) }}
            {{ form_widget(my_form.prix, {'attr':
                { 'class':'form-control'}}) }}
            {{ form_errors(my_form.prix) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(my_form.quantite) }}
            {{ form_widget(my_form.quantite, {'attr':
                { 'class':'form-control'}}) }}
            {{ form_errors(my_form.quantite) }}
        </div>
        <div class=\"form-group mt-3\">
            {{ form_label(my_form.rupture) }}
            {{ form_widget(my_form.rupture) }}
            {{ form_errors(my_form.rupture) }}
        </div>
        <div class=\"form-group mt-3\">
            {{ form_label(my_form.lienImage) }}
            {{ form_widget(my_form.lienImage) }}
            {{ form_errors(my_form.lienImage) }}
        </div>
        <div class=\"form-group mt-3\">
            {{ form_label(my_form.reference.numero) }}
            {{ form_widget(my_form.reference.numero, {'attr': { 'class':'form-control'}}) }}
            {{ form_errors(my_form.reference.numero) }}
        </div>
        <div class=\"form-group mt-3\">
            {{ form_label(my_form.distributeurs) }}
            {{ form_widget(my_form.distributeurs) }}
            {{ form_errors(my_form.distributeurs) }}
        </div>

{#             <div {{ stimulus_controller('form-collection') }}#}
{#                          data-form-collection-index-value=\"{{ my_form.distributeurs|length > 0 ? my_form.distributeurs|last.vars.name + 1 : 0 }}\"#}
{#                     data-form-collection-prototype-value=\"{{ form_widget(my_form.distributeurs.vars.prototype)|e('html_attr') }}\">#}
{#                <ul {{ stimulus_target('form-collection', 'collectionContainer') }}></ul>#}
{#                <script src=\"../vers/collectionController.js\"></script>#}
{#                <button type=\"button\" {{ stimulus_action('form-collection', 'addCollectionElement') }}>Ajout d'un Distributeur</button>#}
{#             </div>#}

        <div class=\"mt-3\">
            {{ form_row(my_form.creer, {'attr': { 'class':'btn btn-info'}}) }}
        </div>
    </div>
    {{ form_end(my_form) }}
{% endblock %}", "administration/create.html.twig", "C:\\wamp64\\www\\monAppliSymf\\templates\\administration\\create.html.twig");
    }
}
