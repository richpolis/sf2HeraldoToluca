<?php

/* ::base.html.twig */
class __TwigTemplate_584f20aeea0c8c60ff9b688b2ae2ab84a851254db3e3d5d07dead4d4231ea954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  63 => 11,  58 => 8,  52 => 7,  46 => 13,  43 => 12,  41 => 11,  37 => 9,  35 => 8,  23 => 1,  294 => 188,  290 => 187,  286 => 186,  282 => 185,  277 => 184,  275 => 183,  272 => 182,  267 => 135,  219 => 136,  217 => 135,  193 => 114,  189 => 113,  185 => 112,  180 => 110,  174 => 107,  148 => 84,  143 => 82,  120 => 61,  117 => 60,  100 => 30,  96 => 29,  83 => 19,  78 => 17,  75 => 16,  72 => 15,  53 => 43,  51 => 15,  48 => 14,  45 => 13,  39 => 3,  34 => 11,  32 => 9,  30 => 5,  31 => 7,  28 => 3,);
    }
}
