<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>

<div
    <?php echo get_block_wrapper_attributes(); ?>
    data-wp-interactive="create-block"
    <?php echo wp_interactivity_data_wp_context( array( "sliderPosition" =>"50%" ) ); ?>
	class="wp-block-create-block-beforeafterimagesi" >
    <div class="container" data-wp-style----position="context.sliderPosition">
        <div class="image-container">
			<?php 
				foreach ( $block->parsed_block['innerBlocks'] as $picture ) {
					echo $picture['innerHTML'];
				}
			?>
        </div>
        <input type="range" min="0" max="100" value="50"
            aria-label="Percentage of before photo shown"
            class="slider" data-wp-on--input="actions.changePosition" />
        <div class="slider-line" aria-hidden="true"></div>
        <div class="slider-button" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 256 256">
                <rect width="256" height="256" fill="none"></rect>
                <line x1="128" y1="40" x2="128" y2="216"   fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" ></line>
                <line x1="96" y1="128" x2="16" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" ></line>
                <polyline points="48 160 16 128 48 96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" ></polyline>
                <line x1="160" y1="128" x2="240" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" ></line>
                <polyline points="208 96 240 128 208 160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" ></polyline>
            </svg>
        </div>
    </div>
</div>