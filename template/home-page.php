<?php
/*
 * Template Name: Home page
*/
	get_header();
?>
	<!-- Slider Start -->
	<div id="rs-slider" class="rs-slider slider3 rs-slider-style4 relative">
        <?php
            $services = new WP_Query(array(
                'post_type' => 'banner-slider'
            ))
        ?>

		<div class="bend niceties">
			<div id="nivoSlider" class="slides">
                <?php
                    while ($services->have_posts()) : $services->the_post();
                ?>
				    <img src="<?php echo get_the_post_thumbnail_url()?>" alt="" title="#slide-<?php echo get_the_ID()?>" />
                <?php endwhile; wp_reset_postdata();?>
			</div>
            <!-- Slide 1 -->
			<?php
			    while ($services->have_posts()) : $services->the_post();
            ?>
            <div id="slide-<?php echo get_the_ID()?>" class="slider-direction">
                <div class="content-part text-center">
                    <div class="container">
                        <div class="slider-des">
                            <div class="sl-subtitle"><?php the_content();?></div>
                            <h1 class="sl-title"><?php the_title()?></h1>
                        </div>
                        <ul class="slider-bottom">
                            <li><a class="readon consultant orange-slide" href="<?php the_field('banner_btn_link');?>"><?php the_field('banner_btn_text'); ?></a></li>
                            <li>
                                <div class="rs-videos">
                                    <div class="animate-border orange-color-style">
                                        <a class="popup-border" href="<?php the_field('banner_video_link');?>">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
			    <?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
	<!-- Slider End -->

	<!-- Services Section Start -->
	<div id="rs-services" class="rs-services style6">
		<div class="container custom">
			<div class="services-box-area bg20" style = "background-image: url(<?php the_field('service_bg_image');?>); ">
				<div class="row margin-0">
                    <?php
                        $services = get_field('service_repeater');
                        foreach ( $services as $service) {
                    ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 padding-0">
                            <div class="services-item no-border">
                                <div class="services-icon">
                                    <img class="dance_hover" src="<?php echo $service['service_img']?>" alt="Services">
                                </div>
                                <div class="services-content">
                                    <h3 class="title"><a href="<?php echo $service['service_link']?>"><?php echo $service['service_title']?></a></h3>
                                    <p class="margin-0"><?php echo $service['service_content']?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Services Section End -->

	<!-- About Section Start -->
	<div class="rs-about style4 bg21 pt-100 pb-100 md-pt-70 md-pb-70">
		<div class="container">
			<div class="row y-middle">
				<div class="col-lg-6 pr-40 md-pr-15 mt-45 md-mt-0 md-mb-50">
					<div class="sec-title3">
						<span class="sub-text">About Us</span>
						<h2 class="title pb-25">
							We are crafting your unique business consulting ideas
						</h2>
						<div class="desc pb-17">
							We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.
						</div>
						<p class="margin-0">
							Today, a variety of software can create random text that resembles Lorem Ipsum. For example, Apple’s Pages and Keynote software use scrambled placeholder text. And Lorem Ipsum is featured on Google Docs, WordPress, and Microsoft Office Word. Derived from Latin dolorem ipsum, Lorem Ipsum is filler text used by publishers and graphic designers used to demonstrate graphic elements.
						</p>
						<div class="btn-part mt-45">
							<a class="readon consultant discover orange-more" href="about.html">Discover More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-img">
						<img src="assets/images/about/home4/about-1.png" alt="images">
						<div class="animations one">
							<img class="dance2" src="assets/images/about/home4/1.png" alt="About">
						</div>
						<div class="animations two">
							<img class="scale" src="assets/images/about/home4/2.png" alt="About">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About Section End -->

	<!-- Services Section Start -->
	<div class="rs-services main-home services-style1 home-4-style bg7 pt-95 pb-100 md-pt-70 md-pb-65">
		<div class="container">
			<div class="sec-title3 text-center mb-65 md-mb-45">
				<span class="sub-title">Valued Services</span>
				<h2 class="title pb-25">
					Managed IT, Software, Voice & Data <br> Services for Your Organization.
				</h2>
				<div class="heading-border-line"></div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 mb-65">
					<div class="services-item">
						<div class="services-icon">
							<img src="assets/images/services/style6/1.png" alt="Services">
						</div>
						<div class="services-text">
							<h2 class="title"><a href="business-planning.html">Business Planning</a></h2>
							<p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
							<div class="serial-number">
								01
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-65">
					<div class="services-item">
						<div class="services-icon">
							<img src="assets/images/services/style6/2.png" alt="Services">
						</div>
						<div class="services-text">
							<h2 class="title"><a href="tax-strategy.html">Tax Strategy</a></h2>
							<p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
							<div class="serial-number">
								02
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-65">
					<div class="services-item">
						<div class="services-icon">
							<img src="assets/images/services/style6/3.png" alt="Services">
						</div>
						<div class="services-text">
							<h2 class="title"><a href="financial-advices.html">Financial Advices</a></h2>
							<p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
							<div class="serial-number">
								03
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 md-mb-65">
					<div class="services-item">
						<div class="services-icon">
							<img src="assets/images/services/style6/4.png" alt="Services">
						</div>
						<div class="services-text">
							<h2 class="title"><a href="insurance-strategy.html">Insurance Strategy</a></h2>
							<p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
							<div class="serial-number">
								04
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 sm-mb-65">
					<div class="services-item">
						<div class="services-icon">
							<img src="assets/images/services/style6/5.png" alt="Services">
						</div>
						<div class="services-text">
							<h2 class="title"><a href="start-ups.html">Start Ups</a></h2>
							<p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
							<div class="serial-number">
								05
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<div class="services-icon">
							<img src="assets/images/services/style6/6.png" alt="Services">
						</div>
						<div class="services-text">
							<h2 class="title"><a href="manage-investment.html">Manage Investment</a></h2>
							<p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
							<div class="serial-number">
								06
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Services Section End -->

	<!-- Project Section Start -->
	<div class="rs-project home4-responsive">
		<div class="row">
			<div class="col-lg-7 padding-0">
				<div class="images-part">
					<img src="assets/images/project/portfolio.jpg" alt="Portfolio">
				</div>
			</div>
			<div class="col-lg-5 padding-0">
				<div class="features-content">
					<div class="sec-title3 mb-35 md-mb-25">
						<span class="sub-text">Projects</span>
						<h2 class="title pb-25">
							We work with you to build, grow and accelerate brand
						</h2>
						<div class="desc pb-17">
							We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.
						</div>
					</div>
					<ul class="rs-features-list">
						<li>
							<i class="fa fa-check"></i>
							<span class="feature-text">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. </span>
						</li>
						<li>
							<i class="fa fa-check"></i>
							<span class="feature-text">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. </span>
						</li>
						<li>
							<i class="fa fa-check"></i>
							<span class="feature-text">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. </span>
						</li>
						<li class="btn-part mt-40">
							<a class="readon consultant discover orange-more" href="about.html">View Projects</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Project Section End -->

	<!-- Why Choose Section Start -->
	<div class="rs-why-choose style1">
		<div class="row">
			<div class="col-lg-7 padding-0 order-last">
				<div class="choose-img">
					<img src="assets/images/choose/statistics.jpg" alt="Choose">
				</div>
			</div>
			<div class="col-lg-5 bg15 padding-0">
				<div class="choose-content">
					<div class="sec-title3 mb-35">
						<span class="sub-title">Why choose us</span>
						<h2 class="title pb-25">
							A right choice that makes the difference to others
						</h2>
						<div class="heading-border-line left-style"></div>
						<div class="desc pt-50 pb-17">
							We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.
						</div>
					</div>
					<!-- Skillbar Section Start -->
					<div class="rs-skillbar style1 home4-skillbar-style">
						<div class="cl-skill-bar">
							<!-- Start Skill Bar -->
							<span class="skillbar-title">Business Planning</span>
							<div class="skillbar" data-percent="90">
								<p class="skillbar-bar"></p>
								<span class="skill-bar-percent"></span>
							</div>
							<!-- Start Skill Bar -->
							<span class="skillbar-title">Financial Advices</span>
							<div class="skillbar" data-percent="85">
								<p class="skillbar-bar"></p>
								<span class="skill-bar-percent"></span>
							</div>
							<!-- Start Skill Bar -->
							<span class="skillbar-title">Investment Strategy</span>
							<div class="skillbar" data-percent="75">
								<p class="skillbar-bar"></p>
								<span class="skill-bar-percent"></span>
							</div>
							<!-- Start Skill Bar -->
							<span class="skillbar-title">Business Security</span>
							<div class="skillbar margin-no" data-percent="65">
								<p class="skillbar-bar"></p>
								<span class="skill-bar-percent"></span>
							</div>
						</div>
					</div>
					<!-- Skillbar Section End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Why Choose Section Start -->

	<!-- Team Section Start -->
	<div class="rs-team style4 home-4-team-style bg17 pt-95 pb-100 md-pt-65 md-pb-70">
		<div class="container">
			<div class="sec-title3 text-center mb-35">
				<span class="sub-title">Expert People</span>
				<h2 class="title pb-25">
					Our Team Members
				</h2>
				<div class="heading-border-line"></div>
			</div>
			<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true" data-lg-device="3">
				<div class="team-item-wrap">
					<div class="team-wrap">
						<div class="image-inner">
							<a href="team-single.html"><img src="assets/images/team/1.jpg" alt=""></a>
						</div>
					</div>
					<div class="team-content text-center">
						<h4 class="person-name"><a href="team-single.html">Angelina Jolie</a></h4>
						<span class="designation">Business Advisor</span>
					</div>
				</div>
				<div class="team-item-wrap">
					<div class="team-wrap">
						<div class="image-inner">
							<a href="team-single.html"><img src="assets/images/team/2.jpg" alt=""></a>
						</div>
					</div>
					<div class="team-content text-center">
						<h4 class="person-name"><a href="team-single.html">Morgan Freeman</a></h4>
						<span class="designation">Senior Consultant</span>
					</div>
				</div>
				<div class="team-item-wrap">
					<div class="team-wrap">
						<div class="image-inner">
							<a href="team-single.html"><img src="assets/images/team/3.jpg" alt=""></a>
						</div>
					</div>
					<div class="team-content text-center">
						<h4 class="person-name"><a href="team-single.html">Natalie Portman</a></h4>
						<span class="designation">Web Developer</span>
					</div>
				</div>
				<div class="team-item-wrap">
					<div class="team-wrap">
						<div class="image-inner">
							<a href="team-single.html"><img src="assets/images/team/4.jpg" alt=""></a>
						</div>
					</div>
					<div class="team-content text-center">
						<h4 class="person-name"><a href="team-single.html">Christian Bale</a></h4>
						<span class="designation">Digital Marketer</span>
					</div>
				</div>
				<div class="team-item-wrap">
					<div class="team-wrap">
						<div class="image-inner">
							<a href="team-single.html"><img src="assets/images/team/5.jpg" alt=""></a>
						</div>
					</div>
					<div class="team-content text-center">
						<h4 class="person-name"><a href="team-single.html">Matt Damon</a></h4>
						<span class="designation">Finance Consultant</span>
					</div>
				</div>
				<div class="team-item-wrap">
					<div class="team-wrap">
						<div class="image-inner">
							<a href="team-single.html"><img src="assets/images/team/6.jpg" alt=""></a>
						</div>
					</div>
					<div class="team-content text-center">
						<h4 class="person-name"><a href="team-single.html">Mila Kunis</a></h4>
						<span class="designation">CEO & Founder</span>
					</div>
				</div>
				<div class="team-item-wrap">
					<div class="team-wrap">
						<div class="image-inner">
							<a href="team-single.html"><img src="assets/images/team/1.jpg" alt=""></a>
						</div>
					</div>
					<div class="team-content text-center">
						<h4 class="person-name"><a href="team-single.html">Angelina Jolie</a></h4>
						<span class="designation">Business Advisor</span>
					</div>
				</div>
				<div class="team-item-wrap">
					<div class="team-wrap">
						<div class="image-inner">
							<a href="team-single.html"><img src="assets/images/team/2.jpg" alt=""></a>
						</div>
					</div>
					<div class="team-content text-center">
						<h4 class="person-name"><a href="team-single.html">Morgan Freeman</a></h4>
						<span class="designation">Senior Consultant</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Team Section End -->

	<!-- Testimonial Section Start -->
	<div class="rs-testimonial style4 home4-testi-style bg22">
		<div class="testimonial-overly-bg pt-95 pb-100 md-pt-65 md-pb-70">
			<div class="container custom">
				<div class="sec-title3 text-center mb-35">
					<span class="sub-title">Testimonials</span>
					<h2 class="title pb-25 white-color">
						Customers Reviews
					</h2>
					<div class="heading-border-line"></div>
				</div>
				<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
					<div class="testi-item">
						<div class="testi-wrap">
							<div class="image-wrap">
								<img src="assets/images/testimonial/avatar/1.jpg" alt="Testimonial">
							</div>
							<div class="item-contents">
								<p>Customer support is excellent and documentation good – novice can easily understand. Although I had a problem with the performance, thanks to the customer support, we have solved this problem as well.</p>
							</div>
							<div class="testi-information">
								<div class="testi-name">David Warner</div>
								<span class="testi-title">Envato User</span>
							</div>
						</div>
					</div>
					<div class="testi-item">
						<div class="testi-wrap">
							<div class="image-wrap">
								<img src="assets/images/testimonial/avatar/2.jpg" alt="Testimonial">
							</div>
							<div class="item-contents">
								<p> These guys are awesome! Each time I needed their help, their response was quick and very helpful. Also, the theme is very flexible. Five stars from me for everything! I truly recommend this theme!!! </p>
							</div>
							<div class="testi-information">
								<div class="testi-name">Angelina Jolie</div>
								<span class="testi-title">Envato Advisor</span>
							</div>
						</div>
					</div>
					<div class="testi-item">
						<div class="testi-wrap">
							<div class="image-wrap">
								<img src="assets/images/testimonial/avatar/3.jpg" alt="Testimonial">
							</div>
							<div class="item-contents">
								<p>The theme is fine. It is customizable and its demos are great. The education plugin also works fine. But, although I like it so much, I want to point out a few shortcomings. Theme is appropriate, I agree.</p>
							</div>
							<div class="testi-information">
								<div class="testi-name">Megan Fox</div>
								<span class="testi-title">Senior CEO</span>
							</div>
						</div>
					</div>
					<div class="testi-item">
						<div class="testi-wrap">
							<div class="image-wrap">
								<img src="assets/images/testimonial/avatar/4.jpg" alt="Testimonial">
							</div>
							<div class="item-contents">
								<p>These guys are awesome! Each time I needed their help, their response was quick and very helpful. Also, the theme is very flexible. Five stars from me for everything! I truly recommend this theme!!!</p>
							</div>
							<div class="testi-information">
								<div class="testi-name">Nicole Kidman</div>
								<span class="testi-title">Envato Author</span>
							</div>
						</div>
					</div>
					<div class="testi-item">
						<div class="testi-wrap">
							<div class="image-wrap">
								<img src="assets/images/testimonial/avatar/1.jpg" alt="Testimonial">
							</div>
							<div class="item-contents">
								<p>Customer support is excellent and documentation good – novice can easily understand. Although I had a problem with the performance, thanks to the customer support, we have solved this problem as well.</p>
							</div>
							<div class="testi-information">
								<div class="testi-name">David Warner</div>
								<span class="testi-title">Envato User</span>
							</div>
						</div>
					</div>
					<div class="testi-item">
						<div class="testi-wrap">
							<div class="image-wrap">
								<img src="assets/images/testimonial/avatar/2.jpg" alt="Testimonial">
							</div>
							<div class="item-contents">
								<p> These guys are awesome! Each time I needed their help, their response was quick and very helpful. Also, the theme is very flexible. Five stars from me for everything! I truly recommend this theme!!! </p>
							</div>
							<div class="testi-information">
								<div class="testi-name">Angelina Jolie</div>
								<span class="testi-title">Envato Advisor</span>
							</div>
						</div>
					</div>
					<div class="testi-item">
						<div class="testi-wrap">
							<div class="image-wrap">
								<img src="assets/images/testimonial/avatar/3.jpg" alt="Testimonial">
							</div>
							<div class="item-contents">
								<p>The theme is fine. It is customizable and its demos are great. The education plugin also works fine. But, although I like it so much, I want to point out a few shortcomings. Theme is appropriate, I agree.</p>
							</div>
							<div class="testi-information">
								<div class="testi-name">Megan Fox</div>
								<span class="testi-title">Senior CEO</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial Section End -->

	<!-- Contact Section Start -->
	<div class="rs-contact contact-style2 pt-100 pb-100 md-pt-70 md-pb-70">
		<div class="container custom">
			<div class="row y-middle">
				<div class="col-lg-6 md-mb-50">
					<div class="contact-img">
						<img src="assets/images/contact/contact-h4.jpg" alt="Contact">
					</div>
				</div>
				<div class="col-lg-6 pl-40 md-pl-15">
					<div class="contact-wrap">
						<div class="sec-title3 mb-35">
							<span class="sub-title">Contact Us</span>
							<h2 class="title pb-25">
								Let us help your business to move forward.
							</h2>
							<div class="heading-border-line left-style"></div>
						</div>
						<div id="form-messages"></div>
						<form id="contact-form" method="post" action="https://reactheme.com/products/html/bizup/mailer.php">
							<fieldset>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 mb-30">
										<input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 mb-30">
										<input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 mb-30">
										<input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 mb-30">
										<input class="from-control" type="text" id="Website" name="subject" placeholder="Your Website" required="">
									</div>

									<div class="col-lg-12 mb-30">
										<textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
									</div>
								</div>
								<div class="btn-part">
									<div class="form-group mb-0">
										<input class="readon submit orange-submit" type="submit" value="Submit Now">
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Section End -->

	<!-- Blog Start -->
	<div class="rs-blog style2 home3-blog-style home4-blog-style bg19 pt-95 pb-100 md-pt-65 md-pb-70">
		<div class="container">
			<div class="row y-middle">
				<div class="col-lg-6 mb-50">
					<div class="sec-title3">
						<span class="sub-title">Latest News</span>
						<h2 class="title pb-25">
							Read Latest Updates
						</h2>
						<div class="heading-border-line left-style"></div>
					</div>
				</div>
				<div class="col-lg-6 mb-50">
					<div class="btn-part text-right md-left">
						<a class="readon consultant discover orange-more" href="about.html">View Updates</a>
					</div>
				</div>
			</div>
			<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
				<div class="blog-item">
					<div class="image-wrap">
						<a href="blog-details-2.html"><img src="assets/images/blog/1.jpg" alt="Blog"></a>
					</div>
					<div class="blog-content">
						<ul class="blog-meta mb-10">
							<li class="admin"> <i class="fa fa-user-o"></i> admin</li>
							<li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
						</ul>
						<h3 class="blog-title"><a href="blog-details.html">Customer Onboarding Strategy: A Guide to Class</a></h3>
						<p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
					</div>
				</div>
				<div class="blog-item">
					<div class="image-wrap">
						<a href="blog-details-2.html"><img src="assets/images/blog/2.jpg" alt="Blog"></a>
					</div>
					<div class="blog-content">
						<ul class="blog-meta mb-10">
							<li class="admin"> <i class="fa fa-user-o"></i> admin</li>
							<li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
						</ul>
						<h3 class="blog-title"><a href="blog-details.html">How to plan a fail-proof website redesign strategy</a></h3>
						<p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
					</div>
				</div>
				<div class="blog-item">
					<div class="image-wrap">
						<a href="blog-details-2.html"><img src="assets/images/blog/3.jpg" alt="Blog"></a>
					</div>
					<div class="blog-content">
						<ul class="blog-meta mb-10">
							<li class="admin"> <i class="fa fa-user-o"></i> admin</li>
							<li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
						</ul>
						<h3 class="blog-title"><a href="blog-details.html">How investing in dependend increasing to business</a></h3>
						<p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
					</div>
				</div>
				<div class="blog-item">
					<div class="image-wrap">
						<a href="blog-details-2.html"><img src="assets/images/blog/4.jpg" alt="Blog"></a>
					</div>
					<div class="blog-content">
						<ul class="blog-meta mb-10">
							<li class="admin"> <i class="fa fa-user-o"></i> admin</li>
							<li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
						</ul>
						<h3 class="blog-title"><a href="blog-details.html">7 Productivity tips to avoid burnout when working</a></h3>
						<p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
					</div>
				</div>
				<div class="blog-item">
					<div class="image-wrap">
						<a href="blog-details-2.html"><img src="assets/images/blog/5.jpg" alt="Blog"></a>
					</div>
					<div class="blog-content">
						<ul class="blog-meta mb-10">
							<li class="admin"> <i class="fa fa-user-o"></i> admin</li>
							<li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
						</ul>
						<h3 class="blog-title"><a href="blog-details.html">Email marketing tips that will increase your sales</a></h3>
						<p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
					</div>
				</div>
				<div class="blog-item">
					<div class="image-wrap">
						<a href="blog-details-2.html"><img src="assets/images/blog/6.jpg" alt="Blog"></a>
					</div>
					<div class="blog-content">
						<ul class="blog-meta mb-10">
							<li class="admin"> <i class="fa fa-user-o"></i> admin</li>
							<li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
						</ul>
						<h3 class="blog-title"><a href="blog-details.html">How to maintain customer relations disaster strikes</a></h3>
						<p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
					</div>
				</div>
				<div class="blog-item">
					<div class="image-wrap">
						<a href="blog-details-2.html"><img src="assets/images/blog/1.jpg" alt="Blog"></a>
					</div>
					<div class="blog-content">
						<ul class="blog-meta mb-10">
							<li class="admin"> <i class="fa fa-user-o"></i> admin</li>
							<li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
						</ul>
						<h3 class="blog-title"><a href="blog-details.html">How to plan a fail-proof website redesign strategy</a></h3>
						<p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Blog End -->
	</div>
	<!-- Main content End -->
<?php get_footer(); ?>