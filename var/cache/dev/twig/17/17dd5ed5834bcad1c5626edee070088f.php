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

        $this->parent = $this->loadTemplate("base.html.twig", "administration/create.html.twig", 1);
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

        echo "Administration du site
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div
            class=\"d-flex justify-content-center\">
        ";
        // line 10
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 11, $this->source); })()), 'errors');
        echo "
        <div class=\"form-group\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'label');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 15
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'errors');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 19, $this->source); })()), "prix", [], "any", false, false, false, 19), 'label');
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 20, $this->source); })()), "prix", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 21
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 22, $this->source); })()), "prix", [], "any", false, false, false, 22), 'errors');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 25, $this->source); })()), "quantite", [], "any", false, false, false, 25), 'label');
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 26, $this->source); })()), "quantite", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 27
        echo "
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 28, $this->source); })()), "quantite", [], "any", false, false, false, 28), 'errors');
        echo "
        </div>
        <div class=\"form-group mt-3\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 31, $this->source); })()), "rupture", [], "any", false, false, false, 31), 'label');
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 32, $this->source); })()), "rupture", [], "any", false, false, false, 32), 'widget');
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 33, $this->source); })()), "rupture", [], "any", false, false, false, 33), 'errors');
        echo "
        </div>
        <div class=\"form-group mt-3\">
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 36, $this->source); })()), "lienImage", [], "any", false, false, false, 36), 'label');
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 37, $this->source); })()), "lienImage", [], "any", false, false, false, 37), 'widget');
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 38, $this->source); })()), "lienImage", [], "any", false, false, false, 38), 'errors');
        echo "
        </div>
        <div class=\"form-group mt-3\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 41, $this->source); })()), "reference", [], "any", false, false, false, 41), "numero", [], "any", false, false, false, 41), 'label');
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 42, $this->source); })()), "reference", [], "any", false, false, false, 42), "numero", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 43, $this->source); })()), "reference", [], "any", false, false, false, 43), "numero", [], "any", false, false, false, 43), 'errors');
        echo "
        </div>
        <div class=\"form-group mt-3\">
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 46, $this->source); })()), "distributeurs", [], "any", false, false, false, 46), 'label');
        echo "
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 47, $this->source); })()), "distributeurs", [], "any", false, false, false, 47), 'widget');
        echo "
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 48, $this->source); })()), "distributeurs", [], "any", false, false, false, 48), 'errors');
        echo "
        </div>

             <div ";
        // line 51
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("form-collection");
        echo "
                          data-form-collection-index-value=\"";
        // line 52
        (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 52, $this->source); })()), "distributeurs", [], "any", false, false, false, 52)) > 0)) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 52, $this->source); })()), "distributeurs", [], "any", false, false, false, 52)), "vars", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52) + 1), "html", null, true))) : (print (0)));
        echo "\"
                     data-form-collection-prototype-value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 53, $this->source); })()), "distributeurs", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "prototype", [], "any", false, false, false, 53), 'widget'), "html_attr");
        echo "\">
                <ul ";
        // line 54
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("form-collection", "collectionContainer");
        echo "></ul>
                <script src=\"../vers/collectionController.js\"></script>
                <button type=\"button\" ";
        // line 56
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("form-collection", "addCollectionElement");
        echo ">Ajout d'un Distributeur</button>
             </div>

        <div class=\"mt-3\">
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 60, $this->source); })()), "creer", [], "any", false, false, false, 60), 'row', ["attr" => ["class" => "btn btn-info"]]);
        echo "
        </div>
    </div>
    ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 63, $this->source); })()), 'form_end');
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
        return array (  234 => 63,  228 => 60,  221 => 56,  216 => 54,  212 => 53,  208 => 52,  204 => 51,  198 => 48,  194 => 47,  190 => 46,  184 => 43,  180 => 42,  176 => 41,  170 => 38,  166 => 37,  162 => 36,  156 => 33,  152 => 32,  148 => 31,  142 => 28,  139 => 27,  137 => 26,  133 => 25,  127 => 22,  124 => 21,  122 => 20,  118 => 19,  112 => 16,  109 => 15,  107 => 14,  103 => 13,  98 => 11,  93 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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

             <div {{ stimulus_controller('form-collection') }}
                          data-form-collection-index-value=\"{{ my_form.distributeurs|length > 0 ? my_form.distributeurs|last.vars.name + 1 : 0 }}\"
                     data-form-collection-prototype-value=\"{{ form_widget(my_form.distributeurs.vars.prototype)|e('html_attr') }}\">
                <ul {{ stimulus_target('form-collection', 'collectionContainer') }}></ul>
                <script src=\"../vers/collectionController.js\"></script>
                <button type=\"button\" {{ stimulus_action('form-collection', 'addCollectionElement') }}>Ajout d'un Distributeur</button>
             </div>

        <div class=\"mt-3\">
            {{ form_row(my_form.creer, {'attr': { 'class':'btn btn-info'}}) }}
        </div>
    </div>
    {{ form_end(my_form) }}
{% endblock %}", "administration/create.html.twig", "C:\\wamp64\\www\\monAppliSymf\\templates\\administration\\create.html.twig");
    }
}
