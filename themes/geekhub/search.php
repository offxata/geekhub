
           <?php get_header() ?>
           <!-- /header -->
           <div class="content">
               <div class="main">
                   <h1>Результаты поиска</h1>
                   <ul class="section">
    <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
                        <li>
                           <?php the_post_thumbnail('full', 'class=thumbnail') ?>
                           <span class="date"><?php the_time('d.m.y') ?></span>
                           <h2><a href="<?php the_permalink() ?>"><?php the_title()?></a></h2>  
                           <?php the_excerpt() ?>
                           <a href="<?php the_permalink() ?>">Read about us</a>
                        </li>
     <?php endwhile; ?>
 
     <?php else: ?>
     <p>нет ничего</p>
     <?php endif; ?>   
                    </ul>
               </div>
               <!-- /section -->
               <?php get_sidebar() ?>
           </div>
           <!-- /aside -->
          <?php get_footer() ?>
           <!-- /footer -->

           <?php get_header() ?>
           <!-- /header -->
                
            <main class="main" role="main">
                <blockquote class="slogan">
                    <p>"Ability may get you to the top, but it takes character to keep you there."</p>
                    <p>John Wooden</p>
                </blockquote>
<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
<form action="<?php echo home_url('/'); ?>" ...>
       <?php endwhile; ?>
	        <?php else: ?>
         <p>нет ничего</p>
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
