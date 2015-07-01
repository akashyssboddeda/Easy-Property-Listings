<?php
/**
 * Loop Property Template: Card home open list
 *
 * @package easy-property-listings
 * @subpackage Theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('epl-listing-post epl-property-blog epl-property-blog-card epl-clearfix'); ?>>				
	<?php do_action('epl_property_loop_before_content'); ?>			
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="property-box card property-box-left-card property-featured-image-wrapper">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'teaser-left-thumb' ) ); ?>
				</a>
			</div>
		<?php endif; ?>

		<div class="property-box card property-box-right-card property-content">
			<!-- Heading -->
			<h3 class="entry-title"><a href="<?php the_permalink() ?>"><?php do_action('epl_property_heading'); ?></a></h3>
			
			<?php //the_excerpt(); ?>
		
		<!-- Address -->
		<div class="property-address">
			<a href="<?php the_permalink(); ?>">
				<?php do_action('epl_property_tab_address'); ?>
			</a>
		</div>
		
			<!-- Home Open -->
			<?php do_action('epl_property_inspection_times'); ?>
			
			<!-- Property Featured Icons -->
			<div class="property-feature-icons">
				<?php do_action('epl_property_icons'); ?>						
			</div>
			
			<div class="price">
				<?php do_action('epl_property_price'); ?>
			</div>
		</div>
	<?php do_action('epl_property_loop_after_content'); ?>			
</div>
