<?php
/*
Template Name: page-contact.php
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
    </div>
  </div>
</div>
<!--breadcrumbs end-->

<div class="container contact__container">
  <div class="contact__nav">
    <div class="nav__content contact__input">
      <span>入力</span>
    </div>
    <div class="triangle"></div>
    <div class="nav__content contact__confirm">
      <span>内容確認</span>
    </div>
    <div class="triangle"></div>
    <div class="nav__content contact__complete">
      <span>送信完了</span>
    </div>
  </div>
  <div class="contact-center">
    <h3>お問い合わせフォーム</h3>
    <span>必要事項をご記入後、「確認する」のボタンをクリックして進んでください</span>
  </div>
</div>


<div class="container contact__container">

  <?php echo do_shortcode( '[contact-form-7 id="7715618" title="Allion問い合わせフォーム"]' ); ?>

</div>


<?php get_footer(); ?>