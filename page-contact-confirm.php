<?php
/*
Template Name: page-contact-confirm.php
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
    <div class="nav__content confirm__input">
      <span>入力</span>
    </div>
    <div class="triangle"></div>
    <div class="nav__content confirm__confirm">
      <span>内容確認</span>
    </div>
    <div class="triangle"></div>
    <div class="nav__content confirm__complete">
      <span>送信完了</span>
    </div>
  </div>
  <div class="contact-center">
    <h3>入力内容確認</h3>
    <span>
      ご入力内容に間違いはございませんか？<br>
      内容に問題がなければ「送信」ボタン<br>
      内容を変更される場合は「戻る」ボタンを押してください。
    </span>
  </div>
</div>

<div class="container contact__container">

  <?php echo do_shortcode( '[contact-form-7 id="f2ad67f" title="Allion問い合わせフォーム（確認）"]' ); ?>

</div>

<?php get_footer(); ?>