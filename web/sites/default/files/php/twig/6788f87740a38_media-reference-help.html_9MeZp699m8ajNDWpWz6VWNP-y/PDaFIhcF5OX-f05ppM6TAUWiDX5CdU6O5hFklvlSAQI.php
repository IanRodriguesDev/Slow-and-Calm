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

/* themes/contrib/gin/templates/media/media-reference-help.html.twig */
class __TwigTemplate_b3991fd8c96e82aab427bdd704d99887 extends Template
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
        // line 10
        $context["classes"] = ["media-library-new-widget", "js-form-item", "form-item", "js-form-wrapper", "form-wrapper", "fieldset"];
        // line 19
        yield "<fieldset";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 19), 19, $this->source), "html", null, true);
        yield ">
  ";
        // line 21
        $context["legend_classes"] = ["fieldset__legend", "fieldset__legend--visible"];
        // line 26
        yield "  ";
        // line 27
        $context["legend_span_classes"] = ["fieldset__label", ((        // line 29
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 30
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 33
        yield "  ";
        // line 34
        yield "  <legend";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["legend_attributes"] ?? null), "addClass", [($context["legend_classes"] ?? null)], "method", false, false, true, 34), 34, $this->source), "html", null, true);
        yield ">
    <span";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["legend_span_attributes"] ?? null), "addClass", [($context["legend_span_classes"] ?? null)], "method", false, false, true, 35), 35, $this->source), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["original_label"] ?? null), 35, $this->source), "html", null, true);
        yield "</span>
  </legend>

  <div class=\"js-form-item fieldset__wrapper\">
    ";
        // line 39
        if (($context["media_add_help"] ?? null)) {
            // line 40
            yield "      <h4";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["header_attributes"] ?? null), "addClass", ["label"], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            yield ">
        ";
            // line 41
            yield t("Create new media", array());
            // line 44
            yield "      </h4>
      <div class=\"description\">
        ";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_add_help"] ?? null), 46, $this->source), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 49
        yield "
    ";
        // line 50
        if (($context["multiple"] ?? null)) {
            // line 51
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["table"] ?? null), 51, $this->source), "html", null, true);
            yield "
    ";
        } else {
            // line 53
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 54
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["element"], 54, $this->source), "html", null, true);
                yield "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['element'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "    ";
        }
        // line 57
        yield "
    <div";
        // line 58
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 58), "addClass", ["description"], "method", false, false, true, 58), 58, $this->source), "html", null, true);
        yield ">
      ";
        // line 59
        if ((($context["multiple"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 59))) {
            // line 60
            yield "        <ul>
          <li>";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_list_help"] ?? null), 61, $this->source), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_list_link"] ?? null), 61, $this->source), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["allowed_types_help"] ?? null), 61, $this->source), "html", null, true);
            yield "</li>
          <li>";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            yield "</li>
        </ul>
      ";
        } else {
            // line 65
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_list_help"] ?? null), 65, $this->source), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_list_link"] ?? null), 65, $this->source), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["allowed_types_help"] ?? null), 65, $this->source), "html", null, true);
            yield "
      ";
        }
        // line 67
        yield "      ";
        if ((($context["multiple"] ?? null) && ($context["button"] ?? null))) {
            // line 68
            yield "        <div class=\"clearfix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button"] ?? null), 68, $this->source), "html", null, true);
            yield "</div>
      ";
        }
        // line 70
        yield "    </div>

  </div>
</fieldset>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "required", "legend_attributes", "legend_span_attributes", "original_label", "media_add_help", "header_attributes", "multiple", "table", "elements", "description", "media_list_help", "media_list_link", "allowed_types_help", "button"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/gin/templates/media/media-reference-help.html.twig";
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
        return array (  167 => 70,  161 => 68,  158 => 67,  148 => 65,  142 => 62,  134 => 61,  131 => 60,  129 => 59,  125 => 58,  122 => 57,  119 => 56,  110 => 54,  105 => 53,  99 => 51,  97 => 50,  94 => 49,  88 => 46,  84 => 44,  82 => 41,  77 => 40,  75 => 39,  66 => 35,  61 => 34,  59 => 33,  57 => 30,  56 => 29,  55 => 27,  53 => 26,  51 => 21,  46 => 19,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/gin/templates/media/media-reference-help.html.twig", "/var/www/html/web/themes/contrib/gin/templates/media/media-reference-help.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "if" => 39, "trans" => 41, "for" => 53);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans', 'for'],
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
