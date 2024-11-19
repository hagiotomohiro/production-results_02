<?php
/*
Template Name: page-keibi.php
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
    <div>
      <div class="pf-img">
        <img src="<?php echo get_template_directory_uri() ?>/img/img_keibi.jpg" alt="総合警備業務">
      </div>
    </div>
  </div>
</div>

    <!--portfolio-single start-->
    <div>
      <div>
      <!--portfolio-single start-->
        <div>
          <div class="title keibi-content">
            <h3>施設警備業務</h3>
          </div>
          <div class="pf-detail keibi-content">
            <p>テナントビル及び施設での常駐警備</p>
          </div>
          <div class="keibi-img">
            <img src="<?php echo get_template_directory_uri() ?>/img/keibi01.jpg" width="90%" alt="誘導警備業務">
          </div>
        </div>
        <div>
          <div class="title keibi-content">
            <h3>交通誘導警備業務</h3>
          </div>
        <div class="pf-detail keibi-content">
          <p>土木・建設現場及び橋梁点検時、BT200使用での車両及び、人の誘導</p>
        </div>
        <div class="keibi-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/keibi03.jpg" width="90%" alt="誘導警備業務">
        </div>
      </div>
      <div>
        <div class="title keibi-content">
          <h3>雑踏警備業務（イベント警備）</h3>
        </div>
        <div class="pf-detail keibi-content">
          <p>人が集まる会場での、人に対して行う誘導</p>
        </div>
        <div class="keibi-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/keibi02.jpg" width="90%" width="90%" alt="誘導警備業務">
        </div>
        <div class=" keibi-content">
        <span class="keibi_note">※警備員単価につきましては、別途お見積書を作成させていただきます。</span>
      </div>
    </div>


    <div class="col-md-12">
      <div class="pf-img">
        <img src="<?php echo get_template_directory_uri() ?>/img/img_bouhan.jpg" alt="防犯カメラ">
      </div>
    </div>



    <!--portfolio-single start-->
    <div class="col-lg-9">
      <div class="title">
        <h3>最善・最良の監視カメラシステム</h3>
      </div>
      <div class="pf-detail">
        <p>協力関係企業様との連携により、ユーザー様のリクエ ストの応える最良のシステムを企画提案します。</p>
        <p>施設の規模ご予算に応じて、最適なシステムを企画提 案します。</p>
        <p>オンラインシステムを組み合わせれば、機器の異常を 送信しメンテナンス出動も可能です。</p>
      </div>
      <div class="pf-img">
        <img src="<?php echo get_template_directory_uri() ?>/img/img_camera.jpg" alt="カメラシステムはアリオンにお任せ">
      </div>
      <div class="qualified">
        <h3>有資格者</h3>
        <dl>
          <dt>交通誘導１級</dt>
          <dd>1名</dd>
        </dl>
        <dl>
          <dt>交通誘導２級</dt>
          <dd>4名</dd>
        </dl>
          <dl>
          <dt>施設警備２級</dt>
          <dd>1名</dd>
        </dl>
        <dl>
          <dt>雑踏警備２級</dt>
          <dd>1名</dd>
        </dl>
        <dl>
          <dt>警備員指導教育責任者　1号業務</dt>
          <dd>3名</dd>
        </dl>
        <dl>
          <dt>警備員指導教育責任者　2号業務</dt>
          <dd>2名</dd>
        </dl>
        <dl>
          <dt>機械警備業務管理者</dt>
          <dd>1名</dd>
        </dl>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="title">
        <h3>導入事例</h3>
      </div>
      <ul class="list-unstyled pf-list">
        <li><i class="fa fa-arrow-circle-right pr-10"></i><b>一般事務所</b> <span></span></li>
        <li><i class="fa fa-arrow-circle-right pr-10"></i><b>飲食店</b><span></span></li>
        <li><i class="fa fa-arrow-circle-right pr-10"></i><b>工場</b><span></span></li>
        <li><i class="fa fa-arrow-circle-right pr-10"></i><b>一般家庭</b><span></span></li>
        <li><i class="fa fa-arrow-circle-right pr-10"></i><b>動物病院</b><span></span></li>
      </ul>
    </div>


<?php get_footer(); ?>