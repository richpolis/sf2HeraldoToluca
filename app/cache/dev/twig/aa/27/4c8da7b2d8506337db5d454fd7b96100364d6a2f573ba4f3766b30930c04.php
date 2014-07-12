<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_aa274c8da7b2d8506337db5d454fd7b96100364d6a2f573ba4f3766b30930c04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 69,  104 => 32,  100 => 33,  161 => 63,  483 => 238,  445 => 212,  441 => 211,  462 => 225,  417 => 205,  356 => 186,  422 => 188,  410 => 183,  400 => 180,  552 => 274,  550 => 273,  543 => 268,  539 => 267,  531 => 261,  529 => 260,  514 => 248,  510 => 247,  506 => 246,  498 => 244,  494 => 243,  490 => 242,  486 => 241,  482 => 240,  478 => 239,  470 => 231,  465 => 235,  459 => 232,  455 => 231,  451 => 230,  447 => 229,  443 => 228,  433 => 209,  429 => 208,  425 => 207,  421 => 206,  153 => 56,  363 => 126,  271 => 125,  335 => 148,  272 => 133,  434 => 219,  396 => 199,  392 => 183,  388 => 172,  380 => 179,  376 => 178,  345 => 155,  178 => 80,  391 => 176,  372 => 165,  367 => 162,  502 => 245,  500 => 246,  493 => 241,  489 => 240,  481 => 237,  479 => 233,  464 => 221,  460 => 224,  456 => 219,  452 => 218,  448 => 217,  436 => 214,  432 => 194,  428 => 212,  424 => 211,  420 => 213,  383 => 197,  375 => 164,  339 => 182,  118 => 36,  90 => 46,  65 => 35,  84 => 48,  53 => 30,  405 => 202,  358 => 157,  336 => 162,  300 => 105,  371 => 163,  284 => 134,  276 => 144,  200 => 93,  188 => 88,  288 => 101,  282 => 146,  274 => 97,  174 => 65,  364 => 163,  349 => 168,  344 => 119,  317 => 141,  313 => 140,  301 => 155,  275 => 126,  215 => 105,  415 => 218,  403 => 215,  401 => 201,  361 => 171,  357 => 123,  353 => 121,  348 => 171,  334 => 162,  326 => 160,  308 => 154,  304 => 153,  286 => 147,  280 => 133,  34 => 26,  126 => 63,  259 => 119,  255 => 93,  281 => 137,  242 => 114,  234 => 113,  226 => 109,  180 => 82,  175 => 72,  110 => 34,  262 => 127,  244 => 121,  236 => 112,  232 => 111,  216 => 103,  207 => 97,  185 => 74,  248 => 122,  194 => 88,  190 => 76,  186 => 83,  170 => 77,  167 => 76,  160 => 73,  155 => 75,  152 => 74,  124 => 62,  419 => 189,  411 => 186,  397 => 187,  389 => 185,  385 => 181,  377 => 175,  373 => 174,  369 => 173,  346 => 182,  338 => 163,  332 => 116,  328 => 177,  324 => 113,  320 => 173,  316 => 156,  292 => 136,  222 => 104,  218 => 108,  210 => 102,  206 => 95,  202 => 77,  197 => 99,  354 => 156,  352 => 155,  331 => 150,  327 => 114,  323 => 162,  293 => 132,  289 => 131,  279 => 127,  261 => 121,  251 => 118,  239 => 114,  225 => 108,  211 => 104,  181 => 81,  172 => 78,  366 => 163,  350 => 156,  342 => 154,  340 => 153,  330 => 161,  319 => 138,  295 => 131,  291 => 102,  287 => 129,  277 => 126,  267 => 124,  263 => 95,  257 => 120,  253 => 119,  249 => 115,  245 => 114,  231 => 83,  213 => 104,  195 => 99,  192 => 98,  58 => 14,  23 => 1,  318 => 111,  310 => 154,  306 => 107,  302 => 140,  299 => 132,  296 => 153,  290 => 148,  266 => 128,  250 => 120,  237 => 112,  228 => 110,  150 => 124,  129 => 64,  114 => 59,  97 => 52,  77 => 18,  426 => 190,  418 => 198,  416 => 197,  394 => 176,  390 => 196,  386 => 195,  382 => 194,  378 => 193,  370 => 178,  359 => 160,  351 => 120,  347 => 155,  343 => 150,  333 => 145,  329 => 144,  325 => 143,  321 => 112,  315 => 110,  311 => 135,  307 => 134,  303 => 106,  297 => 104,  270 => 129,  265 => 96,  260 => 133,  256 => 126,  233 => 111,  223 => 107,  212 => 78,  205 => 101,  198 => 97,  191 => 86,  184 => 95,  165 => 75,  137 => 65,  127 => 47,  113 => 55,  81 => 47,  76 => 25,  480 => 162,  474 => 232,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 216,  440 => 215,  437 => 210,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 204,  409 => 203,  407 => 182,  402 => 181,  398 => 185,  393 => 186,  387 => 208,  384 => 170,  381 => 176,  379 => 165,  374 => 192,  368 => 189,  365 => 172,  362 => 162,  360 => 187,  355 => 159,  341 => 118,  337 => 155,  322 => 143,  314 => 155,  312 => 109,  309 => 108,  305 => 142,  298 => 146,  294 => 262,  285 => 138,  283 => 100,  278 => 98,  268 => 134,  264 => 128,  258 => 94,  252 => 123,  247 => 115,  241 => 113,  229 => 109,  220 => 112,  214 => 105,  177 => 80,  169 => 71,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 17,  273 => 143,  269 => 123,  254 => 118,  243 => 92,  240 => 118,  238 => 114,  235 => 85,  230 => 109,  227 => 108,  224 => 81,  221 => 106,  219 => 106,  217 => 104,  208 => 101,  204 => 102,  179 => 84,  159 => 61,  143 => 51,  135 => 38,  119 => 40,  102 => 29,  71 => 26,  67 => 20,  63 => 18,  59 => 36,  38 => 7,  28 => 20,  87 => 49,  26 => 6,  201 => 100,  196 => 90,  183 => 94,  171 => 81,  166 => 79,  163 => 78,  158 => 74,  156 => 62,  151 => 70,  142 => 59,  138 => 69,  136 => 48,  121 => 61,  117 => 39,  105 => 55,  91 => 33,  62 => 19,  49 => 11,  94 => 51,  89 => 28,  85 => 24,  75 => 19,  68 => 36,  56 => 35,  24 => 21,  21 => 2,  31 => 25,  25 => 4,  19 => 1,  93 => 47,  88 => 32,  78 => 15,  46 => 10,  44 => 9,  27 => 3,  79 => 21,  72 => 18,  69 => 17,  47 => 17,  40 => 7,  37 => 8,  22 => 20,  246 => 116,  157 => 57,  145 => 52,  139 => 49,  131 => 45,  123 => 58,  120 => 57,  115 => 67,  111 => 30,  108 => 56,  101 => 31,  98 => 30,  96 => 48,  83 => 44,  74 => 39,  66 => 39,  55 => 13,  52 => 12,  50 => 29,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 24,  209 => 103,  203 => 99,  199 => 98,  193 => 98,  189 => 97,  187 => 75,  182 => 85,  176 => 82,  173 => 146,  168 => 80,  164 => 70,  162 => 74,  154 => 71,  149 => 73,  147 => 56,  144 => 49,  141 => 70,  133 => 50,  130 => 47,  125 => 42,  122 => 41,  116 => 38,  112 => 36,  109 => 35,  106 => 33,  103 => 34,  99 => 47,  95 => 28,  92 => 27,  86 => 45,  82 => 28,  80 => 27,  73 => 24,  64 => 38,  60 => 22,  57 => 17,  54 => 34,  51 => 12,  48 => 7,  45 => 9,  42 => 9,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
