<?php get_header(); ?>

<!-- TopSlide -->
  <ul class="rslides" id="slider1">
    <li><img src="<?php echo get_template_directory_uri() ?>/img/topslide1.png" alt="Slide1"></li>
    <li><img src="<?php echo get_template_directory_uri() ?>/img/topslide2.png" alt="Slide2"></li>
    <li><img src="<?php echo get_template_directory_uri() ?>/img/topslide3.png" alt="Slide3"></li>
  </ul>

  <!-- /TOPSlide -->

  <div class="container property white-bg">
    <div class="row mar-b-50">
      <div class="col-md-12">
        <div class="text-center feature-head wow fadeInDown">
          <h1>
            アリオンは皆様に安全と安心を真摯にご提供致します
          </h1>
        </div>
        <div class="feature-box">
          <div class="col-md-4 col-sm-4 text-center wow fadeInUp mar-b-40">
            <div class="feature-box-heading">
              <em>
                <img src="<?php echo get_template_directory_uri() ?>/img/1.png" alt="" width="100" height="100">
              </em>
              <h4>
                <b>総合警備業務</b>
              </h4>
            </div>
            <p class="text-center">
              皆様に安全と安心を真摯にご提供致します。<br><br><br>
            </p>
            <a href="<?php echo esc_url(home_url()) ?>/keibi" class="btn btn-info btn-lg da-link">
              詳細を見る
            </a>
          </div>
          <div class="col-md-4 col-sm-4 text-center wow fadeInUp mar-b-40">
            <div class="feature-box-heading">
              <em>
                <img src="<?php echo get_template_directory_uri() ?>/img/icon_kyoryo.png" alt="" width="130" height="100">
              </em>
              <h4>
                <b>橋梁点検事業</b>
              </h4>
            </div>
            <p class="text-center">
              車両・オペレーターの手配から現地警備員、<br>空撮・点検までワンストップでご提供致します。<br><br>
            </p>
            <a href="<?php echo esc_url(home_url()); ?>/tenken" class="btn btn-info btn-lg da-link">
              詳細を見る
            </a>
          </div>
          <div class="col-md-4 col-sm-4 text-center wow fadeInUp mar-b-40">
            <div class="feature-box-heading">
              <em>
                <img src="<?php echo get_template_directory_uri() ?>/img/icon_drone.png" alt="" width="100" height="100">
              </em>
              <h4>
                <b>ドローン事業</b>
              </h4>
            </div>
            <p class="text-center">
              インフラ点検・空撮・橋梁点検等<br>多彩なドローン事業をご提供いたします。<br><br>
            </p>
            <a href="<?php echo esc_url(home_url()); ?>/drone" class="btn btn-info btn-lg da-link">
              詳細を見る
            </a>
          </div>
        </div>

        <!--feature end-->
      </div>
    </div>
  </div>

  <!-- ニュースとイベント -->
  <div class="property white-bg">
    <div class="content-box">
      <div class="content-group fadeInLeft">
          <!-- ニュース -->
        <h1>
          <a href="<?php echo esc_url(home_url()); ?>/category/news">
            お知らせ
          </a>
        </h1>
        <?php
          $args = array(
            'post_type'       => 'post',
            'category_name'   => 'news',
            'posts_per_page'  => 3,
          );
          $posts = get_posts($args);
        ?>
        <?php foreach($posts as $post): ?>
        <?php setup_postdata($post); ?>
        <div class="border-bottom">
          <div class="news-date">
            <ul>
              <li>
                <a href="<?php echo get_permalink(); ?>">
                  <?php echo get_the_date();?>
                </a>
              </li>
            </ul>
          </div>
          <div class="news-content">
            <a href="<?php echo get_permalink(); ?>">
              <?php echo the_title();?>
            </a>
          </div>
        </div>
        <?php endforeach; ?>
        <?php  wp_reset_postdata(); ?>
        <div class="button-center">
          <a href="<?php echo esc_url(home_url()); ?>/category/news" class="btn btn-purchase">
            もっと見る
          </a>
        </div>
      </div>
      <!-- ニュースここまで -->

      <!-- イベント -->
      <div class="content-group fadeInRight">
        <h1>
          <a href="<?php echo esc_url(home_url()); ?>/actual">
            実績紹介
          </a>
        </h1>
        <div class=actual-box>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/V64cE3GzD24?si=qLE6mKpoK8nP10yN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="button-center">
          <a href="<?php echo esc_url(home_url()); ?>/actual" class="btn btn-purchase">
            もっと見る
          </a>
        </div>
      </div>
      <!-- イベントここまで -->
    </div>
  </div>
  <!-- ニュースとイベントここまで -->

  <!--property start-->
  <div class="property gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6 text-center wow fadeInLeft">
          <img src="<?php echo get_template_directory_uri() ?>/img/tab1.png" alt="">
        </div>
        <div class="col-lg-6 col-sm-6 wow fadeInRight">
          <h1>
            採用情報
          </h1>
          <hr>
          <p>
            <i class="fa fa-check fa-lg pr-10">
            </i>
            雑踏・交通誘導警備員<br>雇用形態：パート・アルバイト<br>業務内容：工事現場及びイベント・店舗等の駐車場誘導
          </p>
          <p>
            <i class="fa fa-pause fa-lg pr-10">
            </i>
            施設警備員<br>新規の受付は終了しました
          </p>

          <hr>
          <a href="<?php echo esc_url(home_url()); ?>/joboffer" class="btn btn-purchase">
            もっと詳しく
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- service end -->
  <div class="hr">
    <span class="hr-inner"></span>
  </div>

  <div class="container property white-bg">
    <div class="row mar-b-50 our-clients">
      <div class="col-md-3">
        <h2>
          協力・協賛会社
        </h2>
        <p>

        </p>
      </div>
      <div class="col-md-9">
        <div class="outside">
          <p>
            <span id="slider-prev">
            </span>
            |
            <span id="slider-next">
            </span>
          </p>
        </div>

        <ul class="bxslider1 clients-list">
          <li>
            <a href="http://www.alsok.co.jp/">
              <img src="<?php echo get_template_directory_uri() ?>/img/clients/gray_alsok_logo.jpg" class="skip-lazy" alt="alsok" />

              <img src="<?php echo get_template_directory_uri() ?>/img/clients/alsok_logo.jpg" class="color-img skip-lazy" alt="alsok" />
            </a>
          </li>
          <li>

            <img src="<?php echo get_template_directory_uri() ?>/img/clients/gray_nishik_logo.jpg" class="skip-lazy" alt="NISIK" />

            <img src="<?php echo get_template_directory_uri() ?>/img/clients/nishik_logo.jpg" class="color-img skip-lazy" alt="NISIK" />

          </li>
          <li>
            <img src="<?php echo get_template_directory_uri() ?>/img/clients/nisikss.jpg" class="skip-lazy" alt="にしけいセキュリティサービス" />

            <img src="<?php echo get_template_directory_uri() ?>/img/clients/nisikss.jpg" class="color-img skip-lazy" alt="にしけいセキュリティサービス" />

          </li>
          <li>
            <img src="<?php echo get_template_directory_uri() ?>/img/clients/gray_lagom_logo.jpg" class="skip-lazy" alt="ラーゴム" />

            <img src="<?php echo get_template_directory_uri() ?>/img/clients/lagom_logo.jpg" class="color-img skip-lazy" alt="ラーゴム" />
          </li>
          <!-- <li>

            <img src="img/clients/sanyokensetsu_logo.jpg" alt="三洋建設" />

            <img src="img/clients/sanyokensetsu_logo.jpg" class="color-img" alt="三洋建設" />

          </li> -->
          <!-- <li>

            <img src="img/clients/michiya_logo.jpg" alt="ミチヤ防災" />

            <img src="img/clients/michiya_logo.jpg" class="color-img" alt="ミチヤ防災" />

          </li> -->
          <li>
            <a href="http://yamato-j.com/">
              <img src="<?php echo get_template_directory_uri() ?>/img/clients/yamato_logo.jpg" class="skip-lazy" alt="ヤマト" />

              <img src="<?php echo get_template_directory_uri() ?>/img/clients/yamato_logo.jpg" class="color-img skip-lazy" alt="ヤマト" />
            </a>
          </li>
          <li>
            <a href="http://kimura-t.co.jp">
              <img src="<?php echo get_template_directory_uri() ?>/img/clients/kimura_logo.jpg" class="skip-lazy" alt="株式会社木村特殊工業" />

              <img src="<?php echo get_template_directory_uri() ?>/img/clients/kimura_logo.jpg" class="color-img skip-lazy" alt="株式会社木村特殊工業" />
            </a>
          </li>
          <li>
            <a href="http://fkcon.co.jp">
              <img src="<?php echo get_template_directory_uri() ?>/img/clients/fkcon_logo_mono.jpg" class="skip-lazy" alt="エフケーコンサルタント株式会社" />

              <img src="<?php echo get_template_directory_uri() ?>/img/clients/fkcon_logo.jpg" class="color-img skip-lazy" alt="エフケーコンサルタント株式会社" />
            </a>
          </li>


        </ul>


      </div>
    </div>
    <!-- END CLIENTS -->
  </div>
  <!--container end-->
<?php get_footer(); ?>