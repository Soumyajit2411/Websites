<?php
if ( ! defined('ABSPATH')) exit;  // if direct access



add_filter('the_content','wcps_preview_content');

function wcps_preview_content($content){

    if(is_singular('wcps')){

        $post_id = get_the_id();

        $content .= do_shortcode('[wcps id="'.$post_id.'"]');

    }

    return $content;

}

add_shortcode('wcps_update_title_wcps_layout', 'wcps_update_title_wcps_layout');
function wcps_update_title_wcps_layout(){

    $args = array(
        'post_type' => 'wcps_layout',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );

    $post_id = '';

    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) :
        while ($wp_query->have_posts()) : $wp_query->the_post();
            $post_id = get_the_id();

            $post_title = get_the_title();
            $post_title_arr = explode('Theme', $post_title);

            //var_dump($post_title_arr);

            $last_part = end($post_title_arr);

            wp_update_post(
                array(
                'ID'           => $post_id,
                'post_title'   => $last_part,
                )
            );


            echo '<br>';
        endwhile;
    else:

    endif;
}








function wcps_first_wcps_layout(){

    $args = array(
        'post_type' => 'wcps_layout',
        'post_status' => 'publish',
        'posts_per_page' => 1,
    );

    $post_id = '';

    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) :
        while ($wp_query->have_posts()) : $wp_query->the_post();

            $post_id = get_the_id();

            return $post_id;
        endwhile;
    else:

    endif;
}


function wcps_get_first_order_id(){

    $args = array(
        'post_type' => 'shop_order',
        'post_status' => 'publish',
        'posts_per_page' => 1,
    );

    $post_id ='';

    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) :
        while ($wp_query->have_posts()) : $wp_query->the_post();
            $product_id = get_the_id();
            return $product_id;
        endwhile;
    else:

    endif;
}

function wcps_get_first_product_id(){

    $args = array(
        'post_type' => 'product',
        'post_status' => 'publish',
        'posts_per_page' => 1,
    );

    $post_id ='';

    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) :
        while ($wp_query->have_posts()) : $wp_query->the_post();
            $product_id = get_the_id();
            return $product_id;
        endwhile;
    else:

    endif;
}


function wcps_get_first_post($post_type = 'product'){

    $args = array(
        'post_type' => $post_type,
        'post_status' => 'publish',
        'posts_per_page' => 1,
    );

    $post_id ='';

    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) :
        while ($wp_query->have_posts()) : $wp_query->the_post();
            $product_id = get_the_id();
            return $product_id;
        endwhile;
    else:

    endif;
}




function wcps_get_first_category_id($taxonomy = 'product_cat'){



    $terms = get_terms( array(
        'taxonomy' => $taxonomy,
        'hide_empty' => false,
    ) );

    return $terms[1]->term_id;


}

function wcps_get_first_dokan_vendor_id(){

    $args = array(
        'role'         => 'shop_vendor',
        'orderby'      => 'registered',
        'order'        => 'DESC',
        'number'       => 1
    );

    $users = get_users( $args );
    $last_user_registered = isset($users[0]) ? $users[0] : '';

    $vendor_id = isset($last_user_registered->ID) ?$last_user_registered->ID : '';

    return $vendor_id;
}

function wcps_featured_product_ids($query_args){

    $query_args['tax_query'][] = array(
        'taxonomy' => 'product_visibility',
        'field' => 'name',
        'terms' => 'featured',
        'operator' => 'IN',
    );

    $query_args['post_type'] = 'product';
    $query_args['post_status'] = 'publish';
    $query_args['posts_per_page'] = -1;


    // var_dump($query_args);
    $wp_query = new WP_Query($query_args);

    $featured_post_ids = wp_list_pluck( $wp_query->posts, 'ID' );
    wp_reset_postdata();

    return $featured_post_ids;

}





function wcps_recently_viewed_products(){


    $viewed_products = ! empty( $_COOKIE['woocommerce_recently_viewed'] ) ? (array) explode( '|', $_COOKIE['woocommerce_recently_viewed'] ) : array();
    $viewed_products = array_filter( array_map( 'absint', $viewed_products ) );

    $viewed_products = wcps_recursive_sanitize_arr($viewed_products);

    return $viewed_products;
}


function wcps_recursive_sanitize_arr($array) {

    foreach ( $array as $key => &$value ) {
        if ( is_array( $value ) ) {
            $value = wcps_recursive_sanitize_arr($value);
        }
        else {
            $value = sanitize_text_field( $value );
        }
    }

    return $array;
}



add_action( 'template_redirect', 'wcps_track_product_view', 20 );


function wcps_track_product_view() {
	
    $wcps_settings = get_option('wcps_settings');
    $track_product_view = isset($wcps_settings['track_product_view']) ? $wcps_settings['track_product_view'] : 'no';

    if($track_product_view=='yes' && is_singular('product')){
        global $post;

        if ( empty( $_COOKIE['woocommerce_recently_viewed'] ) )
            $viewed_products = array();
        else
            $viewed_products = (array) explode( '|', $_COOKIE['woocommerce_recently_viewed'] );

            $viewed_products = wcps_recursive_sanitize_arr($viewed_products);

        if ( ! in_array( $post->ID, $viewed_products ) ) {
            $viewed_products[] = $post->ID;
        }

        if ( sizeof( $viewed_products ) > 15 ) {
            array_shift( $viewed_products );
        }

        // Store for session only
        wc_setcookie( 'woocommerce_recently_viewed', implode( '|', $viewed_products ) );
    }


}




function wcps_add_shortcode_column( $columns ) {
    return array_merge( $columns, 
        array( 'shortcode' => __( 'Shortcode',  'woocommerce-products-slider' ) ) );
}
add_filter( 'manage_wcps_posts_columns' , 'wcps_add_shortcode_column' );


function wcps_posts_shortcode_display( $column, $post_id ) {
    if ($column == 'shortcode'){
		?>
        <input style="background:#bfefff" type="text" onClick="this.select();" value="[wcps <?php echo 'id=&quot;'.$post_id.'&quot;';?>]" /><br />
      <textarea cols="50" rows="1" style="background:#bfefff" onClick="this.select();" ><?php echo '<?php echo do_shortcode("[wcps id='; echo "'".$post_id."']"; echo '"); ?>'; ?></textarea>
        <?php		
		
    }
}
add_action( 'manage_wcps_posts_custom_column' , 'wcps_posts_shortcode_display', 10, 2 );
