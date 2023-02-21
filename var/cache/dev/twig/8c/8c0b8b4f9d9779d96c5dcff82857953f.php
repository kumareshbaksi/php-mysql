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

/* form/home.html.twig */
class __TwigTemplate_762643bd421a5dfd6f6f11cab9e54fbb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "form/home.html.twig", 1);
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
        // line 10
        if (array_key_exists("msg", $context)) {
            // line 11
            echo "\t\t\t\t\t<span id=\"welcomeMsg\">";
            echo twig_escape_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t\t";
        }
        // line 13
        echo "\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse \" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link \" id=\"logoutBtn\" onclick=\"deleteLocalStorage()\" href=\"/logout\">Logout
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t";
        // line 28
        if (array_key_exists("viewMode", $context)) {
            // line 29
            echo "\t\t<div class=\"container largeBox\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"form\">
\t\t\t\t\t<form id=\"userDetails\" action=\"home?edit=1\" method=\"GET\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t<label>Full Name</label>
\t\t\t\t\t\t<div class=\"form-group mr-auto ml-auto   row\">
\t\t\t\t\t\t\t<input class=\"form-control col-sm-6 \" value=";
            // line 35
            if (array_key_exists("firstname", $context)) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["firstname"]) || array_key_exists("firstname", $context) ? $context["firstname"] : (function () { throw new RuntimeError('Variable "firstname" does not exist.', 35, $this->source); })()), "html", null, true);
                echo " ";
            }
            echo " readonly/>

\t\t\t\t\t\t\t<input class=\"form-control col-sm-6 email\" value=";
            // line 37
            if (array_key_exists("lastname", $context)) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["lastname"]) || array_key_exists("lastname", $context) ? $context["lastname"] : (function () { throw new RuntimeError('Variable "lastname" does not exist.', 37, $this->source); })()), "html", null, true);
                echo " ";
            }
            echo " readonly/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<label for=\"ex1\">Select an Image</label>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<img src=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "\" width=\"400px\" height=\"300px\" alt=\"image\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<label for=\"ex1\">Marks</label>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"subject row mb-2\">
\t\t\t\t\t\t\t\t<textarea class=\"col-lg-6 form-control marksArea\" rows=\"10\" readonly>";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 48, $this->source); })()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, (isset($context["marks"]) || array_key_exists("marks", $context) ? $context["marks"] : (function () { throw new RuntimeError('Variable "marks" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<label>Contact</label>
\t\t\t\t\t\t<div class=\"form-group mr-auto ml-auto   row\">
\t\t\t\t\t\t\t<input class=\"form-control col-sm-6 phone\" value=";
            // line 53
            if (array_key_exists("phone", $context)) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 53, $this->source); })()), "html", null, true);
                echo " ";
            }
            echo " readonly/>
\t\t\t\t\t\t\t<input class=\"form-control col-sm-6 email\" value=";
            // line 54
            if (array_key_exists("email", $context)) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 54, $this->source); })()), "html", null, true);
                echo " ";
            }
            echo " type=\"email\" placeholder=\"Email\" name=\"email\" id=\"email\" readonly/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 57
            echo "\t\t\t\t\t\t";
            if (array_key_exists("errorMsg", $context)) {
                // line 58
                echo "\t\t\t\t\t\t\t<span id=\"msg\">";
                echo twig_escape_filter($this->env, (isset($context["errorMsg"]) || array_key_exists("errorMsg", $context) ? $context["errorMsg"] : (function () { throw new RuntimeError('Variable "errorMsg" does not exist.', 58, $this->source); })()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t";
            }
            // line 60
            echo "\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t<button class=\"btn btn-default bg-primary mt-2\" onclick=\"window.location.href='/home?edit=0';\">Edit</button>
\t\t\t\t\t\t\t<button class=\"btn btn-default bg-primary mt-2\" onclick=\"window.location.href='/download';\">Download</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t";
        } else {
            // line 70
            echo "
\t\t<div class=\"container largeBox\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"form\">
\t\t\t\t\t<form id=\"userDetails\" action=\"/save\" method=\"POST\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t<label>Full Name</label>
\t\t\t\t\t\t<div class=\"form-group mr-auto ml-auto   row\">
\t\t\t\t\t\t\t<input class=\"form-control col-sm-6 firstname\" onkeyup='saveValue(this);' type=\"text\" placeholder=\"First name\" name=\"firstname\" id=\"firstname\" required/>

\t\t\t\t\t\t\t<input class=\"form-control col-sm-6 lastname\" onkeyup='saveValue(this);' type=\"text\" placeholder=\"Last name\" name=\"lastname\" id=\"lastname\" required/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<label for=\"ex1\">Select an Image</label>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input class=\"form-control mt-2 mb-2 image\" accept=\"image/*\" id=\"image\" type=\"file\" name=\"image\" required/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<label for=\"ex1\">Marks</label>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"subject row mb-2\">
\t\t\t\t\t\t\t\t<textarea class=\"col-lg-6 form-control marksArea\" onkeyup='saveValue(this);' placeholder=\"Math|80\" maxlength=\"80\" minlength=\"3\" id=\"largeTextArea\" name=\"subTextArea\" rows=\"10\" required></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<label>Contact</label>
\t\t\t\t\t\t<div class=\"form-group mr-auto ml-auto   row\">
\t\t\t\t\t\t\t<input class=\"form-control col-sm-6 pnNum\" onkeyup='saveValue(this);' maxlength=\"10\" type=\"number\" placeholder=\"Phone number\" name=\"phone\" id=\"phone\"/>
\t\t\t\t\t\t\t<input class=\"form-control col-sm-6 email\" value=";
            // line 94
            if (array_key_exists("email", $context)) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 94, $this->source); })()), "html", null, true);
                echo " ";
            }
            echo " type=\"email\" placeholder=\"Email\" name=\"email\" id=\"email\" readonly/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 97
            echo "
\t\t\t\t\t\t<div id=\"loader\" class=\"center\"></div>
\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default bg-primary mt-2\" value=\"Submit\" id=\"submitBtn\" style=\"text-decoration: none;\">Submit</button>
\t\t\t\t\t\t\t<button class=\"btn btn-default bg-primary mt-2\" onclick=\"window.location.href='/home?edit=1';\">View</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
            // line 108
            echo "\t";
        }
        // line 109
        echo "
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
        return "form/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 109,  254 => 108,  242 => 97,  233 => 94,  207 => 70,  195 => 60,  189 => 58,  186 => 57,  177 => 54,  169 => 53,  159 => 48,  150 => 42,  138 => 37,  129 => 35,  121 => 29,  119 => 28,  102 => 13,  96 => 11,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
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
\t\t\t<div class=\"collapse navbar-collapse \" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link \" id=\"logoutBtn\" onclick=\"deleteLocalStorage()\" href=\"/logout\">Logout
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t{% if viewMode is defined %}
\t\t<div class=\"container largeBox\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"form\">
\t\t\t\t\t<form id=\"userDetails\" action=\"home?edit=1\" method=\"GET\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t<label>Full Name</label>
\t\t\t\t\t\t<div class=\"form-group mr-auto ml-auto   row\">
\t\t\t\t\t\t\t<input class=\"form-control col-sm-6 \" value={% if firstname is defined %} {{firstname}} {% endif %} readonly/>

\t\t\t\t\t\t\t<input class=\"form-control col-sm-6 email\" value={% if lastname is defined %} {{lastname}} {% endif %} readonly/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<label for=\"ex1\">Select an Image</label>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<img src=\"{{image}}\" width=\"400px\" height=\"300px\" alt=\"image\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<label for=\"ex1\">Marks</label>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"subject row mb-2\">
\t\t\t\t\t\t\t\t<textarea class=\"col-lg-6 form-control marksArea\" rows=\"10\" readonly>{{subjects}},{{marks}}</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<label>Contact</label>
\t\t\t\t\t\t<div class=\"form-group mr-auto ml-auto   row\">
\t\t\t\t\t\t\t<input class=\"form-control col-sm-6 phone\" value={% if phone is defined %} {{phone}} {% endif %} readonly/>
\t\t\t\t\t\t\t<input class=\"form-control col-sm-6 email\" value={% if email is defined %} {{email}} {% endif %} type=\"email\" placeholder=\"Email\" name=\"email\" id=\"email\" readonly/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# <div id=\"loader\" class=\"center\"></div> #}
\t\t\t\t\t\t{% if errorMsg is defined %}
\t\t\t\t\t\t\t<span id=\"msg\">{{errorMsg}}</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t<button class=\"btn btn-default bg-primary mt-2\" onclick=\"window.location.href='/home?edit=0';\">Edit</button>
\t\t\t\t\t\t\t<button class=\"btn btn-default bg-primary mt-2\" onclick=\"window.location.href='/download';\">Download</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t{% else %}

\t\t<div class=\"container largeBox\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"form\">
\t\t\t\t\t<form id=\"userDetails\" action=\"/save\" method=\"POST\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t<label>Full Name</label>
\t\t\t\t\t\t<div class=\"form-group mr-auto ml-auto   row\">
\t\t\t\t\t\t\t<input class=\"form-control col-sm-6 firstname\" onkeyup='saveValue(this);' type=\"text\" placeholder=\"First name\" name=\"firstname\" id=\"firstname\" required/>

\t\t\t\t\t\t\t<input class=\"form-control col-sm-6 lastname\" onkeyup='saveValue(this);' type=\"text\" placeholder=\"Last name\" name=\"lastname\" id=\"lastname\" required/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<label for=\"ex1\">Select an Image</label>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input class=\"form-control mt-2 mb-2 image\" accept=\"image/*\" id=\"image\" type=\"file\" name=\"image\" required/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<label for=\"ex1\">Marks</label>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"subject row mb-2\">
\t\t\t\t\t\t\t\t<textarea class=\"col-lg-6 form-control marksArea\" onkeyup='saveValue(this);' placeholder=\"Math|80\" maxlength=\"80\" minlength=\"3\" id=\"largeTextArea\" name=\"subTextArea\" rows=\"10\" required></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<label>Contact</label>
\t\t\t\t\t\t<div class=\"form-group mr-auto ml-auto   row\">
\t\t\t\t\t\t\t<input class=\"form-control col-sm-6 pnNum\" onkeyup='saveValue(this);' maxlength=\"10\" type=\"number\" placeholder=\"Phone number\" name=\"phone\" id=\"phone\"/>
\t\t\t\t\t\t\t<input class=\"form-control col-sm-6 email\" value={% if email is defined %} {{email}} {% endif %} type=\"email\" placeholder=\"Email\" name=\"email\" id=\"email\" readonly/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# For loader #}

\t\t\t\t\t\t<div id=\"loader\" class=\"center\"></div>
\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default bg-primary mt-2\" value=\"Submit\" id=\"submitBtn\" style=\"text-decoration: none;\">Submit</button>
\t\t\t\t\t\t\t<button class=\"btn btn-default bg-primary mt-2\" onclick=\"window.location.href='/home?edit=1';\">View</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{# break point #}
\t{% endif %}

\t<footer class=\"page-footer font-small fixed-bottom blue\">
\t\t<div class=\"footer-copyright text-center py-3\" id=\"footerBtn\">© 2023 Copyright:
\t\t\t<a href=\"/\" id=\"footerBtn\">
\t\t\t\twww.india.gov.in</a>
\t\t</div>
\t</footer>

{% endblock %}
", "form/home.html.twig", "/var/www/website3.com/html/templates/form/home.html.twig");
    }
}
