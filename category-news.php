<?php get_header(); ?>

<!--breadcrumbs start-->
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
    <?php
      $cat = get_the_category();
      $catname = $cat[0]->cat_name;
    ?>
      <div class="col-lg-4 col-sm-4">
        <h1><?php echo $catname; ?></h1>
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

<?php if (have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="container">
  <div class="row news-category">
    <div class="col-md-2 category-data">
      <div class="calendar_year">
        <p>
          <?php echo the_time('Y年'); ?>
        </p>
      </div>
      <div class="calendar_day">
        <h4>
          <?php echo the_time('n/j'); ?>
        </h4>
        <p>
          <?php echo the_time('n月j日'); ?>
        </p>
      </div>
    </div>
    <div class="col-md-10 category-content">
      <div class="small-title">
        <h3>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        </div>
      <div class="post-meta">
        <ul>
          <li>
            <?php echo wp_trim_words( get_the_content() , 100, '...'); ?>
          </li>
        </ul>
      </div>
      <div class="read_continue">
        <button><a href="<?php the_permalink(); ?>" class="text-white">詳細を見る</a></button>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<div class="news-pagination">
<?php
  echo paginate_links(array(
    'total' => $wp_query->max_num_pages,
    'prev_text' => '&lt;&lt;前へ',
    'next_text' => '次へ&gt;&gt;',
  ));
?>
</div>




<?php get_footer(); ?>