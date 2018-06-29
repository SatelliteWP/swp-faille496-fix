<?php
/*
Plugin name: Patch temporaire de sécurité - 4.9.6
Description: See <a href='https://blog.ripstech.com/2018/wordpress-file-delete-to-code-execution/'>Ripstech blogpost</a> for details.
Author: SatelliteWP
Author URL: https://www.satellitewp.com
Version: 1.0
*/

add_filter( 'wp_update_attachment_metadata', 'swp_unlink_fix' );

function swp_unlink_fix( $data ) {
    if ( isset( $data['thumb'] ) ) {
        $data['thumb'] = basename( $data['thumb'] );
    }
    return $data;
}
