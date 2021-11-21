<?php
get_header();
?>
<section class="slide-show">
  <a href="" class="prev">
    <img src="<?php echo get_bloginfo('template_url');?>/assets/img/Seta esquerda.svg" width="50px" alt="">
  </a>
  <a href="" class="next">
    <img src="<?php echo get_bloginfo('template_url');?>/assets/img/Seta direita.svg" width="50px" alt="">
  </a>
  <div class="slider-inner">
  <?php 
  $the_query = new WP_Query(array(
    'post_type' => 'banners',
    'posts_per_page' => -1
  ));
  if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
      $the_query->the_post();
      ?>
      <div class="slide-item">
        <h1>
          <?php the_content();?>
        </h1>
        <img src="<?php the_post_thumbnail_url();?>" alt="">
      </div>
      <?php
    }
  }
  ?>
  </div>

</section>
<section id="sobre">
  <?php
    if (get_theme_mod('image_setting')) {
  ?>
  <img src="<?php echo get_theme_mod('image_setting');?>" alt="">
  <?php
    }
  ?>
  <article>
    <h2>
      <?php
        if (get_theme_mod('sobre_section_title')) {
          echo get_theme_mod('sobre_section_title');
        }
      ?>
    </h2>
    <p>	
      <?php
        if (get_theme_mod('sobre_section_content')) {
          echo get_theme_mod('sobre_section_content');
        }
      ?>
    </p>
  </article>
</section>
<section id="portfolio">
<?php 
    $args = array(
      'post_type' => 'portfolio',
      'posts_per_page' => '4'
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts(  )) {
      while ($the_query->have_posts()) {
        $the_query->the_post();
        printf("<a href=\"".get_the_permalink()."\"><img src=\"".get_the_post_thumbnail_url()."\"></a>");
      }
      wp_reset_postdata(  );
    }

?>
</section>
<a href="<?php echo get_permalink( get_page_by_title( 'Portfolio' ) );?>" class="btn-underline">Veja Mais</a>
<?php
get_footer();
?>