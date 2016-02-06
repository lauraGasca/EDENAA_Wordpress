<?php get_header(); ?>
    <section class="pt pb-medium">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <article class="post mb-medium">
                            <div class="post-pic">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                            </div>
                            <div class="box light-color no-border">
                                <h2><?php the_title(); ?></h2>
                                <ul class="entry-meta">
                                    <li class="entry-date">
                                        <a href="#"><?php echo get_the_date(); ?></a>
                                    </li>
                                    <li class="entry-author">
                                        <a data-original-title="View all posts by admin" class="tips" href="#" title=""><?php echo get_the_author(); ?></a>
                                    </li>
                                    <li class="entry-comments">
                                        <i class="icon-comment"></i><?php comments_number(); ?>
                                    </li>
                                </ul>
                                <?php the_content(); ?>
                                <?php comments_template(); ?>
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