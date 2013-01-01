<?php

/* CiudadBundle:Default:recientes.html.twig */
class __TwigTemplate_1fc37ba3b67d4a357fc733e5ca086196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'rss' => array($this, 'block_rss'),
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
        echo "Ofertas recientes en ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ciudad"), "nombre"), "html", null, true);
    }

    // line 4
    public function block_id($context, array $blocks = array())
    {
        echo "recientes";
    }

    // line 6
    public function block_rss($context, array $blocks = array())
    {
        // line 7
        echo "<link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS de las ofertas más recientes en ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ciudad"), "nombre"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ciudad_recientes", array("ciudad" => $this->getAttribute($this->getContext($context, "ciudad"), "slug"), "_format" => "rss")), "html", null, true);
        echo "\" />
";
    }

    // line 10
    public function block_article($context, array $blocks = array())
    {
        // line 11
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ofertas recientes en"), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ciudad"), "nombre"), "html", null, true);
        echo "</strong></h1>

    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ofertas"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
            // line 14
            echo "        ";
            $this->env->loadTemplate("OfertaBundle:Default:includes/minioferta.html.twig")->display($context);
            // line 15
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 18
    public function block_aside($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayParentBlock("aside", $context, $blocks);
        echo "

    <section id=\"cercanas\">
        <h2>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ofertas en otras ciudades"), "html", null, true);
        echo "</h2>
        <ul>
            ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cercanas"));
        foreach ($context['_seq'] as $context["_key"] => $context["ciudad"]) {
            // line 25
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ciudad_recientes", array("ciudad" => $this->getAttribute($this->getContext($context, "ciudad"), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ciudad"), "nombre"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciudad'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "        </ul>
    </section>

    <section id=\"nosotros\">
        <h2>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sobre nosotros"), "html", null, true);
        echo "</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </section>
";
    }

    public function getTemplateName()
    {
        return "CiudadBundle:Default:recientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 31,  134 => 27,  123 => 25,  119 => 24,  114 => 22,  107 => 19,  104 => 18,  88 => 15,  85 => 14,  68 => 13,  60 => 11,  57 => 10,  48 => 7,  45 => 6,  39 => 4,  32 => 3,);
    }
}
