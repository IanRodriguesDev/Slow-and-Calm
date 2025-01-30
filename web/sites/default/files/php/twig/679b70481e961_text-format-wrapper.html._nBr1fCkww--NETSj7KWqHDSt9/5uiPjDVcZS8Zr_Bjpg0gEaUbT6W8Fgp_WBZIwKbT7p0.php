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

/* themes/contrib/gin/templates/form/text-format-wrapper.html.twig */
class __TwigTemplate_fc088bd2c00f52453a16803c70b8250e extends Template
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
        // line 25
        $context["classes"] = ["js-form-item", "form-item", ((        // line 28
($context["description_toggle"] ?? null)) ? ("help-icon__description-container") : (""))];
        // line 31
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "html", null, true);
        yield ">
  ";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 32, $this->source), "html", null, true);
        yield "
  ";
        // line 33
        if (($context["description"] ?? null)) {
            // line 34
            yield "    ";
            // line 35
            $context["description_classes"] = [((            // line 36
($context["aria_description"] ?? null)) ? ("form-item__description") : ("")), ((            // line 37
($context["disabled"] ?? null)) ? ("is-disabled") : ("")), (((            // line 38
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
            // line 41
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description_attributes"] ?? null), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 41, $this->source), "html", null, true);
            yield "</div>
  ";
        }
        // line 43
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["description_toggle", "attributes", "children", "description", "aria_description", "disabled", "description_display", "description_attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/gin/templates/form/text-format-wrapper.html.twig";
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
        return array (  73 => 43,  65 => 41,  63 => 38,  62 => 37,  61 => 36,  60 => 35,  58 => 34,  56 => 33,  52 => 32,  47 => 31,  45 => 28,  44 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for a text format-enabled form element.
 *
 * @todo Remove when https://www.drupal.org/node/3016346 and
 * https://www.drupal.org/node/3016343 are fixed.
 *
 * Available variables:
 * - children: Text format element children.
 * - description: Text format element description.
 * - attributes: HTML attributes for the containing element.
 * - aria_description: Flag for whether or not an ARIA description has been
 *   added to the description container.
 * - description_attributes: attributes for the description.
 *   @see https://www.drupal.org/node/3016343
 * - disabled: An indicator for whether the associated form element is disabled,
 *   added by this theme.
 *   @see https://www.drupal.org/node/3016346
 *
 * @see template_preprocess_text_format_wrapper()
 */
#}
{%
  set classes = [
  'js-form-item',
  'form-item',
  description_toggle ? 'help-icon__description-container',
]
%}
<div{{ attributes.addClass(classes) }}>
  {{ children }}
  {% if description %}
    {%
      set description_classes = [
      aria_description ? 'form-item__description',
      disabled ? 'is-disabled',
      description_display == 'invisible' ? 'visually-hidden',
    ]
    %}
    <div{{ description_attributes.addClass(description_classes) }}>{{ description }}</div>
  {% endif %}
</div>
", "themes/contrib/gin/templates/form/text-format-wrapper.html.twig", "/var/www/html/web/themes/contrib/gin/templates/form/text-format-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 25, "if" => 33);
        static $filters = array("escape" => 31);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
