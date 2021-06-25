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
                get_template_part( 'template-parts/customization-block' );
                
                
                //Example of how to print off Custom Button
                if( get_row_layout() == 'example_button' ):                     
                    $test_button = get_sub_field('custom_button');
                    print_button($test_button); 
                endif;
            ?>
            
        <?php endwhile; ?>
    </div>
<?php endif; ?>