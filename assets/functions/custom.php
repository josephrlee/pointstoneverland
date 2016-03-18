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

// Filter the except length to 20 characters.
// @param int $length Excerpt length.
// @return int (Maybe) modified excerpt length.

function wpdocs_custom_excerpt_length($length)
{
  return 40;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);
