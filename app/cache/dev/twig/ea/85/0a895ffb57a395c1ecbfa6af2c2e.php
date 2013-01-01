<?php

/* UsuarioBundle:Default:cajaLogin.html.twig */
class __TwigTemplate_ea850a895ffb57a395c1ecbfa6af2c2e extends Twig_Template
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
        if ($this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            echo " ";
            // line 2
            echo "
    ";
            // line 3
            $this->env->loadTemplate(":includes:flashes.html.twig")->display($context);
            // line 4
            echo "
    <p>Conectado como <strong>";
            // line 5
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "usuario"), "nombre") . " ") . $this->getAttribute($this->getContext($context, "usuario"), "apellidos")), "html", null, true);
            echo "</strong></p>
\t";
            // line 8
            echo "
    <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_perfil"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ver mi perfil"), "html", null, true);
            echo "</a>
    <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_logout"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cerrar sesión"), "html", null, true);
            echo "</a>

";
        } else {
            // line 12
            echo " ";
            // line 13
            echo "
    ";
            // line 14
            if (($this->getContext($context, "id") != "portada")) {
                // line 15
                echo "        <a class=\"boton\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_registro"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Regístrate"), "html", null, true);
                echo "</a>
    ";
            }
            // line 17
            echo "
    <h2>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Accede a tu cuenta"), "html", null, true);
            echo "</h2>

    <form action=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_login_check"), "html", null, true);
            echo "\" method=\"post\">
        <label for=\"login_user\">";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email"), "html", null, true);
            echo "</label>
        <input id=\"login_user\" type=\"text\" name=\"_username\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter($this->getContext($context, "last_username"), "")) : ("")), "html", null, true);
            echo "\" />

        <label for=\"login_pass\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contraseña"), "html", null, true);
            echo "</label>
        <input id=\"login_pass\" type=\"password\" name=\"_password\" />

        <input type=\"submit\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Entrar"), "html", null, true);
            echo "\" />

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
        <label for=\"remember_me\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No cerrar sesión"), "html", null, true);
            echo "</label>
    </form>

";
        }
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:cajaLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 30,  74 => 20,  43 => 10,  37 => 9,  34 => 8,  27 => 4,  163 => 67,  159 => 66,  151 => 61,  140 => 58,  135 => 55,  122 => 49,  120 => 46,  117 => 45,  113 => 43,  107 => 39,  87 => 24,  82 => 22,  75 => 21,  71 => 20,  63 => 17,  51 => 12,  24 => 3,  21 => 2,  49 => 13,  40 => 10,  33 => 8,  31 => 5,  26 => 3,  22 => 2,  19 => 1,  144 => 14,  138 => 13,  128 => 8,  123 => 7,  118 => 6,  110 => 42,  104 => 38,  96 => 33,  93 => 27,  84 => 21,  78 => 21,  66 => 17,  62 => 17,  58 => 15,  56 => 14,  52 => 13,  48 => 11,  46 => 10,  41 => 9,  36 => 7,  25 => 3,  201 => 49,  199 => 48,  196 => 47,  193 => 46,  188 => 42,  183 => 39,  178 => 51,  176 => 46,  171 => 43,  169 => 42,  165 => 41,  162 => 40,  160 => 39,  152 => 34,  145 => 60,  139 => 31,  133 => 10,  127 => 52,  124 => 26,  121 => 25,  105 => 21,  101 => 35,  98 => 34,  91 => 23,  88 => 16,  80 => 23,  77 => 22,  73 => 15,  70 => 14,  42 => 10,  35 => 5,  30 => 5,  79 => 24,  72 => 19,  69 => 18,  64 => 17,  61 => 16,  55 => 12,  53 => 13,  50 => 8,  47 => 7,  44 => 6,  38 => 8,  32 => 6,);
    }
}
