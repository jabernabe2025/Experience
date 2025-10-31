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

/* modules/custom/listado_usuarios/templates/mi-plantilla.html.twig */
class __TwigTemplate_7ee69d13cccd3637178da3e7af28c6cf extends Template
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
        // line 1
        yield "<form id=\"user-search\" action=\"#\" method=\" post\">
\t<h2>Registro</h2>

\t<label for=\"nombre\">Nombre:</label>
\t<input type=\"text\" id=\"nombre\" name=\"nombre\">

\t<label for=\"apellidos\">Apellidos:</label>
\t<input type=\"text\" id=\"apellidos\" name=\"apellidos\">

\t<label for=\"email\">Correo electrónico:</label>
\t<input type=\"email\" id=\"email\" name=\"email\">

\t<div class=\"botones-form\">
\t\t<input type=\"submit\" value=\"Enviar\">
\t\t<input type=\"reset\" value=\"Resetear\">
\t</div>

</form>


<h2>Listado de usuarios</h2>


<div id=\"tabla-usuarios\">
\t<table>
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>ID</th>
\t\t\t\t<th>Nombre</th>
\t\t\t\t<th>Apellido 1</th>
\t\t\t\t<th>Apellido 2</th>
\t\t\t\t<th>Email</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 37
            yield "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, true, 38), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 39
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["usuario"], "name", [], "any", false, false, true, 39), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["usuario"], "surname1", [], "any", false, false, true, 40), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 41
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["usuario"], "surname2", [], "any", false, false, true, 41), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["usuario"], "email", [], "any", false, false, true, 42), "html", null, true);
            yield "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['usuario'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "\t\t</tbody>
\t</table>
</div>
<div id=\"paginador\">
\t<p>Página
\t\t";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pagina_actual"] ?? null), "html", null, true);
        yield "
\t\tde
\t\t";
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["total_paginas"] ?? null), "html", null, true);
        yield "</p>
\t<div class=\"botones\">
\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["total_paginas"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 55
            yield "\t\t\t<button class=\"btn-pagina\" data-pagina=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["i"], "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["i"], "html", null, true);
            yield "</button>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "\t</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["data", "pagina_actual", "total_paginas"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/listado_usuarios/templates/mi-plantilla.html.twig";
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
        return array (  145 => 57,  134 => 55,  130 => 54,  125 => 52,  120 => 50,  113 => 45,  104 => 42,  100 => 41,  96 => 40,  92 => 39,  88 => 38,  85 => 37,  81 => 36,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/listado_usuarios/templates/mi-plantilla.html.twig", "/var/www/html/web/modules/custom/listado_usuarios/templates/mi-plantilla.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 36];
        static $filters = ["escape" => 38];
        static $functions = ["range" => 54];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['range'],
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
