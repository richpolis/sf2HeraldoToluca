<?php

/* PublicacionesBundle:PublicacionesApi:formulariosGaleria.html.twig */
class __TwigTemplate_2a63c79ddbf1d9980fe73ad5d6da96106cd8941d2b19dfd8e0d5017abdcfa9f1 extends Twig_Template
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
        // line 2
        echo "<div id=\"editarFormModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"editarModalLabel\">Editar registro</h4>
            </div>
            <div class=\"modal-body\">
                <div style=\"float: right; height: 120px;\">
                    <img class=\"image-dialog\" src=\"\" id=\"\"/>
                </div>

                <p>Indique el titulo y/o descripcion</p>
                <div style=\"clear: both;\"></div>
                <div style=\"padding-top: 30px;\">
                    <div class=\"form-group\">
                        <label for=\"field-titulo\">Titulo</label>
                        <input type=\"text\" name=\"field-titulo\" value=\"00071.jpg\" id=\"field-titulo\" class=\"form-control\" />
                   </div>
                    <div class=\"form-group\">
                        <label for=\"field-contenido\">Contenido</label>
                        <textarea name=\"field-contenido\" id=\"field-contenido\" class=\"form-control\"></textarea>
                    </div>
                    <input name=\"field-url\" id=\"field-url\" type=\"hidden\" value=\"\"/>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cerrar</button>
                <button class=\"btn btn-primary\" onclick=\"javascript:guardarEditarFormModal();\">Guardar</button>
                <button class=\"btn\" onclick=\"javascript:avanzadaEditarFormModal();\">Avanzado</button>
            </div>
        </div>
    </div>            
</div>

<div class=\"modal fade\" id=\"confirmarFormModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"confirmarModalLabel\">Confirmar eliminar registro</h4>
            </div>
            <div class=\"modal-body\">
                <div style=\"float: right;\">
                    <img class=\"image-dialog\" src=\"\" id=\"\" style=\"max-width:120px;max-height: 120px;\"/>
                </div>
                <div style=\"clear: both;\"></div>
                <p style=\"margin-top:20px;\">¿Confirmar eliminar el siguiente registro?</p>
                <input id=\"field-eliminar\" type=\"hidden\" value=\"\"/>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancelar</button>
                <button class=\"btn btn-danger\" onclick=\"javascript:eliminarConfirmarFormModal();\">Eliminar</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"confirmarActivarFormModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"confirmarModalLabel\">Confirmar activar registro</h4>
            </div>
            <div class=\"modal-body\">
                <div style=\"float: right; height: 120px;\">
                    <img class=\"image-dialog\" src=\"\" id=\"\"/>
                </div>
                <div style=\"clear: both;\"></div>
                <p style=\"margin-top:20px;\">¿Confirmar activar el registro?</p>
                <input id=\"field-activar\" type=\"hidden\" value=\"\"/>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancelar</button>
                <button class=\"btn btn-success\" onclick=\"javascript:activarConfirmarFormModal();\">Activar</button>
            </div>
        </div>
    </div>
</div>

<div id=\"newVideoLinkFormModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"newVideoLinkModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"editarModalLabel\">Crear video link</h4>
            </div>
            <div class=\"modal-body\" id=\"contenidoVideoLink\">
                <div>
                    <div>
                        <label for=\"archivo\" class=\"required\">Link Video</label>
                        <input type=\"text\" id=\"archivo\" name=\"archivo\" required=\"required\" class=\"validate[required] form-control placeholder\" placeholder=\"Link Video\" data-bind=\"value: link video\">
                    </div>
                    <input type=\"hidden\" id=\"tipoArchivo\" name=\"tipoArchivo\" value=\"2\">
                    <input type=\"hidden\" id=\"publicacion\" name=\"publicacion\" value=\"2\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cerrar</button>
                <button class=\"btn btn-primary\" onclick=\"javascript:guardarVideoLinkFormModal();\">Guardar</button>
            </div>
        </div>
    </div>            
</div>";
    }

    public function getTemplateName()
    {
        return "PublicacionesBundle:PublicacionesApi:formulariosGaleria.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  65 => 11,  84 => 17,  53 => 14,  405 => 186,  358 => 172,  336 => 165,  300 => 191,  371 => 163,  284 => 127,  276 => 125,  200 => 100,  188 => 83,  288 => 128,  282 => 123,  274 => 121,  174 => 78,  364 => 161,  349 => 155,  344 => 154,  317 => 134,  313 => 133,  301 => 130,  275 => 125,  215 => 104,  415 => 194,  403 => 177,  401 => 185,  361 => 156,  357 => 166,  353 => 165,  348 => 163,  334 => 144,  326 => 142,  308 => 193,  304 => 192,  286 => 187,  280 => 126,  34 => 12,  126 => 61,  259 => 118,  255 => 117,  281 => 134,  242 => 101,  234 => 108,  226 => 107,  180 => 88,  175 => 66,  110 => 34,  262 => 171,  244 => 114,  236 => 112,  232 => 100,  216 => 100,  207 => 102,  185 => 109,  248 => 115,  194 => 112,  190 => 111,  186 => 84,  170 => 77,  167 => 77,  160 => 73,  155 => 71,  152 => 70,  124 => 61,  419 => 195,  411 => 193,  397 => 184,  389 => 182,  385 => 181,  377 => 179,  373 => 178,  369 => 169,  346 => 169,  338 => 145,  332 => 164,  328 => 163,  324 => 162,  320 => 153,  316 => 152,  292 => 129,  222 => 134,  218 => 106,  210 => 102,  206 => 101,  202 => 91,  197 => 99,  354 => 171,  352 => 156,  331 => 142,  327 => 141,  323 => 140,  293 => 128,  289 => 188,  279 => 126,  261 => 120,  251 => 116,  239 => 108,  225 => 108,  211 => 103,  181 => 68,  172 => 65,  366 => 163,  350 => 170,  342 => 146,  340 => 166,  330 => 143,  319 => 139,  295 => 132,  291 => 189,  287 => 130,  277 => 140,  267 => 115,  263 => 114,  257 => 119,  253 => 119,  249 => 118,  245 => 116,  231 => 109,  213 => 97,  195 => 99,  192 => 98,  58 => 17,  23 => 1,  318 => 159,  310 => 157,  306 => 156,  302 => 133,  299 => 134,  296 => 190,  290 => 144,  266 => 124,  250 => 103,  237 => 112,  228 => 103,  150 => 64,  129 => 46,  114 => 31,  97 => 46,  77 => 18,  426 => 204,  418 => 198,  416 => 197,  394 => 184,  390 => 183,  386 => 182,  382 => 181,  378 => 165,  370 => 178,  359 => 159,  351 => 156,  347 => 155,  343 => 150,  333 => 165,  329 => 164,  325 => 136,  321 => 135,  315 => 138,  311 => 137,  307 => 274,  303 => 135,  297 => 153,  270 => 122,  265 => 121,  260 => 116,  256 => 115,  233 => 110,  223 => 106,  212 => 96,  205 => 94,  198 => 113,  191 => 98,  184 => 69,  165 => 62,  137 => 51,  127 => 47,  113 => 53,  81 => 25,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 134,  409 => 188,  407 => 131,  402 => 186,  398 => 185,  393 => 183,  387 => 122,  384 => 121,  381 => 180,  379 => 119,  374 => 167,  368 => 176,  365 => 168,  362 => 173,  360 => 169,  355 => 157,  341 => 149,  337 => 166,  322 => 141,  314 => 158,  312 => 137,  309 => 132,  305 => 131,  298 => 132,  294 => 145,  285 => 129,  283 => 127,  278 => 122,  268 => 134,  264 => 84,  258 => 119,  252 => 114,  247 => 115,  241 => 114,  229 => 109,  220 => 104,  214 => 105,  177 => 80,  169 => 60,  140 => 55,  132 => 48,  128 => 48,  107 => 64,  61 => 15,  273 => 124,  269 => 122,  254 => 118,  243 => 114,  240 => 113,  238 => 109,  235 => 111,  230 => 110,  227 => 109,  224 => 135,  221 => 107,  219 => 107,  217 => 105,  208 => 95,  204 => 90,  179 => 106,  159 => 61,  143 => 56,  135 => 38,  119 => 69,  102 => 29,  71 => 31,  67 => 15,  63 => 11,  59 => 30,  38 => 6,  28 => 3,  87 => 25,  26 => 6,  201 => 90,  196 => 85,  183 => 82,  171 => 77,  166 => 84,  163 => 70,  158 => 74,  156 => 58,  151 => 56,  142 => 59,  138 => 49,  136 => 50,  121 => 46,  117 => 40,  105 => 33,  91 => 27,  62 => 23,  49 => 8,  94 => 24,  89 => 19,  85 => 26,  75 => 17,  68 => 12,  56 => 44,  24 => 4,  21 => 2,  31 => 12,  25 => 6,  19 => 2,  93 => 47,  88 => 22,  78 => 15,  46 => 13,  44 => 7,  27 => 4,  79 => 19,  72 => 13,  69 => 19,  47 => 17,  40 => 7,  37 => 13,  22 => 3,  246 => 102,  157 => 72,  145 => 53,  139 => 52,  131 => 51,  123 => 60,  120 => 33,  115 => 67,  111 => 30,  108 => 29,  101 => 33,  98 => 31,  96 => 29,  83 => 25,  74 => 21,  66 => 17,  55 => 20,  52 => 26,  50 => 13,  43 => 12,  41 => 14,  35 => 5,  32 => 9,  29 => 3,  209 => 92,  203 => 101,  199 => 93,  193 => 85,  189 => 87,  187 => 87,  182 => 83,  176 => 87,  173 => 146,  168 => 75,  164 => 59,  162 => 61,  154 => 84,  149 => 82,  147 => 58,  144 => 49,  141 => 48,  133 => 47,  130 => 47,  125 => 44,  122 => 42,  116 => 38,  112 => 42,  109 => 52,  106 => 51,  103 => 30,  99 => 47,  95 => 28,  92 => 43,  86 => 42,  82 => 39,  80 => 19,  73 => 19,  64 => 27,  60 => 23,  57 => 11,  54 => 10,  51 => 9,  48 => 14,  45 => 13,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 6,);
    }
}
