<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="久留米を中心に展開する警備・セキュリティのアリオン株式会社。セキュリティのことならお任せください！">
  <meta name="author" content="Allion co.,ltd.">
  <meta name="keywords" content="久留米,警備,交通誘導,セキュリティ,ドローン,橋梁点検">

  <link rel="icon" sizes="16x16 32x32 48x48 64x64" href="<?php echo get_template_directory_uri() ?>/favicon/favicon.ico" />
  <!--[if IE]>
    <link rel="shortcut icon" href="favicon/favicon.ico"/>
    <![endif]-->
  <!-- Optional: Android & iPhone-->
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/favicon/favicon-152.png" />
  <!-- Optional: IE10 Tile.-->
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ?>/favicon/favicon-144.png" />
  <!-- Optional: ipads, androids, iphones, ...-->
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri() ?>/favicon/favicon-152.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri() ?>/favicon/favicon-144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri() ?>/favicon/favicon-120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/favicon/favicon-114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/favicon/favicon-72.png" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/favicon/favicon-57.png" />


  <title>
    <?php echo wp_get_document_title(); ?>
  </title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/theme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-reset.css" rel="stylesheet">
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

  <!--external css-->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsiveslides.css" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/owlcarousel/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>>/assets/owlcarousel/owl.theme.css">

  <link href="<?php echo get_template_directory_uri(); ?>/css/superfish.css" rel="stylesheet" media="screen">
  <link href="<?php echo get_template_directory_uri('google-web-fonts', 'http://fonts.googleapis.com/css?family=Lato'); ?>" rel="stylesheet" type="text/css">
  <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->


  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/component.css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js">
    </script>
    <script src="js/respond.min.js">
    </script>
    <![endif]-->
  <?php wp_head(); ?>
</head>

<body>
  <!--header start-->
  <header class="head-section">
    <div class="navbar navbar-default navbar-static-top container">
      <div class="navbar-header">
        <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
          <img src="<?php echo get_template_directory_uri() ?>/img/allion-logo.jpg" alt="アリオン株式会社">
        </a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url()); ?>/category/news">お知らせ</a>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover="dropdown"
              data-toggle="dropdown" href="<?php echo esc_url(home_url('')); ?>">事業案内 <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="<?php echo esc_url(home_url()) ?>/keibi">総合警備業務</a>
              </li>
              <li>
                <a href="<?php echo esc_url(home_url()); ?>/drone">ドローン事業</a>
              </li>
              <li>
                <a href="<?php echo esc_url(home_url()); ?>/tenken">橋梁点検事業</a>
              </li>
              <li>
                <a href="<?php echo esc_url(home_url()); ?>/actual">実績紹介</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url()); ?>/aboutus">会社概要</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url()); ?>/joboffer">人材募集</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>/map">アクセスマップ</a>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <!--header end-->