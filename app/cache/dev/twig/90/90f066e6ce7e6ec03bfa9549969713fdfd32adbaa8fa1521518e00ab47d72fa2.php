<?php

/* ::baseForParent.html.twig */
class __TwigTemplate_bc7ccd3a9b66fb414f739f4637b73f6a33979d9f5e14e84f11eae90a79cfe03d extends Twig_Template
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
        $__internal_2a470d12732e1ecac3ac2557f48f59991e2a4de5e5eace801218d80c246bb412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a470d12732e1ecac3ac2557f48f59991e2a4de5e5eace801218d80c246bb412->enter($__internal_2a470d12732e1ecac3ac2557f48f59991e2a4de5e5eace801218d80c246bb412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseForParent.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap-editable.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/4.5.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/fonts.googleapis.com.css"), "html", null, true);
        echo "\" />

    <!-- ace styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace.min.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" id=\"main-ace-style\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace-part2.min.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" />
    <![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace-ie.min.css"), "html", null, true);
        echo "\" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap-editable.min.js"), "html", null, true);
        echo "\"></script>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css\"/>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js\"></script>

    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
            setInterval(function () {



            \$.ajax({
               url: \"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("getNotif");
        echo "\",
                method: \"GET\",
                data :{\"parent\" :  \"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "id", array()), "html", null, true);
        echo "\"},
                success: function(response){
                    response = JSON.parse(response);
                    console.log(response);
                    \$(\"#nbrNotif\").html(response.nbrNvNotifs);
                    \$(\"#nbrNotif2\").html(response.nbrNvNotifs+\" Notifications\");
                    var notif = \"\";
                    if(response.nbrNvNotifs == 0){
                        notif = \"<h6>Aucune nouvelle notification</h6>\";
                    }else {

                        \$.each(response.listNotifs, function (i, item) {
                            if (item.vu == 0) {
                                notif += \"<li><div class='clearfix'><span class='pull-left'><h6>\" + item.titre_notification + \"</h6></span></div></li>\";
                            }
                        });
                    }

                    \$(\"#notifContainer\").html(notif);

                }
            });
            }, 10000);
        });
    </script>

    ";
        // line 86
        $this->displayBlock('script', $context, $blocks);
        // line 87
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


<li class=\"purple dropdown-modal\">
    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
        <i class=\"ace-icon fa fa-bell icon-animated-bell\"></i>
        <span class=\"badge badge-important\"><div id=\"nbrNotif\"></div></span>
    </a>

    <ul class=\"dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close\">
        <li class=\"dropdown-header\">
            <i class=\"ace-icon fa fa-exclamation-triangle\" id=\"nbrNotif2\"></i>
        </li>

        <li class=\"dropdown-content\">
            <ul class=\"dropdown-menu dropdown-navbar navbar-pink\" id=\"notifContainer\">
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

            </ul>
        </li>

        <li class=\"dropdown-footer\">
            <a href=\"";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voirToutNotif");
        echo "\">
                Voir toutes les notifications
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
            <a href=\"";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile");
        echo "\">
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
        // line 238
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashParent");
        echo "\">
                    <i class=\"menu-icon fa fa-home\"></i>
                    <span class=\"menu-text\"> Accueil </span>
                </a>

                <b class=\"arrow\"></b>
            </li>

            <li class=\"\">
                <a href=\"#\" class=\"dropdown-toggle\">
                    <i class=\"menu-icon fa fa-phone\"></i>
                    <span class=\"menu-text\">Contacter </span>

                    <b class=\"arrow fa fa-angle-down\"></b>
                </a>

                <b class=\"arrow\"></b>

                <ul class=\"submenu nav-hide\" style=\"display: none;\">
                    <li class=\"\">
                        <a href=\"";
        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacterEnseignant");
        echo "\">
                            <i class=\"menu-icon fa fa-caret-right\"></i>
                            Contacter Enseignants
                        </a>

                        <b class=\"arrow\"></b>
                    </li>

                    <li class=\"\">
                        <a href=\"";
        // line 267
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacterAdmin");
        echo "\">
                            <i class=\"menu-icon fa fa-caret-right\"></i>
                            Contacter l'administrateur
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
        // line 294
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesEleves");
        echo "\">
                            <i class=\"menu-icon fa fa-caret-right\"></i>
                            Mes élèves
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
        // line 336
        $this->displayBlock('mainContent', $context, $blocks);
        // line 340
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
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src=\"assets/js/excanvas.min.js\"></script>
<![endif]-->
";
        // line 382
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.sparkline.index.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>

<!-- ace scripts -->
<script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>

<!-- inline scripts related to this page -->
";
        // line 850
        echo "
</body>
</html>
";
        
        $__internal_2a470d12732e1ecac3ac2557f48f59991e2a4de5e5eace801218d80c246bb412->leave($__internal_2a470d12732e1ecac3ac2557f48f59991e2a4de5e5eace801218d80c246bb412_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b99fc98cdc809019d5f66b9d39e428275e15bad0deed062e1aa9d73c9066a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b99fc98cdc809019d5f66b9d39e428275e15bad0deed062e1aa9d73c9066a07->enter($__internal_8b99fc98cdc809019d5f66b9d39e428275e15bad0deed062e1aa9d73c9066a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_8b99fc98cdc809019d5f66b9d39e428275e15bad0deed062e1aa9d73c9066a07->leave($__internal_8b99fc98cdc809019d5f66b9d39e428275e15bad0deed062e1aa9d73c9066a07_prof);

    }

    // line 86
    public function block_script($context, array $blocks = array())
    {
        $__internal_808e42a731e02cec8f8b295fcde04de5c2ddc17589d4fcf3833fb7193e0b9192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808e42a731e02cec8f8b295fcde04de5c2ddc17589d4fcf3833fb7193e0b9192->enter($__internal_808e42a731e02cec8f8b295fcde04de5c2ddc17589d4fcf3833fb7193e0b9192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_808e42a731e02cec8f8b295fcde04de5c2ddc17589d4fcf3833fb7193e0b9192->leave($__internal_808e42a731e02cec8f8b295fcde04de5c2ddc17589d4fcf3833fb7193e0b9192_prof);

    }

    // line 336
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_6c9c4f601b05168d95ee0224bbf7197b81749bd2a96ececfb5ac08b522886e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9c4f601b05168d95ee0224bbf7197b81749bd2a96ececfb5ac08b522886e65->enter($__internal_6c9c4f601b05168d95ee0224bbf7197b81749bd2a96ececfb5ac08b522886e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 337
        echo "

                        ";
        
        $__internal_6c9c4f601b05168d95ee0224bbf7197b81749bd2a96ececfb5ac08b522886e65->leave($__internal_6c9c4f601b05168d95ee0224bbf7197b81749bd2a96ececfb5ac08b522886e65_prof);

    }

    public function getTemplateName()
    {
        return "::baseForParent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 337,  553 => 336,  542 => 86,  530 => 6,  520 => 850,  514 => 392,  510 => 391,  504 => 388,  500 => 387,  496 => 386,  492 => 385,  488 => 384,  484 => 383,  479 => 382,  469 => 371,  436 => 340,  434 => 336,  389 => 294,  359 => 267,  347 => 258,  324 => 238,  257 => 174,  224 => 144,  165 => 87,  163 => 86,  134 => 60,  129 => 58,  114 => 46,  110 => 45,  104 => 42,  100 => 41,  92 => 36,  83 => 30,  77 => 27,  73 => 26,  68 => 24,  62 => 21,  56 => 18,  48 => 13,  44 => 12,  40 => 11,  34 => 7,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap-editable.min.css') }}\" />
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
    <script src=\"{{ asset('assets/js/bootstrap-editable.min.js') }}\"></script>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css\"/>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js\"></script>

    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
            setInterval(function () {



            \$.ajax({
               url: \"{{ path('getNotif') }}\",
                method: \"GET\",
                data :{\"parent\" :  \"{{ app.session.get(\"user\").id }}\"},
                success: function(response){
                    response = JSON.parse(response);
                    console.log(response);
                    \$(\"#nbrNotif\").html(response.nbrNvNotifs);
                    \$(\"#nbrNotif2\").html(response.nbrNvNotifs+\" Notifications\");
                    var notif = \"\";
                    if(response.nbrNvNotifs == 0){
                        notif = \"<h6>Aucune nouvelle notification</h6>\";
                    }else {

                        \$.each(response.listNotifs, function (i, item) {
                            if (item.vu == 0) {
                                notif += \"<li><div class='clearfix'><span class='pull-left'><h6>\" + item.titre_notification + \"</h6></span></div></li>\";
                            }
                        });
                    }

                    \$(\"#notifContainer\").html(notif);

                }
            });
            }, 10000);
        });
    </script>

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


<li class=\"purple dropdown-modal\">
    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
        <i class=\"ace-icon fa fa-bell icon-animated-bell\"></i>
        <span class=\"badge badge-important\"><div id=\"nbrNotif\"></div></span>
    </a>

    <ul class=\"dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close\">
        <li class=\"dropdown-header\">
            <i class=\"ace-icon fa fa-exclamation-triangle\" id=\"nbrNotif2\"></i>
        </li>

        <li class=\"dropdown-content\">
            <ul class=\"dropdown-menu dropdown-navbar navbar-pink\" id=\"notifContainer\">
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

            </ul>
        </li>

        <li class=\"dropdown-footer\">
            <a href=\"{{ path('voirToutNotif') }}\">
                Voir toutes les notifications
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
            <a href=\"{{ path('profile') }}\">
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
                <a href=\"{{ path('dashParent') }}\">
                    <i class=\"menu-icon fa fa-home\"></i>
                    <span class=\"menu-text\"> Accueil </span>
                </a>

                <b class=\"arrow\"></b>
            </li>

            <li class=\"\">
                <a href=\"#\" class=\"dropdown-toggle\">
                    <i class=\"menu-icon fa fa-phone\"></i>
                    <span class=\"menu-text\">Contacter </span>

                    <b class=\"arrow fa fa-angle-down\"></b>
                </a>

                <b class=\"arrow\"></b>

                <ul class=\"submenu nav-hide\" style=\"display: none;\">
                    <li class=\"\">
                        <a href=\"{{ path('contacterEnseignant') }}\">
                            <i class=\"menu-icon fa fa-caret-right\"></i>
                            Contacter Enseignants
                        </a>

                        <b class=\"arrow\"></b>
                    </li>

                    <li class=\"\">
                        <a href=\"{{ path('contacterAdmin') }}\">
                            <i class=\"menu-icon fa fa-caret-right\"></i>
                            Contacter l'administrateur
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
                        <a href=\"{{ path('mesEleves') }}\">
                            <i class=\"menu-icon fa fa-caret-right\"></i>
                            Mes élèves
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
", "::baseForParent.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\app/Resources\\views/baseForParent.html.twig");
    }
}
