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
class __TwigTemplate_21d5049c9a08bda3d85ddc09a59a3793 extends Template
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
    
    <h1>Activities</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Description</th>
                <th>Adresse</th>
                <th>NumContact</th>
                <th>Image</th>
                <th>Date</th>
                <th>Type</th>
                <th>Price</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
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
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "adresse", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "numContact", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "image", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            ((twig_get_attribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 39), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "price", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activities_show", ["idActivity" => twig_get_attribute($this->env, $this->source, $context["activity"], "idActivity", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activities_edit", ["idActivity" => twig_get_attribute($this->env, $this->source, $context["activity"], "idActivity", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">edit</a>
    ";
            // line 45
            echo twig_include($this->env, $context, "activitiesAdmin/_delete_form.html.twig");
            echo "
                </td>
            </tr>
        ";
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
            // line 49
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>
    
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
        // line 71
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 71, $this->source); })());
        echo ",
                editable: true,
                selectable: true,
                nowIndicator: true,
                dayMaxEvents: false,
                navLinks: true,
                eventClick: function(info) {
                    window.location.href = info.event.url;
                },
                select: function(info) {
                    window.location.href = \"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activities_new");
        echo "\";
                },
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


    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>

    <a href=\"";
        // line 115
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
        return array (  256 => 115,  219 => 81,  206 => 71,  186 => 53,  177 => 49,  160 => 45,  156 => 44,  152 => 43,  147 => 41,  143 => 40,  139 => 39,  135 => 38,  131 => 37,  127 => 36,  123 => 35,  120 => 34,  102 => 33,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
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
    
    <h1>Activities</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Description</th>
                <th>Adresse</th>
                <th>NumContact</th>
                <th>Image</th>
                <th>Date</th>
                <th>Type</th>
                <th>Price</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for activity in activities %}
            <tr>
                <td>{{ activity.description }}</td>
                <td>{{ activity.adresse }}</td>
                <td>{{ activity.numContact }}</td>
                <td>{{ activity.image }}</td>
                <td>{{ activity.date ? activity.date|date('d-m-Y') : '' }}</td>
                <td>{{ activity.type }}</td>
                <td>{{ activity.price }}</td>
                <td>
                    <a href=\"{{ path('admin_activities_show', {'idActivity': activity.idActivity}) }}\">show</a>
                    <a href=\"{{ path('admin_activities_edit', {'idActivity': activity.idActivity}) }}\">edit</a>
    {{ include('activitiesAdmin/_delete_form.html.twig') }}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    
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
                eventClick: function(info) {
                    window.location.href = info.event.url;
                },
                select: function(info) {
                    window.location.href = \"{{ path('admin_activities_new') }}\";
                },
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


    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>

    <a href=\"{{ path('admin_activities_new') }}\">Create new</a>
{% endblock %}
", "activitiesAdmin/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\activitiesAdmin\\index.html.twig");
    }
}
