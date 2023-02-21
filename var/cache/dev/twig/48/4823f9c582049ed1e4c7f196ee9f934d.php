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

/* form/register.html.twig */
class __TwigTemplate_1dd9fe2ab8c9455a29597b8f00a0400d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "form/register.html.twig", 1);
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
\t\t\t\t";
        // line 16
        if (array_key_exists("flag", $context)) {
            // line 17
            echo "\t\t\t\t\t<div class=\"verifyOtp\">
\t\t\t\t\t\t<div class=\"mb-3 title\">
\t\t\t\t\t\t\tVerify OTP
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form action=\"/confirmaccount\" id=\"userDetails\" method=\"POST\" class=\"mb-3\">
\t\t\t\t\t\t\t<input class=\"otp\" name=\"1\" type=\"text\" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=\"1\">
\t\t\t\t\t\t\t<input class=\"otp\" name=\"2\" type=\"text\" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=\"1\">
\t\t\t\t\t\t\t<input class=\"otp\" name=\"3\" type=\"text\" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=\"1\">
\t\t\t\t\t\t\t<input class=\"otp\" name=\"4\" type=\"text\" oninput='digitValidate(this)' onkeyup='tabChange(4)' maxlength=\"1\">
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<button type=\"submit\" value=\"Submit\" form=\"userDetails\" class='btn btn-primary btn-block mb-4 customBtn'>Verify</button>
\t\t\t\t\t\t<a href=\"/resendotp\">Send again</a>
\t\t\t\t\t</div>

\t\t\t\t";
        } else {
            // line 32
            echo "\t\t\t\t\t";
            // line 33
            echo "\t\t\t\t\t<div class=\"d-flex justify-content-center form_container\">
\t\t\t\t\t\t<form id=\"userDetails\" action=\"/register\" method=\"POST\">
\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" class=\"form-control input_user\" value=\"\" placeholder=\"Username\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control input_user\" value=\"\" placeholder=\"Email\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-group mb-2\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-key\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control input_pass\" value=\"\" placeholder=\"Password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center mt-3 login_container\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn login_btn\" id=\"sendResetLinkBtn\">Register</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div id=\"loader\" class=\"center\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-center links\">
\t\t\t\t\t\t\tAlready have an account?
\t\t\t\t\t\t\t<a href=\"/login\" class=\"ml-2\">Login</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 72
            echo "\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t";
        if (array_key_exists("msg", $context)) {
            // line 74
            echo "\t\t\t\t\t<span id=\"msg\">";
            echo twig_escape_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 74, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t\t";
        }
        // line 76
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "form/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 76,  167 => 74,  164 => 73,  161 => 72,  121 => 33,  119 => 32,  102 => 17,  100 => 16,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
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
\t\t\t\t{% if flag is defined %}
\t\t\t\t\t<div class=\"verifyOtp\">
\t\t\t\t\t\t<div class=\"mb-3 title\">
\t\t\t\t\t\t\tVerify OTP
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form action=\"/confirmaccount\" id=\"userDetails\" method=\"POST\" class=\"mb-3\">
\t\t\t\t\t\t\t<input class=\"otp\" name=\"1\" type=\"text\" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=\"1\">
\t\t\t\t\t\t\t<input class=\"otp\" name=\"2\" type=\"text\" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=\"1\">
\t\t\t\t\t\t\t<input class=\"otp\" name=\"3\" type=\"text\" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=\"1\">
\t\t\t\t\t\t\t<input class=\"otp\" name=\"4\" type=\"text\" oninput='digitValidate(this)' onkeyup='tabChange(4)' maxlength=\"1\">
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<button type=\"submit\" value=\"Submit\" form=\"userDetails\" class='btn btn-primary btn-block mb-4 customBtn'>Verify</button>
\t\t\t\t\t\t<a href=\"/resendotp\">Send again</a>
\t\t\t\t\t</div>

\t\t\t\t{% else %}
\t\t\t\t\t{# Break point #}
\t\t\t\t\t<div class=\"d-flex justify-content-center form_container\">
\t\t\t\t\t\t<form id=\"userDetails\" action=\"/register\" method=\"POST\">
\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" class=\"form-control input_user\" value=\"\" placeholder=\"Username\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control input_user\" value=\"\" placeholder=\"Email\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-group mb-2\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-key\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control input_pass\" value=\"\" placeholder=\"Password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center mt-3 login_container\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn login_btn\" id=\"sendResetLinkBtn\">Register</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div id=\"loader\" class=\"center\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-center links\">
\t\t\t\t\t\t\tAlready have an account?
\t\t\t\t\t\t\t<a href=\"/login\" class=\"ml-2\">Login</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{# break poient #}
\t\t\t\t{% endif %}
\t\t\t\t{% if msg is defined %}
\t\t\t\t\t<span id=\"msg\">{{msg}}</span>
\t\t\t\t{% endif %}

\t\t\t</div>
\t\t</div>
\t</div>
</div>

{% endblock %}", "form/register.html.twig", "/var/www/website3.com/html/templates/form/register.html.twig");
    }
}
