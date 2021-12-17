<?php
add_filter( 'block_categories_all', 'inb_custome_blocks_cat', 10, 2 );

// Register Blocks
add_action('acf/init', 'inb_blocks');
function inb_blocks() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'            => 'inb-title',
            'mode'				    => 'preview',
            'title'           => __('Title'),
            'category'        => 'inb-category',
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-title.php',
            'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="37.989" height="37.988" viewBox="0 0 37.989 37.988"><path id="Shape_5_copy_4" data-name="Shape 5 copy 4" d="M107.977,422.9h12.049V396.96h25.94V384.911H107.977" transform="translate(-107.977 -384.911)" fill="#00aa13"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));
        acf_register_block_type(array(
            'name'        => 'inb-contact',
            'mode'				=> 'preview',
            'title'       => __('Contact info'),
            'category'    => 'inb-category',
            'supports'		=> array(
              'align' => false,
              'mode'  => true,
              'jsx'   => false
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-contact-info.php',
            'icon'              => '<svg xmlns="http://www.w3.org/2000/svg" width="37.989" height="37.988" viewBox="0 0 37.989 37.988"><path id="Shape_5_copy_4" data-name="Shape 5 copy 4" d="M107.977,422.9h12.049V396.96h25.94V384.911H107.977" transform="translate(-107.977 -384.911)" fill="#00aa13"/></svg>',
            'enqueue_assets' => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));
        acf_register_block_type(array(
            'name'        => 'inb-download-doc',
            'mode'				=> 'preview',
            'title'       => __('Download doc'),
            'category'    => 'inb-category',
            'supports'		=> array(
              'align' => false,
              'mode'  => true,
              'jsx'   => false
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-download-doc.php',
            'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="37.989" height="37.988" viewBox="0 0 37.989 37.988"><path id="Shape_5_copy_4" data-name="Shape 5 copy 4" d="M107.977,422.9h12.049V396.96h25.94V384.911H107.977" transform="translate(-107.977 -384.911)" fill="#00aa13"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));
         acf_register_block_type(array(
            'name'        => 'inb-background',
            'mode'				=> 'preview',
            'title'       => __('Background'),
            'category'    => 'inb-category',
            'supports'		=> array(
              'align' => false,
              'mode'  => true,
              'jsx'   => true
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-background.php',
            'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="37.989" height="37.988" viewBox="0 0 37.989 37.988"><path id="Shape_5_copy_4" data-name="Shape 5 copy 4" d="M107.977,422.9h12.049V396.96h25.94V384.911H107.977" transform="translate(-107.977 -384.911)" fill="#00aa13"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));
        acf_register_block_type(array(
            'name'        => 'inb-bullets',
            'mode'				=> 'preview',
            'title'       => __('Bullets'),
            'category'    => 'inb-category',
            'supports'		=> array(
              'align' => false,
              'mode'  => true,
              'jsx'   => false
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-bullets.php',
            'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="37.989" height="37.988" viewBox="0 0 37.989 37.988"><path id="Shape_5_copy_4" data-name="Shape 5 copy 4" d="M107.977,422.9h12.049V396.96h25.94V384.911H107.977" transform="translate(-107.977 -384.911)" fill="#00aa13"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));
        acf_register_block_type(array(
            'name'        => 'inb-separator',
            'mode'				=> 'preview',
            'title'       => __('Separator'),
            'category'    => 'inb-category',
            'supports'		=> array(
              'align' => true,
              'mode'  => true,
              'jsx'   => false
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-separator.php',
            'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="37.989" height="37.988" viewBox="0 0 37.989 37.988"><path id="Shape_5_copy_4" data-name="Shape 5 copy 4" d="M107.977,422.9h12.049V396.96h25.94V384.911H107.977" transform="translate(-107.977 -384.911)" fill="#00aa13"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));
        acf_register_block_type(array(
            'name'        => 'inb-video',
            'mode'				=> 'preview',
            'title'       => __('Video'),
            'category'    => 'inb-category',
            'supports'		=> array(
              'align' => false,
              'mode'  => true,
              'jsx'   => false
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-video.php',
            'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="37.989" height="37.988" viewBox="0 0 37.989 37.988"><path id="Shape_5_copy_4" data-name="Shape 5 copy 4" d="M107.977,422.9h12.049V396.96h25.94V384.911H107.977" transform="translate(-107.977 -384.911)" fill="#00aa13"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
              // wp_enqueue_script( 'inb-video' ,plugin_dir_url( __FILE__ ) . 'js/inb-video.js', array('jquery'), '', true );
              wp_register_script( 'fichero-js-defer', plugin_dir_url( __FILE__ ) . 'js/inb-video.js', [], false, true ); 
              wp_enqueue_script( 'fichero-js-defer' );
            },
        ));

        acf_register_block_type(array(
            'name'        => 'inb-video-hero',
            'mode'				=> 'preview',
            'title'       => __('Video-hero'),
            'category'    => 'inb-category',
            'supports'		=> array(
              'align' => false,
              'mode'  => true,
              'jsx'   => true
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-video-hero.php',
            'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="37.989" height="37.988" viewBox="0 0 37.989 37.988"><path id="Shape_5_copy_4" data-name="Shape 5 copy 4" d="M107.977,422.9h12.049V396.96h25.94V384.911H107.977" transform="translate(-107.977 -384.911)" fill="#00aa13"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
              // wp_enqueue_script( 'inb-video' ,plugin_dir_url( __FILE__ ) . 'js/inb-video.js', array('jquery'), '', true );
              wp_register_script( 'fichero-js-defer', plugin_dir_url( __FILE__ ) . 'js/inb-video.js', [], false, true ); 
              wp_enqueue_script( 'fichero-js-defer' );
            },
        ));

        acf_register_block_type(array(
            'name'        => 'inb-button',
            'mode'				=> 'preview',
            'title'       => __('Button'),
            'category'    => 'inb-category',
            'supports'		=> array(
              'align' => true,
              'mode'  => true,
              'jsx'   => false
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-button.php',
            'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="37.989" height="37.988" viewBox="0 0 37.989 37.988"><path id="Shape_5_copy_4" data-name="Shape 5 copy 4" d="M107.977,422.9h12.049V396.96h25.94V384.911H107.977" transform="translate(-107.977 -384.911)" fill="#00aa13"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));
        acf_register_block_type(array(
            'name'        => 'inb-about-us',
            'mode'				=> 'preview',
            'title'       => __('About us'),
            'category'    => 'inb-category',
            'supports'		=> array(
              'align' => false,
              'mode'  => true,
              'jsx'   => true
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-about-us.php',
            'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="37.989" height="37.988" viewBox="0 0 37.989 37.988"><path id="Shape_5_copy_4" data-name="Shape 5 copy 4" d="M107.977,422.9h12.049V396.96h25.94V384.911H107.977" transform="translate(-107.977 -384.911)" fill="#00aa13"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));
        acf_register_block_type(array(
            'name'        => 'inb-post',
            'mode'				=> 'preview',
            'title'       => __('Display posts'),
            'category'    => 'inb-category',
            'supports'		=> array(
              'align' => false,
              'mode'  => true,
              'jsx'   => false
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-post.php',
            'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="37.989" height="37.988" viewBox="0 0 37.989 37.988"><path id="Shape_5_copy_4" data-name="Shape 5 copy 4" d="M107.977,422.9h12.049V396.96h25.94V384.911H107.977" transform="translate(-107.977 -384.911)" fill="#00aa13"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));
        
        acf_register_block(array(
          'name'              => 'inb-team-slider',
          'mode'              => 'preview',
          'title'             => __('Team swiper'),
          'render_template'   => plugin_dir_path(__FILE__) . 'acf-templates/inb-team-swiper.php',
          'category'          => 'inb-category',
          'icon'              => '<svg xmlns="http://www.w3.org/2000/svg" width="37.989" height="37.988" viewBox="0 0 37.989 37.988"><path id="Shape_5_copy_4" data-name="Shape 5 copy 4" d="M107.977,422.9h12.049V396.96h25.94V384.911H107.977" transform="translate(-107.977 -384.911)" fill="#00aa13"/></svg>',
          'enqueue_assets' => function(){
             wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            wp_enqueue_style( 'inb-team-slider-css', plugin_dir_url( __FILE__ ) . 'css/swiper.min.css' );
            // wp_enqueue_script('jQuery');
            // wp_enqueue_script( 'inb-team-slider-swiper-js' ,plugin_dir_url( __FILE__ ) . 'js/swiper.min.js', array('jquery'), '', true );
            // wp_enqueue_script( 'inb-team-slider-custom' ,plugin_dir_url( __FILE__ ) . 'js/inb-team.js', array('jquery'), '', true );

            wp_register_script( 'swiper.min-js-defer', plugin_dir_url( __FILE__ ) . 'js/swiper.min.js', [], false, true ); 
            wp_enqueue_script( 'swiper.min-js-defer' );

            wp_register_script( 'inb-tea-js-defer', plugin_dir_url( __FILE__ ) . 'js/inb-team.js', [], false, true ); 
            wp_enqueue_script( 'inb-tea-js-defer' );
          },
        ));
    }
    
}