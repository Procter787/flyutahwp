<?php /**
 * Flexible Content
 * The template part for displaying flexible content
 * <?php get_template_part( 'template-parts/flexible-content' ); ?>
 */
?>
<?php if( have_rows('flexible_content') ): ?>
    <div class="flexible-content-wrap">
        <?php while ( have_rows('flexible_content') ) : the_row(); ?>
            <?php 
                $flex_count = get_row_index();
                get_template_part( 'template-parts/hero-banner' );
                
                if( get_row_layout() == 'wysiwyg_editor' ): 
                    echo 'test';
                endif;
            ?>
            
        <?php endwhile; ?>
    </div>
<?php endif; ?>