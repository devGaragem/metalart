<?php
get_header();
?>
<main id="archive-portfolio">
<?php
$categories = get_categories();
foreach($categories as $category):
?>
<h2><?php echo $category->name?></h2>
<?php 
$args = array (
  'post_type' => 'portfolio',
  'category_name' => $category->name
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
  printf('<div class="portfolio-row">');
  while($the_query->have_posts(  )) {
    $the_query->the_post();
    printf('<img src="'.get_the_post_thumbnail_url().'"/>');
  }
  wp_reset_postdata();
  printf("</div>");
}

?>
<?php
endforeach;
wp_reset_postdata();?>
</main>
<?php
get_footer();
?>