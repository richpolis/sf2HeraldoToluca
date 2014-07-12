<?php

/* BackendBundle::layout.html.twig */
class __TwigTemplate_74dd69131b0d65175db3850ad4738210315c75c6bb9f64e0d951121559ad017d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'mainbar' => array($this, 'block_mainbar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Administrador";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "<!-- Stylesheets -->
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.html"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\">
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "
  ";
        // line 16
        $context["route"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method");
        // line 17
        echo "
  ";
        // line 18
        $context["usuarios"] = "";
        // line 19
        echo "  ";
        $context["categorias"] = "";
        // line 20
        echo "  ";
        $context["publicaciones"] = "";
        // line 21
        echo "  ";
        $context["servicios"] = "";
        // line 22
        echo "  ";
        $context["galerias"] = "";
        // line 23
        echo "  ";
        $context["configuraciones"] = "";
        // line 24
        echo "
  ";
        // line 25
        if (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "categorias_publicaciones")) {
            // line 26
            echo "    ";
            $context["categorias"] = "class=open";
            // line 27
            echo "  ";
        } elseif (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "backend_usuarios")) {
            // line 28
            echo "    ";
            $context["usuarios"] = "class=open";
            // line 29
            echo "  ";
        } elseif (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "publicaciones")) {
            // line 30
            echo "    ";
            $context["publicaciones"] = "class=open";
            // line 31
            echo "  ";
        } elseif (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "servicios")) {
            // line 32
            echo "    ";
            $context["servicios"] = "class=open";
            // line 33
            echo "  ";
        } elseif (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "galerias")) {
            // line 34
            echo "    ";
            $context["galerias"] = "class=open";
            echo "     
  ";
        } elseif (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "configuraciones")) {
            // line 36
            echo "    ";
            $context["configuraciones"] = "class=open";
            echo "       
  ";
        }
        // line 38
        echo "      
<header>
    <div class=\"navbar navbar-fixed-top bs-docs-nav\" role=\"banner\">
        <div class=\"container\">
            <!-- Menu button for smallar screens -->
            <div class=\"navbar-header\">
                <button class=\"navbar-toggle btn-navbar\" type=\"button\" data-toggle=\"collapse\" data-target=\".bs-navbar-collapse\">
                    <span>Menu</span>
                </button>
                <a href=\"#\" class=\"pull-left menubutton hidden-xs\">
                    <i class=\"fa fa-bars\"></i>
                </a>
                <!-- Site name for smallar screens -->
                <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("backend_homepage");
        echo "\" class=\"navbar-brand\">
                    <span class=\"bold\">Dashboard</span>
                </a>
            </div>

            <!-- Navigation starts -->
            <nav class=\"collapse navbar-collapse bs-navbar-collapse\" role=\"navigation\">         

                <!-- Links -->
                <ul class=\"nav navbar-nav pull-right\">
                    <li class=\"dropdown pull-right user-data\">            
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                                <img src=\"/apple-touch-icon.png\" width=\"25\" height=\"25\"/>";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username"), "anonimo")) : ("anonimo")), "html", null, true);
        echo " <b class=\"caret\"></b>
                            </a>

                            <!-- Dropdown menu -->
                            <ul class=\"dropdown-menu\">
                                <!--li><a href=\"#\"><i class=\"fa fa-user\"></i> Profile</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i> Settings</a></li-->
                                <li>
                                    <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("backend_logout");
        echo "\">
                                        <i class=\"fa fa-key\"></i> Logout
                                    </a>
                                </li>
                            </ul>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</header>
<!-- Main content starts -->
<div class=\"content\">
    <!-- Sidebar -->
    <div class=\"sidebar\">
        <div class=\"sidebar-dropdown\">
            <a href=\"#\">Navigation</a>
        </div>
        <!-- Search form -->
        <form class=\"navbar-form\" role=\"search\" action=\"#search\" method=\"post\">
            <div class=\"form-group\">
                <input id=\"buscarItem\" name=\"buscarItem\" type=\"text\" class=\"form-control\" placeholder=\"buscar\">
                <button class=\"btn search-button\" type=\"submit\">
                    <i class=\"fa fa-search\"></i>
                </button>
            </div>
        </form>
        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class \"has_sub\" to \"li\" of main navigation. -->
        <ul id=\"nav\">
            <!-- Main menu with font awesome icon -->
            <li>
                <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("paginas");
        echo "\">
                    <i class=\"fa fa-sitemap\"></i> <span>Paginas</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("categorias_publicaciones");
        echo "\">
                    <i class=\"fa fa-comment\"></i> <span>Proyectos</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("servicios");
        echo "\">
                    <i class=\"fa fa-dashboard\"></i> <span>Servicios</span>
                </a>
            </li>
            ";
        // line 118
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 119
            echo "            <li>
                <a ";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")), "html", null, true);
            echo " href=\"";
            echo $this->env->getExtension('routing')->getPath("users");
            echo "\">
                    <i class=\"fa fa-user\"></i> <span>Usuarios</span>
                </a>
            </li>
            <li>
                <a ";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["configuraciones"]) ? $context["configuraciones"] : $this->getContext($context, "configuraciones")), "html", null, true);
            echo " href=\"";
            echo $this->env->getExtension('routing')->getPath("configuraciones");
            echo "\">
                    <i class=\"fa fa-gears\"></i> <span>Configuraciones</span>
                </a>
            </li>
            ";
        }
        // line 129
        echo "    
        </ul>
    </div>
<!-- Sidebar ends -->
\t";
        // line 133
        $this->displayBlock('mainbar', $context, $blocks);
        // line 134
        echo "</div>
<!-- Content ends -->
<!-- Footer starts -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
               <!-- Copyright info -->
                <!--p class=\"copy\">Copyright &copy; 2012 | <a href=\"#\">Your Site</a> </p-->
                <p></p>
            </div>
        </div>
    </div>
</footer> \t
<!-- Footer ends -->
<!-- Scroll to top -->
<span class=\"totop\"><a href=\"#\"><i class=\"fa fa-chevron-up\"></i></a></span>
<div class=\"loader\"></div>
";
    }

    // line 133
    public function block_mainbar($context, array $blocks = array())
    {
        echo " ";
    }

    // line 154
    public function block_javascripts($context, array $blocks = array())
    {
        // line 155
        echo "    <!-- JS -->
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/underscore-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/backbone-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/swig.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    

";
    }

    public function getTemplateName()
    {
        return "BackendBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 160,  310 => 158,  306 => 157,  302 => 156,  299 => 155,  296 => 154,  290 => 133,  266 => 133,  250 => 125,  237 => 119,  228 => 114,  150 => 51,  129 => 36,  114 => 31,  97 => 25,  77 => 18,  426 => 204,  418 => 198,  416 => 197,  394 => 184,  390 => 183,  386 => 182,  382 => 181,  378 => 180,  370 => 178,  359 => 173,  351 => 171,  347 => 170,  343 => 169,  333 => 165,  329 => 164,  325 => 163,  321 => 162,  315 => 159,  311 => 158,  307 => 157,  303 => 156,  297 => 154,  270 => 132,  265 => 130,  260 => 129,  256 => 127,  233 => 112,  223 => 108,  212 => 104,  205 => 97,  198 => 93,  191 => 89,  184 => 85,  165 => 63,  137 => 51,  127 => 47,  113 => 37,  81 => 23,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 205,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 186,  398 => 185,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 179,  368 => 112,  365 => 176,  362 => 110,  360 => 109,  355 => 172,  341 => 105,  337 => 166,  322 => 101,  314 => 159,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 153,  285 => 89,  283 => 88,  278 => 86,  268 => 134,  264 => 84,  258 => 81,  252 => 80,  247 => 121,  241 => 77,  229 => 110,  220 => 109,  214 => 69,  177 => 81,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 120,  238 => 85,  235 => 118,  230 => 82,  227 => 81,  224 => 71,  221 => 107,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 38,  119 => 42,  102 => 27,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 5,  28 => 3,  87 => 25,  26 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 32,  105 => 28,  91 => 23,  62 => 23,  49 => 19,  94 => 24,  89 => 20,  85 => 21,  75 => 17,  68 => 14,  56 => 10,  24 => 4,  21 => 2,  31 => 5,  25 => 5,  19 => 1,  93 => 28,  88 => 22,  78 => 21,  46 => 9,  44 => 7,  27 => 4,  79 => 19,  72 => 16,  69 => 15,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 54,  139 => 52,  131 => 52,  123 => 34,  120 => 33,  115 => 43,  111 => 30,  108 => 29,  101 => 31,  98 => 31,  96 => 29,  83 => 25,  74 => 17,  66 => 14,  55 => 15,  52 => 9,  50 => 10,  43 => 8,  41 => 6,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 71,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 50,  130 => 41,  125 => 44,  122 => 43,  116 => 38,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 26,  95 => 28,  92 => 21,  86 => 25,  82 => 20,  80 => 19,  73 => 19,  64 => 14,  60 => 11,  57 => 11,  54 => 10,  51 => 11,  48 => 8,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
