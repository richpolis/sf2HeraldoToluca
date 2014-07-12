<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_6cb72d036ab6f1e6f364779e6e247a9930c550913921ce2f094eda89b83f17b2 extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  672 => 345,  668 => 344,  664 => 342,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  626 => 325,  613 => 320,  609 => 319,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  525 => 280,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  473 => 254,  471 => 253,  463 => 248,  454 => 244,  438 => 236,  412 => 222,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 340,  649 => 462,  634 => 456,  629 => 326,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  527 => 281,  522 => 279,  517 => 404,  449 => 198,  446 => 197,  439 => 195,  431 => 189,  408 => 176,  134 => 54,  70 => 19,  148 => 69,  104 => 37,  100 => 36,  161 => 63,  483 => 258,  445 => 212,  441 => 196,  462 => 202,  417 => 205,  356 => 186,  422 => 226,  410 => 221,  400 => 214,  552 => 293,  550 => 273,  543 => 268,  539 => 267,  531 => 283,  529 => 409,  514 => 248,  510 => 247,  506 => 246,  498 => 244,  494 => 243,  490 => 242,  486 => 241,  482 => 240,  478 => 239,  470 => 231,  465 => 249,  459 => 246,  455 => 231,  451 => 230,  447 => 229,  443 => 228,  433 => 209,  429 => 188,  425 => 207,  421 => 206,  153 => 77,  363 => 153,  271 => 125,  335 => 134,  272 => 133,  434 => 219,  396 => 199,  392 => 183,  388 => 172,  380 => 206,  376 => 205,  345 => 147,  178 => 66,  391 => 176,  372 => 165,  367 => 198,  502 => 245,  500 => 246,  493 => 241,  489 => 262,  481 => 237,  479 => 256,  464 => 221,  460 => 224,  456 => 219,  452 => 218,  448 => 240,  436 => 235,  432 => 194,  428 => 230,  424 => 211,  420 => 213,  383 => 207,  375 => 164,  339 => 182,  118 => 49,  90 => 26,  65 => 22,  84 => 40,  53 => 17,  405 => 202,  358 => 151,  336 => 162,  300 => 180,  371 => 156,  284 => 134,  276 => 111,  200 => 72,  188 => 102,  288 => 176,  282 => 146,  274 => 110,  174 => 65,  364 => 163,  349 => 168,  344 => 119,  317 => 185,  313 => 183,  301 => 155,  275 => 105,  215 => 105,  415 => 180,  403 => 215,  401 => 172,  361 => 195,  357 => 123,  353 => 193,  348 => 140,  334 => 141,  326 => 138,  308 => 154,  304 => 181,  286 => 112,  280 => 133,  34 => 5,  126 => 63,  259 => 103,  255 => 101,  281 => 114,  242 => 114,  234 => 113,  226 => 84,  180 => 82,  175 => 65,  110 => 34,  262 => 98,  244 => 121,  236 => 112,  232 => 88,  216 => 79,  207 => 75,  185 => 66,  248 => 94,  194 => 70,  190 => 76,  186 => 83,  170 => 96,  167 => 76,  160 => 73,  155 => 47,  152 => 46,  124 => 62,  419 => 189,  411 => 186,  397 => 213,  389 => 160,  385 => 181,  377 => 175,  373 => 156,  369 => 173,  346 => 182,  338 => 135,  332 => 116,  328 => 139,  324 => 113,  320 => 127,  316 => 156,  292 => 136,  222 => 83,  218 => 108,  210 => 77,  206 => 95,  202 => 94,  197 => 104,  354 => 156,  352 => 155,  331 => 140,  327 => 114,  323 => 128,  293 => 120,  289 => 113,  279 => 127,  261 => 121,  251 => 118,  239 => 114,  225 => 108,  211 => 104,  181 => 65,  172 => 64,  366 => 163,  350 => 156,  342 => 137,  340 => 145,  330 => 161,  319 => 138,  295 => 178,  291 => 102,  287 => 129,  277 => 126,  267 => 101,  263 => 95,  257 => 120,  253 => 100,  249 => 115,  245 => 114,  231 => 83,  213 => 78,  195 => 99,  192 => 98,  58 => 25,  23 => 1,  318 => 111,  310 => 154,  306 => 107,  302 => 125,  299 => 132,  296 => 121,  290 => 119,  266 => 128,  250 => 120,  237 => 112,  228 => 110,  150 => 55,  129 => 64,  114 => 59,  97 => 52,  77 => 25,  426 => 190,  418 => 224,  416 => 197,  394 => 168,  390 => 196,  386 => 159,  382 => 194,  378 => 157,  370 => 178,  359 => 160,  351 => 192,  347 => 191,  343 => 146,  333 => 145,  329 => 188,  325 => 129,  321 => 135,  315 => 125,  311 => 135,  307 => 128,  303 => 122,  297 => 179,  270 => 102,  265 => 105,  260 => 133,  256 => 96,  233 => 87,  223 => 107,  212 => 78,  205 => 108,  198 => 97,  191 => 67,  184 => 101,  165 => 83,  137 => 65,  127 => 35,  113 => 40,  81 => 23,  76 => 31,  480 => 162,  474 => 232,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 215,  437 => 210,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 204,  409 => 203,  407 => 182,  402 => 215,  398 => 185,  393 => 211,  387 => 164,  384 => 170,  381 => 176,  379 => 165,  374 => 192,  368 => 189,  365 => 197,  362 => 162,  360 => 187,  355 => 143,  341 => 189,  337 => 155,  322 => 143,  314 => 155,  312 => 124,  309 => 129,  305 => 142,  298 => 120,  294 => 262,  285 => 175,  283 => 115,  278 => 106,  268 => 134,  264 => 128,  258 => 94,  252 => 123,  247 => 115,  241 => 90,  229 => 85,  220 => 81,  214 => 105,  177 => 80,  169 => 71,  140 => 58,  132 => 65,  128 => 60,  107 => 52,  61 => 12,  273 => 174,  269 => 107,  254 => 118,  243 => 92,  240 => 118,  238 => 114,  235 => 89,  230 => 109,  227 => 86,  224 => 81,  221 => 106,  219 => 106,  217 => 104,  208 => 76,  204 => 102,  179 => 98,  159 => 90,  143 => 51,  135 => 38,  119 => 40,  102 => 40,  71 => 26,  67 => 24,  63 => 18,  59 => 16,  38 => 7,  28 => 6,  87 => 33,  26 => 6,  201 => 106,  196 => 92,  183 => 94,  171 => 81,  166 => 95,  163 => 82,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 69,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 34,  62 => 21,  49 => 14,  94 => 21,  89 => 28,  85 => 23,  75 => 19,  68 => 30,  56 => 35,  24 => 21,  21 => 2,  31 => 4,  25 => 4,  19 => 1,  93 => 27,  88 => 32,  78 => 15,  46 => 13,  44 => 10,  27 => 3,  79 => 21,  72 => 17,  69 => 16,  47 => 15,  40 => 11,  37 => 8,  22 => 20,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 67,  111 => 47,  108 => 56,  101 => 31,  98 => 45,  96 => 35,  83 => 33,  74 => 39,  66 => 39,  55 => 16,  52 => 12,  50 => 16,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 24,  209 => 103,  203 => 73,  199 => 93,  193 => 98,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 60,  149 => 73,  147 => 75,  144 => 42,  141 => 73,  133 => 50,  130 => 46,  125 => 51,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 34,  99 => 31,  95 => 28,  92 => 43,  86 => 45,  82 => 19,  80 => 32,  73 => 23,  64 => 23,  60 => 20,  57 => 19,  54 => 34,  51 => 13,  48 => 7,  45 => 14,  42 => 7,  39 => 6,  36 => 9,  33 => 4,  30 => 7,);
    }
}
