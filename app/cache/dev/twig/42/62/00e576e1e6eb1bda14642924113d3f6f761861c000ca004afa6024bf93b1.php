<?php

/* BackendBundle:Usuario:index.html.twig */
class __TwigTemplate_426200e576e1e6eb1bda14642924113d3f6f761861c000ca004afa6024bf93b1 extends Twig_Template
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
        echo "\t<!-- Stylesheets -->
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
        <h2 class=\"pull-left\">Usuarios</h2>
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
        echo $this->env->getExtension('routing')->getPath("users");
        echo "\" class=\"bread-current\">Usuarios</a>
          ";
        // line 51
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 52
            echo "          <a href=\"";
            echo $this->env->getExtension('routing')->getPath("users_new");
            echo "\" class=\"btn btn-info pull-right\" style=\"color: white; margin-left: 5px;\">Crear usuario</a>
          ";
        }
        // line 54
        echo "        </div>
        
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
                  <div class=\"pull-left\">Registro de Usuarios</div>
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
                            <th>Username</th>
                            <th>Email</th>
                            <th>Nombre</th>
                            <th>Grupo</th>
                            <th>Creado</th>
                            <th>Actualizado</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      ";
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 101
            echo "                            <tr id=\"registro-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">
                                <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                                <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
            echo "</td>
                                <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                                <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</td>
                                <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stringTipoGrupo"), "html", null, true);
            echo "</td>
                                <td>";
            // line 107
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 108
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updatedAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updatedAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                <td>
                                    <button onclick=\"javascript:editarRegistro('";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "')\" class=\"btn btn-xs btn-warning\"><i class=\"fa fa-pencil\"></i> </button>
\t\t\t\t\t\t\t\t\t<button onclick=\"javascript:editarRegistro('";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "','#registro-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\" class=\"btn btn-xs btn-info\"><i class=\"fa fa-folder-open\"></i> </button>
                                    <button onclick=\"javascript:eliminarRegistro('";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "','#registro-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\" class=\"btn btn-xs btn-danger\"><i class=\"fa fa-times\"></i></button>
                                </td>
                                
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
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

    // line 146
    public function block_javascripts($context, array $blocks = array())
    {
        // line 147
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery UI -->
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script> <!-- Full Google Calendar - Calendar -->
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.rateit.min.js"), "html", null, true);
        echo "\"></script> <!-- RateIt - Star rating -->
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script> <!-- prettyPhoto -->

<!-- jQuery Flot -->
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>

<!-- jQuery Notification - Noty -->
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/themes/default.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/bottom.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/topRight.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/top.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/datatables/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sparklines.js"), "html", null, true);
        echo "\"></script> <!-- Sparklines -->
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script> <!-- CLEditor -->
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script> <!-- Date picker -->
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uniform.min.html"), "html", null, true);
        echo "\"></script> <!-- jQuery Uniform -->
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery SlimScroll -->
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script> <!-- Bootstrap Toggle -->
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootbox.min.js"), "html", null, true);
        echo "\"></script> <!-- Filter for support page -->
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script> <!-- Custom codes -->
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/charts.js"), "html", null, true);
        echo "\"></script> <!-- Charts & Graphs -->


<script>
var editarRegistro = function(url){
        location.href=url;
};
    
var eliminarRegistro = function(url,idRegistro){
  ";
        // line 188
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 189
            echo "    bootbox.confirm(\"Esta seguro de eliminar el registro?\", function(result) {
      if(result){
         location.href=url;
      }
    });
  ";
        } else {
            // line 195
            echo "    noty({text: 'No tienes los permisos suficientes para realizar esta accion',layout:'bottom', type:'warning', timeout:2000 });
  ";
        }
        // line 196
        echo "      
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
        return "BackendBundle:Usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 195,  411 => 189,  397 => 179,  389 => 177,  385 => 176,  377 => 174,  373 => 173,  369 => 172,  346 => 164,  338 => 162,  332 => 159,  328 => 158,  324 => 157,  320 => 156,  316 => 155,  292 => 147,  222 => 107,  218 => 106,  210 => 104,  206 => 103,  202 => 102,  197 => 101,  354 => 166,  352 => 157,  331 => 142,  327 => 141,  323 => 140,  293 => 131,  289 => 146,  279 => 126,  261 => 120,  251 => 116,  239 => 111,  225 => 108,  211 => 104,  181 => 84,  172 => 78,  366 => 163,  350 => 165,  342 => 163,  340 => 153,  330 => 146,  319 => 139,  295 => 132,  291 => 131,  287 => 130,  277 => 126,  267 => 122,  263 => 121,  257 => 119,  253 => 117,  249 => 116,  245 => 112,  231 => 110,  213 => 104,  195 => 99,  192 => 98,  58 => 8,  23 => 1,  318 => 160,  310 => 152,  306 => 151,  302 => 150,  299 => 134,  296 => 154,  290 => 133,  266 => 133,  250 => 125,  237 => 119,  228 => 108,  150 => 64,  129 => 36,  114 => 31,  97 => 25,  77 => 18,  426 => 204,  418 => 198,  416 => 197,  394 => 184,  390 => 183,  386 => 182,  382 => 181,  378 => 167,  370 => 178,  359 => 159,  351 => 171,  347 => 155,  343 => 169,  333 => 165,  329 => 164,  325 => 163,  321 => 162,  315 => 138,  311 => 137,  307 => 136,  303 => 135,  297 => 154,  270 => 132,  265 => 121,  260 => 129,  256 => 127,  233 => 112,  223 => 108,  212 => 104,  205 => 102,  198 => 93,  191 => 89,  184 => 85,  165 => 76,  137 => 51,  127 => 47,  113 => 37,  81 => 23,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 134,  409 => 188,  407 => 131,  402 => 186,  398 => 185,  393 => 178,  387 => 122,  384 => 121,  381 => 175,  379 => 119,  374 => 165,  368 => 112,  365 => 171,  362 => 160,  360 => 169,  355 => 172,  341 => 105,  337 => 166,  322 => 101,  314 => 159,  312 => 98,  309 => 97,  305 => 95,  298 => 149,  294 => 153,  285 => 89,  283 => 127,  278 => 86,  268 => 134,  264 => 84,  258 => 117,  252 => 80,  247 => 115,  241 => 114,  229 => 109,  220 => 109,  214 => 105,  177 => 81,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 15,  273 => 123,  269 => 122,  254 => 92,  243 => 114,  240 => 120,  238 => 85,  235 => 110,  230 => 82,  227 => 109,  224 => 71,  221 => 107,  219 => 107,  217 => 106,  208 => 103,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 38,  119 => 42,  102 => 27,  71 => 19,  67 => 15,  63 => 11,  59 => 14,  38 => 5,  28 => 3,  87 => 25,  26 => 6,  201 => 101,  196 => 90,  183 => 85,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 32,  105 => 28,  91 => 27,  62 => 23,  49 => 19,  94 => 24,  89 => 20,  85 => 21,  75 => 17,  68 => 12,  56 => 13,  24 => 4,  21 => 2,  31 => 7,  25 => 5,  19 => 1,  93 => 28,  88 => 22,  78 => 21,  46 => 9,  44 => 7,  27 => 4,  79 => 19,  72 => 16,  69 => 15,  47 => 9,  40 => 7,  37 => 9,  22 => 2,  246 => 90,  157 => 56,  145 => 54,  139 => 52,  131 => 52,  123 => 34,  120 => 33,  115 => 43,  111 => 30,  108 => 29,  101 => 31,  98 => 31,  96 => 29,  83 => 25,  74 => 17,  66 => 17,  55 => 15,  52 => 7,  50 => 10,  43 => 12,  41 => 7,  35 => 8,  32 => 3,  29 => 3,  209 => 103,  203 => 78,  199 => 67,  193 => 100,  189 => 71,  187 => 87,  182 => 66,  176 => 71,  173 => 65,  168 => 77,  164 => 59,  162 => 76,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 50,  130 => 41,  125 => 44,  122 => 43,  116 => 38,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 26,  95 => 28,  92 => 21,  86 => 25,  82 => 20,  80 => 19,  73 => 19,  64 => 14,  60 => 11,  57 => 11,  54 => 10,  51 => 11,  48 => 8,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
