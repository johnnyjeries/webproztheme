<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


    </header>
    <div id="container" style="overflow:hidden">
        <main id="content" role="main">
            <?php 
get_header();
$mobile_browser = wp_is_mobile();
?>

            <div id="ThePage">
                <div id="playground">
                    <div class="words container" style="">
                        <h1 class="Johnny" id="scrollFade">Hi, </h1><br>
                        <h1 class="Johnny">I'm <span class="Johnny1">Johnny</span> from </h1>
                        <img class="logo-img"
                            src=" <?php echo get_template_directory_uri() . '/images/image(5).png' ?>"> <br>
                        <h1 class="Johnny" style="font-size:50px;"><span class="Johnny1">Full Stack Web Developer
                            </span></h1>
                        <h3 class="Johnny"><span class="Johnny1">Wordpress</span> and SEO Expert</h3>
                    </div>
                    <div class="services bg-img d-flex">
                        <div class="d-flex align-items-center justify-content-center dark-bg">
                            <div class="container">
                                <h1 id="services-title" class="Johnny1 text-center my-5"> WebProz Services</h1>
                                <div class="row">
                                    <?php foreach($services as $service) {?>
                                    <div class="col-md-3 col-12 col-sm-6 mmb20 my-5" style="text-align: center;">
                                        <h4 class="hover-effect font-weight"><?php echo $service['name']; ?></h4>
                                        <div class="white-background">
                                            <img class="d-block m-auto imgc" style="max-width:80px; max-height:80px;"
                                                src="<?php echo get_template_directory_uri() . $service['icon']; ?>" />
                                        </div>
                                        <p class="hover-effect font-weight"><?php echo $service['desc']; ?></p>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row projects" id="projects">
                        <div class="projects-title d-flex align-items-center justify-content-center p-auto"
                            style="height:100px;">
                            <h2 id="projects-title" class="my-5 hover-effect"
                                style="letter-spacing:5px; font-weight:700">OUR LATEST WORK
                            </h2>
                        </div>
                        <div class="align-items-center justify-content-center">
                            <div class="row container my-projects" style="margin:auto;">
                                <?php foreach($projects as $project){ ?>
                                <div class="col-md-4 col-12 col-sm-12 mmb20 project my-5"
                                    style="background-image: url('<?php echo get_template_directory_uri() . $project['image'];  ?>')">
                                    <h4 class="projects-names Johnny"
                                        style="text-align: center; letter-spacing: 1.5px;">
                                        <?php echo $project['name'] ?></h4>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="row container-fluid align-items-center justify-content-center d-flex p-5"
                        style="background-color:black;">
                        <div class="contact-title">
                            <h2 id="contact-title" style="letter-spacing:5px; font-weight:700" class="hover-effect">
                                Contact Us!</h2>
                        </div>
                        <div class="mainform py-5 align-items-center justify-content-center d-flex">
                            <?php echo do_shortcode('[contact-form-7 id="20" title="Contact form 1"]'); ?>
                        </div>
                    </div>
                    <div class="container-fluid d-flex">
                        <div id="socials-section"
                            class="container-fluid row p-3 my-5 align-items-center justify-content-center">
                            <?php  foreach($socials as $social){ ?>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-6 col mmb20 m-3">
                                <a target="_blank" class="" href="<?php echo $social['link'];?>">
                                    <img src="<?php echo get_template_directory_uri() . $social['icon'] ?>"
                                        style="height:60px; width:60px;" class="d-block mx-auto imgc social-icons">
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- <a  href="#" class=" btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a> -->
            <button id="back-to-top" type="button" class="back-to-top btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></button>

            <?php
get_template_part( 'nav', 'below' );
get_footer();
?>
