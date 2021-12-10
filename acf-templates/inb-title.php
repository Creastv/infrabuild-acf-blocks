<?php

$title = get_field('title');
$tag = get_field('tag');

$uid = $block['id'];

$className = 'inb-title-block';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
?>

<div class="<?php echo $uid; ?> <?php echo esc_attr($className); ?>">
    <div class="inb-title-wraper">
        <svg xmlns="http://www.w3.org/2000/svg" width="37.989" height="37.988" viewBox="0 0 37.989 37.988">
            <path id="Shape_5_copy_4" data-name="Shape 5 copy 4" d="M107.977,422.9h12.049V396.96h25.94V384.911H107.977"
                transform="translate(-107.977 -384.911)" fill="#00aa13" />
        </svg>
        <<?php echo $tag; ?> class="inb-title"><?php echo $title; ?><?php echo $title; ?></<?php echo $tag; ?>>
    </div>
</div>