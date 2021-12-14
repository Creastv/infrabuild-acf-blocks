<?php
$color = get_field("color");
$bgColor = get_field("bg_color_text");
$text= get_field("text");

$uid = $block['id'];

$className = 'inb-separator';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
?>
<div id="<?php echo $uid; ?>" class=" <?php echo esc_attr($className); ?>">
   <div class="inb-separator-wrap">
       <hr>
       <p><?php echo $text; ?></p> 
   </div>
</div>


    <style>
    #<?php echo $uid; ?> p {
        color:<?php echo $color; ?>;
        background-color: <?php echo $bgColor; ?>!important;
    }
     #<?php echo $uid; ?> hr {
      border-top: 1px solid <?php echo $color; ?>;
    }
    </style>
