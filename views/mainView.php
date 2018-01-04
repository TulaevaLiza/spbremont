<?php include_once ROOT.'/views/header.php';?>

<?php  include_once ROOT.'/views/slider.php';?>

<main>
    <section class="section white">
			<div class="inner welcome">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
                                                    <article>
                                                        <header>
							<h1><?php echo $data['title']; ?></h1>
                                                        </header>
							<p class="text-light"><?php echo $data['text']; ?></p>
                                                    </article>>
						</div> <!-- end .col-sm-6 -->
						<div class="col-sm-4 clearfix">
							<div class="quickquote">
								<form action="/" method="post" id="contact-form">
									<fieldset>
										<legend>Заявка на смету</legend>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">													
													<input type="text" id="contact-name" name="contact-name" placeholder="Имя" required>
												</div> <!-- end .form-group -->
											</div> <!-- end .col-sm-12 -->
											<div class="col-sm-12">
												<div class="form-group">													
													<input type="text" id="contact-phone" name="contact-phone" placeholder="Телефон" required>
												</div> <!-- end .form-group -->
											</div> <!-- end .col-sm-12 -->
											<div class="col-sm-12">
												<div class="form-group">													
													<textarea name="contact-message" id="contact-message" placeholder="Заявка" required rows="3"></textarea>
												</div> <!-- end .form-group -->
											</div> <!-- end .col-sm-12 -->
										</div> <!-- end .row -->
									</fieldset>
									<button type="submit" class="button">Отправить</button>
									<div id="contact-loading" class="alert alert-info form-alert">
										<span class="message">Отправка...</span>
									</div>
									<div id="contact-success" class="alert alert-success form-alert">
										<span class="message">Успешно!</span>
									</div>
									<div id="contact-error" class="alert alert-danger form-alert">
										<span class="message">Ошибка!</span>
									</div>
								</form>
							</div>
						</div> <!-- end .col-sm-6 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
    </section> <!-- end .section -->

    <section class="calltoaction">
			<div class="container ">
				<p class="content">
					<i class="featured-icon et-line icon-layers "></i> МЫ ПРЕДЛАГАЕМ ПОЛНЫЙ СПЕКТР УСЛУГ ПО РЕМОНТУ КВАРТИР И ОФИСОВ
				</p>

				<a class="cmo-button medium " href="/услуги/"><span>ВСЕ УСЛУГИ</span></a>

			</div>
    </section>

    <section class="serv-section">
			<div class="container">
				<h2><small>Ремонт и отделка</small> услуги</h2>
				<div class="row">
                                    <?php foreach ($data['items'] as $rw):?>
                                    <?php if($rw['is_main']):?>
		            <div class="col-sm-3">
                                <div class="wpb_single_image vc_align_left"><a href="<?php echo $rw['link']; ?>">
                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="640" height="400" src="/template/images/img03.jpg" class="vc_single_image-img attachment-large" alt="<?php echo $rw['title']; ?>"></div>
	                    </a></div>
	                    <div class="serv-item">
	                        <a href="<?php echo $rw['link']; ?>"><h2><?php echo $rw['title']; ?></h2></a>
	                     </div>
	                    <div class="serv-desc">
	                        
	                            <p><?php echo $rw['short_text']; ?></p>

	                    </div>
		            </div>
                                    <?php endif;?>
                                    <?php endforeach; ?>
		        </div>
		    </div>
    </section>
		<!-- End Section Serv -->

<?php include_once ROOT.'/views/portfolio.php'?>                

		<section class="section white no-padding-bottom">
			<div class="inner">
				<div class="container">
					<div class="row aligned-cols">
						<div class="col-sm-8">
                                                    <?php echo $data['text2'];?>
						</div> <!-- end .col-sm-8 -->
						<div class="col-sm-4 aligned-bottom">
							<img src="/template/images/man.png" alt="man" class="img-responsive">
						</div> <!-- end .col-sm-4 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
                </section>
               <!-- end .section -->


<?php //include_once ROOT.'/views/countersForMain.php'?>

		<section class="section white blogmain">
			<div class="inner">
				<div class="container">
					<h2><small>Блог</small>Как Сделать Ремонт</h2>
					
					<div class="row">
                                            <?php foreach($data['blogs'] as $rw): ?>
						<div class="col-sm-4">
							<div class="blog-post">
                                                            <a href="<?php echo $rw['link']; ?>"><img src="/template/images/blog-post01.png" alt="alt text" class="img-responsive center-block"></a>
								<div class="content">
									<div class="blog-icon"><i class="icon-picture"></i></div>
									<div class="blog-post-header">
										<h6><a href="<?php echo $rw['link']; ?>"><?php echo $rw['title']; ?></a></h6>
										<ul class="list-inline">
											<li><i class="icon-calendar"></i><?php echo $rw['date_format']; ?></li>
											<!-- <li><i class="icon-speech"></i>10 Comments</li> -->
										</ul>
									</div> <!-- end .blog-post-header -->
									<p><?php echo $rw['short_text']; ?></p>
								</div> <!-- end .content -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .col-sm-4 -->
                                            <?php endforeach; ?>
					</div>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->

		<section class="section brown">
			<div class="inner">
				<div class="container">
					<h2><small>Отзывы</small>О ремонте квартир и офисов</h2>
					<div class="testimonial-slider owl-carousel">
                                            <?php foreach ($data['reviews'] as $rw): ?>
						<div class="testimonial">
							<div class="quote"><?php echo $rw['short_text']; ?></div>
							<div class="author">
								<div class="image"><img src="/template/images/testimonial2.png" alt="Chris Evans" class="img-responsive"></div>
								<h6><?php echo $rw['author']; ?></h6>
								<span><?php echo $rw['subject']; ?></span>
							</div> <!-- end .author -->
						</div> <!-- end .testimonial -->
                                                <?php endforeach; ?>
					</div> <!-- end .testimonial-slider -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->





		<section class="section white small">
                    <?php include_once ROOT.'/views/partners.php'; ?>
		</section> <!-- end .section -->
</main>
<?php include_once ROOT.'/views/footer.php'; ?>