<?php get_header();?>




<div class="container heading_row_work_page">
	<div class="row heading_work_page">
		<h1><?php echo get_option('heading_work_page');?></h1>
	</div>
	<div class="row heading_work_page">
		<?php echo get_option('sub_heading_work_page');?>
	</div>
</div>
<div class="container">
	<div class="filter_row">
		
	</div>
</div>

<div class="container">
	<div class="contianer-fluid">
		<div class="row">
			<div class="col-md-1">
				<div class="row grid_icon_row">
					<img class="grey-scle" src="<?php bloginfo('template_url'); ?>/images/grid.png" width="20px" height="20px">
				</div>
				<div class="row list_icon_row">
					<img class="grey-scle" src="<?php bloginfo('template_url'); ?>/images/list.png" width="20px" height="20px">
				</div>
			</div>
			<div class="col-md-11 col">
				<div class="row gird_view_work" data-aos="flip-up">
					<?php get_template_part( 'workss', 'page' ); ?>
				</div>
				<div class="list_view_works" data-aos="flip-up">
					<?php $data_query =  new WP_Query(array('post_type' => 'works', 'order_by','Des'));?>
					<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
						<div class="row list_works_row">
							<div class="col-md-6 col">
								<?php the_title();?>
							</div>
							<div class="col-md-4 col">
								<?php echo get_the_ID(); ?>
							</div>
							<div class="col-md-2 col text-right">
								<?php echo get_the_date();?>
							</div>
						</div>
					<?php endwhile;?>
				</div>
			</div>
		</div>
	</div>
</div>



<?php get_template_part( 'full_services', 'page' ); ?>



<?php get_footer();?>