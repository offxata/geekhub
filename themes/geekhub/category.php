
           <?php get_header() ?>
           <!-- /header -->
           <div class="content">
               <div class="main">
                   <h1>Компании</h1>
                   <ul class="section">
                   <h2><?php single_cat_title('А вот и ') ?></h2>
    <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
                        <li>
                           <?php the_post_thumbnail('full', 'class=thumbnail') ?>
                           <span class="date"><?php the_time('d.m.y') ?></span>
                           <h2><a href="<?php the_permalink() ?>"><?php the_title()?></a></h2>  
                           <?php the_excerpt() ?>
                           <a href="<?php the_permalink() ?>">Read about us</a>
                           <p><?php the_tags() ?></p>
                        </li>
     <?php endwhile; ?>
     <div class="pagination">
         <?php
            global $wp_query;

            $big = 999999999; // need an unlikely integer

            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages,
                'prev_text' => __('« в прошлое'),
	            'next_text' => __('в будущее »'),
            ) );
?>
         
     </div>
     <?php else: ?>
     <!--no posts found-->
     <?php endif; ?>   
                    </ul>
               </div>
               <!-- /section -->
               <?php get_sidebar() ?>
           </div>
           <!-- /aside -->
          <?php get_footer() ?>
           <!-- /footer -->

