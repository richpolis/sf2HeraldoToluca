<?php

/* FrontendBundle::layout.html.twig */
class __TwigTemplate_03759bf919bbcda46c50e0c9cf00a7d250460cd915b0e651d09bef6966b7c0fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'redes_sociales' => array($this, 'block_redes_sociales'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["urlAbsolutaFoto"] = (("http://" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "server"), "get", array(0 => "SERVER_NAME"), "method")) . $this->env->getExtension('assets')->getAssetUrl("images/keyarts/logomenu.png"));
        // line 9
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale");
        // line 11
        $context["route"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "HERALDO DE TOLUCA";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "    
    ";
        // line 15
        $this->displayBlock('redes_sociales', $context, $blocks);
        // line 43
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.bxslider.css"), "html", null, true);
        echo "\"/>
<style>
    .loader {
        display: none;
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('/images/page-loader.gif') 50% 50% no-repeat transparent;
    }
</style>
";
    }

    // line 15
    public function block_redes_sociales($context, array $blocks = array())
    {
        // line 16
        echo "
    <meta property=\"og:url\" content=\"";
        // line 17
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\" />
    <meta property=\"og:title\" content=\"Inca México\" />
    <meta property=\"og:image\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["urlAbsolutaFoto"]) ? $context["urlAbsolutaFoto"] : $this->getContext($context, "urlAbsolutaFoto")), "html", null, true);
        echo "\" />
    <meta property=\"og:type\" content=\"article\" />
    <meta property=\"og:site_name\" content=\"heraldodetoluca.com\" />
    <!--meta property=\"fb:admins\" content=\"USER_ID1,USER_ID2\"/-->
    
    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:site\" content=\"@heraldodetoluca\">
    <meta name=\"twitter:title\" content=\"Heraldo de Toluca\">
    <meta name=\"twitter:description\" content=\"Descripcion de la publicacion\">
    <meta name=\"twitter:creator\" content=\"@richpolis\">
    <meta name=\"twitter:image:src\" content=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["urlAbsolutaFoto"]) ? $context["urlAbsolutaFoto"] : $this->getContext($context, "urlAbsolutaFoto")), "html", null, true);
        echo "\">
    <meta name=\"twitter:domain\" content=\"";
        // line 30
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\">
    <meta name=\"twitter:app:name:iphone\" content=\"\">
    <meta name=\"twitter:app:name:ipad\" content=\"\">
    <meta name=\"twitter:app:name:googleplay\" content=\"\">
    <meta name=\"twitter:app:url:iphone\" content=\"\">
    <meta name=\"twitter:app:url:ipad\" content=\"\">
    <meta name=\"twitter:app:url:googleplay\" content=\"\">
    <meta name=\"twitter:app:id:iphone\" content=\"\">
    <meta name=\"twitter:app:id:ipad\" content=\"\">
    <meta name=\"twitter:app:id:googleplay\" content=\"\">


    ";
    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        // line 61
        echo "<div class=\"container border-gris-lr\">
        <header class=\"header\">
            <div class=\"publicidad\">
                <div class=\"item-publicidad\">
                    <img src=\"http://placehold.it/728x90\" alt=\"\">
                </div>
                <div class=\"item-publicidad\">
                    <img src=\"http://placehold.it/230x90\" alt=\"\">
                </div>
            </div>
            <div class=\"navegador secundario\">
                <ul>
                    <li><a href=\"#\">nosotros</a></li>
                    <li><a href=\"#\">historia</a></li>
                    <li><a href=\"#\">edicion pdf</a></li>
                    <li><a href=\"#\">heraldo tv</a></li>
                    <li><a href=\"#\">tu espacio</a></li>
                    <li><a href=\"#\">contacto</a></li>
                </ul>
            </div>
            <div id=\"logo-redes-sociales\">
                <a id=\"logo\" href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                    <figure id=\"logo\">
                        <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/heraldologo.png"), "html", null, true);
        echo "\" alt=\"Heraldo de Toluca\"/>
                    </figure>
                </a>
                <div class=\"redes-sociales\">
                    <a href=\"#\" target=\"_blank\"><span class=\"twitter ico_twitter\"></span></a>
                    <a href=\"#\" target=\"_blank\"><span class=\"facebook ico_facebook\"></span></a>
                    <a href=\"#\" target=\"_blank\"><span class=\"youtube ico_youtube\"></span></a>
                    <a href=\"#\" target=\"_blank\"><span class=\"flickr ico_flickr\"></span></a>
                </div>
                <div class=\"buscador\">
                    <form action=\"\" class=\"form-buscador\">
                        <input type=\"text\" class=\"buscar\">
                        <a href=\"#\"><span class=\"accion-buscar ico_buscar\"></span></a>
                        <a href=\"\" class=\"link-archivo\">archivos</a>
                    </form>
                </div>
                <div class=\"fecha\">Martes, 12 de Julio 2014</div>
            </div>
        </header>
        <nav class=\"navegador principal\">
            <ul class=\"menu\">
                <li>
                    <a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">portada</a>
                </li>
                <li>
                    <a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("frontend_categoria", array("categoria" => "inicio"));
        echo "\">inicio</a>
                    <ul class=\"submenu\">
                        <li><a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("frontend_categoria", array("categoria" => "inicio"));
        echo "\">item 1</a></li>
                        <li><a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("frontend_categoria", array("categoria" => "inicio"));
        echo "\">item 2</a></li>
                        <li><a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("frontend_categoria", array("categoria" => "inicio"));
        echo "\">item 3</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"#\">general</a>
                    <ul class=\"submenu\">
                        <li><a href=\"#\">item</a></li>
                        <li><a href=\"#\">item</a></li>
                        <li><a href=\"#\">item</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">nacional</a></li>
                <li><a href=\"#\">mundo</a></li>
                <li><a href=\"#\">negocios</a></li>
                <li><a href=\"#\">municipios</a></li>
                <li><a href=\"#\">trofeo</a></li>
                <li><a href=\"#\">arte y gente</a></li>
                <li><a href=\"#\">ideas y voces</a></li>
                <li><a href=\"#\">entrevista</a></li>
            </ul>
        </nav>
    ";
        // line 134
        $this->displayBlock('contenido', $context, $blocks);
        // line 135
        echo "    <span class=\"totop\"><a href=\"#\"><i class=\"fa fa-chevron-up\"></i></a></span>
    <div class=\"loader\"></div>
</div>
    <footer>
        <div class=\"navegadores\">
            <div class=\"container\">
                <div class=\"navegador secundario\">
                    <ul>
                        <li><a href=\"#\">nosotros</a></li>
                        <li><a href=\"#\">historia</a></li>
                        <li><a href=\"#\">edicion pdf</a></li>
                        <li><a href=\"#\">heraldo tv</a></li>
                        <li><a href=\"#\">tu espacio</a></li>
                        <li><a href=\"#\">contacto</a></li>
                    </ul>
                </div>
                <div class=\"navegador principal principal-footer\">
                    <ul>
                        <li><a href=\"#\">portada</a></li>
                        <li><a href=\"#\">inicio</a></li>
                        <li><a href=\"#\">general</a></li>
                        <li><a href=\"#\">nacional</a></li>
                        <li><a href=\"#\">mundo</a></li>
                        <li><a href=\"#\">negocios</a></li>
                        <li><a href=\"#\">municipios</a></li>
                        <li><a href=\"#\">trofeo</a></li>
                        <li><a href=\"#\">arte y gente</a></li>
                        <li><a href=\"#\">ideas y voces</a></li>
                        <li><a href=\"#\">entrevista</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"contenidos\">
                <figure class=\"logo\">
                    <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo-blanco.png"), "html", null, true);
        echo "\" alt=\"\" class=\"imagen-logo\">
                </figure>
                <div class=\"contenido\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, labore aut ratione deleniti, consequatur corporis animi impedit soluta sapiente sint ducimus quos fugiat laborum? Iste facilis, doloremque vel nemo nam.
                </div>
                <div class=\"redes-sociales\">
                    <span class=\"twitter ico_twitter\"></span>
                    <span class=\"facebook ico_facebook\"></span>
                    <span class=\"youtube ico_youtube\"></span>
                    <span class=\"flickr ico_flickr\"></span>
                </div>
            </div>
        </div>    
    </footer>    
";
    }

    // line 134
    public function block_contenido($context, array $blocks = array())
    {
    }

    // line 187
    public function block_javascripts($context, array $blocks = array())
    {
        // line 188
        echo "    ";
        // line 189
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <!--script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/underscore-min.js"), "html", null, true);
        echo "\"></script-->
    <!--script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/backbone-min.js"), "html", null, true);
        echo "\"></script-->
    <!--script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/swig.js"), "html", null, true);
        echo "\"></script-->
    <script type=\"text/javascript\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var publicacionesPdf = 1;
        var publicacionesPdfMax = 3;
        var valorGaleriaPdf = 0;
        \$(document).ready(function(){
          \$('.galeria').bxSlider();

          \$(\".tab\").on(\"click\",function(){
            \$(\".tab\").removeClass(\"active\");
            \$(this).addClass(\"active\");
            var tabClass = \$(this).data('tab');
            \$(\".lomas\").fadeOut(\"fast\");
            \$(\".\"+tabClass).fadeIn(\"fast\");
          });

          \$(\".control.izquierdo\").on(\"click\",function(){
            if(publicacionesPdf>1){
                publicacionesPdf--;
                valorGaleriaPdf = (((publicacionesPdf)*300)-300);
                \$(\".galeria-pdf\").animate({left: '-'+valorGaleriaPdf+'px'},1000);
            }
          });

          \$(\".control.derecho\").on(\"click\",function(){
            if(publicacionesPdf<publicacionesPdfMax){
                publicacionesPdf++;
                valorGaleriaPdf = (((publicacionesPdf)*300)-300);
                \$(\".galeria-pdf\").animate({left: '-'+valorGaleriaPdf+'px'},1000);
            }
          });


          \$(\".tab-visto\").click();


        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  53 => 43,  405 => 186,  358 => 172,  336 => 165,  300 => 191,  371 => 163,  284 => 127,  276 => 125,  200 => 100,  188 => 83,  288 => 128,  282 => 123,  274 => 121,  174 => 78,  364 => 161,  349 => 155,  344 => 154,  317 => 134,  313 => 133,  301 => 130,  275 => 125,  215 => 104,  415 => 194,  403 => 177,  401 => 185,  361 => 156,  357 => 166,  353 => 165,  348 => 163,  334 => 144,  326 => 142,  308 => 193,  304 => 192,  286 => 187,  280 => 126,  34 => 11,  126 => 61,  259 => 118,  255 => 117,  281 => 134,  242 => 101,  234 => 108,  226 => 107,  180 => 88,  175 => 79,  110 => 34,  262 => 171,  244 => 114,  236 => 112,  232 => 100,  216 => 100,  207 => 102,  185 => 109,  248 => 115,  194 => 112,  190 => 111,  186 => 84,  170 => 77,  167 => 77,  160 => 73,  155 => 71,  152 => 70,  124 => 46,  419 => 195,  411 => 193,  397 => 184,  389 => 182,  385 => 181,  377 => 179,  373 => 178,  369 => 169,  346 => 169,  338 => 145,  332 => 164,  328 => 163,  324 => 162,  320 => 153,  316 => 152,  292 => 129,  222 => 134,  218 => 106,  210 => 102,  206 => 101,  202 => 91,  197 => 99,  354 => 171,  352 => 156,  331 => 142,  327 => 141,  323 => 140,  293 => 128,  289 => 188,  279 => 126,  261 => 120,  251 => 116,  239 => 108,  225 => 108,  211 => 103,  181 => 84,  172 => 86,  366 => 163,  350 => 170,  342 => 146,  340 => 166,  330 => 143,  319 => 139,  295 => 132,  291 => 189,  287 => 130,  277 => 140,  267 => 115,  263 => 114,  257 => 119,  253 => 119,  249 => 118,  245 => 116,  231 => 109,  213 => 97,  195 => 99,  192 => 98,  58 => 8,  23 => 1,  318 => 159,  310 => 157,  306 => 156,  302 => 133,  299 => 134,  296 => 190,  290 => 144,  266 => 124,  250 => 103,  237 => 112,  228 => 103,  150 => 64,  129 => 36,  114 => 31,  97 => 25,  77 => 18,  426 => 204,  418 => 198,  416 => 197,  394 => 184,  390 => 183,  386 => 182,  382 => 181,  378 => 165,  370 => 178,  359 => 159,  351 => 156,  347 => 155,  343 => 150,  333 => 165,  329 => 164,  325 => 136,  321 => 135,  315 => 138,  311 => 137,  307 => 274,  303 => 135,  297 => 153,  270 => 122,  265 => 121,  260 => 116,  256 => 115,  233 => 110,  223 => 106,  212 => 96,  205 => 94,  198 => 113,  191 => 98,  184 => 89,  165 => 76,  137 => 51,  127 => 47,  113 => 37,  81 => 16,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 134,  409 => 188,  407 => 131,  402 => 186,  398 => 185,  393 => 183,  387 => 122,  384 => 121,  381 => 180,  379 => 119,  374 => 167,  368 => 176,  365 => 168,  362 => 173,  360 => 169,  355 => 157,  341 => 149,  337 => 166,  322 => 141,  314 => 158,  312 => 137,  309 => 132,  305 => 131,  298 => 132,  294 => 145,  285 => 129,  283 => 127,  278 => 122,  268 => 134,  264 => 84,  258 => 119,  252 => 114,  247 => 115,  241 => 114,  229 => 109,  220 => 104,  214 => 105,  177 => 80,  169 => 60,  140 => 55,  132 => 48,  128 => 48,  107 => 64,  61 => 15,  273 => 124,  269 => 122,  254 => 118,  243 => 114,  240 => 113,  238 => 109,  235 => 111,  230 => 110,  227 => 109,  224 => 135,  221 => 107,  219 => 107,  217 => 105,  208 => 95,  204 => 90,  179 => 106,  159 => 61,  143 => 56,  135 => 38,  119 => 69,  102 => 29,  71 => 19,  67 => 15,  63 => 11,  59 => 14,  38 => 6,  28 => 3,  87 => 25,  26 => 6,  201 => 90,  196 => 85,  183 => 82,  171 => 77,  166 => 84,  163 => 70,  158 => 74,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 50,  121 => 46,  117 => 32,  105 => 33,  91 => 27,  62 => 23,  49 => 18,  94 => 24,  89 => 19,  85 => 21,  75 => 17,  68 => 12,  56 => 44,  24 => 4,  21 => 2,  31 => 12,  25 => 6,  19 => 81,  93 => 28,  88 => 22,  78 => 15,  46 => 9,  44 => 10,  27 => 4,  79 => 19,  72 => 32,  69 => 15,  47 => 17,  40 => 7,  37 => 13,  22 => 3,  246 => 102,  157 => 72,  145 => 54,  139 => 52,  131 => 51,  123 => 60,  120 => 33,  115 => 67,  111 => 30,  108 => 29,  101 => 31,  98 => 31,  96 => 29,  83 => 25,  74 => 17,  66 => 17,  55 => 20,  52 => 7,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 9,  29 => 3,  209 => 92,  203 => 101,  199 => 93,  193 => 85,  189 => 87,  187 => 87,  182 => 83,  176 => 87,  173 => 146,  168 => 75,  164 => 59,  162 => 76,  154 => 84,  149 => 82,  147 => 58,  144 => 49,  141 => 48,  133 => 50,  130 => 47,  125 => 44,  122 => 45,  116 => 38,  112 => 42,  109 => 65,  106 => 30,  103 => 30,  99 => 29,  95 => 28,  92 => 21,  86 => 25,  82 => 20,  80 => 19,  73 => 19,  64 => 27,  60 => 45,  57 => 11,  54 => 10,  51 => 15,  48 => 14,  45 => 13,  42 => 7,  39 => 3,  36 => 5,  33 => 4,  30 => 5,);
    }
}
