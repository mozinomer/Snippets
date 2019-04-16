<section class="data-section_home-page">
	<?php if(!is_page('work')){?>
<div class="row pos-rel">
	<h1 class="heaidng_home_page">
		<?php echo get_option("heading_data_home_page");?>
	</h1>
	<span class="tagline_heading_data_home-page">
		<?php echo get_option("tagline_heading_data_home_page");?>
	</span>
	<span class="view_all_works">
		view all
	</span>
</div>
<?php }?>
<div class="row gird_view_work" data-aos="fade-up" data-aos-anchor-placement="top-center">
	<?php $data_query =  new WP_Query(array('post_type' => 'works', 'order_by'=>'Des', 'posts_per_page' => 4));?>
	<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
		<div class="col-md-6 block_works fadeOut">
			<div class="row the_post_thumbnail_works">
				<a href="<?php the_permalink();?>" class="hvr-sweep-to-top "><?php the_post_thumbnail();?></a>
			</div>
			<div class="row name_cat_works">
				<div class=" the_title_works">
				</div>
				<div class="title_post_work_and_cat">
					<span class="title_post_work"><?php the_title();?></span>
					<?php //echo get_the_ID(); ?> 
					<span class="post_work_and_cat">
						<?php
							$terms = get_the_terms( $post->ID , 'categoriesa' ) ? get_the_terms( $post->ID , 'categoriesa' ) : [];
							// var_dump($terms);
							if ( count( $terms ) > 0 ) {
								foreach ( $terms as $term ) {
									echo $term->name;
								}
							}
						?>
					</span>
				</div>
			</div>
		</div>
	<?php endwhile;?>
</div>
</section>


















800 813 4725