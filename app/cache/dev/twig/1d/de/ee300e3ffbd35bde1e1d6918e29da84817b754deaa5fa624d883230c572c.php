<?php

/* PaginasBundle:Pagina:show.html.twig */
class __TwigTemplate_1ddeee300e3ffbd35bde1e1d6918e29da84817b754deaa5fa624d883230c572c extends Twig_Template
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
            <h2 class=\"pull-left\">Paginas</h2>
            <div class=\"clearfix\"></div>
            <!-- Breadcrumb -->
            <div class=\"bread-crumb\">
                <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("backend_homepage");
        echo "\"><i class=\"fa fa-home\"></i>Dashboard</a--> 
                    <Divider>
                        <span class=\"divider\">/</span> 
                        <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("paginas");
        echo "\" class=\"bread-current\">Paginas</a>
                        <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("paginas_new");
        echo "\" class=\"btn btn-info pull-right\" style=\"color: white; margin-left: 5px;\">Crear pagina</a>
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
                                                    <div class=\"pull-left\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pagina"), "html", null, true);
        echo "</div>
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
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Pagina:</td>
                                                                                <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pagina"), "html", null, true);
        echo "</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Contenido Español:</td>
                                                                                <td>";
        // line 95
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenidoEs");
        echo "</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Contenido Ingles:</td>
                                                                                <td>";
        // line 99
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenidoEn");
        echo "</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Imagen:</td>
                                                                                <td>
                                                                                    ";
        // line 104
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imagen")) > 0)) {
            // line 105
            echo "                                                                                        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "webPath"), "html", null, true);
            echo "\" style=\"max-width: 400px;\"/>
                                                                                    ";
        } else {
            // line 106
            echo "    
                                                                                        sin imagen
                                                                                    ";
        }
        // line 109
        echo "                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class=\"tab-pane\" id=\"galeria\">
                                                                    <div class=\"container-galeria\">    
                                                                            ";
        // line 118
        echo "                                                                            <div id=\"lista_imagenes\" style=\" min-height: 400px; overflow: hidden;\">
                                                                                ";
        // line 119
        $this->env->loadTemplate("GaleriasBundle:Galeria:galerias.html.twig")->display(array_merge($context, array("galerias" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "galerias"), "url_delete" => (isset($context["url_delete"]) ? $context["url_delete"] : $this->getContext($context, "url_delete")))));
        // line 120
        echo "                                                                            </div>
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
        // line 133
        echo $this->env->getExtension('routing')->getPath("galerias_new");
        echo "?tipo=link_video&clase=pagina&idContenedor=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "&return=";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
        // line 148
        echo $this->env->getExtension('routing')->getPath("paginas");
        echo "')\">Regresar</button>
                                                    <button id=\"botonEditar\" class=\"btn btn-info\" onclick=\"javascript:editarRegistro('";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "')\">Editar</button>
                                                    <div style=\"float: left; margin-right: 3px;\">
                                                        <form id=\"formEliminar\" action=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
                                                            <input name=\"_method\" value=\"DELETE\" type=\"hidden\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 153
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
        // line 172
        $this->env->loadTemplate("GaleriasBundle:Galeria:formulariosGaleria.html.twig")->display($context);
        // line 173
        echo "
";
    }

    // line 176
    public function block_javascripts($context, array $blocks = array())
    {
        // line 177
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery UI -->
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script> <!-- Full Google Calendar - Calendar -->
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.rateit.min.js"), "html", null, true);
        echo "\"></script> <!-- RateIt - Star rating -->
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script> <!-- prettyPhoto -->

<!-- jQuery Flot -->
<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>

<!-- jQuery Notification - Noty -->
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/themes/default.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/bottom.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/topRight.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layouts/top.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/datatables/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sparklines.js"), "html", null, true);
        echo "\"></script> <!-- Sparklines -->
<script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script> <!-- CLEditor -->
<script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script> <!-- Date picker -->
<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uniform.min.html"), "html", null, true);
        echo "\"></script> <!-- jQuery Uniform -->
<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery SlimScroll -->
<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script> <!-- Bootstrap Toggle -->
<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootbox.min.js"), "html", null, true);
        echo "\"></script> <!-- Filter for support page -->
<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script> <!-- Custom codes -->
<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/charts.js"), "html", null, true);
        echo "\"></script> <!-- Charts & Graphs -->
<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sfrichpolis.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 212
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
        // line 224
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 225
            echo "    bootbox.confirm(\"Esta seguro de eliminar el registro?\", function(result) {
      if(result){
         \$(\"#formEliminar\").submit();
      }
    });
  ";
        } else {
            // line 231
            echo "    noty({text: 'No tienes los permisos suficientes para realizar esta accion',layout:'bottom', type:'warning', timeout:2000 });
  ";
        }
        // line 232
        echo "      
};

</script>

";
        // line 237
        $this->env->loadTemplate("GaleriasBundle:Galeria:formulariosGaleria.js.twig")->display(array_merge($context, array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url_delete" => (isset($context["url_delete"]) ? $context["url_delete"] : $this->getContext($context, "url_delete")), "get_galerias" => (isset($context["get_galerias"]) ? $context["get_galerias"] : $this->getContext($context, "get_galerias")), "post_galerias" => (isset($context["post_galerias"]) ? $context["post_galerias"] : $this->getContext($context, "post_galerias")), "post_galerias_link_video" => (isset($context["post_galerias_link_video"]) ? $context["post_galerias_link_video"] : $this->getContext($context, "post_galerias_link_video")))));
        // line 238
        echo " <script>
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
        return "PaginasBundle:Pagina:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 238,  445 => 212,  441 => 211,  462 => 225,  417 => 205,  356 => 186,  422 => 188,  410 => 183,  400 => 180,  552 => 274,  550 => 273,  543 => 268,  539 => 267,  531 => 261,  529 => 260,  514 => 248,  510 => 247,  506 => 246,  498 => 244,  494 => 243,  490 => 242,  486 => 241,  482 => 240,  478 => 239,  470 => 231,  465 => 235,  459 => 232,  455 => 231,  451 => 230,  447 => 229,  443 => 228,  433 => 209,  429 => 208,  425 => 207,  421 => 206,  153 => 56,  363 => 161,  271 => 142,  335 => 148,  272 => 133,  434 => 219,  396 => 199,  392 => 183,  388 => 182,  380 => 179,  376 => 178,  345 => 155,  178 => 81,  391 => 176,  372 => 178,  367 => 162,  502 => 245,  500 => 246,  493 => 241,  489 => 240,  481 => 237,  479 => 233,  464 => 221,  460 => 224,  456 => 219,  452 => 218,  448 => 217,  436 => 214,  432 => 194,  428 => 212,  424 => 211,  420 => 213,  383 => 197,  375 => 164,  339 => 182,  118 => 36,  90 => 28,  65 => 11,  84 => 17,  53 => 14,  405 => 202,  358 => 157,  336 => 162,  300 => 134,  371 => 163,  284 => 134,  276 => 125,  200 => 99,  188 => 87,  288 => 135,  282 => 148,  274 => 130,  174 => 80,  364 => 188,  349 => 170,  344 => 170,  317 => 145,  313 => 160,  301 => 155,  275 => 125,  215 => 100,  415 => 218,  403 => 215,  401 => 201,  361 => 190,  357 => 189,  353 => 171,  348 => 171,  334 => 179,  326 => 164,  308 => 136,  304 => 135,  286 => 149,  280 => 133,  34 => 12,  126 => 61,  259 => 127,  255 => 129,  281 => 137,  242 => 115,  234 => 113,  226 => 109,  180 => 88,  175 => 72,  110 => 34,  262 => 127,  244 => 121,  236 => 112,  232 => 111,  216 => 99,  207 => 97,  185 => 96,  248 => 122,  194 => 88,  190 => 89,  186 => 87,  170 => 76,  167 => 69,  160 => 73,  155 => 71,  152 => 70,  124 => 61,  419 => 189,  411 => 186,  397 => 187,  389 => 185,  385 => 181,  377 => 168,  373 => 178,  369 => 165,  346 => 182,  338 => 180,  332 => 172,  328 => 177,  324 => 159,  320 => 173,  316 => 161,  292 => 136,  222 => 104,  218 => 106,  210 => 96,  206 => 95,  202 => 95,  197 => 99,  354 => 156,  352 => 185,  331 => 150,  327 => 149,  323 => 162,  293 => 128,  289 => 188,  279 => 126,  261 => 123,  251 => 118,  239 => 108,  225 => 106,  211 => 103,  181 => 84,  172 => 78,  366 => 177,  350 => 155,  342 => 181,  340 => 169,  330 => 165,  319 => 138,  295 => 138,  291 => 151,  287 => 136,  277 => 132,  267 => 122,  263 => 121,  257 => 121,  253 => 119,  249 => 116,  245 => 120,  231 => 112,  213 => 104,  195 => 91,  192 => 87,  58 => 17,  23 => 1,  318 => 172,  310 => 154,  306 => 141,  302 => 140,  299 => 139,  296 => 153,  290 => 144,  266 => 128,  250 => 120,  237 => 112,  228 => 110,  150 => 64,  129 => 46,  114 => 35,  97 => 46,  77 => 18,  426 => 190,  418 => 198,  416 => 197,  394 => 212,  390 => 196,  386 => 195,  382 => 194,  378 => 193,  370 => 178,  359 => 160,  351 => 158,  347 => 157,  343 => 150,  333 => 165,  329 => 164,  325 => 176,  321 => 146,  315 => 158,  311 => 136,  307 => 135,  303 => 134,  297 => 154,  270 => 129,  265 => 125,  260 => 133,  256 => 126,  233 => 110,  223 => 108,  212 => 96,  205 => 100,  198 => 97,  191 => 98,  184 => 85,  165 => 76,  137 => 51,  127 => 47,  113 => 37,  81 => 23,  76 => 21,  480 => 162,  474 => 232,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 216,  440 => 215,  437 => 210,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 204,  409 => 203,  407 => 182,  402 => 181,  398 => 185,  393 => 186,  387 => 208,  384 => 183,  381 => 173,  379 => 165,  374 => 192,  368 => 189,  365 => 189,  362 => 176,  360 => 187,  355 => 159,  341 => 154,  337 => 153,  322 => 163,  314 => 155,  312 => 144,  309 => 143,  305 => 142,  298 => 146,  294 => 144,  285 => 138,  283 => 135,  278 => 132,  268 => 134,  264 => 128,  258 => 126,  252 => 123,  247 => 115,  241 => 114,  229 => 108,  220 => 112,  214 => 105,  177 => 80,  169 => 71,  140 => 55,  132 => 48,  128 => 41,  107 => 64,  61 => 15,  273 => 131,  269 => 126,  254 => 118,  243 => 119,  240 => 118,  238 => 114,  235 => 111,  230 => 109,  227 => 110,  224 => 107,  221 => 108,  219 => 105,  217 => 104,  208 => 104,  204 => 102,  179 => 82,  159 => 61,  143 => 56,  135 => 38,  119 => 69,  102 => 29,  71 => 19,  67 => 15,  63 => 11,  59 => 30,  38 => 6,  28 => 3,  87 => 25,  26 => 6,  201 => 92,  196 => 90,  183 => 94,  171 => 77,  166 => 84,  163 => 70,  158 => 74,  156 => 58,  151 => 56,  142 => 59,  138 => 49,  136 => 50,  121 => 46,  117 => 40,  105 => 33,  91 => 27,  62 => 23,  49 => 8,  94 => 24,  89 => 19,  85 => 26,  75 => 17,  68 => 12,  56 => 13,  24 => 4,  21 => 2,  31 => 12,  25 => 6,  19 => 58,  93 => 47,  88 => 22,  78 => 15,  46 => 9,  44 => 7,  27 => 4,  79 => 19,  72 => 13,  69 => 19,  47 => 17,  40 => 7,  37 => 13,  22 => 3,  246 => 116,  157 => 57,  145 => 53,  139 => 50,  131 => 51,  123 => 60,  120 => 33,  115 => 67,  111 => 30,  108 => 29,  101 => 31,  98 => 31,  96 => 29,  83 => 25,  74 => 21,  66 => 17,  55 => 20,  52 => 26,  50 => 13,  43 => 12,  41 => 7,  35 => 5,  32 => 9,  29 => 3,  209 => 99,  203 => 103,  199 => 102,  193 => 89,  189 => 97,  187 => 95,  182 => 83,  176 => 82,  173 => 146,  168 => 77,  164 => 70,  162 => 76,  154 => 84,  149 => 54,  147 => 56,  144 => 49,  141 => 53,  133 => 50,  130 => 47,  125 => 40,  122 => 42,  116 => 38,  112 => 42,  109 => 52,  106 => 33,  103 => 30,  99 => 47,  95 => 28,  92 => 43,  86 => 25,  82 => 39,  80 => 19,  73 => 19,  64 => 27,  60 => 23,  57 => 11,  54 => 10,  51 => 11,  48 => 14,  45 => 13,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
