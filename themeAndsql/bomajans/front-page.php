<?php get_header(); ?>
         <section class="hero-carousel">
            <div class="container-xl">
               <div class="post-carousel-lg">
                  <!-- post -->
                  <div class="post featured-post-xl">
                     <div class="details clearfix">
                        <h4 class="post-title"><a href="#">Yenilikçi Ve Fonksiyonel Website Yaratımları</a></h4>
                     </div>
                     <a href="#">
                        <div class="thumb rounded">
                           <div class="inner data-bg-image" data-bg-image="<?php bloginfo('template_url'); ?>/images/bom-banner.jpg"></div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </section>
         <section class="hero-carousel mt-5">
            <div class="container-xl">
               <div class="row gy-4">
                  <div class="section-header">
                     <h3 class="section-title">Başlıca Kategoriler</h3>
                     
                  </div>
                  <div class="row post-carousel-featured post-carousel">
                     <!-- post -->
                        <?php 
                          
                           $category_ids = get_all_category_ids();
                           foreach($category_ids as $cat_id) {                               
                                 $cat_name = get_cat_name($cat_id);
                                 $category_url = get_category_link($cat_id);                                                                                           
                                 echo '
                                 <div class="post featured-post-md">
                                    <div class="details clearfix">
                                       <h4 class="post-title"><a href="'.$category_url.'"">' . $cat_name . '</a></h4>
                                    </div><a href="'.$category_url.'""><div class="thumb rounded">'
                                    ?>
                                    <div class="inner data-bg-image" data-bg-image="<?php bloginfo('template_url'); ?>"></div>

                                    </div>
                                    </a>
                                 </div>
                                 <?php
                            }
                        ?>
                        
                  </div>
               </div>
            </div>
         </section>
         <!-- section main content -->
         <section class="main-content">
            <div class="container-xl">
               <div class="row gy-4">
                  <div class="col-lg-12">
                     <div class="row gy-4">
                        <div class="section-header">
                           <h3 class="section-title">Popüler Yazılar</h3>
                        </div>



            <?php $frontPage = new WP_Query("showposts=20"); while($frontPage->have_posts()) : $frontPage->the_post(); ?> 

                        <div class="col-sm-6 col-md-4">
                           <!-- post -->
                           <div class="post post-grid rounded bordered">
                              
                                 <div class="thumb top-rounded">
                                    <a href="<?php the_permalink(); ?>">
                                       <div class="inner">
                                         <?php if(has_post_thumbnail()) :?>
                                          <img src="<?php the_post_thumbnail_url('middle'); ?>" alt="<?php the_title(); ?>" />
                                          <?php endif; ?>
                                       </div>

                                    </a>
                                 </div>
                              
                              <div class="details">
                                 <ul class="meta list-inline mb-0">
                                    <li class="list-inline-item"><a href=""><?php the_category(','); ?></a></li>
                                    <li class="list-inline-item"><?php the_time('j F Y'); ?></li>
                                 </ul>
                                 <h5 class="post-title mb-1 mt-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                 <p class="excerpt mb-0"><?php the_excerpt(); ?></p>
                              </div>
                              <div class="post-bottom clearfix d-flex align-items-center">
                                 <div class="social-share me-auto">
                                    <button class="toggle-button icon-share"></button>
                                    <ul class="icons list-unstyled list-inline mb-0">
                                       <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                    </ul>
                                 </div>
                                 <div class="more-button float-end">
                                    <a href="<?php the_permalink(); ?>"><span class="icon-options"></span></a>
                                 </div>
                              </div>
                           </div>
                        </div>


                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>  

  
                     </div>
                  </div>
               </div>
            </div>
         </section>
<?php get_footer(); ?>