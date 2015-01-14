<?php /** * Template Name: Data */ ?>
<?php Starkers_Utilities::get_template_parts( array( 'template-parts/headers/tpl_header_site', 'template-parts/headers/tpl_header_branding', 'template-parts/navigation/tpl_nav_topbar', 'template-parts/navigation/tpl_nav_offcanvas' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="page-header tg-header">
    <div class="row">
        <div class="small-12 columns">
            <h1 class="page-title">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>
</div>

<div class="row">

    <div class="small-12 large-8 columns">
        <article class="post">
            <?php if ( has_post_thumbnail() ) : ?>
            <header class="margin-bottom-2">
                <?php the_post_thumbnail( 'large', array( 'class'=>'feature-photo' ) ); ?>
                <?php if( get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
                <div class="post-meta">
                    <?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></div>
                <?php endif; ?>
            </header>
            <?php endif; ?>

            <?php the_content(); ?>

            <?php wp_reset_postdata(); ?>

        </article>
    </div>

    <div class="small-12 large-4 columns">

        <?php $args= array( 'post_type'=>'sdsn-publications', 'posts_per_page' => 5, 'location' => 'data-monitoring-accountability' ) ?>

        <?php $related_posts= get_posts( $args ); ?>

        <?php if( !empty( $related_posts ) ) : ?>

        <h5>Related Resources</h5>

        <ul class="no-bullet">

            <?php foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
            <li class="margin-bottom-1">
                <article class="post archive">
                    <header>
                        <div class="post-meta">
                            <time datetime="<?php the_time('Y-n-D'); ?>" pubdate>
                                <?php the_time( 'M j, Y'); ?>
                            </time>
                        </div>
                        <h1>
                            <a href="<?php the_permalink();?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h1>
                    </header>
                </article>
            </li>
            <?php endforeach; ?>
            <?php if ( count( $related_posts )>= 5 ) : ?>
            <li>
                <a class="button tiny radius" href="/resources/publication/type/data-monitoring-accountability">View All</a>
            </li>
            <?php endif; ?>

        </ul>

        <?php wp_reset_postdata(); ?>

        <?php endif; ?>

        <?php // RELATED NEWS

            $args = array( 'post_type'=>'post', 'posts_per_page' => '5', 'category_name' => 'data-monitoring-accountability' ) ?>

        <?php $related_news= get_posts( $args ); ?>

        <?php if( !empty( $related_news ) ) : ?>

        <h5>News</h5>

        <ul class="no-bullet">

            <?php foreach ( $related_news as $post ) : setup_postdata( $post ); ?>
            <li class="margin-bottom-1">
                <article class="post archive">
                    <header>
                        <div class="post-meta">
                            <time datetime="<?php the_time('Y-n-D'); ?>" pubdate>
                                <?php the_time( 'M j, Y'); ?>
                            </time>
                        </div>
                        <h1>
                            <a href="<?php the_permalink();?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h1>
                    </header>
                </article>
            </li>
            <?php endforeach; ?>
            <?php if ( count( $related_news )>= 5 ) : ?>
            <li>
                <a class="button tiny radius" href="/news/category/data-monitoring-accountability">View All</a>
            </li>
            <?php endif; ?>

        </ul>

        <?php wp_reset_postdata(); ?>

        <?php endif; ?>




    </div>

</div>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'template-parts/footers/tpl_footer_branding', 'template-parts/footers/tpl_footer_site' ) ); ?>
