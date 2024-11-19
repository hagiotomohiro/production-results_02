<?php
/*
Template Name: page-antiviolence.php
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

  <!-- privacy -->
  <div class="container privacy-terms">
    <div class="row">
      <div class="col-md-12">
        <h2>暴力団等反社会的勢力排除宣言</h2>
        <p>
          アリオン株式会社は、人の生命、身体、財産を守る安全産業としての自覚と誇りを持ち、適正な業務の提供に努めるとともに警備業に対する社会的信頼を高めるため、外部専門機関と連携して、組織的に次の事項を実践し、暴力団、暴力団関係企業、総会屋、社会運動標ぼうゴロ、政治活動標ぼうゴロ、特殊知能暴力集団、その他の反社会的勢力を排除します。
        </p>
        <h3>1.私たちは、<br>&emsp;暴力団等反社会的勢力とは、一切の関係を遮断します。</h3>
        <h3>2.私たちは、<br>&emsp;暴力団等反社会勢力とは、商品及びサービスの提供 その他一切の取引を行いません。<h3>
            <h3>3.私たちは、<br>&emsp;暴力団等反社会的勢力による不当要求は、断固拒否します。</h3>
            <p> &nbsp; </p>
      </div>
      <div class="col-md-12">&nbsp;</div>
    </div>

  </div>
  <!--container end-->


<?php get_footer(); ?>