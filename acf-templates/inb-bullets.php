<?php
 $textColor = get_field("text_color");

$uid = $block['id'];
$className = 'inb-bullets';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
?>
<div id="<?php echo $uid; ?>" class=" <?php echo esc_attr($className); ?>">
   <?php if( have_rows('bullets') ): ?>
    <ul class="bullets">
        <?php while( have_rows('bullets') ): the_row(); 
            $iconimage = get_sub_field('iconimage');
            $image = get_sub_field('image');
            $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
            $ico = get_sub_field('ico');
            $title = get_sub_field('title');
            $desc = get_sub_field('desc');
        ?>
        <li>
           <div class="bullet">
            <?php if($iconimage){ ?>
                <?php echo $ico; ?>
            <?php } else { ?>
                <?php echo wp_get_attachment_image( $image, $size ); ?>
            <?php } ?>
            <h4><?php echo $title; ?></h4>
            <p><?php echo $desc; ?></p>
           </div>
        </li>
        <?php endwhile; ?>
    </ul>
    <?php endif; ?>
</div>

<?php if ($textColor) { ?>
    <style>
    #<?php echo $uid; ?> * {
        color:<?php echo $textColor; ?>
    }
    </style>
<?php } ?>