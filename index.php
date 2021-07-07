<?php get_header(); ?>
	<div class="container">
		<section id="projects" class="py-5">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<?php 
		$args = array(
			'post-type' => 'post',
			'post-status' => 'publish',
			'order' => 'DESC',
			'posts_per_page' => 8
		);
		$projects = new WP_Query($args);
		?>
							<?php if($projects->have_posts( )): ?>
								<ul class="projects-slide">
									<?php while($projects->have_posts()): $projects->the_post();?>
										<li>
											<?php echo get_the_post_thumbnail(get_the_ID(), 'projects-thumbnail' );?>
										</li>
										<?php endwhile; ?>
								</ul>
								<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
		<div class="row ">
			<div class="col">
				<div class="mycontainer"> <span style="font-size: 28px"><i class="fas fa-rss orangeSVG fa-pull-left"></i></span>
					<p class="arimoFont fw-normal colorGrey" style="font-size: 24px">Our Blog Feed</p>
				</div>
				<?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>
					<div class="row">
						<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
							<div class="col-sm-auto col-md-auto col-lg-auto col-xl-5 espace"> <img class="" style="width: 14rem; height: 12rem;" src="<?php the_post_thumbnail_url(); ?>"> </div>
							<div class="col-sm-auto col-md-auto col-lg-auto col-xl-6">
								<p class="arimoFont  fw-bold colorGrey">
									<?php the_title(); ?>
								</p>
								<?php the_excerpt(__('(more…)')); ?>
									<p class="colorGreyTwo">
										<?php echo get_the_date( 'm/d/Y  g:i A' ); ?>
									</p>
							</div>
							<br>
							<?php 
			endwhile;
			wp_reset_postdata();
			?>
					</div>
					<br> <a class="arimoFont" href="#!" style="text-decoration: none">Older Entries</a> </div>
			<div class="col-sm">
				<div>
					<div class="mycontainer"> <span style="font-size: 28px"><i class="fab fa-twitter blueSVG fa-pull-left"></i></span>
						<p class="arimoFont fw-normal colorGrey" style="font-size: 24px">Our Twitter Feed</p>
					</div>
				</div>
				<a class="twitter-timeline" href="https://twitter.com/apptastico?ref_src=twsrc%5Etfw" height="90px" width="480px" data-chrome="noheaders nofooter noborders transparent" data-tweet-limit="3"></a>
				<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				<br> <a class="arimoFont" style="text-decoration: none">&nbsp  &nbsp  &nbsp  &nbsp &nbsp &nbsp Follow us on Twitter</a> </div>
		</div>
		<?php get_footer(); ?>
	</div>