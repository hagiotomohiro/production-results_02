<?php
/*
Template Name: page-certification.php
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
      <section id="faq">

        <div class="container">



            <div class="row">

                <div class="col-md-10 col-md-offset-1 mar-b-30">

                    <div id="heading">
                      <h1 class="wow flipInX">警備業者認定証</h1>
                    </div>
                    <div class="certification">
                      <img src="<?php echo get_template_directory_uri() ?>/img/certification.png" alt="アリオン警備業認定証">
                    </div>

                </div>
            </div>
        </div>
      </section>


<?php get_footer(); ?>