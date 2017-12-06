<!doctype html>
<html <?php language_attributes(); ?> class="no-js" ⚡>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link rel="canonical" href="$SOME_URL">
    <title>
        <?php wp_title(''); ?>
        <?php if(wp_title('', false)) { echo ' :'; } ?>
        <?php bloginfo('name'); ?>
    </title>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <style amp-custom>
        <?php include 'style-amp.css';?>
    </style>

    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="header">
            <div class="logo">
                <a href="<?php echo home_url(); ?>"><amp-img src="<?php echo get_theme_mod( 'minimalPhoto_logo' ) ?>" width="300" height="76" layout="responsive"></amp-img></a>
                <div class="slogan">Cherish Love's Story</div>
            </div>
            <nav>
                <?php wp_nav_menu( array('menu' => 'main' )); ?>
            </nav>
            <div class="phoneNo"><span><a href="tel:972-345-8089">972.345.8089</a></span><br>
                <div class="email"><a href="mailto:matthew@matthewtrader.com">Matthew@MatthewTRader.com</a><br></div>
                <!-- copyright -->
                <p class="copyright">
                    &copy;
                    <?php echo date('Y'); ?> Copyright Matthew T Rader</a>.
                </p>
                <!-- /copyright -->
            </div>
        </div>
    </header>
    <!-- /header -->
    <main role="main">