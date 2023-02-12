
<link rel="stylesheet" href="../assets/css/utility-stories-style.css">

<div class="utility-dashboard-widget-block">
	<div class="utility-title-bar">
		<?php
		foreach ( $this->plugin_link as $k => $link ) {
			echo '<a target="_blank" href="' . esc_url($link[1]) . '"> ' . esc_html($link[0]) . '</a>';
			if ( isset( $this->plugin_link[ $k + 1 ] ) ) {
				echo '<div class="utility-bullet-wall"></div>';
			}
		}
		?>
	</div>
</div>

<?php 
foreach ( $this->stories as $story ) :
	if ( $story['type'] === 'news' || $story['type'] === '' ) :
		?>
		<div class="utility-stories-str <?php echo ( ( isset( $story['story_image'] ) && $story['story_image'] != '' ) ? 'with-image' : '' ); ?>">
			<?php if ( isset( $story['story_image'] ) && $story['story_image'] != '' ) : ?>
				<div class="utility-stories-str-thumb">
					<img src="<?php echo esc_url( $story['story_image'] ); ?>" />
				</div>
			<?php endif; ?>

			<div  class="utility-stories-str-desc">

				<a target="_blank" href="<?php echo esc_url( $story['story_link'] ); ?>">
					<?php echo esc_html( $story['title'] ." test dis 0004 "); ?>    
				</a>

				<?php if ( isset( $story['description'] ) && $story['description'] != '' ) : ?>
					<span><?php echo esc_html( $story['description'] ); ?>  </span>
				<?php endif; ?>
				
			</div>
		</div>
		<?php
	elseif ( $story['type'] === 'banner' ) :
		?>
		<div class="utility-stories-str">
			<a target="_blank" href="<?php echo esc_url( $story['story_link'] ); ?>">
				<img class="utility-banner" src="<?php echo isset( $story['story_image'] ) && $story['story_image'] != '' ? esc_url($story['story_image']) : '#'; ?>" />
			</a>
		</div>
		<?php
	endif;
endforeach;
?>

<div class="utility-dashboard-widget-block">
	<div class="utility-footer-bar">
		<a href="https://wpmet.com/support-ticket" target="_blank">
			<?php echo esc_html__( 'Need Help?', 'elementskit-lite' ); ?> 
			<span aria-hidden="true" class="dashicons dashicons-external"></span>
		</a>
		<a href="https://wpmet.com/blog/" target="_blank">
		<?php echo esc_html__( 'Blog', 'elementskit-lite' ); ?> 
			<span aria-hidden="true" class="dashicons dashicons-external"></span>
		</a>
		<a href="https://wpmet.com/fb-group" target="_blank" style="color: #27ae60;">
			<?php echo esc_html__( 'Facebook Community', 'elementskit-lite' ); ?> 
			<span aria-hidden="true" class="dashicons dashicons-external"></span>
		</a>
	</div>
</div>
