<?php

/**
 *
 * Twenty Twenty-One Child Webpack is a child theme for WordPress default theme TwentyTwenty-One.
 * Copyright (C) 2021 CascardiMedia LLC
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'twenty-twenty-one-style'; // This is 'twenty-twenty-one-style' for the Twenty Twenty-one theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'custom-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );

    // Automated script enqueue based on script tags in ./dist/index.html
}

// Hack for injecting script files (from index.html where they were emitted)
add_action('wp_head', function() {
    $path = get_stylesheet_directory_uri() .'/dist/';
    ?>
    <script defer src="<?php echo $path; ?>runtime.26c291801d7a62478c85.js"></script><script defer src="<?php echo $path; ?>index.fe51ec447bab280acc1c.js"></script><?php
  });

// EOF