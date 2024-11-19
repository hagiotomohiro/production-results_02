<?php
/*
Template Name: page-map.php
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



  <!--container start-->
  <div class="container">

    <h2 class="title_map">福岡本社</h2>
    <div class="row">
      <div class="col-lg-5 col-sm-5 address">
        <section class="contact-infos">
          <h4 class="title custom-font text-black">
            住所
          </h4>
          <address>
            福岡県
            <br>
            久留米市山川追分1-6-15
          </address>
        </section>
        <section class="contact-infos" style="display:none;">
          <h4 class="title custom-font text-black">
            営業時間
          </h4>
          <p>
            月曜日 - 金曜日 9am to 17pm
            <br>
            土曜日・日曜日・祝祭日 定休
            <br>
          </p>
        </section>
        <section class="contact-infos">
          <h4>
            電話番号
          </h4>
          <p>
            <i class="icon-phone">
            </i>
            TEL: (0942) 43-7710
          </p>

          <p>
            <i class="icon-phone">
            </i>
            Fax: (0942) 43-7730
          </p>

        </section>
      </div>
      <div class="col-lg-7 col-sm-7 address">
        <h3>
          九州自動車道久留米インターからたったの5分
        </h3>
        <p>久留米ICを野々下交差点（210号）方面へ北
          上し、右折後約2km東進します。山川町信号を 右折後、約150m先右側です。</P>
        <h3 style="margin-top:2em;">
          JR御井駅より徒歩10分
        </h3>
        <p>JR御井駅から約400m東進し追分信号を左 折後、約1500m先左側です。</P>

      </div>
    </div>

  </div>
  <!--container end-->

  <!--google map start-->
  <div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d833.5348393251752!2d130.5666966292457!3d33.31517201951103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f83!3m3!1m2!1s0x3541a6ba6cfa1267%3A0xe4627e812bc379a2!2z44Ki44Oq44Kq44Oz77yI5qCq77yJ!5e0!3m2!1sja!2sjp!4v1560218606598!5m2!1sja!2sjp" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <!--google map end-->

  <!--container start-->
  <div class="container container_map">

    <h2 class="title_map">佐賀支社</h2>
    <div class="row">
      <div class="col-lg-5 col-sm-5 address">
        <section class="contact-infos">
          <h4 class="title custom-font text-black">
            住所
          </h4>
          <address>
            佐賀県<br>
            三養基郡みやき町大字江口3623<br>
            サンマリノ豆津　D号室

          </address>
        </section>
        <section class="contact-infos" style="display:none;">
          <h4 class="title custom-font text-black">
            営業時間
          </h4>
          <p>
            月曜日 - 金曜日 9am to 17pm
            <br>
            土曜日・日曜日・祝祭日 定休
            <br>
          </p>
        </section>
        <section class="contact-infos">
          <h4>
            電話番号
          </h4>
          <p>
            <i class="icon-phone">
            </i>
            TEL: (0942) 89-6821
          </p>

        </section>
      </div>
      <div class="col-lg-7 col-sm-7 address">


      </div>
    </div>

  </div>
  <!--container end-->

    <!--google map start-->
  <div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3334.2452948910864!2d130.4815238151958!3d33.31240208081363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541a52515ebf0c3%3A0xd99a15cad9ac9c9b!2z44CSODQ5LTAxMTIg5L2Q6LOA55yM5LiJ6aSK5Z-66YOh44G_44KE44GN55S65rGf5Y-j77yT77yW77yS77yT!5e0!3m2!1sja!2sjp!4v1657674130493!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <!--google map end-->




  <?php get_footer(); ?>
