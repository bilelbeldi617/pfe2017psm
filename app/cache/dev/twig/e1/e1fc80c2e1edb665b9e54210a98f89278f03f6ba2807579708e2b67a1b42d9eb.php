<?php

/* baseForEnseignant.html.twig */

class __TwigTemplate_8c9bf1761e532b0fe6937b6e483e2c5a580b3dc50e0d39180836a5cc18a19cb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_960184e324841ec918ade870770fe0b83b22097d043c3f3560ceb6dc76eb356b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960184e324841ec918ade870770fe0b83b22097d043c3f3560ceb6dc76eb356b->enter($__internal_960184e324841ec918ade870770fe0b83b22097d043c3f3560ceb6dc76eb356b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";

        $__internal_960184e324841ec918ade870770fe0b83b22097d043c3f3560ceb6dc76eb356b->leave($__internal_960184e324841ec918ade870770fe0b83b22097d043c3f3560ceb6dc76eb356b_prof);

    }

    // line 6

    public function block_script($context, array $blocks = array())
    {
        $__internal_fb94597c676cc02932b042f9f37c6cec0d958b4b20df1cac0f2515e68dbae144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb94597c676cc02932b042f9f37c6cec0d958b4b20df1cac0f2515e68dbae144->enter($__internal_fb94597c676cc02932b042f9f37c6cec0d958b4b20df1cac0f2515e68dbae144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));


        $__internal_fb94597c676cc02932b042f9f37c6cec0d958b4b20df1cac0f2515e68dbae144->leave($__internal_fb94597c676cc02932b042f9f37c6cec0d958b4b20df1cac0f2515e68dbae144_prof);

    }

    // line 50

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_927f242639771ae52f57e3a8c59159e391e8baf96b69c797b97c144bd4b6854d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927f242639771ae52f57e3a8c59159e391e8baf96b69c797b97c144bd4b6854d->enter($__internal_927f242639771ae52f57e3a8c59159e391e8baf96b69c797b97c144bd4b6854d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 569
        echo "

                    ";

        $__internal_927f242639771ae52f57e3a8c59159e391e8baf96b69c797b97c144bd4b6854d->leave($__internal_927f242639771ae52f57e3a8c59159e391e8baf96b69c797b97c144bd4b6854d_prof);

    }

    // line 568

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(782 => 569, 776 => 568, 765 => 50, 753 => 6, 743 => 1082, 737 => 624, 733 => 623, 727 => 620, 723 => 619, 719 => 618, 715 => 617, 711 => 616, 707 => 615, 702 => 614, 692 => 603, 659 => 572, 657 => 568, 618 => 532, 606 => 523, 578 => 498, 566 => 489, 538 => 464, 507 => 436, 484 => 416, 117 => 51, 115 => 50, 106 => 44, 100 => 41, 96 => 40, 88 => 35, 79 => 29, 73 => 26, 69 => 25, 64 => 23, 58 => 20, 52 => 17, 44 => 12, 40 => 11, 34 => 7, 32 => 6, 25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <meta charset=\"utf-8\" />
    <title>{% block title %} {% endblock %}
    </title>

    <meta name=\"description\" content=\"overview &amp; stats\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}\" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fonts.googleapis.com.css') }}\" />

    <!-- ace styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/ace.min.css') }}\" class=\"ace-main-stylesheet\" id=\"main-ace-style\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/ace-part2.min.css') }}\" class=\"ace-main-stylesheet\" />
    <![endif]-->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/ace-skins.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/ace-rtl.min.css') }}\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/ace-ie.min.css') }}\" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src=\"{{ asset('assets/js/ace-extra.min.js') }}\"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src=\"{{ asset('assets/js/html5shiv.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/respond.min.js') }}\"></script>
    <![endif]-->

    <script src=\"{{ asset('assets/js/jquery-2.1.4.min.js') }}\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css\"/>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js\"></script>



    {% block script %}{% endblock %}
</head>

<body class=\"no-skin\">
<div id=\"navbar\" class=\"navbar navbar-default          ace-save-state\">
<div class=\"navbar-container ace-save-state\" id=\"navbar-container\">
<button type=\"button\" class=\"navbar-toggle menu-toggler pull-left\" id=\"menu-toggler\" data-target=\"#sidebar\">
    <span class=\"sr-only\">Toggle sidebar</span>

    <span class=\"icon-bar\"></span>

    <span class=\"icon-bar\"></span>

    <span class=\"icon-bar\"></span>
</button>

<div class=\"navbar-header pull-left\">
    <a href=\"index.html\" class=\"navbar-brand\">
        <small>
            <i class=\"fa fa-leaf\"></i>
            Prima School Manager
        </small>
    </a>
</div>

<div class=\"navbar-buttons navbar-header pull-right\" role=\"navigation\">
<ul class=\"nav ace-nav\">
<li class=\"grey dropdown-modal\">
    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
        <i class=\"ace-icon fa fa-tasks\"></i>
        <span class=\"badge badge-grey\">4</span>
    </a>

    <ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">
        <li class=\"dropdown-header\">
            <i class=\"ace-icon fa fa-check\"></i>
            4 Tasks to complete
        </li>

        <li class=\"dropdown-content\">
            <ul class=\"dropdown-menu dropdown-navbar\">
                <li>
                    <a href=\"#\">
                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Software Update</span>
                            <span class=\"pull-right\">65%</span>
                        </div>

                        <div class=\"progress progress-mini\">
                            <div style=\"width:65%\" class=\"progress-bar\"></div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href=\"#\">
                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Hardware Upgrade</span>
                            <span class=\"pull-right\">35%</span>
                        </div>

                        <div class=\"progress progress-mini\">
                            <div style=\"width:35%\" class=\"progress-bar progress-bar-danger\"></div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href=\"#\">
                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Unit Testing</span>
                            <span class=\"pull-right\">15%</span>
                        </div>

                        <div class=\"progress progress-mini\">
                            <div style=\"width:15%\" class=\"progress-bar progress-bar-warning\"></div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href=\"#\">
                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Bug Fixes</span>
                            <span class=\"pull-right\">90%</span>
                        </div>

                        <div class=\"progress progress-mini progress-striped active\">
                            <div style=\"width:90%\" class=\"progress-bar progress-bar-success\"></div>
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class=\"dropdown-footer\">
            <a href=\"#\">
                See tasks with details
                <i class=\"ace-icon fa fa-arrow-right\"></i>
            </a>
        </li>
    </ul>
</li>

<li class=\"purple dropdown-modal\">
    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
        <i class=\"ace-icon fa fa-bell icon-animated-bell\"></i>
        <span class=\"badge badge-important\">8</span>
    </a>

    <ul class=\"dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close\">
        <li class=\"dropdown-header\">
            <i class=\"ace-icon fa fa-exclamation-triangle\"></i>
            8 Notifications
        </li>

        <li class=\"dropdown-content\">
            <ul class=\"dropdown-menu dropdown-navbar navbar-pink\">
                <li>
                    <a href=\"#\">
                        <div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-pink fa fa-comment\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Comments
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                            <span class=\"pull-right badge badge-info\">+12</span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href=\"#\">
                        <i class=\"btn btn-xs btn-primary fa fa-user\"></i>
                        Bob just signed up as an editor ...
                    </a>
                </li>

                <li>
                    <a href=\"#\">
                        <div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-success fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Orders
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                            <span class=\"pull-right badge badge-success\">+8</span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href=\"#\">
                        <div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-info fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFollowers
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                            <span class=\"pull-right badge badge-info\">+11</span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class=\"dropdown-footer\">
            <a href=\"#\">
                See all notifications
                <i class=\"ace-icon fa fa-arrow-right\"></i>
            </a>
        </li>
    </ul>
</li>

<li class=\"green dropdown-modal\">
    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
        <i class=\"ace-icon fa fa-envelope icon-animated-vertical\"></i>
        <span class=\"badge badge-success\">5</span>
    </a>

    <ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">
        <li class=\"dropdown-header\">
            <i class=\"ace-icon fa fa-envelope-o\"></i>
            5 Messages
        </li>

        <li class=\"dropdown-content\">
            <ul class=\"dropdown-menu dropdown-navbar\">
                <li>
                    <a href=\"#\" class=\"clearfix\">
                        <img src=\"\" class=\"msg-photo\" alt=\"Alex's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Alex:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque penatibus et auctor ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>a moment ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    </a>
                </li>

                <li>
                    <a href=\"#\" class=\"clearfix\">
                        <img src=\"\" class=\"msg-photo\" alt=\"Susan's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Susan:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id ligula porta felis euismod ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>20 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    </a>
                </li>

                <li>
                    <a href=\"#\" class=\"clearfix\">
                        <img src=\"\" class=\"msg-photo\" alt=\"Bob's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Bob:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNullam quis risus eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3:15 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    </a>
                </li>

                <li>
                    <a href=\"#\" class=\"clearfix\">
                        <img src=\"\" class=\"msg-photo\" alt=\"Kate's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Kate:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>1:33 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    </a>
                </li>

                <li>
                    <a href=\"#\" class=\"clearfix\">
                        <img src=\"\" class=\"msg-photo\" alt=\"Fred's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Fred:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id penatibus et auctor  ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>10:09 am</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class=\"dropdown-footer\">
            <a href=\"inbox.html\">
                See all messages
                <i class=\"ace-icon fa fa-arrow-right\"></i>
            </a>
        </li>
    </ul>
</li>

<li class=\"light-blue dropdown-modal\">
    <a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
        <img class=\"nav-user-photo\" src=\"\" alt=\"Jason's Photo\" />
\t\t\t\t\t\t\t\t<span class=\"user-info\">
\t\t\t\t\t\t\t\t\t<small>Bienvenu</small>

\t\t\t\t\t\t\t\t</span>

        <i class=\"ace-icon fa fa-caret-down\"></i>
    </a>

    <ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">
        <li>
            <a href=\"#\">
                <i class=\"ace-icon fa fa-cog\"></i>
                Settings
            </a>
        </li>

        <li>
            <a href=\"profile.html\">
                <i class=\"ace-icon fa fa-user\"></i>
                Profile
            </a>
        </li>

        <li class=\"divider\"></li>

        <li>
            <a href=\"#\">
                <i class=\"ace-icon fa fa-power-off\"></i>
                Logout
            </a>
        </li>
    </ul>
</li>
</ul>
</div>
</div><!-- /.navbar-container -->
</div>

<div class=\"main-container ace-save-state\" id=\"main-container\">
<script type=\"text/javascript\">
    try{ace.settings.loadState('main-container')}catch(e){}
</script>

<div id=\"sidebar\" class=\"sidebar responsive ace-save-state\">
<script type=\"text/javascript\">
    try{ace.settings.loadState('sidebar')}catch(e){}
</script>

<div class=\"sidebar-shortcuts\" id=\"sidebar-shortcuts\">
    <div class=\"sidebar-shortcuts-large\" id=\"sidebar-shortcuts-large\">
        <button class=\"btn btn-success\">
            <i class=\"ace-icon fa fa-signal\"></i>
        </button>

        <button class=\"btn btn-info\">
            <i class=\"ace-icon fa fa-pencil\"></i>
        </button>

        <button class=\"btn btn-warning\">
            <i class=\"ace-icon fa fa-users\"></i>
        </button>

        <button class=\"btn btn-danger\">
            <i class=\"ace-icon fa fa-cogs\"></i>
        </button>
    </div>

    <div class=\"sidebar-shortcuts-mini\" id=\"sidebar-shortcuts-mini\">
        <span class=\"btn btn-success\"></span>

        <span class=\"btn btn-info\"></span>

        <span class=\"btn btn-warning\"></span>

        <span class=\"btn btn-danger\"></span>
    </div>
</div><!-- /.sidebar-shortcuts -->

<ul class=\"nav nav-list\">

<li class=\"\">
    <a href=\"{{ path('dashEnseignant') }}\">
        <i class=\"menu-icon fa fa-home\"></i>
        <span class=\"menu-text\"> Accueil </span>
    </a>

    <b class=\"arrow\"></b>
</li>

    <li class=\"\">
        <a href=\"#\" class=\"dropdown-toggle\">
            <i class=\"menu-icon fa fa-book\"></i>
            <span class=\"menu-text\">Cahier de texte </span>

            <b class=\"arrow fa fa-angle-down\"></b>
        </a>

        <b class=\"arrow\"></b>

        <ul class=\"submenu nav-hide\" style=\"display: none;\">
            <li class=\"\">
                <a href=\"{{ path('contacterParent') }}\">
                    <i class=\"menu-icon fa fa-caret-right\"></i>
                    Saisir
                </a>

                <b class=\"arrow\"></b>
            </li>

        </ul>


    </li>




    <li class=\"\">
        <a href=\"#\" class=\"dropdown-toggle\">
            <i class=\"menu-icon fa fa-phone\"></i>
            <span class=\"menu-text\">Contacter Parents </span>

            <b class=\"arrow fa fa-angle-down\"></b>
        </a>

        <b class=\"arrow\"></b>

        <ul class=\"submenu nav-hide\" style=\"display: none;\">
            <li class=\"\">
                <a href=\"{{ path('contacterParent') }}\">
                    <i class=\"menu-icon fa fa-caret-right\"></i>
                    Contacter Parents
                </a>

                <b class=\"arrow\"></b>
            </li>

        </ul>


    </li>

    <li class=\"\">
        <a href=\"#\" class=\"dropdown-toggle\">
            <i class=\"menu-icon fa fa-users\"></i>
            <span class=\"menu-text\">Elèves </span>

            <b class=\"arrow fa fa-angle-down\"></b>
        </a>

        <b class=\"arrow\"></b>

        <ul class=\"submenu nav-hide\" style=\"display: none;\">
            <li class=\"\">
                <a href=\"{{ path('contacterParent') }}\">
                    <i class=\"menu-icon fa fa-caret-right\"></i>
                    Notifier absence
                </a>

                <b class=\"arrow\"></b>
            </li>

            <li class=\"\">
                <a href=\"{{ path('inserernotes') }}\">
                    <i class=\"menu-icon fa fa-caret-right\"></i>
                    Notes
                </a>

                <b class=\"arrow\"></b>
            </li>

        </ul>


    </li>

    <li class=\"\">
        <a href=\"#\" class=\"dropdown-toggle\">
            <i class=\"menu-icon fa fa-file-text\"></i>
            <span class=\"menu-text\">Examens </span>

            <b class=\"arrow fa fa-angle-down\"></b>
        </a>

        <b class=\"arrow\"></b>

        <ul class=\"submenu nav-hide\" style=\"display: none;\">
            <li class=\"\">
                <a href=\"{{ path('creerExamen') }}\">
                    <i class=\"menu-icon fa fa-caret-right\"></i>
                    Créer un examen
                </a>

                <b class=\"arrow\"></b>
            </li>

            <li class=\"\">
                <a href=\"{{ path('listerExamens') }}\">
                    <i class=\"menu-icon fa fa-caret-right\"></i>
                    Lister les examens
                </a>

                <b class=\"arrow\"></b>
            </li>
        </ul>


    </li>









</ul><!-- /.nav-list -->

<div class=\"sidebar-toggle sidebar-collapse\" id=\"sidebar-collapse\">
    <i id=\"sidebar-toggle-icon\" class=\"ace-icon fa fa-angle-double-left ace-save-state\" data-icon1=\"ace-icon fa fa-angle-double-left\" data-icon2=\"ace-icon fa fa-angle-double-right\"></i>
</div>
</div>

<div class=\"main-content\">
    <div class=\"main-content-inner\">

        <div class=\"page-content\">


            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <!-- Contenu de la page -->
                    {% block mainContent %}


                    {% endblock %}


                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

<div class=\"footer\">
    <div class=\"footer-inner\">
        <div class=\"footer-content\">
\t\t\t\t\t\t<span class=\"bigger-120\">
\t\t\t\t\t\t\t<span class=\"blue bolder\">PrimaSchoolManager</span>
\t\t\t\t\t\t\tApplication &copy;
\t\t\t\t\t\t</span>

            &nbsp; </div>
    </div>
</div>

<a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
    <i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
</a>
</div><!-- /.main-container -->

<!-- basic scripts -->


<script type=\"text/javascript\">
    if('ontouchstart' in document.documentElement) document.write(\"<script src='assets/js/jquery.mobile.custom.min.js'>\"+\"<\"+\"/script>\");
</script>
<script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src=\"assets/js/excanvas.min.js\"></script>
<![endif]-->
{#<script src=\"{{ asset('assets/js/dataTables.buttons.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/dataTables.select.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.dataTables.bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.dataTables.min.js') }}\"></script>#}
<script src=\"{{ asset('assets/js/jquery-ui.custom.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.ui.touch-punch.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.easypiechart.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.sparkline.index.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.flot.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.flot.pie.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.flot.resize.min.js') }}\"></script>

<!-- ace scripts -->
<script src=\"{{ asset('assets/js/ace-elements.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/ace.min.js') }}\"></script>

<!-- inline scripts related to this page -->
{#
<script type=\"text/javascript\">
jQuery(function(\$) {
    \$('.easy-pie-chart.percentage').each(function(){
        var \$box = \$(this).closest('.infobox');
        var barColor = \$(this).data('color') || (!\$box.hasClass('infobox-dark') ? \$box.css('color') : 'rgba(255,255,255,0.95)');
        var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
        var size = parseInt(\$(this).data('size')) || 50;
        \$(this).easyPieChart({
            barColor: barColor,
            trackColor: trackColor,
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: parseInt(size/10),
            animate: ace.vars['old_ie'] ? false : 1000,
            size: size
        });
    })

    \$('.sparkline').each(function(){
        var \$box = \$(this).closest('.infobox');
        var barColor = !\$box.hasClass('infobox-dark') ? \$box.css('color') : '#FFF';
        \$(this).sparkline('html',
                {
                    tagValuesAttribute:'data-values',
                    type: 'bar',
                    barColor: barColor ,
                    chartRangeMin:\$(this).data('min') || 0
                });
    });


    //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
    //but sometimes it brings up errors with normal resize event handlers
    \$.resize.throttleWindow = false;

    var placeholder = \$('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
    var data = [
        { label: \"social networks\",  data: 38.7, color: \"#68BC31\"},
        { label: \"search engines\",  data: 24.5, color: \"#2091CF\"},
        { label: \"ad campaigns\",  data: 8.2, color: \"#AF4E96\"},
        { label: \"direct traffic\",  data: 18.6, color: \"#DA5430\"},
        { label: \"other\",  data: 10, color: \"#FEE074\"}
    ]
    function drawPieChart(placeholder, data, position) {
        \$.plot(placeholder, data, {
            series: {
                pie: {
                    show: true,
                    tilt:0.8,
                    highlight: {
                        opacity: 0.25
                    },
                    stroke: {
                        color: '#fff',
                        width: 2
                    },
                    startAngle: 2
                }
            },
            legend: {
                show: true,
                position: position || \"ne\",
                labelBoxBorderColor: null,
                margin:[-30,15]
            }
            ,
            grid: {
                hoverable: true,
                clickable: true
            }
        })
    }
    drawPieChart(placeholder, data);

    /**
     we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
     so that's not needed actually.
     */
    placeholder.data('chart', data);
    placeholder.data('draw', drawPieChart);


    //pie chart tooltip example
    var \$tooltip = \$(\"<div class='tooltip top in'><div class='tooltip-inner'></div></div>\").hide().appendTo('body');
    var previousPoint = null;

    placeholder.on('plothover', function (event, pos, item) {
        if(item) {
            if (previousPoint != item.seriesIndex) {
                previousPoint = item.seriesIndex;
                var tip = item.series['label'] + \" : \" + item.series['percent']+'%';
                \$tooltip.show().children(0).text(tip);
            }
            \$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
        } else {
            \$tooltip.hide();
            previousPoint = null;
        }

    });

    /////////////////////////////////////
    \$(document).one('ajaxloadstart.page', function(e) {
        \$tooltip.remove();
    });




    var d1 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.5) {
        d1.push([i, Math.sin(i)]);
    }

    var d2 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.5) {
        d2.push([i, Math.cos(i)]);
    }

    var d3 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.2) {
        d3.push([i, Math.tan(i)]);
    }


    var sales_charts = \$('#sales-charts').css({'width':'100%' , 'height':'220px'});
    \$.plot(\"#sales-charts\", [
        { label: \"Domains\", data: d1 },
        { label: \"Hosting\", data: d2 },
        { label: \"Services\", data: d3 }
    ], {
        hoverable: true,
        shadowSize: 0,
        series: {
            lines: { show: true },
            points: { show: true }
        },
        xaxis: {
            tickLength: 0
        },
        yaxis: {
            ticks: 10,
            min: -2,
            max: 2,
            tickDecimals: 3
        },
        grid: {
            backgroundColor: { colors: [ \"#fff\", \"#fff\" ] },
            borderWidth: 1,
            borderColor:'#555'
        }
    });


    \$('#recent-box [data-rel=\"tooltip\"]').tooltip({placement: tooltip_placement});
    function tooltip_placement(context, source) {
        var \$source = \$(source);
        var \$parent = \$source.closest('.tab-content')
        var off1 = \$parent.offset();
        var w1 = \$parent.width();

        var off2 = \$source.offset();
        //var w2 = \$source.width();

        if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
        return 'left';
    }


    \$('.dialogs,.comments').ace_scroll({
        size: 300
    });


    //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
    //so disable dragging when clicking on label
    var agent = navigator.userAgent.toLowerCase();
    if(ace.vars['touch'] && ace.vars['android']) {
        \$('#tasks').on('touchstart', function(e){
            var li = \$(e.target).closest('#tasks li');
            if(li.length == 0)return;
            var label = li.find('label.inline').get(0);
            if(label == e.target || \$.contains(label, e.target)) e.stopImmediatePropagation() ;
        });
    }

    \$('#tasks').sortable({
                opacity:0.8,
                revert:true,
                forceHelperSize:true,
                placeholder: 'draggable-placeholder',
                forcePlaceholderSize:true,
                tolerance:'pointer',
                stop: function( event, ui ) {
                    //just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                    \$(ui.item).css('z-index', 'auto');
                }
            }
    );
    \$('#tasks').disableSelection();
    \$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
        if(this.checked) \$(this).closest('li').addClass('selected');
        else \$(this).closest('li').removeClass('selected');
    });


    //show the dropdowns on top or bottom depending on window height and menu position
    \$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
        var offset = \$(this).offset();

        var \$w = \$(window)
        if (offset.top > \$w.scrollTop() + \$w.innerHeight() - 100)
            \$(this).addClass('dropup');
        else \$(this).removeClass('dropup');
    });

})
</script>

<script type=\"text/javascript\">
    jQuery(function(\$) {
        //initiate dataTables plugin
        var myTable =
            \$('#dynamic-table')
            //.wrap(\"<div class='dataTables_borderWrap' />\")   //if you are applying horizontal scrolling (sScrollX)
                .DataTable( {
                    bAutoWidth: false,
                    \"aoColumns\": [
                        { \"bSortable\": false },
                        null, null,null, null, null,
                        { \"bSortable\": false }
                    ],
                    \"aaSorting\": [],


                    //\"bProcessing\": true,
                    //\"bServerSide\": true,
                    //\"sAjaxSource\": \"http://127.0.0.1/table.php\"\t,

                    //,
                    //\"sScrollY\": \"200px\",
                    //\"bPaginate\": false,

                    //\"sScrollX\": \"100%\",
                    //\"sScrollXInner\": \"120%\",
                    //\"bScrollCollapse\": true,
                    //Note: if you are applying horizontal scrolling (sScrollX) on a \".table-bordered\"
                    //you may want to wrap the table inside a \"div.dataTables_borderWrap\" element

                    //\"iDisplayLength\": 50


                    select: {
                        style: 'multi'
                    }
                } );



        \$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

        new \$.fn.dataTable.Buttons( myTable, {
            buttons: [
                {
                    \"extend\": \"colvis\",
                    \"text\": \"<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>\",
                    \"className\": \"btn btn-white btn-primary btn-bold\",
                    columns: ':not(:first):not(:last)'
                },
                {
                    \"extend\": \"copy\",
                    \"text\": \"<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>\",
                    \"className\": \"btn btn-white btn-primary btn-bold\"
                },
                {
                    \"extend\": \"csv\",
                    \"text\": \"<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>\",
                    \"className\": \"btn btn-white btn-primary btn-bold\"
                },
                {
                    \"extend\": \"excel\",
                    \"text\": \"<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>\",
                    \"className\": \"btn btn-white btn-primary btn-bold\"
                },
                {
                    \"extend\": \"pdf\",
                    \"text\": \"<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>\",
                    \"className\": \"btn btn-white btn-primary btn-bold\"
                },
                {
                    \"extend\": \"print\",
                    \"text\": \"<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>\",
                    \"className\": \"btn btn-white btn-primary btn-bold\",
                    autoPrint: false,
                    message: 'This print was produced using the Print button for DataTables'
                }
            ]
        } );
        myTable.buttons().container().appendTo( \$('.tableTools-container') );

        //style the message box
        var defaultCopyAction = myTable.button(1).action();
        myTable.button(1).action(function (e, dt, button, config) {
            defaultCopyAction(e, dt, button, config);
            \$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
        });


        var defaultColvisAction = myTable.button(0).action();
        myTable.button(0).action(function (e, dt, button, config) {

            defaultColvisAction(e, dt, button, config);


            if(\$('.dt-button-collection > .dropdown-menu').length == 0) {
                \$('.dt-button-collection')
                    .wrapInner('<ul class=\"dropdown-menu dropdown-light dropdown-caret dropdown-caret\" />')
                    .find('a').attr('href', '#').wrap(\"<li />\")
            }
            \$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
        });

        ////

        setTimeout(function() {
            \$(\$('.tableTools-container')).find('a.dt-button').each(function() {
                var div = \$(this).find(' > div').first();
                if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
                else \$(this).tooltip({container: 'body', title: \$(this).text()});
            });
        }, 500);





        myTable.on( 'select', function ( e, dt, type, index ) {
            if ( type === 'row' ) {
                \$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
            }
        } );
        myTable.on( 'deselect', function ( e, dt, type, index ) {
            if ( type === 'row' ) {
                \$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
            }
        } );




        /////////////////////////////////
        //table checkboxes
        \$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

        //select/deselect all rows according to table header checkbox
        \$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
            var th_checked = this.checked;//checkbox inside \"TH\" table header

            \$('#dynamic-table').find('tbody > tr').each(function(){
                var row = this;
                if(th_checked) myTable.row(row).select();
                else  myTable.row(row).deselect();
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        \$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
            var row = \$(this).closest('tr').get(0);
            if(this.checked) myTable.row(row).deselect();
            else myTable.row(row).select();
        });



        \$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
            e.stopImmediatePropagation();
            e.stopPropagation();
            e.preventDefault();
        });



        //And for the first simple table, which doesn't have TableTools or dataTables
        //select/deselect all rows according to table header checkbox
        var active_class = 'active';
        \$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
            var th_checked = this.checked;//checkbox inside \"TH\" table header

            \$(this).closest('table').find('tbody > tr').each(function(){
                var row = this;
                if(th_checked) \$(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                else \$(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        \$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
            var \$row = \$(this).closest('tr');
            if(\$row.is('.detail-row ')) return;
            if(this.checked) \$row.addClass(active_class);
            else \$row.removeClass(active_class);
        });



        /********************************/
        //add tooltip for small view action buttons in dropdown menu
        \$('[data-rel=\"tooltip\"]').tooltip({placement: tooltip_placement});

        //tooltip placement on right or left
        function tooltip_placement(context, source) {
            var \$source = \$(source);
            var \$parent = \$source.closest('table')
            var off1 = \$parent.offset();
            var w1 = \$parent.width();

            var off2 = \$source.offset();
            //var w2 = \$source.width();

            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }




        /***************/
        \$('.show-details-btn').on('click', function(e) {
            e.preventDefault();
            \$(this).closest('tr').next().toggleClass('open');
            \$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
        });
        /***************/





        /**
         //add horizontal scrollbars to a simple table
         \$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style=\"width: 1000px;\" />').parent().ace_scroll(
         {
           horizontal: true,
           styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
           size: 2000,
           mouseWheelLock: true
         }
         ).css('padding-top', '12px');
         */


    })
</script>
#}

</body>
</html>
", "baseForEnseignant.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\app\\Resources\\views\\baseForEnseignant.html.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f51c73c8d2119044a2b08c2a919aa59f3884b413813b0244998e9ab49afaa329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51c73c8d2119044a2b08c2a919aa59f3884b413813b0244998e9ab49afaa329->enter($__internal_f51c73c8d2119044a2b08c2a919aa59f3884b413813b0244998e9ab49afaa329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseForEnseignant.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "    </title>

    <meta name=\"description\" content=\"overview &amp; stats\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/4.5.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/fonts.googleapis.com.css"), "html", null, true);
        echo "\" />

    <!-- ace styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace.min.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" id=\"main-ace-style\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace-part2.min.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" />
    <![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace-ie.min.css"), "html", null, true);
        echo "\" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css\"/>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js\"></script>



    ";
        // line 50
        $this->displayBlock('script', $context, $blocks);
        // line 51
        echo "</head>

<body class=\"no-skin\">
<div id=\"navbar\" class=\"navbar navbar-default          ace-save-state\">
<div class=\"navbar-container ace-save-state\" id=\"navbar-container\">
<button type=\"button\" class=\"navbar-toggle menu-toggler pull-left\" id=\"menu-toggler\" data-target=\"#sidebar\">
    <span class=\"sr-only\">Toggle sidebar</span>

    <span class=\"icon-bar\"></span>

    <span class=\"icon-bar\"></span>

    <span class=\"icon-bar\"></span>
</button>

<div class=\"navbar-header pull-left\">
    <a href=\"index.html\" class=\"navbar-brand\">
        <small>
            <i class=\"fa fa-leaf\"></i>
            Prima School Manager
        </small>
    </a>
</div>

<div class=\"navbar-buttons navbar-header pull-right\" role=\"navigation\">
<ul class=\"nav ace-nav\">
<li class=\"grey dropdown-modal\">
    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
        <i class=\"ace-icon fa fa-tasks\"></i>
        <span class=\"badge badge-grey\">4</span>
    </a>

    <ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">
        <li class=\"dropdown-header\">
            <i class=\"ace-icon fa fa-check\"></i>
            4 Tasks to complete
        </li>

        <li class=\"dropdown-content\">
            <ul class=\"dropdown-menu dropdown-navbar\">
                <li>
                    <a href=\"#\">
                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Software Update</span>
                            <span class=\"pull-right\">65%</span>
                        </div>

                        <div class=\"progress progress-mini\">
                            <div style=\"width:65%\" class=\"progress-bar\"></div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href=\"#\">
                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Hardware Upgrade</span>
                            <span class=\"pull-right\">35%</span>
                        </div>

                        <div class=\"progress progress-mini\">
                            <div style=\"width:35%\" class=\"progress-bar progress-bar-danger\"></div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href=\"#\">
                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Unit Testing</span>
                            <span class=\"pull-right\">15%</span>
                        </div>

                        <div class=\"progress progress-mini\">
                            <div style=\"width:15%\" class=\"progress-bar progress-bar-warning\"></div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href=\"#\">
                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Bug Fixes</span>
                            <span class=\"pull-right\">90%</span>
                        </div>

                        <div class=\"progress progress-mini progress-striped active\">
                            <div style=\"width:90%\" class=\"progress-bar progress-bar-success\"></div>
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class=\"dropdown-footer\">
            <a href=\"#\">
                See tasks with details
                <i class=\"ace-icon fa fa-arrow-right\"></i>
            </a>
        </li>
    </ul>
</li>

<li class=\"purple dropdown-modal\">
    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
        <i class=\"ace-icon fa fa-bell icon-animated-bell\"></i>
        <span class=\"badge badge-important\">8</span>
    </a>

    <ul class=\"dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close\">
        <li class=\"dropdown-header\">
            <i class=\"ace-icon fa fa-exclamation-triangle\"></i>
            8 Notifications
        </li>

        <li class=\"dropdown-content\">
            <ul class=\"dropdown-menu dropdown-navbar navbar-pink\">
                <li>
                    <a href=\"#\">
                        <div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-pink fa fa-comment\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Comments
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                            <span class=\"pull-right badge badge-info\">+12</span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href=\"#\">
                        <i class=\"btn btn-xs btn-primary fa fa-user\"></i>
                        Bob just signed up as an editor ...
                    </a>
                </li>

                <li>
                    <a href=\"#\">
                        <div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-success fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Orders
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                            <span class=\"pull-right badge badge-success\">+8</span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href=\"#\">
                        <div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-info fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFollowers
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                            <span class=\"pull-right badge badge-info\">+11</span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class=\"dropdown-footer\">
            <a href=\"#\">
                See all notifications
                <i class=\"ace-icon fa fa-arrow-right\"></i>
            </a>
        </li>
    </ul>
</li>

<li class=\"green dropdown-modal\">
    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
        <i class=\"ace-icon fa fa-envelope icon-animated-vertical\"></i>
        <span class=\"badge badge-success\">5</span>
    </a>

    <ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">
        <li class=\"dropdown-header\">
            <i class=\"ace-icon fa fa-envelope-o\"></i>
            5 Messages
        </li>

        <li class=\"dropdown-content\">
            <ul class=\"dropdown-menu dropdown-navbar\">
                <li>
                    <a href=\"#\" class=\"clearfix\">
                        <img src=\"\" class=\"msg-photo\" alt=\"Alex's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Alex:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque penatibus et auctor ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>a moment ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    </a>
                </li>

                <li>
                    <a href=\"#\" class=\"clearfix\">
                        <img src=\"\" class=\"msg-photo\" alt=\"Susan's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Susan:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id ligula porta felis euismod ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>20 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    </a>
                </li>

                <li>
                    <a href=\"#\" class=\"clearfix\">
                        <img src=\"\" class=\"msg-photo\" alt=\"Bob's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Bob:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNullam quis risus eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3:15 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    </a>
                </li>

                <li>
                    <a href=\"#\" class=\"clearfix\">
                        <img src=\"\" class=\"msg-photo\" alt=\"Kate's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Kate:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>1:33 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    </a>
                </li>

                <li>
                    <a href=\"#\" class=\"clearfix\">
                        <img src=\"\" class=\"msg-photo\" alt=\"Fred's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Fred:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id penatibus et auctor  ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>10:09 am</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class=\"dropdown-footer\">
            <a href=\"inbox.html\">
                See all messages
                <i class=\"ace-icon fa fa-arrow-right\"></i>
            </a>
        </li>
    </ul>
</li>

<li class=\"light-blue dropdown-modal\">
    <a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
        <img class=\"nav-user-photo\" src=\"\" alt=\"Jason's Photo\" />
\t\t\t\t\t\t\t\t<span class=\"user-info\">
\t\t\t\t\t\t\t\t\t<small>Bienvenu</small>

\t\t\t\t\t\t\t\t</span>

        <i class=\"ace-icon fa fa-caret-down\"></i>
    </a>

    <ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">
        <li>
            <a href=\"#\">
                <i class=\"ace-icon fa fa-cog\"></i>
                Settings
            </a>
        </li>

        <li>
            <a href=\"profile.html\">
                <i class=\"ace-icon fa fa-user\"></i>
                Profile
            </a>
        </li>

        <li class=\"divider\"></li>

        <li>
            <a href=\"#\">
                <i class=\"ace-icon fa fa-power-off\"></i>
                Logout
            </a>
        </li>
    </ul>
</li>
</ul>
</div>
</div><!-- /.navbar-container -->
</div>

<div class=\"main-container ace-save-state\" id=\"main-container\">
<script type=\"text/javascript\">
    try{ace.settings.loadState('main-container')}catch(e){}
</script>

<div id=\"sidebar\" class=\"sidebar responsive ace-save-state\">
<script type=\"text/javascript\">
    try{ace.settings.loadState('sidebar')}catch(e){}
</script>

<div class=\"sidebar-shortcuts\" id=\"sidebar-shortcuts\">
    <div class=\"sidebar-shortcuts-large\" id=\"sidebar-shortcuts-large\">
        <button class=\"btn btn-success\">
            <i class=\"ace-icon fa fa-signal\"></i>
        </button>

        <button class=\"btn btn-info\">
            <i class=\"ace-icon fa fa-pencil\"></i>
        </button>

        <button class=\"btn btn-warning\">
            <i class=\"ace-icon fa fa-users\"></i>
        </button>

        <button class=\"btn btn-danger\">
            <i class=\"ace-icon fa fa-cogs\"></i>
        </button>
    </div>

    <div class=\"sidebar-shortcuts-mini\" id=\"sidebar-shortcuts-mini\">
        <span class=\"btn btn-success\"></span>

        <span class=\"btn btn-info\"></span>

        <span class=\"btn btn-warning\"></span>

        <span class=\"btn btn-danger\"></span>
    </div>
</div><!-- /.sidebar-shortcuts -->

<ul class=\"nav nav-list\">

<li class=\"\">
    <a href=\"";
        // line 416
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashEnseignant");
        echo "\">
        <i class=\"menu-icon fa fa-home\"></i>
        <span class=\"menu-text\"> Accueil </span>
    </a>

    <b class=\"arrow\"></b>
</li>

    <li class=\"\">
        <a href=\"#\" class=\"dropdown-toggle\">
            <i class=\"menu-icon fa fa-book\"></i>
            <span class=\"menu-text\">Cahier de texte </span>

            <b class=\"arrow fa fa-angle-down\"></b>
        </a>

        <b class=\"arrow\"></b>

        <ul class=\"submenu nav-hide\" style=\"display: none;\">
            <li class=\"\">
                <a href=\"";
        // line 436
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacterParent");
        echo "\">
                    <i class=\"menu-icon fa fa-caret-right\"></i>
                    Saisir
                </a>

                <b class=\"arrow\"></b>
            </li>

        </ul>


    </li>




    <li class=\"\">
        <a href=\"#\" class=\"dropdown-toggle\">
            <i class=\"menu-icon fa fa-phone\"></i>
            <span class=\"menu-text\">Contacter Parents </span>

            <b class=\"arrow fa fa-angle-down\"></b>
        </a>

        <b class=\"arrow\"></b>

        <ul class=\"submenu nav-hide\" style=\"display: none;\">
            <li class=\"\">
                <a href=\"";
        // line 464
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacterParent");
        echo "\">
                    <i class=\"menu-icon fa fa-caret-right\"></i>
                    Contacter Parents
                </a>

                <b class=\"arrow\"></b>
            </li>

        </ul>


    </li>

    <li class=\"\">
        <a href=\"#\" class=\"dropdown-toggle\">
            <i class=\"menu-icon fa fa-users\"></i>
            <span class=\"menu-text\">Elèves </span>

            <b class=\"arrow fa fa-angle-down\"></b>
        </a>

        <b class=\"arrow\"></b>

        <ul class=\"submenu nav-hide\" style=\"display: none;\">
            <li class=\"\">
                <a href=\"";
        // line 489
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacterParent");
        echo "\">
                    <i class=\"menu-icon fa fa-caret-right\"></i>
                    Notifier absence
                </a>

                <b class=\"arrow\"></b>
            </li>

            <li class=\"\">
                <a href=\"";
        // line 498
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inserernotes");
        echo "\">
                    <i class=\"menu-icon fa fa-caret-right\"></i>
                    Notes
                </a>

                <b class=\"arrow\"></b>
            </li>

        </ul>


    </li>

    <li class=\"\">
        <a href=\"#\" class=\"dropdown-toggle\">
            <i class=\"menu-icon fa fa-file-text\"></i>
            <span class=\"menu-text\">Examens </span>

            <b class=\"arrow fa fa-angle-down\"></b>
        </a>

        <b class=\"arrow\"></b>

        <ul class=\"submenu nav-hide\" style=\"display: none;\">
            <li class=\"\">
                <a href=\"";
        // line 523
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("creerExamen");
        echo "\">
                    <i class=\"menu-icon fa fa-caret-right\"></i>
                    Créer un examen
                </a>

                <b class=\"arrow\"></b>
            </li>

            <li class=\"\">
                <a href=\"";
        // line 532
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listerExamens");
        echo "\">
                    <i class=\"menu-icon fa fa-caret-right\"></i>
                    Lister les examens
                </a>

                <b class=\"arrow\"></b>
            </li>
        </ul>


    </li>









</ul><!-- /.nav-list -->

<div class=\"sidebar-toggle sidebar-collapse\" id=\"sidebar-collapse\">
    <i id=\"sidebar-toggle-icon\" class=\"ace-icon fa fa-angle-double-left ace-save-state\" data-icon1=\"ace-icon fa fa-angle-double-left\" data-icon2=\"ace-icon fa fa-angle-double-right\"></i>
</div>
</div>

<div class=\"main-content\">
    <div class=\"main-content-inner\">

        <div class=\"page-content\">


            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <!-- Contenu de la page -->
                    ";
        // line 568
        $this->displayBlock('mainContent', $context, $blocks);
        // line 572
        echo "

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

<div class=\"footer\">
    <div class=\"footer-inner\">
        <div class=\"footer-content\">
\t\t\t\t\t\t<span class=\"bigger-120\">
\t\t\t\t\t\t\t<span class=\"blue bolder\">PrimaSchoolManager</span>
\t\t\t\t\t\t\tApplication &copy;
\t\t\t\t\t\t</span>

            &nbsp; </div>
    </div>
</div>

<a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
    <i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
</a>
</div><!-- /.main-container -->

<!-- basic scripts -->


<script type=\"text/javascript\">
    if('ontouchstart' in document.documentElement) document.write(\"<script src='assets/js/jquery.mobile.custom.min.js'>\"+\"<\"+\"/script>\");
</script>
<script src=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src=\"assets/js/excanvas.min.js\"></script>
<![endif]-->
";
        // line 614
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.sparkline.index.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>

<!-- ace scripts -->
<script src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>

<!-- inline scripts related to this page -->
";
        // line 1082
        echo "
</body>
</html>
";

        $__internal_f51c73c8d2119044a2b08c2a919aa59f3884b413813b0244998e9ab49afaa329->leave($__internal_f51c73c8d2119044a2b08c2a919aa59f3884b413813b0244998e9ab49afaa329_prof);

    }

    public function getTemplateName()
    {
        return "baseForEnseignant.html.twig";
    }
}
