<?php 

add_theme_support('post-thumbnails');
add_post_type_support( 'Case Studie', 'thumbnail' );    
// Our custom post type function
function create_posttype() {
 
    register_post_type( 'movies',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Studie' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'casestudies'),
            'supports' => array( 'title', 'editor',  'exerpts' )
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );




add_action( 'init', 'create_tag_taxonomies', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Tags', 'taxonomy general name' ),
    'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Tags' ),
    'popular_items' => __( 'Popular Tags' ),
    'all_items' => __( 'All Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Tag' ), 
    'update_item' => __( 'Update Tag' ),
    'add_new_item' => __( 'Add New Tag' ),
    'new_item_name' => __( 'New Tag Name' ),
    'separate_items_with_commas' => __( 'Separate tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove tags' ),
    'choose_from_most_used' => __( 'Choose from the most used tags' ),
    'menu_name' => __( 'Tags' ),
  ); 

  register_taxonomy('tag','movies',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tag' ),
  ));
}



add_theme_support('post-thumbnails');
add_post_type_support( 'partners', 'thumbnail' );    
// Our custom post type function
function create_posttype2() {
 
    register_post_type( 'data',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Partners' ),
                'singular_name' => __( 'Partners' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'data'),
            'supports' => array( 'title', 'editor',  'exerpts')
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype2' );

function wpcodex_add_excerpt_support_for_post() {
    add_post_type_support( 'data', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_post' );





add_theme_support('post-thumbnails');
add_post_type_support( 'article', 'thumbnail' );    
// Our custom post type function
function create_posttype3() {
 
    register_post_type( 'article',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'article' ),
                'singular_name' => __( 'article' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'article'),
            'supports' => array( 'title', 'editor',  'exerpts', 'author'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype3' );

function wpcodex_add_excerpt_support_for_post2() {
    add_post_type_support( 'article', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_post2' );






add_theme_support('post-thumbnails');
add_post_type_support( 'agency', 'thumbnail' );    
// Our custom post type function
function create_posttype6() {
 
    register_post_type( 'agency',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'agency' ),
                'singular_name' => __( 'agency' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'agency'),
            'supports' => array( 'title', 'editor',  'exerpts', 'author'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype6' );

function wpcodex_add_excerpt_support_for_post6() {
    add_post_type_support( 'agency', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_post6' );






add_theme_support('post-thumbnails');
add_post_type_support( 'services', 'thumbnail' );    
// Our custom post type function
function create_posttype4() {
 
    register_post_type( 'services',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'services' ),
                'singular_name' => __( 'services' )
            ),
            'public' => true,
            'hierarchical' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'supports' => array( 'title', 'editor',  'exerpts', 'author', 'page-attributes' ),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype4' );

function wpcodex_add_excerpt_support_for_post3() {
    add_post_type_support( 'services', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_post3' );



add_theme_support('post-thumbnails');
add_post_type_support( 'designing', 'thumbnail' );    
// Our custom post type function
function create_posttype5() {
 
    register_post_type( 'designing',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'designing' ),
                'singular_name' => __( 'designing' )
            ),
            'public' => true,
            'hierarchical' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'designing'),
            'supports' => array( 'title', 'editor',  'exerpts', 'author'),
        )
    );
}


// Hooking up our function to theme setup
add_action( 'init', 'create_posttype5' );

function wpcodex_add_excerpt_support_for_post4() {
    add_post_type_support( 'designing', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_post4' );


add_action( 'init', 'create_designings_hierarchical_taxonomy', 0 );
 
//create a custom taxonomy name it topics for your posts
 
function create_designings_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Topics', 'taxonomy general name' ),
    'singular_name' => _x( 'category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search categorys' ),
    'all_items' => __( 'All categorys' ),
    'parent_item' => __( 'Parent category' ),
    'parent_item_colon' => __( 'Parent category:' ),
    'edit_item' => __( 'Edit category' ), 
    'update_item' => __( 'Update category' ),
    'add_new_item' => __( 'Add New category' ),
    'new_item_name' => __( 'New category Name' ),
    'menu_name' => __( 'categorys' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('categorys',array('designing'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'category' ),
  ));
 
}



 add_action( 'init', 'create_services_hierarchical_taxonomy1', 0 );
function create_services_hierarchical_taxonomy1() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'categories', 'taxonomy general name' ),
    'singular_name' => _x( 'category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search categorys' ),
    'all_items' => __( 'All categorys' ),
    'parent_item' => __( 'Parent category' ),
    'parent_item_colon' => __( 'Parent category:' ),
    'edit_item' => __( 'Edit category' ), 
    'update_item' => __( 'Update category' ),
    'add_new_item' => __( 'Add New category' ),
    'new_item_name' => __( 'New category Name' ),
    'menu_name' => __( 'categories' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('categories',array('services'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'category' ),
  ));
 
}





add_theme_support('post-thumbnails');
add_post_type_support( 'works', 'thumbnail' );    
// Our custom post type function
function create_posttype_work() {
 
    register_post_type( 'works',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Works' ),
                'singular_name' => __( 'Works' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'works'),
            'supports' => array( 'title', 'editor',  'exerpts','custom-fields' )
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_work' );

add_action( 'init', 'create_works_hierarchical_taxonomy2', 0 );

function create_works_hierarchical_taxonomy2() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'categories', 'taxonomy general name' ),
    'singular_name' => _x( 'category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search categorys' ),
    'all_items' => __( 'All categorys' ),
    'parent_item' => __( 'Parent category' ),
    'parent_item_colon' => __( 'Parent category:' ),
    'edit_item' => __( 'Edit category' ), 
    'update_item' => __( 'Update category' ),
    'add_new_item' => __( 'Add New category' ),
    'new_item_name' => __( 'New category Name' ),
    'menu_name' => __( 'categories' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('categoriesa',array('works'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'categories' ),
  ));
 
}


require_once dirname( __FILE__ ) . '/includes/options.php';
require_once dirname( __FILE__ ) . '/includes/theme_suport.php';
require_once dirname( __FILE__ ) . '/includes/meta_boxes.php';
require_once dirname( __FILE__ ) . '/includes/meta/featured-galleries.php';




// hooks to made a fetured gallery in custom post type 

function add_featured_galleries_to_works( $postTypes ) 
{
    array_push($postTypes, 'works' );
    return $postTypes;
}
add_filter('fg_post_types', 'add_featured_galleries_to_works' );

?>


<?php
    // Check if the User is accessing Admin Panel or Front end
    if ( ! is_admin() ) { // User is accessing Front end
    
        $GLOBALS['Load_Template_010Pixel'] = new Load_Template_010Pixel();
        
    } else { // User is accessing Admin Panel
    
        // Create Custom Meta Box
        $GLOBALS['Template_List_Metabox_010Pixel'] = new Template_List_Metabox_010Pixel();
        
        // Manage Template Allowed List Admin Panel
        $GLOBALS['Template_List_Metabox_Admin_010Pixel'] = new Template_List_Metabox_Admin_010Pixel();
        
    }
?>
<?php
    /**
     *
     * Template_List_Metabox_010Pixel
     * ============================================================================
     * This class is to create metabox for Template List for the Post Types which are
     * in allowed post types for templates
     *
     */
     
    class Template_List_Metabox_010Pixel {
        
        // Create an Array of Post Types which are allowed to use Templates
        public $metaBoxTitle = 'Template';
        public $PostTypesWithTemplateAllwed = array ();
        
        // Initiate Class
        public function __construct() {
            
            // Add values to Post Types with Allowed Template List from template_post_type_list option
            // Get the values as array
            $this->PostTypesWithTemplateAllwed = (array) get_option('template_post_type_list'); 
            
            // Start creating Meta Box
            add_action('add_meta_boxes',array( &$this, 'add_post_template_metabox_template' ));
            
            // Save Data to Database
            add_action('save_post',array( &$this, 'save_post_template' ),10,2);
            
            // Add link in plugins list
            $prefix = is_network_admin() ? 'network_admin_' : '';
            add_filter( $prefix . 'plugin_action_links_' . plugin_basename(__FILE__), array( &$this,'addSettingsLink' ), 10, 2 );
        }
        
        // Add Meta Box to Current Post Type
        public function add_post_template_metabox_template() {
            $currentPostType = get_post_type();
            if ( in_array($currentPostType, $this->PostTypesWithTemplateAllwed) ) {
                add_meta_box('postparentdiv', __($this->metaBoxTitle),  array( &$this, 'post_template_meta_box' ), $currentPostType, 'side', 'core');
            }
        }
        
        // Create Meta Box
        public function post_template_meta_box($post) {
            
            // Check if the Current Post Type is in the Allowed Template Post Types list
            if ( in_array($post->post_type, $this->PostTypesWithTemplateAllwed) ) {
                // Get current page Template Name (if any)
                $template = get_post_meta($post->ID,$post->post_type . '_template',true);
                
                $templateList = '';
                // Security Nonce Key
                $templateList .= '<input type="hidden" name="custom_type_noncename" id="custom_type_noncename" value="' . wp_create_nonce( $post->post_type . $post->ID ) . '" />';
                $templateList .= '<label class="screen-reader-text" for="post_template">' . translate($this->metaBoxTitle) . '</label>';
                $templateList .= '<select name="post_template" id="post_template">';
                $templateList .= '<option value="default">' . translate("Default Template") . '</option>';

                // Calling a Wordpress in-built function to get templates array
                $templates = get_page_templates();
                foreach ( $templates as $template_name => $template_filename ) {
                    $templateList .= '<option value="'. $template_filename .'"';
                    if ( $template == $template_filename ) { $templateList .= ' selected="selected" '; }
                    $templateList .= '>'. $template_name .'</option>';
                }

                $templateList .= '';
                $templateList .= '</select>';
                
                echo $templateList;
            }
        }

        // Save Data to Database
        public function save_post_template($post_id,$post) {
            
           // verify this came from the our screen and with proper authorization.
            if ( !wp_verify_nonce( @$_POST['custom_type_noncename'], $post->post_type . $post_id )) {
                return $post_id;
            }
            
            // verify if this is an auto save routine. If it is our form has not been submitted, so we dont want to do anything
            if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
                return $post_id;
                
            // Check permissions
            if ( !current_user_can( 'edit_post', $post_id ) )
                return $post_id;
                
            // Check if the Current Post Type is in the Allowed Template Post Types list and Post Template value is not empty
            if ( in_array($post->post_type, $this->PostTypesWithTemplateAllwed) && !empty($_POST['post_template']) )
            {
                update_post_meta($post->ID,$post->post_type . '_template',$_POST['post_template']);
            }
            
        }
        
        // Add a link to the setting option page
        public static function addSettingsLink( $links ) {
        
            $links[] = '<a href="'.admin_url('options-general.php?page=010pixel_tmplt_list_metabox').'"> '.__( 'Settings', 'sis' ).' </a>';
            
            return $links;
        }
    }

?>
<?php
    /**
     *
     * Template_List_Metabox_Admin_010Pixel
     * ============================================================================
     * This class will create Admin Page where all the post types will be visible.
     * Tick the post types for which template list dropdown metabox is needed.
     *
     */

    class Template_List_Metabox_Admin_010Pixel {

        // Initiate Class
        public function __construct() {
            add_action('admin_menu', array( &$this, 'add_tmplt_mngr_page') );
            add_action('admin_init', array( &$this, 'tmplt_mngr_serialize' )); 
        }
        
        // Create Menu to access Template List Metabox Admin Page
        public function add_tmplt_mngr_page() {  
          
            add_options_page(  
                'Template List Metabox',
                'Template List Metabox',
                'administrator',
                '010pixel_tmplt_list_metabox',
                array( &$this, 'template_list_plugin_options' )
            );  
          
        }
        
        // Create Template Metabox Settings Page
        public function template_list_plugin_options() { 
            ?> 
            <div class="wrap"> 
             
                <?php screen_icon(); ?>
                <h2>Template Allowed Post Types List</h2> 
                <?php settings_errors(); ?> 
                 
                <form method="post" action="options.php"> 
                    <?php
                        // Load the form
                        settings_fields( 'template_post_type_list' );  
                        do_settings_sections( 'template_post_type_list' );  
                        submit_button();
                    ?> 
                </form> 
                 
            </div>
            <?php 
        }
        
        // Create Form for Post Type Lists
        public function tmplt_mngr_serialize() { 
         
            // If the template post tyoe list options don't exist, create them.  
            if( false == get_option( 'template_post_type_list' ) ) {    
                add_option( 'template_post_type_list' );  
            }
          
            // Register a section
            add_settings_section(  
                'template_page_list_section',
                'Choose Post Types for which you want to allow Page Templates.',
                array( &$this, 'template_page_list_callback' ),
                'template_post_type_list'
            );
            
            // Introduce the fields for Listing Post Types with checkbox
            add_settings_field(   
                'post_types_list',
                'Post Types',
                array( &$this, 'post_types_list_callback' ),
                'template_post_type_list',
                'template_page_list_section'
            ); 
            
            // Register the fields with WordPress 
            register_setting( 
                'template_post_type_list', 
                'template_post_type_list' 
            ); 
             
        }
        
        public function template_page_list_callback() { 
            echo '<hr />'; 
        }
        
        // Post Types Checkbox
        public function post_types_list_callback($args) { 
            
            // Read the options collection  
            $options = get_option('template_post_type_list'); 
            
            // Get the Post Types List
            $post_types=get_post_types(array('public' => true),'objects');
            
            $html = '';
            
            foreach ($post_types  as $post_type ) {
                if ( $post_type->name != 'attachment' ) {
                    $html .= '<input 
                                type="checkbox" 
                                id="template_post_type_list['. $post_type->name .']"
                                name="template_post_type_list['. $post_type->name .']" 
                                value="'. $post_type->name .'" ' . checked($post_type->name, isset($options[$post_type->name]) ? $options[$post_type->name]: '' , false) . '
                            />&nbsp;';   
                    $html .= '<label for="template_post_type_list['. $post_type->name .']">' . $post_type->label .'</label><br />';
                }
            }
             
            echo $html; 
        }

    }
?>
<?php
    /**
     *
     * Load_Template_010Pixel
     * ============================================================================
     * This class will be loaded in front end. It will check the post type template
     * and load relevant template page
     *
     */
     
    class Load_Template_010Pixel {
        
        // Initiate Class
        public function __construct() {
            add_filter( 'single_template', array( $this, 'load_custom_template') );
        }
        
        // Load Custom Template
        public function load_custom_template( $default_template ) {

            global $post;
            
            // Get All post types for which templates are allowed
            $PostTypesWithTemplateAllwed = (array) get_option('template_post_type_list'); 
            
            // Get Current Post ID
            $postId = $post->ID;

            // Get Current Post Type
            $postType = $post->post_type;
            
            // If Current Post Type is in the Post Type with Template allowed list
            // then show the post in the chosen template            
            if ( in_array ( $postType, $PostTypesWithTemplateAllwed) ) {
                
                $templateFile = get_post_meta($postId, $postType . '_template', true);
                
                $template = locate_template( $templateFile, false );

                if ( $template ) $default_template = $template;
            }
            
            return $default_template;
        }
    }
?>


<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home right sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>