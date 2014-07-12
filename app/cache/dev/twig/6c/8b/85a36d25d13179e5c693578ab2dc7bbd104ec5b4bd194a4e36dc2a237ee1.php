<?php

/* BackendBundle:Usuario:edit.html.twig */
class __TwigTemplate_6c8b85a36d25d13179e5c693578ab2dc7bbd104ec5b4bd194a4e36dc2a237ee1 extends Twig_Template
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
        <h2 class=\"pull-left\">Tours</h2>
        <div class=\"clearfix\"></div>
        <!-- Breadcrumb -->
        <div class=\"bread-crumb\">
            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("users");
        echo "\"><i class=\"fa fa-home\"></i>Usuarios</a> 
            <!-- Divider -->
            <span class=\"divider\">/</span> 
            <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"bread-current\">Editar usuario</a>
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
                            <div class=\"pull-left\">Editar usuario \"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
        echo "\"</div>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"validate\" id=\"formUsuarios\"  method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                                    <input name=\"_method\" value=\"put\" type=\"hidden\"/>
                                    ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                </form>
                            </div>
                        </div>
                        <div class=\"widget-foot\">
                            <button id=\"botonRegresar\" class=\"btn btn-default\">Regresar</button>
                            ";
        // line 84
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 85
            echo "                            <button id=\"botonGuardar\" class=\"btn btn-primary\">Guardar cambios</button>
                            <div style=\"float: left; margin-right: 3px;\">
                            ";
            // line 87
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
            echo "
                            </div>        
                            ";
        }
        // line 90
        echo "                        </div>
                    </div>  

                </div>
            </div>
        </div>
    </div>
    <!-- Matter ends -->
</div>
<!-- Mainbar ends -->\t    \t
<div class=\"clearfix\"></div>
";
    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        // line 104
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery UI -->
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script> <!-- Full Google Calendar - Calendar -->
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.rateit.min.js"), "html", null, true);
        echo "\"></script> <!-- RateIt - Star rating -->
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script> <!-- prettyPhoto -->

<!-- jQuery Flot -->
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>

<!-- jQuery Notification - Noty -->
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/themes/default.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/bottom.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/topRight.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/top.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/languages/jquery.validationEngine-es.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Validation Engine Language File -->
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.validationEngine.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Validation Engine -->

<!-- Daterangepicker -->
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/daterangepicker.js"), "html", null, true);
        echo "\"></script>


<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sparklines.js"), "html", null, true);
        echo "\"></script> <!-- Sparklines -->
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Gritter -->
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script> <!-- CLEditor -->
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script> <!-- Date picker -->
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uniform.min.html"), "html", null, true);
        echo "\"></script> <!-- jQuery Uniform -->
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery SlimScroll -->
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script> <!-- Bootstrap Toggle -->
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script> <!-- Custom codes -->
<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/charts.js"), "html", null, true);
        echo "\"></script> <!-- Charts & Graphs -->


<script>
\$(document).ready(function(){   
  \$(\".validate\").validationEngine();

  \$(\"#botonRegresar\").on(\"click\",function(){
    location.href=\"";
        // line 150
        echo $this->env->getExtension('routing')->getPath("users");
        echo "\";
  });
  
  \$(\"#botonGuardar\").on(\"click\",function(){
    \$(\"#formUsuarios\").submit();
  });
  
  ";
        // line 157
        if ((twig_length_filter($this->env, (isset($context["errores"]) ? $context["errores"] : $this->getContext($context, "errores"))) > 0)) {
            // line 158
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errores"]) ? $context["errores"] : $this->getContext($context, "errores")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 159
                echo "       noty({
          text: '";
                // line 160
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
            // line 165
            echo "    
  ";
        }
        // line 167
        echo "  
});

</script>
   
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Usuario:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 158,  352 => 157,  331 => 142,  327 => 141,  323 => 140,  293 => 131,  289 => 130,  279 => 126,  261 => 120,  251 => 116,  239 => 113,  225 => 108,  211 => 104,  181 => 84,  172 => 78,  366 => 163,  350 => 156,  342 => 150,  340 => 153,  330 => 146,  319 => 139,  295 => 132,  291 => 131,  287 => 130,  277 => 126,  267 => 122,  263 => 121,  257 => 119,  253 => 117,  249 => 116,  245 => 115,  231 => 110,  213 => 104,  195 => 99,  192 => 98,  58 => 8,  23 => 1,  318 => 160,  310 => 158,  306 => 157,  302 => 156,  299 => 134,  296 => 154,  290 => 133,  266 => 133,  250 => 125,  237 => 119,  228 => 114,  150 => 64,  129 => 36,  114 => 31,  97 => 25,  77 => 18,  426 => 204,  418 => 198,  416 => 197,  394 => 184,  390 => 183,  386 => 182,  382 => 181,  378 => 167,  370 => 178,  359 => 159,  351 => 171,  347 => 155,  343 => 169,  333 => 165,  329 => 164,  325 => 163,  321 => 162,  315 => 138,  311 => 137,  307 => 136,  303 => 135,  297 => 154,  270 => 132,  265 => 121,  260 => 129,  256 => 127,  233 => 112,  223 => 108,  212 => 104,  205 => 102,  198 => 93,  191 => 89,  184 => 85,  165 => 76,  137 => 51,  127 => 47,  113 => 37,  81 => 23,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 205,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 186,  398 => 185,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 165,  368 => 112,  365 => 176,  362 => 160,  360 => 109,  355 => 172,  341 => 105,  337 => 166,  322 => 101,  314 => 159,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 153,  285 => 89,  283 => 127,  278 => 86,  268 => 134,  264 => 84,  258 => 81,  252 => 80,  247 => 115,  241 => 114,  229 => 109,  220 => 109,  214 => 69,  177 => 81,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 15,  273 => 123,  269 => 122,  254 => 92,  243 => 114,  240 => 120,  238 => 85,  235 => 112,  230 => 82,  227 => 109,  224 => 71,  221 => 107,  219 => 107,  217 => 106,  208 => 103,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 38,  119 => 42,  102 => 27,  71 => 19,  67 => 15,  63 => 11,  59 => 14,  38 => 5,  28 => 3,  87 => 25,  26 => 6,  201 => 101,  196 => 90,  183 => 85,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 32,  105 => 28,  91 => 27,  62 => 23,  49 => 19,  94 => 24,  89 => 20,  85 => 21,  75 => 17,  68 => 12,  56 => 13,  24 => 4,  21 => 2,  31 => 7,  25 => 5,  19 => 1,  93 => 28,  88 => 22,  78 => 21,  46 => 9,  44 => 7,  27 => 4,  79 => 19,  72 => 16,  69 => 15,  47 => 9,  40 => 7,  37 => 9,  22 => 2,  246 => 90,  157 => 56,  145 => 54,  139 => 52,  131 => 52,  123 => 34,  120 => 33,  115 => 43,  111 => 30,  108 => 29,  101 => 31,  98 => 31,  96 => 29,  83 => 25,  74 => 17,  66 => 17,  55 => 15,  52 => 7,  50 => 10,  43 => 12,  41 => 7,  35 => 8,  32 => 3,  29 => 3,  209 => 103,  203 => 78,  199 => 67,  193 => 90,  189 => 71,  187 => 87,  182 => 66,  176 => 71,  173 => 65,  168 => 77,  164 => 59,  162 => 76,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 50,  130 => 41,  125 => 44,  122 => 43,  116 => 38,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 26,  95 => 28,  92 => 21,  86 => 25,  82 => 20,  80 => 19,  73 => 19,  64 => 14,  60 => 11,  57 => 11,  54 => 10,  51 => 11,  48 => 8,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
