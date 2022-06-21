<?php get_header(); ?>

<?php
                           $term = get_queried_object();
                           echo get_field('category_image', $term); 
 ?>
         <section class="page-header">
            <div class="container-xl">
               <div class="text-center">
                  <h1 class="mt-0 mb-2"><?php single_cat_title(); ?></h1>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">/ <?php single_cat_title(); ?></li>
                     </ol>
                  </nav>
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
                           <h3 class="section-title">Tüm Yazılar</h3>
                        </div>

				<?php if(have_posts()) : while (have_posts()) : the_post(); ?> 

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
                                    <li class="list-inline-item"><a href=""><?php single_cat_title(); ?></a></li>
                                    <li class="list-inline-item">29 Mart 2021</li>
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

               	<?php endwhile; endif; ?>         
                
                     </div>
                     <nav>
                        <ul class="pagination justify-content-center">
                           <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a></li>
                           <li class="page-item active" aria-current="page">
                              <span class="page-link">1</span>
                           </li>
                           <li class="page-item"><a class="page-link" href="#">2</a></li>
                           <li class="page-item"><a class="page-link" href="#">3</a></li>
                           <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </section>


<?php get_footer(); ?>