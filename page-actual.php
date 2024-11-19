<?php
/*
Template Name: page-actual.php
*/
?>

<?php get_header(); ?>


<!--breadcrumbs start-->
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-4">
        <h1><?php the_title();?></h1>
      </div>
      <div class="col-lg-8 col-sm-8">
        <div class="breadcrumb pull-right bread">
          <?php
            if ( function_exists( 'bcn_display' ) ) {
              bcn_display();
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!--breadcrumbs end-->

<div class="container center-box actual">
  <h4>動画再生にて音楽が再生されます。音量にご注意ください。</h4>
  <?php echo do_shortcode( '[yourchannel user="アリオン株式会社"]' ); ?>
</div>

<?php get_footer(); ?>