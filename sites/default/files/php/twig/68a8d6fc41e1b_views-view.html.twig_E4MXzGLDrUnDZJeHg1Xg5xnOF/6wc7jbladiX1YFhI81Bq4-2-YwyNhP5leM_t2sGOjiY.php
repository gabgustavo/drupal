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

/* themes/contrib/tara/templates/views/views-view.html.twig */
class __TwigTemplate_4e8c9aec9fa332081c3c33c05c483c12 extends Template
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
        // line 34
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["id"] ?? null), 36, $this->source))), 2 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 37
($context["display_id"] ?? null), 37, $this->source)), 3 => ((        // line 38
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 38, $this->source))) : (""))];
        // line 41
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
        echo ">
  ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 42, $this->source), "html", null, true);
        echo "
  ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 43, $this->source), "html", null, true);
        echo "
  ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 44, $this->source), "html", null, true);
        echo "

  ";
        // line 46
        if (($context["header"] ?? null)) {
            // line 47
            echo "    <div class=\"view-header\">
      ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 48, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 51
        echo "
  ";
        // line 52
        if (($context["exposed"] ?? null)) {
            // line 53
            echo "    <div class=\"view-filters\">
      ";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 54, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 57
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 58
            echo "    <div class=\"view-attachment view-attachment-before\">
      ";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 59, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 62
        echo "
  ";
        // line 63
        if (($context["rows"] ?? null)) {
            // line 64
            echo "    <div class=\"view-content\">
      ";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 65, $this->source), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 67
($context["empty"] ?? null)) {
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 68, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 70
        echo "
  ";
        // line 71
        if (($context["pager"] ?? null)) {
            // line 72
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 72, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 74
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 75
            echo "    <div class=\"view-attachment view-attachment-after\">
      ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 76, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 79
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 80
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 80, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 82
        echo "
  ";
        // line 83
        if (($context["footer"] ?? null)) {
            // line 84
            echo "    <div class=\"view-footer\">
      ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 85, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 88
        echo "
  ";
        // line 89
        if (($context["feed_icons"] ?? null)) {
            // line 90
            echo "    <div class=\"feed-icons\">
      ";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 91, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 94
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/tara/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 94,  173 => 91,  170 => 90,  168 => 89,  165 => 88,  159 => 85,  156 => 84,  154 => 83,  151 => 82,  145 => 80,  142 => 79,  136 => 76,  133 => 75,  130 => 74,  124 => 72,  122 => 71,  119 => 70,  114 => 68,  112 => 67,  107 => 65,  104 => 64,  102 => 63,  99 => 62,  93 => 59,  90 => 58,  87 => 57,  81 => 54,  78 => 53,  76 => 52,  73 => 51,  67 => 48,  64 => 47,  62 => 46,  57 => 44,  53 => 43,  49 => 42,  44 => 41,  42 => 38,  41 => 37,  40 => 36,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/tara/templates/views/views-view.html.twig", "C:\\laragon\\www\\drupal\\themes\\contrib\\tara\\templates\\views\\views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 46);
        static $filters = array("clean_class" => 36, "escape" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
