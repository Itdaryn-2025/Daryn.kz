<?php
global $wpdb;
// Get URL queries
$type = get_query_var('type');
$event = get_query_var('event');
$key = get_query_var('key');


// If any of them is empty - redirect to the home page
if (empty($type) || empty($event) || empty($key)) {
    wp_redirect(home_url());
    exit;
}

// Get the certificate data from the database
$query = $wpdb->prepare( "SELECT * FROM olymp_results as r LEFT JOIN olymp_events as e ON olymp_results.olymp_id = olymp_events.id WHERE e.short_code = %d AND r.type = %d AND r.key = %d", $event, $type, $key );
$results = $wpdb->get_results( $query, OBJECT );
$num_results = $wpdb->num_rows;

if ( $results and $num_results == 1){
    $result = $results[0];
} else {
    wp_redirect(home_url());
    exit;
}