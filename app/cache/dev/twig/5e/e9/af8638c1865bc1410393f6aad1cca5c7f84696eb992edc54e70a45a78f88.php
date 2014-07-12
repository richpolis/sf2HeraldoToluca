<?php

/* WebProfilerBundle:Profiler:toolbar.css.twig */
class __TwigTemplate_5ee9af8638c1865bc1410393f6aad1cca5c7f84696eb992edc54e70a45a78f88 extends Twig_Template
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
        echo ".sf-minitoolbar {
    display: none;

    position: fixed;
    bottom: 0;
    right: 0;

    padding: 5px 5px 0;

    background-color: #f7f7f7;
    background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
    background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
    background: linear-gradient(top, #e4e4e4, #ffffff);

    border-radius: 16px 0 0 0;

    z-index: 6000000;
}

.sf-toolbarreset * {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
}

.sf-toolbarreset {
    position: fixed;
    background-color: #f7f7f7;
    left: 0;
    right: 0;
    height: 38px;
    margin: 0;
    padding: 0 40px 0 0;
    z-index: 6000000;
    font: 11px Verdana, Arial, sans-serif;
    text-align: left;
    color: #2f2f2f;

    background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
    background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
    background: linear-gradient(top, #e4e4e4, #ffffff);

    bottom: 0;
    border-top: 1px solid #bbb;
}
.sf-toolbarreset abbr {
    border-bottom: 1px dotted #000000;
    cursor: help;
}
.sf-toolbarreset span,
.sf-toolbarreset div {
    font-size: 11px;
}
.sf-toolbarreset img {
    width: auto;
    display: inline;
}

.sf-toolbarreset .hide-button {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: 40px;
    height: 40px;
    cursor: pointer;
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAMAAAAMCGV4AAAAllBMVEXDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PExMTPz8/Q0NDR0dHT09Pb29vc3Nzf39/h4eHi4uLj4+P6+vr7+/v8/Pz9/f3///+Nh2QuAAAAIXRSTlMABgwPGBswMzk8QktRV4SKjZOWmaKlq7TAxszb3urt+fy1vNEpAAAAiklEQVQIHUXBBxKCQBREwRFzDqjoGh+C2YV//8u5Sll2S0E/dof1tKdKM6GyqCto7PjZRJIS/mbSELgXOSd/BzpKIH1ZefVWpDDTHsi8mZVnwImPi5ndCLbaAZk3M58Bay0h9VbeSvMpjDUAHj4jL55AW1rxN5fU2PLjIgVRzNdxVFOlGzvnJi0Fb1XNGBHA9uQOAAAAAElFTkSuQmCC');
    background-repeat: no-repeat;
    background-position: 13px 11px;
}

.sf-toolbar-block {
    white-space: nowrap;
    color: #2f2f2f;
    display: block;
    min-height: 28px;
    border-right: 1px solid #e4e4e4;
    padding: 0;
    float: left;
    cursor: default;
}

.sf-toolbar-block span {
    display: inline-block;
}

.sf-toolbar-block .sf-toolbar-info-piece {
    line-height: 19px;
    margin-bottom: 5px;
}

.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {
    padding: 0px 5px;
    border-radius: 5px;
    margin-bottom: 0px;
    vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-piece:last-child {
    margin-bottom: 0;
}

.sf-toolbar-block .sf-toolbar-info-piece a,
.sf-toolbar-block .sf-toolbar-info-piece abbr {
    color: #2f2f2f;
}

.sf-toolbar-block .sf-toolbar-info-piece b {
    display: inline-block;
    width: 110px;
    vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-with-next-pointer:after {
    content: ' :: ';
    color: #999;
}

.sf-toolbar-block .sf-toolbar-info-with-delimiter {
    border-right: 1px solid #999;
    padding-right: 5px;
    margin-right: 5px;
}

.sf-toolbar-block .sf-toolbar-info {
    display: none;
    position: absolute;
    background-color: #fff;
    border: 1px solid #bbb;
    padding: 9px 0;
    margin-left: -1px;

    bottom: 38px;
    border-bottom-width: 0;
    border-bottom: 1px solid #bbb;
    border-radius: 4px 4px 0 0;
}

.sf-toolbarreset > div:last-of-type .sf-toolbar-info {
    right: -1px;
}

.sf-toolbar-block .sf-toolbar-info:empty {
    visibility: hidden;
}

.sf-toolbar-block .sf-toolbar-status {
    display: inline-block;
    color: #fff;
    background-color: #666;
    padding: 3px 6px;
    border-radius: 3px;
    margin-bottom: 2px;
    vertical-align: middle;
    min-width: 6px;
    min-height: 13px;
}

.sf-toolbar-block .sf-toolbar-status abbr {
    color: #fff;
    border-bottom: 1px dotted black;
}

.sf-toolbar-block .sf-toolbar-status-green {
    background-color: #759e1a;
}

.sf-toolbar-block .sf-toolbar-status-red {
    background-color: #a33;
}

.sf-toolbar-block .sf-toolbar-status-yellow {
    background-color: #ffcc00;
    color: #000;
}

.sf-toolbar-block .sf-toolbar-status-black {
    background-color: #000;
}

.sf-toolbar-block .sf-toolbar-icon {
    display: block;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > span {
    display: block;
    font-weight: normal;
    text-decoration: none;
    margin: 0;
    padding: 5px 8px;
    min-width: 20px;
    text-align: center;
    vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > a:link
.sf-toolbar-block .sf-toolbar-icon > a:hover {
    color: black !important;
}

.sf-toolbar-block .sf-toolbar-icon > a[href]:after {
    content: \"\";
}

.sf-toolbar-block .sf-toolbar-icon img {
    border-width: 0;
    vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon img + span {
    margin-left: 5px;
    margin-top: 2px;
}

.sf-toolbar-block .sf-toolbar-icon .sf-toolbar-status {
    border-radius: 12px;
    border-bottom-left-radius: 0;
    margin-top: 0;
}

.sf-toolbar-block .sf-toolbar-info-method {
    border-bottom: 1px dashed #ccc;
    cursor: help;
}

.sf-toolbar-block .sf-toolbar-info-method[onclick=\"\"] {
    border-bottom: none;
    cursor: inherit;
}

.sf-toolbar-info-php {}
.sf-toolbar-info-php-ext {}

.sf-toolbar-info-php-ext .sf-toolbar-status {
    margin-left: 2px;
}

.sf-toolbar-info-php-ext .sf-toolbar-status:first-child {
    margin-left: 0;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail {
    display: inline-block;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional:empty,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail:empty {
    display: none;
}

.sf-toolbarreset:hover {
    box-shadow: rgba(0, 0, 0, 0.3) 0 0 50px;
}

.sf-toolbar-block:hover {
    box-shadow: rgba(0, 0, 0, 0.35) 0 0 5px;
    border-right: none;
    margin-right: 1px;
    position: relative;
}

.sf-toolbar-block:hover .sf-toolbar-icon {
    background-color: #fff;
    border-top: 1px dotted #DDD;
    position: relative;
    margin-top: -1px;
    z-index: 10002;
}

.sf-toolbar-block:hover .sf-toolbar-info {
    display: block;
    min-width: -webkit-calc(100% + 2px);
    min-width: calc(100% + 2px);
    z-index: 10001;
    box-sizing: border-box;
    padding: 9px;
    line-height: 19px;
}

/***** Override the setting when the toolbar is on the top *****/
";
        // line 286
        if (((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")) == "top")) {
            // line 287
            echo "    .sf-minitoolbar {
        top: 0;
        bottom: auto;
        right: 0;

        background-color: #f7f7f7;

        background-image: -moz-linear-gradient(225deg, #e4e4e4, #ffffff);
        background-image: -webkit-gradient(linear, 100% 0%, 0% 0%, from(#e4e4e4), to(#ffffff));
        background-image: -o-linear-gradient(135deg, #e4e4e4, #ffffff);
        background: linear-gradient(225deg, #e4e4e4, #ffffff);

        border-radius: 0 0 0 16px;
    }

    .sf-toolbarreset {
        background-image: -moz-linear-gradient(225deg, #e4e4e4, #ffffff);
        background-image: -webkit-gradient(linear, 100% 0%, 0% 0%, from(#e4e4e4), to(#ffffff));
        background-image: -o-linear-gradient(135deg, #e4e4e4, #ffffff);
        background: linear-gradient(225deg, #e4e4e4, #ffffff);

        top: 0;
        bottom: auto;
        border-bottom: 1px solid #bbb;
    }

    .sf-toolbar-block .sf-toolbar-info {
        top: 39px;
        bottom: auto;
        border-top-width: 0;
        border-radius: 0 0 4px 4px;
    }

    .sf-toolbar-block:hover .sf-toolbar-icon {
        border-top: none;
        border-bottom: 1px dotted #DDD;
        margin-top: 0;
        margin-bottom: -1px;
    }
";
        }
        // line 327
        echo "
";
        // line 328
        if ((!(isset($context["floatable"]) ? $context["floatable"] : $this->getContext($context, "floatable")))) {
            // line 329
            echo "    .sf-toolbarreset {
        position: static;
        background: #cbcbcb;

        background-image: -moz-linear-gradient(90deg, #cbcbcb, #e8e8e8) !important;
        background-image: -webkit-gradient(linear, 0% 0%, 100% 0%, from(#cbcbcb), to(#e8e8e8)) !important;
        background-image: -o-linear-gradient(180deg, #cbcbcb, #e8e8e8) !important;
        background: linear-gradient(90deg, #cbcbcb, #e8e8e8) !important;
    }
";
        }
        // line 339
        echo "
/***** Media query *****/
@media screen and (max-width: 779px) {
    .sf-toolbar-block .sf-toolbar-icon > * > :first-child ~ * {
        display: none;
    }

    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional,
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
        display: none !important;
    }
}

@media screen and (min-width: 880px) {
    .sf-toolbar-block .sf-toolbar-icon a[href\$=\"config\"] .sf-toolbar-info-piece-additional {
        display: inline-block;
    }
}

@media screen and (min-width: 980px) {
    .sf-toolbar-block .sf-toolbar-icon a[href\$=\"security\"] .sf-toolbar-info-piece-additional {
        display: inline-block;
    }
}

@media screen and (max-width: 1179px) {
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional {
        display: none;
    }
}

@media screen and (max-width: 1439px) {
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
        display: none;
    }
}

/***** Media query print: Do not print the Toolbar. *****/
@media print {
    .sf-toolbar {
        display: none;
        visibility: hidden;
    }
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  672 => 345,  668 => 344,  664 => 342,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  626 => 325,  613 => 320,  609 => 319,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  525 => 280,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  473 => 254,  471 => 253,  463 => 248,  454 => 244,  438 => 236,  412 => 222,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 340,  649 => 462,  634 => 456,  629 => 326,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  527 => 281,  522 => 279,  517 => 404,  449 => 198,  446 => 197,  439 => 195,  431 => 189,  408 => 176,  134 => 54,  70 => 26,  148 => 69,  104 => 37,  100 => 36,  161 => 63,  483 => 258,  445 => 212,  441 => 196,  462 => 202,  417 => 205,  356 => 186,  422 => 226,  410 => 221,  400 => 214,  552 => 293,  550 => 273,  543 => 268,  539 => 267,  531 => 283,  529 => 409,  514 => 248,  510 => 247,  506 => 246,  498 => 244,  494 => 243,  490 => 242,  486 => 241,  482 => 240,  478 => 239,  470 => 231,  465 => 249,  459 => 246,  455 => 231,  451 => 230,  447 => 229,  443 => 228,  433 => 209,  429 => 188,  425 => 207,  421 => 206,  153 => 77,  363 => 153,  271 => 125,  335 => 134,  272 => 133,  434 => 219,  396 => 199,  392 => 183,  388 => 172,  380 => 206,  376 => 205,  345 => 147,  178 => 66,  391 => 176,  372 => 165,  367 => 339,  502 => 245,  500 => 246,  493 => 241,  489 => 262,  481 => 237,  479 => 256,  464 => 221,  460 => 224,  456 => 219,  452 => 218,  448 => 240,  436 => 235,  432 => 194,  428 => 230,  424 => 211,  420 => 213,  383 => 207,  375 => 164,  339 => 182,  118 => 49,  90 => 37,  65 => 11,  84 => 27,  53 => 15,  405 => 202,  358 => 151,  336 => 162,  300 => 180,  371 => 156,  284 => 134,  276 => 111,  200 => 72,  188 => 102,  288 => 176,  282 => 146,  274 => 110,  174 => 65,  364 => 163,  349 => 168,  344 => 119,  317 => 185,  313 => 183,  301 => 155,  275 => 105,  215 => 105,  415 => 180,  403 => 215,  401 => 172,  361 => 195,  357 => 123,  353 => 328,  348 => 140,  334 => 141,  326 => 138,  308 => 287,  304 => 181,  286 => 112,  280 => 133,  34 => 5,  126 => 63,  259 => 103,  255 => 101,  281 => 114,  242 => 114,  234 => 113,  226 => 84,  180 => 82,  175 => 65,  110 => 34,  262 => 98,  244 => 121,  236 => 112,  232 => 88,  216 => 79,  207 => 75,  185 => 66,  248 => 94,  194 => 70,  190 => 76,  186 => 83,  170 => 96,  167 => 76,  160 => 73,  155 => 47,  152 => 46,  124 => 62,  419 => 189,  411 => 186,  397 => 213,  389 => 160,  385 => 181,  377 => 175,  373 => 156,  369 => 173,  346 => 182,  338 => 135,  332 => 116,  328 => 139,  324 => 113,  320 => 127,  316 => 156,  292 => 136,  222 => 83,  218 => 108,  210 => 77,  206 => 95,  202 => 94,  197 => 104,  354 => 156,  352 => 155,  331 => 140,  327 => 114,  323 => 128,  293 => 120,  289 => 113,  279 => 127,  261 => 121,  251 => 118,  239 => 114,  225 => 108,  211 => 104,  181 => 65,  172 => 64,  366 => 163,  350 => 327,  342 => 137,  340 => 145,  330 => 161,  319 => 138,  295 => 178,  291 => 102,  287 => 129,  277 => 126,  267 => 101,  263 => 95,  257 => 120,  253 => 100,  249 => 115,  245 => 114,  231 => 83,  213 => 78,  195 => 99,  192 => 98,  58 => 18,  23 => 1,  318 => 111,  310 => 154,  306 => 286,  302 => 125,  299 => 132,  296 => 121,  290 => 119,  266 => 128,  250 => 120,  237 => 112,  228 => 110,  150 => 55,  129 => 64,  114 => 59,  97 => 52,  77 => 25,  426 => 190,  418 => 224,  416 => 197,  394 => 168,  390 => 196,  386 => 159,  382 => 194,  378 => 157,  370 => 178,  359 => 160,  351 => 192,  347 => 191,  343 => 146,  333 => 145,  329 => 188,  325 => 129,  321 => 135,  315 => 125,  311 => 135,  307 => 128,  303 => 122,  297 => 179,  270 => 102,  265 => 105,  260 => 133,  256 => 96,  233 => 87,  223 => 107,  212 => 78,  205 => 108,  198 => 97,  191 => 67,  184 => 101,  165 => 83,  137 => 65,  127 => 35,  113 => 40,  81 => 23,  76 => 28,  480 => 162,  474 => 232,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 215,  437 => 210,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 204,  409 => 203,  407 => 182,  402 => 215,  398 => 185,  393 => 211,  387 => 164,  384 => 170,  381 => 176,  379 => 165,  374 => 192,  368 => 189,  365 => 197,  362 => 162,  360 => 187,  355 => 329,  341 => 189,  337 => 155,  322 => 143,  314 => 155,  312 => 124,  309 => 129,  305 => 142,  298 => 120,  294 => 262,  285 => 175,  283 => 115,  278 => 106,  268 => 134,  264 => 128,  258 => 94,  252 => 123,  247 => 115,  241 => 90,  229 => 85,  220 => 81,  214 => 105,  177 => 80,  169 => 71,  140 => 58,  132 => 65,  128 => 60,  107 => 52,  61 => 23,  273 => 174,  269 => 107,  254 => 118,  243 => 92,  240 => 118,  238 => 114,  235 => 89,  230 => 109,  227 => 86,  224 => 81,  221 => 106,  219 => 106,  217 => 104,  208 => 76,  204 => 102,  179 => 98,  159 => 90,  143 => 51,  135 => 38,  119 => 40,  102 => 33,  71 => 13,  67 => 22,  63 => 21,  59 => 22,  38 => 12,  28 => 3,  87 => 32,  26 => 3,  201 => 106,  196 => 92,  183 => 94,  171 => 81,  166 => 95,  163 => 82,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 69,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 35,  62 => 24,  49 => 14,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  24 => 3,  21 => 2,  31 => 8,  25 => 4,  19 => 1,  93 => 38,  88 => 32,  78 => 18,  46 => 34,  44 => 11,  27 => 7,  79 => 29,  72 => 27,  69 => 26,  47 => 15,  40 => 8,  37 => 6,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 67,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 35,  74 => 39,  66 => 25,  55 => 38,  52 => 12,  50 => 15,  43 => 12,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 103,  203 => 73,  199 => 93,  193 => 98,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 60,  149 => 73,  147 => 75,  144 => 42,  141 => 73,  133 => 50,  130 => 46,  125 => 51,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 34,  99 => 31,  95 => 39,  92 => 28,  86 => 45,  82 => 19,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 39,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 13,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
