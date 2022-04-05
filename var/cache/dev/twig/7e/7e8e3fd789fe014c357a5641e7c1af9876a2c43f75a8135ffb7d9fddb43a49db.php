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

/* forum/show_profile.html.twig */
class __TwigTemplate_242022ba93ea2b761a203e7dbde2d75268581137f5bb8c83dbcdaf5209516785 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/show_profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/show_profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "forum/show_profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container item\">
        <div class=\"row align-items-center text-light\">
            <div class=\"d-inline\">
                <img class=\"mr-3\" src=\"/assets/img/user.jpg\" alt=\"Generic placeholder image\"/>
                <div class=\"d-inline-block\">
                    <h3 class=\"d-block ml-5\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "username", [], "any", false, false, false, 9), "html", null, true);
        echo "</h3>
                    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "                    <a class=\"d-block\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change-password", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\">Change password</a>
                    ";
        }
        // line 13
        echo "                </div>
            </div>
        </div>
        <div class=\"row align-items-center item\">
            <div class=\"col \">
                <div class=\"card bg-dark text-light\">
                    <div class=\"card-header\">
                        Posts
                    </div>
                    <div class=\"card-body bg-dark\">
                        <ul class=\"list-group list-group-flush bg-dark\">
                            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 25
            echo "                                <li class=\"list-group-item bg-dark\">
                                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 26), "topicId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "topic", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row align-items-center item\">
            <div class=\"col\">
                <div class=\"card bg-dark\">
                    <div class=\"card-header bg-dark text-light\">
                        Comments
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"list-group list-group-flush\">
                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 43
            echo "                                <li class=\"list-group-item bg-dark\">
                                    <a href=\" ";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-post", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "post", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "topicId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "topic", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 44);
            echo "</a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "forum/show_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 47,  140 => 44,  137 => 43,  133 => 42,  118 => 29,  107 => 26,  104 => 25,  100 => 24,  87 => 13,  81 => 11,  79 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container item\">
        <div class=\"row align-items-center text-light\">
            <div class=\"d-inline\">
                <img class=\"mr-3\" src=\"/assets/img/user.jpg\" alt=\"Generic placeholder image\"/>
                <div class=\"d-inline-block\">
                    <h3 class=\"d-block ml-5\">{{ user.username }}</h3>
                    {% if app.user %}
                    <a class=\"d-block\" href=\"{{ path('change-password', {\"id\": app.user.id})}}\">Change password</a>
                    {% endif %}
                </div>
            </div>
        </div>
        <div class=\"row align-items-center item\">
            <div class=\"col \">
                <div class=\"card bg-dark text-light\">
                    <div class=\"card-header\">
                        Posts
                    </div>
                    <div class=\"card-body bg-dark\">
                        <ul class=\"list-group list-group-flush bg-dark\">
                            {% for post in posts %}
                                <li class=\"list-group-item bg-dark\">
                                    <a href=\"{{ path('show-post', {\"id\": post.id, \"topicId\": post.topic.id}) }}\">{{ post.title }}</a>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row align-items-center item\">
            <div class=\"col\">
                <div class=\"card bg-dark\">
                    <div class=\"card-header bg-dark text-light\">
                        Comments
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"list-group list-group-flush\">
                            {% for comment in comments %}
                                <li class=\"list-group-item bg-dark\">
                                    <a href=\" {{ path('show-post', {\"id\": comment.post.id, \"topicId\": comment.topic.id}) }}\">{{ comment.content|raw }}</a>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "forum/show_profile.html.twig", "/home/mariusz/Symfony/forumApp/templates/forum/show_profile.html.twig");
    }
}
