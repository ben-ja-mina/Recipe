<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/bartik/templates/classy/navigation/book-all-books-block.html.twig */
class __TwigTemplate_dea42e33e437117a2c6e668e40b59d654327bca9c99629cd273e275c2e6716ef extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["book_menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 19
            echo "  <nav id=\"book-block-menu-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "\" class=\"book-block-menu\" role=\"navigation\" aria-label=\"";
            echo t("Book outline for @book.title", array("@book.title" => twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, true, 19), ));
            echo "\">
    ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["book"], "menu", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
  </nav>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/classy/navigation/book-all-books-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 20,  43 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/bartik/templates/classy/navigation/book-all-books-block.html.twig", "C:\\xampp\\htdocs\\recipe2\\web\\core\\themes\\bartik\\templates\\classy\\navigation\\book-all-books-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 18, "trans" => 19);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'trans'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
