<?php

/* PublicacionesBundle:CategoriaPublicacion:index.html.twig */
class __TwigTemplate_caae390d8bfdcfdc125db71bc7980066c36a361cf8b77d22ac42bb3572a341b0 extends Twig_Template
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
        <h2 class=\"pull-left\">Categorias</h2>
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
        echo "\" class=\"bread-current\">Categorias</a>
          <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("categorias_publicaciones_new");
        echo "\" class=\"btn btn-info pull-right\" style=\"color: white; margin-left: 5px;\">Crear categoria</a>
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
                  <div class=\"pull-left\">Registro de Categorias Publicaciones</div>
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
                            <th>Activo?</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id=\"cuerpoTabla\">
                      ";
        // line 94
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 95
            echo "                            <tr id=\"registro-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">
                                <td><a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_publicaciones_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoria"), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 99
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isActive")) {
                // line 100
                echo "                                        <i class=\"fa fa-check-circle\"></i>
                                    ";
            } else {
                // line 102
                echo "                                        <i class=\"fa fa-circle\"></i>
                                    ";
            }
            // line 104
            echo "                                </td>
                                <td>
                                    <button onclick=\"javascript:editarRegistro('";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_publicaciones_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "')\" class=\"btn btn-xs btn-warning\"><i class=\"fa fa-pencil\"></i> </button>
                                    <button onclick=\"javascript:editarRegistro('";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_publicaciones_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "','#registro-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\" class=\"btn btn-xs btn-info\"><i class=\"fa fa-folder-open\"></i> </button>
                                    <button onclick=\"javascript:editarRegistro('";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicaciones_categoria", array("slug" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "slug"))), "html", null, true);
            echo "','#registro-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\" class=\"btn btn-xs btn-info\"><i class=\"fa fa-files-o\"></i> </button>
                                </td>
                                
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
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

    // line 142
    public function block_javascripts($context, array $blocks = array())
    {
        // line 143
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery UI -->
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script> <!-- Full Google Calendar - Calendar -->
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.rateit.min.js"), "html", null, true);
        echo "\"></script> <!-- RateIt - Star rating -->
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script> <!-- prettyPhoto -->

<!-- jQuery Flot -->
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>

<!-- jQuery Notification - Noty -->
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/themes/default.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/bottom.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/topRight.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/top.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/datatables/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sparklines.js"), "html", null, true);
        echo "\"></script> <!-- Sparklines -->
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script> <!-- CLEditor -->
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script> <!-- Date picker -->
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uniform.min.html"), "html", null, true);
        echo "\"></script> <!-- jQuery Uniform -->
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery SlimScroll -->
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script> <!-- Bootstrap Toggle -->
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootbox.min.js"), "html", null, true);
        echo "\"></script> <!-- Filter for support page -->
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script> <!-- Custom codes -->
<script src=\"";
        // line 175
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
        // line 213
        echo $this->env->getExtension('routing')->getPath("categorias_publicaciones_ordenar");
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
        return "PublicacionesBundle:CategoriaPublicacion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 171,  271 => 142,  335 => 148,  272 => 124,  434 => 219,  396 => 184,  392 => 183,  388 => 182,  380 => 179,  376 => 178,  345 => 155,  178 => 81,  391 => 176,  372 => 178,  367 => 172,  502 => 247,  500 => 246,  493 => 241,  489 => 240,  481 => 234,  479 => 233,  464 => 221,  460 => 220,  456 => 219,  452 => 218,  448 => 217,  436 => 214,  432 => 213,  428 => 212,  424 => 211,  420 => 213,  383 => 197,  375 => 174,  339 => 182,  118 => 36,  90 => 28,  65 => 11,  84 => 17,  53 => 14,  405 => 204,  358 => 158,  336 => 162,  300 => 134,  371 => 173,  284 => 146,  276 => 125,  200 => 99,  188 => 83,  288 => 147,  282 => 128,  274 => 143,  174 => 80,  364 => 176,  349 => 170,  344 => 151,  317 => 134,  313 => 148,  301 => 155,  275 => 125,  215 => 104,  415 => 208,  403 => 177,  401 => 203,  361 => 190,  357 => 189,  353 => 171,  348 => 163,  334 => 154,  326 => 152,  308 => 136,  304 => 135,  286 => 129,  280 => 145,  34 => 12,  126 => 61,  259 => 130,  255 => 129,  281 => 137,  242 => 125,  234 => 116,  226 => 109,  180 => 88,  175 => 66,  110 => 34,  262 => 120,  244 => 114,  236 => 112,  232 => 111,  216 => 99,  207 => 97,  185 => 96,  248 => 121,  194 => 91,  190 => 89,  186 => 87,  170 => 79,  167 => 69,  160 => 73,  155 => 71,  152 => 70,  124 => 61,  419 => 189,  411 => 193,  397 => 178,  389 => 176,  385 => 181,  377 => 168,  373 => 178,  369 => 169,  346 => 157,  338 => 155,  332 => 161,  328 => 160,  324 => 159,  320 => 158,  316 => 138,  292 => 148,  222 => 107,  218 => 106,  210 => 104,  206 => 101,  202 => 91,  197 => 99,  354 => 157,  352 => 157,  331 => 164,  327 => 163,  323 => 162,  293 => 128,  289 => 188,  279 => 126,  261 => 120,  251 => 128,  239 => 108,  225 => 106,  211 => 103,  181 => 84,  172 => 78,  366 => 163,  350 => 156,  342 => 165,  340 => 153,  330 => 146,  319 => 138,  295 => 132,  291 => 131,  287 => 130,  277 => 126,  267 => 122,  263 => 121,  257 => 118,  253 => 117,  249 => 116,  245 => 115,  231 => 110,  213 => 104,  195 => 99,  192 => 96,  58 => 17,  23 => 1,  318 => 150,  310 => 154,  306 => 153,  302 => 152,  299 => 133,  296 => 133,  290 => 144,  266 => 121,  250 => 117,  237 => 112,  228 => 110,  150 => 64,  129 => 46,  114 => 35,  97 => 46,  77 => 18,  426 => 204,  418 => 198,  416 => 197,  394 => 177,  390 => 183,  386 => 182,  382 => 181,  378 => 165,  370 => 178,  359 => 170,  351 => 168,  347 => 167,  343 => 150,  333 => 165,  329 => 164,  325 => 136,  321 => 135,  315 => 137,  311 => 136,  307 => 135,  303 => 134,  297 => 154,  270 => 130,  265 => 131,  260 => 126,  256 => 125,  233 => 110,  223 => 108,  212 => 96,  205 => 100,  198 => 97,  191 => 98,  184 => 86,  165 => 76,  137 => 51,  127 => 47,  113 => 37,  81 => 23,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 216,  440 => 215,  437 => 147,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 185,  409 => 183,  407 => 131,  402 => 186,  398 => 185,  393 => 201,  387 => 175,  384 => 181,  381 => 180,  379 => 175,  374 => 167,  368 => 172,  365 => 166,  362 => 161,  360 => 169,  355 => 169,  341 => 168,  337 => 167,  322 => 151,  314 => 155,  312 => 137,  309 => 157,  305 => 156,  298 => 151,  294 => 145,  285 => 138,  283 => 129,  278 => 132,  268 => 134,  264 => 127,  258 => 119,  252 => 124,  247 => 115,  241 => 114,  229 => 109,  220 => 112,  214 => 105,  177 => 80,  169 => 77,  140 => 55,  132 => 48,  128 => 41,  107 => 64,  61 => 15,  273 => 125,  269 => 134,  254 => 118,  243 => 121,  240 => 113,  238 => 117,  235 => 111,  230 => 115,  227 => 108,  224 => 107,  221 => 107,  219 => 107,  217 => 106,  208 => 100,  204 => 102,  179 => 106,  159 => 61,  143 => 56,  135 => 38,  119 => 69,  102 => 29,  71 => 19,  67 => 15,  63 => 11,  59 => 30,  38 => 6,  28 => 3,  87 => 25,  26 => 6,  201 => 101,  196 => 90,  183 => 94,  171 => 77,  166 => 84,  163 => 70,  158 => 74,  156 => 58,  151 => 56,  142 => 59,  138 => 49,  136 => 50,  121 => 46,  117 => 40,  105 => 33,  91 => 27,  62 => 23,  49 => 8,  94 => 24,  89 => 19,  85 => 26,  75 => 17,  68 => 12,  56 => 13,  24 => 4,  21 => 2,  31 => 12,  25 => 6,  19 => 58,  93 => 47,  88 => 22,  78 => 15,  46 => 9,  44 => 7,  27 => 4,  79 => 19,  72 => 13,  69 => 19,  47 => 17,  40 => 7,  37 => 13,  22 => 3,  246 => 122,  157 => 68,  145 => 53,  139 => 50,  131 => 51,  123 => 60,  120 => 33,  115 => 67,  111 => 30,  108 => 29,  101 => 31,  98 => 31,  96 => 29,  83 => 25,  74 => 21,  66 => 17,  55 => 20,  52 => 26,  50 => 13,  43 => 12,  41 => 7,  35 => 5,  32 => 9,  29 => 3,  209 => 102,  203 => 99,  199 => 93,  193 => 89,  189 => 97,  187 => 95,  182 => 83,  176 => 81,  173 => 146,  168 => 77,  164 => 59,  162 => 76,  154 => 84,  149 => 54,  147 => 58,  144 => 49,  141 => 48,  133 => 50,  130 => 47,  125 => 40,  122 => 42,  116 => 38,  112 => 42,  109 => 52,  106 => 33,  103 => 30,  99 => 47,  95 => 28,  92 => 43,  86 => 25,  82 => 39,  80 => 19,  73 => 19,  64 => 27,  60 => 23,  57 => 11,  54 => 10,  51 => 11,  48 => 14,  45 => 13,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
