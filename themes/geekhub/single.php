
           <?php get_header() ?>
           <!-- /header -->
                
            <main class="main" role="main">
                <blockquote class="slogan">
                    <p>"Ability may get you to the top, but it takes character to keep you there."</p>
                    <p>John Wooden</p>
                </blockquote>
<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
                <article class="single-post">
                    <?php the_post_thumbnail('full', 'class=thumbnail') ?>
                    <span class="arrow-up"></span>
                    <h2><a href="<?php the_permalink() ?>"><?php the_title()?></a></h2>
                    <p><?php the_content() ?></p>
                    <ul class="blog-panel">
                        <li class="post-like">15</li>
                        <li>by <?php the_author(); ?> / </li>
                        <li><?php comments_number('none', 'comment', 'comments'); ?> / </li>
                        <li><?php the_time('d.m.y') ?></li>
                    </ul>
                </article>
       <?php endwhile; ?>
	        <?php else: ?>
     <!--no posts found-->
     <?php endif; ?>  
		<div class="pagination">
         <?php
            global $wp_query;
            $big = 999999999;
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages,
                'prev_text' => '« в прошлое',
	            'next_text' => 'в будущее »'
            ) );
			?>    
			</div>
            </main>
               <!-- /section -->
               <?php get_sidebar() ?>
           <!-- /aside -->
          <?php get_footer() ?>
           <!-- /footer -->