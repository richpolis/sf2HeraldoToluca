<?php

/* PublicacionesBundle:Servicios:show.html.twig */
class __TwigTemplate_0ec75f374beed21471dfbb3212fd7c8c7a253a3a58b18406139b45478d5c8498 extends Twig_Template
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
  <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fileuploader.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
  <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
  <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" type=\"text/css\"/>

";
    }

    // line 40
    public function block_mainbar($context, array $blocks = array())
    {
        // line 41
        echo "    <!-- Main bar -->
    <div class=\"mainbar\">

        <!-- Page heading -->
        <div class=\"page-head\">
            <h2 class=\"pull-left\">Servicios</h2>
            <div class=\"clearfix\"></div>
            <!-- Breadcrumb -->
            <div class=\"bread-crumb\">
                <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("backend_homepage");
        echo "\"><i class=\"fa fa-home\"></i>Dashboard</a--> 
                <Divider/>
                <span class=\"divider\">/</span> 
                <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("servicios");
        echo "\" class=\"bread-current\">Servicios</a>
                <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("servicios_new");
        echo "\" class=\"btn btn-info pull-right\" style=\"color: white; margin-left: 5px;\">Crear servicio</a>
            </div>

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
                                    <div class=\"pull-left\">Servicio \"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "servicioEs"), "html", null, true);
        echo "\"</div>
                                    <div class=\"clearfix\"></div>
                                </div>

                                <div class=\"widget-content\">
                                    <div class=\"padd\">
                                        <div class=\"tabbable\" style=\"margin-bottom: 18px;\">
                                            <ul class=\"nav nav-tabs\">
                                                <li class=\"active\"><a href=\"#sistema\" data-toggle=\"tab\">Sistema</a></li>
                                                <li><a href=\"#galeria\" data-toggle=\"tab\">Imagenes</a></li>
                                            </ul>
                                            <div class=\"tab-content\" style=\"padding-bottom: 9px; border-bottom: 1px solid #ddd;\">
                                                <div class=\"tab-pane active\" id=\"sistema\">
                                                    <table>
                                                        <tbody><tr>
                                                                <td>Id:</td>
                                                                <td>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Servicio en español:</td>
                                                                <td>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "servicioEs"), "html", null, true);
        echo "</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Descripcion Español:</td>
                                                                <td>";
        // line 93
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcionEs");
        echo "</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Servicio en Ingles:</td>
                                                                <td>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "servicioEn"), "html", null, true);
        echo "</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Descripcion Ingles:</td>
                                                                <td>";
        // line 101
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcionEn");
        echo "</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Imagen:</td>
                                                                <td>
                                                                    ";
        // line 106
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imagen")) > 0)) {
            // line 107
            echo "                                                                        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "webPath"), "html", null, true);
            echo "\" style=\"max-width: 400px;\"/>
                                                                    ";
        } else {
            // line 108
            echo "    
                                                                        sin imagen
                                                                    ";
        }
        // line 111
        echo "                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Activo?:</td>
                                                                <td>
                                                                    ";
        // line 116
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isActive")) {
            // line 117
            echo "                                                                        <i class=\"fa fa-check-circle\"></i>
                                                                    ";
        } else {
            // line 119
            echo "                                                                        <i class=\"fa fa-circle\"></i>
                                                                    ";
        }
        // line 121
        echo "                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class=\"tab-pane\" id=\"galeria\">
                                                    <div class=\"container-galeria\">    
                                                        ";
        // line 130
        echo "                                                        <div id=\"lista_imagenes\" style=\" min-height: 400px; overflow: hidden;\">
                                                            ";
        // line 131
        $this->env->loadTemplate("GaleriasBundle:Galeria:galerias.html.twig")->display(array_merge($context, array("galerias" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "galerias"), "url_delete" => (isset($context["url_delete"]) ? $context["url_delete"] : $this->getContext($context, "url_delete")))));
        // line 132
        echo "                                                        </div>
                                                        <table style=\"width: 99%; margin: 0 auto;\">
                                                            <tr>
                                                                <td>
                                                                    <div id=\"upload\"></div>
                                                                    Extenciones disponibles:   \"jpeg\",\"png\",\"gif\",\"jpg\"
                                                                    <!--List Files-->
                                                                    <ul id=\"files\" ></ul>
                                                                    <div class=\"clear\"></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <!--button onclick=\"javascript:editarRegistro('";
        // line 145
        echo $this->env->getExtension('routing')->getPath("galerias_new");
        echo "?tipo=link_video&clase=autobus&idContenedor=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "&return=";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("servicios_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "#galeria')\" class=\"botonUploadVideoLink\">Crear Video Link</button-->
                                                                    <button onclick=\"javascript:crearVideoLink()\" class=\"botonUploadVideoLink\">Crear Video Link</button>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                <div class=\"widget-foot\">
                                    <button id=\"botonRegresar\" class=\"btn btn-default\" onclick=\"javascript:regresar('";
        // line 157
        echo $this->env->getExtension('routing')->getPath("servicios");
        echo "')\">Regresar</button>
                                    <button id=\"botonEditar\" class=\"btn btn-info\" onclick=\"javascript:editarRegistro('";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("servicios_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "')\">Editar</button>
                                    <div style=\"float: left; margin-right: 3px;\">
                                        <form id=\"formEliminar\" action=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("servicios_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
                                            <input name=\"_method\" value=\"DELETE\" type=\"hidden\"/>
                                            ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
                                        </form>
\t\t\t\t\t<button class=\"btn btn-danger \" onclick=\"eliminarRegistro();\">Eliminar</button>
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
        // line 181
        $this->env->loadTemplate("GaleriasBundle:Galeria:formulariosGaleria.html.twig")->display($context);
        // line 182
        echo "
";
    }

    // line 185
    public function block_javascripts($context, array $blocks = array())
    {
        // line 186
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery UI -->
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script> <!-- Full Google Calendar - Calendar -->
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.rateit.min.js"), "html", null, true);
        echo "\"></script> <!-- RateIt - Star rating -->
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script> <!-- prettyPhoto -->

<!-- jQuery Flot -->
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>

<!-- jQuery Notification - Noty -->
<script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/themes/default.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/bottom.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/topRight.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/top.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/datatables/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sparklines.js"), "html", null, true);
        echo "\"></script> <!-- Sparklines -->
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script> <!-- CLEditor -->
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script> <!-- Date picker -->
<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uniform.min.html"), "html", null, true);
        echo "\"></script> <!-- jQuery Uniform -->
<script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery SlimScroll -->
<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script> <!-- Bootstrap Toggle -->
<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootbox.min.js"), "html", null, true);
        echo "\"></script> <!-- Filter for support page -->
<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script> <!-- Custom codes -->
<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/charts.js"), "html", null, true);
        echo "\"></script> <!-- Charts & Graphs -->
<script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sfrichpolis.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fileuploader.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script>
var regresar = function(url){
    location.href=url;
};

var editarRegistro = function(url){
    location.href=url;
};
    
var eliminarRegistro = function(){
  ";
        // line 233
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 234
            echo "    bootbox.confirm(\"Esta seguro de eliminar el registro?\", function(result) {
      if(result){
         \$(\"#formEliminar\").submit();
      }
    });
  ";
        } else {
            // line 240
            echo "    noty({text: 'No tienes los permisos suficientes para realizar esta accion',layout:'bottom', type:'warning', timeout:2000 });
  ";
        }
        // line 241
        echo "      
};

</script>

";
        // line 246
        $this->env->loadTemplate("GaleriasBundle:Galeria:formulariosGaleria.js.twig")->display(array_merge($context, array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url_delete" => (isset($context["url_delete"]) ? $context["url_delete"] : $this->getContext($context, "url_delete")), "get_galerias" => (isset($context["get_galerias"]) ? $context["get_galerias"] : $this->getContext($context, "get_galerias")), "post_galerias" => (isset($context["post_galerias"]) ? $context["post_galerias"] : $this->getContext($context, "post_galerias")), "post_galerias_link_video" => (isset($context["post_galerias_link_video"]) ? $context["post_galerias_link_video"] : $this->getContext($context, "post_galerias_link_video")))));
        // line 247
        echo "
 <script>
 \$(document).on('ready',function(){
     createUploader();
     refrescarGaleria();
     \$('.loader').fadeOut();
 });
 </script>   
";
    }

    public function getTemplateName()
    {
        return "PublicacionesBundle:Servicios:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 247,  500 => 246,  493 => 241,  489 => 240,  481 => 234,  479 => 233,  464 => 221,  460 => 220,  456 => 219,  452 => 218,  448 => 217,  436 => 214,  432 => 213,  428 => 212,  424 => 211,  420 => 210,  383 => 197,  375 => 195,  339 => 182,  118 => 36,  90 => 28,  65 => 11,  84 => 17,  53 => 14,  405 => 204,  358 => 172,  336 => 165,  300 => 191,  371 => 194,  284 => 127,  276 => 125,  200 => 93,  188 => 83,  288 => 128,  282 => 145,  274 => 121,  174 => 78,  364 => 161,  349 => 155,  344 => 185,  317 => 134,  313 => 133,  301 => 157,  275 => 125,  215 => 104,  415 => 208,  403 => 177,  401 => 203,  361 => 190,  357 => 189,  353 => 188,  348 => 163,  334 => 144,  326 => 142,  308 => 193,  304 => 192,  286 => 187,  280 => 126,  34 => 12,  126 => 61,  259 => 118,  255 => 117,  281 => 134,  242 => 116,  234 => 108,  226 => 107,  180 => 88,  175 => 66,  110 => 34,  262 => 130,  244 => 117,  236 => 112,  232 => 100,  216 => 100,  207 => 97,  185 => 109,  248 => 119,  194 => 112,  190 => 111,  186 => 85,  170 => 77,  167 => 69,  160 => 73,  155 => 71,  152 => 70,  124 => 61,  419 => 195,  411 => 193,  397 => 202,  389 => 182,  385 => 181,  377 => 179,  373 => 178,  369 => 169,  346 => 169,  338 => 145,  332 => 164,  328 => 163,  324 => 162,  320 => 153,  316 => 152,  292 => 129,  222 => 106,  218 => 106,  210 => 102,  206 => 101,  202 => 91,  197 => 99,  354 => 171,  352 => 156,  331 => 142,  327 => 141,  323 => 140,  293 => 128,  289 => 188,  279 => 126,  261 => 120,  251 => 116,  239 => 108,  225 => 108,  211 => 103,  181 => 68,  172 => 65,  366 => 163,  350 => 170,  342 => 146,  340 => 166,  330 => 143,  319 => 139,  295 => 132,  291 => 189,  287 => 130,  277 => 140,  267 => 132,  263 => 114,  257 => 119,  253 => 119,  249 => 118,  245 => 116,  231 => 109,  213 => 97,  195 => 99,  192 => 98,  58 => 17,  23 => 1,  318 => 159,  310 => 160,  306 => 156,  302 => 133,  299 => 134,  296 => 190,  290 => 144,  266 => 124,  250 => 103,  237 => 112,  228 => 103,  150 => 64,  129 => 46,  114 => 35,  97 => 46,  77 => 18,  426 => 204,  418 => 198,  416 => 197,  394 => 184,  390 => 183,  386 => 182,  382 => 181,  378 => 165,  370 => 178,  359 => 159,  351 => 156,  347 => 186,  343 => 150,  333 => 165,  329 => 164,  325 => 136,  321 => 135,  315 => 162,  311 => 137,  307 => 274,  303 => 135,  297 => 153,  270 => 122,  265 => 131,  260 => 116,  256 => 115,  233 => 110,  223 => 106,  212 => 96,  205 => 94,  198 => 113,  191 => 98,  184 => 69,  165 => 62,  137 => 51,  127 => 47,  113 => 53,  81 => 23,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 216,  440 => 215,  437 => 147,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 134,  409 => 205,  407 => 131,  402 => 186,  398 => 185,  393 => 201,  387 => 198,  384 => 121,  381 => 180,  379 => 196,  374 => 167,  368 => 176,  365 => 191,  362 => 173,  360 => 169,  355 => 157,  341 => 149,  337 => 181,  322 => 141,  314 => 158,  312 => 137,  309 => 132,  305 => 158,  298 => 132,  294 => 145,  285 => 129,  283 => 127,  278 => 122,  268 => 134,  264 => 84,  258 => 119,  252 => 121,  247 => 115,  241 => 114,  229 => 109,  220 => 104,  214 => 101,  177 => 80,  169 => 60,  140 => 55,  132 => 48,  128 => 41,  107 => 64,  61 => 15,  273 => 124,  269 => 122,  254 => 118,  243 => 114,  240 => 113,  238 => 109,  235 => 111,  230 => 108,  227 => 109,  224 => 107,  221 => 107,  219 => 107,  217 => 105,  208 => 95,  204 => 90,  179 => 106,  159 => 61,  143 => 56,  135 => 38,  119 => 69,  102 => 29,  71 => 19,  67 => 15,  63 => 11,  59 => 30,  38 => 6,  28 => 3,  87 => 25,  26 => 6,  201 => 90,  196 => 85,  183 => 82,  171 => 77,  166 => 84,  163 => 70,  158 => 74,  156 => 58,  151 => 56,  142 => 59,  138 => 49,  136 => 50,  121 => 46,  117 => 40,  105 => 33,  91 => 27,  62 => 23,  49 => 8,  94 => 24,  89 => 19,  85 => 26,  75 => 17,  68 => 12,  56 => 13,  24 => 4,  21 => 2,  31 => 12,  25 => 6,  19 => 58,  93 => 47,  88 => 22,  78 => 15,  46 => 9,  44 => 7,  27 => 4,  79 => 19,  72 => 13,  69 => 19,  47 => 17,  40 => 7,  37 => 13,  22 => 3,  246 => 102,  157 => 72,  145 => 53,  139 => 50,  131 => 51,  123 => 60,  120 => 33,  115 => 67,  111 => 30,  108 => 29,  101 => 31,  98 => 31,  96 => 29,  83 => 25,  74 => 21,  66 => 17,  55 => 20,  52 => 26,  50 => 13,  43 => 12,  41 => 7,  35 => 5,  32 => 9,  29 => 3,  209 => 92,  203 => 101,  199 => 93,  193 => 89,  189 => 87,  187 => 87,  182 => 83,  176 => 87,  173 => 146,  168 => 75,  164 => 59,  162 => 61,  154 => 84,  149 => 54,  147 => 58,  144 => 49,  141 => 48,  133 => 47,  130 => 47,  125 => 40,  122 => 42,  116 => 38,  112 => 42,  109 => 52,  106 => 33,  103 => 30,  99 => 47,  95 => 28,  92 => 43,  86 => 25,  82 => 39,  80 => 19,  73 => 19,  64 => 27,  60 => 23,  57 => 11,  54 => 10,  51 => 11,  48 => 14,  45 => 13,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
