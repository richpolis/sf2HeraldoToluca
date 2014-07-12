<?php

/* PublicacionesBundle:CategoriaPublicacion:new.html.twig */
class __TwigTemplate_ecf22c87e65fa51345e72ddc1632dd7af47c3552ad59ed3d4b05efc02318284f extends Twig_Template
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
        echo "<!-- Stylesheets -->
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
        echo "<!-- Main bar -->
<div class=\"mainbar\">

    <!-- Page heading -->
    <div class=\"page-head\">
        <h2 class=\"pull-left\">Categorias</h2>
        <div class=\"clearfix\"></div>
        <!-- Breadcrumb -->
        <div class=\"bread-crumb\">
            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("categorias_publicaciones");
        echo "\"><i class=\"fa fa-home\"></i>Categorias</a> 
            <!-- Divider -->
            <span class=\"divider\">/</span> 
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("categorias_publicaciones_new");
        echo "\" class=\"bread-current\">Nueva categoria</a>
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
                            <div class=\"pull-left\">Nueva categoria</div>
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
        // line 76
        echo $this->env->getExtension('routing')->getPath("categorias_publicaciones_create");
        echo "\" class=\"validate\" id=\"formCategorias\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                                    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                </form>
                            </div>
                        </div>
                        <div class=\"widget-foot\">
                            <button id=\"botonRegresar\" class=\"btn btn-default\">Regresar</button>
                            <button id=\"botonGuardar\" class=\"btn btn-primary\">Crear Pagina</button>
                            
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

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        // line 99
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery UI -->
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script> <!-- Full Google Calendar - Calendar -->
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.rateit.min.js"), "html", null, true);
        echo "\"></script> <!-- RateIt - Star rating -->
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script> <!-- prettyPhoto -->

<!-- jQuery Flot -->
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>

<!-- jQuery Notification - Noty -->
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/themes/default.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/bottom.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/topRight.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/top.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/languages/jquery.validationEngine-es.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Validation Engine Language File -->
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.validationEngine.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Validation Engine -->

<!-- Daterangepicker -->
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/daterangepicker.js"), "html", null, true);
        echo "\"></script>


<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sparklines.js"), "html", null, true);
        echo "\"></script> <!-- Sparklines -->
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Gritter -->
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script> <!-- CLEditor -->
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script> <!-- Date picker -->
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uniform.min.html"), "html", null, true);
        echo "\"></script> <!-- jQuery Uniform -->
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery SlimScroll -->
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script> <!-- Bootstrap Toggle -->
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/filter.js"), "html", null, true);
        echo "\"></script> <!-- Filter for support page -->
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script> <!-- Custom codes -->
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/charts.js"), "html", null, true);
        echo "\"></script> <!-- Charts & Graphs -->


<script>
\$(document).ready(function(){   
  \$(\".validate\").validationEngine();

  \$(\"#botonRegresar\").on(\"click\",function(){
    location.href=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("categorias_publicaciones");
        echo "\";
  });
  
  \$(\"#botonGuardar\").on(\"click\",function(){
    \$(\"#formCategorias\").submit();
  });
  
  ";
        // line 153
        if ((twig_length_filter($this->env, (isset($context["errores"]) ? $context["errores"] : $this->getContext($context, "errores"))) > 0)) {
            // line 154
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errores"]) ? $context["errores"] : $this->getContext($context, "errores")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 155
                echo "       noty({
          text: '";
                // line 156
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
                echo "',
          layout:'topRight',
          type:'error',
          timeout:2000
      }); 
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "    
  ";
        }
        // line 163
        echo "  
});

</script>
   
";
    }

    public function getTemplateName()
    {
        return "PublicacionesBundle:CategoriaPublicacion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 219,  396 => 184,  392 => 183,  388 => 182,  380 => 179,  376 => 178,  345 => 169,  178 => 81,  391 => 176,  372 => 178,  367 => 167,  502 => 247,  500 => 246,  493 => 241,  489 => 240,  481 => 234,  479 => 233,  464 => 221,  460 => 220,  456 => 219,  452 => 218,  448 => 217,  436 => 214,  432 => 213,  428 => 212,  424 => 211,  420 => 210,  383 => 197,  375 => 169,  339 => 182,  118 => 36,  90 => 28,  65 => 11,  84 => 17,  53 => 14,  405 => 204,  358 => 158,  336 => 149,  300 => 139,  371 => 194,  284 => 127,  276 => 125,  200 => 99,  188 => 83,  288 => 151,  282 => 133,  274 => 131,  174 => 80,  364 => 176,  349 => 170,  344 => 151,  317 => 134,  313 => 148,  301 => 155,  275 => 125,  215 => 104,  415 => 208,  403 => 177,  401 => 203,  361 => 190,  357 => 189,  353 => 171,  348 => 163,  334 => 154,  326 => 152,  308 => 141,  304 => 140,  286 => 134,  280 => 126,  34 => 12,  126 => 61,  259 => 130,  255 => 129,  281 => 137,  242 => 125,  234 => 116,  226 => 109,  180 => 88,  175 => 66,  110 => 34,  262 => 130,  244 => 117,  236 => 114,  232 => 112,  216 => 99,  207 => 97,  185 => 96,  248 => 121,  194 => 91,  190 => 89,  186 => 87,  170 => 79,  167 => 69,  160 => 73,  155 => 71,  152 => 70,  124 => 61,  419 => 189,  411 => 193,  397 => 178,  389 => 176,  385 => 181,  377 => 168,  373 => 178,  369 => 169,  346 => 157,  338 => 155,  332 => 148,  328 => 149,  324 => 148,  320 => 145,  316 => 144,  292 => 137,  222 => 107,  218 => 104,  210 => 102,  206 => 101,  202 => 91,  197 => 99,  354 => 157,  352 => 156,  331 => 164,  327 => 163,  323 => 162,  293 => 128,  289 => 188,  279 => 126,  261 => 120,  251 => 128,  239 => 108,  225 => 106,  211 => 103,  181 => 84,  172 => 65,  366 => 163,  350 => 156,  342 => 154,  340 => 153,  330 => 146,  319 => 138,  295 => 132,  291 => 131,  287 => 130,  277 => 126,  267 => 122,  263 => 121,  257 => 118,  253 => 117,  249 => 116,  245 => 115,  231 => 110,  213 => 104,  195 => 99,  192 => 98,  58 => 17,  23 => 1,  318 => 150,  310 => 160,  306 => 156,  302 => 139,  299 => 133,  296 => 138,  290 => 144,  266 => 127,  250 => 103,  237 => 112,  228 => 110,  150 => 64,  129 => 46,  114 => 35,  97 => 46,  77 => 18,  426 => 204,  418 => 198,  416 => 197,  394 => 177,  390 => 183,  386 => 182,  382 => 181,  378 => 165,  370 => 178,  359 => 174,  351 => 156,  347 => 155,  343 => 150,  333 => 165,  329 => 164,  325 => 136,  321 => 135,  315 => 137,  311 => 136,  307 => 135,  303 => 134,  297 => 154,  270 => 130,  265 => 131,  260 => 126,  256 => 125,  233 => 110,  223 => 108,  212 => 96,  205 => 102,  198 => 113,  191 => 98,  184 => 86,  165 => 76,  137 => 51,  127 => 47,  113 => 37,  81 => 23,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 216,  440 => 215,  437 => 147,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 185,  409 => 183,  407 => 131,  402 => 186,  398 => 185,  393 => 201,  387 => 175,  384 => 181,  381 => 180,  379 => 196,  374 => 167,  368 => 172,  365 => 166,  362 => 161,  360 => 169,  355 => 159,  341 => 168,  337 => 167,  322 => 151,  314 => 144,  312 => 143,  309 => 157,  305 => 156,  298 => 138,  294 => 145,  285 => 138,  283 => 129,  278 => 132,  268 => 134,  264 => 127,  258 => 119,  252 => 124,  247 => 115,  241 => 114,  229 => 109,  220 => 112,  214 => 101,  177 => 80,  169 => 77,  140 => 55,  132 => 48,  128 => 41,  107 => 64,  61 => 15,  273 => 125,  269 => 134,  254 => 118,  243 => 121,  240 => 116,  238 => 117,  235 => 111,  230 => 115,  227 => 109,  224 => 107,  221 => 107,  219 => 107,  217 => 104,  208 => 100,  204 => 99,  179 => 106,  159 => 61,  143 => 56,  135 => 38,  119 => 69,  102 => 29,  71 => 19,  67 => 15,  63 => 11,  59 => 30,  38 => 6,  28 => 3,  87 => 25,  26 => 6,  201 => 101,  196 => 90,  183 => 82,  171 => 77,  166 => 84,  163 => 70,  158 => 74,  156 => 58,  151 => 56,  142 => 59,  138 => 49,  136 => 50,  121 => 46,  117 => 40,  105 => 33,  91 => 27,  62 => 23,  49 => 8,  94 => 24,  89 => 19,  85 => 26,  75 => 17,  68 => 12,  56 => 13,  24 => 4,  21 => 2,  31 => 12,  25 => 6,  19 => 58,  93 => 47,  88 => 22,  78 => 15,  46 => 9,  44 => 7,  27 => 4,  79 => 19,  72 => 13,  69 => 19,  47 => 17,  40 => 7,  37 => 13,  22 => 3,  246 => 122,  157 => 68,  145 => 53,  139 => 50,  131 => 51,  123 => 60,  120 => 33,  115 => 67,  111 => 30,  108 => 29,  101 => 31,  98 => 31,  96 => 29,  83 => 25,  74 => 21,  66 => 17,  55 => 20,  52 => 26,  50 => 13,  43 => 12,  41 => 7,  35 => 5,  32 => 9,  29 => 3,  209 => 103,  203 => 94,  199 => 93,  193 => 89,  189 => 97,  187 => 87,  182 => 83,  176 => 81,  173 => 146,  168 => 77,  164 => 59,  162 => 76,  154 => 84,  149 => 54,  147 => 58,  144 => 49,  141 => 48,  133 => 50,  130 => 47,  125 => 40,  122 => 42,  116 => 38,  112 => 42,  109 => 52,  106 => 33,  103 => 30,  99 => 47,  95 => 28,  92 => 43,  86 => 25,  82 => 39,  80 => 19,  73 => 19,  64 => 27,  60 => 23,  57 => 11,  54 => 10,  51 => 11,  48 => 14,  45 => 13,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
