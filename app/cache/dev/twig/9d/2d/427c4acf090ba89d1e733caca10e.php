<?php

/* UsuarioBundle:Default:login.html.twig */
class __TwigTemplate_9d2d427c4acf090ba89d1e733caca10e extends Twig_Template
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
        echo "Entra en tu cuenta o date de alta";
    }

    // line 4
    public function block_id($context, array $blocks = array())
    {
        echo "login";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "<section id=\"entrar\">
    <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Accede a tu cuenta"), "html", null, true);
        echo "</h1>

    ";
        // line 10
        if ($this->getContext($context, "error")) {
            // line 11
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_login_check"), "html", null, true);
        echo "\" method=\"post\">
        <label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />

        <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contraseña"), "html", null, true);
        echo "</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
        <label for=\"remember_me\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No cerrar sesión"), "html", null, true);
        echo "</label>

        <input class=\"boton\" type=\"submit\" name=\"login\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Entrar"), "html", null, true);
        echo "\" />
    </form>
</section>

<section id=\"registrar\">
    <a class=\"boton\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_registro"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Regístrate gratis como usuario"), "html", null, true);
        echo "</a>
</section>
";
    }

    // line 33
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 33,  98 => 29,  90 => 24,  85 => 22,  78 => 18,  73 => 16,  69 => 15,  65 => 14,  62 => 13,  56 => 11,  54 => 10,  49 => 8,  46 => 7,  43 => 6,  37 => 4,  31 => 3,);
    }
}
