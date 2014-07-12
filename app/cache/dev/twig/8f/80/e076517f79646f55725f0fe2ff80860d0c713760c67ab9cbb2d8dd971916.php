<?php

/* KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig */
class __TwigTemplate_8f80e076517f79646f55725f0fe2ff80860d0c713760c67ab9cbb2d8dd971916 extends Twig_Template
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
        // line 16
        echo "
";
        // line 17
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 18
            echo "    <ul class=\"pagination\">

    ";
            // line 20
            if (array_key_exists("previous", $context)) {
                // line 21
                echo "        <li>
            <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</a>
        </li>
    ";
            } else {
                // line 25
                echo "        <li class=\"disabled\">
            <span>&laquo;&nbsp;";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</span>
        </li>
    ";
            }
            // line 29
            echo "
    ";
            // line 30
            if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) > 1)) {
                // line 31
                echo "        <li>
            <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 1))), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 34
                if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) == 3)) {
                    // line 35
                    echo "            <li>
                <a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 2))), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) != 2)) {
                    // line 39
                    echo "        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        ";
                }
                // line 43
                echo "    ";
            }
            // line 44
            echo "
    ";
            // line 45
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 46
                echo "        ";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 47
                    echo "            <li>
                <a href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 51
                    echo "            <li class=\"active\">
                <span>";
                    // line 52
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</span>
            </li>
        ";
                }
                // line 55
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
    ";
            // line 58
            if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > (isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")))) {
                // line 59
                echo "        ";
                if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 1))) {
                    // line 60
                    echo "            ";
                    if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 2))) {
                        // line 61
                        echo "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                    } else {
                        // line 65
                        echo "                <li>
                    <a href=\"";
                        // line 66
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 69
                    echo "        ";
                }
                // line 70
                echo "        <li>
            <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 74
            echo "
    ";
            // line 75
            if (array_key_exists("next", $context)) {
                // line 76
                echo "        <li>
            <a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 80
                echo "        <li class=\"disabled\">
            <span>";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</span>
        </li>
    ";
            }
            // line 84
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 69,  104 => 51,  100 => 33,  161 => 75,  483 => 238,  445 => 212,  441 => 211,  462 => 225,  417 => 205,  356 => 186,  422 => 188,  410 => 183,  400 => 180,  552 => 274,  550 => 273,  543 => 268,  539 => 267,  531 => 261,  529 => 260,  514 => 248,  510 => 247,  506 => 246,  498 => 244,  494 => 243,  490 => 242,  486 => 241,  482 => 240,  478 => 239,  470 => 231,  465 => 235,  459 => 232,  455 => 231,  451 => 230,  447 => 229,  443 => 228,  433 => 209,  429 => 208,  425 => 207,  421 => 206,  153 => 56,  363 => 161,  271 => 125,  335 => 148,  272 => 133,  434 => 219,  396 => 199,  392 => 183,  388 => 172,  380 => 179,  376 => 178,  345 => 155,  178 => 80,  391 => 176,  372 => 165,  367 => 162,  502 => 245,  500 => 246,  493 => 241,  489 => 240,  481 => 237,  479 => 233,  464 => 221,  460 => 224,  456 => 219,  452 => 218,  448 => 217,  436 => 214,  432 => 194,  428 => 212,  424 => 211,  420 => 213,  383 => 197,  375 => 164,  339 => 182,  118 => 36,  90 => 46,  65 => 35,  84 => 17,  53 => 30,  405 => 202,  358 => 157,  336 => 162,  300 => 152,  371 => 163,  284 => 134,  276 => 144,  200 => 93,  188 => 96,  288 => 135,  282 => 146,  274 => 130,  174 => 80,  364 => 163,  349 => 168,  344 => 166,  317 => 141,  313 => 140,  301 => 155,  275 => 126,  215 => 105,  415 => 218,  403 => 215,  401 => 201,  361 => 171,  357 => 170,  353 => 169,  348 => 171,  334 => 162,  326 => 160,  308 => 154,  304 => 153,  286 => 147,  280 => 133,  34 => 12,  126 => 61,  259 => 119,  255 => 118,  281 => 137,  242 => 114,  234 => 113,  226 => 109,  180 => 82,  175 => 72,  110 => 34,  262 => 127,  244 => 121,  236 => 112,  232 => 111,  216 => 103,  207 => 97,  185 => 96,  248 => 122,  194 => 88,  190 => 89,  186 => 83,  170 => 77,  167 => 76,  160 => 73,  155 => 71,  152 => 70,  124 => 61,  419 => 189,  411 => 186,  397 => 187,  389 => 185,  385 => 181,  377 => 175,  373 => 174,  369 => 173,  346 => 182,  338 => 163,  332 => 172,  328 => 177,  324 => 159,  320 => 173,  316 => 156,  292 => 136,  222 => 104,  218 => 108,  210 => 102,  206 => 95,  202 => 95,  197 => 99,  354 => 156,  352 => 155,  331 => 150,  327 => 149,  323 => 162,  293 => 132,  289 => 131,  279 => 127,  261 => 121,  251 => 118,  239 => 114,  225 => 108,  211 => 104,  181 => 81,  172 => 78,  366 => 163,  350 => 156,  342 => 154,  340 => 153,  330 => 161,  319 => 138,  295 => 131,  291 => 130,  287 => 129,  277 => 126,  267 => 124,  263 => 121,  257 => 120,  253 => 119,  249 => 115,  245 => 114,  231 => 112,  213 => 104,  195 => 99,  192 => 98,  58 => 32,  23 => 1,  318 => 172,  310 => 154,  306 => 141,  302 => 140,  299 => 132,  296 => 153,  290 => 148,  266 => 128,  250 => 120,  237 => 112,  228 => 110,  150 => 124,  129 => 46,  114 => 39,  97 => 46,  77 => 18,  426 => 190,  418 => 198,  416 => 197,  394 => 176,  390 => 196,  386 => 195,  382 => 194,  378 => 193,  370 => 178,  359 => 160,  351 => 158,  347 => 155,  343 => 150,  333 => 145,  329 => 144,  325 => 143,  321 => 142,  315 => 137,  311 => 135,  307 => 134,  303 => 133,  297 => 154,  270 => 129,  265 => 122,  260 => 133,  256 => 126,  233 => 111,  223 => 107,  212 => 96,  205 => 101,  198 => 97,  191 => 86,  184 => 95,  165 => 75,  137 => 65,  127 => 47,  113 => 55,  81 => 23,  76 => 21,  480 => 162,  474 => 232,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 216,  440 => 215,  437 => 210,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 204,  409 => 203,  407 => 182,  402 => 181,  398 => 185,  393 => 186,  387 => 208,  384 => 170,  381 => 176,  379 => 165,  374 => 192,  368 => 189,  365 => 172,  362 => 162,  360 => 187,  355 => 159,  341 => 147,  337 => 155,  322 => 143,  314 => 155,  312 => 155,  309 => 139,  305 => 142,  298 => 146,  294 => 262,  285 => 138,  283 => 128,  278 => 132,  268 => 134,  264 => 128,  258 => 126,  252 => 123,  247 => 115,  241 => 113,  229 => 109,  220 => 112,  214 => 105,  177 => 80,  169 => 71,  140 => 66,  132 => 48,  128 => 60,  107 => 52,  61 => 15,  273 => 143,  269 => 123,  254 => 118,  243 => 119,  240 => 118,  238 => 114,  235 => 113,  230 => 109,  227 => 108,  224 => 107,  221 => 106,  219 => 106,  217 => 104,  208 => 101,  204 => 102,  179 => 150,  159 => 61,  143 => 56,  135 => 38,  119 => 48,  102 => 29,  71 => 26,  67 => 25,  63 => 34,  59 => 11,  38 => 10,  28 => 20,  87 => 30,  26 => 6,  201 => 100,  196 => 90,  183 => 94,  171 => 77,  166 => 84,  163 => 76,  158 => 74,  156 => 58,  151 => 70,  142 => 59,  138 => 49,  136 => 50,  121 => 46,  117 => 40,  105 => 35,  91 => 29,  62 => 19,  49 => 14,  94 => 30,  89 => 28,  85 => 26,  75 => 27,  68 => 36,  56 => 13,  24 => 18,  21 => 2,  31 => 12,  25 => 3,  19 => 16,  93 => 47,  88 => 38,  78 => 15,  46 => 13,  44 => 26,  27 => 5,  79 => 25,  72 => 13,  69 => 24,  47 => 17,  40 => 7,  37 => 6,  22 => 17,  246 => 116,  157 => 57,  145 => 53,  139 => 50,  131 => 61,  123 => 58,  120 => 57,  115 => 67,  111 => 30,  108 => 36,  101 => 31,  98 => 45,  96 => 48,  83 => 44,  74 => 39,  66 => 17,  55 => 31,  52 => 9,  50 => 29,  43 => 12,  41 => 25,  35 => 6,  32 => 7,  29 => 4,  209 => 103,  203 => 99,  199 => 98,  193 => 98,  189 => 97,  187 => 84,  182 => 83,  176 => 82,  173 => 146,  168 => 77,  164 => 70,  162 => 74,  154 => 71,  149 => 54,  147 => 56,  144 => 49,  141 => 53,  133 => 50,  130 => 47,  125 => 59,  122 => 42,  116 => 38,  112 => 43,  109 => 52,  106 => 33,  103 => 34,  99 => 47,  95 => 28,  92 => 43,  86 => 45,  82 => 39,  80 => 43,  73 => 23,  64 => 27,  60 => 22,  57 => 17,  54 => 31,  51 => 11,  48 => 7,  45 => 8,  42 => 10,  39 => 10,  36 => 5,  33 => 22,  30 => 21,);
    }
}
