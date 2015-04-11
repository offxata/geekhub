
           <?php get_header() ?>
           <!-- /header -->
           <div class="content">
               <div class="main">
                   <ul class="section">
    <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
                        <li>
                           
                           <span class="date"><?php the_time('d.m.y') ?></span>
                           <h2><a href="<?php the_permalink() ?>"><?php the_title()?></a></h2>  
                           <?php the_content() ?>

                        </li>
     <?php endwhile; ?>
     <!--post navigation-->
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

