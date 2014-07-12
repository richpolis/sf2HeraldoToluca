<?php

/* BackendBundle:Configuraciones:show.html.twig */
class __TwigTemplate_694f7821e25fc36a451bef828bc858d1e814ef012dabc54c9138bbe59059b404 extends Twig_Template
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
    <!-- Bootstrap toggle -->
  <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/datatables/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
  <!-- Main stylesheet -->
  <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  <!-- Widgets stylesheet -->
  <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/widgets.css"), "html", null, true);
        echo "\">   
    <!-- Gritter Notifications stylesheet -->
  <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.gritter.css"), "html", null, true);
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
            <h2 class=\"pull-left\">Configuraciones</h2>
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
        echo $this->env->getExtension('routing')->getPath("configuraciones");
        echo "\" class=\"bread-current\">Configuraciones</a>
                        ";
        // line 51
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 52
            echo "                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("configuraciones_new");
            echo "\" class=\"btn btn-info pull-right\" style=\"color: white; margin-left: 5px;\">Crear configuracion</a>
                        ";
        }
        // line 54
        echo "                        </div>

                        <div class=\"clearfix\"></div>

                        </div>
                        <!-- Page heading ends -->

                        <!-- Matter -->

                        <div class=\"matter\">
                            <div class=\"container\" id=\"contenidoPagina\">
                                <div>
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"widget\">
                                                <div class=\"widget-head\">
                                                    <div class=\"pull-left\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "configuracion"), "html", null, true);
        echo "</div>
                                                    <div class=\"clearfix\"></div>
                                                </div>

                                                <div class=\"widget-content\">
                                                    <div class=\"padd\">
                                                        <table>
                                                            <tbody><tr>
                                                                    <td>Id:</td>
                                                                    <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Configuracion:</td>
                                                                    <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "configuracion"), "html", null, true);
        echo "</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tipo:</td>
                                                                    <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stringtipoconfiguracion"), "html", null, true);
        echo "</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Contenido:</td>
                                                                    <td>
                                                                        ";
        // line 92
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isImagen")) {
            // line 93
            echo "                                                                            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "webPath"), "html", null, true);
            echo "\" style=\"max-width: 100px;\"/>
                                                                        ";
        } else {
            // line 94
            echo "    
                                                                            ";
            // line 95
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "texto");
            echo "
                                                                        ";
        }
        // line 97
        echo "                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Activo?:</td>
                                                                    <td>
                                                                        ";
        // line 102
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isActive")) {
            // line 103
            echo "                                                                            <i class=\"fa fa-check-circle\"></i>
                                                                        ";
        } else {
            // line 105
            echo "                                                                            <i class=\"fa fa-circle\"></i>
                                                                        ";
        }
        // line 107
        echo "                                                                    </td>
                                                                </tr>
                                                                
                                                            </tbody>
                                                        </table>    
                                                    </div>
                                                </div>
                                                <div class=\"widget-foot\">
                                                    <button id=\"botonRegresar\" class=\"btn btn-default\" onclick=\"javascript:regresar('";
        // line 115
        echo $this->env->getExtension('routing')->getPath("configuraciones");
        echo "')\">Regresar</button>
                                                    <button id=\"botonEditar\" class=\"btn btn-info\" onclick=\"javascript:editarRegistro('";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("configuraciones_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "')\">Editar</button>
                                                    <div style=\"float: left; margin-right: 3px;\">
                                                        <form id=\"formEliminar\" action=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("configuraciones_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
                                                            ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger \" onclick=\"eliminarRegistro();\">Eliminar</button>
                                                    </div>        
                                                </div>
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

    // line 140
    public function block_javascripts($context, array $blocks = array())
    {
        // line 141
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery UI -->
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script> <!-- Full Google Calendar - Calendar -->
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.rateit.min.js"), "html", null, true);
        echo "\"></script> <!-- RateIt - Star rating -->
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script> <!-- prettyPhoto -->

<!-- jQuery Flot -->
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>

<!-- jQuery Notification - Noty -->
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/themes/default.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/bottom.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/topRight.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/top.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/datatables/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sparklines.js"), "html", null, true);
        echo "\"></script> <!-- Sparklines -->
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script> <!-- CLEditor -->
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script> <!-- Date picker -->
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uniform.min.html"), "html", null, true);
        echo "\"></script> <!-- jQuery Uniform -->
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery SlimScroll -->
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script> <!-- Bootstrap Toggle -->
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootbox.min.js"), "html", null, true);
        echo "\"></script> <!-- Filter for support page -->
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script> <!-- Custom codes -->
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/charts.js"), "html", null, true);
        echo "\"></script> <!-- Charts & Graphs -->


<script>
var regresar = function(url){
    location.href=url;
};

var editarRegistro = function(url){
    location.href=url;
};
    
var eliminarRegistro = function(){
  ";
        // line 186
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 187
            echo "    bootbox.confirm(\"Esta seguro de eliminar el registro?\", function(result) {
      if(result){
         \$(\"#formEliminar\").submit();
      }
    });
  ";
        } else {
            // line 193
            echo "    noty({text: 'No tienes los permisos suficientes para realizar esta accion',layout:'bottom', type:'warning', timeout:2000 });
  ";
        }
        // line 194
        echo "      
};

</script>

    
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Configuraciones:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 194,  403 => 187,  401 => 186,  361 => 167,  357 => 166,  353 => 165,  348 => 163,  334 => 158,  326 => 156,  308 => 150,  304 => 149,  286 => 143,  280 => 141,  34 => 12,  126 => 74,  259 => 113,  255 => 112,  281 => 113,  242 => 101,  234 => 106,  226 => 105,  180 => 88,  175 => 79,  110 => 34,  262 => 106,  244 => 116,  236 => 101,  232 => 100,  216 => 100,  207 => 90,  185 => 86,  248 => 104,  194 => 93,  190 => 92,  186 => 84,  170 => 78,  167 => 77,  160 => 73,  155 => 71,  152 => 70,  124 => 46,  419 => 195,  411 => 193,  397 => 179,  389 => 177,  385 => 173,  377 => 171,  373 => 170,  369 => 169,  346 => 164,  338 => 159,  332 => 159,  328 => 158,  324 => 157,  320 => 153,  316 => 152,  292 => 147,  222 => 103,  218 => 106,  210 => 104,  206 => 96,  202 => 95,  197 => 92,  354 => 166,  352 => 157,  331 => 142,  327 => 141,  323 => 140,  293 => 131,  289 => 146,  279 => 126,  261 => 120,  251 => 111,  239 => 108,  225 => 96,  211 => 91,  181 => 84,  172 => 86,  366 => 163,  350 => 165,  342 => 160,  340 => 153,  330 => 157,  319 => 139,  295 => 132,  291 => 131,  287 => 130,  277 => 140,  267 => 115,  263 => 114,  257 => 119,  253 => 119,  249 => 118,  245 => 101,  231 => 110,  213 => 97,  195 => 87,  192 => 98,  58 => 8,  23 => 1,  318 => 160,  310 => 152,  306 => 151,  302 => 150,  299 => 134,  296 => 154,  290 => 144,  266 => 107,  250 => 103,  237 => 99,  228 => 103,  150 => 64,  129 => 36,  114 => 31,  97 => 25,  77 => 18,  426 => 204,  418 => 198,  416 => 197,  394 => 184,  390 => 183,  386 => 182,  382 => 181,  378 => 167,  370 => 178,  359 => 159,  351 => 171,  347 => 155,  343 => 169,  333 => 165,  329 => 164,  325 => 163,  321 => 162,  315 => 138,  311 => 137,  307 => 274,  303 => 135,  297 => 154,  270 => 132,  265 => 121,  260 => 129,  256 => 127,  233 => 98,  223 => 108,  212 => 99,  205 => 94,  198 => 94,  191 => 89,  184 => 89,  165 => 74,  137 => 51,  127 => 47,  113 => 37,  81 => 23,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 134,  409 => 188,  407 => 131,  402 => 186,  398 => 185,  393 => 178,  387 => 122,  384 => 121,  381 => 172,  379 => 119,  374 => 165,  368 => 112,  365 => 168,  362 => 160,  360 => 169,  355 => 172,  341 => 105,  337 => 166,  322 => 101,  314 => 159,  312 => 151,  309 => 97,  305 => 95,  298 => 146,  294 => 145,  285 => 114,  283 => 127,  278 => 86,  268 => 134,  264 => 84,  258 => 108,  252 => 80,  247 => 110,  241 => 100,  229 => 97,  220 => 102,  214 => 105,  177 => 81,  169 => 60,  140 => 55,  132 => 48,  128 => 48,  107 => 64,  61 => 15,  273 => 124,  269 => 122,  254 => 104,  243 => 109,  240 => 115,  238 => 100,  235 => 110,  230 => 107,  227 => 109,  224 => 102,  221 => 95,  219 => 107,  217 => 94,  208 => 95,  204 => 90,  179 => 83,  159 => 61,  143 => 56,  135 => 38,  119 => 69,  102 => 32,  71 => 19,  67 => 15,  63 => 11,  59 => 14,  38 => 6,  28 => 3,  87 => 25,  26 => 6,  201 => 90,  196 => 90,  183 => 82,  171 => 61,  166 => 84,  163 => 70,  158 => 74,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 50,  121 => 46,  117 => 32,  105 => 33,  91 => 27,  62 => 23,  49 => 18,  94 => 24,  89 => 20,  85 => 21,  75 => 17,  68 => 12,  56 => 13,  24 => 4,  21 => 2,  31 => 12,  25 => 6,  19 => 81,  93 => 28,  88 => 22,  78 => 54,  46 => 9,  44 => 10,  27 => 4,  79 => 19,  72 => 32,  69 => 15,  47 => 17,  40 => 7,  37 => 13,  22 => 3,  246 => 102,  157 => 72,  145 => 54,  139 => 52,  131 => 51,  123 => 43,  120 => 33,  115 => 67,  111 => 30,  108 => 29,  101 => 31,  98 => 31,  96 => 29,  83 => 25,  74 => 17,  66 => 17,  55 => 20,  52 => 7,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 3,  29 => 3,  209 => 92,  203 => 89,  199 => 93,  193 => 88,  189 => 87,  187 => 87,  182 => 83,  176 => 87,  173 => 146,  168 => 75,  164 => 59,  162 => 74,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 50,  130 => 47,  125 => 44,  122 => 45,  116 => 38,  112 => 42,  109 => 65,  106 => 33,  103 => 30,  99 => 29,  95 => 28,  92 => 21,  86 => 25,  82 => 20,  80 => 19,  73 => 19,  64 => 27,  60 => 11,  57 => 11,  54 => 10,  51 => 11,  48 => 8,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
