<?php

/* OfertaBundle:Default:includes/oferta.html.twig */
class __TwigTemplate_b4f1ab1ff603d5b6108aa443560aa6a4 extends Twig_Template
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
        $context["expirada"] = (twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "fechaExpiracion"), "YmdHis") < twig_date_format_filter($this->env, "now", "YmdHis"));
        // line 2
        echo "<section class=\"descripcion\">
    <h1><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oferta", array("ciudad" => $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "ciudad"), "slug"), "slug" => $this->getAttribute($this->getContext($context, "oferta"), "slug"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "nombre"), "html", null, true);
        echo "</a></h1>

    ";
        // line 5
        echo $this->env->getExtension('cupon')->mostrarComoLista($this->getAttribute($this->getContext($context, "oferta"), "descripcion"));
        echo "

    ";
        // line 7
        if ((!$this->getContext($context, "expirada"))) {
            // line 8
            echo "    <a class=\"boton\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comprar", array("ciudad" => $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "ciudad"), "slug"), "slug" => $this->getAttribute($this->getContext($context, "oferta"), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Comprar"), "html", null, true);
            echo "</a>
    ";
        }
        // line 10
        echo "</section>

<section class=\"galeria\">
    <img alt=\"Fotografía de la oferta\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "directorio_imagenes") . $this->getAttribute($this->getContext($context, "oferta"), "foto"))), "html", null, true);
        echo "\">

    <p class=\"precio\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "precio"), "html", null, true);
        echo " &euro; <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('cupon')->descuento($this->getAttribute($this->getContext($context, "oferta"), "precio"), $this->getAttribute($this->getContext($context, "oferta"), "descuento")), "html", null, true);
        echo "</span></p>

    <p><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Condiciones"), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "condiciones"), "html", null, true);
        echo "</p>
</section>

<section class=\"estado ";
        // line 20
        echo (($this->getContext($context, "expirada")) ? ("expirada") : (""));
        echo "\">
";
        // line 21
        if ((!$this->getContext($context, "expirada"))) {
            // line 22
            echo "    <div class=\"tiempo\">
        ";
            // line 23
            echo $this->env->getExtension('translator')->getTranslator()->trans("<strong>Faltan</strong>: %tiempo%", array("%tiempo%" => $this->env->getExtension('cupon')->cuentaAtras($this->getAttribute($this->getContext($context, "oferta"), "fechaExpiracion"))), "messages");
            // line 26
            echo "    </div>

    <div class=\"compras\">
        <strong>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Compras"), "html", null, true);
            echo "</strong>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "compras"), "html", null, true);
            echo "
    </div>

    <div class=\"faltan\">
        ";
            // line 33
            $context["faltan"] = ($this->getAttribute($this->getContext($context, "oferta"), "umbral") - $this->getAttribute($this->getContext($context, "oferta"), "compras"));
            // line 34
            echo "        ";
            if (($this->getContext($context, "faltan") > 0)) {
                // line 35
                echo "            ";
                echo $this->env->getExtension('translator')->getTranslator()->transChoice("{1} ¡<strong>Una sola compra más</strong> <br/> activa la oferta!|[1, 9] ¡<strong>Sólo faltan %faltan% compras</strong> <br/> para activar la oferta!|]9,Inf] Faltan <strong>%faltan% compras</strong> <br/> para activar la oferta", $this->getContext($context, "faltan"), array("%faltan%" => $this->getContext($context, "faltan")), "messages");
                // line 38
                echo "        ";
            } else {
                // line 39
                echo "            ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("<strong>Oferta activada</strong> por superar las <strong>%compras%</strong> compras necesarias", array("%compras%" => $this->getAttribute($this->getContext($context, "oferta"), "umbral")), "messages");
                // line 42
                echo "        ";
            }
            // line 43
            echo "    </div>
";
        } else {
            // line 45
            echo "    <div class=\"tiempo\">
        ";
            // line 46
            echo $this->env->getExtension('translator')->getTranslator()->trans("<strong>Finalizada</strong> el %fecha%", array("%fecha%" => $this->env->getExtension('cupon')->fecha($this->getAttribute($this->getContext($context, "oferta"), "fechaExpiracion"), "long")), "messages");
            // line 49
            echo "    </div>

    <div class=\"compras\">
        <strong>";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Compras"), "html", null, true);
            echo "</strong>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "compras"), "html", null, true);
            echo "
    </div>
";
        }
        // line 55
        echo "</section>

<section class=\"direccion\">
    <h2>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Disfruta de la oferta en"), "html", null, true);
        echo "</h2>
    <p>
        <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tienda_portada", array("ciudad" => $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "ciudad"), "slug"), "tienda" => $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "tienda"), "slug"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "tienda"), "nombre"), "html", null, true);
        echo "</a>
        ";
        // line 61
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "tienda"), "direccion"), "html", null, true));
        echo "
    </p>
</section>

<section class=\"tienda\">
    <h2>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sobre la tienda"), "html", null, true);
        echo "</h2>
    ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "tienda"), "descripcion"), "html", null, true);
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:includes/oferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 67,  159 => 66,  151 => 61,  140 => 58,  135 => 55,  122 => 49,  120 => 46,  117 => 45,  113 => 43,  107 => 39,  87 => 29,  82 => 26,  75 => 21,  71 => 20,  63 => 17,  51 => 13,  24 => 3,  21 => 2,  49 => 13,  40 => 10,  33 => 8,  31 => 5,  26 => 3,  22 => 2,  19 => 1,  144 => 14,  138 => 13,  128 => 8,  123 => 7,  118 => 6,  110 => 42,  104 => 38,  96 => 33,  93 => 24,  84 => 21,  78 => 20,  66 => 18,  62 => 17,  58 => 15,  56 => 15,  52 => 13,  48 => 11,  46 => 10,  41 => 9,  36 => 7,  25 => 1,  201 => 49,  199 => 48,  196 => 47,  193 => 46,  188 => 42,  183 => 39,  178 => 51,  176 => 46,  171 => 43,  169 => 42,  165 => 41,  162 => 40,  160 => 39,  152 => 34,  145 => 60,  139 => 31,  133 => 10,  127 => 52,  124 => 26,  121 => 25,  105 => 21,  101 => 35,  98 => 34,  91 => 23,  88 => 16,  80 => 23,  77 => 22,  73 => 15,  70 => 14,  42 => 10,  35 => 5,  30 => 3,  79 => 24,  72 => 19,  69 => 20,  64 => 17,  61 => 16,  55 => 12,  53 => 9,  50 => 8,  47 => 7,  44 => 6,  38 => 8,  32 => 6,);
    }
}
