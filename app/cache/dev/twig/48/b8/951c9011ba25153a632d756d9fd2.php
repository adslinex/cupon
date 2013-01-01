<?php

/* OfertaBundle:Default:detalle.html.twig */
class __TwigTemplate_48b8951c9011ba25153a632d756d9fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "nombre"), "html", null, true);
    }

    // line 4
    public function block_id($context, array $blocks = array())
    {
        echo "oferta";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->env->loadTemplate("OfertaBundle:Default:includes/oferta.html.twig")->display($context);
    }

    // line 10
    public function block_aside($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayParentBlock("aside", $context, $blocks);
        echo "

    <section id=\"relacionadas\">
        <h2>Ofertas en otras ciudades</h2>
        <ul>
            ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cercanas"));
        foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
            // line 17
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "ciudad"), "nombre"), "html", null, true);
            echo ": <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oferta", array("ciudad" => $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "ciudad"), "slug"), "slug" => $this->getAttribute($this->getContext($context, "oferta"), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "nombre"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "        </ul>
    </section>

    <section id=\"condiciones\">
        <h2>Condiciones generales</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </section>
";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:detalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  67 => 17,  63 => 16,  54 => 11,  51 => 10,  46 => 7,  43 => 6,  37 => 4,  31 => 3,);
    }
}
