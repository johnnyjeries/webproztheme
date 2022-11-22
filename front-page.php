<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


        </header>
        <div id="container">
            <main id="content" role="main">
<?php 
get_header();
$mobile_browser = wp_is_mobile();
?>

<div id="ThePage">
    <div id="playground">
        <div class="words container" style="">
            <h1 class="Johnny" id="scrollFade">Hi,  </h1><br> 
            <h1 class="Johnny">I'm <span class="Johnny1">Johnny</span> from </h1>
            <img class="logo-img" src=" <?php echo get_template_directory_uri() . '/images/image(5).png' ?>"> <br>
            <h1 class="Johnny" style="font-size:50px;"><span class="Johnny1">Full Stack Web Developer </span></h1>
            <h3 class="Johnny"><span class="Johnny1">Wordpress</span> and SEO Expert</h3>
        </div>
        <div class="services bg-img d-flex">
            <div class="d-flex align-items-center justify-content-center dark-bg">
                <div class="container">
                <h1 class="Johnny1 text-center my-5"> WebProz Services</h1>
                    <div class="row">
                    <?php foreach($services as $service) {?>
                        <div class="col-md-3 col-12 col-sm-6 mmb20 my-5" style="text-align: center;">
                            <h4 class="hover-effect font-weight"><?php echo $service['name']; ?></h4>
                            <div class="white-background">
                            <img class="d-block m-auto imgc"style="max-width:80px; max-height:80px;" src="<?php echo get_template_directory_uri() . $service['icon']; ?>"/>
                            </div>
                            <p class="hover-effect font-weight"><?php echo $service['desc']; ?></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row projects" id="#projects">
    <div class="projects-title d-flex align-items-center justify-content-center p-auto" style="height:100px;">
        <h2 class="my-5 hover-effect" style="letter-spacing:5px; font-weight:700">OUR LATEST WORK</h2>
    </div>
    <div class="align-items-center justify-content-center">
        <div class="row container my-projects" style="margin:auto;">
            <?php foreach($projects as $project){ ?> 
            <div class="col-md-4 col-12 col-sm-12 mmb20 project my-5" style="background-image: url('<?php echo get_template_directory_uri() . $project['image'];  ?>')">
            <h3 class="projects-names Johnny" style="text-align: center;"> <?php echo $project['name'] ?></h3>

            </div>
            <?php } ?>
        </div>
    </div>
        </div>
        <div class="row container-fluid align-items-center justify-content-center d-flex p-5" style="background-color:black;">
            <div class="contact-title">
                <h2 style="letter-spacing:5px; font-weight:700" class="hover-effect"> Contact Us!</h2>
            </div>
            <div class="mainform py-5 align-items-center justify-content-center d-flex">
                <?php echo do_shortcode('[contact-form-7 id="20" title="Contact form 1"]'); ?>
            </div>
        </div>

    </div>
</div>

<?php
get_template_part( 'nav', 'below' );
get_footer();
?>