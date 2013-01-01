<?php

/* TiendaBundle:Default:portada.html.twig */
class __TwigTemplate_3b91faa886297f4359ed1d83b6005c2e extends Twig_Template
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
        echo "Tienda ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tienda"), "nombre"), "html", null, true);
    }

    // line 4
    public function block_id($context, array $blocks = array())
    {
        echo "tienda";
    }

    // line 6
    public function block_rss($context, array $blocks = array())
    {
        // line 7
        echo "<link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS de las ofertas más recientes de ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tienda"), "nombre"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tienda_portada", array("ciudad" => $this->getAttribute($this->getAttribute($this->getContext($context, "tienda"), "ciudad"), "slug"), "tienda" => $this->getAttribute($this->getContext($context, "tienda"), "slug"), "_format" => "rss")), "html", null, true);
        echo "\" />
";
    }

    // line 10
    public function block_article($context, array $blocks = array())
    {
        // line 11
        echo "    <section id=\"descripcion\">
        <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tienda"), "nombre"), "html", null, true);
        echo "</h1>

        <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tienda"), "descripcion"), "html", null, true);
        echo "</p>
    </section>

    ";
        // line 17
        if ($this->getContext($context, "ofertas")) {
            // line 18
            echo "    <section id=\"ultimas\">
    <h2>Últimas ofertas publicadas</h2>

    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Oferta</th>
                <th>Precio</th>
                <th>Descuento</th>
                <th>Compras</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ofertas"));
            foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
                // line 33
                echo "            <tr>
                <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('cupon')->fecha($this->getAttribute($this->getContext($context, "oferta"), "fechaPublicacion")), "html", null, true);
                echo "</td>
                <td><a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oferta", array("ciudad" => $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "ciudad"), "slug"), "slug" => $this->getAttribute($this->getContext($context, "oferta"), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "nombre"), "html", null, true);
                echo "</a></td>
                <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "precio"), "html", null, true);
                echo " &euro;</td>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "descuento"), "html", null, true);
                echo " &euro;</td>
                <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "compras"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 41
            echo "        </tbody>
    </table>
    ";
        }
    }

    // line 46
    public function block_aside($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        $this->displayParentBlock("aside", $context, $blocks);
        echo "

    <section id=\"cercanas\">
        <h2>Otras tiendas en ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "tienda"), "ciudad"), "nombre"), "html", null, true);
        echo "</h2>
        <ul>
            ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cercanas"));
        foreach ($context['_seq'] as $context["_key"] => $context["tienda"]) {
            // line 53
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tienda_portada", array("ciudad" => $this->getAttribute($this->getAttribute($this->getContext($context, "tienda"), "ciudad"), "slug"), "tienda" => $this->getAttribute($this->getContext($context, "tienda"), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tienda"), "nombre"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tienda'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 55
        echo "        </ul>
    </section>

    <section id=\"nosotros\">
        <h2>Sobre nosotros</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </section>
";
    }

    public function getTemplateName()
    {
        return "TiendaBundle:Default:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 55,  152 => 53,  148 => 52,  143 => 50,  136 => 47,  133 => 46,  126 => 41,  117 => 38,  113 => 37,  109 => 36,  103 => 35,  99 => 34,  96 => 33,  92 => 32,  76 => 18,  74 => 17,  68 => 14,  63 => 12,  60 => 11,  57 => 10,  48 => 7,  45 => 6,  39 => 4,  32 => 3,);
    }
}
