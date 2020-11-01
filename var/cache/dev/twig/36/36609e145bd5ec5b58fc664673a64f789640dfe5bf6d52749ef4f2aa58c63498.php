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

/* page.html.twig */
class __TwigTemplate_a2b7b8d3cdff41428d22c8037640c5e109996430bfb4f239a73ce8bf9afcb766 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " symvoice ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo " <nav class=\"navbar navbar-dark bg-primary\" style=\"background-color: #e3f2fd;\">
<h1 class=\"navbar-brand\">Symvoice</h1>
</nav>
<div class=\"container\">
 <form action=\"/invoice.dom/lines_invoice\" method=\"POST\">
 ";
        // line 10
        echo " ";
        if (((isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 10, $this->source); })()) == 1)) {
            // line 11
            echo " <p>Pleas enter all dates:</p>
 <label for=\"date\">Date:</label>
 <input type=\"date\" name=\"date\" class=\"form-control\" id=\"exampleFormControlInput1\" required>
 <label for=\"number_invoice\">
 Number invoice:
 </label>
 <input type=\"text\" name=\"number_invoice\" class=\"form-control\" id=\"exampleFormControlInput1\" required>
 <label for=\"id_client\"> id client:</label>
 <input type=\"number\" name=\"id_client\" class=\"form-control\" id=\"exampleFormControlInput1\" min=\"1\" required>
 <input type='submit' name='submit1' class=\"btn btn-primary\">
 <input type='reset' name='reset' class=\"btn btn-danger\">
  </form>
 ";
        }
        // line 25
        if (((isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 25, $this->source); })()) == 2)) {
            // line 26
            echo "<form action=\"/invoice.dom/lines_invoice?saved\" method=\"POST\">
<p>Pleas enter all dates:</p>
<label for=\"id_invoice\">Id_invoice:</label>
 <input type=\"number\" name=\"id_invoice\"  value=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control\" id=\"exampleFormControlInput1\" readonly required>
    <label for =\"description\">description</label>
    <textarea name='description' rows='4' cols='50' class=\"form-control\" id=\"exampleFormControlInput1\" required></textarea>
     <label for='quantity'>quantity</label>
    <input type='number' name='quantity' class=\"form-control\" id=\"exampleFormControlInput1\"  min=\"1\" max=\"200\" required>
     <label for='amount'>
              amount
            </label>
            <input type='number' name='amount' class=\"form-control\" id=\"exampleFormControlInput1\"  step=\"0.01\" min=\"1\" required>
             <label for='iva'>
              iva
            </label>
            <input type='number' name='iva' class=\"form-control\" id=\"exampleFormControlInput1\"  step=\"0.01\" min=\"1\" required>
             <label for='total_amount'>
             total amount
            </label>
            <input type='number' name='total_amount' class=\"form-control\" id=\"exampleFormControlInput1\"  step=\"0.01\" min=\"1\" required>
            <input type='submit' name='submit2' class=\"btn btn-primary\">
            <input type='reset' name='reset' class=\"btn btn-danger\">
            </form>
";
        }
        // line 50
        if (((isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 50, $this->source); })()) == 3)) {
            // line 51
            echo "<p style=\"background-color:green;\">invoice was registred successfully</p>
<form>
<label for=\"return_button\">To registred another invoice pleas click the button</label>
<input type=\"submit\" name=\"return_button\" value=\"registred other invoice\"  class=\"btn btn-primary\">
</form>
";
        }
        // line 57
        echo "</div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 57,  131 => 51,  129 => 50,  105 => 29,  100 => 26,  98 => 25,  83 => 11,  80 => 10,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} symvoice {% endblock %}
 {% block body %}
 <nav class=\"navbar navbar-dark bg-primary\" style=\"background-color: #e3f2fd;\">
<h1 class=\"navbar-brand\">Symvoice</h1>
</nav>
<div class=\"container\">
 <form action=\"/invoice.dom/lines_invoice\" method=\"POST\">
 {# First session for insert invoice table values #}
 {% if  session == 1 %}
 <p>Pleas enter all dates:</p>
 <label for=\"date\">Date:</label>
 <input type=\"date\" name=\"date\" class=\"form-control\" id=\"exampleFormControlInput1\" required>
 <label for=\"number_invoice\">
 Number invoice:
 </label>
 <input type=\"text\" name=\"number_invoice\" class=\"form-control\" id=\"exampleFormControlInput1\" required>
 <label for=\"id_client\"> id client:</label>
 <input type=\"number\" name=\"id_client\" class=\"form-control\" id=\"exampleFormControlInput1\" min=\"1\" required>
 <input type='submit' name='submit1' class=\"btn btn-primary\">
 <input type='reset' name='reset' class=\"btn btn-danger\">
  </form>
 {% endif %}
{# second session for insert invoice_lines table values #}
{% if session ==2 %}
<form action=\"/invoice.dom/lines_invoice?saved\" method=\"POST\">
<p>Pleas enter all dates:</p>
<label for=\"id_invoice\">Id_invoice:</label>
 <input type=\"number\" name=\"id_invoice\"  value=\"{{id}}\" class=\"form-control\" id=\"exampleFormControlInput1\" readonly required>
    <label for =\"description\">description</label>
    <textarea name='description' rows='4' cols='50' class=\"form-control\" id=\"exampleFormControlInput1\" required></textarea>
     <label for='quantity'>quantity</label>
    <input type='number' name='quantity' class=\"form-control\" id=\"exampleFormControlInput1\"  min=\"1\" max=\"200\" required>
     <label for='amount'>
              amount
            </label>
            <input type='number' name='amount' class=\"form-control\" id=\"exampleFormControlInput1\"  step=\"0.01\" min=\"1\" required>
             <label for='iva'>
              iva
            </label>
            <input type='number' name='iva' class=\"form-control\" id=\"exampleFormControlInput1\"  step=\"0.01\" min=\"1\" required>
             <label for='total_amount'>
             total amount
            </label>
            <input type='number' name='total_amount' class=\"form-control\" id=\"exampleFormControlInput1\"  step=\"0.01\" min=\"1\" required>
            <input type='submit' name='submit2' class=\"btn btn-primary\">
            <input type='reset' name='reset' class=\"btn btn-danger\">
            </form>
{% endif %}
{% if session==3 %}
<p style=\"background-color:green;\">invoice was registred successfully</p>
<form>
<label for=\"return_button\">To registred another invoice pleas click the button</label>
<input type=\"submit\" name=\"return_button\" value=\"registred other invoice\"  class=\"btn btn-primary\">
</form>
{%  endif %}
</div>
 {% endblock %}
", "page.html.twig", "C:\\xampp\\htdocs\\symvoice\\templates\\page.html.twig");
    }
}
