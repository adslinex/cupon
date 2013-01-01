<?php

/* ::frontend.html.twig */
class __TwigTemplate_b5bc61594158179271dc0dfb62510ce1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'anuncio' => array($this, 'block_anuncio'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["ciudadSeleccionada"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "ciudad", 1 => $this->getContext($context, "ciudad_por_defecto")), "method");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "82edbec_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82edbec_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/frontend_normalizar_1.css");
            // line 10
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
            // asset "82edbec_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82edbec_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/frontend_comun_2.css");
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
            // asset "82edbec_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82edbec_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/frontend_frontend_3.css");
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
        } else {
            // asset "82edbec"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82edbec") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/frontend.css");
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
        }
        unset($context["asset_url"]);
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "10c2536_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_10c2536_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/lt_ie9_part_1_html5_1.js");
            // line 16
            echo "<!--[if lt IE 9]>
    <script src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
<![endif]-->
";
        } else {
            // asset "10c2536"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_10c2536") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/lt_ie9.js");
            // line 16
            echo "<!--[if lt IE 9]>
    <script src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
<![endif]-->
";
        }
        unset($context["asset_url"]);
        // line 19
        echo "  
";
        // line 20
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "514f925_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_514f925_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/frontend_part_1_frontend_1.js");
            // line 21
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        } else {
            // asset "514f925"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_514f925") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/frontend.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        }
        unset($context["asset_url"]);
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "<header>
    <h1><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portada", array("ciudad" => $this->getContext($context, "ciudadSeleccionada"))), "html", null, true);
        echo "\">CUPON</a></h1>
    <nav>
        <ul>
            <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portada", array("ciudad" => $this->getContext($context, "ciudadSeleccionada"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Oferta del día"), "html", null, true);
        echo "</a></li>
            <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ciudad_recientes", array("ciudad" => $this->getContext($context, "ciudadSeleccionada"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ofertas recientes"), "html", null, true);
        echo "</a></li>
            <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_compras"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mis ofertas"), "html", null, true);
        echo "</a></li>
            
            <li>";
        // line 34
        echo $this->env->getExtension('actions')->renderAction("CiudadBundle:Default:listaCiudades", array("ciudad" => $this->getContext($context, "ciudadSeleccionada")), array());
        echo "</li>
        </ul>
    </nav>
</header>

";
        // line 39
        $this->displayBlock('anuncio', $context, $blocks);
        // line 40
        echo "
<article ";
        // line 41
        echo ((twig_in_filter($this->renderBlock("id", $context, $blocks), array(0 => "portada", 1 => "oferta"))) ? (" class=\"oferta\"") : (""));
        echo ">
    ";
        // line 42
        $this->displayBlock('article', $context, $blocks);
        // line 43
        echo "</article>

<aside>
    ";
        // line 46
        $this->displayBlock('aside', $context, $blocks);
        // line 51
        echo "</aside>
";
    }

    // line 39
    public function block_anuncio($context, array $blocks = array())
    {
    }

    // line 42
    public function block_article($context, array $blocks = array())
    {
    }

    // line 46
    public function block_aside($context, array $blocks = array())
    {
        // line 47
        echo "    <section id=\"login\">
        ";
        // line 48
        echo $this->env->getExtension('actions')->renderAction("UsuarioBundle:Default:cajaLogin", array("id" => $this->renderBlock("id", $context, $blocks)), array("standalone" => true));
        // line 49
        echo "    </section>
    ";
    }

    public function getTemplateName()
    {
        return "::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 49,  199 => 48,  196 => 47,  193 => 46,  188 => 42,  183 => 39,  178 => 51,  176 => 46,  171 => 43,  169 => 42,  165 => 41,  162 => 40,  160 => 39,  152 => 34,  145 => 32,  139 => 31,  133 => 30,  127 => 27,  124 => 26,  121 => 25,  105 => 21,  101 => 20,  98 => 19,  91 => 17,  88 => 16,  80 => 17,  77 => 16,  73 => 15,  70 => 14,  42 => 10,  35 => 5,  30 => 3,  79 => 24,  72 => 21,  69 => 20,  64 => 17,  61 => 16,  55 => 12,  53 => 9,  50 => 8,  47 => 7,  44 => 6,  38 => 6,  32 => 3,);
    }
}
