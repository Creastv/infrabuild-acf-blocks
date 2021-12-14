<?php
$uid = $block['id'];

$className = 'inb-download-doc';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
?>
<div class="<?php echo $uid; ?> <?php echo esc_attr($className); ?>">
    <?php if( have_rows('docs') ): ?>
    <ul class="inb-docs">
        <?php while( have_rows('docs') ): the_row(); 
        $textLink = get_sub_field('text_link');
        $link = get_sub_field('doc_link');
        ?>
        <li>
            <a href="<?php echo $link; ?>" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                    <path id="Icon_awesome-download" data-name="Icon awesome-download"
                        d="M15.188,0h5.625A1.683,1.683,0,0,1,22.5,1.688V13.5h6.166a1.4,1.4,0,0,1,.991,2.4L18.963,26.6a1.362,1.362,0,0,1-1.92,0L6.335,15.9a1.4,1.4,0,0,1,.991-2.4H13.5V1.688A1.683,1.683,0,0,1,15.188,0ZM36,26.438v7.875A1.683,1.683,0,0,1,34.313,36H1.688A1.683,1.683,0,0,1,0,34.313V26.438A1.683,1.683,0,0,1,1.688,24.75H12L15.448,28.2a3.6,3.6,0,0,0,5.1,0L24,24.75H34.313A1.683,1.683,0,0,1,36,26.438Zm-8.719,6.188a1.406,1.406,0,1,0-1.406,1.406A1.41,1.41,0,0,0,27.281,32.625Zm4.5,0a1.406,1.406,0,1,0-1.406,1.406A1.41,1.41,0,0,0,31.781,32.625Z"
                        fill="#33bb42" />
                </svg>
                <?php echo $textLink; ?>
            </a>
        </li>
        <?php endwhile; ?>
    </ul>
    <?php endif; ?>
</div>