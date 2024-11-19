<?php
/*
Template Name: page-contact-complete.php
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
    <div class="nav__content complete__input">
      <span>入力</span>
    </div>
    <div class="triangle"></div>
    <div class="nav__content complete__confirm">
      <span>内容確認</span>
    </div>
    <div class="triangle"></div>
    <div class="nav__content complete__complete">
      <span>送信完了</span>
    </div>
  </div>
  <div class="center-box">
    <h2>問い合わせ内容の送信が完了しました</h2>
    <p>
      お問い合わせありがとうございます。後ほど、ご返信させていただきます。<br>
      自動返信メールをお送りしておりますのでご確認ください。<br>
      1時間たっても届かない場合はお手数ですが下記の方法にてご連絡ください。
    </p>
    <a href="tel:0942-43-7710">&#9654;0942-43-7710</a>
    <div class="btn-box">
      <a class="btn btn-info btn-lg da-link btn-mar" href="<?php echo esc_url(home_url('/')); ?>">戻る</a>
    </div>
  </div>
</div>


<?php get_footer(); ?>