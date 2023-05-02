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

/* activitiesAdmin/index.html.twig */
class __TwigTemplate_5e78debfcf08ef050a76ee745a1e8a31 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'pagewrapper' => [$this, 'block_pagewrapper'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitiesAdmin/index.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "activitiesAdmin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tActivities
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_pagewrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagewrapper"));

        // line 8
        echo "
\t<style>
\t\t#calendrier {
\t\t\twidth: 80%;
\t\t\tmargin: auto;
\t\t\theight: 500px;
\t\t}
\t</style>

\t<h1>Activities</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Adresse</th>
\t\t\t\t<th>NumContact</th>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Type</th>
\t\t\t\t<th>Price</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 34
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "adresse", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "numContact", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img style=\"height: 100px; object-fit: cover;\" class=\"img-fluid\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["activity"], "image", [], "any", false, false, false, 39))), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 41
            ((twig_get_attribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 41), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "price", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activities_show", ["idActivity" => twig_get_attribute($this->env, $this->source, $context["activity"], "idActivity", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activities_edit", ["idActivity" => twig_get_attribute($this->env, $this->source, $context["activity"], "idActivity", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t\t";
            // line 47
            echo twig_include($this->env, $context, "activitiesAdmin/_delete_form.html.twig");
            echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 51
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t</tbody>
\t</table>

\t<div id=\"calendrier\"></div>


\t<script>
\t\twindow.onload = () => {
let calendarElt = document.querySelector(\"#calendrier\")
let calendar = new FullCalendar.Calendar(calendarElt, {
initialView: 'dayGridMonth',
locale: 'fr',
timeZone: 'Europe/Paris',
headerToolbar: {
start: 'prev,next today',
center: 'title',
end: 'dayGridMonth,timeGridWeek'
},
events: ";
        // line 73
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 73, $this->source); })());
        echo ",
editable: true,
selectable: true,
nowIndicator: true,
dayMaxEvents: false,
navLinks: true,
eventClick: function (info) {
window.location.href = info.event.url;
},
select: function (info) {
window.location.href = \"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activities_new");
        echo "\";
}
})
calendar.on('eventChange', (e) => {
let url = `/admin/activities/api/\${
e.event.id
}/edit`
console.log(e.event.id)
let donnees = {
\"id\": e.event.id,
\"type\": e.event.title,
\"date\": e.event.start,
\"cours\": e.event.title,
\"title\": e.event.title,
\"description\": e.event.extendedProps.type,
\"start\": e.event.start,
\"end\": e.event.start,
\"backgroundColor\": e.event.backgroundColor,
\"borderColor\": e.event.borderColor,
\"textColor\": e.event.textColor,
\"allDay\": e.event.allDay
}

let xhr = new XMLHttpRequest
xhr.open(\"PUT\", url)
xhr.send(JSON.stringify(donnees))
})
calendar.render()
}
\t</script>


\t<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>

\t<a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activities_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "activitiesAdmin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 117,  221 => 83,  208 => 73,  188 => 55,  179 => 51,  162 => 47,  158 => 46,  154 => 45,  149 => 43,  145 => 42,  141 => 41,  136 => 39,  131 => 37,  127 => 36,  123 => 35,  120 => 34,  102 => 33,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-back.html.twig\" %}

{% block title %}
\tActivities
{% endblock %}

{% block pagewrapper %}

\t<style>
\t\t#calendrier {
\t\t\twidth: 80%;
\t\t\tmargin: auto;
\t\t\theight: 500px;
\t\t}
\t</style>

\t<h1>Activities</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Adresse</th>
\t\t\t\t<th>NumContact</th>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Type</th>
\t\t\t\t<th>Price</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for activity in activities %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ activity.description }}</td>
\t\t\t\t\t<td>{{ activity.adresse }}</td>
\t\t\t\t\t<td>{{ activity.numContact }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img style=\"height: 100px; object-fit: cover;\" class=\"img-fluid\" src=\"{{ asset('/uploads/' ~ activity.image) }}\" alt=\"\">
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{ activity.date ? activity.date|date('d-m-Y') : '' }}</td>
\t\t\t\t\t<td>{{ activity.type }}</td>
\t\t\t\t\t<td>{{ activity.price }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('admin_activities_show', {'idActivity': activity.idActivity}) }}\">show</a>
\t\t\t\t\t\t<a href=\"{{ path('admin_activities_edit', {'idActivity': activity.idActivity}) }}\">edit</a>
\t\t\t\t\t\t{{ include('activitiesAdmin/_delete_form.html.twig') }}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<div id=\"calendrier\"></div>


\t<script>
\t\twindow.onload = () => {
let calendarElt = document.querySelector(\"#calendrier\")
let calendar = new FullCalendar.Calendar(calendarElt, {
initialView: 'dayGridMonth',
locale: 'fr',
timeZone: 'Europe/Paris',
headerToolbar: {
start: 'prev,next today',
center: 'title',
end: 'dayGridMonth,timeGridWeek'
},
events: {{ data|raw }},
editable: true,
selectable: true,
nowIndicator: true,
dayMaxEvents: false,
navLinks: true,
eventClick: function (info) {
window.location.href = info.event.url;
},
select: function (info) {
window.location.href = \"{{ path('admin_activities_new') }}\";
}
})
calendar.on('eventChange', (e) => {
let url = `/admin/activities/api/\${
e.event.id
}/edit`
console.log(e.event.id)
let donnees = {
\"id\": e.event.id,
\"type\": e.event.title,
\"date\": e.event.start,
\"cours\": e.event.title,
\"title\": e.event.title,
\"description\": e.event.extendedProps.type,
\"start\": e.event.start,
\"end\": e.event.start,
\"backgroundColor\": e.event.backgroundColor,
\"borderColor\": e.event.borderColor,
\"textColor\": e.event.textColor,
\"allDay\": e.event.allDay
}

let xhr = new XMLHttpRequest
xhr.open(\"PUT\", url)
xhr.send(JSON.stringify(donnees))
})
calendar.render()
}
\t</script>


\t<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>

\t<a href=\"{{ path('admin_activities_new') }}\">Create new</a>
{% endblock %}
", "activitiesAdmin/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\activitiesAdmin\\index.html.twig");
    }
}
