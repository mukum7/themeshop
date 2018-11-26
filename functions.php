<?php

/*
---------------------------------------
Enqueue css and js
---------------------------------------
*/

function themeshop_scripts() {
// Registering style
wp_enqueue_style( 'bootstrapcss', get_stylesheet_directory_uri().'/css/bootstrap.min.css');
wp_enqueue_style('ionicons', get_stylesheet_directory_uri(). '/css/ionicons.css');
wp_enqueue_style('selectize', get_stylesheet_directory_uri(). '/css/selectize.css');
wp_enqueue_style('mainstyle', get_stylesheet_directory_uri().'/css/style.css');
wp_enqueue_style('slick', get_stylesheet_directory_uri(). '/slick/slick.css');
wp_enqueue_style('slick-theme', get_stylesheet_directory_uri(). '/slick/slick-theme.css');
wp_enqueue_style('lightgallery', get_stylesheet_directory_uri(). '/css/lightgallery.css');




//Registering Script

wp_enqueue_script('jquery-oo', get_template_directory_uri(). '/js/vendor/jquery-3.2.1.min.js',array('jquery'),'1.0', true);

wp_enqueue_script( 'bootstrapjs', get_template_directory_uri(). '/js/vendor/bootstrap.min.js', array('jquery'),'1.0', true);
wp_enqueue_script('popperjs', get_template_directory_uri().'/js/vendor/popper.js', array('jquery'),'1.0', true);
wp_enqueue_script('selectizejs', get_template_directory_uri().'/js/vendor/selectize.min.js', array('jquery'),'1.0', true);
wp_enqueue_script('slickjs', get_template_directory_uri().'/slick/slick.js',array('jquery'),'1.0', true);
wp_enqueue_script('mainjs', get_template_directory_uri(). '/js/main.js', array('jquery'),'1.0', true);


wp_enqueue_script('picturefilljs','https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js', array('jquery'),'1.0', true );
wp_enqueue_script('lightgalleryjs', get_template_directory_uri().'/js/lightgallery-all.min.js', array('jquery'), '1.0', true);
wp_enqueue_script('mousewheeljs', get_template_directory_uri(). '/js/jquery.mousewheel.min.js', array('jquery'), '1.0', true);







}
add_action( 'wp_enqueue_scripts', 'themeshop_scripts' );


/*
---------------------------------------
Theme logo
---------------------------------------
*/

function themeshopco_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themeshopco_custom_logo_setup' );

/*
---------------------------------------
Theme thumbnail
---------------------------------------
*/

add_theme_support('post-thumbnails');


/*
---------------------------------------
Theme menu
---------------------------------------
*/

function register_themeshopco_menus() {
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'themeshop-menu' => __('Themeshop menu'),
      'otherproduct-menu' => __('Other Product menu'),
      'support-menu' => __('Support menu'),
      'recommend-menu' => __('We Recommend menu')
    )
  );
}
add_action( 'init', 'register_themeshopco_menus' );




/*
---------------------------------------
include walker file
---------------------------------------
*/

require get_template_directory() .'/inc/walkerclass.php';





/**
-------------------------------------------
 Register our sidebars and widgetized areas.
 ------------------------------------------
 */
function themeshopco_widgets_init() {

	register_sidebar( array(
		'name'          => 'Primary sidebar',
		'id'            => 'main_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>'
	) );

  register_sidebar( array(
    'name'          => 'review sidebar',
    'id'            => 'reviews_bar',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>'


  ));


}
add_action( 'widgets_init', 'themeshopco_widgets_init' );



/**
-------------------------------------------
 Register themeshopco breadcrumbs
 ------------------------------------------
 */



function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}


/**
-------------------------------------------
 Remove user info fields and add new 
 ------------------------------------------
 */


function themeshopco_edd_remove_fields() {
  // Call remove action on each of the sections you want to remove
  // You can locate the exact action name by looking at includes/checkout/template.php
  remove_action( 'edd_purchase_form_after_user_info', 'edd_user_info_fields' );

}
add_action( 'init', 'themeshopco_edd_remove_fields' );





/**
------------------------
custom text free download button
---------------------------
 * Easy Digital Downloads
 * Change the button text of a free download. Default is "Free - Add to Cart"
*/

function fdp_edd_free_download_text_args( $args ) {
  // Enter the button text for a free download
  $free_download_text = 'Free Download';
  $variable_pricing = edd_has_variable_prices( $args['download_id'] );
  if ( $args['price'] && $args['price'] !== 'no' && ! $variable_pricing ) {
    $price = edd_get_download_price( $args['download_id'] );
    if ( 0 == $price ) {
      $args['text'] = $free_download_text;
    }
  }
  return $args;
}
add_filter( 'edd_purchase_link_args', 'fdp_edd_free_download_text_args' );



/*
----------------------
show free if price 0
----------------------
*/


function themeco_custom_excerpt_length($length){
  return 30;

}
add_filter('excerpt_length', 'themeco_custom_excerpt_length', 999);

/*
----------------------
show free if price 0
----------------------


 function pw_format_currency( $formatted, $currency, $price ) {  
   
    if( ! is_admin() && $price == 0.00 ) {  
        return 'Free'  
    }  
   
}  
add_filter( 'edd_usd_currency_filter_before', 'pw_format_currency', 10, 3 );  
*/




        



/*
--------------------
custom field add user info fields
--------------------
*/

/*function sumobi_edd_display_checkout_fields() {
?>
    <p id="edd-phone-wrap">
        <label class="edd-label" for="edd-phone">Phone Number</label>
        <span class="edd-description">
          Enter your phone number so we can get in touch with you.
        </span>
        <input class="edd-input" type="text" name="edd_phone" id="edd-phone" placeholder="Phone Number" />
    </p>
    <?php
}
add_action( 'edd_purchase_form_user_info_before', 'sumobi_edd_display_checkout_fields' );*/


/*
// remove/unhook the user info fields
remove_action( 'edd_register_fields_before', 'edd_user_info_fields' );
// add/rehook the user info fields to after the register fields
add_action( 'edd_register_fields_after', 'edd_user_info_fields' );*/











/*add_action( 'edd_purchase_form_user_info_fields' , 'sd_edd_checkout_field' );
 
function sd_edd_checkout_field(){
  ?>
  <div class="payment-details-form">
                    <form action="">
                        <div class="form-header">
                             <h2>Personal info <span class="members">Already have an account? <a href="#">Login</a></span></h2>
                        </div>

                        <div class="row custom-row">
                            <div class="form-group col-sm-12">
                                <label for="exampleInputName22">Email Address<span>*</span></label>
                                <input type="email" class="form-control" id="exampleInputName22" required="" name="">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputName11">Full Name<span>*</span></label>
                                <input type="text" class="form-control" id="exampleInputName11" required="" name="">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="exampleInputName12">Last Name<span>*</span></label>
                                <input type="text" class="form-control" id="exampleInputName12" required="" name="">
                            </div>


                        </div>

                        <div class="form-header create-account">
                            <h2>create an account <span class="opt">(optional)</span></h2>
                        </div>

                        <div class="row custom-row">
                            <div class="form-group col-sm-12">
                                <label for="exampleInputName23">Username</label>
                                <input type="text" class="form-control" id="exampleInputName23" required="" name="">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputName13">Password</label>
                                <input type="password" class="form-control" id="exampleInputName13" required="" name="">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="exampleInputName14">Password Again</label>
                                <input type="text" class="form-control" id="exampleInputName14" required="" name="">
                            </div>
                        </div>
                        <h2 class="purchase-total">Purchase total: <span>$52</span></h2>
                        <button type="submit" class="btn btn-primary theme-button">proceed to payment</button>
                    </form>
                </div>
  <?php
}*/








/**
 * Easy Digital Downloads
 * Change the button text of a free download. Default is "Free - Add to Cart"
*/
/*function sumobi_edd_free_download_text_args( $args ) {
  // Enter the button text for a free download
  $free_download_text = 'Free download';
  $variable_pricing = edd_has_variable_prices( $args['download_id'] );
  if ( $args['price'] && $args['price'] !== 'no' && ! $variable_pricing ) {
    $price = edd_get_download_price( $args['download_id'] );
    if ( 0 == $price ) {
      $args['text'] = $free_download_text;
    }
  }
  return $args;
}
add_filter( 'edd_purchase_link_args', 'sumobi_edd_free_download_text_args' );*/




/**
-------------------------------------------
edd purchase buttom
 ------------------------------------------
 */
