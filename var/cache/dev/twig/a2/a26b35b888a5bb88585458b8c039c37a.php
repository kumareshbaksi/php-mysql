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

/* form/view.html.twig */
class __TwigTemplate_f671ba294bcef13bc13ef03cc10be085 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "form/view.html.twig", 1);
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
        echo "\t<nav class=\"navbar navbar-expand-lg fixed-top navbar-light shadow\">
\t\t<div class=\"container\">

\t\t\t<a class=\"navbar-brand\" href=\"\">
\t\t\t\t";
        // line 11
        if (array_key_exists("msg", $context)) {
            // line 12
            echo "\t\t\t\t\t<span id=\"welcomeMsg\">";
            echo twig_escape_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t\t";
        }
        // line 14
        echo "\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div
\t\t\t\tclass=\"collapse navbar-collapse \" id=\"navbarSupportedContent\">
\t\t\t\t<!-- Margin auto left moving navbarsupported content -->
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link \" id=\"logoutBtn\" onclick=\"deleteLocalStorage()\" href=\"/logout\">Logout
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t<div class=\"container largeBox\">
\t\t<div class=\"container\">
\t\t\t<div class=\"form\">
\t\t\t\t<form id=\"userDetails\" action=\"/save\" method=\"GET\" enctype=\"multipart/form-data\">
\t\t\t\t\t<label>Full Name</label>
\t\t\t\t\t<div class=\"form-group mr-auto ml-auto   row\">
\t\t\t\t\t\t<input class=\"form-control col-sm-6 \" value=";
        // line 37
        if (array_key_exists("firstname", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["firstname"]) || array_key_exists("firstname", $context) ? $context["firstname"] : (function () { throw new RuntimeError('Variable "firstname" does not exist.', 37, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo " readonly/>

\t\t\t\t\t\t<input class=\"form-control col-sm-6 email\" value=";
        // line 39
        if (array_key_exists("lastname", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["lastname"]) || array_key_exists("lastname", $context) ? $context["lastname"] : (function () { throw new RuntimeError('Variable "lastname" does not exist.', 39, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo " readonly/>
\t\t\t\t\t</div>

\t\t\t\t\t<label for=\"ex1\">Select an Image</label>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 45
        echo "            <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "\" width=\"400px\" height=\"300px\" alt=\"image\">
\t\t\t\t\t</div>

\t\t\t\t\t<label for=\"ex1\">Marks</label>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"subject row mb-2\">
\t\t\t\t\t\t\t<textarea class=\"col-lg-6 form-control marksArea\" rows=\"10\" readonly>";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 51, $this->source); })()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["marks"]) || array_key_exists("marks", $context) ? $context["marks"] : (function () { throw new RuntimeError('Variable "marks" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- <div class=\"container\"> -->
\t\t\t\t\t<label>Contact</label>
\t\t\t\t\t<div class=\"form-group mr-auto ml-auto   row\">
\t\t\t\t\t\t<input class=\"form-control col-sm-6 phone\" value=";
        // line 57
        if (array_key_exists("phone", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 57, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo " readonly/>
\t\t\t\t\t\t<input class=\"form-control col-sm-6 email\" value=";
        // line 58
        if (array_key_exists("email", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 58, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo " type=\"email\" placeholder=\"Email\" name=\"email\" id=\"email\" readonly/>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"loader\" class=\"center\"></div>
\t\t\t\t\t";
        // line 61
        if (array_key_exists("errorMsg", $context)) {
            // line 62
            echo "\t\t\t\t\t\t<span id=\"msg\">";
            echo twig_escape_filter($this->env, (isset($context["errorMsg"]) || array_key_exists("errorMsg", $context) ? $context["errorMsg"] : (function () { throw new RuntimeError('Variable "errorMsg" does not exist.', 62, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t<button class=\"btn btn-default bg-primary mt-2\" onclick=\"window.location.href='/home?edit=0';\" >Edit</button>
\t\t\t\t\t\t<button class=\"btn btn-default bg-primary mt-2\" onclick=\"window.location.href='/download';\" >Download</button>

\t\t\t\t\t\t";
        // line 69
        echo "\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

\t<footer class=\"page-footer font-small fixed-bottom blue\">
\t\t<div class=\"footer-copyright text-center py-3\" id=\"footerBtn\">© 2023 Copyright:
\t\t\t<a href=\"/\" id=\"footerBtn\">
\t\t\t\twww.india.gov.in</a>
\t\t</div>
\t</footer>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "form/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 69,  196 => 64,  190 => 62,  188 => 61,  178 => 58,  170 => 57,  159 => 51,  149 => 45,  137 => 39,  128 => 37,  103 => 14,  97 => 12,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home
{% endblock %}

{% block body %}
\t<nav class=\"navbar navbar-expand-lg fixed-top navbar-light shadow\">
\t\t<div class=\"container\">

\t\t\t<a class=\"navbar-brand\" href=\"\">
\t\t\t\t{% if msg is defined %}
\t\t\t\t\t<span id=\"welcomeMsg\">{{msg}}</span>
\t\t\t\t{% endif %}
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div
\t\t\t\tclass=\"collapse navbar-collapse \" id=\"navbarSupportedContent\">
\t\t\t\t<!-- Margin auto left moving navbarsupported content -->
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link \" id=\"logoutBtn\" onclick=\"deleteLocalStorage()\" href=\"/logout\">Logout
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t<div class=\"container largeBox\">
\t\t<div class=\"container\">
\t\t\t<div class=\"form\">
\t\t\t\t<form id=\"userDetails\" action=\"/save\" method=\"GET\" enctype=\"multipart/form-data\">
\t\t\t\t\t<label>Full Name</label>
\t\t\t\t\t<div class=\"form-group mr-auto ml-auto   row\">
\t\t\t\t\t\t<input class=\"form-control col-sm-6 \" value={% if firstname is defined %} {{firstname}} {% endif %} readonly/>

\t\t\t\t\t\t<input class=\"form-control col-sm-6 email\" value={% if lastname is defined %} {{lastname}} {% endif %} readonly/>
\t\t\t\t\t</div>

\t\t\t\t\t<label for=\"ex1\">Select an Image</label>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{# <input class=\"form-control mt-2 mb-2 image\" accept=\"image/*\" id=\"image\" type=\"file\" name=\"image\"/> #}
            <img src=\"{{image}}\" width=\"400px\" height=\"300px\" alt=\"image\">
\t\t\t\t\t</div>

\t\t\t\t\t<label for=\"ex1\">Marks</label>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"subject row mb-2\">
\t\t\t\t\t\t\t<textarea class=\"col-lg-6 form-control marksArea\" rows=\"10\" readonly>{{subjects}},{{marks}}</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- <div class=\"container\"> -->
\t\t\t\t\t<label>Contact</label>
\t\t\t\t\t<div class=\"form-group mr-auto ml-auto   row\">
\t\t\t\t\t\t<input class=\"form-control col-sm-6 phone\" value={% if phone is defined %} {{phone}} {% endif %} readonly/>
\t\t\t\t\t\t<input class=\"form-control col-sm-6 email\" value={% if email is defined %} {{email}} {% endif %} type=\"email\" placeholder=\"Email\" name=\"email\" id=\"email\" readonly/>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"loader\" class=\"center\"></div>
\t\t\t\t\t{% if errorMsg is defined %}
\t\t\t\t\t\t<span id=\"msg\">{{errorMsg}}</span>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t<button class=\"btn btn-default bg-primary mt-2\" onclick=\"window.location.href='/home?edit=0';\" >Edit</button>
\t\t\t\t\t\t<button class=\"btn btn-default bg-primary mt-2\" onclick=\"window.location.href='/download';\" >Download</button>

\t\t\t\t\t\t{# <button class=\"btn btn-default bg-primary mt-2\" id=\"downloadBtn\">Download</button> #}
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

\t<footer class=\"page-footer font-small fixed-bottom blue\">
\t\t<div class=\"footer-copyright text-center py-3\" id=\"footerBtn\">© 2023 Copyright:
\t\t\t<a href=\"/\" id=\"footerBtn\">
\t\t\t\twww.india.gov.in</a>
\t\t</div>
\t</footer>

{% endblock %}
", "form/view.html.twig", "/var/www/website3.com/html/templates/form/view.html.twig");
    }
}
