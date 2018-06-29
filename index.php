<?php
/*
Plugin name: Patch temporaire de sécurité - CVE 2018-12895
Description: Corrige une vulnérabilité. Voir l'article <a href='https://blog.ripstech.com/2018/wordpress-file-delete-to-code-execution/'>Ripstech blogpost</a> pour plus d'information.
Author: SatelliteWP
Author URI: https://www.satellitewp.com
Version: 1.0
*/

// Accès direct interdit
if ( ! defined( 'ABSPATH' ) ) exit;

function swp_unlink_fix( $data ) {
    if ( isset( $data['thumb'] ) ) {
        $data['thumb'] = basename( $data['thumb'] );
    }
    return $data;
}

add_filter( 'wp_update_attachment_metadata', 'swp_unlink_fix' );
