<?php

/* OfertaBundle:Default:portada.html.twig */
class __TwigTemplate_cd5ddcabd96d8d06a32a7da89396ba84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'anuncio' => array($this, 'block_anuncio'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Cupon, cada día ofertas increíbles en tu ciudad con descuentos de hasta el 90%";
    }

    // line 4
    public function block_id($context, array $blocks = array())
    {
        echo "portada";
    }

    // line 6
    public function block_anuncio($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ((!$this->env->getExtension('security')->isGranted("ROLE_USUARIO"))) {
            // line 8
            echo "        <div id=\"anuncio\">
            ";
            // line 9
            echo $this->env->getExtension('translator')->getTranslator()->trans("<a href=\"%portada%\">CUPON</a> publica cada día una oferta increíble en tu ciudad con descuentos de hasta el 90% <a class=\"boton\" href=\"%registro%\">Regístrate ya</a>", array("%portada%" => $this->env->getExtension('routing')->getPath("portada"), "%registro%" => $this->env->getExtension('routing')->getPath("usuario_registro")), "messages");
            // line 12
            echo "        </div>
    ";
        }
    }

    // line 16
    public function block_article($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->env->loadTemplate("OfertaBundle:Default:includes/oferta.html.twig")->display($context);
    }

    // line 20
    public function block_aside($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayParentBlock("aside", $context, $blocks);
        echo "

    <section id=\"nosotros\">
        <h2>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sobre nosotros"), "html", null, true);
        echo "</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </section>
";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  72 => 21,  69 => 20,  64 => 17,  61 => 16,  55 => 12,  53 => 9,  50 => 8,  47 => 7,  44 => 6,  38 => 4,  32 => 3,);
    }
}
