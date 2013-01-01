<?php

/* ::base.html.twig */
class __TwigTemplate_2ad3518e4fb4b1112a87113ef85f8bf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'rss' => array($this, 'block_rss'),
            'javascripts' => array($this, 'block_javascripts'),
            'id' => array($this, 'block_id'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " | Cupon</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    ";
        $this->displayBlock('rss', $context, $blocks);
        // line 9
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" />
    ";
        // line 10
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "</head>

<body id=\"";
        // line 13
        $this->displayBlock('id', $context, $blocks);
        echo "\"><div id=\"contenedor\">
    ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "    
    <footer>
        &copy; ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Cupon
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "ayuda")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ayuda"), "html", null, true);
        echo "</a>
        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacto"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contacto"), "html", null, true);
        echo "</a>
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "privacidad")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Privacidad"), "html", null, true);
        echo "</a>
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "sobre-nosotros")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sobre nosotros"), "html", null, true);
        echo "</a>
        
        ";
        // line 23
        $context["locale"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale");
        // line 24
        echo "        <section id=\"idioma\">
        ";
        // line 25
        if (($this->getContext($context, "locale") == "es")) {
            // line 26
            echo "            <span>Español</span> - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portada", array("_locale" => "en")), "html", null, true);
            echo "\">English</a>
        ";
        } elseif (($this->getContext($context, "locale") == "en")) {
            // line 28
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portada", array("_locale" => "es")), "html", null, true);
            echo "\">Español</a> - <span>English</span>
        ";
        }
        // line 30
        echo "        </section>
    </footer>
</div></body>

</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 8
    public function block_rss($context, array $blocks = array())
    {
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 13
    public function block_id($context, array $blocks = array())
    {
        echo "";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 14,  138 => 13,  128 => 8,  123 => 7,  118 => 6,  110 => 30,  104 => 28,  96 => 25,  93 => 24,  84 => 21,  78 => 20,  66 => 18,  62 => 17,  58 => 15,  56 => 14,  52 => 13,  48 => 11,  46 => 10,  41 => 9,  36 => 7,  25 => 1,  201 => 49,  199 => 48,  196 => 47,  193 => 46,  188 => 42,  183 => 39,  178 => 51,  176 => 46,  171 => 43,  169 => 42,  165 => 41,  162 => 40,  160 => 39,  152 => 34,  145 => 32,  139 => 31,  133 => 10,  127 => 27,  124 => 26,  121 => 25,  105 => 21,  101 => 20,  98 => 26,  91 => 23,  88 => 16,  80 => 17,  77 => 16,  73 => 15,  70 => 14,  42 => 10,  35 => 5,  30 => 3,  79 => 24,  72 => 19,  69 => 20,  64 => 17,  61 => 16,  55 => 12,  53 => 9,  50 => 8,  47 => 7,  44 => 6,  38 => 8,  32 => 6,);
    }
}
