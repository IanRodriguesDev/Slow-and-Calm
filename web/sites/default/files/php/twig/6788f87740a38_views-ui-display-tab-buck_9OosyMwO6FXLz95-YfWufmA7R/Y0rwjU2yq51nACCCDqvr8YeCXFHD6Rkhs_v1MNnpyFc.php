<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* core/themes/claro/templates/views/views-ui-display-tab-bucket.html.twig */
class __TwigTemplate_cfeca1fe999fb9d8a012d4b1371be218 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        $context["classes"] = ["views-ui-display-tab-bucket", ((        // line 23
($context["name"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 23, $this->source))) : ("")), ((        // line 24
($context["overridden"] ?? null)) ? ("overridden") : (""))];
        // line 27
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 27), 27, $this->source), "html", null, true);
        yield ">
  ";
        // line 28
        if ((($context["title"] ?? null) || ($context["actions"] ?? null))) {
            // line 29
            yield "    <div class=\"views-ui-display-tab-bucket__header";
            if (($context["actions"] ?? null)) {
                yield " views-ui-display-tab-bucket__header--actions";
            }
            yield "\">
    ";
            // line 30
            if (($context["title"] ?? null)) {
                // line 31
                yield "<h3 class=\"views-ui-display-tab-bucket__title\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 31, $this->source), "html", null, true);
                yield "</h3>";
            }
            // line 33
            yield "    ";
            if (($context["actions"] ?? null)) {
                // line 34
                yield "<div class=\"views-ui-display-tab-bucket__actions\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["actions"] ?? null), 34, $this->source), "html", null, true);
                yield "</div>";
            }
            // line 36
            yield "    </div>
  ";
        }
        // line 38
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 38, $this->source), "html", null, true);
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["name", "overridden", "attributes", "title", "actions", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/views/views-ui-display-tab-bucket.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  81 => 38,  77 => 36,  72 => 34,  69 => 33,  64 => 31,  62 => 30,  55 => 29,  53 => 28,  48 => 27,  46 => 24,  45 => 23,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/claro/templates/views/views-ui-display-tab-bucket.html.twig", "/var/www/html/web/core/themes/claro/templates/views/views-ui-display-tab-bucket.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "if" => 28);
        static $filters = array("clean_class" => 23, "escape" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                [],
                $this->source
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
