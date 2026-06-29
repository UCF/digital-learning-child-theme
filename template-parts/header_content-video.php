<?php
/**
 * Header content for pages using the Video Transcript template.
 */

$obj          = ucfwp_get_queried_object();
$video        = get_field( 'video_embed_url', $obj );
$header_type  = ucfwp_get_header_type( $obj );
$title_class  = ( $header_type === 'media' ) ? 'text-inverse' : '';
?>

<?php if ( $video ) : ?>
<div class="header-content-inner">
	<div class="container">
		<h1 class="text-center font-condensed mt-4 mb-5 <?php echo esc_attr( $title_class ); ?>"><?php echo esc_html( get_the_title( $obj ) ); ?></h1>
		<div class="embed-responsive embed-responsive-16by9 header-video-embed">
			<?php echo $video; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ACF oembed field ?>
		</div>
	</div>
</div>
<?php endif; ?>
