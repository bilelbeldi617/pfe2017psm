<?php

/* baseForEnseignant.html.twig */
class __TwigTemplate_f0aa5ac3ff618f274480653f091ae868c3b1716946476b45108af3417939ddfd extends Twig_Template
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

    protected function doDisplay(array $context, array $blocks = array())
    {
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
                        <img src=\"assets/images/avatars/avatar.png\" class=\"msg-photo\" alt=\"Alex's Avatar\" />
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
                        <img src=\"assets/images/avatars/avatar3.png\" class=\"msg-photo\" alt=\"Susan's Avatar\" />
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
                        <img src=\"assets/images/avatars/avatar4.png\" class=\"msg-photo\" alt=\"Bob's Avatar\" />
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
                        <img src=\"assets/images/avatars/avatar2.png\" class=\"msg-photo\" alt=\"Kate's Avatar\" />
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
                        <img src=\"assets/images/avatars/avatar5.png\" class=\"msg-photo\" alt=\"Fred's Avatar\" />
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
        <img class=\"nav-user-photo\" src=\"assets/images/avatars/user.jpg\" alt=\"Jason's Photo\" />
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacterParent");
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
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 50
    public function block_script($context, array $blocks = array())
    {
    }

    // line 568
    public function block_mainContent($context, array $blocks = array())
    {
        // line 569
        echo "

                    ";
    }

    public function getTemplateName()
    {
        return "baseForEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  761 => 569,  758 => 568,  753 => 50,  747 => 6,  740 => 1082,  734 => 624,  730 => 623,  724 => 620,  720 => 619,  716 => 618,  712 => 617,  708 => 616,  704 => 615,  699 => 614,  689 => 603,  656 => 572,  654 => 568,  615 => 532,  603 => 523,  575 => 498,  563 => 489,  535 => 464,  504 => 436,  481 => 416,  114 => 51,  112 => 50,  103 => 44,  97 => 41,  93 => 40,  85 => 35,  76 => 29,  70 => 26,  66 => 25,  61 => 23,  55 => 20,  49 => 17,  41 => 12,  37 => 11,  31 => 7,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "baseForEnseignant.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\app\\Resources\\views\\baseForEnseignant.html.twig");
    }
}
