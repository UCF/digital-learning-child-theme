<?php
/**
 * Header-related customizations for this child theme.
 **/
namespace DigitalLearning\Theme\Includes\HeaderFunctions;


/**
 * Use the video header content partial on Video Transcript template pages.
 *
 * @param string $content_type The header content type from the parent theme.
 * @param mixed  $obj          The queried object.
 * @return string
 */
function set_video_header_content_type( $content_type, $obj ) {
	if ( $obj instanceof \WP_Post && get_page_template_slug( $obj->ID ) === 'template-video.php' ) {
		return 'video';
	}

	return $content_type;
}

add_filter( 'ucfwp_get_header_content_type', __NAMESPACE__ . '\set_video_header_content_type', 10, 2 );
