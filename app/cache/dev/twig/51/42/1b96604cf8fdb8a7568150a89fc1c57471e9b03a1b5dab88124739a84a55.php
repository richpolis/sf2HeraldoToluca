<?php

/* GaleriasBundle:Galeria:formulariosGaleria.html.twig */
class __TwigTemplate_51421b96604cf8fdb8a7568150a89fc1c57471e9b03a1b5dab88124739a84a55 extends Twig_Template
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
        return "GaleriasBundle:Galeria:formulariosGaleria.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 37,  161 => 75,  483 => 238,  445 => 212,  441 => 211,  462 => 225,  417 => 205,  356 => 186,  422 => 188,  410 => 183,  400 => 180,  552 => 274,  550 => 273,  543 => 268,  539 => 267,  531 => 261,  529 => 260,  514 => 248,  510 => 247,  506 => 246,  498 => 244,  494 => 243,  490 => 242,  486 => 241,  482 => 240,  478 => 239,  470 => 231,  465 => 235,  459 => 232,  455 => 231,  451 => 230,  447 => 229,  443 => 228,  433 => 209,  429 => 208,  425 => 207,  421 => 206,  153 => 56,  363 => 161,  271 => 125,  335 => 148,  272 => 133,  434 => 219,  396 => 199,  392 => 183,  388 => 172,  380 => 179,  376 => 178,  345 => 155,  178 => 81,  391 => 176,  372 => 165,  367 => 162,  502 => 245,  500 => 246,  493 => 241,  489 => 240,  481 => 237,  479 => 233,  464 => 221,  460 => 224,  456 => 219,  452 => 218,  448 => 217,  436 => 214,  432 => 194,  428 => 212,  424 => 211,  420 => 213,  383 => 197,  375 => 164,  339 => 182,  118 => 36,  90 => 28,  65 => 11,  84 => 17,  53 => 18,  405 => 202,  358 => 157,  336 => 162,  300 => 152,  371 => 163,  284 => 134,  276 => 144,  200 => 93,  188 => 96,  288 => 135,  282 => 146,  274 => 130,  174 => 80,  364 => 163,  349 => 168,  344 => 166,  317 => 141,  313 => 140,  301 => 155,  275 => 126,  215 => 105,  415 => 218,  403 => 215,  401 => 201,  361 => 171,  357 => 170,  353 => 169,  348 => 171,  334 => 162,  326 => 160,  308 => 154,  304 => 153,  286 => 147,  280 => 133,  34 => 12,  126 => 61,  259 => 119,  255 => 118,  281 => 137,  242 => 114,  234 => 113,  226 => 109,  180 => 82,  175 => 72,  110 => 34,  262 => 127,  244 => 121,  236 => 112,  232 => 111,  216 => 103,  207 => 97,  185 => 96,  248 => 122,  194 => 88,  190 => 89,  186 => 83,  170 => 76,  167 => 69,  160 => 73,  155 => 71,  152 => 70,  124 => 61,  419 => 189,  411 => 186,  397 => 187,  389 => 185,  385 => 181,  377 => 175,  373 => 174,  369 => 173,  346 => 182,  338 => 163,  332 => 172,  328 => 177,  324 => 159,  320 => 173,  316 => 156,  292 => 136,  222 => 104,  218 => 108,  210 => 102,  206 => 95,  202 => 95,  197 => 99,  354 => 156,  352 => 155,  331 => 150,  327 => 149,  323 => 162,  293 => 132,  289 => 131,  279 => 127,  261 => 121,  251 => 118,  239 => 114,  225 => 108,  211 => 104,  181 => 84,  172 => 78,  366 => 163,  350 => 156,  342 => 154,  340 => 153,  330 => 161,  319 => 138,  295 => 131,  291 => 130,  287 => 129,  277 => 126,  267 => 124,  263 => 121,  257 => 120,  253 => 119,  249 => 115,  245 => 114,  231 => 112,  213 => 104,  195 => 99,  192 => 98,  58 => 17,  23 => 1,  318 => 172,  310 => 154,  306 => 141,  302 => 140,  299 => 132,  296 => 153,  290 => 148,  266 => 128,  250 => 120,  237 => 112,  228 => 110,  150 => 124,  129 => 46,  114 => 35,  97 => 46,  77 => 18,  426 => 190,  418 => 198,  416 => 197,  394 => 176,  390 => 196,  386 => 195,  382 => 194,  378 => 193,  370 => 178,  359 => 160,  351 => 158,  347 => 155,  343 => 150,  333 => 145,  329 => 144,  325 => 143,  321 => 142,  315 => 137,  311 => 135,  307 => 134,  303 => 133,  297 => 154,  270 => 129,  265 => 122,  260 => 133,  256 => 126,  233 => 111,  223 => 107,  212 => 96,  205 => 101,  198 => 97,  191 => 86,  184 => 95,  165 => 76,  137 => 51,  127 => 47,  113 => 37,  81 => 23,  76 => 21,  480 => 162,  474 => 232,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 216,  440 => 215,  437 => 210,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 204,  409 => 203,  407 => 182,  402 => 181,  398 => 185,  393 => 186,  387 => 208,  384 => 170,  381 => 176,  379 => 165,  374 => 192,  368 => 189,  365 => 172,  362 => 162,  360 => 187,  355 => 159,  341 => 147,  337 => 155,  322 => 143,  314 => 155,  312 => 155,  309 => 139,  305 => 142,  298 => 146,  294 => 262,  285 => 138,  283 => 128,  278 => 132,  268 => 134,  264 => 128,  258 => 126,  252 => 123,  247 => 115,  241 => 113,  229 => 109,  220 => 112,  214 => 105,  177 => 80,  169 => 71,  140 => 55,  132 => 48,  128 => 41,  107 => 64,  61 => 15,  273 => 143,  269 => 123,  254 => 118,  243 => 119,  240 => 118,  238 => 114,  235 => 113,  230 => 109,  227 => 108,  224 => 107,  221 => 106,  219 => 106,  217 => 104,  208 => 101,  204 => 102,  179 => 150,  159 => 61,  143 => 56,  135 => 38,  119 => 48,  102 => 29,  71 => 26,  67 => 25,  63 => 24,  59 => 30,  38 => 6,  28 => 3,  87 => 30,  26 => 6,  201 => 100,  196 => 90,  183 => 94,  171 => 77,  166 => 84,  163 => 76,  158 => 74,  156 => 58,  151 => 56,  142 => 59,  138 => 49,  136 => 50,  121 => 46,  117 => 40,  105 => 33,  91 => 27,  62 => 23,  49 => 14,  94 => 34,  89 => 19,  85 => 26,  75 => 27,  68 => 12,  56 => 13,  24 => 4,  21 => 2,  31 => 11,  25 => 6,  19 => 2,  93 => 47,  88 => 38,  78 => 15,  46 => 9,  44 => 7,  27 => 4,  79 => 28,  72 => 13,  69 => 19,  47 => 17,  40 => 7,  37 => 7,  22 => 3,  246 => 116,  157 => 57,  145 => 53,  139 => 50,  131 => 51,  123 => 60,  120 => 33,  115 => 67,  111 => 30,  108 => 29,  101 => 31,  98 => 45,  96 => 29,  83 => 29,  74 => 30,  66 => 17,  55 => 20,  52 => 26,  50 => 21,  43 => 12,  41 => 7,  35 => 6,  32 => 9,  29 => 3,  209 => 103,  203 => 99,  199 => 98,  193 => 98,  189 => 97,  187 => 96,  182 => 83,  176 => 82,  173 => 146,  168 => 77,  164 => 70,  162 => 76,  154 => 84,  149 => 54,  147 => 56,  144 => 49,  141 => 53,  133 => 50,  130 => 47,  125 => 40,  122 => 42,  116 => 38,  112 => 43,  109 => 52,  106 => 33,  103 => 30,  99 => 47,  95 => 28,  92 => 43,  86 => 25,  82 => 39,  80 => 19,  73 => 19,  64 => 27,  60 => 22,  57 => 23,  54 => 31,  51 => 11,  48 => 14,  45 => 13,  42 => 10,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
