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

/* forum/show_post.html.twig */
class __TwigTemplate_d763f27e63225a4655ee9e97aa844af2102a0e9dab0cb0ff02a8def88396123a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/show_post.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/show_post.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "forum/show_post.html.twig", 1);
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
        echo "    <div style=\"margin-top:2vw;\" class=\"container \">
        <div class=\"row align-items-center \">
            <div class=\"col \">
                <div class=\"card text-light bg-dark\">
                    <div class=\"card-header\">posted by <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-profile", ["userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "username", [], "any", false, false, false, 8), "html", null, true);
        echo " </a></div>
                    <div class=\"card-body\">
                        <h3 class=\"card-title\"> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h3>
                        <p class=\"card-text\"> ";
        // line 11
        echo (isset($context["postContent"]) || array_key_exists("postContent", $context) ? $context["postContent"] : (function () { throw new RuntimeError('Variable "postContent" does not exist.', 11, $this->source); })());
        echo " </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style=\"margin-top:1vw;\" class=\"container \">
        <div class=\"row align-items-center\">
            <div class=\"col\">
               ";
        // line 20
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)))) {
            // line 21
            echo "                    <a href=\" ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove-post", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "topicId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 21, $this->source); })()), "topic", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo " \"><button type=\"button\" class=\"btn btn-danger btn-sm\">Remove Post</button></a>
               ";
        }
        // line 23
        echo "            </div>
        </div>
    </div>
    ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "    <div style=\"margin-top:10px;\" class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col\">
                <a href=\" ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add-comment", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "topicId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 30, $this->source); })()), "topic", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">
                    <button type=\"button\" class=\"btn btn-success btn-sm\">Skometuj</button>
                </a>
            </div>
        </div>
    </div>
    ";
        }
        // line 37
        echo "    <div style=\"margin-top:10px; \" class=\"container \">
        <div  class=\"row align-items-center \">
            <div class=\"col\">
                <div  class=\"card text-light bg-dark\">
                    <div  class=\"card-header text-light bg-dark  \">Comments</div>
                    <div  class=\"card-body text-light bg-dark\">
                        <ul style=\"overflow-y:auto;\" class=\"list-group list-group-flush\">
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 45
            echo "                                <li class=\"list-group-item text-light bg-dark\">
                                    <p><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-profile", ["userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 46), "username", [], "any", false, false, false, 46), "html", null, true);
            echo "</a>   ";
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 46);
            echo "
                                        ";
            // line 47
            if ((0 === twig_compare((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 47), "username", [], "any", false, false, false, 47), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()))), twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)))) {
                // line 48
                echo "                                             <small><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove-comment", ["postId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "post", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 48), "topicId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 48, $this->source); })()), "topic", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo " \">Remove</a></small>
                                          ";
            }
            // line 50
            echo "                                    </p>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
                        </ul>
                    </div>
                </div>
                <div class=\"text-light\">";
        // line 57
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 57, $this->source); })()));
        echo "</div>
            </div>

        </div>

    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "forum/show_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 67,  174 => 57,  168 => 53,  160 => 50,  154 => 48,  152 => 47,  144 => 46,  141 => 45,  137 => 44,  128 => 37,  118 => 30,  113 => 27,  111 => 26,  106 => 23,  100 => 21,  98 => 20,  86 => 11,  82 => 10,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
    <div style=\"margin-top:2vw;\" class=\"container \">
        <div class=\"row align-items-center \">
            <div class=\"col \">
                <div class=\"card text-light bg-dark\">
                    <div class=\"card-header\">posted by <a href=\"{{ path('show-profile', {\"userId\": post.user.id}) }}\"> {{ post.user.username }} </a></div>
                    <div class=\"card-body\">
                        <h3 class=\"card-title\"> {{ post.title }}</h3>
                        <p class=\"card-text\"> {{ postContent|raw}} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style=\"margin-top:1vw;\" class=\"container \">
        <div class=\"row align-items-center\">
            <div class=\"col\">
               {% if app.user == post.user %}
                    <a href=\" {{ path('remove-post', {\"id\": post.id, \"topicId\": post.topic.id}) }} \"><button type=\"button\" class=\"btn btn-danger btn-sm\">Remove Post</button></a>
               {% endif %}
            </div>
        </div>
    </div>
    {% if app.user %}
    <div style=\"margin-top:10px;\" class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col\">
                <a href=\" {{ path('add-comment', {\"id\": post.id, \"topicId\": post.topic.id}) }}\">
                    <button type=\"button\" class=\"btn btn-success btn-sm\">Skometuj</button>
                </a>
            </div>
        </div>
    </div>
    {% endif %}
    <div style=\"margin-top:10px; \" class=\"container \">
        <div  class=\"row align-items-center \">
            <div class=\"col\">
                <div  class=\"card text-light bg-dark\">
                    <div  class=\"card-header text-light bg-dark  \">Comments</div>
                    <div  class=\"card-body text-light bg-dark\">
                        <ul style=\"overflow-y:auto;\" class=\"list-group list-group-flush\">
                            {% for comment in comments %}
                                <li class=\"list-group-item text-light bg-dark\">
                                    <p><a href=\"{{ path('show-profile', {\"userId\": comment.user.id}) }}\">{{comment.user.username}}</a>   {{ comment.content|raw }}
                                        {% if comment.user.username == user == app.user %}
                                             <small><a href=\"{{ path('remove-comment', {\"postId\": comment.post.id, \"id\": comment.id, \"topicId\": post.topic.id}) }} \">Remove</a></small>
                                          {% endif %}
                                    </p>
                                </li>
                            {% endfor %}

                        </ul>
                    </div>
                </div>
                <div class=\"text-light\">{{ knp_pagination_render(comments) }}</div>
            </div>

        </div>

    </div>


{% endblock %}

{% block footer %}{% endblock %}", "forum/show_post.html.twig", "/home/mariusz/Symfony/forumApp/templates/forum/show_post.html.twig");
    }
}
