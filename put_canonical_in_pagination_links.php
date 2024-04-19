<?php
/**
 * Plugin Name: Adds canonical
 * Description: Plugin that adds a canonical link pointing to the first page of the category or tag on subsequent pages, e.g. "/page/x"
 * Version: 0.1
 * Author: Adriana Moreira
 */

add_filter('wpseo_canonical', 'my_wpseo_canonical');

function my_wpseo_canonical($canonical) {
    if (is_paged()) {
        if (is_archive()) {
            $url = get_category_link(get_queried_object_id());
            return $url;
        }
    }

    return $canonical;
}

