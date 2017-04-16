<section id="feature">
	<div class="container">
		<div class="center wow fadeInDown">
			<h2><?php echo $content->content_title; ?></h2>

			<h3><?php echo strip_tags(word_limiter($content->content_description, 100, '')); ?></h3>
		</div>
	</div>
	<!--/.container-->
</section><!--/#feature-->

<div id="catagory">
	<div class="container">

		<div class="row">
			<div class="features">
				<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
					<div class="box">
						<img src="<?php echo base_url() ?>frontend/images/catagory.png" width="75" height="75">

						<h2><?php echo $theme_option->feature_heading1; ?></h2>
						<h5><?php echo $theme_option->feature_tagline1; ?></h5>

						<p><?php echo $theme_option->feature_desc1; ?></p>
						<!-- <a href="#" class="btn-center btn-success">More</a> -->
					</div>
				</div>
				<!--/.col-md-4-->

				<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
					<div class="box">

						<img src="<?php echo base_url() ?>frontend/images/catagory1.png" width="75" height="75">

						<h2><?php echo $theme_option->feature_heading1; ?></h2>
						<h5><?php echo $theme_option->feature_tagline1; ?></h5>

						<p><?php echo $theme_option->feature_desc1; ?></p>
						<!-- <a href="#" class="btn-center btn-success">More</a> -->
					</div>
				</div>
				<!--/.col-md-4-->

				<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
					<div class="box">
						<img src="<?php echo base_url() ?>frontend/images/catagory2.png" width="75" height="75">

						<h2><?php echo $theme_option->feature_heading1; ?></h2>
						<h5><?php echo $theme_option->feature_tagline1; ?></h5>

						<p><?php echo $theme_option->feature_desc1; ?></p>
						<!-- <a href="#" class="btn-center btn-success">More</a> -->
					</div>
				</div>
				<!--/.col-md-4-->

			</div>
			<!--/.services-->
		</div>
	</div>
</div><!--/.catagory-->
<div id="video">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 video_detail">
				<h2> How Can We Help!</h2>

				<p>
					Aenean nonummy hendrerit mris. Phasellus porta. Fusce suscipit varius. Cum sociis natoque penatibus
					et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.
				</p>
				<a href="#" class="btn btn-danger">Watch Video</a>
			</div>
			<div class="col-lg-6">
				<!-- <a href="#"><img src="<?php echo base_url() ?>frontend/images/video.jpg" width="558" height="332"></a> -->

				<div class="video-container"><?php echo $theme_option->theme_video; ?></div>


			</div>

		</div>
		<!--/.row-->
	</div>
</div>

<section id="recent-works">
	<div class="container">
		<div class="center wow fadeInDown">
			<h2>OUR PROCESS</h2>
		</div>
		<div class="row">
			<?php if (!empty($process)) {
				$i = 1;
				foreach ($process as $value) {
					if ($i < 5) {
						?>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<div class="process">
								<img src="<?php echo base_url() ?>frontend/images/<?php echo $i; ?>.png" width="109"
									 height="100">

								<h3><?php echo $value->process_title; ?></h3>

								<p><?php echo word_limiter($value->process_description, 200, ''); ?></p>
							</div>
						</div>
						<?php $i++;
					}
				}
			} ?>
		</div>
		<!--/.row-->
	</div>
	<!--/.container-->
</section><!--/#recent-works-->
</div>
<hr>

