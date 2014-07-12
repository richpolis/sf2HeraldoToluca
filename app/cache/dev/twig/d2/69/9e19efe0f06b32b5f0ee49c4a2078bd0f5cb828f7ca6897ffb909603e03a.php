<?php

/* PublicacionesBundle:Publicacion:index.html.twig */
class __TwigTemplate_d2699e19efe0f06b32b5f0ee49c4a2078bd0f5cb828f7ca6897ffb909603e03a extends Twig_Template
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
        echo "          <!-- Main bar -->
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
        echo twig_escape_filter($this->env, (isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "html", null, true);
        echo "</a>
          <Divider>
          <span class=\"divider\">/</span> 
          <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("publicaciones");
        echo "\" class=\"bread-current\">Proyectos</a>
          <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("publicaciones_new");
        echo "\" class=\"btn btn-info pull-right\" style=\"color: white; margin-left: 5px;\">Crear Proyecto</a>
        </div>
        
        <div class=\"clearfix\"></div>

      </div>
      <!-- Page heading ends -->

      <!-- Matter -->

      <div class=\"matter\">
        <div class=\"container\">

          <!-- Table -->

            <div class=\"row\">

              <div class=\"col-md-12\">

                <div class=\"widget\">

                <div class=\"widget-head\">
                  <div class=\"pull-left\">Registro de proyectos de ";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "html", null, true);
        echo "</div>
                  <!--div class=\"widget-icons pull-right\">
                    <a href=\"#\" class=\"wminimize\"><i class=\"fa fa-chevron-up\"></i></a>
                    <a href=\"#\" class=\"wsettings\"><i class=\"fa fa-wrench\"></i></a>  
                    <a href=\"#\" class=\"wclose\"><i class=\"fa fa-times\"></i></a>
                  </div-->  
                  <div class=\"clearfix\"></div>
                </div>

                  <div class=\"widget-content\">

                    <table id=\"datatable\" class=\"table table-striped table-bordered table-hover\">
                      <thead>
                        <tr>
                            <th>Id</th>
                            <th>Categoria</th>
                            <th>Imagen</th>
                            <th>Proyecto</th>
                            <th>Cliente</th>
                            <th>Empezo</th>
                            <th>Termino</th>
                            <th>Activo?</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id=\"cuerpoTabla\">
                      ";
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 103
            echo "                            <tr id=\"registro-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">
                                <td><a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicaciones_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoria"), "html", null, true);
            echo "</td>
                                <td>
                                ";
            // line 107
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imagen")) > 0)) {
                // line 108
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "thumbnailWebPath"), "html", null, true);
                echo "\" style=\"max-height: 100px; max-width: 100px;\"/>
                                ";
            } else {
                // line 110
                echo "                                    sin imagen 
                                ";
            }
            // line 112
            echo "                                </td>
                                <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tituloEs"), "html", null, true);
            echo "</td>
                                <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente"), "html", null, true);
            echo "</td>
                                <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "empezo"), "html", null, true);
            echo "</td>
                                <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "termino"), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 118
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isActive")) {
                // line 119
                echo "                                        <i class=\"fa fa-check-circle\"></i>
                                    ";
            } else {
                // line 121
                echo "                                        <i class=\"fa fa-circle\"></i>
                                    ";
            }
            // line 123
            echo "                                </td>
                                <td>
                                    <button onclick=\"javascript:editarRegistro('";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicaciones_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "')\" class=\"btn btn-xs btn-warning\"><i class=\"fa fa-pencil\"></i> </button>
                                    <button onclick=\"javascript:editarRegistro('";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicaciones_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "','#registro-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\" class=\"btn btn-xs btn-info\"><i class=\"fa fa-folder-open\"></i> </button>
                                </td>
                                
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "
                      </tbody>
                    </table>

                    <div class=\"widget-foot\">
                       <br><br>
                      <div class=\"clearfix\"></div>
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

    // line 160
    public function block_javascripts($context, array $blocks = array())
    {
        // line 161
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery UI -->
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script> <!-- Full Google Calendar - Calendar -->
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.rateit.min.js"), "html", null, true);
        echo "\"></script> <!-- RateIt - Star rating -->
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script> <!-- prettyPhoto -->

<!-- jQuery Flot -->
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>

<!-- jQuery Notification - Noty -->
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/themes/default.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/bottom.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/topRight.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/top.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/datatables/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sparklines.js"), "html", null, true);
        echo "\"></script> <!-- Sparklines -->
<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script> <!-- CLEditor -->
<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script> <!-- Date picker -->
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uniform.min.html"), "html", null, true);
        echo "\"></script> <!-- jQuery Uniform -->
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery SlimScroll -->
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script> <!-- Bootstrap Toggle -->
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootbox.min.js"), "html", null, true);
        echo "\"></script> <!-- Filter for support page -->
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script> <!-- Custom codes -->
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/charts.js"), "html", null, true);
        echo "\"></script> <!-- Charts & Graphs -->


<script>
var editarRegistro = function(url){
        location.href=url;
};

\$(document).ready(function() {
    /*\$('#datatable').dataTable({
        \"sPaginationType\": \"full_numbers\",
        \"sNext\":\"Siguiente\",
        \"sLast\":\"Ultimo\",
        \"sFirst\":\"Primero\",
        \"sPrevious\": \"Anterior\",
    });*/
\t
\tiniciarlizarSorteable();
\t
});

function iniciarlizarSorteable(){
    \$(\"#cuerpoTabla\").sortable({
        items: \"tr\",
        cursor: 'move',
        opacity: 0.6,
        update: function() {
            sendOrderToServer();
        }
    });
    \$(\"#cuerpoTabla\").disableSelection();
}

function sendOrderToServer() {
    debugger;
    \$(\".loader\").fadeIn();
    var order = \$(\"#cuerpoTabla\").sortable('serialize');
    \$.ajax({
       url: '";
        // line 231
        echo $this->env->getExtension('routing')->getPath("publicaciones_ordenar");
        echo "?' + order,
       type: 'PATCH',
       data: order,
       dataType: 'json',
       success: function(data){
          noty({
                text: 'Actualizacion realizada',
                layout:'topRight',
                type:'success',
                timeout:2000
          });
          console.log(data);
          \$(\".loader\").fadeOut();
       },
       error: function(data){
           noty({
                text: 'Error de actualizacion',
                layout:'topRight',
                type:'error',
                timeout:2000
            });
           console.log(data);
           \$(\".loader\").fadeOut();
       },
    });
            
}

</script>

    
";
    }

    public function getTemplateName()
    {
        return "PublicacionesBundle:Publicacion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 231,  417 => 192,  356 => 173,  422 => 188,  410 => 183,  400 => 180,  552 => 274,  550 => 273,  543 => 268,  539 => 267,  531 => 261,  529 => 260,  514 => 248,  510 => 247,  506 => 246,  498 => 244,  494 => 243,  490 => 242,  486 => 241,  482 => 240,  478 => 239,  470 => 237,  465 => 235,  459 => 232,  455 => 231,  451 => 230,  447 => 229,  443 => 228,  433 => 224,  429 => 223,  425 => 222,  421 => 193,  153 => 56,  363 => 161,  271 => 142,  335 => 148,  272 => 133,  434 => 219,  396 => 184,  392 => 183,  388 => 182,  380 => 179,  376 => 178,  345 => 155,  178 => 81,  391 => 176,  372 => 178,  367 => 162,  502 => 245,  500 => 246,  493 => 241,  489 => 240,  481 => 234,  479 => 233,  464 => 221,  460 => 220,  456 => 219,  452 => 218,  448 => 217,  436 => 214,  432 => 194,  428 => 212,  424 => 211,  420 => 213,  383 => 197,  375 => 164,  339 => 182,  118 => 36,  90 => 28,  65 => 11,  84 => 17,  53 => 14,  405 => 189,  358 => 157,  336 => 162,  300 => 134,  371 => 163,  284 => 134,  276 => 125,  200 => 99,  188 => 86,  288 => 135,  282 => 131,  274 => 130,  174 => 80,  364 => 176,  349 => 170,  344 => 170,  317 => 145,  313 => 160,  301 => 155,  275 => 125,  215 => 100,  415 => 218,  403 => 215,  401 => 188,  361 => 190,  357 => 189,  353 => 171,  348 => 171,  334 => 166,  326 => 164,  308 => 136,  304 => 135,  286 => 129,  280 => 133,  34 => 12,  126 => 61,  259 => 127,  255 => 129,  281 => 137,  242 => 115,  234 => 113,  226 => 109,  180 => 88,  175 => 72,  110 => 34,  262 => 127,  244 => 121,  236 => 112,  232 => 111,  216 => 99,  207 => 97,  185 => 96,  248 => 122,  194 => 88,  190 => 89,  186 => 87,  170 => 76,  167 => 69,  160 => 73,  155 => 71,  152 => 70,  124 => 61,  419 => 189,  411 => 186,  397 => 187,  389 => 185,  385 => 181,  377 => 168,  373 => 178,  369 => 165,  346 => 154,  338 => 152,  332 => 172,  328 => 160,  324 => 159,  320 => 158,  316 => 161,  292 => 136,  222 => 104,  218 => 106,  210 => 96,  206 => 95,  202 => 91,  197 => 99,  354 => 156,  352 => 172,  331 => 150,  327 => 149,  323 => 162,  293 => 128,  289 => 188,  279 => 126,  261 => 123,  251 => 118,  239 => 108,  225 => 102,  211 => 103,  181 => 84,  172 => 78,  366 => 177,  350 => 155,  342 => 153,  340 => 169,  330 => 165,  319 => 138,  295 => 138,  291 => 137,  287 => 136,  277 => 132,  267 => 122,  263 => 121,  257 => 121,  253 => 119,  249 => 116,  245 => 115,  231 => 112,  213 => 104,  195 => 90,  192 => 87,  58 => 17,  23 => 1,  318 => 150,  310 => 154,  306 => 141,  302 => 140,  299 => 139,  296 => 137,  290 => 144,  266 => 128,  250 => 120,  237 => 112,  228 => 110,  150 => 64,  129 => 46,  114 => 35,  97 => 46,  77 => 18,  426 => 190,  418 => 198,  416 => 197,  394 => 212,  390 => 173,  386 => 174,  382 => 181,  378 => 180,  370 => 178,  359 => 160,  351 => 158,  347 => 157,  343 => 150,  333 => 165,  329 => 164,  325 => 136,  321 => 146,  315 => 158,  311 => 136,  307 => 135,  303 => 134,  297 => 154,  270 => 129,  265 => 125,  260 => 126,  256 => 126,  233 => 110,  223 => 108,  212 => 96,  205 => 100,  198 => 97,  191 => 98,  184 => 85,  165 => 76,  137 => 51,  127 => 47,  113 => 37,  81 => 23,  76 => 21,  480 => 162,  474 => 238,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 216,  440 => 215,  437 => 225,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 191,  409 => 190,  407 => 182,  402 => 181,  398 => 185,  393 => 186,  387 => 208,  384 => 183,  381 => 173,  379 => 165,  374 => 179,  368 => 172,  365 => 189,  362 => 176,  360 => 187,  355 => 159,  341 => 154,  337 => 153,  322 => 163,  314 => 155,  312 => 144,  309 => 143,  305 => 142,  298 => 146,  294 => 144,  285 => 138,  283 => 135,  278 => 132,  268 => 134,  264 => 128,  258 => 126,  252 => 123,  247 => 115,  241 => 114,  229 => 108,  220 => 112,  214 => 105,  177 => 80,  169 => 77,  140 => 55,  132 => 48,  128 => 41,  107 => 64,  61 => 15,  273 => 131,  269 => 126,  254 => 118,  243 => 116,  240 => 120,  238 => 114,  235 => 111,  230 => 105,  227 => 110,  224 => 107,  221 => 108,  219 => 107,  217 => 100,  208 => 104,  204 => 102,  179 => 82,  159 => 61,  143 => 56,  135 => 38,  119 => 69,  102 => 29,  71 => 19,  67 => 15,  63 => 11,  59 => 30,  38 => 6,  28 => 3,  87 => 25,  26 => 6,  201 => 92,  196 => 90,  183 => 94,  171 => 77,  166 => 84,  163 => 70,  158 => 74,  156 => 58,  151 => 56,  142 => 59,  138 => 49,  136 => 50,  121 => 46,  117 => 40,  105 => 33,  91 => 27,  62 => 23,  49 => 8,  94 => 24,  89 => 19,  85 => 26,  75 => 17,  68 => 12,  56 => 13,  24 => 4,  21 => 2,  31 => 12,  25 => 6,  19 => 58,  93 => 47,  88 => 22,  78 => 15,  46 => 9,  44 => 7,  27 => 4,  79 => 19,  72 => 13,  69 => 19,  47 => 17,  40 => 7,  37 => 13,  22 => 3,  246 => 116,  157 => 57,  145 => 54,  139 => 50,  131 => 51,  123 => 60,  120 => 33,  115 => 67,  111 => 30,  108 => 29,  101 => 31,  98 => 31,  96 => 29,  83 => 25,  74 => 21,  66 => 17,  55 => 20,  52 => 26,  50 => 13,  43 => 12,  41 => 7,  35 => 5,  32 => 9,  29 => 3,  209 => 102,  203 => 103,  199 => 102,  193 => 89,  189 => 97,  187 => 95,  182 => 83,  176 => 82,  173 => 146,  168 => 77,  164 => 70,  162 => 76,  154 => 84,  149 => 54,  147 => 56,  144 => 49,  141 => 53,  133 => 50,  130 => 47,  125 => 40,  122 => 42,  116 => 38,  112 => 42,  109 => 52,  106 => 33,  103 => 30,  99 => 47,  95 => 28,  92 => 43,  86 => 25,  82 => 39,  80 => 19,  73 => 19,  64 => 27,  60 => 23,  57 => 11,  54 => 10,  51 => 11,  48 => 14,  45 => 13,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
