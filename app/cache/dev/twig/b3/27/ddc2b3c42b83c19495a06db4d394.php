<?php

/* CiudadBundle:Default:listaCiudades.html.twig */
class __TwigTemplate_b327ddc2b3c42b83c19495a06db4d394 extends Twig_Template
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
        echo "<select id=\"ciudadseleccionada\">
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ciudades"));
        foreach ($context['_seq'] as $context["_key"] => $context["ciudad"]) {
            // line 3
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ciudad"), "slug"), "html", null, true);
            echo "\"
            data-url=\"";
            // line 4
            echo twig_escape_filter($this->env, (($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ($this->env->getExtension('routing')->getUrl("backend_ciudad_cambiar", array("ciudad" => $this->getAttribute($this->getContext($context, "ciudad"), "slug")))) : ($this->env->getExtension('routing')->getUrl("ciudad_cambiar", array("ciudad" => $this->getAttribute($this->getContext($context, "ciudad"), "slug"))))), "html", null, true);
            // line 8
            echo "\"
            ";
            // line 9
            echo ((($this->getContext($context, "ciudadActual") == $this->getAttribute($this->getContext($context, "ciudad"), "slug"))) ? ("selected=\"selected\"") : (""));
            echo ">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ciudad"), "nombre"), "html", null, true);
            echo "
    </option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciudad'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "</select>

<script type=\"text/javascript\">
    var lista = document.getElementById('ciudadseleccionada');

    lista.onchange = function() {
        var url = lista.options[lista.selectedIndex].getAttribute('data-url');
        window.location = url;
    };
</script>
";
    }

    public function getTemplateName()
    {
        return "CiudadBundle:Default:listaCiudades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  40 => 10,  33 => 8,  31 => 4,  26 => 3,  22 => 2,  19 => 1,  144 => 14,  138 => 13,  128 => 8,  123 => 7,  118 => 6,  110 => 30,  104 => 28,  96 => 25,  93 => 24,  84 => 21,  78 => 20,  66 => 18,  62 => 17,  58 => 15,  56 => 14,  52 => 13,  48 => 11,  46 => 10,  41 => 9,  36 => 9,  25 => 1,  201 => 49,  199 => 48,  196 => 47,  193 => 46,  188 => 42,  183 => 39,  178 => 51,  176 => 46,  171 => 43,  169 => 42,  165 => 41,  162 => 40,  160 => 39,  152 => 34,  145 => 32,  139 => 31,  133 => 10,  127 => 27,  124 => 26,  121 => 25,  105 => 21,  101 => 20,  98 => 26,  91 => 23,  88 => 16,  80 => 17,  77 => 16,  73 => 15,  70 => 14,  42 => 10,  35 => 5,  30 => 3,  79 => 24,  72 => 19,  69 => 20,  64 => 17,  61 => 16,  55 => 12,  53 => 9,  50 => 8,  47 => 7,  44 => 6,  38 => 8,  32 => 6,);
    }
}
