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

/* index.html.twig */
class __TwigTemplate_7655227c089a47a8803ec43459026b325f5dfdff0ac05d7733c4a4e8450d394b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>Blog</h1>

<h2><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_create");
        echo "\">Publier un nouvel article</a></h2>

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "    <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "</h2>
    <small>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "publishedAt", [], "any", false, false, false, 11), "d/m/Y"), "html", null, true);
            echo "</small>
    <p>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>
    <small>";
            // line 13
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 13)), "html", null, true);
            echo " commentaire(s)</small>
    <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_read", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">Lire la suite</a> | <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_update", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">Modifier l'article</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
<ul>
    ";
        // line 18
        if ((1 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 18, $this->source); })()), 1))) {
            // line 19
            echo "         <li>
            <a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index", ["page" => 1]);
            echo "\">Première page</a>
        </li>
    ";
        }
        // line 23
        echo "    ";
        if ((1 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 23, $this->source); })()), 1))) {
            // line 24
            echo "         <li>
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 25, $this->source); })()) - 1)]), "html", null, true);
            echo "\">Précédent</a>
        </li>
    ";
        }
        // line 28
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["range"]) || array_key_exists("range", $context) ? $context["range"] : (function () { throw new RuntimeError('Variable "range" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 29
            echo "        <li>
            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index", ["page" => $context["p"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    ";
        if ((-1 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 33, $this->source); })()), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 33, $this->source); })())))) {
            // line 34
            echo "         <li>
            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 35, $this->source); })()) + 1)]), "html", null, true);
            echo "\">Suivant</a>
        </li>
    ";
        }
        // line 38
        echo "    ";
        if ((-1 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 38, $this->source); })()), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 38, $this->source); })())))) {
            // line 39
            echo "         <li>
            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index", ["page" => (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 40, $this->source); })())]), "html", null, true);
            echo "\">Dernière page</a>
        </li>
    ";
        }
        // line 43
        echo "</ul>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 43,  173 => 40,  170 => 39,  167 => 38,  161 => 35,  158 => 34,  155 => 33,  144 => 30,  141 => 29,  136 => 28,  130 => 25,  127 => 24,  124 => 23,  118 => 20,  115 => 19,  113 => 18,  109 => 16,  99 => 14,  95 => 13,  91 => 12,  87 => 11,  82 => 10,  78 => 9,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<h1>Blog</h1>

<h2><a href=\"{{ path(\"blog_create\") }}\">Publier un nouvel article</a></h2>

{% for post in posts %}
    <h2>{{ post.title }}</h2>
    <small>{{ post.publishedAt|date(\"d/m/Y\") }}</small>
    <p>{{ post.content }}</p>
    <small>{{ post.comments|length }} commentaire(s)</small>
    <a href=\"{{ path(\"blog_read\", { id: post.id }) }}\">Lire la suite</a> | <a href=\"{{ path(\"blog_update\", { id: post.id }) }}\">Modifier l'article</a>
{% endfor %}

<ul>
    {% if page > 1 %}
         <li>
            <a href=\"{{ path(\"index\", {page: 1}) }}\">Première page</a>
        </li>
    {% endif %}
    {% if page > 1 %}
         <li>
            <a href=\"{{ path(\"index\", {page: page - 1}) }}\">Précédent</a>
        </li>
    {% endif %}
    {% for p in range %}
        <li>
            <a href=\"{{ path(\"index\", {page: p}) }}\">{{ p }}</a>
        </li>
    {% endfor %}
    {% if page < pages %}
         <li>
            <a href=\"{{ path(\"index\", {page: page + 1}) }}\">Suivant</a>
        </li>
    {% endif %}
    {% if page < pages %}
         <li>
            <a href=\"{{ path(\"index\", {page: pages }) }}\">Dernière page</a>
        </li>
    {% endif %}
</ul>

{% endblock %}", "index.html.twig", "/Users/mathieuvandenbussche/Documents/Symfony/Blog/templates/index.html.twig");
    }
}
