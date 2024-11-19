<?php
/*
Template Name: page-aboutus.php
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

    <section id="faq">

        <div class="container">



            <div class="row">

                <div class="col-md-10 col-md-offset-1 mar-b-30">

                    <div id="heading">
                        <h1 class="wow flipInX">会社概要</h1>
                        <p class="lead wow fadeIn">All in one の精神を真心でお届けします！</p>
                    </div>

                    <!--////////// Accordion Toggle //////////-->
                    <div class="panel-group wow fadeInUp" id="accordion" data-wow-duration="2s">

                        <!-- PANEL 1 -->
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    商&emsp;&emsp;&emsp;号
                                </h4>
                            </div>

                            <div class="panel-body panel-faq">
                                &emsp;&emsp;アリオン株式会社
                            </div>
                        </div>

                        <!-- PANEL 2 -->
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    本店所在地
                                </h4>
                            </div>
                            <div class="panel-body panel-faq">
                                &emsp;&emsp;福岡県久留米市山川追分1-6-15-102
                            </div>
                        </div>

                        <!-- PANEL 3 -->
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    設&emsp;&emsp;&emsp;立
                                </h4>
                            </div>
                            <div class="panel-body panel-faq">
                                &emsp;&emsp;平成27年4月
                            </div>
                        </div>

                        <!-- PANEL 4 -->
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    資&emsp;本&emsp;金
                                </h4>
                            </div>
                            <div class="panel-body panel-faq">
                                &emsp;&emsp;2,000,000円
                            </div>
                        </div>

                        <!-- PANEL 5 -->
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    主要金融機関
                                </h4>
                            </div>
                            <div class="panel-body panel-faq">
                                &emsp;&emsp;福岡銀行 筑後支店<br>
                                &emsp;&emsp;西日本シティ銀行 筑後支店<br>
                                &emsp;&emsp;大牟田柳川信用金庫<br>
                                &emsp;&emsp;福岡県信用組合
                            </div>
                        </div>

                        <!-- PANEL 6 -->
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    業務内容
                                </h4>
                            </div>
                            <div class="panel-body panel-faq">
                                &emsp;&emsp;雑踏・交通誘導警備&emsp;&emsp;施設警備<br>&emsp;&emsp;防犯・監視カメラシステムの企画立案と販売
                                　　<br>&emsp;&emsp;ドローン事業&emsp;&emsp;橋梁点検事業
                            </div>
                        </div>
                    </div>


                </div><!-- /col-md-10 -->


            </div>
        </div>

    </section>


    <div id="newsletter-faq">


        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <p class="lead wow fadeInLeft">安全と安心を、真摯に地域の皆様にご提供していきます。</p>
                </div>


            </div><!-- /row -->
        </div><!-- /container -->


    </div>


    <section id="faq-other">
        <div class="container">
            <div class="row mar-b-30">
                <div class="title text-center mar-b-30">
                    <h1 class="wow flipInX">社長挨拶</h1>
                    <hr>
                    <p>私どもは、「すべての従業員・関連する企業様が一つになる事（ALL in
                        one）により、クライアントの（安全・安心）を守ることが出来る」を基本理念とし、警備業の資質の向上（関連企業様との良質な関係構築）を図り、警備員の生活の安定と更なる良質なサービスの提供とする良質なスパイラルを巻き起こし、地域内ナンバーワンを目指してまいります。
                    </p>

                    <p>私どもは、警備員の収入・生活の向上を図る事を目的とし、あらゆる可能性にチャレンジする企業である事を目指します。</p>

                    <p>私どもは、多様化・凶悪化する犯罪・健康被害に対し、クライアントの危機管理・健康管理への意識の向上を図るための、リーディングカンパニーであることを目指します。</p>

                    <p>私どもは、日常生活の中で「ちょっとお得・もっとお得」をご提供できる、企業である事を目指します。</p>
                </div>


            </div>
        </div>

    </section>

    <!--clients start-->
    <div class="container">
        <div class="row mar-b-50 our-clients">
            <div class="col-md-8">


            </div>
            <div class="col-md-4">
                <h5>代表取締役 社長 &emsp;濱崎繁行</h5>
            </div>

        </div>
        <!-- END CLIENTS -->
    </div>
    <!--clients end-->

    <!--container end-->

<?php get_footer(); ?>