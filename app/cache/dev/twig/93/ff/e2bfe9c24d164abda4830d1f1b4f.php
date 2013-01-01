<?php

/* OfertaBundle:Default:includes/minioferta.html.twig */
class __TwigTemplate_93ffe2bfe9c24d164abda4830d1f1b4f extends Twig_Template
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
        $context["comprada"] = ((array_key_exists("comprada", $context)) ? (_twig_default_filter($this->getContext($context, "comprada"), false)) : (false));
        // line 3
        echo "
<section class=\"oferta mini\">
    <div class=\"descripcion\">
        <h2><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oferta", array("ciudad" => $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "ciudad"), "slug"), "slug" => $this->getAttribute($this->getContext($context, "oferta"), "slug"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "nombre"), "html", null, true);
        echo "</a></h2>

        ";
        // line 8
        echo $this->env->getExtension('cupon')->mostrarComoLista($this->getAttribute($this->getContext($context, "oferta"), "descripcion"));
        echo "

        ";
        // line 10
        if (((!$this->getContext($context, "expirada")) && (!$this->getContext($context, "comprada")))) {
            // line 11
            echo "        <a class=\"boton\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comprar", array("ciudad" => $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "ciudad"), "slug"), "slug" => $this->getAttribute($this->getContext($context, "oferta"), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Comprar"), "html", null, true);
            echo "</a>
        ";
        }
        // line 13
        echo "
        <div class=\"estado ";
        // line 14
        echo (($this->getContext($context, "expirada")) ? ("expirada") : (""));
        echo " ";
        echo (($this->getContext($context, "comprada")) ? ("comprada") : (""));
        echo "\">
            ";
        // line 15
        if ($this->getContext($context, "comprada")) {
            // line 16
            echo "                ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Comprada el %fecha%", array("%fecha%" => $this->env->getExtension('cupon')->fecha($this->getContext($context, "fechaCompra"), "long", "medium")), "messages");
            // line 19
            echo "            ";
        } elseif ((!$this->getContext($context, "expirada"))) {
            // line 20
            echo "                ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("<strong>Faltan</strong>: %tiempo%", array("%tiempo%" => $this->env->getExtension('cupon')->cuentaAtras($this->getAttribute($this->getContext($context, "oferta"), "fechaExpiracion"))), "messages");
            // line 23
            echo "            ";
        } else {
            // line 24
            echo "                ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Finalizada el %fecha%", array("%fecha%" => $this->env->getExtension('cupon')->fecha($this->getAttribute($this->getContext($context, "oferta"), "fechaExpiracion"), "long")), "messages");
            // line 27
            echo "            ";
        }
        // line 28
        echo "        </div>
    </div>

    <div class=\"galeria\">
        <img alt=\"Fotografía de la oferta\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "directorio_imagenes") . $this->getAttribute($this->getContext($context, "oferta"), "foto"))), "html", null, true);
        echo "\">

        <p class=\"precio\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "precio"), "html", null, true);
        echo " &euro; <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('cupon')->descuento($this->getAttribute($this->getContext($context, "oferta"), "precio"), $this->getAttribute($this->getContext($context, "oferta"), "descuento")), "html", null, true);
        echo "</span></p>

        <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Disfruta de la oferta en"), "html", null, true);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tienda_portada", array("ciudad" => $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "ciudad"), "slug"), "tienda" => $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "tienda"), "slug"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "tienda"), "nombre"), "html", null, true);
        echo "</a></p>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:includes/minioferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 36,  90 => 34,  79 => 28,  76 => 27,  73 => 24,  70 => 23,  67 => 20,  64 => 19,  61 => 16,  59 => 15,  53 => 14,  50 => 13,  42 => 11,  40 => 10,  35 => 8,  28 => 6,  23 => 3,  21 => 2,  19 => 1,  140 => 31,  134 => 27,  123 => 25,  119 => 24,  114 => 22,  107 => 19,  104 => 18,  88 => 15,  85 => 32,  68 => 13,  60 => 11,  57 => 10,  48 => 7,  45 => 6,  39 => 4,  32 => 3,);
    }
}
