<?php

/* @projet/Default/Parent/profile.html.twig */
class __TwigTemplate_17186a96d72456685ce26904d93dc209945e7d122b6f04fcecad4b8a1a5a2f07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForParent.html.twig", "@projet/Default/Parent/profile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_743e00f38ed2164a59a7f751732ecabb72d811e9e4bacd75ceb82a748dc5b26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743e00f38ed2164a59a7f751732ecabb72d811e9e4bacd75ceb82a748dc5b26a->enter($__internal_743e00f38ed2164a59a7f751732ecabb72d811e9e4bacd75ceb82a748dc5b26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Parent/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_743e00f38ed2164a59a7f751732ecabb72d811e9e4bacd75ceb82a748dc5b26a->leave($__internal_743e00f38ed2164a59a7f751732ecabb72d811e9e4bacd75ceb82a748dc5b26a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_00dab1e366ba535e776df7dfff9e601718323fc9a64c57cfff166075c41960ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00dab1e366ba535e776df7dfff9e601718323fc9a64c57cfff166075c41960ac->enter($__internal_00dab1e366ba535e776df7dfff9e601718323fc9a64c57cfff166075c41960ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Profile
";
        
        $__internal_00dab1e366ba535e776df7dfff9e601718323fc9a64c57cfff166075c41960ac->leave($__internal_00dab1e366ba535e776df7dfff9e601718323fc9a64c57cfff166075c41960ac_prof);

    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        $__internal_f2321ad30a1c779d665e56355761dbb717992c071b09bd9bbcc773da15212a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2321ad30a1c779d665e56355761dbb717992c071b09bd9bbcc773da15212a8d->enter($__internal_f2321ad30a1c779d665e56355761dbb717992c071b09bd9bbcc773da15212a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "    <script type=\"text/javascript\">
    \$(\"document\").ready(function(\$) {

        //editables on first profile page
        \$.fn.editable.defaults.mode = 'inline';
        \$.fn.editableform.loading = \"<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>\";
        \$.fn.editableform.buttons = '<button type=\"submit\" class=\"btn btn-info editable-submit\" id=\"btnSubmit\"><i class=\"ace-icon fa fa-check\"></i></button>'+
        '<button type=\"button\" class=\"btn editable-cancel\"><i class=\"ace-icon fa fa-times\"></i></button>';

        //editables

        //text editable
        \$('#nomParent')
                .editable({
                    type: 'text',
                    name: 'nomParent'
                });

        \$('#prenomParent')
                .editable({
                   type: 'text',
                    name: 'prenomParent'
                });
        \$('#numTelParent')
                .editable({
                   type: \"text\",
                    name: \"numTelParent\"
                });
        \$('#adresseParent')
                .editable({
                    type: \"text\",
                    name: \"adresseParent\"
                });
        \$('#emailParent')
                .editable({
                    type: \"text\",
                    name: \"emailParent\"
                });

        \$(\"#btnSubmit\").click(function(){
           console.log(\"bilel\");
        });




        // *** editable avatar *** //
        try {//ie8 throws some harmless exceptions, so let's catch'em

            //first let's add a fake appendChild method for Image element for browsers that have a problem with this
            //because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
            try {
                document.createElement('IMG').appendChild(document.createElement('B'));
            } catch(e) {
                Image.prototype.appendChild = function(el){}
            }

            var last_gritter
            \$('#avatar').editable({
                type: 'image',
                name: 'avatar',
                value: null,
                //onblur: 'ignore',  //don't reset or hide editable onblur?!
                image: {
                    //specify ace file input plugin's options here
                    btn_choose: 'Change Avatar',
                    droppable: true,
                    maxSize: 110000,//~100Kb

                    //and a few extra ones here
                    name: 'avatar',//put the field name here as well, will be used inside the custom plugin
                    on_error : function(error_type) {//on_error function will be called when the selected file has a problem
                        if(last_gritter) \$.gritter.remove(last_gritter);
                        if(error_type == 1) {//file format error
                            last_gritter = \$.gritter.add({
                                title: 'File is not an image!',
                                text: 'Please choose a jpg|gif|png image!',
                                class_name: 'gritter-error gritter-center'
                            });
                        } else if(error_type == 2) {//file size rror
                            last_gritter = \$.gritter.add({
                                title: 'File too big!',
                                text: 'Image size should not exceed 100Kb!',
                                class_name: 'gritter-error gritter-center'
                            });
                        }
                        else {//other error
                        }
                    },
                    on_success : function() {
                        \$.gritter.removeAll();
                    }
                },
                url: function(params) {
                    // ***UPDATE AVATAR HERE*** //
                    //for a working upload example you can replace the contents of this function with
                    //examples/profile-avatar-update.js

                    var deferred = new \$.Deferred

                    var value = \$('#avatar').next().find('input[type=hidden]:eq(0)').val();
                    if(!value || value.length == 0) {
                        deferred.resolve();
                        return deferred.promise();
                    }


                    //dummy upload
                    setTimeout(function(){
                        if(\"FileReader\" in window) {
                            //for browsers that have a thumbnail of selected image
                            var thumb = \$('#avatar').next().find('img').data('thumb');
                            if(thumb) \$('#avatar').get(0).src = thumb;
                        }

                        deferred.resolve({'status':'OK'});

                        if(last_gritter) \$.gritter.remove(last_gritter);
                        last_gritter = \$.gritter.add({
                            title: 'Avatar Updated!',
                            text: 'Uploading to server can be easily implemented. A working example is included with the template.',
                            class_name: 'gritter-info gritter-center'
                        });

                    } , parseInt(Math.random() * 800 + 800))

                    return deferred.promise();

                    // ***END OF UPDATE AVATAR HERE*** //
                },

                success: function(response, newValue) {
                }
            })
        }catch(e) {}

        /**
         //let's display edit mode by default?
         var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
         if(blank_image) {
\t\t\t\t\t\$('#avatar').editable('show').on('hidden', function(e, reason) {
\t\t\t\t\t\tif(reason == 'onblur') {
\t\t\t\t\t\t\t\$('#avatar').editable('show');
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#avatar').off('hidden');
\t\t\t\t\t})
\t\t\t\t}
         */

            //another option is using modals
        \$('#avatar2').on('click', function(){
            var modal =
                    '<div class=\"modal fade\">\\
                      <div class=\"modal-dialog\">\\
                       <div class=\"modal-content\">\\
                        <div class=\"modal-header\">\\
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\\
                            <h4 class=\"blue\">Change Avatar</h4>\\
                        </div>\\
                        \\
                        <form class=\"no-margin\">\\
                         <div class=\"modal-body\">\\
                            <div class=\"space-4\"></div>\\
                            <div style=\"width:75%;margin-left:12%;\"><input type=\"file\" name=\"file-input\" /></div>\\
                         </div>\\
                        \\
                         <div class=\"modal-footer center\">\\
                            <button type=\"submit\" class=\"btn btn-sm btn-success\"><i class=\"ace-icon fa fa-check\"></i> Submit</button>\\
                            <button type=\"button\" class=\"btn btn-sm\" data-dismiss=\"modal\"><i class=\"ace-icon fa fa-times\"></i> Cancel</button>\\
                         </div>\\
                        </form>\\
                      </div>\\
                     </div>\\
                    </div>';


            var modal = \$(modal);
            modal.modal(\"show\").on(\"hidden\", function(){
                modal.remove();
            });

            var working = false;

            var form = modal.find('form:eq(0)');
            var file = form.find('input[type=file]').eq(0);
            file.ace_file_input({
                style:'well',
                btn_choose:'Click to choose new avatar',
                btn_change:null,
                no_icon:'ace-icon fa fa-picture-o',
                thumbnail:'small',
                before_remove: function() {
                    //don't remove/reset files while being uploaded
                    return !working;
                },
                allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
            });

            form.on('submit', function(){
                if(!file.data('ace_input_files')) return false;

                file.ace_file_input('disable');
                form.find('button').attr('disabled', 'disabled');
                form.find('.modal-body').append(\"<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>\");

                var deferred = new \$.Deferred;
                working = true;
                deferred.done(function() {
                    form.find('button').removeAttr('disabled');
                    form.find('input[type=file]').ace_file_input('enable');
                    form.find('.modal-body > :last-child').remove();

                    modal.modal(\"hide\");

                    var thumb = file.next().find('img').data('thumb');
                    if(thumb) \$('#avatar2').get(0).src = thumb;

                    working = false;
                });


                setTimeout(function(){
                    deferred.resolve();
                } , parseInt(Math.random() * 800 + 800));

                return false;
            });

        });



        //////////////////////////////
        \$('#profile-feed-1').ace_scroll({
            height: '250px',
            mouseWheelLock: true,
            alwaysVisible : true
        });

        \$('a[ data-original-title]').tooltip();

        \$('.easy-pie-chart.percentage').each(function(){
            var barColor = \$(this).data('color') || '#555';
            var trackColor = '#E2E2E2';
            var size = parseInt(\$(this).data('size')) || 72;
            \$(this).easyPieChart({
                barColor: barColor,
                trackColor: trackColor,
                scaleColor: false,
                lineCap: 'butt',
                lineWidth: parseInt(size/10),
                animate:false,
                size: size
            }).css('color', barColor);
        });

        ///////////////////////////////////////////

        //right & left position
        //show the user info on right or left depending on its position


        ////////////////////
        //change profile
        \$('[data-toggle=\"buttons\"] .btn').on('click', function(e){
            var target = \$(this).find('input[type=radio]');
            var which = parseInt(target.val());
            \$('.user-profile').parent().addClass('hide');
            \$('#user-profile-'+which).parent().removeClass('hide');
        });



        /////////////////////////////////////
        \$(document).one('ajaxloadstart.page', function(e) {
            //in ajax mode, remove remaining elements before leaving page
            try {
                \$('.editable').editable('destroy');
            } catch(e) {}
            \$('[class*=select2]').remove();
        });
    });
    </script>
";
        
        $__internal_f2321ad30a1c779d665e56355761dbb717992c071b09bd9bbcc773da15212a8d->leave($__internal_f2321ad30a1c779d665e56355761dbb717992c071b09bd9bbcc773da15212a8d_prof);

    }

    // line 294
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_527963342955c773a8f3fd040042515d13131fa4e09cd037845af25403c0ea18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527963342955c773a8f3fd040042515d13131fa4e09cd037845af25403c0ea18->enter($__internal_527963342955c773a8f3fd040042515d13131fa4e09cd037845af25403c0ea18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 295
        echo "

    <div class=\"main-content\">
    <div class=\"main-content-inner\">
";
        // line 389
        echo "
   ";
        // line 399
        echo "
    <div class=\"row\">
    <div class=\"col-xs-12\">
    <!-- PAGE CONTENT BEGINS -->
";
        // line 439
        echo "
    <div class=\"hr dotted\"></div>

    <div class=\"\">
    <div id=\"user-profile-1\" class=\"user-profile row\">
    <div class=\"col-xs-12 col-sm-3 center\">
        <div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"profile-picture\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"avatar\" class=\"editable img-responsive editable-click editable-empty\" alt=\"Photo de ";
        // line 447
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenomParent", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nomParent", array()), "html", null, true);
        echo "\" src=\"assets/images/avatars/profile-pic.jpg\"></img>
\t\t\t\t\t\t\t\t\t\t\t\t</span>

            <div class=\"space-4\"></div>

            <div class=\"width-80 label label-info label-xlg arrowed-in arrowed-in-right\">
                <div class=\"inline position-relative\">
                    <a href=\"#\" class=\"user-title-label dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"ace-icon fa fa-circle light-green\"></i>
                        &nbsp;
                        <span class=\"white\">";
        // line 457
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenomParent", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nomParent", array()), "html", null, true);
        echo "</span>
                    </a>

                    <ul class=\"align-left dropdown-menu dropdown-caret dropdown-lighter\">
                        <li class=\"dropdown-header\"> Change Status </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-circle green\"></i>
                                &nbsp;
                                <span class=\"green\">Available</span>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-circle red\"></i>
                                &nbsp;
                                <span class=\"red\">Busy</span>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-circle grey\"></i>
                                &nbsp;
                                <span class=\"grey\">Invisible</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"space-6\"></div>

        <div class=\"profile-contact-info\">
";
        // line 510
        echo "
            <div class=\"space-6\"></div>

";
        // line 526
        echo "        </div>

        <div class=\"hr hr12 dotted\"></div>

       <div class=\"clearfix\">
            <div>
                <span class=\"bigger-175 blue\">";
        // line 532
        echo twig_escape_filter($this->env, (isset($context["nbrEnfant"]) ? $context["nbrEnfant"] : $this->getContext($context, "nbrEnfant")), "html", null, true);
        echo "</span>

                <br>
                Nombre d'anfants inscrits
            </div>

           ";
        // line 544
        echo "       </div>

        <div class=\"hr hr16 dotted\"></div>
    </div>

    <div class=\"col-xs-12 col-sm-9\">
    ";
        // line 594
        echo "    <div class=\"space-12\"></div>

    <div class=\"profile-user-info profile-user-info-striped\">
        <div class=\"profile-info-row\">
            <div class=\"profile-info-name\"> Nom </div>

            <div class=\"profile-info-value\">
                <span class=\"editable editable-click\" id=\"nomParent\" style=\"display: inline;\">";
        // line 601
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nomParent", array()), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"profile-info-row\">
            <div class=\"profile-info-name\"> Prenom </div>

            <div class=\"profile-info-value\">
                <span class=\"editable editable-click\" id=\"prenomParent\" style=\"display: inline;\">";
        // line 609
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenomParent", array()), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"profile-info-row\">
            <div class=\"profile-info-name\"> CIN </div>

            <div class=\"profile-info-value\">
                <span class=\"editable editable-click\" id=\"cinParent\" style=\"display: inline;\">";
        // line 617
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cinParent", array()), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"profile-info-row\">
            <div class=\"profile-info-name\"> Numéro de téléphone </div>

            <div class=\"profile-info-value\">
                <span class=\"editable editable-click\" id=\"numTelParent\" style=\"display: inline;\">";
        // line 625
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "numTelParent", array()), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"profile-info-row\">
            <div class=\"profile-info-name\"> Adresse </div>

            <div class=\"profile-info-value\">
                <i class=\"fa fa-map-marker light-orange bigger-110\"></i>
                <span class=\"editable editable-click\" id=\"adresseParent\" style=\"display: inline;\">";
        // line 634
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresseParent", array()), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"profile-info-row\">
            <div class=\"profile-info-name\"> E-mail </div>

            <div class=\"profile-info-value\">
                <span class=\"editable editable-click\" id=\"emailParent\" style=\"display: inline;\">";
        // line 642
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "emailParent", array()), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"profile-info-row\">
            <div class=\"profile-info-name\"> Fonction </div>

            <div class=\"profile-info-value\">
                <span class=\"editable editable-click\" id=\"fonctionParent\" style=\"display: inline;\">";
        // line 650
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fonctionParent", array()), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>

    <div class=\"space-20\"></div>

    ";
        // line 933
        echo "
";
        
        $__internal_527963342955c773a8f3fd040042515d13131fa4e09cd037845af25403c0ea18->leave($__internal_527963342955c773a8f3fd040042515d13131fa4e09cd037845af25403c0ea18_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Parent/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 933,  541 => 650,  530 => 642,  519 => 634,  507 => 625,  496 => 617,  485 => 609,  474 => 601,  465 => 594,  457 => 544,  448 => 532,  440 => 526,  435 => 510,  393 => 457,  379 => 447,  369 => 439,  363 => 399,  360 => 389,  354 => 295,  348 => 294,  56 => 7,  50 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"baseForParent.html.twig\" %}
{% block title %}
    Profile
{% endblock %}

{% block script %}
    <script type=\"text/javascript\">
    \$(\"document\").ready(function(\$) {

        //editables on first profile page
        \$.fn.editable.defaults.mode = 'inline';
        \$.fn.editableform.loading = \"<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>\";
        \$.fn.editableform.buttons = '<button type=\"submit\" class=\"btn btn-info editable-submit\" id=\"btnSubmit\"><i class=\"ace-icon fa fa-check\"></i></button>'+
        '<button type=\"button\" class=\"btn editable-cancel\"><i class=\"ace-icon fa fa-times\"></i></button>';

        //editables

        //text editable
        \$('#nomParent')
                .editable({
                    type: 'text',
                    name: 'nomParent'
                });

        \$('#prenomParent')
                .editable({
                   type: 'text',
                    name: 'prenomParent'
                });
        \$('#numTelParent')
                .editable({
                   type: \"text\",
                    name: \"numTelParent\"
                });
        \$('#adresseParent')
                .editable({
                    type: \"text\",
                    name: \"adresseParent\"
                });
        \$('#emailParent')
                .editable({
                    type: \"text\",
                    name: \"emailParent\"
                });

        \$(\"#btnSubmit\").click(function(){
           console.log(\"bilel\");
        });




        // *** editable avatar *** //
        try {//ie8 throws some harmless exceptions, so let's catch'em

            //first let's add a fake appendChild method for Image element for browsers that have a problem with this
            //because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
            try {
                document.createElement('IMG').appendChild(document.createElement('B'));
            } catch(e) {
                Image.prototype.appendChild = function(el){}
            }

            var last_gritter
            \$('#avatar').editable({
                type: 'image',
                name: 'avatar',
                value: null,
                //onblur: 'ignore',  //don't reset or hide editable onblur?!
                image: {
                    //specify ace file input plugin's options here
                    btn_choose: 'Change Avatar',
                    droppable: true,
                    maxSize: 110000,//~100Kb

                    //and a few extra ones here
                    name: 'avatar',//put the field name here as well, will be used inside the custom plugin
                    on_error : function(error_type) {//on_error function will be called when the selected file has a problem
                        if(last_gritter) \$.gritter.remove(last_gritter);
                        if(error_type == 1) {//file format error
                            last_gritter = \$.gritter.add({
                                title: 'File is not an image!',
                                text: 'Please choose a jpg|gif|png image!',
                                class_name: 'gritter-error gritter-center'
                            });
                        } else if(error_type == 2) {//file size rror
                            last_gritter = \$.gritter.add({
                                title: 'File too big!',
                                text: 'Image size should not exceed 100Kb!',
                                class_name: 'gritter-error gritter-center'
                            });
                        }
                        else {//other error
                        }
                    },
                    on_success : function() {
                        \$.gritter.removeAll();
                    }
                },
                url: function(params) {
                    // ***UPDATE AVATAR HERE*** //
                    //for a working upload example you can replace the contents of this function with
                    //examples/profile-avatar-update.js

                    var deferred = new \$.Deferred

                    var value = \$('#avatar').next().find('input[type=hidden]:eq(0)').val();
                    if(!value || value.length == 0) {
                        deferred.resolve();
                        return deferred.promise();
                    }


                    //dummy upload
                    setTimeout(function(){
                        if(\"FileReader\" in window) {
                            //for browsers that have a thumbnail of selected image
                            var thumb = \$('#avatar').next().find('img').data('thumb');
                            if(thumb) \$('#avatar').get(0).src = thumb;
                        }

                        deferred.resolve({'status':'OK'});

                        if(last_gritter) \$.gritter.remove(last_gritter);
                        last_gritter = \$.gritter.add({
                            title: 'Avatar Updated!',
                            text: 'Uploading to server can be easily implemented. A working example is included with the template.',
                            class_name: 'gritter-info gritter-center'
                        });

                    } , parseInt(Math.random() * 800 + 800))

                    return deferred.promise();

                    // ***END OF UPDATE AVATAR HERE*** //
                },

                success: function(response, newValue) {
                }
            })
        }catch(e) {}

        /**
         //let's display edit mode by default?
         var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
         if(blank_image) {
\t\t\t\t\t\$('#avatar').editable('show').on('hidden', function(e, reason) {
\t\t\t\t\t\tif(reason == 'onblur') {
\t\t\t\t\t\t\t\$('#avatar').editable('show');
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#avatar').off('hidden');
\t\t\t\t\t})
\t\t\t\t}
         */

            //another option is using modals
        \$('#avatar2').on('click', function(){
            var modal =
                    '<div class=\"modal fade\">\\
                      <div class=\"modal-dialog\">\\
                       <div class=\"modal-content\">\\
                        <div class=\"modal-header\">\\
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\\
                            <h4 class=\"blue\">Change Avatar</h4>\\
                        </div>\\
                        \\
                        <form class=\"no-margin\">\\
                         <div class=\"modal-body\">\\
                            <div class=\"space-4\"></div>\\
                            <div style=\"width:75%;margin-left:12%;\"><input type=\"file\" name=\"file-input\" /></div>\\
                         </div>\\
                        \\
                         <div class=\"modal-footer center\">\\
                            <button type=\"submit\" class=\"btn btn-sm btn-success\"><i class=\"ace-icon fa fa-check\"></i> Submit</button>\\
                            <button type=\"button\" class=\"btn btn-sm\" data-dismiss=\"modal\"><i class=\"ace-icon fa fa-times\"></i> Cancel</button>\\
                         </div>\\
                        </form>\\
                      </div>\\
                     </div>\\
                    </div>';


            var modal = \$(modal);
            modal.modal(\"show\").on(\"hidden\", function(){
                modal.remove();
            });

            var working = false;

            var form = modal.find('form:eq(0)');
            var file = form.find('input[type=file]').eq(0);
            file.ace_file_input({
                style:'well',
                btn_choose:'Click to choose new avatar',
                btn_change:null,
                no_icon:'ace-icon fa fa-picture-o',
                thumbnail:'small',
                before_remove: function() {
                    //don't remove/reset files while being uploaded
                    return !working;
                },
                allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
            });

            form.on('submit', function(){
                if(!file.data('ace_input_files')) return false;

                file.ace_file_input('disable');
                form.find('button').attr('disabled', 'disabled');
                form.find('.modal-body').append(\"<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>\");

                var deferred = new \$.Deferred;
                working = true;
                deferred.done(function() {
                    form.find('button').removeAttr('disabled');
                    form.find('input[type=file]').ace_file_input('enable');
                    form.find('.modal-body > :last-child').remove();

                    modal.modal(\"hide\");

                    var thumb = file.next().find('img').data('thumb');
                    if(thumb) \$('#avatar2').get(0).src = thumb;

                    working = false;
                });


                setTimeout(function(){
                    deferred.resolve();
                } , parseInt(Math.random() * 800 + 800));

                return false;
            });

        });



        //////////////////////////////
        \$('#profile-feed-1').ace_scroll({
            height: '250px',
            mouseWheelLock: true,
            alwaysVisible : true
        });

        \$('a[ data-original-title]').tooltip();

        \$('.easy-pie-chart.percentage').each(function(){
            var barColor = \$(this).data('color') || '#555';
            var trackColor = '#E2E2E2';
            var size = parseInt(\$(this).data('size')) || 72;
            \$(this).easyPieChart({
                barColor: barColor,
                trackColor: trackColor,
                scaleColor: false,
                lineCap: 'butt',
                lineWidth: parseInt(size/10),
                animate:false,
                size: size
            }).css('color', barColor);
        });

        ///////////////////////////////////////////

        //right & left position
        //show the user info on right or left depending on its position


        ////////////////////
        //change profile
        \$('[data-toggle=\"buttons\"] .btn').on('click', function(e){
            var target = \$(this).find('input[type=radio]');
            var which = parseInt(target.val());
            \$('.user-profile').parent().addClass('hide');
            \$('#user-profile-'+which).parent().removeClass('hide');
        });



        /////////////////////////////////////
        \$(document).one('ajaxloadstart.page', function(e) {
            //in ajax mode, remove remaining elements before leaving page
            try {
                \$('.editable').editable('destroy');
            } catch(e) {}
            \$('[class*=select2]').remove();
        });
    });
    </script>
{% endblock %}

{% block mainContent %}


    <div class=\"main-content\">
    <div class=\"main-content-inner\">
{#    <div class=\"breadcrumbs ace-save-state\" id=\"breadcrumbs\">
        <ul class=\"breadcrumb\">
            <li>
                <i class=\"ace-icon fa fa-home home-icon\"></i>
                <a href=\"#\">Home</a>
            </li>

            <li>
                <a href=\"#\">More Pages</a>
            </li>
            <li class=\"active\">User Profile</li>
        </ul><!-- /.breadcrumb -->

        <div class=\"nav-search\" id=\"nav-search\">
            <form class=\"form-search\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search ...\" class=\"nav-search-input\" id=\"nav-search-input\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-search nav-search-icon\"></i>
\t\t\t\t\t\t\t\t</span>
            </form>
        </div><!-- /.nav-search -->
    </div>

    <div class=\"page-content\">
    <div class=\"ace-settings-container\" id=\"ace-settings-container\">
        <div class=\"btn btn-app btn-xs btn-warning ace-settings-btn\" id=\"ace-settings-btn\">
            <i class=\"ace-icon fa fa-cog bigger-130\"></i>
        </div>

        <div class=\"ace-settings-box clearfix\" id=\"ace-settings-box\">
            <div class=\"pull-left width-50\">
                <div class=\"ace-settings-item\">
                    <div class=\"pull-left\">
                        <select id=\"skin-colorpicker\" class=\"hide\">
                            <option data-skin=\"no-skin\" value=\"#438EB9\">#438EB9</option>
                            <option data-skin=\"skin-1\" value=\"#222A2D\">#222A2D</option>
                            <option data-skin=\"skin-2\" value=\"#C6487E\">#C6487E</option>
                            <option data-skin=\"skin-3\" value=\"#D0D0D0\">#D0D0D0</option>
                        </select><div class=\"dropdown dropdown-colorpicker\">\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\"><span class=\"btn-colorpicker\" style=\"background-color:#438EB9\"></span></a><ul class=\"dropdown-menu dropdown-caret\"><li><a class=\"colorpick-btn selected\" style=\"background-color:#438EB9;\" data-color=\"#438EB9\"></a></li><li><a class=\"colorpick-btn\" style=\"background-color:#222A2D;\" data-color=\"#222A2D\"></a></li><li><a class=\"colorpick-btn\" style=\"background-color:#C6487E;\" data-color=\"#C6487E\"></a></li><li><a class=\"colorpick-btn\" style=\"background-color:#D0D0D0;\" data-color=\"#D0D0D0\"></a></li></ul></div>
                    </div>
                    <span>&nbsp; Choose Skin</span>
                </div>

                <div class=\"ace-settings-item\">
                    <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-navbar\" autocomplete=\"off\">
                    <label class=\"lbl\" for=\"ace-settings-navbar\"> Fixed Navbar</label>
                </div>

                <div class=\"ace-settings-item\">
                    <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-sidebar\" autocomplete=\"off\">
                    <label class=\"lbl\" for=\"ace-settings-sidebar\"> Fixed Sidebar</label>
                </div>

                <div class=\"ace-settings-item\">
                    <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-breadcrumbs\" autocomplete=\"off\">
                    <label class=\"lbl\" for=\"ace-settings-breadcrumbs\"> Fixed Breadcrumbs</label>
                </div>

                <div class=\"ace-settings-item\">
                    <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-rtl\" autocomplete=\"off\">
                    <label class=\"lbl\" for=\"ace-settings-rtl\"> Right To Left (rtl)</label>
                </div>

                <div class=\"ace-settings-item\">
                    <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-add-container\" autocomplete=\"off\">
                    <label class=\"lbl\" for=\"ace-settings-add-container\">
                        Inside
                        <b>.container</b>
                    </label>
                </div>
            </div><!-- /.pull-left -->

            <div class=\"pull-left width-50\">
                <div class=\"ace-settings-item\">
                    <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-hover\" autocomplete=\"off\">
                    <label class=\"lbl\" for=\"ace-settings-hover\"> Submenu on Hover</label>
                </div>

                <div class=\"ace-settings-item\">
                    <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-compact\" autocomplete=\"off\">
                    <label class=\"lbl\" for=\"ace-settings-compact\"> Compact Sidebar</label>
                </div>

                <div class=\"ace-settings-item\">
                    <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-highlight\" autocomplete=\"off\">
                    <label class=\"lbl\" for=\"ace-settings-highlight\"> Alt. Active Item</label>
                </div>
            </div><!-- /.pull-left -->
        </div><!-- /.ace-settings-box -->
    </div><!-- /.ace-settings-container -->#}

   {# <div class=\"page-header\">
        <h1>
            User Profile Page
            <small>
                <i class=\"ace-icon fa fa-angle-double-right\"></i>
                3 styles with inline editable feature
            </small>
        </h1>
    </div><!-- /.page-header -->#}

    <div class=\"row\">
    <div class=\"col-xs-12\">
    <!-- PAGE CONTENT BEGINS -->
{#    <div class=\"clearfix\">
        <div class=\"pull-left alert alert-success no-margin alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                <i class=\"ace-icon fa fa-times\"></i>
            </button>

            <i class=\"ace-icon fa fa-umbrella bigger-120 blue\"></i>
            Click on the image below or on profile fields to edit them ...
        </div>

        <div class=\"pull-right\">
            <span class=\"green middle bolder\">Choose profile: &nbsp;</span>

            <div class=\"btn-toolbar inline middle no-margin\">
                <div data-toggle=\"buttons\" class=\"btn-group no-margin\">
                    <label class=\"btn btn-sm btn-yellow active\">
                        <span class=\"bigger-110\">1</span>

                        <input type=\"radio\" value=\"1\">
                    </label>

                    <label class=\"btn btn-sm btn-yellow\">
                        <span class=\"bigger-110\">2</span>

                        <input type=\"radio\" value=\"2\">
                    </label>

                    <label class=\"btn btn-sm btn-yellow\">
                        <span class=\"bigger-110\">3</span>

                        <input type=\"radio\" value=\"3\">
                    </label>
                </div>
            </div>
        </div>
    </div>#}

    <div class=\"hr dotted\"></div>

    <div class=\"\">
    <div id=\"user-profile-1\" class=\"user-profile row\">
    <div class=\"col-xs-12 col-sm-3 center\">
        <div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"profile-picture\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"avatar\" class=\"editable img-responsive editable-click editable-empty\" alt=\"Photo de {{ user.prenomParent }}{{ user.nomParent }}\" src=\"assets/images/avatars/profile-pic.jpg\"></img>
\t\t\t\t\t\t\t\t\t\t\t\t</span>

            <div class=\"space-4\"></div>

            <div class=\"width-80 label label-info label-xlg arrowed-in arrowed-in-right\">
                <div class=\"inline position-relative\">
                    <a href=\"#\" class=\"user-title-label dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"ace-icon fa fa-circle light-green\"></i>
                        &nbsp;
                        <span class=\"white\">{{ user.prenomParent }} {{ user.nomParent }}</span>
                    </a>

                    <ul class=\"align-left dropdown-menu dropdown-caret dropdown-lighter\">
                        <li class=\"dropdown-header\"> Change Status </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-circle green\"></i>
                                &nbsp;
                                <span class=\"green\">Available</span>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-circle red\"></i>
                                &nbsp;
                                <span class=\"red\">Busy</span>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-circle grey\"></i>
                                &nbsp;
                                <span class=\"grey\">Invisible</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"space-6\"></div>

        <div class=\"profile-contact-info\">
{#            <div class=\"profile-contact-links align-left\">
                <a href=\"#\" class=\"btn btn-link\">
                    <i class=\"ace-icon fa fa-plus-circle bigger-120 green\"></i>
                    Add as a friend
                </a>

                <a href=\"#\" class=\"btn btn-link\">
                    <i class=\"ace-icon fa fa-envelope bigger-120 pink\"></i>
                    Send a message
                </a>

                <a href=\"#\" class=\"btn btn-link\">
                    <i class=\"ace-icon fa fa-globe bigger-125 blue\"></i>
                    www.alexdoe.com
                </a>
            </div>#}

            <div class=\"space-6\"></div>

{#            <div class=\"profile-social-links align-center\">
                <a href=\"#\" class=\"tooltip-info\" title=\"\" data-original-title=\"Visit my Facebook\">
                    <i class=\"middle ace-icon fa fa-facebook-square fa-2x blue\"></i>
                </a>

                <a href=\"#\" class=\"tooltip-info\" title=\"\" data-original-title=\"Visit my Twitter\">
                    <i class=\"middle ace-icon fa fa-twitter-square fa-2x light-blue\"></i>
                </a>

                <a href=\"#\" class=\"tooltip-error\" title=\"\" data-original-title=\"Visit my Pinterest\">
                    <i class=\"middle ace-icon fa fa-pinterest-square fa-2x red\"></i>
                </a>
            </div>#}
        </div>

        <div class=\"hr hr12 dotted\"></div>

       <div class=\"clearfix\">
            <div>
                <span class=\"bigger-175 blue\">{{ nbrEnfant }}</span>

                <br>
                Nombre d'anfants inscrits
            </div>

           {# <div class=\"grid2\">
               <span class=\"bigger-175 blue\">12</span>

               <br>
               Following
           </div>#}
       </div>

        <div class=\"hr hr16 dotted\"></div>
    </div>

    <div class=\"col-xs-12 col-sm-9\">
    {#<div class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-app btn-sm btn-light no-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"line-height-1 bigger-170 blue\"> 1,411 </span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"line-height-1 bigger-170\"> Nombre d'enfants inscrits </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-app btn-sm btn-yellow no-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"line-height-1 bigger-170\"> 32 </span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"line-height-1 smaller-90\"> Followers </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-app btn-sm btn-pink no-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"line-height-1 bigger-170\"> 4 </span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"line-height-1 smaller-90\"> Projects </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-app btn-sm btn-grey no-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"line-height-1 bigger-170\"> 23 </span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"line-height-1 smaller-90\"> Reviews </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-app btn-sm btn-success no-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"line-height-1 bigger-170\"> 7 </span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"line-height-1 smaller-90\"> Albums </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-app btn-sm btn-primary no-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"line-height-1 bigger-170\"> 55 </span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"line-height-1 smaller-90\"> Contacts </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
    </div>
#}
    <div class=\"space-12\"></div>

    <div class=\"profile-user-info profile-user-info-striped\">
        <div class=\"profile-info-row\">
            <div class=\"profile-info-name\"> Nom </div>

            <div class=\"profile-info-value\">
                <span class=\"editable editable-click\" id=\"nomParent\" style=\"display: inline;\">{{ user.nomParent }}</span>
            </div>
        </div>

        <div class=\"profile-info-row\">
            <div class=\"profile-info-name\"> Prenom </div>

            <div class=\"profile-info-value\">
                <span class=\"editable editable-click\" id=\"prenomParent\" style=\"display: inline;\">{{ user.prenomParent }}</span>
            </div>
        </div>

        <div class=\"profile-info-row\">
            <div class=\"profile-info-name\"> CIN </div>

            <div class=\"profile-info-value\">
                <span class=\"editable editable-click\" id=\"cinParent\" style=\"display: inline;\">{{ user.cinParent }}</span>
            </div>
        </div>

        <div class=\"profile-info-row\">
            <div class=\"profile-info-name\"> Numéro de téléphone </div>

            <div class=\"profile-info-value\">
                <span class=\"editable editable-click\" id=\"numTelParent\" style=\"display: inline;\">{{ user.numTelParent }}</span>
            </div>
        </div>

        <div class=\"profile-info-row\">
            <div class=\"profile-info-name\"> Adresse </div>

            <div class=\"profile-info-value\">
                <i class=\"fa fa-map-marker light-orange bigger-110\"></i>
                <span class=\"editable editable-click\" id=\"adresseParent\" style=\"display: inline;\">{{ user.adresseParent }}</span>
            </div>
        </div>

        <div class=\"profile-info-row\">
            <div class=\"profile-info-name\"> E-mail </div>

            <div class=\"profile-info-value\">
                <span class=\"editable editable-click\" id=\"emailParent\" style=\"display: inline;\">{{ user.emailParent }}</span>
            </div>
        </div>

        <div class=\"profile-info-row\">
            <div class=\"profile-info-name\"> Fonction </div>

            <div class=\"profile-info-value\">
                <span class=\"editable editable-click\" id=\"fonctionParent\" style=\"display: inline;\">{{ user.fonctionParent }}</span>
            </div>
        </div>
    </div>

    <div class=\"space-20\"></div>

    {#<div class=\"widget-box transparent\">
    <div class=\"widget-header widget-header-small\">
        <h4 class=\"widget-title blue smaller\">
            <i class=\"ace-icon fa fa-rss orange\"></i>
            Recent Activities
        </h4>

        <div class=\"widget-toolbar action-buttons\">
            <a href=\"#\" data-action=\"reload\">
                <i class=\"ace-icon fa fa-refresh blue\"></i>
            </a>
            &nbsp;
            <a href=\"#\" class=\"pink\">
                <i class=\"ace-icon fa fa-trash-o\"></i>
            </a>
        </div>
    </div>

    <div class=\"widget-body\">
    <div class=\"widget-main padding-8\">
    <div id=\"profile-feed-1\" class=\"profile-feed ace-scroll\" style=\"position: relative;\"><div class=\"scroll-track scroll-active\" style=\"display: block; height: 200px;\"><div class=\"scroll-bar\" style=\"height: 63px; top: 0px;\"></div></div><div class=\"scroll-content\" style=\"max-height: 200px;\">
    <div class=\"profile-activity clearfix\">
        <div>
            <img class=\"pull-left\" alt=\"Alex Doe's avatar\" src=\"assets/images/avatars/avatar5.png\">
            <a class=\"user\" href=\"#\"> Alex Doe </a>
            changed his profile photo.
            <a href=\"#\">Take a look</a>

            <div class=\"time\">
                <i class=\"ace-icon fa fa-clock-o bigger-110\"></i>
                an hour ago
            </div>
        </div>

        <div class=\"tools action-buttons\">
            <a href=\"#\" class=\"blue\">
                <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
            </a>

            <a href=\"#\" class=\"red\">
                <i class=\"ace-icon fa fa-times bigger-125\"></i>
            </a>
        </div>
    </div>

    <div class=\"profile-activity clearfix\">
        <div>
            <img class=\"pull-left\" alt=\"Susan Smith's avatar\" src=\"assets/images/avatars/avatar1.png\">
            <a class=\"user\" href=\"#\"> Susan Smith </a>

            is now friends with Alex Doe.
            <div class=\"time\">
                <i class=\"ace-icon fa fa-clock-o bigger-110\"></i>
                2 hours ago
            </div>
        </div>

        <div class=\"tools action-buttons\">
            <a href=\"#\" class=\"blue\">
                <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
            </a>

            <a href=\"#\" class=\"red\">
                <i class=\"ace-icon fa fa-times bigger-125\"></i>
            </a>
        </div>
    </div>

    <div class=\"profile-activity clearfix\">
        <div>
            <i class=\"pull-left thumbicon fa fa-check btn-success no-hover\"></i>
            <a class=\"user\" href=\"#\"> Alex Doe </a>
            joined
            <a href=\"#\">Country Music</a>

            group.
            <div class=\"time\">
                <i class=\"ace-icon fa fa-clock-o bigger-110\"></i>
                5 hours ago
            </div>
        </div>

        <div class=\"tools action-buttons\">
            <a href=\"#\" class=\"blue\">
                <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
            </a>

            <a href=\"#\" class=\"red\">
                <i class=\"ace-icon fa fa-times bigger-125\"></i>
            </a>
        </div>
    </div>

    <div class=\"profile-activity clearfix\">
        <div>
            <i class=\"pull-left thumbicon fa fa-picture-o btn-info no-hover\"></i>
            <a class=\"user\" href=\"#\"> Alex Doe </a>
            uploaded a new photo.
            <a href=\"#\">Take a look</a>

            <div class=\"time\">
                <i class=\"ace-icon fa fa-clock-o bigger-110\"></i>
                5 hours ago
            </div>
        </div>

        <div class=\"tools action-buttons\">
            <a href=\"#\" class=\"blue\">
                <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
            </a>

            <a href=\"#\" class=\"red\">
                <i class=\"ace-icon fa fa-times bigger-125\"></i>
            </a>
        </div>
    </div>

    <div class=\"profile-activity clearfix\">
        <div>
            <img class=\"pull-left\" alt=\"David Palms's avatar\" src=\"assets/images/avatars/avatar4.png\">
            <a class=\"user\" href=\"#\"> David Palms </a>

            left a comment on Alex's wall.
            <div class=\"time\">
                <i class=\"ace-icon fa fa-clock-o bigger-110\"></i>
                8 hours ago
            </div>
        </div>

        <div class=\"tools action-buttons\">
            <a href=\"#\" class=\"blue\">
                <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
            </a>

            <a href=\"#\" class=\"red\">
                <i class=\"ace-icon fa fa-times bigger-125\"></i>
            </a>
        </div>
    </div>

    <div class=\"profile-activity clearfix\">
        <div>
            <i class=\"pull-left thumbicon fa fa-pencil-square-o btn-pink no-hover\"></i>
            <a class=\"user\" href=\"#\"> Alex Doe </a>
            published a new blog post.
            <a href=\"#\">Read now</a>

            <div class=\"time\">
                <i class=\"ace-icon fa fa-clock-o bigger-110\"></i>
                11 hours ago
            </div>
        </div>

        <div class=\"tools action-buttons\">
            <a href=\"#\" class=\"blue\">
                <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
            </a>

            <a href=\"#\" class=\"red\">
                <i class=\"ace-icon fa fa-times bigger-125\"></i>
            </a>
        </div>
    </div>

    <div class=\"profile-activity clearfix\">
        <div>
            <img class=\"pull-left\" alt=\"Alex Doe's avatar\" src=\"assets/images/avatars/avatar5.png\">
            <a class=\"user\" href=\"#\"> Alex Doe </a>

            upgraded his skills.
            <div class=\"time\">
                <i class=\"ace-icon fa fa-clock-o bigger-110\"></i>
                12 hours ago
            </div>
        </div>

        <div class=\"tools action-buttons\">
            <a href=\"#\" class=\"blue\">
                <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
            </a>

            <a href=\"#\" class=\"red\">
                <i class=\"ace-icon fa fa-times bigger-125\"></i>
            </a>
        </div>
    </div>

    <div class=\"profile-activity clearfix\">
        <div>
            <i class=\"pull-left thumbicon fa fa-key btn-info no-hover\"></i>
            <a class=\"user\" href=\"#\"> Alex Doe </a>

            logged in.
            <div class=\"time\">
                <i class=\"ace-icon fa fa-clock-o bigger-110\"></i>
                12 hours ago
            </div>
        </div>

        <div class=\"tools action-buttons\">
            <a href=\"#\" class=\"blue\">
                <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
            </a>

            <a href=\"#\" class=\"red\">
                <i class=\"ace-icon fa fa-times bigger-125\"></i>
            </a>
        </div>
    </div>

    <div class=\"profile-activity clearfix\">
        <div>
            <i class=\"pull-left thumbicon fa fa-power-off btn-inverse no-hover\"></i>
            <a class=\"user\" href=\"#\"> Alex Doe </a>

            logged out.
            <div class=\"time\">
                <i class=\"ace-icon fa fa-clock-o bigger-110\"></i>
                16 hours ago
            </div>
        </div>

        <div class=\"tools action-buttons\">
            <a href=\"#\" class=\"blue\">
                <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
            </a>

            <a href=\"#\" class=\"red\">
                <i class=\"ace-icon fa fa-times bigger-125\"></i>
            </a>
        </div>
    </div>

    <div class=\"profile-activity clearfix\">
        <div>
            <i class=\"pull-left thumbicon fa fa-key btn-info no-hover\"></i>
            <a class=\"user\" href=\"#\"> Alex Doe </a>

            logged in.
            <div class=\"time\">
                <i class=\"ace-icon fa fa-clock-o bigger-110\"></i>
                16 hours ago
            </div>
        </div>

        <div class=\"tools action-buttons\">
            <a href=\"#\" class=\"blue\">
                <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
            </a>

            <a href=\"#\" class=\"red\">
                <i class=\"ace-icon fa fa-times bigger-125\"></i>
            </a>
        </div>
    </div>
    </div></div>
    </div>
    </div>
    </div>

    <div class=\"hr hr2 hr-double\"></div>

    <div class=\"space-6\"></div>

    <div class=\"center\">
        <button type=\"button\" class=\"btn btn-sm btn-primary btn-white btn-round\">
            <i class=\"ace-icon fa fa-rss bigger-150 middle orange2\"></i>
            <span class=\"bigger-110\">View more activities</span>

            <i class=\"icon-on-right ace-icon fa fa-arrow-right\"></i>
        </button>
    </div>
    </div>
    </div>
    </div>
#}

{% endblock %}", "@projet/Default/Parent/profile.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Parent\\profile.html.twig");
    }
}
