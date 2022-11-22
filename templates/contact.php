
<?php
/****
Template Name: Contact

****/

get_header();?>

<?php $topimg_contact = get_field('contact_featured_image'); ?>
<?php if( $topimg_contact ){ ?>
<div class="bgimg row align-items-center mbh200" style="background-position: bottom;background-attachment: fixed;height: 40vh; background-image: url('<?php echo $topimg_contact ?>')">
</div>
 <?php } ?>
 <?php $contact_title = get_field('contact_title'); ?>
<div style="background-color:#000">
  <div class="container pt-5">
    <div class="row justify-content-center">
        <?php $socials=get_field('socials','options');if($socials) {?>
            <?php foreach($socials as $social) {?>
              <a class="col-md-2 col-sm-6 col-6 mmb20"href="<?php echo $social['link'];?>">
                <img src="<?php echo $social['icon'];?>"style="width:90px;" class="d-block mx-auto imgc"/>
                <h4 class="text-white mt-3 font-weight-light text-center"><?php echo $social['title'];?></h4>
              </a>
            <?php }?>
        <?php }?>

    </div>
  </div>
</div>

<div class="py-5" style="background-color:rgba(0,0,0,0.99)">
  <div class="container">
    <h2 class="text-center h2 text-white"><?php echo the_Field('form_t','options');?></h2>
    <h3 class="text-center h3 text-white"><?php echo the_Field('form_st','options');?></h3>
    <div class="mainform  ">
      <?php if($my_lang=='en') {?>
        <?php echo do_shortcode('[contact-form-7 id="193" title="Contact form ENGLISH"]');?>
      <?php } elseif($my_lang=='he') {?>
        <?php echo do_shortcode('[contact-form-7 id="192" title="Contact form HEBREW"]');?>
      <?php } else {?>
        <?php echo do_shortcode('[contact-form-7 id="99" title="Contact form 1"]');?>
      <?php }?>
    </div>
  </div>
</div>

<?php get_footer();?>
