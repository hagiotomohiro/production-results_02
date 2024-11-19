<?php
/*
Template Name: page-tenken.php
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


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pf-img">
                     <img src="<?php echo get_template_directory_uri() ?>/img/img_tenken.jpg" alt="橋梁点検">
                 </div>

            </div>
        </div>
    </div>

    <!--container start-->
    <div class="container">
        <div class="row">
            <!--portfolio-single start-->

            <div class="col-lg-9 ">
                <div class="title">
                    <h3>橋梁点検なら弊社にお任せください</h3>
                </div>
                <div class="pf-detail">
                    <p>自社で橋梁点検車を所有しておりますので、車両手配が迅速にできます。</p>
                    <p>また、オペレーターの手配から現地警備員、ドローンを利用した空撮・点検までワンストップでご提供致します。</p>

                </div>
                <div class="pf-img">
                     <img src="<?php echo get_template_directory_uri() ?>/img/img_tenken2.jpg" alt="橋梁点検もアリオンにお任せ！">
                 </div>
            </div>

            <div class="col-lg-3">
                <div class="title">
                    <h3>下記全てを、ワンストップで手配することができます。</h3>
                </div>
                <ul class="list-unstyled pf-list">
                    <li><i class="fa fa-arrow-circle-right pr-10"></i><b>BT200（TADANO）</b> <span></span></li>
                    <li><i class="fa fa-arrow-circle-right pr-10"></i><b>オペレーター（運転手）</b> <span></span></li>
                    <li><i class="fa fa-arrow-circle-right pr-10"></i><b>ドローン</b> <span></span></li>
                    <li><i class="fa fa-arrow-circle-right pr-10"></i><b>警備員</b> <span></span></li>
                    <li><i class="fa fa-arrow-circle-right pr-10"></i><b>規制車両</b> <span></span></li>
                    <li><i class="fa fa-arrow-circle-right pr-10"></i><b>各種保安資機材</b> <span></span></li>
                </ul>
             </div>



        </div>
        <hr>
    </div>



    <div class="container">
      <div class="row">

        <div class="tenken_blk tenken_blk_before">
          <h3>現状</h3>
          <ul>
            <li>建機レンタル会社に点検車、保安資機材を手配、受け取りに行く必要がある。</li>
            <li>警備員の手配がつかない。</li>
            <li>点検車の運転手を手配しないといけない。</li>
          </ul>
        </div>

        <div class="tenken_blk">
          <h3>アリオン</h3>
          <ul>
            <li>電話一本で点検車、警備員、オぺレーター、規制車両、保安資機材が手配できる。</li>
            <li>警備のプロとして、警備内容の提案をするので安全に作業に集中できる。</li>
            <li>点検車をご利用の企業様には優先して警備員を手配致します。</li>
            <li>ドローンでの点検も可能。</li>
          </ul>
        </div>

      </div>
    </div>


    <div class="container">
      <div class="row">

        <div class="tenken_voice">
          <h3>企業様の声</h3>
          <ul>
            <li>電話一本で全て手配が完了するので、他の作業に時間をかけれるので助かります。</li>
            <li>看板の設置から撤去、規制の開始から解除までアリオンさんがしてくれるので助かります。</li>
            <li>安全に作業が行えるように、規制の提案から実施をしてもらえるので、作業に集中できます。</li>
            <li>急な工程の変更にも対応してもらえるので、助かっています。</li>
            <li>新技術の導入（ドローン）のご相談もできるのでありがたいです。</li>
          </ul>
        </div>

      </div>
    </div>

<?php get_footer(); ?>