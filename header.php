<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
        <?php wp_title(''); ?>
        <?php if(wp_title('', false)) { echo ' :'; } ?>
        <?php bloginfo('name'); ?>
    </title>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <style amp-custom>
        <?php include 'style-amp.css';
        ?>
    </style>

    <style amp-boilerplate>
        <?php include 'amp-boilerplate.css';
        ?>
    </style>
    <noscript>
    <style amp-boilerplate>
        body { 
            -webkit-animation:none;
            -moz-animation:none;
            -ms-animation:none;
            animation:none
        }
    </style>
    </noscript>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="header">
            <div class="logo">
                <a href="/weddings"><amp-img src="http://matthewtrader.com/wp-content/uploads/2014/07/Dallas-Weddings-Logo.png" width="300" height="76" layout="responsive"></amp-img></a>
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