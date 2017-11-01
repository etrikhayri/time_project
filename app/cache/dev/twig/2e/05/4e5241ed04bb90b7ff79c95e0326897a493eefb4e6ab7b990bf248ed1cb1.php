<?php

/* ::base.html.twig */
class __TwigTemplate_2e054e5241ed04bb90b7ff79c95e0326897a493eefb4e6ab7b990bf248ed1cb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                  ";
        // line 21
        $this->displayBlock('navigation', $context, $blocks);
        // line 29
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 32
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 33
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 41
        $this->displayBlock('sidebar', $context, $blocks);
        // line 42
        echo "                
            </aside>

            <div id=\"footer\">
                ";
        // line 46
        $this->displayBlock('footer', $context, $blocks);
        // line 49
        echo "            </div>
        </section>

        ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "TIME BLOG";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 21
    public function block_navigation($context, array $blocks = array())
    {
        // line 22
        echo "    <nav>
        <ul class=\"navigation\">
           
            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</a></li>
        </ul>
    </nav>
";
    }

    // line 32
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"#\">TIME BLOG</a>";
    }

    // line 33
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"#\">Creer votre blog </a>";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
    }

    // line 41
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        // line 47
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 52,  161 => 47,  158 => 46,  153 => 41,  148 => 38,  142 => 33,  136 => 32,  128 => 25,  123 => 22,  120 => 21,  114 => 12,  110 => 10,  107 => 9,  101 => 5,  96 => 53,  94 => 52,  89 => 49,  87 => 46,  81 => 42,  79 => 41,  75 => 39,  73 => 38,  65 => 33,  61 => 32,  56 => 29,  54 => 21,  43 => 14,  41 => 9,  34 => 5,  28 => 1,);
    }
}
