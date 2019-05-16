<!DOCTYPE html>
<html lang="en" class="cssall cssgradients rgba opacity supports textshadow cssanimations bgrepeatround bgrepeatspace boxshadow csstransforms csstransforms3d csstransitions desktop theme-skin-dark theme-color-673bb7">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>REMY - RScard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.png"/>

    <!-- Google Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fredoka+One">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic">

    <!-- Icon Fonts -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' ); ?>/fonts/map-icons/css/map-icons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' ); ?>/fonts/icomoon/style.css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_bloginfo( 'template_directory' ); ?>/js/plugins/jquery.bxslider/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_bloginfo( 'template_directory' ); ?>/js/plugins/jquery.customscroll/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_bloginfo( 'template_directory' ); ?>/js/plugins/jquery.mediaelement/mediaelementplayer.min.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_bloginfo( 'template_directory' ); ?>/js/plugins/jquery.fancybox/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_bloginfo( 'template_directory' ); ?>/js/plugins/jquery.owlcarousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_bloginfo( 'template_directory' ); ?>/js/plugins/jquery.owlcarousel/owl.theme.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_bloginfo( 'template_directory' ); ?>/js/plugins/jquery.optionpanel/option-panel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_bloginfo( 'template_directory' ); ?>/colors/theme-color.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Modernizer for detect what features the user’s browser has to offer -->
    <!--  Rediriger avec la balise PHP pour choper le bon chemin             -->
    <script type="text/javascript"
            src="<?php echo get_bloginfo( 'template_directory' ); ?>/js/libs/modernizr.js"></script>

</head>

<body class="home header-has-img loading">

<div class="mobile-nav">
    <button class="btn-mobile mobile-nav-close"><i class="rsicon rsicon-close"></i></button>

    <div class="mobile-nav-inner">
        <nav id="mobile-nav" class="nav">
            <ul class="clearfix">
                <li><a href="index.html#about">About</a></li>
                <li><a href="index.html#skills">Skills</a></li>
                <li><a href="index.html#portfolio">Portfolio</a></li>
                <li><a href="index.html#experience">Experience</a></li>
                <li><a href="index.html#references">References</a></li>
                <li>
                    <a href="index.php">Blog</a>
                    <ul>
                        <li><a href="single-image.html">Image Post</a></li>
                        <li><a href="single-slider.html">Slider Post</a></li>
                        <li><a href="single-video.html">Video Post</a></li>
                        <li><a href="single-audio.html">Audio Post</a></li>
                        <li><a href="single-vimeo.html">Vimeo Post</a></li>
                        <li><a href="single-youtube.html">Youtube Post</a></li>
                        <li><a href="single-dailymotion.html">Dailymotion Post</a></li>
                        <li><a href="single.html">Without Media Post</a></li>
                        <li><a href="typography.html">Typography Page</a></li>
                        <li><a href="icons.html">Icons Page</a></li>
                        <li><a href="404.html">404 Page</a></li>
                    </ul>
                </li>
                <li><a href="index.html#calendar">Calendar <span></span></a></li>
                <li><a href="index.html#contact">Contact <span></span></a></li>
            </ul>
        </nav>
    </div>
</div><!-- .mobile-nav -->

<div class="sidebar sidebar-fixed">
    <button class="btn-sidebar btn-sidebar-close"><i class="rsicon rsicon-close"></i></button>

    <div class="widget-area">
        <aside class="widget widget-profile">
            <div class="profile-photo">
                <img src="img/uploads/rs-photo-v2.jpg" alt="Robert Smith"/>
            </div>
            <div class="profile-info">
                <h2 class="profile-title">Robert Smith</h2>
                <h3 class="profile-position">Developer and Startup entrepreneur</h3>
            </div>
        </aside><!-- .widget-profile -->

        <aside class="widget widget_search">
            <h2 class="widget-title">Search</h2>
            <form class="search-form">
                <label class="ripple">
                    <span class="screen-reader-text">Search for:</span>
                    <input class="search-field" type="search" placeholder="Search">
                </label>
                <input type="submit" class="search-submit" value="Search">
            </form>
        </aside><!-- .widget_search -->

        <aside class="widget widget_contact">
            <h2 class="widget-title">Contact Me</h2>
            <form class="contactForm" action="https://rscard.px-lab.com/html/php/contact_form.php" method="post">
                <div class="input-field">
                    <input class="contact-name" type="text" name="name"/>
                    <span class="line"></span>
                    <label>Name</label>
                </div>

                <div class="input-field">
                    <input class="contact-email" type="email" name="email"/>
                    <span class="line"></span>
                    <label>Email</label>
                </div>

                <div class="input-field">
                    <input class="contact-subject" type="text" name="subject"/>
                    <span class="line"></span>
                    <label>Subject</label>
                </div>

                <div class="input-field">
                    <textarea class="contact-message" rows="4" name="message"></textarea>
                    <span class="line"></span>
                    <label>Message</label>
                </div>

                <span class="btn-outer btn-primary-outer ripple">
						<input class="contact-submit btn btn-lg btn-primary" type="submit" value="Send"/>
					</span>

                <div class="contact-response"></div>
            </form>
        </aside><!-- .widget_contact -->

        <aside class="widget widget-popuplar-posts">
            <h2 class="widget-title">Popular posts</h2>
            <ul>
                <li>
                    <div class="post-media"><a href="index.html"><img src="img/uploads/thumb-78x56-1.jpg" alt=""/></a>
                    </div>
                    <h3 class="post-title"><a href="index.html">Standard Post Format With Featured Image</a></h3>
                    <div class="post-info"><a href="index.html"><i class="rsicon rsicon-comments"></i>56 comments</a>
                    </div>
                </li>
                <li>
                    <div class="post-media"><a href="index.html"><img src="img/uploads/thumb-78x56-2.jpg" alt=""/></a>
                    </div>
                    <h3 class="post-title"><a href="index.html">Standard Post Format With Featured Image</a></h3>
                    <div class="post-info"><a href="index.html"><i class="rsicon rsicon-comments"></i>56 comments</a>
                    </div>
                </li>
                <li>
                    <div class="post-media"><a href="index.html"><img src="img/uploads/thumb-78x56-3.jpg" alt=""/></a>
                    </div>
                    <h3 class="post-title"><a href="index.html">Standard Post Format With Featured Image</a></h3>
                    <div class="post-info"><a href="index.html"><i class="rsicon rsicon-comments"></i>56 comments</a>
                    </div>
                </li>
            </ul>
        </aside><!-- .widget-popuplar-posts -->

        <aside class="widget widget_tag_cloud">
            <h2 class="widget-title">Tag Cloud</h2>
            <div class="tagcloud">
                <a href="index.html" title="1 topic">Business</a>
                <a href="index.html" title="9 topics">City</a>
                <a href="index.html" title="10 topics">Creative</a>
                <a href="index.html" title="6 topics">Fashion</a>
                <a href="index.html" title="2 topics">Music</a>
                <a href="index.html" title="5 topics">News</a>
                <a href="index.html" title="9 topics">Peoples</a>
            </div>
        </aside><!-- .widget_tag_cloud -->

        <aside class="widget widget-recent-posts">
            <h2 class="widget-title">Recent posts</h2>
            <ul>
                <li>
                    <div class="post-tag">
                        <a href="index.html">#Photo</a>
                        <a href="index.html">#Architect</a>
                    </div>
                    <h3 class="post-title"><a href="index.html">Standard Post Format With Featured Image</a></h3>
                    <div class="post-info"><a href="index.html"><i class="rsicon rsicon-comments"></i>56 comments</a>
                    </div>
                </li>
                <li>
                    <div class="post-tag">
                        <a href="index.html">#Photo</a>
                        <a href="index.html">#Architect</a>
                    </div>
                    <h3 class="post-title"><a href="index.html">Standard Post Format With Featured Image</a></h3>
                    <div class="post-info"><a href="index.html"><i class="rsicon rsicon-comments"></i>56 comments</a>
                    </div>
                </li>
                <li>
                    <div class="post-tag">
                        <a href="index.html">#Photo</a>
                        <a href="index.html">#Architect</a>
                    </div>
                    <h3 class="post-title"><a href="index.html">Standard Post Format With Featured Image</a></h3>
                    <div class="post-info"><a href="index.html"><i class="rsicon rsicon-comments"></i>56 comments</a>
                    </div>
                </li>
            </ul>
        </aside><!-- .widget-recent-posts -->

        <aside class="widget widget_categories">
            <h2 class="widget-title">Categories</h2>
            <ul>
                <li><a href="index.html" title="Architecture Category Posts">Architecture</a> (9)</li>
                <li><a href="index.html" title="Business Category Posts">Business</a> (16)</li>
                <li><a href="index.html" title="Creative Category Posts">Creative</a> (18)</li>
                <li><a href="index.html" title="Design Category Posts">Design</a> (10)</li>
                <li><a href="index.html" title="Development Category Posts">Development</a> (14)</li>
                <li><a href="index.html" title="Education Category Posts">Education</a> (9)</li>
            </ul>
        </aside><!-- .widget_categories -->
    </div><!-- .widget-area -->
</div><!-- .sidebar -->

<div class="wrapper">
    <header class="header">
        <div class="head-bg" style="background-image: url('img/uploads/rs-cover.jpg')"></div>

        <div class="head-bar">
            <div class="head-bar-inner">
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <a class="logo" href="index.html"><span>RS</span>card</a>
                        <!-- <a class="head-logo" href=""><img src="img/rs-logo.png" alt="RScard"/></a> -->
                    </div>

                    <div class="col-sm-9 col-xs-6">
                        <div class="nav-wrap">
                            <nav id="nav" class="nav">
                                <ul class="clearfix">
                                    <li><a href="index.html#about">About</a></li>
                                    <li><a href="index.html#skills">Skills</a></li>
                                    <li><a href="index.html#portfolio">Portfolio</a></li>
                                    <li><a href="index.html#experience">Experience</a></li>
                                    <li><a href="index.html#references">References</a></li>
                                    <li>
                                        <a href="index.php">Blog</a>
                                        <ul>
                                            <li><a href="single-image.html">Image Post</a></li>
                                            <li><a href="single-slider.html">Slider Post</a></li>
                                            <li><a href="single-video.html">Video Post</a></li>
                                            <li><a href="single-audio.html">Audio Post</a></li>
                                            <li><a href="single-vimeo.html">Vimeo Post</a></li>
                                            <li><a href="single-youtube.html">Youtube Post</a></li>
                                            <li><a href="single-dailymotion.html">Dailymotion Post</a></li>
                                            <li><a href="single.html">Without Media Post</a></li>
                                            <li><a href="typography.html">Typography Page</a></li>
                                            <li><a href="icons.html">Icons Page</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.html#calendar">Calendar <span></span></a></li>
                                    <li><a href="index.html#contact">Contact <span></span></a></li>
                                </ul>
                            </nav>

                            <button class="btn-mobile btn-mobile-nav">Menu</button>
                            <button class="btn-sidebar btn-sidebar-open"><i class="rsicon rsicon-menu"></i></button>
                        </div><!-- .nav-wrap -->
                    </div>
                </div>
            </div>
        </div>
    </header>