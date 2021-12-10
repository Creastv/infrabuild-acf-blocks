<?php
add_filter( 'block_categories_all', 'inb_custome_blocks_cat', 10, 2 );

// Register Blocks
add_action('acf/init', 'inb_blocks');
function inb_blocks() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'inb-title',
            'mode'				=> 'preview',
            'title'             => __('Title'),
            'category'          => 'inb-category',
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-title.php',
            'icon'              => '<svg xmlns="http://www.w3.org/2000/svg" width="37.989" height="37.988" viewBox="0 0 37.989 37.988"><path id="Shape_5_copy_4" data-name="Shape 5 copy 4" d="M107.977,422.9h12.049V396.96h25.94V384.911H107.977" transform="translate(-107.977 -384.911)" fill="#00aa13"/></svg>',
            'enqueue_assets' => function(){
              wp_enqueue_style( 'acfb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));
        // //Register a Image Slider Block    
        // acf_register_block(array(
        //   'name'              => 'acfb-image-slider',
        //   'mode'              => 'preview',
        //   'title'             => __('Image Slider'),
        //   'description'       => __('Display your images as a slider or carousel.'),
        //   'render_callback'   => 'acf_blocks_template',
        //   'category'          => 'acfb-blocks',
        //   'icon'              => '<svg width="682pt" height="682pt" viewBox="-21 -91 682.66669 682" xmlns="http://www.w3.org/2000/svg">
        //     <path d="m639.98 7.5312c-0.33594-6.6172-5.7969-11.863-12.484-11.863h-615c-6.6875 0-12.148 5.2461-12.484 11.863-0.015625 0.21484-0.015625 0.42578-0.015625 0.64062v474.99c0 6.9062 5.6016 12.508 12.5 12.508h615c6.8984 0 12.5-5.6016 12.5-12.508v-474.99c0-0.21484 0-0.42578-0.015625-0.64062zm-24.984 463.12h-590v-367.46h590zm0-392.46h-590v-57.668h590z"/>
        //     <path d="m213.75 62.723h-100c-6.9062 0-12.5-5.5977-12.5-12.5 0-6.9102 5.5938-12.504 12.5-12.504h100c6.9062 0 12.5 5.5938 12.5 12.504 0 6.9023-5.5938 12.5-12.5 12.5z"/>
        //     <path d="m63.773 62.723c-6.9023 0-12.504-5.5977-12.504-12.5 0-6.9102 5.5898-12.504 12.496-12.504h0.007813c6.9062 0 12.5 5.5938 12.5 12.504 0 6.9023-5.5938 12.5-12.5 12.5z"/>
        //     <path d="m558.75 176.72h-50v-11.258c0-13.789-11.211-25.004-25-25.004h-327.5c-13.789 0-25 11.215-25 25.004v11.258h-50c-13.789 0-25 11.215-25 25.004v127.54c0 13.793 11.211 25.008 25 25.008h50v11.258c0 13.789 11.211 25.004 25 25.004h327.5c13.789 0 25-11.215 25-25.004v-11.258h50c13.789 0 25-11.215 25-25.008v-127.54c0-13.789-11.211-25.004-25-25.004zm-427.5 152.54h-50v-127.54h50l0.015625 127.54s0 0-0.015625 0zm352.52 36.266s0 0-0.015625 0h-327.5v-200.07h327.5v36.266l0.015625 127.89zm74.984-36.266h-50v-127.54h50l0.015625 127.54s0 0-0.015625 0z"/>
        //     <path d="m230.8 314.23c-3.125 0-6.2539-1.168-8.6836-3.5117l-37.5-36.227c-2.4375-2.3555-3.8164-5.6055-3.8164-8.9922 0-3.3945 1.3789-6.6406 3.8164-9l37.5-36.227c4.9727-4.793 12.879-4.6562 17.68 0.30859 4.793 4.9727 4.6562 12.887-0.30859 17.68l-28.195 27.238 28.195 27.23c4.9648 4.8008 5.1016 12.715 0.30859 17.68-2.457 2.5391-5.7266 3.8203-8.9961 3.8203z"/>
        //     <path d="m410.45 314.23c-3.2695 0-6.5391-1.2812-8.9961-3.8203-4.793-4.9648-4.6562-12.883 0.30859-17.68l28.195-27.234-28.195-27.234c-4.9648-4.793-5.1016-12.715-0.30859-17.68 4.8008-4.9648 12.711-5.1016 17.68-0.30859l37.5 36.227c2.4375 2.3594 3.8164 5.6055 3.8164 8.9961 0 3.3906-1.3789 6.6406-3.8164 8.9961l-37.5 36.227c-2.4297 2.3438-5.5586 3.5117-8.6836 3.5117z"/>
        //     <path d="m320.02 435.65c-6.9023 0-12.504-5.5977-12.504-12.5 0-6.9062 5.5898-12.508 12.496-12.508h0.007813c6.9062 0 12.5 5.6016 12.5 12.508 0 6.9023-5.5938 12.5-12.5 12.5z"/>
        //     <path d="m370.02 435.65c-6.9023 0-12.504-5.5977-12.504-12.5 0-6.9062 5.5898-12.508 12.496-12.508h0.007813c6.9062 0 12.5 5.6016 12.5 12.508 0 6.9023-5.5938 12.5-12.5 12.5z"/>
        //     <path d="m270.02 435.65c-6.9023 0-12.504-5.5977-12.504-12.5 0-6.9062 5.5898-12.508 12.496-12.508h0.007813c6.9062 0 12.5 5.6016 12.5 12.508 0 6.9023-5.5938 12.5-12.5 12.5z"/>
        //     </svg>',
        //   'enqueue_assets' => function(){
        //     wp_enqueue_style( 'acfb-image-slider-css', plugin_dir_url( __FILE__ ) . 'css/swiper.min.css' );
        //     wp_enqueue_script('jQuery');
        //     wp_enqueue_script( 'acfb-image-slider-swiper-js' ,plugin_dir_url( __FILE__ ) . 'js/swiper.min.js', array('jquery'), '', true );

        //     wp_enqueue_style( 'acfb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acfblocks.css' );
  
        //     wp_enqueue_script( 'acfb-image-slider-custom' ,plugin_dir_url( __FILE__ ) . 'js/image-slider.js', array('jquery'), '', true );
        //   },
        // ));
    }
    
}