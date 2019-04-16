<?php get_header();?>
<div class="container">
	<div class="blog-heading">
		<h1><span class="red">///</span>Blog</h1>
	</div>
	<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();?>


			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<div class="post_thumbnails_single_blog">
							<?php the_post_thumbnail();?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="row the_date_blog_post">
								<?php echo get_the_date();?>
							</div>
							<span class="cat_name_blog">
								category:
								<?php the_category();?>
							</span>
							<span class="comments_post">
								<?php get_comments_number()?>
							</span>
							<span class="comments_post">
								<strong>
									author:
								</strong>
								<?php echo get_the_author()?>
							</span>
						</div>
						<div class="col-md-9">
							<div class="row heading_blog_single_page">
								<?php the_title();?>
							</div>
							<div class="row content_blog_single">
								<?php the_content();?>
							</div>
						</div>
					</div>
				</div>
				
		<div class="col-md-3 side_bar_column">
			<div class="row">
				<div class="heading_side_bar">
					<span>///</span>blog categories
				</div>
				<div class="row list_cats_side_bar">
					<?php dynamic_sidebar( 'home_right_1' ); ?>
				</div>
				<div class="row pad-25-top">
					<div class="heading_side_bar">
						<span>///</span>our skills
					</div>
					<div class="progress_bar">
						<label class="progres_label">WEB DESIGN</label>
						<div class="progress">
							  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<label class="progres_label">PROGRAMMING</label>
							<div class="progress">
							  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<label class="progres_label">SOCIAL MARKETING</label>
							<div class="progress">
							  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<label class="progres_label">SEO</label>
							<div class="progress">
							  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row pad-25-top">
					<div class="heading_side_bar">
						<span>///</span>tab widget
					</div>
					<div class="row paras">
						Bring your tabs to life with a simple plugin to toggle between content via tabs. Bootstrap integrates tabbable tabs in four styles: top (default), right, bottom, and left.
					</div>
					<div class="row">
						  <ul class="nav nav-tabs">
							    <li><a data-toggle="tab" href="#menu1">Marketing</a></li>
							    <li><a data-toggle="tab" href="#menu2">Programming</a></li>
						  </ul>
						  <div class="tab-content">
							    <div id="menu1" class="tab-pane fade active">
							      Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
							    </div>
							    <div id="menu2" class="tab-pane fade">
							      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu. Aenean nisl orci, cosequat eu.
							    </div>
						  </div>
					</div>
				</div>
				<div class="row pad-25-top">
					<div class="heading_side_bar">
						<span>///</span> example accordion
					</div>
					<div class="row">
						 <div class="panel-group" id="accordion">
				<div class="panel panel-default">
				<div class="panel-heading">
				<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a>
				</h4>
				</div>
				<div id="collapse1" class="panel-collapse collapse in">
				<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
				.</div>
				</div>
				</div>
				<div class="panel panel-default">
				<div class="panel-heading">
				<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
				</h4>
				</div>
				<div id="collapse2" class="panel-collapse collapse">
				<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
				.</div>
				</div>
				</div>
				<div class="panel panel-default">
				<div class="panel-heading">
				<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Collapsible Group 3</a>
				</h4>
				</div>
				<div id="collapse3" class="panel-collapse collapse">
				<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
				.</div>
				</div>
				</div>
				</div> 
				</div>
				</div>
			</div>
		</div>
			</div>
	<?php endwhile ?>
</div>

<?php get_footer();?>
