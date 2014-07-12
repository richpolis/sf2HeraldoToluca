<?php

/* PaginasBundle:Pagina:index.html.twig */
class __TwigTemplate_fbe08be86ad8cb144abd41324223bbdbfa4babc9e04cdbcd17281d5b57882084 extends Twig_Template
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
        <h2 class=\"pull-left\">Paginas</h2>
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
        echo $this->env->getExtension('routing')->getPath("paginas");
        echo "\" class=\"bread-current\">Paginas</a>
          <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("paginas_new");
        echo "\" class=\"btn btn-info pull-right\" style=\"color: white; margin-left: 5px;\">Crear pagina</a>
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
                  <div class=\"pull-left\">Registro de paginas</div>
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
                            <th>Pagina</th>
                            <th>Descripcion</th>
                            <th>Imagen</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      ";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 96
            echo "                            <tr id=\"registro-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">
                                <td><a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pagina"), "html", null, true);
            echo "</td>
                                <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenidoEs")), 0, 250), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 101
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imagen")) > 0)) {
                // line 102
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "webPath"), "html", null, true);
                echo "\" style=\"max-width: 120px; max-width: 120px;\"/>
                                    ";
            } else {
                // line 103
                echo "    
                                        sin imagen
                                    ";
            }
            // line 106
            echo "                                </td>
                                <td>
                                    <button onclick=\"javascript:editarRegistro('";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "')\" class=\"btn btn-xs btn-warning\"><i class=\"fa fa-pencil\"></i> </button>
                                    <button onclick=\"javascript:editarRegistro('";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
        // line 114
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

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        // line 144
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery UI -->
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script> <!-- Full Google Calendar - Calendar -->
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.rateit.min.js"), "html", null, true);
        echo "\"></script> <!-- RateIt - Star rating -->
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script> <!-- prettyPhoto -->

<!-- jQuery Flot -->
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>

<!-- jQuery Notification - Noty -->
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/themes/default.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/bottom.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/topRight.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/top.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/datatables/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sparklines.js"), "html", null, true);
        echo "\"></script> <!-- Sparklines -->
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script> <!-- CLEditor -->
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script> <!-- Date picker -->
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uniform.min.html"), "html", null, true);
        echo "\"></script> <!-- jQuery Uniform -->
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery SlimScroll -->
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script> <!-- Bootstrap Toggle -->
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootbox.min.js"), "html", null, true);
        echo "\"></script> <!-- Filter for support page -->
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script> <!-- Custom codes -->
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/charts.js"), "html", null, true);
        echo "\"></script> <!-- Charts & Graphs -->


<script>
var editarRegistro = function(url){
        location.href=url;
};

\$(document).ready(function() {
    \$('#datatable').dataTable({
        \"sPaginationType\": \"full_numbers\",
        \"sNext\":\"Siguiente\",
        \"sLast\":\"Ultimo\",
        \"sFirst\":\"Primero\",
        \"sPrevious\": \"Anterior\",
    });
});
</script>

    
";
    }

    public function getTemplateName()
    {
        return "PaginasBundle:Pagina:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 238,  445 => 212,  441 => 211,  462 => 225,  417 => 205,  356 => 186,  422 => 188,  410 => 183,  400 => 180,  552 => 274,  550 => 273,  543 => 268,  539 => 267,  531 => 261,  529 => 260,  514 => 248,  510 => 247,  506 => 246,  498 => 244,  494 => 243,  490 => 242,  486 => 241,  482 => 240,  478 => 239,  470 => 231,  465 => 235,  459 => 232,  455 => 231,  451 => 230,  447 => 229,  443 => 228,  433 => 209,  429 => 208,  425 => 207,  421 => 206,  153 => 56,  363 => 161,  271 => 125,  335 => 148,  272 => 133,  434 => 219,  396 => 199,  392 => 183,  388 => 172,  380 => 179,  376 => 178,  345 => 155,  178 => 81,  391 => 176,  372 => 165,  367 => 162,  502 => 245,  500 => 246,  493 => 241,  489 => 240,  481 => 237,  479 => 233,  464 => 221,  460 => 224,  456 => 219,  452 => 218,  448 => 217,  436 => 214,  432 => 194,  428 => 212,  424 => 211,  420 => 213,  383 => 197,  375 => 164,  339 => 182,  118 => 36,  90 => 28,  65 => 11,  84 => 17,  53 => 14,  405 => 202,  358 => 157,  336 => 162,  300 => 152,  371 => 163,  284 => 134,  276 => 144,  200 => 93,  188 => 96,  288 => 135,  282 => 146,  274 => 130,  174 => 80,  364 => 163,  349 => 168,  344 => 166,  317 => 141,  313 => 140,  301 => 155,  275 => 126,  215 => 100,  415 => 218,  403 => 215,  401 => 201,  361 => 171,  357 => 170,  353 => 169,  348 => 171,  334 => 162,  326 => 160,  308 => 154,  304 => 153,  286 => 147,  280 => 133,  34 => 12,  126 => 61,  259 => 127,  255 => 129,  281 => 137,  242 => 114,  234 => 113,  226 => 109,  180 => 82,  175 => 72,  110 => 34,  262 => 127,  244 => 121,  236 => 112,  232 => 111,  216 => 103,  207 => 97,  185 => 96,  248 => 122,  194 => 88,  190 => 89,  186 => 83,  170 => 76,  167 => 69,  160 => 73,  155 => 71,  152 => 70,  124 => 61,  419 => 189,  411 => 186,  397 => 187,  389 => 185,  385 => 181,  377 => 175,  373 => 174,  369 => 173,  346 => 182,  338 => 163,  332 => 172,  328 => 177,  324 => 159,  320 => 173,  316 => 156,  292 => 136,  222 => 104,  218 => 108,  210 => 102,  206 => 95,  202 => 95,  197 => 99,  354 => 156,  352 => 155,  331 => 150,  327 => 149,  323 => 162,  293 => 132,  289 => 131,  279 => 127,  261 => 121,  251 => 118,  239 => 114,  225 => 108,  211 => 103,  181 => 84,  172 => 78,  366 => 163,  350 => 156,  342 => 154,  340 => 153,  330 => 161,  319 => 138,  295 => 132,  291 => 131,  287 => 130,  277 => 126,  267 => 124,  263 => 121,  257 => 120,  253 => 119,  249 => 118,  245 => 117,  231 => 112,  213 => 104,  195 => 99,  192 => 98,  58 => 17,  23 => 1,  318 => 172,  310 => 154,  306 => 141,  302 => 140,  299 => 135,  296 => 153,  290 => 148,  266 => 128,  250 => 120,  237 => 112,  228 => 110,  150 => 64,  129 => 46,  114 => 35,  97 => 46,  77 => 18,  426 => 190,  418 => 198,  416 => 197,  394 => 176,  390 => 196,  386 => 195,  382 => 194,  378 => 193,  370 => 178,  359 => 160,  351 => 158,  347 => 155,  343 => 150,  333 => 145,  329 => 144,  325 => 143,  321 => 142,  315 => 137,  311 => 136,  307 => 135,  303 => 136,  297 => 154,  270 => 129,  265 => 125,  260 => 133,  256 => 126,  233 => 110,  223 => 108,  212 => 96,  205 => 102,  198 => 97,  191 => 86,  184 => 95,  165 => 76,  137 => 51,  127 => 47,  113 => 37,  81 => 23,  76 => 21,  480 => 162,  474 => 232,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 216,  440 => 215,  437 => 210,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 204,  409 => 203,  407 => 182,  402 => 181,  398 => 185,  393 => 186,  387 => 208,  384 => 170,  381 => 176,  379 => 165,  374 => 192,  368 => 189,  365 => 172,  362 => 162,  360 => 187,  355 => 159,  341 => 147,  337 => 146,  322 => 159,  314 => 155,  312 => 155,  309 => 139,  305 => 142,  298 => 146,  294 => 149,  285 => 138,  283 => 128,  278 => 132,  268 => 134,  264 => 128,  258 => 126,  252 => 123,  247 => 115,  241 => 114,  229 => 109,  220 => 112,  214 => 105,  177 => 80,  169 => 71,  140 => 55,  132 => 48,  128 => 41,  107 => 64,  61 => 15,  273 => 143,  269 => 126,  254 => 118,  243 => 119,  240 => 118,  238 => 114,  235 => 113,  230 => 109,  227 => 111,  224 => 107,  221 => 106,  219 => 107,  217 => 104,  208 => 101,  204 => 102,  179 => 82,  159 => 61,  143 => 56,  135 => 38,  119 => 69,  102 => 29,  71 => 19,  67 => 15,  63 => 11,  59 => 30,  38 => 6,  28 => 3,  87 => 25,  26 => 6,  201 => 101,  196 => 90,  183 => 94,  171 => 77,  166 => 84,  163 => 70,  158 => 74,  156 => 58,  151 => 56,  142 => 59,  138 => 49,  136 => 50,  121 => 46,  117 => 40,  105 => 33,  91 => 27,  62 => 23,  49 => 8,  94 => 24,  89 => 19,  85 => 26,  75 => 17,  68 => 12,  56 => 13,  24 => 4,  21 => 2,  31 => 12,  25 => 6,  19 => 58,  93 => 47,  88 => 22,  78 => 15,  46 => 9,  44 => 7,  27 => 4,  79 => 19,  72 => 13,  69 => 19,  47 => 17,  40 => 7,  37 => 13,  22 => 3,  246 => 116,  157 => 57,  145 => 53,  139 => 50,  131 => 51,  123 => 60,  120 => 33,  115 => 67,  111 => 30,  108 => 29,  101 => 31,  98 => 31,  96 => 29,  83 => 25,  74 => 21,  66 => 17,  55 => 20,  52 => 26,  50 => 13,  43 => 12,  41 => 7,  35 => 5,  32 => 9,  29 => 3,  209 => 103,  203 => 99,  199 => 98,  193 => 97,  189 => 97,  187 => 95,  182 => 83,  176 => 82,  173 => 146,  168 => 77,  164 => 70,  162 => 76,  154 => 84,  149 => 54,  147 => 56,  144 => 49,  141 => 53,  133 => 50,  130 => 47,  125 => 40,  122 => 42,  116 => 38,  112 => 42,  109 => 52,  106 => 33,  103 => 30,  99 => 47,  95 => 28,  92 => 43,  86 => 25,  82 => 39,  80 => 19,  73 => 19,  64 => 27,  60 => 23,  57 => 11,  54 => 10,  51 => 11,  48 => 14,  45 => 13,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
