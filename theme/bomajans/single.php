<?php get_header(); ?>


         <section class="hero-carousel">
            <div class="container-xl">
               <div class="row gy-4">
                  <div class="col-lg-8">
                     <!-- post single -->
                     <div class="post post-single">
                        <!-- post header -->
                        <div class="post-header">
                           <h1 class="title mt-0 mb-3"><?php the_title(); ?></h1>
                           <ul class="meta list-inline mb-0">
                              <li class="list-inline-item"><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></li>
                              <li class="list-inline-item"><?php the_time('j F Y'); ?></li>
                           </ul>
                        </div>
                        <!-- featured image -->
                        <div class="featured-image">
                                         <?php if(has_post_thumbnail()) :?>
                                          <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" />
                                          <?php endif; ?>
                        </div>
                        <!-- post content -->
                        <div class="post-content clearfix">
                           <p><?php the_content(); ?></p>
                        </div>
                        <!-- post bottom section -->
                        <div class="post-bottom">
                           <div class="row d-flex align-items-center">
                              <div class="col-md-6 col-12 text-center text-md-start">
                                 <!-- tags -->
                              <?php 
                                 $categories = get_the_category();
                                 foreach ($categories as $category){
                                 echo '<a href="' . get_category_link($category->term_id) . '" class="tag">#' . $category->cat_name . '</a>';

                                 } 
                              ?>  							
                                 <a href="<?php the_permalink(); ?>" class="tag"><?php single_cat_title(); ?></a>
                              </div>
                              <div class="col-md-6 col-12">
                                 <!-- social icons -->
                                 <ul class="social-icons list-unstyled list-inline mb-0 float-md-end">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="spacer" data-height="50"></div>
                     <div class="about-author padding-30 rounded">
                        <div class="thumb">
                           <img src="<?php bloginfo('template_url'); ?>/images/bomajans-square-2.jpg" alt="logo" style="max-width:100px;" />
                        </div>
                        <div class="details">
                           <h4 class="name"><a href="<?php the_permalink(); ?>">Bom Ajans</a></h4>
                           <p>Özgün ve kaliteli işler üreten, yeni nesil bir dijital ajans.</p>
                           <!-- social icons -->
                           <ul class="social-icons list-unstyled list-inline mb-0">
                              <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="spacer" data-height="50"></div>
                     <!-- section header -->
                  </div>
                  <div class="col-lg-4">
                     <!-- sidebar -->
                     <div class="sidebar">
                        <!-- widget post carousel -->
                        <div class="widget rounded">
                           <div class="widget-header text-center">
                              <h3 class="widget-title">Kategorinin Diğer Postları</h3>
                           </div>
                           <div class="widget-content">
                              <div class="post-carousel-widget">
                                 <!-- post -->
                                 <?php

                                 	$catName = the_category_id($display = false);
									         $singleCat = new WP_Query("cat=$catName&showposts=10"); while($singleCat->have_posts()) : $singleCat->the_post();

                                  ?>
                                 <div class="post post-carousel">
                                    <div class="thumb rounded">
                                       <a href="<?php the_permalink(); ?>">
                                       <?php if(has_post_thumbnail()) :?>
                                       <img src="<?php the_post_thumbnail_url('small'); ?>" alt="<?php the_title(); ?>" />
                                       <?php endif; ?>
                                       </a>
                                    </div>
                                    <h5 class="post-title mb-0 mt-4"><a href="blog-single.html"><?php the_title(); ?></a></h5>
                                    <ul class="meta list-inline mt-2 mb-0">
                                       <li class="list-inline-item"><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></li>
                                       <li class="list-inline-item"><?php the_time('j F Y'); ?></li>
                                    </ul>
                                 </div>

                             <?php endwhile; ?>
                             <?php wp_reset_query(); ?>
                              </div>
                              <!-- carousel arrows -->
                              <div class="slick-arrows-bot">
                                 <button type="button" data-role="none" class="carousel-botNav-prev slick-custom-buttons" aria-label="Previous"><i class="icon-arrow-left"></i></button>
                                 <button type="button" data-role="none" class="carousel-botNav-next slick-custom-buttons" aria-label="Next"><i class="icon-arrow-right"></i></button>
                              </div>
                           </div>
                        </div>
                        <!-- widget tags -->
                        <div class="widget rounded">
                           <div class="widget-header text-center">
                              <h3 class="widget-title">Diğer Kategoriler</h3>
                           </div>
                           <div class="widget-content">
								<?php 
								    $category_ids = get_all_category_ids();
								    foreach($category_ids as $cat_id) {
								        $cat_name = get_cat_name($cat_id);
								        $category_url = get_category_link($cat_id);
								        echo '<a href="'.$category_url.'" class="tag">#' . $cat_name . '</a>';
								    }
								?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

<?php get_footer(); ?>