<?php
// Example ACF field – ACF needs to be set to image ID NOT array
$image = get_field('image');
?>

<img <?php get_image_srcset( $image, 'thumb-640', '1024px' ); ?>  alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true) ?>" />
