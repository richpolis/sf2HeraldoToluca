<?php

/* BackendBundle:Default:publicacionesGaleria.html.twig */
class __TwigTemplate_05b1941f5c6b13758fab5541159587b62ea7b885eae9c6ea6e5f99a170587292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container-galeria\">    
        ";
        // line 3
        echo "        <div id=\"lista_imagenes\" style=\" min-height: 400px; overflow: hidden;\">
            
        </div>
        <table style=\"width: 99%; margin: 0 auto;\">
            <tr>
                <td>
                    <div id=\"upload\" style=\"margin: 30px 150px;\"></div>
                    Extenciones disponibles:   \"jpeg\",\"png\",\"gif\",\"jpg\"
                    <!--List Files-->
                    <ul id=\"files\" ></ul>
                    <div class=\"clear\"></div>
                </td>
                <td>
                    <button onclick=\"javascript:crearVideoLink()\" class=\"btn btn-green btn-bg\">Crear Video Link</button>
                </td>
            </tr>
        </table>
        
        
        
</div>
<script>
    
    /* Configuracion de Uploader.
     * 
     * @returns configuracion de Uploader.
     */
    function createUploader(){
    var uploader = new qq.FileUploader({
            element: document.getElementById('upload'),
            template: '<div class=\"qq-uploader\"><div class=\"qq-upload-drop-area\"><span>Drop archivos aqui para cargar</span></div><div class=\"qq-upload-button\"><span id=\"status\" ></span>Agregar archivos</div><ul class=\"qq-upload-list\"></ul></div>',
            action: '";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_1_post_publicacion_galeria", array("id" => $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "id"))), "html", null, true);
        echo "',
            params: { },
            onComplete: function(id, file, responseJson){
                    refrescarGaleria();             },
            onSubmit: function(id, fileName){
                
            },
            onProgress: function(id, fileName){
                    \$('#status').addClass(\"success\");
                    \$('#status').addClass(\"loading\");
                }
            });

    }
    
    /* Refresca el contenido de la galeria
     * @returns void     
     */
    function refrescarGaleria(){
        \$.ajax({
            url: '";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_1_get_publicacion_galerias", array("id" => $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "id"))), "html", null, true);
        echo "',
            type: 'GET',
            dataType: 'html',
            success: function(data){
               \$(\"#lista_imagenes\").html(data);
               inicializarGaleria();
               \$('#status').removeClass(\"loading\");
               \$('#status').addClass(\"success\");
            },
            error: function(data){
                console.log(\"error\");
                console.log(data);
            }
        });
    }
    
    /* Abre el formulario para confirmar la eliminacion del registro
     * 
     * @param integer galeria_id
     * @param string url
     * @returns abrir formulario de confirmacion     
     */
    function eliminarGaleria(galeria_id,url){
        debugger;
        var imagen=\$(\"#image-\"+ galeria_id);
        var \$url=\$(\"#field-eliminar\");
        \$(\".image-dialog\").attr({src:imagen.attr(\"src\"),id:galeria_id});
        \$url.val(url);
        \$( \"#confimarFormModal\" ).modal( \"show\" );
    }
    
    /* Activa una registro de galeria
     * 
     * @param integer galeria_id
     * @param string url
     * @returns abrir formulario de activacion     
     */
    function activarGaleria(galeria_id,url){
        debugger;
        var imagen=\$(\"#image-\"+galeria_id);
        var \$url=\$(\"#field-activar\");
        \$(\".image-dialog\").attr({src:imagen.attr(\"src\"),id:galeria_id});
        \$(\".image-dialog\").set('id',galeria_id);
        \$url.val(url);
        \$( \"#confirmarActivarFormModal\" ).modal( \"show\" );
    }
    
    /* Editar una registro de galeria
     * 
     * @param integer galeria_id
     * @param string url
     * @returns abrir formulario de edicion     
     */
     function editarGaleria(galeria_id,url){
        debugger;
        var imagen=\$(\"#image-\"+galeria_id);
        \$(\"#field-titulo\").val(imagen.data('title'));
        \$(\"#field-contenido\").val(imagen.data('descripcion'));
        \$(\"#field-url\").val(url);
        \$(\".image-dialog\").attr({src:imagen.attr(\"src\"),id:galeria_id});
        \$(\".image-dialog\").set('id',galeria_id);
        \$( \"#editarFormModal\" ).modal( \"show\" );
    }
    
    /* 
     * Enviar la actualizacion al servidor
     */
    function updateRegistroGaleria(Id,Title,Description){
        debugger;
        \$('#image-loader').show();
        var url=\$(\"#field-url\").val();
        \$.ajax({
           url: url,
           type: 'PATCH',
           data: {titulo: Title, descripcion: Description},
           dataType: 'json',
           success: function(data){
              refrescarGaleria();
              \$('#image-loader').hide();
           },
           error: function(data){
               alert(\"error al actualizar\");
               console.log(\"error en updateRegistroGaleria\");
               console.log(data);
               \$('#image-loader').hide();
           }
        });
    }
    
    function crearRegistroGaleria(archivo,tipo,publicacion){
        debugger;
        \$('#image-loader').show();
        var url='";
        // line 146
        echo $this->env->getExtension('routing')->getPath("api_1_post_galeria");
        echo "';
        \$.ajax({
           url: url,
           type: 'POST',
           data: {archivo: archivo, 'tipoArchivo': tipo, publicacion: publicacion,titulo:'',descripcion:'','isActive': true,thumbnail: ''},
           dataType: 'json',
           success: function(data){
              debugger;
              refrescarGaleria();
              \$('#image-loader').hide();
           },
           error: function(data){
               alert(\"error al actualizar\");
               console.log(\"error en updateRegistroGaleria\");
               console.log(data);
               \$('#image-loader').hide();
           }
        });
    }
    
    function crearVideoLink(){
        \$(\"input#tipoArchivo\").val(2);
        \$(\"input#publicacion\").val(";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "id"), "html", null, true);
        echo ");
        \$(\"input#archivo\").val(\"\");
        \$( \"#newVideoLinkFormModal\" ).modal( \"show\" );
    }
    
    function guardarEditarFormModal(){
        debugger;
        var bValid = true;
        var fieldTitle=\$(\"#field-titulo\"),
            fieldDescription=\$(\"#field-contenido\");
        bValid=(fieldTitle.val().length>0 && fieldTitle.val()!=\"Titulo de Imagen\")?true:false;
        /*bValid=(fieldDescription.val().length>0 && fieldDescription.val()!=\"Descripcion\")?true:false;*/
        if ( bValid ) {
            updateRegistroGaleria(
               \$(\".image-dialog\").attr(\"id\"), 
               fieldTitle.val(),
               fieldDescription.val()
        );
\t\$(\"#editarFormModal\").modal( \"hide\" );
       } 
    }
    
    function guardarVideoLinkFormModal(){
        debugger;
        var bValid = true;
        var archivo=\$(\"input#archivo\");
        var tipo = \$(\"input#tipoArchivo\");
        var publicacion = \$(\"input#publicacion\");
        
        bValid=(archivo.val().length>0 && archivo.val()!=\"archivo\")?true:false;
        /*bValid=(fieldDescription.val().length>0 && fieldDescription.val()!=\"Descripcion\")?true:false;*/
        if ( bValid ) {
            crearRegistroGaleria(
               archivo.val(), 
               tipo.val(),
               publicacion.val()
        );
\t\$(\"#newVideoLinkFormModal\").modal( \"hide\" );
       } 
    }

    function avanzadaEditarFormModal(){
        location.href=\$(\"#field-url\").val();
    }
    
    function eliminarConfirmarFormModal(){
        debugger;
        \$('#image-loader').show();
        var url= \$(\"#field-eliminar\").val();
        var id = \$(\".image-dialog\").get('id');
        \$.ajax({
            url: url,
            type: 'DELETE',
            dataType: 'json',
            success: function(data){
               refrescarGaleria();
               \$('#image-loader').hide();
            },
            error: function(data){
                alert(\"El registro no pudo ser eliminado\");
                \$('#image-loader').hide();
            }
        });
\t\$(\"#confirmarFormModal\").modal( \"hide\" );
    }
    
    function activarConfirmarFormModal(){
        \$('#image-loader').show();
        var id = \$(\".image-dialog\").get('id');
        var url = '/api/v1/galerias/'+id;
        \$.ajax({
           url: url,
           type: 'PATCH',
           data: {isActive: true},
           dataType: 'html',
           success: function(data){
              setTimeout(function(){
                \$('#image-loader').hide();
              }, 1000);
              \$(\"#registro-\"+id).html(data);
              inicializarGaleria();
           },
           error: function(data){
               console.log(\"error en activarConfirmarFormModal\");
               console.log(data)
               alert(\"El registro no se pudo activar\");
           }
        });
\t\$(\"#confirmarActivarFormModal\").modal( \"hide\" );
    }
    
    
    
    function inicializarGaleria(){
        \$.configPrettyPhoto();
    
        var \$gallery = \$( \"#gallery\" ),
        \$trash = \$( \"#papelera\" );
   
        \$gallery.sortable({
                handle: '.image-sorteable',
                placeholder: \"ui-state-highlight\",
                update: function(){
                    \$('#image-loader').show();
                    var order = \$gallery.sortable('serialize');
                    \$.ajax({
                       url: '";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_1_patch_publicacion_galerias_ordenar", array("id" => $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "id"))), "html", null, true);
        echo "?' + order,
                       type: 'PATCH',
                       data: order,
                       dataType: 'json',
                       success: function(data){
                           console.log(data);
                           \$('#image-loader').hide();
                       },
                       error: function(data){
                           console.log(data);
                           \$('#image-loader').hide();
                       },
                    });
                }
        });

        \$gallery.disableSelection();

        \$trash.droppable({
          accept: \"#gallery > li\",
          activeClass: \"ui-state-default\",
          hoverClass: \"ui-state-highlight\",
          drop: function( event, ui ) {
            ui.draggable.find(\".eliminar-item\").click();
          }
        });

        /*\$(\"li.tipo-categoria\").each(function(){
           var \$tipo=\$(this);
           \$tipo.droppable({
                accept: \"#gallery > li\",
                activeClass: \"ui-state-default\",
                hoverClass: \"ui-state-highlight\",
                drop: function( event, ui ) {
                    cambiarTipoCategoria(ui.draggable,\$tipo);
                }
           }); 
        });

        \$(\"li.archivo-categoria\").each(function(){
           var \$tipo=\$(this);
           \$tipo.droppable({
                accept: \"#gallery > li\",
                activeClass: \"ui-state-default\",
                hoverClass: \"ui-state-highlight\",
                drop: function( event, ui ) {
                    cambiarArchivoCategoria(ui.draggable,\$tipo);
                }
           }); 
        });*/
    }

</script>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Default:publicacionesGaleria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 113,  242 => 101,  234 => 99,  226 => 97,  180 => 81,  175 => 78,  110 => 34,  262 => 106,  244 => 103,  236 => 101,  232 => 100,  216 => 96,  207 => 90,  185 => 86,  248 => 104,  194 => 86,  190 => 85,  186 => 84,  170 => 78,  167 => 77,  160 => 73,  155 => 71,  152 => 70,  124 => 46,  419 => 195,  411 => 189,  397 => 179,  389 => 177,  385 => 176,  377 => 174,  373 => 173,  369 => 172,  346 => 164,  338 => 162,  332 => 159,  328 => 158,  324 => 157,  320 => 156,  316 => 155,  292 => 147,  222 => 96,  218 => 106,  210 => 104,  206 => 103,  202 => 102,  197 => 89,  354 => 166,  352 => 157,  331 => 142,  327 => 141,  323 => 140,  293 => 131,  289 => 146,  279 => 126,  261 => 120,  251 => 107,  239 => 111,  225 => 96,  211 => 91,  181 => 84,  172 => 78,  366 => 163,  350 => 165,  342 => 163,  340 => 153,  330 => 146,  319 => 139,  295 => 132,  291 => 131,  287 => 130,  277 => 112,  267 => 122,  263 => 121,  257 => 119,  253 => 117,  249 => 102,  245 => 101,  231 => 110,  213 => 93,  195 => 87,  192 => 98,  58 => 8,  23 => 1,  318 => 160,  310 => 152,  306 => 151,  302 => 150,  299 => 134,  296 => 154,  290 => 133,  266 => 107,  250 => 103,  237 => 99,  228 => 99,  150 => 64,  129 => 36,  114 => 31,  97 => 25,  77 => 18,  426 => 204,  418 => 198,  416 => 197,  394 => 184,  390 => 183,  386 => 182,  382 => 181,  378 => 167,  370 => 178,  359 => 159,  351 => 171,  347 => 155,  343 => 169,  333 => 165,  329 => 164,  325 => 163,  321 => 162,  315 => 138,  311 => 137,  307 => 274,  303 => 135,  297 => 154,  270 => 132,  265 => 121,  260 => 129,  256 => 127,  233 => 98,  223 => 108,  212 => 95,  205 => 102,  198 => 168,  191 => 89,  184 => 85,  165 => 74,  137 => 51,  127 => 47,  113 => 35,  81 => 23,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 134,  409 => 188,  407 => 131,  402 => 186,  398 => 185,  393 => 178,  387 => 122,  384 => 121,  381 => 175,  379 => 119,  374 => 165,  368 => 112,  365 => 171,  362 => 160,  360 => 169,  355 => 172,  341 => 105,  337 => 166,  322 => 101,  314 => 159,  312 => 98,  309 => 97,  305 => 95,  298 => 149,  294 => 147,  285 => 114,  283 => 127,  278 => 86,  268 => 134,  264 => 84,  258 => 108,  252 => 80,  247 => 115,  241 => 100,  229 => 97,  220 => 97,  214 => 105,  177 => 81,  169 => 60,  140 => 55,  132 => 48,  128 => 48,  107 => 36,  61 => 15,  273 => 111,  269 => 122,  254 => 104,  243 => 114,  240 => 102,  238 => 100,  235 => 110,  230 => 98,  227 => 109,  224 => 98,  221 => 95,  219 => 107,  217 => 94,  208 => 103,  204 => 90,  179 => 83,  159 => 61,  143 => 56,  135 => 38,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 11,  59 => 14,  38 => 5,  28 => 3,  87 => 25,  26 => 6,  201 => 90,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 73,  158 => 74,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 50,  121 => 46,  117 => 32,  105 => 33,  91 => 27,  62 => 23,  49 => 19,  94 => 24,  89 => 20,  85 => 21,  75 => 17,  68 => 12,  56 => 13,  24 => 4,  21 => 2,  31 => 7,  25 => 5,  19 => 1,  93 => 28,  88 => 22,  78 => 54,  46 => 9,  44 => 7,  27 => 4,  79 => 19,  72 => 16,  69 => 15,  47 => 9,  40 => 7,  37 => 9,  22 => 3,  246 => 102,  157 => 72,  145 => 54,  139 => 52,  131 => 51,  123 => 43,  120 => 33,  115 => 41,  111 => 30,  108 => 29,  101 => 31,  98 => 31,  96 => 29,  83 => 25,  74 => 17,  66 => 17,  55 => 34,  52 => 7,  50 => 10,  43 => 12,  41 => 7,  35 => 8,  32 => 3,  29 => 3,  209 => 92,  203 => 89,  199 => 88,  193 => 88,  189 => 84,  187 => 87,  182 => 83,  176 => 80,  173 => 146,  168 => 75,  164 => 59,  162 => 74,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 50,  130 => 47,  125 => 44,  122 => 45,  116 => 38,  112 => 42,  109 => 34,  106 => 33,  103 => 30,  99 => 29,  95 => 28,  92 => 21,  86 => 25,  82 => 20,  80 => 19,  73 => 19,  64 => 14,  60 => 11,  57 => 11,  54 => 10,  51 => 11,  48 => 8,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
