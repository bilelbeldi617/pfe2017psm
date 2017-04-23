<?php

/* baseForLogin.html.twig */

class __TwigTemplate_dbd75d8dda2336af2a40da27cf7026b2cd5d5588661c4896f1521ed688dc8845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 6

    public function getTemplateName()
    {
        return "baseForLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(519 => 6, 291 => 197, 287 => 196, 281 => 193, 277 => 192, 273 => 191, 269 => 190, 265 => 189, 261 => 188, 257 => 187, 247 => 180, 234 => 170, 158 => 96, 156 => 95, 150 => 92, 142 => 86, 139 => 85, 97 => 43, 93 => 42, 85 => 37, 76 => 31, 70 => 28, 66 => 27, 61 => 25, 55 => 22, 49 => 19, 41 => 14, 37 => 13, 29 => 7, 27 => 6, 20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "baseForLogin.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\app\\Resources\\views\\baseForLogin.html.twig");
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

    <!-- bootstrap & fontawesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/4.5.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/fonts.googleapis.com.css"), "html", null, true);
        echo "\" />

    <!-- ace styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace.min.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" id=\"main-ace-style\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace-part2.min.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" />
    <![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace-ie.min.css"), "html", null, true);
        echo "\" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
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

</div><!-- /.navbar-container -->
</div>

<div class=\"main-container ace-save-state\" id=\"main-container\">
<script type=\"text/javascript\">
    try{ace.settings.loadState('main-container')}catch(e){}
</script>


<div class=\"main-content\">
<div class=\"main-content-inner\">
  <div class=\"page-content\">
    <div class=\"row\">
      ";
        // line 85
        echo "        ";
        if (array_key_exists("message", $context)) {
            // line 86
            echo "        <div class=\"alert alert-block alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                <i class=\"ace-icon fa fa-times\"></i>
            </button>

            <i class=\"ace-icon fa fa-times red\"></i>
             <b>";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</b>
        </div>
        ";
        }
        // line 95
        echo "    ";
        // line 96
        echo "        <div class=\"col-xs-12\">
            <div class=\"row\">

                <div class=\"widget-box\" style=\"width: 50%; margin-left: auto; margin-right: auto\">
                    <div class=\"widget-header\">
                        <h4 class=\"widget-title\">Login</h4>
                    </div>
                        <div class=\"widget-body\">
                         <div class=\"widget-main\">
                             <form name=\"loginForm\" method=\"post\" action=\"\" >
                            <div>

                                <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

                                    <input class=\"form-control inp\" type=\"text\" id=\"form-field-mask-2\" name=\"login\">
                                </div>
                            </div>
                             <hr>
                             <div>
                                 <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-key\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

                                     <input class=\"form-control control-mask-password\" type=\"password\" id=\"form-field-mask-2\" name=\"password\">
                                 </div>
                             </div>
                             <hr>
                                <input type=\"submit\" value=\"Se connecter\" class=\"btn btn-light\">
                            </form>

                         </div>
                        </div>

                </div>





            </div>

        </div>

    </div>
  </div>

</div>
</div><!-- /.main-content -->

<div class=\"footer\">
    <div class=\"footer-inner\">
        <div class=\"footer-content\">
\t\t\t\t\t\t<span class=\"bigger-120\">
\t\t\t\t\t\t\t<span class=\"blue bolder\">PrimaSchoolManager</span>
\t\t\t\t\t\t\tApplication &copy;
\t\t\t\t\t\t</span>

            &nbsp; &nbsp;
        </div>
    </div>
</div>

<a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
    <i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
</a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src=\"assets/js/jquery-1.11.3.min.js\"></script>
<![endif]-->
<script type=\"text/javascript\">
    if('ontouchstart' in document.documentElement) document.write(\"<script src='assets/js/jquery.mobile.custom.min.js'>\"+\"<\"+\"/script>\");
</script>
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src=\"assets/js/excanvas.min.js\"></script>
<![endif]-->
<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.sparkline.index.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>

<!-- ace scripts -->
<script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>

<!-- inline scripts related to this page -->
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
</body>
</html>
";
    }
}
