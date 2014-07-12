<?php

/* GaleriasBundle:Galeria:formulariosGaleria.js.twig */
class __TwigTemplate_8f4096cded5f0fdb536bd46ac50552f3cc96710b7a17cdb0df95aec33d30ca5c extends Twig_Template
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
        echo "<script>
    
    /* Configuracion de Uploader.
     * 
     * @returns configuracion de Uploader.
     */
    function createUploader(){
    var uploader = new qq.FileUploader({
            element: document.getElementById('upload'),
            template: '<div class=\"qq-uploader\"><div class=\"qq-upload-drop-area\"><span>Drop archivos aqui para cargar</span></div><div class=\"qq-upload-button\"><span id=\"status\" ></span>Agregar archivos</div><ul class=\"qq-upload-list\"></ul></div>',
            action: '";
        // line 11
        echo (isset($context["post_galerias"]) ? $context["post_galerias"] : $this->getContext($context, "post_galerias"));
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
        // line 31
        echo (isset($context["get_galerias"]) ? $context["get_galerias"] : $this->getContext($context, "get_galerias"));
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
    
    function crearRegistroGaleriaVideoLink(){
        debugger;
        \$('#image-loader').show();
        var \$form = \$(\"#contenidoVideoLink form \");
        var url='";
        // line 124
        echo (isset($context["post_galerias_link_video"]) ? $context["post_galerias_link_video"] : $this->getContext($context, "post_galerias_link_video"));
        echo "';
        var archivo = \$form.find(\"#galeria_archivo\").val();
        var position = \$form.find(\"#galeria_position\").val();
        var tipoArchivo = \$form.find(\"#galeria_tipoArchivo\").val();
        \$.ajax({
           url: url,
           type: 'GET',
           data: {archivo: archivo, 'tipoArchivo': tipoArchivo,'isActive': 1,'position': position},
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
        \$('#image-loader').show();
        \$.ajax({
            url: '";
        // line 150
        echo $this->env->getExtension('routing')->getUrl("galerias_new");
        echo "',
            type: 'GET',
            data: {tipo: 'link_video'},
            dataType: 'html',
            success: function(data){
                console.log(data);                
                \$('#image-loader').hide();
                \$(\"#contenidoVideoLink\").html(data);
                \$(\"#newVideoLinkFormModal\").modal( \"show\" );
            },
            error: function(data){
               console.log(data);
               \$('#image-loader').hide();
               \$( \"#newVideoLinkFormModal\" ).modal( \"hide\" );
            },
        });
        
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
        var archivo=\$(\"input#galeria_archivo\");
        
        bValid=(archivo.val().length>0 && archivo.val()!=\"archivo\")?true:false;
        /*bValid=(fieldDescription.val().length>0 && fieldDescription.val()!=\"Descripcion\")?true:false;*/
        if ( bValid ) {
            crearRegistroGaleriaVideoLink();
            \$(\"#newVideoLinkFormModal\").modal( \"hide\" );
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
        var \$url=\$(\"#field-activar\");
        \$.ajax({
           url: \$url.val(),
           type: 'PATCH',
           data: {isActive: true},
           dataType: 'html',
           success: function(data){
              setTimeout(function(){
                \$('#image-loader').hide();
              }, 1000);
              refrescarGaleria();
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
        // line 262
        echo $this->env->getExtension('routing')->getUrl("galerias_ordenar");
        echo "?' + order,
                       type: 'POST',
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

        /*\$.ajax({
        'url': \$(\"#contenidoVideoLink form\").attr('action'),
        'data': \$(\"#contenidoVideoLink form\").serialize(),
        'type':'POST',
        success: function(data){console.log(data)},
        error:function(data){console.log(\"error\"); console.log(data);}
        });*/
    }
</script>

";
    }

    public function getTemplateName()
    {
        return "GaleriasBundle:Galeria:formulariosGaleria.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 37,  161 => 75,  483 => 238,  445 => 212,  441 => 211,  462 => 225,  417 => 205,  356 => 186,  422 => 188,  410 => 183,  400 => 180,  552 => 274,  550 => 273,  543 => 268,  539 => 267,  531 => 261,  529 => 260,  514 => 248,  510 => 247,  506 => 246,  498 => 244,  494 => 243,  490 => 242,  486 => 241,  482 => 240,  478 => 239,  470 => 231,  465 => 235,  459 => 232,  455 => 231,  451 => 230,  447 => 229,  443 => 228,  433 => 209,  429 => 208,  425 => 207,  421 => 206,  153 => 56,  363 => 161,  271 => 125,  335 => 148,  272 => 133,  434 => 219,  396 => 199,  392 => 183,  388 => 172,  380 => 179,  376 => 178,  345 => 155,  178 => 81,  391 => 176,  372 => 165,  367 => 162,  502 => 245,  500 => 246,  493 => 241,  489 => 240,  481 => 237,  479 => 233,  464 => 221,  460 => 224,  456 => 219,  452 => 218,  448 => 217,  436 => 214,  432 => 194,  428 => 212,  424 => 211,  420 => 213,  383 => 197,  375 => 164,  339 => 182,  118 => 36,  90 => 28,  65 => 11,  84 => 17,  53 => 18,  405 => 202,  358 => 157,  336 => 162,  300 => 152,  371 => 163,  284 => 134,  276 => 144,  200 => 93,  188 => 96,  288 => 135,  282 => 146,  274 => 130,  174 => 80,  364 => 163,  349 => 168,  344 => 166,  317 => 141,  313 => 140,  301 => 155,  275 => 126,  215 => 105,  415 => 218,  403 => 215,  401 => 201,  361 => 171,  357 => 170,  353 => 169,  348 => 171,  334 => 162,  326 => 160,  308 => 154,  304 => 153,  286 => 147,  280 => 133,  34 => 12,  126 => 61,  259 => 119,  255 => 118,  281 => 137,  242 => 114,  234 => 113,  226 => 109,  180 => 82,  175 => 72,  110 => 34,  262 => 127,  244 => 121,  236 => 112,  232 => 111,  216 => 103,  207 => 97,  185 => 96,  248 => 122,  194 => 88,  190 => 89,  186 => 83,  170 => 76,  167 => 69,  160 => 73,  155 => 71,  152 => 70,  124 => 61,  419 => 189,  411 => 186,  397 => 187,  389 => 185,  385 => 181,  377 => 175,  373 => 174,  369 => 173,  346 => 182,  338 => 163,  332 => 172,  328 => 177,  324 => 159,  320 => 173,  316 => 156,  292 => 136,  222 => 104,  218 => 108,  210 => 102,  206 => 95,  202 => 95,  197 => 99,  354 => 156,  352 => 155,  331 => 150,  327 => 149,  323 => 162,  293 => 132,  289 => 131,  279 => 127,  261 => 121,  251 => 118,  239 => 114,  225 => 108,  211 => 104,  181 => 84,  172 => 78,  366 => 163,  350 => 156,  342 => 154,  340 => 153,  330 => 161,  319 => 138,  295 => 131,  291 => 130,  287 => 129,  277 => 126,  267 => 124,  263 => 121,  257 => 120,  253 => 119,  249 => 115,  245 => 114,  231 => 112,  213 => 104,  195 => 99,  192 => 98,  58 => 17,  23 => 1,  318 => 172,  310 => 154,  306 => 141,  302 => 140,  299 => 132,  296 => 153,  290 => 148,  266 => 128,  250 => 120,  237 => 112,  228 => 110,  150 => 124,  129 => 46,  114 => 35,  97 => 46,  77 => 18,  426 => 190,  418 => 198,  416 => 197,  394 => 176,  390 => 196,  386 => 195,  382 => 194,  378 => 193,  370 => 178,  359 => 160,  351 => 158,  347 => 155,  343 => 150,  333 => 145,  329 => 144,  325 => 143,  321 => 142,  315 => 137,  311 => 135,  307 => 134,  303 => 133,  297 => 154,  270 => 129,  265 => 122,  260 => 133,  256 => 126,  233 => 111,  223 => 107,  212 => 96,  205 => 101,  198 => 97,  191 => 86,  184 => 95,  165 => 76,  137 => 51,  127 => 47,  113 => 37,  81 => 23,  76 => 21,  480 => 162,  474 => 232,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 216,  440 => 215,  437 => 210,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 204,  409 => 203,  407 => 182,  402 => 181,  398 => 185,  393 => 186,  387 => 208,  384 => 170,  381 => 176,  379 => 165,  374 => 192,  368 => 189,  365 => 172,  362 => 162,  360 => 187,  355 => 159,  341 => 147,  337 => 155,  322 => 143,  314 => 155,  312 => 155,  309 => 139,  305 => 142,  298 => 146,  294 => 262,  285 => 138,  283 => 128,  278 => 132,  268 => 134,  264 => 128,  258 => 126,  252 => 123,  247 => 115,  241 => 113,  229 => 109,  220 => 112,  214 => 105,  177 => 80,  169 => 71,  140 => 55,  132 => 48,  128 => 41,  107 => 64,  61 => 15,  273 => 143,  269 => 123,  254 => 118,  243 => 119,  240 => 118,  238 => 114,  235 => 113,  230 => 109,  227 => 108,  224 => 107,  221 => 106,  219 => 106,  217 => 104,  208 => 101,  204 => 102,  179 => 150,  159 => 61,  143 => 56,  135 => 38,  119 => 48,  102 => 29,  71 => 26,  67 => 25,  63 => 24,  59 => 30,  38 => 6,  28 => 3,  87 => 30,  26 => 6,  201 => 100,  196 => 90,  183 => 94,  171 => 77,  166 => 84,  163 => 76,  158 => 74,  156 => 58,  151 => 56,  142 => 59,  138 => 49,  136 => 50,  121 => 46,  117 => 40,  105 => 33,  91 => 27,  62 => 23,  49 => 14,  94 => 34,  89 => 19,  85 => 26,  75 => 27,  68 => 12,  56 => 13,  24 => 4,  21 => 2,  31 => 11,  25 => 6,  19 => 1,  93 => 47,  88 => 38,  78 => 15,  46 => 9,  44 => 7,  27 => 4,  79 => 28,  72 => 13,  69 => 19,  47 => 17,  40 => 7,  37 => 7,  22 => 3,  246 => 116,  157 => 57,  145 => 53,  139 => 50,  131 => 51,  123 => 60,  120 => 33,  115 => 67,  111 => 30,  108 => 29,  101 => 31,  98 => 45,  96 => 29,  83 => 29,  74 => 30,  66 => 17,  55 => 20,  52 => 26,  50 => 21,  43 => 12,  41 => 7,  35 => 6,  32 => 9,  29 => 3,  209 => 103,  203 => 99,  199 => 98,  193 => 98,  189 => 97,  187 => 96,  182 => 83,  176 => 82,  173 => 146,  168 => 77,  164 => 70,  162 => 76,  154 => 84,  149 => 54,  147 => 56,  144 => 49,  141 => 53,  133 => 50,  130 => 47,  125 => 40,  122 => 42,  116 => 38,  112 => 43,  109 => 52,  106 => 33,  103 => 30,  99 => 47,  95 => 28,  92 => 43,  86 => 25,  82 => 39,  80 => 19,  73 => 19,  64 => 27,  60 => 22,  57 => 23,  54 => 31,  51 => 11,  48 => 14,  45 => 13,  42 => 10,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
