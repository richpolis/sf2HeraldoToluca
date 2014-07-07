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
        return array (  308 => 193,  304 => 192,  300 => 191,  296 => 190,  291 => 189,  289 => 188,  286 => 187,  281 => 134,  262 => 171,  224 => 135,  222 => 134,  198 => 113,  194 => 112,  190 => 111,  185 => 109,  179 => 106,  154 => 84,  149 => 82,  126 => 61,  123 => 60,  106 => 30,  102 => 29,  89 => 19,  84 => 17,  81 => 16,  78 => 15,  60 => 45,  56 => 44,  53 => 43,  51 => 15,  48 => 14,  45 => 13,  39 => 3,  34 => 11,  32 => 9,  30 => 5,);
    }
}
