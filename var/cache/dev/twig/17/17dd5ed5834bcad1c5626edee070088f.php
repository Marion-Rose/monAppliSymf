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

    // line 2
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
    <div 
            class=\"d-flex justify-content-center\"> 
            ";
        // line 8
        echo " 
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 9, $this->source); })()), 'form_start');
        echo " 
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 10, $this->source); })()), 'errors');
        echo " 
            <div class=\"form-group\"> 
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), 'label');
        echo " 
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 14
        echo " 
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'errors');
        echo " 
            </div> 
            <div class=\"form-group\"> 
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 18, $this->source); })()), "prix", [], "any", false, false, false, 18), 'label');
        echo " 
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 19, $this->source); })()), "prix", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 20
        echo " 
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 21, $this->source); })()), "prix", [], "any", false, false, false, 21), 'errors');
        echo " 
            </div> 
            <div class=\"form-group\"> 
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 24, $this->source); })()), "quantite", [], "any", false, false, false, 24), 'label');
        echo " 
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 25, $this->source); })()), "quantite", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 26
        echo " 
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 27, $this->source); })()), "quantite", [], "any", false, false, false, 27), 'errors');
        echo " 
            </div> 
            <div class=\"form-group mt-3\"> 
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 30, $this->source); })()), "rupture", [], "any", false, false, false, 30), 'label');
        echo " 
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 31, $this->source); })()), "rupture", [], "any", false, false, false, 31), 'widget');
        echo " 
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 32, $this->source); })()), "rupture", [], "any", false, false, false, 32), 'errors');
        echo " 
            </div> 
            <div class=\"form-group mt-3\"> 
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 35, $this->source); })()), "lienImage", [], "any", false, false, false, 35), 'label');
        echo " 
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 36, $this->source); })()), "lienImage", [], "any", false, false, false, 36), 'widget');
        echo " 
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 37, $this->source); })()), "lienImage", [], "any", false, false, false, 37), 'errors');
        echo " 
            </div> 
            <div class=\"mt-3\"> 
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 40, $this->source); })()), "creer", [], "any", false, false, false, 40), 'row', ["attr" => ["class" => "btn btn-info"]]);
        echo " 
            </div> 
    </div> 
    ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 43, $this->source); })()), 'form_end');
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
        return array (  184 => 43,  178 => 40,  172 => 37,  168 => 36,  164 => 35,  158 => 32,  154 => 31,  150 => 30,  144 => 27,  141 => 26,  139 => 25,  135 => 24,  129 => 21,  126 => 20,  124 => 19,  120 => 18,  114 => 15,  111 => 14,  109 => 13,  105 => 12,  100 => 10,  96 => 9,  93 => 8,  79 => 5,  59 => 2,  36 => 1,);
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
            <div class=\"mt-3\"> 
        {{ form_row(my_form.creer, {'attr': { 'class':'btn btn-info'}}) }} 
            </div> 
    </div> 
    {{ form_end(my_form) }} 
{% endblock %} ", "administration/create.html.twig", "C:\\wamp64\\www\\monAppliSymf - Copie\\templates\\administration\\create.html.twig");
    }
}
