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

/* form/reset-your-password.html.twig */
class __TwigTemplate_251c16fa6775c31e17ab28bf72022353 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/reset-your-password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/reset-your-password.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "form/reset-your-password.html.twig", 1);
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

        echo "Home
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
        echo "
\t<div class=\"container h-100\">
\t\t<div class=\"d-flex justify-content-center h-100\">
\t\t\t<div class=\"user_card\">
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<div class=\"brand_logo_container\">
\t\t\t\t\t\t<img src=\"https://static.vecteezy.com/system/resources/previews/011/571/519/original/circle-flag-of-india-free-png.png\" class=\"brand_logo\" alt=\"Logo\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex justify-content-center form_container\">
\t\t\t\t\t<form id=\"frm\" action=\"/resetyourpassword\" method=\"POST\">
\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-key\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"password\" id=\"firstpassword\" name=\"password\" class=\"form-control input_user\" value=\"\" placeholder=\"New Password\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-key\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"password\" id=\"secondpassword\" name=\"newpassword\" class=\"form-control input_user\" value=\"\" placeholder=\"Repeat New Password\">
\t\t\t\t\t\t</div>
            ";
        // line 35
        echo "\t\t\t\t\t\t";
        if (array_key_exists("msg", $context)) {
            // line 36
            echo "\t\t\t\t\t\t\t<a href=\"/home?edit=1\">";
            echo twig_escape_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 38
        echo "            ";
        if (array_key_exists("error", $context)) {
            // line 39
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t\t<div class=\"d-flex justify-content-center mt-3 login_container\">
\t\t\t\t\t\t\t<button type=\"submit\" name=\"button\" class=\"btn login_btn\">Save</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "form/reset-your-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 41,  130 => 39,  127 => 38,  121 => 36,  118 => 35,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home
{% endblock %}

{% block body %}

\t<div class=\"container h-100\">
\t\t<div class=\"d-flex justify-content-center h-100\">
\t\t\t<div class=\"user_card\">
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<div class=\"brand_logo_container\">
\t\t\t\t\t\t<img src=\"https://static.vecteezy.com/system/resources/previews/011/571/519/original/circle-flag-of-india-free-png.png\" class=\"brand_logo\" alt=\"Logo\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex justify-content-center form_container\">
\t\t\t\t\t<form id=\"frm\" action=\"/resetyourpassword\" method=\"POST\">
\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-key\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"password\" id=\"firstpassword\" name=\"password\" class=\"form-control input_user\" value=\"\" placeholder=\"New Password\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-key\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"password\" id=\"secondpassword\" name=\"newpassword\" class=\"form-control input_user\" value=\"\" placeholder=\"Repeat New Password\">
\t\t\t\t\t\t</div>
            {# <div id=\"loader\" class=\"center\"></div> #}
\t\t\t\t\t\t{% if msg is defined %}
\t\t\t\t\t\t\t<a href=\"/home?edit=1\">{{msg}}</a>
\t\t\t\t\t\t{% endif %}
            {% if error is defined %}
\t\t\t\t\t\t\t{{error}}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<div class=\"d-flex justify-content-center mt-3 login_container\">
\t\t\t\t\t\t\t<button type=\"submit\" name=\"button\" class=\"btn login_btn\">Save</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "form/reset-your-password.html.twig", "/var/www/website3.com/html/templates/form/reset-your-password.html.twig");
    }
}
