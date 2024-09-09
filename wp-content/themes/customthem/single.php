<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <!-- Post Title -->
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    
                    <!-- Post Meta Information -->
                    <p class="post-meta">
                        Posted on <?php the_time('F j, Y'); ?> by <?php the_author_posts_link(); ?>
                        | Category: <?php the_category(', '); ?>
                    </p>
                    
                    <!-- Post Thumbnail -->
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Post Content -->
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                    
                    <!-- Post Tags -->
                    <div class="post-tags">
                        <?php the_tags( 'Tags: ', ', ', '<br />' ); ?>
                    </div>
                    
                    <!-- Post Navigation (Previous/Next) -->
                    <div class="post-navigation">
                        <div class="previous-post">
                            <?php previous_post_link(); ?>
                        </div>
                        <div class="next-post">
                            <?php next_post_link(); ?>
                        </div>
                    </div>
                    
                </article>

                <!-- Comments Section -->
                <?php if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif; ?>

            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
        
        <!-- Sidebar (optional) -->
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
