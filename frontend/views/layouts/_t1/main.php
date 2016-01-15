<!DOCTYPE html>
<!--[if IE 7 ]>
<html class="lt-ie9 lt-ie8 ie7 no-js desktop " lang="en-US"><![endif]-->
<!--[if IE 8 ]>
<html class="lt-ie9 ie8 no-js desktop " lang="en-US"><![endif]-->
<!--[if IE 9 ]>
<html class="ie9 no-js desktop " lang="en-US"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js desktop " lang="en-US"><!--<![endif]-->



<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>

<!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8"/>
    <title>Reversal | Just another Pixelentity Themes Sites site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- favicon -->
    <link rel="shortcut icon" href="http://reversal.themes.pixelentity.com/wp-content/themes/reversal/favicon.ico"/>

    <link rel="stylesheet" type="text/css"
          href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600&amp;subset=latin,latin-ext">
    <!-- scripts and wp_head() here -->


    <link rel='stylesheet' id='pe_theme_compressed-css'
          href='<?php echo Yii::getAlias('@web') ?>/css/t1/theme.min4c43.css' type='text/css'
          media='all'/>

    <link rel='stylesheet' id='pe_theme_compressed-css' href='<?php echo Yii::getAlias('@web') ?>/css/t1/slick.css' type='text/css'              media='all'/>
    <link rel='stylesheet' id='pe_theme_init-css' href='<?php echo Yii::getAlias('@web') ?>/css/t1/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='pe_theme_init-css' href='<?php echo Yii::getAlias('@web') ?>/css/t1/bootstrap.min.css' type='text/css' media='all'/>
    <script type='text/javascript' src='<?php echo Yii::getAlias('@web') ?>/js/t1/jquery.js'></script>
    <!--<script type='text/javascript' src='wp-includes/js/comment-reply.min1bba.js?ver=3.5'></script>-->



    <style type="text/css">.recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }</style>
    <style type="text/css">body, input, select, textarea {
            font-family: 'Open Sans';
        }</style>


</head>

<body class="home page page-id-5 page-parent page-template page-template-page-home-php">


<?= $content ?>

<script type='text/javascript' src="<?php echo Yii::getAlias('@web') ?>/js/t1/slick.min.js"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('#store-slider .slider').slick({
            dots: true,
            infinite: true,
            speed: 400,
            slidesToShow: 10,
            centerMode: true,
            variableWidth: false,
            arrows: true,
            prevArrow: '<button type="button" class="slider-prev"></button>',
            nextArrow: '<button type="button" class="slider-next"></button>'
            //width: true
        });
    })
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var o = {
        "dark": "http:\/\/reversal.themes.bitfade.com\/wp-content\/themes\/reversal\/css\/dark_skin.css",
        "css": "hr.fancy-hr:before{background-color:#d00355;}.get-started{background-color:#d00355;}hr.fancy-hr-alt:before{background-color:#d00355;}::selection{background-color:#d00355;}::-moz-selection{background-color:#d00355;}::-webkit-selection{background-color:#d00355;}.progress:hover .bar{background-color:#d00355;}input:focus, textarea:focus, select:focus{background-color:#d00355;}input[type=\"submit\"], button, a.button{background:#d00355;}.pager a:hover{background-color:#d00355;}.pagination .current{background-color:#d00355;}.pagination .current:hover{background-color:#d00355;}.tagcloud a:hover{background-color:#d00355;}.commentlist .reply a:hover{background-color:#d00355;}.form-horizontal button{background-color:#d00355;}a, a>*{color:#d00355;}nav#main-nav ul li a.active{color:#d00355;}nav#main-nav ul li a.current{color:#d00355;}.intro h1 span{color:#d00355;}.desktop .get-started:hover i{color:#d00355;}.features .feature-box .box-content .feature-icon{color:#d00355;}.features-list .feature-box .feature-text h3{color:#d00355;}.post .post-title h2 a:hover{color:#d00355;}.required{color:#d00355;}.post blockquote p{border-color:#d00355;}.commentlist .bypostauthor>.comment-body>.comment-author img{border-color:#d00355;}"
    };
    /* ]]> */
</script>

<script type='text/javascript'src='<?php echo Yii::getAlias('@web') ?>/js/t1/theme.min.js'></script>
<script type='text/javascript'src='<?php echo Yii::getAlias('@web') ?>/js/t1/bootstrap.min.js'></script>

<script>
    $ = jQuery
    $(function() {
        $('#store-slider').css('opacity', '0')
        $('a[href*=#]:not([href=#])').click(function() {

            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

                if($(this.hash).attr('id') != 'intro'){
                    $('#side-nav ').show()
                    $('footer ').show()
                    $('#store-slider').css('opacity', '1')
                }else{
                    $('#side-nav').hide()
                    $('footer').hide()
                    $('#store-slider').css('opacity', '0')
                }

                if (target.length) {
                    $('html,body').animate({
                        scrollLeft: target.offset().left
                    }, 500);
                    return false;
                }
            }
        });


            $("input#submit").click(function(){
                $.ajax({
                    type: "POST",
                    url: "process.php", //process to mail
                    data: $('form.contact').serialize(),
                    success: function(msg){
                        $("#thanks").html(msg) //hide button and show thank you
                        $("#form-content").modal('hide'); //hide popup
                    },
                    error: function(){
                        alert("failure");
                    }
                });
            });

    });
</script>

</body>

<!-- Mirrored from reversal.themes.bitfade.com/ by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 23 Dec 2014 17:56:38 GMT -->
</html>
<!-- Dynamic page generated in 0.144 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2014-01-08 13:36:29 -->

<!-- Compression = gzip -->