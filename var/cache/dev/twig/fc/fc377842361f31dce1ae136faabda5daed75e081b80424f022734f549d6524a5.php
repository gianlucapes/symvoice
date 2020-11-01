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

/* lucky/home.html.twig */
class __TwigTemplate_a3918909e8a0cbce0df2b59e90fcd276f5ba848e54a9937276834ab229f44966 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lucky/home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<head>
<title>invoice</title>
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
</head>
<html>
 ";
        // line 7
        $context["date"] = "Date:";
        echo " 
 ";
        // line 8
        $context["number"] = "Number of invoice:";
        echo " 
 ";
        // line 9
        $context["idClient"] = "Id client:";
        echo " 
 ";
        // line 10
        $context["description"] = "Description:";
        echo " 
 ";
        // line 11
        $context["quantity"] = "Quantity:";
        echo " 
 ";
        // line 12
        $context["amount_whitout_tax"] = "Amount:";
        echo " 
 ";
        // line 13
        $context["Tax"] = "Tax:";
        echo " 
 ";
        // line 14
        $context["total"] = "Total amount:";
        echo " 
 ";
        // line 15
        $context["euro"] = "€";
        // line 16
        echo "      <body>
      <div class=\"container\">
        <form>
        <div class=\"form-group\">
        <label for=\"date\">
         ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "
        </label>
        <input type=\"date\" name=\"date\" class=\"form-control\" id=\"exampleFormControlInput1\">
         </div>
         <div class=\"form-group\">
         <label for=\"number_invoice\">
         ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "
         </label>
         <input type=\"number\" name=\"number_invoice\" class=\"form-control\" id=\"exampleFormControlInput1\">
         </div>
         <div class=\"form-group\">
         <label name=\"client_id\">";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["idClient"]) || array_key_exists("idClient", $context) ? $context["idClient"] : (function () { throw new RuntimeError('Variable "idClient" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "</label>
         <input type=\"number\" name=\"client_id\" class=\"form-control\" id=\"exampleFormControlInput1\">
         </div>
          <div class=\"form-group\">
            <label for='description'>
              ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "
              </label>
             <textarea name='description' rows='4' cols='50' class=\"form-control\" id=\"exampleFormControlInput1\" required></textarea>
          </div>
          <div class=\"form-group\">
            <label for='quantity'>";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "</label>
            <input type='number' name='quantity' class=\"form-control\" id=\"exampleFormControlInput1\">
          </div>
          <div class=\"form-group\">
            <label for ='amount'>
              ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["amount_whitout_tax"]) || array_key_exists("amount_whitout_tax", $context) ? $context["amount_whitout_tax"] : (function () { throw new RuntimeError('Variable "amount_whitout_tax" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "
            </label>
            <input type='number' name='amount' class=\"form-control\" id=\"exampleFormControlInput1\">
           <label>";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["euro"]) || array_key_exists("euro", $context) ? $context["euro"] : (function () { throw new RuntimeError('Variable "euro" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "</label> 
          </div>
          <div class=\"form-group\">
            <label for ='tax'>
              ";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["Tax"]) || array_key_exists("Tax", $context) ? $context["Tax"] : (function () { throw new RuntimeError('Variable "Tax" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "
            </label>
            <input type='number' name='tax' class=\"form-control\" id=\"exampleFormControlInput1\">
           <label>";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["euro"]) || array_key_exists("euro", $context) ? $context["euro"] : (function () { throw new RuntimeError('Variable "euro" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "</label> 
          </div>
          <div class=\"form-group\">
            <label for ='total'>
              ";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "
            </label>
            <input type='number' name='total' class=\"form-control\" id=\"exampleFormControlInput1\">
           <label>";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["euro"]) || array_key_exists("euro", $context) ? $context["euro"] : (function () { throw new RuntimeError('Variable "euro" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "</label> 
          </div>
          <input type='submit' name='submit2' class=\"btn btn-primary\">
          <input type='reset' name='reset' class=\"btn btn-danger\">
          </form>
           </div>
    </body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "lucky/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 64,  156 => 61,  149 => 57,  143 => 54,  136 => 50,  130 => 47,  122 => 42,  114 => 37,  106 => 32,  98 => 27,  89 => 21,  82 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<head>
<title>invoice</title>
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
</head>
<html>
 {%set date = 'Date:'%} 
 {%set number = 'Number of invoice:'%} 
 {%set idClient = 'Id client:'%} 
 {%set description = 'Description:'%} 
 {%set quantity = 'Quantity:'%} 
 {%set amount_whitout_tax = 'Amount:'%} 
 {%set Tax = 'Tax:'%} 
 {%set total = 'Total amount:'%} 
 {%set euro = '€'%}
      <body>
      <div class=\"container\">
        <form>
        <div class=\"form-group\">
        <label for=\"date\">
         {{date}}
        </label>
        <input type=\"date\" name=\"date\" class=\"form-control\" id=\"exampleFormControlInput1\">
         </div>
         <div class=\"form-group\">
         <label for=\"number_invoice\">
         {{number}}
         </label>
         <input type=\"number\" name=\"number_invoice\" class=\"form-control\" id=\"exampleFormControlInput1\">
         </div>
         <div class=\"form-group\">
         <label name=\"client_id\">{{idClient}}</label>
         <input type=\"number\" name=\"client_id\" class=\"form-control\" id=\"exampleFormControlInput1\">
         </div>
          <div class=\"form-group\">
            <label for='description'>
              {{description}}
              </label>
             <textarea name='description' rows='4' cols='50' class=\"form-control\" id=\"exampleFormControlInput1\" required></textarea>
          </div>
          <div class=\"form-group\">
            <label for='quantity'>{{quantity}}</label>
            <input type='number' name='quantity' class=\"form-control\" id=\"exampleFormControlInput1\">
          </div>
          <div class=\"form-group\">
            <label for ='amount'>
              {{amount_whitout_tax}}
            </label>
            <input type='number' name='amount' class=\"form-control\" id=\"exampleFormControlInput1\">
           <label>{{euro}}</label> 
          </div>
          <div class=\"form-group\">
            <label for ='tax'>
              {{Tax}}
            </label>
            <input type='number' name='tax' class=\"form-control\" id=\"exampleFormControlInput1\">
           <label>{{euro}}</label> 
          </div>
          <div class=\"form-group\">
            <label for ='total'>
              {{total}}
            </label>
            <input type='number' name='total' class=\"form-control\" id=\"exampleFormControlInput1\">
           <label>{{euro}}</label> 
          </div>
          <input type='submit' name='submit2' class=\"btn btn-primary\">
          <input type='reset' name='reset' class=\"btn btn-danger\">
          </form>
           </div>
    </body>
</html>", "lucky/home.html.twig", "C:\\xampp\\htdocs\\symvoice\\templates\\lucky\\home.html.twig");
    }
}
