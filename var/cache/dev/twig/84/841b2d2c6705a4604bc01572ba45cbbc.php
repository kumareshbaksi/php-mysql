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

/* form/forget-password.html.twig */
class __TwigTemplate_5d07a0f595a9a1c34e6962e4f313697b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/forget-password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/forget-password.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "form/forget-password.html.twig", 1);
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
\t\t\t\t\t<form id=\"userDetails\" action=\"/resetpassword\" method=\"POST\">
\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" class=\"form-control input_user\" value=\"\" placeholder=\"Email\" required>
\t\t\t\t\t\t</div>
            <div id=\"loader\"></div>
\t\t\t\t\t\t<div class=\"d-flex justify-content-center mt-3 login_container\">
\t\t\t\t\t\t\t<button type=\"submit\" name=\"button\" id=\"sendResetLinkBtn\" class=\"btn login_btn\">Send</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t";
        // line 32
        if (array_key_exists("msg", $context)) {
            // line 33
            echo "\t\t\t\t\t<span id=\"msg\">";
            echo twig_escape_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<div class=\"d-flex justify-content-center links\">
\t\t\t\t\t\tTry to login?
\t\t\t\t\t\t<a href=\"/login\" class=\"ml-2\">Login</a>
\t\t\t\t\t</div>
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
        return "form/forget-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 35,  118 => 33,  116 => 32,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
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
\t\t\t\t\t<form id=\"userDetails\" action=\"/resetpassword\" method=\"POST\">
\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" class=\"form-control input_user\" value=\"\" placeholder=\"Email\" required>
\t\t\t\t\t\t</div>
            <div id=\"loader\"></div>
\t\t\t\t\t\t<div class=\"d-flex justify-content-center mt-3 login_container\">
\t\t\t\t\t\t\t<button type=\"submit\" name=\"button\" id=\"sendResetLinkBtn\" class=\"btn login_btn\">Send</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t{% if msg is defined %}
\t\t\t\t\t<span id=\"msg\">{{msg}}</span>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<div class=\"d-flex justify-content-center links\">
\t\t\t\t\t\tTry to login?
\t\t\t\t\t\t<a href=\"/login\" class=\"ml-2\">Login</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}", "form/forget-password.html.twig", "/var/www/website3.com/html/templates/form/forget-password.html.twig");
    }
}
