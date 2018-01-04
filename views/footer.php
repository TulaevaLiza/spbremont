		<footer class="footer" style="background-image: url('/template/images/footer-bg.png');">
			<div class="inner">
				<div class="top">
					<div class="container" itemscope itemtype="http://schema.org/GeneralContractor">
						<div class="row">
							<div class="col-sm-3">
								<img src="/template/images/logo-white.png" alt="constructor" class="footer-logo">
                                                                <h4 itemprop='name'>СПБ-Ремонт</h4>
                                                                <link itemprop="url" href='http://www.спб-ремонтпро.рф'>
								<p>Качественно сделанный ремонт квартиры – это залог комфорта и уюта в доме. Именно такой ремонт выполняют мастера СПБ-Ремонт. В копилке наших работ огромное количество удачно выполненных проектов: от простых до сложных, включающих в себя перепланировку и реализацию эксклюзивных дизайнерских проектов.</p>
<!--								<div class="footer-social-icons">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
									<a href=""><i class="fa fa-linkedin"></i></a>
									<a href=""><i class="fa fa-google-plus"></i></a>
								</div> --> <!-- end .footer-social-icons -->
							</div> <!-- end .col-sm-3 -->
							<div class="col-sm-3">
								<h4>Свяжитесь с нами</h4>
                                                                <div class="footer-contact clearfix" itemprop='address' itemscope itemtype="http://schema.org/PostalAddress">
									<i class="icon-pointer"></i>
									<div class="content">Санкт-Петербург и Ленинградская область</div>
                                                                        <meta itemprop='addressCountry' content="Россия">
                                                                        <meta itemprop='addressLocality' content="Санкт-Петербург">
                                                                        <meta itemprop='streetAddress ' content="Таврирческая ул., 17">
								</div> <!-- end .footer-contact -->
								<div class="footer-contact clearfix">
									<i class="icon-call-end"></i>
                                                                        <div class="content" itemprop="telephone">+7 (812) 98-649-68</div>
								</div> <!-- end .footer-contact -->								
								<div class="footer-contact clearfix">
									<i class="icon-envelope"></i>
									<div class="content">78129864968@yandex.ru</div>
								</div> <!-- end .footer-contact -->
							</div> <!-- end .col-sm-3 -->
							<div class="col-sm-3">
								<h4>Часы работы</h4>
                                                                
								<div class="footer-hours"  itemprop="openingHours" datetime="Mo-Su 10:00−22:00">Понедельник - Пятница :<br>10:00 - 22:00</div>
								<div class="footer-hours">Суббота :<br>10:00 - 22:00</div>
								<div class="footer-hours">Воскресение :<br>10:00 - 22:00</div>
							</div> <!-- end .col-sm-3 -->
							<div class="col-sm-3">
<!--								<h4>Our Location</h4>
								<div class="footer-map" id="footer-map"></div> -->
							</div> <!-- end .col-sm-3 -->
						</div> <!-- end .row -->
						<hr>
					</div> <!-- end .container -->
				</div> <!-- end .top -->
				<div class="bottom">
					<div class="container">
						<span>Copyright © 2017 - All Rights Reserved</span>

						<div id="back-to-top">
				          <a href="#top">Наверх <i class="fa fa-caret-up"></i></a>
				        </div>
				        <div class="clear"></div>
			        </div>
				</div> <!-- end .bottom -->
			</div> <!-- end .inner -->
		</footer> <!-- end .footer -->

<?php if(isset($pul)):?>                
<?php include_once ROOT.'/views/scripts.php';?>
<?php else: ?>                
<?php include_once ROOT.'/views/scriptsMain.php';?>
<?php endif;?>
	</body>
</html>