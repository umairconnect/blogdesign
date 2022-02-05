
<?php
/* Template Name: Blog Page Template */

get_header();

function getFirstXWord($string, $a) {
    $temp = explode(" ", $string);
    return implode(" ", array_slice($temp, 0, $a, true));
}
?>
    <div id="content">
        <section class="blog_header">
            <div class="row">
                <div class="col small-12 large-12">
                    <h1>The Latest on SVOD</h1>
                </div>

                <div class="col small-12 large-12">
                   <a class="button primary is-outline lowercase">
                       Request Demo
                   </a>
                </div>
            </div>
        </section>

        <section class="category_menu">
            <div class="row">
                <div class="col small-12 large-12">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'my-custom-menu',
                            'container_class' => 'custom-menu-class' ) );
                        ?>
                 </div>
            </div>
        </section>

        <section class="single_post_sec">
            <div class="container">

                    <?php

                     $the_query= new WP_Query( array('posts_per_page' => 1, ) );

                     if ( $the_query->have_posts() ) :

                         while ( $the_query->have_posts() ) : $the_query->the_post();
                             global $post;

                     ?>
                            <div class="row align-middle">
                                <div class="col large-6 small-12">
                                       <?php echo  get_the_post_thumbnail() ?>
                                </div>

                                <div class="col large-6 small-12">
                                    <h2><?php echo  the_title() ?></h2>
                                    <p class="date_cate"><?php echo get_the_date() ?> . <?php echo the_category( $post->ID); ?></p>
                                    <p><?php echo the_excerpt()
                                         ?></p>
                                </div>

                            </div>
                         <?php endwhile; ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
            </div>
        </section>

        <section class="latest_post_display">
            <div class="container">
                <div class="row">
                <?php

                $the_query= new WP_Query( array('posts_per_page' => 5, ) );

                if ( $the_query->have_posts() ) :

                    while ( $the_query->have_posts() ) : $the_query->the_post();
                        ?>

                            <div class="col large-4 small-12">
                                <?php echo  get_the_post_thumbnail() ?>
                                    <div class="post_content">
                                        <h2><?php echo  the_title() ?></h2>
                                        <p class="date_cate"><?php echo get_the_date() ?> . <?php echo the_category( $post->ID); ?> </p>
                                        <p><?php echo the_excerpt()
                                            ?></p>
                                    </div>
                            </div>


                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>

                </div>
            </div>
        </section>

    </div>
<?php
get_footer();
?>