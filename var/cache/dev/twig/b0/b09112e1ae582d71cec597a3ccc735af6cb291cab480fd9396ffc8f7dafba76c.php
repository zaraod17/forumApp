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

/* base.html.twig */
class __TwigTemplate_84366476f48f660a0fadea7f35ea366a49cfa97f1e495a7607967cece0f5c6a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'menu' => [$this, 'block_menu'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<head style=\"background-color: #9fcdff\">
    <meta charset=\"UTF-8\">
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
    <style>
       html, body {
            background-image: url(\"https://cdn.hipwallpaper.com/i/28/83/6DGhkb.jpg\");
            overflow-y: auto;
            overflow-x: hidden;
        }
    </style>

</head>
";
        // line 20
        $this->displayBlock('menu', $context, $blocks);
        // line 55
        echo "    </div>


    <body >
    ";
        // line 59
        $this->displayBlock('main', $context, $blocks);
        // line 95
        echo "
    ";
        // line 96
        $this->displayBlock('footer', $context, $blocks);
        // line 110
        echo "
    ";
        // line 111
        $this->displayBlock('javascripts', $context, $blocks);
        // line 114
        echo "    </body>
</div>


</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MyForum";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW\" crossorigin=\"anonymous\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 21
        echo "
<div class=\"container\">

    <div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark shadow-sm\">
        <h5 class=\"my-0 mr-md-auto bg-dark\"><a class=\"text-light\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\"><img style=\"height: 40px; width: 100px;\" src=\"https://static1.squarespace.com/static/58ffa7cae4fcb5b3f1e21577/t/58ffaa9f20099e9f05827f23/1606253865955/\"></a></h5>

        <div style=\"width: 10px\"></div>

        <div style=\"width: 455px\">
            <form method=\"GET\" class=\"form-inline my-0 mr-md-auto\" action=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search-results");
        echo "\">
                <input class=\"form-control mr-sm-2 h-50 w-50 d-inline\" name=\"query\" type=\"search\" placeholder=\"Search post\" aria-label=\"Search post\" >
                <button class=\"btn btn-outline-success my-2 my-sm-0 h-50 w-25 d-inline\" type=\"submit\">Search</button>
            </form>

        </div>

        <div style=\"width: 440px\"></div>

        ";
        // line 39
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), false))) {
            // line 40
            echo "            <div class=\"float-right pl-3\">
            <a class=\"btn btn-primary mr-0  \" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Zaloguj się</a>
            <a class=\"btn btn-primary  mr-1 \" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Zarejestruj się</a>
            </div>
        ";
        }
        // line 45
        echo "
        ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) {
            // line 47
            echo "            <div style=\"width: 910px\"></div>
            ";
            // line 48
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 49
                echo "                <a class=\"btn btn-primary mr-0  \" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Admin</a>
            ";
            }
            // line 51
            echo "            <a class=\"btn btn-primary \" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        ";
        }
        // line 53
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 60
        echo "
        <div class=\"container-fluid \" >
            <table class=\"table table-bordered table-dark  small-text-left \">
                    <thead>
                        <tr>
                            <th colspan=\"2\">Forum</th>
                            <th scope=\"col\">Opis</th>
                            <th scope=\"col\">Posty</th>
                            <th scope=\"col\">Komentarze</th>
                            <th scope=\"col\">Ostatni post</th>
                        </tr>
                    </thead>
                <tbody>

                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topics"]) || array_key_exists("topics", $context) ? $context["topics"] : (function () { throw new RuntimeError('Variable "topics" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 75
            echo "                    <tr>
                        <td><img style=\"height: 40px; width: 40px;\" src=\"";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "imgURL", [], "any", false, false, false, 76), "html", null, true);
            echo "\"></td>
                        <th scope=\"row\"><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post-list", ["id" => twig_get_attribute($this->env, $this->source, $context["topic"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "title", [], "any", false, false, false, 77), "html", null, true);
            echo "</a> </th>
                        <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "description", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                        <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "getPosts", [], "any", false, false, false, 79)), "html", null, true);
            echo "</td>
                        <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "getComments", [], "any", false, false, false, 80)), "html", null, true);
            echo "</td>

                        ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 82, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 83
                echo "                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "topic", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83), twig_get_attribute($this->env, $this->source, $context["topic"], "id", [], "any", false, false, false, 83)))) {
                    // line 84
                    echo "                                <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-post", ["topicId" => twig_get_attribute($this->env, $this->source, $context["topic"], "id", [], "any", false, false, false, 84), "id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 84), "html", null, true);
                    echo "</a> </td>
                            ";
                }
                // line 86
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "

                </tbody>
            </table>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 97
        echo "

            <div style=\"height: 70px\"></div>

            <!-- Copyright -->
            <div class=\"card-footer text-center py-3 text-light bg-dark position-relative\">© 2020 Copyright:
                <a href=\"http://localhost:8000/\"> MyForum.com</a>
            </div>
            <!-- Copyright -->



    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  374 => 112,  364 => 111,  342 => 97,  332 => 96,  317 => 89,  310 => 87,  304 => 86,  296 => 84,  293 => 83,  289 => 82,  284 => 80,  280 => 79,  276 => 78,  270 => 77,  266 => 76,  263 => 75,  259 => 74,  243 => 60,  233 => 59,  222 => 53,  216 => 51,  210 => 49,  208 => 48,  205 => 47,  203 => 46,  200 => 45,  194 => 42,  190 => 41,  187 => 40,  185 => 39,  173 => 30,  165 => 25,  159 => 21,  149 => 20,  137 => 7,  127 => 6,  108 => 4,  93 => 114,  91 => 111,  88 => 110,  86 => 96,  83 => 95,  81 => 59,  75 => 55,  73 => 20,  61 => 10,  59 => 6,  54 => 4,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<head style=\"background-color: #9fcdff\">
    <meta charset=\"UTF-8\">
    <title>{% block title %}MyForum{% endblock %}</title>

    {% block stylesheets %}
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW\" crossorigin=\"anonymous\"></script>
    {% endblock %}

    <style>
       html, body {
            background-image: url(\"https://cdn.hipwallpaper.com/i/28/83/6DGhkb.jpg\");
            overflow-y: auto;
            overflow-x: hidden;
        }
    </style>

</head>
{% block menu %}

<div class=\"container\">

    <div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark shadow-sm\">
        <h5 class=\"my-0 mr-md-auto bg-dark\"><a class=\"text-light\" href=\"{{ path('front') }}\"><img style=\"height: 40px; width: 100px;\" src=\"https://static1.squarespace.com/static/58ffa7cae4fcb5b3f1e21577/t/58ffaa9f20099e9f05827f23/1606253865955/\"></a></h5>

        <div style=\"width: 10px\"></div>

        <div style=\"width: 455px\">
            <form method=\"GET\" class=\"form-inline my-0 mr-md-auto\" action=\"{{path('search-results')}}\">
                <input class=\"form-control mr-sm-2 h-50 w-50 d-inline\" name=\"query\" type=\"search\" placeholder=\"Search post\" aria-label=\"Search post\" >
                <button class=\"btn btn-outline-success my-2 my-sm-0 h-50 w-25 d-inline\" type=\"submit\">Search</button>
            </form>

        </div>

        <div style=\"width: 440px\"></div>

        {% if app.user == false %}
            <div class=\"float-right pl-3\">
            <a class=\"btn btn-primary mr-0  \" href=\"{{ path('app_login') }}\">Zaloguj się</a>
            <a class=\"btn btn-primary  mr-1 \" href=\"{{ path('app_register') }}\">Zarejestruj się</a>
            </div>
        {% endif %}

        {% if app.user %}
            <div style=\"width: 910px\"></div>
            {% if is_granted('ROLE_ADMIN') %}
                <a class=\"btn btn-primary mr-0  \" href=\"{{ path('admin') }}\">Admin</a>
            {% endif %}
            <a class=\"btn btn-primary \" href=\"{{ path('app_logout') }}\">Logout</a>
        {% endif %}

        {% endblock %}
    </div>


    <body >
    {% block main %}

        <div class=\"container-fluid \" >
            <table class=\"table table-bordered table-dark  small-text-left \">
                    <thead>
                        <tr>
                            <th colspan=\"2\">Forum</th>
                            <th scope=\"col\">Opis</th>
                            <th scope=\"col\">Posty</th>
                            <th scope=\"col\">Komentarze</th>
                            <th scope=\"col\">Ostatni post</th>
                        </tr>
                    </thead>
                <tbody>

                {% for topic in topics %}
                    <tr>
                        <td><img style=\"height: 40px; width: 40px;\" src=\"{{ topic.imgURL }}\"></td>
                        <th scope=\"row\"><a href=\"{{ path('post-list',{'id': topic.id}) }}\">{{ topic.title }}</a> </th>
                        <td>{{ topic.description }}</td>
                        <td>{{ topic.getPosts|length}}</td>
                        <td>{{ topic.getComments|length }}</td>

                        {% for post in posts %}
                            {% if  post.topic.id  ==  topic.id  %}
                                <td><a href=\"{{ path('show-post', {\"topicId\": topic.id, \"id\": post.id })}}\">{{ post.title }}</a> </td>
                            {% endif %}
                        {% endfor %}
                    </tr>
                {% endfor %}


                </tbody>
            </table>
        </div>
    {% endblock %}

    {% block footer %}


            <div style=\"height: 70px\"></div>

            <!-- Copyright -->
            <div class=\"card-footer text-center py-3 text-light bg-dark position-relative\">© 2020 Copyright:
                <a href=\"http://localhost:8000/\"> MyForum.com</a>
            </div>
            <!-- Copyright -->



    {% endblock %}

    {% block javascripts %}

    {% endblock %}
    </body>
</div>


</html>
", "base.html.twig", "/home/mariusz/Symfony/forumApp/templates/base.html.twig");
    }
}
