<?php


//Custom functions for Points to Neverland

// Highlight serch results

function highlight_search_term($text)
{
  if (is_search()) {
    $keys = implode('|', explode(' ', get_search_query()));
    $text = preg_replace('/('.$keys.')/iu', '<span class="search-term">\0</span>', $text);
  }

  return $text;
}
add_filter('the_excerpt', 'highlight_search_term');
add_filter('the_title', 'highlight_search_term');

// Filter the except to custom length.
function excerpt($limit) {
 $excerpt = explode(' ', get_the_excerpt(), $limit);
 if (count($excerpt)>=$limit) {
 array_pop($excerpt);
 $excerpt = implode(" ",$excerpt).'...';
 } else {
 $excerpt = implode(" ",$excerpt);
 }
 $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
 return $excerpt;
}

function content($limit) {
 $content = explode(' ', get_the_content(), $limit);
 if (count($content)>=$limit) {
 array_pop($content);
 $content = implode(" ",$content).'...';
 } else {
 $content = implode(" ",$content);
 }
 $content = preg_replace('/[.+]/','', $content);
 $content = apply_filters('the_content', $content);
 $content = str_replace(']]>', ']]&gt;', $content);
 return $content;
}


/**
 *  Create a custom excerpt string from the first paragraph of the content.
 *
 *  @param   integer  $id       The id of the post
 *  @return  string   $excerpt  The excerpt string
 */
function first_paragraph_excerpt( $id=null ) {
    // Set $id to the current post by default
    if( !$id ) {
        global $post;
        $id = get_the_id();
    }
    // Get the post content
    $content = get_post_field( 'post_content', $id );
    $content = apply_filters( 'the_content', strip_shortcodes( $content ) );
    // Remove all tags, except paragraphs
    $excerpt = strip_tags( $content, '<p></p>' );
    // Remove empty paragraph tags
    $excerpt = force_balance_tags( $excerpt );
    $excerpt = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $excerpt );
    $excerpt = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $excerpt );
    // Get the first paragraph
    $excerpt = substr( $excerpt, 0, strpos( $excerpt, '</p>' ) + 4 );
    // Remove remaining paragraph tags
    $excerpt = strip_tags( $excerpt );
    return $excerpt;
}

// Hide pingbacks in comment count

add_filter('get_comments_number', 'comment_count', 0);
function comment_count( $count ) {
	global $id;
	$comments = get_approved_comments($id);
	$comment_count = 0;
	foreach($comments as $comment){
		if($comment->comment_type == ""){
			$comment_count++;
		}
	}
	return $comment_count;
}

// Removed Jetpack related posts 

function jetpackme_remove_rp() {
    if ( class_exists( 'Jetpack_RelatedPosts' ) ) {
        $jprp = Jetpack_RelatedPosts::init();
        $callback = array( $jprp, 'filter_add_target_to_dom' );
        remove_filter( 'the_content', $callback, 40 );
    }
}
add_filter( 'wp', 'jetpackme_remove_rp', 20 );
