							<div id="carouselExampleControls3" class="corousal_2 carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="row">
										
										<?php $args = array( 'post_type' => 'works',);
										$loop = new WP_Query( $args );
										$i = 1;
										while ( $loop->have_posts() ) : $loop->the_post();?>

											<?php $count = $loop->found_posts;
													//echo $count;
											?>
											<?php if($i == 1){
												$active = "active";
											}
											else
											{
												$active = "";
											}
											?>
											<?php $count = $loop->found_posts;
												//echo $count;
											?>
											<div class="carousel-item item <?php echo $active ?>">
										<div class="col-md-6">
											<!-- <div class="row"> -->
										  <div class="block_works fadeOut">
												<div class="row the_post_thumbnail_works">
													<a href="<?php the_permalink();?>" class="hvr-sweep-to-top "><?php the_post_thumbnail();?></a>
												</div>
												<div class="row name_cat_works">
													<div class=" the_title_works">
													</div>
													<div class="">
														<?php the_title();?>
														<?php //echo get_the_ID(); ?> 
														<?php
															$terms = get_the_terms( $post->ID , 'categoriesa' ) ? get_the_terms( $post->ID , 'categoriesa' ) : [];
															// var_dump($terms);
															if ( count( $terms ) > 0 ) {
																foreach ( $terms as $term ) {
																	echo $term->name;
																}
															}
														?>
													</div>
												</div>
											<!-- </div> -->
											</div>
											</div>
											</div>
										<?php
										$i++;
										endwhile; ?>
										
										</div>
								</div>
							</div>