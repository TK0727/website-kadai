
<?php get_header(); ?>
        
  <body>

    <div class="l-top-img">

        <div class="l-top-side"><h1>Information</h1>
          <p>お知らせ</p><img src="<?php echo get_template_directory_uri(); ?>/images/_x31_7.svg">
        </div>
        <div class="l-top-center">

        </div>

        <div class="l-info-visual"><img src="<?php echo get_template_directory_uri(); ?>/images/News.png"></div>
        <div class="l-info-visual-sp"><img src="<?php echo get_template_directory_uri(); ?>/images/SP-News.png"></div>

    </div>
 
<div class="l-info-flex">

  <section class="l-content">
 

       <div class="l-all-news">
       <?php
            

            $wp_query = new WP_Query();
            $my_posts = array(
               'post_type' => 'post',
               'category_name' => 'news',
               'posts_per_page' => 5,
               'post_status' => 'publish',
               'paged' => $paged

    );
    $wp_query->query($my_posts);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
            $obj = get_post_type_object($post->post_type); 
      ?>
      <div class="l-post-fl">
               <!--表示内容 -->
               <div class="l-news-image">
                  <?php echo the_content(); ?>
               </div>
       <div class="l-post-block">
               <div class="l-post-title">
                  <!-- 投稿のタイトルを表示 -->
                  <a href=" <?php the_permalink(); ?>">
                  <?php the_title(); ?>
                  </a>
               </div>
             <div class="l-post-fl2">  
               <div class="l-news-date">
                  <!-- 投稿の日付を表示 -->
                <?php echo get_the_date('Y年n月j日'); ?>
                </div>
                <div class="l-post-cate">
                <p><?php echo the_category();?></p>
                </div>
               </div>
      </div>
      </div>
               <?php endwhile;
               endif;
                ?>
               <!-- 使用した投稿データをリセット -->
<div class="l-pagination">

<?php
$args = array(
    'mid_size' => 1,
    'prev_text' => '',
    'next_text' => '',
    'screen_reader_text' => ' ',
);
the_posts_pagination($args);
?>

<?php wp_reset_postdata(); ?>
    
</div>
  </section>

  <section class="l-category">
        <h2>カテゴリ</h2>
        <?php
            $categories = get_categories();
        ?>
          <ul> 
              <?php foreach($categories as $category) { ?>
             <li><a href="<?php echo $category_link = get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></li>
             <?php } ?>
          </ul>

  </section>
</div>
  <?php get_footer(); ?>