<?php
/*
Template Name: page-drone.php
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



    <div>
      <div class="actual-box drone-actual">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/V64cE3GzD24?si=qLE6mKpoK8nP10yN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <div class="button-center drone-actual-button">
        <a href="<?php echo esc_url(home_url()); ?>/actual" class="btn btn-purchase">
          もっと見る
        </a>
      </div>
    <div class="pf-img">
      <img src="<?php echo get_template_directory_uri() ?>/img/img_drone02.jpg" alt="ドローン">
    </div>
  </div>

    <!--container start-->
    <div class="container">
        <div class="row">
            <!--portfolio-single start-->

            <div class="col-lg-9 ">
                <div class="title">
                    <h3>ドローンを活用した様々な業務に対応致します</h3>
                </div>
                <div class="pf-detail">
                    <p>施工前～竣工までをドローンで撮影し、ユーザー様へご提供。</p>
                    <p>高所や難所の点検に。</p>
                    <p>専門のオペレーターも派遣致しますので、ご依頼頂くだけで大丈夫です。</p>
                  </div>
                  <div class="pf-img">
                     <img src="<?php echo get_template_directory_uri() ?>/img/img_drone2.jpg" alt="ドローンシステム">
                 </div>
            </div>

            <div class="col-lg-3">
                <div class="title">
                    <h3>活用例</h3>
                </div>
                <ul class="list-unstyled pf-list">
                    <li><i class="fa fa-arrow-circle-right pr-10"></i><b>映像配信</b> <span></span></li>
                    <li><i class="fa fa-arrow-circle-right pr-10"></i><b>捜索支援</b><span></span></li>
                    <li><i class="fa fa-arrow-circle-right pr-10"></i><b>アグリ支援（センシング・データ解析等）</b><span></span></li>
                    <li><i class="fa fa-arrow-circle-right pr-10"></i><b>設備点検</b><span></span></li>
                    <li><i class="fa fa-arrow-circle-right pr-10"></i><b>デモ飛行</b><span></span></li>
                </ul>
             </div>
             <div class="col-md-12">


             </div>


        </div>

    </div>



     <div class="container">
      <div class="row">
        <div class="drone_blk">
        <h3>空撮（静止画・高画質4K動画撮影）</h3>
        <div class="text">
          <dl>
            <dt>1.状況写真撮影</dt>
            <dd>土木・建設現場の進捗状況を上空から撮影現場の進捗具合を確認、広範囲の把握が可能になります。</dd>
          </dl>
          <dl>
            <dt>2.点検用撮影</dt>
            <dd>屋根の腐食確認<br>工場など、高所での設備点検が必要な場合において、画像での点検が可能になります。</dd>
          </dl>
          <dl>
            <dt>3.会社のPR動画撮影</dt>
            <dd>企業PR動画作成ようの素材となる画像を撮影します。</dd>
          </dl>
          <dl>
            <dt>4.各種イベント会場における撮影</dt>
            <dd>※不特定多数の人が集まる会場の空撮で安全対策が困難な場合はご要望に応じられない場合がございます。</dd>
          </dl>
        </div>
        <div class="img">
          <img src="<?php echo get_template_directory_uri() ?>/img/heli_shot01.jpg" alt="">
          <img src="<?php echo get_template_directory_uri() ?>/img/heli_shot02.jpg" alt="">
        </div>
        </div>
      </div>
     </div>


     <div class="container">
      <div class="row">
        <div class="drone_blk">
        <h3>橋梁点検（インフラ点検）</h3>
        <div class="text">
          <dl>
            <dt>【点検の流れ】</dt>
            <dd>
              ①現地踏査<br>
              ②ドローンによる撮影<br>
              ③ソフトを使って、２Dオルソ画像を作成<br>
              　※Metashape、Pix4Dを使用<br>
              ④AIソフトを用いてヒビを検出<br>
              ⑤損傷図の作成<br>
              　※④、⑤の項目は道路橋点検士の方にお願いしています。<br>
              ⑥納品
            </dd>
          </dl>
          <dl>
            <dt>【実績】</dt>
            <dd>北九州空港連絡橋点検業務 / 福岡市橋梁点検業務 /久留米市水管橋点検業務</dd>
          </dl>

        </div>
        <div class="img img_w">
          <img src="<?php echo get_template_directory_uri() ?>/img/finfra01.jpg" alt="">
        </div>
        </div>
      </div>
     </div>



     <div class="container">
      <div class="row">
        <div class="drone_blk">
        <h3>2D/3Dオルソ画像作成（インフラ点検）</h3>
        <div class="text">
          <dl>
            <dt></dt>
            <dd>
              空撮した複数の静止画を専用のPCソフトで合成し、2D/3D画像や1枚の平面図（オルソ画像）を作成します。
            </dd>
          </dl>
        </div>
        <div class="img img_w">
          <img src="<?php echo get_template_directory_uri() ?>/img/finfra03.jpg" alt="">
        </div>
        </div>
      </div>
     </div>


     <div class="container">
      <div class="row">
        <div class="drone_blk">
        <h3>赤外線カメラ空撮</h3>
        <div class="text">
          <dl>
            <dt>赤外線カメラを搭載したドローンを用いて、設備の温度異常、<br>屋根の遮熱塗装効果を上級から効率よく確認できます。</dt>
            <dd>
              撮影機種：DJI Matrice300<br>カメラ　：Zenmuse  H20T<br>赤外線・可視画像同時撮影可能
            </dd>
          </dl>
        </div>
        <div class="img img_w">
          <img src="<?php echo get_template_directory_uri() ?>/img/finfra04.jpg" alt="">
        </div>
        </div>
      </div>
     </div>


     <div class="container">
      <div class="row">
        <div class="drone_blk drone_blk_last">
        <h3>測量</h3>
        <div class="text">
          <dl>
            <dt>ドローンで効率的にUAV写真測量を実施し、点群モデルを作成します</dt>
            <dd>
              DJI　Matrice300RTKを飛行します。<br>RTKとは『リアルタイムキネマティック』の略で、地上に設置した「基地局」からの位置情報データによって、高い精度の測位を実現する技術のことです。
            </dd>
          </dl>
        </div>
        <div class="img img_w">
          <img src="<?php echo get_template_directory_uri() ?>/img/finfra05.png" alt="">
        </div>
        <div class="card">
          <div class="img"><img src="<?php echo get_template_directory_uri() ?>/img/logo_jdca.png" alt=""></div>
          <div class="text">協会の理念～Our Mission～ • ドローンを新しいインフラと捉え、その正しい知識を普及促進、啓発 活動を通して、人々の快適な生活を維持し、これから訪れる新しい 活用・運用方法を創造します。 • ドローンを、安全で誰もが楽しめる環境を作り、日本におけるドロー ン活用の健全な発展とプラットフォーム創りに取り組んでまいります。</div>
        </div>
        </div>
      </div>
     </div>

     <?php get_footer(); ?>