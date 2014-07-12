<?php

/* PublicacionesBundle:Publicacion:new.html.twig */
class __TwigTemplate_ac743b09e33d4cd1a12a731420774da88a5a38e4e87f478faabc9dcae91a579b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BackendBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'mainbar' => array($this, 'block_mainbar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- Stylesheets -->
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <!-- Font awesome icon -->
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\"> 
    <!-- jQuery UI -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui-1.9.2.custom.min.css"), "html", null, true);
        echo "\"> 
    <!-- Calendar -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fullcalendar.css"), "html", null, true);
        echo "\">
    <!-- prettyPhoto -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\">  
    <!-- Star rating -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/rateit.css"), "html", null, true);
        echo "\">
    <!-- Date picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    <!-- CLEditor -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.cleditor.css"), "html", null, true);
        echo "\"> 
    <!-- Uniform -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/uniform.default.html"), "html", null, true);
        echo "\"> 
    <!-- Uniform -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/daterangepicker-bs3.css"), "html", null, true);
        echo "\" />
    <!-- Bootstrap toggle -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-switch.css"), "html", null, true);
        echo "\">
    <!-- Main stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <!-- Widgets stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/widgets.css"), "html", null, true);
        echo "\">   
    <!-- Gritter Notifications stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.gritter.css"), "html", null, true);
        echo "\">
    <!-- jQuery Validation Engine stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/validationEngine.jquery.css"), "html", null, true);
        echo "\">

";
    }

    // line 37
    public function block_mainbar($context, array $blocks = array())
    {
        // line 38
        echo "    <!-- Main bar -->
    <div class=\"mainbar\">

        <!-- Page heading -->
        <div class=\"page-head\">
            <h2 class=\"pull-left\">Proyectos</h2>
            <div class=\"clearfix\"></div>
            <!-- Breadcrumb -->
            <div class=\"bread-crumb\">
                <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("backend_homepage");
        echo "\"><i class=\"fa fa-home\"></i>Dashboard</a--> 
                <Divider>
                <span class=\"divider\">/</span> 
                <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("categorias_publicaciones");
        echo "\" class=\"bread-current\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoria"), "html", null, true);
        echo "</a>
                <Divider>
                <span class=\"divider\">/</span>
                <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("publicaciones");
        echo "\" class=\"bread-current\">Proyectos</a>
                <Divider>
                <span class=\"divider\">/</span> 
                <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("publicaciones_new");
        echo "\" class=\"bread-current\">Nuevo Proyecto</a>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <!-- Page heading ends -->

        <!-- Matter -->
        <div class=\"matter\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"widget\">

                            <div class=\"widget-head\">
                                <div class=\"pull-left\">Nuevo Proyecto</div>
                                <!--div class=\"widget-icons pull-right\">
                                    <a href=\"#\" class=\"wminimize\"><i class=\"fa fa-chevron-up\"></i></a>
                                    <a href=\"#\" class=\"wsettings\"><i class=\"fa fa-wrench\"></i></a>  
                                    <a href=\"#\" class=\"wclose\"><i class=\"fa fa-times\"></i></a>
                                </div-->
                                <div class=\"clearfix\"></div>
                            </div>

                            <div class=\"widget-content\">
                                <div class=\"padd\">
                                    <!-- Form starts.  -->
                                    <form action=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("publicaciones_create");
        echo "\" class=\"validate\" id=\"formPublicaciones\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                                        <fieldset>
                                            <legend>Español:</legend>
                                            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tituloEs"), 'row');
        echo "
                                            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcionEs"), 'row');
        echo "
                                        </fieldset>
                                        <fieldset>
                                            <legend>Ingles:</legend>
                                            ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tituloEn"), 'row');
        echo "
                                            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcionEn"), 'row');
        echo "
                                        </fieldset>
                                        <fieldset>
                                            <legend>Generales:</legend>
                                            ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class=\"widget-foot\">
                                <button id=\"botonRegresar\" class=\"btn btn-default\">Regresar</button>
                                <button id=\"botonGuardar\" class=\"btn btn-primary\">Crear proyecto</button>

                            </div>
                        </div>  

                    </div>
                </div>
            </div>
        </div>
        <!-- Matter ends -->
    </div>
    <!-- Mainbar ends -->           
    <div class=\"clearfix\"></div>
";
    }

    // line 117
    public function block_javascripts($context, array $blocks = array())
    {
        // line 118
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery UI -->
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script> <!-- Full Google Calendar - Calendar -->
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.rateit.min.js"), "html", null, true);
        echo "\"></script> <!-- RateIt - Star rating -->
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script> <!-- prettyPhoto -->

    <!-- jQuery Flot -->
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/excanvas.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery Notification - Noty -->
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/themes/default.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/bottom.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/topRight.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/top.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
    <!-- jQuery Notification ends -->

    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/languages/jquery.validationEngine-es.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Validation Engine Language File -->
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.validationEngine.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Validation Engine -->

    <!-- Daterangepicker -->
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/daterangepicker.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sparklines.js"), "html", null, true);
        echo "\"></script> <!-- Sparklines -->
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Gritter -->
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script> <!-- CLEditor -->
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script> <!-- Date picker -->
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uniform.min.html"), "html", null, true);
        echo "\"></script> <!-- jQuery Uniform -->
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery SlimScroll -->
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script> <!-- Bootstrap Toggle -->
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/filter.js"), "html", null, true);
        echo "\"></script> <!-- Filter for support page -->
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script> <!-- Custom codes -->
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/charts.js"), "html", null, true);
        echo "\"></script> <!-- Charts & Graphs -->


    <script>
        \$(document).ready(function() {
            \$(\".validate\").validationEngine();

            \$(\"#botonRegresar\").on(\"click\", function() {
                location.href = \"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("publicaciones");
        echo "\";
            });

            \$(\"#botonGuardar\").on(\"click\", function() {
                \$(\"#formPublicaciones\").submit();
            });

        ";
        // line 172
        if ((twig_length_filter($this->env, (isset($context["errores"]) ? $context["errores"] : $this->getContext($context, "errores"))) > 0)) {
            // line 173
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errores"]) ? $context["errores"] : $this->getContext($context, "errores")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 174
                echo "                    noty({
                        text: '";
                // line 175
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
                echo "',
                        layout: 'topRight',
                        type: 'error',
                        timeout: 2000
                    });
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "    
        ";
        }
        // line 182
        echo "
            });

    </script>
    ";
        // line 186
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
";
    }

    public function getTemplateName()
    {
        return "PublicacionesBundle:Publicacion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  552 => 274,  550 => 273,  543 => 268,  539 => 267,  531 => 261,  529 => 260,  514 => 248,  510 => 247,  506 => 246,  498 => 244,  494 => 243,  490 => 242,  486 => 241,  482 => 240,  478 => 239,  470 => 237,  465 => 235,  459 => 232,  455 => 231,  451 => 230,  447 => 229,  443 => 228,  433 => 224,  429 => 223,  425 => 222,  421 => 221,  153 => 56,  363 => 171,  271 => 142,  335 => 148,  272 => 133,  434 => 219,  396 => 184,  392 => 183,  388 => 182,  380 => 179,  376 => 178,  345 => 155,  178 => 81,  391 => 176,  372 => 178,  367 => 172,  502 => 245,  500 => 246,  493 => 241,  489 => 240,  481 => 234,  479 => 233,  464 => 221,  460 => 220,  456 => 219,  452 => 218,  448 => 217,  436 => 214,  432 => 213,  428 => 212,  424 => 211,  420 => 213,  383 => 197,  375 => 174,  339 => 182,  118 => 36,  90 => 28,  65 => 11,  84 => 17,  53 => 14,  405 => 182,  358 => 157,  336 => 162,  300 => 134,  371 => 173,  284 => 134,  276 => 125,  200 => 99,  188 => 86,  288 => 135,  282 => 128,  274 => 130,  174 => 80,  364 => 176,  349 => 170,  344 => 151,  317 => 159,  313 => 148,  301 => 155,  275 => 125,  215 => 100,  415 => 218,  403 => 215,  401 => 180,  361 => 190,  357 => 189,  353 => 171,  348 => 163,  334 => 151,  326 => 149,  308 => 136,  304 => 135,  286 => 129,  280 => 133,  34 => 12,  126 => 61,  259 => 130,  255 => 129,  281 => 137,  242 => 125,  234 => 118,  226 => 109,  180 => 88,  175 => 72,  110 => 34,  262 => 127,  244 => 121,  236 => 112,  232 => 111,  216 => 99,  207 => 97,  185 => 96,  248 => 122,  194 => 88,  190 => 89,  186 => 87,  170 => 79,  167 => 69,  160 => 73,  155 => 71,  152 => 70,  124 => 61,  419 => 189,  411 => 186,  397 => 213,  389 => 175,  385 => 181,  377 => 168,  373 => 178,  369 => 165,  346 => 154,  338 => 152,  332 => 172,  328 => 160,  324 => 159,  320 => 158,  316 => 145,  292 => 136,  222 => 104,  218 => 106,  210 => 104,  206 => 95,  202 => 91,  197 => 99,  354 => 156,  352 => 157,  331 => 164,  327 => 163,  323 => 162,  293 => 128,  289 => 188,  279 => 126,  261 => 120,  251 => 128,  239 => 108,  225 => 106,  211 => 103,  181 => 84,  172 => 78,  366 => 163,  350 => 155,  342 => 153,  340 => 153,  330 => 150,  319 => 138,  295 => 132,  291 => 131,  287 => 130,  277 => 126,  267 => 122,  263 => 121,  257 => 124,  253 => 117,  249 => 116,  245 => 115,  231 => 117,  213 => 104,  195 => 90,  192 => 96,  58 => 17,  23 => 1,  318 => 150,  310 => 154,  306 => 141,  302 => 140,  299 => 133,  296 => 137,  290 => 144,  266 => 128,  250 => 120,  237 => 112,  228 => 110,  150 => 64,  129 => 46,  114 => 35,  97 => 46,  77 => 18,  426 => 204,  418 => 198,  416 => 197,  394 => 212,  390 => 183,  386 => 174,  382 => 181,  378 => 165,  370 => 178,  359 => 170,  351 => 184,  347 => 167,  343 => 150,  333 => 165,  329 => 164,  325 => 136,  321 => 135,  315 => 158,  311 => 136,  307 => 135,  303 => 134,  297 => 154,  270 => 129,  265 => 131,  260 => 126,  256 => 125,  233 => 110,  223 => 108,  212 => 96,  205 => 100,  198 => 97,  191 => 98,  184 => 85,  165 => 76,  137 => 51,  127 => 47,  113 => 37,  81 => 23,  76 => 21,  480 => 162,  474 => 238,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 216,  440 => 215,  437 => 225,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 185,  409 => 183,  407 => 216,  402 => 186,  398 => 185,  393 => 201,  387 => 208,  384 => 181,  381 => 173,  379 => 172,  374 => 167,  368 => 172,  365 => 189,  362 => 161,  360 => 187,  355 => 185,  341 => 168,  337 => 167,  322 => 148,  314 => 155,  312 => 144,  309 => 157,  305 => 156,  298 => 146,  294 => 144,  285 => 138,  283 => 129,  278 => 132,  268 => 134,  264 => 128,  258 => 126,  252 => 123,  247 => 115,  241 => 114,  229 => 108,  220 => 112,  214 => 105,  177 => 80,  169 => 77,  140 => 55,  132 => 48,  128 => 41,  107 => 64,  61 => 15,  273 => 125,  269 => 134,  254 => 118,  243 => 116,  240 => 120,  238 => 117,  235 => 111,  230 => 115,  227 => 108,  224 => 107,  221 => 107,  219 => 107,  217 => 106,  208 => 96,  204 => 102,  179 => 106,  159 => 61,  143 => 56,  135 => 38,  119 => 69,  102 => 29,  71 => 19,  67 => 15,  63 => 11,  59 => 30,  38 => 6,  28 => 3,  87 => 25,  26 => 6,  201 => 92,  196 => 90,  183 => 94,  171 => 77,  166 => 84,  163 => 70,  158 => 74,  156 => 58,  151 => 56,  142 => 59,  138 => 49,  136 => 50,  121 => 46,  117 => 40,  105 => 33,  91 => 27,  62 => 23,  49 => 8,  94 => 24,  89 => 19,  85 => 26,  75 => 17,  68 => 12,  56 => 13,  24 => 4,  21 => 2,  31 => 12,  25 => 6,  19 => 58,  93 => 47,  88 => 22,  78 => 15,  46 => 9,  44 => 7,  27 => 4,  79 => 19,  72 => 13,  69 => 19,  47 => 17,  40 => 7,  37 => 13,  22 => 3,  246 => 122,  157 => 57,  145 => 53,  139 => 50,  131 => 51,  123 => 60,  120 => 33,  115 => 67,  111 => 30,  108 => 29,  101 => 31,  98 => 31,  96 => 29,  83 => 25,  74 => 21,  66 => 17,  55 => 20,  52 => 26,  50 => 13,  43 => 12,  41 => 7,  35 => 5,  32 => 9,  29 => 3,  209 => 102,  203 => 99,  199 => 91,  193 => 89,  189 => 97,  187 => 95,  182 => 83,  176 => 82,  173 => 146,  168 => 77,  164 => 59,  162 => 76,  154 => 84,  149 => 54,  147 => 56,  144 => 49,  141 => 53,  133 => 50,  130 => 47,  125 => 40,  122 => 42,  116 => 38,  112 => 42,  109 => 52,  106 => 33,  103 => 30,  99 => 47,  95 => 28,  92 => 43,  86 => 25,  82 => 39,  80 => 19,  73 => 19,  64 => 27,  60 => 23,  57 => 11,  54 => 10,  51 => 11,  48 => 14,  45 => 13,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
