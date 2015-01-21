<?php
/*
Author: 2020 Creative
URL: htp://2020creative.com
*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////////// 2020 Shortcodes


//////////////////////////////////////////////////////// TT Post Content

add_shortcode( 'post_info', 'post_info' );
function post_info ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
            'id' => '',
		), $atts )
	);
    
    $tt_post_content = get_post_field( 'post_content', $id );
    
// code
return $tt_post_content;    
}

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT Post Feed

add_shortcode( 'tt_posts', 'tt_posts' ); // echo do_shortcode('[tt_posts limit="-1" cat_name="home"]');
function tt_posts ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => 'post',
            'cat' => '-1',
            'cat_name' => '',
            'limit' => '10',
            'type' => 'post',
		), $atts )
	);
    
    /////////////////////////////////////// Variables
$user_ID = get_current_user_id();
$user_data = get_user_meta( $user_ID );
$user_photo_id = $user_data[photo][0];
$user_photo_url = wp_get_attachment_url( $user_photo_id );
$user_photo_img = '<img src="' . $user_photo_url . '">';

/////////////////////////////////////// All Query    
if ($name == 'post') {
	// The Query
$args = array(
	'post_type' => $type,
	'post_status' => 'publish',
	'order' => 'ASC',
	'posts_per_page' => $limit,
    'cat' => $cat,
    'category_name' => $cat_name,
);
$the_query = new WP_Query( $args );
} else { 
	//nothing
	}
    
global $post;

// pre loop
//$output = '<ul>';    

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// pull meta for each post
		$post_id = get_the_ID();
		$permalink = get_permalink( $id );
        $post = get_post();
        //$image = the_post_thumbnail( 'thumbnail' );
        $size = '250,125';
        $image = get_the_post_thumbnail( $post_id, $size, $attr );
        if (empty( $image )) {
            $image = '<img src="/wp-content/themes/math/images/img-fpo.png">';
        }
         
		
//HTML
        
    $output .= '<a href="'.$permalink.'"><div class="list-wrap"><div class="list-img col-xs-12 col-sm-4">';  
    $output .= $image .
                '</div>'.
                '<div class="row col-xs-12 col-sm-8">'. 
                    '<h2>'. $post->post_title .'</h2>'.
                    '<p>'. $post->excerpt .'</p>'.
                '</div></div>'.
                '</a>'.
                '<div class="clearfix"></div>';


	}
} else {
	// no posts found
	//echo '<h2>No ' . $type . ' found</h2>';
}
    // after loop
    //$output .= '</ul>';
    
/* Restore original Post Data */
wp_reset_postdata();
return $output;
}

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT Homepage Message 1

add_shortcode( 'tt_hp_message', 'tt_hp_message' ); // echo do_shortcode('[tt_shortcode limit="-1" cat_name="home"]');
function tt_hp_message ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => 'post',
            'cat' => '-1',
            'cat_name' => 'message',
            'limit' => '1',
            'type' => 'post',
            'click' => 'y',
		), $atts )
	);
    
    /////////////////////////////////////// Variables
$user_ID = get_current_user_id();
$user_data = get_user_meta( $user_ID );
$user_photo_id = $user_data[photo][0];
$user_photo_url = wp_get_attachment_url( $user_photo_id );
$user_photo_img = '<img src="' . $user_photo_url . '">';

/////////////////////////////////////// All Query    
if ($name == 'post') {
	// The Query
$args = array(
	'post_type' => $type,
	'post_status' => 'publish',
	'order' => 'ASC',
	'posts_per_page' => $limit,
    'cat' => $cat,
    'category_name' => $cat_name,
);
$the_query = new WP_Query( $args );
} else { 
	//nothing
	}
    
global $post;

// pre loop
//$output = '<ul>';    

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// pull meta for each post
		$post_id = get_the_ID();
		$permalink = get_permalink( $id );
        $post = get_post();
        //$image = the_post_thumbnail( 'thumbnail' );
        $size = '250,125';
        $has_feature_img = has_post_thumbnail( $post_id );
        $message_link = get_post_meta( $post_id, 'message_link' );
        $message_link_show = get_post_meta( $post_id, 'message_link_show' );

        //HTML
        if ( $has_feature_img == 'true') {
        
            $post_thumbnail_id = get_post_thumbnail_id( $post_id );
            $image = get_the_post_thumbnail( $post_id, $size, $attr );
            $img_url = wp_get_attachment_image_src( $post_thumbnail_id );
            $img = '<img class="" src="'.$img_url[0].'"/> ';
            
        } else {
            
            $img = '';
            $style = 'text-align:center;';
            
        }
		if ( $message_link_show[0] == 'y' ) {
            
            $output .= '<div class="hp-message">
                    '.$img.'<span class="message"> '. $post->post_title.' <a class="btn btn-success btn-xs" href="'.$message_link[0].'">click for details</a></span>
                </div>';
            
        } else {  
    
        $output .= '<div class="hp-message">
                    '.$img.'<span class="message"> '. $post->post_title.'</span>
                </div>';
          }

	}
} else {
	// no posts found
	
}
    // after loop
    //$output .= '</ul>';
    
/* Restore original Post Data */
wp_reset_postdata();
return $output;
}

/////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT rule
add_shortcode( 'tt_rule', 'tt_rule' ); //line
function tt_rule($atts, $content = null) {
    extract(shortcode_atts(array(
        'size'   => '1px',
        'color'  => '#ccc',
        'classes'  => 'col-sm-12 rule',
    ), $atts ) );
    return '<div class="' . $classes . '" style="border-top:' . $size . ' solid ' . $color .';padding:1.0em 0;"></div>';
}
////////////////////////////////////////////////////////