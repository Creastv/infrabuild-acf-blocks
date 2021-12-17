<?php

// $title = get_field('title');
$link = get_field('link');
$style = get_field("style");

$uid = $block['id'];

$className = 'inb-post';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
$grid = "";
if($style  == "extract" ){
$postPer = 4;
$grid = "half-grid";
} else {
$postPer = -1;
$grid = "full-grid";
}

$posts = new WP_Query( array(
    'post_type' => 'klasy-zlomu',
    'posts_per_page' => $postPer,
    'order' => 'ASC'
));
?>

<div id="<?php echo $uid; ?>" class=" <?php echo esc_attr($className); ?>">
   <div class="posts-wrap <?php echo esc_attr($grid ); ?>">
      <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
      <article class="post-cart">
         <header class="e-header">
            <?php the_post_thumbnail(); ?>
            <div class="post-title">
            <svg xmlns="http://www.w3.org/2000/svg" width="37.989" height="37.988" viewBox="0 0 37.989 37.988">
               <path id="Shape_5_copy_4" data-name="Shape 5 copy 4" d="M107.977,422.9h12.049V396.96h25.94V384.911H107.977"
                transform="translate(-107.977 -384.911)" fill="#00aa13" />
            </svg>
            <h2> <?php the_title( ); ?></h2>
            </div>
         </header>
         <div class="e-content">
            <?php the_content(); ?>
         </div>
      </article>
      <?php endwhile; wp_reset_query(); ?>
   </div>
   <?php if($style == "extract" ) { ?>
   <div class="load-more">
      <div class="btn-group">
      <?php if( $link ): 
         $link_url = $link['url'];
         $link_title = $link['title'];
         $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
         <a class="btn btn-main" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
      <?php endif; ?>
      </div>
   </div>
   <?php } ?>
</div>
