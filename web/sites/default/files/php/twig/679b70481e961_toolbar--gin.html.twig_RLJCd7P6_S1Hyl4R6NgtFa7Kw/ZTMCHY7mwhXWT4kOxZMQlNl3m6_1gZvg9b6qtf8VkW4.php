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

/* themes/contrib/gin/templates/navigation/toolbar--gin.html.twig */
class __TwigTemplate_b93e599b78555594702807694285a461 extends Template
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
        // line 23
        $context["gin_toolbar_id"] = ((((($context["toolbar_variant"] ?? null) != "classic") || ($context["core_navigation"] ?? null))) ? ("gin-toolbar-bar") : ("toolbar-bar"));
        // line 24
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["toolbar"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
        yield ">
  <nav";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["toolbar_attributes"] ?? null), "addClass", ["toolbar-bar", "clearfix"], "method", false, false, true, 25), "setAttribute", ["id", ($context["gin_toolbar_id"] ?? null)], "method", false, false, true, 25), 25, $this->source), "html", null, true);
        yield ">
    <h2 class=\"visually-hidden\">";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toolbar_heading"] ?? null), 26, $this->source), "html", null, true);
        yield "</h2>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 28
            yield "      ";
            $context["tray"] = (($__internal_compile_0 = ($context["trays"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null);
            // line 29
            yield "      ";
            $context["user_menu"] = (((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "links", [], "any", false, false, true, 29)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["user_links"] ?? null) : null)) ? ("user-menu") : (false));
            // line 30
            yield "      ";
            if (((            // line 31
($context["toolbar_variant"] ?? null) != "classic") && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 32
$context["tab"], "attributes", [], "any", false, false, true, 32), "id", [], "any", false, false, true, 32) == "admin-toolbar-search-tab") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 33
$context["tab"], "attributes", [], "any", false, false, true, 33), "id", [], "any", false, false, true, 33) == "responsive-preview-toolbar-tab")))) {
                // line 36
                yield "        ";
                // line 37
                yield "      ";
            } else {
                // line 38
                yield "        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 38), "id", [], "any", false, false, true, 38) == "toolbar-tab-tour") && (($context["toolbar_variant"] ?? null) != "classic"))) {
                    // line 39
                    yield "        <div";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 39), "addClass", ["toolbar-tab", ($context["user_menu"] ?? null), (((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 39)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#id"] ?? null) : null)) ? (("toolbar-tab--" . $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 39)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#id"] ?? null) : null), 39, $this->source))) : (null))], "method", false, false, true, 39), "removeAttribute", ["id"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
                    yield ">
        ";
                } else {
                    // line 41
                    yield "        <div";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 41), "addClass", ["toolbar-tab", ($context["user_menu"] ?? null), (((($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 41)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#id"] ?? null) : null)) ? (("toolbar-tab--" . $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 41)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#id"] ?? null) : null), 41, $this->source))) : (null))], "method", false, false, true, 41), 41, $this->source), "html", null, true);
                    yield ">
        ";
                }
                // line 43
                yield "          ";
                if (((($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 43)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#id"] ?? null) : null) == "toolbar-item-administration")) {
                    // line 44
                    yield "            <a class=\"toolbar-menu__logo\" href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("system.admin_content"));
                    yield "\" aria-label=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toolbar Menu Logo"));
                    yield "\">
              <span class=\"visually-hidden\">";
                    // line 45
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toolbar Menu Logo"));
                    yield "</span>
            </a>
            ";
                    // line 47
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                    yield "
          ";
                } else {
                    // line 49
                    yield "            ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                    yield "
          ";
                }
                // line 51
                yield "          <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "attributes", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                yield ">
            ";
                // line 52
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 52)) {
                    // line 53
                    yield "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                    yield "\">
                <h3 class=\"toolbar-tray-name visually-hidden\">";
                    // line 54
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                    yield "</h3>
            ";
                } else {
                    // line 56
                    yield "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            ";
                }
                // line 58
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "links", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                yield "
            </nav>
          </div>
        </div>
      ";
            }
            // line 63
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "  </nav>
  ";
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remainder"] ?? null), 65, $this->source), "html", null, true);
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["toolbar_variant", "core_navigation", "attributes", "toolbar_attributes", "toolbar_heading", "tabs", "trays", "remainder"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/gin/templates/navigation/toolbar--gin.html.twig";
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
        return array (  160 => 65,  157 => 64,  151 => 63,  142 => 58,  138 => 56,  133 => 54,  128 => 53,  126 => 52,  121 => 51,  115 => 49,  110 => 47,  105 => 45,  98 => 44,  95 => 43,  89 => 41,  83 => 39,  80 => 38,  77 => 37,  75 => 36,  73 => 33,  72 => 32,  71 => 31,  69 => 30,  66 => 29,  63 => 28,  59 => 27,  55 => 26,  51 => 25,  46 => 24,  44 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for the administrative toolbar.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - toolbar_attributes: HTML attributes to apply to the toolbar.
 * - toolbar_heading: The heading or label for the toolbar.
 * - tabs: List of tabs for the toolbar.
 *   - attributes: HTML attributes for the tab container.
 *   - link: Link or button for the menu tab.
 * - trays: Toolbar tray list, each associated with a tab. Each tray in trays
 *   contains:
 *   - attributes: HTML attributes to apply to the tray.
 *   - label: The tray's label.
 *   - links: The tray menu links.
 * - remainder: Any non-tray, non-tab elements left to be rendered.
 *
 * @see template_preprocess_toolbar()
 */
#}
{% set gin_toolbar_id = toolbar_variant != 'classic' or core_navigation ? 'gin-toolbar-bar' : 'toolbar-bar' %}
<div{{ attributes.addClass('toolbar') }}>
  <nav{{ toolbar_attributes.addClass('toolbar-bar', 'clearfix').setAttribute('id', gin_toolbar_id) }}>
    <h2 class=\"visually-hidden\">{{ toolbar_heading }}</h2>
    {% for key, tab in tabs %}
      {% set tray = trays[key] %}
      {% set user_menu = tray.links['user_links'] ? 'user-menu' : false %}
      {% if
        toolbar_variant != 'classic' and (
          tab.attributes.id == 'admin-toolbar-search-tab' or
          tab.attributes.id == 'responsive-preview-toolbar-tab'
        )
      %}
        {# render nothing #}
      {% else %}
        {% if tab.attributes.id == 'toolbar-tab-tour' and toolbar_variant != 'classic' %}
        <div{{ tab.attributes.addClass('toolbar-tab', user_menu, tab.link['#id'] ? 'toolbar-tab--' ~ tab.link['#id'] : null).removeAttribute('id') }}>
        {% else %}
        <div{{ tab.attributes.addClass('toolbar-tab', user_menu, tab.link['#id'] ? 'toolbar-tab--' ~ tab.link['#id'] : null) }}>
        {% endif %}
          {% if tab.link['#id'] == 'toolbar-item-administration' %}
            <a class=\"toolbar-menu__logo\" href=\"{{ path('system.admin_content') }}\" aria-label=\"{{ 'Toolbar Menu Logo'|t }}\">
              <span class=\"visually-hidden\">{{ 'Toolbar Menu Logo'|t }}</span>
            </a>
            {{ tab.link }}
          {% else %}
            {{ tab.link }}
          {% endif %}
          <div{{ tray.attributes }}>
            {% if tray.label %}
              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"{{ tray.label }}\">
                <h3 class=\"toolbar-tray-name visually-hidden\">{{ tray.label }}</h3>
            {% else %}
              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            {% endif %}
            {{ tray.links }}
            </nav>
          </div>
        </div>
      {% endif %}
    {% endfor %}
  </nav>
  {{ remainder }}
</div>
", "themes/contrib/gin/templates/navigation/toolbar--gin.html.twig", "/var/www/html/web/themes/contrib/gin/templates/navigation/toolbar--gin.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23, "for" => 27, "if" => 30);
        static $filters = array("escape" => 24, "t" => 44);
        static $functions = array("path" => 44);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 't'],
                ['path'],
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
