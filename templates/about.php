
<?php
/****
Template Name: About

****/

get_header();?>

<?php $topimg_about = get_field('about_featured_image'); ?>
<?php if( $topimg_about ){ ?>
<div class="bgimg  align-items-center d-flex justify-content-center mbh300" style="background-position: bottom;background-attachment: fixed;height:40vh; background-image: url('<?php echo $topimg_about ?>')">
   <h1 class="text-white font-weight-bold mb-0 mt-5 p-3"style="background-color:rgba(0,0,0,0.5);"><?php echo the_title();?></h1>
</div>
 <?php } ?>
<div class="container py-5">

   <div class="about_page_content">
     <?php global $post;?>
     <?php echo $post->post_content;?>
   </div>


</div>
<?php $videos=get_field('projects','options');if($videos){?>
  <div class="container py-5">
    <h4 class="h1 text-center mtitle projects_t"><?php echo the_field('projects_t','options');?></h4>
    <div class="projects my-4">
      <?php foreach($videos as $video) {?>
        <div class="">
          <video class="mw90 mmargin mblock" width="100%" height="250px" controls>
            <source src="<?php echo $video['file']['url'];?>" type="video/mp4">
          </video>
        </div>
      <?php }?>
    </div>
  </div>
<?php }?>
<?php $team=get_field('team');if($team) {?>
  <div class="container py-5">
    <h4 class="h1 text-center mtitle team_t"><?php echo the_field('team_t');?></h4>
    <div class="projects mt-4">
      <?php foreach($team as $team) {?>
        <div class=" ">
            <div class="bgimg mx-auto mbh300 mw90 mmargin"style="height:350px;border-radius:50%;background-image:url('<?php echo $team['image'];?>')"></div>
            <h4 class="text-center mt-3 worker_name"><?php echo $team['name'].' - '.$team['role'];?></h4>
            <div class="text-center worker_desc"><?php echo $team['desc'];?></div>
        </div>
      <?php }?>
    </div>

  </div>
<?php }?>
<?php get_footer();?>
