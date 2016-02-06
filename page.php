<?php get_header(); ?>
    <section class="pt pb-medium">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <article class="post mb-medium">
                            <div class="box light-color no-border">
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                        </article>
                    <?php endwhile; else : ?>
                        <article class="post mb-medium">
                            <p><em>No se encontraron articulos</em></p>
                        </article>
                    <?php endif; ?>
                </div>
                <!-- Sidebar -->
                <aside class="col-md-4">
                    <?php get_sidebar(); ?>
                </aside>
            </div><!-- row -->
        </div><!-- container -->
    </section>
<?php get_footer(); ?>