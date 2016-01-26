<?php
// Add thumbnail support
add_theme_support( 'post-thumbnails' );

// Crop thumbnail medium size
if(false === get_option("medium_crop")) {
    add_option("medium_crop", "1");
} else {
    update_option("medium_crop", "1");
}

// Crop thumbnail large size
if(false === get_option("large_crop")) {
    add_option("large_crop", "1");
} else {
    update_option("large_crop", "1");
}


// Parse Twitter Feed
function parse_feed($feed) {
 $stepOne = explode("<content type=\"html\">", $feed);
 $stepTwo = explode("</content>", $stepOne[1]);
 $tweet = $stepTwo[0];
 $tweet = html_entity_decode($tweet);
 return $tweet;
}
 
// Display latest tweet
function getTwitterStatus($userid){
$url = "https://api.twitter.com/1/statuses/user_timeline/$userid.xml?count=1&include_rts=1callback=?";

$xml = simplexml_load_file($url) or die("could not connect");

       foreach($xml->status as $status){
       $text = $status->text;
       }
       echo $text;
 }

// Gets post views, to display most popular posts
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

// Counts post views, to display most popular posts
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// Sets "wide", "regular" and "last" class to posts.
function postCounter($counter) {
	$class = '';
	$counter++;
	if ($counter == 1) {
		$class .= 'wide';
	} elseif ($counter % 3 ) {
		$class .= 'regular';
	} else {
		$class .= 'regular last';
	}
}

/* remove/change 'says' in comments // alchymyth 2011 */
class Comment_Says_Custom_Text_Wrangler {
	function comment_says_text($translation, $text, $domain) {
	$new_says = ''; //whatever you want to have instead of 'says' in comments
    $translations = &get_translations_for_domain( $domain );
    if ( $text == '<cite class="fn">%s</cite> <span class="says">says:</span>' ) {
	   if($new_says) $new_says = ' '.$new_says; //compensate for the space character
       return $translations->translate( '<cite class="fn">%s</cite>' );
     } else {
    return $translation; // standard text
	 }  
	}
}
add_filter('gettext', array('Comment_Says_Custom_Text_Wrangler', 'comment_says_text'), 10, 4);

add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );

/* Feeds in <head> */
add_theme_support( 'automatic-feed-links' );

?>
