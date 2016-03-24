<?php
// Register menus
register_nav_menus(
    array(
        'main-nav' => __('Primary Menu', 'jointswp'),   // Main nav in header
        'off-canvas-menu' => __('Off Canvas Menu', 'jointswp'), // Secondary nav in footer
        'footer' => __('Footer Menu', 'jointswp'), // Footer nav
        'social' => __('Social Menu', 'jointswp'), // Social nav
    )
);

// The Top Menu
function joints_top_nav()
{
    wp_nav_menu(array(
         'container' => false,                           // Remove nav container
         'menu_class' => 'horizontal menu',       // Adding custom nav class
				 'items_wrap' => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
         'theme_location' => 'main-nav',                    // Where it's located in the theme
         'depth' => 5,                                   // Limit the depth of the nav
         'fallback_cb' => false,                         // Fallback function (see below)
         'walker' => new Off_Canvas_Menu_Walker(),
     ));
} /* End Top Menu */

// The Off Canvas Menu
function joints_off_canvas_nav()
{
    wp_nav_menu(array(
         'container' => false,                           // Remove nav container
         'menu_class' => 'vertical menu',       // Adding custom nav class
         'items_wrap' => '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
         'theme_location' => 'off-canvas-menu',                    // Where it's located in the theme
         'depth' => 5,                                   // Limit the depth of the nav
         'fallback_cb' => false,                         // Fallback function (see below)
         'walker' => new Off_Canvas_Menu_Walker(),
     ));
} /* End Off Canvas Menu */

// The Footer Menu
function joints_footer_links()
{
    wp_nav_menu(array(
        'container' => 'false',                              // Remove nav container
        'menu' => __('Footer', 'jointswp'),    // Nav name
        'menu_class' => 'menu',                          // Adding custom nav class
        'theme_location' => 'footer',             // Where it's located in the theme
        'depth' => 0,                                   // Limit the depth of the nav
        'fallback_cb' => '',                            // Fallback function
    ));
} /* End Footer Menu */

// The Socail
function joints_social_links()
{
    wp_nav_menu(array(
        'container' => 'false',                              // Remove nav container
        'menu' => __('Social Links', 'jointswp'),    // Nav name
        'menu_class' => 'menu',                          // Adding custom nav class
        'theme_location' => 'social',             // Where it's located in the theme
        'depth' => 0,                                   // Limit the depth of the nav
        'fallback_cb' => '',                            // Fallback function
    ));
} /* End Footer Menu */

// Header Fallback Menu
function joints_main_nav_fallback()
{
    wp_page_menu(array(
        'show_home' => true,
        'menu_class' => '',      // Adding custom nav class
        'include' => '',
        'exclude' => '',
        'echo' => true,
        'link_before' => '',                            // Before each link
        'link_after' => '',                             // After each link
    ));
}

// Footer Fallback Menu
function joints_footer_links_fallback()
{
    /* You can put a default here if you like */
}
