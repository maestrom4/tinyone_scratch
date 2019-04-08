<?php


if ( ! function_exists('tinyone_theme_setup') ):
    function tinyone_theme_setup () {
        load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1568, 9999 );

        // This theme uses wp_nav_menu() in two locations.
        // register_nav_menus(
        //     array(
        //         'menu-1' => __( 'Primary', 'twentynineteen' ),
        //         'footer' => __( 'Footer Menu', 'twentynineteen' ),
        //         'social' => __( 'Social Links Menu', 'twentynineteen' ),
        //     )
        // );
        register_nav_menus(
            array(
                'primary' => __( 'Primary menu', 'tinyone' )
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 190,
                'width'       => 190,
                'flex-width'  => false,
                'flex-height' => false,
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

        // Enqueue editor styles.
        add_editor_style( 'style-editor.css' );

        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );
    }
   
endif;
 add_action('after_setup_theme', 'tinyone_theme_setup');

/**
 * Enqueue scripts and styles.
 */
function twentynineteen_scripts() {
    wp_enqueue_style( 'tinyone', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    // wp_enqueue_style( 'twentynineteen-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

    wp_register_style( 'bootsrap_css_reboot', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css');
    wp_enqueue_style( 'bootsrap_css_reboot' );
    wp_register_style( 'bootsrap_css_min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'bootsrap_css_min' );
    wp_register_style( 'custom_css', get_template_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_style( 'custom_css' );

    wp_register_script( 'bootsrap_js_min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), true );
    wp_enqueue_script( 'bootsrap_js_min' );

    wp_register_script( 'custom_js', get_template_directory_uri() . '/assets/js/custom.js', array(), true);
    wp_enqueue_script( 'custom_js' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_scripts' );

//Enqueue the Dashicons script
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
wp_enqueue_style( 'dashicons' );
}


/**
 * Widgets
 * 
 */
function tinyone_widgets_footer_init() {
    $args = array(
        'name'          => 'Footer Widget 1',
        'id'            => "footer-widget-1",
        'description'   => 'dfsfsfsf',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    );

    register_sidebar($args);

    $args = array(
        'name'          => sprintf( __( 'Footer Widget 2' ), 'tinyone' ),
        'id'            => "footer-widget-2",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    );

    register_sidebar($args);

    $args = array(
        'name'          => __( 'Footer Widget 3','tinyone' ),
        'id'            => "footer-widget-3",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    );

    register_sidebar($args);

    $args = array(
        'name'          => sprintf( __( 'Footer Widget 4' ), 'tinyone' ),
        'id'            => "footer-widget-4",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    );

    register_sidebar($args);

    $args = array(
        'name'          => 'Footer Widget 5',
        'id'            => "footer-widget-5",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    );

    register_sidebar($args);
    $args = array(
        'name'          => 'Sidebar',
        'id'            => "sidebar-widget-1",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    );

    register_sidebar($args);

 
} // End of widget sidebar

/** Start of add taxonomy to page post.  */
add_action( 'widgets_init', 'tinyone_widgets_footer_init');

function add_category_to_pages_tinyone() {
    register_taxonomy_for_object_type( 'post_tag', 'page');
    register_taxonomy_for_object_type( 'category', 'page');
} 
add_action( 'init', 'add_category_to_pages_tinyone');


// Register and load the widget
function wpb_load_widget() {
    register_widget( 'wp_tinyone' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
 
// Creating the widget 
class wp_tinyone extends WP_Widget {
 
    function __construct() {
        parent::__construct(
     
    // Base ID of your widget
    'wp_tinyone', 
     
    // Widget name will appear in UI
    __('Tinyone Category', 'wp_tinyone_domain'), 
     
    // Widget description
    array( 'description' => __( 'Tiyone Theme Footer widget category', 'wp_tinyone_domain' ), ) 
    );
    }
     
    // Creating widget front-end
     
    public function widget( $args, $instance ) {
        // echo "<pre>" . print_r($args, true) . "</pre>";
        // echo $instance['title'] . '<br>';
        $category_id = apply_filters( 'widget_title', $instance['category_id'] );
        // echo $title . '<br>';
        // before and after widget arguments are defined by themes
        // echo $args['before_widget'];
        if ( ! empty( $category_id ) )
        // echo $args['before_title'] . $category_id . $args['after_title'];
         
        // This is where you run the code and display the output
        // echo __( 'Hello, World!', 'wp_tinyone_domain' );
        $args = array(
            'post_type'     => 'page',
            'cat'           => $instance['category_id'],
            'post_per_page' => 8,
        );

        $queries = new WP_Query($args);
        if ( $queries->have_posts() ) :
            while ( $queries->have_posts() ) :
                $queries->the_post();
                $title = the_title( '<a href="' . get_permalink() . '">', '</a>', false);

                echo '<li class="footer-widget">' . $title . '</li>';
            endwhile;
        endif;
    }
             
    // Widget Backend 
    public function form( $instance ) {
        if ( isset( $instance[ 'category_id' ] ) ) {
        $cat_ID = $instance[ 'category_id' ];
        }
        else {
        $cat_ID = __( 'New Category ID', 'wp_tinyone_domain' );
        }
        // Widget admin form
        ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'category_id' ); ?>"><?php _e( 'Category ID:' ); ?></label> 
        <input type="number" class="widefat" id="<?php echo $this->get_field_id( 'category_id' ); ?>" name="<?php echo $this->get_field_name( 'category_id' ); ?>" type="text" value="<?php echo esc_attr( $cat_ID ); ?>" />
        </p>
        <?php 
    }
         
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['category_id'] = ( ! empty( $new_instance['category_id'] ) ) ? strip_tags( $new_instance['category_id'] ) : '';
        return $instance;
    }
} // Class wp_tinyone ends here
add_action( 'widgets_init', 'widget_initialize');
function widget_initialize(){
    register_widget( 'WP_Widget_Recent_Posts_tinyone' );
}
class WP_Widget_Recent_Posts_tinyone extends WP_Widget {

    /**
     * Sets up a new Recent Posts widget instance.
     *
     * @since 2.8.0
     */
    public function __construct() {
        $widget_ops = array(
            'classname'                   => 'widget_recent_entries',
            'description'                 => __( 'Your site&#8217;s most recent Posts.' ),
            'customize_selective_refresh' => true,
        );
        parent::__construct( 'recent-posts-wptiny', __( 'recent-posts-wptiny' ), $widget_ops );
        $this->alt_option_name = 'widget_recent_entries';
    }

    /**
     * Outputs the content for the current Recent Posts widget instance.
     *
     * @since 2.8.0
     *
     * @param array $args     Display arguments including 'before_title', 'after_title',
     *                        'before_widget', and 'after_widget'.
     * @param array $instance Settings for the current Recent Posts widget instance.
     */
    public function widget( $args, $instance ) {
        if ( ! isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }

        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );

        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
        if ( ! $number ) {
            $number = 5;
        }
        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

        /**
         * Filters the arguments for the Recent Posts widget.
         *
         * @since 3.4.0
         * @since 4.9.0 Added the `$instance` parameter.
         *
         * @see WP_Query::get_posts()
         *
         * @param array $args     An array of arguments used to retrieve the recent posts.
         * @param array $instance Array of settings for the current widget.
         */
        $r = new WP_Query(
            apply_filters(
                'widget_posts_args',
                array(
                    'posts_per_page'      => $number,
                    'no_found_rows'       => true,
                    'post_status'         => 'publish',
                    'ignore_sticky_posts' => true,
                ),
                $instance
            )
        );

        if ( ! $r->have_posts() ) {
            return;
        }
        ?>
        <?php echo $args['before_widget']; ?>
        <?php
        if ( $title ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        ?>
        <ul>
            <?php foreach ( $r->posts as $recent_post ) : ?>
                <?php
                $post_title = get_the_title( $recent_post->ID );
                $title      = ( ! empty( $post_title ) ) ? $post_title : __( '(no title)' );
                ?>
                <li>
                    <a href="<?php the_permalink( $recent_post->ID ); ?>"><h4><span class="dashicons dashicons-id-alt"></span> <?php echo $title; ?></h4></a>
                    <?php if ( $show_date ) : ?>
                        <span class="post-date"><small><span class="dashicons dashicons-clock"></span><?php echo get_the_date( '', $recent_post->ID ); ?></small></span>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php
        echo $args['after_widget'];
    }

    /**
     * Handles updating the settings for the current Recent Posts widget instance.
     *
     * @since 2.8.0
     *
     * @param array $new_instance New settings for this instance as input by the user via
     *                            WP_Widget::form().
     * @param array $old_instance Old settings for this instance.
     * @return array Updated settings to save.
     */
    public function update( $new_instance, $old_instance ) {
        $instance              = $old_instance;
        $instance['title']     = sanitize_text_field( $new_instance['title'] );
        $instance['number']    = (int) $new_instance['number'];
        $instance['show_date'] = isset( $new_instance['show_date'] ) ? (bool) $new_instance['show_date'] : false;
        return $instance;
    }

    /**
     * Outputs the settings form for the Recent Posts widget.
     *
     * @since 2.8.0
     *
     * @param array $instance Current settings.
     */
    public function form( $instance ) {
        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
        $show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;
        ?>
        <p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

        <p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
        <input class="tiny-text" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="number" step="1" min="1" value="<?php echo $number; ?>" size="3" /></p>

        <p><input class="checkbox" type="checkbox"<?php checked( $show_date ); ?> id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" />
        <label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php _e( 'Display post date?' ); ?></label></p>
        <?php
    }
}

