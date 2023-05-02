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

/* base-front.html.twig */
class __TwigTemplate_b5eeab171f1f0bccddfa4b1231ea02b3 extends Template
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
            'navs' => [$this, 'block_navs'],
            'mininavs' => [$this, 'block_mininavs'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <title>
\t\t";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "\t\t</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">
\t\t<meta name=\"author\" content=\"templatemo\">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
        
        <link rel=\"stylesheet\" href=\"../../../css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"../../../css/font-awesome.css\">
        <link rel=\"stylesheet\" href=\"../../../css/animate.css\">
        <link rel=\"stylesheet\" href=\"../../../css/templatemo_misc.css\">
        <link rel=\"stylesheet\" href=\"../../../css/templatemo_style.css\">

        <script src=\"../../../js/vendor/modernizr-2.6.1-respond-1.1.0.min.js\"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div class=\"site-header\">
            <div class=\"container\" style=\"width: 1200px; margin: auto; display: block;\">
                <div class=\"main-header\">
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-6 col-xs-10\">
                            <div class=\"logo\">
                                <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                                    <img src=\"../../../images/logotounesna.png\" alt=\"travel html5 template\" style=\"width: 200px; height: 100px; margin-top: -24px;\" title=\"travel html5 template\">
                                </a>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->
                        <div class=\"col-md-8 col-sm-6 col-xs-2\">
                            <div class=\"main-menu\">
                                <ul class=\"visible-lg visible-md\">
\t\t\t\t\t\t\t\t";
        // line 45
        $this->displayBlock('navs', $context, $blocks);
        // line 48
        echo "                                </ul>
                                <a href=\"#\" class=\"toggle-menu visible-sm visible-xs\">
                                    <i class=\"fa fa-bars\"></i>
                                </a>
                            </div> <!-- /.main-menu -->
                        </div> <!-- /.col-md-8 -->
                    </div> <!-- /.row -->
                </div> <!-- /.main-header -->
                <div class=\"row\">
                    <div class=\"col-md-12 visible-sm visible-xs\">
                        <div class=\"menu-responsive\">
                            <ul>
\t\t\t\t\t\t\t\t";
        // line 60
        $this->displayBlock('mininavs', $context, $blocks);
        // line 63
        echo "                            </ul>
                        </div> <!-- /.menu-responsive -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->
\t\t
\t\t";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "
        <div class=\"partner-list\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-2 col-sm-4 col-xs-6\">
                        <div class=\"partner-item\">
                            <img src=\"../../../images/partners/partner1.png\" alt=\"\">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class=\"col-md-2 col-sm-4 col-xs-6\">
                        <div class=\"partner-item\">
                            <img src=\"../../../images/partners/partner2.png\" alt=\"\">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class=\"col-md-2 col-sm-4 col-xs-6\">
                        <div class=\"partner-item\">
                            <img src=\"../../../images/partners/partner3.png\" alt=\"\">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class=\"col-md-2 col-sm-4 col-xs-6\">
                        <div class=\"partner-item\">
                            <img src=\"../../../images/partners/partner1.png\" alt=\"\">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class=\"col-md-2 col-sm-4 col-xs-6\">
                        <div class=\"partner-item\">
                            <img src=\"../../../images/partners/partner2.png\" alt=\"\">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class=\"col-md-2 col-sm-4 col-xs-6\">
                        <div class=\"partner-item last\">
                            <img src=\"../../../images/partners/partner3.png\" alt=\"\">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.partner-list -->

\t\t

        <div class=\"site-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-4\">
                        <div class=\"footer-logo\">
                            <a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                                <img src=\"../../../images/logotounesna.png\" alt=\"\">
                            </a>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class=\"col-md-4 col-sm-4\">
                        <div class=\"copyright\">
                            <span>
                            \t
                                Copyright &copy; 2023 <a href=\"/\">Tounesna</a>
                            
                            
                            <!--
                            | Design: <a rel=\"nofollow\" href=\"http://www.templatemo.com\" target=\"_parent\">templatemo</a>
                            -->
                            
                            </span>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class=\"col-md-4 col-sm-4\">
                        <ul class=\"social-icons\">
                            <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-flickr\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-rss\"></a></li>
                        </ul>
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-footer -->

        <script src=\"../../../js/vendor/jquery-1.11.0.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"../../../js/vendor/jquery-1.11.0.min.js\"><\\/script>')</script>
        <script src=\"../../../js/bootstrap.js\"></script>
        <script src=\"../../../js/plugins.js\"></script>
        <script src=\"../../../js/main.js\"></script>
        <!-- templatemo 409 travel -->  
    </body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 45
    public function block_navs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navs"));

        // line 46
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 60
    public function block_mininavs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mininavs"));

        // line 61
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 70
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 71
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base-front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 71,  262 => 70,  254 => 61,  247 => 60,  239 => 46,  232 => 45,  224 => 10,  217 => 9,  170 => 118,  123 => 73,  121 => 70,  112 => 63,  110 => 60,  96 => 48,  94 => 45,  83 => 37,  56 => 12,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <title>
\t\t{% block title %}

\t\t{% endblock %}
\t\t</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">
\t\t<meta name=\"author\" content=\"templatemo\">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
        
        <link rel=\"stylesheet\" href=\"../../../css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"../../../css/font-awesome.css\">
        <link rel=\"stylesheet\" href=\"../../../css/animate.css\">
        <link rel=\"stylesheet\" href=\"../../../css/templatemo_misc.css\">
        <link rel=\"stylesheet\" href=\"../../../css/templatemo_style.css\">

        <script src=\"../../../js/vendor/modernizr-2.6.1-respond-1.1.0.min.js\"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div class=\"site-header\">
            <div class=\"container\" style=\"width: 1200px; margin: auto; display: block;\">
                <div class=\"main-header\">
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-6 col-xs-10\">
                            <div class=\"logo\">
                                <a href=\"{{path('home')}}\">
                                    <img src=\"../../../images/logotounesna.png\" alt=\"travel html5 template\" style=\"width: 200px; height: 100px; margin-top: -24px;\" title=\"travel html5 template\">
                                </a>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->
                        <div class=\"col-md-8 col-sm-6 col-xs-2\">
                            <div class=\"main-menu\">
                                <ul class=\"visible-lg visible-md\">
\t\t\t\t\t\t\t\t{% block navs %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% endblock %}
                                </ul>
                                <a href=\"#\" class=\"toggle-menu visible-sm visible-xs\">
                                    <i class=\"fa fa-bars\"></i>
                                </a>
                            </div> <!-- /.main-menu -->
                        </div> <!-- /.col-md-8 -->
                    </div> <!-- /.row -->
                </div> <!-- /.main-header -->
                <div class=\"row\">
                    <div class=\"col-md-12 visible-sm visible-xs\">
                        <div class=\"menu-responsive\">
                            <ul>
\t\t\t\t\t\t\t\t{% block mininavs %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% endblock %}
                            </ul>
                        </div> <!-- /.menu-responsive -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->
\t\t
\t\t{% block content %}

\t\t{% endblock %}

        <div class=\"partner-list\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-2 col-sm-4 col-xs-6\">
                        <div class=\"partner-item\">
                            <img src=\"../../../images/partners/partner1.png\" alt=\"\">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class=\"col-md-2 col-sm-4 col-xs-6\">
                        <div class=\"partner-item\">
                            <img src=\"../../../images/partners/partner2.png\" alt=\"\">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class=\"col-md-2 col-sm-4 col-xs-6\">
                        <div class=\"partner-item\">
                            <img src=\"../../../images/partners/partner3.png\" alt=\"\">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class=\"col-md-2 col-sm-4 col-xs-6\">
                        <div class=\"partner-item\">
                            <img src=\"../../../images/partners/partner1.png\" alt=\"\">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class=\"col-md-2 col-sm-4 col-xs-6\">
                        <div class=\"partner-item\">
                            <img src=\"../../../images/partners/partner2.png\" alt=\"\">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class=\"col-md-2 col-sm-4 col-xs-6\">
                        <div class=\"partner-item last\">
                            <img src=\"../../../images/partners/partner3.png\" alt=\"\">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.partner-list -->

\t\t

        <div class=\"site-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-4\">
                        <div class=\"footer-logo\">
                            <a href=\"{{ path('home') }}\">
                                <img src=\"../../../images/logotounesna.png\" alt=\"\">
                            </a>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class=\"col-md-4 col-sm-4\">
                        <div class=\"copyright\">
                            <span>
                            \t
                                Copyright &copy; 2023 <a href=\"/\">Tounesna</a>
                            
                            
                            <!--
                            | Design: <a rel=\"nofollow\" href=\"http://www.templatemo.com\" target=\"_parent\">templatemo</a>
                            -->
                            
                            </span>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class=\"col-md-4 col-sm-4\">
                        <ul class=\"social-icons\">
                            <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-flickr\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-rss\"></a></li>
                        </ul>
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-footer -->

        <script src=\"../../../js/vendor/jquery-1.11.0.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"../../../js/vendor/jquery-1.11.0.min.js\"><\\/script>')</script>
        <script src=\"../../../js/bootstrap.js\"></script>
        <script src=\"../../../js/plugins.js\"></script>
        <script src=\"../../../js/main.js\"></script>
        <!-- templatemo 409 travel -->  
    </body>
</html>", "base-front.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\base-front.html.twig");
    }
}
