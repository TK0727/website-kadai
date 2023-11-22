

<?php get_header(); ?>
<main>
  <section class="error-sec">
    <div class="inner">
      <h2>404 Not Found</h2>
      <p>お探しのページが見つかりませんでした。URLをご確認ください。</p>
      <a href="<?php echo esc_url(home_url('/')); ?>">トップページへ</a>
    </div>
  </section>
</main>
<?php get_footer(); ?>