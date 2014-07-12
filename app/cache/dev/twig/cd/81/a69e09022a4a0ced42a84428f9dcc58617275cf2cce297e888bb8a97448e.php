<?php

/* FrontendBundle:Default:formContacto.html.twig */
class __TwigTemplate_cd81a69e09022a4a0ced42a84428f9dcc58617275cf2cce297e888bb8a97448e extends Twig_Template
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
        if ((!array_key_exists("error", $context))) {
            // line 2
            echo "    ";
            $context["error"] = false;
        }
        // line 4
        echo "    
";
        // line 5
        if ((!array_key_exists("ok", $context))) {
            // line 6
            echo "    ";
            $context["ok"] = false;
        }
        // line 8
        echo "    
";
        // line 9
        if ((!array_key_exists("mensaje", $context))) {
            // line 10
            echo "    ";
            $context["mensaje"] = "";
        }
        // line 12
        echo "
<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/logocontacto.png"), "html", null, true);
        echo "\" alt=\"\"/>
                
<div id=\"formulario_contacto\">
     <form onsubmit=\"return false;\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("frontend_contacto");
        echo "\" method=\"post\" class=\"form-contacto ";
        if (((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) == true)) {
            echo "invalid";
        }
        echo " ";
        if (((isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")) == true)) {
            echo "sent";
        }
        echo "\" novalidate=\"novalidate\" role=\"form\">
          <div class=\"form-group\">
             <label for=\"contacto_name\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nombre"), "html", null, true);
        echo "</label>
             ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("nombre"))));
        echo "
             <span class=\"errores\"> 
                 ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo "
             </span>
         </div>
         <div class=\"form-group\">
             <label for=\"contacto_email\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("email"), "html", null, true);
        echo "</label>
                 ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("email"))));
        echo "
             <span class=\"errores\"> 
                 ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
             </span>
         </div>
          <div class=\"form-group\">
             <label for=\"contacto_subject\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("asunto"), "html", null, true);
        echo "</label>
                 ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("asunto"))));
        echo "
             <span class=\"errores\"> 
                 ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject"), 'errors');
        echo "
             </span>
         </div>
         <div class=\"form-group\">
             <label for=\"contacto_telefono\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("teléfono"), "html", null, true);
        echo "</label>
                 ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("teléfono"))));
        echo "
             <span class=\"errores\"> 
                 ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'errors');
        echo "
             </span>
         </div>    
         <div class=\"form-group\">
             <label for=\"contacto_body\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("mensaje"), "html", null, true);
        echo "</label>
                 ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("mensaje"))));
        echo "
             <span class=\"errores\"> 
                 ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'errors');
        echo "
             </span>
         </div> 
         <div class=\"form-group\">
             <input type=\"submit\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enviar"), "html", null, true);
        echo "\" class=\"form-contacto-control form-submit btn\" style=\"font-size: 16px; padding: 5px 40px; float: right;\">
             <img class=\"ajax-loader\" src=\"/images/bx_loader.gif\" alt=\"Enviando ...\" style=\"visibility: hidden;\">
         </div>
         ";
        // line 56
        if ((((isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")) == true) && ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) == false))) {
            echo "    
         <div class=\"form-response-output form-mail-sent-ok\">
             ";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo "
         </div>
         ";
        } elseif ((((isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")) == false) && ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) == true))) {
            // line 61
            echo "         <div class=\"form-response-output form-mail-sent-ng form-validation-errors\">
             ";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
         </div>    
         ";
        } else {
            // line 65
            echo "         <div class=\"form-response-output\">
             ";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo "
         </div>    
         ";
        }
        // line 68
        echo "    
         ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "    
     </form>
 </div>
<script type='text/javascript'>
\$(document).on('ready',function() {   
    iniciarlizarFormContacto();
});
</script>";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:formContacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  65 => 18,  84 => 17,  53 => 43,  405 => 186,  358 => 172,  336 => 165,  300 => 191,  371 => 163,  284 => 127,  276 => 125,  200 => 100,  188 => 83,  288 => 128,  282 => 123,  274 => 121,  174 => 78,  364 => 161,  349 => 155,  344 => 154,  317 => 134,  313 => 133,  301 => 130,  275 => 125,  215 => 104,  415 => 194,  403 => 177,  401 => 185,  361 => 156,  357 => 166,  353 => 165,  348 => 163,  334 => 144,  326 => 142,  308 => 193,  304 => 192,  286 => 187,  280 => 126,  34 => 8,  126 => 61,  259 => 118,  255 => 117,  281 => 134,  242 => 101,  234 => 108,  226 => 107,  180 => 88,  175 => 66,  110 => 34,  262 => 171,  244 => 114,  236 => 112,  232 => 100,  216 => 100,  207 => 102,  185 => 109,  248 => 115,  194 => 112,  190 => 111,  186 => 84,  170 => 77,  167 => 77,  160 => 73,  155 => 71,  152 => 70,  124 => 46,  419 => 195,  411 => 193,  397 => 184,  389 => 182,  385 => 181,  377 => 179,  373 => 178,  369 => 169,  346 => 169,  338 => 145,  332 => 164,  328 => 163,  324 => 162,  320 => 153,  316 => 152,  292 => 129,  222 => 134,  218 => 106,  210 => 102,  206 => 101,  202 => 91,  197 => 99,  354 => 171,  352 => 156,  331 => 142,  327 => 141,  323 => 140,  293 => 128,  289 => 188,  279 => 126,  261 => 120,  251 => 116,  239 => 108,  225 => 108,  211 => 103,  181 => 68,  172 => 65,  366 => 163,  350 => 170,  342 => 146,  340 => 166,  330 => 143,  319 => 139,  295 => 132,  291 => 189,  287 => 130,  277 => 140,  267 => 115,  263 => 114,  257 => 119,  253 => 119,  249 => 118,  245 => 116,  231 => 109,  213 => 97,  195 => 99,  192 => 98,  58 => 8,  23 => 1,  318 => 159,  310 => 157,  306 => 156,  302 => 133,  299 => 134,  296 => 190,  290 => 144,  266 => 124,  250 => 103,  237 => 112,  228 => 103,  150 => 64,  129 => 46,  114 => 31,  97 => 32,  77 => 18,  426 => 204,  418 => 198,  416 => 197,  394 => 184,  390 => 183,  386 => 182,  382 => 181,  378 => 165,  370 => 178,  359 => 159,  351 => 156,  347 => 155,  343 => 150,  333 => 165,  329 => 164,  325 => 136,  321 => 135,  315 => 138,  311 => 137,  307 => 274,  303 => 135,  297 => 153,  270 => 122,  265 => 121,  260 => 116,  256 => 115,  233 => 110,  223 => 106,  212 => 96,  205 => 94,  198 => 113,  191 => 98,  184 => 69,  165 => 62,  137 => 51,  127 => 47,  113 => 39,  81 => 25,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 134,  409 => 188,  407 => 131,  402 => 186,  398 => 185,  393 => 183,  387 => 122,  384 => 121,  381 => 180,  379 => 119,  374 => 167,  368 => 176,  365 => 168,  362 => 173,  360 => 169,  355 => 157,  341 => 149,  337 => 166,  322 => 141,  314 => 158,  312 => 137,  309 => 132,  305 => 131,  298 => 132,  294 => 145,  285 => 129,  283 => 127,  278 => 122,  268 => 134,  264 => 84,  258 => 119,  252 => 114,  247 => 115,  241 => 114,  229 => 109,  220 => 104,  214 => 105,  177 => 80,  169 => 60,  140 => 55,  132 => 48,  128 => 48,  107 => 64,  61 => 15,  273 => 124,  269 => 122,  254 => 118,  243 => 114,  240 => 113,  238 => 109,  235 => 111,  230 => 110,  227 => 109,  224 => 135,  221 => 107,  219 => 107,  217 => 105,  208 => 95,  204 => 90,  179 => 106,  159 => 61,  143 => 56,  135 => 38,  119 => 69,  102 => 29,  71 => 19,  67 => 15,  63 => 11,  59 => 14,  38 => 6,  28 => 5,  87 => 25,  26 => 6,  201 => 90,  196 => 85,  183 => 82,  171 => 77,  166 => 84,  163 => 70,  158 => 74,  156 => 58,  151 => 56,  142 => 59,  138 => 49,  136 => 50,  121 => 46,  117 => 40,  105 => 33,  91 => 27,  62 => 23,  49 => 18,  94 => 24,  89 => 19,  85 => 26,  75 => 17,  68 => 12,  56 => 44,  24 => 4,  21 => 2,  31 => 12,  25 => 4,  19 => 1,  93 => 28,  88 => 22,  78 => 15,  46 => 13,  44 => 10,  27 => 4,  79 => 19,  72 => 32,  69 => 19,  47 => 17,  40 => 7,  37 => 9,  22 => 3,  246 => 102,  157 => 72,  145 => 53,  139 => 52,  131 => 51,  123 => 60,  120 => 33,  115 => 67,  111 => 30,  108 => 29,  101 => 33,  98 => 31,  96 => 29,  83 => 25,  74 => 21,  66 => 17,  55 => 20,  52 => 16,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 9,  29 => 3,  209 => 92,  203 => 101,  199 => 93,  193 => 85,  189 => 87,  187 => 87,  182 => 83,  176 => 87,  173 => 146,  168 => 75,  164 => 59,  162 => 61,  154 => 84,  149 => 82,  147 => 58,  144 => 49,  141 => 48,  133 => 47,  130 => 47,  125 => 44,  122 => 42,  116 => 38,  112 => 42,  109 => 65,  106 => 35,  103 => 30,  99 => 29,  95 => 28,  92 => 21,  86 => 25,  82 => 20,  80 => 19,  73 => 19,  64 => 27,  60 => 45,  57 => 11,  54 => 10,  51 => 15,  48 => 14,  45 => 13,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 6,);
    }
}
