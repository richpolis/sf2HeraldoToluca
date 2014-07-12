<?php

/* BackendBundle:Default:login.html.twig */
class __TwigTemplate_e70675311b07a925cd3e593bb24cb122c1bf5ded4aeab16333ac7feb3ae675fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BackendBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Administrador - Login";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t <!-- Form area -->
        <div class=\"admin-form\">
            <div class=\"container\">
                <div class=\"encabezado-login\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/logomenu.png"), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <!-- Widget starts -->
                        <div class=\"widget\">
                            <!-- Widget head -->
                            <div class=\"widget-head\">
                                <i class=\"icon-lock\"></i> Login 
                                
                            </div>

                            <div class=\"widget-content\">
                                <div class=\"padd\">
                                    <!-- Login form -->
                                    

                                    <form class=\"form-horizontal\" action='";
        // line 27
        echo $this->env->getExtension('routing')->getPath("backend_check");
        echo "'  method=\"post\">
                                        <!-- Email -->
                                        <div class=\"form-group\">
                                            <label class=\"control-label col-lg-3\" for=\"username\">Username</label>
                                            <div class=\"col-lg-9\">
                                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Username\">
                                            </div>
                                        </div>
                                        <!-- Password -->
                                        <div class=\"form-group\">
                                            <label class=\"control-label col-lg-3\" for=\"password\">Password</label>
                                            <div class=\"col-lg-9\">
                                                <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Password\">
                                            </div>
                                        </div>
                                        <!-- Remember me checkbox and sign in button -->
                                        <!--div class=\"form-group\">
                                            <div class=\"col-lg-9 col-lg-offset-3\">
                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input type=\"checkbox\"> Remember me
                                                    </label>
                                                </div>
                                            </div>
                                        </div-->
                                        <div class=\"col-lg-9 col-lg-offset-3\">
                                            <button type=\"submit\" class=\"btn btn-danger\">Sign in</button>
                                            <button type=\"reset\" class=\"btn btn-default\">Reset</button>
                                        </div>
                                        <br />
                                    </form>

                                </div>
                            </div>

                            <div class=\"widget-foot\">
                                <!--Not Registred? <a href=\"#\">Register here</a>-->
                                ";
        // line 64
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 65
            echo "                                        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
                                ";
        } else {
            // line 67
            echo "                                        <br/>
                                ";
        }
        // line 69
        echo "                            </div>
                        </div>  
                    </div>
                </div>
                <div class=\"pie-login\">
                    <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/interactivevalley.png"), "html", null, true);
        echo "\"/>
                </div>
            </div> 
        </div>

";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 74,  259 => 113,  255 => 112,  281 => 113,  242 => 101,  234 => 106,  226 => 97,  180 => 88,  175 => 78,  110 => 34,  262 => 106,  244 => 103,  236 => 101,  232 => 100,  216 => 100,  207 => 90,  185 => 86,  248 => 104,  194 => 93,  190 => 92,  186 => 84,  170 => 78,  167 => 77,  160 => 73,  155 => 71,  152 => 70,  124 => 46,  419 => 195,  411 => 189,  397 => 179,  389 => 177,  385 => 176,  377 => 174,  373 => 173,  369 => 172,  346 => 164,  338 => 162,  332 => 159,  328 => 158,  324 => 157,  320 => 156,  316 => 155,  292 => 147,  222 => 96,  218 => 106,  210 => 104,  206 => 96,  202 => 95,  197 => 89,  354 => 166,  352 => 157,  331 => 142,  327 => 141,  323 => 140,  293 => 131,  289 => 146,  279 => 126,  261 => 120,  251 => 111,  239 => 108,  225 => 96,  211 => 91,  181 => 84,  172 => 86,  366 => 163,  350 => 165,  342 => 163,  340 => 153,  330 => 146,  319 => 139,  295 => 132,  291 => 131,  287 => 130,  277 => 112,  267 => 115,  263 => 114,  257 => 119,  253 => 117,  249 => 102,  245 => 101,  231 => 110,  213 => 93,  195 => 87,  192 => 98,  58 => 8,  23 => 1,  318 => 160,  310 => 152,  306 => 151,  302 => 150,  299 => 134,  296 => 154,  290 => 133,  266 => 107,  250 => 103,  237 => 99,  228 => 103,  150 => 64,  129 => 36,  114 => 31,  97 => 25,  77 => 18,  426 => 204,  418 => 198,  416 => 197,  394 => 184,  390 => 183,  386 => 182,  382 => 181,  378 => 167,  370 => 178,  359 => 159,  351 => 171,  347 => 155,  343 => 169,  333 => 165,  329 => 164,  325 => 163,  321 => 162,  315 => 138,  311 => 137,  307 => 274,  303 => 135,  297 => 154,  270 => 132,  265 => 121,  260 => 129,  256 => 127,  233 => 98,  223 => 108,  212 => 99,  205 => 102,  198 => 94,  191 => 89,  184 => 89,  165 => 74,  137 => 51,  127 => 47,  113 => 37,  81 => 23,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 134,  409 => 188,  407 => 131,  402 => 186,  398 => 185,  393 => 178,  387 => 122,  384 => 121,  381 => 175,  379 => 119,  374 => 165,  368 => 112,  365 => 171,  362 => 160,  360 => 169,  355 => 172,  341 => 105,  337 => 166,  322 => 101,  314 => 159,  312 => 98,  309 => 97,  305 => 95,  298 => 149,  294 => 147,  285 => 114,  283 => 127,  278 => 86,  268 => 134,  264 => 84,  258 => 108,  252 => 80,  247 => 110,  241 => 100,  229 => 97,  220 => 101,  214 => 105,  177 => 81,  169 => 60,  140 => 55,  132 => 48,  128 => 48,  107 => 64,  61 => 15,  273 => 124,  269 => 122,  254 => 104,  243 => 109,  240 => 102,  238 => 100,  235 => 110,  230 => 98,  227 => 109,  224 => 102,  221 => 95,  219 => 107,  217 => 94,  208 => 103,  204 => 90,  179 => 83,  159 => 61,  143 => 56,  135 => 38,  119 => 69,  102 => 32,  71 => 19,  67 => 15,  63 => 11,  59 => 14,  38 => 6,  28 => 3,  87 => 25,  26 => 6,  201 => 90,  196 => 90,  183 => 82,  171 => 61,  166 => 84,  163 => 83,  158 => 74,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 50,  121 => 46,  117 => 32,  105 => 33,  91 => 27,  62 => 23,  49 => 19,  94 => 24,  89 => 20,  85 => 21,  75 => 17,  68 => 12,  56 => 13,  24 => 4,  21 => 2,  31 => 7,  25 => 5,  19 => 1,  93 => 28,  88 => 22,  78 => 54,  46 => 9,  44 => 10,  27 => 4,  79 => 19,  72 => 32,  69 => 15,  47 => 9,  40 => 7,  37 => 9,  22 => 3,  246 => 102,  157 => 72,  145 => 54,  139 => 52,  131 => 51,  123 => 43,  120 => 33,  115 => 67,  111 => 30,  108 => 29,  101 => 31,  98 => 31,  96 => 29,  83 => 25,  74 => 17,  66 => 17,  55 => 34,  52 => 7,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 3,  29 => 3,  209 => 92,  203 => 89,  199 => 88,  193 => 88,  189 => 84,  187 => 87,  182 => 83,  176 => 87,  173 => 146,  168 => 75,  164 => 59,  162 => 74,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 50,  130 => 47,  125 => 44,  122 => 45,  116 => 38,  112 => 42,  109 => 65,  106 => 33,  103 => 30,  99 => 29,  95 => 28,  92 => 21,  86 => 25,  82 => 20,  80 => 19,  73 => 19,  64 => 27,  60 => 11,  57 => 11,  54 => 10,  51 => 11,  48 => 8,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
